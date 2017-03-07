<?php

/* PermisfuteBundle:Default:contact.html.twig */
class __TwigTemplate_18f4ccfe7d450972c50141ea86fdfb8480f8afd95b16954d228b9cc483a8148c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "PermisfuteBundle:Default:contact.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62067332d5f44c16984a4591e2bd2af077fcf65626af685b44524b4f9fda4196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62067332d5f44c16984a4591e2bd2af077fcf65626af685b44524b4f9fda4196->enter($__internal_62067332d5f44c16984a4591e2bd2af077fcf65626af685b44524b4f9fda4196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PermisfuteBundle:Default:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62067332d5f44c16984a4591e2bd2af077fcf65626af685b44524b4f9fda4196->leave($__internal_62067332d5f44c16984a4591e2bd2af077fcf65626af685b44524b4f9fda4196_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_53388249ffe2ab40f5b7ad79c5aba98699c66803e90fdd946482e4e1c8896ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53388249ffe2ab40f5b7ad79c5aba98699c66803e90fdd946482e4e1c8896ef4->enter($__internal_53388249ffe2ab40f5b7ad79c5aba98699c66803e90fdd946482e4e1c8896ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    
    <section id=\"contact-info\">
        <div class=\"center\">                
            <h2>Comment nous contacter ?</h2>
            <p class=\"lead\">Pour nous contacter merci de suivre les instructions ci-dessous</p>
        </div>
        <div class=\"gmap-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-5 text-center\">
                        <div class=\"gmap\">
                            <iframe frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.174131595446!2d2.2842176149530404!3d48.89301850622307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66f83fa131f59%3A0x6a66c3981ee10eb9!2s61+Rue+Voltaire%2C+92300+Levallois-Perret!5e0!3m2!1sfr!2sfr!4v1487069322773;output=embed\"></iframe>
                        </div>
                    </div>

                    <div class=\"col-sm-7 map-content\">
                        <ul class=\"row\">
                            <li class=\"col-sm-6\">
                                <address>
                                    <h5>Notre auto-école :</h5>
                                    <p>61 Rue Voltaire<br>
                                        Levallois-Perret, 92300<br>
                                       France</p>
                                    <p>Phone: 01 23 56 70 80 <br>
                                        Email : PermisFute@gmail.fr</p>
                                </address>
                            </li>
                        </ul>
                        
                        <ul class=\"row\">
                            <li class=\"col-sm-6\">
                                <address>
                                    <h5>Horaire d'ouverture :</h5>
                                    <p><B>Lundi</B> :  FERME <br>
                                        <B>Mardi</B> : 10H/12H - 14H/18H <br>
                                        <B>Mercredi</B> : 10H/12H - 14H/18H <br>
                                        <B>Jeudi</B> : 10H/12H - 14H/18H <br>
                                        <B>Vendredi</B> : 10H/12H - 14H/18H <br>
                                        <B>Samedi</B> : 10H/12H - 14H/18H 
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id=\"contact-page\">
        <div class=\"container\">
            <div class=\"center\">        
                <h2>Envoyez un message</h2>
                <p class=\"lead\">Pour toute demande spécifique merci de nous écrire un message.</p>
            </div> 
            <div class=\"row contact-wrap\"> 
                <div class=\"status alert alert-success\" style=\"display: none\"></div>
                <form id=\"main-contact-form\" class=\"contact-form\" name=\"contact-form\" method=\"post\" action=\"sendemail.php\">
                    <div class=\"col-sm-5 col-sm-offset-1\">
                        <div class=\"form-group\">
                            <label>Nom *</label>
                            <input type=\"text\" name=\"name\" class=\"form-control\" required=\"required\">
                        </div>
                        <div class=\"form-group\">
                            <label>Prénom *</label>
                            <input type=\"text\" name=\"name\" class=\"form-control\" required=\"required\">
                        </div>
                        <div class=\"form-group\">
                            <label>Email *</label>
                            <input type=\"email\" name=\"email\" class=\"form-control\" required=\"required\">
                        </div>
                        <div class=\"form-group\">
                            <label>Téléphone</label>
                            <input type=\"number\" class=\"form-control\">
                        </div>         
                    </div>
                    <div class=\"col-sm-5\">
                        <div class=\"form-group\">
                            <label>Sujet *</label>
                            <input type=\"text\" name=\"subject\" class=\"form-control\" required=\"required\">
                        </div>
                        <div class=\"form-group\">
                            <label>Message *</label>
                            <textarea name=\"message\" id=\"message\" required=\"required\" class=\"form-control\" rows=\"8\"></textarea>
                        </div>                        
                        <div class=\"form-group\">
                            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn-lg\" required=\"required\">Envoyer un message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

    <section id=\"bottom\">
        <div class=\"container wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"widget\">
                        <h3>Entreprise</h3>
                        <ul>
                            <li><a href=\"#\">à Propos</a></li>
                            <li><a href=\"#\">We are hiring</a></li>
                            <li><a href=\"#\">Meet the team</a></li>
                            <li><a href=\"#\">Copyright</a></li>
                            <li><a href=\"#\">Terms of use</a></li>
                            <li><a href=\"#\">Privacy policy</a></li>
                            <li><a href=\"#\">Contact us</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"widget\">
                        <h3>Support</h3>
                        <ul>
                            <li><a href=\"#\">Faq</a></li>
                            <li><a href=\"#\">Blog</a></li>
                            <li><a href=\"#\">Forum</a></li>
                            <li><a href=\"#\">Documentation</a></li>
                            <li><a href=\"#\">Refund policy</a></li>
                            <li><a href=\"#\">Ticket system</a></li>
                            <li><a href=\"#\">Billing system</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"widget\">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href=\"#\">Web Development</a></li>
                            <li><a href=\"#\">SEO Marketing</a></li>
                            <li><a href=\"#\">Theme</a></li>
                            <li><a href=\"#\">Development</a></li>
                            <li><a href=\"#\">Email Marketing</a></li>
                            <li><a href=\"#\">Plugin Development</a></li>
                            <li><a href=\"#\">Article Writing</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"widget\">
                        <h3>Nos partenaires</h3>
                        <ul>
                            <li><a href=\"http://www.total.fr/\">Total</a></li>
                            <li><a href=\"https://www.renault.fr/\">Renault</a></li>
                            <li><a href=\"http://www.dell.fr/\">DELL</a></li>
                            <li><a href=\"https://www.univ-paris5.fr/\">Université Descartes</a></li>
                            <li><a href=\"http://www.michelin.fr/\">Michelin</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->
    
";
        
        $__internal_53388249ffe2ab40f5b7ad79c5aba98699c66803e90fdd946482e4e1c8896ef4->leave($__internal_53388249ffe2ab40f5b7ad79c5aba98699c66803e90fdd946482e4e1c8896ef4_prof);

    }

    public function getTemplateName()
    {
        return "PermisfuteBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layout/layout.html.twig' %}


{% block body %}
    
    <section id=\"contact-info\">
        <div class=\"center\">                
            <h2>Comment nous contacter ?</h2>
            <p class=\"lead\">Pour nous contacter merci de suivre les instructions ci-dessous</p>
        </div>
        <div class=\"gmap-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-5 text-center\">
                        <div class=\"gmap\">
                            <iframe frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.174131595446!2d2.2842176149530404!3d48.89301850622307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66f83fa131f59%3A0x6a66c3981ee10eb9!2s61+Rue+Voltaire%2C+92300+Levallois-Perret!5e0!3m2!1sfr!2sfr!4v1487069322773;output=embed\"></iframe>
                        </div>
                    </div>

                    <div class=\"col-sm-7 map-content\">
                        <ul class=\"row\">
                            <li class=\"col-sm-6\">
                                <address>
                                    <h5>Notre auto-école :</h5>
                                    <p>61 Rue Voltaire<br>
                                        Levallois-Perret, 92300<br>
                                       France</p>
                                    <p>Phone: 01 23 56 70 80 <br>
                                        Email : PermisFute@gmail.fr</p>
                                </address>
                            </li>
                        </ul>
                        
                        <ul class=\"row\">
                            <li class=\"col-sm-6\">
                                <address>
                                    <h5>Horaire d'ouverture :</h5>
                                    <p><B>Lundi</B> :  FERME <br>
                                        <B>Mardi</B> : 10H/12H - 14H/18H <br>
                                        <B>Mercredi</B> : 10H/12H - 14H/18H <br>
                                        <B>Jeudi</B> : 10H/12H - 14H/18H <br>
                                        <B>Vendredi</B> : 10H/12H - 14H/18H <br>
                                        <B>Samedi</B> : 10H/12H - 14H/18H 
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id=\"contact-page\">
        <div class=\"container\">
            <div class=\"center\">        
                <h2>Envoyez un message</h2>
                <p class=\"lead\">Pour toute demande spécifique merci de nous écrire un message.</p>
            </div> 
            <div class=\"row contact-wrap\"> 
                <div class=\"status alert alert-success\" style=\"display: none\"></div>
                <form id=\"main-contact-form\" class=\"contact-form\" name=\"contact-form\" method=\"post\" action=\"sendemail.php\">
                    <div class=\"col-sm-5 col-sm-offset-1\">
                        <div class=\"form-group\">
                            <label>Nom *</label>
                            <input type=\"text\" name=\"name\" class=\"form-control\" required=\"required\">
                        </div>
                        <div class=\"form-group\">
                            <label>Prénom *</label>
                            <input type=\"text\" name=\"name\" class=\"form-control\" required=\"required\">
                        </div>
                        <div class=\"form-group\">
                            <label>Email *</label>
                            <input type=\"email\" name=\"email\" class=\"form-control\" required=\"required\">
                        </div>
                        <div class=\"form-group\">
                            <label>Téléphone</label>
                            <input type=\"number\" class=\"form-control\">
                        </div>         
                    </div>
                    <div class=\"col-sm-5\">
                        <div class=\"form-group\">
                            <label>Sujet *</label>
                            <input type=\"text\" name=\"subject\" class=\"form-control\" required=\"required\">
                        </div>
                        <div class=\"form-group\">
                            <label>Message *</label>
                            <textarea name=\"message\" id=\"message\" required=\"required\" class=\"form-control\" rows=\"8\"></textarea>
                        </div>                        
                        <div class=\"form-group\">
                            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn-lg\" required=\"required\">Envoyer un message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

    <section id=\"bottom\">
        <div class=\"container wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"widget\">
                        <h3>Entreprise</h3>
                        <ul>
                            <li><a href=\"#\">à Propos</a></li>
                            <li><a href=\"#\">We are hiring</a></li>
                            <li><a href=\"#\">Meet the team</a></li>
                            <li><a href=\"#\">Copyright</a></li>
                            <li><a href=\"#\">Terms of use</a></li>
                            <li><a href=\"#\">Privacy policy</a></li>
                            <li><a href=\"#\">Contact us</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"widget\">
                        <h3>Support</h3>
                        <ul>
                            <li><a href=\"#\">Faq</a></li>
                            <li><a href=\"#\">Blog</a></li>
                            <li><a href=\"#\">Forum</a></li>
                            <li><a href=\"#\">Documentation</a></li>
                            <li><a href=\"#\">Refund policy</a></li>
                            <li><a href=\"#\">Ticket system</a></li>
                            <li><a href=\"#\">Billing system</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"widget\">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href=\"#\">Web Development</a></li>
                            <li><a href=\"#\">SEO Marketing</a></li>
                            <li><a href=\"#\">Theme</a></li>
                            <li><a href=\"#\">Development</a></li>
                            <li><a href=\"#\">Email Marketing</a></li>
                            <li><a href=\"#\">Plugin Development</a></li>
                            <li><a href=\"#\">Article Writing</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"widget\">
                        <h3>Nos partenaires</h3>
                        <ul>
                            <li><a href=\"http://www.total.fr/\">Total</a></li>
                            <li><a href=\"https://www.renault.fr/\">Renault</a></li>
                            <li><a href=\"http://www.dell.fr/\">DELL</a></li>
                            <li><a href=\"https://www.univ-paris5.fr/\">Université Descartes</a></li>
                            <li><a href=\"http://www.michelin.fr/\">Michelin</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->
    
{% endblock %}
", "PermisfuteBundle:Default:contact.html.twig", "C:\\wamp64\\www\\permisfute\\src\\Permisfute\\PermisfuteBundle/Resources/views/Default/contact.html.twig");
    }
}
