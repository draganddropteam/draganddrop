<?php

require_once($CFG->dirroot.'/course/moodleform_mod.php');
class mod_draganddrop_mod_form extends moodleform_mod {
    public function definition() {
        $mform = $this->_form;

        $mform->addElement('text', 'name', get_string('name'), ['size' => '64']); 
        $mform->setType('name', PARAM_TEXT); 
        $mform->addRule('name', null, 'required', null, 'client'); 

        $mform->addElement('filemanager', 'images', get_string('images', 'mod_draganddrop'), null, [
            'subdirs' => 0, // Подкаталоги не разрешены.
            'maxfiles' => 10, // Максимум 10 файлов.
            'accepted_types' => ['.png', '.jpg', '.jpeg'], // Разрешённые типы файлов.
        ]);

        $mform->addElement('editor', 'introeditor', get_string('description'), null, null);
        $mform->setType('introeditor', PARAM_RAW); // Содержимое может быть произвольным.

        $this->add_action_buttons();
    }
}