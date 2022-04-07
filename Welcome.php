<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.

Mason Phillips
CSC-155-201H_2022SP 
-->


<html>
<head>
<title>Title goes here</title>
<?php 
$title = "Header/Footer";                                  
include "header.php";      
include "footer.php";
session_start();
// php library loading first
// local php functions go here 
// local php startup code goes here
function Set_user(){ 
    if (isset($_SESSION['username']) && isset($_SESSION['password']) ) {
        echo '<h3>Welcome, '. $_SESSION['username'] .'</h3>';
    } else {
        echo '<h3>Invalid Login</h3>';
        sleep(5);
        header('Location: Login.php');
    }              }
if (isset($_POST['choice'])){
    echo '<h3> Redirecting to login...</h3>';
    sleep(5);
    session_destroy();
    header('Location: Login.php');
}
?>


</head>
<body>
<form style="margin: auto;" method='POST'>
<input type='submit' name='choice' value='Logout'> 

<?php Set_user() ?>
<p>This page will be the welcome page.</p>
</body>
</html>