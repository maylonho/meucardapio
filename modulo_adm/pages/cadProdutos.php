<?php
session_start();
include("../php/verifica_login.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Modulo administrador - Meu Cardapio</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>

  <body>
    <!--Scrips Pessoais - Funções -->
    <script src="../js/functions.js" ></script>
    <!--Scrip Bootstrap--->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!--Scrip para mascara de telefone--->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>


    <div class="container-fluid">
    <!--Menu nav Superior-->
    <?php include("../componentes/nav-bar-sup.php");?>

    <div class="row mb-5">
        
      <div class="col-sm-4 col-md-2 mb-3">
      <!--Menu Lateral-->
      <?php $_SESSION['pg'] = "cadContas"; include("../componentes/nav-lateral.php") ?>
      </div>

      <!--CORPO DO SITE PRINCIPAL-->
      <div class="col-sm-8 col-md-10" style="background-color: rgb(255, 255, 255); height: 80vh;">
                        
        <div class="container">

          <form class="row g-3" action="../php/proc_cadProdutos.php" method="POST">
            <div class="col-xl-2 col-sm-6">
              <label for="nomeCliente" class="form-label">ID do Produto</label>
              <input type="text" class="form-control" id="id_menu" name="id_menu" required>
            </div>
            <div class="col-xl-3 col-sm-6">
              <label for="telCliente2" class="form-label">Nome do Produto</label>
              <input type="text" class="form-control" id="produto_menu" name="produto_menu" required>
            </div>
            <div class="col-xl-2 col-sm-6">
              <label for="valorTotal" class="form-label">Valor do Produto</label>
              <input type="text" class="form-control" id="valor_menu" name="valor_menu" required>
            </div>
            <div class="col-xl-2 col-sm-6">
              <label for="valorTotal" class="form-label">Secao do Produto.</label>
              <select type="text" class="form-select" id="secao_menu" name="secao_menu">
                <option>Lanches</option>
                <option>Pratos</option>
                <option>Bebidas</option>
                <option>Porcoes</option>
              </select>
            </div>
            <div class="col-9">
              <label for="enderecoCliente" class="form-label">Descrição do Produto</label>
              <input type="text" class="form-control" id="descricao_menu" name="descricao_menu" required>
            </div>
            <div class="col-md-9 row justify-content-end mt-5">
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>
          </form>

          
          <?php
          if(isset($_SESSION['cad_produto_realizado'])) :
          ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sucesso!</strong> A conta foi cadastrada com sucesso.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php 
            endif;
            unset($_SESSION['cad_produto_realizado']);
          ?>
        </div>

      </div>
    </div>      
    </div><!--Final do container-fluid-->
  </body>
</html>