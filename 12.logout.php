<?php
    // 開始 session
    session_start();
    
    // 移除 session 中的 "id" 變數
    unset($_SESSION["id"]);
    
    // 輸出登出成功的訊息
    echo "登出成功....";
    
    // 在 3 秒後重新導向至 login.html 頁面
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
?>
