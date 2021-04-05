<?php
    header('content-type: text/css');
?>

#Contenu{
    background-color:#FFFFFF;
}

#T1{
    font-family:"Cooper Black";
    text-align: center;
}

#T2, #T3{
    background-color:#FF7E24;
    font-family:"Happy Halloween";
    text-align: center;
    border-top:solid 2px;
    border-bottom:solid 2px;

}

p#Texte_1{
    margin-left:5%;
    margin-right:5%;
}

p#Texte_2, p#Texte_3{
    color: #FFFFFE;
}

#Formules_Anniversaire{
    height:410px;
    width:480px;
    display:grid;
    
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 10px;
    grid-auto-rows: 1fr;
    grid-auto-columns: 1fr;
    
    margin-left:auto;
    margin-right:auto;
    margin-top:5px;
    margin-bottom:5px;
}

#Formule_1, #Formule_2, #Formule_3, #Formule_4{
    height:200px;
    width:215px;
    
    margin-left:10px;
    margin-right:10px;
    
    font-family:"Cooper Black";
    font-size:14px;
}

#Formule_1 p, #Formule_2 p, #Formule_3 p, #Formule_4 p{
    text-decoration: underline #01B4D4;
    margin-block-start: 5px;
}

#Formule_1{
    grid-column: 1 / 2;
    grid-row: 1;
}

#Formule_2{
    grid-column: 2 / 2;
    grid-row: 1;
}

#Formule_3{
    grid-column: 1 / 2;
    grid-row: 2;
}

#Formule_4{
    grid-column: 2 / 2;
    grid-row: 2;
}

#Infos_Clients_Anniversaire{
    height:220px;
    width:440px;
    
    font-family:"Cooper Black";
    text-align:left;
    font-size:14px;
    
    margin-left:auto;
    margin-right:auto;
}

#Infos_Clients_Anniversaire ul{
    margin-block-start: 5px;
    padding-inline-start: 20px;
}