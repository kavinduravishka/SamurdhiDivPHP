<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\officer4DB\staff-memberDB.class.php");

class StaffMember{

    protected $nic_number;
    protected $name;
    protected $designation;
    protected $service;
    protected $date_appointed;
    protected $date_of_birth;
    protected $date_of_pension;
    protected $w_op_number;
    protected $member_type;
    protected $is_deleted;

    public function __construct($nic_number,$name,$designation,$service,$date_appointed,$date_of_birth,$date_of_pension,$w_op_number,$member_type){
        $this->nic_number=$nic_number;
        $this->name=$name;
        $this->designation=$designation;
        $this->service=$service;
        $this->date_appointed=$date_appointed;
        $this->date_of_birth=$date_of_birth;
        $this->date_of_pension=$date_of_pension;
        $this->w_op_number=$w_op_number;
        $this->member_type=$member_type;
        $this->is_deleted=0;  
    }

    public static function getMember($member_id){
        $member_id=(int)$member_id;        

        $nic_number='';
        $name='';
        $designation='';
        $service='';
        $date_appointed='';
        $date_of_birth='';
        $date_of_pension='';
        $w_op_number='';
        $member_type='';

        $members=(new StaffMemberDB())->getMember($member_id);

        foreach($members as $member){
            $nic_number=$member['nic_number'];
            $name=$member['name'];
            $designation=$member['designation'];
            $service=$member['service'];
            $date_appointed=$member['date_appointed'];
            $date_of_birth=$member['date_of_birth'];
            $date_of_pension=$member['date_of_pension'];
            $w_op_number=$member['w_op_number'];
            $member_type=$member['member_type'];            
        }

        return compact('nic_number','name','designation','service','date_appointed','date_of_birth','date_of_pension','w_op_number','member_type');
    }

    
    public function addMember(){
        (new StaffMemberDB())->addMember($this->nic_number, $this->name , $this->designation , $this->service ,$this->date_appointed ,$this->date_of_birth ,$this->date_of_pension ,$this->w_op_number, $this->member_type);
        //(new StaffMemberDB())->addSalaryRecord($this->nic_number, $this->name ,$this->date_appointed ,$this->salary);
        header('Location: http://localhost/SamurdhiDivPHP/view/officer4View/personal-filesView.php?member_added=true');

    }

    public function updateMember($member_id){
        (new StaffMemberDB())->updateMember($this->nic_number, $this->name , $this->designation , $this->service ,$this->date_appointed ,$this->date_of_birth ,$this->date_of_pension ,$this->w_op_number, $this->member_type,$member_id);
        header('Location: http://localhost/SamurdhiDivPHP/view/officer4View/personal-filesView.php?member_modified=true');

    }

    public static function removeMember($member_id){
        (new StaffMemberDB())->removeMember($member_id);

    }
    

    








    



}