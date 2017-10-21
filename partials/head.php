<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TO DO LIST</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive|League+Script|Noto+Serif|Nunito|Source+Sans+Pro|Nothing+You+Could+Do|Reenie+Beanie|Zeyada" rel="stylesheet">
    
    <style>
    
        body{
            /* background-image: url("image/cat_background.png");
            background-repeat: repeat;
            background-size: 260px; */
            background-color: gray;
            color: dimgray;
            
        }
        
        .red_box{
            color: red;
            border: 1px solid red;
            width: 300px;
            height: 50px;
        }
        
        .list{
            width: 825px;
            margin: 0px auto;
            background-image: url("image/paper-texture-cells.jpg");
            background-repeat: repeat;
            
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
            font-size: 1.1em;
            /* font-family: 'Noto Serif', sans-serif; */
            font-family: 'Nunito', sans-serif;
            line-height: 175%;
            padding-left: 40px;
            padding-right: 40px;
        }
        
        .input_task{
            width: 50%;
            float: left;
        }
        
        .input_createdby{
            width: 40%;
            float: left;     
        }
        
        .input_submit{
            width: 10%;
            float: right;
            
        }
        
        .columns_all{
            width: 100%;
            margin: 0px auto;
        }
        
        .list_title{
            width: 100%;
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
        
        input[type=text]{
            border: none;
            border-bottom: 1px solid black;
            background-color: transparent;
        }
    </style>
</head>
<body>