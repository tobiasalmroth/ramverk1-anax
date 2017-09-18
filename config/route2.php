<?php
/**
 * Configuration file for routes.
 */
return [
    // Load these routefiles in order specified and optionally mount them
    // onto a base route.
    "routeFiles" => [
        [
            // These are for internal error handling and exceptions
            "mount" => null,
            "file" => __DIR__ . "/route2/internal.php",
        ],
        [
            // For debugging and development details on Anax
            "mount" => "debug",
            "file" => __DIR__ . "/route2/debug.php",
        ],
        [
            // Base site routes
            "mount" => null,
            "file" => __DIR__ . "/route2/base.php",
        ],
        [
            // To mount remserver routes
            "mount" => "remserver/api",
            "file" => __DIR__ . "/route2/remserver.php",
        ],
        [
            // To mount remserver routes
            "mount" => null,
            "file" => __DIR__ . "/route2/comment.php",
        ],
        [
            // Keep this last since its a catch all
            "mount" => null,
            "file" => __DIR__ . "/route2/404.php",
        ],
    ],

];
