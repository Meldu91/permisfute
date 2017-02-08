<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_cbe135b2c2323b9c225061de73d84e04630926d4a5bd687b903ace10493e3a19 extends Twig_Template
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
        $__internal_e77e1ef3e501aa14fb74f97c5b209fa9845dc18a96008d4b543e9b6b790aa0dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e77e1ef3e501aa14fb74f97c5b209fa9845dc18a96008d4b543e9b6b790aa0dc->enter($__internal_e77e1ef3e501aa14fb74f97c5b209fa9845dc18a96008d4b543e9b6b790aa0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e77e1ef3e501aa14fb74f97c5b209fa9845dc18a96008d4b543e9b6b790aa0dc->leave($__internal_e77e1ef3e501aa14fb74f97c5b209fa9845dc18a96008d4b543e9b6b790aa0dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\www\\permisfute\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
