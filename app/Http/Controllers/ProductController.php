<?php

// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Show form
    public function create()
    {
        return view('products.create');
    }

    // Store data
    public function store(Request $request)
    {
        // Validate request
        $validated = $request->validate([
            'product' => 'required|string|max:255',
            'description' => 'nullable|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'stocks' => 'required|in:available,out_of_stock',
            'price' => 'required|numeric',
            'status' => 'nullable|boolean',
        ]);

        // Handle file upload
        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('images/products', 'public');
            $validated['picture'] = $path;
        }

        // Create product
        $product = Product::create($validated);

        // Redirect or return response
        return redirect()->route('posts.create')->with('success', 'Product added successfully.');
    }

    public function insert(Request $request) 
    {
        dd($request->toArray());
        
    }
}
