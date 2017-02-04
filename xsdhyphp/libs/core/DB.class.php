<?php

class DB {

	public static $db;

	public static function init($dbtype, $config) {
		self::$db = new $dbtype;
		self::$db->connect($config);
	}

	public static function query($sql){
		return self::$db->query($sql);
	}

	public static function findAll($sql){
		if($query = self::$db->query($sql)){
			return self::$db->findAll($query);
		}else{
			return 0;
		}
	}

	public static function findOne($sql){
		if($query = self::$db->query($sql)){
			return self::$db->findOne($query);
		}else{
			return 0;
		}
	}

	public static function findResult($sql,$col=0){
		if ($query = self::$db->query($sql)) {
			return self::$db->findResult($query,$col);
		}else{
			return 0;
		}
		
	}

	public static function insert($table,$arr){
		if(self::$db->insert($table,$arr)){
			return 1;
		}else{
			return 0;
		}
	}

	public static function update($table, $arr, $where){
		if(self::$db->update($table, $arr, $where)){
			return 1;
		}else{
			return 0;
		}
	}

	public static function del($table,$where){
		return self::$db->del($table,$where);
	}

}

?>