<?php

	/* 
		Logger v1.0
		(c) 2017 by Thielicious
		
		Logger is a simple class that lets you record done actions in a text file.
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
				trigger_error("Timestamp not set", E_USER_ERROR); & die;
			}
		}
		
		public function getLog() {
			if (isset($this->file)) {
				$content = @file_get_contents($this->file);
				return $content;
			}
		}
		
		public function clear() {
			@unlink($this->file);
		}
		
	}

?>
