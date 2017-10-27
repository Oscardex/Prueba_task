<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

<style type="text/css">
body {
background-color: #e3e7ed;
background-size: cover;
font-family: 'Open Sans', sans-serif;
font-weight: 300;
}

#iosBlurBg {
    transform: rotateX(-133deg);
    top: -162px;
    resize: horizontal;
    position: relative;
    border-top: 552px solid transparent;
    border-left: 550px solid rgba(0,0,0,0.04);
    border-bottom: 214px solid transparent;
    background: linear-gradient(rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.1));
    /* box-shadow: 1px 1px 25px #999; */
}


#whiteBg {
    resize: horizontal;
    position: absolute;
    top: -432px;
    right: 0;
    border-top: 432px solid transparent;
    border-left: 510px solid rgba(255,255,255,1);
    border-bottom: 0px solid transparent;
    border-right: 28px solid transparent;
    background: linear-gradient(rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 1));
}

#bottomEnter {
    position: absolute;
    top: 125px;
    left: 150px;
    z-index: -2;
    border-top: 171px solid transparent;
    border-right: 300px solid #676d7d;;
    border-bottom: 52px solid transparent;
    transform: rotate(-2deg);
}

#bottomBlurBg {
    position: absolute;
    top: 74px;
    left: 172px;
    z-index: -1;
    border-top: 253px solid transparent;
    border-right: 260px solid rgba(255, 0, 12, 0.54) !important;
    border-bottom: 0px solid transparent;
    transform: rotate(26deg);
}

.enterButton {
    position: absolute;
    top: 242px;
    left: 300px;
    width: 70px;
    height: 70px;
    text-align: center;
}

.text-white{
color: #fff;
}

.enterText{
text-transform: uppercase;
font-size: 20px;
font-weight: 300;
font-family: 'Open Sans', sans-serif;
}

.loginForm {
    position: absolute;
    top: 23px;
    left: 53px;
}
.title{
 font-weight: 300;
 font-size: 24px;
 line-height: 1;
}

.title span{
font-weight: 800;
/*letter-spacing: 3px;*/
}

.title hr{
width: 150px;
border-width: 2px;
border-color: #67e2fb;
margin: 0;

}

hr.short{
width: 50px;
border-width: 2px;
border-color: #67e2fb;
float: left;
margin: 0;

}


/*= input focus effects css
=========================== */
:focus{outline: none;}

.col-3{float: left; width: 100%; margin-top: 20px; margin-bottom: 0;}
input{margin-top: 15px;font: 15px/24px "Open Sans", sans-serif; color: #333; width: 100%; box-sizing: border-box; letter-spacing: 1px; width: 120%;}

input::placeholder{
text-transform: uppercase;
letter-spacing: 0;
font-size: 20px;
font-weight: 300;
padding-left: 15px;
}

.effect-2{border: 0; padding: 7px 0; border-bottom: 1px solid #ccc;}

.forget button{
margin-top: 50px;
border-radius: 0;
color: #aaa;
margin-left: 0px;
font-weight: 700;
}
</style>
