<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class PixneyExtensionSpotlightBlockCreateBlocksStream extends Migration
{
    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'          => 'blocks',
         'title_column' => 'content',
         'translatable' => false,
         'trashable'    => false,
         'searchable'   => false,
         'sortable'     => false,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'image', 'content', 'background', 'content_position', 'color'
    ];
}
