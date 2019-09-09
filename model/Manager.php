<?php

class Manager 
{
	protected function dbConnect()
	{
		$db = new PDO('mysql:host=localhost;dbname=blog_jforteroche;charset=utf8', 'margauxv', 'P2wordpress!');
	    return $db;
	}
}