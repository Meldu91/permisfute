<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_bd8e19189ea09bc83a90919bd8f6ac16ad801cecc890189e3a323240b08535ec extends Twig_Template
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
        $__internal_9a5fd48b2f23252a1d42ad07ca91aa1fb143c44afb471e95d166e911843f1932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5fd48b2f23252a1d42ad07ca91aa1fb143c44afb471e95d166e911843f1932->enter($__internal_9a5fd48b2f23252a1d42ad07ca91aa1fb143c44afb471e95d166e911843f1932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_9a5fd48b2f23252a1d42ad07ca91aa1fb143c44afb471e95d166e911843f1932->leave($__internal_9a5fd48b2f23252a1d42ad07ca91aa1fb143c44afb471e95d166e911843f1932_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\permisfute\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
