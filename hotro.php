<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUTURE SMARTSHOP</title>
    <style>
        body{
            background: pink;
        }
        #header{
            background: gold;
            width: 100%;
            height: 50px;
            box-shadow: 0px 0px 0px 20px 3px yellow;
            color: blue;
        }
        h1{
            float: left;
            font-size: 1.5em;
            margin-left: 20px;
            margin-top: 10px;
        }
        h2{
            float: right;
            font-size: 1.5em;
            margin-right: 20px;
            margin-top: 10px;
        }
        h3{
            font-size: 1.4em;
        }
        #input{
            width: 1040px;
            margin-top: 0px;
            margin-left: 60px;
            background: blue;
            height: 50px;
            padding-top: 12px;
            padding-left: 90px;
        }
        #menuinput{
            background-color: yellow;
            height: 40px;
            text-align: center;
            align-items: center;
            border-radius: 5px;
            margin-right: 35px;
            width: 200px;
            box-shadow: 0px 0px 20px 4px red;
            font-size: 18px;
        }
        #menuinput:hover{
            background-color: yellow;
            height: 40px;
            text-align: center;
            align-items: center;
            border-radius: 5px;
            margin-right: 35px;
            width: 200px;
            box-shadow: 0px 0px 20px 4px white;
            font-size: 18px;
        }
        #menuinput2{
            background-color: white;
            height: 40px;
            text-align: left;
            align-items: center;
            border-radius: 5px;
            padding-left: 50px;
            width: 90%;
            margin-left: 60px;
            box-shadow: 0px 0px 10px 1px red;
            font-size: 18px;
            margin-bottom: 4px;
        }
        #menuinput2:hover{
            background-color: white;
            height: 40px;
            text-align: left;
            align-items: center;
            border-radius: 5px;
            padding-left: 50px;
            width: 90%;
            margin-left: 60px;
            box-shadow: 0px 0px 10px 1px yellow;
            font-size: 18px;
            margin-bottom: 4px;
        }
        #input3{float: right;}
        #menuinput3{
            background-color: blue;
            height: 40px;
            align-items: center;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 1px red;
        }
        #menuinput3:hover{
            background-color: blue;
            height: 40px;
            align-items: center;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 1px Yellow;
        }
    </style>
</head>
<body>
    <div id="header">
        <h1>
            Trung T??m H??? Tr??? Future SMARTSHOP
        </h1>
        <h2>
            C??c Ch??nh S??ch V?? Quy T???c Future SMARTSHOP
        </h2>
    </div>
    <div id="container">
        <h3>Danh M???c</h3>
        <div id="input">
            <input type="submit" id="menuinput" value="Thanh To??n ">
            <input type="submit" id="menuinput" value="Tr??? H??ng & Ho??n Ti???n">
            <input type="submit" id="menuinput" value="????n H??ng V?? V???n Chuy???n">
            <input type="submit" id="menuinput" value="Khuy???n M??i & U?? ????i"> 
        </div>
        <h3>C??c C??u H???i Th?????ng G???p</h3>
        <div id="input2">
            <input type="submit" id="menuinput2" value="[Th??ng Tin V???n Chuy???n] L??m sao ????? li??n h??? ????n v??? v???n chuy???n/ tra c???u th??ng tin v???n chuy???n/ h???i giao h??ng ?">
        </div>
        <div id="input2">
            <input type="submit" id="menuinput2" value="[Th??nh Vi??n M???i] C??ch theo d??i t??nh tr???ng v???n chuy???n c???a ????n h??ng?">
        </div>
        <div id="input2">
            <input type="submit" id="menuinput2" value="[Voucher/ M?? Gi???m Gi??] T??i c?? th??? t??m Voucher/M?? gi???m gi?? ??? ????u ?">
        </div>
        <div id="input2">
            <input type="submit" id="menuinput2" value="[????n V??? V???n Chuy???n] T???ng h???p ????n v??? v???n chuy???n tr??n shopshop"> 
        </div>
        <div id="input2">
            <input type="submit" id="menuinput2" value="[L???i] T???i sao t??i kh??ng d??ng ???????c Voucher/M?? gi???m gi?? ?"> 
        </div>
        <div id="input2">
            <input type="submit" id="menuinput2" value="[Chat] H?????ng d???n chat/Nh???n tin voi ng?????i b??n h??ng ?"> 
        </div>
        <div id="input2">
            <input type="submit" id="menuinput2" value="[Voucher/M?? Gi???m Gi??] H?????ng d???n s??? d???ng m?? gi???m gi??"> 
        </div>
        <div id="input2">
            <input type="submit" id="menuinput2" value="[Gioa/Nh???n H??ng] ????n v??? v???n chuy???n giao h??ng cho ng?????i mua nh?? th??? n??o ?"> 
        </div>
        <div id="input2">
            <input type="submit" id="menuinput2" value="[V???n Chuy???n] T??i c?? th??? thay ?????i th??ng tin s??? ??i???n tho???i/?????a ch??? nh???n h??ng sau khi ?????t h??ng kh??ng ?"> 
        </div>
    </div>
    <div id="input3">
        <a href="trangchu.php"><input type="submit" id="menuinput3" value="Quay L???i Trang Ch???"> </a>
    </div>
</body>
</html>