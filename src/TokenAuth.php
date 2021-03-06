<?php

namespace Igorgoroshit\TokenAuth;



class TokenAuth extends \Tymon\JWTAuth\JWTAuth
{
	public function make($subject, $claims = array()) 
	{
		$payload = $this->makePayload($subject, $claims);
    $token =  $this->encode($payload)->get();
    return $token;
	}

	public function sub()
	{
		$token = $this->getToken();
		$payload = $this->getPayload($token);
		return $payload['sub'];
	}
}