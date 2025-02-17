<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página web</title>
    <link rel="stylesheet" href="estilos.css">
<!--     <link rel="stylesheet" href="estilo.css">
 -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>




    
    <header class="header" id="inicio">
<!--               <img src="img/bx-cart.svg " class="carrito">-->      
               <img class="hamburguer" src="img/hamburguesa.svg" alt="">
               <nav class="menu-navegacion">

                <a href="#registro">registro</a>
                <a href="#inicio sesion">login</a>
                <a href="#inicio">Inicio</a>
                <a href="#servicio">Servicio</a>
                <a href="#galeria">Portafolio</a>
                <a href="#expertos">Especializados</a>
                <a href="#footer">Contacto</a>
        </nav>
        <div class="contenedor head">
            <h1 class="titulo">CST</h1>
<!--             <img src="img/modificacion.jpg" width="200px" alt="">
 -->           <h1 class="titulo">CENTRO DE SERVCICIO TECNICO</h1>
            <p class="copy">SOLUCIONES PARA TU HOGAR</p>
        </div>

    </header>
    

    <div class="registro" id="registro"  >
        <h1 >formulario</h1>  </div>

        <div class="parrafo">
        <p> porfavor llena todos los campos</p>
    </div>
    

    <form action="registro.php" method="POST" >

                    <h2>hola</h2>
                    <p>registrate</p>
                    
                
                    <div class="input-wrapper">
                      <input type="text" name="name" placeholder="nombre" required>
                        
                   </div>
                
                    <div class="input-wrapper">
                      <input type="email" name="email" placeholder="correo" required>
                                 
                    </div>    
                
                
                    <div class="input-wrapper">
                      <input type="password" name="password" placeholder="contraseña" required>
                        <img class="input-icon" src="images/password.svg" alt="">                 
                    </div>
                
                 
                       <input class="btn" type="submit" name="register" value="enviar">  
                
                
                   </form> 



<main>

</section>




    <section class="login" id="inicio sesion">
        <h1>Inicio de sesión</h1>

        
        <form action="/login"  class="form"  method="post">

            <div class="input-wrapper">
            <label for="username">Usuario</label>
            <input type="text" id="username" name="username" placeholder="Ingrese su usuario" required>
            </div>


            <div class="input-wrapper">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="Ingrese su contraseña" required>
            <br>
            </div>
            
            <button type="submit"  class="boton" >Iniciar sesión</button>
        </form>
    </section>



        <section class="services contenedor" id="servicio">
            <h2 class="subtitulo">NUESTROS SERVICIOS</h2>
            <div class="contenedor-servicio">
                <img src="img/modificacion.jpg" alt="">
                <div class="checklist-servicio">
                    <div class="service">
                        <h3 class="n-service"><span class="number">1</span>INSTALACION DE EQUIPOS</h3>
                        <p> realizamos instalaciones cumpliendo los requisitos y normas tecnicas.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2</span>REPARACION</h3>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab autem enim illum dolorum nisi. Aspernatur.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">3</span>MANTENIMIENTO</h3>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab autem enim illum dolorum nisi. Aspernatur.</p>
                    </div>

                    <div class="service">
                        <h3 class="n-service"><span class="number">4</span>VENTA</h3>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab autem enim illum dolorum nisi. Aspernatur.</p>
                    </div>


                    <div class="service">
                        <h3 class="n-service"><span class="number">5</span>SOPORTE TECNICO</h3>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab autem enim illum dolorum nisi. Aspernatur.</p>
                    </div>

                    <div class="service">
                        <h3 class="n-service"><span class="number">6</span>MODIFICACION DE REDES</h3>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab autem enim illum dolorum nisi. Aspernatur.</p>
                    </div>


                </div>
            </div>
        </section>

        <section class="gallery" id="galeria">
            <div class="contenedor">
                <h2 class="subtitulo"> PRODUCTOS </h2>

            <div>
                <a href="cart.html"> 
                    <img  class="carrito" src="img/bx-cart.svg" alt=""> 
               </a>
            </div>

                <div class="contenedor-galeria">

                    

                    <img src="img/nevecon.jpg" class="img-galeria" alt="">
                    <img src="img/lavadora 1.jpg" class="img-galeria" alt="">
                    <img src="img/calentadores.webp" class="img-galeria" alt="">
                    <img src="img/estufa cristal.webp" class="img-galeria" alt="">
                    <img src="img/estufa piso.jpg" class="img-galeria" alt="">
                    <img src="img/secadora.jpg" class="img-galeria" alt="">
             
              
                </div>
            </div>
        </section>


        <div   class="imagen-light">
            <img src="img/x-regular-24.png" class="close">
           <img src="" alt="" class="agregar-imagen">   
      
        </div>

  
    


        <section class="contenedor" id="expertos">
            <h2 class="subtitulo">EXPERTOS EN:</h2>
            <section class="experts">
                <div class="cont-expert">
                    <img src="img/redes gas.jpg" alt="">
                    <h3 class="n-expert">DISEÑOS DE REDES</h3>
                </div>
                <div class="cont-expert">
                    <img src="img/herramientas.jpg" alt="">
                    <h3 class="n-expert">MANEJO DE HARRAMIENTAS</h3>
                </div>
                <div class="cont-expert">
                    <img src="img/reparacion.jpg" alt="">
                    <h3 class="n-expert">INTERVENCION DE EQUIPOS</h3>
                </div>
            </section>
        </section>

        


    </main>

    <footer id="footer">
        <div class="contenedor footer-content">
                <div class="contact-us">
                    <h2 class="brand">CENTRO DE SERVICIO TECNICO <br>CST</h2>

                    <p>Somos expertos en servicios</p>
                    

                </div>
                <div class="social-media">
                    <a href=" https://github.com/" class="social-media-icon">
                       <i class='bx bxl-facebook'></i> 
                 </a>
                    <a  class="social-media-icon">
                        <i class='bx bxl-twitter' ></i>
                    </a>
                    <a class="social-media-icon">
                        <i class='bx bxl-instagram' ></i>
                    </a>
                </div>
        </div>
        <div class="line"></div>
    </footer>
    <script src="js/menu.js"></script>
    <script src="js/lightbox.js"></script>
</body>
</html>