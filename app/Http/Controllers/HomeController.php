<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Product;
 
class HomeController extends Controller
{
    public function index()
    {
        // Ambil data produk dari database
        $products = Product::all();

        // Kembalikan tampilan dengan variabel $products
        return view('dashboard', compact('products'));
    }
    public function indexAdmin()
    {
        // Kembalikan tampilan dengan variabel $products
        return view('admin/dashboard');
    }
}