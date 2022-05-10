<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template</title>
   <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">

    <script type="text/javascript" src="{{asset("js/bootstrap.min.js")}}"></script>
</head>
<body class="bg-danger">

    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand text-white pl-5" href="#" style="padding-left: 2em;">
                <h1 class="pl-5"><span class="icon-github1"></span></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center text-white" id="navbarSupportedContent">
                <ul class="navbar-nav mb-4 mb-lg-0 ">
                    <li class="nav-item border-bottom border-white m-2 p-1">
                        <a class="nav-link active text-white" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item border-bottom border-white m-2 p-1">
                        <a class="nav-link text-white" href="#">Contacto</a>
                    </li>
                    <li class="nav-item border-bottom border-white m-2 p-1">
                        <a class="nav-link text-white" href="#">Acerca de</a>
                    </li>
                    <li class="nav-item border-bottom border-white m-2 p-1">
                        <a class="nav-link text-white" href="#">Registro</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        <div class="row">
            <div class="col-7 mt-5">
                <figure class="figure">
                    <img src="{{asset("img/person.svg")}}" class="figure-img img-fluid" alt="personas">
                </figure>
            </div>
            <div class="col-5">
                <div class="row text-white text-center">
                    <div class="col">
                        <h3>Mi primer web</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-5 card">
                        <h4 class="mb-5 mt-2">Registro</h4>
                        <form action="" class="p-3 pt-1">
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input type="email" id="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Nombre</label>
                                <input type="text" id="username" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" id="password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-danger">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>