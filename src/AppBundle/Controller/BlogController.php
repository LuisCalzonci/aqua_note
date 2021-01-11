<?php


namespace AppBundle\Controller;

use AppBundle\Entity\Blog;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;



class BlogController extends Controller
{

    /**
     * @Route("/blog/create", name="blog_create")
     */
    public function createAction()
    {
        $blog = new Blog();
        $blog->setCategory('122');
        $blog->setTitle('welcome');
        $blog->setSlug('my');
        $blog->setContent('lorem ipsum...');
        $blog->setCreated('Y-m-d H:i:s');
        $blog->setModified('s');

        $em = $this->getDoctrine()->getManager();

        // Indicamos que queremos guardar este registro.
        $em->persist($blog);

        // Ejecuta las querys de las operaciones indicadas.
        $em->flush();

        return new Response('Saved new $blog entry with id '.$blog->getId());
    }



    /**
     * @Route("/blog/{page}", name="blog_list", requirements={"page": "\d+"})
     */
    public function listAction($page=1)
    {
        return new Response(
            '<html><body>Showing page number: '.$page.'</body></html>'
        );
    }

    /**
     * @Route("/read/{slug}", name="blog_read", requirements={"slug": "\S+"})
     */
    public function readAction($slug)
    {
        $blog = $this->getDoctrine()
            ->getRepository('AppBundle:Blog')
            ->findOneBySlug($slug);

        if (!$blog) {
            throw $this->createNotFoundException(
                'No blog entry found for '.$slug
            );
        } else {
            return new Response('<h1>'.$blog->getTitle().'</h1><br>'.$blog->getContent());
        }
    }

    /**
     * @Route("/blog/update/{blogId}", name="blog_update", requirements={"blogId": "\d+"})
     */
    public function updateAction($blogId)
    {
        $em   = $this->getDoctrine()->getManager();
        $blog = $em->getRepository('AppBundle:Blog')->find($blogId);

        if (!$blog) {
            throw $this->createNotFoundException(
                'No post found for id '.$blogId
            );
        }

        $blog->setTitle('Updated blog entry!');
        $em->flush();

        return $this->redirectToRoute('blog_list');
    }
    /**
     * @Route("/blog/delete/{blogId}", name="blog_delete", requirements={"blogId": "\d+"})
     */
    public function deleteAction($blogId)
    {
        $em   = $this->getDoctrine()->getManager();
        $blog = $em->getRepository('AppBundle:Blog')->find($blogId);

        if (!$blog) {
            throw $this->createNotFoundException(
                'No post found for id '.$blogId
            );
        }

        $em->remove($blog);
        $em->flush();

        return $this->redirectToRoute('blog_list');
    }
}