<?php
    require_once __DIR__."/../src/Leet.php";

    class LeetTest extends PHPUnit_Framework_TestCase
    {
        function test_e_check()
        {
            // Arrange
            $test_Leet = new Leet;
            $input = "w3ll gr3at";

            // Act
            $result = $test_Leet->e_check($input);

            // Assert
            $this->assertEquals("w3ll gr3at", $result);
        }

        function test_o_check()
        {
            // Arrange
            $test_Leet = new Leet;
            $input  = "hello owl";

            // Act
            $result = $test_Leet->o_check($input);

            // Assert
            $this->assertEquals("hell0 0wl", $result);
        }

        function test_i_check()
        {
            // Arrange
            $test_Leet = new Leet;
            $input  = "I like to sit";

            // Act
            $result = $test_Leet->i_check($input);

            // Assert
            $this->assertEquals("1 like to sit", $result);
        }

        function test_s_check()
        {
            // Arrange
            $test_Leet = new Leet;
            $input  = "I likes to sit";

            // Act
            $result = $test_Leet->s_check($input);

            // Assert
            $this->assertEquals("I likez to zit", $result);
        }
    }
 ?>
