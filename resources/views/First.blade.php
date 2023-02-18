<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="{{ asset('first/css/bootstrap.min.css') }}">
    <style>
        body{
    font-family: var(--sm-font);
}

.bg-primary{
    background-color: var(pink)!important;
}

.btn:not(.nav-btns button){
    background-color: #fff;
    color: rgb(85,85,85);
    padding: 10px;
    border-radius: 25px;
    border: 1px solid rgb(85,85,85);
}



.navbar{
    box-shadow: 0 3px 9px 3px rgba(0, 0, 0, 0.1);
}
.navbar-brand img{
    width: 30px;
}
.navbar-brand span{
    letter-spacing: 2px;
    font-family: var(--lg-font);
}
header .nav ul{
    color: var(pink)!important;
}
 ul li:hover{
    color: purple !important;
}

    </style>
</head>
<body>

<nav class="navbar  navbar-expand-sm navbar-dark bg-dark text-white py-2">
    <div class="container">
      <a class="navbar-brand text-info" href="/">
         داخلية الاسلامية
      </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
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

  <section id="about" class="text-light text-center text-lg-start bg-dark py-5">
    <div class="container">
      <div class="d-flex align-items-center justify-content-center">
        <div class="text-center">
          <h1>حول <span class="text-info">التطبيق</span></h1>
          <h3> مرحبا بك في تطبيق داخلية الجامعة الاسلامية حيث الان يمكنك اكمال عملية التسجيل  بكل سهولة ويسر  </br> فقط كل ما عليك فعله هو انشاء حساب جديد او تسجيل الدخول اذا كنت تمتلك   حساب مسبقا</br><span class="text-info text-center lead">بالتوفيق دوما </span> </h3>
        </div> 
      </div>
    </div>
  </section>
  

<!----->
<section class="bg-secondary text-center">
 <div class="row">
  <div class="col-lg-12 py-2">
    <h2>لديك حساب؟</h2>
    <a class="btn btn-info col-6" href="{{ route('login') }}">تسجيل دخول</a>
  </div>

  <div class="col-lg-12 py-2">
    <h2>ليس لديك حساب؟</h2>
    <a class="btn btn-info col-6" href="{{ route('register') }}">إنشاء حساب</a>
  </div>

 </div> 
</section>


    <script src="{{ asset('first/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('first/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>