class Solution {

    /**
     * @param Integer $num
     * @return Boolean
     */
    function isPerfectSquare($num) {
        $start = 0;
        $end = $num;
        
        while ($start <= $end) {
            $mid = floor(($start + $end) / 2);
                        
            if ($mid * $mid == $num) {
                return true;
            } elseif ($mid * $mid > $num) {
                $end = $mid - 1;
            } elseif ($mid * $mid < $num) {
                $start = $mid + 1;
            }
        }
        
        return false;
    }
}