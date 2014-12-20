<?php

/* base.html */
class __TwigTemplate_4afa2ab2a84fe4197f10b274fa639d6c23473237bed0a0c79bcceee33413af8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<title>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>

\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t\t<link rel=\"icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, base_url("assets/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\" />

\t\t";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "\t</head>

\t<body class=\"dashboard\">
\t";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "
\t";
        // line 46
        $this->displayBlock('scripts', $context, $blocks);
        // line 71
        echo "\t</body>
";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, base_url("assets/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" />
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, base_url("assets/css/font.css"), "html", null, true);
        echo "\" />
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, base_url("assets/css/styles.css"), "html", null, true);
        echo "\">
\t\t";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        // line 21
        echo "\t\t<!--[if lt IE 7]>
\t\t\t<p class=\"chromeframe\">Anda menggunakan browser <strong>versi lama</strong>. Silahkan <a href=\"http://browsehappy.com/\">Upgrade browser anda</a> atau <a href=\"http://www.google.com/chromeframe/?redirect=true\">Aktifkan frame Google Chrome</a>.</p>
\t\t<![endif]-->

\t\t<!-- bag. menu header -->
\t\t\t";
        // line 26
        $this->displayBlock('header', $context, $blocks);
        // line 27
        echo "\t\t<!-- //menu header -->

\t\t<!-- bag. sidebar -->
\t\t<div class=\"hiddenContent\">
\t\t\t";
        // line 31
        $this->displayBlock('sidebar', $context, $blocks);
        // line 32
        echo "\t\t</div>
\t\t<!-- //sidebar -->

\t\t<!-- bag. menu utama -->
\t\t\t";
        // line 36
        $this->displayBlock('menu', $context, $blocks);
        // line 37
        echo "\t\t<!-- //menu utama -->

\t\t<!-- bag. konten halaman -->
\t\t\t<div class=\"content\">
\t\t\t\t";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "\t\t\t</div>
\t\t<!-- //konten halaman -->
\t";
    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
    }

    // line 31
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 36
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
    }

    // line 46
    public function block_scripts($context, array $blocks = array())
    {
        // line 47
        echo "\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
\t\t<script>window.jQuery || document.write('<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, base_url("assets/js/vendor/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
\t\t<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, base_url("assets/js/vendor/bootstrap-slider.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, base_url("assets/js/vendor/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, base_url("assets/js/vendor/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, base_url("assets/js/vendor/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, base_url("assets/js/vendor/jquery.flot.pie.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, base_url("assets/js/vendor/wysihtml5-0.3.0_rc2.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, base_url("assets/js/vendor/bootstrap-wysihtml5-0.0.2.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, base_url("assets/js/vendor/bootstrap-tags.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, base_url("assets/js/vendor/jquery.tablesorter.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, base_url("assets/js/vendor/jquery.tablesorter.widgets.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, base_url("assets/js/vendor/jquery.tablesorter.pager.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, base_url("assets/js/vendor/raphael.2.1.0.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, base_url("assets/js/vendor/justgage.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, base_url("assets/js/vendor/bootstrap-multiselect.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 63
        echo twig_escape_filter($this->env, base_url("assets/js/vendor/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, base_url("assets/js/vendor/bootstrap-colorpicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 65
        echo twig_escape_filter($this->env, base_url("assets/js/vendor/parsley.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, base_url("assets/js/vendor/formToWizard.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, base_url("assets/js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, base_url("assets/js/vendor/bootstrap-editable.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, base_url("assets/js/thekamarel.min.js"), "html", null, true);
        echo "\"></script>
\t";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 69,  230 => 68,  226 => 67,  222 => 66,  218 => 65,  214 => 64,  210 => 63,  206 => 62,  202 => 61,  198 => 60,  194 => 59,  190 => 58,  186 => 57,  182 => 56,  178 => 55,  174 => 54,  170 => 53,  166 => 52,  162 => 51,  158 => 50,  154 => 49,  150 => 48,  147 => 47,  144 => 46,  139 => 41,  134 => 36,  129 => 31,  124 => 26,  118 => 42,  116 => 41,  110 => 37,  108 => 36,  102 => 32,  100 => 31,  94 => 27,  92 => 26,  85 => 21,  82 => 20,  76 => 15,  72 => 14,  67 => 13,  64 => 12,  59 => 71,  57 => 46,  54 => 45,  52 => 20,  47 => 17,  45 => 12,  40 => 10,  26 => 1,  31 => 4,  28 => 3,);
    }
}
