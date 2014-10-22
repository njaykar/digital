<?php

/* AcmeDemoBundle:Main:index.html.twig */
class __TwigTemplate_5be6f33ea082dbd9b8f8ebcbff06a1eae0746d0a2e801d60a96c13d66e1e0052 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html' => array($this, 'block_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('html', $context, $blocks);
    }

    public function block_html($context, array $blocks = array())
    {
        echo " 
<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>ICT Digital Careers</title>

    <!-- Bootstrap Core CSS -->
   ";
        // line 17
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c893489_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c893489_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c893489_bootstrap.min_1.css");
            // line 19
            echo "    <link type=\"text/css\" media=\"screen\" rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
\t ";
        } else {
            // asset "c893489"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c893489") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c893489.css");
            echo "    <link type=\"text/css\" media=\"screen\" rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
\t ";
        }
        unset($context["asset_url"]);
        // line 21
        echo "
    <!-- Custom CSS -->
\t";
        // line 23
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "155824f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_155824f_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/155824f_modern-business_1.css");
            // line 25
            echo "    <link type=\"text/css\" media=\"screen\" rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
\t ";
        } else {
            // asset "155824f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_155824f") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/155824f.css");
            echo "    <link type=\"text/css\" media=\"screen\" rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
\t ";
        }
        unset($context["asset_url"]);
        // line 27
        echo "    
    <!-- Custom Fonts -->
\t\t";
        // line 29
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f928933_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f928933_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f928933_font-awesome.min_1.css");
            // line 31
            echo "    <link type=\"text/css\" media=\"screen\" rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
\t ";
        } else {
            // asset "f928933"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f928933") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f928933.css");
            echo "    <link type=\"text/css\" media=\"screen\" rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
\t ";
        }
        unset($context["asset_url"]);
        // line 33
        echo "    
\t";
        // line 34
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c9109f3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c9109f3_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c9109f3_part_1_bootstrap_1.js");
            // line 35
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "c9109f3_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c9109f3_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c9109f3_part_1_bootstrap.min_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "c9109f3_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c9109f3_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c9109f3_part_1_contact_me_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "c9109f3_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c9109f3_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c9109f3_part_1_jqBootstrapValidation_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "c9109f3_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c9109f3_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c9109f3_part_1_jquery-1.11.0_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "c9109f3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c9109f3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c9109f3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        // line 37
        echo "\t
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>
    
\t
    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("index", array("slug" => "index"));
        echo "\">ICT Student Engagement</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("index", array("slug" => "index"));
        echo "\">Home</a>
                    </li>
\t\t\t\t\t <li>
                        <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("about", array("slug" => "about"));
        echo "\">About</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("parent", array("slug" => "parent"));
        echo "\">Parent</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("teacher", array("slug" => "teacher"));
        echo "\">Teacher</a>
                    </li>
\t\t\t\t\t <li>
                        <a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("advisor", array("slug" => "advisor"));
        echo "\">Career Advisor</a>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Testimonials <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("testimonial", array("slug" => "testimonial"));
        echo "\">Testimonial</a>
                            </li>
                            <li>
                                
                        </ul>
                    </li>
            <!--       <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Blog <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"blog-home-1.html\">Blog Home 1</a>
                            </li>
                            <li>
                                <a href=\"blog-home-2.html\">Blog Home 2</a>
                            </li>
                            <li>
                                <a href=\"blog-post.html\">Blog Post</a>
                            </li>
                        </ul>
                    </li>  
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Other Pages <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"full-width.html\">Full Width Page</a>
                            </li>
                            <li>
                                <a href=\"sidebar.html\">Sidebar Page</a>
                            </li>
                            <li>
                                <a href=\"faq.html\">FAQ</a>
                            </li>
                            <li>
                                <a href=\"404.html\">404</a>
                            </li>
                            <li>
                                <a href=\"pricing.html\">Pricing Table</a>
                            </li>
                        </ul>
                    </li>  -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id=\"myCarousel\" class=\"carousel slide\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <div class=\"fill\" style=\"background-image:url(/bundles/acmedemo/images/fill-01.jpg);\"></div>
                <div class=\"carousel-caption\">
                    <h2><a href=\"http://www.digital.vic.gov.au/strategies/ict-strategy/\">ICT Strategy</a></h2>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"fill\" style=\"background-image:url(/bundles/acmedemo/images/fill-02.jpg);\"></div>
                <div class=\"carousel-caption\">
                 <a href=\"http://australia.gov.au/topics/employment-and-workplace/australian-government-jobs/ict-entry-level-programs\"> <h2>ICT Programs</h2> </a>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"fill\" style=\"background-image:url(/bundles/acmedemo/images/fill-03.jpg);\"></div>
                <div class=\"carousel-caption\">
                   <a href=\"http://www.graduateopportunities.com/employers/australian-govt-ict/\"> <h2>ICT Internships</h2></a>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
            <span class=\"icon-prev\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
            <span class=\"icon-next\"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class=\"container\">

        <!-- Marketing Icons Section -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\" style=\"color:#FF00FF\">
                    Victoria Digital Careers
                </h1>
            </div>
            <div class=\"col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h4 style=\"color:#009900\"><i class=\"fa fa-fw fa-check\"></i> Unlock Doors</h4>
                    </div>
                    <div class=\"panel-body\">
                        <p>With 25 billion devices connected to the internet, just about everything depends on technology. From transport to law, few careers in Australia enjoy so many real world applications and few open as many doors as Information technology.</p>
                    
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h4 style=\"color:#009900\"><i class=\"fa fa-fw fa-gift\"></i> Do Good</h4>
                    </div>
                    <div class=\"panel-body\">
                        <p>With technology you can make a world of difference in your careers in Australia – reducing energy consumption, improving health care, enhancing security, reducing pollution and advancing learning and education.</p>
                       
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h4 style=\"color:#009900\"><i class=\"fa fa-fw fa-compass\"></i> Be Connected</h4>
                    </div>
                    <div class=\"panel-body\">
                        <p>Information technology connects you to a world of smart, creative people who share a passion for new ideas, new inventions and new solutions that impact our lives, our nation and our world. 
\t\t\t\t\t\t
\t\t\t\t\t\t</p>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\" style=\"color:#FF00FF\">ICT Education and Career</h2>
            </div>
            <div class=\"col-md-4 col-sm-6\">
               
\t\t\t\t<img class=\"img-responsive img-portfolio img-hover\" src=\"/bundles/acmedemo/images/pic-01.jpg\" alt=\"\">
                    
                
            </div>
            <div class=\"col-md-4 col-sm-6\">
             <img class=\"img-responsive img-portfolio img-hover\" src=\"/bundles/acmedemo/images/pic-02.jpg\" alt=\"\"> 
                   
               
            </div>
\t\t\t
\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t<img class=\"img-responsive img-portfolio img-hover\" src=\"/bundles/acmedemo/images/pic-04.jpg\" alt=\"\"> 
       
                    
             
            </div>
\t\t\t
        <!--    <div class=\"col-md-4 col-sm-6\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-portfolio img-hover\" src=\"image/pic-03.jpg\" alt=\"\">
                </a>
            </div>
            
          <div class=\"col-md-4 col-sm-6\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-portfolio img-hover\" src=\"http://placehold.it/700x450\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-portfolio img-hover\" src=\"http://placehold.it/700x450\" alt=\"\">
                </a>
            </div> -->
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\" style=\"color:#FF00FF\">About Digital Careers</h2>
            </div>
            <div class=\"col-md-6\">
                <p style=\"color:#009900\">Digital Careers is a collaborative national initiative of industry, research, primary, secondary, and tertiary institutions (universities and TAFE), and government focused on reducing the critical shortage of Australian ICT professionals by raising awareness and interest in ICT careers, and growing and diversifying the pool of tertiary students preparing for a career in the ICT industry.  Digital Careers focuses on primary and secondary school students, parents, teachers and school based career advisors. Funding is provided through the Australian Government as represented by the Department of Communications, NICTA, Universities, Industry and State Governments.</p>
               
                
            </div>
            <div class=\"col-md-6\">
                <img class=\"img-responsive\" src=\"/bundles/acmedemo/images/digital-01.png\" alt=\"\">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class=\"well\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <p>UpComing Events</p>
                </div>
                <div class=\"col-md-4\">
                    <a class=\"btn btn-lg btn-default btn-block\" href=\"#\">Back to Top</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
\t<script type=\"text/javascript\" src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery-1.11.0.js"), "html", null, true);
        echo "\"></script>
    
    <!-- Bootstrap Core JavaScript -->
\t<script type=\"text/javascript\" src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- Script to Activate the Carousel -->
    <script>
    \$('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Main:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  452 => 311,  446 => 308,  220 => 85,  211 => 79,  205 => 76,  199 => 73,  193 => 70,  187 => 67,  178 => 61,  152 => 37,  114 => 35,  110 => 34,  107 => 33,  93 => 31,  89 => 29,  85 => 27,  71 => 25,  67 => 23,  63 => 21,  49 => 19,  45 => 17,  23 => 2,  20 => 1,);
    }
}
