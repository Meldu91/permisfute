<?php

/* PermisfuteBundle:Default:index.html.twig */
class __TwigTemplate_e8e392aeea6353edbcd323a8ab8cc8f058bd2378ad2e85d6aef58132cec64add extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "PermisfuteBundle:Default:index.html.twig", 1);
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
        $__internal_a95ced80b769be1c86d49011cda3c46f63d1a1c62fe01902dbcf351444506bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a95ced80b769be1c86d49011cda3c46f63d1a1c62fe01902dbcf351444506bf4->enter($__internal_a95ced80b769be1c86d49011cda3c46f63d1a1c62fe01902dbcf351444506bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PermisfuteBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a95ced80b769be1c86d49011cda3c46f63d1a1c62fe01902dbcf351444506bf4->leave($__internal_a95ced80b769be1c86d49011cda3c46f63d1a1c62fe01902dbcf351444506bf4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb591c71e6d4852be57a0ff030e0f995005110f64fa3ef8fad638b7d27690d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb591c71e6d4852be57a0ff030e0f995005110f64fa3ef8fad638b7d27690d6e->enter($__internal_fb591c71e6d4852be57a0ff030e0f995005110f64fa3ef8fad638b7d27690d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <section id=\"about-us\">
        <div class=\"container\">
            <div class=\"center wow fadeInDown\">
                <h2>Bienvenue sur Permis Futé !</h2>
                <p class=\"lead\">Auto-école spécialisé dans permis A et permis B<br> depuis 2002.</p>
            </div>
            <div>
                <img src=";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/slider_one.jpg"), "html", null, true);
        echo " > 
            </div>
        </div>
    </div><!--/.container-->
</section><!--/about-us-->

<section id=\"services\" class=\"service-item\">
    <div class=\"container\">
        <div class=\"center wow fadeInDown\">
            <h2>Nos services</h2>
            <p class=\"lead\">C'est ici que vous pourrez retrouver tous <br> les services de Permis futé.</p>
        </div>

        <div class=\"row\">

            <div class=\"col-sm-6 col-md-4\">
                <div class=\"media services-wrap wow fadeInDown\">
                    <div class=\"pull-left\">
                        <img class=\"img-responsive\" src=";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/services/services1.png"), "html", null, true);
        echo ">
                    </div>
                    <div class=\"media-body\">
                        <h3 class=\"media-heading\">Code de la route</h3>
                        <p>Passez votre code de la route grâce à nos cours et séances à résultats directs.</p>
                        <a href=\"../Permisfute/services\">Plus d'informations</a>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-md-4\">
                <div class=\"media services-wrap wow fadeInDown\">
                    <div class=\"pull-left\">
                        <img class=\"img-responsive\" src=";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/services/services2.png"), "html", null, true);
        echo ">
                    </div>
                    <div class=\"media-body\">
                        <h3 class=\"media-heading\">Permis B</h3>
                        <p>Passez votre permis B auprès de nos 2 moniteurs très expérimentés.</p>
                        <a href=\"../Permisfute/services\">Plus d'informations</a>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-md-4\">
                <div class=\"media services-wrap wow fadeInDown\">
                    <div class=\"pull-left\">
                        <img class=\"img-responsive\" src=";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/services/services3.png"), "html", null, true);
        echo ">
                    </div>
                    <div class=\"media-body\">
                        <h3 class=\"media-heading\">Permis A</h3>
                        <p>Passez votre permis A avec un moniteur spécialisé dans ce permis.</p>
                        <a href=\"../Permisfute/services\">Plus d'informations</a>
                    </div>
                </div>
            </div>             
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#services-->

<section id=\"partner\">
    <div class=\"container\">
        <div class=\"center wow fadeInDown\">
            <h2>Nos partenaires</h2>
            <p class=\"lead\">C'est ici que sont répertoriés <br> tous nos partenaires</p>
        </div>    

        <div class=\"partners\">
            <ul>
                <li> <a href=\"http://www.total.fr/\"><img class=\"img-responsive wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\" src=";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/partners/partner1.png"), "html", null, true);
        echo "></a></li>
                <li> <a href=\"https://www.renault.fr/\"><img class=\"img-responsive wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\" src=";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/partners/partner2.png"), "html", null, true);
        echo "></a></li>
                <li> <a href=\"http://www.dell.fr/\"><img class=\"img-responsive wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"900ms\" src=";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/partners/partner3.png"), "html", null, true);
        echo "></a></li>
                <li> <a href=\"https://www.univ-paris5.fr/\"><img class=\"img-responsive wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"1200ms\" src=";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/partners/partner4.png"), "html", null, true);
        echo "></a></li>
                <li> <a href=\"http://www.michelin.fr/\"><img class=\"img-responsive wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"1500ms\" src=";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/partners/partner5.png"), "html", null, true);
        echo "></a></li>
            </ul>
        </div>        
    </div><!--/.container-->
</section><!--/#partner-->

<section id=\"conatcat-info\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8\">
                <div class=\"media contact-info wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                    <div class=\"pull-left\">
                        <i class=\"fa fa-phone\"></i>
                    </div>
                    <div class=\"media-body\">
                        <h2>Avez-vous une question ?</h2>
                        <p>Nous restons à votre disposition si vous avez une question, entre 8h et 20h par mail PermisFute@gmail.fr ou par téléphone au 01 23 56 70 80</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->    
</section><!--/#conatcat-info-->

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
        // line 124
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
        
        $__internal_fb591c71e6d4852be57a0ff030e0f995005110f64fa3ef8fad638b7d27690d6e->leave($__internal_fb591c71e6d4852be57a0ff030e0f995005110f64fa3ef8fad638b7d27690d6e_prof);

    }

    public function getTemplateName()
    {
        return "PermisfuteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 124,  144 => 83,  140 => 82,  136 => 81,  132 => 80,  128 => 79,  103 => 57,  87 => 44,  71 => 31,  50 => 13,  40 => 5,  34 => 4,  11 => 1,);
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

    <section id=\"about-us\">
        <div class=\"container\">
            <div class=\"center wow fadeInDown\">
                <h2>Bienvenue sur Permis Futé !</h2>
                <p class=\"lead\">Auto-école spécialisé dans permis A et permis B<br> depuis 2002.</p>
            </div>
            <div>
                <img src={{ asset('images/slider_one.jpg') }} > 
            </div>
        </div>
    </div><!--/.container-->
</section><!--/about-us-->

<section id=\"services\" class=\"service-item\">
    <div class=\"container\">
        <div class=\"center wow fadeInDown\">
            <h2>Nos services</h2>
            <p class=\"lead\">C'est ici que vous pourrez retrouver tous <br> les services de Permis futé.</p>
        </div>

        <div class=\"row\">

            <div class=\"col-sm-6 col-md-4\">
                <div class=\"media services-wrap wow fadeInDown\">
                    <div class=\"pull-left\">
                        <img class=\"img-responsive\" src={{ asset('images/services/services1.png') }}>
                    </div>
                    <div class=\"media-body\">
                        <h3 class=\"media-heading\">Code de la route</h3>
                        <p>Passez votre code de la route grâce à nos cours et séances à résultats directs.</p>
                        <a href=\"../Permisfute/services\">Plus d'informations</a>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-md-4\">
                <div class=\"media services-wrap wow fadeInDown\">
                    <div class=\"pull-left\">
                        <img class=\"img-responsive\" src={{ asset('images/services/services2.png') }}>
                    </div>
                    <div class=\"media-body\">
                        <h3 class=\"media-heading\">Permis B</h3>
                        <p>Passez votre permis B auprès de nos 2 moniteurs très expérimentés.</p>
                        <a href=\"../Permisfute/services\">Plus d'informations</a>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-md-4\">
                <div class=\"media services-wrap wow fadeInDown\">
                    <div class=\"pull-left\">
                        <img class=\"img-responsive\" src={{ asset('images/services/services3.png') }}>
                    </div>
                    <div class=\"media-body\">
                        <h3 class=\"media-heading\">Permis A</h3>
                        <p>Passez votre permis A avec un moniteur spécialisé dans ce permis.</p>
                        <a href=\"../Permisfute/services\">Plus d'informations</a>
                    </div>
                </div>
            </div>             
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#services-->

<section id=\"partner\">
    <div class=\"container\">
        <div class=\"center wow fadeInDown\">
            <h2>Nos partenaires</h2>
            <p class=\"lead\">C'est ici que sont répertoriés <br> tous nos partenaires</p>
        </div>    

        <div class=\"partners\">
            <ul>
                <li> <a href=\"http://www.total.fr/\"><img class=\"img-responsive wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\" src={{ asset('images/partners/partner1.png') }}></a></li>
                <li> <a href=\"https://www.renault.fr/\"><img class=\"img-responsive wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\" src={{ asset('images/partners/partner2.png') }}></a></li>
                <li> <a href=\"http://www.dell.fr/\"><img class=\"img-responsive wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"900ms\" src={{ asset('images/partners/partner3.png') }}></a></li>
                <li> <a href=\"https://www.univ-paris5.fr/\"><img class=\"img-responsive wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"1200ms\" src={{ asset('images/partners/partner4.png') }}></a></li>
                <li> <a href=\"http://www.michelin.fr/\"><img class=\"img-responsive wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"1500ms\" src={{ asset('images/partners/partner5.png') }}></a></li>
            </ul>
        </div>        
    </div><!--/.container-->
</section><!--/#partner-->

<section id=\"conatcat-info\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8\">
                <div class=\"media contact-info wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                    <div class=\"pull-left\">
                        <i class=\"fa fa-phone\"></i>
                    </div>
                    <div class=\"media-body\">
                        <h2>Avez-vous une question ?</h2>
                        <p>Nous restons à votre disposition si vous avez une question, entre 8h et 20h par mail PermisFute@gmail.fr ou par téléphone au 01 23 56 70 80</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->    
</section><!--/#conatcat-info-->

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
{% endblock %}
", "PermisfuteBundle:Default:index.html.twig", "C:\\wamp64\\www\\permisfute\\src\\Permisfute\\PermisfuteBundle/Resources/views/Default/index.html.twig");
    }
}
