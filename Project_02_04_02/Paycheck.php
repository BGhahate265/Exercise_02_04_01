<!DOCTYPE html>
<html>
<!-- 
Author: Braddock Ghahate


-->


<head>
<title>Payback</title>
    <meta charset="UTF-50">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <h2 style="text-align: center">Paycheck</h2>
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
            number_format($retval, 2);
        }
        return $retval;
    }
    
    function redisplayForm($hours, $wage) {
        
    ?>
<form name="paycheck" action="paycheck.php" method="post">
    <p>Number of Hours: <input type="text" name="hours" value=" <?php echo $hours; ?>"></p>
    <p>Hourly Wage: <input type="text" name="wage" <?php echo $wage; ?>></p>
    <p>
        <input type="reset" value="Reset">&nbsp;&nbsp;
        <input type="submit" value="Send Form">
    </p>
</form>
    
    <?php
    }
$hours = validateInput($_POST['hours'], "Number of Hours");
$wage = validateInput($_POST['wage'], "Hourly Wage");
    if ($errorCount > 0) {
        echo "$errorCount errors: Please use the \"Back\" button to re-enter the information below.<br>\n";
        redisplayForm($hours, $wage);
        
    }
    else {
        echo "Your paycheck will be " . $hours * $wage;
    } 
?>
</body>
</html>
