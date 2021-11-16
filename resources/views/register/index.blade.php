@extends('layouts.auth')

@section('content')
<div class="card o-hidden border-0 shadow-lg my-5">
   <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
         <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
         <div class="col-lg-7">
            <div class="p-5">
               <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
               </div>
               @if (session('success'))
                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session ('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                  @endif
               <form class="user" action="/register" method="POST">
                  @csrf
                  <div class="form-group">
                     <input type="text" name="name" class="form-control form-control-user" id="name"
                        placeholder="Name">
                  </div>
                  <div class="form-group">
                     <input type="email" name="email" class="form-control form-control-user" id="email"
                        placeholder="Email Address">
                  </div>
                  <div class="form-group">
                     <input type="password" name="password" class="form-control form-control-user" id="password"
                        placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">
                     Register Account
                  </button>
               </form>
               <hr>
               <div class="text-center">
                  <a class="small" href="/login">Already have an account? Login!</a>
              </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection