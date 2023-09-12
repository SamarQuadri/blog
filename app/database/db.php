<?php
session_start();

require('connect.php');

// show values in human readerable formet
function dd($value)
{
    echo "<pre>", print_r($value, true), "<pre>";
    die();
}

// var_dump($users);

// execute code fetch
function executeQuery($sql, $data)
{
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}

// select all function
function SelectAll($table, $condition = [])
{
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($condition)) {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;

    } else {
        // return records that match conditions
        // $sql = "SELECT * FROM $table where admin = 0 and username = 'samar01'";
        $i = 0;
        foreach ($condition as $key => $value) {
            if ($i == 0) {
                $sql = $sql . " WHERE $key=?";
            } else {
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        $stmt = executeQuery($sql, $condition);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;

        // dd($sql);
    }

}
function SelectOne($table, $condition)
{
    global $conn;
    $sql = "SELECT * FROM $table";
    // return records that match conditions

    $i = 0;
    foreach ($condition as $key => $value) {
        if ($i == 0) {
            $sql = $sql . " WHERE $key=?";
        } else {
            $sql = $sql . " AND $key=?";
        }
        $i++;
    }
    // $sql = "SELECT * FROM $table where admin = 0 and username = 'samar01' LIMIT 1";
    $sql = $sql . " LIMIT 1";
    $stmt = executeQuery($sql, $condition);
    $records = $stmt->get_result()->fetch_assoc();
    return $records;

    // dd($sql);

}
// create funtion
function create($table, $data)
{
    global $conn;
    // $sql = "INSERT INTO users (username,admin,email,password) VALUES(?,?,?,?)";
    //Using this  $sql = "INSERT INTO users SET username=?,admin=?, email=?, password=?";
    $sql = "INSERT INTO $table SET ";
    $i = 0;
    foreach ($data as $key => $value) {
        if ($i == 0) {
            $sql = $sql . " $key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }
    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;

}
// update funtion
function update($table, $id, $data)
{
    global $conn;
    // $sql = "UPDATE users SET username=?,admin=?, email=?, password=? WHERE id=?";
    $sql = "UPDATE $table SET ";
    $i = 0;
    foreach ($data as $key => $value) {
        if ($i == 0) {
            $sql = $sql . " $key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }
    $sql = $sql . " WHERE id=?";
    $data['id'] = $id;

    $stmt = executeQuery($sql, $data);

    return $stmt->affected_rows;
}

// delete function
function delete($table, $id)
{
    global $conn;
    // $sql = "DELETE FROM users WHERE id=?";
    $sql = "DELETE FROM $table WHERE id=?";

    $stmt = executeQuery($sql, ['id' => $id]);     //associate array => with key id

    return $stmt->affected_rows;
}

// $data = [
//     'username' => 'samarkquadri',
//     'admin' => 0,
//     'email' => 'sam7765@gmail.com',
//     'password' => 12345
// ];
?>