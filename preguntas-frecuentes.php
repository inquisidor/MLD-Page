<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/LocalBusiness" lang="es">
    <?php include 'menu.php'; ?>
    <link rel="stylesheet" href="css/stylePreguntas.css">
    <script src="js/showHide.js"></script>
    <body background="img/interrogacion.png">
		<div class="row">
			<div class="col-sm-6">
				<div class="card text-center">
					<article class="card-block">
						<h5><a href="" class="alternar-respuesta">¿Cuáles son los beneficios de rentar un equipo de impresión?</a></h5>
					    <p class="respuesta"> 
						<i><b><?php echo file_get_contents('Texto/PF/beneficios.txt'); ?></b></i>
						<img itemprop="image" src="img/preguntas/equipo.jpg" alt="impresora multifuncional">
						</p><br>

						<h5><a href="" class="alternar-respuesta">¿Cuál es el costo del servicio outsourcing de impresión?</a></h5>
						<p class="respuesta">
						<i><b><?php echo file_get_contents('Texto/PF/costo.txt'); ?></b></i>
						<img itemprop="image" src="img/preguntas/costo.jpg" alt="imagen representando el costo"></p><br>        

						<h5><a href="" class="alternar-respuesta">¿Qué incluye el contrato?</a></h5>
						<p class="respuesta"><i><b><?php echo file_get_contents('Texto/PF/contrato.txt'); ?></b></i><img itemprop="image" src="img/preguntas/contrato.jpg" alt="representando un contrato"></p><br>
						
						<h5><a href="" class="alternar-respuesta">¿Cuál es el tiempo de respuesta cuando se solicita el servicio técnico? </a></h5>
						<p class="respuesta"><i><b><?php echo file_get_contents('Texto/PF/tecnico.txt'); ?></b></i><img itemprop="image" src="img/preguntas/tiempo.jpg" alt="equipo técnico"></p><br>
						
						<h5><a href="" class="alternar-respuesta">¿Prestan servicio a nivel nacional? </a></h5>
						<p class="respuesta"><i><b>Aunque nuestras oficinas están en los altos Mirandinos, ofrecemos éste servicio a todo el país.</b></i><img itemprop="image" src="img/preguntas/venezuela.jpg" alt="bandera de la República Bolivariana de Venezuela"></p><br>
						        
						<h5><a href="" class="alternar-respuesta">¿Cómo hacemos con los consumibles? </a></h5>
						<p class="respuesta"><i><b>Al instalar el equipo, le dejamos a la persona encargada un tóner de respaldo que al ser colocado deberán informar a nuestro CALL CENTER para su inmediata reposición.</b><img itemprop="image" src="img/preguntas/call-center.jpg" alt="centro de llamadas"></i></p><br>
			
						<a href="" id="alternar-todo" class="btn btn-blue-grey btn-rounded">Mostrar u ocultar todas las respuestas</a> 
					</article>
				</div>
			</div>
		</div>
        <?php include 'footer.php'; ?>   
    </body>
</html>