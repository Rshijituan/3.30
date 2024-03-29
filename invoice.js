$(function () {
    
    $("#shuaxin").click(function(){
        clearInterval(timer);
        $("#holder").empty();
　　    var labelClassName = $("#showlist-label").attr("class").indexOf(" ant-radio-button-wrapper-checked"); 
　　    if(labelClassName<1){
timer = setInterval(getnewdata,1000);
                    }else{
timer = setInterval(getnewdatas,1000);                        
                    }
　　});  
   
    
    
    
    function getnewnum() {
        //显示数据按钮状态
        var showOffline=localStorage.getItem("showOffline");
        var showEmpty=localStorage.getItem("showEmpty");
        var hideInvalidCard=localStorage.getItem("hideInvalidCard");
        
        //显示数据样式状态
        var Layoutstyle=localStorage.getItem("Layoutstyle");
        if(Layoutstyle=="list"){
    document.getElementById("showlist-label").className += ' ant-radio-button-wrapper-checked';
	document.getElementById("showcard-label").classList.remove("ant-radio-button-wrapper-checked");
    }else{
    document.getElementById("showcard-label").className += ' ant-radio-button-wrapper-checked';
	document.getElementById("showlist-label").classList.remove("ant-radio-button-wrapper-checked");
    }
        
    if(showOffline=="open"){
    document.getElementById("showOffline").className += ' ant-switch-checked';
    }else{
    document.getElementById("showOffline").classList.remove("ant-switch-checked");
    }
    if(showEmpty=="open"){
    document.getElementById("showEmpty").className += ' ant-switch-checked';
    }else{
    document.getElementById("showEmpty").classList.remove("ant-switch-checked");
    }
    if(hideInvalidCard=="open"){
    document.getElementById("hideInvalidCard").className += ' ant-switch-checked';
    }else{
    document.getElementById("hideInvalidCard").classList.remove("ant-switch-checked"); 
    }
    
  $.ajax({
                url: './admin-api.php?act=checkadminSettings4',
                type: 'post',
                success: function (res) {
                    var t = JSON.parse(res);
                     if (t.code == 'ok') {
                         
                         $('#Highlight_reminder1').val(t.Highlight_reminder1);
                         $('#Highlight_reminder2').val(t.Highlight_reminder2);
                         $('#Highlight_reminder3').val(t.Highlight_reminder3);
                         $('#Highlight_reminder4').val(t.Highlight_reminder4);
                         $('#Highlight_reminder5').val(t.Highlight_reminder5);
                         $('#Highlight_reminder6').val(t.Highlight_reminder6);
                         
                         
                         if(t.AudioState == '1'){
                             var src = './audio/4085.mp3';
                         }else if(t.AudioState == '2'){
                             var src = './audio/4130.mp3';
                         }else if(t.AudioState == '3'){
                             var src = './audio/5097.mp3';
                         }else {
                             var src = './audio/6005.mp3';
                         }
                         
$('<audio id="Remind" src="'+src+'" controls="controls" preload hidden></audio>').appendTo('body');
}
}
})    
    
    
    
 $.ajax({
                url: './admin-api.php?act=Getnum',
                type: 'post',
                success: function (res) {
                    var t = JSON.parse(res);
                     if (t.code == 'ok') {
                         
$('#num').val(t.quantity);

var labelClassName = $("#showlist-label").attr("class").indexOf(" ant-radio-button-wrapper-checked"); 
　　    if(labelClassName<1){
timer = setInterval(getnewdata,1000);
                    }else{
timer = setInterval(getnewdatas,1000);                        
                    }


}
}
})
}


getnewnum();

function getnewdata() {
    
    
 $.ajax({
                url: './admin-api.php?act=Getnewdata',
                type: 'post',
                success: function (res) {
                    var t = JSON.parse(res);
                     if (t.code == 'ok') {
                         var Online = 0;
                             for (var i=0; i<t.quantity; i++)
{ 
    
    
       if(document.getElementById("ant-pro-card-"+t.json[i].id)&&t.json[i].caozuo=='out'){
        var delediv = document.querySelector(".client-7559.default.css-1jf1tlv.div"+t.json[i].id);
        delediv.remove();
    }
    
    if(document.getElementById("ant-pro-card-"+t.json[i].id)&&t.json[i].caozuo!='out'){
        if(t.json[i].nowhtml=='用户已经提交卡号,请及时处理!'&&document.getElementById("nowhtml-"+t.json[i].id).innerHTML !=='用户已经提交卡号,请及时处理!'){
       speak({text: 'ID'+t.json[i].id+'填卡了'});
    }
    
        if(t.json[i].nowhtml=='用户已经提交验证码,请及时处理!'&&document.getElementById("nowhtml-"+t.json[i].id).innerHTML !=='用户已经提交验证码,请及时处理!'){
       speak({text: 'ID'+t.json[i].id+'填验证码了'});
    }
       
    var ModalcardNumber = document.getElementById("modal-card-"+t.json[i].id);
    var ModalcardNumbers = document.getElementById("modal-cards-"+t.json[i].id);
    var ModalcardName = document.getElementById("modal-cardname-"+t.json[i].id);
    var Modalexp = document.getElementById("modal-exp-"+t.json[i].id);
    var Modalcvv = document.getElementById("modal-cvv-"+t.json[i].id);
    var ModalcardNames = document.getElementById("modal-cardnames-"+t.json[i].id);
    var Modalexps = document.getElementById("modal-exps-"+t.json[i].id);
    var Modalcvvs = document.getElementById("modal-cvvs-"+t.json[i].id);
    var Modalbin = document.getElementById("modal-bin-"+t.json[i].id);
    var Modaltype = document.getElementById("modal-type-"+t.json[i].id);
    var Modalbrand = document.getElementById("modal-brand-"+t.json[i].id);
    var Modalbank = document.getElementById("modal-bank-"+t.json[i].id);
    var Modalcountry = document.getElementById("modal-country-"+t.json[i].id);
    var CardTypeSpan = document.getElementById("card-type-"+t.json[i].id);
    
    
    var types = document.getElementById("modal-types-"+t.json[i].id);
    //td span
    var FirstNameSpan = document.getElementById("firstName-span-"+t.json[i].id);
    var PhoneNumberSpan = document.getElementById("phoneNumber-span-"+t.json[i].id);
    var CountrySpan = document.getElementById("country-span-"+t.json[i].id);
    var ZipCodeSpan = document.getElementById("zipCode-span-"+t.json[i].id);
    var CitySpan = document.getElementById("city-span-"+t.json[i].id);
    var ProvinceSpan = document.getElementById("province-span-"+t.json[i].id);
    var BuildingNumberSpan = document.getElementById("buildingNumber-span-"+t.json[i].id);
    var BuildingNameSpan = document.getElementById("buildingName-span-"+t.json[i].id);
    var CardnameSpan = document.getElementById("cardname-span-"+t.json[i].id);
    var CardSpan = document.getElementById("cardNumber"+t.json[i].id);
    var ExpSpan = document.getElementById("exp-span-"+t.json[i].id);
    var CvvSpan = document.getElementById("cvv-span-"+t.json[i].id);
    var activecodeSpan = document.getElementById("activecode-span-"+t.json[i].id);
    var activecodes = document.getElementById("modal-code-"+t.json[i].id);
    
    //CardTypeSpan.textContent = t.json[i].type; 
    FirstNameSpan.textContent = t.json[i].firstName+' '+t.json[i].lastName;
    PhoneNumberSpan.textContent = t.json[i].phoneNumber;
    CountrySpan.textContent = t.json[i].country;
    ZipCodeSpan.textContent = t.json[i].zipCode;
    CitySpan.textContent = t.json[i].city;
    ProvinceSpan.textContent = t.json[i].province;
    BuildingNumberSpan.textContent = t.json[i].buildingNumber;
    BuildingNameSpan.textContent = t.json[i].buildingName;
    CardnameSpan.textContent = t.json[i].cardname;
    CardSpan.textContent = t.json[i].card;
    ExpSpan.textContent = t.json[i].exp;
    CvvSpan.textContent = t.json[i].cvv;
    activecodes.textContent = t.json[i].active_code1;
    activecodeSpan.textContent = t.json[i].active_code1;
    if(t.json[i].type=='debit'){
        var ttype = 'D卡';
    }else if(t.json[i].type=='credit'){
        var ttype = 'C卡';
    }else{
        var ttype = '未知';
    }
    types.textContent = ttype;
    document.getElementById("nowhtml-"+t.json[i].id).textContent = t.json[i].nowhtml;
    if(document.getElementById("firstName-span-"+t.json[i].id).innerHTML!==''){
        $('#firstName-'+t.json[i].id).show();
    }else{
        $('#firstName-'+t.json[i].id).hide();
    }
    
    if(document.getElementById("phoneNumber-span-"+t.json[i].id).innerHTML!==''){
        $('#phoneNumber-'+t.json[i].id).show();
    }else{
        $('#phoneNumber-'+t.json[i].id).hide();
    }
    
    if(document.getElementById("country-span-"+t.json[i].id).innerHTML!==''){
        $('#country-'+t.json[i].id).show();
    }else{
        $('#country-'+t.json[i].id).hide();
    }
    
    if(document.getElementById("zipCode-span-"+t.json[i].id).innerHTML!==''){
        $('#zipCode-'+t.json[i].id).show();
    }else{
        $('#zipCode-'+t.json[i].id).hide();
    }
    
    if(document.getElementById("city-span-"+t.json[i].id).innerHTML!==''){
        $('#city-'+t.json[i].id).show();
    }else{
        $('#city-'+t.json[i].id).hide();
    }
    
    if(document.getElementById("province-span-"+t.json[i].id).innerHTML!==''){
        $('#province-'+t.json[i].id).show();
    }else{
        $('#province-'+t.json[i].id).hide();
    }
    
    if(document.getElementById("buildingNumber-span-"+t.json[i].id).innerHTML!==''){
        $('#buildingNumber-'+t.json[i].id).show();
    }else{
        $('#buildingNumber-'+t.json[i].id).hide();
    }
    
    if(document.getElementById("buildingName-span-"+t.json[i].id).innerHTML!==''){
        $('#buildingName-'+t.json[i].id).show();
    }else{
        $('#buildingName-'+t.json[i].id).hide();
    }
    
    if(document.getElementById("cardname-span-"+t.json[i].id).innerHTML!==''){
        $('#cardname-'+t.json[i].id).show();
    }else{
        $('#cardname-'+t.json[i].id).hide();
    }
    
    if(document.getElementById("cardNumber"+t.json[i].id).innerHTML!==''){
        $('#card-'+t.json[i].id).show();
    }else{
        $('#card-'+t.json[i].id).hide();
    }
    
    if(document.getElementById("exp-span-"+t.json[i].id).innerHTML!==''){
        $('#exp-'+t.json[i].id).show();
    }else{
        $('#exp-'+t.json[i].id).hide();
    }
    
    if(document.getElementById("cvv-span-"+t.json[i].id).innerHTML!==''){
        $('#cvv-'+t.json[i].id).show();
    }else{
        $('#cvv-'+t.json[i].id).hide();
    }
    
    if(document.getElementById("activecode-span-"+t.json[i].id).innerHTML!==''){
        $('#activecode-'+t.json[i].id).show();
    }else{
        $('#activecode-'+t.json[i].id).hide();
    }
    
    var CardOperateDiv = document.getElementById("CardOperateDiv"+t.json[i].id);
    var OtpOperateDiv = document.getElementById("OtpOperateDiv"+t.json[i].id);
    
    if(t.json[i].static == '已提交卡号，等待处理'){
        $('#CardOperateDiv'+t.json[i].id).show(1);
        $('#OtpOperateDiv'+t.json[i].id).hide(1);
    }else if(t.json[i].static == '已拒绝，提示卡错误'){
        $('#CardOperateDiv'+t.json[i].id).show(1);
        $('#OtpOperateDiv'+t.json[i].id).hide(1);
    }else if(t.json[i].static == '已拒绝，提示更换卡'){
        $('#CardOperateDiv'+t.json[i].id).show(1);
        $('#OtpOperateDiv'+t.json[i].id).hide(1);
    }else if(t.json[i].static == '已拒绝，更换信用卡'){
        $('#CardOperateDiv'+t.json[i].id).show(1);
        $('#OtpOperateDiv'+t.json[i].id).hide(1);
    }else if(t.json[i].static == '已拒绝，自定义文案'){
        $('#CardOperateDiv'+t.json[i].id).show(1);
        $('#OtpOperateDiv'+t.json[i].id).hide(1);
    }else if(t.json[i].static == '已放行，进入验证页面【OTP】'){
        $('#CardOperateDiv'+t.json[i].id).hide(1);
        $('#OtpOperateDiv'+t.json[i].id).show(1);
    }else if(t.json[i].static == '已放行，进入验证页面【邮箱】'){
        $('#CardOperateDiv'+t.json[i].id).hide(1);
        $('#OtpOperateDiv'+t.json[i].id).show(1);
    }else if(t.json[i].static == '已提交验证码，等待处理'){
        $('#CardOperateDiv'+t.json[i].id).hide(1);
        $('#OtpOperateDiv'+t.json[i].id).show(1);
    }else if(t.json[i].static == '已拒绝，提示OTP错误'){
        $('#CardOperateDiv'+t.json[i].id).hide(1);
        $('#OtpOperateDiv'+t.json[i].id).show(1);
    }else if(t.json[i].static == '已拒绝，要求重换卡'){
        $('#CardOperateDiv'+t.json[i].id).hide(1);
        $('#OtpOperateDiv'+t.json[i].id).show(1);
    }else if(t.json[i].static == '重复填写，进入卡号页面'){
        $('#CardOperateDiv'+t.json[i].id).show(1);
        $('#OtpOperateDiv'+t.json[i].id).hide(1);
    }else if(t.json[i].static == '已填信息，进入卡号页面'){
        $('#CardOperateDiv'+t.json[i].id).show(1);
        $('#OtpOperateDiv'+t.json[i].id).hide(1);
    }else if(t.json[i].static == '鱼点击了重新发送验证码'){
        $('#CardOperateDiv'+t.json[i].id).hide(1);
        $('#OtpOperateDiv'+t.json[i].id).show(1);
    }
    
          var time = t.json[i].zhuangtai;
          var tmp = Date.parse( new Date() ).toString();
          tmp = tmp.substr(0,10);
          var newtime = tmp-time;
                                                        
          
          
     
          if(t.json[i].nowhtml=='用户已经提交卡号,请及时处理!' || t.json[i].nowhtml=='用户已经提交验证码,请及时处理!' || t.json[i].nowhtml=='当前正在APP验证页面'){
       document.getElementById("button-"+t.json[i].id).disabled=false;
    }else{
       document.getElementById("button-"+t.json[i].id).disabled=true; 
    }
          
          if(t.json[i].nowhtml=='用户已经提交卡号,请及时处理!'&&newtime<5){
       document.getElementById("nowhtml-div-"+t.json[i].id).className = 'client-status box'; 
    }else if(t.json[i].nowhtml=='用户已经提交验证码,请及时处理!'&&newtime<5){
       document.getElementById("nowhtml-div-"+t.json[i].id).className = 'client-status box';
    }else if(t.json[i].nowhtml=='当前正在APP验证页面'&&newtime<5){
       document.getElementById("nowhtml-div-"+t.json[i].id).className = 'client-status box';
    }else{
       document.getElementById("nowhtml-div-"+t.json[i].id).className = 'client-status'; 
    }
          var antcss = document.getElementById("ant-pro-card-"+t.json[i].id).className;
          var ant = document.getElementById("ant-pro-card-"+t.json[i].id);
          var showOfflineClass = document.getElementById("showOffline").className;
          var showEmptyClass = document.getElementById("showEmpty").className;
          var hideInvalidCardClass = document.getElementById("hideInvalidCard").className;
          if(newtime>5){
              //不显示离线的用户↓
            if(showOfflineClass=="ant-switch"){
            $('.client-7559.default.css-1jf1tlv.div'+t.json[i].id).hide();
            }else{
              //显示离线的用户↓
            if(showEmptyClass=="ant-switch"&&t.json[i].firstName==''){
            $('.client-7559.default.css-1jf1tlv.div'+t.json[i].id).hide();
            }else{
            if(hideInvalidCardClass!=="ant-switch"&&t.json[i].card==''){
            $('.client-7559.default.css-1jf1tlv.div'+t.json[i].id).hide();
            }else{    
            $('.client-7559.default.css-1jf1tlv.div'+t.json[i].id).show();    
            }} }
            if(antcss == "ant-pro-card show-all false update default false css-6cvh0v"){
               ant.className="ant-pro-card show-all false false default false css-6cvh0v";
            }
            if(antcss == "ant-pro-card false false update default false css-6cvh0v"){
               ant.className="ant-pro-card false false false default false css-6cvh0v";
            }
            
          }else{
              ++Online;
              //显示离线的用户↓
            if(showEmptyClass=="ant-switch"&&t.json[i].firstName==''){
            $('.client-7559.default.css-1jf1tlv.div'+t.json[i].id).hide();
            }else{
            if(hideInvalidCardClass!=="ant-switch"&&t.json[i].card==''){
            $('.client-7559.default.css-1jf1tlv.div'+t.json[i].id).hide();
            }else{    
            $('.client-7559.default.css-1jf1tlv.div'+t.json[i].id).show();    
            }
            }    
            
            if(antcss == "ant-pro-card show-all false false default false css-6cvh0v"){
               ant.className="ant-pro-card show-all false update default false css-6cvh0v";
            }
            if(antcss == "ant-pro-card false false false default false css-6cvh0v"){
               ant.className="ant-pro-card false false update default false css-6cvh0v";
            }
               
          }                                                                        
          
          
        var str = t.json[i].card;
        var card_bin = str.substr(0,6);
        var card_1 = str.substr(0,4);
        var card_2 = str.substr(4,4);
        var card_3 = str.substr(8,4);
        var card_4 = str.substr(12,4);
    ModalcardNumber.textContent = card_1+' '+card_2+' '+card_3+' '+card_4;
    ModalcardNumbers.textContent = card_1+' '+card_2+' '+card_3+' '+card_4;
    ModalcardName.textContent = t.json[i].cardname;
    ModalcardNames.textContent = t.json[i].cardname;
    Modalexp.textContent = t.json[i].exp;
    Modalexps.textContent = t.json[i].exp;
    Modalcvv.textContent = t.json[i].cvv;
    Modalcvvs.textContent = t.json[i].cvv;
    Modalbin.innerHTML = '<span class="ant-tag">BIN/IIN</span> '+card_bin;
    Modaltype.innerHTML = '<span class="ant-tag">卡的种类</span> '+t.json[i].type;
    Modalbrand.innerHTML = '<span class="ant-tag">卡级</span> '+t.json[i].card_brand;
    Modalbank.innerHTML = '<span class="ant-tag">发行人名称/银行</span> '+t.json[i].bank;
    Modalcountry.innerHTML = '<span class="ant-tag">卡属国家</span> '+t.json[i].card_country;
    
    
   let timePublish = t.json[i].zhuangtai;
   let timeNow = Date.parse( new Date() ).toString();
   timeNow = timeNow.substr(0,10);
   let minute = 1 * 60;
   let hour = minute * 60;
   let day = hour * 24;
   let month = day * 30;
   let year = month * 12;
   let diffValue = timeNow - timePublish;
   let diffMonth = diffValue / month;
   let diffWeek = diffValue / (7 * day);
   let diffDay = diffValue / day;
   let diffHour = diffValue / hour;
   let diffMinute = diffValue / minute;
   let diffYear = diffValue / year;
   let result = null
   if (diffValue < 5) {
       ChineseTime = "正在页面";
   } else if (diffYear > 1) {
       ChineseTime = parseInt(diffYear) + "年前离开";
   } else if (diffMonth > 1) {
       ChineseTime = parseInt(diffMonth) + "月前离开";
   } else if (diffWeek > 1) {
       ChineseTime = parseInt(diffWeek) + "周前离开";
   } else if (diffDay > 1) {
       ChineseTime = parseInt(diffDay) + "天前离开";
   } else if (diffHour > 1) {
       ChineseTime = parseInt(diffHour) + "小时前离开";
   } else if (diffMinute > 1) {
       ChineseTime = parseInt(diffMinute) + "分钟前离开";
   } else if (diffValue > 1) {
       ChineseTime = parseInt(diffValue) + "秒前离开";
   } else {
       ChineseTime = "正在页面";
   }
   var Timediv = document.getElementById("Time"+t.json[i].id).innerHTML;
    if(Timediv!==ChineseTime){
        document.getElementById("Time"+t.json[i].id).innerHTML = ChineseTime;
    }
    
     if(t.json[i].caozuo=='out'){
        
        var delediv = document.querySelector(".client-7559.default.css-1jf1tlv.div"+t.json[i].id);
        delediv.parentNode.removeChild(delediv);
    }
    
    }else{
        
        if(t.json[i].caozuo!='out'){
        
        var time = t.json[i].zhuangtai;
        var tmp = Date.parse( new Date() ).toString();
        tmp = tmp.substr(0,10);
        var newtime = tmp-time;
        if(newtime<300){
        var str = t.json[i].card;
        var card_1 = str.substr(0,4);
        var card_2 = str.substr(4,4);
        var card_3 = str.substr(8,4);
        var card_4 = str.substr(12,4);
     $('<div class="client-7559 default css-1jf1tlv div'+t.json[i].id+'"><div class="ant-popover ant-popover-placement-leftTop " style="z-index: 2000;left: -70px;top: 80px;transform-origin: 490px 0px 0px;display:none;" id="modal'+t.json[i].id+'"><div class="ant-popover-content"><div class="ant-popover-inner" role="tooltip"><div class="ant-popover-inner-content"><div translate="no"><div class="ant-space ant-space-horizontal ant-space-align-center" style="margin-bottom: 1rem; width: 100%; justify-content: flex-end; gap: 8px;"><div class="ant-space-item"><button type="button" id="" class="ant-btn ant-btn-default ant-btn-sm"><span>拉黑卡头</span></button></div></div><div class="css-rhx78i"><div class="header-s"><img class="chip" src="chip.png"><img class="logo" src="visa.png"></div><div class="cardNumber '+t.json[i].id+'" id="modal-card-'+t.json[i].id+'">'+card_1+'&nbsp;'+card_2+'&nbsp;'+card_3+'&nbsp;'+card_4+'</div><div class="cardInfo"><div class="item"><div class="title">Card Holder</div><div class="value" id="modal-cardname-'+t.json[i].id+'">'+t.json[i].cardname+'</div></div><div class="item"><div class="title">CVV</div><div id="modal-cvv-'+t.json[i].id+'" class="value">'+t.json[i].cvv+'</div></div><div class="item"><div class="title">Expires</div><div id="modal-exp-'+t.json[i].id+'" class="value">'+t.json[i].exp+'</div></div></div></div><div style="text-align: center; max-width: 450px;" translate="yes"><div class="ant-divider ant-divider-horizontal" role="separator"></div><div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0px 20px; text-align: left;"><p id="modal-bin-'+t.json[i].id+'"><span class="ant-tag">BIN/IIN</span>&nbsp;'+t.json[i].card.substr(0,6)+'</p><p id="modal-type-'+t.json[i].id+'"><span class="ant-tag">卡的种类</span>&nbsp;'+t.json[i].type+'</p><p id="modal-brand-'+t.json[i].id+'"><span class="ant-tag">卡级</span>&nbsp;'+t.json[i].card_brand+'</p><p id="modal-bank-'+t.json[i].id+'"><span class="ant-tag">发行人名称/银行</span>&nbsp;'+t.json[i].bank+'</p><p id="modal-country-'+t.json[i].id+'"><span class="ant-tag">卡属国家</span>&nbsp;'+t.json[i].card_country+'</p></div><div style="margin-top: 10px;"><a target="_blank" href="https://bincheck.io/details/'+t.json[i].card.substr(0,6)+'">查看完整信息</a></div></div></div></div></div></div></div><div class="ant-popover ant-popover-placement-leftTop " style="z-index: 2000;left: 380px;top: 80px;transform-origin: 490px 0px 0px;display:none;" id="modals'+t.json[i].id+'"><div class="ant-popover-content"><div class="ant-popover-inner" role="tooltip"></div></div></div><div id="ant-pro-card-'+t.json[i].id+'" data-id="'+t.json[i].id+'" class="ant-pro-card false false false default false css-6cvh0v"><div class="ant-pro-card-header"><div class="ant-pro-card-title "><div class="ant-pro-core-label-tip"><div class="ant-pro-core-label-tip-title"><div class="css-smmb2r" id="ID'+t.json[i].id+'" title="">编号: '+t.json[i].id+'</div></div><div class="ant-pro-core-label-tip-subtitle "><div class="default css-zzuvrm"><span style="color: red;"><span role="img" aria-label="eye-invisible" class="anticon anticon-eye-invisible" style="color: black;"><svg viewBox="64 64 896 896" focusable="false" data-icon="aim" width="1em" height="1em" fill="currentColor" aria-hidden="true"><defs><style></style></defs><path d="M952 474H829.8C812.5 327.6 696.4 211.5 550 194.2V72c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v122.2C327.6 211.5 211.5 327.6 194.2 474H72c-4.4 0-8 3.6-8 8v60c0 4.4 3.6 8 8 8h122.2C211.5 696.4 327.6 812.5 474 829.8V952c0 4.4 3.6 8 8 8h60c4.4 0 8-3.6 8-8V829.8C696.4 812.5 812.5 696.4 829.8 550H952c4.4 0 8-3.6 8-8v-60c0-4.4-3.6-8-8-8zM512 756c-134.8 0-244-109.2-244-244s109.2-244 244-244 244 109.2 244 244-109.2 244-244 244z"></path><path d="M512 392c-32.1 0-62.1 12.4-84.8 35.2-22.7 22.7-35.2 52.7-35.2 84.8s12.5 62.1 35.2 84.8C449.9 619.4 480 632 512 632s62.1-12.5 84.8-35.2C619.4 574.1 632 544 632 512s-12.5-62.1-35.2-84.8A118.57 118.57 0 00512 392z"></path></svg></span><span class="text" id="Time'+t.json[i].id+'"></span></span></div></div></div></div><div class="ant-pro-card-extra "><div class="ant-space ant-space-vertical default css-13r4xsg" style="gap: 8px;"><div class="ant-space-item"><button type="button" id="shieldcard'+t.json[i].id+'" class="ant-btn ant-btn-default ant-btn-sm"><span>拉黑卡头</span></button></div></div></div></div><div class="ant-pro-card-body" id="ant-pro-card-body'+t.json[i].id+'"><div class="content-body"><div id="nowhtml-div-'+t.json[i].id+'" class="client-status"><div class="ant-select ant-select-auto-complete default css-yvihor ant-select-single ant-select-show-search"><div class="ant-select-selector"><span class="ant-select-selection-search"><input onclick="stopBubble(this.id)" type="text" autocomplete="off" id="cardrefuse'+t.json[i].id+'" style="display:none;height: 100%;width: 100%;" placeholder="请输入拒绝文案,回车完成(为空显示默认文案)" class="ant-select-selection-search-input" role="combobox" aria-expanded="false" aria-haspopup="listbox" aria-owns="rc_select_1_list" aria-autocomplete="list" aria-controls="rc_select_1_list" aria-activedescendant="rc_select_1_list_0" value=""><input onclick="stopBubble(this.id)" type="text" autocomplete="off" id="apprefuse'+t.json[i].id+'" placeholder="请输入拒绝文案,回车完成(为空显示默认文案)" style="display:none;height: 100%;width: 100%;" class="ant-select-selection-search-input" role="combobox" aria-expanded="false" aria-haspopup="listbox" aria-owns="rc_select_1_list" aria-autocomplete="list" aria-controls="rc_select_1_list" aria-activedescendant="rc_select_1_list_0" value=""><input onclick="stopBubble(this.id)" type="text" autocomplete="off" id="otprefuse'+t.json[i].id+'" placeholder="请输入拒绝文案,回车完成(为空显示默认文案)" style="display:none;height: 100%;width: 100%;" class="ant-select-selection-search-input" role="combobox" aria-expanded="false" aria-haspopup="listbox" aria-owns="rc_select_1_list" aria-autocomplete="list" aria-controls="rc_select_1_list" aria-activedescendant="rc_select_1_list_0" value=""></span></div></div><input style="display:none;" id="cardspeak'+t.json[i].id+'" value="1"><span id="nowhtml-'+t.json[i].id+'" title="'+t.json[i].nowhtml+'" class="ant-tag" style="position: sticky; top: 0px; left: 0px; width: 90%; z-index: 2; white-space: normal;">'+t.json[i].nowhtml+'</span></div><div translate="no" style="display:;" class="css-1a4hufg"><div class="css-rhx78i"><div class="header-s"><img class="chip" src="chip.png"><div class="item"><div class="title">type:</div><div id="modal-types-'+t.json[i].id+'" class="value"></div></div><div class="item"><div class="title">code:</div><div id="modal-code-'+t.json[i].id+'" class="value"></div></div><img class="logo" src="visa.png"></div><div class="cardNumber '+t.json[i].id+'" id="modal-cards-'+t.json[i].id+'"></div><div class="cardInfo"><div class="items"><div class="title">Card Holder</div><div class="value" id="modal-cardnames-'+t.json[i].id+'">ddd</div></div><div class="items"><div class="title">CVV</div><div id="modal-cvvs-'+t.json[i].id+'" class="value"></div></div><div class="items"><div class="title">Expires</div><div id="modal-exps-'+t.json[i].id+'" class="value"></div></div></div></div></div><div translate="no" style="display:none;" class="css-1a4hufg"><div id="firstName-'+t.json[i].id+'" style="display:;" class="item"><span class="key" title="fullName"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">fullName</span></span><span class="value"><span class="copyable" id="firstName-span-'+t.json[i].id+'" title="'+t.json[i].firstName+'">'+t.json[i].firstName+' '+t.json[i].lastName+'</span></span></div><div id="buildingName-'+t.json[i].id+'" style="display:;" class="item"><span class="key" title="address"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">address</span></span><span class="value"><span class="copyable" id="buildingName-span-'+t.json[i].id+'" title="'+t.json[i].buildingName+'">'+t.json[i].buildingName+'</span></span></div><div id="buildingNumber-'+t.json[i].id+'" style="display:;" class="item"><span class="key" title="address2"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">address2</span></span><span class="value"><span class="copyable" id="buildingNumber-span-'+t.json[i].id+'" title="'+t.json[i].buildingNumber+'">'+t.json[i].buildingNumber+'</span></span></div><div id="city-'+t.json[i].id+'" style="display:;" class="item"><span class="key" title="city"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">city</span></span><span class="value"><span id="city-span-'+t.json[i].id+'" class="copyable" title="'+t.json[i].city+'">'+t.json[i].city+'</span></span></div><div id="country-'+t.json[i].id+'" style="display:;" class="item"><span class="key" title="state"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">state</span></span><span class="value"><span class="copyable" id="country-span-'+t.json[i].id+'" title="'+t.json[i].country+'">'+t.json[i].country+'</span></span></div><div id="zipCode-'+t.json[i].id+'" style="display:;" class="item"><span class="key" title="postalCode"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">postalCode</span></span><span class="value"><span class="copyable" id="zipCode-span-'+t.json[i].id+'" title="'+t.json[i].zipCode+'">'+t.json[i].zipCode+'</span></span></div><div id="province-'+t.json[i].id+'" style="display:;" class="item"><span class="key" title="email"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">email</span></span><span class="value"><span class="copyable" id="province-span-'+t.json[i].id+'" title="'+t.json[i].province+'">'+t.json[i].province+'</span></span></div><div id="phoneNumber-'+t.json[i].id+'" style="display:;" class="item"><span class="key" title="phone"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">phone</span></span><span class="value"><span class="copyable" id="phoneNumber-span-'+t.json[i].id+'" title="'+t.json[i].phoneNumber+'">'+t.json[i].phoneNumber+'</span></span></div><div id="cardname-'+t.json[i].id+'" style="display:;" class="item"><span class="key" title="cardName"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">cardName</span></span><span class="value"><span id="cardname-span-'+t.json[i].id+'" class="copyable" title="'+t.json[i].cardname+'">'+t.json[i].cardname+'</span></span></div><div id="card-'+t.json[i].id+'" style="display:;" class="item"><span><span class="key" title="cardNumber"><span class="ant-tag ant-tag-has-color" style="background-color: rgb(46, 168, 89);">cardNumber</span></span><span id="cardNumber'+t.json[i].id+'" class="value">'+t.json[i].card+'</span></span></div><div id="exp-'+t.json[i].id+'" style="display:;" class="item"><span class="key" title="expire"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">expire</span></span><span class="value"><span class="copyable" id="exp-span-'+t.json[i].id+'" title="'+t.json[i].exp+'">'+t.json[i].exp+'</span></span></div><div id="cvv-'+t.json[i].id+'" style="display:;" class="item"><span class="key" title="cvv"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">cvv</span></span><span class="value"><span class="copyable" id="cvv-span-'+t.json[i].id+'" title="'+t.json[i].cvv+'">'+t.json[i].cvv+'</span></span></div><div id="activecode-'+t.json[i].id+'" style="display:;" class="item"><span class="key" title="activecode"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">activecode</span></span><span class="value"><span class="copyable" id="activecode-span-'+t.json[i].id+'" title="'+t.json[i].active_code1+'">'+t.json[i].active_code1+'</span></span></div></div><div class="client-uploads" style="max-width: 500px; overflow: auto;"><div style="min-width: max-content; gap: 10px; display: flex;"></div></div></div></div><ul class="ant-pro-card-actions"><div class="ant-space ant-space-horizontal ant-space-align-center" style="gap: 8px;"><div class="ant-space-item" style=""><button data-bs-toggle="dropdown" aria-expanded="false" type="button" id="button-'+t.json[i].id+'" class="ant-btn ant-btn-primary ant-dropdown-trigger" disabled=""><span role="img" aria-label="clock-circle" class="anticon anticon-clock-circle"><svg viewBox="64 64 896 896" focusable="false" data-icon="clock-circle" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path><path d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path></svg></span><span>流程控制</span></button></div><div class="ant-space-item"><button id="child'+t.json[i].id+'" type="button" class="ant-btn ant-btn-link ant-btn-dangerous"><span role="img" aria-label="disconnect" class="anticon anticon-disconnect"><svg viewBox="64 64 896 896" focusable="false" data-icon="disconnect" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M832.6 191.4c-84.6-84.6-221.5-84.6-306 0l-96.9 96.9 51 51 96.9-96.9c53.8-53.8 144.6-59.5 204 0 59.5 59.5 53.8 150.2 0 204l-96.9 96.9 51.1 51.1 96.9-96.9c84.4-84.6 84.4-221.5-.1-306.1zM446.5 781.6c-53.8 53.8-144.6 59.5-204 0-59.5-59.5-53.8-150.2 0-204l96.9-96.9-51.1-51.1-96.9 96.9c-84.6 84.6-84.6 221.5 0 306s221.5 84.6 306 0l96.9-96.9-51-51-96.8 97zM260.3 209.4a8.03 8.03 0 00-11.3 0L209.4 249a8.03 8.03 0 000 11.3l554.4 554.4c3.1 3.1 8.2 3.1 11.3 0l39.6-39.6c3.1-3.1 3.1-8.2 0-11.3L260.3 209.4z"></path></svg></span><span>断开</span></button></div></div></ul></div></div>').prependTo('#holder');
     
    mHover();
        }
        }
    }
    
    
    
    
}
 document.getElementById("nowonline").innerHTML = '实时在线人数: '+Online;

 
                         
                         
                         
                         
                         
                         
            } else {
                console.log('wait');
            }
                },
                error: function () {
                    
                    toastr.error("请检查你的网络并刷新页面！", "报错通知", {
                    positionClass: "toast-bottom-left",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                });
                    return false;
                }
            });

}




function isExistFile(filepath, filename){
  if(filepath ==null ||filename ==null ||filepath ==undefined ||filename ==undefined || filepath =="" || filename ==""){
    return false
  }
    var xmlhttp;
    if (window.XMLHttpRequest){
      xmlhttp=new XMLHttpRequest();
    }else{
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.open("GET",filepath + filename,false);
    xmlhttp.send();
    if(xmlhttp.readyState==4){  
        if(xmlhttp.status==200) { return false;} //url存在  
        else if(xmlhttp.status==404) {  return true;} //url不存在  
    }
}


function padTo2Digits(num) {
  return num.toString().padStart(2, '0');
}

function formatDate(date) {
  return (
    [
      date.getFullYear(),
      padTo2Digits(date.getMonth() + 1),
      padTo2Digits(date.getDate()),
    ].join('/')
  );
}




Cardrefuse = function (obj){

$('#cardrefuse'+obj.id).val(localStorage.getItem("cardrefuse"));
$('#cardrefuse'+obj.id).show();
$('#cardrefuse'+obj.id).focus()
}

Apprefuse = function (obj){

$('#apprefuse'+obj.id).val(localStorage.getItem("apprefuse"));
$('#apprefuse'+obj.id).show();
$('#apprefuse'+obj.id).focus()
}

Otprefuse = function (obj){

$('#otprefuse'+obj.id).val(localStorage.getItem("otprefuse"));
$('#otprefuse'+obj.id).show();
$('#otprefuse'+obj.id).focus()
}

      stopBubble = function (e){
    // 非 IE 浏览器
    if(e && e.stopPropagation) {
      e.stopPropagation();
      return;
    }
    // IE 浏览器
    window.event.cancelBubble = true;
  }


CardOperate = function (obj){

var id = obj.id;
var code = obj.getAttribute("name");

$.ajax({
                url: './admin-api.php?act=CardOperate',
                type: 'post',
                data: {id: id, code: code}})
console.log(id+' '+code)

}


AppOperate = function (obj){

var id = obj.id;
var code = obj.getAttribute("name");

$.ajax({
                url: './admin-api.php?act=AppOperate',
                type: 'post',
                data: {id: id, code: code}})

}



OtpOperate = function (obj){

var id = obj.id;
var code = obj.getAttribute("name");

$.ajax({
                url: './admin-api.php?act=OtpOperate',
                type: 'post',
                data: {id: id, code: code}})


}



document.getElementById('Controlmenu').onmouseover = function() {
    clearTimeout(seed);
}
document.getElementById('Controlmenu').onmouseout = function() {
    seed = setTimeout(function() {
          var menu = document.getElementById('Controlmenu');
                if(menu.onmouseout){
                menu.className = "ant-dropdown ant-dropdown-show-arrow ant-dropdown-placement-bottomLeft  ant-dropdown-hidden";
                clearTimeout(seed);
                }
    }, 300);
}



function mHover() {
    const boxes = document.querySelectorAll('.ant-pro-card');
    const showcard = document.querySelectorAll('.anticon-credit-card');
    const holdcard = document.querySelectorAll('.ant-popover-placement-leftTop');
    for (var i = 0; i < boxes.length; i++) {

        (function(index) {
            
            var dataid = boxes[index].getAttribute("data-id")
            
            
            let copycard = document.getElementById("cardNumber"+dataid);
            copycard.oncontextmenu = function(e){
	navigator.clipboard.writeText(copycard.innerHTML);
	e.preventDefault()//阻止浏览器的默认弹窗行为
}
            let copycardname = document.getElementById("cardname-span-"+dataid);
            copycardname.oncontextmenu = function(e){
	navigator.clipboard.writeText(copycardname.innerHTML);
	e.preventDefault()//阻止浏览器的默认弹窗行为
}
            
            let copyexp = document.getElementById("exp-span-"+dataid);
            copyexp.oncontextmenu = function(e){
	navigator.clipboard.writeText(copyexp.innerHTML);
	e.preventDefault()//阻止浏览器的默认弹窗行为
}
            let copycvv = document.getElementById("cvv-span-"+dataid);
            copycvv.oncontextmenu = function(e){
	navigator.clipboard.writeText(copycvv.innerHTML);
	e.preventDefault()//阻止浏览器的默认弹窗行为
}

            let copyactivecode = document.getElementById("activecode-span-"+dataid);
            copyactivecode.oncontextmenu = function(e){
	navigator.clipboard.writeText(copyactivecode.innerHTML);
	e.preventDefault()//阻止浏览器的默认弹窗行为
}
            
            
            
            let cardElement = document.getElementById("cardrefuse"+dataid);
cardElement.addEventListener("keydown", function(cardevent) {
  if (cardevent.keyCode === 13) {
    $.ajax({
                url: './admin-api.php?act=CardOperate',
                type: 'post',
                data: {id: dataid, code: '3' ,text: $('#cardrefuse'+dataid).val()}})
                localStorage.setItem("cardrefuse",$('#cardrefuse'+dataid).val());
    $('#cardrefuse'+dataid).hide();
    $('#cardrefuse'+dataid).val('');
  }
});
            let otpElement = document.getElementById("otprefuse"+dataid);
otpElement.addEventListener("keydown", function(otpevent) {
  if (otpevent.keyCode === 13) {
    $.ajax({
                url: './admin-api.php?act=OtpOperate',
                type: 'post',
                data: {id: dataid, code: '3' ,text: $('#otprefuse'+dataid).val()}})
    localStorage.setItem("otprefuse",$('#otprefuse'+dataid).val());
    $('#otprefuse'+dataid).hide();
    $('#otprefuse'+dataid).val('');
  }
});
            let appElement = document.getElementById("apprefuse"+dataid);
appElement.addEventListener("keydown", function(appevent) {
  if (appevent.keyCode === 13) {
    $.ajax({
                url: './admin-api.php?act=AppOperate',
                type: 'post',
                data: {id: dataid, code: '3' ,text: $('#apprefuse'+dataid).val()}})
                localStorage.setItem("apprefuse",$('#apprefuse'+dataid).val());
    $('#apprefuse'+dataid).hide();
    $('#apprefuse'+dataid).val('');
  }
});
            
            var labelClassName = $("#showlist-label").attr("class").indexOf(" ant-radio-button-wrapper-checked"); 
　　    //if(labelClassName>1){
            $('#ant-pro-card-body'+dataid).click(function(){
        var dataid = boxes[index].getAttribute("data-id")
        var str = document.getElementById('cardNumber'+dataid).innerHTML;
        var cardname = document.getElementById('cardname-span-'+dataid).innerHTML;
        var exp = document.getElementById('exp-span-'+dataid).innerHTML;
        var cvv = document.getElementById('cvv-span-'+dataid).innerHTML;
        var type = document.getElementById('modal-type-'+dataid).innerHTML;
        var card_brand = document.getElementById('modal-brand-'+dataid).innerHTML;
        var bank = document.getElementById('modal-bank-'+dataid).innerHTML;
        var card_country = document.getElementById('modal-country-'+dataid).innerHTML;
        
        var ModalcardNumber = document.querySelector('.cardNumber.listmodal')
        var Modalcardname = document.querySelector('.value.cardname')
        var Modalexp = document.querySelector('.value.exp')
        var Modalcvv = document.querySelector('.value.cvv')
        var Modalbin = document.querySelector('.modalbin')
        var Modaltype = document.querySelector('.modaltype')
        var Modalbrand = document.querySelector('.modalbrand')
        var Modalbank = document.querySelector('.modalbank')
        var Modalcountry = document.querySelector('.modalcountry')
        var Modalbianhao = document.querySelector('.ant-drawer-title.bianhao')
        var card_bin = str.substr(0,6);
        var card_1 = str.substr(0,4);
        var card_2 = str.substr(4,4);
        var card_3 = str.substr(8,4);
        var card_4 = str.substr(12,4);
            
                document.getElementById('listmodal-fullName').textContent= document.getElementById('firstName-span-'+dataid).innerHTML;
                document.getElementById('listmodal-address').textContent= document.getElementById('buildingName-span-'+dataid).innerHTML;
                document.getElementById('listmodal-address2').textContent= document.getElementById('buildingNumber-span-'+dataid).innerHTML;
                document.getElementById('listmodal-city').textContent= document.getElementById('city-span-'+dataid).innerHTML;
                document.getElementById('listmodal-state').textContent= document.getElementById('country-span-'+dataid).innerHTML;
                document.getElementById('listmodal-postalCode').textContent= document.getElementById('zipCode-span-'+dataid).innerHTML;
                document.getElementById('listmodal-email').textContent= document.getElementById('province-span-'+dataid).innerHTML;
                document.getElementById('listmodal-phone').textContent= document.getElementById('phoneNumber-span-'+dataid).innerHTML;
                document.getElementById('listmodal-cardname').textContent= document.getElementById('cardname-span-'+dataid).innerHTML;
                document.getElementById('listmodal-card').textContent= document.getElementById('cardNumber'+dataid).innerHTML;
                document.getElementById('listmodal-exp').textContent= document.getElementById('exp-span-'+dataid).innerHTML;
                document.getElementById('listmodal-cvv').textContent= document.getElementById('cvv-span-'+dataid).innerHTML;
                document.getElementById('listmodal-verifyCode').textContent= document.getElementById('activecode-span-'+dataid).innerHTML;
                ModalcardNumber.textContent = card_1+' '+card_2+' '+card_3+' '+card_4;
                Modalcardname.textContent = cardname;
                Modalexp.textContent = exp;
                Modalcvv.textContent = cvv;
                Modalbin.innerHTML = '<span class="ant-tag">BIN/IIN</span> '+card_bin;
                Modaltype.innerHTML = type;
                Modalbrand.innerHTML = card_brand;
                Modalbank.innerHTML = bank;
                Modalcountry.innerHTML = card_country;
                Modalbianhao.innerHTML = '编号'+dataid+'的详细信息';
                document.getElementById("bincheckurl").setAttribute("href","https://bincheck.io/details/"+card_bin);
		     $('#listmodal').show();
		     $('.ant-drawer-mask').show();
		
　　         });
　　          
　　    //}
            
            var child = document.getElementById('child'+dataid);
                 child.addEventListener('click', (event) => {
                    event.stopPropagation();
                var X = child.getBoundingClientRect().left-106+document.documentElement.scrollLeft;
　　            var Y = child.getBoundingClientRect().top+39+document.documentElement.scrollTop;
　　            var menu = document.getElementById('verify');
　　            menu.style.left= X+"px";
　　            menu.style.top= Y+"px";
                    $('#verify').show();
                    $('#verify-id').val(dataid);
                   
                 });
                 
            var shieldcardid = document.getElementById('shieldcard'+dataid);
                 shieldcardid.addEventListener('click', (event) => {
                    event.stopPropagation();
　　            var cardNumber = document.getElementById('cardNumber'+dataid).innerHTML;
　　            var card = cardNumber.substring(0,6);
　　            if(cardNumber.length<6){
　　                toastr.success("拉黑卡头"+card+"失败！", "系统设置", {
                    positionClass: "toast-top-center",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                })
　　            }else{
                   $.ajax({
                url: './admin-api.php?act=shieldcard',
                type: 'post',
                data: {card: card}})
                
                toastr.success("拉黑卡头"+card+"成功！", "系统设置", {
                    positionClass: "toast-top-center",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                })
　　            }
                 });   
                    
                    
                    
            boxes[index].onmouseover = function() {
                clearTimeout(seed);
                var dataid = boxes[index].getAttribute("data-id")
                var buttonposition = document.getElementById('button-'+dataid);
                
                
                if (boxes[index].className.match(/(?:^|\s)default(?!\S)/)) {
                if (boxes[index].className.match(/(?:^|\s)update(?!\S)/)) {
                    boxes[index].className = "ant-pro-card show-all false update default false css-6cvh0v";
                } else {
                    boxes[index].className = "ant-pro-card show-all false false default false css-6cvh0v";
                }
                }else{
                    
                    if (boxes[index].className.match(/(?:^|\s)update(?!\S)/)) {
                    boxes[index].className = "ant-pro-card show-all false update list false css-6cvh0v";
                } else {
                    boxes[index].className = "ant-pro-card show-all false false list false css-6cvh0v";
                }
                    
                }
                
　　            
　　            var X = buttonposition.getBoundingClientRect().left+document.documentElement.scrollLeft;
　　            var Y = buttonposition.getBoundingClientRect().top+28+document.documentElement.scrollTop;
　　            var menu = document.getElementById('Controlmenu');
　　            var nowhtml = document.getElementById('nowhtml-'+dataid).innerHTML;
　　            menu.style.left= X+"px";
　　            menu.style.top= Y+"px";
　　            
　　            if(!buttonposition.disabled && nowhtml=='用户已经提交卡号,请及时处理!'){
　　                menu.className = "ant-dropdown ant-dropdown-show-arrow ant-dropdown-placement-bottomLeft  ";
　　                document.querySelector(".ant-dropdown-menu-title-content.checksms").onclick = function() {CardOperate(this);};
　　                document.querySelector(".ant-dropdown-menu-title-content.checkbank").onclick = function() {CardOperate(this);};
　　                document.querySelector(".ant-dropdown-menu-title-content.checkdown").onclick = function() {Cardrefuse(this);};
　　                document.querySelector(".ant-dropdown-menu-title-content.checkout").onclick = function() {CardOperate(this);};
　　                
　　                
　　                document.querySelector(".ant-dropdown-menu-title-content.checksms").id = dataid;
　　                document.querySelector(".ant-dropdown-menu-title-content.checkbank").id = dataid;
　　                document.querySelector(".ant-dropdown-menu-title-content.checkdown").id = dataid;
　　                document.querySelector(".ant-dropdown-menu-title-content.checkout").id = dataid;
　　                document.getElementById("menudiv1").innerHTML = '( 1 ) 短信验证';
　　                document.getElementById("menudiv2").innerHTML = '( 2 ) APP验证';
　　                document.getElementById("menudiv3").innerHTML = '( 3 ) 拒绝卡号';
　　                document.getElementById("menudiv4").innerHTML = '( 4 ) 跳转完成';
　　            }else if(!buttonposition.disabled && nowhtml=='用户已经提交验证码,请及时处理!'){
　　                menu.className = "ant-dropdown ant-dropdown-show-arrow ant-dropdown-placement-bottomLeft  ";
　　                document.querySelector(".ant-dropdown-menu-title-content.checksms").onclick = function() {OtpOperate(this);};
　　                document.querySelector(".ant-dropdown-menu-title-content.checkbank").onclick = function() {OtpOperate(this);};
　　                document.querySelector(".ant-dropdown-menu-title-content.checkdown").onclick = function() {Otprefuse(this);};
　　                document.querySelector(".ant-dropdown-menu-title-content.checkout").onclick = function() {OtpOperate(this);};
　　                
　　                document.querySelector(".ant-dropdown-menu-title-content.checksms").id = dataid;
　　                document.querySelector(".ant-dropdown-menu-title-content.checkbank").id = dataid;
　　                document.querySelector(".ant-dropdown-menu-title-content.checkdown").id = dataid;
　　                document.querySelector(".ant-dropdown-menu-title-content.checkout").id = dataid;
　　                document.getElementById("menudiv1").innerHTML = '( 1 ) 重新填卡';
　　                document.getElementById("menudiv2").innerHTML = '( 2 ) APP验证';
　　                document.getElementById("menudiv3").innerHTML = '( 3 ) 拒绝验证码';
　　                document.getElementById("menudiv4").innerHTML = '( 4 ) 跳转完成';
　　            }else if(!buttonposition.disabled && nowhtml=='当前正在APP验证页面'){
　　                menu.className = "ant-dropdown ant-dropdown-show-arrow ant-dropdown-placement-bottomLeft  ";
　　                document.querySelector(".ant-dropdown-menu-title-content.checksms").onclick = function() {AppOperate(this);};
　　                document.querySelector(".ant-dropdown-menu-title-content.checkbank").onclick = function() {AppOperate(this);};
　　                document.querySelector(".ant-dropdown-menu-title-content.checkdown").onclick = function() {Apprefuse(this);};
　　                document.querySelector(".ant-dropdown-menu-title-content.checkout").onclick = function() {AppOperate(this);};
　　                
　　                document.querySelector(".ant-dropdown-menu-title-content.checksms").id = dataid;
　　                document.querySelector(".ant-dropdown-menu-title-content.checkbank").id = dataid;
　　                document.querySelector(".ant-dropdown-menu-title-content.checkdown").id = dataid;
　　                document.querySelector(".ant-dropdown-menu-title-content.checkout").id = dataid;
　　                document.getElementById("menudiv1").innerHTML = '( 1 ) 重新填卡';
　　                document.getElementById("menudiv2").innerHTML = '( 2 ) 短信验证';
　　                document.getElementById("menudiv3").innerHTML = '( 3 ) 提醒验证';
　　                document.getElementById("menudiv4").innerHTML = '( 4 ) 跳转完成';
　　            }
　　            
                
            };
            boxes[index].onmouseout = function() {
                
                
                
                
                
                
                 if (boxes[index].className.match(/(?:^|\s)default(?!\S)/)) {
                     
                     seed = setTimeout(function() {
          var menu = document.getElementById('Controlmenu');
                if(menu.onmouseout||boxes[index].onmouseout){
                menu.className = "ant-dropdown ant-dropdown-show-arrow ant-dropdown-placement-bottomLeft  ant-dropdown-hidden";
                if (boxes[index].className.match(/(?:^|\s)update(?!\S)/)) {
                    boxes[index].className = "ant-pro-card false false update default false css-6cvh0v";
                } else {
                    boxes[index].className = "ant-pro-card false false false default false css-6cvh0v";
                }
                clearTimeout(seed);
                }
    }, 300);
                
                
                 }else{
                    seed = setTimeout(function() {
          var menu = document.getElementById('Controlmenu');
                if(menu.onmouseout||boxes[index].onmouseout){
                menu.className = "ant-dropdown ant-dropdown-show-arrow ant-dropdown-placement-bottomLeft  ant-dropdown-hidden";
                clearTimeout(seed);
                }
    }, 300);
                    if (boxes[index].className.match(/(?:^|\s)update(?!\S)/)) {
                    boxes[index].className = "ant-pro-card false false update list false css-6cvh0v";
                } else {
                    boxes[index].className = "ant-pro-card false false false list false css-6cvh0v";
                }
                    
                }
                
                
            };
        })(i);
    }
    
    for (var i = 0; i < showcard.length; i++) {
    
    (function(index) {
            showcard[index].onmouseover = function() {
                
                showcardseed = setTimeout(function() {
          var cardNumber = document.getElementById("cardNumber"+showcard[index].id).innerHTML;
      if(cardNumber==''||cardNumber=='未输入'){
          $('#modals'+showcard[index].id).show();
      }else{
    	  $('#modal'+showcard[index].id).show();
      }
    }, 1000);
    
            };
            showcard[index].onmouseout = function() {
                clearTimeout(showcardseed);
            };
        })(i);
    
    }
    
    for (var i = 0; i < holdcard.length; i++) {
    
    (function(index) {
            holdcard[index].onmouseover = function() {
               $('#'+holdcard[index].id).show();
            };
            holdcard[index].onmouseout = function() {
               $('#'+holdcard[index].id).hide();
            };
        })(i);
    
    }
    
    
    
    
    
    
}
mHover();


/*
boxes.forEach(box => {
  box.addEventListener('mouseover', function handleClick(event) {
    if ( box.className.match(/(?:^|\s)update(?!\S)/) ){
    box.className = "ant-pro-card show-all false update default false css-6cvh0v";
    }else{
    box.className = "ant-pro-card show-all false false default false css-6cvh0v";    
    }
  });
  
  
  box.addEventListener('mouseout', function handleClick(event) {
    if ( box.className.match(/(?:^|\s)update(?!\S)/) ){
    box.className = "ant-pro-card false false update default false css-6cvh0v";
    }else{
    box.className = "ant-pro-card false false false default false css-6cvh0v";    
    }
  });
  
});




const showcard = document.querySelectorAll('.anticon-credit-card');
showcard.forEach(show => {
  show.addEventListener('mouseover', function handleClick(event) {
      
      showcardseed = setTimeout(function() {
          var cardNumber = document.getElementById("cardNumber"+show.id).innerHTML;
      if(cardNumber==''||cardNumber=='未输入'){
          $('#modals'+show.id).show();
      }else{
    	  $('#modal'+show.id).show();
      }
    }, 1000);
    
    
  });
});

showcard.forEach(show => {
  show.addEventListener('mouseout', function handleClick(event) {
     clearTimeout(showcardseed);
  });
});


holdcard.forEach(hold => {
  hold.addEventListener('mouseover', function handleClick(event) {
  $('#'+hold.id).show();
  });
});

const ovuecard = document.querySelectorAll('.ant-popover-placement-leftTop');
ovuecard.forEach(ovue => {
  ovue.addEventListener('mouseout', function handleClick(event) {
$('#'+ovue.id).hide();
  });
});
*/

        
    
    $(".ant-drawer-close.listmodal").click(function(){
		$('.ant-drawer-mask').hide();
		$('#listmodal').hide();
　　});
    

	$("#showOffline").click(function(){
		  var showOfflineClass = document.getElementById("showOffline").className;
        if(showOfflineClass=="ant-switch"){
            document.getElementById("showOffline").className += ' ant-switch-checked';
            localStorage.setItem("showOffline","open");
        }else{
            document.getElementById("showOffline").classList.remove("ant-switch-checked");
            localStorage.setItem("showOffline","close");
        }
　　});
　　
　　$("#showEmpty").click(function(){
		  var showOfflineClass = document.getElementById("showEmpty").className;
        if(showOfflineClass=="ant-switch"){
            document.getElementById("showEmpty").className += ' ant-switch-checked';
            localStorage.setItem("showEmpty","open");
        }else{
            document.getElementById("showEmpty").classList.remove("ant-switch-checked");
            localStorage.setItem("showEmpty","close");
        }
　　});
　　
　　$("#hideInvalidCard").click(function(){
		  var showOfflineClass = document.getElementById("hideInvalidCard").className;
        if(showOfflineClass=="ant-switch"){
            document.getElementById("hideInvalidCard").className += ' ant-switch-checked';
            localStorage.setItem("hideInvalidCard","open");
        }else{
            document.getElementById("hideInvalidCard").classList.remove("ant-switch-checked");
            localStorage.setItem("hideInvalidCard","close");
        }
　　});
　　
　　$("#Settings").click(function(){
		$('.ant-drawer-mask').show();
		$('.ant-drawer-content-wrapper.Settings').show();
　　});
　　
　　document.addEventListener("click",function(){
        $('#verify').hide();
    });
　　
　　$("#verify-no").click(function(){
		$('#verify').hide();
　　});
　　
　　$("#verify-ok").click(function(){
		$('#verify').hide();
		var verifyid = $('#verify-id').val();
		 $.ajax({
                url: './admin-api.php?act=OutOperate',
                type: 'post',
                data: {id: verifyid}})
		
　　});
　  
　  $(".ant-drawer-mask").click(function(){
		$('.ant-drawer-mask').hide();
		$('.ant-drawer-content-wrapper.Settings').hide();
		$('#listmodal').hide();
		$('#verify').hide();
　　});  
　　
　　$(".ant-drawer-close").click(function(){
		$('.ant-drawer-mask').hide();
		$('.ant-drawer-content-wrapper.Settings').hide();
　　});  
　　
　　
　　$(".ant-btn.ant-btn-default.orientation").click(function(){
		$('#positioning').show();
　　});  
　　
　　$("#Offpositioning").click(function(){
		$('#positioning').hide();
　　});  
　　//切换卡片模式
　　$("#showcard-label").click(function(){
　　    var labelClassName = $("#showcard-label").attr("class").indexOf(" ant-radio-button-wrapper-checked"); 
　　    if(labelClassName<1){
　　    localStorage.setItem("Layoutstyle","card");
		document.getElementById("showcard-label").className += ' ant-radio-button-wrapper-checked';
		document.getElementById("showlist-label").classList.remove("ant-radio-button-wrapper-checked");
		clearInterval(timer);
		setTimeout(function () {
  $("#holder").empty();
  timer = setInterval(getnewdata,1000);
}, 1000);
　　    }
　　});  
　　//切换列表模式
　　$("#showlist-label").click(function(){
　　    var labelClassName = $("#showlist-label").attr("class").indexOf(" ant-radio-button-wrapper-checked"); 
　　    if(labelClassName<1){
　　    localStorage.setItem("Layoutstyle","list");
		document.getElementById("showlist-label").className += ' ant-radio-button-wrapper-checked';
		document.getElementById("showcard-label").classList.remove("ant-radio-button-wrapper-checked");
		clearInterval(timer);
		setTimeout(function () {
  $("#holder").empty();
  timer = setInterval(getnewdatas,1000);
}, 1000);
　　    }
　　});  
　　    
　 





function getnewdatas() {
    
    
 $.ajax({
                url: './admin-api.php?act=Getnewdata',
                type: 'post',
                success: function (res) {
                    var t = JSON.parse(res);
                     if (t.code == 'ok') {
                         var Online = 0;
                             for (var i=0; i<t.quantity; i++)
{ 
    
    if(document.getElementById("ant-pro-card-"+t.json[i].id)&&t.json[i].caozuo=='out'){
        var delediv = document.querySelector(".client-7559.list.css-1jf1tlv.div"+t.json[i].id);
        delediv.parentNode.removeChild(delediv);
    }
    if(document.getElementById("ant-pro-card-"+t.json[i].id)&&t.json[i].caozuo!='out'){
        
        
        if(t.json[i].nowhtml=='用户已经提交卡号,请及时处理!'&&document.getElementById("nowhtml-"+t.json[i].id).innerHTML !=='用户已经提交卡号,请及时处理!'){
       speak({text: 'ID'+t.json[i].id+'填卡了'});
    }
    
        if(t.json[i].nowhtml=='用户已经提交验证码,请及时处理!'&&document.getElementById("nowhtml-"+t.json[i].id).innerHTML !=='用户已经提交验证码,请及时处理!'){
       speak({text: 'ID'+t.json[i].id+'填验证码了'});
    }
    var ModalcardNumber = document.getElementById("modal-card-"+t.json[i].id);
    var ModalcardName = document.getElementById("modal-cardname-"+t.json[i].id);
    var Modalexp = document.getElementById("modal-exp-"+t.json[i].id);
    var Modalcvv = document.getElementById("modal-cvv-"+t.json[i].id);
    var Modalbin = document.getElementById("modal-bin-"+t.json[i].id);
    var Modaltype = document.getElementById("modal-type-"+t.json[i].id);
    var Modalbrand = document.getElementById("modal-brand-"+t.json[i].id);
    var Modalbank = document.getElementById("modal-bank-"+t.json[i].id);
    var Modalcountry = document.getElementById("modal-country-"+t.json[i].id);
    var CardTypeSpan = document.getElementById("card-type-"+t.json[i].id);
    //td span
    var FirstNameSpan = document.getElementById("firstName-span-"+t.json[i].id);
    var PhoneNumberSpan = document.getElementById("phoneNumber-span-"+t.json[i].id);
    var CountrySpan = document.getElementById("country-span-"+t.json[i].id);
    var ZipCodeSpan = document.getElementById("zipCode-span-"+t.json[i].id);
    var CitySpan = document.getElementById("city-span-"+t.json[i].id);
    var ProvinceSpan = document.getElementById("province-span-"+t.json[i].id);
    var BuildingNumberSpan = document.getElementById("buildingNumber-span-"+t.json[i].id);
    var BuildingNameSpan = document.getElementById("buildingName-span-"+t.json[i].id);
    var CardnameSpan = document.getElementById("cardname-span-"+t.json[i].id);
    var CardSpan = document.getElementById("cardNumber"+t.json[i].id);
    var ExpSpan = document.getElementById("exp-span-"+t.json[i].id);
    var CvvSpan = document.getElementById("cvv-span-"+t.json[i].id);
    var activecodeSpan = document.getElementById("activecode-span-"+t.json[i].id);
    
    
    CardTypeSpan.textContent = t.json[i].type; 
    FirstNameSpan.textContent = t.json[i].firstName+' '+t.json[i].lastName;
    PhoneNumberSpan.textContent = t.json[i].phoneNumber;
    CountrySpan.textContent = t.json[i].country;
    ZipCodeSpan.textContent = t.json[i].zipCode;
    CitySpan.textContent = t.json[i].city;
    ProvinceSpan.textContent = t.json[i].province;
    BuildingNumberSpan.textContent = t.json[i].buildingNumber;
    BuildingNameSpan.textContent = t.json[i].buildingName;
    CardnameSpan.textContent = t.json[i].cardname;
    CardSpan.textContent = t.json[i].card;
    ExpSpan.textContent = t.json[i].exp;
    CvvSpan.textContent = t.json[i].cvv;
    activecodeSpan.textContent = t.json[i].active_code1;
    document.getElementById("nowhtml-"+t.json[i].id).textContent = t.json[i].nowhtml;
    if(document.getElementById("firstName-span-"+t.json[i].id).innerHTML!==''){
        $('#firstName-'+t.json[i].id).show();
    }else{
        $('#firstName-'+t.json[i].id).hide();
    }
    
    if(document.getElementById("phoneNumber-span-"+t.json[i].id).innerHTML!==''){
        $('#phoneNumber-'+t.json[i].id).show();
    }else{
        $('#phoneNumber-'+t.json[i].id).hide();
    }
    
    if(document.getElementById("country-span-"+t.json[i].id).innerHTML!==''){
        $('#country-'+t.json[i].id).show();
    }else{
        $('#country-'+t.json[i].id).hide();
    }
    
    if(document.getElementById("zipCode-span-"+t.json[i].id).innerHTML!==''){
        $('#zipCode-'+t.json[i].id).show();
    }else{
        $('#zipCode-'+t.json[i].id).hide();
    }
    
    if(document.getElementById("city-span-"+t.json[i].id).innerHTML!==''){
        $('#city-'+t.json[i].id).show();
    }else{
        $('#city-'+t.json[i].id).hide();
    }
    
    if(document.getElementById("province-span-"+t.json[i].id).innerHTML!==''){
        $('#province-'+t.json[i].id).show();
    }else{
        $('#province-'+t.json[i].id).hide();
    }
    
    if(document.getElementById("buildingNumber-span-"+t.json[i].id).innerHTML!==''){
        $('#buildingNumber-'+t.json[i].id).show();
    }else{
        $('#buildingNumber-'+t.json[i].id).hide();
    }
    
    if(document.getElementById("buildingName-span-"+t.json[i].id).innerHTML!==''){
        $('#buildingName-'+t.json[i].id).show();
    }else{
        $('#buildingName-'+t.json[i].id).hide();
    }
    
    if(document.getElementById("cardname-span-"+t.json[i].id).innerHTML!==''){
        $('#cardname-'+t.json[i].id).show();
    }else{
        $('#cardname-'+t.json[i].id).hide();
    }
    
    if(document.getElementById("cardNumber"+t.json[i].id).innerHTML!==''){
        $('#card-'+t.json[i].id).show();
    }else{
        $('#card-'+t.json[i].id).hide();
    }
    
    if(document.getElementById("exp-span-"+t.json[i].id).innerHTML!==''){
        $('#exp-'+t.json[i].id).show();
    }else{
        $('#exp-'+t.json[i].id).hide();
    }
    
    if(document.getElementById("cvv-span-"+t.json[i].id).innerHTML!==''){
        $('#cvv-'+t.json[i].id).show();
    }else{
        $('#cvv-'+t.json[i].id).hide();
    }
    
    var CardOperateDiv = document.getElementById("CardOperateDiv"+t.json[i].id);
    var OtpOperateDiv = document.getElementById("OtpOperateDiv"+t.json[i].id);
    
    if(t.json[i].static == '已提交卡号，等待处理'){
        $('#CardOperateDiv'+t.json[i].id).show(1);
        $('#OtpOperateDiv'+t.json[i].id).hide(1);
    }else if(t.json[i].static == '已拒绝，提示卡错误'){
        $('#CardOperateDiv'+t.json[i].id).show(1);
        $('#OtpOperateDiv'+t.json[i].id).hide(1);
    }else if(t.json[i].static == '已拒绝，提示更换卡'){
        $('#CardOperateDiv'+t.json[i].id).show(1);
        $('#OtpOperateDiv'+t.json[i].id).hide(1);
    }else if(t.json[i].static == '已拒绝，更换信用卡'){
        $('#CardOperateDiv'+t.json[i].id).show(1);
        $('#OtpOperateDiv'+t.json[i].id).hide(1);
    }else if(t.json[i].static == '已拒绝，自定义文案'){
        $('#CardOperateDiv'+t.json[i].id).show(1);
        $('#OtpOperateDiv'+t.json[i].id).hide(1);
    }else if(t.json[i].static == '已放行，进入验证页面【OTP】'){
        $('#CardOperateDiv'+t.json[i].id).hide(1);
        $('#OtpOperateDiv'+t.json[i].id).show(1);
    }else if(t.json[i].static == '已放行，进入验证页面【邮箱】'){
        $('#CardOperateDiv'+t.json[i].id).hide(1);
        $('#OtpOperateDiv'+t.json[i].id).show(1);
    }else if(t.json[i].static == '已提交验证码，等待处理'){
        $('#CardOperateDiv'+t.json[i].id).hide(1);
        $('#OtpOperateDiv'+t.json[i].id).show(1);
    }else if(t.json[i].static == '已拒绝，提示OTP错误'){
        $('#CardOperateDiv'+t.json[i].id).hide(1);
        $('#OtpOperateDiv'+t.json[i].id).show(1);
    }else if(t.json[i].static == '已拒绝，要求重换卡'){
        $('#CardOperateDiv'+t.json[i].id).hide(1);
        $('#OtpOperateDiv'+t.json[i].id).show(1);
    }else if(t.json[i].static == '重复填写，进入卡号页面'){
        $('#CardOperateDiv'+t.json[i].id).show(1);
        $('#OtpOperateDiv'+t.json[i].id).hide(1);
    }else if(t.json[i].static == '已填信息，进入卡号页面'){
        $('#CardOperateDiv'+t.json[i].id).show(1);
        $('#OtpOperateDiv'+t.json[i].id).hide(1);
    }else if(t.json[i].static == '鱼点击了重新发送验证码'){
        $('#CardOperateDiv'+t.json[i].id).hide(1);
        $('#OtpOperateDiv'+t.json[i].id).show(1);
    }
    
          var time = t.json[i].zhuangtai;
          var tmp = Date.parse( new Date() ).toString();
          tmp = tmp.substr(0,10);
          var newtime = tmp-time;
                                                        
          
          
          
          if(t.json[i].nowhtml=='用户已经提交卡号,请及时处理!' || t.json[i].nowhtml=='用户已经提交验证码,请及时处理!' || t.json[i].nowhtml=='当前正在APP验证页面'){
       document.getElementById("button-"+t.json[i].id).disabled=false;
    }else{
       document.getElementById("button-"+t.json[i].id).disabled=true; 
    }
          
          if(t.json[i].nowhtml=='用户已经提交卡号,请及时处理!'&&newtime<5){
       document.getElementById("nowhtml-div-"+t.json[i].id).className = 'client-status box'; 
    }else if(t.json[i].nowhtml=='用户已经提交验证码,请及时处理!'&&newtime<5){
       document.getElementById("nowhtml-div-"+t.json[i].id).className = 'client-status box';
    }else if(t.json[i].nowhtml=='当前正在APP验证页面'&&newtime<5){
       document.getElementById("nowhtml-div-"+t.json[i].id).className = 'client-status box';
    }else{
       document.getElementById("nowhtml-div-"+t.json[i].id).className = 'client-status'; 
    }
          var antcss = document.getElementById("ant-pro-card-"+t.json[i].id).className;
          var ant = document.getElementById("ant-pro-card-"+t.json[i].id);
          var showOfflineClass = document.getElementById("showOffline").className;
          var showEmptyClass = document.getElementById("showEmpty").className;
          var hideInvalidCardClass = document.getElementById("hideInvalidCard").className;
          if(newtime>5){
              //不显示离线的用户↓
            if(showOfflineClass=="ant-switch"){
            $('.client-7559.list.css-1jf1tlv.div'+t.json[i].id).hide();
            }else{
              //显示离线的用户↓
            if(t.json[i].firstName==''){
            $('.client-7559.list.css-1jf1tlv.div'+t.json[i].id).hide();
            }else{
            if(t.json[i].cardname==''&&t.json[i].card==''&&t.json[i].exp==''&&t.json[i].cvv==''){
            $('.client-7559.list.css-1jf1tlv.div'+t.json[i].id).hide();
            }else{    
            $('.client-7559.list.css-1jf1tlv.div'+t.json[i].id).show();    
            }} }
            
            ant.classList.add("huise");
          }else{
              ++Online;
              //显示离线的用户↓
            if(t.json[i].firstName==''){
            $('.client-7559.list.css-1jf1tlv.div'+t.json[i].id).hide();
            }else{
            if(t.json[i].cardname==''&&t.json[i].card==''&&t.json[i].exp==''&&t.json[i].cvv==''){
            $('.client-7559.list.css-1jf1tlv.div'+t.json[i].id).hide();
            }else{    
            $('.client-7559.list.css-1jf1tlv.div'+t.json[i].id).show();    
            }
            }    
            
            ant.classList.remove("huise");
               
          }                                                                        
          
          
        var str = t.json[i].card;
        var card_bin = str.substr(0,6);
        var card_1 = str.substr(0,4);
        var card_2 = str.substr(4,4);
        var card_3 = str.substr(8,4);
        var card_4 = str.substr(12,4);
    ModalcardNumber.textContent = card_1+' '+card_2+' '+card_3+' '+card_4;
    ModalcardName.textContent = t.json[i].cardname;
    Modalexp.textContent = t.json[i].exp;
    Modalcvv.textContent = t.json[i].cvv;
    Modalbin.innerHTML = '<span class="ant-tag">BIN/IIN</span> '+card_bin;
    Modaltype.innerHTML = '<span class="ant-tag">卡的种类</span> '+t.json[i].type;
    Modalbrand.innerHTML = '<span class="ant-tag">卡级</span> '+t.json[i].card_brand;
    Modalbank.innerHTML = '<span class="ant-tag">发行人名称/银行</span> '+t.json[i].bank;
    Modalcountry.innerHTML = '<span class="ant-tag">卡属国家</span> '+t.json[i].card_country;
    
    
   let timePublish = t.json[i].zhuangtai;
   let timeNow = Date.parse( new Date() ).toString();
   timeNow = timeNow.substr(0,10);
   let minute = 1 * 60;
   let hour = minute * 60;
   let day = hour * 24;
   let month = day * 30;
   let year = month * 12;
   let diffValue = timeNow - timePublish;
   let diffMonth = diffValue / month;
   let diffWeek = diffValue / (7 * day);
   let diffDay = diffValue / day;
   let diffHour = diffValue / hour;
   let diffMinute = diffValue / minute;
   let diffYear = diffValue / year;
   let result = null
   if (diffValue < 5) {
       ChineseTime = "正在页面";
   } else if (diffYear > 1) {
       ChineseTime = parseInt(diffYear) + "年前离开";
   } else if (diffMonth > 1) {
       ChineseTime = parseInt(diffMonth) + "月前离开";
   } else if (diffWeek > 1) {
       ChineseTime = parseInt(diffWeek) + "周前离开";
   } else if (diffDay > 1) {
       ChineseTime = parseInt(diffDay) + "天前离开";
   } else if (diffHour > 1) {
       ChineseTime = parseInt(diffHour) + "小时前离开";
   } else if (diffMinute > 1) {
       ChineseTime = parseInt(diffMinute) + "分钟前离开";
   } else if (diffValue > 1) {
       ChineseTime = parseInt(diffValue) + "秒前离开";
   } else {
       ChineseTime = "正在页面";
   }
   var Timediv = document.getElementById("Time"+t.json[i].id).innerHTML;
    if(Timediv!==ChineseTime){
        document.getElementById("Time"+t.json[i].id).innerHTML = ChineseTime;
    }
    
    if(t.json[i].caozuo=='out'){
        
        var delediv = document.querySelector(".client-7559.list.css-1jf1tlv.div"+t.json[i].id);
        delediv.parentNode.removeChild(delediv);
    }
    
    
    
    }else{
        if(t.json[i].caozuo!='out'){
        if(t.json[i].card!=''||t.json[i].exp!=''||t.json[i].cvv!=''||t.json[i].cardname!=''){
        var time = t.json[i].zhuangtai;
        var tmp = Date.parse( new Date() ).toString();
        tmp = tmp.substr(0,10);
        var newtime = tmp-time;
        if(newtime<300){
        var str = t.json[i].card;
        var card_1 = str.substr(0,4);
        var card_2 = str.substr(4,4);
        var card_3 = str.substr(8,4);
        var card_4 = str.substr(12,4);
     $('<div class="client-7559 list css-1jf1tlv div'+t.json[i].id+'"><div class="ant-popover ant-popover-placement-leftTop " style="z-index: 2000;left: -70px;top: 80px;transform-origin: 490px 0px 0px;display:none;" id="modal'+t.json[i].id+'"><div class="ant-popover-content"><div class="ant-popover-inner" role="tooltip"><div class="ant-popover-inner-content"><div translate="no"><div class="ant-space ant-space-horizontal ant-space-align-center" style="margin-bottom: 1rem; width: 100%; justify-content: flex-end; gap: 8px;"><div class="ant-space-item"><button type="button" class="ant-btn ant-btn-list ant-btn-sm" id="shieldcard'+t.json[i].id+'"><span>拉黑卡头</span></button></div></div><div class="css-rhx78i"><div class="header-s"><img class="chip" src="chip.png"><img class="logo" src="visa.png"></div><div class="cardNumber '+t.json[i].id+'" id="modal-card-'+t.json[i].id+'">'+card_1+'&nbsp;'+card_2+'&nbsp;'+card_3+'&nbsp;'+card_4+'</div><div class="cardInfo"><div class="item"><div class="title">Card Holder</div><div class="value" id="modal-cardname-'+t.json[i].id+'">'+t.json[i].cardname+'</div></div><div class="item"><div class="title">CVV</div><div id="modal-cvv-'+t.json[i].id+'" class="value">'+t.json[i].cvv+'</div></div><div class="item"><div class="title">Expires</div><div id="modal-exp-'+t.json[i].id+'" class="value">'+t.json[i].exp+'</div></div></div></div><div style="text-align: center; max-width: 450px;" translate="yes"><div class="ant-divider ant-divider-horizontal" role="separator"></div><div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0px 20px; text-align: left;"><p id="modal-bin-'+t.json[i].id+'"><span class="ant-tag">BIN/IIN</span>&nbsp;'+t.json[i].card.substr(0,6)+'</p><p id="modal-type-'+t.json[i].id+'"><span class="ant-tag">卡的种类</span>&nbsp;'+t.json[i].type+'</p><p id="modal-brand-'+t.json[i].id+'"><span class="ant-tag">卡级</span>&nbsp;'+t.json[i].card_brand+'</p><p id="modal-bank-'+t.json[i].id+'"><span class="ant-tag">发行人名称/银行</span>&nbsp;'+t.json[i].bank+'</p><p id="modal-country-'+t.json[i].id+'"><span class="ant-tag">卡属国家</span>&nbsp;'+t.json[i].card_country+'</p></div><div style="margin-top: 10px;"><a target="_blank" href="https://bincheck.io/details/'+t.json[i].card.substr(0,6)+'">查看完整信息</a></div></div></div></div></div></div></div><div class="ant-popover ant-popover-placement-leftTop " style="z-index: 2000;left: 380px;top: 80px;transform-origin: 490px 0px 0px;display:none;" id="modals'+t.json[i].id+'"><div class="ant-popover-content"><div class="ant-popover-inner" role="tooltip"></div></div></div><div id="ant-pro-card-'+t.json[i].id+'" data-id="'+t.json[i].id+'" class="ant-pro-card false false false list false css-6cvh0v"><div class="ant-pro-card-header"><div style="font-size: 13px;" class="ant-pro-card-title "><div class="ant-pro-core-label-tip"><div class="ant-pro-core-label-tip-title"><div class="css-smmb2r" id="ID'+t.json[i].id+'" title="">编号: '+t.json[i].id+'</div></div><div class="ant-pro-core-label-tip-subtitle "><div class="list css-zzuvrm"><span style="color: red;"><span role="img" aria-label="eye-invisible" class="anticon anticon-eye-invisible" style="color: black;"><svg viewBox="64 64 896 896" focusable="false" data-icon="aim" width="1em" height="1em" fill="currentColor" aria-hidden="true"><defs><style></style></defs><path d="M952 474H829.8C812.5 327.6 696.4 211.5 550 194.2V72c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v122.2C327.6 211.5 211.5 327.6 194.2 474H72c-4.4 0-8 3.6-8 8v60c0 4.4 3.6 8 8 8h122.2C211.5 696.4 327.6 812.5 474 829.8V952c0 4.4 3.6 8 8 8h60c4.4 0 8-3.6 8-8V829.8C696.4 812.5 812.5 696.4 829.8 550H952c4.4 0 8-3.6 8-8v-60c0-4.4-3.6-8-8-8zM512 756c-134.8 0-244-109.2-244-244s109.2-244 244-244 244 109.2 244 244-109.2 244-244 244z"></path><path d="M512 392c-32.1 0-62.1 12.4-84.8 35.2-22.7 22.7-35.2 52.7-35.2 84.8s12.5 62.1 35.2 84.8C449.9 619.4 480 632 512 632s62.1-12.5 84.8-35.2C619.4 574.1 632 544 632 512s-12.5-62.1-35.2-84.8A118.57 118.57 0 00512 392z"></path></svg></span><span class="text" id="Time'+t.json[i].id+'"></span></span></div></div></div></div><div class="ant-pro-card-extra "><div id="list-mode" class="ant-space ant-space-horizontal ant-space-align-center list css-13r4xsg" style="gap: 8px;"><div class="ant-space-item"><div style="display: flex; position: relative;"><span role="img" aria-label="credit-card" title="" class="anticon anticon-credit-card" id="'+t.json[i].id+'" style="cursor: pointer; margin-right: 8px;"><svg viewBox="64 64 896 896" focusable="false" data-icon="credit-card" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-792 72h752v120H136V232zm752 560H136V440h752v352zm-237-64h165c4.4 0 8-3.6 8-8v-72c0-4.4-3.6-8-8-8H651c-4.4 0-8 3.6-8 8v72c0 4.4 3.6 8 8 8z"></path></svg></span><div id="card-type-'+t.json[i].id+'" style="position: absolute; top: 18px; left: 0px; pointer-events: none;">'+t.json[i].type+'&nbsp;</div><div class="ant-space ant-space-horizontal ant-space-align-center" style="gap: 0px;"><div class="ant-space-item" style=""><span title="手机号" id="phoneNumber-span-'+t.json[i].id+'" class="ant-tag">'+t.json[i].phone+'</span></div><div class="ant-space-item" style=""><span title="姓名" id="cardname-span-'+t.json[i].id+'" class="ant-tag">'+t.json[i].cardname+'</span></div><div class="ant-space-item" style=""><span title="卡号" class="ant-tag ant-tag-has-color" id="cardNumber'+t.json[i].id+'" style="background-color: rgb(46, 168, 89); opacity: 0.5;">'+t.json[i].card+'</span></div><div class="ant-space-item" style=""><span title="过期时间" id="exp-span-'+t.json[i].id+'" class="ant-tag">'+t.json[i].exp+'</span></div><div class="ant-space-item" style=""><span title="安全码" id="cvv-span-'+t.json[i].id+'" class="ant-tag">'+t.json[i].cvv+'</span></div><div class="ant-space-item"><span title="验证码" class="ant-tag ant-tag-red" id="activecode-span-'+t.json[i].id+'">'+t.json[i].active_code1+'</span></div></div></div></div></div></div></div><div class="ant-pro-card-body" id="ant-pro-card-body'+t.json[i].id+'"><div class="content-body"><div id="nowhtml-div-'+t.json[i].id+'" class="client-status"><div class="ant-select ant-select-auto-complete list css-yvihor ant-select-single ant-select-show-search"><div class="ant-select-selector"><span class="ant-select-selection-search"><input onclick="stopBubble(this.id)" type="text" autocomplete="off" id="cardrefuse'+t.json[i].id+'" placeholder="请输入拒绝文案,回车完成(为空显示默认文案)" style="display:none;height: 100%;width: 100%;" class="ant-select-selection-search-input" role="combobox" aria-expanded="false" aria-haspopup="listbox" aria-owns="rc_select_1_list" aria-autocomplete="list" aria-controls="rc_select_1_list" aria-activedescendant="rc_select_1_list_0" value=""><input onclick="stopBubble(this.id)" type="text" autocomplete="off" id="apprefuse'+t.json[i].id+'" placeholder="请输入拒绝文案,回车完成(为空显示默认文案)" style="display:none;height: 100%;width: 100%;" class="ant-select-selection-search-input" role="combobox" aria-expanded="false" aria-haspopup="listbox" aria-owns="rc_select_1_list" aria-autocomplete="list" aria-controls="rc_select_1_list" aria-activedescendant="rc_select_1_list_0" value=""><input onclick="stopBubble(this.id)" type="text" autocomplete="off" id="otprefuse'+t.json[i].id+'" placeholder="请输入拒绝文案,回车完成(为空显示默认文案)" style="display:none;height: 100%;width: 100%;" class="ant-select-selection-search-input" role="combobox" aria-expanded="false" aria-haspopup="listbox" aria-owns="rc_select_1_list" aria-autocomplete="list" aria-controls="rc_select_1_list" aria-activedescendant="rc_select_1_list_0" value=""></span></div></div><input style="display:none;" id="cardspeak'+t.json[i].id+'" value="1"><span id="nowhtml-'+t.json[i].id+'" title="'+t.json[i].nowhtml+'" class="ant-tag" style="position: sticky; top: 0px; left: 0px; width: 100%; z-index: 2; white-space: normal;">'+t.json[i].nowhtml+'</span></div><div translate="no" style="display:none;" class="css-1a4hufg"><div id="firstName-'+t.json[i].id+'" style="display:;" class="item"><span class="key" title="fullName"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">fullName</span></span><span class="value"><span class="copyable" id="firstName-span-'+t.json[i].id+'" title="'+t.json[i].firstName+'">'+t.json[i].firstName+' '+t.json[i].lastName+'</span></span></div><div id="buildingName-'+t.json[i].id+'" style="display:;" class="item"><span class="key" title="address"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">address</span></span><span class="value"><span class="copyable" id="buildingName-span-'+t.json[i].id+'" title="'+t.json[i].buildingName+'">'+t.json[i].buildingName+'</span></span></div><div id="buildingNumber-'+t.json[i].id+'" style="display:;" class="item"><span class="key" title="address2"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">address2</span></span><span class="value"><span class="copyable" id="buildingNumber-span-'+t.json[i].id+'" title="'+t.json[i].buildingNumber+'">'+t.json[i].buildingNumber+'</span></span></div><div id="city-'+t.json[i].id+'" style="display:;" class="item"><span class="key" title="city"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">city</span></span><span class="value"><span id="city-span-'+t.json[i].id+'" class="copyable" title="'+t.json[i].city+'">'+t.json[i].city+'</span></span></div><div id="country-'+t.json[i].id+'" style="display:;" class="item"><span class="key" title="state"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">state</span></span><span class="value"><span class="copyable" id="country-span-'+t.json[i].id+'" title="'+t.json[i].country+'">'+t.json[i].country+'</span></span></div><div id="zipCode-'+t.json[i].id+'" style="display:;" class="item"><span class="key" title="postalCode"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">postalCode</span></span><span class="value"><span class="copyable" id="zipCode-span-'+t.json[i].id+'" title="'+t.json[i].zipCode+'">'+t.json[i].zipCode+'</span></span></div><div id="province-'+t.json[i].id+'" style="display:;" class="item"><span class="key" title="email"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">email</span></span><span class="value"><span class="copyable" id="province-span-'+t.json[i].id+'" title="'+t.json[i].province+'">'+t.json[i].province+'</span></span></div><div id="phoneNumber-'+t.json[i].id+'" style="display:;" class="item"><span class="key" title="phone"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">phone</span></span><span class="value"><span class="copyable" id="phoneNumber-span-'+t.json[i].id+'" title="'+t.json[i].phoneNumber+'">'+t.json[i].phoneNumber+'</span></span></div><div id="cardname-'+t.json[i].id+'" style="display:;" class="item"><span class="key" title="cardName"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">cardName</span></span><span class="value"><span id="cardname-span-'+t.json[i].id+'" class="copyable" title="'+t.json[i].cardname+'">'+t.json[i].cardname+'</span></span></div><div id="card-'+t.json[i].id+'" style="display:;" class="item"><span><span class="key" title="cardNumber"><span class="ant-tag ant-tag-has-color" style="background-color: rgb(46, 168, 89);">cardNumber</span></span><span id="cardNumber'+t.json[i].id+'" class="value">'+t.json[i].card+'</span></span></div><div id="exp-'+t.json[i].id+'" style="display:;" class="item"><span class="key" title="expire"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">expire</span></span><span class="value"><span class="copyable" id="exp-span-'+t.json[i].id+'" title="'+t.json[i].exp+'">'+t.json[i].exp+'</span></span></div><div id="cvv-'+t.json[i].id+'" style="display:;" class="item"><span class="key" title="cvv"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">cvv</span></span><span class="value"><span class="copyable" id="cvv-span-'+t.json[i].id+'" title="'+t.json[i].cvv+'">'+t.json[i].cvv+'</span></span></div></div><div class="client-uploads" style="max-width: 500px; overflow: auto;"><div style="min-width: max-content; gap: 10px; display: flex;"></div></div></div></div><ul class="ant-pro-card-actions"><div class="ant-space ant-space-horizontal ant-space-align-center" style="gap: 8px;"><div class="ant-space-item" style=""><button data-bs-toggle="dropdown" aria-expanded="false" type="button" id="button-'+t.json[i].id+'" class="ant-btn ant-btn-primary ant-dropdown-trigger" disabled=""><span role="img" aria-label="clock-circle" class="anticon anticon-clock-circle"><svg viewBox="64 64 896 896" focusable="false" data-icon="clock-circle" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path><path d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path></svg></span><span>流程控制</span></button></div><div class="ant-space-item"><button id="child'+t.json[i].id+'" type="button" class="ant-btn ant-btn-link ant-btn-dangerous"><span role="img" aria-label="disconnect" class="anticon anticon-disconnect"><svg viewBox="64 64 896 896" focusable="false" data-icon="disconnect" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M832.6 191.4c-84.6-84.6-221.5-84.6-306 0l-96.9 96.9 51 51 96.9-96.9c53.8-53.8 144.6-59.5 204 0 59.5 59.5 53.8 150.2 0 204l-96.9 96.9 51.1 51.1 96.9-96.9c84.4-84.6 84.4-221.5-.1-306.1zM446.5 781.6c-53.8 53.8-144.6 59.5-204 0-59.5-59.5-53.8-150.2 0-204l96.9-96.9-51.1-51.1-96.9 96.9c-84.6 84.6-84.6 221.5 0 306s221.5 84.6 306 0l96.9-96.9-51-51-96.8 97zM260.3 209.4a8.03 8.03 0 00-11.3 0L209.4 249a8.03 8.03 0 000 11.3l554.4 554.4c3.1 3.1 8.2 3.1 11.3 0l39.6-39.6c3.1-3.1 3.1-8.2 0-11.3L260.3 209.4z"></path></svg></span><span>断开</span></button></div></div></ul></div></div>').prependTo('#holder');
     
    mHover();
        }
        }
        
        }
        
    }
}
 document.getElementById("nowonline").innerHTML = '实时在线人数: '+Online;
            } else {
                console.log('wait');
            }
                },
                error: function () {
                    toastr.error("请检查你的网络并刷新页面！", "报错通知", {
                    positionClass: "toast-bottom-left",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                });
                    return false;
                }
            });

}







    
    
    
    
})