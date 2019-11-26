<?php


    $N = 0;
    $M = 0;
    $score = 0;
    $N = $_POST["fatalerror"];
    if ($N == null) {
        $N = 0;
    }
    $M = $_POST["wornings"];
    if ($M == null){
        $M = 0;
    }


            while ($N != 0 OR $M != 0) {
                
                    if($N == 1 AND $M == 0){
                        $stop = -1;
                        echo $stop;
                    break;
                    }elseif($N >= 2){
                        $N = $N - 2;
                        $score ++;
                    }elseif($M >= 2){
                        $M = $M - 2;
                        $N = $N + 1;
                        $score ++;
                    }elseif ($M = 1) {
                        $M = $M + 1;
                        $score ++;
                    };
                // echo "N=" . $N . " M=". $M;
                // echo "<br>";
            };

    if(!isset($stop)){
        echo "минимальное количество коммитов - " . $score;
    }
?>
<html>

    <form method="post">

        <input type="text" name="fatalerror" placeholder="фатальные ошибки (N)" ><br>
        <input type="text" name="wornings" placeholder="ворнинги (M)"><br>
        <input type="submit" value="Отправить">
        
    </form>

</html>