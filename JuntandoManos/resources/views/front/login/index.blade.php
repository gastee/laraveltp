<div class="container">


  <?php if (count($erroresLogin) > 0): ?>
    <div class="alert alert-danger">
      <ul>
        <?php foreach ($erroresLogin as $unError): ?>
          <li> <?= $unError; ?> </li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>


     <div class="formsignup">

       <form class="" method="post">
         <div class="container">
           <div class="row">
             <div class="col-12">
               <div class="form-group">
                  <label class="textoform" for="email">Email | Usuario:</label>
                    <input
                    type="text"
                    name="email"
                    class="form-control"
                    value="">
                </div>
              </div>
            <div class="col-12">
              <div class="form-group">
          <label class="textoform" for="pass">Contraseña</label>
          <input
          type="password"
          name="pass"
          class="form-control">
        </div>
      </div>

      <div class="col-12">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="recordarUser">
        Recordarme
      </label>
      </div>

        <div class="col-12">
          <div class="form-group">
            <button type="submit" class="a_btn">Ingresar</button>
          </div>
        </div>
      </form>
      </div>
      </div>

</div>
</div>
