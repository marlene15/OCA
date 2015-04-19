<?php
	require("wordcloud.class.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<title>Nubes de etiquetas</title>

<style type="text/css">
.nube{
border: solid 1px #aaaacc;
background-color: #ddddff;
color: #666666;
width: 335px;
text-align: center;
}
.nube div.etiquetas{
font-family: verdana,arial,helvetica;
font-size:8pt;
padding:5px;
}
.nube div.etiquetas span{
float: left;
margin: 0 3px 0 3px;
height: 20pt;
white-space: nowrap;
}
.nube div.etiquetas span.etiquetatam1{
font-size: 110%; 
}
.nube div.etiquetas span.etiquetatam2{
font-size: 120%; 
}
.nube div.etiquetas span.etiquetatam3{
font-size: 130%; 
}
div.etiquetas span.etiquetatam4{
font-size: 140%; 
}
.nube div.etiquetas span.etiquetatam5{
font-size: 150%; 
}
.nube div.etiquetas span.etiquetatam6{
font-size: 160%; 
}
.nube div.etiquetas span.etiquetatam7{
font-size: 170%; 
}
.nube div.etiquetas span.etiquetatam8{
font-size: 180%; 
}
.nube div.etiquetas span.etiquetatam9{
font-size: 190%; 
}
.nube div.etiquetas span.etiquetatam10{
font-size: 200%; 
}
</style> 
</head>

<body>
<?
//defino array con las etiquetas y las apariciones
//pongo un array lleno con datos de prueba, pero habría que generar este array desde base de datos
$etiquetas = array(
"HTML"=>10,
"PHP"=>15,
"ASP"=>6,
"Promoción de webs"=>5,
"Programación"=>8,
"Javascript"=>12,
"Ajax"=>5,
".NET"=>3,
"FAQ"=>2,
"SEO"=>9,
"CSS"=>12,
"XHTML"=>8,
"Desarrollo Web"=>12,
"Diseño"=>8,
"Ganar dinero"=>6,
"Freelance"=>2,
"Cookies"=>3,
"Software"=>10,
"DHTML"=>7,
"Cross-Browser"=>1
);

function nube_etiquetas($etiquetas){
//saco los valores máximo y minimo de la apariciones de etiquetas
$valor_max = max($etiquetas);
$valor_min = min($etiquetas);
$diferencia = $valor_max - $valor_min;

//ordeno el array
ksort($etiquetas);

//creo la capa donde se van a mostrar las etiquetas
echo '<div class="nube">';
echo '<div class="etiquetas">';

foreach ($etiquetas as $nombreetiqueta=>$apariciones){
//calculo un valor de 0 a 10 para cada etiqueta, porcentualmente según valores máximos y mínimos encontrados
$valor_relativo = round((($apariciones - $valor_min) / $diferencia) * 10);
//escribo las etiquetas con su estilo dependiendo del valor porcentual
echo "<span class='etiquetatam$valor_relativo'>";
echo $nombreetiqueta;
echo "</span> ";
}
//meto una capa sin float para que tome todo el alto de las etiquetas
echo "<div style='clear:both'></div>";
//cierro la nube y las etiquetas
echo '</div>';
echo '</div>';
}
nube_etiquetas($etiquetas);

?>
</body>
</html>