<?php

use App\Mail\ContactMail;
use Illuminate\Contracts\Console\Kernel;

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Kernel::class)->bootstrap();

try {
    $userData = ['user' => 'Mario', 'message' => 'Ciao dal test'];
    $html = (new ContactMail($userData))->render();
    echo "MAILABLE_RENDER_OK\n";
    echo str_contains($html, 'Ciao dal test') ? "MESSAGE_PRESENT\n" : "MESSAGE_MISSING\n";
} catch (Throwable $e) {
    echo 'MAILABLE_RENDER_ERROR: '.$e->getMessage();
}
