<?php

//list & View lappub

$rurah=$database->select('rurah',[
	'rurah.id_rurah',
	'rurah.kode_aset',
	'rurah.lokasi_rumah',
	'rurah.dokumen',
	'rurah.lebar_jalan',
	'rurah.luas_tanah',
	'rurah.harga',
	'rurah.luas_bangunan',
	'rurah.tgl_lelang',
	'rurah.lokasi_lelang',
	'rurah.link_img',
	'rurah.nama_user',
	'rurah.no_telp',
	'rurah.email'
]);

if (!empty($_GET['rurah'])) {
	$rurah_view=$database->get('rurah',[
		'rurah.id_rurah',
		'rurah.kode_aset',
		'rurah.lokasi_rumah',
		'rurah.dokumen',
		'rurah.lebar_jalan',
		'rurah.luas_tanah',
		'rurah.harga',
		'rurah.luas_bangunan',
		'rurah.tgl_lelang',
		'rurah.lokasi_lelang',
		'rurah.link_img',
		'rurah.nama_user',
		'rurah.no_telp',
		'rurah.email'
		],[
		'id_rurah'=>$_GET['rurah']
	]);
}
//Add Lappub

if (isset($_POST['rurah-add'])) {
	$database->insert('rurah',[
		'kode_aset'=>$_POST['kode_aset'],
		'lokasi_rumah'=>$_POST['lokasi_rumah'],
		'dokumen'=>$_POST['dokumen'],
		'lebar_jalan'=>$_POST['lebar_jalan'],
		'luas_tanah'=>$_POST['luas_tanah'],
		'rurah.harga'=>$_POST['harga'],
		'luas_bangunan'=>$_POST['luas_bangunan'],
		'tgl_lelang'=>$_POST['tgl_lelang'],
		'lokasi_lelang'=>$_POST['lokasi_lelang'],
		'link_img'=>$_POST['link_img'],
		'email'=>$_POST['email'],
		'nama_user'=>$_POST['nama_user'],
		'no_telp'=>$_POST['no_telp']
	]);
}

//Update Lappub

if(isset($_POST['rurah-update'])) {

	$database->update('rurah',[
		'kode_aset'=>$_POST['kode_aset'],
		'lokasi_rumah'=>$_POST['lokasi_rumah'],
		'dokumen'=>$_POST['dokumen'],
		'lebar_jalan'=>$_POST['lebar_jalan'],
		'luas_tanah'=>$_POST['luas_tanah'],
		'luas_bangunan'=>$_POST['luas_bangunan'],
		'tgl_lelang'=>$_POST['tgl_lelang'],
		'rurah.harga'=>$_POST['harga'],
		'lokasi_lelang'=>$_POST['lokasi_lelang'],
		'link_img'=>$_POST['link_img'],
		'nama_user'=>$_POST['nama_user'],
		'email'=>$_POST['email'],
		'no_telp'=>$_POST['no_telp']
		],[
		'id_rurah'=>$_POST['id_rurah']
		]);
}


//Delete Lappub

if (isset($_POST['rurah-del'])) {
	$database->delete('rurah',['id_rurah'=>$_POST['id_rurah']]);
}