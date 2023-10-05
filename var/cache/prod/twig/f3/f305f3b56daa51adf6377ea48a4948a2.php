<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* overview.html.twig */
class __TwigTemplate_448dd0d02e5e2e6b83a91a4ebc97aa30 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "overview.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
<h2 class=\"nadpis text-center\">Přehled</h2>

<div class=\"new-record-box\">
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new-record");
        echo "\">
        <button type=\"button\" class=\"btn btn-success add-record\"><i class=\"bi bi-plus-circle-fill\"></i> Přidat záznam</button>
    </a>
</div>

<div class=\"filter-box\">
    <form method=\"get\" action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("overview");
        echo "\">
        <select name=\"filter\" class=\"form-select\" onchange=\"this.form.submit()\">
            <option value=\"All\">All</option>
            <option value=\"last_month\" ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 16), "query", [], "any", false, false, false, 16), "get", [0 => "filter"], "method", false, false, false, 16) == "last_month")) {
            echo "selected";
        }
        echo ">Last Month</option>
            <option value=\"last_year\" ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 17), "query", [], "any", false, false, false, 17), "get", [0 => "filter"], "method", false, false, false, 17) == "last_year")) {
            echo "selected";
        }
        echo ">Last Year</option>
        </select>
    </form>
</div>

<div class=\"overview-box table-responsive\">
    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Start Time</th>
                <th>Duration</th>
                <th>Department</th>
                <th>Type of Work</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["workRecords"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["workRecord"]) {
            // line 37
            echo "                <tr>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workRecord"], "startTime", [], "any", false, false, false, 38), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, (int) floor((twig_get_attribute($this->env, $this->source, $context["workRecord"], "duration", [], "any", false, false, false, 39) / 3600)), "html", null, true);
            echo "h ";
            echo twig_escape_filter($this->env, (int) floor(((twig_get_attribute($this->env, $this->source, $context["workRecord"], "duration", [], "any", false, false, false, 39) % 3600) / 60)), "html", null, true);
            echo "m</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workRecord"], "department", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workRecord"], "typeOfWork", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workRecord"], "description", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 44
            if (twig_get_attribute($this->env, $this->source, $context["workRecord"], "isEditableBy", [0 => ($context["user"] ?? null)], "method", false, false, false, 44)) {
                // line 45
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit-record", ["id" => twig_get_attribute($this->env, $this->source, $context["workRecord"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\" class=\"btn btn-outline-success\">
                                <i class=\"bi bi-pencil-square\"></i> Edit
                            </a>
                        ";
            } else {
                // line 49
                echo "                            <button class=\"btn btn-outline-success\" disabled>
                                <i class=\"bi bi-pencil-square\"></i> Edit
                            </button>
                        ";
            }
            // line 53
            echo "                    </td>
                    <td>
                        ";
            // line 55
            if (twig_get_attribute($this->env, $this->source, $context["workRecord"], "isEditableBy", [0 => ($context["user"] ?? null)], "method", false, false, false, 55)) {
                // line 56
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete-record", ["id" => twig_get_attribute($this->env, $this->source, $context["workRecord"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\" class=\"btn btn-outline-danger\">
                                <i class=\"bi bi-trash\"></i> Delete
                            </a>
                        ";
            } else {
                // line 60
                echo "                            <button class=\"btn btn-outline-danger\" disabled>
                                <i class=\"bi bi-trash\"></i> Delete
                            </button>
                        ";
            }
            // line 64
            echo "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workRecord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        </tbody>
    </table>
</div>

<div class=\"export-box text-right\">
    <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_csv");
        echo "\" class=\"btn btn-primary\"><i class=\"bi bi-download\"></i> Export as CSV</a>
</div>

";
    }

    public function getTemplateName()
    {
        return "overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 72,  175 => 67,  167 => 64,  161 => 60,  153 => 56,  151 => 55,  147 => 53,  141 => 49,  133 => 45,  131 => 44,  126 => 42,  122 => 41,  118 => 40,  112 => 39,  108 => 38,  105 => 37,  101 => 36,  77 => 17,  71 => 16,  65 => 13,  56 => 7,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overview.html.twig", "/var/www/html/templates/overview.html.twig");
    }
}
