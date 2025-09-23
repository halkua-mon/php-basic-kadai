<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $arrays = [15, 4, 18, 23, 10 ];

        if ($order = TRUE) {
        sort($arrays);
          echo '昇順にソートします。<br>';
        foreach ($arrays as $array) {
          echo "{$array} <br>";
          }
        }


          arsort($arrays);
          echo '降順にソートします。<br>';
        foreach ($arrays as $array) {
          echo "{$array} <br>";
          }

        ?>
    </p>
</body>

</html>