<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <title>Folder</title>
  <link href="css/home.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="images/book.ico" type="image/x-icon">
  <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
 </head>
 <body>
    <div class="header"> 
        <div class="product-view-button">
            <a href="#" class="grid active" onclick="$('li.product-wrapper').toggleClass('table-layout', false);
                                                     $('i.fa-th-large').toggleClass('active', true); 
                                                     $('i.fa-th-list').toggleClass('active', false);">
                                                     <i class="fa fa-th-large active"></i></a>
            <a href="#" class="list" onclick="$('li.product-wrapper').toggleClass('table-layout', true); 
                                                $('i.fa-th-list').toggleClass('active', true); 
                                                $('i.fa-th-large').toggleClass('active', false);">
                                                <i class="fa fa-th-list"></i></a>
        </div>
        <form>
            <input type="text" placeholder="Искать здесь...">
            <div class="but">
            <button></button></div>
        </form>
        <a href="#" class="in"></a>
        <div class="notifications ">
            <div class="menu"><p>Новых уведомлений не найдено</p></div>
            <div class="dop2"><i class="fa-light fa-bell"></i></div>
        </div>
            <a href="login.html" class="login efa-light fa-user"></a>
    </div>
    
        
    <ul class="products clearfix" id="ul">
        <?php
        $mysqli = new mysqli("db", "user", "password", "appDB");
        $result = $mysqli->query("SELECT * FROM books");
        foreach ($result as $row){
        $f = file_get_contents($row['description']);
        echo <<<EOT
        <li class="product-wrapper">
            <a href="#" class="product">
                <div class="dop">
                    <span class="buy" onclick="location.href='p1.html'"><p class='pp'>Купить за {$row['price']}</p></span>
                    <p class="annotation">$f</p></div>
                <div class="product-photo">
                    <img src={$row['image']} alt="">
                </div>
            </a>
        </li>;
        EOT;
        }
        ?>
    </ul>
 </body>