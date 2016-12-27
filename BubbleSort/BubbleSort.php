<?php
/**
 * 冒泡排序。
 *
 * @author    JulyXing <julyxing.io@gmail.com>
 * @copyright © 2016 JulyXing
 * @license   GPL-3.0 +
 */

namespace Sort\BubbleSort;

class BubbleSort
{
    /**
     * 冒泡排序方法。
     * 
     * @param  array    $a_row 待排序数组
     * @return array    $a_row 排序后数组
     */
    public function bubble($a_row)
    {
        $i_length = count($a_row);
        for ($ii=1; $ii < $i_length; $ii++) { 
            for ($jj=0; $jj < $i_length - $ii; $jj++) { 
                if ($a_row[$jj] > $a_row[$jj + 1]) {
                    $temp = $a_row[$jj + 1];
                    $a_row[$jj + 1] = $a_row[$jj];
                    $a_row[$jj] = $temp;
                }
            }
        }

        return $a_row;
    }
}
