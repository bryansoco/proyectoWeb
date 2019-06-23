<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>REAL STAR</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="css/central.css">
<link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>
    <header class="header">
    <div class="contenedor">
    <h1 class="logo">REAL STAR </h1>
    <span class="icon-menu" id="btn-menu"></span>
    <nav class="nav" id="nav">
    <ul class="menu">
        <li class="menu__item"><a class="menu__link select" href="#">INICIO</a></li>
        <li class="menu__item"><a class="menu__link" href="listadoBuses.php">BUSES</a></li>
        <li class="menu__item"><a class="menu__link" href="listadoCobrador.php">EMPLEADOS</a></li>
        <li class="menu__item"><a class="menu__link" href="listadoPasajero.php">PASAJEROS</a></li>
        <li class="menu__item"><a class="menu__link" href="login.php">SALIR</a></li>
    </ul>
    </nav>
    </div>
    </header>
    <div class="banner">
        <img src="imgBus/10.jpg" alt="" class="banner__img">
        <div class="contenedor">
            <h2 class="banner__titulo"> La mejor opción de transporte a tu alcance </h2>
            <p class="banner__txt"> Elígenos como tu medio de transporte hacia tu destino </p>
        </div>
    </div>
    <main class="main">
    <div class="contenedor">
    <section class="info">
        <article class="info__columna">
            <img src="img/rrhh.jpg" alt="" class="info__img">
            <h2 class="info__titulo">VISIÓN</h2>
            <p class="info__txt">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur doloremque impedit eaque hic voluptatibus optio.</p>
        </article>
        <article class="info__columna">
            <img src="img/8.jpg" alt="" class="info__img">
            <h2 class="info__titulo">MISIÓN</h2>
            <p class="info__txt">Doloribus impedit libero dolor quod laborum porro, maiores accusantium quaerat cum. Mollitia unde beatae laborum.</p>
        </article>
        <article class="info__columna">
           <center><img src="img/logo.jpg" alt="" class="info__img"></center>
            <h2 class="info__titulo">¿QUIENES SOMOS?</h2>
            <p class="info__txt">Somos una empresa dedicada al rubro de transportes público
                                 y privado, para todos los diferentes usuarios que nos elijan
                                 como su preferencia y nos dedicamos a transportar a los usuarios a su destino</p>
        </article>
    </section>
    <section class="conoceme">
        <h2 class="section__titulo"> Conóceme</h2>
        <div class="conoceme__columna">
            <img src="imgBus/10.jpg" alt="" class="conoceme__img">
            <div class="conoceme__descripcion">
                <h3 class="coneceme__titulo">Programación</h3>
                <p class="conoceme__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, aut.</p>
            </div>
        </div>
        <div class="conoceme__columna">
            <img src="imgBus/10.jpg" alt="" class="conoceme__img">
            <div class="conoceme__descripcion">
                <h3 class="coneceme__titulo">Diseño Web</h3>
                <p class="conoceme__txt">Modi ducimus sunt, fuga eius culpa dolore sapiente tempore recusandae?</p>
            </div>
        </div>
        <div class="conoceme__columna">
            <img src="imgBus/10.jpg" alt="" class="conoceme__img">
            <div class="conoceme__descripcion">
                <h3 class="coneceme__titulo">Ejemplo</h3>
                <p class="conoceme__txt">Fugiat quis explicabo vel aspernatur. Fuga unde minima necessitatibus ipsa!</p>
            </div>
        </div>
        <div class="conoceme__columna">
            <img src="imgBus/10.jpg" alt="" class="conoceme__img">
            <div class="conoceme__descripcion">
                <h3 class="coneceme__titulo">Recursos Humanos</h3>
                <p class="conoceme__txt">Necessitatibus illum, labore laudantium iste tempora qui fuga illo delectus!</p>
            </div>
        </div>
    </section>        
    </div>
    </main>
    <footer class="footer">
        <div class="social">
            <a href="https://www.facebook.com" class="fa fa-facebook"></a>
            <a href="" class="fa fa-twitter"></a>
            <a href="https://mail.google.com/mail/u/0/#inbox" class="fa fa-google-plus"></a>
            <a href="https://www.youtube.com" class="fa fa-youtube"></a>
        </div>
        <p class="copy">&copy; REAL STAR  2005 - Todos los derechos reservados</p>
        <p><div class="wrap"> 
            <div class="widget" style="display: flex;
                    flex-direction: column;
                    align-items: flex-end">
              <div class="fecha" style="display: flex;
                          flex-direction: row;
                          justify-content: space-around;
                          width: 15%">
                <p id="diaSemana" class="diaSemana"></p>
                <p id="dia" class="dia"></p>
                <p> de </p>
                <p id="mes" class="mes"></p>
                <p> del </p>
                <p id="year" class="year"></p>
              </div>

              <div class="reloj" style="display: flex;
                      flex-direction: row;
                      justify-content: space-around;
                      width: 8%">
                <p id="horas" class="horas"></p>
                <p>:</p>
                <p id="minutos" class="minutos"></p>
                <p>:</p>
                <div class="caja-segundos">
                  <p id="ampm" class="ampm"></p>
                  <p id="segundos" class="segundos"></p>
                </div>
              </div>
            </div>
          </div></p>
    </footer>
    <script src="js/reloj.js"></script>
    <script src="js/central.js"></script>
</body>
</html>