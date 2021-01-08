<?php


namespace AppBundle\Controller;

use AppBundle\Entity\Notes;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class NotesController extends Controller

{
    /**
     * @Route("/notes/new")
     */
    public function newAction(){

            $note = new Notes();
            $note->setStatus('fsdds');
            $note->setDesc('hhhs');
            $em = $this->getDoctrine()->getManager();
            $em->persist($note);
            $em->flush();


        return new Response('<html><body>Note created!</body></html>');
}
}