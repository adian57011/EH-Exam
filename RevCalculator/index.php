<?php

//to solve the problem i have opened an excel file and saved it as a .csv file. in the excel file i gave some dummy data
//now with the php file operation i will try to read the value from the csv file first.

//contatining the file in the variable
$file = 'Rev.csv';
//opened the file.
$open = fopen($file,'r');

//making the array here. this will let me store the revenue later.
$arr = [];

//if no object of the file opened then throwing an error
if(!$open)
{
    echo "Error";
}
else
{
    //successfully reading the data of the csv file. now comes the challenge of calculating the revenues
    while($row = fgetcsv($open))
    {
        $productName = $row[1];
        $quantity = (int) $row[2];
        $price = (double) $row[3];

        //revenue calculated for each field. i need to store the revenue as there is no field in csv file that sorts the revenue.
        $revenue = $quantity * $price;

        // i can make an array. this array will store the product name as well as the revenue. then i can sort the array and print it.
        //i cannot make the array here. as i will need to access it beyond the scope.
        //$arr = [];

        if (!isset($arr[$productName])) {
            $arr[$productName] = 0; // Initialize revenue to 0 for this product
        }
        $arr[$productName] += $revenue;
 
    }
    //as all the data are stored in this associative array. now i just sort it
    arsort($arr);
    //printing the associative array with its revenue.
    foreach ($arr as $productName => $revenue)
    {
        echo "$productName: $revenue\n";
    }

    fclose($open);
}




?>