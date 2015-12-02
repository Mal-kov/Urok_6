
    <?php
        header('Content-type: text/html; charset=utf-8');
        error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE);
        ini_set('display_errors', 1);
    
        $date = array(
            rand(1, time()),
            rand(1, time()),
            rand(1, time()),
            rand(1, time()),
            rand(1, time()),
        );
    
        print_r($date);
    
        echo "\n", 'data 1 - '. date ('l d.m.Y H:i:s', $date[0])."\n";
        echo 'data 2 - '. date ('l d.m.Y H:i:s', $date[1])."\n";
        echo 'data 3 - '. date ('l d.m.Y H:i:s', $date[2])."\n";
        echo 'data 4 - '. date ('l d.m.Y H:i:s', $date[3])."\n";
        echo 'data 5 - '. date ('l d.m.Y H:i:s', $date[4])."\n";
    
        echo "\n";
        echo min(date('d',$date[0]),date('d',$date[1]),date('d',$date[2]),date('d',$date[3]),date('d',$date[4])).' - минимальный день'."\n";
        echo max(date('m',$date[0]),date('m',$date[1]),date('m',$date[2]),date('m',$date[3]),date('m',$date[4])).' - максимальный месяц'."\n";
    
        echo "\n";
            sort($date);
            print_r($date);
    
        $selected= array_pop($date);
        print_r('Последняя дата массива - '.$selected);
    
        echo "\n", date('l d.m.Y H:i:s', $selected)."\n";
        echo "\n", date_default_timezone_get();
        echo "\n", date ('l d.m.Y H:i:s');
        
        date_default_timezone_set('America/New_York');
        echo "\n", date_default_timezone_get();
        echo "\n", date ('l d.m.Y H:i:s');
    

    
?>
