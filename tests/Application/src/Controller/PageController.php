<?php

/*
 * This file is part of the AMP Twig theme.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class PageController
{
    private $twig;

    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    public function __invoke(Request $request) : Response
    {
        return new Response(
            $this->twig->render('page.html.twig', [])
        );
    }
}
