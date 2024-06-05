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
    
    // 準備 SQL 命令，用於將表單提交的資料插入到資料庫的 user 表中
    $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";
    
    // 執行 SQL 命令，如果出現錯誤，顯示新增命令錯誤訊息，否則顯示新增使用者成功的訊息
    if (!mysqli_query($conn, $sql)) {
        echo "新增命令錯誤";
    }
    else {
        echo "新增使用者成功，三秒鐘後回到網頁";
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }
}
?>
