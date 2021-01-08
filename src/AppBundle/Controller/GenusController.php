<?php 

namespace AppBundle\Controller;

use AppBundle\Entity\Genus;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{

    /**
     * @Route("/genus/new")
     */
    public function newAction(){

        $genus = new Genus();
        $genus->setName('Luis'.rand(1, 100));
        $genus->setStatus('Active');
        $genus->setFunFact('hola');
        $genus->setSpeciesCount(rand(1,100));
        $genus->setSubFamily('hola,mundo');
        $em = $this->getDoctrine()->getManager();
        $em->persist($genus);
        $em->flush();


        return new Response('<html><body>Genus created!</body></html>');
    }
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