<?php require VIEW_ROOT . '/templates/header.php'; ?>

	<?php if(empty($pages)): ?>
		<p id="no-pages">Sorry, no pages at the moment.</p>
	<?php else: ?>
			<?php foreach($pages as $page): ?>
				<div class="col-sm-6">
					<div class="entry">
						<div class="title" style="background: rgba(0, 0, 0, .8) url('<?php echo BASE_URL; ?>/<?php echo e($page['ruta_imagen']); ?>') no-repeat center center; background-size: cover;">
							<h3><a href="<?php echo BASE_URL;?>/page.php?page=<?php echo e($page['id']); ?>"><?php echo e($page['titulo']); ?></a></h3>
						</div>
						<div class="cont-entry">
							<p class="info-entry">
								Publicado por <?php echo e($page['id_autor']); ?> el <?php echo e($page['fecha']); ?>
							</p>
							<div class="categorias">
								Categorías:
								<span><?php echo e($page['id_categoria']); ?></span>
							</div>
							<p class="info-text">
								<?php echo e(substr($page['contenido'], 0, 250)) . '...'; ?>
							</p>
							<a href="<?php echo BASE_URL;?>/page.php?page=<?php echo e($page['id']); ?>" class="leer-mas pull-right">Leer más</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>