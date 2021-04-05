<?php
    header('content-type: text/css');
?>
/* Notes importantes */
// Internet Explorer 8 à 11 n'accèpte pas la fonction zoom sur la carte d'accès.
// Pas de Carte Google Maps lorsque la résolution est inférieure à 1024 pixels.


#Contenu{
    background-color:#FFFFFF;
}

#Accessibilite{
    margin-left:auto;
    margin-right:auto;
}

#T1, #T2, .T3, .T4, #T5, #T6, #T7, #T8{
    font-family:"Cooper Black";
}

#T2, #T5{
    background-color:#01B4D5;
    border-top:solid 2px;
    border-bottom:solid 2px;
    text-align: center;
}

p#Texte_2, p#Texte_5{
    color: #FFFFFE;
}

#T1, #T6 p, #T7 p, #T8 p,p#Section_Tel, p#Section_Mail, p#Section_RS{
    text-align: center;
}

@media screen and (max-width:767px){
    #Contenu{
    height: 880px;
    }
    
    #Accessibilite{
        height: 250px;
        width: 380px;
    }
    
    .Carte{
        display:none;
    }
    
    #T6-8, #T6, #T7, #T8{
        margin-left:auto;
        margin-right:auto;
    }

    #T6-8{
        text-align:center;
        height: 150px;
        width: 250px;
        display: block;
    }

    #T6{
        height:150px;
        width:230px;
    }
    #T7{
        height: 122px;
        width:230px;    
    }
    #T8{
        height: 120px;
        width:230px;
    }
}

@media screen and (min-width: 768px) and (max-width:1023px){
    
    #Contenu{
        height: 600px;
    }
    
    #Accessibilite{
        height:230px;
        width: 760px;
    }
    
    .Carte{
        display: none;
    }
    
    .T3-4{
        display: block;
        height: 240px;
    }
    
    .T3, .T4{
        margin-left: 100px;
        margin-right: 100px;
    }

    .T3{
        margin-top:20px;
    }
    
    .T4{
        margin-bottom:20px;
    }
    
    #T6-8{
        height: 150px;
        width: 760px;
        margin-left:auto;
        margin-right:auto;
        display: block;
    }

    #T6{
        height:150px;
        width:230px;
        float: left;
        margin-left: 2%;
    }
    #T7{
        height: 122px;
        width:230px;
        float: left;
        margin-left: 15px;
        margin-right: 15px;
        padding-top: 14px;
        padding-bottom: 14px;        
    }
    #T8{
        height: 122px;
        width:230px;
        float: right;
        margin-right:2%;
        padding-top: 14px;
        padding-bottom: 14px;
    }
}

@media screen and (min-width: 1024px) and (max-width:1199px){
    
    #Contenu{
        height: 650px;
    }
    
    #Accessibilite{
        height:300px;
        width: 1000px;
    }
    
    .Carte{
        display: block;
        height: 300px;
        width: 500px;
    }
    
    #Maps_GPS{
        height: 260px;
        width: 460px;
        float: left;
        padding:20px;
    }
    
    .Button_Agrandir{
        height: 40px;
        width: 180px;
        display:block;
        position:absolute;
        z-index:1;      
        margin-top:125px;
        margin-bottom:125px;
        margin-left:160px;
        margin-right:160px;
        text-align: center;
        font-family:"Cooper Black";
    }
    
    .Button_Agrandir button{
        height: 40px;
        width: 180px;
        cursor:zoom-in;
        font-family:"Cooper Black";
        background-color: #01B4D6;
        color:white;
        border:solid 2px;
        border-color:#000000;
    }
    
    .Button_Agrandir:hover button{
        background-color: #019ebc;
    }
    
    .Button_Agrandir:active button{
        display:none;
    }
    
    ._Maps:active #Maps_GPS{
        height: 300px;
        width:500px;
        padding:0px;
    }
    
    .T3-4{
        display: block;
        height: 300px;
        width:500px;
        float:right;
    }
    
    .T3, .T4{
        margin-left: 30px;
        margin-right: 30px;
    }

    .T3{
        margin-top:35px;
    }
    
    .T4{
        margin-bottom:30px;
    }
    
    #T6-8{
        height: 150px;
        width: 780px;
        margin-left:auto;
        margin-right:auto;
        display: block;
    }

    #T6{
        height:150px;
        width:250px;
        float: left;
    }
    #T7{
        height: 122px;
        width:250px;
        float: left;
        margin-left: 15px;
        margin-right: 15px;
        padding-top: 14px;
        padding-bottom: 14px;        
    }
    #T8{
        height: 122px;
        width:250px;
        float: right;
        padding-top: 14px;
        padding-bottom: 14px;
    }
}

@media screen and (min-width: 1200px){
    
    #Contenu{
        height: 730px;
    }
    
    #Accessibilite{
        height:370px;
        width: 1180px;
    }
    
    .Carte{
        display: block;
        height: 370px;
        width: 590px;
    }
    
    #Maps_GPS{
        height: 310px;
        width: 530px;
        float: left;
        padding:30px;
    }
    
    .Button_Agrandir{
        height: 40px;
        width: 180px;
        display:block;
        position:absolute;
        z-index:1;      
        margin-top:160px;
        margin-bottom:160px;
        margin-left:205px;
        margin-right:205px;
        text-align: center;
        font-family:"Cooper Black";
    }
    
    .Button_Agrandir button{
        height: 40px;
        width: 180px;
        cursor:zoom-in;
        font-family:"Cooper Black";
        background-color: #01B4D6;
        color:white;
        border:solid 2px;
        border-color:#000000;
    }
    
    .Button_Agrandir:hover button{
        background-color: #019ebc;
    }
    
    .Button_Agrandir:active button{
        display:none;
    }
    
    ._Maps:active #Maps_GPS{
        height: 370px;
        width:590px;
        padding:0px;
    }
    
    .T3-4{
        display: block;
        height: 370px;
        width:580px;
        float:right;
    }
    
    .T3, .T4{
        margin-left: 30px;
        margin-right: 30px;
    }

    .T3{
        margin-top:70px;
    }
    
    .T4{
        margin-bottom:70px;
    }
    
    #T6-8{
        height: 170px;
        width: 820px;
        margin-left:auto;
        margin-right:auto;
        display: block;
    }

    #T6{
        height:170px;
        width:250px;
        float: left;
    }
    #T7{
        height: 122px;
        width:250px;
        float: left;
        margin-left: 35px;
        margin-right: 35px;
        padding-top: 24px;
        padding-bottom: 24px;        
    }
    #T8{
        height: 122px;
        width:250px;
        float: right;
        padding-top: 24px;
        padding-bottom: 24px;
    }
}