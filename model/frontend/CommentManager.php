<?php
require_once('model/Manager.php');

class CommentManager extends Manager
{
	private $db;

	function __construct()
	{
		$this->db = $this->dbConnect();
	}

	public function getComments($postId)
	{
		$comments = $this->db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
		$comments->execute(array($postId));

		return $comments;
	}

	public function getAllComments()
	{
		
		$req = $this->db->query('
			SELECT posts.title, comments.id, comments.author, DATE_FORMAT(comments.comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr, comments.status  
			FROM posts 
			INNER JOIN comments ON posts.id = comments.post_id 
			ORDER BY comments.status DESC, comments.comment_date DESC');

		return $req;	
	}

	public function getComment($commentId)
	{

		$req = $this->db->prepare('SELECT posts.title, comments.id, comments.author, comments.comment, DATE_FORMAT(comments.comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr 
			FROM posts 
			INNER JOIN comments ON posts.id = comments.post_id 
			WHERE comments.id = ?');
		$req->execute(array($commentId));
		$comment = $req->fetch();
	
		return $comment; 
	}

	public function postComment($postId, $author, $comment)
	{

		$comments = $this->db->prepare('INSERT INTO comments (post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
		$affectedLines = $comments->execute(array($postId, $author, $comment));

		return $affectedLines;
	}

	public function statusSignaled($commentId)
	{

		$signaledComment = $this->db->prepare('UPDATE comments SET status = \'signalé\' WHERE id = ?');

		$signaledComment->execute(array($commentId));

		return $signaledComment;
	}

	public function updateComment($commentId, $comment)
	{
		$updatedComment = $this->db->prepare('UPDATE comments SET comment = ?, status = \'approuvé\'WHERE id = ? ');

		$updatedComment->execute(array($comment, $commentId));

		return $updatedComment;
	}

	public function deleteComment($commentId)
	{
		$deletedComment = $this->db->prepare('DELETE FROM comments WHERE id = ?');
		$deletedComment->execute(array($commentId));

		return $deletedComment;
	}
}