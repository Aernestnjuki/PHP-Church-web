<?php
    session_start();

    require("connect.php");

    function show($value){
        echo "<pre>", print_r($value, true), "</pre>";
        die();
    }

    function executeQuery($sql, $data){
        global $conn;
        $stmt = $conn->prepare($sql);
        $values = array_values($data);
        $types = str_repeat('s', count($values));
        $stmt->bind_param($types, ...$values);
        $stmt->execute();
        return $stmt;
    }
    
    function selectAll($table, $conditions = []){
        global $conn;
        $sql = "SELECT * FROM $table";
        if(empty($conditions)){
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            return $records;
        }else{
            // return records that match conditions...
            // $sql = 'SELECT * FROM users WHERE username = ? AND admin = ?';
    
            $i = 0;
            foreach($conditions as $key => $value){
                if ($i === 0) {
                    $sql = $sql . " WHERE $key = ?";
                }else{
                    $sql = $sql . " AND $key = ?";
                }
                $i++;
            }
            //show($sql);
            $stmt = executeQuery($sql, $conditions);
            $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            return $records;
        }
        
    }
    
    function selectOne($table, $conditions){
        global $conn;
        $sql = "SELECT * FROM $table";
      
    
        $i = 0;
        foreach($conditions as $key => $value){
            if ($i === 0) {
                $sql = $sql . " WHERE $key = ?";
            }else{
                $sql = $sql . " AND $key = ?";
            }
            $i++;
        }
        $sql = $sql . " LIMIT 1";
        //dd($sql);
        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_assoc();
        return $records;
        
        
    }
    
    function create($table, $data){
        global $conn;
    
        // $sql = "INSERT INTO users SET username=?, admin=?, email=?, password=?";
        $sql = "INSERT INTO $table SET ";
    
        $i = 0;
        foreach($data as $key => $value){
            if ($i === 0) {
                $sql = $sql . " $key = ?";
            }else{
                $sql = $sql . ", $key = ?";
            }
            $i++;
        }
        //dd($sql);
        $start = executeQuery($sql, $data);
        $id = $start->insert_id;
        return $id;
    }
    
    function update($table, $id, $data){
        global $conn;
    
        // $sql = "UPDATE users SET username=?, admin=?, email=?, password=? WHERE id=?";
        $sql = "UPDATE $table SET ";
    
        $i = 0;
        foreach($data as $key => $value){
            if ($i === 0) {
                $sql = $sql . " $key = ?";
            }else{
                $sql = $sql . ", $key = ?";
            }
            $i++;
        }
        $sql = $sql . " WHERE id=?";
        //adding a key of id in the data query array
        $data['id'] = $id;
        //show($sql);
        $start = executeQuery($sql, $data);
        return $start->affected_rows;
    }
    
    function delete($table, $id){
        global $conn;
    
        $sql = "DELETE FROM $table WHERE id=?";
    
        $start = executeQuery($sql, ['id' => $id]);
        return $start->affected_rows;
    }



   

$data = [
    'appoint_email' => 'aernestnjugunanjuki@gmail.com',
    'appoint_name' => 'Aernest Njuki',
    'appoint_county' => 'Kiambu',
    'appoint_mobile' => 734657876,
    'appoint_date' => '2022-06-17',
    'meeting_date' => '2022-06-23',
    'meeting_time' => '13:00',
    'user_id' => 1
];

//$row = update('appointments', 1, $data);
//show($row);

