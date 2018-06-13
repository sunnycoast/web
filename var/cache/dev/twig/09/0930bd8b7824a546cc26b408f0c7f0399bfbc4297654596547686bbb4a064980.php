<?php

/* produkty_kategorii.html.twig */
class __TwigTemplate_af86845f9df638180aca8c1286321b9415a1d348df9d1a917b9306cef7149325 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("MVC/View/Layouts/main.html.twig", "produkty_kategorii.html.twig", 1);
        $this->blocks = array(
            'sources' => array($this, 'block_sources'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MVC/View/Layouts/main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produkty_kategorii.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produkty_kategorii.html.twig"));

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
        // function mouseOver(text) {
        //     document.getElementById(\"produkt\").style.color= \"red\";
        // }
        //
        // function mouseOut() {
        //     document.getElementById(\"produkt\").style.color= \"black\";
        // }
    </script>
    <style>


        .boix
        {
            padding: 2%;
            width: \t96%;
            height: 100%;
            display: -webkit-box;
            -webkit-box-orient: horizontal;
        }

        .pZam
        {    border: 3px solid steelblue;    }


        .pKat
        {
            border: 3px solid steelblue;
            height: 600px;
        }

        .cBattonNavKat
        {
            position: relative;
            background-color: steelblue;
            color: black;
            padding: 16px;
            font-size: 16px;
            width: 49.5%;
            height: 10%;
            cursor: pointer;
            border-top-right-radius: 50px;
            border-top-left-radius:  10px;
        }

        .cBattonNavZam
        {
            position: relative;
            background-color: gray;
            color: black;
            padding: 16px;
            font-size: 16px;
            width: 49.5%;
            height: 10%;
            cursor: pointer;
            border-top-right-radius: 50px;
            border-top-left-radius:  10px;
        }

        .f1Batton
        {
            margin-left: 2%;
            width: 42%;
            position: relative;
            background-color: gray;
            color: black;
            padding: 16px;
            font-size: 24px;
            height: 50px;
            cursor: pointer;
            border-radius: 10px;
            border-style: none;
            box-shadow: 4px 4px #666666;
        }

        .f2Batton
        {
            top: -50px;
            margin-left: 46%;
            width: 42%;
            position: relative;
            background-color: red;
            color: black;
            padding: 16px;
            font-size: 16px;
            height: 50px;
            cursor: pointer;
            border-radius: 10px;
            border-style: none;
            box-shadow: 4px 4px #666666;
        }

        .nav
        {
            position: relative;
            overflow: hidden;
            height: 54px;
        }

        .zeg
        {
            width: 8%;
            text-align: center;
            color: black;
            font-size: 20px;
        }

        .cBattonKat
        {
            margin:2%;
            width:20%;
            height:12%;
            border-radius: 5px;
            cursor: pointer;
            border-style: none;
            box-shadow: 4px 4px #666666;
        }

        .c
        {    text-align: center;    }

        .cKategoria:hover .cDivOp
        {
            visibility: visible;
        }


        .pZam
        {    height: 538px;    }


        .pKat
        {    height: 600px;    }

        #pZaP
        {
            margin-top: 200px;
            font-size: 24px;
            font-weight: bold;
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

        .my_form
        {
            min-height:90px;
        }

    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 170
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 171
        echo "
    <header>
        <p class=\"tytul\">Projekt Restauracja</p>
    </header>

    <div class=\"boix\">

        <div class=\"kat\">
            <button class=\"cBattonNavKat\"  >";
        // line 179
        echo twig_escape_filter($this->env, (isset($context["nazKat"]) || array_key_exists("nazKat", $context) ? $context["nazKat"] : (function () { throw new Twig_Error_Runtime('Variable "nazKat" does not exist.', 179, $this->source); })()), "html", null, true);
        echo "</button>
            <div id=\"nKat\" class=\"nav\"></div>
            <form id=\"pKat\" class=\"pKat\">
                ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produkty"]) || array_key_exists("produkty", $context) ? $context["produkty"] : (function () { throw new Twig_Error_Runtime('Variable "produkty" does not exist.', 182, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produkt"]) {
            // line 183
            echo "                    <button class=\"cBattonKat\" id=\"produkt\" onmouseover=\"mouseOver(produkt.Opis )\" onmouseout=\"mouseOut()\"  >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produkt"], "NazwaProduktu", array()), "html", null, true);
            echo "</button>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produkt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "            </form>
        </div>
    </div>

    <form class=\"my_form c\">
        <input class=\"yII\" type=\"button\" value=\"Powrót\" onclick=\"window.location.href='/menu';\">
    </form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produkty_kategorii.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 185,  263 => 183,  259 => 182,  253 => 179,  243 => 171,  234 => 170,  61 => 6,  57 => 5,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MVC/View/Layouts/main.html.twig' %}

{% block sources %}
    <title>Projekt Restauracja</title>
    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\"/>
    <script type=\"text/javascript\" src=\"{{ asset('js/zegar.js') }}\"></script>
    <script>
        window.onload=zegar;
        // function mouseOver(text) {
        //     document.getElementById(\"produkt\").style.color= \"red\";
        // }
        //
        // function mouseOut() {
        //     document.getElementById(\"produkt\").style.color= \"black\";
        // }
    </script>
    <style>


        .boix
        {
            padding: 2%;
            width: \t96%;
            height: 100%;
            display: -webkit-box;
            -webkit-box-orient: horizontal;
        }

        .pZam
        {    border: 3px solid steelblue;    }


        .pKat
        {
            border: 3px solid steelblue;
            height: 600px;
        }

        .cBattonNavKat
        {
            position: relative;
            background-color: steelblue;
            color: black;
            padding: 16px;
            font-size: 16px;
            width: 49.5%;
            height: 10%;
            cursor: pointer;
            border-top-right-radius: 50px;
            border-top-left-radius:  10px;
        }

        .cBattonNavZam
        {
            position: relative;
            background-color: gray;
            color: black;
            padding: 16px;
            font-size: 16px;
            width: 49.5%;
            height: 10%;
            cursor: pointer;
            border-top-right-radius: 50px;
            border-top-left-radius:  10px;
        }

        .f1Batton
        {
            margin-left: 2%;
            width: 42%;
            position: relative;
            background-color: gray;
            color: black;
            padding: 16px;
            font-size: 24px;
            height: 50px;
            cursor: pointer;
            border-radius: 10px;
            border-style: none;
            box-shadow: 4px 4px #666666;
        }

        .f2Batton
        {
            top: -50px;
            margin-left: 46%;
            width: 42%;
            position: relative;
            background-color: red;
            color: black;
            padding: 16px;
            font-size: 16px;
            height: 50px;
            cursor: pointer;
            border-radius: 10px;
            border-style: none;
            box-shadow: 4px 4px #666666;
        }

        .nav
        {
            position: relative;
            overflow: hidden;
            height: 54px;
        }

        .zeg
        {
            width: 8%;
            text-align: center;
            color: black;
            font-size: 20px;
        }

        .cBattonKat
        {
            margin:2%;
            width:20%;
            height:12%;
            border-radius: 5px;
            cursor: pointer;
            border-style: none;
            box-shadow: 4px 4px #666666;
        }

        .c
        {    text-align: center;    }

        .cKategoria:hover .cDivOp
        {
            visibility: visible;
        }


        .pZam
        {    height: 538px;    }


        .pKat
        {    height: 600px;    }

        #pZaP
        {
            margin-top: 200px;
            font-size: 24px;
            font-weight: bold;
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

        .my_form
        {
            min-height:90px;
        }

    </style>
{% endblock %}

{% block main %}

    <header>
        <p class=\"tytul\">Projekt Restauracja</p>
    </header>

    <div class=\"boix\">

        <div class=\"kat\">
            <button class=\"cBattonNavKat\"  >{{ nazKat }}</button>
            <div id=\"nKat\" class=\"nav\"></div>
            <form id=\"pKat\" class=\"pKat\">
                {% for produkt in produkty %}
                    <button class=\"cBattonKat\" id=\"produkt\" onmouseover=\"mouseOver(produkt.Opis )\" onmouseout=\"mouseOut()\"  >{{ produkt.NazwaProduktu }}</button>
                {% endfor %}
            </form>
        </div>
    </div>

    <form class=\"my_form c\">
        <input class=\"yII\" type=\"button\" value=\"Powrót\" onclick=\"window.location.href='/menu';\">
    </form>

{% endblock %}

", "produkty_kategorii.html.twig", "D:\\xampp\\htdocs\\ProjektRestauracja\\templates\\produkty_kategorii.html.twig");
    }
}
