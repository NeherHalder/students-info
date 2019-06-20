@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">			
			<div class="row">
				<div class="col-md-12">	
					<a href="{{route('students.create')}}" class="btn btn-default"><i class="fas fa-plus-circle green-btn"></i>New student</a>
					@include('common.flash-message')
					<hr>
					<p style="text-align: center; font-size: 22px;">{{$title}}</p>
					<hr>
				</div>

				<div class="col-md-12">
					<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
						<thead>
				            <tr>
								<th style="width: 20px">No</th>
								<th>Name</th>
								<th>Roll No</th>
								<th>Reg No</th>
								<th>Department</th>
								<th>Actions</th>
				            </tr>
						</thead>
						<tbody>
						<?php $i=0; ?>
						@foreach($students as $student)
							<tr>
								<td>{{++$i}}</td>
								<td>{{$student->name}}</td>
								<td>{{$student->roll_no}}</td>
								<td>{{$student->reg_no}}</td>
								<td>{{$student->department->name}}</td>
								
								<td>
									<a href="{{route('students.edit', $student)}}" class="btn btn-default">Edit</a>

									<a href="{{route('student.images.index', $student)}}" class="btn btn-default">Images</a>

									<form action="{{route('students.destroy', $student)}}" method="POST" style="display: inline;">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}

										<button type="submit" class="btn btn-danger" onclick="return alertUser('delete it?')">Delete</button>
									</form>
								</td>
						    </tr>
							@endforeach
						</tbody>
		            </table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection