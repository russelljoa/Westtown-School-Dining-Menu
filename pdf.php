<!DOCTYPE html>
<html lang="en">
<html>
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            require_once __DIR__ . '/vendor/autoload.php';
            $mpdf = new \Mpdf\Mpdf();
            $mpdf->WriteHTML('<h1>Hello world!</h1>');
            $mpdf->Output();
        ?>
    </head>
    <body>
    </body>
</html>