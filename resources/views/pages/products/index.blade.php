

    @extends('layouts.master')



    @section('content')
    

    
    <!-- start sidebar + content --> 
     
    <div class="container margin-top-20">
    	<div class="row">
            



            @include('partials.product-sidebar');


    		
    		    

             



    		

    		<div class="col-md-8">
    			

                <div class="widget">
                	<h3>Featured Products</h3>
                	<div class="row">


                        @foreach($products as $product)



                		<div class="col-md-3">
                			<div class="card">

                            @php

                            $i = 1;

                            @endphp

                            @foreach($product->images as $image)

                            @if($i > 0)
                            
                            <img class="card-img-top feature-img" src="{{ asset('images/products/'. $image->image) }}" alt=Card image">
                            
                            @endif

                            @php $i--; @endphp
                            
                            @endforeach

                            
                                <div class="card-body">
                                <h4 class="card-title"> {{ $product->title }} </h4>
                                <p class="card-text">price: {{ $product->price }} </p>
                                <a href="#" class="btn btn-outline-warning">Advertise!</a>
                            </div>
                        </div>
                		</div>


                        @endforeach


                	</div>
                </div>


                <div class="widget">
                	
                </div>



    		</div>
    	</div>
    </div>


    <!-- End sidebar + content --> 


    @endsection


  