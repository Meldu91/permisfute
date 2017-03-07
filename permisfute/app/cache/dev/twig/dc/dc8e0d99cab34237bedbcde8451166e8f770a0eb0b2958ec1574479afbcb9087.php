<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_67a6f3d94b71572ea4e58ad1eb13daebbdfbecb2fcb770c44be7ee33de344c4a extends Twig_Template
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
        $__internal_44d5ea09275bb046589bed191fb50d6f47e45ac7f840e1927943064326f9bcef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d5ea09275bb046589bed191fb50d6f47e45ac7f840e1927943064326f9bcef->enter($__internal_44d5ea09275bb046589bed191fb50d6f47e45ac7f840e1927943064326f9bcef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
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
        
        $__internal_44d5ea09275bb046589bed191fb50d6f47e45ac7f840e1927943064326f9bcef->leave($__internal_44d5ea09275bb046589bed191fb50d6f47e45ac7f840e1927943064326f9bcef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2589697bca6dd9eb40f3e32370da57bf8d2bf1a3e4291a8d6aab1a39efc22185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2589697bca6dd9eb40f3e32370da57bf8d2bf1a3e4291a8d6aab1a39efc22185->enter($__internal_2589697bca6dd9eb40f3e32370da57bf8d2bf1a3e4291a8d6aab1a39efc22185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2589697bca6dd9eb40f3e32370da57bf8d2bf1a3e4291a8d6aab1a39efc22185->leave($__internal_2589697bca6dd9eb40f3e32370da57bf8d2bf1a3e4291a8d6aab1a39efc22185_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5e1dce3e409c206179be3377bf1be5d5ee221bbb9d9d5e7420fcc1b8ed640c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1dce3e409c206179be3377bf1be5d5ee221bbb9d9d5e7420fcc1b8ed640c92->enter($__internal_5e1dce3e409c206179be3377bf1be5d5ee221bbb9d9d5e7420fcc1b8ed640c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5e1dce3e409c206179be3377bf1be5d5ee221bbb9d9d5e7420fcc1b8ed640c92->leave($__internal_5e1dce3e409c206179be3377bf1be5d5ee221bbb9d9d5e7420fcc1b8ed640c92_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ae89615e2cdda7181db9ad31f8b22f7c17308952132e86b2b9306f34aaa034a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae89615e2cdda7181db9ad31f8b22f7c17308952132e86b2b9306f34aaa034a->enter($__internal_2ae89615e2cdda7181db9ad31f8b22f7c17308952132e86b2b9306f34aaa034a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2ae89615e2cdda7181db9ad31f8b22f7c17308952132e86b2b9306f34aaa034a->leave($__internal_2ae89615e2cdda7181db9ad31f8b22f7c17308952132e86b2b9306f34aaa034a_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7c83613b5d13977f8c515433148d305b99ae74071d12c25bb9c268d79da70eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c83613b5d13977f8c515433148d305b99ae74071d12c25bb9c268d79da70eea->enter($__internal_7c83613b5d13977f8c515433148d305b99ae74071d12c25bb9c268d79da70eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7c83613b5d13977f8c515433148d305b99ae74071d12c25bb9c268d79da70eea->leave($__internal_7c83613b5d13977f8c515433148d305b99ae74071d12c25bb9c268d79da70eea_prof);

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

{% block javascripts %}{% endblock %}
</body>
</html>
", "::layout/layout.html.twig", "C:\\wamp64\\www\\permisfute\\app/Resources\\views/layout/layout.html.twig");
    }
}
