document.getElementById('open_btn').addEventListener('click', function () {
   document.getElementById('sidebar').classList.toggle('open-sidebar');
});

const columns = document.querySelectorAll(".column");

document.addEventListener("dragstart", (e) => {
    e.target.classList.add("dragging");
});

document.addEventListener("dragend", (e) => {
    e.target.classList.remove("dragging");
});

columns.forEach((item) => { 
    item.addEventListener("dragover", (e) => {
        const dragging = document.querySelector(".dragging");
        const applyAfter = getNewPosition(item, e.clientY);

        if (applyAfter) {
            applyAfter.insertAdjacentElement("afterend", dragging);
            } else {
            item.prepend(dragging);
            
            }
    });
});

function getNewPosition(column, posY) {
    const cards = column.querySelectorAll(".item:not(.dragging)");
    let result;

for (let refer_card of cards) {   
    const box = refer_card.getBoundingClientRect();
    const boxCenterY = box.y + box.height / 2;
    
    if (posY >= boxCenterY) result = refer_card;
    }
    
    return result;
    
    }

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
    

    


    