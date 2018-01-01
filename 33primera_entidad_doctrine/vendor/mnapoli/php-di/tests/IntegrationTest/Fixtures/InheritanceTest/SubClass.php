<?php
/**
 * PHP-DI
 *
 * @link      http://php-di.org/
 * @copyright Matthieu Napoli (http://mnapoli.fr/)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE file)
 */

namespace DI\Test\IntegrationTest\Fixtures\InheritanceTest;

use DI\Annotation\Inject;

/**
 * Fixture class
 */
class SubClass extends BaseClass
{
    /**
     * @Inject
     * @var Dependency
     */
    public $property4;
}
