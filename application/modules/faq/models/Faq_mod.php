<?php 

	/**
	 * 
	 */
	class Faq_mod extends CI_Model
	{
		
		public function getList($searchVal='', $limit='', $offset='')
		{
			$this->db->select('*')->from('cr_faq');
			if ($searchVal) {
				$this->db->like('question', $searchVal);
			}
			if ($limit) {
				$this->db->limit($limit,$offset);
				return $this->db->get()->result();
			}else{
				return $this->db->get()->num_rows();
			}
		}

		public function getAnswerById($id='')
		{
			$qry = $this->db->select('answer')->where('question_id', $id)->get('cr_faq_answers')->result();
			$htmlData = '';
			$i = 1;
			foreach ($qry as $key => $value) {
				$htmlData .= '<p>'.$i.'. '.$value->answer.'</p>';
				$i++;
			}
			return $htmlData;
		}

		public function getUsersFaq($searchVal='', $limit='', $offset='')
		{
			$this->db->select('*');
			if ($searchVal) {
				$this->db->like('email',$searchVal);
				$this->db->or_like('phone_number',$searchVal);
				$this->db->or_like('name',$searchVal);
			}
			if ($limit) {
				return $this->db->get('cr_faq_another_question', $limit, $offset)->result();
			}else{
				return $this->db->get('cr_faq_another_question')->num_rows();
			}
			
		}

		public function edit($id='')
		{
			$data = $this->db->where('id', $id)->get('cr_faq')->row();
			$data->answers = $this->db->select('answer')->where('question_id', $data->id)->get('cr_faq_answers')->result();
			return $data;
		}
	}
?>