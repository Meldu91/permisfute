<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_6e6d88e0a67716f38137d570d50aa7e911c466d817185e07974b611562dd47df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a30f2eb2074089cb6f80d154dbcd86772ed4174f74b5cdd1904d298ad5300f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a30f2eb2074089cb6f80d154dbcd86772ed4174f74b5cdd1904d298ad5300f9->enter($__internal_7a30f2eb2074089cb6f80d154dbcd86772ed4174f74b5cdd1904d298ad5300f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "<center>
    <style>
        body { 
            background: #FDFDFD;
            text-align: center;
        }
        body, input, textarea { 
            font: 14px/24px Helvetica, Arial, sans-serif; 
            color: #000000; 
        }
        input { 
            width: 30% 
        }
        form { 
            margin: 5px 0 0 0 
        }
        input, textarea { 
            background: none repeat scroll 0 0 #FFFFFF; 
            border: 1px solid #C9C9C9; 
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15) inset, -3px -3px 0 0 #F5F5F6, 3px 3px 0 0 #F5F5F6, 3px 0 0 0 #F5F5F6, 0 3px 0 0 #F5F5F6, 3px -3px 0 0 #F5F5F6, -3px 3px 0 0 #F5F5F6; 
            color: #545658; 
            padding: 3px; 
            font-size: 14px; 
            border-radius: 1px 1px 1px 1px; 
        }
        form label { 
            display: block; 
            margin-bottom: 5px; 
            font-weight: bold; 
            font-size: 12px; 
        }
    </style>

    <form action=\"\" ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
        ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div>
            <input class=\"\" type=\"submit\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" /><br/><br/>
        </div>
    </form>
</center>

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
</section><!--/#bottom-->";
        
        $__internal_7a30f2eb2074089cb6f80d154dbcd86772ed4174f74b5cdd1904d298ad5300f9->leave($__internal_7a30f2eb2074089cb6f80d154dbcd86772ed4174f74b5cdd1904d298ad5300f9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 38,  61 => 36,  57 => 35,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<center>
    <style>
        body { 
            background: #FDFDFD;
            text-align: center;
        }
        body, input, textarea { 
            font: 14px/24px Helvetica, Arial, sans-serif; 
            color: #000000; 
        }
        input { 
            width: 30% 
        }
        form { 
            margin: 5px 0 0 0 
        }
        input, textarea { 
            background: none repeat scroll 0 0 #FFFFFF; 
            border: 1px solid #C9C9C9; 
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15) inset, -3px -3px 0 0 #F5F5F6, 3px 3px 0 0 #F5F5F6, 3px 0 0 0 #F5F5F6, 0 3px 0 0 #F5F5F6, 3px -3px 0 0 #F5F5F6, -3px 3px 0 0 #F5F5F6; 
            color: #545658; 
            padding: 3px; 
            font-size: 14px; 
            border-radius: 1px 1px 1px 1px; 
        }
        form label { 
            display: block; 
            margin-bottom: 5px; 
            font-weight: bold; 
            font-size: 12px; 
        }
    </style>

    <form action=\"\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_registration_register\">
        {{ form_widget(form) }}
        <div>
            <input class=\"\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" /><br/><br/>
        </div>
    </form>
</center>

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
</section><!--/#bottom-->", "FOSUserBundle:Registration:register_content.html.twig", "C:\\wamp\\www\\permisfute\\app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
