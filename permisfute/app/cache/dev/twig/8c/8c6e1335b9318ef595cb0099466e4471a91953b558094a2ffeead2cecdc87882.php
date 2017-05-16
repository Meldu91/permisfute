<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_63f7426c5f2018f81d4157bdfc240cc4fdadf01d86629a75f631ee21eef233c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bc48ce94aa2f519b573df507a84a3ed9a52fc5f31c596b8bc33a1ae432ff40f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc48ce94aa2f519b573df507a84a3ed9a52fc5f31c596b8bc33a1ae432ff40f->enter($__internal_1bc48ce94aa2f519b573df507a84a3ed9a52fc5f31c596b8bc33a1ae432ff40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bc48ce94aa2f519b573df507a84a3ed9a52fc5f31c596b8bc33a1ae432ff40f->leave($__internal_1bc48ce94aa2f519b573df507a84a3ed9a52fc5f31c596b8bc33a1ae432ff40f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a4e8e80c451a65b7866b6074b2df8c0e07e6eeecd1a91b6e20301acec808325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4e8e80c451a65b7866b6074b2df8c0e07e6eeecd1a91b6e20301acec808325->enter($__internal_4a4e8e80c451a65b7866b6074b2df8c0e07e6eeecd1a91b6e20301acec808325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <style>
        div {
            margin-bottom: 1px;
        }
        body { 
            background: #151515;
            text-align: center;
        }
        body, input, textarea { 
            font: 14px/24px Helvetica, Arial, sans-serif; 
            color: #C52D2F; 
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
            color: #545658; 
            padding: 3px; 
            font-size: 14px; 
            margin-bottom: 15px;
        }
        form label { 
            display: block; 
            margin-bottom: 5px; 
            font-weight: bold; 
            font-size: 20px; 
        }
        .btn {
            display: inline-block;
            padding: 3px 15px;
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
                <center>
                    <h1><p>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p></H1>

                    <br>

                    <font size=\"4\" color=\"white\"><b><p>Votre Profil est consultable <a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\" >ici</a></font></B><br><br><br>
                    <font size=\"4\" color=\"white\"><b><p>Vous heures de conduite seront disponible sous peu <a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" >ici</a></font></b><br><br><br>
                    <font size=\"4\" color=\"white\"><b><p>Vous pouvez consulter les tarifs de notre auto-école <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_tarifs");
        echo "\" >ici</a></font></b>
                    <br><br>
                    <p><a href=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
        echo "</a></p>
                    <br><br><br><br><br><br><br><br>
                </center>                         
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->
    ";
        // line 76
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 77
            echo "    ";
        }
        
        $__internal_4a4e8e80c451a65b7866b6074b2df8c0e07e6eeecd1a91b6e20301acec808325->leave($__internal_4a4e8e80c451a65b7866b6074b2df8c0e07e6eeecd1a91b6e20301acec808325_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 77,  129 => 76,  118 => 70,  113 => 68,  109 => 67,  105 => 66,  98 => 62,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <style>
        div {
            margin-bottom: 1px;
        }
        body { 
            background: #151515;
            text-align: center;
        }
        body, input, textarea { 
            font: 14px/24px Helvetica, Arial, sans-serif; 
            color: #C52D2F; 
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
            color: #545658; 
            padding: 3px; 
            font-size: 14px; 
            margin-bottom: 15px;
        }
        form label { 
            display: block; 
            margin-bottom: 5px; 
            font-weight: bold; 
            font-size: 20px; 
        }
        .btn {
            display: inline-block;
            padding: 3px 15px;
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
                <center>
                    <h1><p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p></H1>

                    <br>

                    <font size=\"4\" color=\"white\"><b><p>Votre Profil est consultable <a href=\"{{ path ('fos_user_profile_show') }}\" >ici</a></font></B><br><br><br>
                    <font size=\"4\" color=\"white\"><b><p>Vous heures de conduite seront disponible sous peu <a href=\"{{ path ('fos_user_registration_register') }}\" >ici</a></font></b><br><br><br>
                    <font size=\"4\" color=\"white\"><b><p>Vous pouvez consulter les tarifs de notre auto-école <a href=\"{{ path ('permisfute_tarifs') }}\" >ici</a></font></b>
                    <br><br>
                    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
                    <br><br><br><br><br><br><br><br>
                </center>                         
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->
    {% if targetUrl %}
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\wamp64\\www\\permisfute\\app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
