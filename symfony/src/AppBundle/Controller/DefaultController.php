<?php

namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Entity\Usuario;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/fileuploadhandler/{id}", name="fileuploadhandler",defaults={"id" = null})
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function fileUploadHandler(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:Usuario')->createQueryBuilder('n')
            ->where('n.id ='.$id)
            ->getQuery()
            ->getOneOrNullResult();



        $output = array('uploaded' => false);
        // get the file from the request object
        $file = $request->files->get('file');
        // generate a new filename
        $fileName = md5(uniqid()).'.'.$file->guessExtension();

        // set your uploads directory
        $uploadDir = $this->getParameter('images_directory').'/user_images/';
        if (!file_exists($uploadDir) && !is_dir($uploadDir)) {
            mkdir($uploadDir, 0775, true);
        }
        if ($file->move($uploadDir, $fileName)) {
            // get entity manager
            $em = $this->getDoctrine()->getManager();

            // create and set this mediaEntity

            $user->setPathFoto($fileName);
            // save the uploaded filename to database

            $em->persist($user);
            $em->flush();

            $output['uploaded'] = true;
            $output['path_Foto'] = $fileName;
        };
        return new JsonResponse($output);
    }
}
