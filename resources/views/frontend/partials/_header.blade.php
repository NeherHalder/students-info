<div class="row">
    <div class="col-md-3 top-info text-left mt-lg-4">
    </div>
    <div class="col-md-6 logo-w3layouts text-center">
        <h1 class="logo-w3layouts">
			<a class="navbar-brand" href="{{url('/')}}">{{config('app.name')}}</a>
		</h1>
    </div>

    <div class="col-md-3 top-info-cart text-right mt-lg-4">
        <ul class="cart-inner-info">

        @if($user = Sentinel::check())                
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                    <span class="fa fa-user color-primary" aria-hidden="true"> <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" style="text-align: right;width: 33%;margin-left: 29%">
                    <li>
                        <a href="{{url('logout')}}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{url('logout')}}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    <li style="display: block;"><a href="{{url('profile')}}">Profile</a></li>
                    <li style="display: block;"><a href="{{url('my-orders')}}">My Orders</a></li>
                </ul>
            </li>
            @else
                
            <li class="button-log">
                <a class="btn-open" href="#"> 
                    <span class="fa fa-user" aria-hidden="true"></i> Sign In</span>
                </a>                
            </li>
            @endif          
        </ul>        
    </div>
</div>

<label class="top-log mx-auto"></label>

<!-- nav -->
@include('frontend.partials.header._nav')
<!-- end nav -->