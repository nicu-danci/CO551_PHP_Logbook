<html>
<head>
<title>Select size page</title>
</head>
<body>
    <form action="selectcolour.php"  method="post">
        <input type="hidden" name="selqty" value="<?php echo $_POST['selqty']; ?>">
            Select the size for the <?php echo $_POST['selqty']; ?> widgets you are ordering
            <select name="selsize">
                <option value="small">Small (£15.75)</option>
                <option value="medium">Medium (£16.75)</option>
                <option value="large">Large (£17.75)</option>
                <option value="extra-large">Extra large (£18.75)</option>
            </select>
        <br/><br/>	
        <input type="submit" value="Buy"/>
    </form>
</body>
</html>	
