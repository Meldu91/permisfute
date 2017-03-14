<?php

/* @EasyAdmin/default/new.html.twig */
class __TwigTemplate_fa7369ce2778da3f6490aae23a9006d4e38a574482f1a3dbb73039b823e3de87 extends Twig_Template
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
        $__internal_b88af4eef4d3b514f8c8463ebca95b80c2f28c4d8e9d4025c82940c35537a7f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b88af4eef4d3b514f8c8463ebca95b80c2f28c4d8e9d4025c82940c35537a7f0->enter($__internal_b88af4eef4d3b514f8c8463ebca95b80c2f28c4d8e9d4025c82940c35537a7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_a7813a057baf6180bbb8c5b70c34c18e1e041ed766e4824ff1882b1969d17cd4"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
(isset($context["__internal_a7813a057baf6180bbb8c5b70c34c18e1e041ed766e4824ff1882b1969d17cd4"]) ? $context["__internal_a7813a057baf6180bbb8c5b70c34c18e1e041ed766e4824ff1882b1969d17cd4"] : $this->getContext($context, "__internal_a7813a057baf6180bbb8c5b70c34c18e1e041ed766e4824ff1882b1969d17cd4"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
(isset($context["__internal_a7813a057baf6180bbb8c5b70c34c18e1e041ed766e4824ff1882b1969d17cd4"]) ? $context["__internal_a7813a057baf6180bbb8c5b70c34c18e1e041ed766e4824ff1882b1969d17cd4"] : $this->getContext($context, "__internal_a7813a057baf6180bbb8c5b70c34c18e1e041ed766e4824ff1882b1969d17cd4"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b88af4eef4d3b514f8c8463ebca95b80c2f28c4d8e9d4025c82940c35537a7f0->leave($__internal_b88af4eef4d3b514f8c8463ebca95b80c2f28c4d8e9d4025c82940c35537a7f0_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_d12e5d07a145bf3d126eae0b575c0c5eb188dbe2d556cf51cb91c12178aea6fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12e5d07a145bf3d126eae0b575c0c5eb188dbe2d556cf51cb91c12178aea6fc->enter($__internal_d12e5d07a145bf3d126eae0b575c0c5eb188dbe2d556cf51cb91c12178aea6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_d12e5d07a145bf3d126eae0b575c0c5eb188dbe2d556cf51cb91c12178aea6fc->leave($__internal_d12e5d07a145bf3d126eae0b575c0c5eb188dbe2d556cf51cb91c12178aea6fc_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_0fadd650593675ad559ffd118bd66f245c63f10a7c99f44c4f10a36329c9c0f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fadd650593675ad559ffd118bd66f245c63f10a7c99f44c4f10a36329c9c0f1->enter($__internal_0fadd650593675ad559ffd118bd66f245c63f10a7c99f44c4f10a36329c9c0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_0fadd650593675ad559ffd118bd66f245c63f10a7c99f44c4f10a36329c9c0f1->leave($__internal_0fadd650593675ad559ffd118bd66f245c63f10a7c99f44c4f10a36329c9c0f1_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_7ffb87dbd341f28b4756b0fef8ea7ed8104549dfc18b9ccfebc1bfdb5982ead0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ffb87dbd341f28b4756b0fef8ea7ed8104549dfc18b9ccfebc1bfdb5982ead0->enter($__internal_7ffb87dbd341f28b4756b0fef8ea7ed8104549dfc18b9ccfebc1bfdb5982ead0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "new", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 4
(isset($context["__internal_a7813a057baf6180bbb8c5b70c34c18e1e041ed766e4824ff1882b1969d17cd4"]) ? $context["__internal_a7813a057baf6180bbb8c5b70c34c18e1e041ed766e4824ff1882b1969d17cd4"] : $this->getContext($context, "__internal_a7813a057baf6180bbb8c5b70c34c18e1e041ed766e4824ff1882b1969d17cd4")))) : (        // line 15
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7ffb87dbd341f28b4756b0fef8ea7ed8104549dfc18b9ccfebc1bfdb5982ead0->leave($__internal_7ffb87dbd341f28b4756b0fef8ea7ed8104549dfc18b9ccfebc1bfdb5982ead0_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_eb1947a35af11ac9b9c04a35fd335902afad7c753e17604784a06e8696e2941a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1947a35af11ac9b9c04a35fd335902afad7c753e17604784a06e8696e2941a->enter($__internal_eb1947a35af11ac9b9c04a35fd335902afad7c753e17604784a06e8696e2941a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_eb1947a35af11ac9b9c04a35fd335902afad7c753e17604784a06e8696e2941a->leave($__internal_eb1947a35af11ac9b9c04a35fd335902afad7c753e17604784a06e8696e2941a_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_1aaa25c7772bdac812b991dd4eaafab3c4a35bd9b11395352c0f13051abbeead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aaa25c7772bdac812b991dd4eaafab3c4a35bd9b11395352c0f13051abbeead->enter($__internal_1aaa25c7772bdac812b991dd4eaafab3c4a35bd9b11395352c0f13051abbeead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_1aaa25c7772bdac812b991dd4eaafab3c4a35bd9b11395352c0f13051abbeead->leave($__internal_1aaa25c7772bdac812b991dd4eaafab3c4a35bd9b11395352c0f13051abbeead_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_fe80c8ed084d04fbee5d18b3b851e24ef20931c7706c437b520bc51dc6dce750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe80c8ed084d04fbee5d18b3b851e24ef20931c7706c437b520bc51dc6dce750->enter($__internal_fe80c8ed084d04fbee5d18b3b851e24ef20931c7706c437b520bc51dc6dce750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_fe80c8ed084d04fbee5d18b3b851e24ef20931c7706c437b520bc51dc6dce750->leave($__internal_fe80c8ed084d04fbee5d18b3b851e24ef20931c7706c437b520bc51dc6dce750_prof);

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
", "@EasyAdmin/default/new.html.twig", "C:\\wamp64\\www\\permisfute\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\new.html.twig");
    }
}
