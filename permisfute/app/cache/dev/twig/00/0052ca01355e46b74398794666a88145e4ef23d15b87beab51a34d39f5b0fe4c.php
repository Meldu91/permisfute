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
        $__internal_26c52912997c8f6eb8c88466bb1477544bf5705c9b924aecbdb8f759feb84fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c52912997c8f6eb8c88466bb1477544bf5705c9b924aecbdb8f759feb84fe1->enter($__internal_26c52912997c8f6eb8c88466bb1477544bf5705c9b924aecbdb8f759feb84fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

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
        
        $__internal_26c52912997c8f6eb8c88466bb1477544bf5705c9b924aecbdb8f759feb84fe1->leave($__internal_26c52912997c8f6eb8c88466bb1477544bf5705c9b924aecbdb8f759feb84fe1_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_deb5ddd6ce25e6ff0fc249248f6ddcf9c2f47342c5d428d85040cca8505262ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb5ddd6ce25e6ff0fc249248f6ddcf9c2f47342c5d428d85040cca8505262ad->enter($__internal_deb5ddd6ce25e6ff0fc249248f6ddcf9c2f47342c5d428d85040cca8505262ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_deb5ddd6ce25e6ff0fc249248f6ddcf9c2f47342c5d428d85040cca8505262ad->leave($__internal_deb5ddd6ce25e6ff0fc249248f6ddcf9c2f47342c5d428d85040cca8505262ad_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_d6cfa6d83d50f404d4a01a59d7f96ee69d5ba87f589c004892b8a7f24020a30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6cfa6d83d50f404d4a01a59d7f96ee69d5ba87f589c004892b8a7f24020a30d->enter($__internal_d6cfa6d83d50f404d4a01a59d7f96ee69d5ba87f589c004892b8a7f24020a30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_d6cfa6d83d50f404d4a01a59d7f96ee69d5ba87f589c004892b8a7f24020a30d->leave($__internal_d6cfa6d83d50f404d4a01a59d7f96ee69d5ba87f589c004892b8a7f24020a30d_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_cb190d2b182286b0c42488b397b9d892296e70edf79a8ca9a8bb91fec9b96b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb190d2b182286b0c42488b397b9d892296e70edf79a8ca9a8bb91fec9b96b4e->enter($__internal_cb190d2b182286b0c42488b397b9d892296e70edf79a8ca9a8bb91fec9b96b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_cb190d2b182286b0c42488b397b9d892296e70edf79a8ca9a8bb91fec9b96b4e->leave($__internal_cb190d2b182286b0c42488b397b9d892296e70edf79a8ca9a8bb91fec9b96b4e_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_8f8e1728e962e9f8d7c4401681b06ab40a032a805c0aa33565da4bc1065f55cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8e1728e962e9f8d7c4401681b06ab40a032a805c0aa33565da4bc1065f55cf->enter($__internal_8f8e1728e962e9f8d7c4401681b06ab40a032a805c0aa33565da4bc1065f55cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_8f8e1728e962e9f8d7c4401681b06ab40a032a805c0aa33565da4bc1065f55cf->leave($__internal_8f8e1728e962e9f8d7c4401681b06ab40a032a805c0aa33565da4bc1065f55cf_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_cf70dac4fe6a00ed1adb6df565c6bff521359c63b49af0336c5b8b0c4f2bd5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf70dac4fe6a00ed1adb6df565c6bff521359c63b49af0336c5b8b0c4f2bd5f5->enter($__internal_cf70dac4fe6a00ed1adb6df565c6bff521359c63b49af0336c5b8b0c4f2bd5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_cf70dac4fe6a00ed1adb6df565c6bff521359c63b49af0336c5b8b0c4f2bd5f5->leave($__internal_cf70dac4fe6a00ed1adb6df565c6bff521359c63b49af0336c5b8b0c4f2bd5f5_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d3bbf61b0957f3b3529f497209d3d6fdcc1ac90f788ef7585c91f885cc61733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3bbf61b0957f3b3529f497209d3d6fdcc1ac90f788ef7585c91f885cc61733->enter($__internal_9d3bbf61b0957f3b3529f497209d3d6fdcc1ac90f788ef7585c91f885cc61733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9d3bbf61b0957f3b3529f497209d3d6fdcc1ac90f788ef7585c91f885cc61733->leave($__internal_9d3bbf61b0957f3b3529f497209d3d6fdcc1ac90f788ef7585c91f885cc61733_prof);

    }

    // line 58
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_fe61438158b2a2a07a50d231e09e0da8d3ea90489a37aa029c272c97e3a4b457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe61438158b2a2a07a50d231e09e0da8d3ea90489a37aa029c272c97e3a4b457->enter($__internal_fe61438158b2a2a07a50d231e09e0da8d3ea90489a37aa029c272c97e3a4b457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_fe61438158b2a2a07a50d231e09e0da8d3ea90489a37aa029c272c97e3a4b457->leave($__internal_fe61438158b2a2a07a50d231e09e0da8d3ea90489a37aa029c272c97e3a4b457_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_597ffa160cb474b02d287a15315cf698e5531a1c9d9ca2a0c3ff6104bdb4240e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597ffa160cb474b02d287a15315cf698e5531a1c9d9ca2a0c3ff6104bdb4240e->enter($__internal_597ffa160cb474b02d287a15315cf698e5531a1c9d9ca2a0c3ff6104bdb4240e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_597ffa160cb474b02d287a15315cf698e5531a1c9d9ca2a0c3ff6104bdb4240e->leave($__internal_597ffa160cb474b02d287a15315cf698e5531a1c9d9ca2a0c3ff6104bdb4240e_prof);

    }

    // line 60
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_ff8b2a34ce4d184638e3c08b3126b23457a328e59aaedc1cc6a05f51c5de9928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8b2a34ce4d184638e3c08b3126b23457a328e59aaedc1cc6a05f51c5de9928->enter($__internal_ff8b2a34ce4d184638e3c08b3126b23457a328e59aaedc1cc6a05f51c5de9928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_ff8b2a34ce4d184638e3c08b3126b23457a328e59aaedc1cc6a05f51c5de9928->leave($__internal_ff8b2a34ce4d184638e3c08b3126b23457a328e59aaedc1cc6a05f51c5de9928_prof);

    }

    // line 62
    public function block_header($context, array $blocks = array())
    {
        $__internal_3553c91e836eebe2e05fa093b7c6dc430a815dbf4b07db22615e5e19aac25356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3553c91e836eebe2e05fa093b7c6dc430a815dbf4b07db22615e5e19aac25356->enter($__internal_3553c91e836eebe2e05fa093b7c6dc430a815dbf4b07db22615e5e19aac25356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_3553c91e836eebe2e05fa093b7c6dc430a815dbf4b07db22615e5e19aac25356->leave($__internal_3553c91e836eebe2e05fa093b7c6dc430a815dbf4b07db22615e5e19aac25356_prof);

    }

    // line 69
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_2f3f1dd42255e7e4351f59c259b0c94a0228ebbccf7319348107d0b7fb4c44b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3f1dd42255e7e4351f59c259b0c94a0228ebbccf7319348107d0b7fb4c44b8->enter($__internal_2f3f1dd42255e7e4351f59c259b0c94a0228ebbccf7319348107d0b7fb4c44b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_2f3f1dd42255e7e4351f59c259b0c94a0228ebbccf7319348107d0b7fb4c44b8->leave($__internal_2f3f1dd42255e7e4351f59c259b0c94a0228ebbccf7319348107d0b7fb4c44b8_prof);

    }

    // line 77
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_66c01566fee2b570b219d5ab96125d5eda22f54a2019bcff0204fabb1465fdeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c01566fee2b570b219d5ab96125d5eda22f54a2019bcff0204fabb1465fdeb->enter($__internal_66c01566fee2b570b219d5ab96125d5eda22f54a2019bcff0204fabb1465fdeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

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
        
        $__internal_66c01566fee2b570b219d5ab96125d5eda22f54a2019bcff0204fabb1465fdeb->leave($__internal_66c01566fee2b570b219d5ab96125d5eda22f54a2019bcff0204fabb1465fdeb_prof);

    }

    // line 80
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_b9475c03aa805c620802ebe872d9d8d0792fed3fbe992d6f83596656eae99728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9475c03aa805c620802ebe872d9d8d0792fed3fbe992d6f83596656eae99728->enter($__internal_b9475c03aa805c620802ebe872d9d8d0792fed3fbe992d6f83596656eae99728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_b9475c03aa805c620802ebe872d9d8d0792fed3fbe992d6f83596656eae99728->leave($__internal_b9475c03aa805c620802ebe872d9d8d0792fed3fbe992d6f83596656eae99728_prof);

    }

    // line 98
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6a9fc714be541ac241d07785e04273f40f0c4c5a6be049b0c700414cb91108d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9fc714be541ac241d07785e04273f40f0c4c5a6be049b0c700414cb91108d8->enter($__internal_6a9fc714be541ac241d07785e04273f40f0c4c5a6be049b0c700414cb91108d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 99
        echo "                <section class=\"sidebar\">
                    ";
        // line 100
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 107
        echo "                </section>
            ";
        
        $__internal_6a9fc714be541ac241d07785e04273f40f0c4c5a6be049b0c700414cb91108d8->leave($__internal_6a9fc714be541ac241d07785e04273f40f0c4c5a6be049b0c700414cb91108d8_prof);

    }

    // line 100
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_f488bceab9775827b601341959b7398dc729f1a1ff9dedbc8ac3515754e752bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f488bceab9775827b601341959b7398dc729f1a1ff9dedbc8ac3515754e752bb->enter($__internal_f488bceab9775827b601341959b7398dc729f1a1ff9dedbc8ac3515754e752bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 101
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 102
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 105
        echo "
                    ";
        
        $__internal_f488bceab9775827b601341959b7398dc729f1a1ff9dedbc8ac3515754e752bb->leave($__internal_f488bceab9775827b601341959b7398dc729f1a1ff9dedbc8ac3515754e752bb_prof);

    }

    // line 112
    public function block_content($context, array $blocks = array())
    {
        $__internal_bd2a6e4f51d1b9aff482670a749183797eaf8fc27028b517e43fd0a68af0f358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2a6e4f51d1b9aff482670a749183797eaf8fc27028b517e43fd0a68af0f358->enter($__internal_bd2a6e4f51d1b9aff482670a749183797eaf8fc27028b517e43fd0a68af0f358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_bd2a6e4f51d1b9aff482670a749183797eaf8fc27028b517e43fd0a68af0f358->leave($__internal_bd2a6e4f51d1b9aff482670a749183797eaf8fc27028b517e43fd0a68af0f358_prof);

    }

    // line 113
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_0082c04af32a90709c605544167012cf985131ea161ac909e0977240180ea274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0082c04af32a90709c605544167012cf985131ea161ac909e0977240180ea274->enter($__internal_0082c04af32a90709c605544167012cf985131ea161ac909e0977240180ea274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 114
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_0082c04af32a90709c605544167012cf985131ea161ac909e0977240180ea274->leave($__internal_0082c04af32a90709c605544167012cf985131ea161ac909e0977240180ea274_prof);

    }

    // line 118
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_2a1490742d33e750f2e802ec4812d7c9f5b4e004a239f81b16c5aaeb112e5ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1490742d33e750f2e802ec4812d7c9f5b4e004a239f81b16c5aaeb112e5ad1->enter($__internal_2a1490742d33e750f2e802ec4812d7c9f5b4e004a239f81b16c5aaeb112e5ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 119
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_2a1490742d33e750f2e802ec4812d7c9f5b4e004a239f81b16c5aaeb112e5ad1->leave($__internal_2a1490742d33e750f2e802ec4812d7c9f5b4e004a239f81b16c5aaeb112e5ad1_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_9482c2d776ca3e0ce199bb6b0c8965b53f237a664ea27c7364a145805071708d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9482c2d776ca3e0ce199bb6b0c8965b53f237a664ea27c7364a145805071708d->enter($__internal_9482c2d776ca3e0ce199bb6b0c8965b53f237a664ea27c7364a145805071708d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_9482c2d776ca3e0ce199bb6b0c8965b53f237a664ea27c7364a145805071708d->leave($__internal_9482c2d776ca3e0ce199bb6b0c8965b53f237a664ea27c7364a145805071708d_prof);

    }

    // line 121
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_e1695484cc42dc5ee71bf5ee443248b4c0753609d231e2a5782a3063cf8bdc58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1695484cc42dc5ee71bf5ee443248b4c0753609d231e2a5782a3063cf8bdc58->enter($__internal_e1695484cc42dc5ee71bf5ee443248b4c0753609d231e2a5782a3063cf8bdc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

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
        
        $__internal_e1695484cc42dc5ee71bf5ee443248b4c0753609d231e2a5782a3063cf8bdc58->leave($__internal_e1695484cc42dc5ee71bf5ee443248b4c0753609d231e2a5782a3063cf8bdc58_prof);

    }

    // line 133
    public function block_main($context, array $blocks = array())
    {
        $__internal_b6e7392f64bf67032b87d765200a0f491c3ce98459f2b3d12e74dc8591580661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e7392f64bf67032b87d765200a0f491c3ce98459f2b3d12e74dc8591580661->enter($__internal_b6e7392f64bf67032b87d765200a0f491c3ce98459f2b3d12e74dc8591580661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_b6e7392f64bf67032b87d765200a0f491c3ce98459f2b3d12e74dc8591580661->leave($__internal_b6e7392f64bf67032b87d765200a0f491c3ce98459f2b3d12e74dc8591580661_prof);

    }

    // line 140
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_2163248aed62540477a75f09d0b4c73f0822ff5dd5cbad172f6e731d1b749a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2163248aed62540477a75f09d0b4c73f0822ff5dd5cbad172f6e731d1b749a29->enter($__internal_2163248aed62540477a75f09d0b4c73f0822ff5dd5cbad172f6e731d1b749a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_2163248aed62540477a75f09d0b4c73f0822ff5dd5cbad172f6e731d1b749a29->leave($__internal_2163248aed62540477a75f09d0b4c73f0822ff5dd5cbad172f6e731d1b749a29_prof);

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
