@extends('layouts.auth')

@section('content')
<div class="row justify-content-center">

   <div class="col-xl-10 col-lg-12 col-md-9">

       <div class="card o-hidden border-0 shadow-lg my-5">
           <div class="card-body p-0">
               <!-- Nested Row within Card Body -->
               <div class="row">
                   <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                   <div class="col-lg-6">
                       <div class="p-5">
                           <div class="text-center">
                               <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                           </div>
                           <form class="user" action="/login" method="post">
                              @csrf
                               <div class="form-group">
                                   <input type="email" name="email" class="form-control form-control-user"
                                       id="exampleInputEmail" aria-describedby="emailHelp"
                                       placeholder="Enter Email Address...">
                               </div>
                               <div class="form-group">
                                   <input type="password" name="password" class="form-control form-control-user"
                                       id="exampleInputPassword" placeholder="Password">
                               </div>
                               <button type="submit" class="btn btn-primary btn-user btn-block">
                                   Login
                               </button>
                           </form>
                           <hr>
                           <div class="text-center">
                               <a class="small" href="/register">Create an Account!</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>

   </div>

</div>
@endsection