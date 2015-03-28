<?php
session_start();
require_once 'codebird.php';
require_once 'lib/xtcpdf.php';
//require_once 'lib/tcpdf/tcpdf.php';
$cb->setToken($_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);
$allTweets = array();
$myTweets = $cb->statuses_homeTimeline();

//header("Content-type: application/pdf"); 
$pdf = new XTCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->setFontSubsetting(false);
$pdf->xheadercolor      = array(265,265,265);
$pdf->xheadertexteng    = 'Tweets';

$pdf->xfootertext       = ''; 
$pdf->footertemplate    = '';

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', 12));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));


// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(10, 20 , 10);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

$pdf->SetFont('arial');
$pdf->setRTL(false);
$pdf->AddPage();
$content = '<table>';
$i = 1;
if(!empty($myTweets)) {
    foreach($myTweets as $tweet) {
        if(is_object($tweet)) {
            $content .= '<tr nobr="true">    
                <td style="" width="20%">'.$i++.'</td>
                <td style="" width="80%">'.$tweet->text.'</td></tr>';
        }
    }
}

$pdf->Ln();
$pdf->writeHTML($content, true, false, true, false, '');
$pdf->lastPage();

echo $pdf->Output($pdf->xheadertexteng, 'I');
