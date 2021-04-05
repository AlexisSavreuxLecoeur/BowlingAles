<?php
    header('content-type: text/css');
?>

#F_{
    background-color:#000000;
}

#F_Box_Footer{
    margin-left:auto;
    margin-right:auto;
}

#F_Colonne_1, #F_Colonne_2{
    position:relative;
}

#F_Colonne_1{
    height:200px;
    width:180px;
}

#F_Colonne_2{
    width:200px;
    float:right;
}

#F_T1 p, #F_T2 p{
    font-size: 20px;
    font-family:"Happy Halloween";
    color:#FFFFFF;
    text-align:center;
}

#F_Tel p, #F_Mail p{
    font-size: 14px;
    font-family:"Cooper Black";
    color:#FFFFFE;
    text-align:center;
}

#F_Facebook, #F_Instagram{
    height:32px;
    width:32px;
    position:absolute;
}

#F_Facebook{
    margin-left:19.5%;
    margin-right:9.5%;
}

#F_Instagram{
    margin-left:54.5%;
    margin-right:19.5%;
}

#F_Texte_3{
    font-size: 18px;
    font-family:"Happy Halloween";
    color:#FFFFFD;
    text-align:center;
}

#F_Liste_Liens{
    list-style-type: none;
    padding-left:10px;
}

#F_Liste_Liens a{
    font-family:"Cooper Black";
    font-size: 14px;
    text-decoration: none;
    color:#FFFFFC;
}

#F_Box_Copyright{
    margin-left:auto;
    margin-right:auto;
    text-align:center;
}

#F_Copyright{
    font-size: 12px;
    margin-block-start: 0;
    margin-block-end: 0;
    color:FFFFFB;
}

@media screen and (min-width: 0px) and (max-width:767px){
    #F_{
        height:400px;
    }

    #F_Box_Footer{
        height:360px;
        width:200px;
    }

    #F_Colonne_1{
        margin-left:auto;
        margin-right:auto;
    }
    
    #F_Colonne_2{
        height:160px;
        margin-top:0px;
        margin-left:auto;
        margin-right:auto;
    }
}

@media screen and (min-width: 768px){
    #F_{
        height:240px;
    }
    
    #F_Box_Footer{
        height:200px;
    }

    #F_Colonne_1{
        margin-left:75px;
        margin-right:75px;
    }
    
    #F_Colonne_2{
        height:200px;
        margin-top:-220px;
        margin-left:75px;
        margin-right:75px;
    }
}

@media screen and (min-width: 768px) and (max-width:1023px){
    #F_Box_Footer{
        width:600px;
    }
}

@media screen and (min-width: 1024px) and (max-width:1199px){
    #F_Box_Footer{
        width:700px;
    }
}

@media screen and (min-width: 1200px){
    #F_Box_Footer{
        width:750px;
    }
}