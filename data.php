<?php

session_start();

if ( empty($_SESSION['user']))
{
   $_SESSION['user'] = hash("md5",$_SERVER['HTTP_CLIENT_IP'])."_".(rand());
}
$me = $_SESSION['user'];
if (isset($_SESSION['username']))
{
    $me = $me."_".$_SESSION['username'];
}


$last = urldecode(file_get_contents("php://input")) ;
$last = preg_replace('/data\:.*?;base64.*?\<\//', 'null</', $last);


if ( empty($_SESSION['last']) || $_SESSION['last'] != $last)
{
    $_SESSION['last'] = $last;
    file_put_contents ( "flatfiles/".$me."_".time().".txt", $last );
}

?>

BOO!
