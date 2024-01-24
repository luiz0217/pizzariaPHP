<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>/assets/css/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/mobile-navbar.js"></script>

</head>

<body>

    <header id="containerVendasLogo" class="row">
        <div class="col-md-1" style="float: left">
            <img src="assets/imagens/app_logo.png" class="img-fluid" width="500px" alt="" />


        </div>
        <div class="col-md-2"></div>
        <div class="col-md-9">
            <nav class="navbar navbar-expand-md navbar-light" style="zIndex: 10">


                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                    <i class="fas fa-bars text-white"></i>
                </button>


                <div class="collapse navbar-collapse rounded-end-circle" id="nav-principal"
                    style="marginLeft: 25%;padding-top: 10vh;">
                    <ul class="nav justify-content-center nav-pills nav-fill" style="listStyle: none;gap: 10px">
                        <li class="nav-item">
                            <div style="display: flex;">
                                <a type="button" href="<?php INCLUDE_PATH ?>clientes" class="btn btn-outline-dark btn-l"
                                    style="borderColor: #001e30; width: 22vh; height: 6vh; font-size: 2.5vh;"><i class='fas fa-user-alt'></i> Cadastros</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <div style="display: flex;">
                                <a type="button" href="<?php INCLUDE_PATH ?>pedido" class="btn btn-outline-dark btn-l"
                                    style="borderColor: #001e30; width: 22vh; height: 6vh; font-size: 2.5vh;"><i class='fas fa-pizza-slice'></i> Fazer
                                    Pedido</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <div style="display: flex;">
                                <a type="button" href="<?php INCLUDE_PATH ?> vendedor"
                                    class="btn btn-outline-dark btn-lg"
                                    style="borderColor: #001e30; width: 22vh; height: 6vh; font-size: 2.5vh;"><i class='fas fa-address-card'></i> Vendedor</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <div style="display: flex;">
                                <a type="button" href="<?php INCLUDE_PATH ?> cozinha"
                                    class="btn btn-outline-dark btn-lg"
                                    style="borderColor: #001e30; width: 22vh; height: 6vh; font-size: 2.5vh;"><i class='fas fa-search'></i> Cozinha</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="<?php INCLUDE_PATH ?> config" class="btn btn-outline-dark btn-lg"> <i class='fas fa-cog'></i> </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>


    </header>