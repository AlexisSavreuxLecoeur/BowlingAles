<?php
    header('content-type: text/css');
?>

#Contenu{
    background-color:#FFFFFC;
}

#T1, #T2, #T3{
    display:block;
    text-align: justify;
}

#Texte_1, #Texte_2 , #Texte_3 {
    font-family:"Cooper Black";
}

#BLC_1, #BLC_2, #BLC_3, #BLC_4{
    margin-left:auto;
    margin-right:auto;
}

#Photo_1,#Photo_2,#Photo_3 {
    display: block;
}

#Photo_1-1,#Photo_2-1,#Photo_3-1 {
    box-sizing: border-box;
    height: 100%;
    width: 100%;
    padding: 30px;
}
#Photo_4, #Photo_5, #Photo_6{
    box-sizing: border-box;
}

@media screen and (min-width: 0px) and (max-width:767px){
    #Contenu {
        height: 1635px;
    }
    #BLC_1, #BLC_2, #BLC_3, #BLC_4 {
        width: 480px;
    }

    #BLC_1 {
        height: 450px;
    }
    #BLC_2 {
        height: 400px;
    }
    #BLC_3 {
        height: 340px;
    }
    #BLC_4 {
        height: 444px;
    }

    #Photo_1,#Photo_2,#Photo_3 {
        display: block;
        height: 250px;
        width: 415px;
        margin-left: 35px;
        margin-right: 35px;
    }
    #Photo_1,#Photo_3 {
        float: left;
    }
    #Photo_2{
        float: right;
    }

    #T1, #T2, #T3{
        width: 375px;
        margin-left: 54px;
        margin-right: 54px;
        float: left;
    }
    #T1{
        height: 220px;
    }
    #T2{
        height: 130px;
    }
    #T3{
        height: 60px;
    }

    #Texte_1, #Texte_2, #Texte_3 {
        font-size: 13px;
        margin-top: 5px;
        margin-bottom: 5px;
        padding-left: 10px;
        padding-right: 10px;
    }

    #Photo_4, #Photo_5, #Photo_6 {
        height: 148px;
        width: 246px;
        padding: 15px;
        margin-left: 117px;
        margin-right: 117px;
    }
}

@media screen and (min-width: 768px) and (max-width:1023px){
    #BLC_1, #BLC_2, #BLC_3, #BLC_4{
        width:750px;
    }
    #BLC_1, #BLC_2, #BLC_3{
        height:225px;
    }
    #BLC_4{
        height:148px;
    }

    #Photo_1, #Photo_2, #Photo_3{
        height:225px;
        width:375px;
    }
    #Photo_1, #Photo_3{
        float:left;
    }
    #Photo_2{
        float:right;
    }

    #T1, #T2, #T3{ 
        height:225px;
        width:375px;
    }
    #T1, #T3{
        float:right;
    }
    #T2{
        float:left;
    }

    #Texte_1, #Texte_2, #Texte_3{
        font-size:13px;
        padding-left:35px;
        padding-right:35px;
    }
    #Texte_1{
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #Texte_2{
        margin-top: 54px;
        margin-bottom: 54px;
    }
    #Texte_3{
        margin-top: 82px;
        margin-bottom: 82px;
    }

    #Photo_4, #Photo_5, #Photo_6 {
        height: 148px;
        width: 246px;
        padding: 20px;
    }
    #Photo_5{
        margin-right:1px;
        margin-left:1px;
    }
}

@media screen and (min-width: 1024px) and (max-width:1199px){
    #BLC_1, #BLC_2, #BLC_3, #BLC_4{
        width:1010px;
    }
    #BLC_1, #BLC_2, #BLC_3{
        height:310px;
    }
    #BLC_4{
        height:205px;
    }

    #Photo_1, #Photo_2, #Photo_3{
        height:310px;
        width:475px;
    }
    #Photo_1, #Photo_3 {
        float: left;
    }
    #Photo_2 {
        float: right;
    }

    #T1, #T2, #T3{
        height:250px;
        width:500px;
        margin-top:30px;
        margin-bottom:30px;
    }
    #T1, #T3{
        float:right;
    }
    #T2{
        float:left;
    }

    #Texte_1, #Texte_2, #Texte_3{
        padding-left:45px;
        padding-right:45px;
    }

    #Texte_1, #Texte_3{
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #Texte_2{
        margin-top: 35px;
        margin-bottom: 35px;
    }
    #Texte_3{
        margin-top: 85px;
        margin-bottom: 85px;
    }

    #Photo_4, #Photo_5, #Photo_6{
        height:205px;
        width:330px;
        padding:20px;
    }
    #Photo_5{
        margin-right:1px;
        margin-left:1px;
    }
}

@media screen and (min-width: 1200px){
    #BLC_1, #BLC_2, #BLC_3, #BLC_4{
        width:1180px;
    }
    #BLC_1, #BLC_2, #BLC_3{
        height:326px;
    }
    #BLC_4{
        height:205px;
    }

    #Photo_1, #Photo_2, #Photo_3{
        height:326px;
        width:500px;
    }
    #Photo_1, #Photo_3 {
        float: left;
    }
    #Photo_2 {
        float: right;
    }

    #T1, #T2, #T3{
        height:250px;
        width:500px;
        margin-top:30px;
        margin-bottom:30px;
    }
    #T1, #T3{
        float:right;
    }
    #T2{
        float:left;
    }

    #Texte_1, #Texte_2, #Texte_3{
        padding-left:40px;
        padding-right:40px;
    }
    #Texte_1{
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #Texte_2{
        margin-top: 35px;
        margin-bottom: 35px;
    }
    #Texte_3{
        margin-top: 85px;
        margin-bottom: 85px;
    }

    #Photo_4, #Photo_5, #Photo_6{
        height:205px;
        width:330px;
        padding:20px;
    }
    #Photo_4{
        margin-right:45px;
    }
    #Photo_5{
        margin-right:45px;
        margin-left:45px;
    }
    #Photo_6{
        margin-left:45px;
    }
}