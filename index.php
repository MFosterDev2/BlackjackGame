<html>

<head>
    <title>PHP Starter</title>
</head>

<body>
    <h1>PHP Starter in CodeSandbox</h1>
    <?php 
    require_once 'blackjack_game/class-blackjack.php';

    $blackjack = new Blackjack();
    $blackjack->initialise_game();
    ?>
</body>

</html>
