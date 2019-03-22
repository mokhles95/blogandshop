<?php

namespace FrontBundle\Controller;

use EntityBundle\Entity\CategorieProduit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use EntityBundle\Entity\Produit;
use EntityBundle\Entity\PhotoProduit;


class DetailProduitController extends Controller
{
    public function readByIdAction($id)
    {
        $produit=$this->getDoctrine()->getRepository( Produit::class)->findOneBy(['id'=>$id]);
        $photos=$this->getDoctrine()->getRepository( PhotoProduit::class)->findBy(array('produit'=>$id));
        $ctaegories=$this->getDoctrine()->getRepository( CategorieProduit::class)->findAll();
        $relatedProduct=$this->getDoctrine()->getRepository( Produit::class)->findBy(array('categorie'=>$produit->getCategorie()));
        $BestProduct=$this->getDoctrine()->getRepository( Produit::class)->findAllBestSeller();


        return $this->render('@Front/pages/detailProduit.html.twig',array('produit'=>$produit,
            'photoP'=>$photos,
            'categories'=>$ctaegories,
            'relatedProduct'=>$relatedProduct,
            'BestProducts'=>$BestProduct));
    }

}
