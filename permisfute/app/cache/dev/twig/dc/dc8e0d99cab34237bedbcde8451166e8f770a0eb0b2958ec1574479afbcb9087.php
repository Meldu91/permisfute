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
        $__internal_f24a5fce66788a0a6675efec37b343a52d2a6115a6546ec77b286e4850e0fcb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f24a5fce66788a0a6675efec37b343a52d2a6115a6546ec77b286e4850e0fcb9->enter($__internal_f24a5fce66788a0a6675efec37b343a52d2a6115a6546ec77b286e4850e0fcb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

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
            <div class=\"top-bar\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-xs-4\">
                            <div class=\"top-number\"><p><i class=\"fa fa-phone-square\"></i>  01 02 03 04 05</p></div>
                        </div>
                        <div class=\"col-sm-6 col-xs-8\">
                            <div class=\"social\">
                                <ul class=\"social-share\">
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li> 
                                    <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-skype\"></i></a></li>
                                </ul>
                                <div class=\"search\">
                                    <form role=\"form\">
                                        <input type=\"text\" class=\"search-form\" autocomplete=\"off\" placeholder=\"Search\">
                                        <i class=\"fa fa-search\"></i>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.container-->
            </div><!--/.top-bar-->

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
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
                    </div>

                    <div class=\"collapse navbar-collapse navbar-right\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active\"><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_homepage");
        echo "\">Accueil</a></li>
                            <li><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("about-us.html"), "html", null, true);
        echo "\">Infos</a></li>
                            <li><a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_services");
        echo "\">Services</a></li>
                            <li><a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_tarifs");
        echo "\">Tarifs</a></li>
                            <li><a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_contact");
        echo "\">Contact</a></li>  
                            <li><a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_inscription");
        echo "\">Inscription</a></li> 
                        </ul>
                    </div>
                </div><!--/.container-->
            </nav><!--/nav-->
        </header><!--/header-->
        ";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "        
        <footer id=\"footer\" class=\"midnight-blue\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        &copy; 2013 <a target=\"_blank\" href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://shapebootstrap.net/"), "html", null, true);
        echo "\" title=\"Free Twitter Bootstrap WordPress Themes and HTML templates\">ShapeBootstrap</a>. All Rights Reserved.
                    </div>
                    <div class=\"col-sm-6\">
                        <ul class=\"pull-right\">
                            <li><a href=\"";
        // line 80
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
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/wow.min.js"), "html", null, true);
        echo "\"></script>
        
        ";
        // line 96
        $this->displayBlock('javascripts', $context, $blocks);
        // line 97
        echo "    </body>
</html>
";
        
        $__internal_f24a5fce66788a0a6675efec37b343a52d2a6115a6546ec77b286e4850e0fcb9->leave($__internal_f24a5fce66788a0a6675efec37b343a52d2a6115a6546ec77b286e4850e0fcb9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ae21829b4fe0224aeeef6fc21791e6b8167f3a3cc03a3f1b47786ca04403b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae21829b4fe0224aeeef6fc21791e6b8167f3a3cc03a3f1b47786ca04403b7b->enter($__internal_6ae21829b4fe0224aeeef6fc21791e6b8167f3a3cc03a3f1b47786ca04403b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6ae21829b4fe0224aeeef6fc21791e6b8167f3a3cc03a3f1b47786ca04403b7b->leave($__internal_6ae21829b4fe0224aeeef6fc21791e6b8167f3a3cc03a3f1b47786ca04403b7b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1100f8b0b6008a268a729e9083fbaeae6f9d8e26ad0f720f28b5efaaa91e48d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1100f8b0b6008a268a729e9083fbaeae6f9d8e26ad0f720f28b5efaaa91e48d3->enter($__internal_1100f8b0b6008a268a729e9083fbaeae6f9d8e26ad0f720f28b5efaaa91e48d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1100f8b0b6008a268a729e9083fbaeae6f9d8e26ad0f720f28b5efaaa91e48d3->leave($__internal_1100f8b0b6008a268a729e9083fbaeae6f9d8e26ad0f720f28b5efaaa91e48d3_prof);

    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        $__internal_a46c56e581ae21322fd607d11d298889942f95d54019c3c5ae3642bae2c5ace8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46c56e581ae21322fd607d11d298889942f95d54019c3c5ae3642bae2c5ace8->enter($__internal_a46c56e581ae21322fd607d11d298889942f95d54019c3c5ae3642bae2c5ace8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a46c56e581ae21322fd607d11d298889942f95d54019c3c5ae3642bae2c5ace8->leave($__internal_a46c56e581ae21322fd607d11d298889942f95d54019c3c5ae3642bae2c5ace8_prof);

    }

    // line 96
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c1321e0839985208dac5ac36785e9055ed7e5276bf217a56eb3f9ed73eff01a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1321e0839985208dac5ac36785e9055ed7e5276bf217a56eb3f9ed73eff01a->enter($__internal_1c1321e0839985208dac5ac36785e9055ed7e5276bf217a56eb3f9ed73eff01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1c1321e0839985208dac5ac36785e9055ed7e5276bf217a56eb3f9ed73eff01a->leave($__internal_1c1321e0839985208dac5ac36785e9055ed7e5276bf217a56eb3f9ed73eff01a_prof);

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
        return array (  244 => 96,  233 => 70,  224 => 12,  220 => 11,  216 => 10,  212 => 9,  208 => 8,  203 => 7,  197 => 6,  185 => 5,  176 => 97,  174 => 96,  169 => 94,  165 => 93,  161 => 92,  157 => 91,  153 => 90,  149 => 89,  137 => 80,  130 => 76,  123 => 71,  121 => 70,  112 => 64,  108 => 63,  104 => 62,  100 => 61,  96 => 60,  92 => 59,  82 => 54,  38 => 14,  36 => 6,  32 => 5,  26 => 1,);
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
            <div class=\"top-bar\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-xs-4\">
                            <div class=\"top-number\"><p><i class=\"fa fa-phone-square\"></i>  01 02 03 04 05</p></div>
                        </div>
                        <div class=\"col-sm-6 col-xs-8\">
                            <div class=\"social\">
                                <ul class=\"social-share\">
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li> 
                                    <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-skype\"></i></a></li>
                                </ul>
                                <div class=\"search\">
                                    <form role=\"form\">
                                        <input type=\"text\" class=\"search-form\" autocomplete=\"off\" placeholder=\"Search\">
                                        <i class=\"fa fa-search\"></i>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.container-->
            </div><!--/.top-bar-->

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
                            <li><a href=\"{{ asset (\"about-us.html\") }}\">Infos</a></li>
                            <li><a href=\"{{ path ('permisfute_services') }}\">Services</a></li>
                            <li><a href=\"{{ path ('permisfute_tarifs') }}\">Tarifs</a></li>
                            <li><a href=\"{{ path ('permisfute_contact') }}\">Contact</a></li>  
                            <li><a href=\"{{ path ('permisfute_inscription') }}\">Inscription</a></li> 
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
                        &copy; 2013 <a target=\"_blank\" href=\"{{asset (\"http://shapebootstrap.net/\") }}\" title=\"Free Twitter Bootstrap WordPress Themes and HTML templates\">ShapeBootstrap</a>. All Rights Reserved.
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
