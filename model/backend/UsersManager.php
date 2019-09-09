<?php
require_once('model/Manager.php');

class UsersManager extends Manager
{
	private $db;

	function __construct()
	{
		$this->db = $this->dbConnect();
	}

	public function getAccount($email)
	{
		$req = $this->db->prepare('SELECT * FROM members WHERE email = ?');
		$req->execute(array($email));
		$account = $req->fetch();

		return $account;
	}

	// en process, si ajout d'un espace membre
	public function newAccount($groupId)
	{
		$newAccount = $this->db->prepare('INSERT INTO members (login, password, email, registration_date) VALUES(?, ?, ?, ?, NOW())');
		$account->execute(array($login, $password, $email));
	}
}
