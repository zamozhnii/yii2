<?php

    return [
        'id' => 'Yii2',
        'basePath' => realpath(__DIR__ . '/../'),
        'components' => [
            'urlManager' => [
                'enablePrettyUrl' => true,
                'showScriptName' => false,
            ]
        ]
    ];

?>