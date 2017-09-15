<?php

	/* 
		Logger v1.0
		(c) 2017 by Thielicious
		
		Logger is a simple class in PHP that lets you record actions done by clients in a txt file.
	*/


	class Logger {
		
		private
			$file,
			$prefix;
			
		public function __construct(string $filename) {
			$this->file = $filename;
		}
		
		public function setTimestamp(string $format) {
			$this->prefix = "<strong>".date($format)." &raquo; </strong>";
		}
		
		public function putLog(string $insert) {
			if (isset($this->prefix)) {
				file_put_contents($this->file, $this->prefix.$insert."<br>", FILE_APPEND);
			} else {
				echo "<script>alert(\"Timestamp not set yet.\");</script>", die;
			}
		}
		
		public function getLog() {
			$content = @file_get_contents($this->file);
			return $content;
		}
		
	}

?>
