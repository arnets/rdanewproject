<?php
class Connection extends PDO{
	public function __construct($dsn,$user,$pass)
    {
        parent::__construct($dsn, $user, $pass);
        $this->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }    
}
?>