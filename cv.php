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
                        <h3 class="text-center">Formation n°1:</h3>
                        <form action="" method="get">
                            <div class="mb-2">
                                <input type="text" class="form-control" placeholder="Nom de la formation">
                            </div>
                            <div class="mb-2">
                                <input type="text" class="form-control" placeholder="Établissement">
                            </div>
                            <div class="mb-2">
                                <input type="text" class="form-control" placeholder="Période">
                            </div>
                        </form>
                        <form id="fieldContainerformation2" action="" method="get">
                            <h3 class="text-center">Formation n°2:</h3>
                            <button type="button" id="addButton2" class="btn btn-light mb-3">Ajouter une
                                expérience</button>
                        </form>
                        <form id="fieldContainerformation3" action="" method="get">
                            <h3 class="text-center">Formation n°3:</h3>
                            <button type="button" id="addButton3" class="btn btn-light mb-3">Ajouter une
                                expérience</button>
                        </form>

                    </div>

                </div>

                <!-- Expériences professionnelles -->
                <div class="exp mb-4">
                    <h2 class="text-center text-decoration-underline">Expériences professionnelles</h2>
                    <form id="fieldContainerXp1" action="" method="get">
                        <h3 class="text-center">Expérience professionnelles n°1 :</h3>
                        <button type="button" id="addButtonxp1" class="btn btn-light mb-3">Ajouter une
                            expérience</button>
                    </form>
                    <form id="fieldContainerXp2" action="" method="get">
                        <h3 class="text-center">Expérience professionnelles n°2 :</h3>
                        <button type="button" id="addButtonxp2" class="btn btn-light mb-3">Ajouter une
                            expérience</button>
                    </form>
                    <form id="fieldContainerXp3" action="" method="get">
                        <h3 class="text-center">Expérience professionnelles n°3:</h3>
                        <button type="button" id="addButtonxp3" class="btn btn-light mb-3">Ajouter une
                            expérience</button>
                    </form>

                </div>

                <!-- Compétences -->
                <div class="competences mb-4">
                    <h2 class="text-center text-decoration-underline">Compétences</h2>

                    <div class="mb-3">
                        <h3 class="text-center">Compétence n°1</h3>
                        <div id="fieldContainerComp">
                            <button type="button" id="addButtoncomp" class="btn btn-light mb-3">Ajouter une compétence
                            </button>
                        </div>

                    </div>

                    <div class="mb-3">
                        <h3 class="text-center">Compétence n°2</h3>
                        <div id="fieldContainerComp2">
                            <button type="button" id="addButtoncomp2" class="btn btn-light mb-3">Ajouter une compétence
                            </button>
                        </div>

                    </div>

                    <div class="mb-3">
                        <h3 class="text-center">Compétence n°3</h3>
                        <form id="fieldContainerComp3" action="" method="get">
                            <button type="button" id="addButtoncomp3" class="btn btn-light mb-3">Ajouter une
                                expérience</button>
                        </form>

                    </div>
                    <div class="mb-4">
                        <h2 class="text-center text-decoration-underline">Langues</h2>
                        <div class="mb-3">
                            <h3 class="text-center">Langue n°1</h3>
                            <div id="fieldContainerlang1">
                                <button type="button" id="addButtonlang1" class="btn btn-light mb-3">Ajouter une
                                    Langue
                                </button>
                            </div>

                        </div>
                        <div class="mb-3">
                            <h3 class="text-center">Langue n°2</h3>
                            <div id="fieldContainerlang2">
                                <button type="button" id="addButtonlang2" class="btn btn-light mb-3">Ajouter une
                                    Langue
                                </button>
                            </div>

                        </div>
                        <div class="mb-3">
                            <h3 class="text-center">Langue n°3</h3>
                            <div id="fieldContainerlang3">
                                <button type="button" id="addButtonlang3" class="btn btn-light mb-3">Ajouter une
                                    Langue
                                </button>
                            </div>

                        </div>

                    </div>

                    <div class="text-center">
                        <button class="btn btn-success" type="button">Téléchargement du CV en PDF</button>
                    </div>
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
                        <div class="row mb-2">
                            <div class="col">
                                <p id="N_F1"><strong>Formation 1</strong></p>
                                <p>Établissement - Période</p>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <p><strong>Formation 2</strong></p>
                                <p>Établissement - Période</p>
                            </div>
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