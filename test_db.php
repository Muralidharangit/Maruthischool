<?php
echo "Testing 127.0.0.1...\n";
try {
    $pdo = new PDO('mysql:host=127.0.0.1;port=3306;dbname=maruthi_school', 'root', '', [PDO::ATTR_TIMEOUT => 2]);
    echo "127.0.0.1 Connected successfully\n";
} catch (Exception $e) {
    echo "127.0.0.1 Failed: " . $e->getMessage() . "\n";
}

echo "Testing localhost...\n";
try {
    $pdo2 = new PDO('mysql:host=localhost;port=3306;dbname=maruthi_school', 'root', '', [PDO::ATTR_TIMEOUT => 2]);
    echo "localhost Connected successfully\n";
} catch (Exception $e) {
    echo "localhost Failed: " . $e->getMessage() . "\n";
}