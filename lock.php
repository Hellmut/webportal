<?php
include('config.php');
session_start();
$user_check=$_SESSION['login_user'];


$sql = "SELECT username FROM users WHERE username=:username ";
$stmt = $db->prepare($sql);
$stmt->bindValue(':username',$user_check, SQLITE3_TEXT);

$result = $stmt->execute();
$row = $result->fetchArray(SQLITE3_ASSOC);

$login_session=$row['username'];

//Close session if inactive durring more than 10min.
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 600)) 
{
    session_destroy();
    header("Location: login.php");
}

$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time

if( !isset($login_session) )
{
    session_destroy();
    header("Location: login.php");
}
?>
