<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    #[Route('/lucky')]
    public function number(): Response
    {
        try {
            $number = random_int(0, 100);
        } catch (\Exception $e) {
            return new Response(status: 500);
        }
    
        return new Response(
            '<html><body>Lucky number: ' . $number . '</body></html>'
        );
    }
}
