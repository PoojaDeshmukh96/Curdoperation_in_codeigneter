<?php
 class News_model extends CI_Model
 {
     function getAll()
     {
         $this->db->order_by('id desc');
      return  $this->db->get('news')->result(); //multipal entries thats why we use result
     }

     function getbyId($id)
     {
         return $this->db->get_where('news',array('id'=>$id))->row();
     }

     function save()
     {
      $arr['title']= $this->input->post('title');
      $arr['author']= $this->input->post('author');
      $arr['description']= $this->input->post('description');

      $this->db->insert('news',$arr);
     }

     function update($id)
     {
      $arr['title']= $this->input->post('title');
      $arr['author']= $this->input->post('author');
      $arr['description']= $this->input->post('description');
      $this->db->where(array('id'=>$id));
      $this->db->update('news',$arr);

     }
     function delete($id)
     {
         $this->db->where(array(id=>$id));
         $this->db->delete('news');
     }
 }

?>