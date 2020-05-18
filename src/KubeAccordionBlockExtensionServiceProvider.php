<?php namespace Fryiee\KubeAccordionBlockExtension;

use Anomaly\Streams\Platform\Model\AccordionBlock\AccordionBlockSectionsEntryModel;
use Fryiee\KubeAccordionBlockExtension\Block\BlockModel;
use Fryiee\KubeAccordionBlockExtension\Section\SectionModel;
use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\Model\AccordionBlock\AccordionBlockBlocksEntryModel;

/**
 * Class AccordionBlockExtensionServiceProvider
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class KubeAccordionBlockExtensionServiceProvider extends AddonServiceProvider
{

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        AccordionBlockBlocksEntryModel::class => BlockModel::class,
        AccordionBlockSectionsEntryModel::class => SectionModel::class,
    ];

}
