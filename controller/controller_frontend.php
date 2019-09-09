<?php

require_once('model/frontend/PostManager.php');
require_once('model/frontend/CommentManager.php');
require_once('model/backend/UsersManager.php');

class FrontendController
{

	private $postManager;
	private $commentManager;
	private $usersManager;

	function __construct() 
	{    
		$this->postManager = new PostManager();
		$this->commentManager = new CommentManager();
		$this->usersManager = new UsersManager();
	} 

	public function listPosts()
	{

		$aside = $this->postManager->aside();
		$posts = $this->postManager->getPosts();

		require('view/frontend/listPostsView.php');
	}

	public function post()
	{
		$aside = $this->postManager->aside();
		$post = $this->postManager->getPost($_GET['id']);
		$comments = $this->commentManager->getComments($_GET['id']);

		require('view/frontend/postView.php');
	}

	public function addComment($postId, $author, $comment)
	{

		$affectedLines = $this->commentManager->postComment($postId, $author, $comment);

		if($affectedLines === false) {
			throw new Exception('Impossible d\'ajouter le commentaire !');
		}
		else {
			header('Location: index.php?action=post&id=' . ($postId). '#comments');
		}
	}

	public function signaledAComment($commentId)
	{
		$aside = $this->postManager->aside();
		$signaledComment = $this->commentManager->statusSignaled($commentId);


		if($signaledComment === false) {
			throw new Exception('Impossible de signaler le commentaire !');
		}
		else {
			require('view/frontend/signaledCommentSuccessView.php');
		}
	}

	public function cookies()
	{
		require('view/frontend/cookiesView.php');
	}

	public function cgu()
	{
		require('view/frontend/cguView.php');
	}

	public function legalNotice()
	{
		require('view/frontend/legalNoticeView.php');
	}
}

