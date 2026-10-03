<?php include 'pure_php.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Demo </title>
</head>
<body>

    <a href="next_page.php">Go To The Next Page</a>
    <a href="sample2.php">Go To Sample II </a>

    <!-- <h1>Hello World</h1> -->
    <!-- ?php // echo " <h1>Hello</h1>" ?>  -->
     <h1> Shortcut of echo: <?= $username?></h1>
    <h2>Username: <?php echo $username; ?></h2>
    <h2>UserId: <?php echo $userId; ?></h2> 

    <button type="button" onclick="greetUser()">Greet User</button>

    <script>
        var username = "<?php echo $username?>";
        var userId = "<?php echo $userId?>";
        var password = "<?php echo $password?>";
        var course = "<?php echo $course?>";

        function greetUser(){
            alert("Hello "  + username + "" + "Your UserId is: " + "" + userId + " Your password is: " + "" + password + " course: " + course);
        }
    </script>
</body>
</html>