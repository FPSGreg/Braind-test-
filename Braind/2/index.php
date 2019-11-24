<?php


if (isset($_POST["quantity"])){
    for($i=1;$i<=$_POST["quantity"];$i++){
    $a[$i]=$i;
    }

    sort($a, SORT_STRING );

    $result = (array_search($_POST["number"], $a))+1;

    echo ("Позиция числа {$_POST["number"]} - $result ая");
}else{
    echo "Введите число";
}

?>
<form method="post">
<input type="text" name="quantity" placeholder="Количество чисел (n)" ><br>
<input type="text" name="number" placeholder="Искомое число (k)"><br>
<input type="submit" value="Отправить">
</form>