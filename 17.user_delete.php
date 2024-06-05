<?php
    // 設定錯誤報告為不顯示任何錯誤
    error_reporting(0);
    
    // 開始 session
    session_start();
    
    // 檢查是否已登入，如果未登入，顯示提示訊息並重新導向至登入頁面
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {   
        // 建立資料庫連線
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        
        // 準備 SQL 命令，用於從資料庫的 user 表中刪除指定 id 的使用者
        $sql="delete from user where id='{$_GET["id"]}'";
        
        // 執行 SQL 命令，如果出現錯誤，顯示使用者刪除錯誤訊息，否則顯示使用者刪除成功的訊息
        if (!mysqli_query($conn,$sql)) {
            echo "使用者刪除錯誤";
        }
        else {
            echo "使用者刪除成功";
        }
        
        // 重新導向至 18.user.php 頁面
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }
?>
