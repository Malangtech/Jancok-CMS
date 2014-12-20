<?php

/* base/menu.html */
class __TwigTemplate_89f1d7763fffd7c5cdc346a3bda135669d0c20864f44b37bd0625703d855fc3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("sidebar.html");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "sidebar.html";
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
\t\t\t\t\t\t<li class=\"collapseMenu\"><a href=\"#\"><i class=\"icon-double-angle-left\"></i>Tutup Menu<i class=\"icon-double-angle-right deCollapse\"></i></a></li>

\t\t\t\t\t\t<li class=\"divider-vertical firstDivider\"></li>

\t\t\t\t\t\t<li class=\"left-side active\" id=\"dashboard\"><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\"><i class=\"icon-dashboard\"></i> Dasbor</a></li>

\t\t\t\t\t\t<li class=\"divider-vertical\"></li>

\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"formElements\"><i class=\"icon-list\"></i> Menu <span class=\"label label-pressed\">3</span></a>

\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Menu</a></li>
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Menu</a></li>
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Menu</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"divider-vertical\"></li>

\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"interface\"><i class=\"icon-pencil\"></i> Manage Akun <span class=\"label label-pressed\">2</span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, site_url("user/edit_profil"), "html", null, true);
        echo "\">Edit Profil</a></li>
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, site_url("user/edit_data"), "html", null, true);
        echo "\">Edit Data</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"divider-vertical\"></li>

\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"samplePages\"><i class=\"icon-globe\"></i> Menu 10 <span class=\"label label-pressed\">7</span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Menu 11</a></li>
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Menu 12</a></li>
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Menu 13</a></li>
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Menu 14</a></li>
\t\t\t\t\t\t\t\t<li class=\"dropdown-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">menu 15</a>

\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Menu 16</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Menu 17</a></li>

\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 54
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Menu 18</a>

\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Menu 19</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Menu 20</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Menu 21</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-submenu\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 61
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Menu 22</a>

\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Menu 23</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 65
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Menu 24</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 66
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Menu 25</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"divider-vertical\"></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "base/menu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 66,  148 => 65,  144 => 64,  138 => 61,  133 => 59,  129 => 58,  125 => 57,  119 => 54,  111 => 49,  107 => 48,  99 => 43,  95 => 42,  91 => 41,  87 => 40,  75 => 31,  71 => 30,  59 => 21,  55 => 20,  51 => 19,  40 => 11,  31 => 4,  28 => 3,);
    }
}
