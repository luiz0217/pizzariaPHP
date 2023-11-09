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
            <a class="logo" href="<?php echo INCLUDE_PATH ?>"
                style="color: #fff;marginRight: 20%;textDecoration: none"><img
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
        <h1>404</h1>
        <h2>Not found</h2>
        <a href="<?php echo INCLUDE_PATH ?>" class='btn btn-outline-light'>Home</a>
    </div>
    <br>
    <br>
    <footer id="footerLog">
        <div id="footer_copyright">
            © 2023 todos os diretos reservados
        </div>
    </footer>

</body>

</html>