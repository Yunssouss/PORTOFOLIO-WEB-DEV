<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Check if the inputs are not empty
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Validate email format
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $to = "admin@grandcafe.com";  // Your admin email
            $subject = "New Message from Contact Form";
            $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
            $headers = "From: $email";

            // Send the email
            if (mail($to, $subject, $body, $headers)) {
                echo "Message sent successfully!";
            } else {
                echo "Failed to send the message.";
            }
        } else {
            echo "Invalid email format.";
        }
    } else {
        echo "Please fill all the fields!";
    }
}
?>

<?php
// Database connection
$servername = "localhost";
$username = "root";  // اسم المستخدم ديال MySQL
$password = "";  // كلمة السر ديال MySQL (خليها فارغة إذا ما عندكش كلمة السر)
$dbname = "grand_cafe_db";

// Connect to MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Check if the inputs are not empty
    if (!empty($name) && !empty($email) && !empty($message)) {
        // SQL query to insert the message into the database
        $sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "Message saved successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Please fill all the fields!";
    }
}

// Close the connection
$conn->close();


$sql = "INSERT INTO contact_messages (name, email, message) VALUES ('name', 'email', 'message')";

?>
