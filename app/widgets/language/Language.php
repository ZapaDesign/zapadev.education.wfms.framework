<?php

namespace app\widgets\language;

use RedBeanPHP\R;
use zpdevfrw\App;

class Language
{
    protected $tpl;
    protected $languages;
    protected $language;
    
    public function __construct()
    {
        $this->tpl = __DIR__ . '/lang_tpl.php';
        $this->run();
    }
    
    public function run()
    {
        $this->languages = App::$app->getProperty('languages');
        $this->language  = App::$app->getProperty('language');
        echo $this->getHtml();
    }
    
    public static function getLanguages(): array
    {
        return R::getAssoc("SELECT code, title, base, id FROM language  ORDer BY base DESC");
    }
    
    public static function getLanguage($languages)
    {
        $lang = App::$app->getProperty('lang');
        
        if ($lang && array_key_exists($lang, $languages)) {
            $key = $lang;
        } elseif ( ! $lang) {
            //TODO e7n key()
            $key = key($languages);
        } else {
            $lang = h($lang);
            throw new \Exception("Not found language {$lang}", 404);
        }
        
        $lang_info         = $languages[$key];
        $lang_info['code'] = $key;
        
        return $lang_info;
    }
    
    public function getHtml(): string
    {
        ob_start();
        require $this->tpl;
        return ob_get_clean();
    }
}