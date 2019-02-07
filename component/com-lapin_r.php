<?php

//list & View lappub

$lapin_r=$database->select('lapin_r',[
	'lapin_r.id_lapin_r',
	'lapin_r.nama_lap',
	'lapin_r.tgl_lap',
	'lapin_r.link_lap'
]);

if (!empty($_GET['lapin_r'])) {
	
	$lapin_r_view=$database->get('lapin_r',[
		'lapin_r.id_lapin_r',
		'lapin_r.nama_lap',
		'lapin_r.tgl_lap',
		'lapin_r.link_lap'
		],[
		'id_lapin_r'=>$_GET['lapin_r']
	]);
}
//Add Lappub

if (isset($_POST['lapin-add'])) {
	$database->insert('lapin_r',[
		'nama_lap'=>$_POST['nama_lap'],
		'tgl_lap'=>$_POST['tgl_lap'],
		'link_lap'=>$_POST['link_lap']
	]);
}

//Update Lappub

if(isset($_POST['lapin-update'])) {

	$database->update('lapin_r',[
		'nama_lap'=>$_POST['nama_lap'],
		'tgl_lap'=>$_POST['tgl_lap'],
		'link_lap'=>$_POST['link_lap']
		],[
		'id_lapin_r'=>$_POST['id_lapin_r']
		]);
}


//Delete Lappub

if (isset($_POST['lapin-del'])) {
	$database->delete('lapin_r',['id_lapin_r'=>$_POST['id_lapin_r']]);
}