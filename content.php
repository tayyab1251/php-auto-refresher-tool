<?php
// Simple PHP code for demonstration

function getCurrentDate() {
    return date("D, M d, Y");
}

function printMessage() {
    echo "Learning PHP is fun!";
}

// Main Output
echo "<p><strong>Today's Date:</strong> " . getCurrentDate() . "</p>";
echo "<p><strong>Message:</strong> ";
printMessage();
echo "</p>";
?>
