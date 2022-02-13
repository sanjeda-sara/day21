<?php


namespace App\Classes;


class Calculator
{
    protected $firstNumber;
    protected $lastNumber;
    protected $option1;
    protected $result;
    public function __construct($post=null)
    {
        if($post)
        {
            $this->firstNumber = $post['first_number'];
            $this->lastNumber = $post['last_number'];
            $this->option1 = $post['option'];
        }
    }

    protected function add (){
        return $this->firstNumber + $this->lastNumber;
    }
    protected function sub (){
        return $this->firstNumber - $this->lastNumber;
    }
    public function mul (){
        return $this->firstNumber * $this->lastNumber;
    }
    public function div (){
        return $this->firstNumber / $this->lastNumber;
    }
    protected function mod (){
        return $this->firstNumber % $this->lastNumber;
    }
    public function index()
    {
        switch ($this->option1)
        {
            case '+':
                $this->result = $this->add();
                break;
            case '-':
                $this->result = $this->sub();
                break;
            case '*':
                $this->result = $this->mul();
                break;
            case '/':
                $this->result = $this->div();
                break;
            case '%':
                $this->result = $this->mod();
                break;
        }
        return $this->result;
    }
}