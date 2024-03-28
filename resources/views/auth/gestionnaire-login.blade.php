<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('assets\images\vector.png') }}" type="image/x-icon"/>

    <link rel="shortcut icon" href="{{ asset('assets\images\vector.png') }}" type="image/x-icon"/>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">

    <title>Gestionnaire Log in</title>
  </head>
  <body>
    <section class="form-01-main">
      <div class="form-cover">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="form-sub-main">
              <div class="_main_head_as">
                <a href="#">
                  <img src="../assets/images/vector.png">
                </a>
              </div>
              
            <form method="POST" action="{{ route('gestionnaire.login.submit') }}">
                @csrf <!-- {{ csrf_field() }} -->
                <div class="form-group">
                    <input id="email" placeholder="Gestionnaire" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    {{--  --}}
                </div>

              <div class="form-group">

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                    <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
              </div>

              <div class="form-group">
                <button class="btn_uy col-md-12">
                  <span>Login</span>
                </button>
              </div>

            </form>  
            
            </div>

          </div>
        </div>
      </div>
      </div>
    </section>
  </body>
</html>

