<?php
// Your code here!
    // �ϐ����ɂ�$������
    $idolname = "test";
    if($idolname == "���[�v"){
        echo "���[�v\n";
        // ���[�v��C�����Java�ɋ߂����c!!
        for($i = 0;$i < 10;$i++){
            echo($i."���\n");
        }
    }else{
        // "."�ŕ����񌋍�(+�ł�&�ł��Ȃ��񂩂�)
        echo ($idolname."@PHP");
    }
?>
