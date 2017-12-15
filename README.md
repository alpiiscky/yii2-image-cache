Image Resize
============
Пропорциональный ресайз и кроп изображений

Установка
------------
Выполните 

```
composer require --prefer-dist alpiiscky/yii2-image-cache "*"
```

или добавьте

```
"alpiiscky/yii2-image-cache": "*"
```

в раздел require вашего файла `composer.json`.


Настройка
-----

Добавьте в раздел components следующие строки:

```php
'components' => [
    'thumb' => [
        'class' => 'alpiiscky\simplehelpers\Thumb' ,
        'cachePath' => '@webroot/cache',
        'options' => [
            'placeholder' => [
                'type' => \alpiiscky\imagecache\Thumb::THUMBNAIL_INSET,
                'backgroundColor' => '#f5f5f5',
                'textColor' => '#cdcdcd',
                'textSize' => 30,
                'text' => 'No image'
            ],
            'quality' => 92,
            'tinyPng' => [
                'apiKey' => null
            ]
        ]
    ]
]
```

Использование
-----

Для использования кропа и ресайза можно использовать виджет  :

```php
<?= \alpiiscky\imagecache\ThumbWidget::widget([
      'image' => 'image.jpg',
      'path' => 'images/',
      'width' => 120,
      'height' => 120,
      'mode' => \alpiiscky\imagecache\Thumb::CROP_CENTER
]) ?>
```

Доступны следующие режимы 

'mode' => \alpiiscky\imagecache\Thumb::CROP_CENTER - 

'mode' => \alpiiscky\imagecache\Thumb::CROP_LEFT

'mode' => \alpiiscky\imagecache\Thumb::CROP_RIGHT


