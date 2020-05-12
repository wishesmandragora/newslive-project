<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/ana_zymphonies/templates/layout/page--front.html.twig */
class __TwigTemplate_f3e63d13a9b22b4f2f3da412dccf15d13baedfe8b54f097a29b10519b5b347be extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 62, "for" => 290];
        $filters = ["escape" => 73, "raw" => 291, "date" => 517];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 60
        echo "

";
        // line 62
        if (($this->getAttribute(($context["page"] ?? null), "contact_email", []) || $this->getAttribute(($context["page"] ?? null), "top_menu", []))) {
            // line 63
            echo "  <div class=\"top-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Contact Phone & Email -->

        <div class=\"col-sm-9\">
          
          <div class=\"top-blocks\">
            ";
            // line 72
            if ($this->getAttribute(($context["page"] ?? null), "top_menu", [])) {
                // line 73
                echo "              ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_menu", [])), "html", null, true);
                echo "
            ";
            }
            // line 75
            echo "
            ";
            // line 76
            if ($this->getAttribute(($context["page"] ?? null), "contact_email", [])) {
                // line 77
                echo "              ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contact_email", [])), "html", null, true);
                echo "
            ";
            }
            // line 79
            echo "
            <!-- Start: Social media icons -->

            ";
            // line 82
            if (($context["show_social_icon"] ?? null)) {
                // line 83
                echo "              <div class=\"social-media\">
                ";
                // line 84
                if (($context["facebook_url"] ?? null)) {
                    // line 85
                    echo "                  <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
                ";
                }
                // line 87
                echo "                ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 88
                    echo "                  <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
                ";
                }
                // line 90
                echo "                ";
                if (($context["twitter_url"] ?? null)) {
                    // line 91
                    echo "                  <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
                ";
                }
                // line 93
                echo "                ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 94
                    echo "                  <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
                ";
                }
                // line 96
                echo "                ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 97
                    echo "                  <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
                ";
                }
                // line 99
                echo "                ";
                if (($context["rss_url"] ?? null)) {
                    // line 100
                    echo "                  <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
                ";
                }
                // line 102
                echo "              </div>
            ";
            }
            // line 104
            echo "
            <!-- End: Social media icons -->

          </div>

        </div>

        <!-- End: Contact Phone & Email -->

\t<!-- Start: Top menu -->

        ";
            // line 115
            if ($this->getAttribute(($context["page"] ?? null), "search", [])) {
                // line 116
                echo "          <div class=\"col-sm-3\">
            ";
                // line 117
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 120
            echo "
        <!-- End: Top menu -->

      </div>
    </div>
  </div>
";
        }
        // line 127
        echo "

<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Header -->

        <div class=\"navbar-header col-md-3\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          ";
        // line 143
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 144
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
          ";
        }
        // line 146
        echo "        </div>

        <!-- End: Header -->

        <!-- Start: Header Ads -->

        ";
        // line 152
        if ($this->getAttribute(($context["page"] ?? null), "header_ads", [])) {
            // line 153
            echo "          <div class=\"col-md-9\">
            ";
            // line 154
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_ads", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 157
        echo "
        <!-- End: Header Ads -->

        </div>
      </div>
    </nav>
</header>


<!-- End: Main menu -->

";
        // line 168
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 169
            echo "  <div class=\"container\">
    <div class=\"main-menu\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 173
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 179
        echo "
<!-- End: Main menu -->


<!-- Start: Top widget -->

";
        // line 185
        if ((($context["is_front"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "topwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", [])))) {
            // line 186
            echo "  <div class=\"parallax-widget- zero\" id=\"about\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInDown\">

        ";
            // line 190
            if ((($context["is_front"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "topwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", [])))) {
                // line 191
                echo "          <div class=\"row clearfix topwidget\">

            <!-- Start: Top widget first -->          
            ";
                // line 194
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])) {
                    // line 195
                    echo "              <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])), "html", null, true);
                    echo "</div>
            ";
                }
                // line 196
                echo "          
            <!-- End: Top widget first --> 

            <!-- Start: Top widget second -->          
            ";
                // line 200
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) {
                    // line 201
                    echo "              <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])), "html", null, true);
                    echo "</div>
            ";
                }
                // line 202
                echo "          
            <!-- End: Top widget second --> 

          </div>
        ";
            }
            // line 207
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 212
        echo "
<!--End: Top widget -->


<!-- Start: Main content -->
<div class=\"parallax-widget- one\">
  <div class=\"parallax-region- wow- bounceInDown\">
    
    <!--Start: Highlighted -->

    ";
        // line 222
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 223
            echo "      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 226
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    ";
        }
        // line 231
        echo "
    <!--End: Highlighted -->

    <!--Start: Title -->

    ";
        // line 236
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 237
            echo "      <div id=\"page-title\">
        <div id=\"page-title-inner\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                ";
            // line 242
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 249
        echo "
    <!--End: Title -->

    <div class=\"container\">
      <div class=\"parallax-region\">

        <!--Start: Breadcrumb -->

        ";
        // line 257
        if ( !($context["is_front"] ?? null)) {
            // line 258
            echo "          <div class=\"row\">
            <div class=\"col-md-12\">";
            // line 259
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "</div>
          </div>
        ";
        }
        // line 262
        echo "
        <!--End: Breadcrumb -->

        <div class=\"row layout\">

          <!--Start: Sidebar -->

          ";
        // line 269
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 270
            echo "            <div class=\"sidebar\">
              <div class=";
            // line 271
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo "> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo " </div>
            </div>
          ";
        }
        // line 274
        echo "
          <!--End: Sidebar -->

          <!--End: Content -->

          ";
        // line 279
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 280
            echo "
            <div class=\"content_layout\">

              <div class=";
            // line 283
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo "> 

                <!-- Start: Slider -->

                ";
            // line 287
            if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
                // line 288
                echo "                  <div class=\"flexslider wow- bounceInUp\">
                    <ul class=\"slides\">
                      ";
                // line 290
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                    // line 291
                    echo "                        ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"]));
                    echo "
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 293
                echo "                    </ul>
                  </div>
                ";
            }
            // line 296
            echo "
                <!-- End: Slider -->

                <!-- Start: Home page message -->

                ";
            // line 301
            if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "homepagemessage", []))) {
                // line 302
                echo "                  ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "homepagemessage", [])), "html", null, true);
                echo "
                ";
            }
            // line 304
            echo "
                <!--End: Home page message -->

                ";
            // line 307
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo " 

              </div>

            </div>

          ";
        }
        // line 314
        echo "
          <!--End: Content -->

          <!--Start: Sidebar -->

          ";
        // line 319
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 320
            echo "
            <div class=\"sidebar\">
              <div class=";
            // line 322
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo "> 
            \t ";
            // line 323
            if (($context["show_social_icon"] ?? null)) {
                // line 324
                echo "              \t   <div class=\"social-media\">
\t\t     <h2 class=\"title\">Follow Us</h2>
\t\t       ";
                // line 326
                if (($context["rss_url"] ?? null)) {
                    // line 327
                    echo "\t\t\t <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                    echo "\" class=\"rss rss-feed\" target=\"_blank\"><i class=\"fa fa-rss rss-feed\"></i></a>
                       ";
                }
                // line 329
                echo "                       ";
                if (($context["facebook_url"] ?? null)) {
                    // line 330
                    echo "                  \t <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                    echo "\"  class=\"facebook fb\" target=\"_blank\" ><i class=\"fa fa-facebook fb\"></i></a>
                       ";
                }
                // line 332
                echo "                       ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 333
                    echo "                  \t <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
                    echo "\"  class=\"google-plus gplus\" target=\"_blank\" ><i class=\"fa fa-google-plus gplus\"></i></a>
                       ";
                }
                // line 335
                echo "                       ";
                if (($context["twitter_url"] ?? null)) {
                    // line 336
                    echo "                  \t <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                    echo "\" class=\"twitter tw\" target=\"_blank\" ><i class=\"fa fa-twitter tw\"></i></a>
                       ";
                }
                // line 338
                echo "                       ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 339
                    echo "                  \t <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                    echo "\" class=\"linkedin ln\" target=\"_blank\"><i class=\"fa fa-linkedin ln\"></i></a>
                       ";
                }
                // line 341
                echo "                       ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 342
                    echo "                  \t <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
                    echo "\" class=\"pinterest pin\" target=\"_blank\" ><i class=\"fa fa-pinterest pin\"></i></a>
                       ";
                }
                // line 344
                echo "              \t      </div>
            \t    ";
            }
            // line 346
            echo "\t\t ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo " 
\t      </div>
            </div>
            
          ";
        }
        // line 351
        echo "
          <!--End: Sidebar -->

        </div>
      </div>
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Services -->

";
        // line 365
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "services", []))) {
            // line 366
            echo "
  <div class=\"parallax-widget- two\" id=\"services\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInDown\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 372
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 379
        echo "
<!--End: Services -->


<!-- Start: Bottom widgets -->

";
        // line 385
        if ((($context["is_front"] ?? null) && ((($this->getAttribute(($context["page"] ?? null), "bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_third", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_forth", [])))) {
            // line 386
            echo "  <div class=\"parallax-widget- four\" id=\"products\">    
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInDown\">
        <div class=\"row\">

          <!-- Start: Bottom First -->          
          ";
            // line 392
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                // line 393
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 394
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 396
            echo "          
          <!-- End: Bottom First -->

          <!-- Start: Bottom Second -->
          ";
            // line 400
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", [])) {
                // line 401
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 402
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_second", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 404
            echo "          
          <!-- End: Bottom Second -->

          <!-- Start: Bottom third -->          
          ";
            // line 408
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", [])) {
                // line 409
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 410
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_third", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 412
            echo "          
          <!-- End: Bottom Third -->

          <!-- Start: Bottom Forth -->
          ";
            // line 416
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])) {
                // line 417
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 418
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 421
            echo "          <!-- End: Bottom Forth -->

        </div>
      </div>
    </div>
  </div>
";
        }
        // line 428
        echo "
<!--End: Bottom widgets -->


<!-- Start: Footer widgets -->

";
        // line 434
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", []))) {
            // line 435
            echo "  <div class=\"parallax-widget- six\" id=\"footer\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInUp\">  
        <div class=\"row\">

          <!-- Start: Footer First -->
          ";
            // line 441
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 442
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 443
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 446
            echo "          <!-- End: Footer First -->

          <!-- Start :Footer Second -->
          ";
            // line 449
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 450
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 451
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 454
            echo "          <!-- End: Footer Second -->

          <!-- Start: Footer third -->
          ";
            // line 457
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 458
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 459
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 462
            echo "          <!-- End: Footer Third -->

\t  <!-- Start: Footer fourth -->
          ";
            // line 465
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) {
                // line 466
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 467
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 470
            echo "          <!-- End: Footer Fourth -->
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 476
        echo "
<!--End: Footer widgets -->


<!-- Start: Clients -->

";
        // line 482
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "clients", []))) {
            // line 483
            echo "  <div class=\"parallax-widget- three\" id=\"clients\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInDown\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 488
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "clients", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 495
        echo "
<!--End: Clients -->


<!-- Start: Map -->

";
        // line 501
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "google_map", []))) {
            // line 502
            echo "  <div class=\"map-and-address\">
    <div class=\"google_map\">";
            // line 503
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "google_map", [])), "html", null, true);
            echo "</div>
  </div>
";
        }
        // line 506
        echo "
<!--End: Map -->


<!-- Start: Copyright -->
<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Copyright -->
      <div class=\"col-sm-6\">
        <p>Copyright © ";
        // line 517
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</p>
      </div>
      <!-- End: Copyright -->

      <!-- Start: Credit link -->
      ";
        // line 522
        if (($context["show_credit_link"] ?? null)) {
            // line 523
            echo "        <div class=\"col-sm-6\">
          <p class=\"credit-link\">Designed By Ana Budimir</p>
        </div>
      ";
        }
        // line 527
        echo "      <!-- End: Credit link -->
      
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/ana_zymphonies/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  890 => 527,  884 => 523,  882 => 522,  874 => 517,  861 => 506,  855 => 503,  852 => 502,  850 => 501,  842 => 495,  832 => 488,  825 => 483,  823 => 482,  815 => 476,  807 => 470,  801 => 467,  796 => 466,  794 => 465,  789 => 462,  783 => 459,  778 => 458,  776 => 457,  771 => 454,  765 => 451,  760 => 450,  758 => 449,  753 => 446,  747 => 443,  742 => 442,  740 => 441,  732 => 435,  730 => 434,  722 => 428,  713 => 421,  707 => 418,  702 => 417,  700 => 416,  694 => 412,  688 => 410,  683 => 409,  681 => 408,  675 => 404,  669 => 402,  664 => 401,  662 => 400,  656 => 396,  650 => 394,  645 => 393,  643 => 392,  635 => 386,  633 => 385,  625 => 379,  615 => 372,  607 => 366,  605 => 365,  589 => 351,  580 => 346,  576 => 344,  570 => 342,  567 => 341,  561 => 339,  558 => 338,  552 => 336,  549 => 335,  543 => 333,  540 => 332,  534 => 330,  531 => 329,  525 => 327,  523 => 326,  519 => 324,  517 => 323,  513 => 322,  509 => 320,  507 => 319,  500 => 314,  490 => 307,  485 => 304,  479 => 302,  477 => 301,  470 => 296,  465 => 293,  456 => 291,  452 => 290,  448 => 288,  446 => 287,  439 => 283,  434 => 280,  432 => 279,  425 => 274,  417 => 271,  414 => 270,  412 => 269,  403 => 262,  397 => 259,  394 => 258,  392 => 257,  382 => 249,  372 => 242,  365 => 237,  363 => 236,  356 => 231,  348 => 226,  343 => 223,  341 => 222,  329 => 212,  322 => 207,  315 => 202,  307 => 201,  305 => 200,  299 => 196,  291 => 195,  289 => 194,  284 => 191,  282 => 190,  276 => 186,  274 => 185,  266 => 179,  257 => 173,  251 => 169,  249 => 168,  236 => 157,  230 => 154,  227 => 153,  225 => 152,  217 => 146,  211 => 144,  209 => 143,  191 => 127,  182 => 120,  176 => 117,  173 => 116,  171 => 115,  158 => 104,  154 => 102,  148 => 100,  145 => 99,  139 => 97,  136 => 96,  130 => 94,  127 => 93,  121 => 91,  118 => 90,  112 => 88,  109 => 87,  103 => 85,  101 => 84,  98 => 83,  96 => 82,  91 => 79,  85 => 77,  83 => 76,  80 => 75,  74 => 73,  72 => 72,  61 => 63,  59 => 62,  55 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the Navigation region.
 * - page.page_title: Used by Current page Title.
 * - page.banner: Items for the banner region.
 * - page.highlighted: Items for the highlighted top  region.
 * - page.content_top: The main content top of the current page.
 * - page.help: Item for the help region.
 * - page.breadcrumb: Item for the Breadcrumb region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.content_bottom: Items for the bottom in content region.
 * - page.footer_top: Items for the footer top region.
 * - page.footer_first: Items for the footer first region.
 * - page.footer_second: Items for the footer Second region.
 * - page.footer_third: Items for the footer third region.
 * - page.footer_bottom: Items for the footer bottom region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}


{% if page.contact_email or page.top_menu %}
  <div class=\"top-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Contact Phone & Email -->

        <div class=\"col-sm-9\">
          
          <div class=\"top-blocks\">
            {% if page.top_menu %}
              {{ page.top_menu }}
            {% endif %}

            {% if page.contact_email %}
              {{ page.contact_email }}
            {% endif %}

            <!-- Start: Social media icons -->

            {% if show_social_icon %}
              <div class=\"social-media\">
                {% if facebook_url %}
                  <a href=\"{{ facebook_url }}\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
                {% endif %}
                {% if google_plus_url %}
                  <a href=\"{{ google_plus_url }}\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
                {% endif %}
                {% if twitter_url %}
                  <a href=\"{{ twitter_url }}\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
                {% endif %}
                {% if linkedin_url %}
                  <a href=\"{{ linkedin_url }}\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
                {% endif %}
                {% if pinterest_url %}
                  <a href=\"{{ pinterest_url }}\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
                {% endif %}
                {% if rss_url %}
                  <a href=\"{{ rss_url }}\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
                {% endif %}
              </div>
            {% endif %}

            <!-- End: Social media icons -->

          </div>

        </div>

        <!-- End: Contact Phone & Email -->

\t<!-- Start: Top menu -->

        {% if page.search %}
          <div class=\"col-sm-3\">
            {{ page.search }}
          </div>
        {% endif %}

        <!-- End: Top menu -->

      </div>
    </div>
  </div>
{% endif %}


<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Header -->

        <div class=\"navbar-header col-md-3\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          {% if page.header %}
            {{ page.header }}
          {% endif %}
        </div>

        <!-- End: Header -->

        <!-- Start: Header Ads -->

        {% if page.header_ads %}
          <div class=\"col-md-9\">
            {{ page.header_ads }}
          </div>
        {% endif %}

        <!-- End: Header Ads -->

        </div>
      </div>
    </nav>
</header>


<!-- End: Main menu -->

{% if page.primary_menu %}
  <div class=\"container\">
    <div class=\"main-menu\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          {{ page.primary_menu }}
        </div>
      </div>
    </div>
  </div>
{% endif %}

<!-- End: Main menu -->


<!-- Start: Top widget -->

{% if (is_front) and (page.topwidget_first or page.topwidget_second) %}
  <div class=\"parallax-widget- zero\" id=\"about\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInDown\">

        {% if (is_front) and (page.topwidget_first or page.topwidget_second) %}
          <div class=\"row clearfix topwidget\">

            <!-- Start: Top widget first -->          
            {% if page.topwidget_first %}
              <div class = {{ topwidget_class }}>{{ page.topwidget_first }}</div>
            {% endif %}          
            <!-- End: Top widget first --> 

            <!-- Start: Top widget second -->          
            {% if page.topwidget_second %}
              <div class = {{ topwidget_class }}>{{ page.topwidget_second }}</div>
            {% endif %}          
            <!-- End: Top widget second --> 

          </div>
        {% endif %}

      </div>
    </div>
  </div>
{% endif %}

<!--End: Top widget -->


<!-- Start: Main content -->
<div class=\"parallax-widget- one\">
  <div class=\"parallax-region- wow- bounceInDown\">
    
    <!--Start: Highlighted -->

    {% if page.highlighted %}
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            {{ page.highlighted }}
          </div>
        </div>
      </div>
    {% endif %}

    <!--End: Highlighted -->

    <!--Start: Title -->

    {%  if page.page_title and not is_front %}
      <div id=\"page-title\">
        <div id=\"page-title-inner\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                {{ page.page_title }}
              </div>
            </div>
          </div>
        </div>
      </div>
    {% endif %}

    <!--End: Title -->

    <div class=\"container\">
      <div class=\"parallax-region\">

        <!--Start: Breadcrumb -->

        {% if not is_front %}
          <div class=\"row\">
            <div class=\"col-md-12\">{{ page.breadcrumb }}</div>
          </div>
        {% endif %}

        <!--End: Breadcrumb -->

        <div class=\"row layout\">

          <!--Start: Sidebar -->

          {% if page.sidebar_first %}
            <div class=\"sidebar\">
              <div class={{sidebarfirst}}> {{page.sidebar_first}} </div>
            </div>
          {% endif %}

          <!--End: Sidebar -->

          <!--End: Content -->

          {% if page.content %}

            <div class=\"content_layout\">

              <div class={{contentlayout}}> 

                <!-- Start: Slider -->

                {% if is_front and show_slideshow%}
                  <div class=\"flexslider wow- bounceInUp\">
                    <ul class=\"slides\">
                      {% for slider_contents in slider_content %}
                        {{ slider_contents | raw }}
                      {% endfor %}
                    </ul>
                  </div>
                {% endif %}

                <!-- End: Slider -->

                <!-- Start: Home page message -->

                {% if is_front and page.homepagemessage %}
                  {{ page.homepagemessage }}
                {% endif %}

                <!--End: Home page message -->

                {{page.content}} 

              </div>

            </div>

          {% endif %}

          <!--End: Content -->

          <!--Start: Sidebar -->

          {% if page.sidebar_second %}

            <div class=\"sidebar\">
              <div class={{sidebarsecond}}> 
            \t {% if show_social_icon %}
              \t   <div class=\"social-media\">
\t\t     <h2 class=\"title\">Follow Us</h2>
\t\t       {% if rss_url %}
\t\t\t <a href=\"{{ rss_url }}\" class=\"rss rss-feed\" target=\"_blank\"><i class=\"fa fa-rss rss-feed\"></i></a>
                       {% endif %}
                       {% if facebook_url %}
                  \t <a href=\"{{ facebook_url }}\"  class=\"facebook fb\" target=\"_blank\" ><i class=\"fa fa-facebook fb\"></i></a>
                       {% endif %}
                       {% if google_plus_url %}
                  \t <a href=\"{{ google_plus_url }}\"  class=\"google-plus gplus\" target=\"_blank\" ><i class=\"fa fa-google-plus gplus\"></i></a>
                       {% endif %}
                       {% if twitter_url %}
                  \t <a href=\"{{ twitter_url }}\" class=\"twitter tw\" target=\"_blank\" ><i class=\"fa fa-twitter tw\"></i></a>
                       {% endif %}
                       {% if linkedin_url %}
                  \t <a href=\"{{ linkedin_url }}\" class=\"linkedin ln\" target=\"_blank\"><i class=\"fa fa-linkedin ln\"></i></a>
                       {% endif %}
                       {% if pinterest_url %}
                  \t <a href=\"{{ pinterest_url }}\" class=\"pinterest pin\" target=\"_blank\" ><i class=\"fa fa-pinterest pin\"></i></a>
                       {% endif %}
              \t      </div>
            \t    {% endif %}
\t\t {{page.sidebar_second}} 
\t      </div>
            </div>
            
          {% endif %}

          <!--End: Sidebar -->

        </div>
      </div>
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Services -->

{% if is_front and page.services %}

  <div class=\"parallax-widget- two\" id=\"services\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInDown\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            {{ page.services }}
          </div>
        </div>
      </div>
    </div>
  </div>
{% endif %}

<!--End: Services -->


<!-- Start: Bottom widgets -->

{% if is_front and (page.bottom_first or page.bottom_second or page.bottom_third or page.bottom_forth) %}
  <div class=\"parallax-widget- four\" id=\"products\">    
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInDown\">
        <div class=\"row\">

          <!-- Start: Bottom First -->          
          {% if page.bottom_first %}
            <div class = {{ bottom_class }}>
              {{ page.bottom_first }}
            </div>
          {% endif %}          
          <!-- End: Bottom First -->

          <!-- Start: Bottom Second -->
          {% if page.bottom_second %}
            <div class = {{ bottom_class }}>
              {{ page.bottom_second }}
            </div>
          {% endif %}          
          <!-- End: Bottom Second -->

          <!-- Start: Bottom third -->          
          {% if page.bottom_third %}
            <div class = {{ bottom_class }}>
              {{ page.bottom_third }}
            </div>
          {% endif %}          
          <!-- End: Bottom Third -->

          <!-- Start: Bottom Forth -->
          {% if page.bottom_forth %}
            <div class = {{ bottom_class }}>
              {{ page.bottom_forth }}
            </div>
          {% endif %}
          <!-- End: Bottom Forth -->

        </div>
      </div>
    </div>
  </div>
{% endif %}

<!--End: Bottom widgets -->


<!-- Start: Footer widgets -->

{% if  page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}
  <div class=\"parallax-widget- six\" id=\"footer\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInUp\">  
        <div class=\"row\">

          <!-- Start: Footer First -->
          {% if page.footer_first %}
            <div class = {{ footer_first_class }}>
              {{ page.footer_first }}
            </div>
          {% endif %}
          <!-- End: Footer First -->

          <!-- Start :Footer Second -->
          {% if page.footer_second %}
            <div class = {{ footer_class }}>
              {{ page.footer_second }}
            </div>
          {% endif %}
          <!-- End: Footer Second -->

          <!-- Start: Footer third -->
          {% if page.footer_third %}
            <div class = {{ footer_class }}>
              {{ page.footer_third }}
            </div>
          {% endif %}
          <!-- End: Footer Third -->

\t  <!-- Start: Footer fourth -->
          {% if page.footer_fourth %}
            <div class = {{ footer_class }}>
              {{ page.footer_fourth }}
            </div>
          {% endif %}
          <!-- End: Footer Fourth -->
        </div>
      </div>
    </div>
  </div>
{% endif %}

<!--End: Footer widgets -->


<!-- Start: Clients -->

{% if is_front and page.clients %}
  <div class=\"parallax-widget- three\" id=\"clients\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInDown\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            {{ page.clients }}
          </div>
        </div>
      </div>
    </div>
  </div>
{% endif %}

<!--End: Clients -->


<!-- Start: Map -->

{% if is_front and page.google_map%}
  <div class=\"map-and-address\">
    <div class=\"google_map\">{{ page.google_map }}</div>
  </div>
{% endif %}

<!--End: Map -->


<!-- Start: Copyright -->
<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Copyright -->
      <div class=\"col-sm-6\">
        <p>Copyright © {{ \"now\"|date(\"Y\") }}. All rights reserved.</p>
      </div>
      <!-- End: Copyright -->

      <!-- Start: Credit link -->
      {% if show_credit_link %}
        <div class=\"col-sm-6\">
          <p class=\"credit-link\">Designed By Ana Budimir</p>
        </div>
      {% endif %}
      <!-- End: Credit link -->
      
    </div>
  </div>
</div>
", "themes/custom/ana_zymphonies/templates/layout/page--front.html.twig", "C:\\xampp\\htdocs\\newslive\\themes\\custom\\ana_zymphonies\\templates\\layout\\page--front.html.twig");
    }
}
