<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/archives.html.twig */
class __TwigTemplate_c6ab513f6003253e6e340aee6c74d7536d6489d1ebeaec6a7a7f19d8a6786923 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<ul class=\"archives\">

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["archives_data"] ?? null));
        foreach ($context['_seq'] as $context["month"] => $context["items"]) {
            // line 4
            echo "    <li>
    \t<a href=\"";
            // line 5
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "archives", []), "taxonomy_names", []), "month", []), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []), "html", null, true);
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_lower_filter($this->env, twig_date_format_filter($this->env, $context["month"], "M_Y")), "url"), "html", null, true);
            echo "\">
        ";
            // line 6
            if (($context["archives_show_count"] ?? null)) {
                // line 7
                echo "        <span class=\"label label-rounded label-primary\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["items"]), "html", null, true);
                echo "</span>
        ";
            }
            // line 9
            echo "          <span class=\"archive_date\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["month"], $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "archives", []), "date_display_format", [])), "html", null, true);
            echo " </span>
        </a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['month'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "partials/archives.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 13,  57 => 9,  51 => 7,  49 => 6,  41 => 5,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"archives\">

{% for month,items in archives_data %}
    <li>
    \t<a href=\"{{ base_url }}/{{ config.plugins.archives.taxonomy_names.month }}{{ config.system.param_sep }}{{ month|date('M_Y')|lower|e('url') }}\">
        {% if archives_show_count %}
        <span class=\"label label-rounded label-primary\">{{ items|length }}</span>
        {% endif %}
          <span class=\"archive_date\">{{ month|date(config.plugins.archives.date_display_format) }} </span>
        </a>
    </li>
{% endfor %}
</ul>
", "partials/archives.html.twig", "/home/terry/Downloads/grav-skeleton-blog-site+admin-2.0 (1).0/user/themes/quark/templates/partials/archives.html.twig");
    }
}
