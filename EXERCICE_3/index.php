<?php
class Array_Sort
{
    protected $_ordered_asort;

    public function __construct(array $asort)
     {
        $this->_ordered_asort = $asort;
     }
    public function ordered_sort()
     {
        $sorted_number = $this->_ordered_asort;
        sort($sorted_number);
        return$sorted_number;
      }
}
$sort_array = new Array_Sort(array(11, -2, 4, 35, 0, 8, -9));
print_r($sort_array->ordered_sort());
?>
