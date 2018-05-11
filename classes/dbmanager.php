<?php

	Class mon{

		public function __construct(){}


		public static function error($msg){
			try{
				file_put_contents(getcwd().'/errors/errorfile.txt',$msg.' '.Date('d-m-y/h:i:s').'\r\n', FILE_APPEND);
			}
			catch(Exception $ex){
				echo $ex->getMessage();
				exit;
			}

			echo $msg;
			exit;
		}

		public static function notifyCustomer($email,$msg){

			try{
				$headers='From:no-reply@ouracct.com\r\n';
				$subject="Successful Registration";

				$rets=mail($email,$subject,$msg,$headers);

				return $rets;
			}
			catch(Exception $ex){
				$this->error($ex->getMessage());
				file_put_contents('errors/errorfile.txt',$ex->getMessage().' '.Date('d-m-y/h:i:s').'\r\n', FILE_APPEND);
			}

		}
	}

?>