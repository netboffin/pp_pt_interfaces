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
        <form name="Registration_Form" action ="process_registration.php" method="post">
            <label for="username"> Username : </label> <input type="text" name ="username"/><br />
            <label for="email"> Email :</label> <input type="text" name="email"/><br />
            <label for="password"> Password : </label><input type="password" name="password"/><br />
            <label for="password_confirmation"> Confirm Password :</label> <input type ="password" name ="password_confirmation"/><br />
            <input type ="hidden" value="<?=$token?>">
            <input type="submit" value ="Sign Up!"/>


        </form>



        <?php
        // put your code here
        ?>
    </body>
</html>
