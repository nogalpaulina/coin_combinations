<?php 

    require_once "src/CoinCombinations.php";   

    class CoinCombinationsTest extends PHPUnit_Framework_TestCase 
    {                                                   

        function test_makeChange_with_27()
        {
            //Arrange
            $test_CoinCombinations = new CoinCombinations;
            $input = "27";

            //Act
            $result = $test_CoinCombinations->makeChange($input);

            //Assert 
            $this->assertEquals(["quarters" => 1, "dimes" => 0, "nickels" => 0, "pennies" => 2], $result);
        }

        function test_makeChange_with_72()

        {
            $test_CoinCombinations = new CoinCombinations;
            $input = "72";

            $result = $test_CoinCombinations->makeChange($input);

            $this->assertEquals(["quarters" => 2, "dimes" => 2, "nickels" => 0, "pennies" => 2], $result);
        }

        function test_makeChange_with_9()

        {
            $test_CoinCombinations = new CoinCombinations;
            $input = "9";

            $result = $test_CoinCombinations->makeChange($input);

            $this->assertEquals(["quarters" => 0, "dimes" => 0, "nickels" => 1, "pennies" => 4], $result);
        }
    }

?>