@extends('admin.master')

@section('title')
    Product List
@endsection

@section('content')
    <section class="w-100">
        <h1 class="text-center pt-6 bg-blue m-0 text-light w-100" >Manage Products</h1>
        <h3 class="text-center text-success pt-4" id="success-msg" style="height: 60px">{{ Session()->get('notification') }}</h3>
        <table class="table table-striped text-center border-2 text-bold">
            <thead class="bg-dark text-light">
                <th>Id</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Action</th>
            </thead>

            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->price}}</td>
                <td class="float-left">
                    <a href="{{route('product.edit', $product->id)}}" type="button" class="btn btn-success m-2">Edit</a>
                    <a href="{{route('product.delete', $product->id)}}" type="button" class="btn btn-danger" onclick="return confirm('Are You Sure?')">Delete</a>
                </td>
            </tr>
                
            @endforeach
        </table>
    </section>
@endsection