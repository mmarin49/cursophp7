<?php
/**
 * PHP-DI
 *
 * @link      http://php-di.org/
 * @copyright Matthieu Napoli (http://mnapoli.fr/)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE file)
 */

namespace DI\Test\UnitTest\Definition\Source\Fixtures;

/**
 * Fixture class for the Autowiring tests
 */
class AutowiringFixture
{
    public function __construct(AutowiringFixture $param1, $param2, $param3 = null)
    {
    }
}
