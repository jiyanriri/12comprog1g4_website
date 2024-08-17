<?php
$servername = "localhost:1251";
$username = "gian";
$password = "march252007"; 
$dbname = "comprog1db";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $student_id = htmlspecialchars($_POST['student_id']);
    $birthday = htmlspecialchars($_POST['birthday']);
    $student_fname = htmlspecialchars($_POST['student_fname']);
    $student_mname = htmlspecialchars($_POST['student_mname']);
    $student_lname = htmlspecialchars($_POST['student_lname']);
    $student_email = htmlspecialchars($_POST['student_email']);
    $guardian_lname = htmlspecialchars($_POST['guardian_lname']);
    $guardian_fname = htmlspecialchars($_POST['guardian_fname']);
    $guardian_phone = htmlspecialchars($_POST['guardian_phone']);
    $grade = htmlspecialchars($_POST['grade']);
    $section = htmlspecialchars($_POST['section']);
    $adviser = htmlspecialchars($_POST['adviser']);
    $schedule = htmlspecialchars($_POST['schedule']);

    // Prepare the SQL statement
    $sql = "INSERT INTO students (student_id, birthday, student_fname, student_mname, student_lname, student_email, guardian_lname, guardian_fname, guardian_phone, grade, section, adviser, schedule)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare and bind
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssssss", $student_id, $birthday, $student_fname, $student_mname, $student_lname, $student_email, $guardian_lname, $guardian_fname, $guardian_phone, $grade, $section, $adviser, $schedule);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<h1>Form Submitted Successfully</h1>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

} else {
    echo "<h1>Invalid Request</h1>";
}
?>
