<?php
include 'std_regis.php'; // Ensure database connection

if (!isset($con) || !$con) {
    die("Database connection is not established.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate inputs
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    // Ensure required fields are not empty
    if (empty($name) || empty($email) || empty($message)) {
        die("All fields are required.");
    }

    // Prepare and execute query
    $stmt = $con->prepare("INSERT INTO student (name, email, message) VALUES (?, ?, ?)");
    if (!$stmt) {
        die("Error in SQL statement: " . $con->error);
    }

    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        echo "<script>
            alert('New record inserted successfully');
            window.history.back();
        </script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    mysqli_close($con);
}
?>