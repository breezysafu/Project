<?php

function AnnualTax($gender,$income){
    if($income>2000000){
        $income1=$income-2000000;
        $tax=($income1*0.36)+(1350000*0.3)+(200000*0.2)+(100000*0.1)+(350000*0.01);
    }
    if($income<2000000 && $income>=650000){
        $income1=$income-650000;
        $tax=($income1*0.3)+(200000*0.2)+(100000*0.1)+(350000*0.01);
    }
    if($income<650000 && $income>=450000){
        $income1=$income-450000;
        $tax=($income1*0.2)+(100000*0.1)+(350000*0.01);
    }
    if($income<450000 && $income>=350000){
        $income1=$income-350000;
        $tax=($income1*0.1)+(350000*0.01);
    }
    if($income<=350000){
        $tax=$income*0.01;
    }
    if($gender == 'female'){
        $ftax=$tax-($tax*0.1);
        echo "tax is :" . $ftax;
    } elseif($gender=='male'){
        echo "tax is :" . $tax;
    }
    return $tax;
}
AnnualTax('male',8000000);
AnnualTax('female',8000000);


