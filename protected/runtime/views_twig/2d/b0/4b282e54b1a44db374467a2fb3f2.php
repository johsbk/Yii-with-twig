<?php

/* \views\site\about.html */
class __TwigTemplate_2db04b282e54b1a44db374467a2fb3f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "views/layouts/main.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_app_, "name"), "html", null, true);
        echo " - About";
    }

    // line 3
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 4
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array("zii.widgets.CBreadcrumbs", array("links" => array(0 => "About")), true, ), "method");
        // line 6
        echo "
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<h1>About</h1>

<p>This is a \"static\" page. You may change the content of this page
by updating the file .</p>
";
    }

    public function getTemplateName()
    {
        return "\\views\\site\\about.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
