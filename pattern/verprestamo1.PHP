<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de ejecutivo</title>
    <link rel="stylesheet" href="../assets/css/verprestamo.css">
</head>
<body>
    <header class="header">
        <img class="logo" src="../img/Logo1.png" alt="">
        <h1 class="titulo">Ver prestamo</h1>
        <a class="botones" href="../pagina-usuario.php"><img src="../img/regresar.png" alt=""></a>
    </header>

    <div class="container__background-triangle">
        <div class="triangle triangle1"></div>
        <div class="triangle triangle2"></div>
        <div class="triangle triangle3"></div>
    </div>

    <div class="container__cards">
        <div class="card">
            <div class="cover__card">
                <form action="verprestamo.php" method="POST" class="contenido">
                    Ingresa el numero de cuenta del usuario:
                    <input type="text" class="input1" name="nombre" placeholder="Nmo. de cuenta">
                    <button name="action" class="button-15" value="">Buscar</button>
                </form>
                <div>
                    <label for="" class="amortizacion">Tabla de amortizacion</label>
                    <table>
                        <tr>
                        <th>No. de pago</th>
                        <?php
                        for($i=0; $i <12; $i++){
                         echo "<tr><td>".($i+1)."</td></tr>";
                        }
                        echo "<th>pagos a realizar</th>";
                        $interes = 10;
                        $m = 12;
                        $p = 10000;
                        $vi = ($interes*100)/$p;
                        $pagomes = $p*(($vi/$m)/((1-pow(1+($vi/$m),(-$m)))));
                        $int = $vi/$m;
                        $intereses = $p * $int;
                        $amorti = $pagomes - $intereses;
                        $newsaldo = $p - $amorti;
                        $data1 = bcdiv($pagomes, '1', 3);
                        $data13 = bcdiv($intereses, '1', 3);
                        $data25 = bcdiv($newsaldo, '1', 3);
                        $data37 = bcdiv($amorti, '1', 3);
                        $intereses2 = $newsaldo * $int;
                        $amorti2 = $pagomes - $intereses2;
                        $newsaldo2 = $newsaldo - $amorti2;
                        $data2 = bcdiv($pagomes, '1', 3);
                        $data14 = bcdiv($intereses2, '1', 3);
                        $data26 = bcdiv($newsaldo2, '1', 3);
                        $data38 = bcdiv($amorti2, '1', 3);
                        $intereses3 = $newsaldo2 * $int;
                        $amorti3 = $pagomes - $intereses3;
                        $newsaldo3 = $newsaldo2  - $amorti;
                        $data3 = bcdiv($pagomes, '1', 3);
                        $data15 = bcdiv($intereses3, '1', 3);
                        $data27 = bcdiv($newsaldo3, '1', 3);
                        $data39 = bcdiv($amorti3, '1', 3);
                        $intereses4 = $newsaldo3 * $int;
                        $amorti4 = $pagomes - $intereses4;
                        $newsaldo4 = $newsaldo3  - $amorti4;
                        $data4 = bcdiv($pagomes, '1', 3);
                        $data16 = bcdiv($intereses4, '1', 3);
                        $data28 = bcdiv($newsaldo4, '1', 3);
                        $data40 = bcdiv($amorti4, '1', 3);
                        $intereses5 = $newsaldo4 * $int;
                        $amorti5 = $pagomes - $intereses5;
                        $newsaldo5 = $newsaldo4 - $amorti5;
                        $data5 = bcdiv($pagomes, '1', 3);
                        $data17 = bcdiv($intereses5, '1', 3);
                        $data29 = bcdiv($newsaldo5, '1', 3);
                        $data41 = bcdiv($amorti5, '1', 3);
                        $intereses6 = $newsaldo5 * $int;
                        $amorti6 = $pagomes - $intereses6;
                        $newsaldo6 = $newsaldo5 - $amorti6;
                        $data6 = bcdiv($pagomes, '1', 3);
                        $data18 = bcdiv($intereses6, '1', 3);
                        $data30 = bcdiv($newsaldo6, '1', 3);
                        $data42 = bcdiv($amorti6, '1', 3);
                        $intereses7 = $newsaldo6 * $int;
                        $amorti7 = $pagomes - $intereses7;
                        $newsaldo7 = $newsaldo6 - $amorti7;
                        $data7 = bcdiv($pagomes, '1', 3);
                        $data19 = bcdiv($intereses7, '1', 3);
                        $data31 = bcdiv($newsaldo7, '1', 3);
                        $data43 = bcdiv($amorti7, '1', 3);
                        $intereses8 = $newsaldo7 * $int;
                        $amorti8 = $pagomes - $intereses8;
                        $newsaldo8 = $newsaldo7 - $amorti8;
                        $data8 = bcdiv($pagomes, '1', 3);
                        $data20 = bcdiv($intereses8, '1', 3);
                        $data32 = bcdiv($newsaldo8, '1', 3);
                        $data44 = bcdiv($amorti8, '1', 3);
                        $intereses9 = $newsaldo8 * $int;
                        $amorti9 = $pagomes - $intereses9;
                        $newsaldo9 = $newsaldo8 - $amorti9;
                        $data9 = bcdiv($pagomes, '1', 3);
                        $data21 = bcdiv($intereses9, '1', 3);
                        $data33 = bcdiv($newsaldo9, '1', 3);
                        $data45 = bcdiv($amorti9, '1', 3);
                        $intereses10 = $newsaldo9 * $int;
                        $amorti10 = $pagomes - $intereses10;
                        $newsaldo10 = $newsaldo9 - $amorti10;
                        $data10 = bcdiv($pagomes, '1', 3);
                        $data22 = bcdiv($intereses10, '1', 3);
                        $data34 = bcdiv($newsaldo10, '1', 3);
                        $data46 = bcdiv($amorti10, '1', 3);
                        $intereses11 = $newsaldo10 * $int;
                        $amorti11 = $pagomes - $intereses11;
                        $newsaldo11 = $newsaldo10 - $amorti11;
                        $data11 = bcdiv($pagomes, '1', 3);
                        $data23 = bcdiv($intereses11, '1', 3);
                        $data35 = bcdiv($newsaldo11, '1', 3);
                        $data47 = bcdiv($amorti11, '1', 3);
                        $intereses12 = $newsaldo11 * $int;
                        $amorti12 = $pagomes - $intereses12;
                        $newsaldo12 = $newsaldo11 - $amorti12;
                        $data12 = bcdiv($pagomes, '1', 3);
                        $data24 = bcdiv($intereses12, '1', 3);
                        $data36 = bcdiv($newsaldo12, '1', 3);
                        $data48 = bcdiv($amorti12, '1', 3);
                        echo "<tr><td>".$data1."</td></tr>";
                        echo "<tr><td>".$data2."</td></tr>";
                        echo "<tr><td>".$data3."</td></tr>";
                        echo "<tr><td>".$data4."</td></tr>"; 
                        echo "<tr><td>".$data5."</td></tr>";
                        echo "<tr><td>".$data6."</td></tr>";
                        echo "<tr><td>".$data7."</td></tr>";
                        echo "<tr><td>".$data8."</td></tr>"; 
                        echo "<tr><td>".$data9."</td></tr>";
                        echo "<tr><td>".$data10."</td></tr>";
                        echo "<tr><td>".$data11."</td></tr>";
                        echo "<tr><td>".$data12."</td></tr>"; 
                        echo "<th>intereses</th>"; 
                        echo "<tr><td>".$data13."</td></tr>";
                        echo "<tr><td>".$data14."</td></tr>";
                        echo "<tr><td>".$data15."</td></tr>";
                        echo "<tr><td>".$data16."</td></tr>"; 
                        echo "<tr><td>".$data17."</td></tr>";
                        echo "<tr><td>".$data18."</td></tr>";
                        echo "<tr><td>".$data19."</td></tr>";
                        echo "<tr><td>".$data20."</td></tr>"; 
                        echo "<tr><td>".$data21."</td></tr>";
                        echo "<tr><td>".$data22."</td></tr>";
                        echo "<tr><td>".$data23."</td></tr>";
                        echo "<tr><td>".$data24."</td></tr>";   
                        echo "<th>Amortización</th>";    
                        echo "<tr><td>".$data37."</td></tr>";
                        echo "<tr><td>".$data38."</td></tr>";
                        echo "<tr><td>".$data39."</td></tr>";
                        echo "<tr><td>".$data40."</td></tr>"; 
                        echo "<tr><td>".$data41."</td></tr>";
                        echo "<tr><td>".$data42."</td></tr>";
                        echo "<tr><td>".$data43."</td></tr>";
                        echo "<tr><td>".$data44."</td></tr>"; 
                        echo "<tr><td>".$data45."</td></tr>";
                        echo "<tr><td>".$data46."</td></tr>";
                        echo "<tr><td>".$data47."</td></tr>";
                        echo "<tr><td>".$data48."</td></tr>";    
                        echo "<th>Saldo</th>";   
                        echo "<tr><td>".$data25."</td></tr>";
                        echo "<tr><td>".$data26."</td></tr>";
                        echo "<tr><td>".$data27."</td></tr>";
                        echo "<tr><td>".$data28."</td></tr>"; 
                        echo "<tr><td>".$data29."</td></tr>";
                        echo "<tr><td>".$data30."</td></tr>";
                        echo "<tr><td>".$data31."</td></tr>";
                        echo "<tr><td>".$data32."</td></tr>"; 
                        echo "<tr><td>".$data33."</td></tr>";
                        echo "<tr><td>".$data34."</td></tr>";
                        echo "<tr><td>".$data35."</td></tr>";
                        echo "<tr><td>".$data36."</td></tr>";   
       
                           ?>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>