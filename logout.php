<?php
session_start();
session_unset();
session_destroy();
echo "Session has been successfully deleted..."
?>