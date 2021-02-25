@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Edit category

      </div>
      <div class="card-body">
        <form action="{{ route('admin.category.update',$category->id)}}" method="post" enctype="multipart/form-data">
          @csrf

          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp"  value="{{$category->name}}" >

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Description (optional)</label>

            <textarea name="description" rows="8" cols="80" class="form-control"> {{$category->description}}</textarea>

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Parent Category (optional)</label>

            <select class="form-control" name="parent_id">
              <option value="">Please select a Primary Category</option>
              <?php foreach ($main_categories as $cat): ?>
                <option value="{{ $cat->id}}" {{$cat->id==$category->parent_id? 'selected': ''}}>{{$cat->name}}</option>

              <?php endforeach; ?>

            </select>

          </div>


          <div class="form-group">
            <label for="oldimage">Category Old Image</label> <br>
              <img src="{{asset('images/categories/'.$category->image)}}" width="100"> <br>
                  <label for="image">Category New Image (optional)</label>
            <input type="file" class="form-control" name="image" id="image">

          </div>

          <button type="submit" class="btn btn-success">Update Category</button>
        </form>

      </div>

    </div>
  <!-- partial -->
</div>
</div>

<!-- main-panel ends -->

@endsection
