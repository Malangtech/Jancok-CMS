<?php

/* menu/menu.html */
class __TwigTemplate_99b208b451a305a67b397f318e20ca66bb080816003242901349e6d456697cfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("../base/base.html");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
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
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "\t\t\t<div class=\"mainmenu\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t<li class=\"collapseMenu\"><a href=\"#\"><i class=\"icon-double-angle-left\"></i>hide menu<i class=\"icon-double-angle-right deCollapse\"></i></a></li>
\t\t\t\t\t\t<li class=\"divider-vertical firstDivider\"></li>
\t\t\t\t\t\t<li class=\"left-side active\" id=\"dashboard\"><a href=\"index.html\"><i class=\"icon-dashboard\"></i> DASHBOARD</a></li>
\t\t\t\t\t\t<li class=\"divider-vertical\"></li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"formElements\"><i class=\"icon-list\"></i> FORMS <span class=\"label label-pressed\">3</span></a>

\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"common-form.html\">COMMON ELEMENTS</a></li>
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"validation-form.html\">VALIDATION</a></li>
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"form-wizard.html\">WIZARD</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"divider-vertical\"></li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"interface\"><i class=\"icon-pencil\"></i> INTERFACE <span class=\"label label-pressed\">2</span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"interface.html\">UI ELEMENTS</a></li>
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"typography.html\">TYPOGRAPHY</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"divider-vertical\"></li>
\t\t\t\t\t\t<li id=\"buttonsIcons\"><a href=\"buttons.html\"><i class=\"icon-tint\"></i> BUTTONS & ICONS</a></li>
\t\t\t\t\t\t<li class=\"divider-vertical\"></li>
\t\t\t\t\t\t<li id=\"gridLayout\"><a href=\"grid.html\"><i class=\"icon-th\"></i> GRID LAYOUT</a></li>
\t\t\t\t\t\t<li class=\"divider-vertical\"></li>
\t\t\t\t\t\t<li id=\"tables\"><a href=\"tables.html\"><i class=\"icon-th-large\"></i> TABLES</a></li>
\t\t\t\t\t\t<li class=\"divider-vertical\"></li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"samplePages\"><i class=\"icon-globe\"></i> EXAMPLE PAGES <span class=\"label label-pressed\">7</span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"login.html\">LOGIN PAGE</a></li>
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"calendar.html\">CALENDAR</a></li>
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"404.html\">PAGE 404</a></li>
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"gallery.html\">GALLERY</a></li>
\t\t\t\t\t\t\t\t<li class=\"dropdown-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">MAIL</a>

\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"mail.html\">Vertical View</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"mail-horizontal.html\">Horizontal View</a></li>

\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">MAPS</a>

\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"vectormaps.html\">Vector Maps</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"gmaps.html\">Google Maps</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">SECOND LEVEL</a>

\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Second level link</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Second level link</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Second level link</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-submenu\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">THIRD LEVEL</a>

\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Second level link</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Second level link</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Second level link</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"timeline.html\">TIMELINE</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"divider-vertical\"></li>
\t\t\t\t\t\t<li><a href=\"widgets.html\" id=\"widgets\"><i class=\"icon-play-circle\"></i> WIDGETS</a></li>
\t\t\t\t\t\t<li class=\"divider-vertical\"></li>
\t\t\t\t\t\t<li class=\"right-side\" id=\"chartsGraphs\"><a href=\"charts.html\"><i class=\"icon-bar-chart\"></i> CHARTS & GRAPHS </a></li>
\t\t\t\t\t\t<li class=\"divider-vertical\"></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "menu/menu.html";
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
