<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // home_page12
        if ('/index1' === $pathinfo) {
            return array (  '_controller' => 'FrontBundle\\Controller\\PagesController::indexAction',  '_route' => 'home_page12',);
        }

        // detai_produit
        if (preg_match('#^/(?P<id>[^/]++)/detailProduit/?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'detai_produit')), array (  '_controller' => 'FrontBundle\\Controller\\DetailProduitController::readByIdAction',));
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_detai_produit;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'detai_produit'));
            }

            return $ret;
        }
        not_detai_produit:

        // entity_user_afficher
        if ('/user/afficher' === $pathinfo) {
            return array (  '_controller' => 'YosrBundle:User:afficher',  '_route' => 'entity_user_afficher',);
        }

        // update_Produit
        if (0 === strpos($pathinfo, '/update') && preg_match('#^/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_Produit')), array (  '_controller' => 'MokhlesBundle\\Controller\\ProduitController::updateAction',));
        }

        if (0 === strpos($pathinfo, '/Article')) {
            // entity_Article_afficher
            if ('/Article/afficher' === $pathinfo) {
                return array (  '_controller' => 'YosrBundle\\Controller\\ArticleController::afficherAction',  '_route' => 'entity_Article_afficher',);
            }

            // entity_Article_ajouter
            if ('/Article/ajouter' === $pathinfo) {
                return array (  '_controller' => 'YosrBundle\\Controller\\ArticleController::ajouterAction',  '_route' => 'entity_Article_ajouter',);
            }

            // entity_Article_rechercher
            if ('/Article/rechercher' === $pathinfo) {
                return array (  '_controller' => 'YosrBundle\\Controller\\ArticleController::rechercherAction',  '_route' => 'entity_Article_rechercher',);
            }

            // entity_Article_modifier
            if ('/Article/modifier' === $pathinfo) {
                return array (  '_controller' => 'YosrBundle\\Controller\\ArticleController::modifierAction',  '_route' => 'entity_Article_modifier',);
            }

            // entity_Article_supprimer
            if ('/Article/supprimer' === $pathinfo) {
                return array (  '_controller' => 'YosrBundle\\Controller\\ArticleController::supprimerAction',  '_route' => 'entity_Article_supprimer',);
            }

            // entity_Article_trier
            if ('/Article/tri' === $pathinfo) {
                return array (  '_controller' => 'YosrBundle\\Controller\\ArticleController::triAction',  '_route' => 'entity_Article_trier',);
            }

        }

        elseif (0 === strpos($pathinfo, '/CategArticle')) {
            // entity_CategArticle_afficher
            if ('/CategArticle/afficher' === $pathinfo) {
                return array (  '_controller' => 'YosrBundle\\Controller\\CategoryArticleController::afficherAction',  '_route' => 'entity_CategArticle_afficher',);
            }

            // entity_CategArticle_ajouter
            if ('/CategArticle/ajouter' === $pathinfo) {
                return array (  '_controller' => 'YosrBundle\\Controller\\CategoryArticleController::ajouterAction',  '_route' => 'entity_CategArticle_ajouter',);
            }

            // entity_CategArticle_rechercher
            if ('/CategArticle/rechercher' === $pathinfo) {
                return array (  '_controller' => 'YosrBundle\\Controller\\CategoryArticleController::rechercherAction',  '_route' => 'entity_CategArticle_rechercher',);
            }

            // entity_CategArticle_modifier
            if ('/CategArticle/modifier' === $pathinfo) {
                return array (  '_controller' => 'YosrBundle\\Controller\\CategoryArticleController::modifierAction',  '_route' => 'entity_CategArticle_modifier',);
            }

            // entity_CategArticle_supprimer
            if ('/CategArticle/supprimer' === $pathinfo) {
                return array (  '_controller' => 'YosrBundle\\Controller\\CategoryArticleController::supprimerAction',  '_route' => 'entity_CategArticle_supprimer',);
            }

        }

        // seif_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'SeifBundle\\Controller\\DefaultController::indexAction',  '_route' => 'seif_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_seif_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'seif_homepage'));
            }

            return $ret;
        }
        not_seif_homepage:

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/profile')) {
                // fos_user_profile_show
                if ('/profile' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_profile_show;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_profile_show;
                    }

                    return $ret;
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ('/profile/edit' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_profile_edit;
                    }

                    return $ret;
                }
                not_fos_user_profile_edit:

                // fos_user_change_password
                if ('/profile/change-password' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_change_password;
                    }

                    return $ret;
                }
                not_fos_user_change_password:

            }

            elseif (0 === strpos($pathinfo, '/photo')) {
                // read_Photo
                if ('/photo/read' === $pathinfo) {
                    return array (  '_controller' => 'MokhlesBundle\\Controller\\PhotoProduitController::readAction',  '_route' => 'read_Photo',);
                }

                // create_Photo
                if ('/photo/create' === $pathinfo) {
                    return array (  '_controller' => 'MokhlesBundle\\Controller\\PhotoProduitController::createAction',  '_route' => 'create_Photo',);
                }

                // update_Photo
                if (0 === strpos($pathinfo, '/photo/update') && preg_match('#^/photo/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_Photo')), array (  '_controller' => 'MokhlesBundle\\Controller\\PhotoProduitController::updateAction',));
                }

                // delete_Photo
                if (0 === strpos($pathinfo, '/photo/delete') && preg_match('#^/photo/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_Photo')), array (  '_controller' => 'MokhlesBundle\\Controller\\PhotoProduitController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/panier')) {
                // panier_index
                if ('/panier' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'ChaimaBundle\\Controller\\PanierController::BasketAction',  '_route' => 'panier_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_panier_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'panier_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_panier_index;
                    }

                    return $ret;
                }
                not_panier_index:

                // show_panier
                if ('/panier/shpanier' === $pathinfo) {
                    return array (  '_controller' => 'ChaimaBundle\\Controller\\PanierController::BasketAction',  '_route' => 'show_panier',);
                }

                // P_ajouter
                if (preg_match('#^/panier/(?P<id>[^/]++)/Ajouter$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'P_ajouter')), array (  '_controller' => 'ChaimaBundle\\Controller\\PanierController::AjouterAction',));
                }

                // P_supprimmer
                if (preg_match('#^/panier/(?P<id>[^/]++)/(?P<ps>[^/]++)/Supprimmer$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'P_supprimmer')), array (  '_controller' => 'ChaimaBundle\\Controller\\PanierController::SupprimmerAction',));
                }

                // P_pass
                if (preg_match('#^/panier/(?P<total>[^/]++)/Pass$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'P_pass')), array (  '_controller' => 'ChaimaBundle\\Controller\\PanierController::PassAction',));
                }

                // P_checkout
                if ('/panier/checkout' === $pathinfo) {
                    return array (  '_controller' => 'ChaimaBundle\\Controller\\PanierController::CheckoutAction',  '_route' => 'P_checkout',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_registration_register;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                    }

                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_registration_register;
                    }

                    return $ret;
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_registration_check_email;
                    }

                    return $ret;
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_resetting_request;
                    }

                    return $ret;
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $ret;
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_fos_user_resetting_send_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_check_email:

            }

            // read_Produit
            if ('/read' === $pathinfo) {
                return array (  '_controller' => 'MokhlesBundle\\Controller\\ProduitController::readAction',  '_route' => 'read_Produit',);
            }

        }

        // sofiene_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'SofieneBundle\\Controller\\DefaultController::indexAction',  '_route' => 'sofiene_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_sofiene_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'sofiene_homepage'));
            }

            return $ret;
        }
        not_sofiene_homepage:

        if (0 === strpos($pathinfo, '/authorizedcomments')) {
            // authorized_comments_afficher
            if ('/authorizedcomments' === $pathinfo) {
                return array (  '_controller' => 'WassimBundle\\Controller\\DefaultController::indexAction',  '_route' => 'authorized_comments_afficher',);
            }

            // authorized_comments_edit
            if (0 === strpos($pathinfo, '/authorizedcomments/edit') && preg_match('#^/authorizedcomments/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'authorized_comments_edit')), array (  '_controller' => 'WassimBundle\\Controller\\DefaultController::editAction',));
            }

            // authorized_comments_delete
            if (0 === strpos($pathinfo, '/authorizedcomments/delete') && preg_match('#^/authorizedcomments/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'authorized_comments_delete')), array (  '_controller' => 'WassimBundle\\Controller\\DefaultController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/commenting')) {
                // commenting_system_tester
                if ('/commenting' === $pathinfo) {
                    return array (  '_controller' => 'WassimBundle\\Controller\\CommentingSystemController::indexAction',  '_route' => 'commenting_system_tester',);
                }

                // commenting_system_afficher
                if (0 === strpos($pathinfo, '/commenting/afficher') && preg_match('#^/commenting/afficher/(?P<userid>[^/]++)/(?P<articleid>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commenting_system_afficher')), array (  '_controller' => 'WassimBundle\\Controller\\CommentingSystemController::afficherAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/commande')) {
                // commande_index
                if ('/commande' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'EntityBundle\\Controller\\CommandeController::indexAction',  '_route' => 'commande_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_commande_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'commande_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_commande_index;
                    }

                    return $ret;
                }
                not_commande_index:

                // commande_show
                if (preg_match('#^/commande/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_show')), array (  '_controller' => 'EntityBundle\\Controller\\CommandeController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_commande_show;
                    }

                    return $ret;
                }
                not_commande_show:

                // confirmer
                if (preg_match('#^/commande/(?P<id>[^/]++)/confirmer$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'confirmer')), array (  '_controller' => 'EntityBundle\\Controller\\CommandeController::ConfirmerAction',));
                }

            }

            // create_Produit
            if ('/create' === $pathinfo) {
                return array (  '_controller' => 'MokhlesBundle\\Controller\\ProduitController::createAction',  '_route' => 'create_Produit',);
            }

        }

        // chaima_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'ChaimaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'chaima_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_chaima_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'chaima_homepage'));
            }

            return $ret;
        }
        not_chaima_homepage:

        // mokhles_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'MokhlesBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mokhles_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_mokhles_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'mokhles_homepage'));
            }

            return $ret;
        }
        not_mokhles_homepage:

        // delete_Produit
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_Produit')), array (  '_controller' => 'MokhlesBundle\\Controller\\ProduitController::deleteAction',));
        }

        if (0 === strpos($pathinfo, '/detailcommande')) {
            // detailcommande_index
            if ('/detailcommande' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'EntityBundle\\Controller\\DetailCommandeController::indexAction',  '_route' => 'detailcommande_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_detailcommande_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'detailcommande_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_detailcommande_index;
                }

                return $ret;
            }
            not_detailcommande_index:

            // detailcommande_show
            if (preg_match('#^/detailcommande/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'detailcommande_show')), array (  '_controller' => 'EntityBundle\\Controller\\DetailCommandeController::showAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_detailcommande_show;
                }

                return $ret;
            }
            not_detailcommande_show:

            // detailcommande_new
            if ('/detailcommande/new' === $pathinfo) {
                $ret = array (  '_controller' => 'EntityBundle\\Controller\\DetailCommandeController::newAction',  '_route' => 'detailcommande_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_detailcommande_new;
                }

                return $ret;
            }
            not_detailcommande_new:

            // detailcommande_edit
            if (preg_match('#^/detailcommande/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'detailcommande_edit')), array (  '_controller' => 'EntityBundle\\Controller\\DetailCommandeController::editAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_detailcommande_edit;
                }

                return $ret;
            }
            not_detailcommande_edit:

            // detailcommande_delete
            if (preg_match('#^/detailcommande/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'detailcommande_delete')), array (  '_controller' => 'EntityBundle\\Controller\\DetailCommandeController::deleteAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_detailcommande_delete;
                }

                return $ret;
            }
            not_detailcommande_delete:

            // details
            if (preg_match('#^/detailcommande/(?P<id>[^/]++)/details$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'details')), array (  '_controller' => 'EntityBundle\\Controller\\DetailCommandeController::DetailsAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/taille')) {
            // read_Taille
            if ('/taille/read' === $pathinfo) {
                return array (  '_controller' => 'MokhlesBundle\\Controller\\TailleProduitController::readAction',  '_route' => 'read_Taille',);
            }

            // create_Taille
            if ('/taille/create' === $pathinfo) {
                return array (  '_controller' => 'MokhlesBundle\\Controller\\TailleProduitController::createAction',  '_route' => 'create_Taille',);
            }

            // archiver_Taille
            if (0 === strpos($pathinfo, '/taille/archiver') && preg_match('#^/taille/archiver/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'archiver_Taille')), array (  '_controller' => 'MokhlesBundle\\Controller\\TailleProduitController::archiverAction',));
            }

            // desarchiver_Taille
            if (0 === strpos($pathinfo, '/taille/desarchiver') && preg_match('#^/taille/desarchiver/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'desarchiver_Taille')), array (  '_controller' => 'MokhlesBundle\\Controller\\TailleProduitController::desarchiverAction',));
            }

            // delete_Taille
            if (0 === strpos($pathinfo, '/taille/delete') && preg_match('#^/taille/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_Taille')), array (  '_controller' => 'MokhlesBundle\\Controller\\TailleProduitController::deleteAction',));
            }

        }

        // entity_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'EntityBundle\\Controller\\DefaultController::indexAction',  '_route' => 'entity_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_entity_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'entity_homepage'));
            }

            return $ret;
        }
        not_entity_homepage:

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
