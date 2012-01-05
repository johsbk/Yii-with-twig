<?php

/* \views\site\index.html */
class __TwigTemplate_6397e22e9645079a8128030390045e04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "\t";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_app_, "name"), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<h1>Welcome to <i>";
        // line 9
        if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_C_, "Html"), "encode", array($this->getAttribute($_app_, "name"), ), "method"), "html", null, true);
        echo "</i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>


<p>For more details on how to further develop this application, please read
the <a href=\"http://www.yiiframework.com/doc/\">documentation</a>.
Feel free to ask in the <a href=\"http://www.yiiframework.com/forum/\">forum</a>,
should you have any questions.</p>
";
    }

    public function getTemplateName()
    {
        return "\\views\\site\\index.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
