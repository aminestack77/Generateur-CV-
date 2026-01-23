<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de CV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d10e1be995.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f8f9fa;
            height: 100%;
        }

        .container-fluid {
            height: 100vh;
        }

        .row {
            height: 100%;
        }

        .formation-groupe {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .formulaire-section {
            height: 100vh;
            overflow-y: auto;
            background-color: #6c757d;
            padding: 20px;
        }

        .cv-section {
            height: 100vh;
            overflow-y: auto;
            background-color: white;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- PARTIE GAUCHE : FORMULAIRE +required + taille maxi  -->
            <div class="col-md-6 formulaire-section text-white">
                <h1 class="text-center mb-4">Formulaire</h1>

                <!-- Informations G -->
                <div class="infoG mb-4">
                    <h2 class="text-center text-decoration-underline">Informations</h2>
                    <form action="" method="get">
                        <div class="mb-3">
                            <label for="nomform" class="form-label">Prénom et Nom:</label>
                            <input type="text" class="form-control" name="name" id="nomform"
                                placeholder="ex : Charles Meunier">
                        </div>
                        <div class="mb-3">
                            <label for="titrepro" class="form-label">Titre professionnel:</label>
                            <input type="text" class="form-control" name="Titre" id="titrepro"
                                placeholder="ex : assistant de direction">
                        </div>
                        <div class="mb-3">
                            <label for="github" class="form-label">Github:</label>
                            <input type="text" class="form-control" name="Github" id="github"
                                placeholder="ex : Charles_git">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="ex : exemple@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="numero" class="form-label">Numéro de tél:</label>
                            <input type="tel" class="form-control" name="numéro" id="numero"
                                placeholder="ex : 06.12.34.56.78">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Résumé professionnel:</label>
                            <textarea name="desc." class="form-control" id="description" style="height: 140px"
                                placeholder="Décrivez votre profil professionnel"></textarea>
                        </div>
                    </form>
                </div>

                <!-- Formations -->
                <div class="formations mb-4">
                    <h2 class="text-center text-decoration-underline">Formations</h2>
                    <div class="formation1 mb-3">
                        <div id="forma1">
                            <form action="" method="get">
                                <button id="addFormbtn" type="button">Ajouter une formation</button>
                                <div id="divform">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Expériences professionnelles -->
                <div class="exppro mb-4">
                    <h2 class="text-center text-decoration-underline">Experiences professionnelles</h2>
                    <div class="expp mb-3">
                        <div id="exproo">
                            <form action="" method="get">
                                <button id="addprombtn" type="button">Ajouter une Expérience professionnelle</button>
                                <div id="divXPform">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Compétences -->
                <div class="Compt mb-4">
                    <h2 class="text-center text-decoration-underline">Compétences</h2>
                    <div class="compt mb-3">
                        <div id="Compet">
                            <form action="" method="get">
                                <button id="addcomptbtn" type="button">Ajouter une compétence</button>
                                <div id="divcompt">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <h2 class="text-center text-decoration-underline">Langues</h2>
                    <div class="compt mb-3">
                        <div id="langue">
                            <form action="" method="get">
                                <button id="addlangbtn" type="button">Ajouter une langue maîtrisé</button>
                                <div id="divlang">
                                </div>
                            </form>
                        </div>
                    </div>



                </div>

                <div class="text-center">
                    <button class="btn btn-success" type="button">Téléchargement du CV en PDF</button>
                </div>
            </div>


            <!-- PARTIE DROITE : GÉNÉRATEUR DE CV -->
            <div class="col-md-6 cv-section">
                <h1 class="text-center mb-4">Générateur de CV</h1>
                <div class="bg-secondary bg-opacity-10 p-4 rounded">
                    <h2 class="text-center text-uppercase fs-2" id="nomcv">Nom et prénom</h2>
                    <p class="text-center fs-3" id="titrecv">Titre professionnel</p>

                    <div class="d-flex justify-content-around mb-3">
                        <a id="ghcv"><i class="fa-brands fa-github-alt"></i> Nom_github</a>
                        <a id="emailcv"><i class="fa-solid fa-envelope"></i> example@gmail.com</a>
                        <a id="numcv"><i class="fa-solid fa-phone"></i> 06.12.34.56.78</a>
                    </div>

                    <hr />

                    <div class="about mb-4">
                        <h2 class="text-center fs-2 text-uppercase text-decoration-underline">À propos</h2>
                        <p id="aboutcv" class="text-break">Écrivez un court texte pour vous présenter et montrer
                            votre intérêt pour le poste recherché.</p>
                    </div>

                    <div class="education mb-4">
                        <h2 class="text-center fs-2 text-uppercase text-decoration-underline">Diplômes/Formations</h2>
                        <div id="cocodr" class="row mb-2">
                            <div class="col">
                            
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                          
                        </div>
                    </div>

                    <div class="experiences mb-4">
                        <h2 class="text-center fs-2 text-uppercase text-decoration-underline">Expériences
                            professionnelles</h2>
                        <div>
                            <p>Vos expériences apparaîtront ici</p>
                        </div>
                    </div>

                    <hr>

                    <div class="Competences">
                        <h2 class="text-center fs-2 text-uppercase text-decoration-underline">Compétences</h2>
                        <div class="Comp1 mb-2">
                            <p><strong>Compétence 1</strong></p>
                            <p>Niveau : Expert</p>
                        </div>
                        <div class="Comp2 mb-2">
                            <p><strong>Compétence 2</strong></p>
                            <p>Niveau : Expert</p>
                        </div>
                        <div class="Comp3 mb-2">
                            <p><strong>Compétence 3</strong></p>
                            <p>Niveau : Expert</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="app.js"></script>
</body>

</html>