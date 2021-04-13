<?php
include_once('./all/header.php');
/*llama el archivo header el cual contiene los estilos booostrap*/
?>

<BR>

<h1>contactanos</h1>

<h1>FORMULARIO DE CONTACTO</h1>

	<div class="container">
		<form action="?c=index&m=form_contacto.php" method="post">	
			<div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">Nombres</label>
			  <input type="text" class="form-control" name="nombres">
			</div>
			<div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">Email</label>
			  <input type="email" class="form-control" name="email">
			</div>
			<div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">Asunto</label>
			  <input type="text" class="form-control" name="asunto">
			</div>
			<div class="mb-3">
			  <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
			  <textarea class="form-control" name="mensaje"  rows="3"></textarea>
			</div>		
			 <button type="submit" class="btn btn-primary">Submit</button>	

		</form>	
	</div>

























<?php
include_once('./all/footer.php');
?>