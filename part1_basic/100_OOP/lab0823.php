<?php

/*class Animal {
    // public $weight = 1;
    private  $_weight = 1; //通常private，後面的$字號後 會加底線
    function makeSound(){ 
    // 在function前加上private，大括弧以外的不能使用
        echo "Animal: ...<br/>";
    }

} //功能和資料 都能夠設成 公開public 或 自用 private

$obj = new Animal();
$obj ->makeSound();
$obj ->weight = -2; //類別就算沒有定義資料，外面新增一個資料給他，就會多那個資料
echo $obj ->weight; //這邊不用加$符號 ，當上面的weight不在，這段會無法印出來
*/

class Animal{
    private $_weight = 1;
    //class3的內容
    function __construct($weightValue){   
        $this->setWeight($weightValue);
        echo "Borned<br/>";
    }
    function __destruct() {
		echo "Object destroyed.";
	}
 
    public function getWeight(){ //透過公開的function，來設置資料
        return $this->_weight;
    }

    public function setWeight($value){
        if ($value > 0){
            $this ->_weight = $value;
        }
    }

    public function makeSound(){
        echo "Animal: ....<br/>";
    }

}
class Dog extends Animal { //寫類別擴充至動物
    private $_price = 0;

    function __construct($weightValue = 0, $priceValue = 0){
        parent::__construct($weightValue);
        $this->setPrice($priceValue);
    }
    public function makeSound() {
        parent::makeSound();
        echo "Dog: Wan! Wan!<br />";
    }
    public function setPrice($value)
    {
        if ($value >= 0)
            $this->_price = $value;
    }
   
    public function getPrice()
    {
        return $this->_price;
    }
}
 
$obj = new Dog(3, 60000);
echo $obj->getWeight(), '<br>';
echo $obj->getPrice(), '<br>';

// echo "flag 1<br />";
// $obj = new Animal(300); //當今天想新增不同數值，直接new一個就可以
// echo "flag 2<br />";
// echo $obj->getWeight(), "<br>";
// echo "flag 3<br />";
// $obj3 = $obj;
// echo "flag 4<br />";
// $obj = null;
// echo "flag 5<br />";

// $obj->setWeight(-3);
// echo $obj->getWeight(); // 1


?> 

