<?php

/* zamowienie.html.twig */
class __TwigTemplate_2ae09b3c8741c3e4826400098cae40a4a02d722d99c55474e043be0b7806d02b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Layouts/main.html.twig", "zamowienie.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "zamowienie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "zamowienie.html.twig"));

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

        .boix
        {
            padding: 2%;
            width: \t96%;
            height: 80%;
            display: -webkit-box;
            -webkit-box-orient: horizontal;
        }

        .pZam
        {    border: 3px solid steelblue;    }


        .pKat
        {
            border-top:    3px solid steelblue;
            border-right:  3px solid steelblue;
            border-bottom: 3px solid steelblue;
            height: 538px;
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
            margin-left: 90%;
            width: 8%;
            text-align: center;
            position: absolute;
            color: black;
            font-size: 20px;
        }

        .cBattonKat
        {
            margin:2%;
            width:20%;
            height:13%;
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

        .boix > .zam
        {
            width: 33%;
            overflow: hidden;
        }

        .pZam
        {    height: 538px;    }

        .boix >.kat
        {    width: 67%;    }

        .pKat
        {    height: 538px;    }

        #pZaP
        {
            margin-top: 200px;
            font-size: 24px;
            font-weight: bold;
        }

    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 155
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 156
        echo "    <div class=\"boix\">
        <div class=\"zam\">
            <button id=\"sub1\" class=\"cBattonNavZam\" onclick=\"zamPods()\" disabled>Zamówienie</button>
            <button class=\"cBattonNavKat\"  onclick=\"kafelki(kategorie())\">Kategorie</button>
            <div class=\"pZam\">
                <div id=\"pZaP\" class=\"c\">Witaj ";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["imie"]) || array_key_exists("imie", $context) ? $context["imie"] : (function () { throw new Twig_Error_Runtime('Variable "imie" does not exist.', 161, $this->source); })()), "html", null, true);
        echo "!<br>Tutaj będą się pojawiały<br>Twoje zamówienia.</div>
                <div id=\"pZaA\"></div>
                <div id=\"pZam\"></div>
            </div>
        </div>

        <div class=\"kat\">
            <div id=\"nKat\" class=\"nav\"></div>
            <div id=\"pKat\" class=\"pKat\">
                ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kategorie"]) || array_key_exists("kategorie", $context) ? $context["kategorie"] : (function () { throw new Twig_Error_Runtime('Variable "kategorie" does not exist.', 170, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["kategoria"]) {
            // line 171
            echo "                    <button class=\"cBattonKat\", onclick=\"otwKat('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["kategoria"], "IdKategorii", array()), "html", null, true);
            echo "')\", style=\"background-color: #";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["kategoria"], "KolorKategorii", array()), "html", null, true);
            echo ";\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["kategoria"], "NazwaKategorii", array()), "html", null, true);
            echo "</button>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kategoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "            </div>
        </div>
    </div>

    <div>
        <div id=\"zeg\" class=\"zeg\"></div>
        <button id=\"sub2\" class=\"f1Batton\" onclick=\"zamPods()\" disabled>Podsumowanie</button>
        <button id=\"zamStart\" class=\"f2Batton\" onclick=\"zamStart()\">Anuluj zamówienie</button>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "zamowienie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 173,  251 => 171,  247 => 170,  235 => 161,  228 => 156,  219 => 155,  61 => 6,  57 => 5,  54 => 4,  45 => 3,  15 => 1,);
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

        .boix
        {
            padding: 2%;
            width: \t96%;
            height: 80%;
            display: -webkit-box;
            -webkit-box-orient: horizontal;
        }

        .pZam
        {    border: 3px solid steelblue;    }


        .pKat
        {
            border-top:    3px solid steelblue;
            border-right:  3px solid steelblue;
            border-bottom: 3px solid steelblue;
            height: 538px;
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
            margin-left: 90%;
            width: 8%;
            text-align: center;
            position: absolute;
            color: black;
            font-size: 20px;
        }

        .cBattonKat
        {
            margin:2%;
            width:20%;
            height:13%;
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

        .boix > .zam
        {
            width: 33%;
            overflow: hidden;
        }

        .pZam
        {    height: 538px;    }

        .boix >.kat
        {    width: 67%;    }

        .pKat
        {    height: 538px;    }

        #pZaP
        {
            margin-top: 200px;
            font-size: 24px;
            font-weight: bold;
        }

    </style>
{% endblock %}

{% block main %}
    <div class=\"boix\">
        <div class=\"zam\">
            <button id=\"sub1\" class=\"cBattonNavZam\" onclick=\"zamPods()\" disabled>Zamówienie</button>
            <button class=\"cBattonNavKat\"  onclick=\"kafelki(kategorie())\">Kategorie</button>
            <div class=\"pZam\">
                <div id=\"pZaP\" class=\"c\">Witaj {{ imie }}!<br>Tutaj będą się pojawiały<br>Twoje zamówienia.</div>
                <div id=\"pZaA\"></div>
                <div id=\"pZam\"></div>
            </div>
        </div>

        <div class=\"kat\">
            <div id=\"nKat\" class=\"nav\"></div>
            <div id=\"pKat\" class=\"pKat\">
                {% for kategoria in kategorie %}
                    <button class=\"cBattonKat\", onclick=\"otwKat('{{ kategoria.IdKategorii }}')\", style=\"background-color: #{{ kategoria.KolorKategorii }};\">{{ kategoria.NazwaKategorii }}</button>
                {% endfor %}
            </div>
        </div>
    </div>

    <div>
        <div id=\"zeg\" class=\"zeg\"></div>
        <button id=\"sub2\" class=\"f1Batton\" onclick=\"zamPods()\" disabled>Podsumowanie</button>
        <button id=\"zamStart\" class=\"f2Batton\" onclick=\"zamStart()\">Anuluj zamówienie</button>
    </div>
{% endblock %}

", "zamowienie.html.twig", "D:\\xampp\\htdocs\\ProjektRestauracja\\templates\\zamowienie.html.twig");
    }
}
