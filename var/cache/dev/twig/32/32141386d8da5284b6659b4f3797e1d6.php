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

/* admin-view.html.twig */
class __TwigTemplate_fe4a8798041ba9ac84b186bc7a89d319 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin-view.html.twig", 1);
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
    <a href=\"/\">
        <div class=\"close\">
            <i class=\"title bi bi-x\"></i>
        </div>
    </a>

    <h2 class=\"nadpis text-center\">Přehled uživatelů</h2>

    <div class=\"filter-box3\">
        <form method=\"get\" action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">
            <select name=\"filter\" class=\"form-select\" onchange=\"this.form.submit()\">
                <option value=\"all\">All</option>
                <option value=\"last_week\" ";
        // line 17
        if (((isset($context["selectedFilter"]) || array_key_exists("selectedFilter", $context) ? $context["selectedFilter"] : (function () { throw new RuntimeError('Variable "selectedFilter" does not exist.', 17, $this->source); })()) == "last_week")) {
            echo "selected";
        }
        echo ">Last Week</option>
                <option value=\"last_month\" ";
        // line 18
        if (((isset($context["selectedFilter"]) || array_key_exists("selectedFilter", $context) ? $context["selectedFilter"] : (function () { throw new RuntimeError('Variable "selectedFilter" does not exist.', 18, $this->source); })()) == "last_month")) {
            echo "selected";
        }
        echo ">Last Month</option>
                <option value=\"last_year\" ";
        // line 19
        if (((isset($context["selectedFilter"]) || array_key_exists("selectedFilter", $context) ? $context["selectedFilter"] : (function () { throw new RuntimeError('Variable "selectedFilter" does not exist.', 19, $this->source); })()) == "last_year")) {
            echo "selected";
        }
        echo ">Last Year</option>
            </select>
        </form>
    </div>

    <div class=\"users\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 26
            echo "            ";
            $context["totalDuration"] = 0;
            // line 27
            echo "            ";
            $context["userWorkRecords"] = twig_get_attribute($this->env, $this->source, (isset($context["workRecords"]) || array_key_exists("workRecords", $context) ? $context["workRecords"] : (function () { throw new RuntimeError('Variable "workRecords" does not exist.', 27, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 27), [], "array", false, false, false, 27);
            // line 28
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userWorkRecords"]) || array_key_exists("userWorkRecords", $context) ? $context["userWorkRecords"] : (function () { throw new RuntimeError('Variable "userWorkRecords" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["workRecord"]) {
                // line 29
                echo "                ";
                $context["totalDuration"] = ((isset($context["totalDuration"]) || array_key_exists("totalDuration", $context) ? $context["totalDuration"] : (function () { throw new RuntimeError('Variable "totalDuration" does not exist.', 29, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["workRecord"], "duration", [], "any", false, false, false, 29));
                // line 30
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workRecord'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "            <div class=\"user-box\">
                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">
                    <h4 class=\"username\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 33), "html", null, true);
            echo "</h4>
                </a>
                <p class=\"text-center\">Total: ";
            // line 35
            echo twig_escape_filter($this->env, (int) floor(((isset($context["totalDuration"]) || array_key_exists("totalDuration", $context) ? $context["totalDuration"] : (function () { throw new RuntimeError('Variable "totalDuration" does not exist.', 35, $this->source); })()) / 3600)), "html", null, true);
            echo "h ";
            echo twig_escape_filter($this->env, (int) floor((((isset($context["totalDuration"]) || array_key_exists("totalDuration", $context) ? $context["totalDuration"] : (function () { throw new RuntimeError('Variable "totalDuration" does not exist.', 35, $this->source); })()) % 3600) / 60)), "html", null, true);
            echo "m</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    </div>

<div class=\"chart\">
        <canvas id=\"userChart\"></canvas>
    </div>

<script>
    const usernames = [";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            echo "\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 45), "html", null, true);
            echo "\",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "];
    const totalDurations = [";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 47
            echo "        ";
            $context["totalDuration"] = 0;
            // line 48
            echo "        ";
            $context["userWorkRecords"] = twig_get_attribute($this->env, $this->source, (isset($context["workRecords"]) || array_key_exists("workRecords", $context) ? $context["workRecords"] : (function () { throw new RuntimeError('Variable "workRecords" does not exist.', 48, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 48), [], "array", false, false, false, 48);
            // line 49
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userWorkRecords"]) || array_key_exists("userWorkRecords", $context) ? $context["userWorkRecords"] : (function () { throw new RuntimeError('Variable "userWorkRecords" does not exist.', 49, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["workRecord"]) {
                // line 50
                echo "            ";
                $context["totalDuration"] = ((isset($context["totalDuration"]) || array_key_exists("totalDuration", $context) ? $context["totalDuration"] : (function () { throw new RuntimeError('Variable "totalDuration" does not exist.', 50, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["workRecord"], "duration", [], "any", false, false, false, 50));
                // line 51
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workRecord'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["totalDuration"]) || array_key_exists("totalDuration", $context) ? $context["totalDuration"] : (function () { throw new RuntimeError('Variable "totalDuration" does not exist.', 52, $this->source); })()), "html", null, true);
            echo ",
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "];

    const totalDurationsInHours = totalDurations.map(duration => (duration / 3600).toFixed(2));
    const colors = ['rgba(75, 192, 192, 0.4)', 'rgba(54, 162, 235, 0.4)', 'rgba(255, 99, 132, 0.4)', 'rgba(255, 206, 86, 0.4)', 'rgba(61,144,82, 0.4)', 'rgba(95,111,242, 0.4)'];
    const borders = ['rgba(75, 192, 192, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 99, 132, 1)', 'rgba(255, 206, 86, 1)', 'rgba(61,144,82, 1)', 'rgba(95,111,242, 1)'];

    const ctx = document.getElementById('userChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: usernames,
            datasets: [{
                label: 'Total Worked Hours',
                data: totalDurationsInHours,
                backgroundColor: colors,
                borderColor: borders,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value, index, values) {
                            return value + 'h';
                        }
                    }
                }
            }
        }
    });
</script>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 53,  202 => 52,  196 => 51,  193 => 50,  188 => 49,  185 => 48,  182 => 47,  178 => 46,  165 => 45,  156 => 38,  145 => 35,  140 => 33,  136 => 32,  133 => 31,  127 => 30,  124 => 29,  119 => 28,  116 => 27,  113 => 26,  109 => 25,  98 => 19,  92 => 18,  86 => 17,  80 => 14,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <a href=\"/\">
        <div class=\"close\">
            <i class=\"title bi bi-x\"></i>
        </div>
    </a>

    <h2 class=\"nadpis text-center\">Přehled uživatelů</h2>

    <div class=\"filter-box3\">
        <form method=\"get\" action=\"{{ path('admin') }}\">
            <select name=\"filter\" class=\"form-select\" onchange=\"this.form.submit()\">
                <option value=\"all\">All</option>
                <option value=\"last_week\" {% if selectedFilter == 'last_week' %}selected{% endif %}>Last Week</option>
                <option value=\"last_month\" {% if selectedFilter == 'last_month' %}selected{% endif %}>Last Month</option>
                <option value=\"last_year\" {% if selectedFilter == 'last_year' %}selected{% endif %}>Last Year</option>
            </select>
        </form>
    </div>

    <div class=\"users\">
        {% for user in users %}
            {% set totalDuration = 0 %}
            {% set userWorkRecords = workRecords[user.id] %}
            {% for workRecord in userWorkRecords %}
                {% set totalDuration = totalDuration + workRecord.duration %}
            {% endfor %}
            <div class=\"user-box\">
                <a href=\"{{ path('admin_user', {'id': user.id}) }}\">
                    <h4 class=\"username\">{{ user.username }}</h4>
                </a>
                <p class=\"text-center\">Total: {{ totalDuration // 3600 }}h {{ (totalDuration % 3600) // 60 }}m</p>
            </div>
        {% endfor %}
    </div>

<div class=\"chart\">
        <canvas id=\"userChart\"></canvas>
    </div>

<script>
    const usernames = [{% for user in users %}\"{{ user.username }}\",{% endfor %}];
    const totalDurations = [{% for user in users %}
        {% set totalDuration = 0 %}
        {% set userWorkRecords = workRecords[user.id] %}
        {% for workRecord in userWorkRecords %}
            {% set totalDuration = totalDuration + workRecord.duration %}
        {% endfor %}
        {{ totalDuration }},
    {% endfor %}];

    const totalDurationsInHours = totalDurations.map(duration => (duration / 3600).toFixed(2));
    const colors = ['rgba(75, 192, 192, 0.4)', 'rgba(54, 162, 235, 0.4)', 'rgba(255, 99, 132, 0.4)', 'rgba(255, 206, 86, 0.4)', 'rgba(61,144,82, 0.4)', 'rgba(95,111,242, 0.4)'];
    const borders = ['rgba(75, 192, 192, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 99, 132, 1)', 'rgba(255, 206, 86, 1)', 'rgba(61,144,82, 1)', 'rgba(95,111,242, 1)'];

    const ctx = document.getElementById('userChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: usernames,
            datasets: [{
                label: 'Total Worked Hours',
                data: totalDurationsInHours,
                backgroundColor: colors,
                borderColor: borders,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value, index, values) {
                            return value + 'h';
                        }
                    }
                }
            }
        }
    });
</script>


{% endblock %}
", "admin-view.html.twig", "/var/www/html/templates/admin-view.html.twig");
    }
}
