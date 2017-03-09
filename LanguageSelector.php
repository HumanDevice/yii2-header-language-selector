<?php

namespace hd\yii2\bootstrap;

use yii\base\BootstrapInterface;

/**
 * Sets application language via received header data.
 */
class LanguageSelector implements BootstrapInterface
{
    /**
     * Name of header with language
     * @var string
     */
    public $headerAttribute = 'language';

    /**
     * Array of supported languages
     * @var array
     */
    public $supportedLanguages = ['en'];

    /**
     * Default language if none sent.
     * @var string
     */
    public $defaultLanguage = 'en';

    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        $receivedLanguage = $app->request->headers->get($this->headerAttribute);
        if ($receivedLanguage && in_array($receivedLanguage, $this->supportedLanguages)) {
            $lang = $receivedLanguage;
        } else {
            $lang = $this->defaultLanguage;
        }
        $app->language = $lang;
    }

}
