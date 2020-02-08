		@extends('master')

		@section('title')
		Create New Student | Student Management System
		@endsection
		@section('content')

	<div id="cretestudents" class="container">
		<form class="col-sm-7" action="{{route('store')}}" method="post" data-parsley-validate>
			{{csrf_field()}}
			<h1>Create Student from here:</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
		  <div class="form-group">
		    <label>Name: </label>
		    <input type="text" class="form-control"  name="name" required>
		  </div>

		  <div class="form-group">
		    <label>Department Name: </label>
		    <input type="text" class="form-control"   name="department_name" required>
		  </div>

		  <!--- for parsley chechk -->
		  	<div class="form-group">
		    <label>Email: </label>
		    <input type="email" class="form-control" for="email"   name="email" required>
		  </div>
		  <!--- for parsley chechk -->

		  <div class="form-group">
		    <label>Registration ID: </label>
		    <input type="text" class="form-control"  name="registration_id" required>
		  </div>

		  <div class="form-group">
		    <label>Info: </label>
		    <textarea class="form-control" id="info" name="info" rows="5"></textarea>
		  </div>

		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection
