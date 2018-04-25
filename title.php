<?php
define('Title','Enter Name');
include'../Template/Template_Header.html';?>
<?php
<form action ='hello1.php' method ="GET">
<br/>
<br/>
<em><b> Enter your name please</b></em><br/><br/>
<input type ="text" name ="user_name" value="<?php if(isset ($_POST['user_name']))
{print htmlspecialchars_decode($_POST['user_name']);}"?>/>
<! --Sticky form -Remembers value entered before-->
<input type ="submit" value ="submit name "/>
</form>
<?php include'../template/template_footer.html';?>