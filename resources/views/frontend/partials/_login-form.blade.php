<!---->
<div class="overlay-login text-left">
    <button type="button login-finish" class="overlay-close1">
        <i class="fa fa-times color-primary" aria-hidden="true"></i>
    </button>
    <div class="wrap">
        <h5 class="text-center mb-4">Sign In</h5>
        <div class="login p-5 bg-dark mx-auto mw-100">
            <form action="{{url('login')}}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label class="mb-2">User Name</label>
                    <input type="email" class="form-control login-input" id="exampleInputEmail1" required name="email" value="admin@gmail.com">                    
                </div>
                <div class="form-group">
                    <label class="mb-2">Password</label>
                    <input type="password" class="form-control login-input" id="exampleInputPassword1" placeholder="" required name="password" value="123456">
                </div>

                <button type="submit" class="btn btn-primary submit mb-4 login-button">Sign In</button>

            </form>
        </div>
        <!---->
    </div>
</div>
<!---->
