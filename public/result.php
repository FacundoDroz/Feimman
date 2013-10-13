<?php
session_start();


echo '<html>
	
    <head>
        <title>Feimman</title>
        <meta charset="utf-8" />

        <link href="styles/index.css" type="text/css" rel="stylesheet"/>
<style type="text/css">
div.htmltooltip {
	position: absolute; /*leave this and next 3 values alone*/;
	z-index: 1000;
	left: -1000px;
	top: -1000px;
	background: #272727;
	border: 5px solid black;
	color: white;
	padding: 3px;
	width: 250px; /*width of tooltip*/
	}
</style>

<script src="jquery-1.2.2.js" type="text/javascript"/></script>
<script src="htmltooltip.js" type="text/javascript"/></script>


</head>
<body>
        <div id="header">
           
            <div id="apptitle"> FEIMMAN </div>
            
        </div>
        <!-- End of header -->
        
        <div id="pcontent">
            
            <h1>Ingrese Palabra</h1>
            En caso de ser incorrecta, debajo aparecerá una recomendación<br>
            
            <div id="false_content">
                <form method="post" action="php/process.php">
                    <input type="text" id="false_word" name="word" rel="htmltooltip">
                    <input type="submit" value="Corroborar" id="submit">
                </form>
            </div>';		
            echo "Segun la RAE: <br>";
            echo "<a href='" . $_SESSION['result'] . "'>" . $_SESSION['result'] . "</a>";
         echo '<!-- End of false_content -->

		 <div class="accountInfo2">
				<fieldset class="login">
				 <img style=" float:right;margin-top: -5px;margin-right: 2px"  alt="" src="images/ayuda.jpeg" rel="htmltooltip" height="15" width="17" />

				<legend>ExportaciÃ³n de Datos</legend>
				</fieldset>
</div>

<div class="htmltooltip">.$player</div>
</body>
</html>';
