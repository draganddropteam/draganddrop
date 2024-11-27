<?php
defined('MOODLE_INTERNAL') || die();

$plugin->component = 'mod_draganddrop'; // Уникальный идентификатор плагина.
$plugin->version   = 2024112200;    // Текущая версия (ГГГГММДДЧЧ).
$plugin->release   = 'v1.0';        // Версия для пользователя.
$plugin->requires  = 2022041900;    // Минимальная версия Moodle.
$plugin->maturity  = MATURITY_STABLE; // Уровень стабильности.
$plugin->cron      = 0;             // Частота выполнения cron (в секундах).
