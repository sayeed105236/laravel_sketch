<div class="row">

  <?php foreach ($products as $key => $product): ?>
    <div class="col-md-3">

      <div class="card">
        <?php
        $i=1;

         ?>
         <?php foreach ($product->images as $image): ?>
           @if($i > 0)
           <a href="{{route('products.show',$product->slug)}}">

           <img class="card-img-top feature-img" src="{{ asset('images/products/'.$image->image)}}" alt="{{$product->title}}">
           @endif
           <?php $i--;
           
            ?>


         <?php endforeach; ?>
        <div class="card-body">
          <h4 class="card-title">
          <a href="{{route('products.show',$product->slug)}}">{{ $product->title}}</a>
          </h4>


          <p class="card-text">Taka - {{ $product->price}}</p>


          <a href="#" class="btn btn-outline-warning">Add to Cart</a>
        </div>

      </div>

    </div>


  <?php endforeach; ?>

</div>

  <div class="mt-4 pagination">
    {{ $products->links()}}

  </div>
