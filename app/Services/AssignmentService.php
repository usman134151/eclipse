<?php 
namespace App\Services;
class AssignmentService 
{
    
    protected $assignment;
    
    /**
     * Constructs a new assignment object.
     *
     */
    public function __construct()
    {
        
    }

    public function getContent( $data =  null  )
    {
        return [
            'assignment_id'         =>  $data['id'],
            'assignment_no'         =>  '101787-'.$data['id'],
            'assignment_start_date' =>  api_date_formate(date('d-m-Y h:i a')),
            'assignment_type' => ($data['id'] % 2 == 0)?'virtual':'in-person',
            'accommondation'        =>  'Sign Language Interpreting Services',
            'service'               =>  'American Sign Language Interpreting',
            'address'               =>  'National Library of Australia, attraction, Canberra, Australia',
            'latitude'              =>  ($data['id'] % 2 != 0)?'-35.29648635':null,
            'longitude'             =>  ($data['id'] % 2 != 0)?'149.12951134999997':null,
            'meeting_name'          =>  ($data['id'] % 2 == 0)?'Language Interpreting':null,
            'meeting_link'          =>  ($data['id'] % 2 == 0)?'https://meet.google.com/gdo-qgdjfjf-test':null,
        ];
    }

    public function getAllContent( $data = null )
    {
        return [
            'assignment_id'         =>  $data['id'],
            'assignment_no'         =>  '101787-'.$data['id'],
            'assignment_start_date' =>  api_date_formate(date('d-m-Y h:i a')),
            'assignment_start_time' =>  '11:15 AM',
            'assignment_end_date' =>  api_date_formate(date('d-m-Y h:i a')),
            'assignment_end_time' =>  '1:15 PM',
            'assignment_type' => ($data['id'] % 2 == 0)?'virtual':'in-person',
            'industory'             =>  'Religion',
            'specialization'        =>  'Tester',
            'point_of_content'      =>  'Thomas Charles',
            'service_consumer'      =>  [
                                            [
                                                'user_name' => 'Richared Payne', 
                                                'uid' => 1, 
                                            ],
                                            [
                                                'user_name' => 'Lori Well', 
                                                'uid' => 2, 
                                            ],
                                        ],
            'participants'          =>   [
                                            [
                                                'user_name' => 'Richared Payne', 
                                                'uid' => 1, 
                                            ],
                                            [
                                                'user_name' => 'Lori Well', 
                                                'uid' => 2, 
                                            ],
                                        ],                
            'point_of_content'      =>  'Thomas Charles',
            'accommondation'        =>  'Sign Language Interpreting Services',
            'service'               =>  'American Sign Language Interpreting',
            'address'               =>  'National Library of Australia, attraction, Canberra, Australia',
            'latitude'              =>  ($data['id'] % 2 != 0)?'-35.29648635':null,
            'longitude'             =>  ($data['id'] % 2 != 0)?'149.12951134999997':null,
            'meeting_name'          =>  ($data['id'] % 2 == 0)?'Language Interpreting':null,
            'meeting_link'          =>  ($data['id'] % 2 == 0)?'https://meet.google.com/gdo-qgdjfjf-test':null,
            'city'                  =>  'Australia',
            'province'              =>  'Australia',
            'country'               =>  'Australia',
            'customer'              =>  'Alex John',
            'company'               =>  'New Microsoft',
            'check_in_time'         =>   null,
        ];
    }

    public function paymentDetails( $data = null )
    {
        return [
            'assignment_id'     =>   $data['id'],
            'assignment_no'     =>  '101787-'.$data['id'],
            'provider_rate'     =>  '$450.00',
            'extra_charges'     =>  '$0.00',
            'total_payment'     =>  '$450.00',
        ];
    }
    
}
