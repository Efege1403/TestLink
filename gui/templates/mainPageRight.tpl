{*
 Testlink Open Source Project - http://testlink.sourceforge.net/
 @filesource mainPageRight.tpl
 main page right side
 @internal revisions
 
*}
{lang_get var="labels"
          s="current_test_plan,ok,testplan_role,msg_no_rights_for_tp,
             href_execute_test,href_rep_and_metrics, href_assign_tp_user_roles,
             href_update_tplan,href_newest_tcversions,title_plugins,
             href_my_testcase_assignments,href_platform_assign,
             href_tc_exec_assignment,href_plan_assign_urgency,
             href_plan_management,href_build_new,href_plan_mstones,
             href_metrics_dashboard,href_add_remove_test_cases,
             href_exec_ro_access,title_test_plan_mgmt,
			 title_test_execution,title_test_case_suite"}


{$menuLayout=$tlCfg->gui->layoutMainPageRight}
{$display_right_block_1=false}
{$display_right_block_2=false}
{$display_right_block_3=false}
{$display_left_block_top = false}
{$display_left_block_bottom = false}

{if  $gui->grants.mgt_testplan_create == "yes" ||
	 $gui->grants.testplan_create_build == "yes" ||
	 $gui->grants.testplan_milestone_overview ||
	 $gui->grants.testplan_user_role_assignment == "yes"}
   {$display_right_block_1=true}
{/if}

{if $gui->countPlans > 0 && 
    ($gui->grants.testplan_execute == "yes" || 
     $gui->grants.testplan_metrics == "yes" ||
     $gui->grants.exec_ro_access == "yes")}
   {$display_right_block_2=true}
{/if}

{if $gui->countPlans > 0 && 
	( $gui->grants.testplan_planning == "yes" ||
	$gui->grants.exec_assign_testcases == "yes" ||
	$gui->grants.testplan_add_remove_platforms == "yes" ||
	$gui->grants.testplan_update_linked_testcase_versions == "yes" ||
	$gui->grants.testplan_show_testcases_newest_versions == "yes" ||
		( $session['testprojectOptions']->testPriorityEnabled && 
		$gui->grants.testplan_set_urgent_testcases == "yes" ) )}
	{$display_right_block_3=true}
{/if}

{$display_right_block_top=false}
{$display_right_block_bottom=false}

{if isset($gui->plugins.EVENT_RIGHTMENU_TOP) &&  $gui->plugins.EVENT_RIGHTMENU_TOP}
  {$display_right_block_top=true}
{/if}
{if isset($gui->plugins.EVENT_RIGHTMENU_BOTTOM) &&  $gui->plugins.EVENT_RIGHTMENU_BOTTOM}
  {$display_right_block_bottom=true}
{/if}

{$firstDivStyle="width:260px;position:relative;left:50px;"}
{$divStyle="width:360px;padding: 0px 0px 0px 10px;"}
{$aStyle="text-align:center;padding: 3px 15px;font-size:16px"}

<div class="vertical_menu" style="float: right; margin:20px 10px 50px 10px;width: 380px;">

	{if $gui->num_active_tplans > 0}
	 <div>
     {lang_get s='help' var='common_prefix'}
     {lang_get s='test_plan' var="xx_alt"}
     {$text_hint="$common_prefix: $xx_alt"}
     {include file="inc_help.tpl" helptopic="hlp_testPlan" show_help_icon=true 
              inc_help_alt="$text_hint" inc_help_title="$text_hint"  
              inc_help_style="float: right;vertical-align: top;"}

 	   <form name="testplanForm" action="lib/general/mainPage.php">
        {if $gui->countPlans > 0}
			<div class="list-group" style="{$firstDivStyle}">
			    <div class="list-group-item active" style="{$aStyle}">{$labels.current_test_plan}</div>
				<select class="chosen-select" name="testplan" onchange="this.form.submit();">
					{section name=tPlan loop=$gui->arrPlans}
						<option value="{$gui->arrPlans[tPlan].id}"
								{if $gui->arrPlans[tPlan].selected} selected="selected" {/if}
								title="{$gui->arrPlans[tPlan].name|escape}">
								{$gui->arrPlans[tPlan].name|escape}
						</option>
					{/section}
				</select>
				 
				{if $gui->testplanRole neq null}
					<div class="warning" style="margin-top:5px">{$labels.testplan_role} {$gui->testplanRole|escape}</div>
				{/if}
			</div>
	    {else}
			{if $gui->num_active_tplans > 0}{$labels.msg_no_rights_for_tp}{/if}
		{/if}
	   </form>
	  </div>
  {/if}
  <br />

  {* ----------------------------------------------------------------------------- *}

  {if $display_right_block_1}

    <div class="list-group" style="{$divStyle}">
	  <div class="list-group-item active" style="{$aStyle}">{$labels.title_test_plan_mgmt}</div>
      {if $gui->grants.mgt_testplan_create == "yes"}
		{$planView="lib/plan/planView.php"}
       	<a href="{$planView}" class="list-group-item" style="{$aStyle}">{$labels.href_plan_management}</a>
	  {/if}
	    
	  {if $gui->grants.testplan_create_build == "yes" and $gui->countPlans > 0}
		{$buildView="lib/plan/buildView.php?tplan_id="}
       	<a href="{$buildView}{$gui->testplanID}" class="list-group-item" style="{$aStyle}">{$labels.href_build_new}</a>
      {/if}
	  
	  {if $gui->grants.testplan_user_role_assignment == "yes" and $gui->countPlans > 0}
		{$usersAssign="lib/usermanagement/usersAssign.php?featureType=testplan&featureID="}
       	<a href="{$usersAssign}{$gui->testplanID}" class="list-group-item" style="{$aStyle}">{$labels.href_assign_tp_user_roles}</a>
      {/if}
	    
      {if $gui->grants.testplan_milestone_overview == "yes" and $gui->countPlans > 0}
		{$mileView="lib/plan/planMilestonesView.php"}
        <a href="{$mileView}" class="list-group-item" style="{$aStyle}">{$labels.href_plan_mstones}</a>
      {/if}
    </div>
  {/if}

    {* ----------------------------------------------------------------------------- *}

  {if $display_right_block_2}
    <div class="list-group" style="{$divStyle}">
	<div class="list-group-item active" style="{$aStyle}">{$labels.title_test_execution}</div>
	{if $gui->grants.testplan_execute == "yes" || $gui->grants.exec_ro_access == "yes"}

	  {if $gui->grants.testplan_execute == "yes"}
		{$lbx = $labels.href_execute_test}
	  {/if}

	  {if $gui->grants.exec_ro_access == "yes"}
		{$lbx = $labels.href_exec_ro_access}
	  {/if}

	  <a href="{$gui->launcher}?feature=executeTest" class="list-group-item" style="{$aStyle}">{$lbx}</a>

	  {if $gui->grants.exec_testcases_assigned_to_me == "yes"}
		<a href="{$gui->url.testcase_assignments}" class="list-group-item" style="{$aStyle}">{$labels.href_my_testcase_assignments}</a>
	  {/if}
	{/if}
      
	{if $gui->grants.testplan_metrics == "yes"}
	  <a href="{$gui->launcher}?feature=showMetrics" class="list-group-item" style="{$aStyle}">{$labels.href_rep_and_metrics}</a>
	  <a href="{$gui->url.metrics_dashboard}" class="list-group-item" style="{$aStyle}">{$labels.href_metrics_dashboard}</a>
	{/if} 
    </div>
  {/if}

	  {* ----------------------------------------------------------------------------- *}

	{if $display_right_block_3}
    <div class="list-group" style="{$divStyle}">
	<div class="list-group-item active" style="{$aStyle}">{$labels.title_test_case_suite}</div>
    {if $gui->grants.testplan_add_remove_platforms == "yes"}
	  {$platformAssign="lib/platforms/platformsAssign.php?tplan_id="}
  	  <a href="{$platformAssign}{$gui->testplanID}" class="list-group-item" style="{$aStyle}">{$labels.href_platform_assign}</a>
    {/if}
	{if $gui->grants.testplan_planning == "yes"}
	  <a href="{$gui->launcher}?feature=planAddTC" class="list-group-item" style="{$aStyle}">{$labels.href_add_remove_test_cases}</a>
	{/if}
	{if $gui->grants.exec_assign_testcases == "yes"}
      <a href="{$gui->launcher}?feature=tc_exec_assignment" class="list-group-item" style="{$aStyle}">{$labels.href_tc_exec_assignment}</a>
	{/if}
		
    {if $session['testprojectOptions']->testPriorityEnabled &&  $gui->grants.testplan_set_urgent_testcases == "yes"}
      <a href="{$gui->launcher}?feature=test_urgency" class="list-group-item" style="{$aStyle}">{$labels.href_plan_assign_urgency}</a>
    {/if}

    {if $gui->grants.testplan_update_linked_testcase_versions == "yes"}
	  <a href="{$gui->launcher}?feature=planUpdateTC" class="list-group-item" style="{$aStyle}">{$labels.href_update_tplan}</a>
    {/if} 

    {if $gui->grants.testplan_show_testcases_newest_versions == "yes"}
	  <a href="{$gui->launcher}?feature=newest_tcversions" class="list-group-item" style="{$aStyle}">{$labels.href_newest_tcversions}</a>
    {/if} 

    </div>
  {/if}

  {if $display_right_block_top}
    <script type="text/javascript">
    function display_right_block_top() 
    {
      var pt = new Ext.Panel({
                              title: '{$labels.title_plugins}',
                              collapsible: false,
                              collapsed: false,
                              draggable: false,
                              contentEl: 'plugin_right_top',
                              baseCls: 'x-tl-panel',
                              bodyStyle: "background:#c8dce8;padding:3px;",
                              renderTo: 'menu_right_block_top',
                              width: '100%'
                             });
    }
    </script>
    {if isset($gui->plugins.EVENT_RIGHTMENU_TOP)}
      <div id="plugin_right_top">
        {foreach from=$gui->plugins.EVENT_RIGHTMENU_TOP item=menu_item}
          {$menu_item}
          <br/>
        {/foreach}
      </div>
    {/if}
  {/if}

  {if $display_right_block_bottom}
    <script type="text/javascript">
    function display_right_block_bottom() 
    {
      var pb = new Ext.Panel({
                              title: '{$labels.title_plugins}',
                              collapsible: false,
                              collapsed: false,
                              draggable: false,
                              contentEl: 'plugin_right_bottom',
                              baseCls: 'x-tl-panel',
                              bodyStyle: "background:#c8dce8;padding:3px;",
                              renderTo: 'menu_right_block_bottom',
                              width: '100%'
                             });
    }
    </script>
    {if isset($gui->plugins.EVENT_RIGHTMENU_BOTTOM)}
      <div id="plugin_right_bottom">
        {foreach from=$gui->plugins.EVENT_RIGHTMENU_BOTTOM item=menu_item}
          {$menu_item}
          <br/>
        {/foreach}
      </div>
    {/if}  
  {/if}
  {* ------------------------------------------------------------------------------------------ *}

</div>
<script>
jQuery( document ).ready(function() {
jQuery(".chosen-select").chosen({ width: "100%" });
});
</script>
