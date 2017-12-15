<?php

namespace alpiiscky\imagecache;

use yii\base\Widget;

class ThumbWidget extends Widget
{
    /**
     * относительный путь к файлу 1/1.png или 1.png
     */
    public $image;

    /**
     * путь к файлу
     */
    public $path;

    /**
     * высота
     */
    public $height = 100;

    /**
     * ширина
     */
    public $width = 100;

    /**
     * воможная ссылка на изображении
     */
    public $url;

    /**
     * режим обрезки
     * CROP_LEFT, CROP_CENTER, CROP_RIGHT
     */
    public $mode = Thumb::CROP_CENTER;

    /**
     * дополнительные классы для изображения
     */
    public $class = '';

    /**
     * файл view - можно указать свой
     */
    public $view = 'thumb';

    public function run()
    {
        return $this->render($this->view, [
            'image' => $this->path.$this->image,
            'height' => $this->height,
            'width' => $this->width,
            'mode' => $this->mode,
            'class' => $this->class
        ]);
    }
}