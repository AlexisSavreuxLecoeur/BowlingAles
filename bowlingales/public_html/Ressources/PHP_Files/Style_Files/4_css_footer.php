<?php
    header('content-type: text/css');
?>

#F_{
    background-color:black;
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
    font-family:"Cooper Black";
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
    font-family:"Cooper Black";
    color:#FFFFFD;
    text-align:center;
}

#F_Liste_Liens{
    list-style-type: none;
    padding-left:35px;
    padding-right:35px;
    text-align:center;
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
    color: #FFFFFB;
}

#F_Box_Copyright p{
    margin-top: 0px;
    margin-bottom: 0px;
    font-size: 12px;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}

@media screen and (min-width:0px) and (max-width:480px){
    #F_{
        height:400px;
    }
    
    #F_Box_Footer{
        height:360px;
        width:200px;
    }
    
    #F_Colonne_1, #F_Colonne_2{
        width:200px;
    }

    #F_Colonne_1{
        height:200px;
    }

    #F_Colonne_2{
        height:75px;
        margin-bottom:15px;
    }
}
@media screen and (min-width:481px){
    #F_{
        height:450px;
    }
    
    #F_Box_Footer{
    margin-left:auto;
    margin-right:auto;
    width:400px;
    }

    #F_Colonne_1{
        height:180px;
    }

    #F_Colonne_2{
        top:-220px;
        height:120px;
    }
    }

    #F_Box_Copyright{
    
    }

    #F_Box_Copyright p{
        
    }

}