<?php
header('Content-Type: text/html; charset=utf-8'); 
    echo '<br/>'."1 : ";
function make_paragraph($paragraf){
    echo htmlspecialchars("'<h1>".$paragraf."</h1>'");

}
    make_paragraph('hello world !');
    echo '<br/>'.'2 : ';
function make_heading($paragraf,$tag){
    echo htmlspecialchars("'<".$tag.">".$paragraf."</".$tag.">'");

}
    make_heading('this is a test for make heading function  !','h2');
    echo '<br/>'.'3,4 : ';
function make_tag($tag,$inlineCode){
    echo htmlspecialchars("'<".$tag." ".$inlineCode.">...</".$tag.">'");
}
    make_tag('h3','style="color: hotpink;"');
    echo "<br/> 5 : ";
function replace($paragraf){
    $order = array("\r\n", "\n", "\r");
    return str_replace($order,"<br>",$paragraf);

}
    $para = replace("hello \n world \r this is a \r\n test .");
    $answer = htmlspecialchars('this function replace all \r\n, \n, \r with <br/> . '); 
    $answer .= ' for example for this sentence : hello \n world \r this is a \r\n test . ';
    $answer .= ' output is : ';
    $answer .= htmlspecialchars($para);
    echo $answer;
    echo "<br/> 6 : ";
function randomArray(){
    $array = array();
    for($i=0;$i<10;$i++){
        array_push($array,rand());
        
    }
    return $array;
    
}    
    print_r(randomArray());
    echo "<br/> 7 : ";
function make_arrayInTag($tag,$inlineCode,$array){
    foreach($array as $value){
    echo "<".$tag." ".$inlineCode.">".$value."</".$tag.">";
    }
}  
    make_arrayInTag('li','',['yes','no']);
    echo "<br/> 8,9 : ";
function make_tabel($array){
    $sum = array();
    echo "<table>";   
    foreach($array as $value){
        echo "<tr>";
        for($i=0;$i<count($value);$i++){
          echo "<th>".$value[$i]."</th>";
          if(is_numeric($value[$i])){
             if(!$sum[$i]){
               $sum[$i] = $value[$i];
             }else{
               $sum[$i]=$sum[$i]+$value[$i];
             }
          }else{
              $sum[$i]=' ';
          }
        }
        echo "</tr>";
    }
    echo "<tr>";
    foreach($sum as $tal){
        echo "<th>".$tal."</th>";
    }
    echo "</tr>";
    echo "</table>";
}  
    $cars = array
    (
    array("Volvo",22,18,2,34,78,rand(5,15)),
    array("BMW",15,13,3,44,90,rand(5,15)),
    array("Saab",5,2,6,1,0,rand(5,15)),
    array("Land Rover",17,15,8,56,23,rand(5,15)),
    array("kia",34,16,31,4,60,rand(5,15))
    );
    make_tabel($cars);
    echo "<br/> 10,11 : ";
function touper($argument){
    echo strtoupper($argument);
    echo "<br/>";
    echo ucwords($argument);
}    
    touper('pedram amirirad');
    echo "<br/> 12 : ";
echo round(4.8); 
    echo "<br/> 13 : ";
$no = number_format(75.5,1,',','');
    echo $no;
    echo var_dump($no);
    echo "<br/> 14 : ";
function arraySumman($array){
    $x = 0;
    foreach($array as $value){
    $x = $x + $value;
    }
    return $x;
}    
    $as = array(11,12,13,14,15,16,17,18,19);
    echo " summan är : ".arraySumman($as);
    echo " medelvärdet : " .(arraySumman($as)/count($as)); 
    echo "<br/> 15 : "; 
function veckodag($veckodag){
    $veckodag = ucfirst($veckodag);   
    switch($veckodag){
        case 'Måndag':
        echo 1;
        break;
        case 'Tisdag':
        echo 2;
        break;
        case 'Onsdag':
        echo 3;
        break;
        case 'Torsdag':
        echo 4;
        break;
        case 'Fredag':
        echo 5;
        break;
        case 'Söndag':
        echo 6;
        break;
        case 'Lördag':
        echo 7;
    }
}
    echo veckodag('tisdag'); 
    echo "<br/> 16 : ";
function toPositive($value){
    $value = abs($value);
    return $value*2;
}      
    echo toPositive(-66);
    echo "<br/> 17 : ";
function summanOfArray($array,$n){  
    if(($n+1) == count($array)){
      $x = 0;
      foreach ($array as $value){
          $x=$x+$value; 
      }
      echo 'iterativ version :'.$x.' recursive version : ';
    }
    if ($n<0){return 0;}
    return $array[$n] + summanOfArray($array,($n-1));
} 
    $array = array(1,2,3,4,5);
    echo summanOfArray($array,(count($array)-1));
    echo "<br/> 18 : ";
function summanOfTal($n){
    $x=0; 
   if($n == 100){ 
       for($i=0;$i<=100;$i++){
           $x=$i+$x;
        }echo 'iterativ version : '. $x.' recursive version : ';       
    }
   if ($n == 0){
       return 0;
    }else{
        $x='no';
         return $n + summanOfTal($n-1);
        } 
    
}
   echo summanOfTal(100);
   echo "<br/> 19 : ";
function summanOfTal2($min,$max){
   $x=0;  
    for($i=$min;$i<=$max;$i++){
           $x=$i+$x;
    }echo 'iterativ version : '. $x;        
} 
function summanOfTal3($min,$max){
  if ($max < $min){
      return 0;
   }else{
      $x='no';
      return $max + summanOfTal3($min,($max-1));
    }
  }     
   summanOfTal2(10,100);
   echo ' recursiv version : ' ,summanOfTal3(10,100);
   echo "<br/> 20 : ";
function fibonacci($tal){ 
    if ($tal == 1 || $tal == 2) return 1;
    return fibonacci($tal-1) + fibonacci($tal-2);
} 
   echo fibonacci(10);
   echo "<br/> 21 : ";
function uddaTal($array){
    $x =0;
    foreach($array as $value){
        if(is_int($value/2)){
            $x++;
        }
    }
    return $x;
}
    echo uddaTal([1,2,3,4,5,6,7,8,9]); 
    echo "<br/> 22 : ";
function reverseIt($str){
    for ($i = 0, $j = strlen($str) - 1; $i < $j; $i++, $j--) {
        $tmp = $str[$i];
        $str[$i] = $str[$j];
        $str[$j] = $tmp;
    }
    
        return $str;
}
    echo reverseIt('pedram');
    echo "<br/>";
function reverseIt2($str)
    {
        for ($i = strlen($str) - 1, $out = ''; $i >= 0; $out .= $str[$i--]) {}
    
        return $out;

    } 
    echo reverseIt2('pedram');
function reverse3($str)
    {
        if (strlen($str) < 2) {
            return $str;
        }
    
        return reverse3(substr($str, 1)) . $str[0];
    }
    echo ' recursive : '.reverse3('pedram');
    echo "<br/> 23 : ";
function strong($produktNamn){
    return "<strong>".$produktNamn."</strong>";
}  
    echo strong('mobil');
    echo "<br/> 24,25 : ";
function make_div($produktNamn,$img, $pris,$knap){
    return "<div><img src='".$img.";' alt='this is a image!'><strong>".$produktNamn."</strong>".number_format($pris,2,'.','')."<button type='button'>".$knap."</button></div>";
}
    echo make_div('mobil','mobil.jpg',89.50,'Lägg till i kundvagn'); 
    echo "<br/> 26 : "; 
function mark_search_word($str,$key){      
    $pos = strpos($str,$key);
    if($pos === false){return $str;}
    if($pos == 0){
        return "<mark>".$key."</mark>".mark_search_word(substr($str,$pos+strlen($key)),$key);}
        return substr($str,0,$pos)."<mark>".$key."</mark>".mark_search_word(substr($str,$pos+strlen($key)),$key);
}


    echo mark_search_word("Second wind: a new strength or energy to continue something that is an effort. After an amicable divorce, Lincoln Huxley is ready to embrace the sexuality he repressed for more than two decades. Rush Holden is no longer willing to settle for closeted men or those who don’t share his dreams of marriage and fatherhood. A chance encounter on a lakeside pier is the second wind they both need. Or will it just be a painful reminder of all they had lost? 

    Second chance: an opportunity to try something again that failed one time. Rush and Lincoln have shared a lot of firsts—friendship, young love, and heartbreak. Cruel reality forced the two men to choose paths that took their lives in different directions. Twenty-six years later, they get a second chance to fall in love with each all over again. Can it really be that simple, or will the same issues ruin their happiness a second time? 
    
    Happily ever after: to live happily for the rest of one’s life. Rush and Lincoln know that love and life can’t be defined by words alone. Patience, commitment, and the determination to do whatever it takes will be the only way the two men achieve their happily ever after. ","is"); 



?>