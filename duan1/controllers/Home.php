<?php
class HomeController
{
    public $modelSanPham;
    public $modeldanhMuc;

    public function __construct()
    {
     $this->$modeldanhMuc = new DanhMuc();
     $this->$modelSanPham = new SanPham();
    }
    public function home(){
        $listSanPham = $this->$modelSanPham->getAllSanPham();
        $listDanhMuc = $this->$modelDanhMuc->getAllDanhMuc();

        require_once './views/home.php';
    }
    
}
