<?php
/**
 * 冒泡排序单元测试。
 *
 * @author    JulyXing <julyxing.io@gmail.com>
 * @copyright © 2016 JulyXing
 * @license   GPL-3.0 +
 */

namespace Sort\BubbleSort\share\test;

use PHPUnit_Framework_TestCase as PHPUnit;
use Sort\BubbleSort\BubbleSort;

final class BubbleSortTest extends PHPUnit
{
    public function testSame()
    {
        $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        $a_row = array(3, 2, 5, 7, 9, 4, 10, 6, 1, 8);
        $a_result = BubbleSort::bubble($a_row);
        
        $this->assertSame($arr, $a_result);
    }
}
