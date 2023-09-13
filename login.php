<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Classimax | Classified Marketplace Template</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Agency HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Classified Marketplace Template v1.0">

  <!-- favicon -->
  <link href="images/favicon.png" rel="shortcut icon">

  <!-- 
  Essential stylesheets
  =====================================-->
  <link href="plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="plugins/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick/slick-theme.css" rel="stylesheet">
  <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  

  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/header/header.css">


</head>

<body class="body-wrapper">


<header>
	<div class="container" id="menu">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar  navbar-expand-lg navbar-light navigation">
					<a id="logo" class="navbar-brand" href="index.php">
						<img src="images/Mi proyecto.png" alt="" style="width: 50px ; height: 50px;">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li id="home" class="nav-item active">
								<a class="nav-link" href="index.php">Home</a>
							</li>
							<li class="nav-item @@pages">
								<a class="nav-link @@about" href="about-us.php" aria-haspopup="true"
									aria-expanded="false">
									Sobre nosotros
								</a>
							</li>
							<li class="nav-item dropdown dropdown-slide @@listing">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">
									Categorias<span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<ul class="dropdown-menu">
									<li><a class="dropdown-item @@category" href="category.php">Productos</a>
									</li>
									<li><a class="dropdown-item @@category" href="category.php">Servicios</a></li>
								</ul>
							</li>
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
							<li id="login-btn" class="nav-item d-block pt-4">
								<a class="nav-link login-button" href="login.php">Ingresar</a>
							</li>
							<li id="signup-btn" class="nav-item d-block pt-4">
								<a class="nav-link ingresar-btn text-white add-button" href="register.php">Registrate</a>
							</li>
							<li class="nav-item d-block pt-4 carrito_boton" ><a class="nav-link carrito-btn" href="#">Carrito</a></li>
						</ul>

					</div>
				</nav>
			</div>
		</div>
	</div>
</header>

  <section id="content-main" class="login container w-100 p-4 mt-4">
    <div class="row m-auto w-100 p-4">
      <div class="col-lg-5 border p-0">
        <h3 style="background-color: #bdd0ff; font-family: 'Poiret One', cursive;font-size: 1.5rem;"
          class="p-4 text-center w-100">Ingresar</h3>

        <form class="py-4 text-center" action="../controller/iniciarSesion.php" method="post">
          <fieldset class="p-4 ">
            <input name="email" style="font-size:1.2rem; font-weight:400; font-family: 'Poiret One', cursive;"
              class="form-control mb-3" type="text" placeholder="Username" required>
            <input name="clave" style="font-size:1.2rem; font-weight:400; font-family: 'Poiret One', cursive;"
              class="form-control mb-3" type="password" placeholder="Password" required>
              <div class="form-group col-md-9">
                <label>Rol</label>
                <select name="tipo_de_rol" id="" class="form-control">
                      <option value="cliente">Cliente</option>
                      <option value="emprendedor">Emprendedor</option>
                      <option value="administrador">Administrador</option>

                </select>
              </div>
            <button id="btn-ingresar" type="submit" class="btn font-weight-bold w-75 mt-3">Log in</button>
            <a style="font-family: 'Poiret One', cursive; font-size:1.2rem; font-weight:600"
              class="mt-3 d-block text-primary text-center" href="../views/administrador/page-reset-password.php">Forget Password?</a>
            <a style="font-family: 'Poiret One', cursive; font-size:1.2rem; font-weight:600"
              class="my-3 d-block text-primary text-center" href="register.html">Register Now</a>
              <div class="d-flex w-75 m-auto">
                <hr class="border border-secondary w-50">
                <p style="font-weight: 600;" class="mx-2">O</p>
                <hr class="border border-secondary w-50">
              </div>
            <button id="btn-google" type="submit"
              class="btn font-weight-bold m-auto d-flex justify-content-between align-items-center"><img
                src="images/login/google.png" class="mr-2" width="auto" height="auto" alt="">Ingresar con Google </button>
          </fieldset>
        </form>
      </div>
      <div class="col-lg-7 d-none d-lg-flex align-items-center">
        <img id="ilustracion_login" class="img-fluid" src="images/login/Team meeting_Monochromatic 2.png" alt="">
      </div>
    </div>


  </section>

  <!--============================
=            Footer            =
=============================-->



  <!-- 
Essential Scripts
=====================================-->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/popper.min.js"></script>
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <script src="plugins/bootstrap/bootstrap-slider.js"></script>
  <script src="plugins/tether/js/tether.min.js"></script>
  <script src="plugins/raty/jquery.raty-fa.js"></script>
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <script src="plugins/google-map/map.js" defer></script>

  <!-- controlador de login con Google -->
  <script src="js/script.js"></script>
  <script type="module" src="../controller/firebase/signIn.js"></script>

</body>

</html>