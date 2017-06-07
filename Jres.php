<?php

class Jres
{
	public function  success (array $data=[], $msg="")
	{
		header('content-type:application/json');
		echo json_encode(['status'=>'success','data'=>$data,'message'=>$msg]); exit;
	}
	public function  failure( $msg="", array $data=[])
	{
		header('content-type:application/json');
		echo json_encode(['status'=>'failure','data'=>$data,'message'=>$msg]); exit;
	}
}
