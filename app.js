//Modele//
//const blabla = document.getElementById("")
//blabla.addEventListener("input",(event) =>{
//const cheh =event.target.value;
//****cv.innerText = cheh;
//})//


//nom et prenom
const nom1 = document.getElementById("nomform");//creeer une constante qui permet de recuperer les valeurs de nomg
nom1.addEventListener("input", (event) => { //la fonction se lance quand l'utilisateur modifie(input) son input la fleche permet delui dire de se declencehr quand l'event se lance
    const nomfomulaire = event.target.value;  //on recupere ce que l'utilisateur a ecrid rt on la stock dans nomformulaire
    nomcv.innerText = nomfomulaire;//affiche le resulta en direct
})//titre prof
const titre1 = document.getElementById("titrepro");
titre1.addEventListener("input", (event) => {
    const titreformulaire = event.target.value;
    titrecv.innerText = titreformulaire
})//github
const github1 = document.getElementById("github");
github1.addEventListener("input", (event) => {
    const ghformulaire = event.target.value;
    ghcv.innerText = ghformulaire;
})//email
const email1 = document.getElementById("email");
email1.addEventListener("input", (event) => {
    const email = event.target.value;
    emailcv.innerText = email;
})
//Numero de tel
const Numero = document.getElementById("numero");
Numero.addEventListener("input", (event) => {
    const telephone = event.target.value;
    numcv.innerText = telephone;
})
//A propos
//description
const des = document.getElementById("description");
des.addEventListener("input", (event) => {
    const descr = event.target.value;
    aboutcv.innerText = descr
})

// partie formation
document.addEventListener('DOMContentLoaded', function () {
    const fieldContainer = document.getElementById("fieldContainerformation");
    const addButton = document.getElementById("addButton");

    // Fonction pour ajouter un champ
    function addField() {
        const div = document.createElement('div');
        div.classList.add('formation-groupe');//espace design

        //creation des cases
        const formationinput = document.createElement('input');
        formationinput.type = "text";
        formationinput.name = "experience[]";
        formationinput.placeholder = 'Entrer le nom de votre formation';


        const ecoleinput = document.createElement('input');
        ecoleinput.type = "text";
        ecoleinput.name = "experience[]";
        ecoleinput.placeholder = 'Entrer le nom de votre établissement ';

        const anneeinput = document.createElement('input');
        anneeinput.type = "text";
        anneeinput.name = "experience[]";
        anneeinput.placeholder = 'Entrer la periode de la formation';

        //creation bouton remove 
        const removeButton = document.createElement('button');
        removeButton.type = "button";
        removeButton.textContent = 'Supprimer';

        //  suppression
        removeButton.addEventListener('click', function () {
            fieldContainer.removeChild(div);
        });

        // On ajoute les éléments
        div.appendChild(formationinput);
        div.appendChild(anneeinput);
        div.appendChild(ecoleinput)
        div.appendChild(removeButton);

        // On ajoute le tout dans le container principal
        fieldContainer.appendChild(div);
    }

    // On lie le bouton ajouter à la fonction
    addButton.addEventListener('click', addField);
});
//formation 2 
document.addEventListener('DOMContentLoaded', function () {
    const fieldContainer = document.getElementById("fieldContainerformation2");
    const addButton = document.getElementById("addButton2");

    // Fonction pour ajouter un champ
    function addField() {
        const div = document.createElement('div');
        div.classList.add('formation-groupe');//espace design

        //creation des cases
        const formationinput = document.createElement('input');
        formationinput.type = "text";
        formationinput.name = "experience[]";
        formationinput.placeholder = 'Entrer le nom de votre formation';


        const ecoleinput = document.createElement('input');
        ecoleinput.type = "text";
        ecoleinput.name = "experience[]";
        ecoleinput.placeholder = 'Entrer le nom de votre établissement ';

        const anneeinput = document.createElement('input');
        anneeinput.type = "text";
        anneeinput.name = "experience[]";
        anneeinput.placeholder = 'Entrer la periode de la formation';

        //creation bouton remove 
        const removeButton = document.createElement('button');
        removeButton.type = "button";
        removeButton.textContent = 'Supprimer';

        //  suppression
        removeButton.addEventListener('click', function () {
            fieldContainer.removeChild(div);
        });

        // On ajoute les éléments
        div.appendChild(formationinput);
        div.appendChild(anneeinput);
        div.appendChild(ecoleinput)
        div.appendChild(removeButton);

        // On ajoute le tout dans le container principal
        fieldContainer.appendChild(div);
    }

    // On lie le bouton ajouter à la fonction
    addButton.addEventListener('click', addField);
});
//formation 3 
document.addEventListener('DOMContentLoaded', function () {
    const fieldContainer = document.getElementById("fieldContainerformation3");
    const addButton = document.getElementById("addButton3");

    // Fonction pour ajouter un champ
    function addField() {
        const div = document.createElement('div');
        div.classList.add('formation-groupe');//espace design

        //creation des cases
        const formationinput = document.createElement('input');
        formationinput.type = "text";
        formationinput.name = "experience[]";
        formationinput.placeholder = 'Entrer le nom de votre formation';


        const ecoleinput = document.createElement('input');
        ecoleinput.type = "text";
        ecoleinput.name = "experience[]";
        ecoleinput.placeholder = 'Entrer le nom de votre établissement ';

        const anneeinput = document.createElement('input');
        anneeinput.type = "text";
        anneeinput.name = "experience[]";
        anneeinput.placeholder = 'Entrer la periode de la formation';

        //creation bouton remove 
        const removeButton = document.createElement('button');
        removeButton.type = "button";
        removeButton.textContent = 'Supprimer';

        //  suppression
        removeButton.addEventListener('click', function () {
            fieldContainer.removeChild(div);
        });

        // On ajoute les éléments
        div.appendChild(formationinput);
        div.appendChild(anneeinput);
        div.appendChild(ecoleinput)
        div.appendChild(removeButton);

        // On ajoute le tout dans le container principal
        fieldContainer.appendChild(div);
    }

    // On lie le bouton ajouter à la fonction
    addButton.addEventListener('click', addField);
});

//partie experience professionelle
document.addEventListener('DOMContentLoaded', function () {
    const fieldContainer = document.getElementById("fieldContainerXp1");
    const addButton = document.getElementById("addButtonxp1");

    // Fonction pour ajouter un champ
    function addField() {
        const div = document.createElement('div');
        div.classList.add('formation-groupe');//espace design

        //creation des cases
        const formationinput = document.createElement('input');
        formationinput.type = "text";
        formationinput.name = "experience[]";
        formationinput.placeholder = 'Entrer le nom de votre formation';


        const ecoleinput = document.createElement('input');
        ecoleinput.type = "text";
        ecoleinput.name = "experience[]";
        ecoleinput.placeholder = 'Entrer le nom de votre établissement ';

        const anneeinput = document.createElement('input');
        anneeinput.type = "text";
        anneeinput.name = "experience[]";
        anneeinput.placeholder = 'Entrer la periode de la formation';

        //creation bouton remove 
        const removeButton = document.createElement('button');
        removeButton.type = "button";
        removeButton.textContent = 'Supprimer';

        //  suppression
        removeButton.addEventListener('click', function () {
            fieldContainer.removeChild(div);
        });

        // On ajoute les éléments
        div.appendChild(formationinput);
        div.appendChild(anneeinput);
        div.appendChild(ecoleinput)
        div.appendChild(removeButton);

        // On ajoute le tout dans le container principal
        fieldContainer.appendChild(div);
    }

    // On lie le bouton ajouter à la fonction
    addButton.addEventListener('click', addField);
});

// pareil pour competence 

