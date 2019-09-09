<?php

//partie controleur 

require_once('model/backend/UsersManager.php');
require_once('model/frontend/PostManager.php');
require_once('model/backend/AdminHomePageManager.php');
require_once('model/frontend/CommentManager.php');

class BackendController
{ 
	private $usersManager;
	private $postManager;
	private $adminHomePageManager;
	private $commentManager;

	function __construct()
	{
		$this->usersManager = new UsersManager();
		$this->postManager = new PostManager();
		$this->adminHomePageManager = new AdminHomePageManager();
		$this->commentManager = new CommentManager();
	}

	public function contactMe()
	{
		require('view/frontend/contactFormView.php');
	}

	public function logInPage()
	{
		require('view/frontend/logInView.php');
	}

	public function login($email, $password) // AR avec Quentin
	{

		// if email existe => recuperer compte dans BDD
		// if mot de passe crypté utilisateur = mot de passe BDD (password_verify)
		// si ok => ajout utilisateur en SESSION + acces espace admin 
		$account = $this->usersManager->getAccount($email);

		if ($_POST['email'] == $account['email']) {
			if (password_verify($_POST['password'], $account['password'])) {
				session_start();
				$_SESSION['userID'] = $account['userID'];
				header('Location: index.php?action=admin');	
			}
			else {
				throw new Exception('Erreur avec les identifiants (2).'); 
			}
		}
		else { 
			throw new Exception('Erreur avec les identifiants.'); 
		}	
	}

	public function admin()
	{
		$totalPosts = $this->adminHomePageManager->totalPosts();
		$totalComments = $this->adminHomePageManager->totalComments();
		$totalSignaledComments = $this->adminHomePageManager->totalSignaledComments();
		require('view/backend/adminHomePageView.php');
	}

	public function tablePosts()
	{
		$posts = $this->postManager->getAllPosts();

		require('view/backend/tablePostsView.php');
	}

	public function newPostPage()
	{
		require('view/backend/newPostView.php');
	}

	public function createNewPost($title, $resume, $content)
	{
		$newPost = $this->postManager->newPost($title, $resume, $content);

		if($newPost === false) {
			throw new Exception('Impossible d\'ajouter le chapitre.');
		}
		else
		{	
			require('view/backend/newPostSuccessView.php');
		}
	}

	public function tableUpdate()
	{
		$posts = $this->postManager->getAllPosts();
		
		require('view/backend/tableUpdatePostsView.php');
	}

	public function updateAPost()
	{
		$post = $this->postManager->getPost($_GET['id']);
		
		require('view/backend/updatePostView.php');
	}

	public function saveUpdatedPost($postId, $title, $resume, $content)
	{

		$updatedPost = $this->postManager->updatePost($postId, $title, $resume, $content);

		if($updatedPost === false) {
			throw new Exception('Problème lors de la mise à jour.');
		}

		require('view/backend/updatePostSuccessView.php');
	}

	public function tableDelete()
	{
		$posts = $this->postManager->getAllPosts();

		require('view/backend/tableDeletePostsView.php');
	}

	public function deleteAPost()
	{
		$post = $this->postManager->getPost($_GET['id']);
		
		require('view/backend/deletePostView.php');
	}

	public function saveDelete($postId)
	{
		$deletedPost = $this->postManager->deletePost($postId);

		if($deletedPost === false) {
			throw new Exception('Problème lors de la suppression.');
		}

		require('view/backend/deletePostSuccessView.php');
	}

	public function tableComments()
	{
		$comments = $this->commentManager->getAllComments();

		require('view/backend/tableCommentsView.php');
	}

	public function updateAComment()
	{
		$comment = $this->commentManager->getComment($_GET['id']);
		
		require('view/backend/updateCommentView.php');
	}

	public function saveUpdatedComment($commentId, $comment)
	{

		$updatedComment = $this->commentManager->updateComment($commentId, $comment);

		if($updatedComment === false) {
			throw new Exception('Problème lors de la mise à jour.');
		}

		require('view/backend/updateCommentSuccessView.php');
	}

	public function deleteAComment()
	{
		$comment = $this->commentManager->getComment($_GET['id']);
		
		require('view/backend/deleteCommentView.php');
	}

	public function saveCommentDelete($commentId)
	{
		$deletedComment = $this->commentManager->deleteComment($commentId);

		if($deletedComment === false) {
			throw new Exception('Problème lors de la suppression du commentaire.');
		}

		require('view/backend/deleteCommentSuccessView.php');
	}

	public function contactSupport()
	{
		require('view/backend/contactHelpView.php');
	}

	public function tools()
	{
		require('view/backend/helpToolsView.php');
	}

	public function suggestion()
	{
		require('view/backend/suggestionView.php');
	}

	public function bcookies()
	{
		require('view/backend/backCookiesView.php');
	}
}



