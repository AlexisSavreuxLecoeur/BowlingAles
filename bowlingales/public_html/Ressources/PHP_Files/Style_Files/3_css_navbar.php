<?php
    header('content-type: text/css');
?>

nav{
    width: 100%;
    margin: 0;
    background-color: #FFFFFF;
    position: relative;
    top: 0px;
    font-family : "Cooper Black";
}

.conteneur-nav{
    position: absolute;
    width: 100%;
}

nav input[type=checkbox]{
    display: none;
}

nav label{
    display: inline-block;
    width: 100%;
    padding: 10px 0px;
    text-align: center;
    background-color: #01B4D6;
    color:#FFFFFE;
}

nav ul{
    margin:0px;
    padding:0px;
    display: none;
    list-style-type: none;
    background-color: #01B4D5;
}

nav input[type=checkbox]:checked + ul{
    display: flex;
    flex-flow : column wrap;
}

nav ul li{
    flex: 1 1 auto;
    text-align: center;
}

nav > div > ul > li > a{
    color: #FFFFFD;
}

nav a{
    display: block;
    text-decoration: none;
    color: #FFFFFC;
    padding: 10px 0px;
}

nav a{
    background-color:#01B4D4;
}

nav a:hover{
    color: black;
}


@media screen and (min-width: 1024px){
    .conteneur-nav{
        position: static;
    }
    
    nav label, nav input{
        display: none;
    }
    
    nav input[type=checkbox]:checked + ul, nav ul{
        display: flex;
        flex-flow: row wrap;
        background-color: white;
    }
    
    nav ul li{
        position: relative;
    }
    
    nav a{
        border-bottom: 2px solid transparent;
    }
    
    nav a:hover{
        border-bottom: 2px solid black;
    }
}