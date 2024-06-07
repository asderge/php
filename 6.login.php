<?php
   // 使用 mysqli_connect() 函式建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   // 使用 mysqli_query() 函式從資料庫查詢資料，並將結果存儲在 $result 變數中
   $result=mysqli_query($conn, "select * from user");
   // 使用 $login 變數來追蹤登入狀態，預設為 FALSE
   $login=FALSE;
   // 使用 while 迴圈逐一從查詢結果中抓取資料，並將其存儲在 $row 變數中，直到查詢結果為空
   while ($row=mysqli_fetch_array($result)) {
     // 檢查使用者提交的帳號和密碼是否與資料庫中的資料匹配
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       // 如果匹配成功，將 $login 設置為 TRUE
       $login=TRUE;
     }
   } 
   // 檢查登入狀態，並輸出相應的訊息
   if ($login==TRUE)
     echo "登入成功";
   else
     echo "帳號/密碼 錯誤";
?>
