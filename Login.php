<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.

Mason Phillips
CSC-155-201H_2022SP 
-->


<html>
<head>
<title>Login</title>
<?php 
$title = "Header/Footer";                   
include "header.php";      
include "footer.php";
session_start();
// php library loading first
// local php functions go here 
function showPost($key) 
{
    if ( isset($_POST[$key]) )
    echo htmlspecialchars($_POST[$key]);
}

function getPost($key) 
{
    if ( isset($_POST[$key]) )
    return htmlspecialchars($_POST[$key]);
    return "";
}

function validate_login($username, $password)
{
    if ($username=="shopper" && $password=="spendmoneyplease!")
    return true;
    return false;
}

// local php startup code goes here 
$message="";
$username = getPost('myusername');
$password = getPost('mypassword');
if (isset($_POST['choice']))
{
    if ($_POST['choice'] == 'Login')
    {
    if (validate_login($username, $password))
    { 
        $_SESSION['username'] = $_POST['myusername'];
        $_SESSION['password'] = $_POST['mypassword'];

        header('Location: Welcome.php');
    }
    $message = "Invalid username or password!";
    }
}  
?>
</head>
<body>
This is a student sample website. Do NOT use real passwords!!!<br>
(Username: shopper Password: spendmoneyplease!)
<form method='POST'>
<table>
<tr><td>Username</td><td><input type='text' name='myusername' value='<?php showPost("myusername");?>'></td></tr>
<tr><td>Password</td><td><input type='password' name='mypassword' value='<?php showPost("mypassword");?>'></td></tr>
<tr><td></td><td><input type='submit' name='choice' value='Login'></td></tr> 
</table>
<div style='position: absolute; bottom: 10px; '><p><?php echo $message;?></p></div>

</body>
</html>
