<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TO DO LIST</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive|League+Script|Noto+Serif|Nunito| Lora|Source+Sans+Pro|Nothing+You+Could+Do|Reenie+Beanie|Inconsolata|Zeyada" rel="stylesheet">
    
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
            border: 1px solid red;
            width: 300px;
            height: 50px;
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
        
        .clear{
            clear: both;
        }
        
        h1{
            font-size: 9em;
            font-family: 'League Script', cursive;
        }

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
            width: 82%;
            float: right;
            padding: 5px;
            float: right;
        }
        
        
        .input_task input[type=text]{
            width: 100%;
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
            width: 100%;
            font-family: 'Inconsolata', monospace;
            font-size: 1.8em;
            
        }
        
        .column1{
            width: 5%; 
            float: left;
            padding-left: 15px;
            /* border: 1px solid red; */
        }
        
        .column2{
            width: 65%; 
            float: left;
            padding-left: 2px;
            /* border: 1px solid red; */
        }
        
        .column3{
            width: 30%;  
            float: right;
            /* border: 1px solid red; */
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
            width: 100%;
            text-align: left;
            padding: 10px;
        }
    </style>
</head>
<body>