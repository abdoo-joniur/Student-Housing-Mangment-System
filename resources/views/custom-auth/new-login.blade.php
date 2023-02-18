<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="custom-auth/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="custom-auth/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient">

    {{-- Start nav --}}
       <nav class="navbar  navbar-expand-sm navbar-dark bg-dark text-white py-2">
    <div class="container">
      <a class="navbar-brand text-info" href="/">
         داخلية الاسلامية
      </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">تسجيل الدخول</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">إنشاء حساب</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </nav>
    {{-- End nav --}}

<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

<div class="col-xl-6 col-lg-6 col-md-6">

<div class="card o-hidden border-0 shadow-lg my-5">
<div class="card-body p-0">
<!-- Nested Row within Card Body -->
<div class="row">
    
    <div class="col-lg-12">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">مرحبا بعودتك...</h1>
                @if(session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                  </div>
               @endif

               {{-- for successing logout notification --}}
               @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                  </div>
               @endif
            </div>

            <form method="POST" class="user" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="الرجاء ادخال اسم المستخدم ..." autofocus>

                    @error('email')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                </div>

                <div class="form-group">
                    <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="الرجاء ادخال كلمة المرور ...">

                    @error('password')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                    @enderror
                </div>
                {{-- <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                        <input class="form-check-input" class="custom-control-input" type="checkbox" name="remember" id="remember customCheck" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="customCheck">تذكرني</label>
                    </div>
                </div> --}}
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    تسجيل دخول
                </button>

            </form>
            <hr>
            <div class="text-center">
                @if (Route::has('password.request'))
                <a class="small btn btn-link" href="{{ route('password.request') }}">
                   هل نسيت كلمة السر ؟
                </a>
                @endif
            
            </div>
            <div class="text-center">
                <a class="small" href="{{ route('register') }}">انشاء حساب جديد</a>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</div>

</div>

</div>

    <!-- Bootstrap core JavaScript-->
    <script src="custom-auth/vendor/jquery/jquery.min.js"></script>
    <script src="custom-auth/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="custom-auth/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="custom-auth/js/sb-admin-2.min.js"></script>

</body>

</html>