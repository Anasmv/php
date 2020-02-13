<?php
session_start(); 
if(isset($_SESSION['i']))
{
    echo 'token = '. $_SESSION['i'] .'<br>';
}
else
{
    $_SESSION['i']= md5(uniqid($your_user_login, true));
}
?>
<br>
<form method='post'>
    <input type='text' value='<?php echo $_SESSION['i'] ; ?>' name='tk'>
    <input type='submit' name='tk_sub'>
</form>
<?php
if(isset($_POST['tk_sub']))
{
    echo $tk=$_POST['tk'];
    if($tk == $_SESSION['i'])
    {
        echo '<br>token match';
    }
    else
    {
        echo '<br>token mismatch';
    }
}
?>