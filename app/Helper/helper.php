<?php 

if(!function_exists("banglaDay")){
    function banglaDay($dayName)
    {
        $days = ["Fri" => "শুক্রবার", "Sat" => "শনিবার", "Sun" => "রবিবার", "Mon" => "সোমবার", "Tue" => "মঙ্গলবার", "Wed" => "বুধবার", "Thu" => "বৃহস্পতিবার"];
        return $days[$dayName];
    } 
}