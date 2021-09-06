<?php

    $isSend = false;
    $err = '';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo 'POST';
        $name = trim($_POST['name']);
        $Tname = trim($_POST['2ndName']);
        if($name === '' || $Tname === ''){
            $err = 'Заполните все поля';
        }
        else if(mb_strlen($name, 'UTF8') < 2){
            $err = 'Имя слишком короткое';
        }
        else{
            $dt = date("Y-d-m H:i:s");
            $mainBody = "$dt\n$name\n$Tname";
            $isSend = true;
            // Тут мы указываем почту для отправки какого-то сообщения длянапример регистрации
        }
    }
    else{
        echo 'NO POST';
        $name = '';
        $Tname = '';
    }
    echo $_SERVER['REQUEST_METHOD'];
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

?>
<div class="form">
    <? if($isSend): ?>
        <p>Your app is done!</p>
    <? else: ?>
        <form method="post">
            Name:<br>
            <input type="text" name="name" value="<? $name ?>"><br>
            2nd name:<br>
            <input type="text" name="2ndName" value="<? $Tname ?>"><br>
            <button>Send</button>
            <p><?=$err?><p>
        </form>
    <? endif; ?>
</div>