<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3</title>
</head>
<body bgcolor="#ADD8E6" text="">

<table width="60%" align="center">
    <tr>
        <td <td bgcolor="#E6E6FA"><big>
            <?php
            /*3. Se requiere un programa en php para determinar el sueldo semanal de un
            trabajador con base en las horas que trabaja y el pago por hora que recibe.*/
            
            $dias = 7;
            $horasTrabajadas = 8;
            $pagaHoras = 2.00;        

            $sueldoSemanal = ($horasTrabajadas * $pagaHoras) * 7;
            $sueldoDia = ($horasTrabajadas * $pagaHoras)*1;
            
            echo "Sueldo por dia: $ $sueldoDia";
            echo "El sueldo semana del trabajador es de: $ $sueldoSemanal";
            ?>
        </big></td>

    </tr>
</table>
</body>
</html>