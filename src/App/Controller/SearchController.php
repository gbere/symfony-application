<?php

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class SearchController
{
    public function __invoke(Request $request, Environment $twig): Response
    {
        $query = $request->query->get('query');

        return new Response($twig->render('search.html.twig', [
            'query' => $query,
            'results' => [],
        ]));
    }
}
