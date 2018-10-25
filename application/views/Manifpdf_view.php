<?php

require_once("asset/tcpdf/tcpdf.php");

$pdf = new TCPDF($orientation = 'P', $unit = 'mm', $format = 'A4', $unicode = true, $encoding = 'UTF-8', $diskcache = false, $pdfa = false);

$pdf->AddPage();

$montext = '<div style="text-align:center"><h1>Bienvenue sur St Pavut</h1><br/><br/><h2>Voici notre catalogue de manifestations</h2><br/></div><br/><br/><img class="img-fluid" src="'. base_url().'asset/photos/spectacle.jpg" alt="">';

$pdf->SetFont('times','', 15, 'false');

$pdf->writeHTML($montext);

foreach ($tous as $unemanif) {
	$pdf->AddPage();
	$pdf->writeHTML( '<div style="text-align:center"><img class="img-fluid" src="'. base_url().'asset/photos/'. $unemanif->manif_photo .'"alt=""></div>');
	$pdf->writeHTML('<br><div style="text-align:center">'. mb_strtoupper($unemanif->manif_intitule)."<br><br>" . $unemanif->manif_type . "<br><br>" . $unemanif->manif_description . "<br><br>" . $unemanif->salle_nom . "<br><br>" . ($unemanif->manif_prix_place*1.23) . "$ <br></div>");
}

$pdf->Output('stpavut.pdf');

?>