<?php

/**
 * @see http://www.yiiframework.com/doc-2.0/yii-widgets-linksorter.html
 */
namespace rsr\yii2;

use yii\base\InvalidConfigException;
use yii\base\Widget;
use yii\helpers\Html;

/**
 * ButtonDropdownSorter renders bootstrap ButtonDropdown of sort links for the given sort definition.
 * ButtonDropdownSorter will generate a bootstrap ButtonDropdown which contains every attribute declared in [[sort]].
 * 
 * @author Reza Saberi Rad <rsr_reza@yahoo.com>
 */
class ButtonDropdownSorter extends Widget
{

    /**
     * @var string lablel of dropdown button
     */
    public $label;

    /**
     * @var Sort the sort definition
     */
    public $sort;

    /**
     * @var array list of the attributes that support sorting. If not set, it will be determined
     *      using [[Sort::attributes]].
     */
    public $attributes;

    /**
     * @var array HTML attributes for the sorter container tag.
     * @see https://github.com/yiisoft/yii2-bootstrap/blob/master/ButtonDropdown.php for special attributes and details on how attributes are being rendered.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = [
        'class' => 'sorter'
    ];

    /**
     * Initializes the sorter.
     */
    public function init()
    {
        if ($this->sort === null) {
            throw new InvalidConfigException('The "sort" property must be set.');
        }
    }

    /**
     * Executes the widget.
     * This method renders the sort links.
     */
    public function run()
    {
        echo $this->renderSortButtonDropdown();
    }

    /**
     * Renders the sort ButtonDropdown
     * 
     * @return string the rendering result
     */
    protected function renderSortButtonDropdown()
    {
        $attributes = empty($this->attributes) ? array_keys($this->sort->attributes) : $this->attributes;
        $links = [];
        foreach ($attributes as $name) {
            $links[] = Html::tag('li', $this->sort->link($name, [
                'tabindex' => '-1'
            ]));
        }

        if (empty($this->label))
            $this->label = 'Sort';

        return \yii\bootstrap\ButtonDropdown::widget([
            'label' => $this->label,
            'dropdown' => [
                'items' => $links
            ]
        ]);
    }
}
