<?php
/**
 * PHP-DI
 *
 * @link      http://php-di.org/
 * @copyright Matthieu Napoli (http://mnapoli.fr/)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE file)
 */

namespace DI\Test\UnitTest\Annotation\Fixtures;

class NonImportedInjectFixture
{
    /**
     * @Inject("foo")
     */
    protected $property1;
}
