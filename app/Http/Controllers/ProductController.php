<?php
// ProductController.php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
 // Other methods…
 /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
        ]);
        Product::create($validatedData);
        return redirect()
            ->route('products.index')
            ->with('success', 'Product created successfully.');
    }
}