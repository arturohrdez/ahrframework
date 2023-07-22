<?php
declare(strict_types = 1);
namespace Mezon\Router\Tests\Simple;

use Mezon\Router\RouterInterface;
use Mezon\Router\SimpleRouter;
use Mezon\Router\Tests\Base\UnexistingRouteTestClass;

/**
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
class UnexistingRouteUnitTest extends UnexistingRouteTestClass
{

    /**
     *
     * {@inheritdoc}
     * @see UnexistingRouteTestClass::getRouter()
     */
    protected function getRouter(): RouterInterface
    {
        return new SimpleRouter();
    }
}
