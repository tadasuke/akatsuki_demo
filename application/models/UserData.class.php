<?php

class UserData extends AK_Db {
	
	public function getDataByUserId( $userId ) {
		
		AK_Log::getLogClass() -> log( AK_Log::INFO, __METHOD__, __LINE__, 'START' );
		AK_Log::getLogClass() -> log( AK_Log::INFO, __METHOD__, __LINE__, 'userId:' . $userId );
		
		$this -> sqlcmd =
			"SELECT "
				. "  user_id "
				. ", name "
			. "FROM user_data "
			. "WHERE user_id = ? "
			;
			
		$this -> bindArray = array(
			$userId
		);
		
		$this -> select();
		
		AK_Log::getLogClass() -> log( AK_Log::INFO, __METHOD__, __LINE__, 'END' );
		return $this -> valueArray;
	}
	
	
}