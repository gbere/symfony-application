<?php

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Action\Search;

use App\Responder\Search\ResultsResponder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class ResultsAction
{
    /**
     * @Route("/search", name="search")
     */
    public function __invoke(Request $request, ResultsResponder $responder): Response
    {
        $query = $request->query->get('query');

        $results = []; // Fetch from domain

        return $responder->__invoke($query, $results);
    }
}
