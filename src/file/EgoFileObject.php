<?php
namespace opentutorials\file;
class EgoFileObject extends \SplFileObject
{
    function getContents(){
        $content = $this->fread($this->getSize());
        $this->rewind();
        return $content;
    }
}

//$file = new MyFileObject('EgoFileObject.php');
//echo $file->getContents();