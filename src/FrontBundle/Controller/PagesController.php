<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use EntityBundle\Entity\Produit;

class PagesController extends Controller
{
    public function indexAction()
    {
        $NewProduct=$this->getDoctrine()->getRepository( Produit::class)->findAllNew();
        $BestProduct=$this->getDoctrine()->getRepository( Produit::class)->findAllBestSeller();

        return $this->render('@Front/pages/index.html.twig',array('newProduits'=>$NewProduct,'BestProducts'=>$BestProduct));
    }


}
