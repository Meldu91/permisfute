<?php

/* PermisfuteBundle:Default:tarifs.html.twig */
class __TwigTemplate_488d328938b2f2a818c1e4438f00a26be1db139c0dd18d64cbd8070984bb7c43 extends Twig_Template
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
        $__internal_78852423ae9ef4527acb1f2eb02ee7a59c08c3397c2bd117544fb3002ca98b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78852423ae9ef4527acb1f2eb02ee7a59c08c3397c2bd117544fb3002ca98b8f->enter($__internal_78852423ae9ef4527acb1f2eb02ee7a59c08c3397c2bd117544fb3002ca98b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PermisfuteBundle:Default:tarifs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78852423ae9ef4527acb1f2eb02ee7a59c08c3397c2bd117544fb3002ca98b8f->leave($__internal_78852423ae9ef4527acb1f2eb02ee7a59c08c3397c2bd117544fb3002ca98b8f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_4945f4416a78cd1f0d51d5692356974124a1a2cd1cd5f524a0e26423c0408058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4945f4416a78cd1f0d51d5692356974124a1a2cd1cd5f524a0e26423c0408058->enter($__internal_4945f4416a78cd1f0d51d5692356974124a1a2cd1cd5f524a0e26423c0408058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                <span>\$500</span>
                            </li>
                            <li>Accès illimité</li>
                            <li>6 mois de code</li>
                            <li>1 accès à l'examen</li>
                            <li>Cours personnalisés</li>
                            <li>Séance de 10H à 18H</li>
                            <li class=\"plan-action\">
                                <a href=\"\" class=\"btn btn-primary\">S'incrire</a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-sm-4 plan price-two wow fadeInDown\">
                        <ul>
                            <li class=\"heading-two\">
                                <h1>Permis A</h1>
                                <span>\$600</span>
                            </li>
                            <li>15 heures de conduite</li>
                            <li>Parking dédié à Permis Futé</li>
                            <li>1 accès à l'examen</li>
                            <li>Séance de 10H à 18H</li>
                            <li>30euros/heure supplémentaire</li>
                            <li class=\"plan-action\">
                                <a href=\"\" class=\"btn btn-primary\">S'inscrire</a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-sm-4 plan price-three wow fadeInDown\">
                        <img src=";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/ribon_one.png"), "html", null, true);
        echo ">
                        <ul>
                            <li class=\"heading-three\">
                                <h1>Permis B</h1>
                                <span>\$800</span>
                            </li>
                            <li>20 heures de conduite</li>
                            <li>Moniteur dédié</li>
                            <li>1 accès à l'examen</li>
                            <li>Séance de 8H à 20H</li>
                            <li>40euros/heure supplémentaire</li>
                            <li class=\"plan-action\">
                                <a href=\"\" class=\"btn btn-primary\">S'inscrire</a>
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
                        <h3>Company</h3>
                        <ul>
                            <li><a href=\"#\">About us</a></li>
                            <li><a href=\"#\">We are hiring</a></li>
                            <li><a href=\"#\">Meet the team</a></li>
                            <li><a href=\"#\">Copyright</a></li>
                            <li><a href=\"#\">Terms of use</a></li>
                            <li><a href=\"#\">Privacy policy</a></li>
                            <li><a href=\"#\">Contact us</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"widget\">
                        <h3>Support</h3>
                        <ul>
                            <li><a href=\"#\">Faq</a></li>
                            <li><a href=\"#\">Blog</a></li>
                            <li><a href=\"#\">Forum</a></li>
                            <li><a href=\"#\">Documentation</a></li>
                            <li><a href=\"#\">Refund policy</a></li>
                            <li><a href=\"#\">Ticket system</a></li>
                            <li><a href=\"#\">Billing system</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"widget\">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href=\"#\">Web Development</a></li>
                            <li><a href=\"#\">SEO Marketing</a></li>
                            <li><a href=\"#\">Theme</a></li>
                            <li><a href=\"#\">Development</a></li>
                            <li><a href=\"#\">Email Marketing</a></li>
                            <li><a href=\"#\">Plugin Development</a></li>
                            <li><a href=\"#\">Article Writing</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"widget\">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href=\"#\">Adipisicing Elit</a></li>
                            <li><a href=\"#\">Eiusmod</a></li>
                            <li><a href=\"#\">Tempor</a></li>
                            <li><a href=\"#\">Veniam</a></li>
                            <li><a href=\"#\">Exercitation</a></li>
                            <li><a href=\"#\">Ullamco</a></li>
                            <li><a href=\"#\">Laboris</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->
    
";
        
        $__internal_4945f4416a78cd1f0d51d5692356974124a1a2cd1cd5f524a0e26423c0408058->leave($__internal_4945f4416a78cd1f0d51d5692356974124a1a2cd1cd5f524a0e26423c0408058_prof);

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
        return array (  86 => 49,  40 => 5,  34 => 4,  11 => 1,);
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
                                <span>\$500</span>
                            </li>
                            <li>Accès illimité</li>
                            <li>6 mois de code</li>
                            <li>1 accès à l'examen</li>
                            <li>Cours personnalisés</li>
                            <li>Séance de 10H à 18H</li>
                            <li class=\"plan-action\">
                                <a href=\"\" class=\"btn btn-primary\">S'incrire</a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-sm-4 plan price-two wow fadeInDown\">
                        <ul>
                            <li class=\"heading-two\">
                                <h1>Permis A</h1>
                                <span>\$600</span>
                            </li>
                            <li>15 heures de conduite</li>
                            <li>Parking dédié à Permis Futé</li>
                            <li>1 accès à l'examen</li>
                            <li>Séance de 10H à 18H</li>
                            <li>30euros/heure supplémentaire</li>
                            <li class=\"plan-action\">
                                <a href=\"\" class=\"btn btn-primary\">S'inscrire</a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-sm-4 plan price-three wow fadeInDown\">
                        <img src={{ asset('images/ribon_one.png') }}>
                        <ul>
                            <li class=\"heading-three\">
                                <h1>Permis B</h1>
                                <span>\$800</span>
                            </li>
                            <li>20 heures de conduite</li>
                            <li>Moniteur dédié</li>
                            <li>1 accès à l'examen</li>
                            <li>Séance de 8H à 20H</li>
                            <li>40euros/heure supplémentaire</li>
                            <li class=\"plan-action\">
                                <a href=\"\" class=\"btn btn-primary\">S'inscrire</a>
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
                        <h3>Company</h3>
                        <ul>
                            <li><a href=\"#\">About us</a></li>
                            <li><a href=\"#\">We are hiring</a></li>
                            <li><a href=\"#\">Meet the team</a></li>
                            <li><a href=\"#\">Copyright</a></li>
                            <li><a href=\"#\">Terms of use</a></li>
                            <li><a href=\"#\">Privacy policy</a></li>
                            <li><a href=\"#\">Contact us</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"widget\">
                        <h3>Support</h3>
                        <ul>
                            <li><a href=\"#\">Faq</a></li>
                            <li><a href=\"#\">Blog</a></li>
                            <li><a href=\"#\">Forum</a></li>
                            <li><a href=\"#\">Documentation</a></li>
                            <li><a href=\"#\">Refund policy</a></li>
                            <li><a href=\"#\">Ticket system</a></li>
                            <li><a href=\"#\">Billing system</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"widget\">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href=\"#\">Web Development</a></li>
                            <li><a href=\"#\">SEO Marketing</a></li>
                            <li><a href=\"#\">Theme</a></li>
                            <li><a href=\"#\">Development</a></li>
                            <li><a href=\"#\">Email Marketing</a></li>
                            <li><a href=\"#\">Plugin Development</a></li>
                            <li><a href=\"#\">Article Writing</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"widget\">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href=\"#\">Adipisicing Elit</a></li>
                            <li><a href=\"#\">Eiusmod</a></li>
                            <li><a href=\"#\">Tempor</a></li>
                            <li><a href=\"#\">Veniam</a></li>
                            <li><a href=\"#\">Exercitation</a></li>
                            <li><a href=\"#\">Ullamco</a></li>
                            <li><a href=\"#\">Laboris</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->
    
{% endblock %}
", "PermisfuteBundle:Default:tarifs.html.twig", "C:\\wamp64\\www\\permisfute\\src\\Permisfute\\PermisfuteBundle/Resources/views/Default/tarifs.html.twig");
    }
}
