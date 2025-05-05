<?php
   //views/landing.php
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUMINOUS SPA | Pagina Principal</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Iconos Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" href="/build/img/favicon.ico">
    
    <style>
    /* Variables de diseño */
    :root {
        --primary-color: #ff7f50;   /* Coral */
        --secondary-color: #ffa07a; /* Light Salmon */
        --accent-color: #ff4500;    /* Orange Red */
        --dark-color: #2c2c2c;      /* Casi negro */
        --light-color: #fff8f0;     /* Beige claro */
        --hover-color: #ff6347;     /* Tomato (para efectos hover) */
    }

    /* Estilos generales */
    body {
        font-family: 'Montserrat', sans-serif;
        overflow-x: hidden;
        padding-top: 80px;
        color: #333;
    }

    .section-padding {
        padding: 100px 0;
    }

    /* Header/Navbar */
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1030;
        padding: 0.8rem 1rem;
        transition: all 0.4s ease;
        background-color: rgba(255, 255, 255, 0.98) !important;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }

    .navbar.scrolled {
        padding: 0.5rem 1rem;
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
    }

    /* Logo */
    .logo {
        background-image: url('../img/luminous_negro.png');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        width: 250px;
        height: 80px;
        transition: all 0.3s ease;
    }

    .logo:hover {
        transform: scale(1.05);
        filter: drop-shadow(0 0 8px rgba(255, 255, 255, 0.7));
    }

    /* Navegación */
    .nav-link {
        position: relative;
        font-weight: 500;
        color: #000 !important;
        padding: 0.5rem 1.2rem !important;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 0.95rem;
    }

    .nav-link:hover {
        color: var(--accent-color) !important;
        transform: translateY(-2px);
    }

    .nav-link::after {
        content: "";
        position: absolute;
        left: 1.2rem;
        bottom: 0;
        width: calc(100% - 2.4rem);
        height: 2px;
        background-color: var(--accent-color);
        transform: scaleX(0);
        transform-origin: center;
        transition: transform 0.3s ease, opacity 0.3s ease;
        opacity: 0;
    }

    .nav-link:hover::after,
    .nav-link.active::after {
        transform: scaleX(1);
        opacity: 1;
    }

    /* Botón Login */
    .btn-login {
        border-radius: 50px;
        padding: 0.5rem 1.5rem !important;
        transition: all 0.3s ease;
        border: 2px solid var(--accent-color);
        background-color: transparent;
        color: var(--accent-color) !important;
    }

    .btn-login:hover {
        background-color: var(--accent-color);
        color: white !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(255, 115, 0, 0.2);
    }

    /* Sección Inicio/Hero */
    .inicio {
        height: 100vh;
        position: relative;
        overflow: hidden;
    }

    .hero-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('Imagen_inicio.png');
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        z-index: 1;
    }

    .hero-image::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.3);
        z-index: 2;
    }

    .hero-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        max-width: 800px;
        padding: 0 20px;
        text-align: center;
        color: white;
        z-index: 3;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .hero-text .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        padding: 12px 30px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* Sección Nosotros */
    .about-text h2 span {
        color: var(--primary-color);
        font-weight: 700;
    }

    .about-img img {
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    /* Sección Servicios */
    .services .card {
        transition: all 0.3s ease;
        border: none;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        border-radius: 10px;
        overflow: hidden;
        height: 100%;
    }

    .services .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    }

    .services .card-body i {
        color: var(--primary-color) !important;
        margin-bottom: 15px;
    }

    .services .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }

    /* Sección Contacto */
    .contact form {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .contact .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        padding: 12px 30px;
    }

    /* Footer */
    footer {
        background-color: var(--dark-color);
        padding: 30px 0;
    }

    /* Responsive */
    @media (max-width: 991.98px) {
        .logo {
            width: 180px;
            height: 60px;
            margin: 0 auto;
            display: block;
        }
        
        .navbar-collapse {
            background-color: #f8f9fa;
            padding: 1rem;
            margin-top: 1rem;
            border-radius: 0.25rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        .navbar-nav {
            margin-bottom: 1rem;
        }
        
        .nav-item {
            margin: 0.5rem 0;
        }

        .hero-text h1 {
            font-size: 2.5rem;
        }

        .section-padding {
            padding: 60px 0;
        }
    }

    @media (min-width: 992px) {
        .logo-container {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1000;
        }
        
        .navbar-nav.left-items {
            margin-right: auto;
        }
        
        .navbar-nav.right-items {
            margin-left: auto;
            padding-right: 80px;
        }
    }

    /* Ajustes específicos para móviles */
    @media (max-width: 768px) {
        .hero-image {
            background-size: cover;
            background-position: 60% center;
        }
        
        body {
            padding-top: 70px;
        }
    }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container-fluid">
    <!-- Elementos izquierda -->
    <div class="d-flex order-lg-1">
      <ul class="navbar-nav left-items me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#inicio">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#nosotros">SOBRE NOSOTROS</a>
        </li>
      </ul>
    </div>

    <!-- Logo en el centro -->
    <a class="navbar-brand logo-container mx-auto order-lg-2" href="#inicio">
      <div class="logo"></div>
    </a>

    <!-- Botón Hamburguesa -->
    <button class="navbar-toggler order-lg-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Elementos derecha -->
    <div class="collapse navbar-collapse order-lg-3" id="navbarContent">
      <ul class="navbar-nav right-items ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#servicios">SERVICIOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contacto">CONTACTO</a>
        </li>
      </ul>
      
      <!-- Login -->
      <div class="d-flex ms-lg-3">
        <a class="btn btn-login" href="/login">
          <i class="bi bi-person-circle"></i>
          <span class="d-none d-lg-inline ms-1">INICIAR SESIÓN</span>
        </a>
      </div>
    </div>
  </div>
</nav>

<!-- Sección Inicio -->
<section id="inicio" class="inicio">
    <div class="hero-image"></div>
    <div class="hero-text">
        <h1 class="display-3 fw-bold mb-4">BIENVENIDOS AL SPA</h1>
        <p class="fs-4 mb-5">Relájese y renuévese con nuestros tratamientos</p>
        <a href="#servicios" class="btn btn-primary btn-lg px-4 py-2">Ver Tratamientos</a>
    </div>
</section>

<!-- Sección Nosotros -->
<section id="nosotros" class="about section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-img">
                    <img src="/build/img/LUMINOU.jpg" alt="Sobre Luminous Spa" class="img-fluid rounded">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 ps-lg-5 mt-md-5">
                <div class="about-text">
                    <h2 class="fw-bold mb-4">Bienvenidos a <span>Luminous Spa</span></h2>
                    <p class="lead mb-4">Con más de 15 años de experiencia en el sector del bienestar, en Luminous Spa hemos perfeccionado el arte de la relajación y el cuidado personal. Nuestro equipo de terapeutas certificados combina técnicas tradicionales con los últimos avances en cosmetología para ofrecerte una experiencia única.</p>
                    <a href="#servicios" class="btn btn-primary btn-lg">Nuestros Servicios</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección Servicios -->
<section id="servicios" class="services section-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2 class="fw-bold">Nuestros Servicios</h2>
                    <p class="lead">Descubre nuestra gama de tratamientos personalizados</p>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card text-center pb-2">
                    <div class="card-body py-4">
                        <i class="bi bi-flower1" style="font-size: 2.5rem;"></i>
                        <h3 class="card-title py-2">Aromaterapia</h3>
                        <p class="card-text">Terapias con aceites esenciales para equilibrar mente y cuerpo.</p>
                        <a href="#" class="btn btn-primary mt-3">Más información</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card text-center pb-2">
                    <div class="card-body py-4">
                        <i class="bi bi-droplet" style="font-size: 2.5rem;"></i>
                        <h3 class="card-title py-2">Hidroterapia</h3>
                        <p class="card-text">Tratamientos acuáticos para aliviar tensiones y mejorar circulación.</p>
                        <a href="#" class="btn btn-primary mt-3">Más información</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card text-center pb-2">
                    <div class="card-body py-4">
                        <i class="bi bi-hand-index" style="font-size: 2.5rem;"></i>
                        <h3 class="card-title py-2">Masajes</h3>
                        <p class="card-text">Desde relajantes hasta terapéuticos, con técnicas especializadas.</p>
                        <a href="#" class="btn btn-primary mt-3">Más información</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección Contacto -->
<section id="contacto" class="contact section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2 class="fw-bold">Contáctanos</h2>
                    <p class="lead">Estamos para atenderte y resolver tus dudas</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <form action="#" class="bg-white p-4 rounded shadow">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="nombre" placeholder="Nombre completo">
                                <label for="nombre">Nombre completo</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Correo electrónico">
                                <label for="email">Correo electrónico</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Mensaje" id="mensaje" style="height: 150px"></textarea>
                                <label for="mensaje">Mensaje</label>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-primary btn-lg px-5 py-3">Enviar Mensaje</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="mb-0">© 2023 Luminous Spa. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script para efecto de scroll en el navbar -->
<script>
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});
</script>

</body>
</html>