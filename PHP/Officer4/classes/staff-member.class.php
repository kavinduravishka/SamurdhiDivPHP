<?php

abstract class StaffMember extends Dbh{

    protected $nic_number;
    protected $name;
    protected $designation;
    protected $service;
    protected $date_appointed;
    protected $date_of_birth;
    protected $date_of_pension;
    protected $w_op_number;
    protected $is_deleted;

    public function __construct($nic_number,$name,$designation,$service,$date_appointed,$date_of_birth,$date_of_pension,$w_op_number){
        $this->nic_number=$nic_number;
        $this->name=$name;
        $this->designation=$designation;
        $this->service=$service;
        $this->date_appointed=$date_appointed;
        $this->date_of_birth=$date_of_birth;
        $this->date_of_pension=$date_of_pension;
        $this->w_op_number=$w_op_number;
        $this->is_deleted=0;  
    }

    public static function getMember($member_id){
        $member_id=(int)$member_id;
        $sql="SELECT * FROM personalfile WHERE member_id=?";
        $db_con=new Dbh();
        $stmt=$db_con->connect()->prepare($sql);
        $stmt->execute([$member_id]);
        $members=$stmt->fetchAll();

        $nic_number='';
        $name='';
        $designation='';
        $service='';
        $date_appointed='';
        $date_of_birth='';
        $date_of_pension='';
        $w_op_number='';
        $member_type='';

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

    abstract function addMember();

    abstract function updateMember($member_id);

    public static function removeMember($member_id){
        $sql="UPDATE personalfile SET is_deleted=? WHERE member_id=?";
        $db_con=new Dbh();
        $stmt=$db_con->connect()->prepare($sql);
        $stmt->execute(['1',$member_id]);

    }
    

    








    



}