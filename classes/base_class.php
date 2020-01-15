 <?php
	class base_class extends db{
		private $Query;
		public function Normal_Query($query,$param = null){
			if(is_null($param)){
				$this->Query = $this->con->prepare($query);
				return $this->Query->execute();
			}
			else{
				$this->Query = $this->con->prepare($query);
				return $this->Query->execute($param);
			}
		}

		public function Count_Rows(){
			return $this->Query->rowCount();
		}

		public function fetch_all(){
			return $this->Query->fetchAll(PDO::FETCH_OBJ);
		}

		public function security($data){
			return trim(strip_tags($data));
		}

		public function Create_Session($session_name,$session_value){
			$_SESSION[$session_name] = $session_value;
		}

		public function Single_Result(){
			return $this->Query->fetch(PDO::FETCH_OBJ);
		}

		public function time_ago($db_msg_time){
			$db_time = strtotime($db_msg_time);
			date_default_timezone_set("Asia/Dhaka");
			$current_time = time();
			$seconds = $current_time - $db_time;
			$minutes = floor($seconds/60);
			$hours = floor($seconds/3600);
			$days = floor($seconds/86400);
			$weeks = floor($seconds/604800);
			$months = floor($seconds/2592000);
			$years = floor($seconds/31536000);

			if($seconds<=60){
				return "Just Now";
			}else if($minutes<=60){
				if($minutes == 1){
					return "1 minute ago";
				}else{
					return $minutes." minutes ago";
				}
			}else if($hours<=24){
				if($hours == 1){
					return "1 hour ago";
				}else{
					return $hours." hours ago";
				}

			}else if($days<=7){
				if($days == 1){
					return "1 day ago";
				}else{
					return $days." days ago";
				}

			}else if($weeks<=4.3){
				if($weeks == 1){
					return "1 week ago";
				}else{
					return $weeks." weeks ago";
				}

			}else if($months<=12){
				if($months == 1){
					return "1 month ago";
				}else{
					return $months." months ago";
				}

			}else{
				if($years == 1){
					return "1 year ago";
				}else{
					return $years." years ago";
				}

			}
		}

	}
?>