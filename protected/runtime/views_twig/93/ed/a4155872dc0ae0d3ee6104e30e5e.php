<?php

/* views/layouts/main.html */
class __TwigTemplate_93eda4155872dc0ae0d3ee6104e30e5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\">
<head>
";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 20
        echo "</head>
<body>
<div class=\"container\" id=\"page\">

\t<div id=\"header\">
\t\t<div id=\"logo\">";
        // line 25
        if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_C_, "Html"), "encode", array($this->getAttribute($_app_, "name"), ), "method"), "html", null, true);
        echo "</div>
\t</div><!-- header -->

\t<div id=\"mainmenu\">
\t\t";
        // line 29
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->getAttribute($_this_, "widget", array("zii.widgets.CMenu", array("items" => array(0 => array("label" => "Home", "url" => array(0 => "/site/index")), 1 => array("label" => "About", "url" => array("0" => "/site/page", "view" => "about")), 2 => array("label" => "Contact", "url" => array(0 => "/site/contact")), 3 => array("label" => "Login", "url" => array(0 => "/site/login"), "visible" => $this->getAttribute($this->getAttribute($_app_, "user"), "isGuest")), 4 => array("label" => (("Logout (" . $this->getAttribute($this->getAttribute($_app_, "user"), "name")) . ")"), "url" => array(0 => "/site/logout"), "visible" => (!$this->getAttribute($this->getAttribute($_app_, "user"), "isGuest"))))), true, ), "method");
        // line 37
        echo "
\t</div><!-- mainmenu -->
\t";
        // line 39
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 46
        echo "\t<div id=\"content\">
\t";
        // line 47
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "\t</div>

\t<div class=\"clear\"></div>

\t<div id=\"footer\">
\t\tCopyright &copy; ";
        // line 55
        if (isset($context["now"])) { $_now_ = $context["now"]; } else { $_now_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $_now_, "Y"), "html", null, true);
        echo " by My Company.<br/>
\t\tAll Rights Reserved.<br/>
\t\t<?php echo Yii::powered(); ?>
\t</div><!-- footer -->

</div><!-- page -->

</body>
</html>
";
    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_C_, "Html"), "encode", array($this->getAttribute($_this_, "pageTitle"), ), "method"), "html", null, true);
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t<meta name=\"language\" content=\"en\" />

\t<!-- blueprint CSS framework -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "baseUrl"), "html", null, true);
        echo "/css/screen.css\" media=\"screen, projection\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "baseUrl"), "html", null, true);
        echo "/css/print.css\" media=\"print\" />
\t<!--[if lt IE 8]>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "baseUrl"), "html", null, true);
        echo "/css/ie.css\" media=\"screen, projection\" />
\t<![endif]-->

\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "baseUrl"), "html", null, true);
        echo "/css/main.css\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "baseUrl"), "html", null, true);
        echo "/css/form.css\" />

\t<title>";
        // line 18
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
    }

    // line 39
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 40
        echo "\t\t";
        if (isset($context["bcs"])) { $_bcs_ = $context["bcs"]; } else { $_bcs_ = null; }
        if ($_bcs_) {
            // line 41
            echo "\t\t\t";
            if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
            if (isset($context["bcs"])) { $_bcs_ = $context["bcs"]; } else { $_bcs_ = null; }
            echo $this->getAttribute($_this_, "widget", array("zii.widgets.CBreadcrumbs", array("links" => $_bcs_), true, ), "method");
            // line 43
            echo "
\t\t";
        }
        // line 45
        echo "\t";
    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
        // line 48
        echo "\t\tko
\t";
    }

    public function getTemplateName()
    {
        return "views/layouts/main.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
