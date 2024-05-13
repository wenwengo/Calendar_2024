<?php
$firstDay=strtotime(date("Y-5-1"));
$firstWeekStartDay=date("w",$firstDay);		//該月起始日在週幾（0~6）
$days=date("t",$firstDay);					//該月總天數

// 定義特殊日期 
$specialDays=[
	"01" => ["01"=>"元旦"],
	"02" => ["14"=>"情人節"],
	"04" => ["01"=>"愚人節"],
	"05" => ["01"=>"勞動節"],
	"09" => ["03"=>"軍人節",
			 "28"=>"教師節"],
	"10" => ["10"=>"雙十節"],
	"12" => ["25"=>"聖誕節"]
];

//當月日期
$dates=[];
for($i=0;$i<42;$i++){
	if($i>=$firstWeekStartDay && $i-$firstWeekStartDay+1<=$days){
		$diff=$i-$firstWeekStartDay;
		$dates[]=date("Y-m-d",strtotime("$diff days",$firstDay));
	}else{
		$dates[]="&nbsp;";
	}
}


$counter=0;
// 列 起始
foreach($dates as $day){
	if($counter %7 ==0){
		echo "<div class='flex'>";
	}
}
// 日
if($day!="&nbsp;"){
	$isSpecialDay=false;
	$spMonth=explode("-",$dat)[1];
	$format=explode("-",$dat)[2];
	$w=date("w",strtotime($day));

	// 遇特殊節日時列出
	foreach($specialDays as $specialMonth => $isSpecialDay){
		foreach ($specialDays as $sDate => $name) {
			if ($format==$sDate && $spMonth==$specialMonth) {
				echo "<div class='item special'>$format <br> $name </div>";
				$isSpecialDay=true;
				break 2; //跳出兩層foreach迴圈外
			}
		}
	}
	
	// 非特殊節日時
	if(!$isSpecialDay){
		if ($w==0 || $w==6){ 
			echo "<div class='item holiday'>$format</div>";
		}else{
			echo "<div class='item workday'>$format</div>";
		}
	}

	// $dates[]存放空白時	
}else{
	echo "<div class='item'></div>";
}

$counter++;
if($counter%7==0)
	echo "</div>"; //列結尾
?>