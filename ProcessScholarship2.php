<!DOCTYPE html>
<html>
<!-- 
Author: Braddock Ghahate


-->


<head>
<title>Musical Scale</title>
    <meta charset="UTF-50">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>Superglobals</h2>
<?php
$errorCount = 0;
    
function displayRequired($fieldName) {
    echo "The field \"$fieldName\" is required.<br>\n";
}
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
$firstName = validateInput($_POST['fName'], "First Name");
$lastName = validateInput($_POST['lName'], "Last Name");
?>
</body>
</html>
