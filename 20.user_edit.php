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
        
        // 執行更新資料庫中使用者密碼的 SQL 命令
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")) {
            // 如果更新出錯，顯示錯誤訊息並重新導向至使用者管理頁面
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }
        else {
            // 如果更新成功，顯示成功訊息並重新導向至使用者管理頁面
            echo "修改成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }
    }

?>
