<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);

    echo "
    <div style='max-width: 600px; margin: 20px auto; padding: 20px; font-family: Arial; border: 1px solid #ccc; border-radius: 8px;'>
        <h2>Form Submitted Successfully!</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Address:</strong> $address</p>
        <a href='index.html' style='text-decoration: none; color: blue;'>Go Back</a>
    </div>
    ";
} else {
    header("Location: index.html");
    exit();
}
?>

