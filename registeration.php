<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration</title>
    <style>
        .error {
            color: red;
        }
    </style>

</head>

<body>
    <form method="post" action="done.php" id="form">
        <label for="fname">First Name</label>
        <input type="text" name="fname">
        <?php if (isset($errors['firstname'])) {
            echo '<span class="error">' . $errors['firstname'] . '</span>';
        } ?>
        <br><br>
        <label for="lname">Last Name</label>
        <input type="text" name="lname">
        <br><br>
        <label for="address">Address</label>
        <textarea name="address"></textarea>
        <span></span>
        <br><br>
        <label for="country">Country</label>
        <select name="country">
            <option value="Egy">Egypt</option>
            <option value="Pal">Palestine</option>
            <option value="Sud">Sudan</option>
            <option value="Syr">Syria</option>
        </select>
        <span></span>
        <br><br>
        <label for="gender">Gender</label>
        <span></span>
        <input type="radio" name="gender" value="m">
        <label for="gender">Male</label>
        <input type="radio" name="gender" value="f">
        <label for="gender">Female</label>
        <span></span>
        <br><br>
        <label>Skills</label>
        <input type="checkbox" name="skills[]" value="PHP">
        <label>PHP</label>
        <input type="checkbox" name="skills[]" value="J2SE">
        <label>J2SE</label>
        <br><br>
        <input type="checkbox" name="skills[]" value="MySQL">
        <label>MySQL</label>
        <input type="checkbox" name="skills[]" value="PostgreeSQL">
        <label>PostgreeSQL</label>
        <span></span>
        <br><br>
        <label for="uname">Username</label>
        <input type="text" name="uname">
        <span></span>
        <br><br>
        <label for="pass">Password</label>
        <input type="password" name="pass">
        <span></span>
        <br><br>
        <label for="dep">Department</label>
        <input type="text" name="dep" placeholder="OpenSource">
        <span></span>
        <br><br>
        <input type="submit" value="Submit" onclick="validateForm()">
        <input type="reset">
    </form>
</body>

</html>