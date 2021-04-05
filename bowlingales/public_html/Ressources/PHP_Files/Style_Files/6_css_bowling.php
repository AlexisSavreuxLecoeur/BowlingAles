<?php
    header('content-type: text/css');
?>

#Contenu{
    background-color:#FFFFFF;
}

#T1, #T2, #T3, #T4{
    font-family:"Cooper Black";
    text-align: center;
}

#T2, #T3, #T4{
    background-color:#01B4D5;
    border-top:solid 2px;
    border-bottom:solid 2px;
}

p#Texte_1{
    margin-left:5%;
    margin-right:5%;
}

p#Texte_2, p#Texte_3, p#Texte_4{
    color: #FFFFFE;
}

#Tarifs{
    height:145px;
    width: 350px;
    margin-left:auto;
    margin-right:auto;
    margin-top:20px;
    margin-bottom:20px;
}

#Tab_Tarifs{
    height:145px;
    width: 350px;
    position:relative;
    border-collapse:collapse;
    justify-content:center;
}

th, td{
    border: solid 1px;
}

#Formules p, ul{
    padding-inline-start: 0px;
    font-family:"Cooper Black";
    font-size:14px;
    text-align:center;
}

// Media Queries 320 --> 379px

@media screen and (min-width: 380px) and (max-width:624px){
    #Contenu{
        height: 1460px;
    }

    #Formules{
        height:700px;
        width:300px;
        margin-left:auto;
        margin-right:auto;
    }

    #Formules_Bowling_1{
        height:360px;
        width:300px;
        margin-bottom:20px;
    }

    #Formule_Chic_Bowl, #Formule_Burg_Bowl, #Formule_Pizz_Bowl{
        height:120px;
        width:300px;
        
        margin-top:0px;
        margin-bottom:0px;
        padding-left:auto;
        padding-right:auto;
    }

    #Formules_Bowling_2{
        margin-top:40px;
        height:280px;
        width:300px;
    }

    #Formule_A_M_Bowling, #Formule_Soiree_Bowling{
        height:130px;
        width:300px;
        
        margin-top:0px;
        margin-bottom:0px;
        padding-left:auto;
        padding-right:auto;
    }

    #Infos_Clients_Bowling{
        height:230px;
        width:350px;    
    
        font-family:"Cooper Black";
        text-align:left;
        font-size:14px;
    
        margin-left:auto;
        margin-right:auto;

        padding-left:5px;
        padding-right:5px;
    }
}

@media screen and (min-width: 625px){
    #Formules{
        height:380px;
    }

    #Formules_Bowling_1{
        height:245px;
        width:625px;
        margin-left:auto;
        margin-right:auto;

        display:grid;
        
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 5px;
        grid-auto-rows: 1fr;
        grid-auto-columns: 1fr;
    }

    #Formule_Chic_Bowl, #Formule_Burg_Bowl, #Formule_Pizz_Bowl{
        height:120px;
        width:250px;
        
        margin-top:0px;
        margin-bottom:0px;
        padding-left:5%;
        padding-right:5%;
    }

    #Formule_Pizz_Bowl{
        grid-column: 1 / 2;
        grid-row: 1;
    }

    #Formule_Chic_Bowl{
        grid-column: 1 / 2;
        grid-row: 2;
    }

    #Formule_Burg_Bowl{
        grid-column: 2 / 2;
        grid-row: 1;
    }

    #Formules_Bowling_2{
        height:130px;
        width:625px;
        margin-left:auto;
        margin-right:auto;

        display:grid;
        
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 5px;
        grid-auto-rows: 1fr;
        grid-auto-columns: 1fr;
    }

    #Formule_A_M_Bowling, #Formule_Soiree_Bowling{
        height:130px;
        width:280px;
        
        margin-top:0px;
        margin-bottom:0px;
        padding-left:5%;
        padding-right:5%;
    }

    #Formule_A_M_Bowling{
        grid-column: 1 / 2;
        grid-row: 1;
    }

    #Formule_Soiree_Bowling{
        grid-column: 2 / 2;
        grid-row: 1;
    }

    #Infos_Clients_Bowling{
        height:200px;
        width:460px;    
    
        font-family:"Cooper Black";
        text-align:left;
        font-size:14px;
    
        margin-left:auto;
        margin-right:auto;
    }
}

#Infos_Clients_Bowling p{
    padding-top:5px;
    padding-bottom:5px;
}