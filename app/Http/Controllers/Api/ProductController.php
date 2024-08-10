<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();

        // Check if the products collection is empty
        if ($products->isEmpty()) {
            return response()->json(['message' => 'No products found'], 404);
        }

        return response()->json($products);
    }

    public function show($id)
    {
        $product = Product::with('category')->find($id);

        // Check if the product exists
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        return response()->json($product);
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|string|max:255',
        ]);

        $product = Product::create($request->only('product_category_id', 'name', 'price', 'image'));
        return response()->json($product, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_category_id' => 'sometimes|required|exists:categories,id',
            'name' => 'sometimes|required|string|max:255',
            'price' => 'sometimes|required|numeric|min:0',
            'image' => 'sometimes|nullable|string|max:255',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->only('product_category_id', 'name', 'price', 'image'));
        return response()->json($product);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(['message' => 'Product deleted successfully'], 200);
    }
}
