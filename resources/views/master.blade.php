<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','student management')</title>

	

	<!--bootstrap add -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/parsley.css">

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<!-- bootstrap end -->


	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet"> 

	<!-- font-family: 'Oswald', sans-serif; -->

	<!-- google font -->
</head>
<body class="containar-fluid">
	<!--bootstrap navbar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="/" style="font-family: 'Oswald', sans-serif; color: green;">Student Management System</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  

		  @if (Auth:: check())

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item active">
		        <a href={{'https://rimonrony.info'}}  target="_blank" >Contac With Developer</a>
		    </li>    
		  </div>

		  <h4 style="margin-right: 20px;"><a href="{{'login'}}">Goto The Admin Page</a></h4>
		  			


		  			<!-- modal -->
		  			<!-- Button trigger modal -->
						<button type="button" class="btn btn-md btn-danger" data-toggle="modal" data-target="#exampleModal" style="margin-right: 20px;">
						  log out
						</button>

						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-body">
						        Are you sure to log out?
						      </div>
						      <div class="modal-footer">

						      	<div style="margin-left: 50px;">
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <button class="btn btn-sm btn-danger" data-dismiss="modal">Direct Log Out</button>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

						        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">No keep me in this page</button>
						      </div>
						    </div>
						  </div>
						</div>
		  			<!-- modal -->

		  				<!-- original direct log out page 

		  					<div style="margin-left: 50px;">
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <button class="btn btn-danger">Direct Log Out</button>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                          original direct log out page -->

		  @endif	  
						  <!-- div --
						  <div class="collapse navbar-collapse navbar-nav navbar-right">
						    <ul class="nav navbar-nav navbar-right">
						    	@if (Auth:: check())
						    	<p><button class="btn btn-md btn-success"><a href="{{'home'}}" style="text-decoration: none; color:white; margin:3px;">DashBoard</a></button>
						    	@else
						    	<p><button class="btn btn-md btn-success"><a href="{{'login'}}" style="text-decoration: none; color:white; margin:3px;">Log In</a></button>
						    	<button class="btn btn-md btn-success"><a href="{{'register'}}" style="text-decoration: none; color:white; margin-right:3px;">Register</a></button>
						    	</p>
						    	@endif
						    </ul>   
						  </div>
						-->
		</nav>
		<div id="contain" class="containar-fluid">
			@yield('content')
		</div>
	<!--bootstrap navbar end -->

	<script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>

	<script type="text/javascript" src="{{ asset('js/parsley.min.js')}}"></script>
	</body>
</html>