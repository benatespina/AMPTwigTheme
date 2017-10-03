<?php

declare(strict_types=1);

namespace Tests\App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class AmpController
{
    private $twig;

    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    public function __invoke(Request $request) : Response
    {
        return new Response(
            $this->twig->render('my_amp_page.html.twig', [])
        );
    }
}
