<?php 
    // 檢查使用者提交的帳號和密碼是否符合特定條件
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234"))
        // 如果帳號和密碼都符合條件，輸出登入成功訊息
        echo "登入成功";
    else
        // 如果帳號和密碼有任何一項不符合條件，輸出登入失敗訊息
        echo "登入失敗";
?>
