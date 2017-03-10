<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_f6503ff5d6eb4a317dfaff295458620e46980dd2f0b172089f85fdee7bc72877 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_685e9e45510b5334a50e6fd77352125d407071e9c4d38fb6003c399ab54bcf2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685e9e45510b5334a50e6fd77352125d407071e9c4d38fb6003c399ab54bcf2e->enter($__internal_685e9e45510b5334a50e6fd77352125d407071e9c4d38fb6003c399ab54bcf2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <header id=\"header\">


            <nav class=\"navbar navbar-inverse\" role=\"banner\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
                    </div>

                    <div class=\"collapse navbar-collapse navbar-right\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active\"><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_homepage");
        echo "\">Accueil</a></li>
                            <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_services");
        echo "\">Services</a></li>
                            <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_tarifs");
        echo "\">Tarifs</a></li>
                            <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_contact");
        echo "\">Contact</a></li>  
                            <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_inscription");
        echo "\">Inscription</a></li> 
                            <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Connexion</a></li>
                        </ul>
                    </div>
                </div><!--/.container-->
            </nav><!--/nav-->
        </header><!--/header-->
    ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "
    <footer id=\"footer\" class=\"midnight-blue\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    Site réalisé par Julien Gallart, Melvin Fourniaud & Thibault Guerin.
                </div>
                <div class=\"col-sm-6\">
                    <ul class=\"pull-right\">
                        <li><a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_homepage");
        echo "\">Acceuil</a></li>
                        <li><a href=\"#\">Infos</a></li>
                        <li><a href=\"#\">Nous contacter</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/js/jquery/jquery-1.8.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/js/fullcalendar/jquery.fullcalendar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/js/calendar-settings.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

";
        // line 77
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "</body>
</html>
";
        
        $__internal_685e9e45510b5334a50e6fd77352125d407071e9c4d38fb6003c399ab54bcf2e->leave($__internal_685e9e45510b5334a50e6fd77352125d407071e9c4d38fb6003c399ab54bcf2e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_add820e90616b29924f15a20739076d6cd729a87a7feaebddcec412c43cb96fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add820e90616b29924f15a20739076d6cd729a87a7feaebddcec412c43cb96fb->enter($__internal_add820e90616b29924f15a20739076d6cd729a87a7feaebddcec412c43cb96fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_add820e90616b29924f15a20739076d6cd729a87a7feaebddcec412c43cb96fb->leave($__internal_add820e90616b29924f15a20739076d6cd729a87a7feaebddcec412c43cb96fb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b8bdf43b1ae4ecdb3923ef5952f77c232ef0bf792e584897a70582e63765b9ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8bdf43b1ae4ecdb3923ef5952f77c232ef0bf792e584897a70582e63765b9ca->enter($__internal_b8bdf43b1ae4ecdb3923ef5952f77c232ef0bf792e584897a70582e63765b9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/css/fullcalendar/fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_b8bdf43b1ae4ecdb3923ef5952f77c232ef0bf792e584897a70582e63765b9ca->leave($__internal_b8bdf43b1ae4ecdb3923ef5952f77c232ef0bf792e584897a70582e63765b9ca_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_89d6a06c2b57b236b7df5900ebdcef72b053dce508e0b58def4254143aacd094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d6a06c2b57b236b7df5900ebdcef72b053dce508e0b58def4254143aacd094->enter($__internal_89d6a06c2b57b236b7df5900ebdcef72b053dce508e0b58def4254143aacd094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_89d6a06c2b57b236b7df5900ebdcef72b053dce508e0b58def4254143aacd094->leave($__internal_89d6a06c2b57b236b7df5900ebdcef72b053dce508e0b58def4254143aacd094_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_782ea3459309e98b23b92b6cc7cf9c2c2e299b1dcbd210e0c26bc90d5cbabf3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782ea3459309e98b23b92b6cc7cf9c2c2e299b1dcbd210e0c26bc90d5cbabf3e->enter($__internal_782ea3459309e98b23b92b6cc7cf9c2c2e299b1dcbd210e0c26bc90d5cbabf3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_782ea3459309e98b23b92b6cc7cf9c2c2e299b1dcbd210e0c26bc90d5cbabf3e->leave($__internal_782ea3459309e98b23b92b6cc7cf9c2c2e299b1dcbd210e0c26bc90d5cbabf3e_prof);

    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 77,  229 => 46,  220 => 13,  216 => 12,  212 => 11,  208 => 10,  204 => 9,  200 => 8,  195 => 7,  189 => 6,  177 => 5,  168 => 78,  166 => 77,  161 => 75,  157 => 74,  153 => 73,  149 => 72,  145 => 71,  141 => 70,  137 => 69,  133 => 68,  129 => 67,  125 => 66,  121 => 65,  109 => 56,  98 => 47,  96 => 46,  87 => 40,  83 => 39,  79 => 38,  75 => 37,  71 => 36,  67 => 35,  57 => 30,  38 => 15,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('css/font-awesome.min.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('css/animate.min.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('css/prettyPhoto.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('css/responsive.css') }}\" rel=\"stylesheet\"> 
            <link href=\"{{ asset('bundles/adesignscalendar/css/fullcalendar/fullcalendar.css') }}\" rel=\"stylesheet\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset (\"favicon.ico\") }}\" />
    </head>
    <body>
        <header id=\"header\">


            <nav class=\"navbar navbar-inverse\" role=\"banner\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"{{ path ('permisfute_homepage') }}\"><img src=\"{{asset ('images/logo.png') }}\" alt=\"logo\"></a>
                    </div>

                    <div class=\"collapse navbar-collapse navbar-right\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active\"><a href=\"{{ path ('permisfute_homepage') }}\">Accueil</a></li>
                            <li><a href=\"{{ path ('permisfute_services') }}\">Services</a></li>
                            <li><a href=\"{{ path ('permisfute_tarifs') }}\">Tarifs</a></li>
                            <li><a href=\"{{ path ('permisfute_contact') }}\">Contact</a></li>  
                            <li><a href=\"{{ path ('permisfute_inscription') }}\">Inscription</a></li> 
                            <li><a href=\"{{ path ('fos_user_security_login') }}\">Connexion</a></li>
                        </ul>
                    </div>
                </div><!--/.container-->
            </nav><!--/nav-->
        </header><!--/header-->
    {% block body %}{% endblock %}

    <footer id=\"footer\" class=\"midnight-blue\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    Site réalisé par Julien Gallart, Melvin Fourniaud & Thibault Guerin.
                </div>
                <div class=\"col-sm-6\">
                    <ul class=\"pull-right\">
                        <li><a href=\"{{ path ('permisfute_homepage') }}\">Acceuil</a></li>
                        <li><a href=\"#\">Infos</a></li>
                        <li><a href=\"#\">Nous contacter</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src=\"{{ asset('js/jquery.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.prettyPhoto.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.isotope.min.js') }}\"></script>
    <script src=\"{{ asset('js/main.js') }}\"></script>
    <script src=\"{{ asset('js/wow.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/adesignscalendar/js/jquery/jquery-1.8.2.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/adesignscalendar/js/fullcalendar/jquery.fullcalendar.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/adesignscalendar/js/calendar-settings.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>

{% block javascripts %}{% endblock %}
</body>
</html>
", "::layout/layout.html.twig", "C:\\wamp\\www\\permisfute\\app/Resources\\views/layout/layout.html.twig");
    }
}
