<?php

/* @EasyAdmin/form/bootstrap_3_layout.html.twig */
class __TwigTemplate_a971f6bd772bb979841eca873dc4d3f7e0b66a8fb5123c00e3de26371661dccb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@EasyAdmin/form/bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'empty_collection' => array($this, 'block_empty_collection'),
                'vich_file_row' => array($this, 'block_vich_file_row'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_row' => array($this, 'block_vich_image_row'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'item_actions' => array($this, 'block_item_actions'),
                'easyadmin_autocomplete_widget' => array($this, 'block_easyadmin_autocomplete_widget'),
                'easyadmin_autocomplete_inner_label' => array($this, 'block_easyadmin_autocomplete_inner_label'),
                'easyadmin_divider_row' => array($this, 'block_easyadmin_divider_row'),
                'easyadmin_section_row' => array($this, 'block_easyadmin_section_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bf09199b1961660aeebd47035a8f9d392147cda9b0296aa2b888a5935bd7e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf09199b1961660aeebd47035a8f9d392147cda9b0296aa2b888a5935bd7e40->enter($__internal_5bf09199b1961660aeebd47035a8f9d392147cda9b0296aa2b888a5935bd7e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 19
        echo "
";
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('form_widget', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('button_widget', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('money_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 100
        echo "
";
        // line 101
        $this->displayBlock('date_widget', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('time_widget', $context, $blocks);
        // line 134
        echo "
";
        // line 135
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 182
        echo "
";
        // line 183
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 204
        echo "
";
        // line 206
        echo "
";
        // line 207
        $this->displayBlock('form_label', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('choice_label', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 221
        echo "
";
        // line 222
        $this->displayBlock('radio_label', $context, $blocks);
        // line 225
        echo "
";
        // line 226
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 244
        echo "
";
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('form_row', $context, $blocks);
        // line 270
        echo "
";
        // line 271
        $this->displayBlock('collection_row', $context, $blocks);
        // line 306
        echo "
";
        // line 307
        $this->displayBlock('button_row', $context, $blocks);
        // line 312
        echo "
";
        // line 313
        $this->displayBlock('choice_row', $context, $blocks);
        // line 317
        echo "
";
        // line 318
        $this->displayBlock('date_row', $context, $blocks);
        // line 322
        echo "
";
        // line 323
        $this->displayBlock('time_row', $context, $blocks);
        // line 327
        echo "
";
        // line 328
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 332
        echo "
";
        // line 333
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 339
        echo "
";
        // line 340
        $this->displayBlock('radio_row', $context, $blocks);
        // line 346
        echo "
";
        // line 348
        $this->displayBlock('form_errors', $context, $blocks);
        // line 366
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 377
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 382
        echo "
";
        // line 383
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 387
        echo "
";
        // line 388
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 409
        echo "
";
        // line 410
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 414
        echo "
";
        // line 415
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 437
        echo "
";
        // line 439
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 521
        echo "
";
        // line 523
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 534
        echo "
";
        // line 535
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 539
        echo "
";
        // line 541
        $this->displayBlock('easyadmin_divider_row', $context, $blocks);
        // line 546
        echo "
";
        // line 548
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
        
        $__internal_5bf09199b1961660aeebd47035a8f9d392147cda9b0296aa2b888a5935bd7e40->leave($__internal_5bf09199b1961660aeebd47035a8f9d392147cda9b0296aa2b888a5935bd7e40_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_df80b03d8eb376fc8edf787469b4d09c49d9b43c06d0d330d89d87d37d182d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df80b03d8eb376fc8edf787469b4d09c49d9b43c06d0d330d89d87d37d182d91->enter($__internal_df80b03d8eb376fc8edf787469b4d09c49d9b43c06d0d330d89d87d37d182d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_join_filter(array(0 => (((((            // line 7
array_key_exists("_easyadmin_form_type", $context)) ? (_twig_default_filter((isset($context["_easyadmin_form_type"]) ? $context["_easyadmin_form_type"] : $this->getContext($context, "_easyadmin_form_type")), "")) : ("")) == "horizontal")) ? ("form-horizontal") : ("form-vertical")), 1 => (($this->getAttribute(            // line 8
(isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")), 2 => ($this->getAttribute(            // line 9
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) . "-form")), " "), "data-view" => $this->getAttribute(            // line 11
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()), "data-entity" => $this->getAttribute($this->getAttribute(            // line 12
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "data-entity-id" => $this->getAttribute(            // line 13
(isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
            // line 15
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_df80b03d8eb376fc8edf787469b4d09c49d9b43c06d0d330d89d87d37d182d91->leave($__internal_df80b03d8eb376fc8edf787469b4d09c49d9b43c06d0d330d89d87d37d182d91_prof);

    }

    // line 22
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_35f4a8c9ca62bd3007bc2932125b50046852c9ed64259a5ea105e7bdd221ab3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f4a8c9ca62bd3007bc2932125b50046852c9ed64259a5ea105e7bdd221ab3f->enter($__internal_35f4a8c9ca62bd3007bc2932125b50046852c9ed64259a5ea105e7bdd221ab3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 23
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 25
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 26
            echo "        ";
            ob_start();
            // line 27
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 40
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 42
            echo (isset($context["remove_item_javascript"]) ? $context["remove_item_javascript"] : $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_35f4a8c9ca62bd3007bc2932125b50046852c9ed64259a5ea105e7bdd221ab3f->leave($__internal_35f4a8c9ca62bd3007bc2932125b50046852c9ed64259a5ea105e7bdd221ab3f_prof);

    }

    // line 50
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_6d54c90001f4ac67308608996f7eb1ab8cbeade22b786573456287e9286db4ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d54c90001f4ac67308608996f7eb1ab8cbeade22b786573456287e9286db4ab->enter($__internal_6d54c90001f4ac67308608996f7eb1ab8cbeade22b786573456287e9286db4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 51
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 52
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 54
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6d54c90001f4ac67308608996f7eb1ab8cbeade22b786573456287e9286db4ab->leave($__internal_6d54c90001f4ac67308608996f7eb1ab8cbeade22b786573456287e9286db4ab_prof);

    }

    // line 57
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_946a4a180ebd9476e9dcb4d0aa1787b84ad0648edbb1b8e026350c5fd7cf50e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946a4a180ebd9476e9dcb4d0aa1787b84ad0648edbb1b8e026350c5fd7cf50e5->enter($__internal_946a4a180ebd9476e9dcb4d0aa1787b84ad0648edbb1b8e026350c5fd7cf50e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 58
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 59
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_946a4a180ebd9476e9dcb4d0aa1787b84ad0648edbb1b8e026350c5fd7cf50e5->leave($__internal_946a4a180ebd9476e9dcb4d0aa1787b84ad0648edbb1b8e026350c5fd7cf50e5_prof);

    }

    // line 62
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_08565a430ad5590dd3716aed2ae20f7cf73c5679993d1bbb42bd0e472090b378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08565a430ad5590dd3716aed2ae20f7cf73c5679993d1bbb42bd0e472090b378->enter($__internal_08565a430ad5590dd3716aed2ae20f7cf73c5679993d1bbb42bd0e472090b378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 63
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 64
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_08565a430ad5590dd3716aed2ae20f7cf73c5679993d1bbb42bd0e472090b378->leave($__internal_08565a430ad5590dd3716aed2ae20f7cf73c5679993d1bbb42bd0e472090b378_prof);

    }

    // line 67
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_f1df5df91c7aa21dd46e7470011458e5290827965a3a3522c5ed1f21cd062d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1df5df91c7aa21dd46e7470011458e5290827965a3a3522c5ed1f21cd062d88->enter($__internal_f1df5df91c7aa21dd46e7470011458e5290827965a3a3522c5ed1f21cd062d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 68
        echo "<div class=\"input-group\">
        ";
        // line 69
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 70
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 71
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 73
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 74
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 75
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 77
        echo "    </div>";
        
        $__internal_f1df5df91c7aa21dd46e7470011458e5290827965a3a3522c5ed1f21cd062d88->leave($__internal_f1df5df91c7aa21dd46e7470011458e5290827965a3a3522c5ed1f21cd062d88_prof);

    }

    // line 80
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_566e544bfa208068ec7d54165433c68d22a959f81c9dbf5b7579b968ceb2b44e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566e544bfa208068ec7d54165433c68d22a959f81c9dbf5b7579b968ceb2b44e->enter($__internal_566e544bfa208068ec7d54165433c68d22a959f81c9dbf5b7579b968ceb2b44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 81
        echo "<div class=\"input-group\">";
        // line 82
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 83
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_566e544bfa208068ec7d54165433c68d22a959f81c9dbf5b7579b968ceb2b44e->leave($__internal_566e544bfa208068ec7d54165433c68d22a959f81c9dbf5b7579b968ceb2b44e_prof);

    }

    // line 87
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_e2bba0de0dbc85a356a850bac0fcdbcfa63ed915f7edc4102a807cf668f5c9a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2bba0de0dbc85a356a850bac0fcdbcfa63ed915f7edc4102a807cf668f5c9a0->enter($__internal_e2bba0de0dbc85a356a850bac0fcdbcfa63ed915f7edc4102a807cf668f5c9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 88
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 89
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 91
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 92
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 93
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 95
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 96
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 97
            echo "</div>";
        }
        
        $__internal_e2bba0de0dbc85a356a850bac0fcdbcfa63ed915f7edc4102a807cf668f5c9a0->leave($__internal_e2bba0de0dbc85a356a850bac0fcdbcfa63ed915f7edc4102a807cf668f5c9a0_prof);

    }

    // line 101
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_a256c2cc680c7fa73b2984375c5947696cfbf4f292844144a245abd42f101d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a256c2cc680c7fa73b2984375c5947696cfbf4f292844144a245abd42f101d2f->enter($__internal_a256c2cc680c7fa73b2984375c5947696cfbf4f292844144a245abd42f101d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 102
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 103
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 105
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 106
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 107
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 109
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 110
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 111
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 112
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 114
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 115
                echo "</div>";
            }
        }
        
        $__internal_a256c2cc680c7fa73b2984375c5947696cfbf4f292844144a245abd42f101d2f->leave($__internal_a256c2cc680c7fa73b2984375c5947696cfbf4f292844144a245abd42f101d2f_prof);

    }

    // line 120
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_49d7f7156c04d249abda60f1996a522e51339b46c3820e24a0cda4f11cfc2d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d7f7156c04d249abda60f1996a522e51339b46c3820e24a0cda4f11cfc2d54->enter($__internal_49d7f7156c04d249abda60f1996a522e51339b46c3820e24a0cda4f11cfc2d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 121
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 122
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 124
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 125
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 126
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 128
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 129
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 130
                echo "</div>";
            }
        }
        
        $__internal_49d7f7156c04d249abda60f1996a522e51339b46c3820e24a0cda4f11cfc2d54->leave($__internal_49d7f7156c04d249abda60f1996a522e51339b46c3820e24a0cda4f11cfc2d54_prof);

    }

    // line 135
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_96fb8f71a67ca313256b2110cd301895881de3782d2323c021996b6d5e7d61cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96fb8f71a67ca313256b2110cd301895881de3782d2323c021996b6d5e7d61cc->enter($__internal_96fb8f71a67ca313256b2110cd301895881de3782d2323c021996b6d5e7d61cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 136
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 137
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 138
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 139
            echo "        ";
            ob_start();
            // line 140
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 143
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 153
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 155
            echo (isset($context["remove_item_javascript"]) ? $context["remove_item_javascript"] : $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_96fb8f71a67ca313256b2110cd301895881de3782d2323c021996b6d5e7d61cc->leave($__internal_96fb8f71a67ca313256b2110cd301895881de3782d2323c021996b6d5e7d61cc_prof);

    }

    // line 163
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_4f640e8993bde82d0edd1fc37b224f51dd661946c7cdf4a0b6fe1ae83936fe2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f640e8993bde82d0edd1fc37b224f51dd661946c7cdf4a0b6fe1ae83936fe2a->enter($__internal_4f640e8993bde82d0edd1fc37b224f51dd661946c7cdf4a0b6fe1ae83936fe2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 164
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 165
            echo "<div class=\"control-group\">";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 167
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 168
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "</div>";
        } else {
            // line 173
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 175
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 176
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "</div>";
        }
        
        $__internal_4f640e8993bde82d0edd1fc37b224f51dd661946c7cdf4a0b6fe1ae83936fe2a->leave($__internal_4f640e8993bde82d0edd1fc37b224f51dd661946c7cdf4a0b6fe1ae83936fe2a_prof);

    }

    // line 183
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_498444b872ffe3e5fc61e080cefccf7f6f75dad209079eb4c393267aa0e840dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498444b872ffe3e5fc61e080cefccf7f6f75dad209079eb4c393267aa0e840dd->enter($__internal_498444b872ffe3e5fc61e080cefccf7f6f75dad209079eb4c393267aa0e840dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 184
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 185
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 186
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 188
            echo "<div class=\"checkbox\">";
            // line 189
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 190
            echo "</div>";
        }
        
        $__internal_498444b872ffe3e5fc61e080cefccf7f6f75dad209079eb4c393267aa0e840dd->leave($__internal_498444b872ffe3e5fc61e080cefccf7f6f75dad209079eb4c393267aa0e840dd_prof);

    }

    // line 194
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_637ecc7712897481eb7467afde95db86be0111e95bc28f8e5e16bf2b5c034894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_637ecc7712897481eb7467afde95db86be0111e95bc28f8e5e16bf2b5c034894->enter($__internal_637ecc7712897481eb7467afde95db86be0111e95bc28f8e5e16bf2b5c034894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 195
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 196
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 197
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 199
            echo "<div class=\"radio\">";
            // line 200
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 201
            echo "</div>";
        }
        
        $__internal_637ecc7712897481eb7467afde95db86be0111e95bc28f8e5e16bf2b5c034894->leave($__internal_637ecc7712897481eb7467afde95db86be0111e95bc28f8e5e16bf2b5c034894_prof);

    }

    // line 207
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_e9d5edfa6b0396a571725d288a41059b01e381608bb11d0195e8a77e49144692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d5edfa6b0396a571725d288a41059b01e381608bb11d0195e8a77e49144692->enter($__internal_e9d5edfa6b0396a571725d288a41059b01e381608bb11d0195e8a77e49144692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 208
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 209
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_e9d5edfa6b0396a571725d288a41059b01e381608bb11d0195e8a77e49144692->leave($__internal_e9d5edfa6b0396a571725d288a41059b01e381608bb11d0195e8a77e49144692_prof);

    }

    // line 212
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_57c7d4072c07a8717e42da9b92d6df18bef65937b26962de27d184e6a0e9ad80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c7d4072c07a8717e42da9b92d6df18bef65937b26962de27d184e6a0e9ad80->enter($__internal_57c7d4072c07a8717e42da9b92d6df18bef65937b26962de27d184e6a0e9ad80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 214
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 215
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_57c7d4072c07a8717e42da9b92d6df18bef65937b26962de27d184e6a0e9ad80->leave($__internal_57c7d4072c07a8717e42da9b92d6df18bef65937b26962de27d184e6a0e9ad80_prof);

    }

    // line 218
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_30406e92f249d83d64f379796e1a3d34378704888a734f41e415685bd2454b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30406e92f249d83d64f379796e1a3d34378704888a734f41e415685bd2454b9e->enter($__internal_30406e92f249d83d64f379796e1a3d34378704888a734f41e415685bd2454b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 219
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_30406e92f249d83d64f379796e1a3d34378704888a734f41e415685bd2454b9e->leave($__internal_30406e92f249d83d64f379796e1a3d34378704888a734f41e415685bd2454b9e_prof);

    }

    // line 222
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_d1e9640c76f7829094893a7354eeaf5219caf7c30d076f2907eaf6febf52cd5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e9640c76f7829094893a7354eeaf5219caf7c30d076f2907eaf6febf52cd5d->enter($__internal_d1e9640c76f7829094893a7354eeaf5219caf7c30d076f2907eaf6febf52cd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 223
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d1e9640c76f7829094893a7354eeaf5219caf7c30d076f2907eaf6febf52cd5d->leave($__internal_d1e9640c76f7829094893a7354eeaf5219caf7c30d076f2907eaf6febf52cd5d_prof);

    }

    // line 226
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_b2277e72f899f415f9ab79fa7dd1d744e25098797783d7e7a7acd7cf3dbf2304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2277e72f899f415f9ab79fa7dd1d744e25098797783d7e7a7acd7cf3dbf2304->enter($__internal_b2277e72f899f415f9ab79fa7dd1d744e25098797783d7e7a7acd7cf3dbf2304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 227
        echo "    ";
        // line 228
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 229
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 230
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 231
                echo "        ";
            }
            // line 232
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 233
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 234
                echo "        ";
            }
            // line 235
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 236
                echo "            ";
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 237
                echo "        ";
            }
            // line 238
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 239
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            // line 240
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()))) : ("")), "html", null, true);
            // line 241
            echo "</label>
    ";
        }
        
        $__internal_b2277e72f899f415f9ab79fa7dd1d744e25098797783d7e7a7acd7cf3dbf2304->leave($__internal_b2277e72f899f415f9ab79fa7dd1d744e25098797783d7e7a7acd7cf3dbf2304_prof);

    }

    // line 247
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_11e94eeeb42d95f00734be4c18cde5bb538454179629179a867d134d477be947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e94eeeb42d95f00734be4c18cde5bb538454179629179a867d134d477be947->enter($__internal_11e94eeeb42d95f00734be4c18cde5bb538454179629179a867d134d477be947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 248
        $context["_field_type"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 249
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        ";
        // line 250
        $context["_field_label"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array"), null)) : (null));
        // line 251
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("translation_domain" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array())) + (twig_test_empty($_label_ = (isset($context["_field_label"]) ? $context["_field_label"] : $this->getContext($context, "_field_label"))) ? array() : array("label" => $_label_)));
        // line 252
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 254
        if ((twig_in_filter((isset($context["_field_type"]) ? $context["_field_type"] : $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "date", 2 => "time", 3 => "birthday")) && (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 255
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 257
            if ((null === (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 258
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 263
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 265
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 266
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()));
            echo "</span>
        ";
        }
        // line 268
        echo "    </div>";
        
        $__internal_11e94eeeb42d95f00734be4c18cde5bb538454179629179a867d134d477be947->leave($__internal_11e94eeeb42d95f00734be4c18cde5bb538454179629179a867d134d477be947_prof);

    }

    // line 271
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_5c4574b3de81da943a45359d4714862bc310df03aa4f69ac6fd6e2a11c5e5daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4574b3de81da943a45359d4714862bc310df03aa4f69ac6fd6e2a11c5e5daf->enter($__internal_5c4574b3de81da943a45359d4714862bc310df03aa4f69ac6fd6e2a11c5e5daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        // line 272
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 274
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add")), false)) : (false))) {
            // line 275
            echo "        ";
            ob_start();
            // line 276
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 279
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 287
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 288
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 297
            echo "
        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"";
            // line 299
            echo (isset($context["js_add_item"]) ? $context["js_add_item"] : $this->getContext($context, "js_add_item"));
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 301
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_5c4574b3de81da943a45359d4714862bc310df03aa4f69ac6fd6e2a11c5e5daf->leave($__internal_5c4574b3de81da943a45359d4714862bc310df03aa4f69ac6fd6e2a11c5e5daf_prof);

    }

    // line 307
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_7096cdb66819ccacb8fc07c3c53fb01741decc509534435c26b7a29cc8119a17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7096cdb66819ccacb8fc07c3c53fb01741decc509534435c26b7a29cc8119a17->enter($__internal_7096cdb66819ccacb8fc07c3c53fb01741decc509534435c26b7a29cc8119a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 308
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 309
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 310
        echo "</div>";
        
        $__internal_7096cdb66819ccacb8fc07c3c53fb01741decc509534435c26b7a29cc8119a17->leave($__internal_7096cdb66819ccacb8fc07c3c53fb01741decc509534435c26b7a29cc8119a17_prof);

    }

    // line 313
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_d85cf526355da76d07d74128948e776b557a69245972ee2618212b43a124c836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85cf526355da76d07d74128948e776b557a69245972ee2618212b43a124c836->enter($__internal_d85cf526355da76d07d74128948e776b557a69245972ee2618212b43a124c836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 314
        $context["force_error"] = true;
        // line 315
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d85cf526355da76d07d74128948e776b557a69245972ee2618212b43a124c836->leave($__internal_d85cf526355da76d07d74128948e776b557a69245972ee2618212b43a124c836_prof);

    }

    // line 318
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_b164cb47b129c40601a8ade919063c7d83efa92c6afd1876cf53ba11e573c182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b164cb47b129c40601a8ade919063c7d83efa92c6afd1876cf53ba11e573c182->enter($__internal_b164cb47b129c40601a8ade919063c7d83efa92c6afd1876cf53ba11e573c182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 319
        $context["force_error"] = true;
        // line 320
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b164cb47b129c40601a8ade919063c7d83efa92c6afd1876cf53ba11e573c182->leave($__internal_b164cb47b129c40601a8ade919063c7d83efa92c6afd1876cf53ba11e573c182_prof);

    }

    // line 323
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_2c80c4b8e3f917eb840ad736ecf23357f69d8cac067f0b012e63fa802463b42e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c80c4b8e3f917eb840ad736ecf23357f69d8cac067f0b012e63fa802463b42e->enter($__internal_2c80c4b8e3f917eb840ad736ecf23357f69d8cac067f0b012e63fa802463b42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 324
        $context["force_error"] = true;
        // line 325
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2c80c4b8e3f917eb840ad736ecf23357f69d8cac067f0b012e63fa802463b42e->leave($__internal_2c80c4b8e3f917eb840ad736ecf23357f69d8cac067f0b012e63fa802463b42e_prof);

    }

    // line 328
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_9cf7ee54dcf6953e9a1ee4c30f2726077d7a823b308e97c1905d5ee21f6b42c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf7ee54dcf6953e9a1ee4c30f2726077d7a823b308e97c1905d5ee21f6b42c4->enter($__internal_9cf7ee54dcf6953e9a1ee4c30f2726077d7a823b308e97c1905d5ee21f6b42c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 329
        $context["force_error"] = true;
        // line 330
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9cf7ee54dcf6953e9a1ee4c30f2726077d7a823b308e97c1905d5ee21f6b42c4->leave($__internal_9cf7ee54dcf6953e9a1ee4c30f2726077d7a823b308e97c1905d5ee21f6b42c4_prof);

    }

    // line 333
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_287dd675dc839004d873ac7cb1667c3fa466d4697747323254fbf37588121033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_287dd675dc839004d873ac7cb1667c3fa466d4697747323254fbf37588121033->enter($__internal_287dd675dc839004d873ac7cb1667c3fa466d4697747323254fbf37588121033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 334
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 335
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 336
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 337
        echo "</div>";
        
        $__internal_287dd675dc839004d873ac7cb1667c3fa466d4697747323254fbf37588121033->leave($__internal_287dd675dc839004d873ac7cb1667c3fa466d4697747323254fbf37588121033_prof);

    }

    // line 340
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_0313cfbd6943ef5ffa973cb7e7f175664516e7cb28a624859739ee05c1d666e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0313cfbd6943ef5ffa973cb7e7f175664516e7cb28a624859739ee05c1d666e2->enter($__internal_0313cfbd6943ef5ffa973cb7e7f175664516e7cb28a624859739ee05c1d666e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 341
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 342
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 343
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 344
        echo "</div>";
        
        $__internal_0313cfbd6943ef5ffa973cb7e7f175664516e7cb28a624859739ee05c1d666e2->leave($__internal_0313cfbd6943ef5ffa973cb7e7f175664516e7cb28a624859739ee05c1d666e2_prof);

    }

    // line 348
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_5f425f685bb5471965dbff28712f71e3fdb55594f1e4af48e709030c358184de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f425f685bb5471965dbff28712f71e3fdb55594f1e4af48e709030c358184de->enter($__internal_5f425f685bb5471965dbff28712f71e3fdb55594f1e4af48e709030c358184de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 349
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
        // line 350
        echo "    ";
        if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) >= 1)) {
            // line 351
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 352
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 353
            if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) == 1)) {
                // line 354
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 356
                echo "                <ul>
                    ";
                // line 357
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 358
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 360
                echo "                </ul>
            ";
            }
            // line 362
            echo "        </div>
    ";
        }
        
        $__internal_5f425f685bb5471965dbff28712f71e3fdb55594f1e4af48e709030c358184de->leave($__internal_5f425f685bb5471965dbff28712f71e3fdb55594f1e4af48e709030c358184de_prof);

    }

    // line 366
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_6c96f419b5039b8ce31abd9254b6d10352afc79a67ed588fb0dfb3bcc59a0664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c96f419b5039b8ce31abd9254b6d10352afc79a67ed588fb0dfb3bcc59a0664->enter($__internal_6c96f419b5039b8ce31abd9254b6d10352afc79a67ed588fb0dfb3bcc59a0664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 367
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 368
            echo "        ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
    ";
        }
        // line 370
        echo "    ";
        if ((twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) || $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 371
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)));
            // line 372
            echo "    ";
        }
        // line 373
        echo "
    ";
        // line 374
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        
        $__internal_6c96f419b5039b8ce31abd9254b6d10352afc79a67ed588fb0dfb3bcc59a0664->leave($__internal_6c96f419b5039b8ce31abd9254b6d10352afc79a67ed588fb0dfb3bcc59a0664_prof);

    }

    // line 377
    public function block_empty_collection($context, array $blocks = array())
    {
        $__internal_3e5d949d2371ef2a16794d7207583b58cd2c196e168768692d144ea0cf63a139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5d949d2371ef2a16794d7207583b58cd2c196e168768692d144ea0cf63a139->enter($__internal_3e5d949d2371ef2a16794d7207583b58cd2c196e168768692d144ea0cf63a139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 378
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 379
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
        
        $__internal_3e5d949d2371ef2a16794d7207583b58cd2c196e168768692d144ea0cf63a139->leave($__internal_3e5d949d2371ef2a16794d7207583b58cd2c196e168768692d144ea0cf63a139_prof);

    }

    // line 383
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_09749b1775d1ee63d4e9139ae925f9ec86342c23f28f90e7f0c4b84ea9da550f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09749b1775d1ee63d4e9139ae925f9ec86342c23f28f90e7f0c4b84ea9da550f->enter($__internal_09749b1775d1ee63d4e9139ae925f9ec86342c23f28f90e7f0c4b84ea9da550f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 384
        echo "    ";
        $context["force_error"] = true;
        // line 385
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_09749b1775d1ee63d4e9139ae925f9ec86342c23f28f90e7f0c4b84ea9da550f->leave($__internal_09749b1775d1ee63d4e9139ae925f9ec86342c23f28f90e7f0c4b84ea9da550f_prof);

    }

    // line 388
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_be3ec22fb79b1693395adc3728a81a6c91f37477c00e9f040b2f07538e2627a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be3ec22fb79b1693395adc3728a81a6c91f37477c00e9f040b2f07538e2627a8->enter($__internal_be3ec22fb79b1693395adc3728a81a6c91f37477c00e9f040b2f07538e2627a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 389
        ob_start();
        // line 390
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 391
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 392
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "/"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle")));
            // line 393
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["download_title"]) ? $context["download_title"] : $this->getContext($context, "download_title")), "html", null, true);
            echo "</a>
        ";
        }
        // line 395
        echo "
        <div class=\"row\">
            ";
        // line 397
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 398
            echo "            <div class=\"col-sm-3 col-md-2\">
                ";
            // line 399
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
            </div>
            ";
        }
        // line 402
        echo "            <div class=\"";
        echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        echo "\">
                ";
        // line 403
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_be3ec22fb79b1693395adc3728a81a6c91f37477c00e9f040b2f07538e2627a8->leave($__internal_be3ec22fb79b1693395adc3728a81a6c91f37477c00e9f040b2f07538e2627a8_prof);

    }

    // line 410
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_480b8668a2117f6aaf3824756e70fd9e735924a05bfc6ad602fbe42869a06e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_480b8668a2117f6aaf3824756e70fd9e735924a05bfc6ad602fbe42869a06e5f->enter($__internal_480b8668a2117f6aaf3824756e70fd9e735924a05bfc6ad602fbe42869a06e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 411
        echo "    ";
        $context["force_error"] = true;
        // line 412
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_480b8668a2117f6aaf3824756e70fd9e735924a05bfc6ad602fbe42869a06e5f->leave($__internal_480b8668a2117f6aaf3824756e70fd9e735924a05bfc6ad602fbe42869a06e5f_prof);

    }

    // line 415
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_8c970b1920e64f57d8059a1edb0f6ab04198a51e153814f8cc624cc186a4dd25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c970b1920e64f57d8059a1edb0f6ab04198a51e153814f8cc624cc186a4dd25->enter($__internal_8c970b1920e64f57d8059a1edb0f6ab04198a51e153814f8cc624cc186a4dd25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 416
        ob_start();
        // line 417
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 418
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 419
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 420
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
        ";
        }
        // line 422
        echo "
        ";
        // line 423
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 424
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
            // line 425
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 426
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 427
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 430
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 431
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 434
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8c970b1920e64f57d8059a1edb0f6ab04198a51e153814f8cc624cc186a4dd25->leave($__internal_8c970b1920e64f57d8059a1edb0f6ab04198a51e153814f8cc624cc186a4dd25_prof);

    }

    // line 439
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_49f4a278024787697427c91ca85b5314509b219f9a68e606b8ef57a3d3ecd26e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f4a278024787697427c91ca85b5314509b219f9a68e606b8ef57a3d3ecd26e->enter($__internal_49f4a278024787697427c91ca85b5314509b219f9a68e606b8ef57a3d3ecd26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        // line 440
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 441
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "label", array())));
        // line 442
        echo "
    ";
        // line 443
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
            // line 444
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
    ";
        }
        // line 446
        echo "
    <input type=\"hidden\" name=\"referer\" value=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>

    <div class=\"row\">
        ";
        // line 450
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_groups"]) ? $context["easyadmin_form_groups"] : $this->getContext($context, "easyadmin_form_groups")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            // line 451
            echo "            <div class=\"field-group col-xs-12 ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["group_config"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <div class=\"box box-default\">
                    ";
            // line 453
            if (((($this->getAttribute($context["group_config"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "label", array()), false)) : (false)) || (($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false)))) {
                // line 454
                echo "                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                ";
                // line 456
                if ((($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false))) {
                    // line 457
                    echo "                                    <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group_config"], "icon", array()), "html", null, true);
                    echo "\"></i>
                                ";
                }
                // line 459
                echo "                                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "label", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain")));
                echo "
                            </h3>
                        </div>
                    ";
            }
            // line 463
            echo "
                    <div class=\"box-body\">
                        ";
            // line 465
            if ((($this->getAttribute($context["group_config"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "help", array()), false)) : (false))) {
                // line 466
                echo "                            <p class=\"help-block\">";
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "help", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true));
                echo "</p>
                        ";
            }
            // line 468
            echo "
                        <div class=\"row\">
                            ";
            // line 470
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ((!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_group", array()) == $context["group_name"]))) {
                    // line 471
                    echo "                                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                                    ";
                    // line 472
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["field"], 'row');
                    echo "
                                </div>
                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 475
            echo "                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 480
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array()))) {
                    // line 481
                    echo "                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                    ";
                    // line 482
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["field"], 'row');
                    echo "
                </div>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 485
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 486
        echo "    </div>

    <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    ";
        // line 492
        $this->displayBlock('item_actions', $context, $blocks);
        // line 516
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_49f4a278024787697427c91ca85b5314509b219f9a68e606b8ef57a3d3ecd26e->leave($__internal_49f4a278024787697427c91ca85b5314509b219f9a68e606b8ef57a3d3ecd26e_prof);

    }

    // line 492
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_7a33a8e9fb42e4a5f508c458ced1dd36cfdf6997564aad2cc56ced175b82ea20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a33a8e9fb42e4a5f508c458ced1dd36cfdf6997564aad2cc56ced175b82ea20->enter($__internal_7a33a8e9fb42e4a5f508c458ced1dd36cfdf6997564aad2cc56ced175b82ea20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 493
        echo "                        ";
        // line 494
        echo "                        <button type=\"submit\" class=\"btn btn-primary action-save\">
                            <i class=\"fa fa-save\"></i> ";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true);
        echo "
                        </button>

                        ";
        // line 498
        $context["_entity_actions"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("new", $this->getAttribute($this->getAttribute(        // line 499
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))) : ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("edit", $this->getAttribute($this->getAttribute(        // line 500
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))));
        // line 501
        echo "
                        ";
        // line 502
        $context["_entity_id"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? (null) : ($this->getAttribute($this->getAttribute(        // line 504
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "item", array()), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
        // line 505
        echo "
                        ";
        // line 506
        $context["_request_parameters"] = array("entity" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 507
        echo "
                        ";
        // line 508
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 509
(isset($context["_entity_actions"]) ? $context["_entity_actions"] : $this->getContext($context, "_entity_actions")), "request_parameters" =>         // line 510
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "translation_domain" =>         // line 511
(isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain")), "trans_parameters" =>         // line 512
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 513
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), false);
        // line 514
        echo "
                    ";
        
        $__internal_7a33a8e9fb42e4a5f508c458ced1dd36cfdf6997564aad2cc56ced175b82ea20->leave($__internal_7a33a8e9fb42e4a5f508c458ced1dd36cfdf6997564aad2cc56ced175b82ea20_prof);

    }

    // line 523
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_c1a8586ade6cc8e9f8df2c2d42438da3e938dec3e883965e2421f5b323aaeb1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a8586ade6cc8e9f8df2c2d42438da3e938dec3e883965e2421f5b323aaeb1e->enter($__internal_c1a8586ade6cc8e9f8df2c2d42438da3e938dec3e883965e2421f5b323aaeb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        // line 524
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 525
(isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-easyadmin-autocomplete-max-results" => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("show.max_results"), "data-easyadmin-autocomplete-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 529
(isset($context["autocomplete_entity_name"]) ? $context["autocomplete_entity_name"] : $this->getContext($context, "autocomplete_entity_name"))))))));
        // line 532
        echo "
";
        
        $__internal_c1a8586ade6cc8e9f8df2c2d42438da3e938dec3e883965e2421f5b323aaeb1e->leave($__internal_c1a8586ade6cc8e9f8df2c2d42438da3e938dec3e883965e2421f5b323aaeb1e_prof);

    }

    // line 535
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        $__internal_d6cad73907fae2e7861da095ec56246d16432a1dcb09b27deb81aa6f68ededd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6cad73907fae2e7861da095ec56246d16432a1dcb09b27deb81aa6f68ededd2->enter($__internal_d6cad73907fae2e7861da095ec56246d16432a1dcb09b27deb81aa6f68ededd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 536
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "name", array());
        // line 537
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_d6cad73907fae2e7861da095ec56246d16432a1dcb09b27deb81aa6f68ededd2->leave($__internal_d6cad73907fae2e7861da095ec56246d16432a1dcb09b27deb81aa6f68ededd2_prof);

    }

    // line 541
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        $__internal_088c16b787f181db83d4cd5d443d816b997f23dc9577966b597e1a35ca93b82b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_088c16b787f181db83d4cd5d443d816b997f23dc9577966b597e1a35ca93b82b->enter($__internal_088c16b787f181db83d4cd5d443d816b997f23dc9577966b597e1a35ca93b82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        // line 542
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
        
        $__internal_088c16b787f181db83d4cd5d443d816b997f23dc9577966b597e1a35ca93b82b->leave($__internal_088c16b787f181db83d4cd5d443d816b997f23dc9577966b597e1a35ca93b82b_prof);

    }

    // line 548
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        $__internal_d09b6ccc74a70f2cf487e298330a2955cf4f337f29df633ef609e9db382cd7b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09b6ccc74a70f2cf487e298330a2955cf4f337f29df633ef609e9db382cd7b4->enter($__internal_d09b6ccc74a70f2cf487e298330a2955cf4f337f29df633ef609e9db382cd7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        // line 549
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 550
        echo "    <div class=\"field-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
        ";
        // line 551
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array()), false)) : (false)) || (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array()), false)) : (false)))) {
            // line 552
            echo "            <h2>
                ";
            // line 553
            if ((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array()), false)) : (false))) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 554
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array()), "")) : ("")), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain")));
            echo "
            </h2>
        ";
        }
        // line 557
        echo "
        ";
        // line 558
        if ((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), false)) : (false))) {
            // line 559
            echo "            <p class=\"help-block\">";
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true));
            echo "</p>
        ";
        }
        // line 561
        echo "    </div>
";
        
        $__internal_d09b6ccc74a70f2cf487e298330a2955cf4f337f29df633ef609e9db382cd7b4->leave($__internal_d09b6ccc74a70f2cf487e298330a2955cf4f337f29df633ef609e9db382cd7b4_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1679 => 561,  1673 => 559,  1671 => 558,  1668 => 557,  1661 => 554,  1655 => 553,  1652 => 552,  1650 => 551,  1645 => 550,  1642 => 549,  1636 => 548,  1626 => 542,  1620 => 541,  1613 => 537,  1610 => 536,  1604 => 535,  1596 => 532,  1594 => 529,  1593 => 525,  1591 => 524,  1585 => 523,  1577 => 514,  1575 => 513,  1574 => 512,  1573 => 511,  1572 => 510,  1571 => 509,  1570 => 508,  1567 => 507,  1565 => 506,  1562 => 505,  1560 => 504,  1559 => 502,  1556 => 501,  1554 => 500,  1553 => 499,  1552 => 498,  1546 => 495,  1543 => 494,  1541 => 493,  1535 => 492,  1524 => 516,  1522 => 492,  1514 => 486,  1508 => 485,  1498 => 482,  1493 => 481,  1487 => 480,  1478 => 475,  1468 => 472,  1463 => 471,  1458 => 470,  1454 => 468,  1448 => 466,  1446 => 465,  1442 => 463,  1434 => 459,  1428 => 457,  1426 => 456,  1422 => 454,  1420 => 453,  1414 => 451,  1409 => 450,  1403 => 447,  1400 => 446,  1394 => 444,  1392 => 443,  1389 => 442,  1386 => 441,  1383 => 440,  1377 => 439,  1368 => 434,  1362 => 431,  1358 => 430,  1352 => 427,  1348 => 426,  1345 => 425,  1342 => 424,  1340 => 423,  1337 => 422,  1331 => 420,  1329 => 419,  1325 => 418,  1322 => 417,  1320 => 416,  1314 => 415,  1304 => 412,  1301 => 411,  1295 => 410,  1282 => 403,  1277 => 402,  1271 => 399,  1268 => 398,  1266 => 397,  1262 => 395,  1254 => 393,  1251 => 392,  1249 => 391,  1246 => 390,  1244 => 389,  1238 => 388,  1228 => 385,  1225 => 384,  1219 => 383,  1209 => 379,  1206 => 378,  1200 => 377,  1193 => 374,  1190 => 373,  1187 => 372,  1184 => 371,  1181 => 370,  1175 => 368,  1173 => 367,  1167 => 366,  1158 => 362,  1154 => 360,  1145 => 358,  1141 => 357,  1138 => 356,  1132 => 354,  1130 => 353,  1126 => 352,  1123 => 351,  1120 => 350,  1117 => 349,  1111 => 348,  1104 => 344,  1102 => 343,  1100 => 342,  1092 => 341,  1086 => 340,  1079 => 337,  1077 => 336,  1075 => 335,  1067 => 334,  1061 => 333,  1054 => 330,  1052 => 329,  1046 => 328,  1039 => 325,  1037 => 324,  1031 => 323,  1024 => 320,  1022 => 319,  1016 => 318,  1009 => 315,  1007 => 314,  1001 => 313,  994 => 310,  992 => 309,  986 => 308,  980 => 307,  968 => 301,  963 => 299,  959 => 297,  945 => 288,  939 => 287,  928 => 279,  923 => 276,  920 => 275,  918 => 274,  912 => 272,  906 => 271,  899 => 268,  893 => 266,  891 => 265,  889 => 263,  882 => 258,  876 => 257,  872 => 255,  870 => 254,  868 => 252,  866 => 251,  864 => 250,  855 => 249,  853 => 248,  847 => 247,  838 => 241,  836 => 240,  834 => 239,  819 => 238,  816 => 237,  813 => 236,  810 => 235,  807 => 234,  804 => 233,  801 => 232,  798 => 231,  795 => 230,  792 => 229,  789 => 228,  787 => 227,  781 => 226,  774 => 223,  768 => 222,  761 => 219,  755 => 218,  748 => 215,  746 => 214,  740 => 212,  733 => 209,  731 => 208,  725 => 207,  717 => 201,  715 => 200,  713 => 199,  710 => 197,  708 => 196,  706 => 195,  700 => 194,  692 => 190,  690 => 189,  688 => 188,  685 => 186,  683 => 185,  681 => 184,  675 => 183,  667 => 179,  661 => 176,  660 => 175,  656 => 174,  652 => 173,  649 => 171,  643 => 168,  642 => 167,  638 => 166,  636 => 165,  634 => 164,  628 => 163,  616 => 157,  611 => 155,  607 => 153,  594 => 143,  589 => 140,  586 => 139,  584 => 138,  582 => 137,  580 => 136,  574 => 135,  565 => 130,  562 => 129,  554 => 128,  549 => 126,  547 => 125,  545 => 124,  542 => 122,  540 => 121,  534 => 120,  525 => 115,  523 => 114,  521 => 112,  520 => 111,  519 => 110,  518 => 109,  513 => 107,  511 => 106,  509 => 105,  506 => 103,  504 => 102,  498 => 101,  490 => 97,  488 => 96,  486 => 95,  484 => 94,  482 => 93,  478 => 92,  476 => 91,  473 => 89,  471 => 88,  465 => 87,  457 => 83,  455 => 82,  453 => 81,  447 => 80,  440 => 77,  434 => 75,  432 => 74,  430 => 73,  424 => 71,  421 => 70,  419 => 69,  416 => 68,  410 => 67,  403 => 64,  401 => 63,  395 => 62,  388 => 59,  386 => 58,  380 => 57,  373 => 54,  370 => 52,  368 => 51,  362 => 50,  350 => 44,  345 => 42,  341 => 40,  328 => 30,  323 => 27,  320 => 26,  318 => 25,  316 => 23,  310 => 22,  303 => 17,  300 => 15,  298 => 13,  297 => 12,  296 => 11,  295 => 9,  294 => 8,  293 => 7,  291 => 5,  289 => 4,  283 => 3,  276 => 548,  273 => 546,  271 => 541,  268 => 539,  266 => 535,  263 => 534,  261 => 523,  258 => 521,  256 => 439,  253 => 437,  251 => 415,  248 => 414,  246 => 410,  243 => 409,  241 => 388,  238 => 387,  236 => 383,  233 => 382,  231 => 377,  229 => 366,  227 => 348,  224 => 346,  222 => 340,  219 => 339,  217 => 333,  214 => 332,  212 => 328,  209 => 327,  207 => 323,  204 => 322,  202 => 318,  199 => 317,  197 => 313,  194 => 312,  192 => 307,  189 => 306,  187 => 271,  184 => 270,  182 => 247,  179 => 246,  176 => 244,  174 => 226,  171 => 225,  169 => 222,  166 => 221,  164 => 218,  161 => 217,  159 => 212,  156 => 211,  154 => 207,  151 => 206,  148 => 204,  146 => 194,  143 => 193,  141 => 183,  138 => 182,  136 => 163,  133 => 162,  131 => 135,  128 => 134,  126 => 120,  123 => 119,  121 => 101,  118 => 100,  116 => 87,  113 => 86,  111 => 80,  108 => 79,  106 => 67,  103 => 66,  101 => 62,  98 => 61,  96 => 57,  93 => 56,  91 => 50,  88 => 49,  86 => 22,  83 => 21,  80 => 19,  78 => 3,  75 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use 'form_div_layout.html.twig' %}

{% block form_start -%}
    {% if 'easyadmin' == block_prefixes|slice(-2)|first %}
        {% set attr = attr|merge({
            'class': [
                _easyadmin_form_type|default('') == 'horizontal' ? 'form-horizontal' : 'form-vertical',
                attr.class|default(''),
                easyadmin.view ~ '-form'
            ]|join(' '),
            'data-view': easyadmin.view,
            'data-entity': easyadmin.entity.name,
            'data-entity-id': attribute(value, easyadmin.entity.primary_key_field_name),
        }) %}
    {% endif %}

    {{- parent() -}}
{%- endblock form_start %}

{# Widgets #}

{% block form_widget %}
    {{- parent() -}}

    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock form_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        <div class=\"control-group\">
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) -}}
            {% endfor -%}
        </div>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do no display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {{- label is not same as(false) ? label|trans({}, easyadmin.entity.translation_domain) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {% set _field_label = easyadmin.field['label']|default(null) %}
        {{- form_label(form, _field_label, { translation_domain: easyadmin.entity.translation_domain }) -}}
        {{- form_widget(form) -}}

        {% if _field_type in ['datetime', 'date', 'time', 'birthday'] and easyadmin.field.nullable|default(false) %}
            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                    {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                </label>
            </div>
        {% endif %}

        {{- form_errors(form) -}}

        {% if easyadmin.field.help|default('') != '' %}
            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
        {% endif %}
    </div>
{%- endblock form_row %}

{% block collection_row %}
    {{ block('form_row') }}

    {% if allow_add|default(false) %}
        {% set js_add_item %}
            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#{{ id }}');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_{{ name }}___name__/g, '_{{ name }}_' + numItems)
                    .replace(/{{ name }}\\]\\[__name__\\]/g, '{{ name }}][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        {% endset %}

        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"{{ js_add_item|raw }}\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                {{ (form|length == 0 ? 'action.add_new_item' : 'action.add_another_item')|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock collection_row %}

{% block button_row -%}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }} {{ easyadmin.field.css_class|default('') }}\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}
{% block form_errors %}
    {% set error_count = errors|length %}
    {% if error_count >= 1 %}
        <div class=\"error-block\">
            <span class=\"label label-danger\">{{ 'errors'|transchoice(error_count, {}, 'EasyAdminBundle') }}</span>
            {% if error_count == 1 %}
                {{ errors|first.message }}
            {% else %}
                <ul>
                    {% for error in errors %}
                        <li>{{ error.message }}</li>
                    {% endfor %}
                </ul>
            {% endif %}
        </div>
    {% endif %}
{% endblock form_errors %}

{%- block form_widget_compound -%}
    {% if value is empty %}
        {{ block('empty_collection') }}
    {% endif %}
    {% if value is empty or form.vars.prototype is defined %}
        {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}
    {% endif %}

    {{ parent() }}
{%- endblock form_widget_compound -%}

{% block empty_collection %}
    <div class=\"empty collection-empty\">
        {{ include(easyadmin.entity.templates.label_empty) }}
    </div>
{% endblock empty_collection %}

{% block vich_file_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-file\">
        {% if download_uri|default('') is not empty %}
            {% set download_title = download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') %}
            <a href=\"{{ asset(download_uri) }}\">{{ download_title }}</a>
        {% endif %}

        <div class=\"row\">
            {% if form.delete is defined %}
            <div class=\"col-sm-3 col-md-2\">
                {{ form_row(form.delete, { label: 'action.delete' }) }}
            </div>
            {% endif %}
            <div class=\"{{ form.delete is defined ? 'col-sm-9 col-md-10' : 'col-sm-12' }}\">
                {{ form_widget(form.file) }}
            </div>
        </div>
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
            {{ form_row(form.delete, { label: 'action.delete' }) }}
        {% endif %}

        {% if download_uri|default('') is not empty %}
            {% set _lightbox_id = 'easyadmin-lightbox-' ~ id %}

            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#{{ _lightbox_id }}\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"{{ asset(download_uri) }}\">
            </a>

            <div id=\"{{ _lightbox_id }}\" class=\"easyadmin-lightbox\">
                <img src=\"{{ asset(download_uri) }}\">
            </div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{# EasyAdmin form type #}
{% block easyadmin_widget %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}

    {% if form.vars.errors|length > 0 %}
        {{ form_errors(form) }}
    {% endif %}

    <input type=\"hidden\" name=\"referer\" value=\"{{ app.request.query.get('referer', '') }}\"/>

    <div class=\"row\">
        {% for group_name, group_config in easyadmin_form_groups %}
            <div class=\"field-group col-xs-12 {{ group_config.css_class|default('') }}\">
                <div class=\"box box-default\">
                    {% if group_config.label|default(false) or group_config.icon|default(false) %}
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                {% if group_config.icon|default(false) %}
                                    <i class=\"fa fa-{{ group_config.icon }}\"></i>
                                {% endif %}
                                {{ group_config.label|trans(domain = _translation_domain)|raw }}
                            </h3>
                        </div>
                    {% endif %}

                    <div class=\"box-body\">
                        {% if group_config.help|default(false) %}
                            <p class=\"help-block\">{{ group_config.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
                        {% endif %}

                        <div class=\"row\">
                            {% for field in form.children if 'hidden' not in field.vars.block_prefixes and field.vars.easyadmin.form_group == group_name %}
                                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                                    {{ form_row(field) }}
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            {% for field in form.children if 'hidden' not in field.vars.block_prefixes %}
                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                    {{ form_row(field) }}
                </div>
            {% endfor %}
        {% endfor %}
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    {% block item_actions %}
                        {# the 'save' action is hardcoded for the 'edit' and 'new' views #}
                        <button type=\"submit\" class=\"btn btn-primary action-save\">
                            <i class=\"fa fa-save\"></i> {{ 'action.save'|trans(_trans_parameters, _translation_domain) }}
                        </button>

                        {% set _entity_actions = (easyadmin.view == 'new')
                            ? easyadmin_get_actions_for_new_item(easyadmin.entity.name)
                            : easyadmin_get_actions_for_edit_item(easyadmin.entity.name) %}

                        {% set _entity_id = (easyadmin.view == 'new')
                            ? null
                            : attribute(easyadmin.item, easyadmin.entity.primary_key_field_name) %}

                        {% set _request_parameters = { entity: easyadmin.entity.name, referer: app.request.query.get('referer') } %}

                        {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                            actions: _entity_actions,
                            request_parameters: _request_parameters,
                            translation_domain: _translation_domain,
                            trans_parameters: _trans_parameters,
                            item_id: _entity_id
                        }, with_context = false) }}
                    {% endblock item_actions %}
                </div>
            </div>
        </div>
    </div>
{% endblock easyadmin_widget %}

{# EasyAdminAutocomplete form type #}
{% block easyadmin_autocomplete_widget %}
    {{ form_widget(form.autocomplete, {
        attr: attr|merge({
            'data-easyadmin-autocomplete-max-results': easyadmin_config('show.max_results'),
            'data-easyadmin-autocomplete-url' : path('easyadmin', {
                action: 'autocomplete',
                entity: autocomplete_entity_name,
            })|raw })
        })
    }}
{% endblock easyadmin_autocomplete_widget %}

{% block easyadmin_autocomplete_inner_label %}
    {% set name = form.parent.vars.name %}
    {{- block('form_label') -}}
{% endblock easyadmin_autocomplete_inner_label %}

{# EasyAdminDivider form type #}
{% block easyadmin_divider_row %}
    <div class=\"field-divider\">
        <hr>
    </div>
{% endblock easyadmin_divider_row %}

{# EasyAdminSection form type #}
{% block easyadmin_section_row %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"field-section {{ easyadmin.field.css_class|default('') }}\">
        {% if easyadmin.field.label|default(false) or easyadmin.field.icon|default(false) %}
            <h2>
                {% if easyadmin.field.icon|default(false) %}<i class=\"fa fa-{{ easyadmin.field.icon }}\"></i>{% endif %}
                {{ easyadmin.field.label|default('')|trans(domain = _translation_domain)|raw }}
            </h2>
        {% endif %}

        {% if easyadmin.field.help|default(false) %}
            <p class=\"help-block\">{{ easyadmin.field.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
        {% endif %}
    </div>
{% endblock easyadmin_section_row %}
", "@EasyAdmin/form/bootstrap_3_layout.html.twig", "C:\\wamp64\\www\\permisfute\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\form\\bootstrap_3_layout.html.twig");
    }
}
