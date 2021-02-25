<div class="list-group">
  <?php foreach (App\Models\Category::orderBy('name','asc')->where('parent_id',NULL)->get() as $parent): ?>
    <a href="#main-{{$parent->id}}" class="list-group-item list-group-item-action" data-toggle="collapse">
      <img src="{{asset('images/categories/'.$parent->image)}}" width="50">
      {{$parent->name}}
    </a>
    <div class="collapse
      <?php if (Route::is('categories.show')): ?>
        <?php if (App\Models\Category::ParentOrNotCategory($parent->id,$category->id)): ?>
          show
        <?php endif; ?>

      <?php endif; ?>
    " id="main-{{$parent->id}}">
      <div class="child-rows">
        <?php foreach (App\Models\Category::orderBy('name','asc')->where('parent_id',$parent->id)->get() as $child): ?>
          <a href="{{route('categories.show',$child->id)}}" class="list-group-item list-group-item-action
            <?php if (Route::is('categories.show')): ?>
              <?php if ($child->id== $category->id): ?>
                active

              <?php endif; ?>

            <?php endif; ?>


            ">
            <img src="{{asset('images/categories/'.$child->image)}}" width="40">
            {{$child->name}}
          </a>
        <?php endforeach; ?>

      </div>

    </div>
  <?php endforeach; ?>





</div>
