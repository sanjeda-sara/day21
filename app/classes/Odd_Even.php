<?php


namespace App\Classes;


class Odd_Even
{
    protected $number1;
    protected $number2;
    protected $result;
    protected $option1;
//    protected $type;
    protected $i;

    public function __construct($post = null)
    {
        if ($post) {
            $this->number1 = $post['first_number'];
            $this->number2 = $post['last_number'];
            $this->option1 = $post['option'];
//            $this->type = $post['type'];
        }
    }

    public function index()
    {

        if ($this->number1 < $this->number2)
        {
            for($this->i = $this->number1; $this->i <= $this->number2; $this->i++){
                if ($this->option1=='even')
                {
                    if ($this->i%2 == 0){
                        $this->result .= $this->i.' ';
                    }
                }
                elseif ($this->option1=='odd')
                {
                    if ($this->i%2 != 0){
                        $this->result .= $this->i.' ';
                    }
                }
            }
            return $this->result;
        }
        elseif ($this->number1 > $this->number2)
        {
            for($this->i = $this->number1; $this->i >= $this->number2; $this->i--)
            {
                if ($this->option1 == 'even')
                {
                    if ($this->i%2 == 0){
                        $this->result .= $this->i.' ';
                    }
                }
                elseif ($this->option1=='odd')
                {
                    if ($this->i%2 != 0){
                        $this->result .= $this->i.' ';
                    }
                }
            }
            return $this->result;
        }
    }
}