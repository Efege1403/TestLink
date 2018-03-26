<?php
/** -------------------------------------------------------------------------------------
 * ♔ TestLink Open Source Project - http://testlink.sourceforge.net/
 * 
 * Filename $RCSfile: description.php,v $
 * @version $Revision: 1.4 $
 * @modified $Date: 2010/06/24 17:25:53 $ $Author: asimon83 $
 * @modified $Date: 2010/06/24 17:25:53 $ $Author: asimon83 $
 * @modified $Date: 2010/06/24 17:25:53 $ $Author: asimon83 $
 * @author Martin Havlat
 *
 * LOCALIZATION:
 * === English (en_GB) strings === - default development localization (World-wide English)
 *
 * @ABSTRACT
 * The file contains global variables with html text. These variables are used as 
 * HELP or DESCRIPTION. To avoid override of other globals we are using "Test Link String" 
 * prefix '$TLS_hlp_' or '$TLS_txt_'. This must be a reserved prefix.
 * 
 * Contributors:
 * Add your localization to TestLink tracker as attachment to update the next release
 * for your language.
 *
 * No revision is stored for the the file - see CVS history
 * The initial data are based on help files stored in gui/help/<lang>/ directory. 
 * This directory is obsolete now. It serves as source for localization contributors only. 
 *
 * ----------------------------------------------------------------------------------- */

// printFilter.html //已校对
$TLS_hlp_generateDocOptions = "<h2>根据选项生成的文档</h2>

<p>该列表允许用户在浏览测试用例之前对其进行过滤。
通过筛选可以显示你所需要的数据。为了改变显示的数据，
你可以选择或者取消选择条件，点击过滤器，并在树上选择希望的数据等级。</p>

<p><b>文档头部：</b>用户可以过滤文档的头部信息。
文档的头部信息包括：介绍，范围，参考，测试方法和测试规范。</p>

<p><b>测试用例的内容：</b>用户可以过滤测试用例的内容。测试用例的内容包括：
摘要，步骤，预期结果和关键字。</p>

<p><b>测试用例摘要：</b>通过测试用例的标题，用户可以过滤测试用例摘要的信息。
但是，用户不能通过测试用例的内容过滤测试用例摘要信息。
为了在浏览标题时显示摘要信息和遗漏的步骤，预期结果和关键字，我们把测试摘要从测试用例内容中单独分离出来。
当用户浏览测试用例的时候，测试用例摘要会被自动包含进来供浏览。</p>

<p><b>表中的内容：</b>TestLink通过内部超连接插入所有标题</p>

<p><b>导出格式：</b>共有两种格式：HTML和MS word。在第二种情况下，浏览器会自动调用MS word组件。</p>";

// testPlan.html //已校对
$TLS_hlp_testPlan = "<h2>测试计划</h2>

<h3>一般定义</h3>
<p>测试计划是测试软件系统的一个系统性的方法。你可以根据特定的产品周期和问题跟踪结果组织你的测试活动。</p>

<h3>测试执行</h3>
<p>在该部分用户可以执行测试用例（记录测试结果），并输出测试计划所包含的测试套件。
同时用户也可以跟踪测试用例执行的结果。</p>

<h2>测试计划的管理</h2>
<p>这部分，仅管理人员可以访问，管理测试计划。
管理测试计划涉及到创建、编辑和删除测试计划，添加、编辑、删除和更新测试计划所包含的测试用例，创建构建以及指派用户在项目中的权限。<br/>
权限高的用户可以设置测试套件（类别）的优先级／风险和所有关系(测试套件由谁负责)，以及创建测试里程碑。</p>

<p>注意：用户有可能看不到一个包含任何测试计划的下拉菜单。
在这种情况下，所有的链接（除了管理人员开启的）都不能使用。如果出现这种情况，你一定要跟领导或管理员联系，给你在项目中授予适当的权限或者为你创建一个测试计划。</p>"; 

// custom_fields.html //已校对
$TLS_hlp_customFields = "<h2>自定义字段</h2>
<p>下面是关于自定义字段应用的一些实例：</p>
<ul>
<li>自定义字段定义系统范围。</li>
<li>自定义字段关联到一种元素类型（测试套件，测试用例）。</li>
<li>自定义字段可以关联到多个测试项目。</li>
<li>每个测试项目中自定义字段的显示顺序不同。</li>
<li>可以在特定的测试项目中锁定自定义字段。</li>
<li>自定义字段的数量不受限制。</li>
</ul>

<p>自定义字段的定义中包括一下属性：</p>
<ul>
<li>自定义字段名称</li>
<li>变量名称的描述（例如：该值用于提供lang_get() API，或者当语言文件里不存在时显示原样）。</li>
<li>自定义字段类型 (string, numeric, float, enum, email)</li>
<li>列举可能的取值 (例如: RED|YELLOW|BLUE), 适用于清单，多选列表和组合类型。<br />
<i>用管道符 ('|') 将可能的枚举值分离开。空字符串可能也是可选的值。</i>
</li>
<li>默认值: 尚未实现</li>
<li>自定义字段的最大／最小长度 (用0代表禁用). (尚未实现)</li>
<li>用正则表达式验证用户的输入
(用 <a href=\"http://au.php.net/manual/en/function.ereg.php\">ereg()</a>
语法). <b>(尚未实现)</b></li>
<li>所有的自定义字段目前以VARCHAE(255)的字段类型被保存在数据库中。</li>
<li>显示在所有的测试规格说明中。</li>
<li>启用测试规格。当设计测试用例规格时，用户可以对其进行修改。</li>
<li>显示在测试执行中。</li>
<li>启用测试执行。当测试用例执行时用户可以对其进行修改</li>
<li>显示在测试计划设计中</li>
<li>启用测试计划设计。当设计测试计划(向测试计划中添加测试用例时),用户可以对其进行修改</li>
<li>可用于。用户选择什么类型的字段选项。</li>
</ul>
";

// execMain.html  //已校对
$TLS_hlp_executeMain = "<h2>执行测试用例</h2>
<p>允许用户执行测试用例。执行本身只是一个对选择的构建的测试用例分配结果（通过，失败，锁定）的过程</p>
<p>通过配置可以关联到缺陷跟踪系统。用户可以直接新建问题和浏览已经存在的问题。更多信息请查看安装手册。</p>";

//bug_add.html //已校对
$TLS_hlp_btsIntegration = "<h2>给测试用例添加问题</h2>
<p><i>(仅在已经配置好的情况下)</i>
TestLink 仅仅简单地跟缺陷跟踪系统（BTS）进行了集成，即不能向BTS发送创建bug的请求，也不能取回bug id号。
该集成仅仅与BTS建立了一个页面连接，调用以下功能：
<ul>
	<li>添加新问题</li>
	<li>显示已存在问题的信息 </li>
</ul>
</p>  

<h3>添加问题的过程</h3>
<p>
   <ul>
   <li>第一步: 点击连接打开BTS，添加一个新的问题</li>
   <li>第二步: 记下BTS指定的BUGID</li>
   <li>第三步: 将BUGID写入输入框中</li>
   <li>第四步: 点击添加问题按钮</li>
   </ul>  

关闭添加问题页面后，你将在执行页面上看见一个问题数据的关联信息。
</p>";

// execFilter.html  //已校对
$TLS_hlp_executeFilter = "<h2>设置过滤器并构建测试的实施</h2>

<p>左方框中包含指派给当前项目测试计划的测试用例的导航,左方框的列表包含了测试用例筛选的过滤器。" .
"这些过滤器允许用户提炼出的一组测试用例，然后去执行。" .
"设置好过滤器，然后点击 \"应用\" 按钮并从树形菜单中选择适当的测试用例 " .
"</p>

<h3>构建</h3>
<p>用户必须选择一个用来和测试结果建立连接的构建。" .
"构建是当前测试计划的基本组件。在每个构建中每一个测试用例都可能被执行多次。" .
"然而统计时只计入最终的执行结果。 
<br />项目负责人可以在新建构建页面创建构建。</p>

<h3>测试用例ID过滤器</h3>
<p>用户可以过滤测试用例通过唯一的标识符。该ID在创建测试用例的时候自动生成。 
空列表意味着还没有应用过滤器。</p> 

<h3>优先级过滤器</h3>
<p>用户可以通过优先级来过滤测试用例。每个测试用例的重要性还与该测试用例在当前测试计划里的紧急程度有关。" .
"例如'HIGH'优先级的测试用例会显示那些如果重要程度是HIGH，在测试计划中的紧急程度至少是MEDIUM级别的测试用例。</p> 

<h2>结果过滤器</h2>
<p>用户可以通过测试结果过滤测试用例。测试结果是测试用例基于某一构建的产物。测试用例的状态包括通过，失败，锁定或者尚未运行。" .
"该过滤器默认情况下是禁用的。</p>

<h3>用户过滤器</h3>
<p>用户可以根据测试用例的指派者来过滤测试用例。复选框允许包含\"未指派\"的选项。</p>";
/*
<h2>当前结果</h2>
<p>默认情况下或者没有选择复选框里的"most  current"选项时，树形目录将按照下拉选择框里选择的构建排序。
这时树形目录将显示测试用例的状态。<br />
例如：用户从下来选择框里选择构建2而且没有选择复选框里的"most current"。
所有测试用例会显示它们在构建2里的执行状态。 
因此，如果测试用例1在构建2里执行通过的情况下，它会显示为绿色。
<br />如果用户选择了复选框里的"most current"，那么树形目录里的测试用例将根据他们最新的执行结果显示相应的颜色。
<br />例如：如果用户选择了构建2而且选择了复选框里的"most current"，那么所有的测试用例将根据他们最近的状态显示。
因此，如果测试用例1在构建3里通过，即使用户选择了构建2，它也会显示为绿色。</p>
 */


// newest_tcversions.html //已校对
$TLS_hlp_planTcModified = "<h2>被关联测试用例的最新版本</h2>
<p>通过分析与测试计划关联的所有测试用例，那些有最新版本的测试用例将被罗列出来（相对应于当前测试计划的测试用例）
</p>";


// requirementsCoverage.html //已校对
$TLS_hlp_requirementsCoverage = "<h3>需求覆盖</h3>
<br />
<p>这个功能允许通过测试用例来映射对用户或系统需求的覆盖度。
通过主页的\"需求规格\" 可以进行导航。</p>

<h3>需求规格</h3>
<p>需求是根据测试项目中相关联的'需求规约'文档来组织的。<br />
TestLink 不支持即包含需求规约又包含需求的版本。
因此，只有创建好规约之后才能往里添加需求文档版本。 
<b>标题</b>.
用户于可以向<b>范围</b>中添加简单的描述或注释。</p> 

<p><b><a name='total_count'>需求覆盖数目</a></b>用来评估需求覆盖度如果并没有把所有的需求添加(导入)到TestLink的情况下。 
需求覆盖数目的值<b>0</b> 指的是当前被用来做结果分析的需求数量。</p> 
<p><i>例如 SRS 包含200个需求，但是仅有50个被添加到TestLink。测试覆盖度为25%（如果这些被添加的需求都将被测试）。 
</i></p>

<h3><a name=\"req\">需求</a></h3>
<p>点击需求规约的标题，你就可以创建，编辑，删除和导入需求文档。每个需求都有标题，范围和状态。
状态包括 \"有效的\" 和 \"不可测试的\". 不可测试的需求不会被统计度量。
该参数用于没有实现的功能和错误的设计需求。</p> 

<p>你可以在需求规约页面通过多种查看需求的途径为需求创建新的测试用例。
这些测试用例被包含在通过配置命名的测试套件里。<i>(默认是: &#36;tlCfg->req_cfg->default_testsuite_name = 
\"通过需求创建测试套件 - 自动\";)</i>. 标题和范围被复制到这些测试用例。</p>
";

$TLS_hlp_req_coverage_table = "<h3>Coverage:</h3>
A value of e.g. \"40% (8/20)\" means that 20 Test Cases have to be created for this Requirement 
to test it completely. 8 of those have already been created and linked to this Requirement, which 
makes a coverage of 40 percent.
";


// req_edit
$TLS_hlp_req_edit = "<h3>Internal links on scope:</h3>
<p>Internal links serve the purpose of creating links to other requirements/requirement specifications 
with a special syntax. Internal Links behaviour can be changed in the config file.
<br /><br />
<b>Usage:</b>
<br />
Link to requirements: [req]req_doc_id[/req]<br />
Link to requirement specifications: [req_spec]req_spec_doc_id[/req_spec]</p>

<p>The test project of the requirement / requirement specification, a version and an anchor 
to jump to can also be specified:<br />
[req tproj=&lt;tproj_prefix&gt; anchor=&lt;anchor_name&gt; version=&lt;version_number&gt;]req_doc_id[/req]<br />
This syntax also works for requirement specifications (version attribute has no effect).<br />
If you do not specify a version the whole requirement including all versions will be shown.</p>

<h3>Log message for changes:</h3>
<p>Whenever a change is made Testlink will ask for a log message. This log message served the purpose of traceability.
If only the scope of the requirement has changed you are free to decide whether to create a new revision or not. 
Whenever anything besides the scope is changed you are forced to create a new revision.</p>
";


// req_view
$TLS_hlp_req_view = "<h3>Direct Links:</h3>
<p>To easily share this document with others simply click the globe icon at the top of this document to create a direct link.</p>

<h3>View History:</h3>
<p>This feature allows to compare revisions/versions of requirements if more than one revision/version of the requirement exists.
The overview provides the Log message for each revision/version, a timestamp and the author of the last change.</p>

<h3>Coverage:</h3>
<p>Shows all linked test cases for this requirement.</p>

<h3>Relations:</h3>
<p>Requirement Relations are used to model relationships between requirements. 
Custom relations and the option to allow relations between requirements of 
different test projects can be configured on the config file.
If you set the relation \"Requirement A is parent of Requirement B\", 
Testlink will set the relation \"Requirement B is child of Requirement A\" implicitly.</p>
";


// req_spec_edit
$TLS_hlp_req_spec_edit = "<h3>Internal links on scope:</h3>
<p>Internal links serve the purpose of creating links to other requirements/requirement specifications 
with a special syntax. Internal Links behaviour can be changed in the config file.
<br /><br />
<b>Usage:</b>
<br />
Link to requirements: [req]req_doc_id[/req]<br />
Link to requirement specifications: [req_spec]req_spec_doc_id[/req_spec]</p>

<p>The test project of the requirement / requirement specification, a version and an anchor 
to jump to can also be specified:<br />
[req tproj=&lt;tproj_prefix&gt; anchor=&lt;anchor_name&gt; version=&lt;version_number&gt;]req_doc_id[/req]<br />
This syntax also works for requirement specifications (version attribute has no effect).<br />
If you do not specify a version the whole requirement including all versions will be shown.</p>
";






// planAddTC_m1.tpl //已校对
$TLS_hlp_planAddTC = "<h2>关于'保存自定义字段'</h2>
如果你已经定义而且指派了关键字到测试项目中，<br /> 
自定义字段具有：<br />
 '在测试计划设计里显示=true' 和 <br />
 '启用测试计划设计=true'<br />
你将只能在已经与测试计划建立关联的测试用例页面看到这些关键字。
";


// resultsByTesterPerBuild.tpl
$TLS_hlp_results_by_tester_per_build_table = "<b>More information about testers:</b><br />
If you click on a tester name in this table, you will get a more detailed overview
about all Test Cases assigned to that user and his testing progress.<br /><br />
<b>Note:</b><br />
This Report shows those test cases, which are assigned to a specific user and have been executed 
based on each active build. Even if a test case has been executed by another user than the assigned user, 
the test case will appear as executed for the assigned user.
";

// xxx.html
//$TLS_hlp_xxx = "";

// ----- END ------------------------------------------------------------------
?>
