<?php
    // 開始或恢復 session
    session_start();
    
    // 刪除 session 變數中的 counter
    unset($_SESSION["counter"]);
    
    // 輸出重置計數器成功的訊息
    echo "counter重置成功....";
    
    // 重新導向到指定的網頁，延遲 2 秒後執行
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";
?>
