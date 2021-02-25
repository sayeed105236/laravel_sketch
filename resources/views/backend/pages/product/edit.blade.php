@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Edit Product

      </div>
      <div class="card-body">
        <form action="{{ route('admin.product.update',$product->id)}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $product->title}}"  required>

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Description</label>

            <textarea name="description" rows="8" cols="80" class="form-control" required>{{$product->description }}</textarea>

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="number" class="form-control" name="price" value="{{$product->price}}">

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Quantity</label>
            <input type="number" class="form-control" name="quantity"  value="{{$product->quantity}}">

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Select Catgory</label>
            <select class="form-control" name="category-id">
              <option value="">Please Select a Category</option>
            <?php foreach (App\Models\Category::orderBy('name','asc')->where('parent_id',NULL)->get() as $parent): ?>
                <option value="{{$parent->id}}"{{$parent->id == $product->category->id? 'selected' : ''}}>{{$parent->name}}</option>
                <?php foreach (App\Models\Category::orderBy('name','asc')->where('parent_id',$parent->id)->get() as $child): ?>
                  <option value="{{$child->id}}"{{$child->id == $product->category->id? 'selected' : ''}}> -----> {{$child->name}}</option>
                <?php endforeach; ?>
              <?php endforeach; ?>

            </select>

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Select brand</label>
            <select class="form-control" name="brand-id">
              <option value="">Please Select a Brand</option>
            <?php foreach (App\Models\Brand::orderBy('name','asc')->get() as $br): ?>
                <option value="{{$br->id}}"{{ $br->id==$product->brand->id ? 'selected' : ''}}>{{$br->name}}</option>

              <?php endforeach; ?>

            </select>

          </div>
          <div class="form-group">
            <label for="product_image">Product Image</label>
            <input type="file" class="form-control" name="product_image" id="product_image">

          </div>

          <button type="submit" class="btn btn-primary">Update Products</button>
        </form>

      </div>

    </div>
  <!-- partial -->
</div>
</div>

<!-- main-panel ends -->

@endsection
