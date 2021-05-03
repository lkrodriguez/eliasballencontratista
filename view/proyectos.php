<?php
include_once('./all/header.php');
/*llama el archivo header el cual contiene los estilos booostrap*/
include_once('./all/utilities.php');
/*archivo onde se encuentran funciones */
?>

<main>

	<section class="py-5 text-center container">
    <div class="row py-lg-12">
    	<img  src="img/favicon.png">       
    </div>
  </section>

  <div class="album py-5 bg-light">
  	<h1 style="text-align: center;">Portafolio</h1>
    <div class="container">  	
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-2">


      	<?php foreach ($portafolio as $briefcase) { ?>

        	<div class="col">
            <div class="card shadow-sm">
            	<img class="bd-placeholder-img card-img-top" width="100%" height="235" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: ظفري" preserveAspectRatio="xMidYMid slice" focusable="false"
            	src="<?php echo $briefcase['img']  ?>">

            <div class="card-body">
              <p class="card-text"><?php echo $briefcase['name']  ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <?php echo $briefcase['texto']  ?>
              </div>
            </div>
          </div>
        </div>
      		

      	<?php }  ?>


      </div>
    </div>
  </div>

</main>




















<?php
include_once('./all/footer.php');
?>