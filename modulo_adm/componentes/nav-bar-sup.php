<?php

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light mx-2">
  <div class="container-fluid">
    <img src="../imgs/logo-banner.png" width="170px"/>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        </li> 
      </ul>
      <form class="d-flex" action="../php/logoff.php">
        <labe>Olá <?php echo $_SESSION['usuario_logado']; ?></label>
        <button class="btn btn-outline-success" type="submit">Sair</button>
      </form>
    </div>
  </div>
</nav>