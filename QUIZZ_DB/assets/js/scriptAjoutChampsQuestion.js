

nbr = 3;
var i = 0;
function creerInput(){
    nbr++;
    i++;
    var select = document.getElementById("typeselect");
    var divInputs = document.getElementById('div-inputs');
    var newInput = document.createElement('div');
    var newLabel = document.getElementById("label")
    newLabel.setAttribute
    newInput.setAttribute('id', 'row_'+i)
    if(select.value == "text"){
            newInput.innerHTML = `  
            <label class="label-qs" for="">Reponse</label>
            <input class="rowtxt" type="text" name="reponse" error="error" id="">
            <div class="erreur" id="error"> </div>
            `;
            divInputs.appendChild(newInput);
    }else if(select.value == "simple"){
        newInput.innerHTML = `  
        <label class="label-qs" id="" for="radio${i}">Reponse${i}</label>
        <input class="rowjs" type="text" error="error${nbr}" name="reponse[${i}]" id="reponse${i}" placeholder="saisissez une reponse">
        <input  type="radio" name="radio" id="radio${i}" error="error${nbr}" value="${i}">
        <button type="button" onclick="deleteInput(${i})"><img src="../Images/Icônes/ic-supprimer.png" alt=""></button>
        <div class="erreur" id="error${nbr}"> </div>
        `;
        divInputs.appendChild(newInput);
    }else{
        newInput.innerHTML = `  
        <label class="label-qs" id="label${i}" for="check${i}">Reponse${i}</label>
        <input class="rowjs" type="text" error="error${nbr}" name="reponse[${i}]" id="reponse${i}" placeholder="saisissez une reponse">
        <input type="checkbox" name="checkbox[${i}]" id="check${i}" error="error${nbr}" value="${i}">
        <button type="button" onclick="deleteInput(${i})"><img src="../Images/Icônes/ic-supprimer.png" alt=""></button>
        <div class="erreur" id="error${nbr}"> </div>
        `;
        divInputs.appendChild(newInput);
    }
}



function deleteInput(n){
    var suppr = document.getElementById('row_'+n);
        suppr.remove();
}


const inputs= document.getElementsByTagName('input');
for(input of inputs){
    input.addEventListener("keyup", function(e){
        if(e.target.hasAttribute("error")){
            var idDivError=e.target.getAttribute("error");
            document.getElementById(idDivError).innerText=""
        }
    })
}

document.getElementById('formQuestion').addEventListener("submit", function(e){
    const inputs= document.getElementsByTagName('input');
    var error=false;
    for(input of inputs){
        if(input.hasAttribute("error")){
           var idDivError=input.getAttribute("error");
        if(!input.value){
                document.getElementById(idDivError).innerText="Ce champ est oligatoire!"
                error=true;
            }
        }
    }
    if(error){
        e.preventDefault();
    }

    return false
})