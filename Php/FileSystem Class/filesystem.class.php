<?php 

class FileSystem {
	public function read($file) {
		// Get the full path to the file
		$filename = $this->directory().$file;
	
		// Check if file doesn't exist
		if(file_exists($filename)===false) {
			echo ("Error: File does not exist ".$filename);
		}

		// Open the file
		$handle = fopen($filename, "r");

		// Read the file and return the content of it
		return @fread($handle,filesize($filename));
	}

	public function write($file,$content) {
		// Get the full path to the file
		$filename = $this->directory().$file;

		// Test if the file is writable
		if (is_writable($filename)===false && file_exists($filename)===true) {
			echo ("Warning: The file ".$filename." is not writable.");
			return false;
		}

		// Open the file
		$handle = fopen($filename, "w");

		// Write to file
		if(fwrite($handle,$content)) {
			// No problems encountered
			return true;
		} else {
			// Error happened while writing to file
			echo ("Error: Could not write to file ".$filename);
			return false;
		}
	}

	public function isEmpty($file) {
		if(empty($this->read($file))) {
			// This file is empty
			return true;
		} else {
			// This file is not empty
			return false;
		}
	}
	// Helper functions
	// They are private so that they can not be called from anywhere outside this class
	

	private function directory() {
		// return the current working directory
		return getcwd()."/";
	}
}