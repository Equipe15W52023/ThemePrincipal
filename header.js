let leCheckBox =document.querySelector("#cc-pour-bouton-burger");
let leBody = document.querySelector("body");

function gererLeDefilement(event) {
    if(leCheckBox.checked == true){
        leBody.style.overflow = "hidden";
    }else{
        leBody.style.overflow = "scroll";
    }
}


/*
    Script qui contrôle l'état de la case à cocher pour fermer
    le menu quand on clique sur un bouton
*/
/*Récupérer les boutons du menu*/

function controlerBoutonBurger() {
    //Gérer l'état de la case à cocher
leCheckBox.checked = false
}

//min-height: 100%;
//background-color: lightblue;
//display: flex;
//flex-direction: row;
//color: azure; 
//border-radius: 25px;
//border: 2px solid orangered;
//padding: 20px;
//width: 200px;
//height: 10%;