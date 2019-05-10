

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


                   



                    <div class="col-md-3">
                        <div class="card">

                     

                        
                            
                        
                        <div class="card-body">
                            <h4 class="card-title"> </h4>
                            <p class="card-text"> ?> </p>
                            <a href="#" class="btn btn-outline-warning">Advertise!</a>
                        </div>
                    </div>
                    </div>


                    


                </div>
            </div>


            <div class="widget">
                
            </div>



        </div>
    </div>
</div>


<!-- End sidebar + content --> 


@endsection


