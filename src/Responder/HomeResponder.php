<?php

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Responder;

use App\Traits\TemplatingTrait;
use Symfony\Component\HttpFoundation\Response;

final class HomeResponder
{
    use TemplatingTrait;

    public function __invoke(): Response
    {
        return new Response($this->templating->render('home.html.twig'));
    }
}
