<?php

/* staly_klient_zaloz_konto.html.twig */
class __TwigTemplate_725fcbf57ca8ae0280fbea0858aa5bbc4a6c7158f01e4d477a5194131f5b1419 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Layouts/main.html.twig", "staly_klient_zaloz_konto.html.twig", 1);
        $this->blocks = array(
            'sources' => array($this, 'block_sources'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Layouts/main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "staly_klient_zaloz_konto.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "staly_klient_zaloz_konto.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_sources($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sources"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sources"));

        // line 5
        echo "    <title>Projekt Restauracja</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        echo "\"/>
    <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/zegar.js"), "html", null, true);
        echo "\"></script>
    <script>
        window.onload=zegar;
    </script>
    <style>
        .nf
        {
            text-align: right;
            font-size: 20px;
            width: 60px;
            position: relative;
            display: inline-block;
        }

        span
        {
            margin-left: 45%;
            margin-top: 5px;
            text-align: center;
            display: block;
            width: 200px;
            font-size: 18px;
            max-width: 400px;
            color: #AA0000;
        }

        span:empty
        {
            visibility: hidden;
            min-height: 0px;
        }

        .my_form
        {
            min-height: 300px;
        }

        .zeg
        {
            margin-top: 30px;
            margin-bottom: 53px;
            z-index: 1;
            margin-left: 45%;
            width: 10%;
            display: block;
            text-align: center;
            position: relative;
            color: black;
            font-size: 20px;
        }

        .yII
        {
            font-size: 20px;
            padding: 7px;
            padding-right: 15px;
            padding-left: 15px;
            border-radius: 20px;
            background-color: red;
            margin-top: 20px;
            border-style: none;
            box-shadow: 3px 3px #AA000088;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 74
        echo "    <header>
        <p class=\"tytul\">Projekt Restauracja</p>
    </header>

    <div>
        <form class=\"my_form c\" action=\"/staly_klient_zaloz_konto\" method=\"post\">
            <span>";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["err"]) || array_key_exists("err", $context) ? $context["err"] : (function () { throw new Twig_Error_Runtime('Variable "err" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "</span>
            <div class=\"nf\">e-mail:</div>
            <input class=\"yI\" type=\"email\" name=\"email\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new Twig_Error_Runtime('Variable "email" does not exist.', 82, $this->source); })()), "html", null, true);
        echo "\" maxlength=\"30\" autocomplete=\"off\" required><br/>
            <div class=\"nf\">imię:</div>
            <input class=\"yI\" type=\"text\" name=\"imie\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["imie"]) || array_key_exists("imie", $context) ? $context["imie"] : (function () { throw new Twig_Error_Runtime('Variable "imie" does not exist.', 84, $this->source); })()), "html", null, true);
        echo "\" maxlength=\"32\" autocomplete=\"off\" required><br/>
            <div class=\"nf\">nazwisko:</div>
            <input class=\"yI\" type=\"text\" name=\"nazwisko\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["nazwisko"]) || array_key_exists("nazwisko", $context) ? $context["nazwisko"] : (function () { throw new Twig_Error_Runtime('Variable "nazwisko" does not exist.', 86, $this->source); })()), "html", null, true);
        echo "\" maxlength=\"32\" autocomplete=\"off\" required><br/>
            <div class=\"nf\">hasło:</div>
            <input class=\"yI\" type=\"password\" name=\"haslo\" value=\"\" autocomplete=\"off\" minlength=\"8\" required><br/>
            <input class=\"yII\" type=\"submit\" value=\"Stwórz konto\"><br/>
            <input class=\"yII\" type=\"button\" value=\"Powrót\" onclick=\"window.location.href='/staly_klient_logowanie';\">
            ;
        </form>
        <div id=\"zeg\" class=\"zeg\"></div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "staly_klient_zaloz_konto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 86,  163 => 84,  158 => 82,  153 => 80,  145 => 74,  136 => 73,  61 => 7,  57 => 6,  54 => 5,  45 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Layouts/main.html.twig' %}


{% block sources %}
    <title>Projekt Restauracja</title>
    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\"/>
    <script type=\"text/javascript\" src=\"{{ asset('js/zegar.js') }}\"></script>
    <script>
        window.onload=zegar;
    </script>
    <style>
        .nf
        {
            text-align: right;
            font-size: 20px;
            width: 60px;
            position: relative;
            display: inline-block;
        }

        span
        {
            margin-left: 45%;
            margin-top: 5px;
            text-align: center;
            display: block;
            width: 200px;
            font-size: 18px;
            max-width: 400px;
            color: #AA0000;
        }

        span:empty
        {
            visibility: hidden;
            min-height: 0px;
        }

        .my_form
        {
            min-height: 300px;
        }

        .zeg
        {
            margin-top: 30px;
            margin-bottom: 53px;
            z-index: 1;
            margin-left: 45%;
            width: 10%;
            display: block;
            text-align: center;
            position: relative;
            color: black;
            font-size: 20px;
        }

        .yII
        {
            font-size: 20px;
            padding: 7px;
            padding-right: 15px;
            padding-left: 15px;
            border-radius: 20px;
            background-color: red;
            margin-top: 20px;
            border-style: none;
            box-shadow: 3px 3px #AA000088;
        }
    </style>
{% endblock %}

{% block main %}
    <header>
        <p class=\"tytul\">Projekt Restauracja</p>
    </header>

    <div>
        <form class=\"my_form c\" action=\"/staly_klient_zaloz_konto\" method=\"post\">
            <span>{{ err }}</span>
            <div class=\"nf\">e-mail:</div>
            <input class=\"yI\" type=\"email\" name=\"email\" value=\"{{ email }}\" maxlength=\"30\" autocomplete=\"off\" required><br/>
            <div class=\"nf\">imię:</div>
            <input class=\"yI\" type=\"text\" name=\"imie\" value=\"{{ imie }}\" maxlength=\"32\" autocomplete=\"off\" required><br/>
            <div class=\"nf\">nazwisko:</div>
            <input class=\"yI\" type=\"text\" name=\"nazwisko\" value=\"{{ nazwisko }}\" maxlength=\"32\" autocomplete=\"off\" required><br/>
            <div class=\"nf\">hasło:</div>
            <input class=\"yI\" type=\"password\" name=\"haslo\" value=\"\" autocomplete=\"off\" minlength=\"8\" required><br/>
            <input class=\"yII\" type=\"submit\" value=\"Stwórz konto\"><br/>
            <input class=\"yII\" type=\"button\" value=\"Powrót\" onclick=\"window.location.href='/staly_klient_logowanie';\">
            ;
        </form>
        <div id=\"zeg\" class=\"zeg\"></div>
    </div>
{% endblock %}
", "staly_klient_zaloz_konto.html.twig", "D:\\xampp\\htdocs\\ProjektRestauracja\\templates\\staly_klient_zaloz_konto.html.twig");
    }
}
