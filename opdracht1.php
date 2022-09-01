<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Hello World</title>
    </head>
<body>
    <h1>
        <?php
        $t = date("G");

        if ($t = "6=> && <=12") {
            echo "Het is ochtend";
        }
        if ($t = "12 > && 18") {
            echo "het is middag.";
        }
        if ($t = "18=> && 24") {
            echo "het is avond.";
        }
        if ($t = "24 > && 6") {
            echo "het is nacht.";
        }
        ?>
    </h1>
</body>
</html>
