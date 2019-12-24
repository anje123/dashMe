@extends('layouts.app')

@section('content')
<table class="table table-hover">
   <thead>
             <th>
                Images
            </th>
            <th>
                Product Name
            </th>

            <th>
               Giver Name
            </th>
            <th>
                Edit
            </th>
            <th>
                Delete
            </th>
   </thead>

   <tbody>
       @foreach ($products as $product)
       <tr>
           <td>
            <img src="{{asset($product->product_image)}}" width="50px" height="50px" alt="product image">
           </td>
            <td>
                {{$product->product_name}}
            </td>
            <td>
                {{$product->givers_name}}
                </td>

            <td>
            <a href="{{route('product.edit',['id' => $product->id])}}"  class="btn btn-xs btn-info">Edit</a>
            </td>
            <td>
            <a href="{{route('product.delete',['id' => $product->id])}}" class="btn btn-xs btn-danger">Trash</a>
            </td>
        </tr>
       @endforeach
   </tbody>
</table>

@endsection
