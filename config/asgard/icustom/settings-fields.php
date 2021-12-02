<?php

return [
    'phones' => [
        'value' => [],
        'name' => 'icustom::phones',
        'type' => 'select',
        'groupName' => 'contact',
        'groupTitle' => 'isite::common.settingGroups.contact',
        'props' => [
            'label' => 'isite::common.settings.phones',
            'useInput' => true,
            'useChips' => true,
            'multiple' => true,
            'hideDropdownIcon' => true,
            'hint' => 'isite::common.settingHints.phones',
            'newValueMode' => 'add-unique'
        ]
    ],
    'addresses' => [
        'value' => [],
        'name' => 'icustom::addresses',
        'type' => 'select',
        'groupName' => 'contact',
        'groupTitle' => 'isite::common.settingGroups.contact',
        'props' => [
            'label' => 'isite::common.settings.addresses',
            'useInput' => true,
            'useChips' => true,
            'multiple' => true,
            'hideDropdownIcon' => true,
            'hint' => 'isite::common.settingHints.addresses',
            'newValueMode' => 'add-unique'
        ]
    ],
    'emails' => [
        'value' => [],
        'name' => 'icustom::emails',
        'type' => 'select',
        'groupName' => 'contact',
        'groupTitle' => 'isite::common.settingGroups.contact',
        'props' => [
            'label' => 'isite::common.settings.emails',
            'useInput' => true,
            'useChips' => true,
            'multiple' => true,
            'hideDropdownIcon' => true,
            'hint' => 'isite::common.settingHints.emails',
            'newValueMode' => 'add-unique'
        ]
    ],

];