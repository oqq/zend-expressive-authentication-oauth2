<?php
/**
 * @see       https://github.com/zendframework/zend-expressive-authentication-oauth2 for the canonical source repository
 * @copyright Copyright (c) 2017 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   https://github.com/zendframework/zend-expressive-authentication-oauth2/blob/master/LICENSE.md
 *     New BSD License
 */

namespace Zend\Expressive\Authentication\OAuth2\Repository\Pdo;

use Psr\Container\ContainerInterface;

class RefreshTokenRepositoryFactory
{
    public function __invoke(ContainerInterface $container) : RefreshTokenRepository
    {
        return new RefreshTokenRepository(
            $container->get(PdoService::class)
        );
    }
}
