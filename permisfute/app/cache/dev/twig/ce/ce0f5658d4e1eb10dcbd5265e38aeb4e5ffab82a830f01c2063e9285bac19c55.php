<?php

/* PermisfuteBundle:Default:inscription.html.twig */
class __TwigTemplate_85a5172aa7913c8622e0c8c833dd4d0273032939236573f8248b199644defe84 extends Twig_Template
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
        $__internal_84b2e2f63d07fad372813695f8abe669083bc92271b703c0bd05bb3113a09ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b2e2f63d07fad372813695f8abe669083bc92271b703c0bd05bb3113a09ba8->enter($__internal_84b2e2f63d07fad372813695f8abe669083bc92271b703c0bd05bb3113a09ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PermisfuteBundle:Default:inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84b2e2f63d07fad372813695f8abe669083bc92271b703c0bd05bb3113a09ba8->leave($__internal_84b2e2f63d07fad372813695f8abe669083bc92271b703c0bd05bb3113a09ba8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_13a0dc26d9ea7e02cd6baac1bc81126dab80d8e03d02402371f882b5455c6d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a0dc26d9ea7e02cd6baac1bc81126dab80d8e03d02402371f882b5455c6d38->enter($__internal_13a0dc26d9ea7e02cd6baac1bc81126dab80d8e03d02402371f882b5455c6d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_13a0dc26d9ea7e02cd6baac1bc81126dab80d8e03d02402371f882b5455c6d38->leave($__internal_13a0dc26d9ea7e02cd6baac1bc81126dab80d8e03d02402371f882b5455c6d38_prof);

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
        return array (  77 => 38,  73 => 37,  40 => 6,  34 => 5,  11 => 1,);
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
", "PermisfuteBundle:Default:inscription.html.twig", "C:\\wamp\\www\\permisfute\\src\\Permisfute\\PermisfuteBundle/Resources/views/Default/inscription.html.twig");
    }
}
