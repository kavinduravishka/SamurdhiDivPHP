<?php


abstract class Officer{

    protected  $m_logger=null;

    public function setLogger(Officer $logger = null){
        $this->m_logger = $logger;
    }

    final public function handleLoginRequest(String $request){

        $processed = $this->handleLogin($request);

        if (! $processed && $this->m_logger !== null) {
            $this->m_logger->handleLogin($request);
        }        
    }

    abstract protected function handleLogin(String $request);

    

}