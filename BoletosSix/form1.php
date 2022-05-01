<?php
    $nombre = (isset($_POST['nombre']) && $_POST["nombre"] != "")? $_POST['nombre'] : "no especifico";
    $apellido = (isset($_POST['apellido']) && $_POST["apellido"] != "")? $_POST['apellido'] : "no especifico";
    $edad = (isset($_POST['edad']) && $_POST["edad"] != "")? $_POST['edad'] : "no especifico";
    $direccion= (isset($_POST['direccion']) && $_POST["direccion"] != "")? $_POST['direccion'] : "no especifico";
    $boletos= (isset($_POST['boletos']) && $_POST["boletos"] != "")? $_POST['boletos'] : "no especifico";
    $tipob= (isset($_POST['tipob']) && $_POST["tipob"] != "")? $_POST['tipob'] : "no especifico";
    if($boletos>0)
    {
        switch($tipob)
        {
            case 1:
                {
                    $imagen="https://www.cinefxdigital.com/wp-content/uploads/2019/10/1d30f47b-aae2-48fb-8529-cb050647c854-1140x641.jpg";
                    $alt="Imagen boleto Flash";
                    $tipobol="Flash Pass";
                    $frase="Vas primero";
                    break;
                }
            case 2:
                {
                    $imagen="https://sf-static.sixflags.com/wp-content/uploads/sfne_lt_featured.jpg";
                    $alt="Imagen boleto normal";
                    $tipobol="Normal";
                    $frase="Disfruta tu estancia";
                    break;
                }
            case 3:
                {
                    $imagen="https://edge.edx.org/assets/courseware/v1/aa1c1e22c8cc0679c9dbfeecb6ae4956/asset-v1:Brown+CSCI1410+2015+type@asset+block/bugs_with_shades.jpg";
                    $alt="Imagen boleto VIP";
                    $tipobol="VIP";
                    $frase="Todo lo mejor para ti ;)";
                    break;
                }
            case 4:
                {
                    $imagen="https://i.ytimg.com/vi/RFS23Z-GsSU/maxresdefault.jpg";
                    $alt="Imagen boleto el que si se sube";
                    $tipobol="del que si se sube a los juegos";
                    $frase="Gracias por venir <3";
                    break;
                }
            case 5:
                {
                    $imagen="https://40.media.tumblr.com/030b0ea8ebbca7f22dc3c157a0c05c24/tumblr_nvslsh0L9E1qejutxo5_500.png";
                    $alt="Imagen el que ni se sube";
                    $tipobol="del que ni se sube a los juegos";
                    $frase="🙄";
                    break;
                }
            default:
            {
                echo "No hay un boleto valido seleccionado-error-";
            }
        }
        $i = 0;
    
        while($i < $boletos && $i<=15)
        {
            echo "<table border='1'>
                <thead>
                    <tr>
                    <th colspan='4'>Six Flags</th>  
                    </tr> 
                </thead>
                <tbody>
                    <tr>
                        <td><center>Para:$nombre</center></td>
                        <td><center>$apellido</center></td>
                        <td><center>$edad años</center></td> 
                        <td rowspan='3'><img src='$imagen' alt='$alt' width='500' height='300' /></td>
                    </tr>
                    <tr>
                        <td><center>$direccion</center></td>
                        <td><center>$boletos</center></td>
                        <td><center>Boleto: $tipobol</center></td>
                    </tr>
                    <tr>
                        <td colspan='3'><center>$frase</center></td>
                       
                    </tr>
                </tbody>
            </table><br/><br/>";
            $i++;
        }
        if($boletos>15)
        {
            $faltantes=$boletos-15;
            echo "<p>Se solicitaron demasiados boletos, se imprimieron 15 boletos faltaron $faltantes de los $boletos solicitados</p>";
        }
    }
    else{
        echo "<h1>No seleccionaste boletos :( </h1>";
    }

?>
    