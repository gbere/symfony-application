<?php

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Responder\Search;

use App\Traits\TemplatingTrait;
use Symfony\Component\HttpFoundation\Response;

final class ResultsResponder
{
    use TemplatingTrait;

    public function __invoke(string $query, array $results): Response
    {
        return new Response($this->templating->render('search\results.html.twig', [
            'query' => $query,
            'results' => $results,
        ]));
    }
}
