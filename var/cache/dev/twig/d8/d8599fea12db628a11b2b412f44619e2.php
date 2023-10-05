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

/* login.html.twig */
class __TwigTemplate_6fbd531bae29724a8a30cfa068492221 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login.html.twig", 1);
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
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "        <div class=\"err-message\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 5, $this->source); })()), "messageKey", [], "any", false, false, false, 5), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 5, $this->source); })()), "messageData", [], "any", false, false, false, 5), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "
<div class=\"login-page\">

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-9 col-md-7 col-lg-4 mx-auto\">
        <div class=\"card border-0 shadow rounded-3 my-5\">
          <div class=\"card-body p-4 p-sm-5\">
            <h2 class=\"card-title text-center mb-5 fw-light fs-2\">Výkazy práce</h2>
            <form action=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\">
              <div class=\"form-floating mb-3\">
                <input type=\"text\" class=\"form-control\" id=\"floatingInput\" placeholder=\"Jméno\" name=\"_username\">
                <label for=\"floatingInput\">Jméno</label>
              </div>
              <div class=\"form-floating mb-3\">
                <input type=\"password\" class=\"form-control\" id=\"floatingPassword\" placeholder=\"Heslo\" name=\"_password\">
                <label for=\"floatingPassword\">Heslo</label>
              </div>

              <div class=\"d-grid\">
                <button class=\"btn btn-success btn-login text-uppercase fw-bold\" type=\"submit\">Přihlásit se</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 16,  77 => 7,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
    {% if error %}
        <div class=\"err-message\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

<div class=\"login-page\">

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-9 col-md-7 col-lg-4 mx-auto\">
        <div class=\"card border-0 shadow rounded-3 my-5\">
          <div class=\"card-body p-4 p-sm-5\">
            <h2 class=\"card-title text-center mb-5 fw-light fs-2\">Výkazy práce</h2>
            <form action=\"{{ path('app_login') }}\" method=\"post\">
              <div class=\"form-floating mb-3\">
                <input type=\"text\" class=\"form-control\" id=\"floatingInput\" placeholder=\"Jméno\" name=\"_username\">
                <label for=\"floatingInput\">Jméno</label>
              </div>
              <div class=\"form-floating mb-3\">
                <input type=\"password\" class=\"form-control\" id=\"floatingPassword\" placeholder=\"Heslo\" name=\"_password\">
                <label for=\"floatingPassword\">Heslo</label>
              </div>

              <div class=\"d-grid\">
                <button class=\"btn btn-success btn-login text-uppercase fw-bold\" type=\"submit\">Přihlásit se</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{% endblock %}
", "login.html.twig", "/var/www/html/templates/login.html.twig");
    }
}
