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

/* edit-record.html.twig */
class __TwigTemplate_b6b22014333228935ae0c884aee4bba0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'container' => [$this, 'block_container'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "edit-record.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
<main>

";
        // line 6
        $this->displayBlock('container', $context, $blocks);
        // line 29
        echo "
</main>

";
    }

    // line 6
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div class=\"container new-record\">

    <a href=\"/\">
    <div class=\"close\">
    <i class=\"title bi bi-x\"></i>
    </div>
    </a>

    <div class=\"row\">
        <div class=\"col-sm-9 col-md-7 col-lg-4 mx-auto\">
            <div class=\"card border-0 shadow rounded-3 my-5\">
                <div class=\"card-body p-4 p-sm-5\">
                    <h3 class=\"card-title text-center mb-5 fw-light fs-3\">Upravit záznam</h3>
                    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "
                </div>  
            </div>
        </div>
    </div>
  
</div>

";
    }

    public function getTemplateName()
    {
        return "edit-record.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  69 => 7,  65 => 6,  58 => 29,  56 => 6,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "edit-record.html.twig", "/var/www/html/templates/edit-record.html.twig");
    }
}
