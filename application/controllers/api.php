<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Example
 *
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array.
 *
 * @package		CodeIgniter
 * @subpackage	Rest Server
 * @category	Controller
 * @author		Phil Sturgeon
 * @link		http://philsturgeon.co.uk/code/
*/

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';

class Api extends REST_Controller
{
	
	public $employees = array(
		array("id" => "emp01", "firstName" => "Bob", "lastName" => "Bertington", "age" => 21, "email" => "bob@99x.lk", "averageSales" => 1000, "imageId" => "public/server/emp01.png"),
		array("id" => "emp02", "firstName" => "Steve", "lastName" => "Stevenson", "age" => 22, "email" => "steve@99x.lk", "averageSales" => 15000, "imageId" => "public/server/emp02.png"),
		array("id" => "emp03", "firstName" => "Alice", "lastName" => "Allison", "age" => 23, "email" => "alice@99x.lk", "averageSales" => 10500, "imageId" => "public/server/emp03.png")
	);
	
	public $sales_data= array(0=>array('id'=>'0','name'=>'HumanResources','years'=>array(0=>array('year'=>'2012','values'=>array(0=>array('month'=>'Jan','sales'=>250000,),1=>array('month'=>'Feb','sales'=>650000,),2=>array('month'=>'Mar','sales'=>450000,),3=>array('month'=>'Apr','sales'=>220000,),4=>array('month'=>'May','sales'=>145000,),5=>array('month'=>'Jun','sales'=>250000,),),),1=>array('year'=>'2011','values'=>array(0=>array('month'=>'Jan','sales'=>280000,),1=>array('month'=>'Feb','sales'=>350000,),2=>array('month'=>'Mar','sales'=>140000,),3=>array('month'=>'Apr','sales'=>220000,),4=>array('month'=>'May','sales'=>450000,),5=>array('month'=>'Jun','sales'=>440000,),),),2=>array('year'=>'2010','values'=>array(0=>array('month'=>'Jan','sales'=>200000,),1=>array('month'=>'Feb','sales'=>250000,),2=>array('month'=>'Mar','sales'=>370000,),3=>array('month'=>'Apr','sales'=>520000,),4=>array('month'=>'May','sales'=>450000,),5=>array('month'=>'Jun','sales'=>420000,),),),),),1=>array('id'=>'1','name'=>'Marketing','years'=>array(0=>array('year'=>'2012','values'=>array(0=>array('month'=>'Jan','sales'=>250000,),1=>array('month'=>'Feb','sales'=>320000,),2=>array('month'=>'Mar','sales'=>170000,),3=>array('month'=>'Apr','sales'=>190000,),4=>array('month'=>'May','sales'=>450000,),5=>array('month'=>'Jun','sales'=>430000,),),),1=>array('year'=>'2011','values'=>array(0=>array('month'=>'Jan','sales'=>300000,),1=>array('month'=>'Feb','sales'=>320000,),2=>array('month'=>'Mar','sales'=>330000,),3=>array('month'=>'Apr','sales'=>420000,),4=>array('month'=>'May','sales'=>450000,),5=>array('month'=>'Jun','sales'=>455000,),),),2=>array('year'=>'2010','values'=>array(0=>array('month'=>'Jan','sales'=>280000,),1=>array('month'=>'Feb','sales'=>250000,),2=>array('month'=>'Mar','sales'=>180000,),3=>array('month'=>'Apr','sales'=>220000,),4=>array('month'=>'May','sales'=>450000,),5=>array('month'=>'Jun','sales'=>350000,),),),),),2=>array('id'=>'2','name'=>'Maintenance','years'=>array(0=>array('year'=>'2012','values'=>array(0=>array('month'=>'Jan','sales'=>150000,),1=>array('month'=>'Feb','sales'=>310000,),2=>array('month'=>'Mar','sales'=>330000,),3=>array('month'=>'Apr','sales'=>400000,),4=>array('month'=>'May','sales'=>450000,),5=>array('month'=>'Jun','sales'=>250000,),),),1=>array('year'=>'2011','values'=>array(0=>array('month'=>'Jan','sales'=>220000,),1=>array('month'=>'Feb','sales'=>350000,),2=>array('month'=>'Mar','sales'=>170000,),3=>array('month'=>'Apr','sales'=>250000,),4=>array('month'=>'May','sales'=>450000,),5=>array('month'=>'Jun','sales'=>470000,),),),2=>array('year'=>'2010','values'=>array(0=>array('month'=>'Jan','sales'=>310000,),1=>array('month'=>'Feb','sales'=>350000,),2=>array('month'=>'Mar','sales'=>140000,),3=>array('month'=>'Apr','sales'=>200000,),4=>array('month'=>'May','sales'=>250000,),5=>array('month'=>'Jun','sales'=>480000,),),),),),);
	
	function departments_get()
    {
    	$departments = array("Sales", "Purchasing", "Marketing", "Production", "Testing");
    	$this->response($departments, 200);
    }
    
    function employees_get()
    {
    	$id = $this->get('id');
		if($id){
			foreach ($this->employees as $employee) {
				if($employee['id']==$id){
					$this->response($employee, 200);
				}
			}
		}

        $this->response($this->employees, 200); // 200 being the HTTP response code
    }

	function yearly_sales_get()
	{
		$this->response($this->sales_data, 200);
	}
}