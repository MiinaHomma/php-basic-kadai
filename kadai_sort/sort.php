<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 昇順・降順の両方で配列をソートして1行ずつ表示する関数
        function sort_2way($array,$order = 'asc'){
          if($order === 'asc'){
            sort($array);
            echo "昇順にソートします。<br>";
          } elseif ($order === 'desc'){
            rsort($array);
            echo "降順にソートします。<br>";
          } else {
            echo "ソート方向は'asc'または'desc'を指定してください。<br>";
            return;
          }
          foreach ($array as $value){
            echo $value . "<br>";
          }
        }
         //ソートする配列を宣言する
         $nums = array(15,4,18,23,10);
        
        //昇順・降順で2回呼び出す
        sort_2way($nums);
        ?>
    </p>
</body>

</html>