<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;
use Pixney\SpotlightBlockExtension\SelectFieldType\TextColor;
use Pixney\SpotlightBlockExtension\SelectFieldType\BackgroundColor;

class PixneyExtensionSpotlightBlockCreateSpotlightBlockFields extends Migration
{
    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'image'     => [
            'type'   => 'anomaly.field_type.image',
            'config' => [
                'aspect_ratio'  => '1:1',
            ]
        ],
        'content' => [
            'type'              => 'anomaly.field_type.wysiwyg',
            'config'            => [
                'height'  => '300',
            ]
        ],
        'background_color' => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'mode'          => 'dropdown',
                'handler'       => BackgroundColor::class
            ]
        ],
        'text_color' => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'mode'          => 'dropdown',
                'handler'       => TextColor::class
            ]
        ],
        'content_position' => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'options'       => ['content--left'=>'Left', 'content--center'=>'Center', 'content--right'=>'Right'],
                'default_value' => 'content--left',
                'mode'          => 'dropdown'
            ]
        ],

        'image_column_size'          => 'anomaly.field_type.text',
        'content_column_size'        => 'anomaly.field_type.text',
        'classname'                  => 'anomaly.field_type.text',
    ];
}
