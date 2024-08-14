<?php
    function prompt($message){
        echo $message;
        return trim(fgets(STDIN));
    }

    //最大値と最小値が正しく入力されるまでループ
    while (true){
        //最大値と最小値を受け取り整数に変換する
        $n = intval(prompt("最小値を入力してください: "));
        $m = intval(prompt("最大値を入力してください: "));

        if ($n > $m){
            echo "最小値は最大値以下に設定してください。\n";
        } else {
            break;
        }
    }

    $random_number = random_int($n, $m);

    echo "最小値から最大値の間で乱数が生成されました。その数字を当ててください\n";

    while (true) {
        $guess = intval(prompt("数字を推測してください: "));

        if($guess === $random_number) {
            echo "おめでとうございます！正解です。\n";
            break;
        } else {
            echo "不正解です。もう一度試してください。\n";
        }
    }