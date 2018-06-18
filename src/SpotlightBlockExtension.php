<?php

namespace Pixney\SpotlightBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Pixney\SpotlightBlockExtension\Block\BlockModel;

class SpotlightBlockExtension extends BlockExtension
{
    /**
     * This extension provides...
     *
     * This should contain the dot namespace
     * of the addon this extension is for followed
     * by the purpose.variation of the extension.
     *
     * For example anomaly.module.store::gateway.stripe
     *
     * @var null|string
     */
    protected $provides = 'anomaly.module.blocks::block.spotlight';
    protected $model    = BlockModel::class;
    protected $view     = 'pixney.extension.spotlight_block::public/layout';
    protected $wrapper  = 'pixney.extension.spotlight_block::blocks/wrapper';

    public function getView()
    {
        return 'pixney.extension.spotlight_block::public/layout';
        if ($this->block->configuration('something_special')) {
            return 'my_company.extension.awesome_block::alternate_view';
        }

        return $this->view;
    }
}
