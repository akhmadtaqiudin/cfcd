<?php
	include_once 'po-library/po-database.php';
	$tableset = new PoTable('setting');
	$currentSet = $tableset->findBy(id_setting, '1');
	$currentSet = $currentSet->current();
	$mode_maintenance = $currentSet->website_maintenance;
	$maintenance_tgl = $currentSet->website_maintenance_tgl;
	$tanggal = substr($maintenance_tgl,3,2);
	$bulan = substr($maintenance_tgl,0,2);
	$tahun = substr($maintenance_tgl,6,4);
    //====modif by dadan=======
    $template_maintenance = $currentSet->template_maintenance; 
    //====modif by dadan=======
	if ($mode_maintenance == "N"){
		header('location:./');
	}else{ 
	   header('location: maintenance/'.$template_maintenance);
	}
?>