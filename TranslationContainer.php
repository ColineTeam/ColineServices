<?php
namespace ColineServices;

/**
 * Description of TranslationContainer
 *
 * @author alexey
 */
class TranslationContainer {
    public $phrases = [];

    public function __construct(array $phrases) {
        $this->phrases = $phrases;
    }
    public function getTranslete($name, array $params = []){
        $result = $this->phrases[$name];
        foreach ($params as $key => $text){
            $result = str_replace("{%{$key}}", $text, $result);
        }
        
        return $result;
    }
}
