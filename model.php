<?php
class meal
{
   
    public $mealname;
    public $image;
    public $price;
    public $det;
    public $cat;
   
// meal name
    public function set_mealname($x)
    {
        $this->mealname = $x;
    }
    public function get_mealname()
    {
        return $this->mealname;
    }

    public function set_cat($x){
        $this->cat=$x;
    }
    public function get_cat(){
        return $this->cat;
    }
// meal img
    public function set_image($x) 
    {
        if(! is_null($x)) {
            $uploads_dir = 'img';
            $tmp_name = $x["tmp_name"];
            $name = basename($x['name']);
            move_uploaded_file($tmp_name, "$uploads_dir/$name");
            $this->image = "$uploads_dir/$name";
        }
    }
    public function get_image()
    {
        return $this->image;
    }
// meal price
    public function set_price($x)
    {
        $this->price = $x;
    }
    public function get_price()
    {
        return $this->price;
    }
// meal details
    public function set_det($x){
        $this->det =$x;
    
    }
    public function get_det(){
        return $this->det;
    }
    
}
?>

