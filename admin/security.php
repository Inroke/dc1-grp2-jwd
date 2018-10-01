<?php 

require_once __DIR__ . '/../model/database.php';

session_start();

$user = null;

if (isset($_POST['email']) && isset($_POST['password'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$user = getUtilisateurByEmailPassword($email, $password);
	if (isset($user['id'])) {
		$_SESSION['id'] = $user['id'];
	}
} else if (isset($_SESSION['id'])) {
	//l'utilisateur est déjà connecté
	$user = getEntity("utilisateur", $_SESSION['id']);
}

if (!$user) {
	header('location: login.php');
} 

else if (!$user['admin']){
	header('Location: ../');
}