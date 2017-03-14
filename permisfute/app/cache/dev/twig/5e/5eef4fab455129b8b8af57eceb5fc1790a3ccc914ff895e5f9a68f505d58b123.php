<?php

/* @EasyAdmin/default/edit.html.twig */
class __TwigTemplate_10915cc49957589d0d40a0706483e86b4f724343bd024a7f582870a103c316cb extends Twig_Template
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
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ef59a75c4f2795a1cab9d7cd793803cd50d393e58612552d49259c132eaac3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef59a75c4f2795a1cab9d7cd793803cd50d393e58612552d49259c132eaac3f->enter($__internal_4ef59a75c4f2795a1cab9d7cd793803cd50d393e58612552d49259c132eaac3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        // line 1
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_37c254708e2c8222647c37b14089b8a05a37cded79db9866b79b79c1c76b59fe"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
(isset($context["__internal_37c254708e2c8222647c37b14089b8a05a37cded79db9866b79b79c1c76b59fe"]) ? $context["__internal_37c254708e2c8222647c37b14089b8a05a37cded79db9866b79b79c1c76b59fe"] : $this->getContext($context, "__internal_37c254708e2c8222647c37b14089b8a05a37cded79db9866b79b79c1c76b59fe"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
(isset($context["__internal_37c254708e2c8222647c37b14089b8a05a37cded79db9866b79b79c1c76b59fe"]) ? $context["__internal_37c254708e2c8222647c37b14089b8a05a37cded79db9866b79b79c1c76b59fe"] : $this->getContext($context, "__internal_37c254708e2c8222647c37b14089b8a05a37cded79db9866b79b79c1c76b59fe"))), "%entity_id%" =>         // line 6
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ef59a75c4f2795a1cab9d7cd793803cd50d393e58612552d49259c132eaac3f->leave($__internal_4ef59a75c4f2795a1cab9d7cd793803cd50d393e58612552d49259c132eaac3f_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_ecb385dd2edc65c5ef3484d1d90cc65b2226e1d7e80b9d68b6911301fc574621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb385dd2edc65c5ef3484d1d90cc65b2226e1d7e80b9d68b6911301fc574621->enter($__internal_ecb385dd2edc65c5ef3484d1d90cc65b2226e1d7e80b9d68b6911301fc574621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_ecb385dd2edc65c5ef3484d1d90cc65b2226e1d7e80b9d68b6911301fc574621->leave($__internal_ecb385dd2edc65c5ef3484d1d90cc65b2226e1d7e80b9d68b6911301fc574621_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_82ab9779f783de41d5c81951e56f429c73815fba9fdbb51255bf409da56be4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ab9779f783de41d5c81951e56f429c73815fba9fdbb51255bf409da56be4ca->enter($__internal_82ab9779f783de41d5c81951e56f429c73815fba9fdbb51255bf409da56be4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_82ab9779f783de41d5c81951e56f429c73815fba9fdbb51255bf409da56be4ca->leave($__internal_82ab9779f783de41d5c81951e56f429c73815fba9fdbb51255bf409da56be4ca_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_3c486b7a88576a0e2fb10e354f6230be0b07a17093d40139490d1bba51d7d6a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c486b7a88576a0e2fb10e354f6230be0b07a17093d40139490d1bba51d7d6a7->enter($__internal_3c486b7a88576a0e2fb10e354f6230be0b07a17093d40139490d1bba51d7d6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 5
(isset($context["__internal_37c254708e2c8222647c37b14089b8a05a37cded79db9866b79b79c1c76b59fe"]) ? $context["__internal_37c254708e2c8222647c37b14089b8a05a37cded79db9866b79b79c1c76b59fe"] : $this->getContext($context, "__internal_37c254708e2c8222647c37b14089b8a05a37cded79db9866b79b79c1c76b59fe")))) : (        // line 16
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3c486b7a88576a0e2fb10e354f6230be0b07a17093d40139490d1bba51d7d6a7->leave($__internal_3c486b7a88576a0e2fb10e354f6230be0b07a17093d40139490d1bba51d7d6a7_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_b5e0e632c60117df27e432ecb0698c8c05035bcf34e2268e4ac02caee7a6552e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e0e632c60117df27e432ecb0698c8c05035bcf34e2268e4ac02caee7a6552e->enter($__internal_b5e0e632c60117df27e432ecb0698c8c05035bcf34e2268e4ac02caee7a6552e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_b5e0e632c60117df27e432ecb0698c8c05035bcf34e2268e4ac02caee7a6552e->leave($__internal_b5e0e632c60117df27e432ecb0698c8c05035bcf34e2268e4ac02caee7a6552e_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_1dc50c43da70a6d27f45d992808124daf74338d1ad0f69573a30459da673ba82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc50c43da70a6d27f45d992808124daf74338d1ad0f69573a30459da673ba82->enter($__internal_1dc50c43da70a6d27f45d992808124daf74338d1ad0f69573a30459da673ba82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_1dc50c43da70a6d27f45d992808124daf74338d1ad0f69573a30459da673ba82->leave($__internal_1dc50c43da70a6d27f45d992808124daf74338d1ad0f69573a30459da673ba82_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_e2acfb62fa38b86e1416e1b6294a55daf11cd43c707bbf2445115ed821fa9009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2acfb62fa38b86e1416e1b6294a55daf11cd43c707bbf2445115ed821fa9009->enter($__internal_e2acfb62fa38b86e1416e1b6294a55daf11cd43c707bbf2445115ed821fa9009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 29
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 30
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 31
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 32
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 33
        echo "
    ";
        
        $__internal_e2acfb62fa38b86e1416e1b6294a55daf11cd43c707bbf2445115ed821fa9009->leave($__internal_e2acfb62fa38b86e1416e1b6294a55daf11cd43c707bbf2445115ed821fa9009_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_6951b6c45a5d84a9603be4b7b4d38996b6dfd165d127eb048dc17afaaf3be173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6951b6c45a5d84a9603be4b7b4d38996b6dfd165d127eb048dc17afaaf3be173->enter($__internal_6951b6c45a5d84a9603be4b7b4d38996b6dfd165d127eb048dc17afaaf3be173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 38
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 58
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_6951b6c45a5d84a9603be4b7b4d38996b6dfd165d127eb048dc17afaaf3be173->leave($__internal_6951b6c45a5d84a9603be4b7b4d38996b6dfd165d127eb048dc17afaaf3be173_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 58,  173 => 42,  165 => 38,  159 => 37,  151 => 33,  149 => 32,  148 => 31,  147 => 30,  146 => 29,  145 => 28,  143 => 26,  137 => 25,  127 => 22,  121 => 21,  114 => 25,  111 => 24,  108 => 21,  102 => 20,  92 => 16,  91 => 5,  89 => 16,  86 => 15,  84 => 14,  78 => 13,  66 => 11,  54 => 10,  47 => 8,  45 => 6,  44 => 5,  43 => 6,  42 => 5,  41 => 6,  39 => 5,  37 => 4,  35 => 3,  33 => 1,  24 => 8,);
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
{% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'edit edit-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.edit.title is defined ? _entity_config.edit.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'edit',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "@EasyAdmin/default/edit.html.twig", "C:\\wamp64\\www\\permisfute\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\edit.html.twig");
    }
}
