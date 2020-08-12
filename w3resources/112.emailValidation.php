<html>
    <head>
        <title>emailValidation with RegEx</title>
    </head>
    <body>


    <h2>Submit</h2>
    <p>
    Please enter the email address to validate.
    </p>
    <form method="POST" >
        <input type="text" size="40" name="address">
        <input type="submit" value="check" name="check">
    </form>
    
    <?php 
        
        $pattern = ''
        $address = $_POST['address'];
        echo "<h3>$address </h3>";
    
    ?>
    
    </body>
</html>
