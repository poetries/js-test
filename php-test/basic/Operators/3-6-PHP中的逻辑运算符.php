<?php 
    $a = TRUE; //A同意
	$b = TRUE; //B同意
	$c = FALSE; //C反对
	$d = FALSE; //D反对
	//咱顺便复习下三元运算符
	echo ($a and $b)? "通过":"不通过"; //逻辑与
	echo "<br />";
	echo ($a or $c)? "通过":"不通过"; //逻辑或
	echo "<br />";
	echo ($a xor $c xor $d)? "通过":"不通过"; //逻辑异或
	echo "<br />";
	echo !$c? "通过":"不通过"; //逻辑非
	echo "<br />";
	echo $a && $d ? "通过":"不通过"; //逻辑与
	echo "<br />";
	echo $b || $c||$d? "通过":"不通过"; //逻辑或
	
	/*
      	我们可以从投票的角度来理解逻辑运算：
      
      1、逻辑与：要求所有人都投票同意，才会通过某协议；
      
      2、逻辑或：只要求一个人投票同意就行；
      
      3、逻辑异或：只能有且只能有一个人投票同意；
      
      4、逻辑非：某个人要反对，但是通过逻辑非，使其反对无效；
      
      “与”和“或”有两种不同形式运算符的原因是它们运算的优先级（就是运算的有限顺序，比如我们小学的时候学习四则运算，加减乘除混合在一起啦，优先计算乘除，再计算加减）不同
	
	*/
?>
