@extends('frontend.master')

@section('content')

<section class="banner-bottom-wthreelayouts py-3 py-5">
    <div class="container">
        <!-- <h3 class="tittle-w3layouts text-center my-lg-4 my-4">Contact</h3> -->
        <div class="inner_sec">
            <p class="sub text-center mb-lg-5 mb-3">Contact</p>
            <div class="address row">

                <div class="col-lg-4 address-grid">
                    <div class="row address-info">
                        <div class="col-md-3 address-left text-center">
                            <i class="far fa-map"></i>
                        </div>
                        <div class="col-md-9 address-right text-left">
                            <h6>Address</h6>
                            <p class="category-name">{{config('settings.address')}}</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 address-grid">
                    <div class="row address-info">
                        <div class="col-md-3 address-left text-center">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="col-md-9 address-right text-left">
                            <h6>Email</h6>
                            <p class="category-name">{{config('settings.email')}}</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 address-grid">
                    <div class="row address-info">
                        <div class="col-md-3 address-left text-center">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="col-md-9 address-right text-left">
                            <h6>Phone</h6>
                            <p class="category-name">{{config('settings.mobile')}}</p>

                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12" style="margin: 15px 0px; background-color: #ddd">
                    <span style="font-weight: bold; color: black">Sign In Credentials:</span>
                    <p><strong>User Name:</strong> admin@gmail.com</p>
                    <p><strong>Password:</strong> 123456</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12" style="margin: 15px 0px; background-color: #ddd">
                    <span style="font-weight: bold; color: black">Some Works:</span>
                    <ol>
                        <li>Web Application-ECL System: <a href="http://eclsystem.com" target="_blank">http://eclsystem.com</a></li>

                        <li>Web application-EGCB <a href="http://www.egcb.coxsbazar.info/" target="_blank">http://www.egcb.coxsbazar.info/</a></li>

                        <li>Web application-MedientryBD <a href="http://www.medientrybd.com/" target="_blank">http://www.medientrybd.com/</a></li>

                        <li>E Commerce-BD Rannaghar: <a href="https://www.bdrannaghar.com" target="_blank">https://www.bdrannaghar.com</a></li>

                        <li>E Commerce-BD Rannaghar Android App: <a href="https://play.google.com/store/apps/details?id=com.rannaghor.rannaghor" target="_blank">https://play.google.com/store/apps/details?id=com.rannaghor.rannaghor</a></li>

                        <li>Website Quiz Game: <a href="http://game.bdrannaghar.com" target="_blank">http://game.bdrannaghar.com</a></li>

                        <li>Quiz Game Learner Android App: <a href="https://play.google.com/store/apps/details?id=com.neher.ecl.learningapplication" target="_blank">https://play.google.com/store/apps/details?id=com.neher.ecl.learningapplication</a></li>

                        <li>
                            Sample code:<a href="http://sample.bdrannaghar.com" target="_blank">http://sample.bdrannaghar.com</a>
                        </li>

                        <li>
                            Sample code Github:<a href="https://github.com/NeherHalder/students-info" target="_blank">https://github.com/NeherHalder/students-info</a>
                        </li>

                        
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection