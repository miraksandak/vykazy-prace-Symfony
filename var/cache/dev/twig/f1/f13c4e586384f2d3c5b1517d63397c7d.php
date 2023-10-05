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
class __TwigTemplate_b5c3f8e9b6b9859ceb6a697564430e4b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "overview.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "overview.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "overview.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
            <option value=\"all\" ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "query", [], "any", false, false, false, 15), "get", [0 => "filter"], "method", false, false, false, 15) == "all")) {
            echo "selected";
        }
        echo ">All</option>
            <option value=\"last_week\" ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "query", [], "any", false, false, false, 16), "get", [0 => "filter"], "method", false, false, false, 16) == "last_week")) {
            echo "selected";
        }
        echo ">Last Week</option>
            <option value=\"last_month\" ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "query", [], "any", false, false, false, 17), "get", [0 => "filter"], "method", false, false, false, 17) == "last_month")) {
            echo "selected";
        }
        echo ">Last Month</option>
            <option value=\"last_year\" ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "query", [], "any", false, false, false, 18), "get", [0 => "filter"], "method", false, false, false, 18) == "last_year")) {
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
        // line 37
        $context["totalDuration"] = 0;
        // line 38
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["workRecords"]) || array_key_exists("workRecords", $context) ? $context["workRecords"] : (function () { throw new RuntimeError('Variable "workRecords" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["workRecord"]) {
            // line 39
            echo "                <tr>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workRecord"], "startTime", [], "any", false, false, false, 40), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, (int) floor((twig_get_attribute($this->env, $this->source, $context["workRecord"], "duration", [], "any", false, false, false, 41) / 3600)), "html", null, true);
            echo "h ";
            echo twig_escape_filter($this->env, (int) floor(((twig_get_attribute($this->env, $this->source, $context["workRecord"], "duration", [], "any", false, false, false, 41) % 3600) / 60)), "html", null, true);
            echo "m</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workRecord"], "department", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workRecord"], "typeOfWork", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workRecord"], "description", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 46
            if (twig_get_attribute($this->env, $this->source, $context["workRecord"], "isEditableBy", [0 => (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })())], "method", false, false, false, 46)) {
                // line 47
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit-record", ["id" => twig_get_attribute($this->env, $this->source, $context["workRecord"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\" class=\"btn btn-outline-success\">
                                <i class=\"bi bi-pencil-square\"></i> Edit
                            </a>
                        ";
            } else {
                // line 51
                echo "                            <button class=\"btn btn-outline-success\" disabled>
                                <i class=\"bi bi-pencil-square\"></i> Edit
                            </button>
                        ";
            }
            // line 55
            echo "                    </td>
                    <td>
                        ";
            // line 57
            if (twig_get_attribute($this->env, $this->source, $context["workRecord"], "isEditableBy", [0 => (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })())], "method", false, false, false, 57)) {
                // line 58
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete-record", ["id" => twig_get_attribute($this->env, $this->source, $context["workRecord"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\" class=\"btn btn-outline-danger\">
                                <i class=\"bi bi-trash\"></i> Delete
                            </a>
                        ";
            } else {
                // line 62
                echo "                            <button class=\"btn btn-outline-danger\" disabled>
                                <i class=\"bi bi-trash\"></i> Delete
                            </button>
                        ";
            }
            // line 66
            echo "                    </td>
                    ";
            // line 67
            $context["totalDuration"] = ((isset($context["totalDuration"]) || array_key_exists("totalDuration", $context) ? $context["totalDuration"] : (function () { throw new RuntimeError('Variable "totalDuration" does not exist.', 67, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["workRecord"], "duration", [], "any", false, false, false, 67));
            // line 68
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workRecord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </tbody>
    </table>
    <p class=\"text-center\">Total: ";
        // line 72
        echo twig_escape_filter($this->env, (int) floor(((isset($context["totalDuration"]) || array_key_exists("totalDuration", $context) ? $context["totalDuration"] : (function () { throw new RuntimeError('Variable "totalDuration" does not exist.', 72, $this->source); })()) / 3600)), "html", null, true);
        echo "h ";
        echo twig_escape_filter($this->env, (int) floor((((isset($context["totalDuration"]) || array_key_exists("totalDuration", $context) ? $context["totalDuration"] : (function () { throw new RuntimeError('Variable "totalDuration" does not exist.', 72, $this->source); })()) % 3600) / 60)), "html", null, true);
        echo "m</p>
</div>

<div class=\"export-box text-right\">
    <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_csv");
        echo "\" class=\"btn btn-primary\"><i class=\"bi bi-download\"></i> Export as CSV</a>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  224 => 76,  215 => 72,  211 => 70,  204 => 68,  202 => 67,  199 => 66,  193 => 62,  185 => 58,  183 => 57,  179 => 55,  173 => 51,  165 => 47,  163 => 46,  158 => 44,  154 => 43,  150 => 42,  144 => 41,  140 => 40,  137 => 39,  132 => 38,  130 => 37,  106 => 18,  100 => 17,  94 => 16,  88 => 15,  83 => 13,  74 => 7,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}

<h2 class=\"nadpis text-center\">Přehled</h2>

<div class=\"new-record-box\">
    <a href=\"{{ path('new-record') }}\">
        <button type=\"button\" class=\"btn btn-success add-record\"><i class=\"bi bi-plus-circle-fill\"></i> Přidat záznam</button>
    </a>
</div>

<div class=\"filter-box\">
    <form method=\"get\" action=\"{{ path('overview') }}\">
        <select name=\"filter\" class=\"form-select\" onchange=\"this.form.submit()\">
            <option value=\"all\" {% if app.request.query.get('filter') == 'all' %}selected{% endif %}>All</option>
            <option value=\"last_week\" {% if app.request.query.get('filter') == 'last_week' %}selected{% endif %}>Last Week</option>
            <option value=\"last_month\" {% if app.request.query.get('filter') == 'last_month' %}selected{% endif %}>Last Month</option>
            <option value=\"last_year\" {% if app.request.query.get('filter') == 'last_year' %}selected{% endif %}>Last Year</option>
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
        {% set totalDuration = 0 %}
            {% for workRecord in workRecords %}
                <tr>
                    <td>{{ workRecord.startTime|date('d-m-Y H:i:s') }}</td>
                    <td>{{ workRecord.duration // 3600 }}h {{ (workRecord.duration % 3600) // 60 }}m</td>
                    <td>{{ workRecord.department }}</td>
                    <td>{{ workRecord.typeOfWork }}</td>
                    <td>{{ workRecord.description }}</td>
                    <td>
                        {% if workRecord.isEditableBy(user) %}
                            <a href=\"{{ path('edit-record', {'id': workRecord.id}) }}\" class=\"btn btn-outline-success\">
                                <i class=\"bi bi-pencil-square\"></i> Edit
                            </a>
                        {% else %}
                            <button class=\"btn btn-outline-success\" disabled>
                                <i class=\"bi bi-pencil-square\"></i> Edit
                            </button>
                        {% endif %}
                    </td>
                    <td>
                        {% if workRecord.isEditableBy(user) %}
                            <a href=\"{{ path('delete-record', {'id': workRecord.id}) }}\" class=\"btn btn-outline-danger\">
                                <i class=\"bi bi-trash\"></i> Delete
                            </a>
                        {% else %}
                            <button class=\"btn btn-outline-danger\" disabled>
                                <i class=\"bi bi-trash\"></i> Delete
                            </button>
                        {% endif %}
                    </td>
                    {% set totalDuration = totalDuration + workRecord.duration %}
                </tr>
            {% endfor %}
        </tbody>
    </table>
    <p class=\"text-center\">Total: {{ totalDuration // 3600 }}h {{ (totalDuration % 3600) // 60 }}m</p>
</div>

<div class=\"export-box text-right\">
    <a href=\"{{ path('export_csv') }}\" class=\"btn btn-primary\"><i class=\"bi bi-download\"></i> Export as CSV</a>
</div>

{% endblock %}
", "overview.html.twig", "/var/www/html/templates/overview.html.twig");
    }
}
