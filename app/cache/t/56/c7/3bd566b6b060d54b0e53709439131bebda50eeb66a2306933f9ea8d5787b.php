<?php

/* menu/header.html */
class __TwigTemplate_56c73bd566b6b060d54b0e53709439131bebda50eeb66a2306933f9ea8d5787b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("../base/base.html");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "../base/base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "
\t\t\t\t\t\t<a class=\"brand\" href=\"#\">
\t\t\t\t\t\t\t<strong class=\"brandBold\">JANCOK</strong>CMS
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<div class=\"nav pull-right\">
\t\t\t\t\t\t\t<form class=\"navbar-form\">
\t\t\t\t\t\t\t\t<div class=\"input-append\">
\t\t\t\t\t\t\t\t\t<div class=\"collapsibleContent\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#tasksContent\" class=\"sidebar\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"add-on add-on-middle add-on-mini add-on-dark\" id=\"tasks\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-tasks\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notifyCircle cyan\">3</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<a href=\"#notificationsContent\" class=\"sidebar\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"add-on add-on-middle add-on-mini add-on-dark\" id=\"notifications\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-bell-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notifyCircle orange\">9</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<a href=\"#messagesContent\" class=\"sidebar\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"add-on add-on-middle add-on-mini add-on-dark\" id=\"messages\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-comments-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notifyCircle red\">12</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<a href=\"#profileContent\" class=\"sidebar\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"add-on add-on-mini add-on-dark\" id=\"profile\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"username\">Nama user</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<a href=\"#collapsedSidebarContent\" class=\"collapseHolder sidebar\">
\t\t\t\t\t\t\t\t\t\t<span class=\"add-on add-on-mini add-on-dark\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-sort-down\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>

";
    }

    public function getTemplateName()
    {
        return "menu/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  118 => 86,  115 => 85,  32 => 4,  29 => 3,);
    }
}
