<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 

?>
<h4> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<h3>Make a Vote </h3>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<center><font size='6'> What is your favourite programming language <BR>
<input type="radio" name="lan" value="C">  C<BR>
<input type="radio" name="lan" value="Java">Java<BR>
<input type="radio" name="lan" value="Python"> Python<BR>
<input type="radio" name="lan" value="R">R<BR>
<input type="radio" name="lan" value="Ruby">Ruby<BR>
</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>
