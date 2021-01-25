<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
	   // $this->load->database();
	   $this->load->helper('url','file');
	   $this->load->model("quiz_model");
	   $this->load->model("user_model");
	   $this->load->model("result_model");
	   $this->lang->load('basic', $this->config->item('language'));
		// redirect if not loggedin
		if(!$this->session->userdata('logged_in')){
			redirect('login');
			
		}
		$logged_in=$this->session->userdata('logged_in');
		if($logged_in['base_url'] != base_url())
		{
		$this->session->unset_userdata('logged_in');		
		redirect('login');
		}
	 }

	public function index($limit='0')
	{
		
		$logged_in=$this->session->userdata('logged_in');	
		$data['limit']=$limit;
		$data['title']=$this->lang->line('quiz');
		// fetching quiz list
		$data['result']=$this->quiz_model->quiz_list($limit);
	 //   print_r($data['result']); exit;
	  
		$this->load->view('header',$data);
		$this->load->view('quiz_list',$data);
		// $this->load->view('footer',$data);
		
	}
	
	public function add_new()
	{
		
		$logged_in=$this->session->userdata('logged_in');
			if($logged_in['su']!='1'){
			exit($this->lang->line('permission_denied'));
			}

		$data['title']=$this->lang->line('add_new').' '.$this->lang->line('quiz');
		// fetching group list
		$data['group_list']=$this->user_model->group_list();
	//	$data['level_list']=$this->user_model->level_list();
		$this->load->view('header',$data);
		$this->load->view('new_quiz',$data);
		//$this->load->view('footer',$data);
	}
	

	
		public function edit_quiz($quid)
		{
		$logged_in=$this->session->userdata('logged_in');
		if($logged_in['su']!='1'){
		exit($this->lang->line('permission_denied'));
		}

		$data['title']=$this->lang->line('edit').' '.$this->lang->line('quiz');
		// fetching group list
		$data['group_list']=$this->user_model->group_list();
		$data['quiz']=$this->quiz_model->get_quiz($quid);
	
		if($data['quiz']['question_selection']=='0') {
		$data['questions']=$this->quiz_model->get_questions($data['quiz']['qids']);			 
		} else {
		$this->load->model("qbank_model");
		$data['qcl']=$this->quiz_model->get_qcl($data['quiz']['quid']);
		$data['category_list']=$this->qbank_model->category_list();
		$data['level_list']=$this->qbank_model->level_list();
		}
		
		$this->load->view('header',$data);
		$this->load->view('edit_quiz',$data);
		//$this->load->view('footer',$data);
	}
	
	
	
	
	function no_q_available($cid,$lid){
		$val="<select name='noq[]'>";
		$query=$this->db->query("select * from savsoft_qbank where cid='$cid' and lid='$lid' ");
		$nor=$query->num_rows();
		for($i=0; $i<= $nor; $i++){
			$val.="<option value='".$i."' >".$i."</option>";
	
		}
		$val.="</select>";
		echo $val;
		
	}
	
	
	
	
	function remove_qid($quid,$qid){
		
		if($this->quiz_model->remove_qid($quid,$qid)){
                        $this->session->set_flashdata('message', "<div class='alert alert-success'>".$this->lang->line('removed_successfully')." </div>");
		}
		redirect('quiz/edit_quiz/'.$quid);
	}
	
	function add_qid($quid,$qid,$cid,$skillid,$subskillid){
		
		 $this->quiz_model->add_qid($quid,$qid,$cid,$skillid,$subskillid);
          echo 'added';              
	}
	
	
	
	function pre_add_question($quid,$limit='0',$cid='0',$lid='0'){
		$cid=$this->input->post('cid');
		$lid=$this->input->post('lid');
		redirect('quiz/add_question/'.$quid.'/'.$limit.'/'.$cid.'/'.$lid);
	}
	
	
	
		public function add_question($quid,$limit='0',$cid='0',$lid='0')
	{
		$this->load->model("qbank_model");
	   
		
		$logged_in=$this->session->userdata('logged_in');
			if($logged_in['su']!='1'){
			exit($this->lang->line('permission_denied'));
			}
			
			
	 
		 $data['quiz']=$this->quiz_model->get_quiz($quid);
		$data['title']=$this->lang->line('add_question_into_quiz').': '.$data['quiz']['quiz_name'];
		if($data['quiz']['question_selection']=='0'){
		
		 $data['result']=$this->qbank_model->question_list($limit,$cid,$lid);
		 $data['category_list']=$this->qbank_model->category_list();
		 $data['level_list']=$this->qbank_model->level_list();
			 
		}
		else {
			
			exit($this->lang->line('permission_denied'));
		}
		$data['limit']=$limit;
		$data['cid']=$cid;
		$data['lid']=$lid;
		$data['quid']=$quid;
		
		$this->load->view('header',$data);
		$this->load->view('add_question_into_quiz',$data);
		// $this->load->view('footer',$data);
	}
	
	
	
	
	function up_question($quid,$qid,$not='1'){
	$logged_in=$this->session->userdata('logged_in');
	if($logged_in['su']!="1"){
	exit($this->lang->line('permission_denied'));
	return;
	}		
	for($i=1; $i <= $not; $i++){
	$this->quiz_model->up_question($quid,$qid);
	}
	redirect('quiz/edit_quiz/'.$quid, 'refresh');
	}
	
	
	
	
	
	
	function down_question($quid,$qid,$not='1'){
	$logged_in=$this->session->userdata('logged_in');
	if($logged_in['su']!="1"){
	exit($this->lang->line('permission_denied'));
	return;
	}	
			for($i=1; $i <= $not; $i++){
	$this->quiz_model->down_question($quid,$qid);
	}
	redirect('quiz/edit_quiz/'.$quid, 'refresh');
	}
	
	
	
	
		public function insert_quiz()
	{

		
			$logged_in=$this->session->userdata('logged_in');
			if($logged_in['su']!='1'){
				exit($this->lang->line('permission_denied'));
			}
		$this->load->library('form_validation');
		$this->form_validation->set_rules('quiz_name', 'quiz_name', 'required');
           if ($this->form_validation->run() == FALSE)
                {
                     $this->session->set_flashdata('message', "<div class='alert alert-danger'>".validation_errors()." </div>");
					redirect('quiz/add_new/');
                }
                else
                {
					$quid=$this->quiz_model->insert_quiz();
                   
					redirect('quiz/edit_quiz/'.$quid);
                }       

	}
	
		public function update_quiz($quid)
	{
		
		
			$logged_in=$this->session->userdata('logged_in');
			if($logged_in['su']!='1'){
				exit($this->lang->line('permission_denied'));
			}
		$this->load->library('form_validation');
		$this->form_validation->set_rules('quiz_name', 'quiz_name', 'required');
           if ($this->form_validation->run() == FALSE)
                {
                     $this->session->set_flashdata('message', "<div class='alert alert-danger'>".validation_errors()." </div>");
					redirect('quiz/edit_quiz/'.$quid);
                }
                else
                {
					$quid=$this->quiz_model->update_quiz($quid);
                   
					redirect('quiz/edit_quiz/'.$quid);
                }       

	}
	
	

	
	
	public function remove_quiz($quid){

			$logged_in=$this->session->userdata('logged_in');
			if($logged_in['su']!='1'){
				exit($this->lang->line('permission_denied'));
			} 
			
			if($this->quiz_model->remove_quiz($quid)){
                        $this->session->set_flashdata('message', "<div class='alert alert-success'>".$this->lang->line('removed_successfully')." </div>");
					}else{
						    $this->session->set_flashdata('message', "<div class='alert alert-danger'>".$this->lang->line('error_to_remove')." </div>");
						
					}
					redirect('quiz');
                     
			
		}
	



	public function quiz_detail($quid){
		
		$logged_in=$this->session->userdata('logged_in');
		$gid=$logged_in['gid'];
		$uid=$logged_in['uid'];
		$data['title']=$this->lang->line('attempt').' '.$this->lang->line('quiz');
		
		$data['quiz']=$this->quiz_model->get_quiz($quid);
		$data['checkquiz']=$this->quiz_model->check_quiz($quid,$uid);
	
		$this->load->view('header',$data);
		$this->load->view('quiz_detail',$data);
		// $this->load->view('footer',$data);
		
	}
	
	public function validate_quiz($quid){
		 //echo $quid;exit;
		$logged_in=$this->session->userdata('logged_in');
		$gid=$logged_in['gid'];
		$uid=$logged_in['uid'];
		 
		 // if this quiz already opened by user then resume it
		 $open_result=$this->quiz_model->open_result($quid,$uid);
		if($open_result != '0'){
		$this->session->set_userdata('rid', $open_result);		
		redirect('quiz/attempt/'.$open_result);			
		}
		$data['quiz']=$this->quiz_model->get_quiz($quid);
		// validate assigned group
		if(!in_array($gid,explode(',',$data['quiz']['gids']))){
		$this->session->set_flashdata('message', "<div class='alert alert-danger'>".$this->lang->line('quiz_not_assigned_to_your_group')." </div>");
		redirect('quiz/quiz_detail/'.$quid);
		 }
		// validate start end date/time
		if($data['quiz']['start_date'] > time()){
		$this->session->set_flashdata('message', "<div class='alert alert-danger'>".$this->lang->line('quiz_not_available')." </div>");
		redirect('quiz/quiz_detail/'.$quid);
		 }
		// validate start end date/time
		if($data['quiz']['end_date'] < time()){
		$this->session->set_flashdata('message', "<div class='alert alert-danger'>".$this->lang->line('quiz_ended')." </div>");
		redirect('quiz/quiz_detail/'.$quid);
		 }

		// validate ip address
		if($data['quiz']['ip_address'] !=''){
		$ip_address=explode(",",$data['quiz']['ip_address']);
		$myip=$_SERVER['REMOTE_ADDR'];
		if(!in_array($myip,$ip_address)){
		$this->session->set_flashdata('message', "<div class='alert alert-danger'>".$this->lang->line('ip_declined')." </div>");
		redirect('quiz/quiz_detail/'.$quid);
		 }
		}
		 // validate maximum attempts
		$maximum_attempt=$this->quiz_model->count_result($quid,$uid);
		if($data['quiz']['maximum_attempts'] <= $maximum_attempt){
		$this->session->set_flashdata('message', "<div class='alert alert-danger'>".$this->lang->line('reached_maximum_attempt')." </div>");
		redirect('quiz/quiz_detail/'.$quid);
		 }
		
		// insert result row and get rid (result id)
		$rid=$this->quiz_model->insert_result($quid,$uid);
		
		$this->session->set_userdata('rid', $rid);
		redirect('quiz/attempt/'.$rid);	
		
		
	}
	
	
	
	function attempt($rid){
		
		
		 $srid=$this->session->userdata('rid');
	
	
						// if linked and session rid is not matched then something wrong.
			if($rid != $srid){
		 
		$this->session->set_flashdata('message', "<div class='alert alert-danger'>".$this->lang->line('quiz_ended')." </div>");
		redirect('quiz/');

			}

		if(!$this->session->userdata('logged_in')){
			exit($this->lang->line('permission_denied'));
		}
		// get result and quiz info and validate time period
		$data['quiz']=$this->quiz_model->quiz_result($rid);
		$data['saved_answers']=$this->quiz_model->saved_answers($rid);
		
// print_r($data['saved_answers']);
			
			
		// end date/time
		if($data['quiz']['end_date'] < time()){
		$this->quiz_model->submit_result($rid);
		$this->session->unset_userdata('rid');
		$this->session->set_flashdata('message', "<div class='alert alert-danger'>".$this->lang->line('quiz_ended')." </div>");
		redirect('quiz/quiz_detail/'.$data['quiz']['quid']);
		 }

		
		// end date/time
		if(($data['quiz']['start_time']+($data['quiz']['duration']*60)) < time()) {
			
		$this->quiz_model->submit_result($rid);
		$this->session->unset_userdata('rid');
		$this->session->set_flashdata('message', "<div class='alert alert-danger'>".$this->lang->line('time_over')." </div>");
		redirect('quiz/quiz_detail/'.$data['quiz']['quid']);
		
		 }
		// remaining time in seconds 
		$data['seconds']=($data['quiz']['duration']*60) - (time()- $data['quiz']['start_time']);
		// get questions
		$data['questions']=$this->quiz_model->get_questions($data['quiz']['r_qids']);
		// get options
		$data['options']=$this->quiz_model->get_options($data['quiz']['r_qids']);
		$data['title']=$data['quiz']['quiz_name'];
		$this->load->view('header',$data);
		$this->load->view('quiz_attempt',$data);
		//$this->load->view('footer',$data);
			
		}
		
		
	
	
	function save_answer(){
		echo "<pre>";
	
		  // insert user response and calculate scroe
		echo $this->quiz_model->insert_answer();
		
		
	}	
	function save_answer_attempt(){
		
	$final_question=$_POST['final_question'];
		  // insert user response and calculate scroe
		 $this->quiz_model->insert_answer_attempt($final_question);
		
		
	}
	
	
 function set_ind_time(){
		  // update questions time spent
		$this->quiz_model->set_ind_time();
		
		
	}
 
 
 
 function upload_photo(){

if(isset($_FILES['webcam'])){
			$targets = 'photo/';
			$filename=time().'.jpg';
			$targets = $targets.''.$filename;
			if(move_uploaded_file($_FILES['webcam']['tmp_name'], $targets)){
			
				$this->session->set_flashdata('photoname', $filename);
				}
				}
}

 function upload_answer_photo(){
	// echo "in";
//echo $_FILES['image_name_ans']['name'];
//echo $_POST['rid_for_image'];

			$targets = 'answer_images/';
			$filename=time().'.jpg';
			$targets = $targets.''.$filename;	
			$final_question_rid=$_POST['rid_for_image'];
			$rid_for_user=$_POST['rid_for_user'];
			if(move_uploaded_file($_FILES['image_name_ans']['tmp_name'], $targets)){
			$error='uploaded';
		  	//$this->session->set_userdata('errormessage', $error);
		
		 $this->quiz_model->insert_answer_image($final_question_rid,$filename,$rid_for_user);
		//$this->session->set_flashdata('dispMessage', 'file uploaded');
				// redirect('quiz/attempt/'.$final_question_rid);
				
				}
				
}

 function submit_quiz(){
	 
	  $rid=$this->session->userdata('rid');
	  $uid=$this->session->userdata('uid');
	  $gid=$this->session->userdata('gid');
	  $ind_result = $this->result_model->get_ind_cat($rid,$uid);
	  $get_current_quiz1 = $this->result_model->get_current_quiz($rid);

		 $values=array();
	  $values[]=array('Test Name','Marks');
	  $values1=array();
	  $values1[]=array('Test Name','Percentage');
	  $count=0;
	 foreach($ind_result as $ind_result1){
		  $get_current_quiz_cat1 = $this->result_model->get_current_quiz_cat($get_current_quiz1);
		 
		 $schools_array = explode(",", $get_current_quiz_cat1);
 		 for($i=0;$i<count($schools_array);$i++)
		 {
			 $j=0;
			 if($schools_array[$i]==$ind_result1['cat_id'])
			 {
				$count += $j +1;
				
			 }
		 }
     $values[]=array($ind_result1['category_name'].'',intval($ind_result1['cnt']));	 
     $this->db->where('rid',$rid);
	  $userdata[$ind_result1['category_name']]=round(($ind_result1['cnt']/$count)*100);
	  $userdata[$ind_result1['category_name']]=$ind_result1['cnt'];
	 $this->db->update('savsoft_result',$userdata);
	// $values1[]=array($ind_result1['category_name'].'',round(($ind_result1['cnt']/$count)*100));
     } 
	 
	 $data['values']=json_encode($values);
	// $data['values1']=json_encode($values1);
	 
				if($this->quiz_model->submit_result($data['values'])){

// insert report		

$current_quiz=$this->result_model->get_current_quiz($rid);
$get_assigned_skills=$this->result_model->get_assigned_skills($current_quiz);
//echo $rid; echo $current_quiz; echo $get_assigned_skills['skillids'];exit;
$Check_Quiz_Skill=$get_assigned_skills['skillids'];
$Check_Quiz_Skill_Arr=explode(',',$Check_Quiz_Skill);

$Skill_ids=array_filter(array_unique($Check_Quiz_Skill_Arr));

$ij=0;
$j=1;
foreach($Skill_ids as $Skill_ids1)
{
	$skill_result1=$this->result_model->get_skill_result($rid,$Skill_ids1);
	$get_incorrect=$this->result_model->get_incorrect_answers($rid,$Skill_ids1);
	$get_assigned=$this->result_model->get_assigned_questions($current_quiz,$Skill_ids1);

	$ques_time=explode(',',$get_assigned['qs1']);
	//print_r($ques_time);
	$total_time=0;
	$e_out_actual_time=0;
	$i_out_actual_time=0;
	$b_out_actual_time=0;
	$e_out_actual_time_max=0;
	$i_out_actual_time_max=0;
	$b_out_actual_time_max=0;
	foreach($ques_time as $ques_time1)
	{
		
		
		$get_ques_position = $this->db->query("SELECT individual_time,r_qids from savsoft_result 
		where rid='".$rid."'");
		$get_ques_position_res=$get_ques_position->row_array();
		$input_array=explode(',',$get_ques_position_res['r_qids']);
		$out_position=array_search($ques_time1,$input_array);

		$time_array=explode(',',$get_ques_position_res['individual_time']);
		$total_time +=$time_array[$out_position];


	$get_ques_actual_time=$this->db->query("SELECT min_time,max_time,student_level from qbank_time_levels where qid='".$ques_time1."' order by `student_level` desc");
		
	
	$get_ques_actual_time_res=$get_ques_actual_time->result_array();
		

		$e_out_actual_time += $get_ques_actual_time_res[0]['min_time'];
		$e_out_actual_time_max += $get_ques_actual_time_res[0]['max_time'];

		$i_out_actual_time += $get_ques_actual_time_res[1]['min_time'];
		$i_out_actual_time_max += $get_ques_actual_time_res[1]['max_time'];

		$b_out_actual_time += $get_ques_actual_time_res[2]['min_time'];
		$b_out_actual_time_max += $get_ques_actual_time_res[2]['max_time'];
	

	}
	
	$percent=($skill_result1['score'] / $skill_result1['quescnt'])*100;
	$unattmpt=round($get_assigned['qcnt'] - $skill_result1['score'] - $get_incorrect['incorr']);
	if($skill_result1['score']==""){ $sscore="0"; } else { $sscore=$skill_result1['score'];}
	
	$results_id=$rid.time().$k;

	$this->db->query("INSERT INTO `skill_result`(`result_id`, `skill_id`, `skill_type`, `quescnt`, `score`, `percent`, `e_actual_time_min`, `e_actual_time_max`,`i_actual_time_min`,`i_actual_time_max`,`b_actual_time_min`,`b_actual_time_max`, `time_taken`, `rid`,  `gid`, `uid`,`incorrect`,`unattempted`) VALUES ($results_id,'".$Skill_ids1."','".$get_assigned['skill_type']."','".$get_assigned['qcnt']."','".$sscore."','".$percent."','".$e_out_actual_time."','".$e_out_actual_time_max."','".$i_out_actual_time."','".$i_out_actual_time_max."','".$b_out_actual_time."','".$b_out_actual_time_max."','".$total_time."','".$rid."','".$gid."','".$uid."','".$get_incorrect['incorr']."','".$unattmpt."')");
	//echo $this->db->last_query; exit;






// category Report start aaru 16/1/2020 modify 23/1
$get_assigned_category=$this->result_model->get_assigned_category($current_quiz,$Skill_ids1);
$i=1; 
foreach($get_assigned_category as $res_skill_report1)
{

	
	$cat_result1=$this->result_model->get_category_result($rid,$res_skill_report1['cat_id']);
	$get_cat_incorrect=$this->result_model->get_cat_incorrect_answers($rid,$res_skill_report1['cat_id']);
	$get_cat_assigned=$this->result_model->get_assigned_cat_questions($current_quiz,$res_skill_report1['cat_id']);


?>


<td><?php echo $res_skill_report1['category_name'];?></td>
<td><?php 

//echo round(($res_skill_report1['quescnt']/$result['noq'])*100);$res_skill_report1['quescnt']
echo $res_skill_report1['quescnt'];
?></td>
<td><?php //echo $res_skill_report1['score'];
echo $res_skill_report1['score'];
?></td>
<td><?php $percent=($res_skill_report1['score'] / $res_skill_report1['quescnt'])*100;
echo $percent."%"; 
?>
</td> 
<td><?php $ques_time=explode(',',$get_cat_assigned['qs1']);
	//print_r($ques_time);
	$total_time=0;
	$e_out_actual_time=0;
	$i_out_actual_time=0;
	$b_out_actual_time=0;
	$e_out_actual_time_max=0;
	$i_out_actual_time_max=0;
	$b_out_actual_time_max=0;
foreach($ques_time as $ques_time1)
	{
		$get_ques_position = $this->db->query("SELECT individual_time,r_qids from savsoft_result 
		where rid='".$rid."'");
		$get_ques_position_res=$get_ques_position->row_array();
		$input_array=explode(',',$get_ques_position_res['r_qids']);
		$out_position=array_search($ques_time1,$input_array);

		$time_array=explode(',',$get_ques_position_res['individual_time']);
		$total_time +=$time_array[$out_position];


	$get_ques_actual_time=$this->db->query("SELECT min_time,max_time,student_level from qbank_time_levels where qid='".$ques_time1."' order by `student_level` desc");
		
	
	$get_ques_actual_time_res=$get_ques_actual_time->result_array();
		

		$e_out_actual_time += $get_ques_actual_time_res[0]['min_time'];
		$e_out_actual_time_max += $get_ques_actual_time_res[0]['max_time'];

		$i_out_actual_time += $get_ques_actual_time_res[1]['min_time'];
		$i_out_actual_time_max += $get_ques_actual_time_res[1]['max_time'];

		$b_out_actual_time += $get_ques_actual_time_res[2]['min_time'];
		$b_out_actual_time_max += $get_ques_actual_time_res[2]['max_time'];
	

	}
//echo $out_actual_time;
// insert query
if($cat_result1['score']==""){ $sscore1="0"; } else { $sscore1=$cat_result1['score'];}
$percent1=round(($cat_result1['score'] / $cat_result1['quescnt'])*100);
$unattm=round($get_cat_assigned['qcnt'] - $cat_result1['score'] - $get_cat_incorrect['incorr']);

$this->db->query("INSERT INTO `category_result`(`result_id`, `cat_id`, `cat_type`, `quescnt`, `score`, `percent`, `e_actual_time_min`, `e_actual_time_max`,`i_actual_time_min`,`i_actual_time_max`,`b_actual_time_min`,`b_actual_time_max`, `time_taken`, `rid`, `gid`, `uid`,`incorrect`,`unattempted`) VALUES ($results_id,'".$res_skill_report1['cat_id']."','".$get_cat_assigned['category_name']."','".$get_cat_assigned['qcnt']."','".$sscore1."','".$percent1."','".$e_out_actual_time."','".$e_out_actual_time_max."','".$i_out_actual_time."','".$i_out_actual_time_max."','".$b_out_actual_time."','".$b_out_actual_time_max."','".$total_time."','".$rid."','".$gid."','".$uid."','".$get_cat_incorrect['incorr']."','".$unattm."')");

// category report end


// sub skill report start - aaru

$get_assigned_subskill=$this->result_model->get_assigned_subskill($current_quiz,$Skill_ids1);

foreach($get_assigned_subskill as $res_skill_report1)
	{
		$subskill_result1=$this->result_model->get_subskill_result1($rid,$res_skill_report1['sub_skill_id']);
		$get_subskill_incorrect=$this->result_model->get_subskill_incorrect($rid,$res_skill_report1['sub_skill_id']);
		$get_subskill_assigned=$this->result_model->get_subskill_assigned($current_quiz,$res_skill_report1['sub_skill_id']);


 $ques_time=explode(',',$get_subskill_assigned['qs1']);
 $total_time=0;
	$e_out_actual_time=0;
	$i_out_actual_time=0;
	$b_out_actual_time=0;
	$e_out_actual_time_max=0;
	$i_out_actual_time_max=0;
	$b_out_actual_time_max=0;
	foreach($ques_time as $ques_time1)
	{
		$get_ques_position = $this->db->query("SELECT individual_time,r_qids from savsoft_result 
		where rid='".$rid."'");
		$get_ques_position_res=$get_ques_position->row_array();
		$input_array=explode(',',$get_ques_position_res['r_qids']);
		$out_position=array_search($ques_time1,$input_array);

		$time_array=explode(',',$get_ques_position_res['individual_time']);
		$total_time +=$time_array[$out_position];


	$get_ques_actual_time=$this->db->query("SELECT min_time,max_time,student_level from qbank_time_levels where qid='".$ques_time1."' order by `student_level` desc");
		
	
	$get_ques_actual_time_res=$get_ques_actual_time->result_array();
		

		$e_out_actual_time += $get_ques_actual_time_res[0]['min_time'];
		$e_out_actual_time_max += $get_ques_actual_time_res[0]['max_time'];

		$i_out_actual_time += $get_ques_actual_time_res[1]['min_time'];
		$i_out_actual_time_max += $get_ques_actual_time_res[1]['max_time'];

		$b_out_actual_time += $get_ques_actual_time_res[2]['min_time'];
		$b_out_actual_time_max += $get_ques_actual_time_res[2]['max_time'];
	

	}
	//echo $out_actual_time;

	if($subskill_result1['score']==""){ $sscore2="0"; } else {  $sscore2=$subskill_result1['score'];}
	$unat=round($get_subskill_assigned['qcnt'] - $subskill_result1['score'] - $get_subskill_incorrect['incorr']);
	$percent3=($subskill_result1['score'] / $subskill_result1['quescnt'])*100;

	$this->db->query("INSERT INTO `sub_skill_result`(`result_id`, `sub_skill_id`, `sub_skill_name`, `quescnt`, `score`, `percent`, `e_actual_time_min`, `e_actual_time_max`,`i_actual_time_min`,`i_actual_time_max`,`b_actual_time_min`,`b_actual_time_max`,`time_taken`, `rid`, `gid`, `uid`,`incorrect`,`unattempted`) VALUES ($results_id,'".$res_skill_report1['sub_skill_id']."','".$get_subskill_assigned['sub_skill_name']."','".$get_subskill_assigned['qcnt']."','".$sscore2."','".$percent3."','".$e_out_actual_time."','".$e_out_actual_time_max."','".$i_out_actual_time."','".$i_out_actual_time_max."','".$b_out_actual_time."','".$b_out_actual_time_max."','".$total_time."','".$rid."','".$gid."','".$uid."','".$get_subskill_incorrect['incorr']."','".$unat."')");

}
// subskill report end 

		}
$k++;
	}

//end report		

//echo "www";exit;







                        $this->session->set_flashdata('message', "<div class='alert alert-success'>".$this->lang->line('quiz_submit_successfully')." </div>");
					}
					else
					{
						    $this->session->set_flashdata('message', "<div class='alert alert-danger'>".$this->lang->line('error_to_submit')." </div>");	
					}
			$this->session->unset_userdata('rid');		
					
 redirect('quiz');
 }
 
 
 
 function assign_score($rid,$qno,$score){
	 
	 $logged_in=$this->session->userdata('logged_in');
			if($logged_in['su']!='1'){
				exit($this->lang->line('permission_denied'));
			} 
			$this->quiz_model->assign_score($rid,$qno,$score);
			
			echo '1';
	 
 }
 
  function ffff()
 {
	
 $this->load->view('spherephp.php');
	// echo $this->session->userdata('ssss');

	$qwe=$this->session->userdata('ssss');
 
 }
 
 
 function get_web_page()
 {
	 
$data=$this->load->view('result.php');

 }

 function sel_syntax()
{
	
$ttk['program']=$_REQUEST['keyword'];
	

$dat=$this->load->view('compiler_syntax_code',$ttk);	
	

	
}



 function com_det_exam()
{
	
$rids=$_REQUEST['keywords'];

//echo $rids;
	
$this->load->model('quiz_model');
$data['result_compile']=$this->quiz_model->compile_history($rids);
	
	
	
$dat=$this->load->view('view_comp_det',$data);	
	

	
}

function get_kool_report()
{
	$this->load->view('koolreport');	

}


	
}
