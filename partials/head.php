<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TO DO LIST</title>
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive|League+Script|Noto+Serif|Nunito| Lora|Source+Sans+Pro|Nothing+You+Could+Do|Reenie+Beanie|Inconsolata|Zeyada" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="To-do-list">
    
    

    
    <!--
    <style>
    
    
        body{
            background-image: url("image/cat_background.png");
            background-repeat: repeat;
            background-size: 260px;
            background-color: gray;
            color: dimgray;
            
        }
        
        .red_box{
            color: red;
            width: 100%;
            height: 50px;
            text-align: center;
            font-family: 'League Script', cursive;
            font-size: 1.4em;
        }
        
        .button_style_green{
            /* border-radius: 5px; */
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 7px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 0.8em;
        }
        
        .button_style_red{
            /* border-radius: 5px; */
            background-color: #f44336;
            border: none;
            color: white;
            padding: 7px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 0.8em;
        }
        
        .button_style_blue{
            /* border-radius: 5px; */
            width: 100%;
            background-color: #008CBA;
            border: none;
            color: white;
            padding: 7px 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 0.8em;
        }
        
        .list{
            width: 75%;
            /* width: 825px;*/
            margin: 20px auto;
            padding-right: 25px;
            padding-left: 25px;
            /* background-image: url("image/paper-texture-cells.jpg");
            background-repeat: repeat; */
            background-color: white;
            
        }
        
        .list_title{
            width: 100%;
            text-align: center;
            padding-top: 5px;
            
        }
        
        .list_title a{
            font-size: 9em;
            font-family: 'League Script', cursive;
            color: black;
            text-decoration: none;
        }
        
        .clear{
            clear: both;
        }
        
        /*
        h1{
            font-size: 9em;
            font-family: 'League Script', cursive;
        }
        */

        .list_items{
            padding: 20px;
            padding-top: 5px;
            font-size: 1.2em;
            /* font-family: 'Lora', serif; */
            font-family: 'Inconsolata', monospace;
            line-height: 175%;
            padding-left: 40px;
            padding-right: 40px;
        }
        
        .input_name{
            width: 18%;
            float: left;
            font-family: 'League Script', cursive;
            font-size: 1.3em;
            padding: 5px;
            
        }
             
        .input_task{
            width: 64%;
            float: left;
            padding: 5px;
        }        
        
        .input_task input[type=text]{
            width: 100%;
            font-family: 'Inconsolata', monospace;
            font-size: 0.8em;
        }
        
        .input_name2{
            width: 5%;
            float: left;
            font-family: 'League Script', cursive;
            font-size: 1.3em;
            padding: 5px;
            padding-left: 17px;
        }
        
        .input_priority{
            width: 8%;
            float: right;
            font-family: 'League Script', cursive;
            font-size: 1.3em;
            padding: 5px;
/*
            border: 1px solid red;
            box-sizing: border-box;
*/
            
        }
        
        .input_priority input[type=number]{
            width: 100%;
            font-family: 'Inconsolata', monospace;
            font-size: 0.8em;
        }


        
        .input_createdby{
            width: 64%;
            float: left; 
             padding: 5px;
            font-family: 'League Script', cursive;
            font-size: 1.2em;
        }
        
        .input_createdby input[type=text]{
            width: 100%;
            font-family: 'Inconsolata', monospace;
            font-size: 0.8em;
        }
        
        .input_name3{
            width: 18%;
            
        }
        .input_priotest{
            width: 18%;
            float: left;
             padding: 5px;
            
        }
        
        .input_submit{
            width: 16%;
            float: right;
            text-align: center;
            padding-right: 5px;
        }
        
        .columns_all{
            width: 100%;
            margin: 0px auto;
        }
        
        .list_title{
            width: 100%;
            
        }
        
        .list_sub_title{
            padding: 20px;
            width: 65%;
            float: left;
            font-family: 'Inconsolata', monospace;
            font-size: 1.8em;
/*            border: 1px solid red;*/
        }
        
        .sort{
            width: 35%;
            float: right;
            font-size: 0.8em;
            font-family: 'Inconsolata', monospace;
            padding-top: 25px;
            
/*
            border: 1px solid green;
            
*/
        }
        
        .sort a{
            text-decoration: none;
        }
        
        
        .column1{
            width: 5%; 
            float: left;
            padding-left: 15px;
/*            border: 1px solid red;*/
        }
        
        .column2{
            width: 68%; 
            float: left;
            padding-left: 2px;
/*            border: 1px solid green;*/
        }
        

        .column4{
            width: 7%; 
            float: left;
            font-size: 0.8em;
            text-align: right;
/*            border: 1px solid red;*/

        }
            
        
        
        .column3{
            width: 20%;  
            float: right;
/*           border: 1px solid green;*/
            font-size: 0.6em;
            text-align: right;
            padding-right: 20px;
        }
        
        /* input[type=text]{
            border: none;
            border-bottom: 1px solid black;
            background-color: transparent;
        } */
        
        .footer{
            width: 100%;
            text-align: center;
        }
        
        .footer a{
            font-family: 'League Script', cursive;
            font-size: 1.2em;
            text-decoration: none;
        }
        
        .button_bottom{
            width: 15%;
            float: left;
            text-align: left;
            padding: 10px;
        }
        

        
        .red{
            color: red;
        }
        .orange{
            color: orange;
        }
        .yellow{
            color: yellow;
        }
        
        .white{
            color: white;
        }
    </style>
    -->
</head>
<body>