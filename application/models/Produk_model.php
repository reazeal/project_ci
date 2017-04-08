<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends MY_Model
{
    public $table = 'produk';
    public $primary_key = 'id';    
    public function __construct()
    {
        parent::__construct();
        
    }

	public function get_produk_list()
    {
       	$parents = array();
        $query = $this->db->get('produk');
        if($query->num_rows()>0)
        {
            foreach($query->result() as $row)
            {
               // $parents[$row->id] = $row->id." , path : ".$row->path;
				
				$parents[] = array(
										'path' => $row->path
									);
            }
        }
        return $parents;
    }
	
	public function get_alat_list_aktif()
    {
		$this->db->where('status','Belum Aktif');
        $query = $this->db->get('alat');
        $parents = array(''=>'Silahkan Pilih...');
        if($query->num_rows()>0)
        {
            foreach($query->result() as $row)
            {
                $parents[$row->alat_id] = $row->merk." , Seri : ".$row->no_seri;
            }
        }
        return $parents;
    }
    
    
    public function get_data_alat($search, $sort, $order, $limit, $offset)
    {
    				$data = array();
    				
    				$this->db->select("
	       				alat_id,
						no_seri,
						merk,
						tipe,
						DATE_FORMAT(tgl_pembelian,'%d-%m-%Y') as tgl_pembelian,
	       				harga,
						status,
						merk_tipe
       				");
       				
       				if(!empty($search)){
						$this->db->like('no_seri',$search,'both');
						$this->db->or_like('merk',$search,'both');
						$this->db->or_like('tipe',$search,'both');
						$this->db->or_like("DATE_FORMAT(tgl_pembelian,'%d-%m-%Y')",$search,'both');
						$this->db->or_like("harga", $search,'both');
						$this->db->or_like("status", $search,'both');
					}
					
					if(!empty($sort)){$this->db->order_by($sort, $order);}else{$this->db->order_by('created_at', 'DESC');}
					$query = $this->db->get('alat', $limit, $offset);
		        	if(!empty($search)){ $totaly2 = $query->num_rows();}else{ $totaly2 = $this->db->count_all('alat'); }
			
					if ($totaly2 > 0) {
						foreach ($query->result() as $atributy) {
							
							$data[] = array(
										'no_seri' => $atributy->no_seri,
										'merk' => $atributy->merk,
										'tipe' => $atributy->tipe,
										'tgl_pembelian' => $atributy->tgl_pembelian,
										'harga' => $atributy->harga,
										'alat_id' => $atributy->alat_id,
										'merk_tipe' => $atributy->merk_tipe,
										'status' => $atributy->status
									);
						}
						
					} 
					
			return array('total'=>$totaly2,'rows' => $data);

    }
    
    public function nonaktif($datanya){       
		
		
		
    	$edit = array(
		  	'status' => "Tidak Aktif"
		);
                
		$this->db->where('alat_id', $datanya);
		$this->db->update('alat', $edit);
		
			
		
		return "succes";
		
	}

    public $rules = array(
        'insert' => array(
            'parent_id' => array('field'=>'parent_id','label'=>'Parent ID','rules'=>'trim|is_natural|required'),
            'title' => array('field'=>'title','label'=>'Title','rules'=>'trim|required'),
            'short_title' => array('field'=>'short_title','label'=>'Short title','rules'=>'trim'),
            'slug' => array('field'=>'slug', 'label'=>'Slug', 'rules'=>'trim'),
            'order' => array('field'=>'order','label'=>'Order','rules'=>'trim|is_natural'),
            'teaser' => array('field'=>'teaser','label'=>'Teaser','rules'=>'trim'),
            'content' => array('field'=>'content','label'=>'Content','rules'=>'trim'),
            'page_title' => array('field'=>'page_title','label'=>'Page title','rules'=>'trim'),
            'page_description' => array('field'=>'page_description','label'=>'Page description','rules'=>'trim'),
            'page_keywords' => array('field'=>'page_keywords','label'=>'Page keywords','rules'=>'trim'),
            'content_id' => array('field'=>'content_id', 'label'=>'Content ID', 'rules'=>'trim|is_natural|required'),
            'content_type' => array('field'=>'content_type','label'=>'Content type','rules'=>'trim|required'),
            'published_at' => array('field'=>'published_at','label'=>'Published at','rules'=>'trim|datetime'),
		    'share_fb' => array('field'=>'share_fb','label'=>'Share Facebook','rules'=>'trim'),
            'language_slug' => array('field'=>'language_slug','label'=>'Language slug','rules'=>'trim|required')
        ),
        'update' => array(
            'parent_id' => array('field'=>'parent_id','label'=>'Parent ID','rules'=>'trim|is_natural|required'),
            'title' => array('field'=>'title','label'=>'Title','rules'=>'trim|required'),
            'short_title' => array('field'=>'short_title','label'=>'Short title','rules'=>'trim'),
            'slug' => array('field'=>'slug', 'label'=>'Slug', 'rules'=>'trim'),
            'order' => array('field'=>'order','label'=>'Order','rules'=>'trim|is_natural'),
            'teaser' => array('field'=>'teaser','label'=>'Teaser','rules'=>'trim'),
            'content' => array('field'=>'content','label'=>'Content','rules'=>'trim'),
            'page_title' => array('field'=>'page_title','label'=>'Page title','rules'=>'trim|required'),
            'page_description' => array('field'=>'page_description','label'=>'Page description','rules'=>'trim'),
            'page_keywords' => array('field'=>'page_keywords','label'=>'Page keywords','rules'=>'trim'),
            'translation_id' => array('field'=>'translation_id', 'label'=>'Translation ID', 'rules'=>'trim|is_natural_no_zero|required'),
            'content_id' => array('field'=>'content_id', 'label'=>'Content ID', 'rules'=>'trim|is_natural_no_zero|required'),
            'content_type' => array('field'=>'content_type','label'=>'Content type','rules'=>'trim|required'),
            'published_at' => array('field'=>'published_at','label'=>'Published at','rules'=>'trim|datetime'),
            'language_slug' => array('field'=>'language_slug','label'=>'language_slug','rules'=>'trim|required')
        ),
        'insert_featured' => array(
            'file_name' => array('field'=>'file_name','label'=>'File name','rules'=>'trim'),
            'content_id' => array('field'=>'content_id','label'=>'Contend ID','rules'=>'tirm|is_natural_no_zero|required')
        )
    );
}