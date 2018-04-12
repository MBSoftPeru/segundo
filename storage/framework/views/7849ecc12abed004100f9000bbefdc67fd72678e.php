<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta id="csrf-token" name="csrf-token" content="<?php echo e(csrf_token()); ?>">

	<title><?php echo e(config('app.name', 'Laravel')); ?></title>

	<!-- Styles -->
	<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
	<div id="app">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="left">
					<div class="navbar-left" id="menu-search">
						<a class="navbar-brand" href="#">
							<img alt="Brand" src="https://icon-icons.com/icons2/37/PNG/128/glasses_3629.png" >							
						</a>
						<?php $__env->startSection('searchRegistro'); ?>

						<?php echo $__env->yieldSection(); ?>                       
					</div>
				</div>
				<div class="right">						
					<div class="nav navbar-nav navbar-right" id="menu-login">
						<?php $__env->startSection('formLoginRegistro'); ?>

						<?php echo $__env->yieldSection(); ?>						
					</div>
				</div>
			</div>
		</nav>		
		<section id="aplication_registro">
			<?php echo $__env->yieldContent('content'); ?>
		</section>
	</div>

	<!-- Scripts -->
	
	<script src="<?php echo e(asset('js/app.js')); ?>"></script>
	<?php $__env->startSection('scriptsInclude'); ?>
			
	<?php echo $__env->yieldSection(); ?>
</body>
</html>