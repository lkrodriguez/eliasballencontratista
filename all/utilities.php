<?php 
//inicio de galeria
$img = dir("./img/galery");
// variable que llama imagenes y muestra en galeria
// fin de galeria




/*datos del archivo index*/

$info[] =[
	'img' => './img/info/logo.PNG',
	'name' => 'QUIENES SOMOS',
	'texto' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
	'link' => '?c=index&m=history',
];

$info[] =[
	'img' => './img/info/Diapositiva6.JPG',
	'name' => 'PORTAFOLIO',
	'texto' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
	'link' => '?c=index&m=proyectos',
];

$info[] =[
	'img' => 'https://isirasolutions.files.wordpress.com/2017/04/icono_contactenos.png?w=640',
	'name' => 'CONTACTENOS',
	'texto' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
	'link' => '?c=index&m=contact',
];
/*fin datos del archivo index articulos destacados*/



/*inicio de datos de portafolio*/

$im = rand(1,3);
//muestra las imgs aleatoriamente al acttualizar la pag portafolio name = apartamentos

$imcm = rand(1,5);
//muestra las imgs aleatoriamente al acttualizar la pag portafolio name = Locales Centro Medico

$imd = rand(1,4);
//muestra las imgs aleatoriamente al acttualizar la pag portafolio name = Diseño

$imal = rand(1,2);
//muestra las imgs aleatoriamente al acttualizar la pag portafolio name = Arreglos Locativos


$portafolio[] =[
	'name' => 'Enchapes',
	'img' => './img/galery/DiapositivaBaños%20('.$im.').JPG',	
	'texto' => '',
];

$portafolio[] =[
	'name' => 'Locales Centro Medico',
	'img' => './img/galery/DiapositivaCentroMedico%20('.$imcm.').JPG',	
	'texto' => '',
];

$portafolio[] =[
	'name' => 'Diseño',
	'img' => './img/galery/DiapositivaParedesPiedra%20('.$imd.').JPG',	
	'texto' => '',
];

$portafolio[] =[
	'name' => 'Arreglos Locativos',
	'img' => './img/galery/lavadero%20('.$imal.').JPG',	
	'texto' => '',
];
/*fin de datos  de portafolio*/








/*inicio footer*/
//funcion sin parametros
function say_year(){
  return date('Y');
}
/*fin footer */



 ?>