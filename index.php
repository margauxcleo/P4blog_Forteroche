<?php
session_start();
?>

<?php

require_once('controller/controller_frontend.php');
require_once('controller/controller_backend.php');

$frontendController = new FrontendController();
$backendController = new BackendController();

try {
	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'listPosts') {
			$frontendController->listPosts();
		}
		elseif ($_GET['action'] == 'post') {
			if (isset($_GET['id']) && $_GET['id'] >= 0 ) {
				$frontendController->post();
			}
			else {
				throw new Exception('Aucun identifiant de billet envoyé');
			}
		}
		elseif ($_GET['action'] == 'addComment') {
			if (isset($_GET['id']) && $_GET['id'] >=0 ) {
				if (!empty($_POST['author']) && !empty($_POST['comment'])) {
					$frontendController->addComment($_GET['id'], $_POST['author'], $_POST['comment']);
				}
				else {
					throw new Exception('Tous les champs ne sont pas remplis !');
				}
			}
			else {
				throw new Exception('Aucun identifiant de billet envoyé');
			}
		}

		elseif ($_GET['action'] == 'contactMe') {
			$backendController->contactMe();
		}

		elseif ($_GET['action'] == 'logInPage') {
			$backendController->logInPage();
		}

		elseif ($_GET['action'] == 'login') {  
			if (!empty($_POST['email']) && !empty($_POST['password'])) {
				$backendController->login($_POST['email'], $_POST['password']);
			}
			else {
					throw new Exception('Tous les champs ne sont pas remplis !');
				}
		}

		elseif ($_GET['action'] == 'admin') {
			$backendController->admin();
		}

		elseif ($_GET['action'] == 'tablePosts') {
			$backendController->tablePosts();
		}

		elseif ($_GET['action'] == 'newPostPage') {
			$backendController->newPostPage();
		}

		elseif ($_GET['action'] == 'createNewPost') {
			if (!empty($_POST['title']) && !empty($_POST['resume']) && !empty($_POST['content'])) {
				$backendController->createNewPost($_POST['title'], $_POST['resume'], $_POST['content']);	
			}
			else {
				throw new Exception('Tous les champs ne sont pas remplis !');
			}
		}

		elseif ($_GET['action'] == 'tableUpdate') {
			$backendController->tableUpdate();
		}

		elseif ($_GET['action'] == 'updateAPost') {
			if (isset($_GET['id']) && $_GET['id'] >= 0 ) {
					$backendController->updateAPost();
				}
			else {
				throw new Exception('Modification impossible, veuillez préciser le chapitre à modifier.');
			}	
		}

		elseif ($_GET['action'] == 'saveUpdatedPost') {
			if (isset($_GET['id']) && $_GET['id'] >= 0 ) {
				if (!empty($_POST['title']) && !empty($_POST['resume']) && !empty($_POST['content'])) {

					$backendController->saveUpdatedPost($_GET['id'], $_POST['title'], $_POST['resume'], $_POST['content']);	
				}
				else { 
					throw new Exception('Attention, tous les champs doivent être remplis !');
				}
			}
			else {
				throw new Exception('Enregistrement impossible, veuillez préciser le chapitre à modifier.');
			}	
		}	

		elseif ($_GET['action'] == 'tableDelete') {
			$backendController->tableDelete();
		}

		elseif ($_GET['action'] == 'deleteAPost') {
			if (isset($_GET['id']) && $_GET['id'] >= 0 ) {
					$backendController->deleteAPost();
				}
			else {
				throw new Exception('Suppression impossible, veuillez préciser le chapitre à supprimer.');
			}	
		}

		elseif ($_GET['action'] == 'saveDelete') {
			if (isset($_GET['id']) && $_GET['id'] >= 0 ) {
				$backendController->saveDelete($_GET['id']);
			}
			else {
				throw new Exception('Suppression impossible, veuillez préciser le chapitre à supprimer.');
			}
		}

		elseif ($_GET['action'] == 'tableComments') {
			$backendController->tableComments();
		}

		elseif ($_GET['action'] == 'signaledAComment') {
			if (isset($_GET['id']) && $_GET['id'] >= 0 ) {
					$frontendController->signaledAComment($_GET['id']);		
			}
			else {
				throw new Exception('Signalement impossible, l\'identifiant du commentaire est introuvable.');
			}
		}

		elseif ($_GET['action'] == 'updateAComment') {
			if (isset($_GET['id']) && $_GET['id'] >= 0 ) {
					$backendController->updateAComment();
				}
			else {
				throw new Exception('Modification impossible, veuillez préciser l\'identifiant du commentaire à modifier.');
			}	
		}
 
		elseif ($_GET['action'] == 'saveUpdatedComment') {
			if (isset($_GET['id']) && $_GET['id'] >= 0 ) {
				if (!empty($_POST['comment'])) {

					$backendController->saveUpdatedComment($_GET['id'], $_POST['comment']);	
				}
				else { 
					throw new Exception('Attention, tous les champs doivent être remplis !');
				}
			}
			else {
				throw new Exception('Enregistrement impossible, veuillez préciser le commentaire à modifier.');
			}
		}	

		elseif ($_GET['action'] == 'deleteAComment') {
			if (isset($_GET['id']) && $_GET['id'] >= 0 ) {
					$backendController->deleteAComment();
			}
			else {
				throw new Exception('Suppression impossible, veuillez préciser le commentaire à supprimer.');
			}	
		}

		elseif ($_GET['action'] == 'saveCommentDelete') {
			if (isset($_GET['id']) && $_GET['id'] >= 0 ) {
				$backendController->saveCommentDelete($_GET['id']);
			}
			else {
				throw new Exception('Suppression non enregistrée, nous ne reconnaissons pas l\'identifiant du commentaire.');
			}
		}

		elseif ($_GET['action'] == 'contactSupport') {
			$backendController->contactSupport();
		}

		elseif ($_GET['action'] == 'tools') {
			$backendController->tools();
		}

		elseif ($_GET['action'] == 'suggestion') {
			$backendController->suggestion();
		}

		elseif ($_GET['action'] == 'cookies') {
			$frontendController->cookies();
		}

	}	
	else {
		$frontendController->listPosts();
	}
}

catch(Exception $e) {
	$errorMessage = $e->getMessage();
	require('view/frontend/errorView.php');	
}


