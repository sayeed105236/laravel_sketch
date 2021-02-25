@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Manage Category

      </div>
      <div class="card-body">
        @include('backend.partials.messages')
      <table class="table table-hover table-striped">
        <tr>
          <th>#</th>
          <th>Category Name</th>
          <th>Category Image</th>
          <th>Parent Category</th>

          <th>Action</th>

        </tr>
        <?php foreach ($categories as $key => $category): ?>
        <tr>
          <td>#</td>
          <td>{{$category->name}}</td>
          <td>
            <img src="{{asset('images/categories/'.$category->image)}}" width="100">

          </td>
          <td>
            <?php if ($category->parent_id==NULL): ?>
              Primary Category
              <?php else: ?>
                {{$category->parent->name}}

            <?php endif; ?>
          </td>


          <td><a href="{{route('admin.category.edit', $category->id)}}" class="btn btn-success">Edit</a>
            <a href="#deleteModal{{ $category->id}}" data-toggle="modal" class="btn btn-danger">Delete</a>
            <!--Delete  Modal -->
            <div class="modal fade" id="deleteModal{{ $category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete???</h5>

                  </div>
                  <div class="modal-body">

                    <form action="{{route('admin.category.delete', $category->id)}}"  method="post">
            {{csrf_field()}}
            <button type="submit" class="btn btn-danger" >Delete</button>


          </form>


      </div>
      <div class="modal-footer">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Close</button>


      </div>
    </div>
  </div>
</div>




            </td>


        </tr>


        <?php endforeach; ?>
      </table>

      </div>

    </div>
  <!-- partial -->
</div>
</div>

<!-- main-panel ends -->

@endsection
