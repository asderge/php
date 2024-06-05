<html>
    <head><title>修改使用者</title></head>
    <body>
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
        
        // 查詢資料庫中指定id的使用者資料
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");
        
        // 取得查詢結果的第一行資料
        $row=mysqli_fetch_array($result);
        
        // 顯示修改使用者表單，包含帳號和密碼欄位以及提交按鈕
        echo "
        <form method=post action=20.user_edit.php>
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form>
        ";
    }
    ?>
    </body>
</html>
