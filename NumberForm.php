<!DOCTYPE html>
<html>
<!-- 
Author: Braddock Ghahate


-->


<head>
<title>Number Form</title>
    <meta charset="UTF-50">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h1>Number Form</h1>
<?php
    $displayForm = true;
    $number = "";
    //return if the form submits or not
    if (isset($_POST['Submit'])) {
        $number = $_POST['number'];
        if (is_numeric($number)) {
            $displayForm = false;
        }
        else {
            echo "<p>You need to enter a numeric value.</p>\n";
            $displayForm = true;
        }
    }
    if ($displayForm) {
?>

<form name="numberForm" action="NumberForm.php" method="post">
    <p>
        Enter a number: <input type="text" name="number" value="<?php echo $number; ?>">
    </p>
    <p>
        <input type="reset" value="Clear Form">&nbsp;&nbsp;
        <input type="submit" name="Submit" value="Send Form">
    </p>
</form>
    
<?php    
    }
    else {
        echo "<p>Thank you entering a number.</p>\n";
        echo "</p>Your number, $number, squared is " . ($number * $number) . ".</p>\n";
        echo "<p><a href=\"NumberForm.php\">Try Again?</a></p>\n";
    }
?>
</body>
</html>
