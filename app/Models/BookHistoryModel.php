<?php

namespace App\Models;

use CodeIgniter\Model;

class BookHistoryModel extends Model
{
    protected $table = 'user_book_history';
    protected $allowedFields = ['user_id', 'book_id', 'last_read_at'];
    public $timestamps = false;

    public function saveHistory($userId, $bookId)
    {
        $existing = $this->where(['user_id' => $userId, 'book_id' => $bookId])->first();

        if ($existing) {
            // Update timestamp jika sudah ada
            $this->update($existing['id'], ['last_read_at' => date('Y-m-d H:i:s')]);
        } else {
            // Simpan baru
            $this->insert([
                'user_id' => $userId,
                'book_id' => $bookId,
                'last_read_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}

