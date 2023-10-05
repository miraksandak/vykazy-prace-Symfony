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
class __TwigTemplate_c3373024c65751da002443c62495895b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if (($context["error"] ?? null)) {
            // line 5
            echo "        <div class=\"err-message\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 5), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 5), "security"), "html", null, true);
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
        return array (  70 => 16,  59 => 7,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login.html.twig", "/var/www/html/templates/login.html.twig");
    }
}
