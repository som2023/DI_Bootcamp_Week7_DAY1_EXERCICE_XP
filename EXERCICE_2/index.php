<?php
  
  class FactorialNumber
  {
    protected $_val;
    public function __construct($val)
     {
       if (!is_int($val))
         {
            throw new InvalidArgumentException('Not a number or missing argument');
         }
      $this->_val = $val;
      }
    public function result()
      {
       $factorial = 1;
       for ($i = 1; $i <= $this->_val; $i++)
        {
          $factorial *= $i;
        }
         return $factorial;
       }
   }
  
  $newfactorial = New FactorialNumber(8);
  echo $newfactorial->result();
  ?>
  
 