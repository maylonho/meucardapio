<?php

class Contas {

    public function listarProdutos(){
        include("../../php/conexao.php");
        $id_empresa_logada = $_SESSION['id_empresa_logada'];
        $sql = "SELECT * FROM menu WHERE id_empresa='$id_empresa_logada'";
        $result = mysqli_query($conexao, $sql);
        echo "
        <table class='table'>
            <thead>
            <tr>
                <th scope='col'>ID</th>
                <th scope='col'>Produto</th>
                <th scope='col'>Valor</th>
                <th scope='col'>Info</th>
                <th scope='col'>Tipo</th>
            </tr>
            </thead>
            <tbody>";
        while($row = mysqli_fetch_assoc($result)){
            $id_menu = $row['id_menu'];
            $id_empresa = $row['id_empresa'];
            $produto_menu = $row['produto_menu'];
            $descricao_menu = $row['descricao_menu'];
            $valor_menu = $row['valor_menu'];
            $secao_menu = $row['secao_menu'];

            echo 
            "
                <tr onmouseover=setAttribute('id','linhaTabelaon') onmouseout=setAttribute('id','linhaTabelaoff') onclick=location.href='listProdutos.php?id_menu=$id_menu&id_empresa=$id_empresa' style='cursor:pointer'>
                    <th scope='row'>".$row['id_menu']."</th>
                    <td>".utf8_encode($produto_menu)."</td>
                    <td>"."R$ ".number_format($row['valor_menu'], 2, ',', '.')."</td>
                    <td>".utf8_encode($descricao_menu)."</td>
                    <td>".$secao_menu."</td>
                </tr>
            
            ";
        }
        echo "</tbody>
        </table>";
    }

    public function listarProdutosPorNome(){
        include("../../php/conexao.php");
        $id_empresa_logada = $_SESSION['id_empresa_logada'];
        $nome_produto = $_GET['nome'];
        $sql = "SELECT * FROM menu WHERE produto_menu like '%$nome_produto%' AND id_empresa='$id_empresa_logada'";
        $result = mysqli_query($conexao, $sql);
        echo "
        <table class='table'>
            <thead>
            <tr>
                <th scope='col'>ID</th>
                <th scope='col'>Produto</th>
                <th scope='col'>Valor</th>
                <th scope='col'>Info</th>
                <th scope='col'>Tipo</th>
            </tr>
            </thead>
            <tbody>";
        while($row = mysqli_fetch_assoc($result)){
            $id_menu = $row['id_menu'];
            $id_empresa = $row['id_empresa'];
            $produto_menu = $row['produto_menu'];
            $descricao_menu = $row['descricao_menu'];
            $valor_menu = $row['valor_menu'];
            $secao_menu = $row['secao_menu'];

            echo 
            "
            <tr onmouseover=setAttribute('id','linhaTabelaon') onmouseout=setAttribute('id','linhaTabelaoff') onclick=location.href='listProdutos.php?id_menu=$id_menu&id_empresa=$id_empresa' style='cursor:pointer'>
                <th scope='row'>".$row['id_menu']."</th>
                <td>".utf8_encode($produto_menu)."</td>
                <td>"."R$ ".number_format($row['valor_menu'], 2, ',', '.')."</td>
                <td>".utf8_encode($descricao_menu)."</td>
                <td>".$secao_menu."</td>
            </tr>
                
            ";
        }
        echo "</tbody>
        </table>";
    }

    public function mostrarDadosConta($idC, $idP){
        include("../../php/conexao.php");
        $id_menu = $idC;
        $id_empresa = $idP;

        $sql = "SELECT * FROM menu WHERE id_menu=$id_menu";
        $result = mysqli_query($conexao, $sql);
        $row = mysqli_fetch_assoc($result);

        $sql2 = "SELECT * FROM menu WHERE id_menu=$id_menu AND id_empresa=$id_empresa";
        $result2 = mysqli_query($conexao, $sql2);
        $row2 = mysqli_fetch_assoc($result2);

        ?>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="row" colspan="5" style="text-align:center;">Informações da Compra</th>
            </tr>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Cliente</th>
                <th scope="col">CPF</th>
                <th scope="col">Data Compra</th>
                <th scope="col">Telefone</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th><?php echo $row['idCompra']; ?></th>
                <td><?php echo $row['nome']; ?></td>
                <td><?php echo $row['cpf']; ?></td>
                <td><?php echo $row['dataCad_formatada']; ?></td>
                <td><?php echo $row['telefone']; ?></td>
            </tr>
            </tbody>
        </table>

        
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="row" colspan="4" style="text-align:center;">Informações da Parcela</th>
            </tr>
            <tr>
                <th scope="col">Valor da Compra</th>
                <th scope="col">Número de Parcela</th>
                <th scope="col">Valor da Parcela</th>
                <th scope="col">Vencimento</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo "R$ ".number_format($row['valorTotal'], 2, ',', '.'); ?></td>
                <td><?php echo $row2['idParcela'] . " de " . $row['numParcelas']; ?></td>
                <td><?php echo "R$ ".number_format($row2['valorParcela'], 2, ',', '.'); ?></td>
                <td><?php echo $row2['vencimento_formatada']; ?></td>
            </tr>

            </tbody>
        </table>
        
        <?php
    }
    


}

?>