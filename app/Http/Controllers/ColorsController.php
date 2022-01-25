<?php

namespace App\Http\Controllers;

use App\Models\Colors;
use App\Http\Requests\StoreColorsRequest;
use App\Http\Requests\UpdateColorsRequest;
use App\Http\Resources\ColorsResource;

class ColorsController extends Controller
{
    public function index()
    {
        $limit = 10;
        $colors =  ColorsResource::collection(Colors::paginate($limit));
        return [
            "info" => [
                "total" => $colors->total(),
                "pages" => $colors->lastPage(),
                "prev" => $colors->previousPageUrl(),
                "next" => $colors->nextPageUrl(),
            ],
            "results" => $colors,
        ];
    }

    public function show($id)
    {
        $color = Colors::findOrFail($id);
        return [
            "id" => $color->id,
            "color_name" => $color->color_name,
            "color_code" => $color->color_code,
            "color_status" => $color->color_status,
            "created_at" => $color->created_at,
            "updated_at" => $color->updated_at,
            "deleted_at" => $color->deleted_at,
        ];
    }

    public function store(StoreColorsRequest $request)
    {
        $color = Colors::create($request->all());
        $color = Colors::findOrFail($color->id);
        return [
            "id" => $color->id,
            "color_name" => $color->color_name,
            "color_code" => $color->color_code,
            "color_status" => $color->color_status,
            "created_at" => $color->created_at,
            "updated_at" => $color->updated_at,
            "deleted_at" => $color->deleted_at,
        ];
    }

    public function update(UpdateColorsRequest $request, $id)
    {
        $color = Colors::findOrFail($id);
        $color->update($request->all());
        return [
            "id" => $color->id,
            "color_name" => $color->color_name,
            "color_code" => $color->color_code,
            "color_status" => $color->color_status,
            "created_at" => $color->created_at,
            "updated_at" => $color->updated_at,
            "deleted_at" => $color->deleted_at,
        ];
    }

    public function destroy($id)
    {
        $color = Colors::findOrFail($id);
        $color->delete();
        return ["message" => "Successfully Deleted"];
    }
}
