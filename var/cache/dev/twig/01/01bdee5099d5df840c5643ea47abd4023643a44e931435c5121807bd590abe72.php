<?php

/* Layouts/login.html.twig */
class __TwigTemplate_b7ae20ee1e42d3a46221aa0194ca7bf93597b28e82563439c89e6ff6865168c6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Layouts/main.html.twig", "Layouts/login.html.twig", 1);
        $this->blocks = array(
            'sources' => array($this, 'block_sources'),
            'main' => array($this, 'block_main'),
            'target' => array($this, 'block_target'),
            'form' => array($this, 'block_form'),
            'register' => array($this, 'block_register'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Layouts/main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Layouts/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Layouts/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_sources($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sources"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sources"));

        // line 4
        echo "    <title>Projekt Restauracja</title>
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        echo "\"/>
    <script type=\"text/javascript\" src=\"";
        // line 6
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

    // line 72
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 73
        echo "<header>
    <p class=\"tytul\">Projekt Restauracja</p>
</header>

<div>
    <form class=\"my_form c\" action=\"";
        // line 78
        $this->displayBlock('target', $context, $blocks);
        echo "\" method=\"post\">
        <span>";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["err"]) || array_key_exists("err", $context) ? $context["err"] : (function () { throw new Twig_Error_Runtime('Variable "err" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "</span>
        ";
        // line 80
        $this->displayBlock('form', $context, $blocks);
        // line 81
        echo "        <input class=\"yII\" type=\"submit\" value=\"Zaloguj\"><br/>
        <input class=\"yII\" type=\"button\" value=\"Powrót\" onclick=\"window.location.href='/';\">
    </form>
    ";
        // line 84
        $this->displayBlock('register', $context, $blocks);
        // line 85
        echo "    <div id=\"zeg\" class=\"zeg\"></div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
    public function block_target($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "target"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "target"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_form($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_register($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Layouts/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 84,  201 => 80,  184 => 78,  172 => 85,  170 => 84,  165 => 81,  163 => 80,  159 => 79,  155 => 78,  148 => 73,  139 => 72,  64 => 6,  60 => 5,  57 => 4,  48 => 3,  15 => 1,);
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
    <form class=\"my_form c\" action=\"{% block target %}{% endblock %}\" method=\"post\">
        <span>{{ err }}</span>
        {% block form %}{% endblock %}
        <input class=\"yII\" type=\"submit\" value=\"Zaloguj\"><br/>
        <input class=\"yII\" type=\"button\" value=\"Powrót\" onclick=\"window.location.href='/';\">
    </form>
    {% block register %}{% endblock %}
    <div id=\"zeg\" class=\"zeg\"></div>
</div>
{% endblock %}

", "Layouts/login.html.twig", "E:\\Programy\\XAMPP\\htdocs\\ZTW\\templates\\Layouts\\login.html.twig");
    }
}
