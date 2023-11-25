@extends('admin.master')

@section('title')
    Product Add
@endsection

@section('content')
<section>
    
        <h1 class="text-center pt-6 bg-blue text-light">Add Product</h1>
        <h3 class="text-center text-success pt-4" id="success-msg" style="height: 40px">{{Session()->get('notification')}}</h3>
        <form class="p-5" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Product Quantity</label>
                <input type="text" class="form-control" name="quantity">
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="text" class="form-control" name="price">
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
          </form>
    
</section>
@endsection