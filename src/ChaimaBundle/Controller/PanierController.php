<?php
/**
 * Created by PhpStorm.
 * User: chaym
 * Date: 12/24/2018
 * Time: 7:33 PM
 */

namespace ChaimaBundle\Controller;



use EntityBundle\Entity\Commande;

use EntityBundle\Entity\Produit;
use EntityBundle\Entity\DetailCommande;
use EntityBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\Date;

class PanierController extends Controller
{
    public function AjouterAction(Request $request, $id )
    {
        $session = $this->get('session');

                        $t=$request->get('product_size');
        if (!$session->has('panier')){
            $session->set('panier',array(array()));
            $panier['taille'][0]=$t ;
        }
        $panier = $session->get('panier');




        if (array_key_exists($id, $panier)) {
            if ($request->get('qte') != null){
                $n= $request->get('qte')+sizeof($panier[$id]);
                for( $i=sizeof($panier[$id]); $i<$n ; $i++)
                {
                    //$panier[$id][$i]="t";
                    array_push($panier[$id],$t) ;
                    //$panier[$id]=$request->get('product_size') ;

                }
                //$panier[$id] = $request->get('qte') ;


               // $this->get('session')->getFlashBag()->add('success','Quantité modifié avec succès');
            }
            else {
               // $panier[$id] = $panier[$id] + 1;
                array_push($panier[$id], $t) ;

            }
        } else {
            if ($request->get('qte') != null){
                //$panier[$id] = $request->get('qte');
                $panier[$id]= array();
                for( $i=0; $i<$request->get('qte') ; $i++)
                {

                    array_push($panier[$id],$t) ;


                }
                $this->get('session')->getFlashBag()->add('success','qte ajouté avec succès');
            }
            else{
                //$panier[$id] = 1;
                $panier[$id]= array();
                array_push($panier[$id], $t) ;

                $this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
            }
        }

        $session->set('panier',$panier);

        $loader = new \Twig_Loader_Filesystem();
        $twig = new \Twig_Environment($loader);
        $twig->addGlobal('panier', $session->get('panier'));


        return $this->redirect($this->generateUrl('panier_index'));

    }


    public function BasketAction()
    {
        $session = $this->get('session');



        if (!$session->has('panier')) $session->set('panier',array());

        $em = $this->getDoctrine()->getManager();

        $produits = $em->getRepository('EntityBundle:Produit')->findArray(array_keys($session->get('panier')));
        $a=1;
        $addresses= $em->getRepository('EntityBundle:Commande')->findAddresses($a);

       /* $this->render('@Front/layout.html.twig', array(
            'produits' => $produits, 'panier' => $session->get('panier') ));  */

       return $this->render('@Front/pages/cart.html.twig', array(
            'produits' => $produits, 'panier' => $session->get('panier'), 'adresses' => $addresses ));
    }


                public function CheckoutAction()
                {
                    return $this->render('@Front/pages/checkout.html.twig');
                }
    public function SupprimmerAction($id,$ps )
    {
        $session = $this->get('session');
        $panier = $session->get('panier');

        if (array_key_exists($id, $panier))
        {

           array_splice($panier[$id],$ps);
                    if ($ps==0)
                    {
                        unset ($panier[$id]) ;
                    }


            $session->set('panier',$panier);


        }

        return $this->redirect($this->generateUrl('panier_index'));
    }

    public function PassAction(Request $request , $total)
    {
        $session = $this->get('session');
        $addresses=$request->get('address_id')." ".$request->get('address_1')." ".$request->get('address_2')." ".$request->get('country_id')." ".$request->get('city')." ".$request->get('postcode');
        $panier = $session->get('panier');
       // $user= $session->get('user') ;
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EntityBundle:Produit')->findArray(array_keys($session->get('panier')));
        $commande = new Commande();
        $em2 = $this->getDoctrine()->getManager();
        $commande->setEtat('Pending');
      // $u = $this->container->get('security.token_storage')->getToken()->getUser();
            //$user=$session->get('id');
       // $user=$em->getRepository('EntityBundle:User')->findOneBy(array('id'=>$u));
$user= $this->getUser();

        $d= date_create() ;
        $commande->setDate($d);

        //$user= $this->get('security.token_storage')->getToken()->getUser() ;
        $e = $this->getDoctrine()->getManager();
            //$u= $e->getRepository('EntityBundle:User')->findBy(array('nom'=>$user)) ;

         $commande->setUser($user);
        $commande->setTotal($total);
        $commande->setAddress($addresses) ;
        $em2->persist($commande);
        $em2->flush();
        foreach ($produits as $p){
            for ($i=0 ; $i<sizeof($panier[$p->getId()]); $i++)
            {
            $detailC = new DetailCommande();
            $detailC->setProduit($p);
            $detailC->setCouleur($p->getCouleur()) ;
            $detailC->setTaille($panier[$p->getId()][$i]) ;
            $detailC->setQte(sizeof($panier[$p->getId()] ));
            $detailC->setCommande($commande);
            $em1 = $this->getDoctrine()->getManager();
            $em1->persist($detailC);
            $em1->flush();
        }
            }


        $em3= $this->getDoctrine()->getManager();
        $dc = $em3->getRepository('EntityBundle:DetailCommande')
            ->findby(['commande'=>$commande]);
        $session->remove('panier');
        /*$this->get('knp_snappy.pdf')->generateFromHtml(
            $this->renderView(
                'ProductBundle:Commande:Facture.html.twig',
                array(
                    'dc'  => $dc,
                    'c'=>$commande,
                )
            ),
            'Facture'.$commande->getIdCommande().'.pdf'
        );*/

        return $this->render('commande/show.html.twig',
            array('commande'=>$commande));




    }


















}