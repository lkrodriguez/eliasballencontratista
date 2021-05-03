<?php
include_once('./all/header.php');
/*llama el archivo header el cual contiene los estilos booostrap*/
include_once('./all/utilities.php');
/*archivo onde se encuentran funciones */

$nombres =isset($_POST['nombres']) ? $_POST['nombres'] : '';
$email =isset($_POST['email']) ? $_POST['email'] : '';
$asunto =isset($_POST['asunto']) ? $_POST['asunto'] : '';
$mensaje =isset($_POST['mensaje']) ? $_POST['mensaje'] : '';


?>

<BR>

<h1>contactanos</h1>

<h1>datos enviados correctamente</h1>


<?php
include_once('./all/footer.php');
?>