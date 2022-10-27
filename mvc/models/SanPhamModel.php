<?php
class SanPhamModel extends DB{
    //danh sach san pham bestseller
    public $truyvan = "SELECT * FROM tbl_sanpham where id_bestseller='1'";

    
     function list_BestSeller(){
        
        return $this->chayTruyVanTraVeDL($this->truyvan);
    }

     

     function gp_BestSeller(){
        return $this->giaiPhongBoNho($this->truyvan);
    }

    //danh sach all san pham
    public $truyvan1 = "SELECT * FROM tbl_sanpham ";

    
    function list_SP(){
       
       return $this->chayTruyVanTraVeDL($this->truyvan1);
   }

   
  
     //danh sach danh mục san pham
    function list_DM($key){
       $truyvan_dm = "SELECT * FROM tbl_sanpham where id_dm='$key' ";
       return mysqli_query($this->con,$truyvan_dm);
   }

   //danh sach danh mục all san pham khác id
   function list_ID_DM($id,$id_dm){
    $truyvan_dm = "SELECT * FROM tbl_sanpham WHERE id != '$id' and id_dm ='$id_dm'";
    return mysqli_query($this->con,$truyvan_dm);
}


     //danh sach hinh anh san pham
   function list_id_HinhAnh($key){
    $truyvan_dm = "SELECT * FROM tbl_sanpham where id_hinhanh='$key' ";
    return mysqli_query($this->con,$truyvan_dm);  
}

 
   function gp_HinhAnh(){
    $truyvan_dm = "SELECT * FROM tbl_sanpham ";
    return $this->giaiPhongBoNho($this->truyvan);
  }


    function gp_SP(){
       return $this->giaiPhongBoNho($this->truyvan1);
   }
    

   
   //danh sach count san pham tim kiem
 

    
    function list_Count($key){
        $truyvan_Count = "SELECT count(ten) from tbl_sanpham where ten like '%".$key."%' ";
       return mysqli_query($this->con,$truyvan_Count);
   }

    

    function gp_Count($key){
        $truyvan_Count = "SELECT count(ten) from tbl_sanpham where ten like '%".$key."%' ";
       return $this->giaiPhongBoNho($this->truyvan_Count);
   }

   //danh sach count san pham tim kiem
   

    
    function list_Search($key){
       $truyvan_Search ="select *from tbl_sanpham where ten like '%" .$key. "%'";
       return mysqli_query($this->con,$truyvan_Search);
   }

    

    function gp_Search($key){
       $truyvan_Search = "SELECT * from tbl_sanpham where ten like '%".$key."%' ";
       return $this->giaiPhongBoNho($this->truyvan_Search);
   }

   //danh sach san pham giới hạn
   public $truyvan2 = "SELECT * FROM tbl_sanpham where id_limit='1'";

    
   function list_Limit(){
      
      return $this->chayTruyVanTraVeDL($this->truyvan2);
  }

   

   function gp_Limit(){
      return $this->giaiPhongBoNho($this->truyvan2);
  }

}
?>