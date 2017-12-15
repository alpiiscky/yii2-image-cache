Image Resize
============
Пропорциональный ресайз и кроп изображений

Installation
------------

```
composer require --prefer-dist alpiiscky/yii2-image-cache "*"
```

or add

```
"alpiiscky/yii2-image-cache": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \alpiiscky\imagecache\ThumbWidget::widget([
      'image' => 'image.jpg',
      'path' => 'images/',
      'width' => 120,
      'height' => 120,
      'mode' => \alpiiscky\imagecache\Thumb::CROP_CENTER
]) ?>
```

'mode' => \alpiiscky\imagecache\Thumb::CROP_CENTER
'mode' => \alpiiscky\imagecache\Thumb::CROP_LEFT
'mode' => \alpiiscky\imagecache\Thumb::CROP_RIGHT
