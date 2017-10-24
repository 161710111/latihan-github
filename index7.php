<?php
	require_once 'index6.php';
	
	$identitas1 = new identitas ('firas','bandung','XI RPL 2','pelajar');

	echo " nama : " .$identitas1->get_nama(). '<br>';
	echo " tempat lahir : " .$identitas1->get_tempatlahir(). '<br>';
	echo " kelas : " .$identitas1->get_kelas(). '<br>';
	echo " status : " .$identitas1->get_status(). '<br>';

	echo"<br>";

	$identitas2 = new identitas ('rudi','ciodeng','XI RPL 2','pelajar');

	echo " nama : " .$identitas2->get_nama(). '<br>';
	echo " tempat lahir : " .$identitas2->get_tempatlahir(). '<br>';
	echo " kelas : " .$identitas2->get_kelas(). '<br>';
	echo " status : " .$identitas2->get_status(). '<br>';

	echo"<br>";

	$identitas3 = new identitas ('opik','sekeawi','XI RPL 2','pelajar');

	echo " nama : " .$identitas3->get_nama(). '<br>';
	echo " tempat lahir : " .$identitas3->get_tempatlahir(). '<br>';
	echo " kelas : " .$identitas3->get_kelas(). '<br>';
	echo " status : " .$identitas3->get_status(). '<br>';

	echo"<br>";

	$identitas4 = new identitas ('ulul','cangkuang','XI RPL 2','pelajar');

	echo " nama : " .$identitas4->get_nama(). '<br>';
	echo " tempat lahir : " .$identitas4->get_tempatlahir(). '<br>';
	echo " kelas : " .$identitas4->get_kelas(). '<br>';
	echo " status : " .$identitas4->get_status(). '<br>';


	echo"<br>";

	$identitas5 = new identitas ('nurfadil','cibay','XI RPL 2','pelajar');

	echo " nama : " .$identitas5->get_nama(). '<br>';
	echo " tempat lahir : " .$identitas5->get_tempatlahir(). '<br>';
	echo " kelas : " .$identitas5->get_kelas(). '<br>';
	echo " status : " .$identitas5->get_status(). '<br>';

?>