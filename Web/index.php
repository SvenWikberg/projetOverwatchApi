<!doctype html>
<html lang="fr">
    <?php
        session_start();
        include_once("functions.php");
    ?>
    <head>
        <meta charset="utf-8">
        <title>Overwatch Collection</title>
        <link rel="stylesheet" href="style-index.css">
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    </head>
    <header>
        <ul id="nav">
            <li><a href="index.php"><img src="img/logo.png" alt="Logo" id="logo"></a></li>
            <li class="navName"><a href="heroes.php"><h2>Heroes</h2></a></li>
            <li class="navName"><a href="rewards.php"><h2>Rewards</h2></a></li>
            <?php
            if(isset($_SESSION['id_user'])){
			echo '<li class="navName"><a href="account.php"><h2>Account</h2></a></li>';
            }else{
			echo '<li class="navName"><a href="login.php"><h2>Login</h2></a></li>';
            }
            ?>
        </ul>
    </header>
    <body>
        <h1>Overwatch Collection</h1>
        <p>Wanna have your skin, spray etc collection from overwatch and visualize it easily?</p> 
		<p>Create an account and clik on the object you have. It's as easy as that</p>
    </body>
</html>