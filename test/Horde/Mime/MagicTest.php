<?php
/**
 * Tests for the Horde_Mime_Magic class.
 *
 * Copyright 2010-2013 Horde LLC (http://www.horde.org/)
 *
 * @author     Michael Slusarz <slusarz@horde.org>
 * @category   Horde
 * @license    http://www.horde.org/licenses/lgpl21 LGPL 2.1
 * @package    Mime
 * @subpackage UnitTests
 */

/**
 * @author     Michael Slusarz <slusarz@horde.org>
 * @category   Horde
 * @license    http://www.horde.org/licenses/lgpl21 LGPL 2.1
 * @package    Mime
 * @subpackage UnitTests
 */
class Horde_Mime_MagicTest extends PHPUnit_Framework_TestCase
{
    public function testBug325()
    {
        if (!extension_loaded('fileinfo')) {
            $this->markTestSkipped('The fileinfo extension is not available.');
        }

        $this->assertEquals(
            'text/plain',
            Horde_Mime_Magic::analyzeFile(__DIR__ . '/fixtures/flowed_msg.txt')
        );
    }

}
