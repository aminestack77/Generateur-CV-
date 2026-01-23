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


//creation bouton remove
//removeButton.type = "button";
//removeButton.textContent = 'Supprimer';


//Nvlle methode => carré 
let compteur1 = 0
document.getElementById('addFormbtn').addEventListener("click", function () {
    const creaform = document.createElement("div");
    compteur1++;
    creaform.className = "creationformation";
    creaform.id = "forma" + compteur1;
    creaform.classList.add("formation-groupe")
    // style trés moche 

    const newtitle = document.createElement("h3");
    newtitle.textContent = "Formation n°" + compteur1;

    const nomforma = document.createElement("input")
    nomforma.type = "text";
    nomforma.id = "nomforma" + compteur1;
    nomforma.placeholder = "Nom de la formation";


    const lieuforma = document.createElement("input")
    lieuforma.type = "text";
    lieuforma.id = "lieuforma" + compteur1;
    lieuforma.placeholder = "Lieu de la formation";


    const periodforma = document.createElement("input")
    periodforma.type = "text";
    periodforma.id = "nomforma" + compteur1;
    periodforma.placeholder = "periode de la formation";

    //btn supprimer ? 
    const btnsupprim = document.createElement("button");
    btnsupprim.textContent = "Supprimer la formation"

    btnsupprim.addEventListener("click", function () {
        creaform.remove();
    })

    creaform.appendChild(newtitle);
    creaform.appendChild(btnsupprim);
    creaform.appendChild(nomforma);
    creaform.appendChild(lieuforma);
    creaform.appendChild(periodforma);

    document.getElementById("forma1").appendChild(creaform);
})

// PARTIE EXP.PRO
let compteur = 0
document.getElementById('addprombtn').addEventListener("click", function () {
    const creaform = document.createElement("div");
    compteur++;
    creaform.className = "creationxppro";
    creaform.id = "XP" + compteur;
    creaform.classList.add("formation-groupe")
    // style trés moche (bouton)

    const newtitle = document.createElement("h3");
    newtitle.textContent = "Expérience pro n°" + compteur;

    const nomforma = document.createElement("input")
    nomforma.type = "text";
    nomforma.id = "nomXP" + compteur;
    nomforma.placeholder = "Nom de la mission";


    const lieuforma = document.createElement("input")
    lieuforma.type = "text";
    lieuforma.id = "lieuxp" + compteur;
    lieuforma.placeholder = "Lieu de la mission";


    const periodforma = document.createElement("input")
    periodforma.type = "text";
    periodforma.id = "nomforma" + compteur;
    periodforma.placeholder = "periode de la mission (Ex: Avril 2025 - Decembre 2025)";

    //btn supprimer ? 
    const btnsupprim = document.createElement("button");
    btnsupprim.textContent = "Supprimer la mission"

    btnsupprim.addEventListener("click", function () {
        creaform.remove();
    })

    creaform.appendChild(newtitle);
    creaform.appendChild(btnsupprim);
    creaform.appendChild(nomforma);
    creaform.appendChild(lieuforma);
    creaform.appendChild(periodforma);

    document.getElementById("exproo").appendChild(creaform);
})
// Compétences 

let compteur2 = 0
document.getElementById('addcomptbtn').addEventListener("click", function () {
    const creaform = document.createElement("div");
    compteur2++;
    creaform.className = "creationxppro";
    creaform.id = "XP" + compteur2;
    creaform.classList.add("formation-groupe")
    // style trés moche (bouton)

    const newtitle = document.createElement("h3");
    newtitle.textContent = "Expérience pro n°" + compteur2;

    const nomforma = document.createElement("input")
    nomforma.type = "text";
    nomforma.id = "nomcompt" + compteur2;
    nomforma.placeholder = "Nom de la compétence";


    const descrmiss = document.createElement("input")
    descrmiss.type = "text";
    descrmiss.id = "descrmiss" + compteur2;
    descrmiss.placeholder = "Décrivez votre compétence au maximum avec des exemples";

    //btn supprimer ? 
    const btnsupprim = document.createElement("button");
    btnsupprim.textContent = "Supprimer la compétence"

    btnsupprim.addEventListener("click", function () {
        creaform.remove();
    })

    creaform.appendChild(newtitle);
    creaform.appendChild(btnsupprim);
    creaform.appendChild(nomforma);
    creaform.appendChild(descrmiss);

    document.getElementById("divcompt").appendChild(creaform);
})
//Langues 

let compteur3 = 0
document.getElementById('addlangbtn').addEventListener("click", function () {
    const creaform = document.createElement("div");
    compteur3++;
    creaform.className = "creationlangue";
    creaform.id = "lang" + compteur3;
    creaform.classList.add("formation-groupe")
    // style trés moche (bouton)

    const newtitle = document.createElement("h3");
    newtitle.textContent = "Langue n°" + compteur3;

    const nomforma = document.createElement("input")
    nomforma.type = "text";
    nomforma.id = "nomcompt" + compteur2;
    nomforma.placeholder = "Nom de la langue";


    const descrmiss = document.createElement("input")
    descrmiss.type = "text";
    descrmiss.id = "descrmiss" + compteur2;
    descrmiss.placeholder = "Décrivez votre niveau : ( A1-A2-B1-B2-B3-C1-C2 )";

    //btn supprimer ? 
    const btnsupprim = document.createElement("button");
    btnsupprim.textContent = "Supprimer la langue"

    btnsupprim.addEventListener("click", function () {
        creaform.remove();
    })

    creaform.appendChild(newtitle);
    creaform.appendChild(btnsupprim);
    creaform.appendChild(nomforma);
    creaform.appendChild(descrmiss);

    document.getElementById("divcompt").appendChild(creaform);
})

//Link avec le preview 

//marche pas car chaque titre de chaque categotir se remplace
const nomformation = document.getElementById("forma1");
nomformation.addEventListener("input", (event)=>{
const nomfofo = event.target.value;
N_F1.innerText = nomfofo;
})

//LIER GAUCHE 0 DROITE 
//ON retire les trucs en preview et on ajoute les choses en meme temps 
