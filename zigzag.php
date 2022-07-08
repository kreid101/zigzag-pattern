<?php 
$s="PAYPALISHIRING";
$rows=4;
function zigzag($s,$rows) 
{
    $direct=true;
    $arr=[];
    $ct=0;
    for($i=0;$i<$rows;$i++)
    {
        $arr[$i]=array();
    }
    for($i=0;$i<strlen($s);$i++)
    {
        $arr[$ct][]=$s[$i];
        if($ct==0)
        {
            $direct=true;
        }
        elseif($ct==$rows-1)
        {
            $direct=false;
        }

        $ct= $direct ? $ct+1 : $ct-1;
       
        
    }
    print_r(implode(array_merge(...$arr)));
    
}


print(zigzag($s,$rows));

?>