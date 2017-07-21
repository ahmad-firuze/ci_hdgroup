<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cashflow_Model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		
	}

	function cf_account($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, coalesce(t1.code,'') ||'_'|| t1.name as code_name";
		$params['table'] 	= $this->c_method." as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_ar($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from a_org where id = t1.department_id) as department_name, to_char(t1.doc_date, '".$this->session->date_format."') as doc_date, coalesce(t1.doc_no,'') ||'_'|| to_char(t1.doc_date, '".$this->session->date_format."') as code_name";
		$params['table'] 	= "cf_ar_ap as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_ar_line($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from cf_account where id = t1.account_id) as account_name";
		$params['table'] 	= "cf_ar_ap_line as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_ar_plan($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from c_bpartner where id = t1.bpartner_id) as bpartner_name, (select name from cf_account where id = t1.account_id) as account_name, to_char(t1.doc_date, '".$this->session->date_format."') as doc_date, to_char(t1.received_plan_date, '".$this->session->date_format."') as received_plan_date, t1.seq ||'_'|| to_char(t1.doc_date, '".$this->session->date_format."') ||'_'|| coalesce(t1.ttl_amt,'0') as code_name";
		$params['table'] 	= "cf_ar_ap_plan as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_ap($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from a_org where id = t1.department_id) as department_name, to_char(t1.doc_date, '".$this->session->date_format."') as doc_date, coalesce(t1.doc_no,'') ||'_'|| to_char(t1.doc_date, '".$this->session->date_format."') as code_name";
		$params['table'] 	= "cf_ar_ap as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_ap_line($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from cf_account where id = t1.account_id) as account_name";
		$params['table'] 	= "cf_ar_ap_line as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_ap_plan($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from c_bpartner where id = t1.bpartner_id) as bpartner_name, (select name from cf_account where id = t1.account_id) as account_name, to_char(t1.doc_date, '".$this->session->date_format."') as doc_date, to_char(t1.payment_plan_date, '".$this->session->date_format."') as payment_plan_date, t1.seq ||'_'|| to_char(t1.doc_date, '".$this->session->date_format."') ||'_'|| coalesce(t1.ttl_amt,'0') as code_name";
		$params['table'] 	= "cf_ar_ap_plan as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_cashbank_r($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from c_bpartner where id = t1.bpartner_id) as bpartner_name, to_char(t1.doc_date, '".$this->session->date_format."') as doc_date, to_char(t1.doc_ref_date, '".$this->session->date_format."') as doc_ref_date, to_char(t1.received_date, '".$this->session->date_format."') as received_date";
		$params['table'] 	= "cf_cashbank as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_cashbank_r_line($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from cf_account where id = t1.account_id) as account_name, to_char(t1.doc_date, '".$this->session->date_format."') as doc_date, (select doc_no from cf_invoice where id = t1.invoice_id) as invoice_no, (select to_char(doc_date, '".$this->session->date_format."') from cf_invoice where id = t1.invoice_id) as invoice_date";
		$params['table'] 	= "cf_cashbank_line as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_cashbank_p($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from c_bpartner where id = t1.bpartner_id) as bpartner_name, to_char(t1.doc_date, '".$this->session->date_format."') as doc_date, to_char(t1.doc_ref_date, '".$this->session->date_format."') as doc_ref_date, to_char(t1.payment_date, '".$this->session->date_format."') as payment_date";
		$params['table'] 	= "cf_cashbank as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_cashbank_p_line($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from cf_account where id = t1.account_id) as account_name, to_char(t1.doc_date, '".$this->session->date_format."') as doc_date, (select doc_no from cf_invoice where id = t1.invoice_id) as invoice_no, (select to_char(doc_date, '".$this->session->date_format."') from cf_invoice where id = t1.invoice_id) as invoice_date";
		$params['table'] 	= "cf_cashbank_line as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_cashbank_update_summary($params)
	{
		$params = is_array($params) ? (object) $params : $params;
		$id = isset($params->cashbank_id) ? 'where t1.id = '.$params->cashbank_id : '';
		if (isset($params->is_line) && $params->is_line) {
			$str = "update cf_cashbank t1 set (grand_total) = 
				(
					select coalesce(sum(amount),0) from cf_cashbank_line t2 
					where t2.is_active = '1' and t2.is_deleted = '0' and t2.cashbank_id = t1.id
				)
				$id";
		}
		return $this->db->query($str);
	}
	
	function cf_cashbank_valid_amount($params)
	{
		/* Insert: (grand_total - plan_total) < new_amount => error */
		/* Update: (grand_total - sum(plan_amount except current id)) < new_amount => error */
		$params = is_array($params) ? (object) $params : $params;
		// debug($params);
		
		$id = isset($params->id) && $params->id ? 'and t2.id <> '.$params->id : '';
		$invoice_id = $params->invoice_id;
		$str = "SELECT (amount - (select coalesce(sum(amount),0) from cf_cashbank_line t2 where t2.is_active = '1' and t2.is_deleted = '0' and t2.invoice_id = t1.id $id)) as amount 
			from cf_invoice t1 where t1.id = $invoice_id";
		$row = $this->db->query($str)->row();
		if ($row->amount - $params->amount < 0) {
			$this->session->set_flashdata('message', $row->amount);
			return FALSE;
		}
		return TRUE;
	}
	
	function cf_charge_type($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, coalesce(t1.code,'') ||'_'|| t1.name as code_name";
		$params['table'] 	= $this->c_method." as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_sinout($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from c_bpartner where id = t1.bpartner_id) as bpartner_name, to_char(t1.doc_date, '".$this->session->date_format."') as doc_date, to_char(t1.doc_ref_date, '".$this->session->date_format."') as doc_ref_date, to_char(t1.delivery_date, '".$this->session->date_format."') as delivery_date, to_char(t1.received_date, '".$this->session->date_format."') as received_date";
		$params['table'] 	= "cf_inout as t1";
		if (isset($params['level']) && $params['level'] == 1) {
			$params['select'] .= ", t2.doc_no as doc_no_order, to_char(t2.doc_date, '".$this->session->date_format."') as doc_date_order, to_char(t2.etd, '".$this->session->date_format."') as etd_order";
			$params['join'][] = ['cf_order as t2', 't1.order_id = t2.id', 'left'];
		}
		return $this->base_model->mget_rec($params);
	}
	
	function cf_sinout_line($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from m_itemcat where id = t1.itemcat_id) as itemcat_name, ((select doc_no from cf_inout where id = t1.inout_id) ||'_'|| (t1.seq) ||'_'|| (select name from m_itemcat where id = t1.itemcat_id)) as list_name";
		$params['table'] 	= "cf_inout_line as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_pinout($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from c_bpartner where id = t1.bpartner_id) as bpartner_name, to_char(t1.doc_date, '".$this->session->date_format."') as doc_date, to_char(t1.doc_ref_date, '".$this->session->date_format."') as doc_ref_date, to_char(t1.delivery_date, '".$this->session->date_format."') as delivery_date, to_char(t1.received_date, '".$this->session->date_format."') as received_date";
		$params['table'] 	= "cf_inout as t1";
		if (isset($params['level']) && $params['level'] == 1) {
			$params['select'] .= ", t2.doc_no as doc_no_order, to_char(t2.doc_date, '".$this->session->date_format."') as doc_date_order, to_char(t2.eta, '".$this->session->date_format."') as eta_order";
			$params['join'][] = ['cf_order as t2', 't1.order_id = t2.id', 'left'];
		}
		return $this->base_model->mget_rec($params);
	}
	
	function cf_pinout_line($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from m_itemcat where id = t1.itemcat_id) as itemcat_name, ((select doc_no from cf_inout where id = t1.inout_id) ||'_'|| (t1.seq) ||'_'|| (select name from m_itemcat where id = t1.itemcat_id)) as list_name";
		$params['table'] 	= "cf_inout_line as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_sinvoice($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from c_bpartner where id = t1.bpartner_id) as bpartner_name, to_char(t1.doc_date, '".$this->session->date_format."') as doc_date, to_char(t1.doc_ref_date, '".$this->session->date_format."') as doc_ref_date, coalesce(t1.doc_no,'') ||'_'|| to_char(t1.doc_date, '".$this->session->date_format."') as code_name";
		$params['table'] 	= "cf_invoice as t1";
		if (isset($params['level']) && $params['level'] == 1) {
			// $params['select'] .= ", t2.doc_no as doc_no_inout, to_char(t2.doc_date, '".$this->session->date_format."') as doc_date_inout";
			// $params['join'][] = ['cf_inout as t2', 't1.inout_id = t2.id', 'left'];
			$params['select'] .= ", t2.doc_no as doc_no_order, to_char(t2.doc_date, '".$this->session->date_format."') as doc_date_order, to_char(t2.etd, '".$this->session->date_format."') as etd_order";
			$params['join'][] = ['cf_order as t2', 't1.order_id = t2.id', 'left'];
			$params['join'][] = ['cf_order_plan as t3', 't1.order_plan_id = t3.id', 'left'];
		}
		return $this->base_model->mget_rec($params);
	}
	
	function cf_sinvoice_line($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from m_itemcat where id = t1.itemcat_id) as itemcat_name";
		$params['table'] 	= "cf_invoice_line as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_sinvoice_plan($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, to_char(t1.doc_date, '".$this->session->date_format."') as doc_date";
		$params['table'] 	= "cf_invoice_plan as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_oinvoice($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from c_bpartner where id = t1.bpartner_id) as bpartner_name, to_char(t1.doc_date, '".$this->session->date_format."') as doc_date, to_char(t1.doc_ref_date, '".$this->session->date_format."') as doc_ref_date, coalesce(t1.doc_no,'') ||'_'|| to_char(t1.doc_date, '".$this->session->date_format."') as code_name";
		$params['table'] 	= "cf_invoice as t1";
		if (isset($params['level']) && $params['level'] == 1) {
			$params['select'] .= ", t2.doc_no as doc_no_ar_ap, to_char(t2.doc_date, '".$this->session->date_format."') as doc_date_ar_ap, t3.note";
			$params['join'][] = ['cf_ar_ap as t2', 't1.ar_ap_id = t2.id', 'left'];
			$params['join'][] = ['cf_ar_ap_plan as t3', 't1.ar_ap_plan_id = t3.id', 'left'];
		}
		return $this->base_model->mget_rec($params);
	}
	
	function cf_pinvoice($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from c_bpartner where id = t1.bpartner_id) as bpartner_name, to_char(t1.doc_date, '".$this->session->date_format."') as doc_date, to_char(t1.doc_ref_date, '".$this->session->date_format."') as doc_ref_date, coalesce(t1.doc_no,'') ||'_'|| to_char(t1.doc_date, '".$this->session->date_format."') as code_name";
		$params['table'] 	= "cf_invoice as t1";
		if (isset($params['level']) && $params['level'] == 1) {
			// $params['select'] .= ", t2.doc_no as doc_no_inout, to_char(t2.doc_date, '".$this->session->date_format."') as doc_date_inout";
			// $params['join'][] = ['cf_inout as t2', 't1.inout_id = t2.id', 'left'];
			$params['select'] .= ", t2.doc_no as doc_no_order, to_char(t2.doc_date, '".$this->session->date_format."') as doc_date_order, to_char(t2.eta, '".$this->session->date_format."') as eta_order";
			$params['join'][] = ['cf_order as t2', 't1.order_id = t2.id', 'left'];
			$params['join'][] = ['cf_order_plan as t3', 't1.order_plan_id = t3.id', 'left'];
			$params['join'][] = ['cf_order_plan_clearance as t4', 't1.order_plan_clearance_id = t4.id', 'left'];
			$params['join'][] = ['cf_order_plan_import as t5', 't1.order_plan_import_id = t5.id', 'left'];
		}
		return $this->base_model->mget_rec($params);
	}
	
	function cf_pinvoice_line($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from m_itemcat where id = t1.itemcat_id) as itemcat_name";
		$params['table'] 	= "cf_invoice_line as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_pinvoice_plan($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, to_char(t1.doc_date, '".$this->session->date_format."') as doc_date";
		$params['table'] 	= "cf_invoice_plan as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_movement($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, to_char(t1.doc_date, '".$this->session->date_format."') as doc_date, to_char(t1.doc_ref_date, '".$this->session->date_format."') as doc_ref_date, to_char(t1.delivery_date, '".$this->session->date_format."') as delivery_date, to_char(t1.received_date, '".$this->session->date_format."') as received_date";
		$params['table'] 	= $this->c_table." as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_movement_line($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*";
		$params['table'] 	= $this->c_table." as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_sorder($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from c_bpartner where id = t1.bpartner_id) as bpartner_name, (select so_top from c_bpartner where id = t1.bpartner_id) as so_top, to_char(t1.doc_date, '".$this->session->date_format."') as doc_date, to_char(t1.etd, '".$this->session->date_format."') as etd, to_char(t1.expected_dt_cust, '".$this->session->date_format."') as expected_dt_cust, coalesce(t1.doc_no,'') ||'_'|| to_char(t1.doc_date, '".$this->session->date_format."') as code_name";
		$params['table'] 	= "cf_order as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_sorder_line($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from m_itemcat where id = t1.itemcat_id) as itemcat_name, ((select doc_no from cf_order where id = t1.order_id) ||'_'|| (t1.seq) ||'_'|| (select name from m_itemcat where id = t1.itemcat_id)) as list_name";
		// $params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from m_itemcat where id = t1.itemcat_id) as itemcat_name, ((select doc_no from cf_order where id = t1.order_id) ||'_'|| (select name from m_itemcat where id = t1.itemcat_id)) as list_name";
		// $params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from m_itemcat where id = t1.itemcat_id) as itemcat_name, ((select name from m_itemcat where id = t1.itemcat_id)) as list_name";
		$params['table'] 	= "cf_order_line as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_sorder_plan($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, to_char(t1.doc_date, '".$this->session->date_format."') as doc_date";
		$params['table'] 	= "cf_order_plan as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_porder($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from c_bpartner where id = t1.bpartner_id) as bpartner_name, (select po_top from c_bpartner where id = t1.bpartner_id) as po_top, to_char(t1.doc_date, '".$this->session->date_format."') as doc_date, to_char(t1.eta, '".$this->session->date_format."') as eta, coalesce(t1.doc_no,'') ||'_'|| to_char(t1.doc_date, '".$this->session->date_format."') as code_name";
		$params['table'] 	= "cf_order as t1";
		if (isset($params['level']) && $params['level'] == 1) {
			$params['select'] .= ", t2.doc_no as doc_no_requisition, to_char(t2.doc_date, '".$this->session->date_format."') as doc_date_requisition, to_char(t2.eta, '".$this->session->date_format."') as eta_requisition";
			$params['join'][] = ['cf_requisition as t2', 't1.requisition_id = t2.id', 'left'];
		}
		return $this->base_model->mget_rec($params);
	}
	
	function cf_porder_line($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from m_itemcat where id = t1.itemcat_id) as itemcat_name, ((select doc_no from cf_order where id = t1.order_id) ||'_'|| (t1.seq) ||'_'|| (select name from m_itemcat where id = t1.itemcat_id)) as list_name";
		$params['table'] 	= "cf_order_line as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_porder_plan($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, to_char(t1.doc_date, '".$this->session->date_format."') as doc_date, t1.note as code_name";
		$params['table'] 	= "cf_order_plan as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_porder_plan_clearance($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, to_char(t1.doc_date, '".$this->session->date_format."') as doc_date, t1.note as code_name";
		$params['table'] 	= "cf_order_plan_clearance as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_porder_plan_import($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, to_char(t1.doc_date, '".$this->session->date_format."') as doc_date, t1.note as code_name";
		$params['table'] 	= "cf_order_plan_import as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_request($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from c_bpartner where id = t1.bpartner_id) as bpartner_name, to_char(t1.doc_date, '".$this->session->date_format."') as doc_date, to_char(t1.doc_ref_date, '".$this->session->date_format."') as doc_ref_date, to_char(t1.eta, '".$this->session->date_format."') as eta, (select name from cf_request_type where id = t1.request_type_id) as request_type_name, coalesce(t1.doc_no,'') ||'_'|| to_char(t1.doc_date, '".$this->session->date_format."') as code_name";
		$params['table'] 	= "cf_request as t1";
		if (isset($params['level']) && $params['level'] == 1) {
			$params['select'] .= ", t2.doc_no as doc_no_order, to_char(t2.doc_date, '".$this->session->date_format."') as doc_date_order";
			$params['join'][] = ['cf_order as t2', 't1.order_id = t2.id', 'left'];
		}
		return $this->base_model->mget_rec($params);
	}
	
	function cf_request_line($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from m_itemcat where id = t1.itemcat_id) as itemcat_name, ((select doc_no from cf_request where id = t1.request_id) ||'_'|| (t1.seq) ||'_'|| (select name from m_itemcat where id = t1.itemcat_id)) as list_name";
		$params['table'] 	= "cf_request_line as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_request_type($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, coalesce(t1.code,'') ||'_'|| t1.name as code_name";
		$params['table'] 	= $this->c_method." as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_requisition($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from c_bpartner where id = t1.bpartner_id) as bpartner_name, to_char(t1.doc_date, '".$this->session->date_format."') as doc_date, to_char(t1.doc_ref_date, '".$this->session->date_format."') as doc_ref_date, to_char(t1.eta, '".$this->session->date_format."') as eta, case when ((select eta from cf_request where id = t1.request_id) - t1.eta) <= 6 then 'Warning' else '' end as eta_status, coalesce(t1.doc_no,'') ||'_'|| to_char(t1.doc_date, '".$this->session->date_format."') as code_name";
		$params['table'] 	= "cf_requisition as t1";
		if (isset($params['level']) && $params['level'] == 1) {
			$params['select'] .= ", t2.doc_no as doc_no_request, to_char(t2.doc_date, '".$this->session->date_format."') as doc_date_request, to_char(t2.eta, '".$this->session->date_format."') as eta_request";
			$params['join'][] = ['cf_request as t2', 't1.request_id = t2.id', 'left'];
		}
		return $this->base_model->mget_rec($params);
	}
	
	function cf_requisition_line($params)
	{
		$params['select']	= isset($params['select']) ? $params['select'] : "t1.*, (select name from m_itemcat where id = t1.itemcat_id) as itemcat_name, ((select doc_no from cf_requisition where id = t1.requisition_id) ||'_'|| (t1.seq) ||'_'|| (select name from m_itemcat where id = t1.itemcat_id)) as list_name";
		$params['table'] 	= "cf_requisition_line as t1";
		return $this->base_model->mget_rec($params);
	}
	
	function cf_order_update_summary($params)
	{
		$params = is_array($params) ? (object) $params : $params;
		$id = isset($params->order_id) ? 'where t1.id = '.$params->order_id : '';
		if (isset($params->is_line) && $params->is_line) {
			$str = "update cf_order t1 set (sub_total, vat_total, grand_total) = 
				(
					select coalesce(sum(sub_amt),0), coalesce(sum(vat_amt),0), coalesce(sum(ttl_amt),0) from cf_order_line t2 
					where t2.is_active = '1' and t2.is_deleted = '0' and t2.order_id = t1.id
				)
				$id";
		}
		if (isset($params->is_plan) && $params->is_plan) {
			$str = "update cf_order t1 set (plan_total) = 
				(
					select coalesce(sum(amount),0) from cf_order_plan t2 
					where t2.is_active = '1' and t2.is_deleted = '0' and t2.order_id = t1.id
				)
				$id";
		}
		if (isset($params->is_plan_cl) && $params->is_plan_cl) {
			$str = "update cf_order t1 set (plan_cl_total) = 
				(
					select coalesce(sum(amount),0) from cf_order_plan_clearance t2 
					where t2.is_active = '1' and t2.is_deleted = '0' and t2.order_id = t1.id
				)
				$id";
		}
		if (isset($params->is_plan_im) && $params->is_plan_im) {
			$str = "update cf_order t1 set (plan_im_total) = 
				(
					select coalesce(sum(amount),0) from cf_order_plan_import t2 
					where t2.is_active = '1' and t2.is_deleted = '0' and t2.order_id = t1.id
				)
				$id";
		}
		return $this->db->query($str);
	}
	
	/* For CF Sales Order Plan vs Sales Order Line */
	function cf_order_valid_amount($params)
	{
		/* Insert: (grand_total - plan_total) < new_amount => error */
		/* Update: (grand_total - sum(plan_amount except current id)) < new_amount => error */
		$params = is_array($params) ? (object) $params : $params;
		if (! isset($params->order_id) && !$params->order_id)
			return false;
		
		$id = isset($params->id) && $params->id ? 'and t2.id <> '.$params->id : '';
		$order_id = $params->order_id;
		if (isset($params->is_plan) && $params->is_plan) {
			// $str = "SELECT grand_total,
				// (
					// select coalesce(sum(amount),0) from cf_order_plan t2 where t2.is_active = '1' and t2.is_deleted = '0' and t2.order_id = t1.id $id
				// ) as plan_total 
				// from cf_order t1 where t1.id = $order_id";
			$str = "SELECT (grand_total - (select coalesce(sum(amount),0) from cf_order_plan t2 where t2.is_active = '1' and t2.is_deleted = '0' and t2.order_id = t1.id $id)) as amount 
				from cf_order t1 where t1.id = $order_id";
		}
		$row = $this->db->query($str)->row();
		// if ($row->grand_total - $row->plan_total - $params->amount < 0) {
		if ($row->amount - $params->amount < 0) {
			// $this->session->set_flashdata('message', $row->grand_total - $row->plan_total);
			$this->session->set_flashdata('message', $row->amount);
			return FALSE;
		}
		return TRUE;
		// if ($row->grand_total - $row->plan_total < $params->amount)
	}
	
	/* For CF Purchase Order Line vs Requisition Line */
	function cf_order_valid_qty($params)
	{
		$params = is_array($params) ? (object) $params : $params;
		if (! isset($params->requisition_line_id) && !$params->requisition_line_id)
			return false;
		
		$id = $params->requisition_line_id;
		$str = "select (t1.qty - (select coalesce(sum(qty),0) from cf_order_line where is_active = '1' and is_deleted = '0' and requisition_line_id = t1.id)) as qty 
			from cf_requisition_line as t1 where t1.is_deleted = '0' and t1.id = $id";
		$row = $this->db->query($str)->row();
		if ($row->qty - $params->qty < 0) {
			$this->session->set_flashdata('message', $row->qty);
			return FALSE;
		}
		return TRUE;
	}
	
	/* function cf_order_vs_inout($params)
	{
		$params = is_array($params) ? (object) $params : $params;
		$id = isset($params->inout_id) && $params->inout_id ? $params->inout_id : 0;
		$having = isset($params->having) && $params->having == 'amount' ? 'having sum(ttl_amt) = t1.ttl_amt)' : 'having sum(qty) = t1.qty)';
		$str = "select *, ((select doc_no from cf_order where id = t1.order_id) ||'_'|| (t1.seq) ||'_'|| (select name from m_itemcat where id = t1.itemcat_id)) as list_name from cf_order_line t1
			where is_active = '1' and is_deleted = '0' and order_id = (select order_id from cf_inout where id = $id) 
			and not exists (select 1 from cf_inout_line where is_active = '1' and is_deleted = '0' and order_line_id = t1.id and inout_id = $id $having";
		$response['total'] = 0;
		$response['rows']  = $this->db->query($str)->result();
		return $response;
	} */
	
	/* function cf_order_line_vs_inout_line($params)
	{
		$params = is_array($params) ? (object) $params : $params;
		$id = isset($params->inout_id) && $params->inout_id ? $params->inout_id : 0;
		$having = isset($params->having) && $params->having == 'amount' ? 'having sum(ttl_amt) = t1.ttl_amt)' : 'having sum(qty) = t1.qty)';
		$str = "select *, ((select doc_no from cf_order where id = t1.order_id) ||'_'|| (t1.seq) ||'_'|| (select name from m_itemcat where id = t1.itemcat_id)) as list_name from cf_order_line t1
			where is_active = '1' and is_deleted = '0' and order_id = (select order_id from cf_inout where id = $id) 
			and not exists (select 1 from cf_inout_line where is_active = '1' and is_deleted = '0' and order_line_id = t1.id and inout_id = $id $having";
		$response['total'] = 0;
		$response['rows']  = $this->db->query($str)->result();
		return $response;
	} */
	
	/* function cf_inout_line_vs_invoice_line($params)
	{
		$params = is_array($params) ? (object) $params : $params;
		$id = isset($params->invoice_id) && $params->invoice_id ? $params->invoice_id : 0;
		$having = isset($params->having) && $params->having == 'amount' ? 'having sum(ttl_amt) = t1.ttl_amt)' : 'having sum(qty) = t1.qty)';
		$str = "select *, ((select doc_no from cf_inout where id = t1.inout_id) ||'_'|| (t1.seq) ||'_'|| (select name from m_itemcat where id = t1.itemcat_id)) as list_name from cf_inout_line t1
			where is_active = '1' and is_deleted = '0' and inout_id = (select inout_id from cf_invoice where id = 3) 
			and not exists (select 1 from cf_invoice_line where is_active = '1' and is_deleted = '0' and inout_line_id = t1.id and invoice_id = $id $having";
		$response['total'] = 0;
		$response['rows']  = $this->db->query($str)->result();
		return $response;
	} */
	
	function cf_ar_ap_update_summary($params)
	{
		$params = is_array($params) ? (object) $params : $params;
		$id = isset($params->ar_ap_id) ? 'where t1.id = '.$params->ar_ap_id : '';
		if (isset($params->is_line) && $params->is_line) {
			$str = "update cf_ar_ap t1 set (sub_total, vat_total, grand_total) = 
				(
					select coalesce(sum(sub_amt),0), coalesce(sum(vat_amt),0), coalesce(sum(ttl_amt),0) from cf_ar_ap_line t2 
					where t2.is_active = '1' and t2.is_deleted = '0' and t2.ar_ap_id = t1.id
				)
				$id";
		}
		if (isset($params->is_plan) && $params->is_plan) {
			$str = "update cf_ar_ap t1 set (sub_total, vat_total, grand_total) = 
				(
					select coalesce(sum(sub_amt),0), coalesce(sum(vat_amt),0), coalesce(sum(ttl_amt),0) from cf_ar_ap_plan t2 
					where t2.is_active = '1' and t2.is_deleted = '0' and t2.ar_ap_id = t1.id
				)
				$id";
		}
		return $this->db->query($str);
	}
	
	function cf_ar_ap_valid_amount($params)
	{
		/* Insert: (grand_total - plan_total) < new_amount => error */
		/* Update: (grand_total - sum(plan_amount except current id)) < new_amount => error */
		$params = is_array($params) ? (object) $params : $params;
		if (! isset($params->ar_ap_id) && !$params->ar_ap_id)
			return false;
		
		$id = isset($params->id) && $params->id ? 'and t2.id <> '.$params->id : '';
		$ar_ap_id = $params->ar_ap_id;
		if (isset($params->is_plan) && $params->is_plan) {
			$str = "SELECT (grand_total - (select coalesce(sum(amount),0) from cf_ar_ap_plan t2 where t2.is_active = '1' and t2.is_deleted = '0' and t2.ar_ap_id = t1.id $id)) as amount 
				from cf_ar_ap t1 where t1.id = $ar_ap_id";
		}
		$row = $this->db->query($str)->row();
		if ($row->amount - $params->amount < 0) {
			$this->session->set_flashdata('message', $row->amount);
			return FALSE;
		}
		return TRUE;
	}
	
	function cf_invoice_update_summary($params)
	{
		$params = is_array($params) ? (object) $params : $params;
		$id = isset($params->invoice_id) ? 'where t1.id = '.$params->invoice_id : '';
		if (isset($params->is_line) && $params->is_line) {
			$str = "update cf_invoice t1 set (sub_total, vat_total, grand_total) = 
				(
					select coalesce(sum(sub_amt),0), coalesce(sum(vat_amt),0), coalesce(sum(ttl_amt),0) from cf_invoice_line t2 
					where t2.is_active = '1' and t2.is_deleted = '0' and t2.invoice_id = t1.id
				)
				$id";
		}
		if (isset($params->is_plan) && $params->is_plan) {
			$str = "update cf_invoice t1 set (plan_total) = 
				(
					select coalesce(sum(amount),0) from cf_invoice_plan t2 
					where t2.is_active = '1' and t2.is_deleted = '0' and t2.invoice_id = t1.id
				)
				$id";
		}
		return $this->db->query($str);
	}
	
	function cf_invoice_valid_amount($params)
	{
		/* Insert: (grand_total - plan_total) < new_amount => error */
		/* Update: (grand_total - sum(plan_amount except current id)) < new_amount => error */
		$params = is_array($params) ? (object) $params : $params;
		if (! isset($params->invoice_id) && !$params->invoice_id)
			return false;
		
		$id = isset($params->id) && $params->id ? 'and t2.id <> '.$params->id : '';
		$invoice_id = $params->invoice_id;
		if (isset($params->is_plan) && $params->is_plan) {
			// $str = "SELECT grand_total,
				// (
					// select coalesce(sum(amount),0) from cf_invoice_plan t2 where t2.is_active = '1' and t2.is_deleted = '0' and t2.invoice_id = t1.id $id
				// ) as plan_total 
				// from cf_invoice t1 where t1.id = $invoice_id";
			$str = "SELECT (grand_total - (select coalesce(sum(amount),0) from cf_invoice_plan t2 where t2.is_active = '1' and t2.is_deleted = '0' and t2.invoice_id = t1.id $id)) as amount 
				from cf_invoice t1 where t1.id = $invoice_id";
		}
		$row = $this->db->query($str)->row();
		// if ($row->grand_total - $row->plan_total - $params->amount < 0) {
		if ($row->amount - $params->amount < 0) {
			// $this->session->set_flashdata('message', $row->grand_total - $row->plan_total);
			$this->session->set_flashdata('message', $row->amount);
			return FALSE;
		}
		return TRUE;
		// if ($row->grand_total - $row->plan_total < $params->amount)
	}
	
	function cf_requisition_valid_qty($params)
	{
		$params = is_array($params) ? (object) $params : $params;
		if (! isset($params->request_line_id) && !$params->request_line_id)
			return false;
		
		$id = $params->request_line_id;
		$str = "select (t1.qty - (select coalesce(sum(qty),0) from cf_requisition_line where is_active = '1' and is_deleted = '0' and request_line_id = t1.id)) as qty 
			from cf_request_line as t1 where t1.is_deleted = '0' and t1.id = $id";
		$row = $this->db->query($str)->row();
		if ($row->qty - $params->qty < 0) {
			$this->session->set_flashdata('message', $row->qty);
			return FALSE;
		}
		return TRUE;
	}
	
}