<?php
function con(){
    return mysqli_connect("localhost", "root", "","blog");
}
$info =[
    "name"=>"Sample Blog",
    "short"=>"SB",
    "description"=>"ကျောင်းသားများအတွက် Sample Project",
];
$role =  ["Admin","Editor","User"];
$url = "http://{$_SERVER['HTTP_HOST']}/web_Dev_Class/5_sample_blog";