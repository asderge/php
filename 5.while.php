<?php
   // 使用 mysqli_connect() 函式建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   // 使用 mysqli_query() 函式從資料庫查詢資料，並將結果存儲在 $result 變數中
   $result=mysqli_query($conn, "select * from user");
   // 使用 while 迴圈逐一從查詢結果中抓取資料，並將其存儲在 $row 變數中，直到查詢結果為空
   while ($row=mysqli_fetch_array($result)) {
     // 輸出每筆資料的帳號和密碼
     echo $row["id"]." ".$row["pwd"]."<br>";
   } 
?>
