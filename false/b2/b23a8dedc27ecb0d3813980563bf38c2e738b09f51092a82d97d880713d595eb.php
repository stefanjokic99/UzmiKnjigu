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

/* _global/cover_page.html */
class __TwigTemplate_65e1bcf7e04fd5e63c7523676fd3f03ee6697e3d7d2f1fbab13dfc1b1e0c0e02 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'profile' => [$this, 'block_profile'],
            'scripts' => [$this, 'block_scripts'],
            'specific_scripts' => [$this, 'block_specific_scripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_global/index.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("_global/index.html", "_global/cover_page.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $this->displayBlock('profile', $context, $blocks);
        // line 4
        echo "<nav class=\"navbar sticky-top navbar-expand-lg navbar-dark\">
    <div class=\"container-fluid\">
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarMain\" aria-controls=\"navbarMain\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarMain\">
            <ul class=\"navbar-nav  nav-justified w-100\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" aria-current=\"page\" href=\"#\">Naslovna</a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Kategorije
                    </a>
                    <ul class=\"dropdown-menu nav-category nav-justified w-100\" aria-labelledby=\"navbarDropdown\">
                        <li><a class=\"dropdown-item\" href=\"#\">Osnovna škola</a></li>
                        <li><hr class=\"dropdown-divider\"></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Srednja škola</a></li>
                        <li><hr class=\"dropdown-divider\"></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Fakultet</a></li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Kako kupovati</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Kontakt</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">O nama</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
";
    }

    // line 3
    public function block_profile($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 40
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/js/responsiveCartHelper.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/js/navbar-click.js\"></script>
";
        // line 43
        $this->displayBlock('specific_scripts', $context, $blocks);
    }

    public function block_specific_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    public function getTemplateName()
    {
        return "_global/cover_page.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 43,  109 => 42,  104 => 41,  100 => 40,  94 => 3,  55 => 4,  53 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_global/cover_page.html", "C:\\xampp\\htdocs\\views\\_global\\cover_page.html");
    }
}
