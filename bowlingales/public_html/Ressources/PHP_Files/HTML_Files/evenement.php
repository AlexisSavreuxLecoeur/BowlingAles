<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Bowling d'Alès | Évènement</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Page Événements & Soirées Le Bowling d'Alès" />
        <!-- Style Normal -->
        <!--
        <link href="http://localhost/bowlingales/public_html/Ressources/PHP_Files/Style_Files/1_css_all_pages.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/public_html/Ressources/PHP_Files/Style_Files/2_css_header.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/public_html/Ressources/PHP_Files/Style_Files/3_css_navbar.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/public_html/Ressources/PHP_Files/Style_Files/4_css_footer.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/public_html/Ressources/PHP_Files/Style_Files/10_css_evenement.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/public_html/Ressources/1_Title/favicon.ico" rel="icon">
        -->

        <!-- Style Halloween -->
        <link href="http://localhost/bowlingales/public_html/Ressources/PHP_Files/Style_Files_Halloween/1_css_all_pages.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/public_html/Ressources/PHP_Files/Style_Files_Halloween/2_css_header.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/public_html/Ressources/PHP_Files/Style_Files_Halloween/3_css_navbar.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/public_html/Ressources/PHP_Files/Style_Files_Halloween/4_css_footer.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/public_html/Ressources/PHP_Files/Style_Files_Halloween/10_css_evenement.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/public_html/Ressources/1_Title/favicon.ico" rel="icon">
    </head>
    <body>
        <!--    Page Facebook
                Exemples : 
                    - Karaoké
                    - Animation DJ
                    - Soirée à thème chaque mois
                    - Bowling illimité
                    - Séminaires
                    - Enterrement Vie de jeune Fille/Garçon
                    - Chicken
        -->
        <!--    Eléments Manquants 
            Photo illustration Séminaires
            Photo illustration Enterrement Vie de jeune Fille/Garçon
            Photo illustration Soirée à thème chaque mois
        -->
        <?php
            include('header.php');
            include('navbar.php');
        ?>
        <main id="Contenu">
            <div id="T1">
                <p id="Texte_1">Vous souhaitez être tenus(es) informés(es) des 
                    évènements auxquels vous pouvez participer.<br> 
                    Contactez notre équipe sur Facebook ou rejoignez-nous lors de 
                    ces événements :
                </p>
            </div>
            <div id="T2">
                <p id="Texte_2">Soirées :</p>
            </div>
            <div class="Formule_Soiree">
                <div class="Carte" id="Carte_1">
                    <div id="Face1">
                        <div id="Contenu_Face1">
                            <img src="http://localhost/bowlingales/public_html/Ressources/4_Content/5_Evenements/1.jpg" alt="Bowling Illimité"/>
                            <h3>Bowling Illimité</h3>
                        </div>
                    </div>
                    <div id="Face2">
                        <div id="Contenu_Face2">
                            <p id="Texte_F2">"Lorem ipsum dolor sit amet, consectetur adipiscing 
                            elit, sed do eiusmod tempor incididunt ut labore et 
                            dolore magna aliqua."
                            </p>
                        </div>
                    </div>
                </div>
                <div class="Carte" id="Carte_2">
                    <div id="Face3">
                        <div id="Contenu_Face3">
                            <img src="http://localhost/bowlingales/public_html/Ressources/4_Content/5_Evenements/2.jpg" alt="Soirée Filles"/>
                            <h3>Girls Party</h3>
                        </div>
                    </div>
                    <div id="Face4">
                        <div id="Contenu_Face4">
                            <p id="Texte_F4">
                                Venez profiter tous les mercredis à partir de 20 heures
                                de notre offre <br> "1 partie achetée = 1 partie offerte"<sup>*</sup>.
                            </p>
                            <p id="Texte_F41"><sup>*</sup>valable uniquement pour les filles lors des Girls Party.</p>
                        </div>
                    </div>
                </div>
                <div class="Carte" id="Carte_3">
                    <div id="Face5">
                        <div id="Contenu_Face5">
                            <img src="http://localhost/bowlingales/public_html/Ressources/4_Content/5_Evenements/3.jpg" alt=""/>
                            <h3></h3>
                        </div>
                    </div>
                    <div id="Face6">
                        <div id="Contenu_Face6">
                            <p id="Texte_F6">
                                "Lorem ipsum dolor sit amet, consectetur adipiscing 
                                elit, sed do eiusmod tempor incididunt ut labore et 
                                dolore magna aliqua."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="T3">
                <p id="Texte_3">Évènements :</p>
            </div>
            <div class="Formule_Evenements">
                <div class="Carte" id="Carte_4">
                    <div id="Face7">
                        <div id="Contenu_Face7">
                            <img src="http://localhost/bowlingales/public_html/Ressources/4_Content/5_Evenements/4.jpg" alt="">
                            <h3>Séminaires</h3>
                        </div>
                    </div>
                    <div id="Face8">
                        <div id="Contenu_Face8">
                            <p id="Texte_F8">
                                "Lorem ipsum dolor sit amet, consectetur adipiscing 
                                elit, sed do eiusmod tempor incididunt ut labore et 
                                dolore magna aliqua."
                            </p>
                        </div>
                    </div>
                </div>
                <div class="Carte" id="Carte_5">
                    <div id="Face9">
                        <div id="Contenu_Face9">
                            <img src="http://localhost/bowlingales/public_html/Ressources/4_Content/5_Evenements/5.jpg" alt="">
                            <h3>Enterrement de vie de jeunes filles/Garçons</h3>
                        </div>
                    </div>
                    <div id="Face10">
                        <div id="Contenu_Face10">
                            <p id="Texte_F10">
                                "Lorem ipsum dolor sit amet, consectetur adipiscing 
                                elit, sed do eiusmod tempor incididunt ut labore et 
                                dolore magna aliqua."
                            </p>
                        </div>
                    </div>
                </div>
                <div class="Carte" id="Carte_6">
                    <div id="Face11">
                        <div id="Contenu_Face11">
                            <img src="http://localhost/bowlingales/public_html/Ressources/4_Content/5_Evenements/6.jpg" alt="">
                            <h3>Évènements à thèmes variés</h3>
                        </div>
                    </div>
                    <div id="Face12">
                        <div id="Contenu_Face12">
                            <p id="Texte_F12">
                                "Lorem ipsum dolor sit amet, consectetur adipiscing 
                                elit, sed do eiusmod tempor incididunt ut labore et 
                                dolore magna aliqua."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php
            include('footer.php');
        ?>
    </body>
</html>
