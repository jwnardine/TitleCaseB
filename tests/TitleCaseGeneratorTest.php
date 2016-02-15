<?php

require_once "src/TitleCaseGenerator.php";

class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
{

    function test_makeTitleCase_oneWord()
    {
        //Arrange
        $test_TitleCaseGenerator = new TitleCaseGenerator;
        $input = "beowulf";

        //Act
        $result = $test_TitleCaseGenerator->makeTitleCase($input);

        //Assert
        $this->assertEquals("Beowulf", $result);
    }
    function test_makeTitleCase_multipleWords()
    {
        //Arrange
        $test_TitleCaseGenerator = new TitleCaseGenerator;
        $input = "the little mermaid";

        //Act
        $result = $test_TitleCaseGenerator->makeTitleCase($input);

        //Assert
        $this->assertEquals("The Little Mermaid", $result);
    }
    function test_makeTitleCase_Prepositions()
    {
        //Arrange
        $test_TitleCaseGenerator = new TitleCaseGenerator;
        $input = "hi from mars";

        //Act
        $result = $test_TitleCaseGenerator->makeTitleCase($input);

        //Assert
        $this->assertEquals("Hi from Mars", $result);
    }
    function test_makeTitleCase_firstWord()
    {
        //Arrange
        $test_TitleCaseGenerator = new TitleCaseGenerator;
        $input = "from russia with love";

        //Act
        $result = $test_TitleCaseGenerator->makeTitleCase($input);

        //Assert
        $this->assertEquals("From Russia with Love", $result);
    }
    function test_makeTitleCase_numbers()
    {
        //Arrange
        $test_TitleCaseGenerator = new TitleCaseGenerator;
        $input = "99 bottles of beer";

        //Act
        $result = $test_TitleCaseGenerator->makeTitleCase($input);

        //Assert
        $this->assertEquals("99 Bottles of Beer", $result);
    }
    function test_makeTitleCase_capsLock()
    {
        //Arrange
        $test_TitleCaseGenerator = new TitleCaseGenerator;
        $input = "LIVE AND LET DIE";

        //Act
        $result = $test_TitleCaseGenerator->makeTitleCase($input);

        //Assert
        $this->assertEquals("Live and Let Die", $result);
    }
    function test_makeTitleCase_mixedCase()
    {
        //Arrange
        $test_TitleCaseGenerator = new TitleCaseGenerator;
        $input = "lIvE AnD LeT dIe";

        //Act
        $result = $test_TitleCaseGenerator->makeTitleCase($input);

        //Assert
        $this->assertEquals("Live and Let Die", $result);
    }

}

?>
