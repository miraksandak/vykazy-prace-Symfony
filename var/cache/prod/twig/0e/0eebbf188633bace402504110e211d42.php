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

/* admin-user-view.html.twig */
class __TwigTemplate_20a01c0c71abb0457297f85ad7b5b34b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin-user-view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">
    <div class=\"close\">
        <i class=\"title bi bi-x\"></i>
    </div>
</a>

<div class=\"filter-box box-2\">
    <form method=\"get\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\">
        <select name=\"filter\" class=\"form-select\" onchange=\"this.form.submit()\">
            <option value=\"\">All</option>
            <option value=\"last_month\" ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 15), "query", [], "any", false, false, false, 15), "get", [0 => "filter"], "method", false, false, false, 15) == "last_month")) {
            echo "selected";
        }
        echo ">Last Month</option>
            <option value=\"last_year\" ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 16), "query", [], "any", false, false, false, 16), "get", [0 => "filter"], "method", false, false, false, 16) == "last_year")) {
            echo "selected";
        }
        echo ">Last Year</option>
        </select>
    </form>
</div>

<div class=\"user-record\">
    <h3 class=\"text-center\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 22), "html", null, true);
        echo "</h3>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Start Time</th>
                <th>Duration</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 35
        $context["totalDuration"] = 0;
        // line 36
        echo "            ";
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workRecord"], "description", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit-record", ["id" => twig_get_attribute($this->env, $this->source, $context["workRecord"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" class=\"btn btn-outline-success\">
                            <i class=\"bi bi-pencil-square\"></i> Edit
                        </a>
                    </td>
                    <td>
                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete-record", ["id" => twig_get_attribute($this->env, $this->source, $context["workRecord"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" class=\"btn btn-outline-danger\">
                            <i class=\"bi bi-trash\"></i> Delete
                        </a>
                    </td>    
                    ";
            // line 51
            $context["totalDuration"] = (($context["totalDuration"] ?? null) + twig_get_attribute($this->env, $this->source, $context["workRecord"], "duration", [], "any", false, false, false, 51));
            // line 52
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workRecord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </tbody>
    </table>
    <p class=\"text-center\">Total: ";
        // line 56
        echo twig_escape_filter($this->env, (int) floor((($context["totalDuration"] ?? null) / 3600)), "html", null, true);
        echo "h ";
        echo twig_escape_filter($this->env, (int) floor(((($context["totalDuration"] ?? null) % 3600) / 60)), "html", null, true);
        echo "m</p>
</div>

<div class=\"export-box text-right\">
    <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_csv");
        echo "\" class=\"btn btn-primary\"><i class=\"bi bi-download\"></i> Export as CSV</a>
</div>

";
    }

    public function getTemplateName()
    {
        return "admin-user-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 60,  155 => 56,  151 => 54,  144 => 52,  142 => 51,  135 => 47,  127 => 42,  122 => 40,  116 => 39,  112 => 38,  109 => 37,  104 => 36,  102 => 35,  86 => 22,  75 => 16,  69 => 15,  63 => 12,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin-user-view.html.twig", "/var/www/html/templates/admin-user-view.html.twig");
    }
}
