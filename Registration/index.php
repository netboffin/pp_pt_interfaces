<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Registration Form for Protoplan</title>
        <?php
            $token = md5
        ?>
    </head>
    <body>
	<h1>Goject Project Management Registration</h1>
	<?php
	if(isset($_POST["stage"])  and  ($_POST["stage"] == "process")){
		process_form();
	}else
	{
		display_form();
	}
function  process_form(){
	foreach($_POST as $field=>$value){
		print $field." is set to ".$value."<br />";
	}


}
function	 display_form(){
        ?>
		<form name="Registration_Form" action ="<?=$_SERVER[PHP_SELF]?>" method="post">
            <label for="username"> Username : </label> <input type="text" name ="username"/><br />
            <label for="email"> Email :</label> <input type="text" name="email"/><br />
            <label for="password"> Password : </label><input type="password" name="password"/><br />
            <label for="password_confirmation"> Confirm Password :</label> <input type ="password" name ="password_confirmation"/><br />
            <input type ="hidden" value="<?=$token?>" />
			<input type="hidden" name="stage" value="process"/>
            <input type="submit" value ="Sign Up!"/>
        </form>
<?php
	}
?>
        <?php
        // put your code here
        ?>
    </body>
</html>
