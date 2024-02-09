<?php
// ProductController.php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
 public function index()
 {
 $products = Product::all();
 return view('products.index', compact('products'));
 }
// Implement other methods like create, store, edit, update, destroy as needed
}