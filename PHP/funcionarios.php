<?php
    if (isset($_POST['submit'])) {
        include('config.php');
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $salario = $_POST['salario'];
        $cargo = $_POST['cargo'];

        // Insere os dados no banco
        $result = mysqli_query($conexao, "INSERT INTO funcionario(nome_func, telefone, senha, cargo, salario) 
        VALUES ('$nome', '$telefone', '$senha', '$cargo', '$salario')");

        // Redireciona para evitar reenvio ao atualizar a página
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }

    include_once('config.php');
    $sql = "SELECT * FROM `funcionario` ORDER BY `cod_Funcionario` ASC";
    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/funcionario.css">
    <title>Pag-funcionario</title>
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
            
            <li class="side-item">

                <a href="admin.html" >

                    <i class="fa-solid fa-house"></i>

                    <span class="item-description">
                        Home
                    </span>

                </a>

            </li>

            <li class="side-item active">

                <a href="funcionarios.html">


                    <i class="fa-solid fa-user-tie"></i>

                    <span class="item-description">
                        Funcionarios
                    </span>

                </a>

            </li>

            <li class="side-item">

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
                <h1>Funcionários Do Sabor Eterno</h1>
                <!-- Botão de adicionar funcionário -->
                <i class="fa fa-plus" id="addEmployeeBtn"></i>
            </section>
            <section class="table_body">
                <table>
                    <thead>
                        <tr>
                            <th id="descricao">Código</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Senha</th>
                            <th>Salário</th>
                            <th>Cargo</th>
                        </tr>
                    </thead>
                      <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row["cod_Funcionario"] . "</td>";
                                echo "<td>" . $row["nome_func"] . "</td>";
                                echo "<td>" . $row["telefone"] . "</td>";
                                echo "<td>" . $row["senha"] . "</td>";
                                echo "<td>" . $row["salario"] . "</td>";

                                // Determina a classe com base no valor de cargo
                                $cargoClass = "";
                                if ($row["cargo"] === "Admin") {
                                    $cargoClass = "class='status Admin'";
                                } elseif ($row["cargo"] === "vermelho") {
                                    $cargoClass = "class='status vermelho'";
                                } elseif ($row["cargo"] === "prata") {
                                    $cargoClass = "class='status prata'";
                                }
                                elseif ($row["cargo"] != " ") {
                                    $cargoClass = "class='status'";
                                }
                                
                                // Aplica a classe ao campo "cargo"
                                echo "<td $cargoClass>" . $row["cargo"] . "</td>";
                                
                                echo "</tr>";
                            }
                            ?>
                    </tbody>
                </table>
            </section>
        </div>
    </main>

    <!-- Formulário de adicionar funcionário -->
    <div class="form-overlay" id="formOverlay">
    <div class="form-popup" id="employeeForm">

        <form action="funcionarios.php" method="POST">
            <h2>Adicionar Funcionário</h2>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <label for="salario">Salário:</label>
            <input type="text" id="salario" name="salario" required>

            <label for="cargo">Cargo:</label>
            <select id="cargo" name="cargo">
                <option value="vermelho">Vermelho</option>
                <option value="prata">Prata</option>
                <option value="bicudo">Bicudo</option>
                <option value="entrega">Entrega</option>
            </select>

            <input type="submit" name="submit" id="submit">
            <button onclick="closeForm()">Fechar</button>
        </form>
    </div>
    </div>
    <script src="../JS/funcionario.js"></script>
</body>
</html>