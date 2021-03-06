<?php

/* macros/bootstrap.twig */
class __TwigTemplate_fb5ba28cd0b857385a5e00fba632cb30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        echo "
";
        // line 19
        echo "
";
    }

    // line 2
    public function getalert($_message = null, $_type = null, $_style = null)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $_message,
            "type" => $_type,
            "style" => $_style,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "\t";
            if (((isset($context["message"]) ? $context["message"] : null) != "")) {
                // line 4
                echo "\t\t<div class=\"alert alert-";
                echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "success")) : ("success")), "html", null, true);
                echo " alert-block\">
\t\t\t<a class=\"close\" data-dismiss=\"alert\">×</a>
\t\t\t<span style=\"";
                // line 6
                echo twig_escape_filter($this->env, ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : null), "font-weight: bold;")) : ("font-weight: bold;")), "html", null, true);
                echo "\">
\t\t\t";
                // line 7
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                echo "
\t\t\t</span>
\t\t</div>
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 13
    public function getlabel($_message = null, $_type = null)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $_message,
            "type" => $_type,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 14
            echo "\t";
            if (((isset($context["message"]) ? $context["message"] : null) == "")) {
                // line 15
                echo "\t";
            } else {
                // line 16
                echo "\t<span class=\"label label-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                echo "</span>
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 20
    public function getbtn($_message = null, $_type = null, $_attributes = null, $_element = null, $_size = null)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $_message,
            "type" => $_type,
            "attributes" => $_attributes,
            "element" => $_element,
            "size" => $_size,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 21
            echo "\t<";
            echo twig_escape_filter($this->env, (isset($context["element"]) ? $context["element"] : null), "html", null, true);
            echo " class=\"btn btn-";
            echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : null), "html", null, true);
            echo " btn-";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ((array_key_exists("attributes", $context)) ? (_twig_default_filter((isset($context["attributes"]) ? $context["attributes"] : null), "")) : ("")), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, (isset($context["element"]) ? $context["element"] : null), "html", null, true);
            echo ">
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros/bootstrap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 21,  104 => 20,  87 => 16,  84 => 15,  81 => 14,  69 => 13,  53 => 7,  43 => 4,  40 => 3,  27 => 2,  22 => 19,  47 => 12,  45 => 11,  39 => 9,  23 => 3,  19 => 12,  63 => 15,  57 => 14,  49 => 6,  37 => 8,  33 => 4,  29 => 5,  26 => 2,  20 => 1,  252 => 127,  249 => 126,  206 => 71,  203 => 70,  195 => 62,  192 => 61,  188 => 52,  182 => 50,  180 => 49,  172 => 45,  169 => 44,  153 => 15,  150 => 14,  143 => 129,  140 => 126,  124 => 111,  121 => 70,  118 => 69,  115 => 68,  113 => 67,  109 => 65,  106 => 61,  97 => 53,  95 => 44,  75 => 17,  73 => 14,  70 => 13,  54 => 1,  21 => 2,  14 => 12,  98 => 47,  89 => 44,  83 => 43,  80 => 42,  76 => 41,  61 => 6,  44 => 15,  31 => 6,  28 => 125,);
    }
}
