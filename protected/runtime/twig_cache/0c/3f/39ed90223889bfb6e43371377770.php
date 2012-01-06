<?php

/* /views/site/about.twig */
class __TwigTemplate_0c3f39ed90223889bfb6e43371377770 extends Twig_Template
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
        $context["bcs"] = array(0 => "About");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo $this->getAttribute($_App_, "name");
        echo " - About";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<h1>About</h1>

<p>This is a \"static\" page. You may change the content of this page
by updating the file <tt><?php echo __FILE__; ?></tt>.</p>
";
    }

    public function getTemplateName()
    {
        return "/views/site/about.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
