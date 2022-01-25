<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Http\Requests\StoreCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;
use App\Http\Resources\CategoriesResource;
use App\Http\Resources\WallpapersResource;

class CategoriesController extends Controller
{
    public function index()
    {
        $limit = 10;
        $categories =  CategoriesResource::collection(Categories::paginate($limit));
        return [
            "info" => [
                "total" => $categories->total(),
                "pages" => $categories->lastPage(),
                "prev" => $categories->previousPageUrl(),
                "next" => $categories->nextPageUrl(),
            ],
            "results" => $categories,
        ];
    }

    public function show($id)
    {
        $category = Categories::findOrFail($id);
        return [
            "id" => $category->id,
            "category_name" => $category->category_name,
            "category_image" => $category->category_image,
            "category_status" => $category->category_status,
            "created_at" => $category->created_at,
            "updated_at" => $category->updated_at,
            "deleted_at" => $category->deleted_at,
            //"wallpaperts" => WallpapersResource::collection($category->wallpapers),
        ];
    }

    public function store(StoreCategoriesRequest $request)
    {
        $category = Categories::create($request->all());
        $category = Categories::findOrFail($category->id);
        return [
            "id" => $category->id,
            "category_name" => $category->category_name,
            "category_image" => $category->category_image,
            "category_status" => $category->category_status,
            "created_at" => $category->created_at,
            "updated_at" => $category->updated_at,
            "deleted_at" => $category->deleted_at,
            //"wallpaperts" => WallpapersResource::collection($category->wallpapers),
        ];
    }

    public function update(UpdateCategoriesRequest $request, $id)
    {
        $category = Categories::findOrFail($id);
        $category->update($request->all());
        return [
            "id" => $category->id,
            "category_name" => $category->category_name,
            "category_image" => $category->category_image,
            "category_status" => $category->category_status,
            "created_at" => $category->created_at,
            "updated_at" => $category->updated_at,
            "deleted_at" => $category->deleted_at,
            //"wallpaperts" => WallpapersResource::collection($category->wallpapers),
        ];
    }

    public function destroy($id)
    {
        $category = Categories::findOrFail($id);
        $category->delete();
        return ["message" => "Successfully Deleted"];
    }
}
