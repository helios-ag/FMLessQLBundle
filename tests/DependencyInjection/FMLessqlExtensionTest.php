<?php

namespace FM\LessqlBundle\Tests\DependencyInjection;

use FM\LessqlBundle\DependencyInjection\FMLessqlExtension;
use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Yaml\Parser;

/**
 * Class FMLessqExtensionTest.
 */
class FMLessqlExtensionTest extends AbstractExtensionTestCase
{
    protected function getContainerExtensions(): array
    {
        return [
            new FMLessqlExtension(),
        ];
    }

    public function testServices()
    {
        $this->load();
        $this->assertContainerBuilderHasService('fm_lessql.manager');
    }

    public function testMinimumConfiguration()
    {
        $this->container = new ContainerBuilder();
        $loader = new FMLessqlExtension();
        $loader->load([$this->getMinimalConfiguration()], $this->container);
        $this->assertTrue($this->container instanceof ContainerBuilder);
    }

    protected function getMinimalConfiguration(): array
    {
        $yaml = <<<'EOF'
instances:
    default:
      dsn: 'test'
      username: 'user'
      password: 'password'
      options:
          someoption: true
EOF;
        $parser = new Parser();

        return $parser->parse($yaml);
    }
}
