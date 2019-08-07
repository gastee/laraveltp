    <footer class="container-fluid text-center footer">
      <div class="row">

        <div class="col-sm-4">
            <img class="logofoot" src="/img/logo_JM.png" alt="logo">
        </div>

        <div class="contacto col-sm-4">
          <h3>
            <a href="/contact">Contacto</a>
            <a class="bordes" "nav-link" href="/faq">FAQ</a>
            <a href="#">lorem</a>
          </h3>
        </div>

        <div class="social col-sm-4">
          <button type="button" id="Negro" class="btn a_btn">Negro</button>
          <button type="button" id="Color" class="btn a_btn">Color</button>
          <a href="https://www.facebook.com" target="_blank" class="fa fa-facebook"></a>
          <a href="https://www.twitter.com" target="_blank" class="fa fa-twitter"></a>
          <a href="https://www.instagram.com" target="_blank" class="fa fa-instagram"></a>
        </div>
      </div>

    </footer>

    <script>

    var Negro = document.getElementById('Negro');
    // var isColored = false;
    Negro.addEventListener("click", function(){
        document.body.style.background = '#353535';
        document.body.style.color = '#FFF';});

    var Color = document.getElementById('Color');
    Color.addEventListener("click", function(){
        document.body.style.background = 'white';
        document.body.style.color = '#353535';
      });

      </script>
