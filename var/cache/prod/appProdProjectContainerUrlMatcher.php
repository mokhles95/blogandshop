<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // wassim_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'WassimBundle\\Controller\\DefaultController::indexAction',  '_route' => 'wassim_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_wassim_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'wassim_homepage'));
            }

            return $ret;
        }
        not_wassim_homepage:

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

        // create_Produit
        if ('/create' === $pathinfo) {
            return array (  '_controller' => 'MokhlesBundle\\Controller\\ProduitController::createAction',  '_route' => 'create_Produit',);
        }

        // update_Produit
        if (0 === strpos($pathinfo, '/update') && preg_match('#^/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_Produit')), array (  '_controller' => 'MokhlesBundle\\Controller\\ProduitController::updateAction',));
        }

        // entity_user_afficher
        if ('/user/afficher' === $pathinfo) {
            return array (  '_controller' => 'EntityBundle:User:afficher',  '_route' => 'entity_user_afficher',);
        }

        // delete_Produit
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_Produit')), array (  '_controller' => 'MokhlesBundle\\Controller\\ProduitController::deleteAction',));
        }

        if (0 === strpos($pathinfo, '/Article')) {
            // entity_Article_afficher
            if ('/Article/afficher' === $pathinfo) {
                return array (  '_controller' => 'EntityBundle:Article:afficher',  '_route' => 'entity_Article_afficher',);
            }

            // entity_Article_ajouter
            if ('/Article/ajouter' === $pathinfo) {
                return array (  '_controller' => 'EntityBundle:Article:ajouter',  '_route' => 'entity_Article_ajouter',);
            }

            // entity_Article_rechercher
            if ('/Article/rechercher' === $pathinfo) {
                return array (  '_controller' => 'EntityBundle:Article:rechercher',  '_route' => 'entity_Article_rechercher',);
            }

            // entity_Article_modifier
            if ('/Article/modifier' === $pathinfo) {
                return array (  '_controller' => 'EntityBundle:Article:modifier',  '_route' => 'entity_Article_modifier',);
            }

            // entity_Article_supprimer
            if ('/Article/supprimer' === $pathinfo) {
                return array (  '_controller' => 'EntityBundle:Article:supprimer',  '_route' => 'entity_Article_supprimer',);
            }

            // entity_Article_trier
            if ('/Article/tri' === $pathinfo) {
                return array (  '_controller' => 'EntityBundle:Article:tri',  '_route' => 'entity_Article_trier',);
            }

        }

        elseif (0 === strpos($pathinfo, '/CategArticle')) {
            // entity_CategArticle_afficher
            if ('/CategArticle/afficher' === $pathinfo) {
                return array (  '_controller' => 'EntityBundle:CategoryArticle:afficher',  '_route' => 'entity_CategArticle_afficher',);
            }

            // entity_CategArticle_ajouter
            if ('/CategArticle/ajouter' === $pathinfo) {
                return array (  '_controller' => 'EntityBundle:CategoryArticle:ajouter',  '_route' => 'entity_CategArticle_ajouter',);
            }

            // entity_CategArticle_rechercher
            if ('/CategArticle/rechercher' === $pathinfo) {
                return array (  '_controller' => 'EntityBundle:CategoryArticle:rechercher',  '_route' => 'entity_CategArticle_rechercher',);
            }

            // entity_CategArticle_modifier
            if ('/CategArticle/modifier' === $pathinfo) {
                return array (  '_controller' => 'EntityBundle:CategoryArticle:modifier',  '_route' => 'entity_CategArticle_modifier',);
            }

            // entity_CategArticle_supprimer
            if ('/CategArticle/supprimer' === $pathinfo) {
                return array (  '_controller' => 'EntityBundle:CategoryArticle:supprimer',  '_route' => 'entity_CategArticle_supprimer',);
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
