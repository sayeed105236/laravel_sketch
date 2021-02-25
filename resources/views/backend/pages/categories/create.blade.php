@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">


      <div class="card-header">
        Add Category

      </div>
      <div class="card-body">
          @include('backend.partials.messages')
        <form action="{{ route('admin.category.store')}}" method="post" enctype="multipart/form-data">
          @csrf

          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter category name" required >

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Description</label>

            <textarea name="description" rows="8" cols="80" class="form-control" ></textarea>

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">parent Category (optional)</label>

            <select class="form-control" name="parent_id">
                <option value="">Please select a Parent Category</option>
              <?php foreach ($main_categories as $category): ?>
                <option value="{{ $category->id}}">{{$category->name}}</option>

              <?php endforeach; ?>

            </select>

          </div>


          <div class="form-group">
            <label for="product_image">Category Image (optional)</label>
            <input type="file" class="form-control" name="image" id="image">

          </div>

          <button type="submit" class="btn btn-primary">Add Categories</button>
        </form>

      </div>

    </div>
  <!-- partial -->
</div>
</div>

<!-- main-panel ends -->

@endsection
