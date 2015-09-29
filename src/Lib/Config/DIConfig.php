<?php

namespace TE923ToMysql\Lib\Config;

use Aura\Di\Config;
use Aura\Di\Container;

class DIConfig extends Config
{
    public function define(Container $di)
    {
        //Define Config
        $di->set('config.settings', $di->lazyNew('TE923ToMysql\Lib\Config\Config'));
        $di->params['TE923ToMysql\Lib\Config\Config']['configParser'] = $di->lazyNew('Symfony\Component\Yaml\Yaml');

//        //define doctrine config
//        $di->set('config.doctrine', $di->lazyNew('TE923ToMysql\Lib\Config\Doctrine'), array(
//            $di->lazyGet('config.settings')
//        ));

        $di->params['TE923ToMysql\Lib\Config\Doctrine'] = [
            'config' => $di->lazyGet('config.settings')
        ];

        //define doctrine cache
        $di->set('doctrine.cache', $di->lazy(function () use ($di) {
            /** @var \TE923ToMysql\Lib\Config\Doctrine $doctrineConfig */
            $doctrineConfig = $di->newInstance('TE923ToMysql\Lib\Config\Doctrine');

            switch ($doctrineConfig->getCacheType()) {
                default:
                    return null;
            }
        }));

        //Setup doctrine entity manager
        $di->set('doctrine.entityManager', $di->lazy(array('Doctrine\ORM\EntityManager', 'create'),$di->lazyGet('doctrine.connectionOption') ,$di->lazyGet('doctrine.entityConfig')));

        $di->set('doctrine.connectionOption', $di->lazy(function () use ($di) {
            /** @var \TE923ToMysql\Lib\Config\Doctrine $doctrineConfig */
            $doctrineConfig = $di->newInstance('TE923ToMysql\Lib\Config\Doctrine');
            var_dump($doctrineConfig->getHost());
            return array(
                    'driver'    => $doctrineConfig->getDriver(),
                    'host'      => $doctrineConfig->getHost(),
                    'dbname'    => $doctrineConfig->getDbname(),
                    'user'      => $doctrineConfig->getUser(),
                    'password'  => $doctrineConfig->getPassword(),
            );
        }));

        //Setup doctrine entity config
        $di->set('doctrine.entityConfig', $di->lazy(function () use ($di) {
            /** @var \TE923ToMysql\Lib\Config\Doctrine $doctrineConfig */
            $doctrineConfig = $di->newInstance('TE923ToMysql\Lib\Config\Doctrine');
            $isDevMode = false;
            return \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(
                $doctrineConfig->getEntityPaths(),
                $doctrineConfig->isDebug(),
                $doctrineConfig->getProxyDir(),
                $di->get('doctrine.cache'),
                false
            );
        }));
    }
}
