<?php

/* /views/site/login.html */
class __TwigTemplate_2fa24afeff5d6e3054c032aabd5d0979 extends Twig_Template
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
        return "views/layouts/main.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["bcs"] = array(0 => "Login");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($_app_, "name") . " - Login"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>

<div class=\"form\">
";
        // line 11
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        $context["form"] = $this->getAttribute($_this_, "beginWidget", array("CActiveForm", array("id" => "login-form", "enableClientValidation" => true, "clientOptions" => array("validateOnSubmit" => true)), ), "method");
        // line 18
        echo "
\t<p class=\"note\">Fields with <span class=\"required\">*</span> are required.</p>

\t<div class=\"row\">
\t\t";
        // line 22
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array($_model_, "username", ), "method");
        echo "
\t\t";
        // line 23
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array($_model_, "username", ), "method");
        echo "
\t\t";
        // line 24
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array($_model_, "username", ), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 28
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array($_model_, "password", ), "method");
        echo "
\t\t";
        // line 29
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "passwordField", array($_model_, "password", ), "method");
        echo "
\t\t";
        // line 30
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array($_model_, "password", ), "method");
        echo "
\t\t<p class=\"hint\">
\t\t\tHint: You may login with <tt>demo/demo</tt> or <tt>admin/admin</tt>.
\t\t</p>
\t</div>

\t<div class=\"row rememberMe\">
\t\t";
        // line 37
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "checkBox", array($_model_, "rememberMe", ), "method");
        echo "
\t\t";
        // line 38
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "label", array($_model_, "rememberMe", ), "method");
        echo "
\t\t";
        // line 39
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array($_model_, "rememberMe", ), "method");
        echo "
\t</div>

\t<div class=\"row buttons\">
\t\t";
        // line 43
        if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
        echo $this->getAttribute($this->getAttribute($_C_, "Html"), "submitButton", array("Login", ), "method");
        echo "
\t</div>

";
        // line 46
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        $context["form"] = $this->getAttribute($_this_, "endWidget", array(), "method");
        // line 47
        echo "</div><!-- form -->
";
    }

    public function getTemplateName()
    {
        return "/views/site/login.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
