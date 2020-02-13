<?php
include("../../../sahayi/php/mpdf57/mpdf.php"); //mpdf link
$mpdf=new mPDF('utf-8-s');
$mpdf->debug=true;
$mpdf->tabSpaces = 6;
$mpdf->charset_in='windows-1252';
//$mpdf = new mPDF('', 'A4');

$title = 'Election';
$mpdf->SetTitle($title);

$html = "
<html>
    <head>
    </head>
    <body>
        <table border='1' width='100%'>
            <tr>
                <td><h1>Sl No./</h1></td>
            </tr>
                <tr><td>Name</td></tr>
                <tr><td>Address</td></tr>
                <tr><td>House No.</td></tr>
            <tr>
                <td><br><br><br></td>
                <td><h1> </h1></td>
            </tr>
        </table>
    </body>
</html>
";

$mpdf->writeHtml($html);
$mpdf->Output();
exit;
?>
