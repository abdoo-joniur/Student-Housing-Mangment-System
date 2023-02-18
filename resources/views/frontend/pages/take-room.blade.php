<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('first/css/bootstrap.min.css') }}">
    <link href="{{ asset('backend/assets/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
    <title>take room</title>
    <style>
        .title{
            font-size: 20px;
        }
        .title{
            direction: rtl;
        }
        .card .card-header{
            direction: rtl;
        }
        .card .card-body .form-group{
            direction: rtl;
        }
        form .action-buttons{
            direction: rtl;
        }
        
    </style>
    @livewireStyles
</head>
<body>

    <div class="container multi-step">
        <div class="row" style="margin-top: 40px">
            <div class="col-md-6 offset-md-3">
                <h1 class="title">الرجاء اكمال جميع الخطوات ادناه</h1>
                <hr>
                @livewire('register-steps')
            </div>
        </div>

    </div>
    
    <script src="{{ asset('custom-auth/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('first/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('first/js/bootstrap.bundle.min.js') }}"></script>
    @livewireScripts
    <script>
    window.addEventListener('FullRoom' ,function(event) {
      swal.fire({
        icon:event.detail.type,
        title:event.detail.title,
        text:event.detail.text,
      });
    });
    </script>

</body>
</html>