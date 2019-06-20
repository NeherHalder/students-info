@extends('layouts.master')

@section('content')

<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="form-grids widget-shadow" data-example-id="basic-forms">
				<div class="col-md-12">
					<a href="{{route('students.index')}}" class="btn btn-default"><i class="fas fa-arrow-circle-left green-btn"></i>Back</a>
					@include('common.flash-message')
					@include('common.errors')
					<hr>
				</div>
				<div class="form-body">
					<form action="{{route('students.store')}}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}

						<div class="form-group">
							<label for="department_id">Department</label>
							<select name="department_id" id="department_id" class="form-control" required>
								<option value="">Select</option>
								@foreach($departments as $department)
								<option value="{{$department->id}}" {{old('department_id')==$department->id ? 'selected':''}}>{{$department->name}}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group"> 
							<label for="name">Student Name</label> 
							<input type="text" name="name" class="form-control" id="name" required value="{{old('name')}}"> 
						</div>	

						<div class="form-group"> 
							<label for="roll_no">Roll No</label>
							<input type="text" name="roll_no" class="form-control" id="roll_no" required  value="{{old('roll_no')}}">			
						</div>

						<div class="form-group"> 
							<label for="reg_no">Registration No</label>
							<input type="text" name="reg_no" class="form-control" id="reg_no" required  value="{{old('reg_no')}}">		
						</div>

						<button type="submit" class="btn btn-default">Save</button>
					</form> 
				</div>
			</div>
		</div>
	</div>
</div>

@endsection