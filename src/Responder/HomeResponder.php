<?php

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Responder;

use Symfony\Component\HttpFoundation\Response;

final class HomeResponder extends TwigResponder
{
    public function __invoke(): Response
    {
        return new Response($this->twig->render('home.html.twig'));
    }
}
