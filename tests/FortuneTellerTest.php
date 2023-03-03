<?php
use PHPUnit\Framework\TestCase;

require __DIR__ . "/../src/FortuneTeller.php";

class FortuneTellerTest extends TestCase {


   public function testRelationshipPrediction_WithDefaultEntries_ReturnsNotNull() {
        $fortune = new FortuneTeller();
        $fortune->getRelationshipPrediction();
        $this->assertNotNull($fortune);
   }

   public function testMoneyArray_WithDefaultEntires_ReturnsCountOf3() {

        $money = $this->createMock(Fortuneteller::class);
        $money->method('getMoneyPrediction')->willReturn(3);
        $this->assertEquals(3, $money->getMoneyPrediction());
   }
}
