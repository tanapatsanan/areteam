<?php
// Lightweight entrypoint: include existing areteam.php as the homepage
// This does not modify any existing files — it simply delegates to areteam.php
chdir(__DIR__);
if (file_exists(__DIR__ . '/areteam.php')) {
    include __DIR__ . '/areteam.php';
    exit;
}

http_response_code(404);
echo 'Missing areteam.php';
