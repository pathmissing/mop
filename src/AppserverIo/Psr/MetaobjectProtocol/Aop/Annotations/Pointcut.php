<?php

/**
 * \AppserverIo\Psr\MetaobjectProtocol\Aop\Annotations\Pointcut
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Bernhard Wick <bw@appserver.io>
 * @copyright 2015 TechDivision GmbH - <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/mop
 * @link      http://www.appserver.io/
 */

namespace AppserverIo\Psr\MetaobjectProtocol\Aop\Annotations;

/**
 * Annotation class which is used to specify a pointcut which gets mapped to the annotated advice
 *
 * @author    Bernhard Wick <bw@appserver.io>
 * @copyright 2015 TechDivision GmbH - <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/mop
 * @link      http://www.appserver.io/
 *
 * @Annotation
 * @Target({"METHOD"})
 */
class Pointcut
{
    /**
     * The annotation which identifies this annotation class
     *
     * @var string
     */
    const ANNOTATION = 'Pointcut';

    /**
     * This method returns the class name as a string
     *
     * @return string
     */
    public static function __getClass()
    {
        return __CLASS__;
    }
}
