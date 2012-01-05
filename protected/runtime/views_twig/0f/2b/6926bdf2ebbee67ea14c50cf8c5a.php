<?php

/* \views\site\contact.html */
class __TwigTemplate_0f2b6926bdf2ebbee67ea14c50cf8c5a extends Twig_Template
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
        echo " - Contact Us";
    }

    // line 3
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 4
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array("zii.widgets.CBreadcrumbs", array("links" => array(0 => "Contact")), true, ), "method");
        // line 6
        echo "
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<h1>Contact Us</h1>
";
        // line 11
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "user"), "hasFlash", array("contact", ), "method")) {
            // line 12
            echo "
<div class=\"flash-success\">
\t";
            // line 14
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "getFlash", array("contact", ), "method"), "html", null, true);
            echo "
</div>

";
        } else {
            // line 18
            echo "
<p>
If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
</p>

<div class=\"form\">

";
            // line 25
            if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
            $context["form"] = $this->getAttribute($_this_, "beginWidget", array("CActiveForm", array("id" => "contact-form", "enableClientValidation" => true, "clientOptions" => array("validateOnSubmit" => true)), ), "method");
            // line 32
            echo "
\t<p class=\"note\">Fields with <span class=\"required\">*</span> are required.</p>

\t<?php echo \$form->errorSummary(\$model); ?>

\t<div class=\"row\">
\t\t<?php echo \$form->labelEx(\$model,'name'); ?>
\t\t<?php echo \$form->textField(\$model,'name'); ?>
\t\t<?php echo \$form->error(\$model,'name'); ?>
\t</div>

\t<div class=\"row\">
\t\t<?php echo \$form->labelEx(\$model,'email'); ?>
\t\t<?php echo \$form->textField(\$model,'email'); ?>
\t\t<?php echo \$form->error(\$model,'email'); ?>
\t</div>

\t<div class=\"row\">
\t\t<?php echo \$form->labelEx(\$model,'subject'); ?>
\t\t<?php echo \$form->textField(\$model,'subject',array('size'=>60,'maxlength'=>128)); ?>
\t\t<?php echo \$form->error(\$model,'subject'); ?>
\t</div>

\t<div class=\"row\">
\t\t<?php echo \$form->labelEx(\$model,'body'); ?>
\t\t<?php echo \$form->textArea(\$model,'body',array('rows'=>6, 'cols'=>50)); ?>
\t\t<?php echo \$form->error(\$model,'body'); ?>
\t</div>

\t<?php if(CCaptcha::checkRequirements()): ?>
\t<div class=\"row\">
\t\t<?php echo \$form->labelEx(\$model,'verifyCode'); ?>
\t\t<div>
\t\t<?php \$this->widget('CCaptcha'); ?>
\t\t<?php echo \$form->textField(\$model,'verifyCode'); ?>
\t\t</div>
\t\t<div class=\"hint\">Please enter the letters as they are shown in the image above.
\t\t<br/>Letters are not case-sensitive.</div>
\t\t<?php echo \$form->error(\$model,'verifyCode'); ?>
\t</div>
\t<?php endif; ?>

\t<div class=\"row buttons\">
\t\t<?php echo CHtml::submitButton('Submit'); ?>
\t</div>

<?php \$this->endWidget(); ?>

</div><!-- form -->

";
        }
    }

    public function getTemplateName()
    {
        return "\\views\\site\\contact.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
