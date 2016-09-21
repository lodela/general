<?php
$today = '21 Septiembre 2016';
$day = 'Miercoles';

$addrs = 'http://p88.capitalmedia.mx/Edimpress/'.$day;
$editorial = array('Capital_Naal', 'Capital_Michoacan', 'Capital_Coahuila', 'Capital_Queretaro', 'Capital_Quintana_Roo', 'DiarioDF', 'Capital_EdoMex', 'Indigo_CdMexico', 'Indigo_Guadalajara', 'Indigo_Monterrey', 'Capital_Hidalgo', 'Capital_Toluca');

function links($arr, $addrs){
    reset($arr);
    while (list(, $value) = each($arr)) {
        $pdf = $addrs.'/PDF/'.$value.'.pdf';
        $img = $addrs.'/thumb/'.$value.'.jpeg';
        $zip = $addrs.'/download/'.$value.'.zip';
        echo '
            <li style="width:180px; position:relative; float:left; margin: 5px; border:solid 1px rgba(0,0,0,0.3);">
             <a href="'.$pdf.'" target="_blank"><img src="'.$img.'" style="max-height:233px;"></img></a>
             <!-- <a><img src="'.$img.'" style="max-height:233px;"></img></a> -->
             <a href="'.$zip.'" target="_blank" style="font-size:12px; color:grey; text-align:center !important; width:180px !important; border:solid 1px grey; border-width:1px 0 0 0; margin:0 auto; display:block; text-decoration:none;">'.$value.'.zip</a>
            </li>';
    }
}

?>

<!doctype html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable = yes" />
<title>Mail PDF</title>
</head>
<body>
    <div style="margin:0px auto;padding:0px;overflow:hidden; display: block; margin:0; padding:0;">
        <div style="display:block; position:relative; overflow:hidden;">
            <img src="http://www.capitalmedia.mx/EdicionesImpresas/img/logo-top.png" style="float:left;margin:0px;padding:0px;border:none;display:block;">
        </div>
        <br>
        <i style="max-width:690px;display:block;float:left;padding:0px 0px 10px 20px;border-style:solid;border-color:rgb(204,204,204);border-width:0px 0px 1px;text-align:left; line-height:25px;"><b>Ver PDF</b> de las ediciones del <b><?php echo $today; ?></b> da click sobre la edición.<br><b>Descarga</b> el archivo en formato <b>.zip</b> dando click sobre el nombre de la edición al pie de cada una.</i>
        <!-- <i style="max-width:690px;display:block;float:left;padding:0px 0px 10px 20px;border-style:solid;border-color:rgb(204,204,204);border-width:0px 0px 1px;text-align:left; line-height:25px;">Ediciones del <b><?php echo $today; ?></b><br><b>Descarga</b> el archivo en formato <b>.zip</b> dando click sobre el nombre de la edición al pie de cada una.</i> -->
        <ul style="list-style:none;font-family:Arial,Helvetica,sans-serif;color:rgb(102,102,102);line-height:25px;float:left; padding:10px;">
            <?php links($editorial, $addrs); ?>
        </ul>
    </div>
</body>
</html>