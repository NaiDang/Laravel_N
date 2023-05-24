<?php
class CalculationView {
    public function output() {
       return '
          <form method="post" action="/calculate">
             <input type="number" name="num1" required>
             <select name="operator">
                <option value="cong">+</option>
                <option value="tru">-</option>
                <option value="nhan">*</option>
                <option value="chia">/</option>
             </select>
             <input type="number" name="num2" required>
             <input type="submit" value="Calculate">
          </form>
       ';
    }
 }
?>