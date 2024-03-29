<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Login</title>
  <!-- loader-->
  <link href="{{ asset('admin') }}/assets/css/pace.min.css" rel="stylesheet"/>
  <script src="{{ asset('admin') }}/assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="{{ asset('admin') }}/assets/images/logo_E_SERVICE no bg.png" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('admin') }}/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('admin') }}/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('admin') }}/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="{{ asset('admin') }}/assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-blue" style=" background-color: #d3ebfb ">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
	<div class="card card-authentication1 mx-auto my-3">
		<div class="card-body" style="background-color: #68b6ef ">
		 <div class="card-content">
		 	<div class="text-center py-3">
		 		<img height='150' width='200' src="{{asset('admin/assets/images/logo_E_SERVICE no bg.png')}}">
		 	</div>
		    <form>
			  <div class="form-group">
			  <label for="exampleInputUsername" class="sr-only">Username</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="exampleInputUsername" class="form-control input-shadow" placeholder="Username">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputPassword" class="sr-only">Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" id="exampleInputPassword" class="form-control input-shadow" placeholder="Password">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			<div class="form-row">
			 </div>
			 <button type="button" class="btn btn-light btn-block">LOGIN</button>
             <div class="form-group col-6 text-align-left">
                <a href="reset-password.html">Forgot Password</a>
               </div>
			 </form>
       <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">Belum Punya Akun? <a href="register.html"> Daftar </a></p>
		  </div>
		   </div>
		  </div>
		  {{-- <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">Belum Punya Akun? <a href="register.html"> Daftar </a></p>
		  </div> --}}
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
  
      <p class="#68b6ef">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
	
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('admin') }}/assets/js/jquery.min.js"></script>
  <script src="{{ asset('admin') }}/assets/js/popper.min.js"></script>
  <script src="{{ asset('admin') }}/assets/js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="{{ asset('admin') }}/assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="{{ asset('admin') }}/assets/js/app-script.js"></script>
  
</body>
</html>
