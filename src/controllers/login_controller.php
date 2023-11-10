<?php

$metaTitle = 'Авторизация';

if(!empty($_POST)) {
    $user = $_POST;
    $errorMessage = validateEmail($user['email']);

    $route = '/auth/login';

    if (!\is_null($errorMessage)) {
        $_SESSION['errors'] = $errorMessage;
    } else {

        $email = escapeData($user)[0];

        // Могут быть коррозии, потом изменить.
        $url = 'crm-' . uniqid() . '.ru';

        $user = [
            'email' => $email,
            'url' => $url,
        ];

        addUser($user);

        $route = "/{$url}";
    }
    header("Location: {$route}");
}

$content = render($currentAction['view']);
