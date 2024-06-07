<?php
    // 使用 mysqli_connect() 函式建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    // 使用 mysqli_query() 函式從資料庫查詢資料，並將結果存儲在 $result 變數中
    $result=mysqli_query($conn, "select * from user");
    // 使用 mysqli_fetch_array() 函式從查詢結果中抓取一筆資料，並將其存儲在 $row 變數中
    $row=mysqli_fetch_array($result);
    // 輸出第一筆資料的帳號和密碼
    echo $row["id"] . " " . $row["pwd"]."<br>"; 
    // 再次使用 mysqli_fetch_array() 函式抓取另一筆資料
    $row=mysqli_fetch_array($result);
    // 輸出第二筆資料的帳號和密碼
    echo $row["id"] . " " . $row["pwd"];
?>
