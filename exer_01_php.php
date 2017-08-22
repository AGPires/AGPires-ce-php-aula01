<?php
$a = 10;
$b = 20;

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP - Atividade</title>
    </head>
    <body>
        <h1 align = "center">PHP - Atividade</h1>
        <p>
            Considerando que A seja igual a 10 B seja igual a 20, eis os seguintes calculos:
        </p>
        <table border=1>
            <tr>
                <th> Operação </th>
                <th> Resultado </th>
            </tr>
            <tr>
                <td> A + B </td>
                <td> <?php echo $a + $b  ?> </td>
            </tr>
            <tr>
                <td> A - B </td>
                <td> <?php echo $a - $b  ?> </td>
            </tr>
            <tr>
                <td> A X B</td>
                <td> <?php echo $a * $b  ?> </td>
            </tr>
            <tr>
                <td> A / B </td>
                <td> <?php echo $a / $b  ?> </td>
            </tr>
            <tr>
                <td> B<sup>A</sup> </td>
                <td> <?php $result = pow ($b , $a); echo number_format("$result",2,",",".")   ?> </td>
            </tr>
        </table>
    </body>
</html>