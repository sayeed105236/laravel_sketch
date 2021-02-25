@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">


      <div class="card-header">
        Add Product

      </div>
      <div class="card-body">
          @include('backend.partials.messages')
        <form action="{{ route('admin.product.store')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title name" required>

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Description</label>

            <textarea name="description" rows="8" cols="80" class="form-control" required></textarea>

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="number" class="form-control" name="price" id="exampleInputEmail1"required>

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Quantity</label>
            <input type="number" class="form-control" name="quantity" id="exampleInputEmail1" required>

          </div>
          <div class="form-group" required>
            <label for="exampleInputEmail1">Select Catgory</label>
            <select class="form-control" name="category-id" required>
              <option value="">Please Select a Category</option>
            <?php foreach (App\Models\Category::orderBy('name','asc')->where('parent_id',NULL)->get() as $parent): ?>
                <option value="$parent->id">{{$parent->name}}</option>
                <?php foreach (App\Models\Category::orderBy('name','asc')->where('parent_id',$parent->id)->get() as $child): ?>
                  <option value="$child->id"> -----> {{$child->name}}</option>
                <?php endforeach; ?>
              <?php endforeach; ?>

            </select>

          </div>
          <div class="form-group" required>
            <label for="exampleInputEmail1">Select brand</label>
            <select class="form-control" name="brand-id" required>
              <option value="">Please Select a Brand</option>
            <?php foreach (App\Models\Brand::orderBy('name','asc')->get() as $brand): ?>
                <option value="$brand->id">{{$brand->name}}</option>

              <?php endforeach; ?>

            </select>

          </div>

          <div class="form-group">
            <label for="product_image">Product Image</label>
            <input type="file" class="form-control" name="product_image" id="product_image"required>

          </div>

          <button type="submit" class="btn btn-primary">Add Products</button>
        </form>

      </div>

    </div>
  <!-- partial -->
</div>
</div>

<!-- main-panel ends -->

@endsection
