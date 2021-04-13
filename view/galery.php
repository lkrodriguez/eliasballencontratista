<?php
include_once('./all/header.php');
/*llama el archivo header el cual contiene los estilos booostrap*/

include_once('./all/utilities.php');
/*archivo onde se encuentran funciones */

?>

<br>

<h1>Galeria</h1>

<div class="container">
      <div class="row ">        
           <?php 
           /*ciclo muestra imgs en galeria*/
            while (false !== ($entry = $img->read())) 
            {
              if( $entry != '.' && $entry != '..' )
              {
            ?>
            <div class="col-4">
              <div class="card shadow-sm">            
                <img src="img/galery/<?php echo $entry; ?>" />  
              </div> 
            </div>
             <?php 
              }
          } 
          ?>               
      </div>
  </div>
































<?php
include_once('./all/footer.php');
?>