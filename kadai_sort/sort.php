<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
<?php
function sort_2way(array &$array, bool $order): void {
    if ($order) {
        sort($array);
    } else {
        rsort($array);
    }
    
    foreach ($array as $num) {
        echo $num . "<br>";
    }
}

// ソートする配列を宣言
$nums = [15, 4, 18, 23, 10];

echo "<br>昇順にソートします。";
sort_2way($nums, true);
echo "<br>降順にソートします。<br>";
sort_2way($nums, false);
?>

    </p>
</body>

</html>