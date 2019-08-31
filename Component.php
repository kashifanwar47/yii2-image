<?php

namespace kashifanwar47\image;

/**
 * Class Component
 * @package kashifanwar47\image
 * @author Kashif Anwar
 */
class Component extends \yii\base\Component
{
    /**
     * @var string Driver
     */
    public $driver = '\\kashifanwar47\\image\\drivers\\GD';

    /**
     * @var boolean
     */
    public $throwErrors = true;


    /**
     * Load image from file
     * @param string $file
     * @return Image
     */
    public function load($file)
    {
        return Image::load($file, $this->driver, $this->throwErrors);
    }
}