<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>driveGo</title>
    <link rel="icon" href="{{asset ('images/ава.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                drive<span style="color:#04DBC0">Go</span>&nbsp;
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yahyaNavbar" aria-controls="yahyaNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="yahyaNavbar">
                <ul class="navbar-nav" style="margin-left: auto!important;">
                    <li class="nav-item active">
                        <a class="nav-link" href="./">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./#services">Услуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./#brands">Автомобили</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./#reserve">Бронирование</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./#contact-us">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

@yield('main_content')

</body>
</html>