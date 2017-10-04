<?php

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Traits;

use Twig\Environment;

trait TwigTrait
{
    /**
     * @var Environment
     */
    private $twig;

    /**
     * @required
     */
    public function setTwig(Environment $twig): self
    {
        $this->twig = $twig;

        return $this;
    }
}
