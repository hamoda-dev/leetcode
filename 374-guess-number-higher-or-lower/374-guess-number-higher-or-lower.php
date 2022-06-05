/** 
 * The API guess is defined in the parent class.
 * @param  num   your guess
 * @return 	     -1 if num is higher than the picked number
 *			      1 if num is lower than the picked number
 *               otherwise return 0
 * public function guess($num){}
 */

class Solution extends GuessGame {
    /**
     * @param  Integer  $n
     * @return Integer
     */
    function guessNumber($n) {
        $start = 1;
        $end = $n;
        
        while($start <= $end) {
            $mid = floor(($start + $end) / 2);
            
            if ($this->guess($mid) == 0) {
                return $mid;
            } elseif ($this->guess($mid) == -1) {
                $end = $mid - 1;
            } else {
                $start = $mid + 1;
            }
        }
    }
}