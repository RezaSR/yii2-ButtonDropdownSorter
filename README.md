# yii2-ButtonDropdownSorter
Bootstrap ButtonDropdown to use as sorter in yii2

Usage
----

Copy the file ButtonDropdownSorter.php in the components floder of yii2 application (@app/components/ButtonDropdownSorter.php)

Then in widgets that have the sorter like ListView set the "class" attribute to "app\components\ButtonDropdownSorter".
There is an optional "label" attribute which defines the label of the button which defaults to "Sort".
Be sure the {sorter} exists in widget's template.


Example:
```
<?= ListView::widget([
		'dataProvider' => $dataProvider,
		'itemView' => '_views',
		'layout' => "{sorter}\n{summary}\n{items}\n{pager}",
		'sorter' => [
			'class' => 'app\components\ButtonDropdownSorter',
			'label' => 'Sort Items',
		],
]); ?>
```
