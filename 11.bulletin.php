<?php
    // 關閉錯誤報告，避免顯示 PHP 錯誤訊息
    error_reporting(0);
    
    // 開始或恢復 session
    session_start();
    
    // 如果 session 中未儲存使用者帳號資訊，表示尚未登入
    if (!$_SESSION["id"]) {
        // 提示使用者請先登入
        echo "請先登入";
        // 延遲 3 秒後重新導向到登入頁面
        echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
    }
    // 如果已登入
    else{
        // 顯示歡迎訊息和功能連結
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";
        
        // 連接到資料庫
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        
        // 從資料庫查詢佈告資料
        $result=mysqli_query($conn, "select * from bulletin");
        
        // 輸出佈告列表的 HTML 表格
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        
        // 使用 while 迴圈逐一從查詢結果中抓取佈告資料，並輸出到表格中
        while ($row=mysqli_fetch_array($result)){
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
            echo $row["bid"];
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>"; 
            echo $row["title"];
            echo "</td><td>";
            echo $row["content"]; 
            echo "</td><td>";
            echo $row["time"];
            echo "</td></tr>";
        }
        echo "</table>";
    
    }

?>
