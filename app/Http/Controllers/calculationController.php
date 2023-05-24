<?php
class CalculationController {
   private $model;

   public function __construct($model) {
      $this->model = $model;
   }

   public function calculate($num1, $operator, $num2) {
      switch ($operator) {
         case 'cong':
            $result = $this->model->cong($num1, $num2);
            break;
         case 'tru':
            $result = $this->model->tru($num1, $num2);
            break;
         case 'nhan':
            $result = $this->model->nhan($num1, $num2);
            break;
         case 'chia':
            $result = $this->model->chia($num1, $num2);
            break;
         }
    }
}
?>