<?php

require 'bootstrap.php';

$output = NULL;

if( ! empty($_GET['url']))
{
  
  $filename = sha1( basename($_GET['url']) . microtime(TRUE) );
  $filepath = ROOT . 'images/input/' . $filename . '.jpg';
  
  if( ! file_exists($filepath))
  {
    $retval = file_put_contents($filepath, file_get_contents($_GET['url']));
    if($retval == false)
    {
      die('Unable to fetch image from given URL. Aborting.');
    }
  }

  $output = ROOT . 'images/output/' . $filename . '.jpg';

  $flareGramster = new FlareGramster;
  $flareGramster->crappyScenicPhoto($filepath, $output);
  $flareGramster->addDoucheyHipster();
  $flareGramster->overSaturate();
  $flareGramster->addLensFlare();
  $flareGramster->addFrame();
  $flareGramster->output();

}

if (isset($_GET['__ajax']) OR isset($_SERVER['HTTP_X_REQUESTED_WITH']))
{
  $output = str_replace(array('\\', str_replace('\\', '/', __DIR__)), array('/', ''), $output);
  header('Location: ' . $output, TRUE, 301);
  die;
}

require ROOT . 'template.php';
