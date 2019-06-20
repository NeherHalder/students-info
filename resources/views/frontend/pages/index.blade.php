@extends('frontend.master') @section('content')

<section class="banner-bottom-wthreelayouts py-3 py-5">
    <div class="container">
        <div class="inner_sec" style="margin-bottom: 30px">
            <p class="sub text-center mb-lg-5 mb-3">All Students</p>

            <div class="row">
    			@if(sizeof($students)) 
                <div class="col-md-12" style="padding: 0px;">
                    <p style="font-weight: bold; color: #101010">Search Student</p>
                </div> 
    			<form method="get" action="" style="margin: 10px 0px">
    				{{ csrf_field() }}

            		<input type="text" name="q" style="border-radius: 4px; border: 1px solid #ddd">
            		<input type="submit" value="Search" class="btn btn-default btn-sm">
            	</form>

                <table class="timetable_sub">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
    						<th>Name</th>
    						<th>Roll No</th>
                            <th>Registration No</th>
                            <th>Department</th>
                            <th>Registration Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php $i=0; ?>
                        @foreach($students as $student)
                        <tr class="rem1">   
                        	<td class="invert">{{++$i}}</td>                      
                            <td class="invert">{{$student->name}}</td>
                            <td class="invert">{{$student->roll_no}}</td>
                            <td class="invert">{{$student->reg_no}}</td>
                            <td class="invert">{{$student->department->name}}</td>    						
                            <td class="invert">{{$student->created_at->diffForHumans()}}</td>
                        </tr> 
                        @endforeach                        
                    </tbody>
                    @if(sizeof($students)==10)
                    <tfoot>
                        <tr>
                            <td colspan="5">
                                <div class="float-right">
                                    {{ $students->links() }} 
                                </div> 
                            </td>
                        </tr>
                    </tfoot>
                    @endif                    
                </table>             
                @else
                <p class="text-center">There are no students!</p>
                @endif
            </div>
            <div class="col-md-12" style="padding-right: 0px;">
                                   
            </div>
        </div>
    </div>
</section>

@endsection