
        public function delete_slider($id){
       $this->load->model('slider');
       $successdell = $this->slider->deleteRecord('ID', $id);
       redirect('admin_index');
