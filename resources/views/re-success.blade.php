<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>success</title>
    <link rel="stylesheet" href="{{ asset('first/css/bootstrap.min.css') }}">
    <style>
       body{
        font-family: var(--sm-font);
           }
        .card .card-header{
            direction: rtl;
        }
        .card .card-body{
            direction: rtl;
            background-color: aliceblue;
        }
    </style>
</head>
<body class="d-flex justify-content-center p-4 pt-4">
    <div class="card">
       <div class="card-header bg-success text-white">
          عملية التسجيل اكتملت بنجاح
       </div>
       <div class="card-body">
         <strong>مرحبا</strong><br>
        شكرا لاستخدامك تطبيقنا للتسجيل في داخلية الجامعة الاسلامية
        الان فقط عليك الاتي :
        <ul>
            <li>التوجه الي البنك لسداد الرسوم</li>
            <li> التوجه الي كليتك لاحضار شهادة قيد</li>
            <li> بعد ذالك التوجه الي الداخلية واحضار ايصال الدفع وشهادة القيد لمقابلة الموظف بالداخلية تمهيدا لاكتمال تسجيلك وحجز غرفتك </li>
        </ul>
        <a href="/home" class="btn btn-primary">رجوع</a>
       </div>
    </div>
</body>
</html>