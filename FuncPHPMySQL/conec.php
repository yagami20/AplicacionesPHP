<?php

function conectarse()
{
if (!($link=mysql_connect("172.30.140.10","web12","web12")))
{
exit();
}
if (!mysql_select_db("web12",$link))
{
exit();
}
return $link;
}
?>
