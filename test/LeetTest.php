<?php
    require_once __DIR__."/../src/Leet.php";

    class LeetTest extends PHPUnit_Framework_TestCase
    {
        function test_e_check()
        {
            // Arrange
            $test_Leet = new Leet;
            $input = "e";

            // Act
            $result = $test_Leet->e_check($input);

            // Assert
            $this->assertEquals("3", $result);
        }

        function test_o_check()
        {
            // Arrange
            $test_Leet = new Leet;
            $input  = "o";

            // Act
            $result = $test_Leet->o_check($input);

            // Assert
            $this->assertEquals("0", $result);
        }
    }
 ?>
