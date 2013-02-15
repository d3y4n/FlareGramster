<?php

class FlareGramster extends Instagraph
{

  public function crappyScenicPhoto($input, $output)
  {
    $this->setInput($input);
    $this->setOutput($output);
    $this->tempfile();
  }

  public function overSaturate()
  {
    $this->execute("convert $this->_tmp -brightness-contrast 0x50 $this->_tmp");
  }

  public function addLensFlare()
  {
    $glob = glob(dirname(realpath(__FILE__)) . '/Assets/Flares/*.png');
    $flare = $glob[(array_rand($glob))];
    $this->execute("convert $this->_tmp ( \"$flare\" -resize {$this->_width}x{$this->_height}! -unsharp 1.5×1.0+1.5+0.02 ) -flatten $this->_tmp");    
  }

  public function addDoucheyHipster()
  {
    $glob = glob(dirname(realpath(__FILE__)) . '/Assets/Hipsters/*.png');
    $hipster = $glob[(array_rand($glob))];
    $this->execute("convert $this->_tmp ( \"$hipster\" -resize {$this->_width}x{$this->_height}! -unsharp 1.5×1.0+1.5+0.02 ) -flatten $this->_tmp");        
  }

  public function addFrame()
  {
    $this->frame('Assets/Frames/Nashville');
  }

}