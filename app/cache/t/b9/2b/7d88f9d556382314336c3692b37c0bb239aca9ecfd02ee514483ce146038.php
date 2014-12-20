<?php

/* _backend/app.html */
class __TwigTemplate_b92b7d88f9d556382314336c3692b37c0bb239aca9ecfd02ee514483ce146038 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base/menu.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base/menu.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<!-- bag. tab informasi -->
\t<div class=\"container-fluid\">
\t\t<div class=\"row-fluid\">
\t\t\t<div class=\"span12 tabContainer\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<a href=\"#firstTab\">Info Keuangan</a>
\t\t\t\t\t</li>

\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#secondTab\">Info Transaksi</a>
\t\t\t\t\t</li>

\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#thirdTab\">Info Log</a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"controlButton pull-right\"><i class=\"icon-caret-down minimizeElement\"></i></li>
\t\t\t\t</ul>

\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"tabContent\" id=\"firstTab\">
\t\t\t\t\t\t<div class=\"floatingBox span12\">
\t\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t\t<h4>Info Keuangan Anda</h4>

\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tDeskripsi...
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tabContent\" id=\"secondTab\" style=\"display: none\">
\t\t\t\t\t\t<div class=\"floatingBox span4\">
\t\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t\t<h4>Info Transaksi 1</h4>

\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tDeskripsi...
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"floatingBox span4\">
\t\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t\t<h4>Info Transaksi 2</h4>

\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tDeskripsi...
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"floatingBox span4\">
\t\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t\t<h4>Info Transaksi 3</h4>

\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tDeskripsi...
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tabContent\" id=\"thirdTab\" style=\"display: none\">
\t\t\t\t\t\t<div class=\"floatingBox span6\">
\t\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t\t<h4>Info Log 1</h4>

\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tDeskripsi...
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"floatingBox span6\">
\t\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t\t<h4>Info Log 2</h4>

\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tDeskripsi...
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- //tab informasi -->

\t<!-- bag. breadcrumb -->
\t<ul class=\"breadcrumb\">
\t\t<li><i class=\"icon-home\"></i><a href=\"index.html\"> Beranda</a> <span class=\"divider\"><i class=\"icon-angle-right\"></i></span></li>
\t\t<li class=\"active\">Dashboard</li>
\t\t<li class=\"moveDown pull-right\">
\t\t\t<span class=\"time\"></span>
\t\t\t<span class=\"date\"></span>
\t\t</li>
\t</ul>
\t<!-- //breadcrumb -->

\t<!-- bag. menu cepat -->
\t<div class=\"container-fluid\">
\t\t<div class=\"row-fluid\">
\t\t\t<ul class=\"masterActions\">
\t\t\t\t<li class=\"active\">
\t\t\t\t\t<i class=\"icon-envelope redText\"></i>
\t\t\t\t\t<h1 class=\"redText\">Title</h1>
\t\t\t\t\t<p>Deskripsi</p>
\t\t\t\t\t<div class=\"notifyCircle red\">12</div>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<i class=\"icon-ok-sign cyanText\"></i>
\t\t\t\t\t<h1 class=\"cyanText\">Title</h1>
\t\t\t\t\t<p>Deskripsi</p>
\t\t\t\t\t<div class=\"notifyCircle cyan\">3</div>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<i class=\"icon-shopping-cart greenText\"></i>
\t\t\t\t\t<h1 class=\"greenText\">Title</h1>
\t\t\t\t\t<p>Deskripsi</p>
\t\t\t\t\t<div class=\"notifyCircle green\">254</div>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<i class=\"icon-bar-chart orangeText\"></i>
\t\t\t\t\t<h1 class=\"orangeText\">Title</h1>
\t\t\t\t\t<p>Deskripsi</p>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<i class=\"icon-inbox greyText\"></i>
\t\t\t\t\t<h1 class=\"greyText\">Title</h1>
\t\t\t\t\t<p>Deskripsi</p>
\t\t\t\t\t<div class=\"notifyCircle grey\">2</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<!-- //menu cepat -->

\t\t<!-- pemisah -->
\t\t<div class=\"row-fluid\">
\t\t\t<div class=\"span12 contentDivider\"></div>
\t\t</div>
\t\t<!-- //pemisah -->

\t\t<!-- bag. log pengguna -->
\t\t<div class=\"row-fluid\">
\t\t\t<div class=\"span12\">
\t\t\t\t<div class=\"containerHeadline\">
\t\t\t\t\t<i class=\"icon-th\"></i><h2>Log Pengguna</h2>
\t\t\t\t\t<div class=\"controlButton pull-right\"><i class=\"icon-caret-down minimizeElement\"></i></div>
\t\t\t\t</div>

\t\t\t\t<div class=\"floatingBox\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLogin Saat ini: 20 Desember 2014 13:45:25 <br/>
\t\t\t\t\t\t\tLogin Terakhir: 18 Desember 2014 18:35:46 <br/>
\t\t\t\t\t\t\tUser Agent: Mozilla <br/>
\t\t\t\t\t\t\tIP Login Terakhir: 192.168.1.1 <br/>
\t\t\t\t\t\t\tKota: Malang <br/>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- //log pengguna -->
";
    }

    public function getTemplateName()
    {
        return "_backend/app.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
