<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

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
                'aspect_ratio'  => '16:9',
            ]
        ],
        'content' => [
            'type'              => 'anomaly.field_type.markdown',
            'config'            => [
                'height'  => '300',
            ]
        ],
        'background' => [
            'type'   => 'anomaly.field_type.colorpicker',
            'config' => [
                'default_value' => '#fff',
            ]
        ],
        'color' => [
            'type'   => 'anomaly.field_type.colorpicker',
            'config' => [
                'default_value' => '#fff',
            ]
        ],
        'content_position' => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'options'       => ['content--left'=>'Left', 'content--center'=>'Center', 'content--right'=>'Right'],
                'default_value' => 'content--left',
                'mode'          => 'dropdown'
            ]
        ]
    ];
}
