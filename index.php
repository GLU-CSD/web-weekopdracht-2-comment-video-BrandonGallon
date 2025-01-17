<?php
include("config.php");
include("reactions.php");

$getReactions = Reactions::getReactions();
//uncomment de volgende regel om te kijken hoe de array van je reactions eruit ziet
// echo "<pre>".var_dump($getReactions)."</pre>";

if (!empty($_GET)) {

    //dit is een voorbeeld array.  Deze waardes moeten erin staan.
    $postArray = [
        'name' => $_GET['name'],
        'email' => $_GET['email'],
        'message' => $_GET['message'],
    ];

    $setReaction = Reactions::setReaction($postArray);

    if (isset($setReaction['error']) && $setReaction['error'] != '') {
        prettyDump($setReaction['error']);
    }


}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youtube remake</title>
</head>

<body>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?si=twI61ZGDECBr4ums"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

    <h2>Hieronder komen reacties</h2>
    <p>Maak hier je eigen pagina van aan de hand van de opdracht</p>

    <form action="">
        <label for="name">Naam:</label><br>
        <input type="text" id="name" name="name" value=""><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" value=""><br>
        <label for="message">Bericht:</label><br>
        <textarea id="message" name="message" rows="4" cols="50"></textarea><br>
        
        <input type="submit" value="Verzenden">
    </form>


</body>

</html>

<?php
$con->close();
?>