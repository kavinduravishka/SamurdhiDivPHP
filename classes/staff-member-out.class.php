<?php

class StaffMemberOut extends StaffMember {

    public function addMember(){
        $sql="INSERT INTO personalfile(nic_number, name , designation , service ,date_appointed ,date_of_birth ,date_of_pension ,w_op_number, member_type,is_deleted ) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$this->nic_number, $this->name , $this->designation , $this->service ,$this->date_appointed ,$this->date_of_birth ,$this->date_of_pension ,$this->w_op_number, 'out',0]);

    }

    public function updateMember($member_id){
        $sql="UPDATE personalfile SET nic_number=?,name=?,designation=?,service=?,date_appointed=?,date_of_birth=?,date_of_pension=?,w_op_number=? WHERE member_id=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$this->nic_number, $this->name , $this->designation , $this->service ,$this->date_appointed ,$this->date_of_birth ,$this->date_of_pension ,$this->w_op_number,$member_id]);

    }
    
}
    