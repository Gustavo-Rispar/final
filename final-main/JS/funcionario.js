document.getElementById('open_btn').addEventListener('click', function () {
    document.getElementById('sidebar').classList.toggle('open-sidebar');
});

 // Função para abrir o formulário
 document.getElementById("addEmployeeBtn").onclick = function() {
    document.getElementById("employeeForm").style.display = "block";
    document.getElementById("formOverlay").style.display = "block";
};

// Função para fechar o formulário
function closeForm() {
    document.getElementById("employeeForm").style.display = "none";
    document.getElementById("formOverlay").style.display = "none";
}

// Função para adicionar o funcionário à tabela
function addEmployee() {
    var nome = document.getElementById("nome").value;
    var telefone = document.getElementById("telefone").value;
    var senha = document.getElementById("senha").value;
    var salario = document.getElementById("salario").value;
    var cargo = document.getElementById("cargo").value;

    var table = document.querySelector(".table_body tbody");
    var row = document.createElement("tr");

    row.innerHTML = `
        <td>002</td>
        <td>${nome}</td>
        <td>${telefone}</td>
        <td>${senha}</td>
        <td><strong>R$${salario}</strong></td>
        <td><h4 class="status ${cargo.toLowerCase()}">${cargo}</h4></td>
    `;

    table.appendChild(row);
    closeForm();
}