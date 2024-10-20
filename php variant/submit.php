<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = isset($_POST['type']) ? htmlspecialchars($_POST['type']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    if (!empty($type) && !empty($message)) {
 
        $filename = "feedback_history.txt"; 
        $entry = "$type: $message\n";
        file_put_contents($filename, $entry, FILE_APPEND | LOCK_EX);
        echo "Feedback saved successfully!";
    } else {
        echo "Please provide both Type and Message.";
    }
}
?>