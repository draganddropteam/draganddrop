<?php

$id = required_param('id', PARAM_INT); // Получаем ID активности из параметра URL.
$cm = get_coursemodule_from_id('draganddrop', $id); // Получаем модуль по ID.
$context = context_module::instance($cm->id); // Устанавливаем контекст.

require_login($cm->course, true, $cm); // Проверяем, что пользователь авторизован.
$PAGE->set_url('/mod/draganddrop/view.php', ['id' => $id]); // Устанавливаем URL страницы.
$PAGE->set_title(format_string($cm->name)); // Устанавливаем заголовок страницы.
$PAGE->set_heading(format_string($cm->course)); // Устанавливаем заголовок курса.

echo $OUTPUT->header(); 



echo $OUTPUT->footer(); 