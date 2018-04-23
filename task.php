<!DOCTYPE html>
<html>
<head>
    <title>Stage 1 HNG</title>
    <link href="https://fonts.googleapis.com/css?family=Timmana|Trade+Winds" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Timmana" rel="stylesheet">
</head>
<body>
    
<?php
date_default_timezone_set('Africa/Lagos');
$date = date('l jS \of F Y');
$time = date('h:i:sa');

?>
    <div class="top">
        <p id="date"><?php echo $date; ?></p>
        <h1><span id="first">H</span>NG<span id="second"> Internship 4.0</span></h1>
    </div>
    <div class="mid">
        <a href="">SIGN UP</a>
        <h2 id="time"><?php echo $time; ?></h2>
    </div>
</body>
    
    <style type="text/css">
        body{
            background-image: url(http://res.cloudinary.com/lowkeynerd/image/upload/v1524485796/blue_print_lowkeynerd.jpg);
            background-size: 100%;
            background-repeat: repeat;
        }
        h1{
            font-family: 'Trade Winds', cursive;
            font-size: 50px;
            color: #F2F2F2;
            margin-left: 15px;
            margin-top: 0;
        }
         #first{
            font-size: 50px;
            color: #F2994A;
        }
        #second{
            font-size: 25px;
            color: #F2994A;
        }
        #date{
            font-family: 'Timmana', sans-serif;
            font-style: normal;
            font-weight: normal;
            line-height: normal;
            font-size: 20px;
            text-align: right;
            color: #F2F2F2;
            margin-right: 15px; 
            margin-top: 0; 
            margin-bottom: 0; 
        }
        .mid{
            padding: 150px;
            text-align: center;
        }
        #time{
            font-family: 'Timmana', sans-serif;
            font-style: normal;
            font-weight: normal;
            line-height: normal;
            font-size: 50px;
            color: #020202;
            margin-bottom: 0px;
            padding: 0px;
        }
        a{
            font-size: 25px;
            font-family: 'Timmana', sans-serif;
            text-decoration: none;
            background-color: #F2F2F2;
            color: #020202;
            padding: 5px 15px;
            text-align: center;
        }
            
    </style>
</html> 