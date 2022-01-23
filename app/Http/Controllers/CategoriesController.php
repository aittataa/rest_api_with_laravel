<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Http\Requests\StoreCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;
use App\Http\Resources\CategoriesResource;

class CategoriesController extends Controller
{
    public function index()
    {
        return CategoriesResource::collection(Categories::all());
    }

    public function show(Categories $category, $id)
    {
        $category = Categories::findOrFail($id);
        return [
            "id" => $category->id,
            "category_name" => $category->category_name,
            "category_image" => $category->category_image,
            "category_status" => $category->category_status,
            "created_at" => $category->created_at,
            "updated_at" => $category->updated_at,
            //"deleted_at" => $category->deleted_at,
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
            //"deleted_at" => $category->deleted_at,
        ];
        //return new CategoriesResource($category);
    }

    public function update(UpdateCategoriesRequest $request, Categories $category)
    {
        $category = Categories::findOrFail($category->id);
        $category->update($request->all());
        return [
            "id" => $category->id,
            "category_name" => $category->category_name,
            "category_image" => $category->category_image,
            "category_status" => $category->category_status,
            "created_at" => $category->created_at,
            "updated_at" => $category->updated_at,
            //"deleted_at" => $category->deleted_at,
        ];
        //return new CategoriesResource($category);
    }

    public function destroy(Categories $category)
    {
        $category->delete();
        return [
            "message" => "Successfully Deleted",
        ];
        //return response("Successfully Deleted");
    }
}
