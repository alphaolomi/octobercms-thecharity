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

/* /home/alpha/Documents/academy6/thecharity/themes/charity/partials/site/footer.htm */
class __TwigTemplate_5133785af8ab592d7d84999af7552e3ce25a0c49530baac3a670caf44f87c5eb extends \Twig\Template
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
        echo "<!-- <div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit\">&copy; 2013 - ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Alexey Bobkov &amp; Samuel Georges.</p>
    </div>
</div> -->
<footer class=\"site-footer\">
    <div class=\"footer-widgets\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-md-6 col-lg-3\">
                    <div class=\"foot-about\">
                        <h2><a class=\"foot-logo\" href=\"#\"><img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/foot-logo.png");
        echo "\" alt=\"\"></a></h2>

                        <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit. Mauris temp us vestib ulum mauris.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.Lorem ipsum dolo.</p>

                        <ul class=\"d-flex flex-wrap align-items-center\">
                            <li><a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div><!-- .foot-about -->
                </div><!-- .col -->

                <div class=\"col-12 col-md-6 col-lg-3 mt-5 mt-md-0\">
                    <h2>Useful Links</h2>

                    <ul>
                        <li><a href=\"#\">Privacy Polticy</a></li>
                        <li><a href=\"#\">Become  a Volunteer</a></li>
                        <li><a href=\"#\">Donate</a></li>
                        <li><a href=\"#\">Testimonials</a></li>
                        <li><a href=\"#\">Causes</a></li>
                        <li><a href=\"#\">Portfolio</a></li>
                        <li><a href=\"#\">News</a></li>
                    </ul>
                </div><!-- .col -->

                <div class=\"col-12 col-md-6 col-lg-3 mt-5 mt-md-0\">
                    <div class=\"foot-latest-news\">
                        <h2>Latest News</h2>

                        <ul>
                            <li>
                                <h3><a href=\"#\">A new cause to help</a></h3>
                                <div class=\"posted-date\">MArch 12, 2018</div>
                            </li>

                            <li>
                                <h3><a href=\"#\">We love to help people</a></h3>
                                <div class=\"posted-date\">MArch 12, 2018</div>
                            </li>

                            <li>
                                <h3><a href=\"#\">The new ideas for helping</a></h3>
                                <div class=\"posted-date\">MArch 12, 2018</div>
                            </li>
                        </ul>
                    </div><!-- .foot-latest-news -->
                </div><!-- .col -->

                <div class=\"col-12 col-md-6 col-lg-3 mt-5 mt-md-0\">
                    <div class=\"foot-contact\">
                        <h2>Contact</h2>

                        <ul>
                            <li><i class=\"fa fa-phone\"></i><span>+45 677 8993000 223</span></li>
                            <li><i class=\"fa fa-envelope\"></i><span>office@template.com</span></li>
                            <li><i class=\"fa fa-map-marker\"></i><span>Main Str. no 45-46, b3, 56832, Los Angeles, CA</span></li>
                        </ul>
                    </div><!-- .foot-contact -->

                    <div class=\"subscribe-form\">
                        <form class=\"d-flex flex-wrap align-items-center\">
                            <input type=\"email\" placeholder=\"Your email\">
                            <input type=\"submit\" value=\"send\">
                        </form><!-- .flex -->
                    </div><!-- .search-widget -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .footer-widgets -->

    <div class=\"footer-bar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <p class=\"m-0\">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by
                         <a href=\"#\"  target=\"_blank\">Life</a>                        
                </div><!-- .col-12 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .footer-bar -->
</footer><!-- .site-footer -->";
    }

    public function getTemplateName()
    {
        return "/home/alpha/Documents/academy6/thecharity/themes/charity/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- <div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit\">&copy; 2013 - {{ \"now\"|date(\"Y\") }} Alexey Bobkov &amp; Samuel Georges.</p>
    </div>
</div> -->
<footer class=\"site-footer\">
    <div class=\"footer-widgets\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-md-6 col-lg-3\">
                    <div class=\"foot-about\">
                        <h2><a class=\"foot-logo\" href=\"#\"><img src=\"{{ 'assets/images/foot-logo.png'|theme }}\" alt=\"\"></a></h2>

                        <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit. Mauris temp us vestib ulum mauris.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.Lorem ipsum dolo.</p>

                        <ul class=\"d-flex flex-wrap align-items-center\">
                            <li><a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div><!-- .foot-about -->
                </div><!-- .col -->

                <div class=\"col-12 col-md-6 col-lg-3 mt-5 mt-md-0\">
                    <h2>Useful Links</h2>

                    <ul>
                        <li><a href=\"#\">Privacy Polticy</a></li>
                        <li><a href=\"#\">Become  a Volunteer</a></li>
                        <li><a href=\"#\">Donate</a></li>
                        <li><a href=\"#\">Testimonials</a></li>
                        <li><a href=\"#\">Causes</a></li>
                        <li><a href=\"#\">Portfolio</a></li>
                        <li><a href=\"#\">News</a></li>
                    </ul>
                </div><!-- .col -->

                <div class=\"col-12 col-md-6 col-lg-3 mt-5 mt-md-0\">
                    <div class=\"foot-latest-news\">
                        <h2>Latest News</h2>

                        <ul>
                            <li>
                                <h3><a href=\"#\">A new cause to help</a></h3>
                                <div class=\"posted-date\">MArch 12, 2018</div>
                            </li>

                            <li>
                                <h3><a href=\"#\">We love to help people</a></h3>
                                <div class=\"posted-date\">MArch 12, 2018</div>
                            </li>

                            <li>
                                <h3><a href=\"#\">The new ideas for helping</a></h3>
                                <div class=\"posted-date\">MArch 12, 2018</div>
                            </li>
                        </ul>
                    </div><!-- .foot-latest-news -->
                </div><!-- .col -->

                <div class=\"col-12 col-md-6 col-lg-3 mt-5 mt-md-0\">
                    <div class=\"foot-contact\">
                        <h2>Contact</h2>

                        <ul>
                            <li><i class=\"fa fa-phone\"></i><span>+45 677 8993000 223</span></li>
                            <li><i class=\"fa fa-envelope\"></i><span>office@template.com</span></li>
                            <li><i class=\"fa fa-map-marker\"></i><span>Main Str. no 45-46, b3, 56832, Los Angeles, CA</span></li>
                        </ul>
                    </div><!-- .foot-contact -->

                    <div class=\"subscribe-form\">
                        <form class=\"d-flex flex-wrap align-items-center\">
                            <input type=\"email\" placeholder=\"Your email\">
                            <input type=\"submit\" value=\"send\">
                        </form><!-- .flex -->
                    </div><!-- .search-widget -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .footer-widgets -->

    <div class=\"footer-bar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <p class=\"m-0\">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by
                         <a href=\"#\"  target=\"_blank\">Life</a>                        
                </div><!-- .col-12 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .footer-bar -->
</footer><!-- .site-footer -->", "/home/alpha/Documents/academy6/thecharity/themes/charity/partials/site/footer.htm", "");
    }
}
