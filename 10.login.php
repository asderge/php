<?php
   // 使用 mysqli_connect() 函式建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   
   // 使用 mysqli_query() 函式從資料庫查詢資料，並將結果存儲在 $result 變數中
   $result=mysqli_query($conn, "select * from user");
   
   // 初始化登入狀態為 FALSE
   $login=FALSE;
   
   // 使用 while 迴圈逐一從查詢結果中抓取資料，並進行帳號密碼驗證
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       // 如果帳號密碼驗證成功，設置登入狀態為 TRUE
       $login=TRUE;
     }
   } 
   
   // 如果登入成功，建立 session 並將使用者帳號存儲在 session 變數中，然後重新導向到佈告板頁面
   if ($login==TRUE) {
    session_start();
    $_SESSION["id"]=$_POST["id"];
    echo "登入成功";
    // 延遲 3 秒後重新導向到佈告板頁面
    echo "<meta http-equiv=REFRESH content='3; url=11.bulletin.php'>";
   }
   
   // 如果登入失敗，輸出錯誤訊息，然後重新導向到登入頁面
  else{
    echo "帳號/密碼 錯誤";
    // 延遲 3 秒後重新導向到登入頁面
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
  }
?>
