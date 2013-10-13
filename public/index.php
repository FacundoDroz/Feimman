<!DOCTYPE HTML SYSTEM>
    <head>
        <title>Feimman</title>
        <meta charset="utf-8">
        <link href="/styles/index.css" type="text/css" rel="stylesheet">
		
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
                    <input type="text" id="false_word" name="word">
                    <input type="submit" value="Corroborar" id="submit">
                </form>
            </div>
            <!-- End of false_content -->
            
            <div id="true_content">
                <input type="text" id="true_word">
            </div>
            <!-- End of true_content -->
            
        </div>
        <!-- End of pcontent -->
    </body>
</html>