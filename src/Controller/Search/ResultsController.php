<?php

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Controller\Search;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

final class ResultsController
{
    /**
     * @Route("/search", name="search")
     */
    public function __invoke(Request $request, Environment $twig): Response
    {
        $query = $request->query->get('query');

        $results = []; // Fetch from domain

        return new Response($twig->render('search/results.html.twig', [
            'query' => $query,
            'results' => $results,
        ]));
    }
}
