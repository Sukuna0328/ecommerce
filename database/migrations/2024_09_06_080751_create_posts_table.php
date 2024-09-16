<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product' => 'required|string|max:255',
            'description' => 'nullable|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'stock' => 'required|in:available,out_of_stock',
            'price' => 'required|numeric',
            'status' => 'nullable|boolean',
        ]);
    
        $product = new Product();
        $product->name = $validated['name'];
        $product->description = $validated['description'];
        $product->stock = $validated['stock'];
        $product->price = $validated['price'];
        $product->status = $validated['status'] ?? false;
    
        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('images/products', 'public');
            $product->picture = $path;
        }
    
        $product->save();
    
        // Return the product data as JSON
        return response()->json($product);
    }
    
}
