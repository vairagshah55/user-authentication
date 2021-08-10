<!doctype html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>

    <div class="container">
      <div class="row" style="margin-top:45px">
          <div class="col-md-4 offset-4 my-2">
                <h4 class="my-4">Register | Custom Auth </h4><hr>
                <form action="{{route('auth.save')}}" method="post">
                  @csrf
                   <div class="form-group my-4">
                      <label>Name</label>
                      <input type="text" class="form-control my-2" name="name" placeholder="Enter Name" value="{{old('name')}}">
                  </div>
                  <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                  <div class="form-group my-4">
                      <label>Email</label>
                      <input type="email" class="form-control my-2" name="email" placeholder="Enter Email Address" 
                      value="{{old('email')}}">
                  </div>
                   <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                   <div class="form-group my-2">
                      <label>Password</label>
                      <input type="password" class="form-control my-2" name="password" placeholder="Enter Password" 
                      value="{{old('password')}}">
                  </div>
                   <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                   <div class="container bg-light my-4">
                      <div class="col-md-12 text-center">
                          <button  type="submit" class="btn btn-block btn-primary ">Sign In</button>
                                    <br>
                  <a href="{{route('auth.login')}}">I already have an account, Sign In</a>
                      </div>

                    </div>
                     
                </form>
          </div>
      </div>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
   
    
   
  </body>
</html>