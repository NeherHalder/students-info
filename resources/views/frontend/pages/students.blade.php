@extends('frontend.master')

@section('content')
<section class="banner-bottom-wthreelayouts py-3 py-5">
    <div class="container">
        <div class="inner_sec" style="margin-bottom: 30px">
            <p class="sub text-center mb-lg-5 mb-3">{{$page_title}}</p>
            <div class="address row">
    			@if(sizeof($students))                            
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
                <p class="text-center">There are no students! Please insert some data.</p>
                @endif
            </div>
            <div class="col-md-12" style="padding-right: 0px;">
                                   
            </div>
        </div>
    </div>
</section>
@endsection