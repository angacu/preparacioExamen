<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Eventos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class EventosController extends Controller
{
  /**
   * @Route("/eventos/", name="evento")
   */

    public function allAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Eventos::class);
        $events = $repository->findAll();
        return $this->render('all.html.twig', array('eventos' => $events));
    }

        /**
     * @Route("/evento/{id}", name="evento_id")
     */

    public function buscarEventosporId(Request $request,$id){
      $repository = $this->getDoctrine()->getRepository(Eventos::class);
      $eventosID = $repository->findOneById($id);
      return $this->render('buscarEventos.html.twig', array('eventosID' => $eventosID));
    }

    }
