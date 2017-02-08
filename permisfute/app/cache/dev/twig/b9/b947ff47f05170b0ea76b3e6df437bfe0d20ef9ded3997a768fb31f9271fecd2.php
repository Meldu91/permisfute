<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6de3c6cdbe6af6370c0edd1c8572d6f4261e32bd202e2728dd1cf80f52f9c94f extends Twig_Template
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
        $__internal_3ea21f7c6b6d7554ad74f3227eb88001c6e111c28c4423de36f003f66ff13b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea21f7c6b6d7554ad74f3227eb88001c6e111c28c4423de36f003f66ff13b57->enter($__internal_3ea21f7c6b6d7554ad74f3227eb88001c6e111c28c4423de36f003f66ff13b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3ea21f7c6b6d7554ad74f3227eb88001c6e111c28c4423de36f003f66ff13b57->leave($__internal_3ea21f7c6b6d7554ad74f3227eb88001c6e111c28c4423de36f003f66ff13b57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\permisfute\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
