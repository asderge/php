<html>
    <head>
        <title>明新科技大學資訊管理系</title>
        <meta charset="utf-8">
        <!-- 引入 flexslider.css 檔案 -->
        <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">
        <!-- 引入 jQuery 檔案 -->
        <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>
        <!-- 引入 flexslider.js 檔案 -->
        <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>
        <!-- JavaScript 代碼，用於初始化 flexslider -->
        <script>
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide",  // 滑動動畫效果
                    rtl: true             // 由右到左顯示
                });
            });
        </script>
        <!-- CSS 樣式表 -->
        <style>
            /* CSS 樣式 */
        </style>
    </head>
    <body>
        <!-- 頁面頂部區域 -->
        <div class="top">
            <!-- 頁面頂部容器 -->
            <div class="container">
                <!-- 網站標誌 -->
                <div class="logo">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/IMMUST_LOGO.JPG">
                    明新科技大學資訊管理系
                </div>
                <!-- 頁面頂部導航 -->
                <div class="top-nav">
                    <!-- 頁面頂部導航連結 -->
                    <a href="#">明新科大</a>
                    <a href="#">明新管理學院</a>
                    <!-- 登入按鈕，點擊後顯示登入畫面 -->
                    <label onclick="document.getElementById('login').style.display='block'">登入</label>
                    <!-- 登入畫面 -->
                    <div id="login" class="modal">
                        <span onclick="document.getElementById('login').style.display='none'">&times; 管理系統登入</span>
                        <!-- 登入表單 -->
                        <form method="post" action="10.login.php">
                            帳號：<input type="text" name="id"><br />
                            密碼：<input type="password" name="pwd"><p></p>
                            <input type="submit" value="登入"> <input type="reset" value="清除">
                        </form>
                    </div>  
                    <!-- 登入畫面結束 -->
                </div>
            </div>
        </div>
        <!-- 頁面導航欄 -->
        <div class="nav">   
            <ul>
                <!-- 頁面導航連結 -->
                <li><a href="#home">首頁</a></li>
                <li><a href="#introduction">系所簡介</a></li>
                <!-- 下拉式選單 -->
                <li class="dropdown"><a href="#faculty">成員簡介</a>
                    <div class="dropdown-content">
                        <a href="#faculty">黃老師</a>
                        <a href="#faculty">李老師</a>
                        <a href="#faculty">應老師</a>
                    </div>                       
                </li>
                <li><a href="#about">相關資訊</a></li>
            </ul>
        </div>
        <!-- 頁面幻燈片 -->
        <div class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <!-- 幻燈片圖片 -->
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider1.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider2.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider3.JPG" /></li>
                </ul>
            </div>
        </div>
        <!-- 佈告欄 -->
        <div class="bulletin">
            <h1>最新公告</h1>
            <!-- 顯示佈告欄表格 -->
            <?php
                // PHP 程式碼，用於連接資料庫並顯示佈告欄
            ?>
        </div>
        <!-- 其他內容區域 -->
       
