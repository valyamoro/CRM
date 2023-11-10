<?php

return [
    '#^login?#' => [
        'controller' => 'login',
        'model' => 'login',
        'view' => '',
    ],
    '#^auth/login?#' => [
        'controller' => 'login',
        'model' => 'login',
        'view' => 'auth/login',
    ],
];
