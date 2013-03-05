<?php

/* BoardTestBundle::layout.html.twig */
class __TwigTemplate_5e53fa40d0ccafc505dc144c06327119 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link/>
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/boardtest/css/test.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"wrapper\">
            <div id=\"header\">
            </div>

            ";
        // line 14
        $this->displayBlock('content_header', $context, $blocks);
        // line 22
        echo "
            <div class=\"content\">
                ";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "            </div>      
        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Test Bundle";
    }

    // line 14
    public function block_content_header($context, array $blocks = array())
    {
        // line 15
        echo "                <ul id=\"menu\">
                    ";
        // line 16
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 18
        echo "                </ul>

                <div style=\"clear: both\"></div>
            ";
    }

    // line 16
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 17
        echo "                    ";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "                ";
    }

    public function getTemplateName()
    {
        return "BoardTestBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  88 => 24,  84 => 17,  81 => 16,  74 => 18,  72 => 16,  69 => 15,  66 => 14,  60 => 5,  52 => 26,  50 => 24,  46 => 22,  44 => 14,  34 => 7,  29 => 5,  23 => 1,);
    }
}
