<?php

$page = $_GET['page'];
switch ($page) {
	case 'home':
		include 'views/home.php';
		break;

		// Jurusan
	case 'data-jurusan':
		include 'views/data-jurusan.php';
		break;
	case 'add-data-jurusan':
		include 'views/add-data-jurusan.php';
		break;
	case 'store-jurusan':
		include 'controller/JurusanController.php';
		break;
	case 'edit-data-jurusan':
		include 'views/edit-data-jurusan.php';
		break;
	case 'update-jurusan':
		include 'controller/JurusanController.php';
		break;
	case 'delete-data-jurusan':
		include 'controller/JurusanController.php';
		break;

		// Dosen
	case 'data-dosen':
		include 'views/data-dosen.php';
		break;
	case 'add-data-dosen':
		include 'views/add-data-dosen.php';
		break;
	case 'store-dosen':
		include 'controller/DosenController.php';
		break;
	case 'edit-data-dosen':
		include 'views/edit-data-dosen.php';
		break;
	case 'update-dosen':
		include 'controller/DosenController.php';
		break;
	case 'delete-data-dosen':
		include 'controller/DosenController.php';
		break;
	case 'search-dosen':
		include 'controller/DosenController.php';
		break;
	case 'display-data-dosen':
		include 'views/display-data-dosen.php';
		break;

	default:
		include 'views/home.php';
		break;
}
