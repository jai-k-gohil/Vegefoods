@extends('layouts.master')

@section('title')
	Shop
@endsection

@section('content')

    <div class="hero-wrap hero-bread" style="background-image: url('{{ asset('images/bg_1.jpg') }}');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="home.blade.php">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Products</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
						@if($selectedCategory == -1)
							<li><a href="{{ route('shop') }}" class="active">All</a></li>
						@else
							<li><a href="{{ route('shop') }}">All</a></li>
						@endif
						@foreach($categories as $category)
							@if($selectedCategory == -1)
    							<li><a href="{{ route('category.products',['id' => $category->id]) }}">{{ $category->name }}</a></li>
							@else
								<li>
									<a class="{{ $category->id == $selectedCategory ? 'active':'' }}" href="{{ route('category.products',['id' => $category->id]) }}">
										{{ $category->name }}
									</a>
								</li>
							@endif
						@endforeach
    				</ul>
    			</div>
    		</div>
    		<div class="row">
				@foreach($products as $product)
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="{{ route('product',['id'=> $product->id]) }}" class="img-prod"><img class="img-fluid" src="{{ asset('images/'.$product->image) }}" alt="Product Image">
    						@if($product->discount > 0)
							<span class="status">{{ $product->discount }}%</span>
							@endif
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="{{ route('product',['id'=> $product->id]) }}">{{ $product->name }}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">${{ $product->price }}</span><span class="price-sale">${{ $product->price-40 }}</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="{{ route('product.addToCart',['id'=> $product->id]) }}" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
				@endforeach


    		</div>
    		<div class="row mt-5">
          <div class="col text-center">
			  {{ $products->links() }}
          </div>
        </div>
    	</div>
    </section>

	<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
	@include('partials.footer')
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

@endsection