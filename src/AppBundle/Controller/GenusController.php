<?php 

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{
/**
 * @Route("/genus/{genusName}")
 */
	public function showAction($genusName)
	{
		$notes =[
			'holaa, los calamares dicen hola',
			'se dice que son buena honda xd',
			'inked'
		];

        return $this->render('genus/show.html.twig', array(
            'name' => $genusName,
            'notes' => $notes 
        ));

		// return new Response($html);
	}
}

 ?>