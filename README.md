Yii2 debug xhprof panel
=======================
xhprof panel for Yii2 debug module

IMPORTANT
---------
This is an early prototype, it is working, but pretty ugly. Contribute to it, to make it more pretty and awesome.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist intersvyaz/yii2-xhprof
```


add panel to your debug module configuration
```
'modules' => [
    'debug' => [
        'panels' => [
            'xhprof' => ['class' => \intersvyaz\xhprof\panels\XhprofPanel::class],
        ],
    ],
],
```

Usage
-----
soon ;)
