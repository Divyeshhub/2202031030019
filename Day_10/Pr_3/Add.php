<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $value1 = $_POST['value1'];
    $value2 = $_POST['value2'];
    $result = $value1 + $value2;

    $_POST['result'] = $result;
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Addition Calculator</title>
</head>
<body>
    <form method="post" action="">
        <label for="value1">Value 1:</label>
        <input type="text" name="value1" id="value1" required>
        
        <label for="value2">Value 2:</label>
        <input type="text" name="value2" id="value2" required>
        
        <br>
        
        <input type="submit" name="calculate" value="Calculate">
        
        <br>
        
        <label for="result">Result:</label>
        <input type="text" name="result" id="result" value="<?php echo isset($_POST['result']) ? $_POST['result'] : ''; ?>" readonly>
    </form>
</body>
</html>


