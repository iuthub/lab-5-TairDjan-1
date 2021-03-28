<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <h1>Thanks, sucker!</h1>

    <p>Your information has been recorded.</p>
    <?php if($_SERVER["REQUEST_METHOD"]!='POST') { ?>
    <p>This page only accepts POST requests</p>
    <?php } else { ?>
    <dl>
        <dt>Name</dt>
        <dd>
            <?= $_REQUEST["firstname"] ?>
        </dd>
        <dt>Section</dt>
        <dd>
            <?= $_REQUEST["section"] ?>
        </dd>
        <dt>Credit Card</dt>
        <dd>
            <?= $_REQUEST["card_num"] ?>  (<?= $_REQUEST["card"]?>)
        </dd>
    </dl>
    <?php
        $content = $_REQUEST["firstname"].";".$_REQUEST["section"].";".$_REQUEST["card_num"].";".$_REQUEST["card"]."\n";
        file_put_contents("sucker.txt", $content, FILE_APPEND);
    ?>
    <?php
    $lines = file("sucker.txt");
    foreach ($lines as $line) { ?>
    <pre><?= $line?></pre>
    <?php } ?>


    <?php } ?>
</body>
</html>
