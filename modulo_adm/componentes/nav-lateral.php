<?php
if ($_SESSION['pg'] == 'home') {
    $pg = "active";
}elseif ($_SESSION['pg'] == 'cadContas') {
    $pg1 = "active";
}elseif ($_SESSION['pg'] == 'listProdutos') {
    $pg2 = "active";
}


?>

<nav id="navbarVertical" class="navbar navbar-light bg-light">
                
    <nav class="nav nav-pills flex-column">
    
                        
    <ul class="nav flex-column nav-pills mt-3 mx-3">
    <li class="nav-item">
        <a class="nav-link <?php echo $pg;?>" href="home.php">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo $pg1;?>" href="cadProdutos.php">Cadastrar Produtos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo $pg2;?>" href="listProdutos.php">Listar Produtos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../php/testes.php" tabindex="-1" aria-disabled="false">TESTES</a>
    </li>
    </ul>
        
    </nav>

</nav>


