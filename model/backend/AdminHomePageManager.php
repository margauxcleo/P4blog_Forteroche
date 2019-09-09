<?php

require_once('model/Manager.php');

class AdminHomePageManager extends Manager 
{
	private $db;

	function __construct()
	{
		$this->db = $this->dbConnect();
	}

	public function totalPosts() 
	{	
		$totalPosts = $this->db->query('SELECT COUNT(DISTINCT id) AS totalPosts FROM posts');

		return $totalPosts;	
	}

	public function totalComments()
	{	
		$totalComments = $this->db->query('SELECT COUNT(DISTINCT id) AS totalComments FROM comments');

		return $totalComments;	
	}

	public function totalSignaledComments()
	{
		$totalSignaledComments = $this->db->query('SELECT COUNT(DISTINCT id) AS totalSignaledComments FROM comments WHERE status = \'signalé\' ');

		return $totalSignaledComments;
	}
}