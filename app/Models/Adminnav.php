<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adminnav extends Model
{
    protected $table = 'adminnav';
    public function get_child_tree($tree_id){
        $three_arr = array();
        $res =$this->where(['parent_id'=>$tree_id,'is_delete'=>'0'])->orderBy('order_sort','ASC')->get()->toArray();
        foreach ($res as $row) {
            $three_arr[$row['cat_id']]['name'] = $row['cat_name'];
            $three_arr[$row['cat_id']]['url'] = $row['cat_url'];
            if (isset($row['cat_id']) != NULL) {
                    $three_arr[$row['cat_id']]['cat_id'] = self::get_child_tree($row['cat_id']);
            }
        }
        return array_values($three_arr);
    }

}
