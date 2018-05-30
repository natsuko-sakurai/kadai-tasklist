<?php
    function greeting($hour) {
        $result = "";

        if (6 <= $hour && $hour < 12) {
            $result = "おはよう";
        }
        elseif (12 <= $hour && $hour < 18) {
            $result = "こんにちは";
        }
        else {
            $result = "こんばんは";
        }

        return $result;
    }
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <label>名前: <input type="text" name="target_name"></label>
            <label>ポジション:<input type="text" name="target_position"></label>
            <input type="submit" value="送信">
        </form>
        <?php
            date_default_timezone_set('Asia/Tokyo');
            $now_hour =  (int)date("H");
            $now_minute =  (int)date("i");
        ?>
       
        <?php
        if($_POST['target_name'] != "" && $_POST['target_position'] != ""){
            print "今は";
            print $now_hour. "時";
            print $now_minute. "分です。";
            print greeting($now_hour). "、";
            print $_POST['target_name']. "さん（";
            print $_POST['target_position']. "）";
        }
        
        else {
            print "上記フォームを入力してください。";
        }
        ?>
        
        <?php
        if ($_POST['target_position'] =="1"){
            print "投手";
        }
        elseif ($_POST['target_position'] == "2"){
            print "捕手";
        }    
    　　elseif ($_POST['target_position'] =="3" or $_POST['target_position'] =="4" or $_POST['target_position'] =="5" or $_POST['target_position'] =="6"){
    　　 　　  print  "内野手";
    　　}    
    　　else ($_POST['target_position'] <= "9"){
            print "外野手";
    　　}
        ?>
    </body>
</html>