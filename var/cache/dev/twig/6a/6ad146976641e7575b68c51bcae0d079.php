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
class __TwigTemplate_31e0b81d7cefeb9e25d1f9ccf7efd465 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-user-view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-user-view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin-user-view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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

<div class=\"filters\">
    <div class=\"filter-box\">
        <form method=\"get\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\">
            <select name=\"filter\" class=\"form-select\" onchange=\"this.form.submit()\">
                <option value=\"all\">All</option>
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
        echo ">
                    Last Month</option>
                <option value=\"last_year\" ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "query", [], "any", false, false, false, 19), "get", [0 => "filter"], "method", false, false, false, 19) == "last_year")) {
            echo "selected";
        }
        echo ">
                    Last Year</option>
            </select>
        </form>
    </div>

    <div class=\"filter-box\">

        <form method=\"get\" action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\">
            <select name=\"department\" class=\"form-select\" onchange=\"this.form.submit()\">
                <option value=\"all\">All Departments</option>
                <option value=\"AV\">AV</option>
                <option value=\"IT\">IT</option>
                <option value=\"PI\">PI</option>
                <option value=\"Backoffice\">Backoffice</option>
            </select>
        </form>

    </div>

</div>

<div class=\"user-record\">
    <h3 class=\"text-center\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "username", [], "any", false, false, false, 42), "html", null, true);
        echo "</h3>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Start Time</th>
                <th>Duration</th>
                <th>Description</th>
                <th>Department</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 56
        $context["totalDuration"] = 0;
        // line 57
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["workRecords"]) || array_key_exists("workRecords", $context) ? $context["workRecords"] : (function () { throw new RuntimeError('Variable "workRecords" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["workRecord"]) {
            // line 58
            echo "            <tr>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workRecord"], "startTime", [], "any", false, false, false, 59), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, (int) floor((twig_get_attribute($this->env, $this->source, $context["workRecord"], "duration", [], "any", false, false, false, 60) / 3600)), "html", null, true);
            echo "h ";
            echo twig_escape_filter($this->env, (int) floor(((twig_get_attribute($this->env, $this->source, $context["workRecord"], "duration", [], "any", false, false, false, 60) % 3600) / 60)), "html", null, true);
            echo "m</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workRecord"], "description", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workRecord"], "department", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit-record", ["id" => twig_get_attribute($this->env, $this->source, $context["workRecord"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\" class=\"btn btn-outline-success\">
                        <i class=\"bi bi-pencil-square\"></i> Edit
                    </a>
                </td>
                <td>
                    <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete-record", ["id" => twig_get_attribute($this->env, $this->source, $context["workRecord"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\" class=\"btn btn-outline-danger\">
                        <i class=\"bi bi-trash\"></i> Delete
                    </a>
                </td>
                ";
            // line 73
            $context["totalDuration"] = ((isset($context["totalDuration"]) || array_key_exists("totalDuration", $context) ? $context["totalDuration"] : (function () { throw new RuntimeError('Variable "totalDuration" does not exist.', 73, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["workRecord"], "duration", [], "any", false, false, false, 73));
            // line 74
            echo "            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workRecord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        </tbody>
    </table>
    <p class=\"text-center\">Total: ";
        // line 78
        echo twig_escape_filter($this->env, (int) floor(((isset($context["totalDuration"]) || array_key_exists("totalDuration", $context) ? $context["totalDuration"] : (function () { throw new RuntimeError('Variable "totalDuration" does not exist.', 78, $this->source); })()) / 3600)), "html", null, true);
        echo "h ";
        echo twig_escape_filter($this->env, (int) floor((((isset($context["totalDuration"]) || array_key_exists("totalDuration", $context) ? $context["totalDuration"] : (function () { throw new RuntimeError('Variable "totalDuration" does not exist.', 78, $this->source); })()) % 3600) / 60)), "html", null, true);
        echo "m</p>
</div>

<div class=\"export-box text-right\">
    <a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_csv");
        echo "\" class=\"btn btn-primary\"><i class=\"bi bi-download\"></i> Export as CSV</a>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  215 => 82,  206 => 78,  202 => 76,  195 => 74,  193 => 73,  186 => 69,  178 => 64,  173 => 62,  169 => 61,  163 => 60,  159 => 59,  156 => 58,  151 => 57,  149 => 56,  132 => 42,  114 => 27,  101 => 19,  94 => 17,  88 => 16,  82 => 13,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<a href=\"{{ path('admin') }}\">
    <div class=\"close\">
        <i class=\"title bi bi-x\"></i>
    </div>
</a>

<div class=\"filters\">
    <div class=\"filter-box\">
        <form method=\"get\" action=\"{{ path('admin_user', {'id': user.id}) }}\">
            <select name=\"filter\" class=\"form-select\" onchange=\"this.form.submit()\">
                <option value=\"all\">All</option>
                <option value=\"last_week\" {% if app.request.query.get('filter') == 'last_week' %}selected{% endif %}>Last Week</option>
                <option value=\"last_month\" {% if app.request.query.get('filter') == 'last_month' %}selected{% endif %}>
                    Last Month</option>
                <option value=\"last_year\" {% if app.request.query.get('filter') == 'last_year' %}selected{% endif %}>
                    Last Year</option>
            </select>
        </form>
    </div>

    <div class=\"filter-box\">

        <form method=\"get\" action=\"{{ path('admin_user', {'id': user.id}) }}\">
            <select name=\"department\" class=\"form-select\" onchange=\"this.form.submit()\">
                <option value=\"all\">All Departments</option>
                <option value=\"AV\">AV</option>
                <option value=\"IT\">IT</option>
                <option value=\"PI\">PI</option>
                <option value=\"Backoffice\">Backoffice</option>
            </select>
        </form>

    </div>

</div>

<div class=\"user-record\">
    <h3 class=\"text-center\">{{ user.username }}</h3>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Start Time</th>
                <th>Duration</th>
                <th>Description</th>
                <th>Department</th>
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
                <td>{{ workRecord.description }}</td>
                <td>{{ workRecord.department }}</td>
                <td>
                    <a href=\"{{ path('edit-record', {'id': workRecord.id}) }}\" class=\"btn btn-outline-success\">
                        <i class=\"bi bi-pencil-square\"></i> Edit
                    </a>
                </td>
                <td>
                    <a href=\"{{ path('delete-record', {'id': workRecord.id}) }}\" class=\"btn btn-outline-danger\">
                        <i class=\"bi bi-trash\"></i> Delete
                    </a>
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

{% endblock %}", "admin-user-view.html.twig", "/var/www/html/templates/admin-user-view.html.twig");
    }
}
