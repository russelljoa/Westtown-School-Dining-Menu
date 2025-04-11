<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        table {
            margin-top:20px;
            margin-left:20px;
        }
        table, tr, th, td {
            border: 1px black solid;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <div id="element-to-print">
        <table>
            <tr>
                <th style="width:75px"></th>
                <th>Monday</th>
            </tr>
            <tr>
                <td>Breakfast</td>
                <td>Eggs</td>
            </tr>
            <tr>
                <td>Salad Bar Special</td>
                <td>Hummus</td>
            </tr>
        </table>
    </div>


    <script>
        var element = document.getElementById('element-to-print');
        html2pdf(element);
    </script>
</body>
</html>