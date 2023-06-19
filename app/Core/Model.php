<?php


namespace App\Core;

use App\Database\Database;


class Model extends Database
{
    public function getAllPosts(): array
    {
        $db = self::getDB();
        $stmt = $db->query('SELECT * FROM tea WHERE popular = 1');
        $res = $stmt->fetchAll();
        return $res;
    }
}
