<html>
    <head><title>process registration form </title></head>
    <body>

        <h1>Form Fields posted are : </h1>

<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
echo $_POST["username"];
echo "<br /><br />";
foreach($_POST as $form_variable)
{
    echo $form_variable."<br />";
}

?>
    </body>
</html>