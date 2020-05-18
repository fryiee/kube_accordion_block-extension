<?php namespace Fryiee\KubeAccordionBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Fryiee\KubeAccordionBlockExtension\Block\BlockModel;

/**
 * Class AccordionBlockExtension
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class KubeAccordionBlockExtension extends BlockExtension
{
    
    /**
     * The block category.
     *
     * @var string
     */
    protected $category = 'layout';

    /**
     * This extension provides a Kube Accordion
     * block for the blocks module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.blocks::block.kube_accordion';

    /**
     * The block view.
     *
     * @var string
     */
    protected $view = 'fryiee.extension.kube_accordion_block::content';

    /**
     * The block model.
     *
     * @var string
     */
    protected $model = BlockModel::class;

}
