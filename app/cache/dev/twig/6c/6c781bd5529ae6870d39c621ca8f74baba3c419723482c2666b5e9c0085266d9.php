<?php

/* PgGsbFraisBundle:ListeFrais:listetouslesfrais.html.twig */
class __TwigTemplate_2609d5676ccd10e09fef4ea8fedd6f6050c7be1380ab2be3b73976ec9414f3cb extends Twig_Template
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
        $__internal_b02c9c70769d0623a0ada988366e6a43cb513a76d02a7e3ca906831891c6aafd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02c9c70769d0623a0ada988366e6a43cb513a76d02a7e3ca906831891c6aafd->enter($__internal_b02c9c70769d0623a0ada988366e6a43cb513a76d02a7e3ca906831891c6aafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:ListeFrais:listetouslesfrais.html.twig"));

        // line 1
        $this->loadTemplate("PgGsbFraisBundle:ListeFrais:listemois.html.twig", "PgGsbFraisBundle:ListeFrais:listetouslesfrais.html.twig", 1)->display(array_merge($context, array("lesmois" => (isset($context["lesmois"]) ? $context["lesmois"] : $this->getContext($context, "lesmois")), "lemois" => (isset($context["lemois"]) ? $context["lemois"] : $this->getContext($context, "lemois")))));
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("PgGsbFraisBundle:ListeFrais:listefraisforfait.html.twig", "PgGsbFraisBundle:ListeFrais:listetouslesfrais.html.twig", 3)->display(array_merge($context, array("lesfraisforfait" => (isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")), "numannee" => (isset($context["numannee"]) ? $context["numannee"] : $this->getContext($context, "numannee")), "nummois" =>         // line 4
(isset($context["nummois"]) ? $context["nummois"] : $this->getContext($context, "nummois")), "libetat" => (isset($context["libetat"]) ? $context["libetat"] : $this->getContext($context, "libetat")), "montantvalide" => (isset($context["montantvalide"]) ? $context["montantvalide"] : $this->getContext($context, "montantvalide")), "datemodif" => (isset($context["datemodif"]) ? $context["datemodif"] : $this->getContext($context, "datemodif")))));
        // line 5
        echo "
";
        // line 6
        $this->loadTemplate("PgGsbFraisBundle:ListeFrais:listefraishorsforfait.html.twig", "PgGsbFraisBundle:ListeFrais:listetouslesfrais.html.twig", 6)->display(array_merge($context, array("lesfraishorsforfait" => (isset($context["lesfraishorsforfait"]) ? $context["lesfraishorsforfait"] : $this->getContext($context, "lesfraishorsforfait")), "nbjustificatifs" =>         // line 7
(isset($context["nbjustificatifs"]) ? $context["nbjustificatifs"] : $this->getContext($context, "nbjustificatifs")))));
        
        $__internal_b02c9c70769d0623a0ada988366e6a43cb513a76d02a7e3ca906831891c6aafd->leave($__internal_b02c9c70769d0623a0ada988366e6a43cb513a76d02a7e3ca906831891c6aafd_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:ListeFrais:listetouslesfrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  33 => 6,  30 => 5,  28 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'PgGsbFraisBundle:ListeFrais:listemois.html.twig' with {'lesmois':lesmois,'lemois':lemois} %}

{% include 'PgGsbFraisBundle:ListeFrais:listefraisforfait.html.twig' with {'lesfraisforfait':lesfraisforfait,'numannee':numannee,
'nummois':nummois,'libetat':libetat,'montantvalide':montantvalide,'datemodif':datemodif} %}

{% include 'PgGsbFraisBundle:ListeFrais:listefraishorsforfait.html.twig' with {'lesfraishorsforfait':lesfraishorsforfait,
'nbjustificatifs':nbjustificatifs} %}", "PgGsbFraisBundle:ListeFrais:listetouslesfrais.html.twig", "/var/www/html/GSB_Symfony_Propre/src/Pg/GsbFraisBundle/Resources/views/ListeFrais/listetouslesfrais.html.twig");
    }
}
