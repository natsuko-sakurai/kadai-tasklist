{"filter":false,"title":"renshu.php","tooltip":"/renshu.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":1,"column":4},"end":{"row":8,"column":28},"action":"remove","lines":["$result = 1 < 2;","    var_dump($result);","","    $result = 1 == 2;","    var_dump($result);","?>","<?php","    $number = mt_rand(4) % 1"],"id":2,"ignore":true},{"start":{"row":1,"column":4},"end":{"row":3,"column":18},"action":"insert","lines":["// Define a function","    function sum(4) {","        $result = "]},{"start":{"row":4,"column":0},"end":{"row":5,"column":0},"action":"remove","lines":["",""]},{"start":{"row":4,"column":4},"end":{"row":11,"column":48},"action":"remove","lines":["if ($number < 3) {","        print $number . 'は3より小さい数' . PHP_EOL;","    }","    elseif ($number < 6) {","        print $number . 'は3以上で6より小さい数' . PHP_EOL;","    }","    elseif ($number < 8) {","        print $number . 'は6以上で8より小さい数' . PHP_EOL"]},{"start":{"row":4,"column":4},"end":{"row":5,"column":34},"action":"insert","lines":["    for ($i = 1; $i <= 9; $i++) {","            $result = $result + $i"]},{"start":{"row":6,"column":4},"end":{"row":7,"column":0},"action":"remove","lines":["}",""]},{"start":{"row":6,"column":8},"end":{"row":6,"column":14},"action":"remove","lines":["else {"]},{"start":{"row":6,"column":8},"end":{"row":6,"column":9},"action":"insert","lines":["}"]},{"start":{"row":7,"column":15},"end":{"row":7,"column":36},"action":"remove","lines":["number . 'は8か9しか来ません'"]},{"start":{"row":7,"column":15},"end":{"row":7,"column":21},"action":"insert","lines":["result"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":10,"column":0},"end":{"row":10,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1526359791515,"hash":"85bb8f5e503dbcc5f40f1b0bd5e704e0bce766ce"}