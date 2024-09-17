<?php
$password = "akun";

// Hashing menggunakan algoritma SHA-256
$bcryptHash = password_hash($password, PASSWORD_BCRYPT);

echo "Bcrypt Hash: " . $bcryptHash;