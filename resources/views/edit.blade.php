	@extends('master')

	@section('content')
		<div id="cretestudents" class="container">
		<form class="col-sm-7" action="{{route('update',$take_edit_st_id->id)}}" method="post">
			{{csrf_field()}}
		  <div class="form-group">
		    <label>Name: </label>
		    <input type="text" class="form-control"  name="name" value="{{$take_edit_st_id->name}}">
		  </div>

		  <div class="form-group">
		    <label>Department Name: </label>
		    <input type="text" class="form-control"   name="department_name" value="{{$take_edit_st_id->department_name}}">
		  </div>

		  <div class="form-group">
		    <label>Registration ID: </label>
		    <input type="text" class="form-control"  name="registration_id" value="{{$take_edit_st_id->registration_id}}">
		  </div>

		  <div class="form-group">
		    <label>Info: </label>
		    <textarea class="form-control" id="info" name="info" rows="5" value="{{$take_edit_st_id->info}}"></textarea>
		  </div>

		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	@endsection