<?php
session_start();
session_unset();
session_destroy();

// Pastikan tidak ada output sebelum header
ob_start();
ob_end_clean();

header("Location: index.php");
exit();
?>
