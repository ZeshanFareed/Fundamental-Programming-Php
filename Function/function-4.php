<!DOCTYPE html>  
<html>  
<head>  
    <title>Parameter Addition and Subtraction Example</title> 
</head>  
<body>  


<?php  
        // Adding two numbers  
         function add($n1, $n2) {  
            $sum = $n1 + $n2;  
            echo "<b>Sum of two numbers is : $sum <br><br>";  
         }   
  

         // Subtracting two numbers  
         function sub($x, $y) {  
            $sub = $x - $y;  
            echo "<b>Subtraction between two numbers is : $sub";  
         }   


         // Multipliction two numbers  
         function mul($x, $y) {  
            $mul = $x * $y;  
            echo "<b>Multipliction between two numbers is : $mul";  
         }    


        // Division two numbers  
           function div($x, $y) {  
            $div = $x / $y;  
            echo "<b>Division between two numbers is : $div";  
         }   

      //call function, get  two argument through input box and click on add , sub , Mul , Add button  
        if(isset($_POST['add']))  
        {  
       //call add() function  
       add($_POST['first'],$_POST['second']);  
       }   

       if(isset($_POST['sub']))  
       {  
      //call Sum() function  
      sub($_POST['first'],$_POST['second']);  
      }  

      if(isset($_POST['mul']))  
      {  
     //call Multiplication() function  
      mul($_POST['first'],$_POST['second']);  
      }  

     if(isset($_POST['div']))  
     {  
     //call Division() function  
     div($_POST['first'],$_POST['second']);  
     }  

   ?>  

    <form method="post">  
      Enter first number: <input type="number" name="first"/><br><br>  
      Enter second number: <input type="number" name="second"/><br><br>  
      <input type="submit" name="add" value="ADDITION">  
      <input type="submit" name="sub" value="SUBTRACTION">  
      <input type="submit" name="mul" value="Multipliction"> 
      <input type="submit" name="div" value="Division"> 
    </form>          

</body>  
</html>  