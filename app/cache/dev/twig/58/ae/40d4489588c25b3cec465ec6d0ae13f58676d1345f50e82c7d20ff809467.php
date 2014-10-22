<?php

/* AcmeDemoBundle:Main:testimonial.html.twig */
class __TwigTemplate_58ae40d4489588c25b3cec465ec6d0ae13f58676d1345f50e82c7d20ff809467 extends Twig_Template
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
                    <li>
                        <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("index", array("slug" => "index"));
        echo "\">Home</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("parent", array("slug" => "parent"));
        echo "\">Parent</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("teacher", array("slug" => "teacher"));
        echo "\">Teacher</a>
                    </li>
                    <li class=\"dropdown active\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Portfolio <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"active\">
                                <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("testimonial", array("slug" => "testimonial"));
        echo "\">1 Column Portfolio</a>
                            </li>
                            
                        </ul>
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
                <h1 class=\"page-header\" style=\"color:#FF00FF\">Testimonials
                    <small></small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("index", array("slug" => "index"));
        echo "\">Home</a>
                    </li>
                    <li class=\"active\">Testimonies</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Testimonial One -->
        <div class=\"row\">
            <div class=\"col-md-7\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-hover\" src=\"/bundles/acmedemo/images/testimonial-01.png\" width=\"300\" height=\"500\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-5\">
                <h3 style=\"color:#FF00FF\">Roderick Marc Joseph</h3>
                <h4></h4>
                <p style=\"color:#009900\">I am an international student from Malaysia currently pursuing my second year in Bachelors of Information Technology in La Trobe University, Melbourne, Australia. The first two years in La Trobe in the Computer Science department has been amazing and interesting. I have always liked to work around computers and this university has given me a chance to work closely with the computers and the development process within computers. It has also given me a chance to learn different programming languages and enhancing my knowledge within the computer system. </p>
\t\t\t\t<p style=\"color:#FF00FF\">Bachelor of Information Technology <br>
\t\t\t\t   La Trobe University <br>
\t\t\t\t   Melbourne, Australia
                </p>
                
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!--Testimonial two -->
        <div class=\"row\">
            <div class=\"col-md-7\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-hover\" src=\"/bundles/acmedemo/images/testimonial-02.png\" width=\"300\" height=\"500\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-5\">
                <h3 style=\"color:#FF00FF\">Le Ngoc Dung</h3>
                <h4></h4>
                <p style=\"color:#009900\">I am from Vietnam and I am currently studying in my third year of my degree. I am doing my Bachelor of Computer Science in La Trobe University and it has been an amazing journey so far. The department of Computer Science and Technology has thought me a lot since I first joined. I have learnt many programming languages and a lot of system development processes in my 3 years in this university. I have also learnt how to interact with others using technology widely within the department. The lecturers and tutors have nurtured me well to make it a good experience.</p>
                <p style=\"color:#FF00FF\">Bachelor of Information Technology <br>
\t\t\t\t   La Trobe University <br>
\t\t\t\t   Melbourne, Australia
                </p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Testimonial three  -->
        
        <!-- /.row -->

        <hr>

        <!-- Testimonial four  -->
       
        <!-- /.row -->

        <hr>

        <!-- Testimonial five -->
        
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        
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

</body>

</html>

";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Main:testimonial.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  129 => 88,  102 => 64,  93 => 58,  87 => 55,  81 => 52,  72 => 46,  26 => 2,  20 => 1,);
    }
}
