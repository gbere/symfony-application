<?php

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Responder;

use Twig\Environment;

abstract class TwigResponder
{
    protected $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }
}
