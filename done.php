<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = htmlspecialchars(trim($_POST['fname']));
    $lname = htmlspecialchars(trim($_POST['lname']));
    $address = htmlspecialchars(trim($_POST['address']));
    $gender = $_POST['gender']; 
    $country = $_POST['country']; 
    $username = htmlspecialchars(trim($_POST['uname']));
    $password = htmlspecialchars(trim($_POST['pass']));
    $department = htmlspecialchars(trim($_POST['dep']));

    // Display the submitted data
    $title = $gender == 'm'? 'Mr. ': 'Miss. ';
    $name = $fname.' '.$lname;
    echo '<b>Thanks </b>'.$title.$name.'<br><br>'.
    '<b> Please Review Your Information </b><br><br>'.'<b> Name: </b>'.$username.'<br><br>'.
    '<b> Address: </b>'.$address.'<br><br>'.
    '<b> Your Skills: </b><br>';
    if(isset($_POST['skills']))
        foreach($_POST['skills'] as $each_skill)
            echo $each_skill.'<br>';
    echo '<br><b> Department: </b>'.$department;
} 
else {
    echo "<h2>No data submitted</h2>";
}

?>