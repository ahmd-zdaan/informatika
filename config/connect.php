<?php
session_start();

$severname = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'informatika';

$connect = mysqli_connect($severname, $username, $password, $dbname);

if (!$connect) {
    die('Failed to Connect : ' . mysqli_connect_error());
}

// ================== Function ==================

function get($table, $condition = '', $select = '*')
{
    global $connect;

    $query = "SELECT " . $select . " FROM " . $table . " " . $condition;
    $result = mysqli_query($connect, $query);

    return $result;
}

function insert($table, $data)
{
    global $connect;

    $keys = array_keys($data);
    $values = array_map(function ($values) use ($connect) {
        return "'" . mysqli_real_escape_string($connect, $values) . "'";
    }, array_values($data));

    $query = "INSERT INTO $table (" . implode(",", $keys) . ") VALUES (" . implode(",", $values) . ")";
    // var_dump($query, $keys, $values); die;
    if (mysqli_query($connect, $query)) {
        return true;
    } else {
        return false;
    }
}

// function update($table, $where, $fields) {
//     global $connect;
    
//     $set = '';
//     $x = 1;

//     foreach ($fields as $column) {
//         $set .= '{$column} = "{$value}"';
//         if ($x < count($fields)) {
//             $set .= ',';
//         }
//         $x++;
//     }

//     $query = "UPDATE {$table} SET {$set} {$where}";

//     if (mysqli_query($connect, $query)) {
//         return true;
//     } else {
//         return false;
//     }
//     // if (!$this->query($sql, $fields)->error()) {
//     //     return true;
//     // }

//     // return false;
// }

// public function update($table, $id, $fields) {
//     $set = '';
//     $x = 1;
//     foreach($fields as $name => $value) {
//         $set .= "{$name} = \"{$value}\"";
//         if($x < count($fields)) {
//             $set .= ',';
//         }
//         $x++;
//     }
//     $sql = "UPDATE {$table} SET {$set} WHERE id = {$id}";
//     if(!$this->query($sql, $fields)->error()) {
//         return true;
//     }
//     return false;
// }