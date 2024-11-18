<?php

return [

    'x-content-type-options' => 'nosniff',

    'x-frame-options' => 'SAMEORIGIN', // Or 'DENY', depending on your needs

    'x-xss-protection' => '1; mode=block',

    'strict-transport-security' => 'max-age=31536000; includeSubDomains; preload',

    'referrer-policy' => 'no-referrer', // Or 'strict-origin-when-cross-origin', etc.

    'content-security-policy' => "default-src 'self'; img-src *; media-src media1.com media2.com; script-src 'self' example.com", // Customize based on your needs
];
