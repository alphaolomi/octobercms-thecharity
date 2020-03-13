<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /home/alpha/Documents/academy6/thecharity/themes/charity/partials/site/header.htm */
class __TwigTemplate_743f6af4b4aaf4b3100f028db46aebc86bb21591f745b283389f7564c7447b65 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Nav -->
<!-- <nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">October Demo</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Basic concepts</a></li>
                <li class=\"";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17) == "ajax")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ajax");
        echo "\">AJAX framework</a></li>
                <li class=\"";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18) == "plugins")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("plugins");
        echo "\">Plugin components</a></li>
            </ul>
        </div>
    </div>
</nav> -->
<div class=\"top-header-bar\">
    <div class=\"container\">
        <div class=\"row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center\">
            <div class=\"col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0\">
                <div class=\"header-bar-email\">
                    MAIL: <a href=\"#\">contact@ourcharity.com</a>
                </div><!-- .header-bar-email -->

                <div class=\"header-bar-text\">
                    <p>PHONE: <span>+24 3772 120 091 / +56452 4567</span></p>
                </div><!-- .header-bar-text -->
            </div><!-- .col -->

            <div class=\"col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center\">
                <div class=\"donate-btn\">
                    <a href=\"#\">Donate Now</a>
                </div><!-- .donate-btn -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .top-header-bar -->

<div class=\"nav-bar\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 d-flex flex-wrap justify-content-between align-items-center\">
                <div class=\"site-branding d-flex align-items-center\">
                   <a class=\"d-block\" href=\"index.html\" rel=\"home\"><img class=\"d-block\" src=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images//logo.png");
        echo "\" alt=\"logo\"></a>
                </div><!-- .site-branding -->

                <nav class=\"site-navigation d-flex justify-content-end align-items-center\">
                    <ul class=\"d-flex flex-column flex-lg-row justify-content-lg-end align-content-center\">
                        <li class=\"current-menu-item\"><a href=\"index.html\">Home</a></li>
                        <li><a href=\"about.html\">About us</a></li>
                        <li><a href=\"causes.html\">Causes</a></li>
                        <li><a href=\"portfolio.html\">Gallery</a></li>
                        <li><a href=\"news.html\">News</a></li>
                        <li><a href=\"contact.html\">Contact</a></li>
                    </ul>
                </nav><!-- .site-navigation -->

                <div class=\"hamburger-menu d-lg-none\">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div><!-- .hamburger-menu -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .nav-bar -->
</header><!-- .site-header -->";
    }

    public function getTemplateName()
    {
        return "/home/alpha/Documents/academy6/thecharity/themes/charity/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 50,  73 => 18,  65 => 17,  57 => 16,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Nav -->
<!-- <nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">October Demo</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"{% if this.page.id == 'home' %}active{% endif %}\"><a href=\"{{ 'home'|page }}\">Basic concepts</a></li>
                <li class=\"{% if this.page.id == 'ajax' %}active{% endif %}\"><a href=\"{{ 'ajax'|page }}\">AJAX framework</a></li>
                <li class=\"{% if this.page.id == 'plugins' %}active{% endif %}\"><a href=\"{{ 'plugins'|page }}\">Plugin components</a></li>
            </ul>
        </div>
    </div>
</nav> -->
<div class=\"top-header-bar\">
    <div class=\"container\">
        <div class=\"row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center\">
            <div class=\"col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0\">
                <div class=\"header-bar-email\">
                    MAIL: <a href=\"#\">contact@ourcharity.com</a>
                </div><!-- .header-bar-email -->

                <div class=\"header-bar-text\">
                    <p>PHONE: <span>+24 3772 120 091 / +56452 4567</span></p>
                </div><!-- .header-bar-text -->
            </div><!-- .col -->

            <div class=\"col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center\">
                <div class=\"donate-btn\">
                    <a href=\"#\">Donate Now</a>
                </div><!-- .donate-btn -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .top-header-bar -->

<div class=\"nav-bar\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 d-flex flex-wrap justify-content-between align-items-center\">
                <div class=\"site-branding d-flex align-items-center\">
                   <a class=\"d-block\" href=\"index.html\" rel=\"home\"><img class=\"d-block\" src=\"{{ 'assets/images//logo.png'|theme }}\" alt=\"logo\"></a>
                </div><!-- .site-branding -->

                <nav class=\"site-navigation d-flex justify-content-end align-items-center\">
                    <ul class=\"d-flex flex-column flex-lg-row justify-content-lg-end align-content-center\">
                        <li class=\"current-menu-item\"><a href=\"index.html\">Home</a></li>
                        <li><a href=\"about.html\">About us</a></li>
                        <li><a href=\"causes.html\">Causes</a></li>
                        <li><a href=\"portfolio.html\">Gallery</a></li>
                        <li><a href=\"news.html\">News</a></li>
                        <li><a href=\"contact.html\">Contact</a></li>
                    </ul>
                </nav><!-- .site-navigation -->

                <div class=\"hamburger-menu d-lg-none\">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div><!-- .hamburger-menu -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .nav-bar -->
</header><!-- .site-header -->", "/home/alpha/Documents/academy6/thecharity/themes/charity/partials/site/header.htm", "");
    }
}
