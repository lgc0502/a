<?php
session_start();
$_SESSION['AccessToken']=$_GET['AccessToken'];
header("Content-Type:text/html; charset=utf-8");
if (isset($_GET['UserID'])||isset($_SESSION['UserID'])) {
    include 'mysql_config.php';
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $QQ=$_GET['UserID'];
    $QQ1=$_SESSION['UserID'];
    //需要先確認資料庫內有無用戶資料，有的話表示歡迎
    $SearchMember = $conn->query("SELECT * FROM member WHERE UserID='$QQ'");
    $SearchMember1 = $conn->query("SELECT * FROM member WHERE UserID='$QQ1'");
    if ($Result=$SearchMember->fetch_assoc()) {
        echo $Result['UserName'] . "，Nice to see you again!";
        $_SESSION['UserID']=$Result['UserID'];
        $_SESSION['UserName']=$Result['UserName'];
    } elseif ($Result1=$SearchMember1->fetch_assoc()){
        echo $Result1['UserName'] . "，Nice to see you again!";
    }
    else {
        //沒有的話，先在資料庫內新增使用者帳戶訊息
        $conn->query("INSERT INTO member (UserID,UserName,UserMail,RegistrationTime) VALUES ('" . $_GET['UserID'] . "','" . $_GET['UserName'] . "','" . $_GET['UserMail'] . "','" .date('Y-m-d'). "')");
        echo "Welcome aboard," . $_GET['UserName'] . "!";
        $_SESSION['UserID']=$_GET['UserID'];
        $_SESSION['UserName']=$_GET['UserName'];
    }

}
?>
