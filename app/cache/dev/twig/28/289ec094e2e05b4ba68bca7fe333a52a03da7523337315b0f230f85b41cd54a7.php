<?php

/* PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig */
class __TwigTemplate_7fc64fa672635748493af8f5c29d4825e7daa78f52f044039957721bd9736ccb extends Twig_Template
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
        $__internal_2ccb47df6e733af8c3fe28845b73ce13c19b3f6241aaa897cd718c659acd39ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ccb47df6e733af8c3fe28845b73ce13c19b3f6241aaa897cd718c659acd39ee->enter($__internal_2ccb47df6e733af8c3fe28845b73ce13c19b3f6241aaa897cd718c659acd39ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig"));

        // line 1
        echo "<div id=\"contenu\">
<table class=\"listeLegere\">
  \t   <caption>Descriptif des éléments hors forfait
       </caption>
             <tr>
                <th class=\"date\">Date</th>
\t\t\t\t<th class=\"libelle\">Libellé</th>  
                <th class=\"montant\">Montant</th>  
                <th class=\"action\">&nbsp;</th>              
             </tr>
 \t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesfraishorsforfait"]) ? $context["lesfraishorsforfait"] : $this->getContext($context, "lesfraishorsforfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
            // line 12
            echo "             ";
            $context["libelle"] = $this->getAttribute($context["unfrais"], "libelle", array());
            // line 13
            echo "             ";
            $context["date"] = $this->getAttribute($context["unfrais"], "date", array());
            // line 14
            echo "             ";
            $context["montant"] = $this->getAttribute($context["unfrais"], "montant", array());
            // line 15
            echo "             ";
            $context["idfrais"] = $this->getAttribute($context["unfrais"], "id", array());
            // line 16
            echo "             <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["montant"]) ? $context["montant"] : $this->getContext($context, "montant")), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_supprimerfraishorsforfait", array("id" => (isset($context["idfrais"]) ? $context["idfrais"] : $this->getContext($context, "idfrais")))), "html", null, true);
            echo "\" 
\t\t\t\tonclick=\"return confirm('Voulez-vous vraiment supprimer ce frais?');\">Supprimer ce frais</a></td>
             </tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  
                                          
    </table>
      <form action=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_validerfraishorsforfais");
        echo "\" method=\"post\">
      <div class=\"corpsForm\">
         
          <fieldset>
            <legend>Nouvel élément hors forfait
            </legend>
            <p>
              <label for=\"txtDateHF\">Date (jj/mm/aaaa): </label>
              <input type=\"text\" id=\"txtDateHF\" name=\"dateFrais\" size=\"10\" maxlength=\"10\" value=\"\"  />
            </p>
            <p>
              <label for=\"txtLibelleHF\">Libellé</label>
              <input type=\"text\" id=\"txtLibelleHF\" name=\"libelle\" size=\"70\" maxlength=\"256\" value=\"\" />
            </p>
            <p>
              <label for=\"txtMontantHF\">Montant : </label>
              <input type=\"text\" id=\"txtMontantHF\" name=\"montant\" size=\"10\" maxlength=\"10\" value=\"\" />
            </p>
          </fieldset>
      </div>
      <div class=\"piedForm\">
      <p>
        <input id=\"ajouter\" type=\"submit\" value=\"Ajouter\" size=\"20\" />
        <input id=\"effacer\" type=\"reset\" value=\"Effacer\" size=\"20\" />
      </p> 
      </div>
        
      </form>
</div>";
        
        $__internal_2ccb47df6e733af8c3fe28845b73ce13c19b3f6241aaa897cd718c659acd39ee->leave($__internal_2ccb47df6e733af8c3fe28845b73ce13c19b3f6241aaa897cd718c659acd39ee_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 26,  75 => 23,  65 => 20,  61 => 19,  57 => 18,  53 => 17,  50 => 16,  47 => 15,  44 => 14,  41 => 13,  38 => 12,  34 => 11,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"contenu\">
<table class=\"listeLegere\">
  \t   <caption>Descriptif des éléments hors forfait
       </caption>
             <tr>
                <th class=\"date\">Date</th>
\t\t\t\t<th class=\"libelle\">Libellé</th>  
                <th class=\"montant\">Montant</th>  
                <th class=\"action\">&nbsp;</th>              
             </tr>
 \t{% for unfrais in  lesfraishorsforfait %}
             {% set libelle = unfrais.libelle %}
             {% set date = unfrais.date %}
             {% set montant = unfrais.montant %}
             {% set idfrais = unfrais.id %}
             <tr>
                <td>{{date}}</td>
                <td>{{libelle}}</td>
                <td>{{montant}}</td>
                <td><a href=\"{{path('pg_gsb_frais_supprimerfraishorsforfait',{'id' : idfrais})}}\" 
\t\t\t\tonclick=\"return confirm('Voulez-vous vraiment supprimer ce frais?');\">Supprimer ce frais</a></td>
             </tr>
\t{%endfor%}  
                                          
    </table>
      <form action=\"{{path('pg_gsb_frais_validerfraishorsforfais')}}\" method=\"post\">
      <div class=\"corpsForm\">
         
          <fieldset>
            <legend>Nouvel élément hors forfait
            </legend>
            <p>
              <label for=\"txtDateHF\">Date (jj/mm/aaaa): </label>
              <input type=\"text\" id=\"txtDateHF\" name=\"dateFrais\" size=\"10\" maxlength=\"10\" value=\"\"  />
            </p>
            <p>
              <label for=\"txtLibelleHF\">Libellé</label>
              <input type=\"text\" id=\"txtLibelleHF\" name=\"libelle\" size=\"70\" maxlength=\"256\" value=\"\" />
            </p>
            <p>
              <label for=\"txtMontantHF\">Montant : </label>
              <input type=\"text\" id=\"txtMontantHF\" name=\"montant\" size=\"10\" maxlength=\"10\" value=\"\" />
            </p>
          </fieldset>
      </div>
      <div class=\"piedForm\">
      <p>
        <input id=\"ajouter\" type=\"submit\" value=\"Ajouter\" size=\"20\" />
        <input id=\"effacer\" type=\"reset\" value=\"Effacer\" size=\"20\" />
      </p> 
      </div>
        
      </form>
</div>", "PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig", "/var/www/html/GSB_Symfony_Propre/src/Pg/GsbFraisBundle/Resources/views/SaisirFrais/saisirfraishorsforfait.html.twig");
    }
}
