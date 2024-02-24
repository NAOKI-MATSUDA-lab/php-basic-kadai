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
                if($order===TRUE){
                    echo "昇順にソートします。<br>";
                    $nums_up=sort($nums);
                    foreach($nums_up as $array){
                        echo $array. '<br>';
                    }
                }else{
                    echo "降順にソートします。<br>";
                    $nums_down=rsort($nums);
                    foreach($nums_down as $array){
                        echo $array. '<br>';
                    }
                }
            }

            sort_2way($nums,TRUE);

            sort_2way($nums,FALSE);
            ?>
        </p>
    </body>
</html>
