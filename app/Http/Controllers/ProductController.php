<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product.index')->with('products',Product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'givers_name' => 'required|string',
            'product_name' => 'required|string',
            'givers_email' => 'required|email',
            'product_bio' => 'required|string',
            'product_price' => 'required|string',
            'product_image' => 'required|image',
        ]);

        $product_image = $request->product_image;
        $new_product_image_name = time().$product_image->getClientOriginalName();
        $product_image->move('upload/product',$new_product_image_name);



        Product::create([
            'givers_name' => $request->givers_name,
            'giver_area' => $request->giver_area,
            'giver_phoneno' => $request->giver_phoneno,
            'givers_email' => $request->givers_email,
            'product_name' => $request->product_name,
            'product_bio' => $request->product_bio,
            'product_price' => $request->product_price,
            'product_image' => 'upload/product/'.$new_product_image_name,
        ]);



        return  redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.product.edit')->with('product',Product::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $this->validate($request,[
            'givers_name' => 'required|string',
            'product_name' => 'required|string',
            'givers_email' => 'required|string',
            'product_bio' => 'required|string',
            'product_price' => 'required|string',
            'product_image' => 'required|image'
        ]);
        $product = Product::find($id);

        if ($request->hasFile('product_image')) {
            $product_image= $request->product_image;
            $product_image_new_name = time().$product_image->getClientOriginalName();
            $product_image->move('upload/product',$product_image_new_name);
            $product->product_image = 'upload/product/'. $product_image_new_name;
        }
        $product->givers_name = $request->givers_name;
        $product->product_name = $request->product_name;
        $product->givers_email = $request->givers_email;
        $product->product_bio = $request->product_bio;
        $product->product_price = $request->product_price;

        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('product.index');
    }
}
