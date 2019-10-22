<?php

// required to load FPDI classes
require_once __DIR__ . '/bootstrap.php';

$mpdf = new \Mpdf\Mpdf();

$mpdf->Thumbnail('pdf/sample_orientation2.pdf', 4, 5);	// number per row	// spacing in mm

$mpdf->WriteHTML('<pagebreak /><div>Now with rotated pages</div>');

$mpdf->Thumbnail('pdf/sample_orientation3.pdf', 4);	// number per row	// spacing in mm

$mpdf->WriteHTML('<pagebreak /><div>Now with more rotated pages</div>');

$mpdf->Thumbnail('pdf/sample_rotated.pdf', 4);	// number per row	// spacing in mm

$mpdf->Output();
