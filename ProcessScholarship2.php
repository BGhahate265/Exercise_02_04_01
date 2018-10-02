<!DOCTYPE html>
<html>
<!-- 
Author: Braddock Ghahate


-->


<head>
<title>Process Scholarship 2</title>
    <meta charset="UTF-50">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <h2 style="text-align: center">Scholarship Form 2</h2>
<?php
$errorCount = 0;
    
function displayRequired($fieldName) {
    echo "The field \"$fieldName\" is required.<br>\n";
}
    //function to validate the input fields
    function validateInput($data, $fieldName) {
        global $errorCount;
        if (empty($data)) {
            displayRequired($fieldName);
            ++$errorCount;
            $retval = "";
        }
        else {
            $retval = trim($data);
            $retval = stripslashes($retval);
        }
        return $retval;
    }
    
    function redisplayForm($firstName, $lastName) {
        
    ?>
<form name="scholarship" action="ProcessScholarship2.php" method="post">
    <p>First Name: <input type="text" name="fName" value=" <?php echo $firstName; ?>"></p>
    <p>Last Name: <input type="text" name="lName" <?php echo $lastName; ?>></p>
    <p>
        <input type="reset" value="Clear Form">&nbsp;&nbsp;
        <input type="submit" value="Send Form">
    </p>
</form>
    
    <?php
    }
$firstName = validateInput($_POST['fName'], "First Name");
$lastName = validateInput($_POST['lName'], "Last Name");
    if ($errorCount > 0) {
        echo "$errorCount errors: Please use the \"Back\" button to re-enter the information below.<br>\n";
        redisplayForm($firstName, $lastName);
        
    }
    else {
        echo "Thank you you for filling out the scholarship form, " . $firstName . " " . $lastName . ".";
    }
?>
</body>
</html>
