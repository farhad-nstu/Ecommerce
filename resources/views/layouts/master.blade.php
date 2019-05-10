<!DOCTYPE html>
<html>
<head>
	<title>Laravel Ecommerce Project</title>
	@include('partials.styles')


</head>
<body>
    
    <div class="wrapper">
    	
        

      
    @include('partials.nav')
    @yield('content')
    @include('partials.footer')

    


    </div>


	@include('partials.scripts')

</body>
</html>