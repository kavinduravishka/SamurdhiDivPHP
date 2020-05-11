<?php

class Officer4 extends Dbh{

    public function loadPersonalFiles() {

        $personalfile_list='';
        $sql="SELECT * FROM personalfile WHERE is_deleted=0 ORDER BY date_appointed";
        $stmt=$this->connect()->query($sql);
        while($row=$stmt->fetch()){
            $personalfile_list.="<tr>";
            $personalfile_list.="<td>{$row['nic_number']}</td>";
            $personalfile_list.="<td>{$row['name']}</td>";
            $personalfile_list.="<td>{$row['designation']}</td>";
            $personalfile_list.="<td>{$row['service']}</td>";
            $personalfile_list.="<td>{$row['date_appointed']}</td>";
            $personalfile_list.="<td>{$row['date_of_birth']}</td>";
            $personalfile_list.="<td>{$row['date_of_pension']}</td>";
            $personalfile_list.="<td>{$row['w_op_number']}</td>";
            $personalfile_list.="<td><a href=\"modify-member.index.php?member_id={$row['member_id']}\">Edit</a></td>";
            $personalfile_list.="<td><a href=\"delete-member.index.php?member_id={$row['member_id']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
            $personalfile_list.="</tr>";
        }
        return $personalfile_list;        
    }

}