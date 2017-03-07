<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_44d98fde8d0f515ee5bf39cfc9b3c1eb233a88efacd9462a3ea5fd14d08369e4 extends Twig_Template
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
        $__internal_cca2bd3f89fe428b30f8071e1f7abd244528b0a713d1b0e6a5dbe08f09bf38fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca2bd3f89fe428b30f8071e1f7abd244528b0a713d1b0e6a5dbe08f09bf38fc->enter($__internal_cca2bd3f89fe428b30f8071e1f7abd244528b0a713d1b0e6a5dbe08f09bf38fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

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
        // line 14
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
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
                    </div>

                    <div class=\"collapse navbar-collapse navbar-right\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active\"><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_homepage");
        echo "\">Accueil</a></li>
                            <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_services");
        echo "\">Services</a></li>
                            <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_tarifs");
        echo "\">Tarifs</a></li>
                            <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_contact");
        echo "\">Contact</a></li>  
                            <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_inscription");
        echo "\">Inscription</a></li> 
                            <li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("about-us.html"), "html", null, true);
        echo "\">Connexion</a></li>
                        </ul>
                    </div>
                </div><!--/.container-->
            </nav><!--/nav-->
        </header><!--/header-->
    ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
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
        // line 55
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
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/wow.min.js"), "html", null, true);
        echo "\"></script>

";
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "</body>
</html>
";
        
        $__internal_cca2bd3f89fe428b30f8071e1f7abd244528b0a713d1b0e6a5dbe08f09bf38fc->leave($__internal_cca2bd3f89fe428b30f8071e1f7abd244528b0a713d1b0e6a5dbe08f09bf38fc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8cb07504f5f8a32e58e4aa7b307671bb8640f760731252bc29abc950f4bb2c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8cb07504f5f8a32e58e4aa7b307671bb8640f760731252bc29abc950f4bb2c9->enter($__internal_f8cb07504f5f8a32e58e4aa7b307671bb8640f760731252bc29abc950f4bb2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f8cb07504f5f8a32e58e4aa7b307671bb8640f760731252bc29abc950f4bb2c9->leave($__internal_f8cb07504f5f8a32e58e4aa7b307671bb8640f760731252bc29abc950f4bb2c9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9067df15f34e515a0abe4a78015cbc5f12d13f678272ecb2d5e267bc46f58e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9067df15f34e515a0abe4a78015cbc5f12d13f678272ecb2d5e267bc46f58e4a->enter($__internal_9067df15f34e515a0abe4a78015cbc5f12d13f678272ecb2d5e267bc46f58e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        ";
        
        $__internal_9067df15f34e515a0abe4a78015cbc5f12d13f678272ecb2d5e267bc46f58e4a->leave($__internal_9067df15f34e515a0abe4a78015cbc5f12d13f678272ecb2d5e267bc46f58e4a_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d3c9c3a7ce0a28fea3791f5f63a1f992c19ece3b08690d7886e847357f0a841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3c9c3a7ce0a28fea3791f5f63a1f992c19ece3b08690d7886e847357f0a841->enter($__internal_1d3c9c3a7ce0a28fea3791f5f63a1f992c19ece3b08690d7886e847357f0a841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1d3c9c3a7ce0a28fea3791f5f63a1f992c19ece3b08690d7886e847357f0a841->leave($__internal_1d3c9c3a7ce0a28fea3791f5f63a1f992c19ece3b08690d7886e847357f0a841_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f2f1ba480ec4fb3af125035db07deee120195b057aa36365abf6b7aed4a9880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2f1ba480ec4fb3af125035db07deee120195b057aa36365abf6b7aed4a9880->enter($__internal_5f2f1ba480ec4fb3af125035db07deee120195b057aa36365abf6b7aed4a9880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5f2f1ba480ec4fb3af125035db07deee120195b057aa36365abf6b7aed4a9880->leave($__internal_5f2f1ba480ec4fb3af125035db07deee120195b057aa36365abf6b7aed4a9880_prof);

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
        return array (  216 => 71,  205 => 45,  196 => 12,  192 => 11,  188 => 10,  184 => 9,  180 => 8,  175 => 7,  169 => 6,  157 => 5,  148 => 72,  146 => 71,  141 => 69,  137 => 68,  133 => 67,  129 => 66,  125 => 65,  121 => 64,  109 => 55,  98 => 46,  96 => 45,  87 => 39,  83 => 38,  79 => 37,  75 => 36,  71 => 35,  67 => 34,  57 => 29,  38 => 14,  36 => 6,  32 => 5,  26 => 1,);
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
                            <li><a href=\"{{ asset (\"about-us.html\") }}\">Connexion</a></li>
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

{% block javascripts %}{% endblock %}
</body>
</html>
", "::layout/layout.html.twig", "C:\\wamp\\www\\permisfute\\app/Resources\\views/layout/layout.html.twig");
    }
}
