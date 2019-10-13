<?php

namespace App\Http\Controllers;

use App\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductCategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $productCategory = ProductCategory::orderBy('id', 'asc')->paginate(3);
        // $productCategory = ProductCategory::orderBy('id', 'asc')->paginate();

        return view('productCategory')->with('productCategory',$productCategory);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->input(), array(
            'description' => 'required',
        ));

        if ($validator->fails()) {
            return response()->json([
                'error'    => true,
                'messages' => $validator->errors(),
            ], 422);
        }

        $category = ProductCategory::create($request->all());

        return response()->json([
            'error' => false,
            'category'  => $category,
        ], 200);
    }

    public function show($id)
    {
        $category = ProductCategory::find($id);

        return response()->json([
            'error' => false,
            'category'  => $category,
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->input(), array(
            'description' => 'required',
        ));

        if ($validator->fails()) {
            return response()->json([
                'error'    => true,
                'messages' => $validator->errors(),
            ], 422);
        }

        $category = ProductCategory::find($id);

        $category->description = $request->input('description');

        $category->save();

        return response()->json([
            'error' => false,
            'category'  => $category,
        ], 200);
    }

    public function destroy($id)
    {
        $category = ProductCategory::destroy($id);

        return response()->json([
            'error' => false,
            'category'  => $category,
        ], 200);
    }
}
