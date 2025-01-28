<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Skriv ut eller behandla meddelandet
    echo "Tack för ditt meddelande, $name!";
} else {
    echo "Ogiltig förfrågan.";
}
?>
