<?php

function getTranslation($translations, $lang, $statement)
{
    return !empty($translations[$lang][$statement]) ? $translations[$lang][$statement] : $statement;
}

$translations = [
    'fa' => [
        'Hello!' => 'درود!',
        'Hi!' => 'درود!'
    ],
    'fr' => [
        'Hello!' => 'Bonjour!'
    ]
];
