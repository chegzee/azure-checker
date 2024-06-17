<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

echo "SCARED"; exit;
require_once '../app/require.php';
