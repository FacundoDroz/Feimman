<?php
session_start();

echo '<html>
    <head>
        <title>Test</title>
        <meta charset="utf-8" />
        <link href="styles/index.css" type="text/css" rel="stylesheet"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        
    </head>

    <body>
        <div id="header">
            
            <div id="apptitle"> APP TITLE </div>
            
        </div>
        <!-- End of header -->
        
        <div id="pcontent">
            
            <h1>Ingrese Palabra</h1>
            En caso de ser incorrecta, debajo aparecerá una recomendación<br>
            
            <div id="false_content">
                <form method="post" action="php/process.php">
                    <input type="text" id="false_word" name="word">
                    <input type="submit" value="Corroborar" id="submit">
                </form>
            </div>';
            echo "Segun la RAE: <br>";
            echo "<a href='" . $_SESSION['result'] . "'>" . $_SESSION['result'] . "</a>";
            '<!-- End of false_content -->
</body>
</html>';
?>