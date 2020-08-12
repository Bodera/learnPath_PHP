<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title> HTML Template </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <h3>Please input your name:</h3>
    
    <form method="post">
        <input type=text name=name>
        <input type="submit" value="Submit Name">
    </form>
    
    <?php 
        $name = $_POST['name'];
        echo "<h3>Hello $name </h3>";
    
    ?>
    
</body>

</html>
