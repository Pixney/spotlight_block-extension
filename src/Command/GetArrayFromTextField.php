<?php 

namespace Pixney\SpotlightBlockExtension\Command;

/**
 * Class GetArrayFromTextField
 *
 *  @author Pixney AB <hello@pixney.com>
 *  @author William Åström <william@pixney.com>
 *
 *  @link https://pixney.com
 */
class GetArrayFromTextField
{
    protected $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function handle()
    {
        $array = [];
        $lines = explode("\r\n", $this->string);

        foreach ($lines as $line) {
            $line = str_replace("\r", '', $line);
            $line = str_replace("\n", '', $line);

            if (strlen(trim($line)) != 0) {
                list($key, $value) = explode(':', $line);

                // Remove empty space from value and make it an integer
                $value = str_replace(' ', '', $value);
                $value = $value;

                // Remove spaces from key
                $key = trim($key);

                $array[$key]= $value;
            }
        }

        return $array;
    }
}
