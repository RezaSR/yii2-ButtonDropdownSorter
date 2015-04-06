# ButtonDropdown Sorter Extension for Yii 2
Bootstrap ButtonDropdown to use as sorter in yii2 widgets

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require reza-sr/yii2-button-dropdown-sorter
```

or add

```
"reza-sr/yii2-button-dropdown-sorter": "*"
```

to the require section of your `composer.json` file.

Usage
----

In widgets that have the sorter like ListView set the "class" attribute to "reza-sr\yii2-button-dropdown-sorter\ButtonDropdownSorter".
There is an optional "label" attribute which defines the label of the button which defaults to "Sort".
Be sure the {sorter} exists in widget's template.


Example:

```php
<?= ListView::widget([
		'dataProvider' => $dataProvider,
		'itemView' => '_views',
		'layout' => "{sorter}\n{summary}\n{items}\n{pager}",
		'sorter' => [
			'class' => 'reza-sr\yii2-button-dropdown-sorter\ButtonDropdownSorter',
			'label' => 'Sort Items',
		],
]); ?>
```
