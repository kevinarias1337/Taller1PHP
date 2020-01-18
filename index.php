<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    </head>
    <title>
        Taller #1: Programación PHP.
    </title>
    <h2>
        Punto #1.
    </h2>
    <form name="form1" method="POST" action="index.php">
        Ingrese el número a factorizar: <input type="text" name="txtnumero1">
        <input type="submit" name="factorizar" value="Factorizar">
        <br>
    </form>

    <?php
        if(isset($_POST["factorizar"])){
            $valor1 = $_POST["txtnumero1"];

            function factorial($valor1){
                if($valor1<=1){
                    return 1;
                }
                return $valor1 * factorial($valor1-1);
            }
            echo "El valor factorial de " . $valor1 . " es " . factorial($valor1);
        }
    ?>
        
    <h2>
        Punto #2.
    </h2>
    <form name="form2" method="POST" action="index.php">
        Ingrese las edades: 
        <br> 
        <input type="text" name="txtedad1">
        <br>
        <input type="text" name="txtedad2">
        <br>
        <input type="text" name="txtedad3">
        <br>
        <input type="text" name="txtedad4">
        <br>
        <input type="text" name="txtedad5">
        <br>
        <input type="text" name="txtedad6">
        <br>
        <input type="text" name="txtedad7">
        <br>
        <input type="text" name="txtedad8">
        <br>
        <input type="text" name="txtedad9">
        <br>
        <input type="text" name="txtedad10">
        <br>
        <input type="submit" name="calcularedad" value="Calcular">
    </form>

    <?php
    error_reporting(0);
        if(isset($_POST["calcularedad"])){
            $valor1 = $_POST["txtedad1"];
            $valor2 = $_POST["txtedad2"];
            $valor3 = $_POST["txtedad3"];
            $valor4 = $_POST["txtedad4"];
            $valor5 = $_POST["txtedad5"];
            $valor6 = $_POST["txtedad6"];
            $valor7 = $_POST["txtedad7"];
            $valor8 = $_POST["txtedad8"];
            $valor9 = $_POST["txtedad9"];
            $valor10 = $_POST["txtedad10"];

            $edad020=0;
            $edad2030=0;
            $edad4060=0;
            $edad60mas=0;

            if($valor1>=0 && $valor1<=20){
                $edad020=$edad020 +1;
            }
            if($valor1>=21 && $valor1<=30){
                $edad2030=$edad2030 +1;
            }
            if($valor1>=40 && $valor1<=60){
                $edad4060=$edad4060 +1;
            }
            if($valor1>60){
                $edad60mas=$edad60mas +1;
            }

            if($valor2>=0 && $valor2<=20){
                $edad020=$edad020 +1;
            }
            if($valor2>=21 && $valor2<=30){
                $edad2030=$edad2030 +1;
            }
            if($valor2>=40 && $valor2<=60){
                $edad4060=$edad4060 +1;
            }
            if($valor2>60){
                $edad60mas=$edad60mas +1;
            }

            if($valor3>=0 && $valor3<=20){
                $edad020=$edad020 +1;
            }
            if($valor3>=21 && $valor3<=30){
                $edad2030=$edad2030 +1;
            }
            if($valor3>=40 && $valor3<=60){
                $edad4060=$edad4060 +1;
            }
            if($valor3>60){
                $edad60mas=$edad60mas +1;
            }

            if($valor4>=0 && $valor4<=20){
                $edad020=$edad020 +1;
            }
            if($valor4>=21 && $valor4<=30){
                $edad2030=$edad2030 +1;
            }
            if($valor4>=40 && $valor4<=60){
                $edad4060=$edad4060 +1;
            }
            if($valor4>60){
                $edad60mas=$edad60mas +1;
            }

            if($valor5>=0 && $valor5<=20){
                $edad020=$edad020 +1;
            }
            if($valor5>=21 && $valor5<=30){
                $edad2030=$edad2030 +1;
            }
            if($valor5>=40 && $valor5<=60){
                $edad4060=$edad4060 +1;
            }
            if($valor5>60){
                $edad60mas=$edad60mas +1;
            }

            if($valor6>=0 && $valor6<=20){
                $edad020=$edad020 +1;
            }
            if($valor6>=21 && $valor6<=30){
                $edad2030=$edad2030 +1;
            }
            if($valor6>=40 && $valor6<=60){
                $edad4060=$edad4060 +1;
            }
            if($valor6>60){
                $edad60mas=$edad60mas +1;
            }

            if($valor7>=0 && $valor7<=20){
                $edad020=$edad020 +1;
            }
            if($valor7>=21 && $valor7<=30){
                $edad2030=$edad2030 +1;
            }
            if($valor7>=40 && $valor7<=60){
                $edad4060=$edad4060 +1;
            }
            if($valor7>60){
                $edad60mas=$edad60mas +1;
            }

            if($valor8>=0 && $valor8<=20){
                $edad020=$edad020 +1;
            }
            if($valor8>=21 && $valor8<=30){
                $edad2030=$edad2030 +1;
            }
            if($valor8>=40 && $valor8<=60){
                $edad4060=$edad4060 +1;
            }
            if($valor8>60){
                $edad60mas=$edad60mas +1;
            }

            if($valor9>=0 && $valor9<=20){
                $edad020=$edad020 +1;
            }
            if($valor9>=21 && $valor9<=30){
                $edad2030=$edad2030 +1;
            }
            if($valor9>=40 && $valor9<=60){
                $edad4060=$edad4060 +1;
            }
            if($valor9>60){
                $edad60mas=$edad60mas +1;
            }

            if($valor10>=0 && $valor10<=20){
                $edad020=$edad020 +1;
            }
            if($valor10>=21 && $valor10<=30){
                $edad2030=$edad2030 +1;
            }
            if($valor10>=40 && $valor10<=60){
                $edad4060=$edad4060 +1;
            }
            if($valor10>60){
                $edad60mas=$edad60mas +1;
            }
        }
        echo "<br>Personas con rango de edad de 0-20: " . $edad020;
        
        echo "<br>Personas con rango de edad de 20-30: " . $edad2030;
        
        echo "<br>Personas con rango de edad de 40-60: " . $edad4060;
        
        echo "<br>Personas con rango de edad de 60-más: " . $edad60mas;
    ?>
    <h2>
        Punto #3.
    </h2>
        <form name="form2" method="POST" action="index.php">
        Ingrese los números: 
        <br> 
        <input type="text" name="txtvector1">
        <br>
        <input type="text" name="txtvector2">
        <br>
        <input type="text" name="txtvector3">
        <br>
        <input type="text" name="txtvector4">
        <br>
        <input type="text" name="txtvector5">
        <br>
        <input type="submit" name="calcularsuma" value="Sumar">
    </form>

    <?php
        if(isset($_POST["calcularsuma"])){
            $vector1=$_POST["txtvector1"];
            $vector2=$_POST["txtvector2"];
            $vector3=$_POST["txtvector3"];
            $vector4=$_POST["txtvector4"];
            $vector5=$_POST["txtvector5"];

            $vector = array($vector1, $vector2, $vector3, $vector4, $vector5);
            echo "<br>La suma del vector es de: " . array_sum($vector);
        }


    ?>
    </html>