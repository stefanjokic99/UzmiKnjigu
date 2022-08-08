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

/* Main/getRegister.html */
class __TwigTemplate_5e835232a3bafebbe23776adb7891ceac821894810d7313e59250c08bdc08130 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'naslov' => [$this, 'block_naslov'],
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
            'scripts' => [$this, 'block_scripts'],
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
        $this->parent = $this->loadTemplate("_global/index.html", "Main/getRegister.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Register";
    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div>
    <p class=\"reg-text\">Nemate nalog? <a href=\"signUp.html\">Registrujte se</a> </p>
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/img/pocetniLogo0.png\" class=\"img-fluid img-logo\"></img>
</div>
";
    }

    // line 9
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<p class=\"title\" >Kreirajte nalog</p>

<div class=\"container\">
    <div class=\"row\">
        <form action=\"/action.php\" method=\"post\" class=\"sign-up-form col-md-5 col-sm-12 col-xs-12\">
            <div class=\"form-row\">
                <div class=\"col-md-6\">
                    <div class=\"form-floating form-group\">
                        <input type=\"text\" class=\"form-control\" id=\"forename\" placeholder=\"Ime\" required>
                        <label class=\"input-label\" for=\"forename\">Ime</label>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"form-floating form-group\">
                        <input type=\"text\" class=\"form-control\" id=\"surname\" placeholder=\"Prezime\" required>
                        <label class=\"input-label\" for=\"surename\">Prezime</label>
                    </div>
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"col-md-12\">
                    <div class=\"form-floating form-group\">
                        <input type=\"text\" class=\"form-control\" id=\"email\" placeholder=\"E-mail\" required>
                        <label class=\"input-label\" for=\"email\">E-mail</label>
                    </div>
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"col-10\">
                    <div class=\"form-floating form-group\">
                        <input type=\"password\" class=\"form-control pr-password\" id=\"password\" placeholder=\"Lozinka\" required>
                        <label class=\"input-label\" for=\"password\">Lozinka</label>
                    </div>
                </div>
                <div class=\"col-2 bi bi-eye-slash\" id=\"togglePassword\"></div>
            </div>
            <div class=\"password-uncheck\">
                Lozinka mora imati minimalno 8, maksimalno 32 karaktera.<br />
                Od toga minimalno jedno veliko slovo[A-Z], jedno malo slovo[a-z], jedan znak i jednu cifru[0-9].
            </div>

            <div class=\"form-row\">
                <div class=\"col-12\">
                    <button type=\"submit\" class=\"btn btn-lg btn-signup\" id=\"sign-up\">Registrujte se</button>
                </div>
            </div>
        </form>

        <div class=\"col-md-2 col-sm-12 col-xs-12 line-box\">
            <span class=\"v-line\"></span>
        </div>

        <div class=\"social-media col-md-5 col-sm-12 col-xs-12\" >
            <!--Google login button-->
            <div class=\"auth-provider google-login\">
                <svg aria-hidden=\"true\" class=\"svg-icon\" width=\"25\" height=\"25\" viewBox=\"0 0 18 18\">
                    <g>
                        <path d=\"M16.51 8H8.98v3h4.3c-.18 1-.74 1.48-1.6 2.04v2.01h2.6a7.8 7.8 0 0 0 2.38-5.88c0-.57-.05-.66-.15-1.18z\" fill=\"#4285F4\"></path>
                        <path d=\"M8.98 17c2.16 0 3.97-.72 5.3-1.94l-2.6-2a4.8 4.8 0 0 1-7.18-2.54H1.83v2.07A8 8 0 0 0 8.98 17z\" fill=\"#34A853\"></path>
                        <path d=\"M4.5 10.52a4.8 4.8 0 0 1 0-3.04V5.41H1.83a8 8 0 0 0 0 7.18l2.67-2.07z\" fill=\"#FBBC05\"></path>
                        <path d=\"M8.98 4.18c1.17 0 2.23.4 3.06 1.2l2.3-2.3A8 8 0 0 0 1.83 5.4L4.5 7.49a4.77 4.77 0 0 1 4.48-3.3z\" fill=\"#EA4335\"></path>
                    </g>
                </svg>
                Registujte se pomoću Google
            </div>
            <!--Facebook login button-->
            <div class=\"auth-provider facebook-login\">
                <svg aria-hidden=\"true\" class=\"svg-icon\" width=\"25\" height=\"25\" viewBox=\"0 0 18 18\">
                    <path d=\"M1.88 1C1.4 1 1 1.4 1 1.88v14.24c0 .48.4.88.88.88h7.67v-6.2H7.46V8.4h2.09V6.61c0-2.07 1.26-3.2 3.1-3.2.88 0 1.64.07 1.87.1v2.16h-1.29c-1 0-1.19.48-1.19 1.18V8.4h2.39l-.31 2.42h-2.08V17h4.08c.48 0 .88-.4.88-.88V1.88c0-.48-.4-.88-.88-.88H1.88z\" fill=\"#fff\"></path>
                </svg>
                Registujte se pomoću Facebook
            </div>
        </div>
    </div>
</div>
";
    }

    // line 87
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/js/responsiveFormHelper.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/js/togglePassword.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "Main/getRegister.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 89,  159 => 88,  155 => 87,  75 => 10,  71 => 9,  64 => 6,  60 => 4,  56 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/getRegister.html", "C:\\xampp\\htdocs\\views\\Main\\getRegister.html");
    }
}
