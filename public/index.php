<!DOCTYPE HTML SYSTEM>
<?php
//Always place this code at the top of the Page
session_start();
if (isset($_SESSION['id'])) {
    // Redirection to login page twitter or facebook
    header("location: home.php");//home.php
}

if (array_key_exists("login", $_GET)) {
    $oauth_provider = $_GET['oauth_provider'];
    if ($oauth_provider == 'twitter') {
        header("Location: login-twitter.php");
    } else if ($oauth_provider == 'facebook') {
        header("Location: login-facebook.php");
    }
}
?>
    <head>
        <title>Feimman</title>
        <meta charset="utf-8">
        <link href="styles/index.css" type="text/css" rel="stylesheet">
    </head>

    <body>
        <div id="header">
            
            <div id="apptitle"> FEIMMAN </div>
            <div id="buttons">
<h1>Twitter Facebook Login </h1>
    <a href="?login&oauth_provider=twitter"><img src="images/tw_login.png"></a>&nbsp;&nbsp;&nbsp;
   
    <br />
   
</div>
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
            <!-- End of false_content -->
            
        </div>
        <!-- End of pcontent -->
    </body>
</html>
