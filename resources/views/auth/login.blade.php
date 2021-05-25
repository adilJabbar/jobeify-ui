@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('includes.header')
<!-- Header end --> 
<!-- Inner Page Title start -->
@include('includes.inner_page_title', ['page_title'=>__('Login')])
<!-- Inner Page Title end -->
<div class="listpgWraper">
    <div class="container">
        @include('flash::message')


        <!--Login-Section-->
            <div class="useraccountwrap">
                <div class="userccount">

            <section class="sptb">
                <div class="container customerpage">
                    <div class="row">
                        <div class="single-page" >
                            <div class="col-lg-5 col-xl-4 col-md-7 d-block mx-auto">

                                <div class="wrapper wrapper2">
                                    <div class="userbtns">
                                        <ul class="nav nav-tabs">
                                            <?php
                                            $c_or_e = old('candidate_or_employer', 'candidate');
                                            ?>
                                            <li class="nav-item"><a class="nav-link {{($c_or_e == 'candidate')? 'active':''}}" data-toggle="tab" href="#candidate" aria-expanded="true">{{__('Candidate')}}</a></li>
                                            <li class="nav-item"><a class="nav-link {{($c_or_e == 'employer')? 'active':''}}" data-toggle="tab" href="#employer" aria-expanded="false">{{__('Employer')}}</a></li>
                                        </ul>
                                    </div>
                                    <div class="p-4 mb-5">
                                        <h4 class="text-left font-weight-semibold fs-16">Login With</h4>
                                        <div class="btn-list d-sm-flex">
                                            <a href="https://www.google.com/gmail/" class="btn btn-primary mb-sm-0"><i class="fa fa-google fa-1x mr-2"></i> Google</a>
                                            <a href="https://twitter.com/" class="btn btn-secondary mb-sm-0"><i class="fa fa-twitter fa-1x mr-2"></i> Twitter</a>
                                            <a href="https://www.facebook.com/" class="btn btn-info mb-0"><i class="fa fa-facebook fa-1x mr-2"></i> Facebook</a>
                                        </div>
                                    </div>
                                    <hr class="divider">
                                    <div id="candidate" class="formpanel tab-pane {{($c_or_e == 'candidate')? 'active':''}}">
                                    <form id="login" action="{{ route('login') }}" class="card-body" tabindex="500">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="candidate_or_employer" value="candidate" />
                                        <div class="mail">
                                            <input type="email" name="email" value="" value="{{ old('email') }}" required autofocus placeholder="{{__('Email Address')}}>
                                            <label>Mail or Username</label>
                                        </div>
                                        <div class="passwd">
                                            <input type="password" name="password" value="" required placeholder="{{__('Password')}}" >
                                            <label>Password</label>
                                        </div>
                                        <div class="submit">
                                            <button type="submit" class="btn btn-primary btn-block" >Login</button>
{{--                                            <a class="btn btn-primary btn-block" href="index.html">Login</a>--}}
                                        </div>
                                        <p class="mb-2"><a href="forgot.html" >Forgot Password</a></p>
                                        <p class="text-dark mb-0">Don't have account?<a href="register.html" class="text-primary ml-1">Sign UP</a></p>
                                    </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                </div>
            </div>
            <!--/Login-Section-->


       

        
    </div>
</div>
@include('includes.footer')
@endsection
