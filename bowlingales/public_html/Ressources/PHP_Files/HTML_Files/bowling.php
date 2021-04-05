<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Bowling d'Alès | Bowling</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Page Bowling Le Bowling d'Alès" />
        <!-- Style Normal -->
        
        <link href="http://localhost/bowlingales/public_html/Ressources/PHP_Files/Style_Files/1_css_all_pages.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/public_html/Ressources/PHP_Files/Style_Files/2_css_header.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/public_html/Ressources/PHP_Files/Style_Files/3_css_navbar.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/public_html/Ressources/PHP_Files/Style_Files/4_css_footer.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/public_html/Ressources/PHP_Files/Style_Files/6_css_bowling.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/public_html/Ressources/1_Title/favicon.ico" rel="icon">
        
        
        <!-- Style Halloween -->
        <!--
        <link href="http://localhost/bowlingales/public_html/Ressources/PHP_Files/Style_Files_Halloween/1_css_all_pages.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/public_html/Ressources/PHP_Files/Style_Files_Halloween/2_css_header.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/public_html/Ressources/PHP_Files/Style_Files_Halloween/3_css_navbar.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/public_html/Ressources/PHP_Files/Style_Files_Halloween/4_css_footer.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/public_html/Ressources/PHP_Files/Style_Files_Halloween/6_css_bowling.php" rel="stylesheet" type="text/css">
        <link href="http://localhost/bowlingales/public_html/Ressources/1_Title/favicon.ico" rel="icon">
        -->
    </head>
    <body>
        <!-- Insérer image pistes -->
        <!--
            Tarifs : 
                Normaux
                Jours Fériés
                Entreprises / Centre de loisirs / Groupes
        
            Formules :
                Chicken Bowl OK
                Burger Bowl OK
                Pizza Bowl OK
                Complète : Entrée + Plat + Dessert + Bowling ???
            
            Chaussures / Chaussettes jetables OK
            Accès handicapé OK
        -->
        <?php
            include('header.php');
            include('navbar.php');
        ?>
        <main id="Contenu">
            <!-- Insérer image pistes -->
            <div id="T1">
                <p id="Texte_1"> Le Bowling d'Alès vous propose de profitez de différentes fomules
                pour vos parties de bowling que vous soyez entre collègues, entre amis
                ou en famille.
                <br>
                <br>
                Le Bowling est possèdent également un accès pour les personnes handicapés
                </p>
            </div>
            <div id="T2">
                <p id="Texte_2">Nos tarifs<sup>*</sup> :</p>
            </div>
            <div id="Tarifs">
                <table  id="Tab_Tarifs" 
                        summary="Colonne 1 : Jours de la semaine, Colonne 2 & 3 : Tarification des parties de Bowling">
                    <tr>
                        <td>&nbsp;</td>
                        <td><p>Avant 19H00<p></td>
                        <td>Après 19H00</td>
                    </tr>
                    <tr>
                        <td>Du Lundi au Jeudi</td>
                        <td>5€00</td>
                        <td>6€00</td>
                    </tr>
                    <tr>
                        <td>Le Vendredi</td>
                        <td>5€00</td>
                        <td>8€00</td>
                    </tr>
                    <tr>
                        <td>Le Samedi</td>
                        <td>7€00</td>
                        <td>8€00</td>
                    </tr>
                    <tr>
                        <td>Le Dimanche</td>
                        <td>7€00</td>
                        <td>8€00</td>
                    </tr>
                </table>
            </div>
            <div id="T3">
                <p id="Texte_3">Nos Formules :</p>
            </div>
            <div id="Formules">
                <div id="Formules_Bowling_1">
                    <div id="Formule_Pizz_Bowl">
                        <p>Formule Pizza Bowl<sup>**</sup> 23€00</p>
                            <ul>1 Pizza au choix + Frites</ul>
                            <ul>2 parties de bowling</ul>
                    </div>
                    <div id="Formule_Burg_Bowl">
                        <p>Formule Burger Bowl<sup>**</sup> 23€00</p>
                            <ul>1 Burger au choix + Frites</ul>
                            <ul>2 parties de bowling</ul>
                    </div>
                    <div id="Formule_Chic_Bowl">
                        <p>Formule Chicken Bowl<sup>***</sup> 22€00</p>
                            <ul>1/4 de poulet + Frites</ul>
                            <ul>2 parties de bowling</ul>
                    </div>
                </div>
                <div id="Formules_Bowling_2">
                    <div id="Formule_A_M_Bowling">
                        <p>Formule Après-midi Bowling 16€00</p>
                            <ul>1 Soda ou 1 Pression</ul>
                            <ul>2 parties de bowling</ul>
                    </div>
                    <div id="Formule_Soiree_Bowling">
                        <p>Formule Soirée Bowling 26€00</p>
                            <ul>1 Soda ou 1 Pression</ul>
                            <ul>1 assiette de tapas</ul>
                            <ul>2 parties de bowling</ul>
                        </p>
                    </div>
                </div>
            </div>
            <div id="Informations">
                <div id="T4">
                    <p id="Texte_4">Informations importantes :</p>
                </div>
                <div id="Infos_Clients_Bowling">
                    <p><sup>*</sup>
                        Location de chaussures comprise<br>
                        Chaussettes obligatoires (En vente pour 1 €)<br>
                        1€ de réduction pour les étudiants du lundi au vendredi 19h00
                    </p>
                    <p><sup>**</sup>
                        Location de chaussures incluses
                        1 partie seulement le Week-end, les jours et veilles fériés
                    </p>
                    <p><sup>***</sup> 
                        Location de chaussures incluses,
                        1 partie seulement le Week-end, les jours et veilles fériés,
                        Formule sur réservation, 4 personnes minimum 
                    </p>
                </div>
            </div>
        </main>
        <?php
            include('footer.php');
        ?>
    </body>
</html>
