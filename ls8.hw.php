<?php
declare(strict_types=1);

echo "введите пароль!";
$password = trim(fgets(STDIN));

if (strlen($password) < 8) {
    echo "пароль дожлен быть из 8 символов";
} if (strpbrk($password, '0123456789') === false) {
    echo "в пароле длолжна быть цифра";
} if (strpbrk($password, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ') === false) {
    echo "в пароле должна быть хотябы одна большая буква";
} if (strpbrk($password, 'absdefghilklmnopqrstuvwxyz') === false) {
    echo "в пароле должна быть хотябы одна маленькая буква";
} else {
    echo "все условия выполнены, пароль успошно создан!!!";
}