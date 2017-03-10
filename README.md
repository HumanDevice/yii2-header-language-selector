Header Language Selector
========================

Bootstrap class to set application language by header attribute.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

    php composer.phar require --prefer-dist humandevice/yii2-header-language-selector "*"

or add

    "humandevice/yii2-header-language-selector": "*"

to the require section of your `composer.json` file.

Usage
-----

Once the extension is installed, simply use it in your REST API config:

    return [
        // ...
        'bootstrap' => [
            // ...
            'languageSelector' => [
                'class' => 'hd\yii2\bootstrap\LanguageSelector',
                'supportedLanguages' => ['en', 'pl'],
                'defaultLanguage' => 'pl'
            ],
        ],
    ];
