<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Productos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;



class productosController extends Controller
{

  /**
   * @Route("/productos/", name="producto")
   */

   public function mostrarProductos(Request $request){
     $repository = $this->getDoctrine()->getRepository(Productos::class);
     $productos = $repository->findAll();
     return $this->render('product.html.twig', array('productos' => $productos));
   }
 }

  ?>
