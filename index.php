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

		elseif ($_GET['action'] == 'logOutRequest') {
			$backendController->logOutRequest();
		}

		elseif ($_GET['action'] == 'logOut') { 
		// == Verif nécessaire ac Quentin -> en a-t-on vraiment besoin ici ?
			if (empty($_SESSION['userID'])) {
				header('Location: index.php?action=login');
			}
			else { 
				$_SESSION = array();
				session_destroy();
				header('Location: index.php?action=listPosts');
			}
		}

		// suppression de la partie controle session - test
		elseif ($_GET['action'] == 'admin') {
			// == Verif nécessaire ac Quentin 
			if (empty($_SESSION['userID'])) {
				header('Location: index.php?action=login');
			}
			else {
			$backendController->admin();
			}
		}

		elseif ($_GET['action'] == 'tablePosts') {
			// == Verif nécessaire ac Quentin 
			if (empty($_SESSION['userID'])) {
				header('Location: index.php?action=login');
			}
			else {
			$backendController->tablePosts();
			}
		}

		elseif ($_GET['action'] == 'newPostPage'){
			// == Verif nécessaire ac Quentin  
			if (empty($_SESSION['userID'])) {
				header('Location: index.php?action=login');
			}
			else {
			$backendController->newPostPage();
			}
		}

		elseif ($_GET['action'] == 'createNewPost') {
			// == Verif nécessaire ac Quentin  
			if (empty($_SESSION['userID'])) {
				header('Location: index.php?action=login');
			}
			else {
				if (!empty($_POST['title']) && !empty($_POST['resume']) && !empty($_POST['content'])) {
					$backendController->createNewPost($_POST['title'], $_POST['resume'], $_POST['content']);	
				}
				else {
					throw new Exception('Tous les champs ne sont pas remplis !');
				}
			}
		}

		elseif ($_GET['action'] == 'tableUpdate') {
			// == Verif nécessaire ac Quentin  
			if (empty($_SESSION['userID'])) {
				header('Location: index.php?action=login');
			}
			else {
				$backendController->tableUpdate();
			}	
		}

		elseif ($_GET['action'] == 'updateAPost') {
			// == Verif nécessaire ac Quentin  
			if (empty($_SESSION['userID'])) {
				header('Location: index.php?action=login');
			}
			else {
				if (isset($_GET['id']) && $_GET['id'] >= 0 ) {
						$backendController->updateAPost();
					}
				else {
					throw new Exception('Modification impossible, veuillez préciser le chapitre à modifier.');
				}
			}
		}

		elseif ($_GET['action'] == 'saveUpdatedPost') {
			// == Verif nécessaire ac Quentin  
			if (empty($_SESSION['userID'])) {
				header('Location: index.php?action=login');
			}
			else {
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
		}	

		elseif ($_GET['action'] == 'tableDelete') {
			// == Verif nécessaire ac Quentin  
			if (empty($_SESSION['userID'])) {
				header('Location: index.php?action=login');
			}
			else {
			$backendController->tableDelete();
			}
		}

		elseif ($_GET['action'] == 'deleteAPost') {
			// == Verif nécessaire ac Quentin  
			if (empty($_SESSION['userID'])) {
				header('Location: index.php?action=login');
			}
			else {
				if (isset($_GET['id']) && $_GET['id'] >= 0 ) {
						$backendController->deleteAPost();
					}
				else {
					throw new Exception('Suppression impossible, veuillez préciser le chapitre à supprimer.');
				}	
			}
		}

		elseif ($_GET['action'] == 'saveDelete') {
			// == Verif nécessaire ac Quentin  
			if (empty($_SESSION['userID'])) {
				header('Location: index.php?action=login');
			}
			else {
				if (isset($_GET['id']) && $_GET['id'] >= 0 ) {
					$backendController->saveDelete($_GET['id']);
				}
				else {
					throw new Exception('Suppression impossible, veuillez préciser le chapitre à supprimer.');
				}
			}
		}

		elseif ($_GET['action'] == 'tableComments') {
			// == Verif nécessaire ac Quentin  
			if (empty($_SESSION['userID'])) {
				header('Location: index.php?action=login');
			}
			else {
			$backendController->tableComments();
			}
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
			// == Verif nécessaire ac Quentin  
			if (empty($_SESSION['userID'])) {
				header('Location: index.php?action=login');
			}
			else {
				if (isset($_GET['id']) && $_GET['id'] >= 0 ) {
						$backendController->updateAComment();
					}
				else {
					throw new Exception('Modification impossible, veuillez préciser l\'identifiant du commentaire à modifier.');
				}	
			}
		}
 
		elseif ($_GET['action'] == 'saveUpdatedComment') {
			// == Verif nécessaire ac Quentin  
			if (empty($_SESSION['userID'])) {
				header('Location: index.php?action=login');
			}
			else {
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
		}	

		elseif ($_GET['action'] == 'deleteAComment') {
			// == Verif nécessaire ac Quentin  
			if (empty($_SESSION['userID'])) {
				header('Location: index.php?action=login');
			}
			else {
				if (isset($_GET['id']) && $_GET['id'] >= 0 ) {
						$backendController->deleteAComment();
				}
				else {
					throw new Exception('Suppression impossible, veuillez préciser le commentaire à supprimer.');
				}	
			}
		}

		elseif ($_GET['action'] == 'saveCommentDelete') {
			// == Verif nécessaire ac Quentin  
			if (empty($_SESSION['userID'])) {
				header('Location: index.php?action=login');
			}
			else {
				if (isset($_GET['id']) && $_GET['id'] >= 0 ) {
					$backendController->saveCommentDelete($_GET['id']);
				}
				else {
					throw new Exception('Suppression non enregistrée, nous ne reconnaissons pas l\'identifiant du commentaire.');
				}
			}
		}

		elseif ($_GET['action'] == 'contactSupport') {
			// == Verif nécessaire ac Quentin  
			if (empty($_SESSION['userID'])) {
				header('Location: index.php?action=login');
			}
			else {
			$backendController->contactSupport();
			}
		}

		elseif ($_GET['action'] == 'tools') {
			// == Verif nécessaire ac Quentin  
			if (empty($_SESSION['userID'])) {
				header('Location: index.php?action=login');
			}
			else {
			$backendController->tools();
			}
		}

		elseif ($_GET['action'] == 'suggestion') {
			// == Verif nécessaire ac Quentin  
			if (empty($_SESSION['userID'])) {
				header('Location: index.php?action=login');
			}
			else {
			$backendController->suggestion();
			}
		}

		elseif ($_GET['action'] == 'cookies') {
			$frontendController->cookies();
		}

		elseif ($_GET['action'] == 'cgu') {
			$frontendController->cgu();
		}

		elseif ($_GET['action'] == 'legalNotice') {
			$frontendController->legalNotice();
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


