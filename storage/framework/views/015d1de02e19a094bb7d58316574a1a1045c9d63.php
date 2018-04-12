<?php $__env->startSection('content'); ?>
<link href="<?php echo e(asset('css/registro.css')); ?>" type="text/css" rel="stylesheet">
<section id="cursos_registro">

	<div class="container">
		<div class="row">
			<div id="form_perfil_registro">
				<h1>¿Estos datos son correctos?</h1>
				<br>
			</div>
		</div>
	</div>
	<div id="formularioDatos">
		<div class="row">
				<form class="form" id="frmDatosSociales">
					<div id="datos_recuperados">
						<div class="form-group">
							<input type="text" class="form-control mb_10" value="<?php echo e($nombre); ?>" id=="txtNombreRecuperado" required="required">
							<input type="text" class="form-control mb_10" value="<?php echo e($apellidos); ?>" id=="txtApellidoRecuperado" required="required">
							<input type="text" class="form-control mb_10" value="<?php echo e($correo); ?>" id=="txtCorreoRecuperado" required="required">
						</div>
					</div>
					<div class="container" id="clave_datos_recuperados">
						<p>Escribe una contraseña para acceder a tu cuenta</p>
						<div class="form-group">
							<input type="password" class="form-control mb_10" id="txtClaveFormularioSocial" placeholder="Contraseña (6 o más caracteres)" minlength="6" required="required">
							<span class="msj_alert cl_green" id="clave_msj_ok">Clave correcta</span>
							<span class="msj_alert cl_red" id="clave_msj_error">La clave debe tener 6 o más caracteres</span>
						</div>
					</div>				
					<div class="form-group botonera" id="boton_datos_recuperados">
						<button type="submit" class="btn btn-default btnNootas btnRegistro">Siguiente</button>
					</div>
				</form>
		</div>
	</div>
	<footer>
		<nav>
			<ul>
				<li><a href="#">Qué es Nootas</a></li>
				<li><a href="#">Sobre nosotros</a></li>
				<li><a href="#">Términos y condiciones</a></li>
				<li><a href="#">Política de privacidad</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">&copy; 2017 Nootas</a></li>
			</ul>
		</nav>
	</footer>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scriptsInclude'); ?>
	<script src="<?php echo e(asset("/bower_components/jquery/dist/jquery.min.js")); ?>"></script>
	<script src="<?php echo e(asset('js/Registro.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.nootas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>