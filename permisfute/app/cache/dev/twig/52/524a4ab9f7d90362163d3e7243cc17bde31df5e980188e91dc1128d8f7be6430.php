<?php

/* @EasyAdmin/default/new.html.twig */
class __TwigTemplate_3be970bb02536df9bf9b46886ff86c1a5bed59745918ce6893092a569dfc0645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed486ff6441ce29375034f31b5e3e94ea63e35098c39b0cc9acf2fb765ed82ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed486ff6441ce29375034f31b5e3e94ea63e35098c39b0cc9acf2fb765ed82ad->enter($__internal_ed486ff6441ce29375034f31b5e3e94ea63e35098c39b0cc9acf2fb765ed82ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_a81eda91fec569edef54c7697820223d911e02330de5533ab4729e6bca962dc9"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
(isset($context["__internal_a81eda91fec569edef54c7697820223d911e02330de5533ab4729e6bca962dc9"]) ? $context["__internal_a81eda91fec569edef54c7697820223d911e02330de5533ab4729e6bca962dc9"] : $this->getContext($context, "__internal_a81eda91fec569edef54c7697820223d911e02330de5533ab4729e6bca962dc9"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
(isset($context["__internal_a81eda91fec569edef54c7697820223d911e02330de5533ab4729e6bca962dc9"]) ? $context["__internal_a81eda91fec569edef54c7697820223d911e02330de5533ab4729e6bca962dc9"] : $this->getContext($context, "__internal_a81eda91fec569edef54c7697820223d911e02330de5533ab4729e6bca962dc9"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed486ff6441ce29375034f31b5e3e94ea63e35098c39b0cc9acf2fb765ed82ad->leave($__internal_ed486ff6441ce29375034f31b5e3e94ea63e35098c39b0cc9acf2fb765ed82ad_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_842d089b972dd21d0330d4ee1a7a8e97e9e970eacc73ba67c0f6bb90ff2ad1bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_842d089b972dd21d0330d4ee1a7a8e97e9e970eacc73ba67c0f6bb90ff2ad1bf->enter($__internal_842d089b972dd21d0330d4ee1a7a8e97e9e970eacc73ba67c0f6bb90ff2ad1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_842d089b972dd21d0330d4ee1a7a8e97e9e970eacc73ba67c0f6bb90ff2ad1bf->leave($__internal_842d089b972dd21d0330d4ee1a7a8e97e9e970eacc73ba67c0f6bb90ff2ad1bf_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_a43aa9c01c839c316a8e8a4fde08e7efa06c147b02c9fcc32b3b9d8a92164f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43aa9c01c839c316a8e8a4fde08e7efa06c147b02c9fcc32b3b9d8a92164f38->enter($__internal_a43aa9c01c839c316a8e8a4fde08e7efa06c147b02c9fcc32b3b9d8a92164f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_a43aa9c01c839c316a8e8a4fde08e7efa06c147b02c9fcc32b3b9d8a92164f38->leave($__internal_a43aa9c01c839c316a8e8a4fde08e7efa06c147b02c9fcc32b3b9d8a92164f38_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_6437a04e1a3284da6e57be715da5ae25c57ffc702664abee7f7032a3919f8798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6437a04e1a3284da6e57be715da5ae25c57ffc702664abee7f7032a3919f8798->enter($__internal_6437a04e1a3284da6e57be715da5ae25c57ffc702664abee7f7032a3919f8798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "new", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 4
(isset($context["__internal_a81eda91fec569edef54c7697820223d911e02330de5533ab4729e6bca962dc9"]) ? $context["__internal_a81eda91fec569edef54c7697820223d911e02330de5533ab4729e6bca962dc9"] : $this->getContext($context, "__internal_a81eda91fec569edef54c7697820223d911e02330de5533ab4729e6bca962dc9")))) : (        // line 15
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6437a04e1a3284da6e57be715da5ae25c57ffc702664abee7f7032a3919f8798->leave($__internal_6437a04e1a3284da6e57be715da5ae25c57ffc702664abee7f7032a3919f8798_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_adda9036ad6041e92fd2e9aff4f8e0c1a10cc7d3a787cace76fd938eb44e6d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adda9036ad6041e92fd2e9aff4f8e0c1a10cc7d3a787cace76fd938eb44e6d6b->enter($__internal_adda9036ad6041e92fd2e9aff4f8e0c1a10cc7d3a787cace76fd938eb44e6d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_adda9036ad6041e92fd2e9aff4f8e0c1a10cc7d3a787cace76fd938eb44e6d6b->leave($__internal_adda9036ad6041e92fd2e9aff4f8e0c1a10cc7d3a787cace76fd938eb44e6d6b_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_ba220011d52fa73d7dd3752514150f6acf95f35a6358424188caf18912b9d6a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba220011d52fa73d7dd3752514150f6acf95f35a6358424188caf18912b9d6a6->enter($__internal_ba220011d52fa73d7dd3752514150f6acf95f35a6358424188caf18912b9d6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_ba220011d52fa73d7dd3752514150f6acf95f35a6358424188caf18912b9d6a6->leave($__internal_ba220011d52fa73d7dd3752514150f6acf95f35a6358424188caf18912b9d6a6_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_66cb9e403da5fa438f8f4cabc8527fe705faa20abdf999cc9ff18ee9cd5e0601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66cb9e403da5fa438f8f4cabc8527fe705faa20abdf999cc9ff18ee9cd5e0601->enter($__internal_66cb9e403da5fa438f8f4cabc8527fe705faa20abdf999cc9ff18ee9cd5e0601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_66cb9e403da5fa438f8f4cabc8527fe705faa20abdf999cc9ff18ee9cd5e0601->leave($__internal_66cb9e403da5fa438f8f4cabc8527fe705faa20abdf999cc9ff18ee9cd5e0601_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 36,  141 => 30,  133 => 26,  127 => 25,  117 => 21,  104 => 20,  98 => 19,  88 => 15,  87 => 4,  85 => 15,  82 => 14,  80 => 13,  74 => 12,  62 => 10,  50 => 9,  43 => 7,  41 => 4,  40 => 5,  39 => 4,  38 => 5,  36 => 4,  34 => 3,  32 => 1,  23 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-new-' ~ _entity_config.name %}
{% block body_class 'new new-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "@EasyAdmin/default/new.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\new.html.twig");
    }
}
