<?php

/* gosc_logowanie.html.twig */
class __TwigTemplate_b1ecec0defb4a83732e7ddc84a63b4a19d3a2e087170b6450ae7eb0aa288f0e1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Layouts/login.html.twig", "gosc_logowanie.html.twig", 1);
        $this->blocks = array(
            'target' => array($this, 'block_target'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Layouts/login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gosc_logowanie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gosc_logowanie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_target($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "target"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "target"));

        // line 4
        echo "    /gosc_logowanie
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_form($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 8
        echo "    <div class=\"nf\">Imię:</div>
    <input class=\"yI\" type=\"text\" name=\"imie\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["imie"]) || array_key_exists("imie", $context) ? $context["imie"] : (function () { throw new Twig_Error_Runtime('Variable "imie" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\" autocomplete=\"off\" required><br/>

    <div class=\"nf\">Liczba osób:</div>
    <input class=\"yI\" type=\"number\" name=\"l_os\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["l_os"]) || array_key_exists("l_os", $context) ? $context["l_os"] : (function () { throw new Twig_Error_Runtime('Variable "l_os" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\" autocomplete=\"off\" required><br/>

    <div class=\"nf\">Kod stolika: </div>
    <input class=\"yI\" type=\"text\" name=\"k_stol\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["k_stol"]) || array_key_exists("k_stol", $context) ? $context["k_stol"] : (function () { throw new Twig_Error_Runtime('Variable "k_stol" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\" autocomplete=\"off\" required><br/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gosc_logowanie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 15,  83 => 12,  77 => 9,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Layouts/login.html.twig' %}

{% block target %}
    /gosc_logowanie
{% endblock %}

{% block form %}
    <div class=\"nf\">Imię:</div>
    <input class=\"yI\" type=\"text\" name=\"imie\" value=\"{{ imie }}\" autocomplete=\"off\" required><br/>

    <div class=\"nf\">Liczba osób:</div>
    <input class=\"yI\" type=\"number\" name=\"l_os\" value=\"{{ l_os }}\" autocomplete=\"off\" required><br/>

    <div class=\"nf\">Kod stolika: </div>
    <input class=\"yI\" type=\"text\" name=\"k_stol\" value=\"{{ k_stol }}\" autocomplete=\"off\" required><br/>
{% endblock %}

", "gosc_logowanie.html.twig", "D:\\xampp\\htdocs\\ProjektRestauracja\\templates\\gosc_logowanie.html.twig");
    }
}
