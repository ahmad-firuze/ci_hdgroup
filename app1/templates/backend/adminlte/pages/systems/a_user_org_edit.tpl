{var $url_module = $.php.base_url('systems/a_user_org')}
{var $url_module_main = $.php.base_url('systems/a_user')}

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
     <!-- Main content -->
    <section class="content">
    </section>
    <!-- /.content -->
 </div>
  <!-- /.content-wrapper -->
<script src="{$.const.ASSET_URL}js/form_edit.js"></script>
<script src="{$.const.TEMPLATE_URL}plugins/bootstrap-validator/validator.min.js"></script>
<script src="{$.const.TEMPLATE_URL}plugins/shollu-autofill/js/shollu-autofill.js"></script>
<script src="{$.const.TEMPLATE_URL}plugins/shollu-combobox/js/shollu_cb.min.js"></script>
<script>
	{* Get Params *}
	var $url_module = "{$url_module}";
	var id = getURLParameter("id");
	var edit = getURLParameter("edit");
	var user_id = getURLParameter("user_id");
	{* Start :: Init for Title, Breadcrumb *}
	{* Set status (new|edit|copy) to Page Title *}
	var desc = function(edit){ if (edit==1) return "(Edit)"; else if (edit==2) return "(New)"; else return "(Copy)"; };
	$(".content").before(BSHelper.PageHeader({ 
		title: "{$window_title}", 
		title_desc: desc(edit), 
		bc_list:[
			{ icon:"fa fa-dashboard", title:"Dashboard", link:"{$.const.APPS_LNK}" },
			{ icon:"", title:"User", link:"javascript:history.back()" },
			{ icon:"", title:"{$window_title}", link:"javascript:history.back()" },
			{ icon:"", title: desc(edit), link:"" },
		]
	}));
	{* Additional for sub module *}
	$.getJSON('{$url_module_main}', { "id": (user_id==null)?-1:user_id }, function(result){ 
		if (!isempty_obj(result.data.rows)) {
			var code_name = ": "+result.data.rows[0].code_name;
			$('.content-header').find('h1').find('small').before(code_name);
		}
	});
	{* End :: Init for Title, Breadcrumb *}

	{* For design form interface *}
	var col = [], row = [];
	var form1 = BSHelper.Form({ autocomplete:"off" });	
	var box1 = BSHelper.Box({ type:"info" });
	var req = function(edit){ if (edit==1) return false; else if (edit==2) return true; else return true; };
	{* adding master key id *}
	col.push(BSHelper.Input({ type:"hidden", idname:"user_id", value:user_id }));
	{* standard fields table *}
	col.push(BSHelper.Input({ type:"hidden", idname:"id" }));
	col.push(BSHelper.Combobox({ horz:false, label:"Organization", idname:"org_id", textField:"code_name", url:"{$.php.base_url('systems/a_org')}", remote: true }));
	col.push(BSHelper.Checkbox({ horz:false, label:"Is Active", idname:"is_active", value:1 }));
	form1.append(subRow(subCol(12, col)));
	form1.append(subRow(subCol()));
	col = [];
	col.push( BSHelper.Button({ type:"submit", label:"Submit", idname:"submit_btn" }) );
	col.push( '&nbsp;&nbsp;&nbsp;' );
	col.push( BSHelper.Button({ type:"button", label:"Cancel", cls:"btn-danger", idname:"btn_cancel", onclick:"window.history.back();" }) );
	form1.append( col );
	box1.find('.box-body').append(form1);
	$(".content").append(box1);

</script>