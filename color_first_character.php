<!-- color of the first character of a word. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First character color</title>
</head>
<body>

    <?php
        $text = "PHP is just awesome!";
        $text = preg_replace('/(\b[a-z])/i', '<span style="color:green">\1</span>', $text);

        echo $text;

    ?>
</body>
</html>