<html>
<?php 

//Starting Session.
session_start();

//executing if 'ADD' button pressed.
if(isset($_POST['ADD']))
{
$_val = $_POST['taskText'];
if(!empty($_val))
{
    $_array = array($_val);
}
else
{
    $_array =array();
}
 
if(isset($_SESSION['values']))
{
    $_array = array_merge($_SESSION['values'],$_array);
}
$_SESSION['values'] = $_array;
//$_val ="";
}

//executing if 'CLEAR' button pressed.
if(isset($_POST['CLEAR']))
{
    //Clearing 'values' Session elements.
    include ("clearSession.php");
}
?>
<!--HTML Tags.-->
    <head>
    <title>TODO PAGE</title>
    </head>
    <form method="POST">
    <h4 style="color:white; background:purple;">To Do List Assignment</h4>
    <h4 style="color:yellow; background:green;">Assigned By: Sir Gulsher Ligari</h4>
    <h5 style="color:white; background:blue;">Designed by: 2K18/CSM/100</h5>
    <input id="textbox" type="text" placeholder="Enter Task " name="taskText" />
    <input style="color:white; background:blue;" type="submit" name="ADD" value="ADD TASK"/>
    <input style="color:white; background:blue;" type="submit" name="CLEAR" value="CLEAR ALL"/>
</form>
</html>