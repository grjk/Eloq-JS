<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<script>
    for (let i = 1; i != 100; i++) {
        if (i % 3 == 0 && i % 5 == 0) {
            console.log("Hee Haw!");
        }
        else if (i % 3 == 0) {
            console.log("Hee!");
        }
        else if (i % 5 == 0) {
            console.log("Haw!");
        }
        else {
            console.log(i);
        }
    }
</script>
</body>
</html>
