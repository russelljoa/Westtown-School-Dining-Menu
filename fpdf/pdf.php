<!DOCTYPE html>
<html lang="en">
<html>
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            require('fpdf.php');
            $pdf = new FPDF();
            $pdf->AddPage();
            $pdf->SetFont('Times','B',16);
            $pdf->Cell(40,10,'Hello World!');
            $pdf->Output();
        ?>
    </head>
    <body>
    </body>
</html>