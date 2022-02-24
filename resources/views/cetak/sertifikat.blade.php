<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Activity</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        @page { margin: 0in;}
        body{
            background: url('img/sertifikat.png') no-repeat center center fixed;
            background-position: top left;
            background-repeat: no-repeat;
            background-size: 100%;
            padding: 300px 100px 10px 100px;
            width:100%;
            height:100%;
        }
        .ml-5{
            scroll-margin-left: 4.5rem;
        }
        h1{
            color : #ffD700;
        }
        .ml-5{
            sctoll-margin-left: 4.5rem;
        }
        h1{
            color : #ffD700;
        }

        .ml-10{
            margin-left: 45rem;
        }
        .-mt-10{
            margin-top: -140px;
        }

    </style>
</head>

<body>
    <div class="content">
        <div class="">
            <h1 class="ml-5 pt-3">{{$sertifikat->user->name}}</h1>
            <img class="ml-10 -mt-10" width="150px" src="data:image/png;base64, {{DNS2D::getBarcodePNG("192.168.43.163/kegiatanku/public/resoult/{$sertifikat->id}",'QRCODE')}}" alt="barcode">
        </div>
    </div>
</body>
</html>