<?php

namespace Pixney\SpotlightBlockExtension\SelectFieldType;

use Anomaly\SelectFieldType\SelectFieldType;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Pixney\SpotlightBlockExtension\Command\GetArrayFromTextField;
use Anomaly\SettingsModule\Setting\Contract\SettingRepositoryInterface;

/**
 * Class TextColor
 *
 *  @author Pixney AB <hello@pixney.com>
 *  @author William Åström <william@pixney.com>
 *
 *  @link https://pixney.com
 */
class TextColor
{
    use DispatchesJobs;

    public function __construct()
    {
    }

    public function handle(SelectFieldType $fieldType, SettingRepositoryInterface $settings)
    {
        $fieldType->setOptions(
            $this->dispatch(
                new GetArrayFromTextField(
                    $settings->value('pixney.extension.spotlight_block::text_colors')
                )
            )
        );
    }
}
