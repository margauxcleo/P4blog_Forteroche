<?php
require_once('model/Manager.php');

class PostManager extends Manager
{
	private $db;

	function __construct()
	{
		$this->db = $this->dbConnect();
	}

	public function getPosts()
	{
		
		$req = $this->db->query('SELECT id, title, resume, DATE_FORMAT(publication_date, \'%d/%m/%Y à %Hh%imin%ss\') AS publication_date_fr FROM posts ORDER BY publication_date DESC LIMIT 0, 4');

		return $req;	
	}

	public function getAllPosts()
	{
		
		$req = $this->db->query('SELECT id, title, resume, DATE_FORMAT(publication_date, \'%d/%m/%Y à %Hh%imin%ss\') AS publication_date_fr FROM posts ORDER BY publication_date');

		return $req;	
	}

	public function getPost($postId)
	{

		$req = $this->db->prepare('SELECT id, title, resume, content, DATE_FORMAT(publication_date, \'%d/%m/%Y à %Hh%imin%ss\') AS publication_date_fr FROM posts WHERE id = ?');
		$req->execute(array($postId));
		$post = $req->fetch();
	
		return $post; 
	}

	public function aside()
	{

		$req = $this->db->query('SELECT id, title, publication_date FROM posts ORDER BY publication_date');

		return $req;
	}

	public function newPost($title, $resume, $content)
	{
		$newPost = $this->db->prepare('INSERT INTO posts (title, resume, content, publication_date) VALUES (?, ?, ?, NOW())');
		$newPost->execute(array($title, $resume, $content));

		return $newPost;
	}

	public function updatePost($postId, $title, $resume, $content)
	{
		$updatedPost = $this->db->prepare('UPDATE posts SET title = ?, resume = ?, content = ? WHERE id = ? ');

		$updatedPost->execute(array($title, $resume, $content, $postId));

		return $updatedPost;
	}

	public function deletePost($postId)
	{
		$deletedPost = $this->db->prepare('DELETE FROM posts WHERE id = ?');
		$deletedPost->execute(array($postId));

		return $deletedPost;
	}
}