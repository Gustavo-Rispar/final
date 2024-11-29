<?php
    if (isset($_POST['submit'])) {
        include('config.php');
        $nomeproduto = $_POST['nomeproduto'];
        $Categoria = $_POST['Categoria'];
        $valorinicial = $_POST['valorinicial'];
        $valorfinal = $_POST['valorfinal'];
        $unid_fornec = $_POST['unid_fornec'];
        $quant_minima = $_POST['quant_minima'];

        // Insere os dados no banco
        $result = mysqli_query($conexao, "INSERT INTO  produtos(cod_categoria, nome_produto, valor_inicial, valor_final, unidade_fornecimento, quantidade_minima) 
        VALUES ('$Categoria', '$nomeproduto', '$valorinicial','$valorfinal' , '$unid_fornec', '$quant_minima')");

        // Redireciona para evitar reenvio ao atualizar a página
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }

    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/produtos.css">
    <title>Pag-Produtos</title>
</head>
<body>
   <nav id="sidebar">

        <div id="sidebr_content">
        
        <div id="logo">
            <img src="../MIDIA/Logo_transparente.png" id="flogo" alt="logofoto" >
            
            <p class="logo-infos">
                
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

                <a href="admin.html">

                    <i class="fa-solid fa-house"></i>

                    <span class="item-description">
                        Home
                    </span>

                </a>

            </li>

            <li class="side-item ">

                <a href="funcionarios.html">


                    <i class="fa-solid fa-user-tie"></i>

                    <span class="item-description">
                        Funcionarios
                    </span>

                </a>

            </li>

            <li class="side-item active">

                <a href="produtos.html">

                    <i class="fa-solid fa-tags"></i>

                    <span class="item-description">
                        Produtos
                    </span>

                </a>

            </li>

            <li class="side-item">

                <a href="estoque.html">

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
    <main class="tabela">
        <div class="mains">
            <section class="table_header">
                <h1>Produtos Do Sabor Eterno</h1>
                <!-- Botão de adicionar funcionário -->
                <i class="fa fa-plus" id="addEmployeeBtn"></i>
            </section>
            <section class="table_body">
                <table >
                    <thead>
                        <tr>
                            <th id="descricao">Código</th>
                            <th>Nome do Produto</th>
                            <th>Categoria do Produto</th>
                            <th>Valor Inicial do Produto</th>
                            <th>Valor Final do Produto</th>
                            <th>Unidade Fornecimento</th>
                            <th>Quantidade Minima</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>Bacon / Costela / Lombo</td>
                            <td>Defumados</td>
                            <td>R$49,90</td>
                            <td>R$69,90</td>
                            <td><h4 class="status kg">KG</h4></td>
                            <td>5,000</td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>Charque</td>
                            <td>Defumados</td>
                            <td>R$39,90</td>
                            <td>R$59,90</td>
                            <td><h4 class="status kg">KG</h4></td>
                            <td>3,000</td>
                        </tr>
                        <tr>
                            <td>003</td>
                            <td>Linguiça Blumenau</td>
                            <td>Defumados</td>
                            <td>R$49,90</td>
                            <td>R$59,90</td>
                            <td><h4 class="status kg">KG</h4></td>
                            <td>4,000</td>
                        </tr>
                        <tr>
                            <td>004</td>
                            <td>Salame Italiano</td>
                            <td>Defumados</td>
                            <td>R$29,90</td>
                            <td>R$49,90</td>
                            <td><h4 class="status kg">KG</h4></td>
                            <td>2,000</td>
                        </tr>
                        <tr>
                            <td>005</td>
                            <td>Toucinhos c/ Carne</td>
                            <td>Defumados</td>
                            <td>R$49,90</td>
                            <td>R$79,90</td>
                            <td><h4 class="status kg">KG</h4></td>
                            <td>5,000</td>
                        </tr>
                        <tr>
                            <td>006</td>
                            <td>Linguiça Pata</td>
                            <td>Embutidos</td>
                            <td>12.00</td>
                            <td>15.00</td>
                            <td><h4 class="status kg">KG</h4></td>
                            <td>6,000</td>
                        </tr>
                        <tr>
                            <td>007</td>
                            <td>Mortadela Especial de Pernil</td>
                            <td>Embutidos</td>
                            <td>R$46,90</td>
                            <td>R$56,90</td>
                            <td><h4 class="status kg">KG</h4></td>
                            <td>3,000</td>
                        </tr>
                        <tr>
                            <td>010</td>
                            <td>Bolacha Pintada</td>
                            <td>Panificação</td>
                            <td>R$6,00</td>
                            <td>R$15,00</td>
                            <td><h4 class="status pcte">PCTE</h4></td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>011</td>
                            <td>Cuca Frutas Pequena</td>
                            <td>Panificação</td>
                            <td>R$11,00</td>
                            <td>R$19,90</td>
                            <td><h4 class="status uni">UNI</h4></td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>012</td>
                            <td>Orelha de Gato</td>
                            <td>Panificação</td>
                            <td>6.00</td>
                            <td>8.00</td>
                            <td><h4 class="status pcte">PCTE</h4></td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>013</td>
                            <td>Pão Temperado</td>
                            <td>Panificação</td>
                            <td>7.00</td>
                            <td>9.00</td>
                            <td><h4 class="status uni">UNI</h4></td>
                            <td>12</td>
                        </tr>
                    </tbody>
                </table>
                
            </section>
        </div>
    </main>

    <!-- Formulário de adicionar funcionário -->
    <div class="form-overlay" id="formOverlay"></div>
    <div class="form-popup" id="employeeForm">

        <form action="produtos.php" method="POST">
        <h2>Adicionar Funcionário</h2>
        <label for="nomeproduto">Nome do Produto:</label>
        <input type="text" id="nomeproduto" name="nomeproduto" required>
        
        <label for="Categoria">Categoria do Produto:</label>
        <input type="text" id="Categoria" name="Categoria" required>

        <label for="valorinicial">Valor Inicial:</label>
        <input type="text" id="valorinicial" name="valorinicial" required>

        <label for="valorfinal">Valor Final:</label>
        <input type="text" id="valorfinal" name="valorfinal" required>

        <label for="fornecimento">Unidade de Fornecimento:</label>
        <select id="fornecimento" name="unid_fornec">
            <option value="KG">KG</option>
            <option value="PCTE">PCTE</option>
            <option value="UNI">UNI</option>
        </select>

        <label for="quantidade">Quantidade mínima:</label>
        <input type="text" id="quantidade" name="quant_minima" required>

        <input type="submit" name="submit" id="submit">
        <button onclick="closeForm()">Fechar</button>
        </form>
    </div>
    <script src="../JS/produtos.js"></script>
</body>
</html>