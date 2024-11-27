<?php
$settings->add(new admin_setting_configtext(
    'mod_draganddrop/maximages', // Уникальный ключ настройки.
    get_string('maximages', 'mod_draganddrop'), // Название настройки.
    get_string('maximages_desc', 'mod_draganddrop'), // Описание настройки.
    5, // Значение по умолчанию.
    PARAM_INT // Тип данных (целое число).
));