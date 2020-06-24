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

/* question/show.html.twig */
class __TwigTemplate_73f6d88e94827dec184a3e8bee5ac66fa582af8b25759bac580d624edc7377d1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "question/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Question";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Question</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Code</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 16, $this->source); })()), "code", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Phrase</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 21, $this->source); })()), "phrase", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Layout</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 25, $this->source); })()), "layout", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Duplicable</th>
                <td>";
        // line 29
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 29, $this->source); })()), "duplicable", [], "any", false, false, false, 29)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a id=\"backtl\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_index");
        echo "\">back to list</a>

    <button class=\"btn btn-warning\"><a id=\"white\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
        echo "\">edit</a></button>


    ";
        // line 39
        echo twig_include($this->env, $context, "question/_delete_form.html.twig");
        echo "


    <hr>

    <h2>Liste des réponses</h2>
<table class=\"table table-striped \">
    <thead class=\"thead-dark\">
        <th>Code</th>
        <th>Phrase</th>
        <th>Trigger</th>
        <th>Value</th>
    </thead>
    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 52, $this->source); })()), "responses", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
            // line 53
            echo "    <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["response"], "code", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
    <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["responsesTranslationsFr"]) || array_key_exists("responsesTranslationsFr", $context) ? $context["responsesTranslationsFr"] : (function () { throw new RuntimeError('Variable "responsesTranslationsFr" does not exist.', 54, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["response"], "code", [], "any", false, false, false, 54), [], "array", false, false, false, 54), "html", null, true);
            echo " </td>
    <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["response"], "trig", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
    <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["response"], "value", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
        
        
        
        
        
        <br> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "</table>
    

    <hr>
    
    <h2>Créer une réponse</h2>
    ";
        // line 71
        echo "

    ";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["translationForm"]) || array_key_exists("translationForm", $context) ? $context["translationForm"] : (function () { throw new RuntimeError('Variable "translationForm" does not exist.', 73, $this->source); })()), 'form_start');
        echo "

        ";
        // line 75
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["responseForm"]) || array_key_exists("responseForm", $context) ? $context["responseForm"] : (function () { throw new RuntimeError('Variable "responseForm" does not exist.', 75, $this->source); })()), 'form_start');
        echo "
        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["responseForm"]) || array_key_exists("responseForm", $context) ? $context["responseForm"] : (function () { throw new RuntimeError('Variable "responseForm" does not exist.', 76, $this->source); })()), 'widget');
        echo "


        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["translationForm"]) || array_key_exists("translationForm", $context) ? $context["translationForm"] : (function () { throw new RuntimeError('Variable "translationForm" does not exist.', 79, $this->source); })()), 'widget');
        echo "
        <button class=\"btn btn-success\">";
        // line 80
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 80, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
    ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["translationForm"]) || array_key_exists("translationForm", $context) ? $context["translationForm"] : (function () { throw new RuntimeError('Variable "translationForm" does not exist.', 81, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "question/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 81,  222 => 80,  218 => 79,  212 => 76,  208 => 75,  203 => 73,  199 => 71,  191 => 64,  177 => 56,  173 => 55,  169 => 54,  164 => 53,  160 => 52,  144 => 39,  138 => 36,  133 => 34,  125 => 29,  118 => 25,  111 => 21,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Question{% endblock %}

{% block body %}
    <h1>Question</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ question.id }}</td>
            </tr>
            <tr>
                <th>Code</th>
                <td>{{ question.code }}</td>
            </tr>

            <tr>
                <th>Phrase</th>
                <td>{{ translation.phrase }}</td>
            </tr>
            <tr>
                <th>Layout</th>
                <td>{{ question.layout }}</td>
            </tr>
            <tr>
                <th>Duplicable</th>
                <td>{{ question.duplicable ? 'Yes' : 'No' }}</td>
            </tr>
        </tbody>
    </table>

    <a id=\"backtl\" href=\"{{ path('question_index') }}\">back to list</a>

    <button class=\"btn btn-warning\"><a id=\"white\" href=\"{{ path('question_edit', {'id': question.id}) }}\">edit</a></button>


    {{ include('question/_delete_form.html.twig') }}


    <hr>

    <h2>Liste des réponses</h2>
<table class=\"table table-striped \">
    <thead class=\"thead-dark\">
        <th>Code</th>
        <th>Phrase</th>
        <th>Trigger</th>
        <th>Value</th>
    </thead>
    {% for response in question.responses %}
    <td>{{response.code }}</td>
    <td>{{ responsesTranslationsFr[response.code] }} </td>
    <td>{{ response.trig }}</td>
    <td>{{ response.value }}</td>
        
        
        
        
        
        <br> 
    {% endfor %}
</table>
    

    <hr>
    
    <h2>Créer une réponse</h2>
    {# Form Answer #}


    {{ form_start(translationForm) }}

        {{ form_start(responseForm) }}
        {{ form_widget(responseForm) }}


        {{ form_widget(translationForm) }}
        <button class=\"btn btn-success\">{{ button_label|default('Save') }}</button>
    {{ form_end(translationForm) }}
{% endblock %}
", "question/show.html.twig", "/Users/Adrien/Marti/templates/question/show.html.twig");
    }
}
