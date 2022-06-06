<?php 

if(!isset($system_path)){ die('You shall not pass :)'); } 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <style>
            body{
            background-image: url("sub.jpg");
            background-color: #cccccc;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            }

            .button {
                border-radius: 4px;
                background-color: #f4511e;
                border: none;
                color: #FFFFFF;
                text-align: center;
                font-size: 15px;
                padding: 13px;
                width: 70px;
                transition: all 0.5s;
                cursor: pointer;
                margin: 5px;
            }

            .center{
                margin: 0;
                position: absolute;
                color: white;
                top: 50%;
                right: 40%;
                
            }
            
            .capbox {
	background-color: rgb(29, 168, 115);
	border: rgb(21, 201, 156) 0px solid;
	border-width: 0px 8px 0px 0px;
	display: inline-block;
	*display: inline; zoom: 1; /* FOR IE7-8 */
	padding: 8px 40px 8px 8px;
}

.capbox-inner {
	font:  14px sans-serif;
	color: #ffffff;
	background-color:#262626;
	margin: 5px auto 0px auto;
	padding: 3px;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
}

            #CaptchaDiv {
                font: bold 33px verdana, arial, sans-serif;
                font-style: italic;
                color: #000000;
                background-color: #FFFFFF;
                padding: 4px;
                -moz-border-radius: 4px;
                -webkit-border-radius: 4px;
                border-radius: 4px;
                -webkit-animation: cssAnimation 300s forwards; 
                animation: cssAnimation 300s forwards;
            }

            #CaptchaDivExpired {
                animation: cssAnimation2 0s 300s forwards;
                visibility: hidden;
            }

            @keyframes cssAnimation2 {
                to   { visibility: visible; }
            }

            @keyframes cssAnimation {
                0%   {opacity: 1;}
                90%  {opacity: 1;}
                100% {opacity: 0;}
            }
            @-webkit-keyframes cssAnimation {
                0%   {opacity: 1;}
                90%  {opacity: 1;}
                100% {opacity: 0;}
            }

            #CaptchaInput { margin: 1px 0px 1px 0px; width: 135px; }
        </style>
    </head>
    <body>
        <?php echo $m_menu; ?>
        <br /><br /><br /><br /><br />
        <center>
            <div class="center">
                <div id="CaptchaDiv">
                    <?php
                    echo $coden;
                    ?>
                    <br />
                    <div class="capbox-inner">
                    Введите указанный выше номер!
                    </div>
                </div>
                <div id="CaptchaDivExpired">
                Время действия кода истекло
                </div>
            </div>
        </center> 
    </body>
</html>