<?php

/* PgGsbFraisBundle::accueil.html.twig */
class __TwigTemplate_6bab2a6a7554ff96d289ac52eebb912b6d7a990f9f331efc96f703b63642434e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::layout.html.twig", "PgGsbFraisBundle::accueil.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddff65b60c81244df5d68cdd064c25c4c24fa90bad60690b8e5956b130613d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddff65b60c81244df5d68cdd064c25c4c24fa90bad60690b8e5956b130613d75->enter($__internal_ddff65b60c81244df5d68cdd064c25c4c24fa90bad60690b8e5956b130613d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddff65b60c81244df5d68cdd064c25c4c24fa90bad60690b8e5956b130613d75->leave($__internal_ddff65b60c81244df5d68cdd064c25c4c24fa90bad60690b8e5956b130613d75_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        $__internal_14c0cde6e8934644ee78a3e3955ee88fae957a896d3f61a42ea0b4f776ee4a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c0cde6e8934644ee78a3e3955ee88fae957a896d3f61a42ea0b4f776ee4a6a->enter($__internal_14c0cde6e8934644ee78a3e3955ee88fae957a896d3f61a42ea0b4f776ee4a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 3
        echo "<div id=\"menuGauche\">
     <div id=\"infosUtil\">
         <h3>
            ";
        // line 6
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "nom"), "method", true, true)) {
            // line 7
            echo "                           Visiteur: bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "nom"), "method"), "html", null, true);
            echo "<br>   
            ";
        }
        // line 9
        echo "        </h3>
     </div>  
        <ul id=\"menuList\">
\t   <li class=\"smenu\">
              <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_saisirfrais");
        echo "\" title=\"Saisie fiche de frais \">Saisie fiche de frais</a>
           </li>
           <li class=\"smenu\">
              <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_listefrais");
        echo "\" title=\"Consultation de mes fiches de frais\">Mes fiches de frais</a>
           </li>\t
           <li class=\"smenu\">
              <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_deconnexion");
        echo "\" title=\"Se déconnecter\">Déconnexion</a>
           </li>
           <li class=\"smenu\">
              <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_validerfraishorsforfais");
        echo "\" title=\"valider les frais\">Valider les frais</a>
           </li>
         </ul>
     </div> 
";
        
        $__internal_14c0cde6e8934644ee78a3e3955ee88fae957a896d3f61a42ea0b4f776ee4a6a->leave($__internal_14c0cde6e8934644ee78a3e3955ee88fae957a896d3f61a42ea0b4f776ee4a6a_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle::accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  71 => 19,  65 => 16,  59 => 13,  53 => 9,  47 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PgGsbFraisBundle::layout.html.twig\" %}
{% block menu %}
<div id=\"menuGauche\">
     <div id=\"infosUtil\">
         <h3>
            {%if(app.session.get('nom') is defined )%}
                           Visiteur: bonjour {{app.session.get('nom')}}<br>   
            {%endif%}
        </h3>
     </div>  
        <ul id=\"menuList\">
\t   <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_saisirfrais')}}\" title=\"Saisie fiche de frais \">Saisie fiche de frais</a>
           </li>
           <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_listefrais')}}\" title=\"Consultation de mes fiches de frais\">Mes fiches de frais</a>
           </li>\t
           <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_deconnexion')}}\" title=\"Se déconnecter\">Déconnexion</a>
           </li>
           <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_validerfraishorsforfais')}}\" title=\"valider les frais\">Valider les frais</a>
           </li>
         </ul>
     </div> 
{% endblock%}


{#
 <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_saisirfrais')}}\" title=\"Saisie fiche de frais \">Saisie fiche de frais</a>
           </li>
           <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_listefrais')}}\" title=\"Consultation de mes fiches de frais\">Mes fiches de frais</a>
           </li>
#}", "PgGsbFraisBundle::accueil.html.twig", "/var/www/html/GSB_Symfony_Propre/src/Pg/GsbFraisBundle/Resources/views/accueil.html.twig");
    }
}
