<?php // Header 2p0; Nick West; 2018.10.05
session_start();
echo "<!DOCTYPE html>";
include 'functions.php';
?>

<html>
    <head>
        <title>Hartselle Nailwood</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta http-equiv="X-UA-Compatible" content="IE=9" />
        <?php if ($autoRefresh) { echo '<meta http-equiv="refresh" content="60"/>'; } ?>
        <style>
            .brand {
                position: absolute;
                top: 0px;
                left: 5px;
                font-family: 'Helvetica';
                font-size: 50pt;
                text-align: left;
                color: #004370; // Sonoco Blue
                background-color: #00111a; //Dark Greyish Blue
                padding: 2px;
                width: 700px;
                height: 80px;
            }
            .timeStamp {
                left: 800px;
                width: 500px;
                font-size: 30pt;
                text-align: right;
                color: #004370;
            }
            .dashboard {
                position: absolute;
                top: 90px;
                left: 15px;
                width: 100%
            }
            .dbTitle {
                font-size: 15pt;
                color: #4db8ff;
                text-align: right;
                background-color: #00111a;
                font-family: 'Helvetica';
            }
            .dbCol {
                height: 100px;
                text-align: center;
                border: lightgray;
                background-color: darkgrey;
                font-size: 57pt;
                font-family: 'Helvetica';
                border-radius: 5px; 
                vertical-align:  middle;
            }
            .colName { font-size: 40pt; width: 210px; padding-top: 2%; line-height: 85%;}
            .colShift { width: 70px; }
            .colUptime { width: 160px; }
            .colSpd { width: 240px; }
            .colUnits { width: 280px; }
            .colOrder { font-size: 30pt; width: 240px; line-height: 175%; }
            .colRemaining { width: 170px; }
            .colActive { background: #d1e2ff; }
            

            .good { background: #6ee804; }
            .bad { color: white; background: #ff4300; }
            .okay { color: black; background: #bee804; }
            
            .lossBtn {
                height: 200px;
                width: 200px;
                font-family: 'Helvetica';
                font-size: 20pt;
                border-radius: 10px;
                box-shadow: 10px 10px 5px #888;
            }
            .lossBtn:active { box-shadow: none; }
            
            .box {
                position: absolute;
                top: 0px;
                font-family: 'Helvetica';
                font-size: 16pt;
                text-align: center;
                color: tan;
                font-weight: bold;
                padding: 10px;
                width: 440px;
                height: 65px;
                border: 10px solid #006;
                box-shadow: 15px 15px 10px #888;
                background: darkblue;
                background: radial-gradient(center,#3232a2,#000072);
                background:-moz-radial-gradient(center,#3232a2,#000072);
                background:-webkit-radial-gradient(center,#3232a2,#000072);
                background:-o-radial-gradient(center,#3232a2,#000072);
                overflow-y: auto }
            .b1 {
                font-size: 12pt;
                border: 5px solid #006;
                transform: rotate(0deg);
                margin-top: 110px;
                left: 5px;
                width: 160px;
                height: 40px;
                border-top-left-radius: 10px 10px;
                border-top-right-radius: 10px 10px;
                border-bottom-left-radius: 10px 10px;
                border-bottom-right-radius: 10px 10px; }
            .b1:active { box-shadow: none; }
            .posButton2 {
                position: absolute;
                top: 0px;
                margin-left: 380px; }
            .posButton3 {
                position: absolute;
                top: 0px;
                left: 200px; }
            .posButton4 {
                position: absolute;
                top: 0px;
                left: 400px; }
            .posButton5 {
                position: absolute;
                top: 0px;
                left: 600px; }
            .posButton6 {
                position: absolute;
                top: 0px;
                left: 800px; }
            .posButton7 {
                position: absolute;
                top: 0px;
                left: 1000px; }
            .selected {
                color: black;
                background: #CC0099;
                background: radial-gradient(center,#CC0099,#993399);
                background:-moz-radial-gradient(center,#CC0099,#993399);
                background:-webkit-radial-gradient(center,#CC0099,#993399);
                background:-o-radial-gradient(center,#CC0099,#993399);}
            .dtEvents {
                position: absolute;
                line-height: 150%;
                margin-top: 190px;
                font-family: 'Arial';
                font-size: 12pt;
                text-align: left;
                color: black;
                padding: 10px;
                width: 1200px;
                height:500px;
                border: 2px solid #006;
                background: white;
                overflow-y: auto; }
            .report {
                position: absolute;
                top: 45px;
                left: 450px;
                width: 100px;
                height: 20px;
                margin-top: 0px;

            }
          .s2 {
                color:blue;
                font-size: 14pt;
                font-style: 'italic';}
            
            .lnk:hover { background-color: lightblue; }
            .error {
                position: relative;
                color: red;
                background-color: #ddd;
                width: 580px;
                height: 75px;
                overflow-y: auto;
                text-align: left;
                border: 2px solid #006;
                box-shadow: 5px 5px 3px #888;
                font-family: 'Helvetica';
                font-size: 16pt; 
          }
            
        </style>
    </head>
    <body style="background-color:#00111a">
<?php
include 'shiftDefinitions.php';
include 'lineDefinitions.php';
?>
<a style='text-decoration:none;' href='dashboard2p0.php'><div class="brand">Sonoco Reels & Plugs</div></a>
<div class="brand timeStamp">
    <?php echo date('l h:i:s A') . "<br />" . date('jS \of F Y') . "<br />"; ?>
</div>


