<?php

/* PermisfuteBundle:Default:inscription.html.twig */
class __TwigTemplate_70aaf92e5af13b312c9a6ad768917bfb792dd3771bfabf6f4416861ea77259b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "PermisfuteBundle:Default:inscription.html.twig", 1);
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
        $__internal_7efbb739e2da9a44ea8b6ce4b158efc25895d4819e3af307268003b82e36d7a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7efbb739e2da9a44ea8b6ce4b158efc25895d4819e3af307268003b82e36d7a3->enter($__internal_7efbb739e2da9a44ea8b6ce4b158efc25895d4819e3af307268003b82e36d7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PermisfuteBundle:Default:inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7efbb739e2da9a44ea8b6ce4b158efc25895d4819e3af307268003b82e36d7a3->leave($__internal_7efbb739e2da9a44ea8b6ce4b158efc25895d4819e3af307268003b82e36d7a3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_93fa33a3d4f005a628fddd48e7905a785b10d53ca5b1c750d60b24a5e86abfb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93fa33a3d4f005a628fddd48e7905a785b10d53ca5b1c750d60b24a5e86abfb5->enter($__internal_93fa33a3d4f005a628fddd48e7905a785b10d53ca5b1c750d60b24a5e86abfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <style>
        .btn {
            display: inline-block;
            padding: 15px 30px;
            background: #C52D2F;
            border: 1px solid #000000;
            color: #FFFFFF;
            font-size: 15px;
        }

        .btn:hover, .btn:focus {
            background: #ccc;
            text-shadow: 0 -1px #eee;
        }

        .btn:active {
            background: #C52D2F;
            text-shadow: 0 -1px #eee;
            border: 1px solid #1f6b81;
        }
    </style>

    <section id=\"services\" class=\"service-item\">
        <div class=\"container\">
            <div class=\"center wow fadeInDown\">
                <h2>Vous souhaitez vous inscrire ?</h2>
                <p class=\"lead\">Pour vous inscrire dans notre école il suffit de choisir votre catégorie</p>
            </div>

            <div class=\"row\">
                <center>
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("salarie_user_register");
        echo "\" class=\"btn\">Vous êtes un salarié</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"btn\">Vous êtes un étudiant</a>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </center>                         
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

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
        // line 80
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
        
        $__internal_93fa33a3d4f005a628fddd48e7905a785b10d53ca5b1c750d60b24a5e86abfb5->leave($__internal_93fa33a3d4f005a628fddd48e7905a785b10d53ca5b1c750d60b24a5e86abfb5_prof);

    }

    public function getTemplateName()
    {
        return "PermisfuteBundle:Default:inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 80,  77 => 38,  73 => 37,  40 => 6,  34 => 5,  11 => 1,);
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
    <style>
        .btn {
            display: inline-block;
            padding: 15px 30px;
            background: #C52D2F;
            border: 1px solid #000000;
            color: #FFFFFF;
            font-size: 15px;
        }

        .btn:hover, .btn:focus {
            background: #ccc;
            text-shadow: 0 -1px #eee;
        }

        .btn:active {
            background: #C52D2F;
            text-shadow: 0 -1px #eee;
            border: 1px solid #1f6b81;
        }
    </style>

    <section id=\"services\" class=\"service-item\">
        <div class=\"container\">
            <div class=\"center wow fadeInDown\">
                <h2>Vous souhaitez vous inscrire ?</h2>
                <p class=\"lead\">Pour vous inscrire dans notre école il suffit de choisir votre catégorie</p>
            </div>

            <div class=\"row\">
                <center>
                    <a href=\"{{ path ('salarie_user_register') }}\" class=\"btn\">Vous êtes un salarié</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href=\"{{ path ('fos_user_registration_register') }}\" class=\"btn\">Vous êtes un étudiant</a>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </center>                         
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

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
{% endblock %}", "PermisfuteBundle:Default:inscription.html.twig", "C:\\wamp64\\www\\permisfute\\src\\Permisfute\\PermisfuteBundle/Resources/views/Default/inscription.html.twig");
    }
}
