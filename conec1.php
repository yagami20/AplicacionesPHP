
<?php 
function Conectarse()
{ if
(!($link=mysql_connect("localhost","Admin_us","1234"))) 
        { 
        exit(); 
        
        } 
if (!mysql_select_db("u414183932_yesen",$link))
{ 
    exit(); 
    
} return $link;
}
?>

