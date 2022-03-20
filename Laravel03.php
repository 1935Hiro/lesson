<? php
    //1問目
    $name = 'Hiro';
    if($name == 'Hiro'){
        echo '私は' $name 'です';
    }else{
        echo 'あなたの名前ではありません';
    }
    
    //２問目
    for($i=0,$i<=10000,$i++){
        echo $i;
    }
    
    //3問目
    $fruits = array["apple","orange","peach","banana","strawberry"];
    foreach($fruits as $fruits){
        echo $fruits;
        echo "\n";
    }
    
    //4問目
    $start = 1;
    $end = 100;
    
    for($i=$start; $i<=$end; $i++){

    if($i % 5 <= 100){
        echo $i;
    }
    }
