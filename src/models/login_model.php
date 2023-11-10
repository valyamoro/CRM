<?php

/* Валидация почты.
 *
 */
function validateEmail(string $email): ?string
{
    $result = null;

    if (empty($email)) {
        $result .= 'Пожалуйста, заполните поле с почтой.' . "\n";
    } elseif (!\filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result .= 'Некорректная почта!' . "\n";
    } elseif (\mb_strlen($email, 'utf8') < 14) {
        $result .= 'Почта должна содержать не меньше 14 символов!' . "\n";
    } elseif (\mb_strlen($email, 'utf8') > 255) {
        $result .= 'Почта содержит слишком много символов!' . "\n";
    } elseif (!\preg_match('/^[^!№;#$%^&*()]+$/u', $email)) {
        $result .= 'Почта содержит недопустимые символы' . "\n";
    }

    return $result;
}

/* Запись пользователя в базу данных.
 *
 */
function addUser(array $data): int
{
    $query = 'INSERT INTO users (url, email)
    VALUES (:url, :email)';

    $sth = connectionDB()->prepare($query);

    $sth->execute([
        'url' => $data['url'],
        'email' => $data['email'],
    ]);

    return (int)connectionDB()->lastInsertId();
}