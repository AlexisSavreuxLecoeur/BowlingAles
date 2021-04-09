<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Bowling d'Alès | Contact</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Page Contact Le Bowling d'Alès" />
        <!-- Style Normal -->
        
        <link href="http://localhost/bowlingales/bowlingales/public_html/Ressources/PHP_Files/Style_Files/1_css_all_pages.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/bowlingales/public_html/Ressources/PHP_Files/Style_Files/2_css_header.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/bowlingales/public_html/Ressources/PHP_Files/Style_Files/3_css_navbar.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/bowlingales/public_html/Ressources/PHP_Files/Style_Files/4_css_footer.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/bowlingales/public_html/Ressources/PHP_Files/Style_Files/11_css_contact.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/bowlingales/public_html/Ressources/1_Title/favicon.ico" rel="icon">
        

        <!-- Style Halloween -->
        <!--
        <link href="http://localhost/bowlingales/bowlingales/public_html/Ressources/PHP_Files/Style_Files_Halloween/1_css_all_pages.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/bowlingales/public_html/Ressources/PHP_Files/Style_Files_Halloween/2_css_header.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/bowlingales/public_html/Ressources/PHP_Files/Style_Files_Halloween/3_css_navbar.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/bowlingales/public_html/Ressources/PHP_Files/Style_Files_Halloween/4_css_footer.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/bowlingales/public_html/Ressources/PHP_Files/Style_Files_Halloween/11_css_contact.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/bowlingales/public_html/Ressources/1_Title/favicon.ico" rel="icon">
        -->
    </head>
    <body>
        <?php
            include('header.php');
            include('navbar.php');
        ?>
        <main id="Contenu">
            <div id="T1">
                <p id="Texte_1">Vous avez besoin d'un renseignement ? <br> D'un devis ?</p>
            </div>
            <div id="T2">
                <p id="Texte_2">Venez à notre rencontre :</p>
            </div>
            
            <div id="Accessibilite">
                <div class="T3-4">
                    <div class="T3">
                        <p id="Texte_3">Adresse Postale : <br>
                            1639 Chemin des sports, 30100 Alès<br>
                        </p>
                    </div>
                    <div class="T4">
                        <p id="Texte_4">
                            En suivant la rocade sud, le bowling d'Alès est situé sur la zone
                            comerciale du magasin "Hyper U" en face de l'hôtel "Première Classe".
                        </p>
                        <p id="Texte_4-1">Nous disposons d'un parking gratuit et d'un ascenseur comme accès handicapé</p>
                        <p id="Texte_4-2">Lat : 44° 11' 48" 76 / Long : 4° 09" 19' 78</p>
                        <p id="Texte_4-3">Alt : 125 M</p>
                    </div>
                </div>
                <div class="Carte">
                    <div class="_Maps">
                        <img id="Maps_GPS" src="http://localhost/bowlingales/bowlingales/public_html/Ressources/4_Content/6_Contact/1.jpg" alt="Carte Google Maps pour l'accessibilité du Bowling d'Alès">
                        <div class="Button_Agrandir">
                            <button type="button">Agrandir la carte Maps</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="T5">
                <p id="Texte_5">Contactez-nous : </p>
            </div>
            <div id="T6-8">
                <div id="T6">
                    <p id="Section_Tel">Par Téléphone au :</p>
                    <p>&#9742; +33 (4) 66 52 00 81</p>
                    <p>&#9742; +33 (4) 66 54 30 20</p>
                    <p>&#9742; +33 (7) 84 00 98 32</p>
                </div>
                <div id="T7">
                    <p id="Section_Mail">Par E-mail : </p>
                    <p>bowlingales@gmail.com</p>
                    <p>isabelle.outtier@gmail.com</p>
                </div>
                <div id="T8">
                    <p  id="Section_RS">Via les réseaux sociaux : </p>
                    <p>Facebook</p>
                    <p>Instagram</p>
                </div>
            </div>
        </main>
        <?php
            include('footer.php');
        ?>
    </body>
</html>
