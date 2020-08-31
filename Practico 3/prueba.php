<?php

/*$myNumber = 123; 
$numberString = "123";

// PUNTO A

echo "Primera variable es " . $myNumber;
echo "<br>";
echo "Segunda variable es " . $numberString;
echo "<br>";
echo "La suma es " . $myNumber+$numberString;
*/
// PUNTO B
/*if(1){
    echo "it's right";
}*/

//PUNTO 3

/*$num1 = $_POST["number1"];
$num2 = $_POST["number2"];
$opcion = $_POST["operacion"];
calcular($num1, $num2, $opcion);


function calcular($num1, $num2, $opcion)
{
    if($opcion==1)
    {
        multiplicar($num1,$num2);
    }
    else if($opcion==2)
    {
        dividir($num1, $num2);
    }
}

function multiplicar($num1, $num2)
{
    echo "M: El resultado es " . $num1*$num2;
}

function dividir($num1, $num2)
{
    if($num2==0)
    {
        echo "D: No se puede dividir por cero";
    }
    else
    {
        echo "D: El resultado es " . $num1/$num2;
    }
}*/

// PUNTO 4

/*$people = [ 
    ['name' => 'Martin', 'age' => 18, 'sex' => 'm'], 
    ['name' => 'Martina', 'age' => 25, 'sex' => 'f'], 
    ['name' => 'Pablo', 'age' => 27, 'sex' => 'm'], 
    ['name' => 'Paula', 'age' => 12, 'sex' => 'f'], 
    ['name' => 'Alexis', 'age' => 8, 'sex' => 'm'], 
    ['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'], 
    ['name' => 'Epifania', 'age' => 45, 'sex' => 'f'], 
];

contarMayoresDeEdad($people);
menoresMujeres($people);

function contarMayoresDeEdad ($people)
{
    $contador=0;
    foreach($people as $person)
    {
        if($person['age']>=18)
        {
            //Esto muestra el nombre de las personas mayores de edad, habia leido mal la consigna, creia que se referia a mostrar por pantalla a los mayores de edad
            //$nombre = $person['name'];
            //echo "$nombre es mayor de edad </br>";
            $contador++;
        }
    }
    echo "$contador personas son mayores de edad</br>";
}

function menoresMujeres($people)
{
    $contador=0;
    foreach($people as $person)
    {
        if($person['age']<18 && $person['sex']=='f')
        {
            $contador++;
        }
    }
    echo "$contador mujeres son menores de edad </br>";
}
*/

//PUNTO 6

/*echo "El dia de la semana es: " . date("l");
$wknd = date("w");
if($wknd==0 || $wknd==6)
{
    echo "<br>Es fin de semana";
}*/


//PUNTO 7

/*$total_sale = $_POST['monto'];
$type_sale = $_POST['producto'];
procesarVenta($total_sale, $type_sale);

function procesarVenta($total_sale, $type_sale)
{
    $costoEnvio="80";
    $totalConEnvio=$costoEnvio+$total_sale;

    if($total_sale>0)
    {
        if($total_sale <200)
        {
            if($type_sale==1)
            {
            echo "No se puede realizar el envío. Total a pagar: $" . $total_sale;
            }
            else if($type_sale==2)
            {
            echo "Los gastos de envío son 80 pesos. Total a pagar: $" . $totalConEnvio;
            }
        }
        if($total_sale >=200 && $total_sale<=600)
        {
        echo "Los gastos de envío son 80 pesos. Total a pagar: $" . $totalConEnvio;
        }
        if($total_sale > 600)
        {
        echo "El envío es gratis. Total a pagar: $" . $total_sale;
        }
        if($total_sale > 2000)
        {
            echo "<br>Codigo de descuento: CODEDESC33";
        }
    }
    else
    {
        echo "Pusiste un numero negativo, autista";
    }
}*/

?>