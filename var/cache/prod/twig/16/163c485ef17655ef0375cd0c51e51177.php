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
class __TwigTemplate_e25dd5bf8e91cb9e39d2e7aac2581bdf extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin-view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <a href=\"/\">
        <div class=\"close\">
            <i class=\"title bi bi-x\"></i>
        </div>
    </a>

    <h2 class=\"nadpis text-center\">Přehled uživatelů</h2>

    <div class=\"users\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 15
            echo "            ";
            $context["totalDuration"] = 0;
            // line 16
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "workRecords", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["workRecord"]) {
                // line 17
                echo "                ";
                $context["totalDuration"] = (($context["totalDuration"] ?? null) + twig_get_attribute($this->env, $this->source, $context["workRecord"], "duration", [], "any", false, false, false, 17));
                // line 18
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workRecord'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            <div class=\"user-box\">
                <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">
                    <h3 class=\"username\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 21), "html", null, true);
            echo "</h3>
                </a>
                <p class=\"text-center\">Total: ";
            // line 23
            echo twig_escape_filter($this->env, (int) floor((($context["totalDuration"] ?? null) / 3600)), "html", null, true);
            echo "h ";
            echo twig_escape_filter($this->env, (int) floor(((($context["totalDuration"] ?? null) % 3600) / 60)), "html", null, true);
            echo "m</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
    </div>

";
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
        return array (  106 => 26,  95 => 23,  90 => 21,  86 => 20,  83 => 19,  77 => 18,  74 => 17,  69 => 16,  66 => 15,  62 => 14,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin-view.html.twig", "/var/www/html/templates/admin-view.html.twig");
    }
}
