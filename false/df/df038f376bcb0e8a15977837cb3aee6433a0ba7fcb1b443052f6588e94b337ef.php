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

/* Main/home.html */
class __TwigTemplate_9a4e82f3916b83a50b42e19e76e0e7abbe05da2b951aa01b5e368e4a3470a0f3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'naslov' => [$this, 'block_naslov'],
            'css' => [$this, 'block_css'],
            'embedded_js' => [$this, 'block_embedded_js'],
            'profile' => [$this, 'block_profile'],
            'main' => [$this, 'block_main'],
            'specific_scripts' => [$this, 'block_specific_scripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_global/cover_page.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("_global/cover_page.html", "Main/home.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Naslovna";
    }

    // line 4
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/css/slider.css\" />
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/css/card.css\" />
";
    }

    // line 9
    public function block_embedded_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "\$(document).ready(function() {
 \$('#navbarMain > ul > li:nth-child(1) > a').addClass('active');
});
";
    }

    // line 14
    public function block_profile($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "<div>
    <div class=\"reg-text\">
        <a href=\"user/register\">Registrujte se</a>
        /
        <a href=\"user/login\">Prijavite se</a>

        <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/img/avatar.png\" class=\"image-avatar\">
    </div>

    <img src=\"Assets/img/pocetniLogo0.png\" class=\"img-fluid\" />
</div>
";
    }

    // line 27
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "<div class=\"side-navbar d-flex justify-content-between flex-wrap flex-column\" id=\"sidebar\">
    <ul class=\"nav flex-column text-white w-100\">
        <a href=\"#\" class=\"nav-link h3 my-2\">
            Detaljna pretraga
        </a>
        <li href=\"#\" class=\"nav-link underline\">
            <span class=\"mx-2\">Kategorija</span>
        </li>
        <ul>
            <li class=\"nav-link\">
          <span class=\"mx-2\">
            <input type=\"radio\" id=\"f-1\" name=\"category\" value=\"1\" style=\"display:none\">
            <label for=\"f-1\" class=\"checkbox\" ></label> Osnovna škola
          </span>
            </li>
            <li href=\"#\" class=\"nav-link\">
          <span class=\"mx-2\">
            <input type=\"radio\" id=\"f-2\" name=\"category\" value=\"2\" style=\"display:none\">
            <label for=\"f-2\" class=\"checkbox\"></label> Srednja škola
          </span>
            </li>
            <li href=\"#\" class=\"nav-link\">
          <span class=\"mx-2\">
            <input type=\"radio\" id=\"f-3\" name=\"category\" value=\"3\" style=\"display:none\">
            <label for=\"f-3\" class=\"checkbox\"></label> Fakultet
          </span>
            </li>
        </ul>
        <li href=\"#\" class=\"nav-link underline\">
            <span class=\"mx-2\">Stanje</span>
        </li>
        <ul>
            <li href=\"#\" class=\"nav-link\">
          <span class=\"mx-2\">
            <input type=\"radio\" id=\"f-4\" name=\"state\" value=\"1\" style=\"display:none\">
            <label for=\"f-4\" class=\"checkbox\"></label> Dobro
          </span>
            </li>
            <li href=\"#\" class=\"nav-link\">
          <span class=\"mx-2\">
            <input type=\"radio\" id=\"f-5\" name=\"state\" value=\"2\" style=\"display:none\">
            <label for=\"f-5\" class=\"checkbox\"></label> Srednje
          </span>
            </li>
            <li href=\"#\" class=\"nav-link\">
          <span class=\"mx-2\">
            <input type=\"radio\" id=\"f-6\" name=\"state\" value=\"3\" style=\"display:none\">
            <label for=\"f-6\" class=\"checkbox\"></label> Loše
          </span>
            </li>
        </ul>
        <li href=\"#\" class=\"nav-link underline\">
            <span class=\"mx-2\">Cijena</span>
        </li>
        <div class=\"slidecontainer\">
            <input type=\"range\" min=\"0\" max=\"100\" value=\"50\" class=\"slider\" id=\"myRange\">
        </div>
        <div class=\"price-range\">
            <label>0</label>
            <label>50</label>
            <label>100</label>
        </div>
        <div class=\"price-range sum-price\">
            <label>Ukupna cijena: </label>
            <label id=\"demo\">0 </label>
            <label> KM</label>
        </div>
        <button class=\"button-filter-search\">
            Pretraga
        </button>
    </ul>
</div>

<!--Dugme za sidenav-->
<div class=\"p-1 my-container\">
    <div class=\"navbar top-navbar navbar-light px-5\"  >
        <a class=\"btn border-0\" id=\"menu-btn\" style=\"background-color: #012497;\">
            <i id=\"toggleBtn\" class=\"bi-caret-right-fill\" ></i>
        </a>
    </div>
    <section>
        <div class=\"container-fluid bg-trasparent my-4 p-3\" style=\"position: relative;\">
            <div id=\"bookList\" class=\"row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3\">

            </div>
        </div>
        <div aria-label=\"Page navigation example\">
            <ul class=\"pagination justify-content-end\">
                <li class=\"page-item\" id=\"previous\">
                    <a class=\"page-link\" href=\"#\">Previous</a>
                </li>
                <li class=\"page-item\" id=\"next\">
                    <a class=\"page-link\" href=\"#\">Next</a>
                </li>
            </ul>
        </div>
    </section>
</div>
";
    }

    // line 127
    public function block_specific_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/js/listBooks.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/js/sidenav.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/js/slider.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "Main/home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 130,  221 => 129,  216 => 128,  212 => 127,  110 => 28,  106 => 27,  96 => 21,  88 => 15,  84 => 14,  77 => 10,  73 => 9,  67 => 6,  62 => 5,  58 => 4,  51 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/home.html", "C:\\xampp\\htdocs\\views\\Main\\home.html");
    }
}
