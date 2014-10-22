<?php

/* AcmeDemoBundle:Main:teacher.html.twig */
class __TwigTemplate_ba833be33c61fb7b60e1a4b33d8bbb9d95645721050da420bee8a421cc018b22 extends Twig_Template
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

    <title>Teachers</title>

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
     <form action=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("teacher", array("slug" => "teacher"));
        echo "\" method=\"post\">
  <!-- Database Connection -->
    
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
        // line 48
        echo $this->env->getExtension('routing')->getPath("index", array("slug" => "index"));
        echo "\">ICT Student Engagement</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("index", array("slug" => "index"));
        echo "\">Home</a>
                    </li>
\t\t\t\t\t<li>
                        <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("parent", array("slug" => "parent"));
        echo "\">Parent</a>
                    </li>
                    <li class=\"active\">
                        <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("teacher", array("slug" => "teacher"));
        echo "\">Teacher</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("advisor", array("slug" => "advisor"));
        echo "\">Career Advisor</a>
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
                <h1 class=\"page-header\" style=\"color:#FF00FF\">ICT for teachers
                    
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("index", array("slug" => "index"));
        echo "\">Home</a>
                    </li>
                    <li class=\"active\">Services</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Image Header -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <img class=\"img-responsive\" src=\"/bundles/acmedemo/images/teacher.jpeg\" alt=\"\">
            </div>
        </div>
        <!-- /.row -->

        <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
         <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\" style=\"color:#FF00FF\">Information and Communication Technology</h2>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading\">
                       <img src=\"/bundles/acmedemo/images/general-01.jpg\" alt=\"\">
                    </div>
                    <div class=\"panel-body\">
                       <h4>General</h4>
                       <p>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 116
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            echo "\t\t
\t\t\t\t\t\t\t\t";
            // line 117
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "type", array()) == "general")) {
                echo "\t
\t\t\t\t\t\t\t\t\t<a href =\"";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "url", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t";
            }
            // line 119
            echo "\t
\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                       </p>             
\t\t\t\t\t   
                     
                        <button type=\"submit\" name=\"general\" class=\"btn btn-primary btn-lg btn-block\">
                         General programs
                       </button>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading\">

                        <img src=\"/bundles/acmedemo/images/techwomen.gif\" alt=\"\">
                  
                    </div>
                    <div class=\"panel-body\">
                        <h4>Women's Program</h4>
                        <p>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 141
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            echo "\t\t
\t\t\t\t\t\t\t\t";
            // line 142
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "type", array()) == "women")) {
                echo "\t
\t\t\t\t\t\t\t\t\t<a href =\"";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "url", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t";
            }
            // line 144
            echo "\t
\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t</p>
                        <button type=\"submit\" name=\"women\" class=\"btn btn-primary btn-lg btn-block\">
                         Program for women
                       </button>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading\">
                     <img src=\"/bundles/acmedemo/images/internship.png\" alt=\"\">
                    </div>
                    <div class=\"panel-body\">
                        <h4>Internship</h4>
                        <p>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 163
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            echo "\t\t
\t\t\t\t\t\t\t\t";
            // line 164
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "type", array()) == "internship")) {
                echo "\t
\t\t\t\t\t\t\t\t\t<a href =\"";
                // line 165
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "url", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t";
            }
            // line 166
            echo "\t
\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t</p>
                        <button type=\"submit\" name=\"internship\" class=\"btn btn-primary btn-lg btn-block\">
                         Internships
                       </button>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading\">
                        
                               <img src=\"/bundles/acmedemo/images/uni.jpeg\">
                    
                    </div>
                    <div class=\"panel-body\">
                        <h4>University</h4>
                        <p></p>
                       <button type=\"submit\" name=\"internship\" class=\"btn btn-primary btn-lg btn-block\">
                        Universities
                       </button>
                    </div>
                </div>
            </div>  
        </div>

        <!-- Service Tabs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\" style=\"color:#FF00FF\">How we help teachers</h2>
            </div>
            <div class=\"col-lg-12\">

                <ul id=\"myTab\" class=\"nav nav-tabs nav-justified\">
                    <li class=\"active\"><a href=\"#service-one\" data-toggle=\"tab\"> Australian Curriculum</a>
                    </li>
                    <li class=\"\"><a href=\"#service-two\" data-toggle=\"tab\"> Code Club</a>
                    </li>
                    <li class=\"\"><a href=\"#service-three\" data-toggle=\"tab\"> ICT in Schools</a>
                    </li>
                    <li class=\"\"><a href=\"#service-four\" data-toggle=\"tab\"> ICT in Primary Education </a>
                    </li>
                </ul>

                <div id=\"myTabContent\" class=\"tab-content\">
                    <div class=\"tab-pane fade active in\" id=\"service-one\">
                        <h4></h4>
                        <p>Digital Technologies: developed by the Australian Curriculum Assessment and Reporting Authority (ACARA) and published on the Australian Curriculum website as available for use; the Australian Curriculum: Digital Technologies is awaiting final endorsement.</p>
                    </div>
                    <div class=\"tab-pane fade\" id=\"service-two\">
                        <h4></h4>
                        <p>CodeClubs introduce young students to computational thinking and basic coding. Structured code clubs, such as CodeClub and CoderDojo, offer free, ready-made, materials and courses. Often schools are not aware these clubs are available – feel free to reach out to your local school and see if they are interested.</p>
                    </div>
                    <div class=\"tab-pane fade\" id=\"service-three\">
                        <h4></h4>
                        <p>Digital Careers has collaborated with CSIRO’s successful ICT in Schools program to increase the level of industry engagement in our local school system. Mentors bring up-to-date industry knowledge into the classrooms – have you thought about working with an industry professional to assess year 12 assignments, gain real world case studies for IT technicalities or involving someone to host a Code Club at your local school? </p>
                    </div>
                    <div class=\"tab-pane fade\" id=\"service-four\">
                        <h4></h4>
                        <p>Transforming children’s learning across the curriculum (MOOC):  The Institute of Education, University of London and the UNESCO Institute for IT in Education are collaborating to run this professional development course for teachers, headteachers and policymakers working in the Primary Education sector.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Service List -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
      
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
</form>
</body>

</html>

";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Main:teacher.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  276 => 168,  269 => 166,  262 => 165,  258 => 164,  252 => 163,  233 => 146,  226 => 144,  219 => 143,  215 => 142,  209 => 141,  187 => 121,  180 => 119,  173 => 118,  169 => 117,  163 => 116,  129 => 85,  104 => 63,  98 => 60,  92 => 57,  86 => 54,  77 => 48,  60 => 34,  26 => 2,  20 => 1,);
    }
}
