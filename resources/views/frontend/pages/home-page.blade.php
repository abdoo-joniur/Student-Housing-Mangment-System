<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>داخلية الاسلامية</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('first/css/bootstrap.min.css') }}">
    {{-- sweet alert2 --}}
        <link href="{{ asset('backend/assets/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
      
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet" />
    <style>
        .card .card-body {
            direction: rtl;
        }
    </style>
    @livewireStyles
  </head>
  <body id="page-top">
    <!-- Navigation-->
    <nav
      class="navbar navbar-expand-lg navbar-light fixed-top py-3"
      id="mainNav"
    >
      <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#page-top">داخلية الاسلامية</a>
        <button
          class="navbar-toggler navbar-toggler-right"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto my-2 my-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#about">عن الداخلية</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#faQ">الاسئلة الشائعة</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#last-News">اخر الاخبار</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Ask-about-Room">استعلام عن غرفة</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('user.logout') }}">تسجيل خروج</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead">
      <div class="container px-4 px-lg-5 h-100">
        <div
          class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center"
        >
          <div class="col-lg-8 align-self-end">
            <h1 class="text-white font-weight-bold">
              مرحبا بكم في داخلية الجامعة الاسلامية
            </h1>
            <h2 class="text-white">حللتم اهلا ...ونزلتم سهلا</h2>
            <hr class="divider" />
          </div>
          <div class="col-lg-8 align-self-baseline">
            <p class="text-white-75 mb-5">
              الان اصبح بالامكان حجز غرفتك الكترونيا بكل سهولة ويسر كل ما عليك
              فعله هو الضغط علي زر الحجز واتباع خطوات التسجيل الي اكمال عملية
              حجز عرفتك بنجاح
            </p>
            <a class="btn btn-primary btn-xl" href="{{ route('get.room') }}">احجز الان</a>
          </div>
        </div>
      </div>
    </header>

    <!-- About-->
    <section class="page-section bg-primary" id="about">
      <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="text-white mt-0">داخلية الشهيد الفاتح حمزة</h2>
            <hr class="divider divider-light" />
            <p class="text-white-75 mb-4">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Consequuntur veritatis nisi eum enim illo. Quo, doloribus animi.
              Nobis facere laboriosam non quaerat neque quasi soluta totam
              eveniet ut, similique eos. Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Delectus natus laudantium nesciunt beatae
              exercitationem? Quis assumenda aspernatur corrupti perspiciatis
              commodi sapiente sint nisi esse ipsa pariatur. Temporibus
              inventore laborum suscipit! Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Corporis beatae itaque incidunt voluptas
              sapiente excepturi asperiores eveniet exercitationem, reiciendis
              porro impedit, quasi ducimus laborum accusamus ab accusantium
              ipsam tenetur cumque? Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Enim animi natus magni fugiat eum minima neque
              ea, repellat ipsum harum esse excepturi id fuga eius voluptatum
              autem veniam fugit ipsam!
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- info about spacific Room-->
    <section class="page-section bg-light" id="Ask-about-Room">
      <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">استعلام عن غرفة معينة</h2>
        <hr class="divider" />
        <p class="text-muted mb-5 text-center">
          تساعدك في معرفة في اي جناح تقع هذه الغرفة وايضا معرفة عدد الاشخاص
          المسجلون حاليا في هذه الغرفة
        </p>

        <div class="row gx-4 gx-lg-5 justify-content-center mb-3">
          <div class="col-lg-6">

        <div class="card">
          <div class="card-header text-center">استعلام عن غرفة</div>
          <div class="card-body">
            @livewire('ask-room')
          </div>
          </div>
          </div>
        </div>
        </div>
      </div>
    </section>

    <!-- last news -->
    <section class="text-center" id="last-News">
       <h2 class="text-center mt-3">اخر الاخبار</h2>
       <hr class="divider" />
        <div class="row text-center text-white">
           <div class="col-md mb-5">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="frontend/slide-3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="frontend/slide-3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="frontend/slide-3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
           </div>
        </div>
    </section>


    <!-- FaQ-->
    <section class="bg-dark text-white text-center" id="faQ">
        <div class="container">
        <h2 class="text-center mt-0 pt-3">الاسئلة الشائعة</h2>
        <hr class="divider" />
         <div class="mb-2">
          <h4 class="text-info">السؤال الاول</h4>
          <p>الاجابة علي السؤال الاول</p>
         </div>
         <div class="mb-2">
          <h4 class="text-info">السؤال الاول</h4>
          <p>الاجابة علي السؤال الاول</p>
         </div>
         <div class="mb-3 pb-3">
          <h4 class="text-info">السؤال الاول</h4>
          <p>الاجابة علي السؤال الاول</p>
         </div>
         
      </div>  
    </section>
      

    <!-- Footer-->
    <footer class="bg-light py-5">
      <div class="container px-4 px-lg-5">
        <div class="small text-center text-muted">
          Copyright &copy; 2023 - داخلية الجامعة الاسلامية
        </div>
      </div>
    </footer>


    {{-- jquery --}}
    <script src="{{ asset('custom-auth/vendor/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap core JS-->
    <script src="{{ asset('first/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('first/js/bootstrap.bundle.min.js') }}"></script>
    {{-- sweet alert --}}
        <script src="{{ asset('backend/assets/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('frontend/js/scripts.js') }}"></script>
    <script>
      window.addEventListener('askRoom' ,function(event) {
      swal.fire({
        icon:event.detail.type,
        title:event.detail.title,
        text:event.detail.text,
      });
    });
    </script>
    @livewireScripts
  </body>
</html>
