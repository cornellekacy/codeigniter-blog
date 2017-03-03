<?php
class M_db extends CI_Model
{
    function get_posts($number = 10, $start = 0)
    {
        $this->db->select();
        $this->db->from('posts');
        $this->db->where('active',1);
        $this->db->order_by('date_added','desc');
        $this->db->limit($number, $start);
        $query = $this->db->get();
        return $query->result_array();
    }
    function get_internet($number = 10, $start = 0)
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->where('post_cat','free_internet');
        $this->db->order_by('date_added','desc');
        $this->db->limit($number, $start);
        $query = $this->db->get();
        return $query->result_array();
    }
    function get_hacking($number = 10, $start = 0)
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->where('post_cat','hacking');
        $this->db->order_by('date_added','desc');
        $this->db->limit($number, $start);
        $query = $this->db->get();
        return $query->result_array();
    }
    function get_cracking($number = 10, $start = 0)
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->where('post_cat','cracking');
        $this->db->order_by('date_added','desc');
        $this->db->limit($number, $start);
        $query = $this->db->get();
        return $query->result_array();
    }
    function get_latest_tech_news($number = 10, $start = 0)
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->where('post_cat','latest_tech_news');
        $this->db->order_by('date_added','desc');
        $this->db->limit($number, $start);
        $query = $this->db->get();
        return $query->result_array();
    }
	function search_posts($query)
	{
		$this->db->select();
		$this->db->from('posts');
		$this->db->like("post_title", $query, 'both');
		$this->db->or_like("post", $query, 'both');
		$this->db->order_by('date_added', 'desc');
		$query = $this->db->get();
		return $query->result_array();
	}
    function get_post_count()
    {
        $this->db->select()->from('posts')->where('active',1);
        $query = $this->db->get();
        return $query->num_rows;
    }
    function get_post($post_id)
    {
        $this->db->select();
        $this->db->from('posts');
        $this->db->where(array('active'=>1,'post_id'=>$post_id));
        $this->db->order_by('date_added','desc');
        $query = $this->db->get();
        return $query->first_row('array');
    }
    function get_comment($comment_id)
    {
        $this->db->select();
        $this->db->from('comments');
        $this->db->where(array('comment_id'=>$comment_id));
        $this->db->order_by('date_added','desc');
        $query = $this->db->get();
        return $query->first_row('array');
    }
    function insert_post($data)
    {
        $this->db->insert('posts',$data);
        return $this->db->insert_id();
    }
    
    function update_post($post_id, $data)
    {
        $this->db->where('post_id',$post_id);
        $this->db->update('posts',$data);
    }
    function approve_comment($comment_id, $data)
    {
        $this->db->where('comment_id',$comment_id);
        $this->db->update('comments',$data);
    }
    
    function delete_post($post_id)
    {
        $this->db->where('post_id',$post_id);
        $this->db->delete('posts');
    }
        function update_comment($comment_id, $data)
    {
        $this->db->where('comment_id',$post_id);
        $this->db->update('comments',$data);
    }
}
