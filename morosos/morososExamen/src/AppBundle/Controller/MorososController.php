<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Morosos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class MorososController extends Controller
{
  /**
   * @Route("/morosos/", name="morosos")
   */

    public function allAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Morosos::class);
        $morosos = $repository->findAll();
        return $this->render('all.html.twig', array('morosos' => $morosos));
    }

        /**
     * @Route("/moroso/{id}", name="moroso_id")
     */

    public function buscarEventosporId(Request $request,$id){
      $repository = $this->getDoctrine()->getRepository(Morosos::class);
      $morososID = $repository->findOneById($id);
      return $this->render('buscarMorosos.html.twig', array('morososID' => $morososID));
    }

    }
