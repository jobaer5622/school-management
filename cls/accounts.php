<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath.'/../lib/Database.php');
include_once($filepath.'/../helpers/Format.php');



/**
 * accounts Class
 */
class accounts
{

public function __construct()
{
    $this->db = new Database();
    $this->fm = new Format();
}

 
    //Add Payment Type
public function AddmewPayment($std_id, $inv_no, $type_of_payment, $amount, $current_date){
    
        if ($amount == "" || $type_of_payment =="0") {
        $msg = "<p class='alert alert-danger'>Fields must not be empty!</p>";
        return $msg;
    }else{
        $query = "INSERT INTO tbl_payment(std_id, inv_no, type_of_payment, amount, date) 
        VALUES('$std_id', '$inv_no', '$type_of_payment', '$amount', '$current_date')";
    $inserted_row = $this->db->insert($query);
        if ($inserted_row) {
            $msg = "<p class='alert alert-success'>Payment Added Successfully</p>";
            return $msg;
        } else {
            $msg = "<p class='alert alert-danger'>Payment Not Added.</p>";
            return $msg;
        }
    }
}

public function getAccountInfobyDate($date){
    $query = "SELECT * FROM tbl_payment WHERE date='$date'";
    $result = $this->db->select($query);
    return $result;
}


public function convertNumber($num = false)
{
    $num = str_replace(array(',', ''), '' , trim($num));
    if(! $num) {
        return false;
    }
    $num = (int) $num;
    $words = array();
    $list1 = array('', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven',
        'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'
    );
    $list2 = array('', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety', 'hundred');
    $list3 = array('', 'thousand', 'million', 'billion', 'trillion', 'quadrillion', 'quintillion', 'sextillion', 'septillion',
        'octillion', 'nonillion', 'decillion', 'undecillion', 'duodecillion', 'tredecillion', 'quattuordecillion',
        'quindecillion', 'sexdecillion', 'septendecillion', 'octodecillion', 'novemdecillion', 'vigintillion'
    );
    $num_length = strlen($num);
    $levels = (int) (($num_length + 2) / 3);
    $max_length = $levels * 3;
    $num = substr('00' . $num, -$max_length);
    $num_levels = str_split($num, 3);
    for ($i = 0; $i < count($num_levels); $i++) {
        $levels--;
        $hundreds = (int) ($num_levels[$i] / 100);
        $hundreds = ($hundreds ? ' ' . $list1[$hundreds] . ' hundred' . ( $hundreds == 1 ? '' : '' ) . ' ' : '');
        $tens = (int) ($num_levels[$i] % 100);
        $singles = '';
        if ( $tens < 20 ) {
            $tens = ($tens ? ' and ' . $list1[$tens] . ' ' : '' );
        } elseif ($tens >= 20) {
            $tens = (int)($tens / 10);
            $tens = ' and ' . $list2[$tens] . ' ';
            $singles = (int) ($num_levels[$i] % 10);
            $singles = ' ' . $list1[$singles] . ' ';
        }
        $words[] = $hundreds . $tens . $singles . ( ( $levels && ( int ) ( $num_levels[$i] ) ) ? ' ' . $list3[$levels] . ' ' : '' );
    } //end for loop
    $commas = count($words);
    if ($commas > 1) {
        $commas = $commas - 1;
    }
    $words = implode(' ',  $words);
    $words = preg_replace('/^\s\b(and)/', '', $words );
    $words = trim($words);
    $words = ucfirst($words);
    $words = $words . " Taka Only.";
    return $words;
}


}

?>