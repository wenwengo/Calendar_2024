<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        * {
            box-sizing:border-box;  
        	margin: 0;
        	padding: 0;
        	/* transition: 0.05s ease-in; */
 
        }
        .container{
           display:flex;
           flex-wrap: wrap;
           justify-content:center;
           align-items:center;
           /* background-color: #ff00ff; */
           width: 850px;
           margin:auto;
        }

        /* 主標列 */
        .flex-container {
            display: flex;
           flex-wrap: wrap;
           justify-content: center;
            align-items: center; 
          width: 850px;
           /* width: 100%;         強制換行 */
           background-color: #eee;
           
        }

        /* 副標列 */
        .btn{
            display: flex;
            justify-content: space-between; /* 左右靠邊 平均分散排列 */
            width: 850px;
        }
        .top{
            display: flex;
           flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            width: 100%;
        }
        .main{
            width: 850px;
        }

        .tbody{
            
            width: 100%;

        }
        .tbody > .row{
            
            display:flex;
             flex-wrap: wrap;
            /* justify-content:space-evenly; */
            justify-content: space-evenly;;
            /* background-color:pink; */
            /* margin-left:5px; */
            width: 100%;
        }


        .block-table{
            /* width:800px; */
            display:flex;
            flex-wrap:wrap;
            justify-content: center;
        }
        /* .item{ */
            .date{
            width:100px;
            height:100px;
            
            margin-left:10px;
            margin-top:10px;
            display:flex;
          ;
            background-image: url("https://picsum.photos/id/142/100/150");
            /* border:1px solid lightgreen; */
            position:relative;
            transition: all 0.5s;
            
        }
        .date:hover{
            background:yellow;
            transform: scale(1.3);
            font-weight:bold;
            color:blue;
            transition: all 0.3s;
            z-index:10;
            background-image: url("https://picsum.photos/id/106/100/150");
        }
        .item-header{
            margin-left:10px;
            margin-top:10px;
            display:inline-block;
            width:50px;
            height:25px;
            /* border:1px solid lightgreen; */
            text-align: center;
            /* background-color: darkgreen;  */
            color:lightgreen
           
        }


        .holiday{
            background:pink;
            margin-left:10px;
            margin-top:10px;
            display:flex;
            width:100px;
            height:100px;
            background-image: url("https://picsum.photos/id/63/100/150");
            /* border:1px solid lightgreen; */
            position:relative;
            transition: all 0.5s;
            /* background:white; */
            background-color: #fff;
        }
        .holiday:hover{
            background:pink;
            transform: scale(1.3);
            font-weight:bold;
            color:blue;
            transition: all 0.3s;
            z-index:10;
            background-image: url("https://picsum.photos/id/312/100/150");
        }

        .nav{
           
            width:100%;
            margin:5px 0;
        }
    </style>
</head>
<body>
                    <?php 
                        $month=(isset($_GET['month']))?$_GET['month']:date("m");    
                        $year=(isset($_GET['year']))?$_GET['year']:date("Y");

                        $firstDay=strtotime(date("$year-$month-1"));
                        $firstWeekStartDay=date("w",$firstDay);
                        $totaldays=date("t",$firstDay);
                        $lastDay=strtotime(date("Y-$month-$totaldays"));

                        $days=[];
                        for($i=0;$i<42;$i++){
                            $diff=$i-$firstWeekStartDay;
                            $days[]=date("Y-m-d",strtotime("$diff days",$firstDay));
                        }
                    
                        if($month-1<1){
                            $prev=12;
                            $prev_year=$year-1;
                        }else{
                            $prev=$month-1;
                            $prev_year=$year;
                        }
                    
                        if($month+1>12){
                            $next=1;
                            $next_year=$year+1;
                        
                        }else{
                            $next=$month+1;
                            $next_year=$year;
                        }
                    
                    ?>
    <!-- start container -->
    <div class="container">

                <!-- start flex-container (top) -->
                <div class="flex-container">
                    <div>
                                     <h1 style="color:#fff;font-family:'Noto Sans TC';text-shadow: 0 0 0.2em #444, 0 0 0.2em #87F, 0 0 0.2em #87F">
                                         萬年曆
                                     </h1>
                    </div>

                    <!-- start top -->
                    <div class="top" >

                             
                             <div class="btn">
                                  <div class="nav" >
                                      <a href="index_t.php?year=<?=$prev_year;?>&month=<?=$prev;?>">上一個月</a>                    
                                  </div>

                                  <div class="nav" >

                                      <?=$year;?>年 <?=$month;?>月
                                  </div>

                                  <div class="nav" >
                                      <a href="index_t.php?year=<?=$next_year;?>&month=<?=$next;?>">下一個月</a>

                                  </div>
                             </div>
                     </div>                                    
                     <!--end top  -->

                 </div>
                 <!-- end flex-container (top) -->
               

                <!-- start flex-container (main) -->
                <div class="flex-container" >
                    <!-- start main -->
                    <div class="main">

                        <!-- start thead -->
                        <div class="thead" >
                            <?php

                                //  echo "<div class='block-table'>";
                                 echo "<div class='item-header'>日</div>";
                                 echo "<div class='item-header'>一</div>";
                                 echo "<div class='item-header'>二</div>";
                                 echo "<div class='item-header'>三</div>";
                                 echo "<div class='item-header'>四</div>";
                                 echo "<div class='item-header'>五</div>";
                                 echo "<div class='item-header'>六</div>";
                            ?>
                        </div>
                        <!--end thead  -->

                        <div class="tbody nav" >                    
                            <?php

                                 foreach($days as $day){
                                     $format=explode("-",$day)[2];
                                     $w=date("w",strtotime($day));

                                     if($w==0){
                                        echo "<div class='row'>";
                                     }
                                        if($w==0 || $w==6){
                                        
                                            echo "<div class='holiday'>$format</div>";
                                        }else{
                                        
                                            echo "<div class='item'>";
                                            echo "<div class='date'>$format</div>";
                                            echo "</div>";
                                        }
                                     if($w==6){
                                        echo "</div>";
                                     }
                                     
                                 }
                                 echo "</div>";                           
                             ?>
                             
                        <!-- end tbody -->

                    </div>    
                    <!--end main -->

                </div>
                <!-- end flex-container (main) -->                     
                     
    </div>
    <!-- end container -->


    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</body>
</html>
