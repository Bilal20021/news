<?php
/**
 * Created by PhpStorm.
 * User: MASWI MR
 * Date: 26-May-19
 * Time: 19:57
 */
session_start();
include 'config.php';

if (!isset($_SESSION['login_user'])){
    header("location:Login.html");
}
else {
    $jina=$_SESSION['login_user'];
    $time=$_SESSION['time'];
    echo "<span style='color: white; font-size: larger'>Logged in as  $jina On $time ".date("d, m Y")."</span>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home-BizMaster</title>
    <link rel="stylesheet" type="text/css" href="BizMaster.css">
    <script src="UserHome.js" language="JavaScript"></script>
</head>
<body>
<div class="juu" onclick="coming()">
    Intergrated Business Management System
</div>                                                        <!--Part ya juu kabisa-->
<span class="userdetails" id="userdetails"></span>
<div class="kushoto" class="kushoto">
    <a href="Mauzo2.php">
        <div class="vyandani">Mauzo</div>
    </a>
    <a href="Matumizi2.php">
        <div class="vyandani">
            Matumizi
        </div>
    </a>
    <a href="Stock.php">
        <div class="vyandani">
            Stock
        </div>
    </a>
    <a href="Wafanyakazi.php">
        <div class="vyandani">
            Wafanyakazi
        </div>
    </a>
    <a href="Msaada2.html">
        <div class="vyandani" >Msaada</div>
    </a>
    <div class="nafasi"></div>
    <a href="Logout.php">
        <input type="submit" class="logout" value="Toka"/>
    </a>
</div>                                                          <!--Sidebar ya kushoto-->
<div class="main" id="main">
    <div class="mainpods">
        Jumla ya mauzo ya leo yamefikia <span class="mainspans">Tshs 171,500/=</span>
    </div>
    <div class="mainpods">
        Jumla ya matumizi ya leo yamefikia <span class="mainspans">Tshs 31,200/=</span>
    </div>
    <div class="mainpods">
        Jumla ya mauzo ya Jana Ilikuwa <span class="mainspans">Tshs 1,234,000/=</span>
    </div>
    <div class="mainpods">
        Jumla ya matumizi ya Jana ilikuwa <span class="mainspans">Tshs 62,700/=</span>
    </div>
    <div class="mainpods">

    </div>
    <div class="mainpods">

    </div>
    <div class="mainpods">

    </div>
    <div class="mainpods">

    </div>
    <div class="mainpods">

    </div>
    <div class="mainpods">

    </div>
    <div class="mainpods">

    </div>
    <div class="mainpods">

    </div>
</div>                                                                    <!--main body part-->
<div class="footer">
    &copy;2019. All Rights Reserved.
</div>
</body>
</html>
