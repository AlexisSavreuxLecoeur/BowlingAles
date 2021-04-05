<?php
    header('content-type: text/css');
?>
/* Notes importantes */

#Contenu{
    background-color:#FFFFFF;
}

#T1{
    font-family:"Cooper Black";
    text-align:center;
}

#T2, #T3{
    font-family:"Cooper Black";
    text-align:center;
    border-top:solid 2px;
    border-bottom:solid 2px;
    background-color:#01B4D5;
}

p#Texte_1{
    margin-left:5%;
    margin-right:5%;
}

p#Texte_2, p#Texte_3{
    color: #FFFFFE;
}

@media screen and (min-width: 0px) and (max-width:829px){
    
    .Formule_Soiree{
        background-color: #FFFFFD;
        height:425px;
        min-height:100px;
        width:270px;
        display:flex;
        position:relative;
        justify-content:space-between;
        margin-left: auto;
        margin-right: auto;
    }
    
    .Formule_Soiree .Carte{
        box-sizing:border-box;
    }
    
    .Formule_Soiree .Carte #Face1, #Face2, #Face3, #Face4, #Face5, #Face6{
        position: absolute;
        top:0px;
        left:0px;
        height:135px;
        width:270px;
        transition:0.75s;
    }
    
    .Formule_Soiree .Carte #Face1, #Face2{
        margin-top:5px;
        margin-bottom:5px;
    }
    
    .Formule_Soiree .Carte #Face3, #Face4{
        margin-top:145px;
    }
    
    .Formule_Soiree .Carte #Face5, #Face6{
        margin-top:285px;
    }
    
    .Formule_Soiree .Carte #Face1, #Face3, #Face5{
        display:flex;
        z-index:1;
        transform-origin:right;
    }

    .Formule_Soiree .Carte #Face1 img{
        height:135px;
        width:270px;
    }

    .Formule_Soiree .Carte #Face3 img{
        height:135px;
        width:270px;
    }

    .Formule_Soiree .Carte #Face5 img{
        height:135px;
        width:270px;
    }

    .Formule_Soiree .Carte #Face1 h3, #Face3 h3, #Face5 h3{
        display:none;
    }

    .Formule_Soiree .Carte:hover #Face1, .Carte:hover #Face3, .Carte:hover #Face5{
        background-color: transparent;
        color:#FFFFFC;
        transform: translateX(-100%) rotateY(90deg);
        transition-delay: 150ms;

    }

    .Formule_Soiree .Carte #Face2, #Face4, #Face6{
        display:flex;
        padding:5px;
        transform-origin:top;
        transform: translateX(100%) rotateY(90deg);
        transition-delay: 150ms;
    }

    .Formule_Soiree .Carte #Texte_F2{
        font-size:14px;
        justify-content: center;
        margin-top:35px;
        margin-bottom:35px;
        margin-left:15px;
        margin-right:15px;
    }

    .Formule_Soiree .Carte #Texte_F4{
        font-size:14px;
        justify-content: center;
        margin-top:20px;
        margin-bottom:20px;
        margin-left:15px;
        margin-right:15px;
        
    }

    .Formule_Soiree .Carte #Texte_F41{
        font-size:10px;
        justify-content: center;
        margin-top:20px;
        margin-bottom:20px;
        margin-left:15px;
        margin-right:15px;
    }
    .Formule_Soiree .Carte #Texte_F6{
        font-size:14px;
        justify-content: center;
        margin-top:35px;
        margin-bottom:35px;
        margin-left:15px;
        margin-right:15px;
    }

    .Formule_Soiree .Carte:hover #Face2, .Carte:hover #Face4, .Carte:hover #Face6{
        transform: translateX(0%) rotateY(0deg);
        transition-delay: 150ms;
    }


    .Formule_Evenements{
        background-color: #FFFFFD;
        height:425px;
        min-height:100px;
        width:270px;
        display:flex;
        position:relative;
        justify-content:space-between;
        margin-left: auto;
        margin-right: auto;
    }

    .Formule_Evenements .Carte{
        box-sizing:border-box;
    }

    .Formule_Evenements .Carte #Face7, #Face8, #Face9, #Face10, #Face11, #Face12{
        position: absolute;
        top:0px;
        left:0px;
        height:135px;
        width:270px;
        transition:0.75s;
    }
    
    .Formule_Evenements .Carte #Face7, #Face8{
        margin-top:5px;
        margin-bottom:5px;
    }
    
    .Formule_Evenements .Carte #Face9, #Face10{
        margin-top:145px;
    }
    
    .Formule_Evenements .Carte #Face11, #Face12{
        margin-top:285px;
    }
    
    .Formule_Evenements .Carte #Face7, #Face9, #Face11{
        display:flex;
        z-index:1;
        transform-origin:right;
    }

    .Formule_Evenements .Carte #Face7 img{
        height:135px;
        width:270px;
    }

    .Formule_Evenements .Carte #Face9 img{
        height:135px;
        width:270px;
    }

    .Formule_Evenements .Carte #Face11 img{
        height:135px;
        width:270px;
    }

    .Formule_Evenements .Carte #Face7 h3, #Face9 h3, #Face11 h3{
        display:none;
    }

    .Formule_Evenements .Carte:hover #Face7, .Carte:hover #Face9, .Carte:hover #Face11{
        background-color: transparent;
        color:#FFFFFC;
        transform: translateX(-100%) rotateY(90deg);
        transition-delay: 150ms;

    }

    .Formule_Evenements .Carte #Face8, #Face10, #Face12{
        display:flex;
        padding:5px;
        transform-origin:top;
        transform: translateX(100%) rotateY(90deg);
        transition-delay: 150ms;
    }

    .Formule_Evenements .Carte #Texte_F8{
        font-size:14px;
        justify-content: center;
        margin-top:35px;
        margin-bottom:35px;
        margin-left:15px;
        margin-right:15px;
    }

    .Formule_Evenements .Carte #Texte_F10{
        font-size:14px;
        justify-content: center;
        margin-top:35px;
        margin-bottom:35px;
        margin-left:15px;
        margin-right:15px;
    }

    .Formule_Evenements .Carte #Texte_F12{
        font-size:14px;
        justify-content: center;
        margin-top:35px;
        margin-bottom:35px;
        margin-left:15px;
        margin-right:15px;
    }

    .Formule_Evenements .Carte:hover #Face8, .Carte:hover #Face10, .Carte:hover #Face12{
        transform: translateX(0%) rotateY(0deg);
        transition-delay: 150ms;
    }
}

@media screen and (min-width: 830px) and (max-width:1023px){
    
    .Formule_Soiree{
        background-color: #FFFFFD;
        height:145px;
        min-height:100px;
        width:810px;
        display:flex;
        position:relative;
        justify-content:space-between;
        margin-left: auto;
        margin-right: auto;
    }

    .Formule_Soiree .Carte{
        position:relative;
        box-sizing:border-box;
        height:145px;
        width:270px;
    }

    .Formule_Soiree .Carte #Face1, #Face2, #Face3, #Face4, #Face5, #Face6{
        position: absolute;
        top:0px;
        left:0px;
        width:100%;
        height:100%;
        transition:0.75s;
    }

    .Formule_Soiree .Carte #Face1, #Face3, #Face5{
        display:flex;
        justify-content:center;
        align-items:center;
        z-index:1;
        transform-origin:bottom;
    }

    .Formule_Soiree .Carte #Face1 img{
        height:135px;
        width:270px;
    }

    .Formule_Soiree .Carte #Face3 img{
        height:135px;
        width:270px;
    }

    .Formule_Soiree .Carte #Face5 img{
        height:135px;
        width:270px;
    }

    .Formule_Soiree .Carte #Face1 h3, #Face3 h3, #Face5 h3{
        display:none;
    }

    .Formule_Soiree .Carte:hover #Face1, .Carte:hover #Face3, .Carte:hover #Face5{
        background-color: transparent;
        color:#FFFFFC;
        transform: translateY(-100%) rotateX(90deg);
        transition-delay: 150ms;

    }

    .Formule_Soiree .Carte #Face2, #Face4, #Face6{
        display:flex;
        justify-content:center;
        align-items:center;
        padding:5px;
        transform-origin:top;
        transform: translateY(100%) rotateX(90deg);
        transition-delay: 150ms;
    }

    .Formule_Soiree .Carte #Texte_F2{
        font-size:14px;
        justify-content: center;
        margin-top:35px;
        margin-bottom:35px;
        margin-left:15px;
        margin-right:15px;
    }

    .Formule_Soiree .Carte #Texte_F4{
        font-size:14px;
        justify-content: center;
        margin-top:35px;
        margin-bottom:20px;
        margin-left:15px;
        margin-right:15px;
    }

    .Formule_Soiree .Carte #Texte_F41{
        font-size:10px;
        justify-content: center;
        margin-top:5px;
        margin-bottom:20px;
        margin-left:15px;
        margin-right:15px;
    }
    .Formule_Soiree .Carte #Texte_F6{
        font-size:14px;
        justify-content: center;
        margin-top:35px;
        margin-bottom:35px;
        margin-left:15px;
        margin-right:15px;
    }

    .Formule_Soiree .Carte:hover #Face2, .Carte:hover #Face4, .Carte:hover #Face6{
        transform: translateY(0%) rotateX(0deg);
        transition-delay: 150ms;
    }


    .Formule_Evenements{
        background-color: #FFFFFD;
        height:145px;
        width:810px;
        min-height:100px;
        display:flex;
        position:relative;
        justify-content:space-between;
        margin-left: auto;
        margin-right: auto;
    }

    .Formule_Evenements .Carte{
        position:relative;
        box-sizing:border-box;
        height:145px;
        width:270px;
    }

    .Formule_Evenements .Carte #Face7, #Face8, #Face9, #Face10, #Face11, #Face12{
        position: absolute;
        top:0px;
        left:0px;
        width:100%;
        height:100%;
        transition:0.75s;
    }

    .Formule_Evenements .Carte #Face7, #Face9, #Face11{
        display:flex;
        justify-content:center;
        align-items:center;
        z-index:1;
        transform-origin:bottom;
    }

    .Formule_Evenements .Carte #Face7 img{
        height:135px;
        width:270px;
    }

    .Formule_Evenements .Carte #Face9 img{
        height:135px;
        width:270px;
    }

    .Formule_Evenements .Carte #Face7 img, #Face9 img, #Face11 img{
        height:135px;
        width:270px;
    }

    .Formule_Evenements .Carte #Face7 h3, #Face9 h3, #Face11 h3{
        display:none;
    }

    .Formule_Evenements .Carte:hover #Face7, .Carte:hover #Face9, .Carte:hover #Face11{
        background-color: transparent;
        color:#FFFFFC;
        transform: translateY(-100%) rotateX(90deg);
        transition-delay: 150ms;
    }

    .Formule_Evenements .Carte #Face8, #Face10, #Face12{
        display:flex;
        justify-content:center;
        align-items:center;
        padding:5px;
        transform-origin:top;
        transform: translateY(100%) rotateX(90deg);
        transition-delay: 150ms;
    }

    .Formule_Evenements .Carte #Texte_F8{
        font-size:14px;
        justify-content: center;
        margin-top:35px;
        margin-bottom:35px;
        margin-left:15px;
        margin-right:15px;
    }

    .Formule_Evenements .Carte #Texte_F10{
        font-size:14px;
        justify-content: center;
        margin-top:35px;
        margin-bottom:35px;
        margin-left:15px;
        margin-right:15px;
    }

    .Formule_Evenements .Carte #Texte_F12{
        font-size:14px;
        justify-content: center;
        margin-top:35px;
        margin-bottom:35px;
        margin-left:15px;
        margin-right:15px;
    }

    .Formule_Evenements .Carte:hover #Face8, .Carte:hover #Face10, .Carte:hover #Face12{
        transform: translateY(0%) rotateX(0deg);
        transition-delay: 150ms;
    }
}

@media screen and (min-width: 1024px) and (max-width:1199px){
    
    .Formule_Soiree{
        background-color: #FFFFFD;
        height:145px;
        min-height:100px;
        width:810px;
        display:flex;
        position:relative;
        justify-content:space-between;
        margin-left: auto;
        margin-right: auto;
    }

    .Formule_Soiree .Carte{
        position:relative;
        box-sizing:border-box;
        height:145px;
        width:270px;
    }

    .Formule_Soiree .Carte #Face1, #Face2, #Face3, #Face4, #Face5, #Face6{
        position: absolute;
        top:0px;
        left:0px;
        width:100%;
        height:100%;
        transition:0.75s;
    }

    .Formule_Soiree .Carte #Face1, #Face3, #Face5{
        display:flex;
        justify-content:center;
        align-items:center;
        z-index:1;
        transform-origin:bottom;
    }

    .Formule_Soiree .Carte #Face1 img{
        height:135px;
        width:270px;
    }

    .Formule_Soiree .Carte #Face3 img{
        height:135px;
        width:270px;
    }

    .Formule_Soiree .Carte #Face5 img{
        height:135px;
        width:270px;
    }

    .Formule_Soiree .Carte #Face1 h3, #Face3 h3, #Face5 h3{
        display:none;
    }

    .Formule_Soiree .Carte:hover #Face1, .Carte:hover #Face3, .Carte:hover #Face5{
        background-color: transparent;
        color:#FFFFFC;
        transform: translateY(-100%) rotateX(90deg);
        transition-delay: 150ms;

    }

    .Formule_Soiree .Carte #Face2, #Face4, #Face6{
        display:flex;
        justify-content:center;
        align-items:center;
        padding:5px;
        transform-origin:top;
        transform: translateY(100%) rotateX(90deg);
        transition-delay: 150ms;
    }

    .Formule_Soiree .Carte #Texte_F2{
        font-size:14px;
        justify-content: center;
        margin-top:35px;
        margin-bottom:35px;
        margin-left:15px;
        margin-right:15px;
    }

    .Formule_Soiree .Carte #Texte_F4{
        font-size:14px;
        justify-content: center;
        margin-top:35px;
        margin-bottom:20px;
        margin-left:15px;
        margin-right:15px;
    }

    .Formule_Soiree .Carte #Texte_F41{
        font-size:10px;
        justify-content: center;
        margin-top:5px;
        margin-bottom:20px;
        margin-left:15px;
        margin-right:15px;
    }
    .Formule_Soiree .Carte #Texte_F6{
        font-size:14px;
        justify-content: center;
        margin-top:35px;
        margin-bottom:35px;
        margin-left:15px;
        margin-right:15px;
    }

    .Formule_Soiree .Carte:hover #Face2, .Carte:hover #Face4, .Carte:hover #Face6{
        transform: translateY(0%) rotateX(0deg);
        transition-delay: 150ms;
    }


    .Formule_Evenements{
        background-color: #FFFFFD;
        height:145px;
        width:810px;
        min-height:100px;;
        display:flex;
        position:relative;
        justify-content:space-between;
        margin-left: auto;
        margin-right: auto;
    }

    .Formule_Evenements .Carte{
        position:relative;
        box-sizing:border-box;
        height:145px;
        width:270px;
    }

    .Formule_Evenements .Carte #Face7, #Face8, #Face9, #Face10, #Face11, #Face12{
        position: absolute;
        top:0px;
        left:0px;
        width:100%;
        height:100%;
        transition:0.75s;
    }

    .Formule_Evenements .Carte #Face7, #Face9, #Face11{
        display:flex;
        justify-content:center;
        align-items:center;
        z-index:1;
        transform-origin:bottom;
    }

    .Formule_Evenements .Carte #Face7 img{
        background-image: url("");
        height:135px;
        width:270px;
    }

    .Formule_Evenements .Carte #Face9 img{
        height:135px;
        width:270px;
    }

    .Formule_Evenements .Carte #Face7 img, #Face9 img, #Face11 img{
        height:135px;
        width:270px;
    }

    .Formule_Evenements .Carte #Face7 h3, #Face9 h3, #Face11 h3{
        display:none;
    }

    .Formule_Evenements .Carte:hover #Face7, .Carte:hover #Face9, .Carte:hover #Face11{
        background-color: transparent;
        color:#FFFFFC;
        transform: translateY(-100%) rotateX(90deg);
        transition-delay: 150ms;
    }

    .Formule_Evenements .Carte #Face8, #Face10, #Face12{
        display:flex;
        justify-content:center;
        align-items:center;
        padding:5px;
        transform-origin:top;
        transform: translateY(100%) rotateX(90deg);
        transition-delay: 150ms;
    }

    .Formule_Evenements .Carte #Texte_F8{
        font-size:14px;
        justify-content: center;
        margin-top:35px;
        margin-bottom:35px;
        margin-left:15px;
        margin-right:15px;
    }

    .Formule_Evenements .Carte #Texte_F10{
        font-size:14px;
        justify-content: center;
        margin-top:35px;
        margin-bottom:35px;
        margin-left:15px;
        margin-right:15px;
    }

    .Formule_Evenements .Carte #Texte_F12{
        font-size:14px;
        justify-content: center;
        margin-top:35px;
        margin-bottom:35px;
        margin-left:15px;
        margin-right:15px;
    }

    .Formule_Evenements .Carte:hover #Face8, .Carte:hover #Face10, .Carte:hover #Face12{
        transform: translateY(0%) rotateX(0deg);
        transition-delay: 150ms;
    }
}

@media screen and (min-width: 1200px){
    
    .Formule_Soiree{
        background-color: #FFFFFD;
        height:145px;
        min-height:100px;
        width:810px;
        display:flex;
        position:relative;
        justify-content:space-between;
        margin-left: auto;
        margin-right: auto;
    }

    .Formule_Soiree .Carte{
        position:relative;
        box-sizing:border-box;
        height:145px;
        width:270px;
    }

    .Formule_Soiree .Carte #Face1, #Face2, #Face3, #Face4, #Face5, #Face6{
        position: absolute;
        top:0px;
        left:0px;
        width:100%;
        height:100%;
        transition:0.75s;
    }

    .Formule_Soiree .Carte #Face1, #Face3, #Face5{
        display:flex;
        justify-content:center;
        align-items:center;
        z-index:1;
        transform-origin:bottom;
    }

    .Formule_Soiree .Carte #Face1 img{
        height:135px;
        width:270px;
    }

    .Formule_Soiree .Carte #Face3 img{
        height:135px;
        width:270px;
    }

    .Formule_Soiree .Carte #Face5 img{
        height:135px;
        width:270px;
    }

    .Formule_Soiree .Carte #Face1 h3, #Face3 h3, #Face5 h3{
        display:none;
    }

    .Formule_Soiree .Carte:hover #Face1, .Carte:hover #Face3, .Carte:hover #Face5{
        background-color: transparent;
        color:#FFFFFC;
        transform: translateY(-100%) rotateX(90deg);
        transition-delay: 150ms;

    }

    .Formule_Soiree .Carte #Face2, #Face4, #Face6{
        display:flex;
        justify-content:center;
        align-items:center;
        padding:5px;
        transform-origin:top;
        transform: translateY(100%) rotateX(90deg);
        transition-delay: 150ms;
    }

    .Formule_Soiree .Carte #Texte_F2{
        font-size:14px;
        justify-content: center;
        margin-top:35px;
        margin-bottom:35px;
        margin-left:15px;
        margin-right:15px;
    }

    .Formule_Soiree .Carte #Texte_F4{
        font-size:14px;
        justify-content: center;
        margin-top:35px;
        margin-bottom:20px;
        margin-left:15px;
        margin-right:15px;
    }

    .Formule_Soiree .Carte #Texte_F41{
        font-size:10px;
        justify-content: center;
        margin-top:5px;
        margin-bottom:20px;
        margin-left:15px;
        margin-right:15px;
    }
    .Formule_Soiree .Carte #Texte_F6{
        font-size:14px;
        justify-content: center;
        margin-top:35px;
        margin-bottom:35px;
        margin-left:15px;
        margin-right:15px;
    }

    .Formule_Soiree .Carte:hover #Face2, .Carte:hover #Face4, .Carte:hover #Face6{
        transform: translateY(0%) rotateX(0deg);
        transition-delay: 150ms;
    }


    .Formule_Evenements{
        background-color: #FFFFFD;
        height:145px;
        width:810px;
        min-height:100px;;
        display:flex;
        position:relative;
        justify-content:space-between;
        margin-left: auto;
        margin-right: auto;
    }

    .Formule_Evenements .Carte{
        position:relative;
        box-sizing:border-box;
        height:145px;
        width:270px;
    }

    .Formule_Evenements .Carte #Face7, #Face8, #Face9, #Face10, #Face11, #Face12{
        position: absolute;
        top:0px;
        left:0px;
        width:100%;
        height:100%;
        transition:0.75s;
    }

    .Formule_Evenements .Carte #Face7, #Face9, #Face11{
        display:flex;
        justify-content:center;
        align-items:center;
        z-index:1;
        transform-origin:bottom;
    }

    .Formule_Evenements .Carte #Face7 img{
        height:135px;
        width:270px;
    }

    .Formule_Evenements .Carte #Face9 img{
        height:135px;
        width:270px;
    }

    .Formule_Evenements .Carte #Face7 img, #Face9 img, #Face11 img{
        height:135px;
        width:270px;
    }

    .Formule_Evenements .Carte #Face7 h3, #Face9 h3, #Face11 h3{
        display:none;
    }

    .Formule_Evenements .Carte:hover #Face7, .Carte:hover #Face9, .Carte:hover #Face11{
        background-color: transparent;
        color:#FFFFFC;
        transform: translateY(-100%) rotateX(90deg);
        transition-delay: 150ms;
    }

    .Formule_Evenements .Carte #Face8, #Face10, #Face12{
        display:flex;
        justify-content:center;
        align-items:center;
        padding:5px;
        transform-origin:top;
        transform: translateY(100%) rotateX(90deg);
        transition-delay: 150ms;
    }

    .Formule_Evenements .Carte #Texte_F8{
        font-size:14px;
        justify-content: center;
        margin-top:35px;
        margin-bottom:35px;
        margin-left:15px;
        margin-right:15px;
    }

    .Formule_Evenements .Carte #Texte_F10{
        font-size:14px;
        justify-content: center;
        margin-top:35px;
        margin-bottom:35px;
        margin-left:15px;
        margin-right:15px;
    }

    .Formule_Evenements .Carte #Texte_F12{
        font-size:14px;
        justify-content: center;
        margin-top:35px;
        margin-bottom:35px;
        margin-left:15px;
        margin-right:15px;
    }

    .Formule_Evenements .Carte:hover #Face8, .Carte:hover #Face10, .Carte:hover #Face12{
        transform: translateY(0%) rotateX(0deg);
        transition-delay: 150ms;
    }
}