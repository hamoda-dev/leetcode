class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        $start = 0;
        $end = count($nums) - 1;
        
        while ($start <= $end) {
            $mid = round($start + ($end - $start) / 2);

            if ($nums[$mid] == $target) {
                return $mid;
            }
            
            if ($nums[$mid] > $target) {
                $end = $mid - 1;
            } else {
                $start = $mid + 1;
            }
        }
        
        return -1;
    }
}