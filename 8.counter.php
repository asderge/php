<?php
    // 開始或恢復 session
    session_start();
    
    // 檢查 session 變數中是否存在 counter，如果不存在則初始化為 1，否則增加計數器的值
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1;
    else
        $_SESSION["counter"]++;

    // 輸出計數器的值
    echo "counter=".$_SESSION["counter"];
    
    // 輸出重置計數器的連結
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>
