<?php

// read

// $file_name = "C:\\laragon\\www\\test\\file\\text.txt";

// $file_pointer = fopen($file_name, "r");
//এখানে লুপের মাধ্যমে ফাইলের মধ্যে থাকা সকল ডাটাগুলো একেক করে প্রিন্ট করবে।

// while($data = fgets($file_pointer)){
//     echo $data ."eol";
// }
// fclose($file_pointer);

// $customArr = file($file_name);
// var_dump($customArr);

// $data = file_get_contents($file_name);
// var_dump($data);



// Write 

$file_name = "C:\\laragon\\www\\test\\file\\text.txt";

// $file_pointer = fopen($file_name, "w");

// fwrite($file_pointer, "jackfruit\n");
// fwrite($file_pointer, "Apple\n");

// NB. file_put, file_get এ জাতীয় কোন ফাংশন থাকলে  $file_name দিতে হবে।

// file_put_contents($file_name, "Apple\n");
// file_put_contents($file_name, "Banana\n");
// file_put_contents($file_name, "Orange\n");

// 18.57
//  এখন আমরা যদি একটা কন্সট্যান্ট যোগ করি তবে আগের
//  টেক্সসহ সকল ডাকা দেখা যাবে। যেমন নিচের স্ক্রিপ্ট খেয়াল করি।
file_put_contents($file_name, "Apple\n", FILE_APPEND);
file_put_contents($file_name, "Banana\n", FILE_APPEND);
file_put_contents($file_name, "Orange\n", FILE_APPEND);
// এখন পুরো ডাটাগুলো দেখা যাচ্ছে। 

