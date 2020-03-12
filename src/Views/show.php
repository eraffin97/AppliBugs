<?php
    $bug = $parameters['bug'];
?>

<style>
    body{
        background: -webkit-linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
        background: linear-gradient(90deg, rgba(107,139,145,1) 0%, rgba(78,200,223,1) 68%, rgba(151,213,226,0.8883928571428571) 100%);
        font-family: 'Roboto', sans-serif;
        color: #fff;
    }
</style>

<meta charset="UTF-8">

<html>

<body>
<h1><?php echo $bug->getTitle()?></h1>
<p><?php echo $bug->getDescription()?></p>
<p><?php echo "Statut: ".$bug->getClosed()?></p>
<p><?php echo "URL: ".$bug->getUrl()?></p>
<p><?php echo "Adresse IP: ".$bug->getIp()?></p>
<a href="../liste">Retour à la liste des bugs</a>
</body>

</html>



