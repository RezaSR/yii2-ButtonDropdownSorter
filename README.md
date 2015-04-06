# ButtonDropdown Sorter Extension for Yii 2
Bootstrap ButtonDropdown to use as sorter in yii2 widgets

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require rsr/yii2-button-dropdown-sorter
```

or add

```
"rsr/yii2-button-dropdown-sorter": "*"
```

to the require section of your `composer.json` file.

Usage
----

In widgets that have the sorter, like ListView, set the "class" attribute to "rsr\yii2\ButtonDropdownSorter".
There is an optional "label" attribute which defines the label of the button which defaults to "Sort".
Be sure the {sorter} is present in widget's template.


Example:

```php
<?= ListView::widget([
		'dataProvider' => $dataProvider,
		'itemView' => '_views',
		'layout' => "{sorter}\n{summary}\n{items}\n{pager}",
		'sorter' => [
			'class' => 'rsr\yii2\ButtonDropdownSorter',
			'label' => 'Sort Items',
		],
]); ?>
```

Resources
----
* Extension page on yii website: [http://www.yiiframework.com/extension/yii2-button-dropdown-sorter](http://www.yiiframework.com/extension/yii2-button-dropdown-sorter).
