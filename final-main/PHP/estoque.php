<?php
 include_once('config.php');
 $sql = "SELECT `Nome_Produto`,  `Categoria` ,`Data`,`Nome_deposito` , `Quantidade`, `Tipo_Lancamento` FROM `movimentacao`,`produtos`, `categoria`, `deposito`   WHERE 1;";
 $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/estoques.css">
    <title>Pag-estoque</title>
    <style>
        
    </style>
</head>
<body>
    <nav id="sidebar">

        <div id="sidebr_content">
        
        <div id="logo">
            <img src="../MIDIA/Logo_transparente.png" id="flogo" alt="logofoto" >
            
            <p id="logo-infos">
                
                <span class="item-description">
                    SABOR ETERNO
                </span>
<br>
                <span class="item-description">
                    Produtos coloniais
                </span>
            
            </p>

        </div>
        
        <ul id="side_items">
            
            <li class="side-item ">

                <a href="#">

                    <i class="fa-solid fa-house"></i>

                    <span class="item-description">
                        Home
                    </span>

                </a>

            </li>

            <li class="side-item ">

                <a href="#">


                    <i class="fa-solid fa-user-tie"></i>

                    <span class="item-description">
                        Funcionarios
                    </span>

                </a>

            </li>

            <li class="side-item ">

                <a href="#">

                    <i class="fa-solid fa-tags"></i>

                    <span class="item-description">
                        Produtos
                    </span>

                </a>

            </li>

            <li class="side-item active">

                <a href="#">

                    <i class="fa-solid fa-server"></i>

                    <span class="item-description">
                        Estoques
                    </span>

                </a>

            </li>

            <li class="side-item">

                <a href="#">

                    <i class="fa-solid fa-screwdriver-wrench"></i>

                    <span class="item-description">
                        Manutenções
                    </span>

                </a>

            </li>
            
            
            <li class="side-item">

                <a href="#">

                    <i class="fa-solid fa-gear"></i>

                    <span class="item-description">
                        Configurações
                    </span>

                </a>

            </li>

        </ul>

        <button id="open_btn">
            <i id="open_btn_icon" class="fa-solid fa-chevron-right"></i>
        </button>
        </div>

        <div id="logout">
            <button id="logout_btn">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <span class="item-description">
                    logout
                </span>
            </button>
        </div>

    </nav>

    <main class="resto">
    
        <div class="table-container">
            
            <div class="table-title">Tabela Principal</div>
            <table>
                <thead>
                    <tr>
                        <th>Nome do  Produtoso</th>
                        <th>Categoria</th>
                        <th>Data de lansamento</th>
                        <th>Deposito</th>
                        <th>Quantidade</th>
                        <th>Tipo de Lançamento</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row["Nome_Produto"] . "</td>";
                                echo "<td>" . $row["Categoria"] . "</td>";
                                echo "<td>" . $row["Data"] . "</td>";
                                echo "<td>" . $row["Nome_deposito"] . "</td>";
                                echo "<td>" . $row["Quantidade"] . "</td>";
                                echo "<td>". $row["Tipo_Lancamento"] . "</td>";
                                echo "</tr>";
                            }
                            ?>
                </tbody>
            </table>
        </div>
        <div class="forma">
        <form id="estoque-form">
            <label for="deposito">Depósito Retirado:</label>
            <select id="deposito" name="deposito">
                <option value="Principal">Principal</option>
                <option value="Vermelho">Vermelho</option>
                <option value="Prata">Prata</option>
                <option value="Bicudo">Bicudo</option>
                <option value="Entrega">Entrega</option>
            </select>
            <br><br>
            <label for="produto">Nome do Produto:</label>
            <input type="text" id="produto" name="produto" placeholder="Digite o nome do produto">
            <br><br>
            <label for="quantidade">Quantidade:</label>
            <input type="number" id="quantidade" name="quantidade" placeholder="Digite a quantidade">
            <br><br>
            <label for="lancamento">Lançamento:</label>
            <select id="lancamento" name="lancamento" onchange="mostrarComboDeposito()">
                <option value="entrada">Entrada</option>
                <option value="saida">Saída</option>
                <option value="transferir">Transferir</option>
            </select>
            <br><br>
            <div id="transferencia-opcoes" style="display: none;">
                <label for="deposito-transferencia">Depósito Adicionado:</label>
                <select id="deposito-transferencia" name="deposito-transferencia">
                    <option value="Principal">Principal</option>
                    <option value="Vermelho">Vermelho</option>
                    <option value="Prata">Prata</option>
                    <option value="Bicudo">Bicudo</option>
                    <option value="Entrega">Entrega</option>
                </select>
            </div>
            <br>
            <button type="submit">Enviar</button>
        </form>
    <script src="../JS/estoques.js"></script>
    </main>
</body>
</html>