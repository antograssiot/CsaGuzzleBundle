<?php

/*
 * This file is part of the CsaGuzzleBundle package
 *
 * (c) Charles Sarrazin <charles@sarraz.in>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code
 */

namespace Csa\Bundle\GuzzleBundle\Description\Loader;

/**
 * Loads descriptions from JSON files.
 *
 * @author Charles Sarrazin <charles@sarraz.in>
 */
class JsonLoader implements LoaderInterface
{
    /**
     * @inheritdoc
     */
    public function load($resource)
    {
        return json_decode(file_get_contents($resource), true);
    }

    /**
     * @inheritdoc
     */
    public function supports($resource)
    {
        return 'json' === pathinfo($resource, PATHINFO_EXTENSION);
    }
}