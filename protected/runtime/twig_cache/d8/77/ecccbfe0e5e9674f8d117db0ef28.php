<?php

/* /views/site/error.twig */
class __TwigTemplate_d877ecccbfe0e5e9674f8d117db0ef28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "views/layouts/main.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["bcs"] = array(0 => "Error");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->getAttribute($_app_, "name");
        echo " - Error";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<h2>Error ";
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "code");
        echo "</h2>

<div class=\"error\">
";
        // line 8
        if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_C_, "Html"), "encode", array($this->getAttribute($_this_, "message"), ), "method");
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/views/site/error.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
