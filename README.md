Yii2 Disqus widget
==============

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist plance/yii2-widget-disqus "*"
```

or add

```
"plance/yii2-widget-disqus": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Set next code in your config.php file. Where is "disqus_shortname" set disqus shortname:
```php
Yii::$container -> set('plance\widget\Disqus', [
	'disqus_shortname' => 'xxx'
]);
```

Set this code in your view, if Disqus, using current url page:
```php
<?php echo  Yii::$app -> Disqus -> widget(); ?>
```

or this, if you need another url:
```php
<?php echo Disqus::widget([
	'disqus_url' => 'page url'
]); ?>
```