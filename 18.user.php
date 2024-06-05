<html>
    <head><title>使用者管理</title></head>
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
            // 顯示使用者管理標題和選項連結
            echo "<h1>使用者管理</h1>
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
            
            // 建立資料庫連線
            $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
            
            // 查詢資料庫中的所有使用者資料
            $result=mysqli_query($conn, "select * from user");
            
            // 逐行顯示使用者資料，包括修改和刪除連結
            while ($row=mysqli_fetch_array($result)) {
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            
            // 顯示使用者資料表格的結束標籤
            echo "</table>";
        }
    ?> 
    </body>
</html>
