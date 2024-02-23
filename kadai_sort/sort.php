<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP基礎編</title>
    </head>
    <body>
        <p>
            <?php
            $nums = [15, 4, 18, 23, 10 ];

            function sort_2way($array,$order){
                foreach($nums as $array){
                    if($order===TRUE){
                        echo '昇順にソートします。'.'<br>';
                        echo sort($array).'<br>';
                    }else{
                        echo '降順にソートします。'.'<br>';
                        echo rsort($array).'<br>';
                    }
                }
            }
            sort_2way($nums,TRUE);

            sort_2way($num,FALSE);
            ?>
        </p>
    </body>
</html>