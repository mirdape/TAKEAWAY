
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	  <link type="text/css" rel="stylesheet" href="css/styles.css"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
	<body class="white">
		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script>
		 $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
	 $('#modal1').modal('open');
  });
		</script>
			<nav>
			<div class="nav-wrapper pink darken-4">
				<a href="#" class="brand-logo">Logo</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li class="desplegable">
					<a href="index.html">Inicio</a>
					<ul class="submenu">
					<li><a href="#">Ensaladas</a></li>
					<li><a href="#">Principales</a></li>
					<li><a href="#">Postres</a></li>
					</ul>
					</li>
					<li><a href="info.html">Info</a></li>
					<li><a href="fotos.html">Fotos</a></li>
					<li><a href="contacto.html">Contacto</a></li>
				</ul>
			</div>
			</nav>
			<!-- ensaladas -->
			<section id="ensaladas">
				<h2 class="center-align pink lighten-5">Ensaladas</h2>
					<div class="row">
						<div class="col s12 m6 l3">
						 <div class="card">
							<div class="card-image waves-effect waves-block waves-light">
									<div class="fixed-action-btn horizontal" style="position: absolute;display: inline-block;right:10px;top:10px">
											<a class="btn-floating btn-large red">
											  <i class="medium material-icons">shopping_basket</i>
											</a>
											<ul>
											  <li><a class="btn-floating red center">x1</a></li>
											  <li><a class="btn-floating yellow darken-1 center">x2</a></li>
											  <li><a class="btn-floating green center">x3</a></li>
											  <li><a class="btn-floating blue center">x4</a></li>
											</ul>
										</div>
									<img class="activator" src="img/ensalada_capri.jpg">
								</div>
								<div class="card-content">
								  <span class="card-title activator grey-text text-darken-4">Ensalada Caprichosa<i class="material-icons right"></i></span>
								  <p></p>
								</div>
								<div class="card-reveal">
								  <span class="card-title grey-text text-darken-4">Ensalada Caprichosa<i class="material-icons right">close</i></span>
								  <p>Deliciosa combinación gracias a la base vegetal, rica en vitaminas, al jamón dulce y al queso, que aportan proteínas y calcio al plato. El toque dulce del maíz y la zanahoria dan un sabor agradable en boca.</p>
								</div>
						  </div>
						</div>
						<div class="col s12 m6 l3">
						 <div class="card">
							<div class="card-image waves-effect waves-block waves-light">
							<div class="fixed-action-btn horizontal" style="position: absolute;display: inline-block;right:10px;top:10px ">
									<a class="btn-floating btn-large red">
									  <i class="medium material-icons">shopping_basket</i>
									</a>
									<ul>
									  <li><a class="btn-floating red center">x1</a></li>
									  <li><a class="btn-floating yellow darken-1 center">x2</a></li>
									  <li><a class="btn-floating green center">x3</a></li>
									  <li><a class="btn-floating blue center">x4</a></li>
									</ul>
								</div>
							  <img class="activator" src="img/ensalada_cuscus.jpg">
							</div>
							<div class="card-content">
							  <span class="card-title activator grey-text text-darken-4">Ensalada Cuscús<i class="material-icons right"></i></span>
							  <p><p>
								</div>
							<div class="card-reveal">
							  <span class="card-title grey-text text-darken-4">Ensalada cuscús<i class="material-icons right">close</i></span>
							  <p>¿Te gustan los platos exóticos? Esta ensalada es ideal para los amantes del cuscús. Con una base de caldo de carne muy nutritiva, combinado con verduras y el toque dulce de las pasas. De segundo lo puedes combinar amb alguna de nuestras carnes.</p>
							</div>
						  </div>
						</div>
						<div class="col s12 m6 l3">
						 <div class="card">
							<div class="card-image waves-effect waves-block waves-light">
							<div class="fixed-action-btn horizontal" style="position: absolute;display: inline-block;right:10px;top:10px ">
									<a class="btn-floating btn-large red">
									  <i class="medium material-icons">shopping_basket</i>
									</a>
									<ul>
									  <li><a class="btn-floating red center">x1</a></li>
									  <li><a class="btn-floating yellow darken-1 center">x2</a></li>
									  <li><a class="btn-floating green center">x3</a></li>
									  <li><a class="btn-floating blue center">x4</a></li>
									</ul>
								</div>
							  <img class="activator" src="img/ensalada_pasta.jpg">
							</div>
							<div class="card-content">
							  <span class="card-title activator grey-text text-darken-4">Ensalada de pasta<i class="material-icons right"></i></span>
							  <p></p>
							</div>
							<div class="card-reveal">
							  <span class="card-title grey-text text-darken-4">Ensalada de pasta<i class="material-icons right">close</i></span>
							  <p>Ensalada fresca con la base de pasta Fusilli, junto con el atún y las hortalizas forman un plato completo. Acompañado con mayonesa.</p>
							</div>
						  </div>
						</div>
						<div class="col s12 m6 l3">
						 <div class="card">
							<div class="card-image waves-effect waves-block waves-light">
							<div class="fixed-action-btn horizontal" style="position: absolute;display: inline-block;right:10px;top:10px ">
									<a class="btn-floating btn-large red">
									  <i class="medium material-icons">shopping_basket</i>
									</a>
									<ul>
									  <li><a class="btn-floating red center">x1</a></li>
									  <li><a class="btn-floating yellow darken-1 center">x2</a></li>
									  <li><a class="btn-floating green center">x3</a></li>
									  <li><a class="btn-floating blue center">x4</a></li>
									</ul>
								</div>
							  <img class="activator" src="img/ensalada_cesar.jpg">
							</div>
							<div class="card-content">
							  <span class="card-title activator grey-text text-darken-4">Ensalada César<i class="material-icons right"></i></span>
							  <p></p>
							</div>
							<div class="card-reveal">
							  <span class="card-title grey-text text-darken-4">Ensalada César<i class="material-icons right">close</i></span>
							  <p>¿Has probado ya nuestra ensalada clásica? Con base vegetal rica en vitaminas, pollo rebozado crujiente y queso que nos ofrece una buena fuente de calcio.</p>
							</div>
						  </div>
						</div>	
					</div>
			</section>
			<!-- principales -->
			<section id="principales">
				<h2 class="center-align grey lighten-3">Principales</h2>
					<div class="row">
						<div class="col s12 m6 l3">
						 <div class="card">
							<div class="card-image waves-effect waves-block waves-light">
							  <img class="activator" src="img/crema_verduras.jpg">
							</div>
							<div class="card-content">
							  <span class="card-title activator grey-text text-darken-4">Crema de verduras<i class="material-icons right">more_vert</i></span>
							  <p><a href="#">This is a link</a></p>
							</div>
							<div class="card-reveal">
							  <span class="card-title grey-text text-darken-4">Crema de verduras<i class="material-icons right">close</i></span>
							  <p>Mix de verduras variadas que nos aportan vitaminas y minerales. Plato digestivo y fácil de tomar tanto en frío como en caliente. Combínalo con una de nuestras carnes o pescados para conseguir el equilibrio perfecto.</p>
							</div>
						  </div>
						</div>
						<div class="col s12 m6 l3">
						 <div class="card">
							<div class="card-image waves-effect waves-block waves-light">
							  <img class="activator" src="img/lomo_asado.jpg">
							</div>
							<div class="card-content">
							  <span class="card-title activator grey-text text-darken-4">Lomo asado<i class="material-icons right">more_vert</i></span>
							  <p><a href="#">This is a link</a></p>
							</div>
							<div class="card-reveal">
							  <span class="card-title grey-text text-darken-4">Lomo asado<i class="material-icons right">close</i></span>
							  <p>Plato muy nutritivo, el lomo aromatizado con especias, va acompañado con verduras. Puedes combinarlo con una de nuestras cremas.</p>
							</div>
						  </div>
						</div>
						<div class="col s12 m6 l3">
						 <div class="card">
							<div class="card-image waves-effect waves-block waves-light">
							  <img class="activator" src="img/merluza_romero.jpg">
							</div>
							<div class="card-content">
							  <span class="card-title activator grey-text text-darken-4">Merluza al romero<i class="material-icons right">more_vert</i></span>
							  <p><a href="#">This is a link</a></p>
							</div>
							<div class="card-reveal">
							  <span class="card-title grey-text text-darken-4">Merluza al romero<i class="material-icons right">close</i></span>
							  <p>Plato ideal para los amantes del salmón y los países nórdicos. El salmón aporta proteínas de alto valor biológico, y ácido graso omega-3. Junto con el brócoli y los espárragos, que proporcionan vitaminas y minerales, se equilibra el plato de una forma saludable.</p>
							</div>
						  </div>
						</div>
						<div class="col s12 m6 l3">
						 <div class="card">
							<div class="card-image waves-effect waves-block waves-light">
							  <img class="activator" src="img/tortilla_berenguena.jpg">
							</div>
							<div class="card-content">
							  <span class="card-title activator grey-text text-darken-4">Tortilla Berenguena<i class="material-icons right">more_vert</i></span>
							  <p><a href="#">This is a link</a></p>
							</div>
							<div class="card-reveal">
							  <span class="card-title grey-text text-darken-4">Tortilla berenguena<i class="material-icons right">close</i></span>
							  <p>Plato rico y saludable. Tortilla equilibrada con berenjena elaborada de forma tradicional. </p>
							</div>
						  </div>
						</div>	
					</div>
			</section>
			<!-- postres -->
			<section id="postres">
				<h2 class="center-align lime lighten-4">Postres</h2>
					<div class="row">
						<div class="col s12 m6 l3">
						 <div class="card">
							<div class="card-image waves-effect waves-block waves-light">
							  <img class="activator" src="img/yogurt.jpg">
							</div>
							<div class="card-content">
							  <span class="card-title activator grey-text text-darken-4">Yogur fresa<i class="material-icons right">more_vert</i></span>
							  <p><a href="#">This is a link</a></p>
							</div>
							<div class="card-reveal">
							  <span class="card-title grey-text text-darken-4">Yogur fresa<i class="material-icons right">close</i></span>
							  <p>Yogur artesanal de fresa</p>
							</div>
						  </div>
						</div>
						<div class="col s12 m6 l3">
						 <div class="card">
							<div class="card-image waves-effect waves-block waves-light">
							  <img class="activator" src="img/piña.jpg">
							</div>
							<div class="card-content">
							  <span class="card-title activator grey-text text-darken-4">Piña<i class="material-icons right">more_vert</i></span>
							  <p><a href="#">This is a link</a></p>
							</div>
							<div class="card-reveal">
							  <span class="card-title grey-text text-darken-4">Piña<i class="material-icons right">close</i></span>
							  <p>Piña natural</p>
							</div>
						  </div>
						</div>
						<div class="col s12 m6 l3">
						 <div class="card">
							<div class="card-image waves-effect waves-block waves-light">
							  <img class="activator" src="img/crumble.jpg">
							</div>
							<div class="card-content">
							  <span class="card-title activator grey-text text-darken-4">Crumble de manzana<i class="material-icons right">more_vert</i></span>
							  <p><a href="#">This is a link</a></p>
							</div>
							<div class="card-reveal">
							  <span class="card-title grey-text text-darken-4">Crumble de manzana<i class="material-icons right">close</i></span>
							  <p>Manzana cocida con arándanos y crujiente de galleta, avena y canela.</p>
							</div>
						  </div>
						</div>
						<div class="col s12 m6 l3">
						 <div class="card">
							<div class="card-image waves-effect waves-block waves-light">
							  <img class="activator" src="img/helado_choc.jpg">
							</div>
							<div class="card-content">
							  <span class="card-title activator grey-text text-darken-4">Helado de chocolate<i class="material-icons right">more_vert</i></span>
							  <p><a href="#">This is a link</a></p>
							</div>
							<div class="card-reveal">
							  <span class="card-title grey-text text-darken-4">Helado de chocolate<i class="material-icons right">close</i></span>
							  <p>Helado de chocolate</p>
							</div>
						  </div>
						</div>
					</div>
			</section>
			<footer class="page-footer grey lighten-2">
			<div class="container">
				<div class="row">
				<div class="col l6 s12">
                <h5 class="black-text">Footer Content</h5>
                <p class="black-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
				</div>
				<div class="col l4 offset-l2 s12">
                <h5 class="black-text">Links</h5>
                <ul>
                  <li><a class="black-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="black-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="black-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="black-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
				</div>
				</div>
			</div>
          <div class="footer-copyright pink darken-3">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
		<!-- Modal Structure -->
		  <div id="modal1" class="modal">
			<div class="modal-content">
			  <h4>Suscríbete a nuestra newsletter</h4>
			  <form method="post">
			  <div class="input-field">
			  <input  maxlenght="100" type="email" name="email" id="email">
			  <label for="email">Tu correo</label>
			  </div>
			  <button class="btn waves-effect waves-light" type="submit">Suscribirme</button>
			  
			  </form>
			</div>
			<div class="modal-footer">
			  <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
			</div>
		  </div>
		    <?php
			//se comprueba que llegan datos metodo POST
		if ($_POST){
			echo $_POST ['email'];
			echo "<br>";
			$email=$_POST ['email'];
			$mysqli=new mysqli ('127.0.0.1','root','','takeaway');
			mysqli_set_charset($mysqli,"utf8");
			if ($mysqli)
			{
				
				$sql="INSERT INTO newsletter (email) VALUES ('$email');";
				$query=$mysqli->query($sql);
				if ($query)
				{
			echo "<script> 
			$(document).ready(function(){
			$('#modal1').modal('close');
			alert ('Gracias por suscribirte!')
			});
			</script>";
						
		}
		else 
		{
			echo "Ha habido un problema con el registro del formulario";
		}
	}
	$mysqli->close();
	}
	
?>
    </body>
  </html>