		@extends('master')

		@section('content')

		@if (Auth:: check())
		
		<hr>
<div id="data show" class="container-fluid col-sm-12">
	
	<div id="shleft" class="col-sm-7" style="float: left; border-right: solid 1px black; padding-top: 1%;">
		<h3 style="color: green;">List of all the student:</h3><br><br>
		<div class="container">
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">sl</th>
		      <th scope="col">Name</th>
		      <th scope="col">Registration</th>
		      <th scope="col">Department</th>
		      <th scope="col">Info</th>
		      <th scope="col"></th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@php $i=0; @endphp
		  	@foreach ($ctstudents as $indexstudent)
		  	@php $i=$i+1; @endphp
		    <tr>
		      <td scope="col">{{ $i}}</td>
		      <td scope="col">{{ $indexstudent->name}}</td>
		      <td scope="col">{{ $indexstudent->registration_id}}</td>
		      <td scope="col">{{ $indexstudent->department_name}}</td>
		      <td scope="col">{{ $indexstudent->info}}</td>
		      <td>
		      	<td>
		      	<a href="{{route('edit', $indexstudent->id)}}" class="btn btn-sm btn-success" style="">EDIT</a>
		      	</td>

		      	<!--  the originally of delete
		      	<form class="form-inline" action="{{route('delete' ,$indexstudent->id)}}" method="post" style="float: left;">
		      		{{csrf_field()}}
		      		<input type="submit" class="btn btn-danger" value="delete">
		      	</form>
		      -->
		      	<td>
		      	<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete" style="">
				  DELETE
				</button>
				</td>
		      </td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
		</div>	
		<!-- Button trigger modal -->
			

			<!-- Modal -->
			<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-body">
			      	<h6 class="alert alert-danger">Are you sure to delete the student ?</h6>
			        <form class="form-inline" action="{{route('delete' ,$indexstudent->id)}}" method="post" style="float: left; margin-right: 10px;">
		      		{{csrf_field()}}
		      		<input type="submit" class="btn btn-sm btn-danger" value="Yes I want to delete">
		      		</form>
			        <button type="button" class="btn btn-sm  btn-secondary" data-dismiss="modal">No keep the student</button>
			      </div>
			    </div>
			  </div>
			</div>
			<!-- modal end -->
	</div>


				
	<div id="shright" class="col-sm-4" style="float: left; padding: 3%;">
		<p>Admin can add a new student from here. To add or create a new student admin should be choose the button field named "create new student"</p>
			<a href="/create" class="btn btn-lg btn-primary">
			<center> Create New students </center></a>
	</div>


		@else
			<div id="total" class="container">
				<center>
					<h1 style="font-family: 'Oswald', sans-serif; color:  #555e7e;">WELCOME TO STUDNET MANAGEMENT SYSTEM</h1>
					<hr>
				</center>
				<p>
					Dear user, you are not logged in. Without logged in you cant use the system. If you do not have registered yet , please complete your registration in our system. <br> -Thank you.
				</p>
				<div id="left" class="container col-sm-5" style="float: left; margin: 40px;">
					<div class="card alert alert-info">
					  <div class="">
					    Log in from here.
					  </div>
					  <div class="card-body">
					    <h5 class="card-title"></h5>
					    <p class="card-text"></p>
					    	<button class="btn btn-md btn-success">
								<a href="{{'login'}}" style="text-decoration: none; color:white; margin:3px;">Log In
								</a>
							</button>
					  </div>
					</div>

					<!-- original log in log out 
						<p>
							<button class="btn btn-md btn-success">
								<a href="{{'login'}}" style="text-decoration: none; color:white; margin:3px;">Log In
								</a>
							</button>
			    			<button class="btn btn-md btn-success">
			    				<a href="{{'register'}}" style="text-decoration: none; color:white; margin-right:3px;">Register
			    				</a>
			    			</button>

			    	--- original log in log out -->

				</div>

				<div id="left" class="container col-sm-5" style="float: left; margin: 40px;">
					<div class="card alert alert-warning">
					  <div class="">
					    Complete your registration from here.
					  </div>
					  <div class="card-body">
					    <h5 class="card-title"></h5>
					    <p class="card-text"></p>
					    	<button class="btn btn-md btn-success">
			    				<a href="{{'register'}}" style="text-decoration: none; color:white; margin-right:3px;">Register
			    				</a>
			    			</button>
					  </div>
					</div>
				</div>

			</div>
		</div>
	@endif

@endsection
