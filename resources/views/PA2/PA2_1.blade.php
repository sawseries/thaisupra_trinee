@extends('layouts.app')    
@section('content')
<!-- Page content-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       
      <script>
          $(document).ready(function() {
           
           //id,no
           polygongraph("polygon1",1);
           
           setnumber(1,3,4,4,4,3);
           

           });

        </script>


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
                    <th><?php $sum_score=App\pa_standard::getuser_score_sum(uId(),PA_year(),$standards->no);echo $sum_score; ?></th>
                    <th>{{degree($sum_score)}}</th>
                </tr>
                
                <?php $item = $model->find_standard($standards->no); ?>
                @foreach($item as $items)
                <tr>
                <td style="padding:1em;padding-left: 30px;text-align: left;">{{$items->no}}. {{$items->detail}}</td>
                <td style="text-align:center;">
                  <?php $scores=App\pa_standard::getuser_score(uId(),PA_year(),$standards->no,$items->no);echo $scores; ?>
       
                </td>
                <td style="text-align:center;">
                    {{degree($scores)}}
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
        
        
       
                    
               <div style="width:550px;height:480px;padding-top:1em;margin:0 auto;">
            
               <div id='polygon1' class="polygon" style=""></div> 
 
               </div>   
        

        <div style="margin-top:80px;margin-bottom:40px;text-align: center;">
                <span class="text_blue_small">
                    งานตามมาตรฐานตำแหน่ง เรียงตามผลการประเมิน มาก - น้อย
                </span>
        </div>

            <table border="1" class="table_green" style="width:80%;margin:0 auto;">
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
                    
       
                    
              
 
        
  
       
        <br><br><br>
       <center>
        <a class="btn_blue" href="{{url('PA2_2')}}"><li style="margin-right:10px;font-size: 18pt;" class="fa fa-arrow-circle-right "></li> แผนพัฒนาตนเอง</a> 
       </center>
</div>




@endsection