<?php
	#Demarer la session
	session_start();
	try {
		$connexion=new PDO('mysql:dbname=db_evaluation; host=localhost', 'root', '');
	} catch (Exception $e) {
		print $e->getMessage();
	}
