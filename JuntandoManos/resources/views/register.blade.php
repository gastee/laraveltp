<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="formsignup">

      <!-- poner method post para que te tome cosas de post -->
      <!-- poner enctype="multipart/form-data para que te tome cosas del tipo FILES -->
    	<form class="formregistro" method="post" enctype="multipart/form-data">
    			<div class="container">
    				<div class="row">

    					<div class="col-6">
    						<div class="form-group">
    							<label for="nombre">Nombre completo:</label>
    			        <input type="text" name="name" value="" class="form-control">
    						</div>
    					</div>

    					<?php

    					?>

    					<div class="col-6">
    						<div class="form-group">
    						<label for="username">Nombre de usuario:</label>
    						<input type="text" name="username" value="" class="form-control">
    						</div>
    					</div>

    					<div class="col-6">
    						<div class="form-group">
    		      	<label for="email">Email:</label>
    		        <input type="email" name="email" value="" class="form-control">
    						</div>
    		      </div>

    					<div class="col-6">
    						<div class="form-group">
    		        <label for="pass">Contraseña</label>
    		        <input type="password" name="pass" value="" class="form-control">
    						</div>
    		      </div>

    					<div class="col-6">
    						<div class="form-group">
    		        <label for="rePass">Repetir contraseña</label>
    		        <input type="password" name="rePass" value="" class="form-control">
    						</div>
    		      </div>

    					<!-- pais de nacimiento  -->
    					<div class="col-6">
    						<div class="form-group">
    							<label class="textoform" for="paises">Pais de origen</label>
    						</div>
    					</div>
    					<!-- pais de nacimiento -->

              <div class="col-6">
    						<div class="form-group">
    		      	<label>Imagen de perfil</label>
                <div class="custom-file">
                  <input
                    type="file"
                    name="avatar"
                    class="custom-file-input"
                  >
                  <label class="custom-file-label">Elegir archivo</label>
                </div>
    						</div>
    		      </div>



    					<!-- poner imagen -->
    					<div class="col-12">
    						<div class="form-group">
    							<button type="submit" class="a_btn">Registrarse</button>
    						</div>
    					</div>
    					<!-- poner imagen -->


    				</div>
    			</div>


        </form>

    </div>
  </body>
</html>
