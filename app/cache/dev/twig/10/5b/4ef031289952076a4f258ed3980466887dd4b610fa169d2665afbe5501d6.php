<?php

/* AcmeDemoBundle:Main:advisor.html.twig */
class __TwigTemplate_105b4ef031289952076a4f258ed3980466887dd4b610fa169d2665afbe5501d6 extends Twig_Template
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

    <title>Career Advisors</title>

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
    <!-- <form action=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("advisor", array("slug" => "advisor"));
        echo "\" method=\"post\"> -->
\t
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
        // line 49
        echo $this->env->getExtension('routing')->getPath("index", array("slug" => "index"));
        echo "\">ICT Student Engagement</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("index", array("slug" => "index"));
        echo "\">Home</a>
                    </li>
\t\t\t\t\t<li>
                        <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("parent", array("slug" => "parent"));
        echo "\">Parent</a>
                    </li>
\t\t\t\t\t<li>
                        <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("teacher", array("slug" => "teacher"));
        echo "\">Teacher</a>
                    </li>
                    <li class=\"active\">
                        <a href=\"";
        // line 64
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
                <h1 class=\"page-header\" style=\"color:#FF00FF\">Information for
                    <small>Career Advisor</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"";
        // line 87
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
                <img class=\"img-responsive\" src=\"/bundles/acmedemo/images/advisor.jpeg\" alt=\"\">
            </div>
        </div>
        <!-- /.row -->

        <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\" style=\"color:#FF00FF\">Different Jobs List</h2>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading\">
                        <img src=\"/bundles/acmedemo/images/hello-world.jpg\" width=\"600\" height=\"300\">
                    </div>
                    <div class=\"panel-body\">
                        <h4></h4>
                       <table>
\t\t\t\t\t\t  \t\t <thead>
\t\t\t\t\t\t\t\t\t<tr >
\t\t\t\t\t\t\t\t\t<th >Job Role<?php echo \"\\t\" ?></th>    
\t\t\t\t\t\t\t\t\t<th>Skills</th> \t\t
\t\t\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 124
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            echo "\t

\t\t\t\t\t\t\t\t";
            // line 126
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "jobType", array()) == "helpful")) {
                echo "\t
\t\t\t\t\t\t\t\t\t<tr><td>";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "jobRole", array()), "html", null, true);
                echo "<?php echo \"\\t\" ?></td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "skills", array()), "html", null, true);
                echo "</td></tr>
\t\t\t\t\t\t\t\t";
            }
            // line 129
            echo "\t
\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t
\t\t\t\t\t\t
                         <button type=\"submit\" name=\"help\" class=\"btn btn-primary btn-lg btn-block\">
                         Help People
                       </button>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading\">
                       <img src=\"/bundles/acmedemo/images/marketing.jpg\" width=\"600\" height=\"300\">
                    </div>
                    <div class=\"panel-body\">
                        <h4></h4>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t  \t\t <thead>
\t\t\t\t\t\t\t\t\t<tr >
\t\t\t\t\t\t\t\t\t<th >Job Role</th><?php echo \"\\t\" ?>    
\t\t\t\t\t\t\t\t\t<th>Skills</th> \t\t
\t\t\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 156
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            echo "\t

\t\t\t\t\t\t\t\t";
            // line 158
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "jobType", array()) == "Marketing ")) {
                echo "\t
\t\t\t\t\t\t\t\t\t<tr><td>";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "jobRole", array()), "html", null, true);
                echo "<?php echo \"\\t\" ?></td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "skills", array()), "html", null, true);
                echo "</td></tr>
\t\t\t\t\t\t\t\t";
            }
            // line 161
            echo "\t
\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
                        
                       <button type=\"submit\" name=\"marketing\" class=\"btn btn-primary btn-lg btn-block\">
                         Marketing and Sales
                       </button>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading\">
                        <img src=\"/bundles/acmedemo/images/business.jpg\" width=\"600\" height=\"300\">
                    </div>
                    <div class=\"panel-body\">
                        <h4></h4>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t  \t\t <thead>
\t\t\t\t\t\t\t\t\t<tr >
\t\t\t\t\t\t\t\t\t<th >Job Role</th><?php echo \"\\t\" ?>    
\t\t\t\t\t\t\t\t\t<th>Skills</th> \t\t
\t\t\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 186
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            echo "\t

\t\t\t\t\t\t\t\t";
            // line 188
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "jobType", array()) == "Business Analysis")) {
                echo "\t
\t\t\t\t\t\t\t\t\t<tr><td>";
                // line 189
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "jobRole", array()), "html", null, true);
                echo "</td><?php echo \"\\t\" ?>
\t\t\t\t\t\t\t\t\t<td>";
                // line 190
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "skills", array()), "html", null, true);
                echo "</td></tr>
\t\t\t\t\t\t\t\t";
            }
            // line 191
            echo "\t
\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
                        
                        <button type=\"submit\" name=\"business\" class=\"btn btn-primary btn-lg btn-block\">
                         Business Analysis
                       </button>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading\">
                       <img src=\"/bundles/acmedemo/images/creative.jpg\" width=\"600\" height=\"300\">
                    </div>
                    <div class=\"panel-body\">
                        <h4></h4>
\t\t\t\t\t\t<div id=\"creative\"></div>
                       <table>
\t\t\t\t\t   
\t\t\t\t\t\t  \t\t <thead>
\t\t\t\t\t\t\t\t\t<tr >
\t\t\t\t\t\t\t\t\t<th >Job Role</th><?php echo \"\\t\" ?>    
\t\t\t\t\t\t\t\t\t<th>Skills</th> \t\t
\t\t\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 219
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            echo "\t

\t\t\t\t\t\t\t\t";
            // line 221
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "jobType", array()) == "Creative ")) {
                echo "\t
\t\t\t\t\t\t\t\t\t<tr><td>";
                // line 222
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "jobRole", array()), "html", null, true);
                echo "</td><?php echo \"\\t\" ?>
\t\t\t\t\t\t\t\t\t<td>";
                // line 223
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "skills", array()), "html", null, true);
                echo "</td></tr>
\t\t\t\t\t\t\t\t";
            }
            // line 224
            echo "\t
\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t

    }, \"json\");    
}
                        <button type=\"submit\" name=\"creative\" onclick= \"\" class=\"btn btn-primary btn-lg btn-block\">
                         Creativity and Innovation
                       </button>
                    </div>
                </div>
            </div>
\t\t\t      <div class=\"col-lg-12\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading\">
                       <img src=\"/bundles/acmedemo/images/engineering.jpg\" width=\"600\" height=\"300\">
                    </div>
                    <div class=\"panel-body\">
                        <h4></h4>
                        <table>
\t\t\t\t\t\t  \t\t <thead>
\t\t\t\t\t\t\t\t\t<tr >
\t\t\t\t\t\t\t\t\t<th >Job Role</th><?php echo \"\\t\" ?>    
\t\t\t\t\t\t\t\t\t<th>Skills</th> \t\t
\t\t\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 253
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            echo "\t

\t\t\t\t\t\t\t\t";
            // line 255
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "jobType", array()) == "Engineering ")) {
                echo "\t
\t\t\t\t\t\t\t\t\t<tr><td>";
                // line 256
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "jobRole", array()), "html", null, true);
                echo "</td><?php echo \"\\t\" ?>
\t\t\t\t\t\t\t\t\t<td>";
                // line 257
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "skills", array()), "html", null, true);
                echo "</td></tr>
\t\t\t\t\t\t\t\t";
            }
            // line 258
            echo "\t
\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 260
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
                         <button type=\"submit\" name=\"engineering\" class=\"btn btn-primary btn-lg btn-block\">
                         Engineering and Technical
                       </button>
                    </div>
                </div>
            </div>
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
    <!-- /.container -->
\t
\t
\t
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
        return "AcmeDemoBundle:Main:advisor.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  415 => 260,  408 => 258,  403 => 257,  399 => 256,  395 => 255,  388 => 253,  359 => 226,  352 => 224,  347 => 223,  343 => 222,  339 => 221,  332 => 219,  304 => 193,  297 => 191,  292 => 190,  288 => 189,  284 => 188,  277 => 186,  252 => 163,  245 => 161,  240 => 160,  236 => 159,  232 => 158,  225 => 156,  198 => 131,  191 => 129,  186 => 128,  182 => 127,  178 => 126,  171 => 124,  131 => 87,  105 => 64,  99 => 61,  93 => 58,  87 => 55,  78 => 49,  60 => 34,  26 => 2,  20 => 1,);
    }
}
