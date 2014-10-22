<?php

/* AcmeDemoBundle:Main:Parent.html.twig */
class __TwigTemplate_a2168d2526c8e37a573443a33c2a61921bb018614a2caef80af81b475a903ba0 extends Twig_Template
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
   <form action=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("parent", array("slug" => "parent"));
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
                    <li class=\"active\">
                        <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("parent", array("slug" => "parent"));
        echo "\">Parent</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("teacher", array("slug" => "teacher"));
        echo "\">Teacher</a>
                    </li>
\t\t\t\t\t <li>
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
                <h1 class=\"page-header\" style=\"color:#FF00FF\">Digital Pathways
                    <small>Information</small>
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
                <img class=\"img-responsive\" src=\"/bundles/acmedemo/images/parent-01.jpeg\" alt=\"\">
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
\t\t\t\t\t\t\t                    
\t\t                    \t
\t\t\t\t\t\t\t\t";
        // line 117
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            echo "\t\t
\t\t\t\t\t\t\t\t";
            // line 118
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "type", array()) == "general")) {
                echo "\t
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parent", array("name" => $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "name", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "url", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t";
            }
            // line 120
            echo "\t
\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                        
                      
                        
                       </p>             
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

                        <img src=\"/bundles/acmedemo/images/techwomen.gif\">
                  
                    </div>
                    <div class=\"panel-body\">
                        <h4>Women's Program</h4>
                        <p>
\t\t\t\t\t\t
\t\t\t\t\t\t \t
\t\t\t\t\t\t\t\t";
        // line 146
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            echo "\t\t
\t\t\t\t\t\t\t\t";
            // line 147
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "type", array()) == "women")) {
                echo "\t
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 148
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parent", array("name" => $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "name", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "url", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t";
            }
            // line 149
            echo "\t
\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
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
                      <img src=\"/bundles/acmedemo/images/internship.png\">
                    </div>
                    <div class=\"panel-body\">
                        <h4>Internship</h4>
                        <p>
\t\t\t\t\t\t \t
\t\t\t\t\t\t\t\t";
        // line 168
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            echo "\t\t
\t\t\t\t\t\t\t\t";
            // line 169
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "type", array()) == "internship")) {
                echo "\t
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 170
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parent", array("name" => $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "name", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "url", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t";
            }
            // line 171
            echo "\t
\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t</p>
                        <button type=\"submit\" name=\"internship\" class=\"btn btn-primary btn-lg btn-block\">
                         Internships
                       </button>
                    </div>
                </div>
            </div>
          <!--  <div class=\"col-md-3 col-sm-6\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading\">
                        <span class=\"fa-stack fa-5x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-database fa-stack-1x fa-inverse\"></i>
                        </span>
                    </div>
                    <div class=\"panel-body\">
                        <h4>Service Four</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
                    </div>
                </div>
            </div>  -->
        </div> 

        <!-- Service Tabs -->
        

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
</form>
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
        return "AcmeDemoBundle:Main:Parent.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  281 => 173,  274 => 171,  267 => 170,  263 => 169,  257 => 168,  238 => 151,  231 => 149,  224 => 148,  220 => 147,  214 => 146,  188 => 122,  181 => 120,  174 => 119,  170 => 118,  164 => 117,  129 => 85,  104 => 63,  98 => 60,  92 => 57,  86 => 54,  77 => 48,  60 => 34,  26 => 2,  20 => 1,);
    }
}
