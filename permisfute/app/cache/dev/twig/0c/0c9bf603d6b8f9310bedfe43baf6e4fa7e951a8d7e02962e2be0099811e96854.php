<?php

/* PermisfuteBundle:Default:tarifs.html.twig */
class __TwigTemplate_bc099fe8ff7339eba8c5dd1480667b336fb1b4095b9afafdc161134b6facfb28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "PermisfuteBundle:Default:tarifs.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7ebcfd1c8cd22a629a95189b2223d59682858a9279cfa4ff6b3768669852cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ebcfd1c8cd22a629a95189b2223d59682858a9279cfa4ff6b3768669852cfd->enter($__internal_d7ebcfd1c8cd22a629a95189b2223d59682858a9279cfa4ff6b3768669852cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PermisfuteBundle:Default:tarifs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7ebcfd1c8cd22a629a95189b2223d59682858a9279cfa4ff6b3768669852cfd->leave($__internal_d7ebcfd1c8cd22a629a95189b2223d59682858a9279cfa4ff6b3768669852cfd_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d98010262494829535a9662f2d2a07c8fbd077b1110455559992af8d8208c099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98010262494829535a9662f2d2a07c8fbd077b1110455559992af8d8208c099->enter($__internal_d98010262494829535a9662f2d2a07c8fbd077b1110455559992af8d8208c099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    
    <section class=\"pricing-page\">
        <div class=\"container\">
            <div class=\"center\">  
                <h2>Tarifs</h2>
                <p class=\"lead\">Vous retrouverez ici tous les tarifs de notre école \"Permis Futé\"<br> allant du code de la route au permis de conduire.</p>
            </div>  
            <div class=\"pricing-area text-center\">
                <div class=\"row\">
                    <div class=\"col-sm-4 plan price-one wow fadeInDown\">
                        <ul>
                            <li class=\"heading-one\">
                                <h1>Code de la route</h1>
                                <span>500€</span>
                            </li>
                            <li>Accès illimité</li>
                            <li>6 mois de code</li>
                            <li>1 accès à l'examen</li>
                            <li>Cours personnalisés</li>
                            <li>Séance de 10H à 18H</li>
                            <li class=\"plan-action\">
                                <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_inscription");
        echo "\" class=\"btn btn-primary\">S'incrire</a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-sm-4 plan price-two wow fadeInDown\">
                        <ul>
                            <li class=\"heading-two\">
                                <h1>Permis A</h1>
                                <span>600€</span>
                            </li>
                            <li>15 heures de conduite</li>
                            <li>Parking dédié à Permis Futé</li>
                            <li>1 accès à l'examen</li>
                            <li>Séance de 10H à 18H</li>
                            <li>30euros/heure supplémentaire</li>
                            <li class=\"plan-action\">
                                <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_inscription");
        echo "\" class=\"btn btn-primary\">S'inscrire</a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-sm-4 plan price-three wow fadeInDown\">
                      
                        <ul>
                            <li class=\"heading-three\">
                                <h1>Permis B</h1>
                                <span>800€</span>
                            </li>
                            <li>20 heures de conduite</li>
                            <li>Moniteur dédié</li>
                            <li>1 accès à l'examen</li>
                            <li>Séance de 8H à 20H</li>
                            <li>40euros/heure supplémentaire</li>
                            <li class=\"plan-action\">
                                <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_inscription");
        echo "\" class=\"btn btn-primary\">S'inscrire</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--/pricing-area-->
        </div><!--/container-->
    </section><!--/pricing-page-->

    <section id=\"bottom\">
    <div class=\"container wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Entreprise</h3>
                    <ul>
                        <li><a href=\"#\">à Propos</a></li>
                        <li><a href=\"#\">Copyright</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Support</h3>
                    <ul>
                        <li><a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_services");
        echo "\">Des questions?</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Nos partenaires</h3>
                    <ul>
                        <li><a href=\"http://www.total.fr/\">Total</a></li>
                        <li><a href=\"https://www.renault.fr/\">Renault</a></li>
                        <li><a href=\"http://www.dell.fr/\">DELL</a></li>
                        <li><a href=\"https://www.univ-paris5.fr/\">Université Descartes</a></li>
                        <li><a href=\"http://www.michelin.fr/\">Michelin</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->
        </div>
    </div>
</section><!--/#bottom-->
";
        
        $__internal_d98010262494829535a9662f2d2a07c8fbd077b1110455559992af8d8208c099->leave($__internal_d98010262494829535a9662f2d2a07c8fbd077b1110455559992af8d8208c099_prof);

    }

    public function getTemplateName()
    {
        return "PermisfuteBundle:Default:tarifs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 87,  104 => 61,  83 => 43,  63 => 26,  40 => 5,  34 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layout/layout.html.twig' %}


{% block body %}
    
    <section class=\"pricing-page\">
        <div class=\"container\">
            <div class=\"center\">  
                <h2>Tarifs</h2>
                <p class=\"lead\">Vous retrouverez ici tous les tarifs de notre école \"Permis Futé\"<br> allant du code de la route au permis de conduire.</p>
            </div>  
            <div class=\"pricing-area text-center\">
                <div class=\"row\">
                    <div class=\"col-sm-4 plan price-one wow fadeInDown\">
                        <ul>
                            <li class=\"heading-one\">
                                <h1>Code de la route</h1>
                                <span>500€</span>
                            </li>
                            <li>Accès illimité</li>
                            <li>6 mois de code</li>
                            <li>1 accès à l'examen</li>
                            <li>Cours personnalisés</li>
                            <li>Séance de 10H à 18H</li>
                            <li class=\"plan-action\">
                                <a href=\"{{ path ('permisfute_inscription') }}\" class=\"btn btn-primary\">S'incrire</a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-sm-4 plan price-two wow fadeInDown\">
                        <ul>
                            <li class=\"heading-two\">
                                <h1>Permis A</h1>
                                <span>600€</span>
                            </li>
                            <li>15 heures de conduite</li>
                            <li>Parking dédié à Permis Futé</li>
                            <li>1 accès à l'examen</li>
                            <li>Séance de 10H à 18H</li>
                            <li>30euros/heure supplémentaire</li>
                            <li class=\"plan-action\">
                                <a href=\"{{ path ('permisfute_inscription') }}\" class=\"btn btn-primary\">S'inscrire</a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-sm-4 plan price-three wow fadeInDown\">
                      
                        <ul>
                            <li class=\"heading-three\">
                                <h1>Permis B</h1>
                                <span>800€</span>
                            </li>
                            <li>20 heures de conduite</li>
                            <li>Moniteur dédié</li>
                            <li>1 accès à l'examen</li>
                            <li>Séance de 8H à 20H</li>
                            <li>40euros/heure supplémentaire</li>
                            <li class=\"plan-action\">
                                <a href=\"{{ path ('permisfute_inscription') }}\" class=\"btn btn-primary\">S'inscrire</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--/pricing-area-->
        </div><!--/container-->
    </section><!--/pricing-page-->

    <section id=\"bottom\">
    <div class=\"container wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Entreprise</h3>
                    <ul>
                        <li><a href=\"#\">à Propos</a></li>
                        <li><a href=\"#\">Copyright</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Support</h3>
                    <ul>
                        <li><a href=\"{{ path ('permisfute_services') }}\">Des questions?</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Nos partenaires</h3>
                    <ul>
                        <li><a href=\"http://www.total.fr/\">Total</a></li>
                        <li><a href=\"https://www.renault.fr/\">Renault</a></li>
                        <li><a href=\"http://www.dell.fr/\">DELL</a></li>
                        <li><a href=\"https://www.univ-paris5.fr/\">Université Descartes</a></li>
                        <li><a href=\"http://www.michelin.fr/\">Michelin</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->
        </div>
    </div>
</section><!--/#bottom-->
{% endblock %}", "PermisfuteBundle:Default:tarifs.html.twig", "C:\\wamp64\\www\\permisfute\\src\\Permisfute\\PermisfuteBundle/Resources/views/Default/tarifs.html.twig");
    }
}
