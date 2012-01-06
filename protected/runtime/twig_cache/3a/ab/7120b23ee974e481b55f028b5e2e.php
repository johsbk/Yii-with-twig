<?php

/* /views/site/contact.twig */
class __TwigTemplate_3aab7120b23ee974e481b55f028b5e2e extends Twig_Template
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
        $context["bcs"] = array(0 => "Contact");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "name"), "html", null, true);
        echo " - Contact Us";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Contact Us</h1>
";
        // line 6
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        if ($this->getAttribute($this->getAttribute($_App_, "user"), "hasFlash", array("contact", ), "method")) {
            // line 7
            echo "
<div class=\"flash-success\">
\t";
            // line 9
            if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_App_, "user"), "getFlash", array("contact", ), "method"), "html", null, true);
            echo "
</div>

";
        } else {
            // line 13
            echo "
<p>
If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
</p>

<div class=\"form\">

";
            // line 20
            if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
            $context["form"] = $this->getAttribute($_this_, "beginWidget", array("CActiveForm", array("id" => "contact-form", "enableClientValidation" => true, "clientOptions" => array("validateOnSubmit" => true)), ), "method");
            // line 27
            echo "
\t<p class=\"note\">Fields with <span class=\"required\">*</span> are required.</p>

\t";
            // line 30
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
            echo $this->getAttribute($_form_, "errorSummary", array($_model_, ), "method");
            echo "

\t<div class=\"row\">
\t\t";
            // line 33
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
            echo $this->getAttribute($_form_, "labelEx", array($_model_, "name", ), "method");
            echo "
\t\t";
            // line 34
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
            echo $this->getAttribute($_form_, "textField", array($_model_, "name", ), "method");
            echo "
\t\t";
            // line 35
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
            echo $this->getAttribute($_form_, "error", array($_model_, "name", ), "method");
            echo "
\t</div>

\t<div class=\"row\">
\t\t";
            // line 39
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
            echo $this->getAttribute($_form_, "labelEx", array($_model_, "email", ), "method");
            echo "
\t\t";
            // line 40
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
            echo $this->getAttribute($_form_, "textField", array($_model_, "email", ), "method");
            echo "
\t\t";
            // line 41
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
            echo $this->getAttribute($_form_, "error", array($_model_, "email", ), "method");
            echo "
\t</div>

\t<div class=\"row\">
\t\t";
            // line 45
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
            echo $this->getAttribute($_form_, "labelEx", array($_model_, "subject", ), "method");
            echo "
\t\t";
            // line 46
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
            echo $this->getAttribute($_form_, "textField", array($_model_, "subject", ), "method");
            echo "
\t\t";
            // line 47
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
            echo $this->getAttribute($_form_, "error", array($_model_, "subject", ), "method");
            echo "
\t</div>

\t<div class=\"row\">
\t\t";
            // line 51
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
            echo $this->getAttribute($_form_, "labelEx", array($_model_, "body", ), "method");
            echo "
\t\t";
            // line 52
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
            echo $this->getAttribute($_form_, "textArea", array($_model_, "body", ), "method");
            echo "
\t\t";
            // line 53
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
            echo $this->getAttribute($_form_, "error", array($_model_, "body", ), "method");
            echo "
\t</div>

\t";
            // line 56
            if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
            if ($this->getAttribute($this->getAttribute($_C_, "Captcha"), "checkRequirements", array(), "method")) {
                // line 57
                echo "\t<div class=\"row\">
\t\t";
                // line 58
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
                echo $this->getAttribute($_form_, "labelEx", array($_model_, "verifyCode", ), "method");
                echo "
\t\t<div>
\t\t";
                // line 60
                if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
                echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($_this_, "widget", array("CCaptcha", ), "method")), "html", null, true);
                echo "
\t\t";
                // line 61
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
                echo $this->getAttribute($_form_, "textField", array($_model_, "verifyCode", ), "method");
                echo "
\t\t</div>
\t\t<div class=\"hint\">Please enter the letters as they are shown in the image above.
\t\t<br/>Letters are not case-sensitive.</div>
\t\t";
                // line 65
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
                echo $this->getAttribute($_form_, "error", array($_model_, "verifyCode", ), "method");
                echo "
\t</div>
\t";
            }
            // line 68
            echo "
\t<div class=\"row buttons\">
\t\t";
            // line 70
            if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
            echo $this->getAttribute($this->getAttribute($_C_, "Html"), "submitbutton", array("Submit", ), "method");
            echo "
\t</div>

";
            // line 73
            if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
            echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($_this_, "endWidget", array(), "method")), "html", null, true);
            echo "

</div><!-- form -->

";
        }
    }

    public function getTemplateName()
    {
        return "/views/site/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
