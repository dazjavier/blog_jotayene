<?php require VIEW_ROOT . '/templates/header.php'; ?>
	<?php if(!$page): ?>
		<h2>No se han encontrado páginas por el momento.</h2>
	<?php else: ?>
		<div class="post">
			<div class="post-img" style="background: rgba(0,0,0,.5) url('<?php echo BASE_URL; ?>/<?php echo e($page['ruta_imagen']); ?>') no-repeat center center; background-size: cover; max-width: 100%;"></div>
			<img src="" />
			<h2 class="post-title"><?php echo e($page['titulo']); ?></h2>
			<p class="post-fecha">
				Creado el <?php echo $page['fecha']->format('j M Y h:i A'); ?>.
				<?php if($page['actualizado']): ?>
					Actualizado el <?php echo $page['actualizado']->format('j M Y h:i A'); ?>
				<?php endif; ?>
			</p>
			<p class="post-content"><?php echo nl2br(e($page['contenido'])); ?></p>

			<div class="post-categorias">
				<span><?php echo e($page['id_categoria']); ?></span>
			</div>
		</div>
	<?php endif; ?>
<?php require VIEW_ROOT . '/templates/footer.php'; ?>