<?php

/* sidebar.html */
class __TwigTemplate_97881806ee962eeddc5b6cbfddf90dd11c8130473a4c1994a5231bba21c26bb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("header.html");

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "header.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sidebar($context, array $blocks = array())
    {
        // line 4
        echo "\t\t\t<!-- bag. buka tutup sidebar -->
\t\t\t\t<div id=\"collapsedSidebarContent\">
\t\t\t\t\t<div class=\"sidebarDivider\"></div>

\t\t\t\t\t<div class=\"sidebarContent\">
\t\t\t\t\t\t<ul class=\"collapsedSidebarMenu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#tasksContent\" class=\"sidebar\">Aktivitas
\t\t\t\t\t\t\t\t\t<div class=\"notifyCircle cyan\">3</div>
\t\t\t\t\t\t\t\t\t<i class=\"icon-chevron-sign-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#notificationsContent\" class=\"sidebar\">Pemberitahuan
\t\t\t\t\t\t\t\t\t<div class=\"notifyCircle orange\">9</div>
\t\t\t\t\t\t\t\t\t<i class=\"icon-chevron-sign-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#messagesContent\" class=\"sidebar\">Pesan
\t\t\t\t\t\t\t\t\t<div class=\"notifyCircle red\">12</div>
\t\t\t\t\t\t\t\t\t<i class=\"icon-chevron-sign-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#settingsContent\" class=\"sidebar\">Pengaturan
\t\t\t\t\t\t\t\t\t<i class=\"icon-chevron-sign-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#profileContent\" class=\"sidebar\">Nama User
\t\t\t\t\t\t\t\t\t<i class=\"icon-chevron-sign-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"sublevel\">
\t\t\t\t\t\t\t\t<a href=\"#\">Edit Profil
\t\t\t\t\t\t\t\t\t<i class=\"icon-user\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"sublevel\">
\t\t\t\t\t\t\t\t<a href=\"#\">Ubah Password
\t\t\t\t\t\t\t\t\t<i class=\"icon-lock\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"sublevel\">
\t\t\t\t\t\t\t\t<a href=\"#\">Logout
\t\t\t\t\t\t\t\t\t<i class=\"icon-off\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<!-- //buka tutup sidebar -->

\t\t\t<!-- bag. sidebar aktivitas -->
\t\t\t\t<div id=\"tasksContent\">
\t\t\t\t\t<div class=\"sidebarDivider\"></div>

\t\t\t\t\t<div class=\"sidebarContent\">
\t\t\t\t\t\t<a href=\"#collapsedSidebarContent\" class=\"showCollapsedSidebarMenu\"><i class=\"icon-chevron-sign-left\"></i><h1> Tasks</h1></a>
\t\t\t\t\t\t<h1>Aktivitas</h1>

\t\t\t\t\t\t<div class=\"sidebarInfo\">
\t\t\t\t\t\t\t<div class=\"progressTasks\"><span class=\"label\">11</span> Dalam Proses</div>
\t\t\t\t\t\t\t<div class=\"newTasks\"><span class=\"label cyan\">3</span> Aktivitas Baru</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<ul class=\"tasksList\">
\t\t\t\t\t\t\t<li class=\"new\">
\t\t\t\t\t\t\t\t<h3>TITLE</h3>
\t\t\t\t\t\t\t\t<span class=\"taskProgress\">0%</span>
\t\t\t\t\t\t\t\t<div class=\"progress progress-striped active\">
\t\t\t\t\t\t\t\t\t<div class=\"bar\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"appendedTags\">
\t\t\t\t\t\t\t\t\t<div class=\"tag priority red\">Penting</div>
\t\t\t\t\t\t\t\t\t<div class=\"tag status cyan\">Baru</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"new\">
\t\t\t\t\t\t\t\t<h3>TITLE</h3>
\t\t\t\t\t\t\t\t<span class=\"taskProgress\">0%</span>
\t\t\t\t\t\t\t\t<div class=\"progress progress-striped active\">
\t\t\t\t\t\t\t\t\t<div class=\"bar\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"appendedTags\">
\t\t\t\t\t\t\t\t\t<div class=\"tag priority orange\">Normal</div>
\t\t\t\t\t\t\t\t\t<div class=\"tag status cyan\">Baru</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"new\">
\t\t\t\t\t\t\t\t<h3>TITLE</h3>
\t\t\t\t\t\t\t\t<span class=\"taskProgress\">0%</span>
\t\t\t\t\t\t\t\t<div class=\"progress progress-striped active\">
\t\t\t\t\t\t\t\t\t<div class=\"bar\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"appendedTags\">
\t\t\t\t\t\t\t\t\t<div class=\"tag priority green\">Normal</div>
\t\t\t\t\t\t\t\t\t<div class=\"tag status cyan\">Baru</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h3>TITLE</h3>
\t\t\t\t\t\t\t\t<span class=\"taskProgress\">75%</span>
\t\t\t\t\t\t\t\t<div class=\"progress progress-striped active\">
\t\t\t\t\t\t\t\t\t<div class=\"bar\" style=\"width: 75%;\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"appendedTags\">
\t\t\t\t\t\t\t\t\t<div class=\"tag priority green\">Opsional</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h3>TITLE</h3>
\t\t\t\t\t\t\t\t<span class=\"taskProgress\">50%</span>
\t\t\t\t\t\t\t\t<div class=\"progress progress-striped active\">
\t\t\t\t\t\t\t\t\t<div class=\"bar\" style=\"width: 50%;\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"appendedTags\">
\t\t\t\t\t\t\t\t\t<div class=\"tag priority red\">Penting</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h3>TITLE</h3>
\t\t\t\t\t\t\t\t<span class=\"taskProgress\">25%</span>
\t\t\t\t\t\t\t\t<div class=\"progress progress-striped active\">
\t\t\t\t\t\t\t\t\t<div class=\"bar\" style=\"width: 25%;\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"appendedTags\">
\t\t\t\t\t\t\t\t\t<div class=\"tag priority orange\">Normal</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h3>TITLE</h3>
\t\t\t\t\t\t\t\t<span class=\"taskProgress\">100%</span>
\t\t\t\t\t\t\t\t<div class=\"progress progress-striped\">
\t\t\t\t\t\t\t\t\t<div class=\"bar\" style=\"width: 100%;\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"appendedTags\">
\t\t\t\t\t\t\t\t\t<div class=\"tag priority red\">Penting</div>
\t\t\t\t\t\t\t\t\t<div class=\"tag status grey\">Selesai</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<button class=\"btn btn-primary\">Lihat Semua</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<!-- //sidebar aktivitas -->

\t\t\t<!-- bag. sidebar pemberitahuan -->
\t\t\t\t<div id=\"notificationsContent\">
\t\t\t\t\t<div class=\"sidebarDivider\"></div>

\t\t\t\t\t<div class=\"sidebarContent\">
\t\t\t\t\t\t<a href=\"#collapsedSidebarContent\" class=\"showCollapsedSidebarMenu\"><i class=\"icon-chevron-sign-left\"></i><h1> Pemberitahuan</h1></a>
\t\t\t\t\t\t<h1>Pemberitahuan</h1>

\t\t\t\t\t\t<div class=\"sidebarInfo\">
\t\t\t\t\t\t\t<div><span class=\"label\">32</span> pemberitahuan</div>
\t\t\t\t\t\t\t<div><span class=\"label orange\">9</span> pemberitahuan baru</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<ul class=\"notificationsList\">
\t\t\t\t\t\t\t<li class=\"new first\">
\t\t\t\t\t\t\t\t<div><i class=\"icon-user\"></i> TITLE</div>
\t\t\t\t\t\t\t\t<span class=\"notificationDate\">1 menit lalu <span class=\"pull-right notificationStatus\">baru</span></span>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"new\">
\t\t\t\t\t\t\t\t<div><i class=\"icon-user\"></i> TITLE</div>
\t\t\t\t\t\t\t\t<span class=\"notificationDate\">3 menit lalu <span class=\"pull-right notificationStatus\">baru</span></span>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"new\">
\t\t\t\t\t\t\t\t<div><i class=\"icon-comments\"></i> TITLE</div>
\t\t\t\t\t\t\t\t<span class=\"notificationDate\">15 menit lalu <span class=\"pull-right notificationStatus\">baru</span></span>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"new\">
\t\t\t\t\t\t\t\t<div><i class=\"icon-shopping-cart\"></i> TITLE</div>
\t\t\t\t\t\t\t\t<span class=\"notificationDate\">23 menit lalu <span class=\"pull-right notificationStatus\">baru</span></span>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"new\">
\t\t\t\t\t\t\t\t<div><i class=\"icon-shopping-cart\"></i> TITLE</div>
\t\t\t\t\t\t\t\t<span class=\"notificationDate\">1 jam lalu <span class=\"pull-right notificationStatus\">baru</span></span>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div><i class=\"icon-comments\"></i> TITLE</div>
\t\t\t\t\t\t\t\t<span class=\"notificationDate\">10 jam lalu</span>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div><i class=\"icon-shopping-cart\"></i> TITLE</div>
\t\t\t\t\t\t\t\t<span class=\"notificationDate\">23 jam lalu</span>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div><i class=\"icon-shopping-cart\"></i> TITLE</div>
\t\t\t\t\t\t\t\t<span class=\"notificationDate\">kemarin</span>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div><i class=\"icon-user\"></i> TITLE</div>
\t\t\t\t\t\t\t\t<span class=\"notificationDate\">01 Maret 2013</span>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div><i class=\"icon-user\"></i> TITLE</div>
\t\t\t\t\t\t\t\t<span class=\"notificationDate\">02 Maret 2013</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<button class=\"btn btn-primary\">Lihat Semua</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<!-- //sidebar notifikasi -->

\t\t\t<!-- bag. sidebar pesan -->
\t\t\t\t<div id=\"messagesContent\">
\t\t\t\t\t<div class=\"sidebarDivider\"></div>

\t\t\t\t\t<div class=\"sidebarContent\">
\t\t\t\t\t\t<a href=\"#collapsedSidebarContent\" class=\"showCollapsedSidebarMenu\"><i class=\"icon-chevron-sign-left\"></i><h1> Inbox</h1></a>
\t\t\t\t\t\t<h1>Pesan</h1>

\t\t\t\t\t\t<div class=\"sidebarInfo\">
\t\t\t\t\t\t\t<div><span class=\"label\">128</span> pesan</div>
\t\t\t\t\t\t\t<div><span class=\"label red\">12</span> belum dibaca</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<ul class=\"messagesList\">
\t\t\t\t\t\t\t<li class=\"unreaded\">
\t\t\t\t\t\t\t\t<div class=\"messageAvatar\"><img src=\"";
        // line 244
        echo twig_escape_filter($this->env, base_url("assets/img/rimmer-avatar.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
\t\t\t\t\t\t\t\t<h3>Nama</h3>

\t\t\t\t\t\t\t\t<span class=\"messageDate\">20 Desember 2014 17:55 <span class=\"pull-right messageStatus\">belum dibaca</span></span> 
\t\t\t\t\t\t\t\t<div class=\"messageContent\">\"Deskripsi...\"</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"unreaded\">
\t\t\t\t\t\t\t\t<div class=\"messageAvatar\"><img src=\"";
        // line 252
        echo twig_escape_filter($this->env, base_url("assets/img/homer-avatar.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
\t\t\t\t\t\t\t\t<h3>Nama</h3>

\t\t\t\t\t\t\t\t<span class=\"messageDate\">18 Desember 2014 10:42 <span class=\"pull-right messageStatus\">belum dibaca</span></span> 
\t\t\t\t\t\t\t\t<div class=\"messageContent\">\"Deskripsi...\"</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"unreaded\">
\t\t\t\t\t\t\t\t<div class=\"messageAvatar\"><img src=\"";
        // line 260
        echo twig_escape_filter($this->env, base_url("assets/img/peter-avatar.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
\t\t\t\t\t\t\t\t<h3>Nama</h3>

\t\t\t\t\t\t\t\t<span class=\"messageDate\">23 November 13:22 <span class=\"pull-right messageStatus\">belum dibaca</span></span> 
\t\t\t\t\t\t\t\t<div class=\"messageContent\">\"Deskripsi...\"</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"unreaded\">
\t\t\t\t\t\t\t\t<div class=\"messageAvatar\"><img src=\"";
        // line 268
        echo twig_escape_filter($this->env, base_url("assets/img/zoidberg-avatar.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
\t\t\t\t\t\t\t\t<h3>Nama</h3>

\t\t\t\t\t\t\t\t<span class=\"messageDate\">27 Oktober 2014 19:45 <span class=\"pull-right messageStatus\">belum dibaca</span></span> 
\t\t\t\t\t\t\t\t<div class=\"messageContent\">\"Deskripsi...\"</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"unreaded\">
\t\t\t\t\t\t\t\t<div class=\"messageAvatar\"><img src=\"";
        // line 276
        echo twig_escape_filter($this->env, base_url("assets/img/peter-avatar.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
\t\t\t\t\t\t\t\t<h3>Nama</h3>

\t\t\t\t\t\t\t\t<span class=\"messageDate\">1 Oktober 04:23 <span class=\"pull-right messageStatus\">belum dibaca</span></span> 
\t\t\t\t\t\t\t\t<div class=\"messageContent\">\"Deskripsi...\"</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"unreaded\">
\t\t\t\t\t\t\t\t<div class=\"messageAvatar\"><img src=\"";
        // line 284
        echo twig_escape_filter($this->env, base_url("assets/img/rimmer-avatar.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
\t\t\t\t\t\t\t\t<h3>Nama</h3>

\t\t\t\t\t\t\t\t<span class=\"messageDate\">05.03.2013 17:55 <span class=\"pull-right messageStatus\">unreaded</span></span> 
\t\t\t\t\t\t\t\t<div class=\"messageContent\">\"Deskripsi...\"</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<button class=\"btn btn-primary\">Lihat Semua</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<!-- //sidebar pesan -->

\t\t\t<!-- bag. sidebar profil -->
\t\t\t\t<div id=\"profileContent\">
\t\t\t\t\t<div class=\"sidebarDivider\"></div>

\t\t\t\t\t<div class=\"sidebarContent\">
\t\t\t\t\t\t<a href=\"#collapsedSidebarContent\" class=\"showCollapsedSidebarMenu\"><i class=\"icon-chevron-sign-left\"></i><h1> Akun Saya</h1></a>
\t\t\t\t\t\t<h1>Akun Saya</h1>

\t\t\t\t\t\t<div class=\"profileBlock\">
\t\t\t\t\t\t\t<div class=\"profilePhoto\">
\t\t\t\t\t\t\t\t<div class=\"usernameHolder\">Nama User</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"profileInfo\">
\t\t\t\t\t\t\t\t<p><i class=\"icon-map-marker\"></i> Malang, ID</p>
\t\t\t\t\t\t\t\t<p><i class=\"icon-envelope-alt\"></i> email@email.com</p>
\t\t\t\t\t\t\t\t<p><i class=\"icon-globe\"></i> website.com</p>
\t\t\t\t\t\t\t\t<p class=\"aboutMe\">
\t\t\t\t\t\t\t\t\tDeskripsi...
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<footer>
\t\t\t\t\t\t\t\t<div class=\"profileSettingBlock editProfile\"><i class=\"icon-user\"></i>Edit Profil</div>
\t\t\t\t\t\t\t\t<div class=\"profileSettingBlock changePassword\"><i class=\"icon-lock\"></i>Ubah Password</div>
\t\t\t\t\t\t\t\t<div class=\"profileSettingBlock logout\"><i class=\"icon-off\"></i>Logout</div>
\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<!-- //sidebar profil -->
";
    }

    public function getTemplateName()
    {
        return "sidebar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 284,  317 => 276,  306 => 268,  295 => 260,  284 => 252,  273 => 244,  31 => 4,  28 => 3,);
    }
}
