<?php
namespace App\Models;

use CodeIgniter\Model;

class FeedbackModel extends Model {
    protected $table = 'feedback';
    protected $allowedFields = ['id','username','designation','product_id','note','profile','status','created_at','created_by','updated_at','updated_by'];
    protected $primaryKey = 'id';

    public function getData($search='') {
        $builder = $this->db->table('feedback')
                ->select('id,username as name,profile,designation,product_id,note')
                ->where(['status'=>1]);
        if(!empty($search)) {
            $builder->like('title',$search);
        }
        $builder->orderBy('name','ASC');
        $result = $builder->get()->getResultArray();
        return $result;
    }

    function customerFeedback(){
        $builder =  $this->db->table('feedback')->select('feedback.id,feedback.product_id,product_management.product_title,
        product_management.compare_price,
        product_management.price,
        product_management.price_offer_type,
        product_management.product_image,feedback.designation,feedback.note,feedback.username,feedback.profile,feedback.created_at');
        $builder->join('product_management','product_management.id = feedback.product_id','left');
        $builder->where(['feedback.status'=>1]);
        $builder->orderBy('feedback.id','DESC');
        $result = $builder->get()->getResultArray();
        return $result;
        

        
    }
}