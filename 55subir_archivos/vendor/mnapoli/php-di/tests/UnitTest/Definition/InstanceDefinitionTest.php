<?php
/**
 * PHP-DI
 *
 * @link      http://php-di.org/
 * @copyright Matthieu Napoli (http://mnapoli.fr/)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE file)
 */

namespace DI\Test\UnitTest\Definition;

use DI\Definition\ObjectDefinition;
use DI\Definition\InstanceDefinition;
use DI\Scope;
use EasyMock\EasyMock;

/**
 * @covers \DI\Definition\InstanceDefinition
 */
class InstanceDefinitionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function should_contain_an_instance()
    {
        $instance = new \stdClass();

        $definition = new InstanceDefinition($instance, EasyMock::mock('DI\Definition\ObjectDefinition'));

        $this->assertSame($instance, $definition->getInstance());
    }

    /**
     * @test
     */
    public function should_contain_an_object_definition()
    {
        $objectDefinition = EasyMock::mock('DI\Definition\ObjectDefinition');

        $definition = new InstanceDefinition(new \stdClass(), $objectDefinition);

        $this->assertSame($objectDefinition, $definition->getObjectDefinition());
    }

    /**
     * @test
     */
    public function should_have_the_prototype_scope()
    {
        $instance = new \stdClass();
        $definition = new InstanceDefinition($instance, EasyMock::mock('DI\Definition\ObjectDefinition'));

        $this->assertEquals(Scope::PROTOTYPE, $definition->getScope());
    }
}
