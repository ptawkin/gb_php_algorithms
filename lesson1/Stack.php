<?php

class Stack extends SplStack{
    /*
    public $stack;
    public $limit;
    
    public function __construct($limit=10){
        $this->stack = [];
        $this->limit = $limit;
    }
    
    //���������� �������� � ����
    public function push($item){
      //��������, �� �������� �� ��� ����
        if(count($this->stack)<$this->limit){
            array_unshift($this->stack, $item);
        }
        else{
            throw new RuntimeException("���� ����������");
        }
    }
    
    public function pop(){
        if($this->isEmpty()){
            throw new RuntimeException("���� ����!");
        }
        else{
            return array_shift($this->stack);
        }
    }
    
    public function isEmpty(){
        return empty($this->stack);
    }
    
    public function top(){
        return current($this->stack);
    } */       
}
$object = new Stack();
$object->push("A");
$object->push("B");
$object->push("C");
//echo $object->pop();
//echo $object->pop();
echo $object->top();
echo $object->pop();
