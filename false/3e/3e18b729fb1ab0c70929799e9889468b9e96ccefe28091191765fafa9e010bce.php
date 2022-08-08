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

/* _global/index.html */
class __TwigTemplate_e4ce6998e4e0107d8425e0af13c5781dfd2d20789195c0917f9d09fd1e4048a9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'embedded_js' => [$this, 'block_embedded_js'],
            'naslov' => [$this, 'block_naslov'],
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html>
    <head>
        <!-- Bootstrap -->
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/bootstrap/dist/css/bootstrap.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/bootstrap-icons/font/bootstrap-icons.css\">

        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/css/main.css\">
        ";
        // line 9
        $this->displayBlock('css', $context, $blocks);
        // line 11
        echo "
        <!-- Global script -->
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/jquery/dist/jquery.min.js\"></script>
        <script type=\"text/javascript\">
            ";
        // line 15
        $this->displayBlock('embedded_js', $context, $blocks);
        // line 16
        echo "        </script>

        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>UzmiKnjigu - ";
        // line 21
        $this->displayBlock('naslov', $context, $blocks);
        echo "</title>

    </head>
    <body>
        <header>
            ";
        // line 26
        $this->displayBlock('header', $context, $blocks);
        // line 28
        echo "        </header>
        <main>
            ";
        // line 30
        $this->displayBlock('main', $context, $blocks);
        // line 32
        echo "        </main>

        <footer class=\"bg-light text-center text-lg-start\">
            <!-- Copyright -->
            <div class=\"text-center p-3\">
                © 2022 Danijela & Stefan <br>
                Internet tehnologije i programiranje
            </div>
            <!-- Copyright -->
        </footer>

        <script>
            const BASE = '";
        // line 44
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "';
            let data_session = '";
        // line 45
        echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
        echo "';
        </script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/bootstrap/dist/js/bootstrap.bundle.js\"></script>
        ";
        // line 48
        $this->displayBlock('scripts', $context, $blocks);
        // line 49
        echo "    </body>
</html>
";
    }

    // line 9
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "        ";
    }

    // line 15
    public function block_embedded_js($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 21
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Pocetna";
    }

    // line 26
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "            ";
    }

    // line 30
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "            ";
    }

    // line 48
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "_global/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 48,  166 => 31,  162 => 30,  158 => 27,  154 => 26,  147 => 21,  141 => 15,  137 => 10,  133 => 9,  127 => 49,  125 => 48,  121 => 47,  116 => 45,  112 => 44,  98 => 32,  96 => 30,  92 => 28,  90 => 26,  82 => 21,  75 => 16,  73 => 15,  68 => 13,  64 => 11,  62 => 9,  58 => 8,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_global/index.html", "C:\\xampp\\htdocs\\views\\_global\\index.html");
    }
}
