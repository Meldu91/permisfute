<?php

/* PermisfuteBundle:Default:inscription.html.twig */
class __TwigTemplate_cdf66c82d7042c4c6d3011e23b1b84d077e192d7d76034d2a12874678929c3b1 extends Twig_Template
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
        $__internal_585c718af16fd2e8a1275692b3d7cf51a2322c81af65946ed9ebe025a3c5ba40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585c718af16fd2e8a1275692b3d7cf51a2322c81af65946ed9ebe025a3c5ba40->enter($__internal_585c718af16fd2e8a1275692b3d7cf51a2322c81af65946ed9ebe025a3c5ba40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PermisfuteBundle:Default:inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_585c718af16fd2e8a1275692b3d7cf51a2322c81af65946ed9ebe025a3c5ba40->leave($__internal_585c718af16fd2e8a1275692b3d7cf51a2322c81af65946ed9ebe025a3c5ba40_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf80740600bc3d046d35a26a629f1ea785e1d091e4269e025b8a3c0238611d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf80740600bc3d046d35a26a629f1ea785e1d091e4269e025b8a3c0238611d23->enter($__internal_cf80740600bc3d046d35a26a629f1ea785e1d091e4269e025b8a3c0238611d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <section id=\"services\" class=\"service-item\">
        <div class=\"container\">
            <div class=\"center wow fadeInDown\">
                <h2>Vous souhaitez vous inscrire ?</h2>
                <p class=\"lead\">Pour vous inscrire dans notre école il suffit de remplir le formulaire ci-dessous</p>
            </div>

            <div class=\"row\">
                <center>
                    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("salarie_user_register");
        echo "\">Vous êtes salarié</a>
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Vous êtes étudiant</a>
                </center>                         
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->
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
        
        $__internal_cf80740600bc3d046d35a26a629f1ea785e1d091e4269e025b8a3c0238611d23->leave($__internal_cf80740600bc3d046d35a26a629f1ea785e1d091e4269e025b8a3c0238611d23_prof);

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
        return array (  55 => 15,  51 => 14,  40 => 5,  34 => 4,  11 => 1,);
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
    <section id=\"services\" class=\"service-item\">
        <div class=\"container\">
            <div class=\"center wow fadeInDown\">
                <h2>Vous souhaitez vous inscrire ?</h2>
                <p class=\"lead\">Pour vous inscrire dans notre école il suffit de remplir le formulaire ci-dessous</p>
            </div>

            <div class=\"row\">
                <center>
                    <a href=\"{{ path ('salarie_user_register') }}\">Vous êtes salarié</a>
                    <a href=\"{{ path ('fos_user_registration_register') }}\">Vous êtes étudiant</a>
                </center>                         
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->
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
