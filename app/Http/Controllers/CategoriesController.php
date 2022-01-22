<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Http\Requests\StoreCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;

class CategoriesController extends Controller
{


    public function index()
    {
        return Categories::all();
    }

    public function show($id)
    {
        return Categories::findOrFail($id);
    }

    public function store(StoreCategoriesRequest $request)
    {
        return Categories::create($request->all());
    }

    public function update(UpdateCategoriesRequest $request, $id)
    {
        $category = Categories::findOrFail($id);
        $category->update($request->all());
        return $category;
    }

    public function destroy(Request $request, $id)
    {
        $category = Categories::findOrFail($id);
        $category->delete();
        return response("Successfully Deleted");
    }
}
