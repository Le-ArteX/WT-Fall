<!DOCTYPE html>
<html>
<head><title>PHP Code</title></head>
<body>
<h1> Welcome to Registration</h1>

<?php
$name = $email = $dob = $gender = "";
$nameerr = $emailrr = $dobrr = $genderr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameerr = "";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameerr = "Only letters and white space allowed";
        } elseif (str_word_count($name) < 2 ) {
            $nameerr = "At least 2 words required";
        }
    }

    if (empty($_POST["email"])) {
        $emailrr = "";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailrr = "Invalid email format";
        }
    }

    if (empty($_POST["dob"])) {
        $dobrr = "";
    } else {
        $dob = $_POST["dob"];
    }

    if (empty($_POST["gender"])) {
        $genderr = " Select Gender";
    } else {
        $gender = $_POST["gender"];
    }
}

function test_input($data) {
    return trim($data);
}
?>

<form method="post" action="">
Name: <input type="text" name="name" value="<?php echo $name;?>"><br><br>
<!-- <?php echo $nameerr; ?>
<input type="submit" name="submit" value="Submit"><br><br> -->

Email: <input type = "text" name = "email" value ="<?php echo $email;?>"><br><br>
<!-- <?php echo $emailrr; ?>
<input type="submit" name="submit" value="Submit"><br><br> -->

Date of Birth : <input type = "date" name = "dob" value ="<?php echo $dob;?>"><br><br>
<!-- <?php echo $dobrr; ?>
<input type="submit" name="submit" value="Submit"><br><br> -->

Gender: 
<input type = "radio" name = "gender" value ="male">Male
<input type = "radio" name = "gender" value ="female">Female
<input type = "radio" name = "gender" value ="other">Other

<br><br>

<input type="submit" name="submit" value="Submit">

<?php echo $nameerr; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" &&
    empty($nameerr) && empty($emailrr) && empty($dobrr) && empty($genderr)) {

    echo "<h3>Your Input:</h3>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Date of Birth: $dob <br>";
    echo "Gender: $gender <br>";
}
?>


</body>
</form>
</html>