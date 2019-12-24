<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Message;
use Illuminate\Support\Facades\Mail;
use App\Mail\DonateMail;
use Alert;

class FrontendController extends Controller
{

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::take(3)->get();
        return view('welcome')->with('products',$products);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $donator =  $this->validate($request,[
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




        return  redirect()->route('frontend.goods');
    }

    public function message(Request $request){
     $this->validate($request,[
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);



        return  redirect()->route('frontend.index');

    }

    public function message_index(){
        return view('admin.message.index')->with('messages',Message::all());
    }

    public function goods(){
        return view('goods')->with('products',Product::all());
    }
}
