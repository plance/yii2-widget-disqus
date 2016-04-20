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

Create "disqus_shortname" in web.php config file:
```php
'params' => [
	/* ... */
	'disqus_shortname' => 'your disqus shortname',
	/* ... */
],
```

Set this code in your view, if Disqus, using this url page:
```php
<?php echo Disqus::widget(); ?>
```

or this, if you need another url:
```php
<?php echo Disqus::widget([
	'disqus_url' => 'page url'
]); ?>
```