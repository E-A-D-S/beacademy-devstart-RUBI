<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }
   
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['category_id'] = $request->categories;
        
        if($request->image){
            $file = $request['image'];
            $path = $file->store('img/products', 'public');
            $data['image'] = $path;
        }
        $this->product->create($data);
        
        return redirect()->route('products.create')->with('success', 'Produto cadastrado com sucesso!!!');
    }

    public function show($id)
    {
        $products = Product::find($id);
        return view('products.show', compact('products'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
}
