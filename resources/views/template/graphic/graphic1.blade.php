<html>

    <style>
            .panel_cover{
            font-size: 10pt;
            padding:1em;
            text-align:center;
            background-repeat:no-repeat;
            background-size: 100% 100%;
            width: 100%;
            height:100%;
            background-image:url({{url("/storage/template/template01/graphic.gif")}});
        }

        .topic{

            font-size: 1.5vw;
            width: 75%;
            background-image:url({{url("/storage/template/template01/head1.png")}});

        background-size:cover;
        background-position:center; 
        color: white;

        text-align:left;
        padding:0.5vw;

        }

        .topic2{


            width: 100%;
            background-image:url({{url("/storage/template/template01/head1.png")}});
        background-size:cover;
        background-position:left; 
        color: white;
        text-align:left;
        font-size: 1.5vw;
        padding:0.5vw; 
        }



        .col_left{
            height:100%;width:50%;float: left;padding-top:2vw;  

        }

        .col_right{
            height:100%;width:50%;float: left;padding-top:2vw;  
        }

        .text_blue{
            color: #47B6B8;
            font-size:1vw;
        }

        b{
            padding-left: 10px;
        }

        p{
            font-size:1vw;
        }

        .text_orange{
            color: #FAA846;
        }

        .image{
            border:0; 
            margin-bottom: 30px;
            width: 15vw;
            height: 15vw;
        }

        .box{
            width: 100%;    
            text-align:left;
            padding:0.5em;
        }

        .detail{

            padding-left: 15px;

        }

        .tbl_tem01{
            width:100%;text-align:left;
            border:0;
        }


        .tbl_tem01 td{
            text-align:left;

        }

        .tbl_tem01 th{
            text-align:left; 
        }
    </style>
    <div class="panel_cover">

        <div class="col_left">
            <!--leftcol-->

            <img src="/storage/template/template01/photo.png" class="image">

            <div class="topic">
                <b>ข้อมูลทั่วไป</b>
            </div>

            <div class="box">   
                <p><span class="text_blue">ชื่อ</span> {{$Profile->prename}}{{$Profile->firstname}} {{$Profile->lastname}}</p>   
                <p><span class="text_blue">ตำแหน่ง </span> {{$Profile->position}}</p>  
                <p><span class="text_blue">สัญชาติ</span> {{$Profile->national}} <span class="text_blue">เชื้อชาติ</span> {{$Profile->race}} <span class="text_blue">ศาสนา</span> {{$Profile->religion}}</p>            
                <p><span class="text_blue">กลุ่มสาระ </span> {{$Profile->major}}</p>           
                <p><span class="text_blue">ที่อยู่</span> {{$Profile->address}}</p>
            </div>   
            <div class="topic">
                <b>ประวัติการศึกษา</b>
            </div>
            <div class="box">   
                <table class="tbl_tem01">
                    <tr>
                        <td style="width:15%;"><b>วุฒิ</b></td>
                        <td style="width:15%;"><b>คณะ</b></td>
                        <td style="width:15%;"><b>สาขา</b></td>
                        <td style="width:25%;"><b>สถานศึกษา</b></td>
                    </tr>

                    @foreach($uEducation as $uEducation)
                    <tr>
                        <td>{{$uEducation->edu_type}}</td>
                        <td>{{$uEducation->faculty}}</td>
                        <td>{{$uEducation->major}}</td>
                        <td>{{$uEducation->school}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="topic">
                <b>ประวัติการทำงาน</b>
            </div>
            <div class="box">   

                <p><span class="text_blue">วิทยฐานะ</span> {{$Profile->academic}}</p>
                <p><span class="text_blue">วันที่ดำรงค์ตำแหน่ง</span> {{datethai($Profile->dateacademic)}}</p>
                <p><span class="text_blue">สังกัด</span> {{$Profile->school_department}}</p>
                <p><span class="text_blue">โรงเรียน</span> {{$Profile->school}}</p>
                <p><span class="text_blue">อายุราชการ</span> {{calage($Profile->dateacademic)}}</p>
                
                <p><span class="text_blue" >ประเภทห้องเรียนที่จัดการเรียนรู้</span>
                <ul class="class_learning">                    
                        @foreach($pa_learn_class as $pa_learn_class) 
                        @if(!empty($arr_learn_class))
                            @if(in_array($pa_learn_class->id,$arr_learn_class))
                            <li>&#x2611; {{$pa_learn_class->value}}</li>
                            @else   
                            <li>&#9634; {{$pa_learn_class->value}}</li>
                            @endif
                        @else   
                        <li>&#9634; {{$pa_learn_class->value}}</li>
                        @endif                        
                        @endforeach
                </ul>       
                </p>
            </div>
        </div>

        <div class="col_right">
            <!--rightcol-->
            <header class="name-text" style=" margin-bottom:5vh;">
                <span class="text_blue" style="font-size:2.5vw;"><b>{{$Profile->firstname}} {{$Profile->lastname}}</b></span>
                <br><span class="text_orange" style="font-size:1.5vw;">ตำแหน่ง {{$Profile->position}} {{$Profile->academic}}</span>
            </header>
            <div class="topic2">
                <b>การปฏิบัติหน้าที่ปีการศึกษา {{PA_year()}}</b>
            </div>
            <div class="detail">
                <div class="box">   
                    <span class="text_blue">วิชาที่ทำการสอน</span>
                    <?php $sch_hour = 0; ?>
                    <p><table class="tbl_tem01">
                        <tr>
                            <th>กลุ่มสาระ</th>
                            <th>วิชา</th>
                            <th>ระดับชั้น</th>
                            <th>ชั่วโมงที่ทำการสอน</th>
                        </tr>
                        @foreach($schedule_hour as $schedule_hour)
                        <tr>
                            <td>{{$schedule_hour->group_learn}}</td>
                            <td>{{$schedule_hour->subject}}</td>
                            <td>{{$schedule_hour->grade}}</td>
                            <td>{{$schedule_hour->sch_hour}}</td>
                        </tr>
                        <?php $sch_hour += $schedule_hour->sch_hour; ?>
                        @endforeach
                        <tr>
                            <td colspan="3" style="text-align:center;"><b>รวมชั่วโมงในการปฏิบัติหน้าที่</b></td>
                            <td><b>{{$sch_hour}}</b></td>

                        </tr>
                    </table></p>
                </div>

                <div class="box">   
                    <span class="text_blue">งานส่งเสริมและสนับสนุนการจัดการเรียนรู้</span>                
                    <?php $sp_hour = 0; ?>
                    <p><table class="tbl_tem01">
                        <tr>
                            <th>งานส่งเสริมและสนับสนุนการจัดการเรียนรู้</th>
                            <th>ชั่วโมง/สับดาห์</th>
                        </tr>
                        @foreach($support_hour as $support_hour)
                        <tr>
                            <td>{{$support_hour->support_detail}}</td>
                            <td>{{$support_hour->sp_hour}}</td>
                        </tr>
                        <?php $sp_hour += $support_hour->sp_hour; ?>
                        @endforeach
                        <tr>
                            <td style="text-align:center;"><b>รวมชั่วโมงในการปฏิบัติหน้าที่</b></td>
                            <td><b>{{$sp_hour}}</b></td>
                        </tr>
                    </table></p>
                </div>
                <div class="box">   
                    <span class="text_blue">งานพัฒนาคุณภาพการจัดการศึกษาของสถานศึกษา</span>
                    <p><table class="tbl_tem01">
                        <tr>
                            <th>งานพัฒนาคุณภาพการจัดการศึกษาของสถานศึกษา</th>
                            <th>ชั่วโมง/สับดาห์</th>
                        </tr>
                        <?php $dev_hour = 0; ?>        
                        @foreach($develop_hour as $develop_hour)
                        <tr>
                            <td>{{$develop_hour->develops}}</td>
                            <td>{{$develop_hour->dev_hour}}</td>
                        </tr>
                        <?php $dev_hour += $develop_hour->dev_hour; ?>
                        @endforeach
                        <tr>
                            <td><b>รวมชั่วโมงในการปฏิบัติหน้าที่</b></td>
                            <td><b>{{$dev_hour}}</b></td>
                        </tr>
                    </table></p>
                </div>

                <div class="box">   
                    <span class="text_blue">งานตอบสนองนโยบายและจุดเน้น</span>                
                    <?php $res_hour = 0; ?>
                    <p><table class="tbl_tem01">
                        <tr>
                            <td><b>งานตอบสนองนโยบายและจุดเน้น</b></td>
                            <td><b>ชั่วโมง/สับดาห์</b></td>
                        </tr>
                        @foreach($response_hour as $response_hour)
                        <tr>
                            <td>{{$response_hour->response}}</td>
                            <td>{{$response_hour->res_hour}}</td>
                        </tr>

                        <?php $res_hour += $response_hour->res_hour; ?>
                        @endforeach
                        <tr>
                            <td><b>รวมชั่วโมงในการปฏิบัติหน้าที่</b></td>
                            <td><b>{{$res_hour}}</b></td>
                        </tr>
                    </table>                
                </div>  
            </div>
            <div class="topic2">
                <b >การอบรม/พัฒนาตนเอง</b>
            </div>
            <div class="detail">
                <div class="box">   
                    <p>
                    <table class="tbl_tem01">
                        <tr>
                            <th style="width:30%;">หัวข้อ</th>
                            <th style="width:20%;">เริ่มต้น</th>
                            <th style="width:20%;">สิ้นสุด</th>
                            <th style="width:10%;">ชั่วโมง</th>
                            <th style="width:20%;">หน่วยงาน</th>
                        </tr>
                        @foreach ($train as $train)
                        <tr>
                            <td>{{$train->train}}</td>
                            <td>{{datebref($train->start_date)}}</td>
                            <td>{{datebref($train->end_date)}}</td>
                            <td>{{$train->train_hour}}</td>
                            <td>{{$train->agency}}</td>
                        </tr>
                        @endforeach
                    </table>
                    </p>
                </div>
            </div>
            <div class="topic2">
                <b>สื่อการเรียนรู้และนวัตกรรม</b>
            </div>
            <div class="detail">
                <div class="box">   
                    <span class="text_blue">สื่อการเรียนรู้และนวัตกรรม</span>
                    <p>
                    <ul>
                        @foreach ($inno as $inno)
                        <li>{{$inno->innovation}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>  
        </div>


    </div>
</div>

</html>