<style>

    .menu-main {
        list-style-type:none;
        margin-top: 5px;
    }
    .menu-main li {
        display: inline-block;
        min-width: 3em;
        /*  min-width: 3em;
          margin: 0 0.2em;*/
    }
    .menu-main a {
        text-decoration: none;
        display: block;
        position: relative;
        color: black;
        padding:.5em;
        font-size: 12pt; 
    }

    .menu-main a span {
        margin-right:5px;font-size: 18pt;
    } 
    .menu-main a:hover {
        color: #0062cc;
        background-color: #E1EBEE;
    }

    .menu-main a:hover:before {
        left: 0;
        width: 100%;
    }
    .menu-main a:before {
        content: "";
        position: absolute;
        width: 0;
        height: .5px;
        background-color: #c69f73;
        bottom: calc(-1px);
        right: 0;
        transition: all 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86);
    }
</style>

<ul class='menu-main'>
    <li><a href="/PA2_1"><span class="fa fa-arrow-circle-right "></span>ผลการประเมิน</a></li>
    <li><a href="/PA2_2"><span  class="fa fa-arrow-circle-right "></span>แผนพัฒนาตนเอง</a></li>
    <li><a href="/PA2_3"><span  class="fa fa-arrow-circle-right "></span>งานที่ปฏิบัติตามมาตรฐานตำแหน่ง </a></li>
</ul>