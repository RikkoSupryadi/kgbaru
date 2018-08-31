<?php

//List & View User

$user=$database->select('user',[
	'user.id_user',
	'user.nama',
	'user.username',
	'user.password',
	'user.jabatan',
	'user.nomor_telp'
	]);

if(!empty($_GET['user'])) {

	$user_view=$database->get('user',[
		'user.id_user',
		'user.nama',
		'user.username',
		'user.password',
		'user.jabatan',
		'user.nomor_telp'
		],[
		'id_user'=>$_GET['user']
		]);
}

//Add User

if(isset($_POST['user-add'])) {

	$password_hash=md5($_POST['password']);

	$database->insert('user',[
		'username'=>$_POST['username'],
		'password'=>$password_hash,
		'nama'=>$_POST['nama'],
		'jabatan'=>$_POST['jabatan'],
		'nomor_telp'=>$_POST['nomor_telp']
		]);
}



//Update User

if(isset($_POST['user-update'])) {

	$password_hash=md5($_POST['password']);

	$database->update('user',[
		'username'=>$_POST['username'],
		'password'=>$password_hash,
		'nama'=>$_POST['nama'],
		'jabatan'=>$_POST['jabatan'],
		'nomor_telp'=>$_POST['nomor_telp']
		],[
		'id_user'=>$_POST['id_user']
		]);
}

//Delete User

if(isset($_POST['user-del'])) {

	$database->delete('user',['id_user'=>$_POST['id_user']]);
}

?>