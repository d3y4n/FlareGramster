<?php

error_reporting(E_ALL & ~E_STRICT & ~E_DEPRECATED & ~E_WARNING);

      $min = function($var, $rules)
      {
        preg_match('%min=([0-9]{1,10})%', $rules, $matches);
        if (empty($matches[1]))
          return FALSE;
        return strlen($var) < (int) $matches[1] ? $matches[1] : TRUE;
      };

      $var = 'php';
      $rules = 'req|text|min=4';

      if (strpos($rules, 'min=') !== FALSE)
      {
        $num = $min($var, $rules);
        if (is_numeric($num))
        {
            echo "should have at least $num characters!";
        }
        elseif($num === FALSE)
        {
            echo 'Invalid rule.';  
        }
      }

die;

define('ROOT', dirname(realpath(__FILE__)) . '/');

require ROOT . 'lib/Instagraph/Instagraph.php';
