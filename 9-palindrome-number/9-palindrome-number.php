class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        return $x == $this->reverseInteger($x);
    }
    
    private function reverseInteger($number)
    {
        $reverseNumber = 0;  
        while ($number >= 1)  
        {  
            $reminder = $number % 10;  
            $reverseNumber = ($reverseNumber * 10) + $reminder;  
            $number = ($number / 10);   
        }  
        return $reverseNumber; 
    }  
}