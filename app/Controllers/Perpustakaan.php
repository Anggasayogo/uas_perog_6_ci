<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Perpustakaan extends Controller{
    public function __construct(){
       
    }

    public function index($keyword = NULL)
    {
       if($keyword == NULL){
            $data['title'] = "Perpusatakaan";
            $db = \Config\Database::connect();
            $sql = "SELECT students.name AS siswa, borrows.broughtdate AS tgl_pinjam, borrows.takendate AS tgl_kembali, books.name AS nama_buku, books.pagecount AS jmlh_halaman, authors.name AS penulis, types.name AS type 
            FROM students JOIN borrows ON students.studentid = borrows.studentid JOIN books ON borrows.bookid = books.bookid JOIN authors ON books.authorid = authors.authorid JOIN types ON books.typeid = types.typeid";
            $query['data'] = $db->query($sql)->getResultArray();

            echo view('header_view', $data);
            echo view('perpustakaan_view',$query);
            echo view('footer_view', $data);

       }else{
            $data['title'] = "Perpusatakaan";
            $db = \Config\Database::connect();
            $sql = "SELECT students.name AS siswa, borrows.broughtdate AS    tgl_pinjam, borrows.takendate AS tgl_kembali, books.name AS nama_buku, books.pagecount AS jmlh_halaman, authors.name AS penulis, types.name AS type 
            FROM students JOIN borrows ON students.studentid = borrows.studentid JOIN books ON borrows.bookid = books.bookid JOIN authors ON books.authorid = authors.authorid JOIN types ON books.typeid = types.typeid WHERE books.name LIKE '%".$keyword."%' OR students.name LIKE '%".$keyword."%'";
            $query['data'] = $db->query($sql)->getResultArray();
            
            echo view('header_view', $data);
            echo view('perpustakaan_view',$query);
            echo view('footer_view', $data);
       }
        
    }

    public function search()
    {
        $data = array(
            'keyword' => $this->request->getPost('keyword')
        );

        return redirect()->to(base_url('perpustakaan/index/' . $data['keyword']));
    }
}
