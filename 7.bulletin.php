<?php
    // 關閉錯誤報告，避免顯示 PHP 錯誤訊息
    error_reporting(0);
    
    // 使用 mysqli_connect() 函式建立資料庫連結
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    
    // 使用 mysqli_query() 函式從資料庫查詢佈告資料，並將結果存儲在 $result 變數中
    $result=mysqli_query($conn, "select * from bulletin");
    
    // 輸出 HTML 表格開始標籤，設定邊框為 2
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
    
    // 使用 while 迴圈逐一從查詢結果中抓取佈告資料，並將其輸出到表格中
    while ($row=mysqli_fetch_array($result)){
        echo "<tr><td>";
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
    
    // 輸出 HTML 表格結束標籤
    echo "</table>"
?>
