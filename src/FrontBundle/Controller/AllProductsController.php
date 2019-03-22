<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use EntityBundle\Entity\Produit;
use EntityBundle\Entity\CategorieProduit;

use EntityBundle\Entity\PhotoProduit;
class AllProductsController extends Controller
{
    public function readAllAction(Request $request)
    {

        $AllProduct=$this->getDoctrine()->getRepository( Produit::class)->findAll();
        $BestProduct=$this->getDoctrine()->getRepository( Produit::class)->findAllBestSeller();
        $ctaegories=$this->getDoctrine()->getRepository( CategorieProduit::class)->findAll();



        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $AllProduct,
            $request->query->getInt('page', 1)/*page number*/,
            2/*limit per page*/
        );



        return $this->render('@Front/pages/products.html.twig',array('AllProducts'=>$AllProduct,
            'BestProducts'=>$BestProduct,
            'categories'=>$ctaegories,
            'products' => $pagination));
    }

}
