<?php
date_default_timezone_set('UTC');
abstract class Table
{
	protected $t_name; 
	protected $data = array();

	protected function get_mysql()
	{
		return new mysqli('localhost', 'root', '', 'nancy_blog');
	}
	
	public function save()
	{
		$query = 'INSERT INTO '.$this->t_name.' (';
		$columns = array_keys($this->data);
		foreach($columns as $column)
		{
			$query = $query . $column .', ';
		}

		$query = $query . 'Date_Created) VALUES (';
		foreach($this->data as $value)
		{
			$query = $query . '"' . $value . '", ';
		}

		$query = $query . 'NOW())';
		
		//this links the information to the database
		$m = $this->get_mysql();
		$m->query($query);
	}
}

class Post extends Table
{
	protected $t_name = 'posts';

	public function set_title($b_title)
	{
		$this->data['Title'] = $b_title;
	} 

	public function set_body($b_body)
	{
		$this->data['Body'] = $b_body;
	} 

	public function get_posts_for($month)
	{
		//get_mysql returns a new object of the php built-in mysqli class.
		$m = $this->get_mysql();
		//in Date function, the first perameter is how u want the date formatted;
		//second is the date that u want formatted,which is converted to a unix timestamp via strtotime
		$select = 'SELECT * FROM '.$this->t_name .' WHERE MONTH(Date_Created) = '. date('n', strtotime($month));
		
		//the query method of the mysqli class returns an object of the mysqli_result class,
		//which has the fetch_assoc method. 
		$result = $m->query($select);
		//fetch_all grabs rows one at a time from database and returns that array
		//fetch-assoc also turns the columns of database into keys and assigns the values to those keys.
		$rows = [];
		while($row = $result->fetch_assoc()) 
		{
        	$rows[] = $row;
    	}
    	return $rows; 
	}
}

// class mysqli_result
// {
// 	public function fetch_assoc()
// 	{

// 	}
// }

// class mysqli
// {
// 	public function query($statement)
// 	{
// 		// ...
// 		return new mysqli_result();
// 	}
// }
?>