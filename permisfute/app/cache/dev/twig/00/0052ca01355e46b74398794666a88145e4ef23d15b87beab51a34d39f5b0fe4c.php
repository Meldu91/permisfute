<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_06f6291f70bfd096a8f2e9eb172d1b06f462e880b58218e5408d7fb33dcc1079 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de15fda81c714eea2692c16d83658fb130131e4490d62852ba33286d39753a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de15fda81c714eea2692c16d83658fb130131e4490d62852ba33286d39753a07->enter($__internal_de15fda81c714eea2692c16d83658fb130131e4490d62852ba33286d39753a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "
        <!--[if lt IE 9]>
            <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/html5shiv.min.css"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/respond.min.css"), "html", null, true);
        echo "\"></script>
        <![endif]-->
    </head>

    ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 147
        echo "</html>
";
        
        $__internal_de15fda81c714eea2692c16d83658fb130131e4490d62852ba33286d39753a07->leave($__internal_de15fda81c714eea2692c16d83658fb130131e4490d62852ba33286d39753a07_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_f3ed1190d9af845754d9518aca5c2e58ce3269e95ecfa97b62c82e6c58c85197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ed1190d9af845754d9518aca5c2e58ce3269e95ecfa97b62c82e6c58c85197->enter($__internal_f3ed1190d9af845754d9518aca5c2e58ce3269e95ecfa97b62c82e6c58c85197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_f3ed1190d9af845754d9518aca5c2e58ce3269e95ecfa97b62c82e6c58c85197->leave($__internal_f3ed1190d9af845754d9518aca5c2e58ce3269e95ecfa97b62c82e6c58c85197_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_1977de2d3931bd6f54a620fbacd106672830855ef27b198df74cea27dc380760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1977de2d3931bd6f54a620fbacd106672830855ef27b198df74cea27dc380760->enter($__internal_1977de2d3931bd6f54a620fbacd106672830855ef27b198df74cea27dc380760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_1977de2d3931bd6f54a620fbacd106672830855ef27b198df74cea27dc380760->leave($__internal_1977de2d3931bd6f54a620fbacd106672830855ef27b198df74cea27dc380760_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_2ae82d47c752b689beaee1823090e362c73cb73a207546e8ad6ab4fbe797e105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae82d47c752b689beaee1823090e362c73cb73a207546e8ad6ab4fbe797e105->enter($__internal_2ae82d47c752b689beaee1823090e362c73cb73a207546e8ad6ab4fbe797e105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_2ae82d47c752b689beaee1823090e362c73cb73a207546e8ad6ab4fbe797e105->leave($__internal_2ae82d47c752b689beaee1823090e362c73cb73a207546e8ad6ab4fbe797e105_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_9801aa91eb7a908bece800e42d1f0c6a5dc7e3dce63aa3855beb34cf3eb43168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9801aa91eb7a908bece800e42d1f0c6a5dc7e3dce63aa3855beb34cf3eb43168->enter($__internal_9801aa91eb7a908bece800e42d1f0c6a5dc7e3dce63aa3855beb34cf3eb43168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_9801aa91eb7a908bece800e42d1f0c6a5dc7e3dce63aa3855beb34cf3eb43168->leave($__internal_9801aa91eb7a908bece800e42d1f0c6a5dc7e3dce63aa3855beb34cf3eb43168_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_f88eee6d16e269cac8940444387c0d481fe81273ad575b5975fdd7ea711572c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f88eee6d16e269cac8940444387c0d481fe81273ad575b5975fdd7ea711572c6->enter($__internal_f88eee6d16e269cac8940444387c0d481fe81273ad575b5975fdd7ea711572c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_f88eee6d16e269cac8940444387c0d481fe81273ad575b5975fdd7ea711572c6->leave($__internal_f88eee6d16e269cac8940444387c0d481fe81273ad575b5975fdd7ea711572c6_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_a680655e3bdf07424c2f98162ff8ea05723f9090d0eef63a24da55469d83f47b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a680655e3bdf07424c2f98162ff8ea05723f9090d0eef63a24da55469d83f47b->enter($__internal_a680655e3bdf07424c2f98162ff8ea05723f9090d0eef63a24da55469d83f47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 58
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 60
        $this->displayBlock('wrapper', $context, $blocks);
        // line 138
        echo "        </div>

        ";
        // line 140
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 141
        echo "
        ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 143
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "    </body>
    ";
        
        $__internal_a680655e3bdf07424c2f98162ff8ea05723f9090d0eef63a24da55469d83f47b->leave($__internal_a680655e3bdf07424c2f98162ff8ea05723f9090d0eef63a24da55469d83f47b_prof);

    }

    // line 58
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_7473c701f953b30a67e24252f71518a4e4c30ccc3da1898bf6751e746a30051f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7473c701f953b30a67e24252f71518a4e4c30ccc3da1898bf6751e746a30051f->enter($__internal_7473c701f953b30a67e24252f71518a4e4c30ccc3da1898bf6751e746a30051f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_7473c701f953b30a67e24252f71518a4e4c30ccc3da1898bf6751e746a30051f->leave($__internal_7473c701f953b30a67e24252f71518a4e4c30ccc3da1898bf6751e746a30051f_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_5687c772d78339bc57610ac09e9c5bcab8043998c80be88f35ee88df0cc42f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5687c772d78339bc57610ac09e9c5bcab8043998c80be88f35ee88df0cc42f91->enter($__internal_5687c772d78339bc57610ac09e9c5bcab8043998c80be88f35ee88df0cc42f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_5687c772d78339bc57610ac09e9c5bcab8043998c80be88f35ee88df0cc42f91->leave($__internal_5687c772d78339bc57610ac09e9c5bcab8043998c80be88f35ee88df0cc42f91_prof);

    }

    // line 60
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_5abb63039b6056ae8e305d9b0c8ad72334073b9d19b92ee35bf865ee1b0c79ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5abb63039b6056ae8e305d9b0c8ad72334073b9d19b92ee35bf865ee1b0c79ec->enter($__internal_5abb63039b6056ae8e305d9b0c8ad72334073b9d19b92ee35bf865ee1b0c79ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 61
        echo "            <header class=\"main-header\">
            ";
        // line 62
        $this->displayBlock('header', $context, $blocks);
        // line 95
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 98
        $this->displayBlock('sidebar', $context, $blocks);
        // line 109
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 112
        $this->displayBlock('content', $context, $blocks);
        // line 136
        echo "            </div>
        ";
        
        $__internal_5abb63039b6056ae8e305d9b0c8ad72334073b9d19b92ee35bf865ee1b0c79ec->leave($__internal_5abb63039b6056ae8e305d9b0c8ad72334073b9d19b92ee35bf865ee1b0c79ec_prof);

    }

    // line 62
    public function block_header($context, array $blocks = array())
    {
        $__internal_d48f36dcb33703b0f912f2b6f3505238145c69fa86dd83a15184ec34009b525b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d48f36dcb33703b0f912f2b6f3505238145c69fa86dd83a15184ec34009b525b->enter($__internal_d48f36dcb33703b0f912f2b6f3505238145c69fa86dd83a15184ec34009b525b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 63
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 69
        $this->displayBlock('header_logo', $context, $blocks);
        // line 74
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 77
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 92
        echo "                    </div>
                </nav>
            ";
        
        $__internal_d48f36dcb33703b0f912f2b6f3505238145c69fa86dd83a15184ec34009b525b->leave($__internal_d48f36dcb33703b0f912f2b6f3505238145c69fa86dd83a15184ec34009b525b_prof);

    }

    // line 69
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_8fe34601ba19a89230ae5ad9d907fe7a0c4be70062bfcc0e23a2ce32c682e43d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe34601ba19a89230ae5ad9d907fe7a0c4be70062bfcc0e23a2ce32c682e43d->enter($__internal_8fe34601ba19a89230ae5ad9d907fe7a0c4be70062bfcc0e23a2ce32c682e43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 70
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 71
        echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_8fe34601ba19a89230ae5ad9d907fe7a0c4be70062bfcc0e23a2ce32c682e43d->leave($__internal_8fe34601ba19a89230ae5ad9d907fe7a0c4be70062bfcc0e23a2ce32c682e43d_prof);

    }

    // line 77
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_2888d5b39ad79cefbee88c3b4c8a2856d78712c8513c52591bf76b2475026f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2888d5b39ad79cefbee88c3b4c8a2856d78712c8513c52591bf76b2475026f55->enter($__internal_2888d5b39ad79cefbee88c3b4c8a2856d78712c8513c52591bf76b2475026f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 78
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"user user-menu\">
                                ";
        // line 80
        $this->displayBlock('user_menu', $context, $blocks);
        // line 89
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_2888d5b39ad79cefbee88c3b4c8a2856d78712c8513c52591bf76b2475026f55->leave($__internal_2888d5b39ad79cefbee88c3b4c8a2856d78712c8513c52591bf76b2475026f55_prof);

    }

    // line 80
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_aa203a3793fd5dc36bcce8f69cf0ae41e030d5c9dc3a3b40c7e5d7f662284f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa203a3793fd5dc36bcce8f69cf0ae41e030d5c9dc3a3b40c7e5d7f662284f81->enter($__internal_aa203a3793fd5dc36bcce8f69cf0ae41e030d5c9dc3a3b40c7e5d7f662284f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 81
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                                    <i class=\"hidden-xs fa fa-user\"></i>
                                    ";
        // line 83
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) : (""))) {
            // line 84
            echo "                                        ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        }
        // line 88
        echo "                                ";
        
        $__internal_aa203a3793fd5dc36bcce8f69cf0ae41e030d5c9dc3a3b40c7e5d7f662284f81->leave($__internal_aa203a3793fd5dc36bcce8f69cf0ae41e030d5c9dc3a3b40c7e5d7f662284f81_prof);

    }

    // line 98
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_802f79b2609530e2d00df1e75a4817b74b9bd28852983ecee16ffe2544d3d438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802f79b2609530e2d00df1e75a4817b74b9bd28852983ecee16ffe2544d3d438->enter($__internal_802f79b2609530e2d00df1e75a4817b74b9bd28852983ecee16ffe2544d3d438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 99
        echo "                <section class=\"sidebar\">
                    ";
        // line 100
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 107
        echo "                </section>
            ";
        
        $__internal_802f79b2609530e2d00df1e75a4817b74b9bd28852983ecee16ffe2544d3d438->leave($__internal_802f79b2609530e2d00df1e75a4817b74b9bd28852983ecee16ffe2544d3d438_prof);

    }

    // line 100
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_7c53d2a6551b54f4e13e5c1a39ced66a0b8965ab651bf8ac867767d9c3b78772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c53d2a6551b54f4e13e5c1a39ced66a0b8965ab651bf8ac867767d9c3b78772->enter($__internal_7c53d2a6551b54f4e13e5c1a39ced66a0b8965ab651bf8ac867767d9c3b78772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 101
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 102
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 105
        echo "
                    ";
        
        $__internal_7c53d2a6551b54f4e13e5c1a39ced66a0b8965ab651bf8ac867767d9c3b78772->leave($__internal_7c53d2a6551b54f4e13e5c1a39ced66a0b8965ab651bf8ac867767d9c3b78772_prof);

    }

    // line 112
    public function block_content($context, array $blocks = array())
    {
        $__internal_f4a3f57d932b2b9bb082684b09334627a8c8e43a3763c7a7c11df2e0ecee00e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a3f57d932b2b9bb082684b09334627a8c8e43a3763c7a7c11df2e0ecee00e8->enter($__internal_f4a3f57d932b2b9bb082684b09334627a8c8e43a3763c7a7c11df2e0ecee00e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 113
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 116
        echo "
                <section class=\"content-header\">
                ";
        // line 118
        $this->displayBlock('content_header', $context, $blocks);
        // line 121
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 130
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 133
        $this->displayBlock('main', $context, $blocks);
        // line 134
        echo "                </section>
            ";
        
        $__internal_f4a3f57d932b2b9bb082684b09334627a8c8e43a3763c7a7c11df2e0ecee00e8->leave($__internal_f4a3f57d932b2b9bb082684b09334627a8c8e43a3763c7a7c11df2e0ecee00e8_prof);

    }

    // line 113
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_1ab01540513ebed353e54c45d7844301ce690548d2e5e0bd3c5effcf3a5cc292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab01540513ebed353e54c45d7844301ce690548d2e5e0bd3c5effcf3a5cc292->enter($__internal_1ab01540513ebed353e54c45d7844301ce690548d2e5e0bd3c5effcf3a5cc292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 114
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_1ab01540513ebed353e54c45d7844301ce690548d2e5e0bd3c5effcf3a5cc292->leave($__internal_1ab01540513ebed353e54c45d7844301ce690548d2e5e0bd3c5effcf3a5cc292_prof);

    }

    // line 118
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_28f24b8c2105e2e9f322eba9592bb3a60b5bc9dda9af289da1fa9abe7dfa4721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28f24b8c2105e2e9f322eba9592bb3a60b5bc9dda9af289da1fa9abe7dfa4721->enter($__internal_28f24b8c2105e2e9f322eba9592bb3a60b5bc9dda9af289da1fa9abe7dfa4721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 119
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_28f24b8c2105e2e9f322eba9592bb3a60b5bc9dda9af289da1fa9abe7dfa4721->leave($__internal_28f24b8c2105e2e9f322eba9592bb3a60b5bc9dda9af289da1fa9abe7dfa4721_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_04474c0d41681a4f66b1752b38d97f35aaa1e1721ed66342f723664a5f6775d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04474c0d41681a4f66b1752b38d97f35aaa1e1721ed66342f723664a5f6775d7->enter($__internal_04474c0d41681a4f66b1752b38d97f35aaa1e1721ed66342f723664a5f6775d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_04474c0d41681a4f66b1752b38d97f35aaa1e1721ed66342f723664a5f6775d7->leave($__internal_04474c0d41681a4f66b1752b38d97f35aaa1e1721ed66342f723664a5f6775d7_prof);

    }

    // line 121
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_0a7a36431b5ac7975b8f030e4aaed3de48873a11653a36c1df1084f05a46890e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7a36431b5ac7975b8f030e4aaed3de48873a11653a36c1df1084f05a46890e->enter($__internal_0a7a36431b5ac7975b8f030e4aaed3de48873a11653a36c1df1084f05a46890e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 122
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 123
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 125
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 129
        echo "                ";
        
        $__internal_0a7a36431b5ac7975b8f030e4aaed3de48873a11653a36c1df1084f05a46890e->leave($__internal_0a7a36431b5ac7975b8f030e4aaed3de48873a11653a36c1df1084f05a46890e_prof);

    }

    // line 133
    public function block_main($context, array $blocks = array())
    {
        $__internal_e148d8c5e7dac605e6460081362e1c221fbba2a6a2606396f360c0e9b61ad23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e148d8c5e7dac605e6460081362e1c221fbba2a6a2606396f360c0e9b61ad23e->enter($__internal_e148d8c5e7dac605e6460081362e1c221fbba2a6a2606396f360c0e9b61ad23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_e148d8c5e7dac605e6460081362e1c221fbba2a6a2606396f360c0e9b61ad23e->leave($__internal_e148d8c5e7dac605e6460081362e1c221fbba2a6a2606396f360c0e9b61ad23e_prof);

    }

    // line 140
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_2388f8fcaec9f79acf93cbddefa8b9344f33cd9aa06715a7ddc8111f44e41668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2388f8fcaec9f79acf93cbddefa8b9344f33cd9aa06715a7ddc8111f44e41668->enter($__internal_2388f8fcaec9f79acf93cbddefa8b9344f33cd9aa06715a7ddc8111f44e41668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_2388f8fcaec9f79acf93cbddefa8b9344f33cd9aa06715a7ddc8111f44e41668->leave($__internal_2388f8fcaec9f79acf93cbddefa8b9344f33cd9aa06715a7ddc8111f44e41668_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  597 => 140,  586 => 133,  579 => 129,  572 => 125,  568 => 123,  565 => 122,  559 => 121,  539 => 119,  533 => 118,  523 => 114,  517 => 113,  509 => 134,  507 => 133,  502 => 130,  499 => 121,  497 => 118,  493 => 116,  490 => 113,  484 => 112,  476 => 105,  474 => 102,  472 => 101,  466 => 100,  458 => 107,  456 => 100,  453 => 99,  447 => 98,  440 => 88,  434 => 86,  428 => 84,  426 => 83,  420 => 81,  414 => 80,  405 => 89,  403 => 80,  399 => 78,  393 => 77,  383 => 71,  374 => 70,  368 => 69,  359 => 92,  357 => 77,  352 => 74,  350 => 69,  343 => 65,  339 => 63,  333 => 62,  325 => 136,  323 => 112,  318 => 109,  316 => 98,  311 => 95,  309 => 62,  306 => 61,  300 => 60,  279 => 58,  271 => 145,  262 => 143,  258 => 142,  255 => 141,  253 => 140,  249 => 138,  247 => 60,  237 => 58,  231 => 57,  213 => 30,  207 => 29,  198 => 43,  195 => 42,  192 => 29,  186 => 28,  174 => 25,  171 => 24,  165 => 23,  155 => 15,  149 => 13,  143 => 12,  131 => 10,  123 => 147,  121 => 57,  114 => 53,  110 => 52,  106 => 50,  101 => 48,  96 => 47,  94 => 46,  91 => 45,  89 => 28,  86 => 27,  84 => 23,  81 => 22,  72 => 20,  68 => 19,  65 => 18,  63 => 12,  58 => 10,  47 => 2,  44 => 1,);
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
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}

        <!--[if lt IE 9]>
            <script src=\"{{ asset('bundles/easyadmin/stylesheet/html5shiv.min.css') }}\"></script>
            <script src=\"{{ asset('bundles/easyadmin/stylesheet/respond.min.css') }}\"></script>
        <![endif]-->
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                                    <i class=\"hidden-xs fa fa-user\"></i>
                                    {% if app.user|default %}
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "@EasyAdmin/default/layout.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\layout.html.twig");
    }
}
