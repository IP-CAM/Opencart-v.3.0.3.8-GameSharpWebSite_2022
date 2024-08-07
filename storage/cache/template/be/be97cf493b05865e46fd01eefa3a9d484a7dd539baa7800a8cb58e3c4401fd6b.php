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

/* extension/module/ocvermegamenu.twig */
class __TwigTemplate_a92f355320ec822cefce5968dda0027f8ee6a6368abcdda613d887ab5268af08 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-slideshow\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        <?php foreach (\$breadcrumbs as \$breadcrumb) { ?>
        <li><a href=\"";
        // line 11
        echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["breadcrumb"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
        echo "\">";
        echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["breadcrumb"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
        echo "</a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 30
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 32
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 33
        if (($context["error_name"] ?? null)) {
            // line 34
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 36
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 39
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 42
        if (($context["status"] ?? null)) {
            // line 43
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 44
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 46
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 47
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 49
        echo "              </select>
            </div>
          </div>
\t\t  
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 54
        echo ($context["text_homepage"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"hhome\" id=\"input-status\" class=\"form-control\">
                ";
        // line 57
        if (($context["status"] ?? null)) {
            // line 58
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 59
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 61
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 62
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 64
        echo "              </select>
            </div>
          </div>
\t\t  
\t\t   <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 69
        echo ($context["text_depth"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
        \t  \t<input class=\"form-control\" type=\"text\" name=\"hdepth\" value=\"";
        // line 71
        if (($context["hdepth"] ?? null)) {
            echo ($context["hdepth"] ?? null);
        } else {
            echo "4";
        }
        echo "\">
            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 75
        echo ($context["text_level"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
        \t  <input class=\"form-control\" type=\"text\" name=\"hlevel\" value=\"";
        // line 77
        if (($context["hlevel"] ?? null)) {
            echo ($context["hlevel"] ?? null);
        } else {
            echo "4";
        }
        echo "\">
            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 81
        echo ($context["text_item_limit"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
        \t  <input class=\"form-control\" type=\"text\" name=\"hitem_limit\" value=\"";
        // line 83
        if (($context["hitem_limit"] ?? null)) {
            echo ($context["hitem_limit"] ?? null);
        } else {
            echo "10";
        }
        echo "\">
            </div>
          </div>
\t\t  \t<div style=\"display: none\">
\t\t\t\t<div class=\"margin-form\">
\t\t\t\t\t<input type=\"text\" name=\"h_active_cate\" id=\"itemsInput\" value=\"";
        // line 88
        if (($context["hcate"] ?? null)) {
            echo " ";
            echo ($context["hcate"] ?? null);
            echo " ";
        }
        echo " \" size=\"70\">
\t\t\t\t</div>
\t\t\t</div>
\t\t  <div class=\"form-group\">
\t\t\t\t  <table id=\"setting\" class=\"table table-striped table-bordered table-hover\" style='text-align:center;'>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<select multiple=\"multiple\"   id=\"availableItems\" style=\"width: 320px; height: 260px;\">
\t\t\t\t\t\t\t\t<optgroup label=\"Infomations\">
\t\t\t\t\t\t\t\t";
        // line 98
        echo ($context["cms_option"] ?? null);
        echo " 
\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t<optgroup label=\"Category\">
\t\t\t\t\t\t\t\t";
        // line 101
        echo ($context["cate_option"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</optgroup>\t
\t\t\t\t\t\t\t\t<optgroup label=\"Cms Links\">
\t\t\t\t\t\t\t\t";
        // line 104
        echo ($context["link_option"] ?? null);
        echo " 
\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<select multiple=\"multiple\"  id=\"h_active_cate\" style=\"width: 320px; height: 260px;\">
\t\t\t\t\t\t\t\t";
        // line 112
        echo ($context["option_active"] ?? null);
        echo " 
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"#\" id=\"addItem\" >Add</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"#\" id=\"removeItem\" >Remove</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td >
\t\t\t\t\t\t\t\t<a href=\"#\" id=\"menuOrderUp\" class=\"button\" >&uarr;</a><br/>
\t\t\t\t\t\t\t\t<a href=\"#\" id=\"menuOrderDown\" class=\"button\">&darr;</a><br/>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\tfunction add()
\t\t\t\t\t\t{
\t\t\t\t\t\t\t\$(\"#availableItems option:selected\").each(function(i){
\t\t\t\t\t\t\t\tvar val = \$(this).val();
\t\t\t\t\t\t\t\tvar text = \$(this).text();
\t\t\t\t\t\t\t\ttext = text.replace(/(^\\s*)|(\\s*\$)/gi,\"\");
\t\t\t\t\t\t\t\t\$(\"#h_active_cate\").append(\"<option value=\\\"\"+val+\"\\\">\"+text+\"</option>\");
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tserialize();
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}

\t\t\t\t\t\tfunction remove()
\t\t\t\t\t\t{
\t\t\t\t\t\t\t\$(\"#h_active_cate option:selected\").each(function(i){
\t\t\t\t\t\t\t\t\$(this).remove();
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tserialize();
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}

\t\t\t\t\t\tfunction serialize()
\t\t\t\t\t\t{
\t\t\t\t\t\t\tvar options = \"\";
\t\t\t\t\t\t\t\$(\"#h_active_cate option\").each(function(i){
\t\t\t\t\t\t\t\toptions += \$(this).val() + \",\";
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\$(\"#itemsInput\").val(options.substr(0, options.length - 1));
\t\t\t\t\t\t}

\t\t\t\t\t\tfunction move(up)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tvar tomove = \$(\"#h_active_cate option:selected\");
\t\t\t\t\t\t\tif (tomove.length >1)
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\talert('Please select just one item');
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif (up)
\t\t\t\t\t\t\t\ttomove.prev().insertAfter(tomove);
\t\t\t\t\t\t\telse
\t\t\t\t\t\t\t\ttomove.next().insertBefore(tomove);
\t\t\t\t\t\t\tserialize();
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}

\t\t\t\t\t\t\$(document).ready(function(){
\t\t\t\t\t\t\t\$(\"#addItem\").click(add);
\t\t\t\t\t\t\t\$(\"#availableItems\").dblclick(add);
\t\t\t\t\t\t\t\$(\"#removeItem\").click(remove);
\t\t\t\t\t\t\t\$(\"#h_active_cate\").dblclick(remove);
\t\t\t\t\t\t\t\$(\"#menuOrderUp\").click(function(e){
\t\t\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\t\t\tmove(true);
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\$(\"#menuOrderDown\").click(function(e){
\t\t\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\t\t\tmove();
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t</table>
\t\t    </div>
\t\t  
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 201
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/ocvermegamenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 201,  282 => 112,  271 => 104,  265 => 101,  259 => 98,  242 => 88,  230 => 83,  225 => 81,  214 => 77,  209 => 75,  198 => 71,  193 => 69,  186 => 64,  181 => 62,  176 => 61,  171 => 59,  166 => 58,  164 => 57,  158 => 54,  151 => 49,  146 => 47,  141 => 46,  136 => 44,  131 => 43,  129 => 42,  123 => 39,  118 => 36,  112 => 34,  110 => 33,  104 => 32,  99 => 30,  93 => 27,  87 => 24,  83 => 22,  75 => 18,  73 => 17,  62 => 11,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ocvermegamenu.twig", "");
    }
}
