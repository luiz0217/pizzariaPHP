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
    <script src="<?php echo INCLUDE_PATH ?>assets/js/mobile-navbar.js"></script>

</head>

<body>

    <header>
        <nav>
            <a class="logo" href="<?php echo INCLUDE_PATH ?>" style="color: #fff;marginRight: 20%;textDecoration: none"><img
                    src="<?php echo INCLUDE_PATH ?>assets/imagens/logo.png" class="img-fluid" width="10%" alt="" />BOBBY
                JONES™</a>
            <div class="mobile-menu">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
            </div>
            <ul class="nav-list" style='listStyle: none'>
                <li><a href="/" style="textDecoration: none" class='btn btn-outline-light'>Quem Somos</a></li>
                <li><a href="/" style="textDecoration: none" class='btn btn-outline-light'>Trabalhe Conosco</a></li>
                <li><a href="/" style="textDecoration: none" class='btn btn-outline-light'>Nossos Sistemas</a></li>
            </ul>
        </nav>
    </header>

    <div id="containerLogin">
        <img src="<?php echo INCLUDE_PATH ?>assets/imagens/app_logo.png" width="200vh" class="img-fluid" alt="" />
        <h4>Meal Time</h4>
        <form method="post">
            <label class="label" for="Login">Login</label>
            <input class="input" type="text" name="Login" placeholder="Digite seu Login" />
            <label class="label" for="password">Senha</label>
            <input class="input" type="password" name="password" placeholder="Digite sua Senha" />

            <div class="esqecSenha">
                <a href="#" id="forgot-pass">Esqueceu a senha?</a>
            </div>

            <div id="register-container" class="esqecSenha">
                <a href="#">Ainda não tem uma conta?</a>
            </div>

            <div>
                <input type="submit" class="btn btn-outline-primary btn-lg" value="Login" name="login"
                    style="width: 13vh"></input>
            </div>

        </form>
    </div>
    <div id="carouselIndex" class="carousel slide" data-ride="carousel">

        <ul class="carousel-indicators">
            <li data-target="#carouselIndex" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndex" data-slide-to="1"></li>
            <li data-target="#carouselIndex" data-slide-to="2"></li>
            <li data-target="#carouselIndex" data-slide-to="3"></li>
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo INCLUDE_PATH ?>assets/imagens/carrousel-01.png" width="100%" alt="" />
            </div>
            <div class="carousel-item">
                <img src="<?php echo INCLUDE_PATH ?>assets/imagens/carrousel-02.png" width="100%" alt="" />
            </div>
            <div class="carousel-item">
                <img src="<?php echo INCLUDE_PATH ?>assets/imagens/carrousel-03.png" width="100%" alt="" />
            </div>
            <div class="carousel-item">
                <img src="<?php echo INCLUDE_PATH ?>assets/imagens/carrousel-04.png" width="100%" alt="" />
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselIndex" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#carouselIndex" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>



    <footer id="footerLog">

        <div id="footer_content">
            <div id="footer_contacts">
                <img src="<?php echo INCLUDE_PATH ?>assets/imagens/Logo.png" class="img-fluid" width="30%"
                    alt="Logo"></img>
                <h5>Loja de vendas</h5>

                <div id="footer_social_midia">
                    <a href="#" class="footer_link">
                        <i class="fa-brands fa-instagram" id="instagram"></i>
                    </a>
                    <a href="#" class="footer_link">
                        <i class="fa-brands fa-facebook-f" id="facebook"></i>
                    </a>
                    <a href="#" class="footer_link">
                        <i class="fa-brands fa-whatsapp" id="whatsapp"></i>
                    </a>
                </div>
            </div>
            <ul class="footer-list">
                <li>
                    <h3>Criadores</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">Luiz Gustavo</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Leonardo Veque</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Bruno Dion</a>
                </li>
            </ul>
            <div id="footer_subscribe">
                <h3>Inscreva-se</h3>
                <p>
                    Entre com seu email:
                </p>
                <div id="input_group">
                    <input type="email" id="email"></input>
                    <button>
                        <i class="fa-regular fa-envelope"></i>
                    </button>
                </div>
            </div>
        </div>
        <div id="footer_copyright"> © 2023 todos os diretos reservados </div>
    </footer>
</body>

</html>