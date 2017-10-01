<?php

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Responder;

use Symfony\Component\HttpFoundation\Response;

final class SearchResponder extends TwigResponder
{
    public function __invoke(string $query, array $results): Response
    {
        return new Response($this->twig->render('search.html.twig', [
            'query' => $query,
            'results' => $results
        ]));
    }
}
