<?php

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Action;

use App\Responder\HomeResponder;
use Symfony\Component\HttpFoundation\Response;

final class HomeAction
{
    public function __invoke(HomeResponder $responder): Response
    {
        return $responder();
    }
}
