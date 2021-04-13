<?php 

$img = dir("./img/galery");// variable que lla imagenes y muestra en galeria

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


/*fin datos del archivo index*/





 ?>