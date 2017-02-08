<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_7c7b59fa2062b383862c8bc24bbed2aba455a53b70fafb71d2ba42605e12415b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_385edfcc9fc9d9dfed88363c52fb3230d6e761e16d6abff3ef9e96618ae1a559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385edfcc9fc9d9dfed88363c52fb3230d6e761e16d6abff3ef9e96618ae1a559->enter($__internal_385edfcc9fc9d9dfed88363c52fb3230d6e761e16d6abff3ef9e96618ae1a559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_385edfcc9fc9d9dfed88363c52fb3230d6e761e16d6abff3ef9e96618ae1a559->leave($__internal_385edfcc9fc9d9dfed88363c52fb3230d6e761e16d6abff3ef9e96618ae1a559_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\permisfute\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
