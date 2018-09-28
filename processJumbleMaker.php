<!DOCTYPE html>
<html>
<!-- 
Author: Braddock Ghahate


-->


<head>
<title>Process Jumble Maker</title>
    <meta charset="UTF-50">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <h2>Jumble Maker</h2>
<?php
    $errorCount = 0;
    $words = array();
    
    function displayError($fieldName, $errorMsg) {
        global $errorCount;
        echo "Error for \"fieldName\":$errorMsg<br>\n";
        ++$errorCount;
    }
    
    function validateWord($data, $fieldName) {
        global $errorCount;
        $retval = "";
        
        return $data;
    }
    $words[] = validateWord($_POST['word1'], "Word 1");
    $words[] = validateWord($_POST['word2'], "Word 2");
    $words[] = validateWord($_POST['word3'], "Word 3");
    $words[] = validateWord($_POST['word4'], "Word 4");
    if ($errorCount > 0) {
        echo "Please use the \"Back\" button to re-enter any missing data.<br>\n";
    }
    else {
        $wordNum = 0;
        foreach ($words as $word) {
            echo "Word " . ++$wordNum . ":$word<br>\n";
        }
    }
?>
</body>
</html>
