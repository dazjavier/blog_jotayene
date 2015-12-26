<?php

require 'app/start.php';

$pages = $db->query("
		SELECT id, titulo, contenido, ruta_imagen, fecha, actualizado, id_categoria, id_autor
		FROM posts
	")->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/home.php';