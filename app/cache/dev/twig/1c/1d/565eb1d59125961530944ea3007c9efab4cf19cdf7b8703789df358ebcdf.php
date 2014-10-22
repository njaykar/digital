<?php

/* AcmeDemoBundle:Main:contact.html.twig */
class __TwigTemplate_1c1d565eb1d59125961530944ea3007c9efab4cf19cdf7b8703789df358ebcdf extends Twig_Template
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
        $this->displayBlock('html', $context, $blocks);
    }

    public function block_html($context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"/bundles/acmedemo/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"/bundles/acmedemo/css/modern-business.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"/bundles/acmedemo/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

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
        // line 46
        echo $this->env->getExtension('routing')->getPath("index", array("slug" => "index"));
        echo "\">ICT Student Engagement</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t     <li>
                        <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("index", array("slug" => "index"));
        echo "\">Home</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("about", array("slug" => "about"));
        echo "\">About</a>
                    </li>
                    
                    <li class=\"active\">
                        <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("contact", array("slug" => "contact"));
        echo "\">Contact</a>
                    </li>
                    
                    
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class=\"container\">

        <!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Contact
                    <small>Subheading</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("index", array("slug" => "index"));
        echo "\">Home</a>
                    </li>
                    <li class=\"active\">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class=\"row\">
            <!-- Map Column -->
            <div class=\"col-md-8\">
                <!-- Embedded Google Map -->
                <iframe width=\"100%\" height=\"400px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"\"></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class=\"col-md-4\">
                <h3>Contact Details</h3>
                <p>
                    Melbourne<br>VIC, Australia<br>
                </p>
                <p><image src = \"/bundles/acmedemo/images/phone.png\" class=\"fa fa-phone\"></image> 
                    <abbr title=\"Phone\">P</abbr>: (123) 456-7890</p>
                <p><image src = \"/bundles/acmedemo/images/mail.png\" class=\"fa fa-envelope-o\"></image> 
                    <abbr title=\"Email\">E</abbr>: <a href=\"mailto:name@example.com\">name@example.com</a>
                </p>
                <p>
                    <abbr title=\"Hours\">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
                <ul class=\"list-unstyled list-inline list-social-icons\">
                    <li>
                        <a href=\"#\"><image src = \"/bundles/acmedemo/images/facebook-wrap.png\" class=\"fa fa-facebook-square fa-2x\"></image></a>
                    </li>
                    <li>
                        <a href=\"#\"><image src = \"/bundles/acmedemo/images/twitter-wrap.png\" class=\"fa fa-twitter-square fa-2x\"></image></a>
                    </li>
\t\t\t\t\t<li>
                        <a href=\"#\"><image src = \"/bundles/acmedemo/images/linkedin-wrap.png\" class=\"fa fa-linkedin-square fa-2x\"></image></a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class=\"row\">
            <div class=\"col-md-8\">
                <h3>Send us a Message</h3>
                <form name=\"sentMessage\" id=\"contactForm\" novalidate>
                    <div class=\"control-group form-group\">
                        <div class=\"controls\">
                            <label>Full Name:</label>
                            <input type=\"text\" class=\"form-control\" id=\"name\" required data-validation-required-message=\"Please enter your name.\">
                            <p class=\"help-block\"></p>
                        </div>
                    </div>
                    <div class=\"control-group form-group\">
                        <div class=\"controls\">
                            <label>Phone Number:</label>
                            <input type=\"tel\" class=\"form-control\" id=\"phone\" required data-validation-required-message=\"Please enter your phone number.\">
                        </div>
                    </div>
                    <div class=\"control-group form-group\">
                        <div class=\"controls\">
                            <label>Email Address:</label>
                            <input type=\"email\" class=\"form-control\" id=\"email\" required data-validation-required-message=\"Please enter your email address.\">
                        </div>
                    </div>
                    <div class=\"control-group form-group\">
                        <div class=\"controls\">
                            <label>Message:</label>
                            <textarea rows=\"10\" cols=\"100\" class=\"form-control\" id=\"message\" required data-validation-required-message=\"Please enter your message\" maxlength=\"999\" style=\"resize:none\"></textarea>
                        </div>
                    </div>
                    <div id=\"success\"></div>
                    <!-- For success/fail messages -->
                    <button type=\"submit\" class=\"btn btn-primary\">Send Message</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

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
    <script src=\"/bundles/acmedemo/js/jquery-1.11.0.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"/bundles/acmedemo/js/bootstrap.min.js\"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src=\"/bundles/acmedemo/js/jqBootstrapValidation.js\"></script>
    <script src=\"/bundles/acmedemo/js/contact_me.js\"></script>

</body>

</html>

";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Main:contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  119 => 81,  94 => 59,  87 => 55,  81 => 52,  72 => 46,  26 => 2,  20 => 1,);
    }
}
