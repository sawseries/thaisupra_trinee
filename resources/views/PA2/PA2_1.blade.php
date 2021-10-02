@extends('layouts.app')    
@section('content')
<!-- Page content-->



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       
    <style type="text/css">
            
/*            #polygon1{
                text-align: center;
                display: block;
            }
            
            #polygon1::after{
             content: "ครู";
             position: absolute;
             top:27%;
             margin-left: -20px;
             font-size:25pt;
           
             color: black;     
            }
            
             #polygon2{
                text-align: center;
                display: block;
            }
            
            #polygon2::after{
             content: "นักเรียน";
             position: absolute;
             top:29%;
             margin-left: -44px;
             font-size:20pt;
           
             color: black;     
            }*/
        </style>
        
            <head>
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <script>
            $(document).ready(function () {
                //  40 55 60 85 100
            });


        </script>
        <script>
            function top(num) {
                $(".top").css("background-image", "url(./image/graph/top/2.png)");
            }

            function topleft(num) {
                $(".topleft").css("background-image", "url(./image/graph/topleft/3.png)");
            }

            function topright(num) {
                $(".topright").css("background-image", "url('./image/graph/topright/2.png')");
            }

            function bottomleft(num) {
                $(".bottomleft").css("background-image", "url('./image/graph/bottomleft/3.png')");
            }

            function bottomright(num) {
                $(".bottomright").css("background-image", "url('./image/graph/bottomright/2.png')");
            }

        </script>
        <style>
            .top{
                clip-path: polygon(100% 100%,50% 0%,0% 100%);
                -webkit-clip-path: polygon(100% 100%,50% 0%,0% 100%);
                width:50%;
                height: 100%;
                float:left;
                background-repeat:no-repeat;
                -webkit-background-size:cover;
                -moz-background-size:cover;
                -o-background-size:cover;
                background-size:cover;
                background-position:center; 
                background-image:url("/assets/polygon/graph/tops.png");


            } 




            .topleft{
                clip-path: polygon(100% 100%,100% 0%,0% 100%);
                -webkit-clip-path: polygon(100% 100%,100% 0%,0% 100%);
                width:50%;
                height: 100%;
                float:left;
                background-repeat:no-repeat;
                -webkit-background-size:cover;
                -moz-background-size:cover;
                -o-background-size:cover;
                background-size:cover;
                background-position:center;
                background-image:url(./image/graph/top-left.png);
                position: relative;
            }


            /*                .topleft::before{
                         content: "นักเรียน";
                     
                      
                         font-size:28pt;           
                         color: black;  
                        }*/

            .topright{
                clip-path: polygon(0% 100%,100% 100%,0% 0%);
                -webkit-clip-path: polygon(0% 100%,100% 100%,0% 0%);
                width:50%;
                height: 100%;
                float: left;
                background-repeat:no-repeat;
                -webkit-background-size:cover;
                -moz-background-size:cover;
                -o-background-size:cover;
                background-size:cover;
                background-position:center;
                background-image:url(./image/graph/top-right.png);

                position:relative;

            }

            /*             .topright::after{
                         content: "นักเรียน";
                       
                         top:50%;
                         font-size:28pt;           
                         color: black;  
                        }*/

            .bottomleft{
                clip-path: polygon(100% 0%,1% 0%,50% 100%);
                -webkit-clip-path: polygon(100% 0%,1% 0%,50% 100%);
                width:50%;
                height: 100%; 
                float: left;
                background-repeat:no-repeat;
                -webkit-background-size:cover;
                -moz-background-size:cover;
                -o-background-size:cover;
                background-size:cover;
                background-position:center;
                background-image:url(./image/graph/bottom-left.png);


            }


            /*                   .bottomright::after{
                         content: "นักเรียน";
                         position: absolute;
                         top:50%;
                         font-size:28pt;           
                         color: black;  
                        }*/

            .bottomright{
                clip-path: polygon(0% 0%,100% 0%,50% 100%);
                -webkit-clip-path: polygon(0% 0%,100% 0%,50% 100%);
                width:50%;
                height: 100%;         
                float: left;
                background-repeat:no-repeat;
                -webkit-background-size:cover;
                -moz-background-size:cover;
                -o-background-size:cover;
                background-size:cover;
                background-position:center;
                background-image:url(./image/graph/bottom-right.png);

            }


            /*             .bottomright::after{
                          
                        }*/

            #polygon{
                text-align: center;
            }

            /*            #polygon::after{
                         content: "<h1>before</h1>";
                         position: absolute;
                         top: 60%;
                         margin: 0 auto;
                         font-size: 30pt;
                         background: #222;
                         color: white;     
                        }
            */

            .triangle {
                width: 100%;
                height: 400px;
                background-color: green;
                float: right;
                -webkit-shape-outside: polygon(0 0, 100% 0, 100% 100%);
                shape-outside: polygon(0 0, 100% 0, 100% 100%);
                -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%);
                clip-path: polygon(0 0, 100% 0, 100% 100%);
            }

            .top-cover{
                clip-path: polygon(100% 100%,50% 0%,0% 100%);
                -webkit-clip-path: polygon(100% 100%,50% 0%,0% 100%);
                width:100%;
                height:85%;
                float:left;
                opacity: .6;
                background-color:#FF0000;
            }

            .top-cover:hover{
                opacity:1;

            }

            .topleft-cover{

                clip-path: polygon(100% 100%,100% 0%,0% 100%);
                -webkit-clip-path: polygon(100% 100%,100% 0%,0% 100%);
                width:85%;
                height:85%;
                float:right;
                bottom: 0; 
                right: 0;
                opacity: .6;
                position:absolute; 
                background-color:#A7E376; 
            }

            .topleft-cover:hover{
                background-color:#EFEFEF;
            }


            .topright-cover{

                clip-path: polygon(0% 100%,100% 100%,0% 0%);
                -webkit-clip-path: polygon(0% 100%,100% 100%,0% 0%);
                width:85%;
                height:85%;
                float:left;
                position:absolute; 
                bottom:0; 
                opacity: .7;
                background-color:#76E3C9;

            }

            .topright-cover:hover{
                background-color:yellowgreen;
            }


            .bottomleft-cover{
                clip-path: polygon(100% 0%,1% 0%,50% 100%);
                -webkit-clip-path: polygon(100% 0%,1% 0%,50% 100%);
                width:85%;
                height:85%; 
                float:right;
                opacity: .7;
                background-color:#1050A2;
          
            }

            .bottomleft-cover:hover{
                background-color:green;
            }
            .bottomright-cover{
                clip-path: polygon(100% 0%,1% 0%,50% 100%);
                -webkit-clip-path: polygon(100% 0%,1% 0%,50% 100%);
                width:85%;
                height:85%; 
                float:left;
                opacity: 0.7;
                background-color:#FDE726;
            }
.bottomright-cover:hover{
                background-color:orange;
            }


        </style>

    </head>

<div class="container-fluid" style="padding-bottom:100px;">
    <div class="child">
        <div class="page_header">
            <table class="tb_header">
                <tr class="border_bottom">
                    <td colspan="3">
                        <span class="blue_big"><b><u>ส่วนที่ 2</u> ผลการประเมินงานตามมาตรฐานตำแหน่งและภาระงานตามที่ ก.ค.ศ.กำหนด</b></span>
                    </td>
                    <td colspan="2" style="text-align:right;">
                        <span class="text_blue"><b>ผลการประเมิน</b></span>
                    </td>
                </tr>
            </table>
            @include('layouts.main2')
        </div>

        
        <span class="text_blue_small">
           <b> ผลการประเมินงานตามมาตรฐานตำแหน่งและภาระงานตามที่ ก.ค.ศ. กำหนด ได้ผลงานตามาตรฐานตำแหน่ง ดังนี้ </b>
            <br><br><table style="width:60%;" border="0">
                <tr>
                    <td style="width:50%;text-align: left;">งานตามมาตรฐานตำแหน่งระดับคุณภาพดีมาก</td>
                    <td style="text-align: right;width: 10%;">5</td>
                    <td style="text-align: right;width: 10%;">มาตรฐาน</td>
                </tr>
                <tr>
                    <td style="text-align: left;">งานตามมาตรฐานตำแหน่งระดับคุณภาพดี</td>
                    <td style="text-align: right;">4</td>
                    <td style="text-align: right;width: 10%;">มาตรฐาน</td>
                </tr>
                <tr>
                    <td style="text-align: left;">งานตามมาตรฐานตำแหน่งระดับปานกลาง</td>
                    <td style="text-align: right;">3</td>
                    <td style="text-align: right;width: 10%;">มาตรฐาน</td>
                </tr>
                <tr>
                    <td style="text-align: left;">งานตามมาตรฐานตำแหน่งระดับพอใช้</td>
                    <td style="text-align: right;">2</td>
                    <td style="text-align: right;width: 10%;">มาตรฐาน</td>
                </tr>
                <tr>
                    <td style="text-align: left;">งานตามมาตรฐานตำแหน่งระดับปรับปรุง</td>
                    <td style="text-align: right;">1</td>
                    <td style="text-align: right;width: 10%;">มาตรฐาน</td>
                </tr>                
            </table>           
            <br><b>ตาราง ผลการประเมินงานตามมาตรฐานตำแหน่งและภาระงานตามที่ ก.ค.ศ. กำหนด ได้ผลงานตามมาตรฐานตำแหน่ง ดังนี้</b>
        </span>
        
        
        <div style="margin-top: 60px;">
            <div class="table-responsive">
            <table style="width:100%" border="1">
                <tr style="height:70px;">
                    <td style="width:60%;text-align: center;">งานตามมาตรฐานตำแหน่ง</td>
                    <td style="width:20%;text-align: center;">คะแนนเฉลี่ย</td>
                    <td style="width:20%;text-align: center;">ระดับคุณภาพ</td>
                </tr>
                @foreach($standard as $standards) 
                <tr class="tr_header">
                    <th>{{$standards->detail}}</th>
                    <th>3</th>
                    <th>ปานกลาง</th>
                </tr>
                
                <?php $item = $model->find_standard($standards->no); ?>
                @foreach($item as $items)
                <tr>
                <td style="padding:1em;padding-left: 30px;text-align: left;">{{$items->no}}. {{$items->detail}}</td>
                <td style="text-align:center;">
                    3.50
                </td>
                <td style="text-align:center;">
                    ปานกลาง
                </td>
               </tr>
                 @endforeach
                @endforeach
            </table>
            </div>
        </div>
        <br><br><b>หมายเหตุ</b> ข้อมูลจากผลการประเมินของมูลนิธิครูดีของแผ่นดิน ซึ่งประเมินครอบคลุมคุณลักษณะด้านครองตน ครองคน และครองงาน ด้วยข้อคำถามที่ผ่านการตรวจสอบคุณภาพแล้วจำนวน 83 ข้อ
        <br><br><b>เกณฑ์การให้คะแนน</b>
        
        <br>1.00 - 1.50 คะแนน มาตรฐานนั้นในระดับควรปรับปรุง
        <br>1.51 - 2.50 คะแนน มาตรฐานนั้นในระดับพอใช้
        <br>2.51 - 3.50 คะแนน มาตรฐานนั้นในระดับปานกลาง
        <br>3.51 - 4.50 คะแนน มาตรฐานนั้นในระดับดี
        <br>4.51 - 5.00 คะแนน มาตรฐานนั้นในระดับดีมาก
        
        
                <div class="row" id="block">

            <center>
                <span class="text_blue_small" style="">
                    งานตามมาตรฐานตำแหน่ง เรียงตามผลการประเมิน มาก - น้อย
                </span><br><br>
            </center>

            <table border="1" class="table_green" style="width:80%;margin: 0 auto;">
                <tr class="tr_header">
                    <th style="width:5%;">ลำดับ</th>
                    <th style="width:60%;text-align: center;">งานตามมาตรฐานตำแหน่ง</th>
                    <th style="width:15%;text-align: center;">คะแนนเฉลี่ย</th>
                    <th style="width:20%;text-align: center;">ระดับคุณภาพ</th>
                </tr>  
                <tr>
                    <td>1</td>
                    <td>ด้านการจัดการเรียนรู้</td>
                    <td style="text-align: center;">3.5</td>
                    <td style="text-align: center;">ดีมาก</td>
                </tr> 
                <tr>
                    <td>2</td>
                    <td>ด้านการพัฒนาตนเองและวิชาชีพ</td>
                    <td style="text-align: center;">3</td>
                    <td style="text-align: center;">ดี</td>
                </tr> 
                <tr>
                    <td>3</td>
                    <td>วินัย คุณธรรม จริยธรรม จรรยาบรรณ วิชาขีพ</td>
                    <td style="text-align: center;">2.5</td>
                    <td style="text-align: center;">พอใช้</td>
                </tr> 
                <tr>
                    <td>4</td>
                    <td>ด้านการส่งเสริมและสนับสนุนการจัดการเรียนรู้</td>
                    <td style="text-align: center;">1</td>
                    <td style="text-align: center;">ปรับปรุง</td>
                </tr> 
            </table>
                    
               <div class="top" style="z-index:-1;margin-left: 25%;">
                    <div class="top-cover" style=""></div>
                </div>
        </div>
        
        
    <center>
        <a class="btn_blue" href="{{url('PA2_2')}}"><li style="margin-right:10px;font-size: 18pt;" class="fa fa-arrow-circle-right "></li> แผนพัฒนาตนเอง</a> 
    </center>
        
      <div>
           
          
        <div  style="width:30%;height:30%;margin:0 auto;">
            <div style="width:100%;height:100%;">
                <div class="topleft">
                    <div class="topleft-cover"></div>
                </div>            
                <div class="topright">  
                    <div class="topright-cover"></div>
                </div>
            </div>
            <div style="width:100%;height:100%;position: relative;">
                <div class="bottomleft">
                    <div class="bottomleft-cover"></div>                
                </div>      
                <div class="top" style="position:absolute;z-index:-1;margin-left: 25%;">
                    <div class="top-cover" style=""></div>
                </div>
                <div class="bottomright">   
                    <div class="bottomright-cover"></div>      
                </div>
            </div>
        </div>
     
        </div>   
       
</div>




@endsection