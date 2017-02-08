<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_cffcd104cf2f351de8bac0ac4986439cfee228b88fc9038ee6c7b13af631d755 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_9a2ce71021999f2569baf38e0a9e7a09282fbd8ce11914da23784ae6c5e4a4c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2ce71021999f2569baf38e0a9e7a09282fbd8ce11914da23784ae6c5e4a4c1->enter($__internal_9a2ce71021999f2569baf38e0a9e7a09282fbd8ce11914da23784ae6c5e4a4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a2ce71021999f2569baf38e0a9e7a09282fbd8ce11914da23784ae6c5e4a4c1->leave($__internal_9a2ce71021999f2569baf38e0a9e7a09282fbd8ce11914da23784ae6c5e4a4c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e432dd27c46201c4a00a3ce83c2c83226571b4fa73e80588c858b3a95731a1bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e432dd27c46201c4a00a3ce83c2c83226571b4fa73e80588c858b3a95731a1bc->enter($__internal_e432dd27c46201c4a00a3ce83c2c83226571b4fa73e80588c858b3a95731a1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_e432dd27c46201c4a00a3ce83c2c83226571b4fa73e80588c858b3a95731a1bc->leave($__internal_e432dd27c46201c4a00a3ce83c2c83226571b4fa73e80588c858b3a95731a1bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
