<?php

//получаем данные из формы
$firstname = filter_var(trim($_POST['firstname']), FILTER_SANITIZE_STRING);
$lastname = filter_var(trim($_POST['lastname']), FILTER_SANITIZE_STRING);
$dateb = filter_var(trim($_POST['dateb']), FILTER_SANITIZE_STRING);
$number = filter_var(trim($_POST['number']), FILTER_SANITIZE_STRING);

if(mb_strlen($firstname) < 2 || mb_strlen($firstname) > 30) {
    echo "Недопустимая длина имени";
    exit();
} else if(mb_strlen($lastname) < 2 || mb_strlen($lastname) > 30) {
    echo "Недопустимая длина фамилии";
    exit();
} else if(mb_strlen($number) < 11 || mb_strlen($number) > 11) {
    echo "Недопустимая длина номера";
    exit();
}

//подключение к базе данных
$mysql = new mysqli('127.0.0.1:3306', 'root', 'root', 'coffee');

//внесем данные в таблицу из формы
$mysql->query("INSERT INTO `cofeinia` (`name`, `surname`, `date`, `phone`)
VALUES('$firstname', '$lastname', '$dateb', '$number')");

//закрываем соединение с базой данной
$mysql->close();

//переход на главную страницу после отправки формы
header('Location:/')

?>