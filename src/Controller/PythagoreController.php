<?php

namespace App\Controller;

use App\Service\PythagoreUtility;  
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PythagoreController extends AbstractController
{
    private $pythagoreUtility;

    
    public function __construct(PythagoreUtility $pythagoreUtility)
    {
        $this->pythagoreUtility = $pythagoreUtility;  
    }

    
    #[Route('/pythagore/view', name: 'display_pythagore')]

    public function displayPythagoreAction(): Response
    {
        
        $pythagoreTable = $this->pythagoreUtility->display();

        return $this->render('pythagore/displayPythagore.html.twig', [
            'pythagoreTable' => $pythagoreTable,  
        ]);
    }
}
