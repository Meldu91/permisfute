<?php

/* PermisfuteBundle:Default:services.html.twig */
class __TwigTemplate_59b08b35d208daa87adccf5fef3c946c2c7e3b481c6b2e724797169c3e09e58f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "PermisfuteBundle:Default:services.html.twig", 1);
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
        $__internal_a3597cdd52ad8864b302d9b3850c48c0c07ebd731ef4b22ea83393609621c415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3597cdd52ad8864b302d9b3850c48c0c07ebd731ef4b22ea83393609621c415->enter($__internal_a3597cdd52ad8864b302d9b3850c48c0c07ebd731ef4b22ea83393609621c415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PermisfuteBundle:Default:services.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3597cdd52ad8864b302d9b3850c48c0c07ebd731ef4b22ea83393609621c415->leave($__internal_a3597cdd52ad8864b302d9b3850c48c0c07ebd731ef4b22ea83393609621c415_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_11ce0738df0c0fada670cd628e673775f52ca0eb010ebf67db31ca5e45f2fe3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ce0738df0c0fada670cd628e673775f52ca0eb010ebf67db31ca5e45f2fe3b->enter($__internal_11ce0738df0c0fada670cd628e673775f52ca0eb010ebf67db31ca5e45f2fe3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <section id=\"feature\" class=\"transparent-bg\">
        <div class=\"container\">
            <div class=\"center wow fadeInDown\">
                <h2>Nos services</h2>
                <p class=\"lead\">C'est ici que vous pourrez retrouver tous les services de Permis futé.</p>
            </div>

            <div class=\"row\">

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"media services-wrap wow fadeInDown\">
                        <div class=\"pull-left\">
                            <img class=\"img-responsive\" src=";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/services/services1.png"), "html", null, true);
        echo ">
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">Code de la route</h3>
                            <p>Passez votre code de la route grâce à nos cours et séances à résultats directs.</p>
                            <FONT color=\"red\"><strong>Plus d'informations</strong></FONT>
                            <p>Pour ceux qui souhaitent passer le code, des cours de code sont organisés régulièrement dans nos locaux. Le planning des cours de code de la route dispensés par nos moniteurs est disponible sur votre plateforme.</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"media services-wrap wow fadeInDown\">
                        <div class=\"pull-left\">
                            <img class=\"img-responsive\" src=";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/services/services2.png"), "html", null, true);
        echo ">
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">Permis B</h3>
                            <p>Passez votre permis B auprès de nos 2 moniteurs très expérimentés.</p>
                            <FONT color=\"red\"><strong>Plus d'informations</strong></FONT>
                            <p>Des formations innovantes, performantes et incroyablement flexibles grâce à nos moniteurs trés compétents. De plus, vous serez maître de renault captur durant tous vos cours, voiture qui permet un bon apprentissage de la conduite</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"media services-wrap wow fadeInDown\">
                        <div class=\"pull-left\">
                            <img class=\"img-responsive\" src=";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/services/services3.png"), "html", null, true);
        echo ">
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">Permis A</h3>
                            <p>Passez votre permis A avec un moniteur spécialisé dans ce permis.</p>
                            <FONT color=\"red\"><strong>Plus d'informations</strong></FONT>
                            <p>Permis futé vous propose de nombreuses formations efficaces vous permettant de préparer les examens du plateau et de la circulation dans les meilleures conditions, nos moto-écoles vous proposent différentes organisations adaptées à vos besoins.
                        </div>
                    </div>
                </div>             
            </div><!--/.row-->

            <div class=\"clients-area center wow fadeInDown\">
                <h2>Que disent nos clients ?</h2>
                <p class=\"lead\">Pour une meilleure expérience et une garantie de bon apprentissage grâce à nos leçons, <br> nous demandons à nos anciens clients de nous laisser des avis.</p>
            </div>

            <div class=\"row\">
                <div class=\"col-md-4 wow fadeInDown\">
                    <div class=\"clients-comments text-center\">
                        <img src=";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/client1.png"), "html", null, true);
        echo " class=\"img-circle\" alt=\"\">
                        <h3>Très bon service. J'ai pu obtenir mon code du premier coup en trois mois sans connaissances antérieures.</h3>
                        <h4><span>-M.Dupont /</span>  Retraité depuis 10ans</h4>
                    </div>
                </div>
                <div class=\"col-md-4 wow fadeInDown\">
                    <div class=\"clients-comments text-center\">
                        <img src=";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/client2.png"), "html", null, true);
        echo " class=\"img-circle\" alt=\"\">
                        <h3>La partie conduite était parfaite, des moniteurs pédagogues et très précis dans leur explication. Je recommande fortement cette auto école.</h3>
                        <h4><span>-Karim Baidi /</span>  Cadre Web-BKM</h4>
                    </div>
                </div>
                <div class=\"col-md-4 wow fadeInDown\">
                    <div class=\"clients-comments text-center\">
                        <img src=";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/client3.png"), "html", null, true);
        echo " class=\"img-circle\" alt=\"\">
                        <h3>Le contenue du cours est vraiment bien aménagé et on peut réviser quand on veut, ca laisse vraiment beaucoup de liberté.</h3>
                        <h4><span>-Armand Trudeau /</span>  Profession anonyme</h4>
                    </div>
                </div>
            </div>

            <div class=\"get-started center wow fadeInDown\">
                <h2>Êtes-vous prêt à vous inscrire ?</h2>
                <p class=\"lead\">Une inscription sur le site de Permis Futé est nécessaire pour vous permettre de vous inscrire<br> au code de la route ou permis A & B.</p>
                <div class=\"request\">
                    <h4><a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_inscription");
        echo "\">Cliquez ici pour inscription</a></h4>
                </div>
            </div><!--/.get-started-->

        </div><!--/.container-->
    </section><!--/#feature-->


    <section id=\"bottom\">
    <div class=\"container wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Entreprise</h3>
                    <ul>
                        <li><a href=\"#\">à Propos</a></li>
                        <li><a href=\"#\">Copyright</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Support</h3>
                    <ul>
                        <li><a href=\"";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("permisfute_services");
        echo "\">Des questions?</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

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
        
        $__internal_11ce0738df0c0fada670cd628e673775f52ca0eb010ebf67db31ca5e45f2fe3b->leave($__internal_11ce0738df0c0fada670cd628e673775f52ca0eb010ebf67db31ca5e45f2fe3b_prof);

    }

    public function getTemplateName()
    {
        return "PermisfuteBundle:Default:services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 116,  146 => 91,  132 => 80,  122 => 73,  112 => 66,  89 => 46,  72 => 32,  55 => 18,  40 => 5,  34 => 4,  11 => 1,);
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

    <section id=\"feature\" class=\"transparent-bg\">
        <div class=\"container\">
            <div class=\"center wow fadeInDown\">
                <h2>Nos services</h2>
                <p class=\"lead\">C'est ici que vous pourrez retrouver tous les services de Permis futé.</p>
            </div>

            <div class=\"row\">

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"media services-wrap wow fadeInDown\">
                        <div class=\"pull-left\">
                            <img class=\"img-responsive\" src={{ asset('images/services/services1.png') }}>
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">Code de la route</h3>
                            <p>Passez votre code de la route grâce à nos cours et séances à résultats directs.</p>
                            <FONT color=\"red\"><strong>Plus d'informations</strong></FONT>
                            <p>Pour ceux qui souhaitent passer le code, des cours de code sont organisés régulièrement dans nos locaux. Le planning des cours de code de la route dispensés par nos moniteurs est disponible sur votre plateforme.</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"media services-wrap wow fadeInDown\">
                        <div class=\"pull-left\">
                            <img class=\"img-responsive\" src={{ asset('images/services/services2.png') }}>
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">Permis B</h3>
                            <p>Passez votre permis B auprès de nos 2 moniteurs très expérimentés.</p>
                            <FONT color=\"red\"><strong>Plus d'informations</strong></FONT>
                            <p>Des formations innovantes, performantes et incroyablement flexibles grâce à nos moniteurs trés compétents. De plus, vous serez maître de renault captur durant tous vos cours, voiture qui permet un bon apprentissage de la conduite</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"media services-wrap wow fadeInDown\">
                        <div class=\"pull-left\">
                            <img class=\"img-responsive\" src={{ asset('images/services/services3.png') }}>
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">Permis A</h3>
                            <p>Passez votre permis A avec un moniteur spécialisé dans ce permis.</p>
                            <FONT color=\"red\"><strong>Plus d'informations</strong></FONT>
                            <p>Permis futé vous propose de nombreuses formations efficaces vous permettant de préparer les examens du plateau et de la circulation dans les meilleures conditions, nos moto-écoles vous proposent différentes organisations adaptées à vos besoins.
                        </div>
                    </div>
                </div>             
            </div><!--/.row-->

            <div class=\"clients-area center wow fadeInDown\">
                <h2>Que disent nos clients ?</h2>
                <p class=\"lead\">Pour une meilleure expérience et une garantie de bon apprentissage grâce à nos leçons, <br> nous demandons à nos anciens clients de nous laisser des avis.</p>
            </div>

            <div class=\"row\">
                <div class=\"col-md-4 wow fadeInDown\">
                    <div class=\"clients-comments text-center\">
                        <img src={{ asset('images/client1.png') }} class=\"img-circle\" alt=\"\">
                        <h3>Très bon service. J'ai pu obtenir mon code du premier coup en trois mois sans connaissances antérieures.</h3>
                        <h4><span>-M.Dupont /</span>  Retraité depuis 10ans</h4>
                    </div>
                </div>
                <div class=\"col-md-4 wow fadeInDown\">
                    <div class=\"clients-comments text-center\">
                        <img src={{ asset('images/client2.png') }} class=\"img-circle\" alt=\"\">
                        <h3>La partie conduite était parfaite, des moniteurs pédagogues et très précis dans leur explication. Je recommande fortement cette auto école.</h3>
                        <h4><span>-Karim Baidi /</span>  Cadre Web-BKM</h4>
                    </div>
                </div>
                <div class=\"col-md-4 wow fadeInDown\">
                    <div class=\"clients-comments text-center\">
                        <img src={{ asset('images/client3.png') }} class=\"img-circle\" alt=\"\">
                        <h3>Le contenue du cours est vraiment bien aménagé et on peut réviser quand on veut, ca laisse vraiment beaucoup de liberté.</h3>
                        <h4><span>-Armand Trudeau /</span>  Profession anonyme</h4>
                    </div>
                </div>
            </div>

            <div class=\"get-started center wow fadeInDown\">
                <h2>Êtes-vous prêt à vous inscrire ?</h2>
                <p class=\"lead\">Une inscription sur le site de Permis Futé est nécessaire pour vous permettre de vous inscrire<br> au code de la route ou permis A & B.</p>
                <div class=\"request\">
                    <h4><a href=\"{{ path ('permisfute_inscription') }}\">Cliquez ici pour inscription</a></h4>
                </div>
            </div><!--/.get-started-->

        </div><!--/.container-->
    </section><!--/#feature-->


    <section id=\"bottom\">
    <div class=\"container wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Entreprise</h3>
                    <ul>
                        <li><a href=\"#\">à Propos</a></li>
                        <li><a href=\"#\">Copyright</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Support</h3>
                    <ul>
                        <li><a href=\"{{ path ('permisfute_services') }}\">Des questions?</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

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
{% endblock %}", "PermisfuteBundle:Default:services.html.twig", "C:\\wamp64\\www\\permisfute\\src\\Permisfute\\PermisfuteBundle/Resources/views/Default/services.html.twig");
    }
}
