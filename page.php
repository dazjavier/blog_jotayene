<?php

require 'app/start.php';

if (empty($_GET['page'])){
	$page = false;
} else {
	// Grab page
	$id = $_GET['page'];
	$page = $db->prepare("
			SELECT *
			FROM posts
			WHERE id = :id
		");

	$page->execute(['id' => $id]);
	$page = $page->fetch(PDO::FETCH_ASSOC);

	if($page){
		$page['fecha'] = new DateTime($page['fecha']);

		if($page['actualizado']){
			$page['actualizado'] = new DateTime($page['actualizado']);
		}
	}

}

require VIEW_ROOT . '/page/show.php';

?>