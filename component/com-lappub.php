<?php

//list & View lappub

$lappub=$database->select('lappub',[
	'lappub.id_lappub',
	'lappub.nama_lap',
	'lappub.tgl_lap',
	'lappub.link_lap'
]);

if (!empty($_GET['lappub'])) {
	
	$lappub_view=$database->get('lappub',[
		'lappub.id_lappub',
		'lappub.nama_lap',
		'lappub.tgl_lap',
		'lappub.link_lap'
		],[
		'id_lappub'=>$_GET['lappub']
	]);
}

$tgl_lap=$database->select('tgl_lap',[
	'tgl_lap.id_tgl',
	'tgl_lap.tgl_lappub'
]);

if (!empty($_GET['tgl_lap'])) {
	$tgl_lap_view=$database->get('tgl_lap',[
	'tgl_lap.id_tgl',
	'tgl_lap.tgl_lappub'
	],[
	'id_tgl'=>$_GET['tgl_lap']
	]);
	
}

//Add Lappub

if (isset($_POST['lappub-add'])) {
	$database->insert('lappub',[
		'nama_lap'=>$_POST['nama_lap'],
		'tgl_lap'=>$_POST['tgl_lap'],
		'link_lap'=>$_POST['link_lap']
	]);
}

//Update Lappub

if(isset($_POST['lappub-update'])) {

	$database->update('lappub',[
		'nama_lap'=>$_POST['nama_lap'],
		'tgl_lap'=>$_POST['tgl_lap'],
		'link_lap'=>$_POST['link_lap']
		],[
		'id_lappub'=>$_POST['id_lappub']
		]);
}


//Delete Lappub

if (isset($_POST['lappub-del'])) {
	$database->delete('lappub',['id_lappub'=>$_POST['id_lappub']]);
}