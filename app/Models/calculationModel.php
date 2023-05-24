<?php
class CalculationModel {
   public function cong($num1, $num2) {
      return $num1 + $num2;
   }

   public function tru($num1, $num2) {
      return $num1 - $num2;
   }

   public function nhan($num1, $num2) {
      return $num1 * $num2;
   }

   public function chia($num1, $num2) {
      return $num1 / $num2;
   }
}
?>