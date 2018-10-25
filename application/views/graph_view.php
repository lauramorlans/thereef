<?php

$mescol[0]['label']='promos';
$mescol[0]['type']='string';
$mescol[1]['label']='nbetud';
$mescol[1]['type']='number';

$i=0;

foreach($mesinfos as $unemanif){

	$mesdatas[$i]['c']=array(array('v'=> $unemanif->abo_ville), array('v'=>$unemanif->totalresaabo));
	$i++;
}

$final=array('cols'=>$mescol, 'rows'=>$mesdatas);

echo json_encode($final, JSON_NUMERIC_CHECK);

?>