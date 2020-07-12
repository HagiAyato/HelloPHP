<?php
// Your code here!
    // 変数名には$をつける
    $idolname = "test";
    if($idolname == "ループ"){
        echo "ループ\n";
        // ループはC言語やJavaに近いぞ…!!
        for($i = 0;$i < 10;$i++){
            echo($i."回目\n");
        }
    }else{
        // "."で文字列結合(+でも&でもないんかい)
        echo ($idolname."@PHP");
    }
?>
