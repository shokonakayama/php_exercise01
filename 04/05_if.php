<?php 

echo '$numの値を入力して下さい:';
$num = trim(fgets(STDIN));

$judge = true;

if ($num == 1){
    $judge = false;
}

for ($i = 2; $i < $num; $i++){
    if($num % $i == 0){
    $judge = false;
    break;
    }
}

if ($judge){
    echo $num . 'は素数です。';
}else{
    echo $num . 'は素数ではありません。';
}
