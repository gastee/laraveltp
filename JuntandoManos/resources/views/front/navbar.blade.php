
  <div class="navbar_rec">

  </div>


<nav class="navbar navbar-expand-md sticky-top" role="navitation">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse_target">
      <span class="navbar-toggler-icon"><img src="img/menu_icon.png" height="30" width="30"></span>
    </button>

                      <!-- Look Empresa -->

    <div class="collapse navbar-collapse" id="collapse_target">
      <a class="navbar-brand" href="/"><img class="logo_JM" src="/img/logo_JM.png" height="50" width="50"></a>

                      <!-- links navbar -->

     <ul class="navbar-nav">
        @if  (!Auth::check())
         <li class="nav-item">
           <a href="/login" class="nav-link">Ingresar</a>
         </li>
         <li class="nav-item">
           <a href="/signup" class="nav-link">Registrarse</a>
         </li>
       </ul>

     @else
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="/profile" id="dropNavBar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           @if (session('status'))
            {{ Auth::user()->username }}
           @endif
           </a>
           <div class="dropdown-menu" aria-labelledby="dropNavBar">
             <a class="dropdown-item" href="logout.php">Salir</a>
             <a class="dropdown-item" href="/profile">Mi perfil</a>
           </div>
         </li>
        @endif

       <li class="navbar-nav dropdown">
         <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target">Menu
          <span class="caret"></span>
         </a>

        <div class="dropdown-menu" aria-labelledby="dropdown_target">
          <a href="/" class="dropdown-item">Nosotros</a>
          <div class="dropdown-divider"></div>
          <a href="/contact" class="dropdown-item">Contacto</a>
          <a href="/faq" class="dropdown-item">FAQ</a>
          <a href="/catalogue/index/" class="dropdown-item">Catálogo</a>
        </div>
       </li>

    </div>
 </nav>
