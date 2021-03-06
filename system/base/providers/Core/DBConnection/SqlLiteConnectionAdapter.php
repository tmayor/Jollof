<?php

namespace Providers\Core\DBConnection;

class SqlLiteConnectionAdapter extends BaseConnectionAdapter{
	
	public function __construct($dbName = NULL, $driverClass = ''){

		parent::__construct($dbName, $driverClass);

	}

	protected function makeConnection(array $config){ 

		$dbname = $this->getDBName();

		$type = $this->getType();

		$connectionString = 'sqlite:' . $dbname;

		if(!isset($type)){

			return NULL;
		}

		$dbo = new $type($connectionString, null, null, $config['settings']);

		return $dbo;
	}
}

?>

