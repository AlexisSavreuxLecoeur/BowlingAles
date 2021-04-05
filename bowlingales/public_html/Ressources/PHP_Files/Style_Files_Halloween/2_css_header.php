<?php
    header('content-type: text/css');
?>

header {
    margin: 0px;
    background-color: #000000;
}
.H_Img_Header{
    position:relative;
    float:left;
    margin-top:20px;
    margin-left:20px;
}
#H_Title_Bowling{
    position:relative;
    color: #FFFFFF;
    font-family:"Happy Halloween";
    text-align:center;
}
#H_Telephone_1{
    background-color: #000001;
    color: #FFFFFE;
    font-family:"Happy Halloween";
    float: right;
    text-align: right;
    height: 30px;
    width: 230px;
    font-size: 15px;
    padding-right: 110px;
}

#H_Facebook, #H_Instagram{
    float: right;
}

@media screen and (min-width: 0px) and (max-width:767px){
    header{
        height:100px;
    }
    #H_Box_Title{
        height: 100px;
    }
    .H_Img_Header{
        width:60px;
        height:60px;
        margin-top:15px;
        margin-left:15px;
    }
    #H_Title_Bowling{
        width:250px;
        font-size: 30px;
        margin-left: 100px;
        margin-right: 100px;
        padding-top: 45px;
    }
    #H_Telephone_1{    
        margin-top: -65px;
    }
    #H_Facebook, #H_Instagram{
        margin-top: -70px;
    }
    #H_Facebook{
        padding-right: 60px;
    }
    #H_Instagram{
        padding-right: 15px;
    }
}

@media screen and (min-width: 768px) and (max-width:1023px){
    header{
        height:120px;    
    }
    #H_Box_Title{
        height: 120px;
    }

    .H_Img_Header{
        height:70px;
        width:70px;
    }
    
    #H_Title_Bowling{
        width:350px;
        font-size: 40px;
        margin-left: 120px;
        margin-right: 120px;
        padding-top: 50px;
    }

    #H_Telephone_1{
        margin-top: -80px;
    }
    
    #H_Facebook, #H_Instagram{
        margin-top: -85px;
    }
    
    #H_Facebook{
        padding-right: 60px;
    }
    
    #H_Instagram{
        padding-right: 15px;
    }
}

@media screen and (min-width: 1024px) and (max-width:1199px){
    header{
        height:130px;
    }
    
    #H_Box_Title{
        height: 130px;
    }
    
    .H_Img_Header{
        width:80px;
        height:80px;
    }
    
    #H_Title_Bowling{
        width:420px;
        font-size: 49px;
        margin-left: 120px;
        margin-right: 120px;
        padding-top: 50px;
    }

    #H_Telephone_1{
        margin-top: -90px;
    }

    #H_Facebook, #H_Instagram{
        margin-top: -95px;
    }
    
    #H_Facebook{
        padding-right: 60px;
    }

    #H_Instagram{
        padding-right: 15px;
    }
}

@media screen and (min-width: 1200px){
    header{
        height:150px; 
    }
    
    #H_Box_Title{
        height: 150px;
    }
    
    .H_Img_Header{
        width:100px;
        height:100px;
    }
    
    #H_Title_Bowling{
        width:420px;
        font-size: 50px;
        margin-left: 150px;
        margin-right: 150px;
        padding-top: 60px;
    }
    
    #H_Telephone_1{
        margin-top: -100px;
    }
    
    #H_Facebook, #H_Instagram{
        margin-top: -100px;
    }
    
    #H_Facebook{
        padding-right: 60px;
    }
    
    #H_Instagram{
        padding-right: 15px;
    }
}