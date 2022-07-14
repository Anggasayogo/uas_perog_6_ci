<?php

namespace App\Models;

use CodeIgniter\Model;

class Perpus_model extends Model{
    protected $table = 'studet';
    
    // SELECT students.name AS siswa, borrows.broughtdate AS tgl_pinjam, borrows.takendate AS tgl_kembali, books.name AS nama_buku, books.pagecount AS jmlh_halaman, authors.name AS penulis, types.name AS type FROM students JOIN borrows ON students.studentid = borrows.studentid JOIN books ON borrows.bookid = books.bookid JOIN authors ON books.authorid = authors.authorid JOIN types ON books.typeid = types.typeid;
    // Function Save users
    public function getUsers($id = false)
    {

    }
}