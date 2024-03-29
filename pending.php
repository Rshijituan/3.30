

<?php 

include "./dbconn/peizhis.php";
        try
          {
              $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8","$user","$pw");
          }
        catch(PDOException $aaa)
          {
              die('链接数据失败'.$aaa->getMessage());
          }
        $sql="select * from data order by id desc";
        $sqls="select tap from intercept";
        $smt1=$pdo->query($sql);
        $smt2=$pdo->query($sqls);
        $arrs=$smt1->fetchAll(PDO::FETCH_ASSOC);
        $arrss=$smt2->fetchAll(PDO::FETCH_ASSOC);
        $num = count($arrs);//总数
        json_encode($arrs);
        
        
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    	
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Salreo : Crypto Trading UI Admin  Bootstrap 5 Template" >
	<meta property="og:title" content="Salreo : Crypto Trading UI Admin  Bootstrap 5 Template" >
	<meta property="og:description" content="Salreo : Crypto Trading UI Admin  Bootstrap 5 Template" >
	<meta property="og:image" content="" >
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="./vendor/toastr/css/toastr.min.css">
	<!-- PAGE TITLE HERE -->
	<title>熊猫商店-PANDASHOP~3.5 Admin</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png" >
	<link rel="stylesheet" href="./vendor/chartist/css/chartist.min.css">
	<link href="./vendor/wow-master/css/libs/animate.css" rel="stylesheet">
	<link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./vendor/jquery-nice-select/css/nice-select.css">
	<link href="vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<!--swiper-slider-->
	<link rel="stylesheet" href="./vendor/swiper/css/swiper-bundle.min.css">
	
	<!-- Style css -->
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
	<link href="ceshi.css" rel="stylesheet">
	<!-- Style css -->
    <link href="css/style.css" rel="stylesheet">
 <style>
    
    .toast-bottom-left {
    bottom: 12px;
    left: 12px
}
    
        td{
            text-align: center;
        }
        th{
            text-align: center;
        }
        .modal {
    --bs-modal-zindex: 1055;
    --bs-modal-width: 970px;
}

.paginate_button.previous.disabled{
    color: #fff !important;
    background: var(--primary) !important;
    border-radius: 0.5rem;
    height: 40px;
    width: 40px;
    padding: 0;
    display: inline-block;
    border-radius: 0.5rem;
    line-height: 40px;
    margin: 0 5px;
    text-align: center;
    margin-left: 0;

}

.paging_simple_numbers.dataTables_paginate span {
    border-radius: 0.5rem;
    color: #7A7995;
    text-align: right;
    --bs-card-spacer-y: 1rem;
    --bs-card-spacer-x: 1rem;
    --bs-card-title-spacer-y: 0.5rem;
    --bs-card-border-width: 1px;
    --bs-card-border-color: var(--bs-border-color-translucent);
    --bs-card-border-radius: 0.25rem;
    --bs-card-box-shadow: ;
    --bs-card-inner-border-radius: calc(0.25rem - 1px);
    --bs-card-cap-padding-y: 0.5rem;
    --bs-card-cap-padding-x: 1rem;
    --bs-card-cap-bg: rgba(0, 0, 0, 0.03);
    --bs-card-cap-color: ;
    --bs-card-height: ;
    --bs-card-color: ;
    --bs-card-bg: #fff;
    --bs-card-img-overlay-padding: 1rem;
    --bs-card-group-margin: 15px;
}

.dataTables_paginate span .paginate_button.current{
    font-size: 17px;
    color: var(--primary) !important;
    background: #fff !important;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
    height: 40px;
    width: 40px;
    padding: 0;
    line-height: 40px;
    display: inline-block;
    margin: 0 5px;
    border-radius: 0.5rem;
    text-align: center;
}


.dataTables_paginate span .paginate_button.current1{
    font-size: 17px;
    color: #fff !important;
    background: var(--primary) !important;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
    height: 40px;
    width: 40px;
    padding: 0;
    line-height: 40px;
    display: inline-block;
    margin: 0 5px;
    border-radius: 0.5rem;
    text-align: center;
}


.toast-golden{background-color:#FFE40E}
.toast-pink{background-color:#FF2FE8}
.toast-orange{background-color:#FF7A05}
.toast-blue{background-color:#2E34FF}
.toast-purple{background-color:#7C05FF}
.toast-gray{background-color:#727272}

[data-header-position="fixed"] .header-s {
    position: static;
    top: 0;
    width: 100%;
}





    </style>
	
	
	<style data-rc-order="prepend" rc-util-key="@ant-design-icons">
.anticon {
  display: inline-block;
  color: inherit;
  font-style: normal;
  line-height: 0;
  text-align: center;
  text-transform: none;
  vertical-align: -0.125em;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.anticon > * {
  line-height: 1;
}

.anticon svg {
  display: inline-block;
}

.anticon::before {
  display: none;
}

.anticon .anticon-icon {
  display: block;
}

.anticon[tabindex] {
  cursor: pointer;
}

.anticon-spin::before,
.anticon-spin {
  display: inline-block;
  -webkit-animation: loadingCircle 1s infinite linear;
  animation: loadingCircle 1s infinite linear;
}

@-webkit-keyframes loadingCircle {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@keyframes loadingCircle {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
</style><style data-rc-order="prependQueue" data-css-hash="1nvgppr" data-token-hash="18ps9sa">:where(.css-sk7ap8) a{color:#1677ff;text-decoration:none;background-color:transparent;outline:none;cursor:pointer;transition:color 0.3s;-webkit-text-decoration-skip:objects;}:where(.css-sk7ap8) a:hover{color:#69b1ff;}:where(.css-sk7ap8) a:active{color:#0958d9;}:where(.css-sk7ap8) a:active,:where(.css-sk7ap8) a:hover{text-decoration:none;outline:0;}:where(.css-sk7ap8) a:focus{text-decoration:none;outline:0;}:where(.css-sk7ap8) a[disabled]{color:rgba(0, 0, 0, 0.25);cursor:not-allowed;}</style><style data-rc-order="prependQueue" data-css-hash="jl3ikp" data-token-hash="18ps9sa">:where(.css-sk7ap8)[class^="ant-spin"],:where(.css-sk7ap8)[class*=" ant-spin"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}:where(.css-sk7ap8)[class^="ant-spin"]::before,:where(.css-sk7ap8)[class*=" ant-spin"]::before,:where(.css-sk7ap8)[class^="ant-spin"]::after,:where(.css-sk7ap8)[class*=" ant-spin"]::after{box-sizing:border-box;}:where(.css-sk7ap8)[class^="ant-spin"] [class^="ant-spin"],:where(.css-sk7ap8)[class*=" ant-spin"] [class^="ant-spin"],:where(.css-sk7ap8)[class^="ant-spin"] [class*=" ant-spin"],:where(.css-sk7ap8)[class*=" ant-spin"] [class*=" ant-spin"]{box-sizing:border-box;}:where(.css-sk7ap8)[class^="ant-spin"] [class^="ant-spin"]::before,:where(.css-sk7ap8)[class*=" ant-spin"] [class^="ant-spin"]::before,:where(.css-sk7ap8)[class^="ant-spin"] [class*=" ant-spin"]::before,:where(.css-sk7ap8)[class*=" ant-spin"] [class*=" ant-spin"]::before,:where(.css-sk7ap8)[class^="ant-spin"] [class^="ant-spin"]::after,:where(.css-sk7ap8)[class*=" ant-spin"] [class^="ant-spin"]::after,:where(.css-sk7ap8)[class^="ant-spin"] [class*=" ant-spin"]::after,:where(.css-sk7ap8)[class*=" ant-spin"] [class*=" ant-spin"]::after{box-sizing:border-box;}:where(.css-sk7ap8).ant-spin{box-sizing:border-box;margin:0;padding:0;color:#1677ff;font-size:14px;line-height:1.5714285714285714;list-style:none;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';position:absolute;display:none;text-align:center;vertical-align:middle;opacity:0;transition:transform 0.3s cubic-bezier(0.78, 0.14, 0.15, 0.86);}:where(.css-sk7ap8).ant-spin-spinning{position:static;display:inline-block;opacity:1;}:where(.css-sk7ap8).ant-spin-nested-loading{position:relative;}:where(.css-sk7ap8).ant-spin-nested-loading >div>.ant-spin{position:absolute;top:0;inset-inline-start:0;z-index:4;display:block;width:100%;height:100%;max-height:400px;}:where(.css-sk7ap8).ant-spin-nested-loading >div>.ant-spin .ant-spin-dot{position:absolute;top:50%;inset-inline-start:50%;margin:-10px;}:where(.css-sk7ap8).ant-spin-nested-loading >div>.ant-spin .ant-spin-text{position:absolute;top:50%;width:100%;padding-top:5px;text-shadow:0 1px 2px #ffffff;}:where(.css-sk7ap8).ant-spin-nested-loading >div>.ant-spin.ant-spin-show-text .ant-spin-dot{margin-top:-20px;}:where(.css-sk7ap8).ant-spin-nested-loading >div>.ant-spin-sm .ant-spin-dot{margin:-7px;}:where(.css-sk7ap8).ant-spin-nested-loading >div>.ant-spin-sm .ant-spin-text{padding-top:2px;}:where(.css-sk7ap8).ant-spin-nested-loading >div>.ant-spin-sm.ant-spin-show-text .ant-spin-dot{margin-top:-17px;}:where(.css-sk7ap8).ant-spin-nested-loading >div>.ant-spin-lg .ant-spin-dot{margin:-16px;}:where(.css-sk7ap8).ant-spin-nested-loading >div>.ant-spin-lg .ant-spin-text{padding-top:11px;}:where(.css-sk7ap8).ant-spin-nested-loading >div>.ant-spin-lg.ant-spin-show-text .ant-spin-dot{margin-top:-26px;}:where(.css-sk7ap8).ant-spin-nested-loading .ant-spin-container{position:relative;transition:opacity 0.3s;}:where(.css-sk7ap8).ant-spin-nested-loading .ant-spin-container::after{position:absolute;top:0;inset-inline-end:0;bottom:0;inset-inline-start:0;z-index:10;width:100%;height:100%;background:#ffffff;opacity:0;transition:all 0.3s;content:"";pointer-events:none;}:where(.css-sk7ap8).ant-spin-nested-loading .ant-spin-blur{clear:both;opacity:0.5;user-select:none;pointer-events:none;}:where(.css-sk7ap8).ant-spin-nested-loading .ant-spin-blur::after{opacity:0.4;pointer-events:auto;}:where(.css-sk7ap8).ant-spin-tip{color:rgba(0, 0, 0, 0.45);}:where(.css-sk7ap8).ant-spin .ant-spin-dot{position:relative;display:inline-block;font-size:20px;width:1em;height:1em;}:where(.css-sk7ap8).ant-spin .ant-spin-dot-item{position:absolute;display:block;width:9px;height:9px;background-color:#1677ff;border-radius:100%;transform:scale(0.75);transform-origin:50% 50%;opacity:0.3;animation-name:css-sk7ap8-antSpinMove;animation-duration:1s;animation-iteration-count:infinite;animation-timing-function:linear;animation-direction:alternate;}:where(.css-sk7ap8).ant-spin .ant-spin-dot-item:nth-child(1){top:0;inset-inline-start:0;}:where(.css-sk7ap8).ant-spin .ant-spin-dot-item:nth-child(2){top:0;inset-inline-end:0;animation-delay:0.4s;}:where(.css-sk7ap8).ant-spin .ant-spin-dot-item:nth-child(3){inset-inline-end:0;bottom:0;animation-delay:0.8s;}:where(.css-sk7ap8).ant-spin .ant-spin-dot-item:nth-child(4){bottom:0;inset-inline-start:0;animation-delay:1.2s;}:where(.css-sk7ap8).ant-spin .ant-spin-dot-spin{transform:rotate(45deg);animation-name:css-sk7ap8-antRotate;animation-duration:1.2s;animation-iteration-count:infinite;animation-timing-function:linear;}:where(.css-sk7ap8).ant-spin-sm .ant-spin-dot{font-size:14px;}:where(.css-sk7ap8).ant-spin-sm .ant-spin-dot i{width:6px;height:6px;}:where(.css-sk7ap8).ant-spin-lg .ant-spin-dot{font-size:32px;}:where(.css-sk7ap8).ant-spin-lg .ant-spin-dot i{width:14px;height:14px;}:where(.css-sk7ap8).ant-spin.ant-spin-show-text .ant-spin-text{display:block;}</style><style data-rc-order="prependQueue" data-css-hash="_effect-css-sk7ap8-antSpinMove">@keyframes css-sk7ap8-antSpinMove{to{opacity:1;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-css-sk7ap8-antRotate">@keyframes css-sk7ap8-antRotate{to{transform:rotate(405deg);}}</style><style data-rc-order="prependQueue" data-css-hash="1ke7vk7" data-token-hash="18ps9sa">.anticon{display:inline-flex;align-items:center;color:inherit;font-style:normal;line-height:0;text-align:center;text-transform:none;vertical-align:-0.125em;text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}.anticon >*{line-height:1;}.anticon svg{display:inline-block;}.anticon .anticon-icon{display:block;}</style><style data-rc-order="prependQueue" data-css-hash="19arzmg" data-token-hash="gngivi">body{padding-block:0;padding-inline:0;margin-block:0;margin-inline:0;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';}.ant-pro .ant-layout{background-color:transparent!important;}.ant-pro .ant-pro-layout .ant-layout{display:flex;background-color:transparent;width:100%;}.ant-pro .ant-pro-layout .ant-pro-layout-content{display:flex;flex-direction:column;width:100%;background-color:transparent;position:relative;padding-block:24px;padding-inline:40px;}.ant-pro .ant-pro-layout .ant-pro-layout-content *{box-sizing:border-box;}.ant-pro .ant-pro-layout .ant-pro-layout-content-has-page-container{padding:0;}.ant-pro .ant-pro-layout .ant-pro-layout-container{width:100%;display:flex;flex-direction:column;min-width:0;min-height:0;background-color:transparent;}.ant-pro .ant-pro-layout .ant-pro-layout-bg-list{pointer-events:none;position:fixed;overflow:hidden;inset-block-start:0;inset-inline-start:0;z-index:0;height:100%;width:100%;background:linear-gradient(#ffffff, #f5f5f5 28%);}.ant-pro .ant-menu-submenu-popup{background-color:rgba(255, 255, 255, 0.42);-webkit-backdrop-filter:blur(8px);backdrop-filter:blur(8px);}</style><style data-rc-order="prependQueue" data-css-hash="183s268" data-token-hash="160jlb5">a{color:#1677ff;text-decoration:none;background-color:transparent;outline:none;cursor:pointer;transition:color 0.3s;-webkit-text-decoration-skip:objects;}a:hover{color:#69b1ff;}a:active{color:#0958d9;}a:active,a:hover{text-decoration:none;outline:0;}a:focus{text-decoration:none;outline:0;}a[disabled]{color:rgba(0, 0, 0, 0.25);cursor:not-allowed;}</style><style data-rc-order="prependQueue" data-css-hash="1wetbq" data-token-hash="160jlb5">[class^="ant-layout"],[class*=" ant-layout"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}[class^="ant-layout"]::before,[class*=" ant-layout"]::before,[class^="ant-layout"]::after,[class*=" ant-layout"]::after{box-sizing:border-box;}[class^="ant-layout"] [class^="ant-layout"],[class*=" ant-layout"] [class^="ant-layout"],[class^="ant-layout"] [class*=" ant-layout"],[class*=" ant-layout"] [class*=" ant-layout"]{box-sizing:border-box;}[class^="ant-layout"] [class^="ant-layout"]::before,[class*=" ant-layout"] [class^="ant-layout"]::before,[class^="ant-layout"] [class*=" ant-layout"]::before,[class*=" ant-layout"] [class*=" ant-layout"]::before,[class^="ant-layout"] [class^="ant-layout"]::after,[class*=" ant-layout"] [class^="ant-layout"]::after,[class^="ant-layout"] [class*=" ant-layout"]::after,[class*=" ant-layout"] [class*=" ant-layout"]::after{box-sizing:border-box;}.ant-layout{display:flex;flex:auto;flex-direction:column;min-height:0;background:#f5f5f5;}.ant-layout,.ant-layout *{box-sizing:border-box;}.ant-layout.ant-layout-has-sider{flex-direction:row;}.ant-layout.ant-layout-has-sider >.ant-layout,.ant-layout.ant-layout-has-sider >.ant-layout-content{width:0;}.ant-layout .ant-layout-header,.ant-layout.ant-layout-footer{flex:0 0 auto;}.ant-layout .ant-layout-header{height:64px;padding-inline:50px;color:rgba(0, 0, 0, 0.88);line-height:64px;background:#001529;}.ant-layout .ant-layout-header .ant-menu{line-height:inherit;}.ant-layout .ant-layout-footer{padding:24px 50px;color:rgba(0, 0, 0, 0.88);font-size:14px;background:#f5f5f5;}.ant-layout .ant-layout-content{flex:auto;min-height:0;}.ant-layout .ant-layout-sider{position:relative;min-width:0;background:#001529;transition:all 0.2s;}.ant-layout .ant-layout-sider-children{height:100%;margin-top:-0.1px;padding-top:0.1px;}.ant-layout .ant-layout-sider-children .ant-menu.ant-menu-inline-collapsed{width:auto;}.ant-layout .ant-layout-sider-has-trigger{padding-bottom:48px;}.ant-layout .ant-layout-sider-right{order:1;}.ant-layout .ant-layout-sider-trigger{position:fixed;bottom:0;z-index:1;height:48px;color:#fff;line-height:48px;text-align:center;background:#002140;cursor:pointer;transition:all 0.2s;}.ant-layout .ant-layout-sider-zero-width >*{overflow:hidden;}.ant-layout .ant-layout-sider-zero-width-trigger{position:absolute;top:64px;inset-inline-end:-40px;z-index:1;width:40px;height:40px;color:#fff;font-size:20px;display:flex;align-items:center;justify-content:center;background:#001529;border-start-start-radius:0;border-start-end-radius:6px;border-end-end-radius:6px;border-end-start-radius:0;cursor:pointer;transition:background 0.3s ease;}.ant-layout .ant-layout-sider-zero-width-trigger::after{position:absolute;inset:0;background:transparent;transition:all 0.3s;content:"";}.ant-layout .ant-layout-sider-zero-width-trigger:hover::after{background:rgba(255, 255, 255, 0.2);}.ant-layout .ant-layout-sider-zero-width-trigger-right{inset-inline-start:-40px;border-start-start-radius:6px;border-start-end-radius:0;border-end-end-radius:0;border-end-start-radius:6px;}.ant-layout .ant-layout-sider-light{background:#ffffff;}.ant-layout .ant-layout-sider-light .ant-layout-sider-trigger{color:rgba(0, 0, 0, 0.88);background:#ffffff;}.ant-layout .ant-layout-sider-light .ant-layout-sider-zero-width-trigger{color:rgba(0, 0, 0, 0.88);background:#ffffff;border:1px solid #f5f5f5;border-inline-start:0;}.ant-layout-rtl{direction:rtl;}</style><style data-rc-order="prependQueue" data-css-hash="18l6q4a" data-token-hash="gngivi">.ant-pro .ant-pro-layout .ant-pro-sider{position:relative;background:transparent;box-sizing:border-box;}.ant-pro .ant-pro-layout .ant-pro-sider-menu{position:relative;z-index:10;min-height:100%;}.ant-pro .ant-pro-layout .ant-pro-sider-fixed{position:fixed;inset-block-start:0;inset-inline-start:0;z-index:100;height:100%;}.ant-pro .ant-pro-layout .ant-pro-sider .ant-layout-sider-children{position:relative;display:flex;flex-direction:column;height:100%;padding-inline:8px;padding-block:0;border-inline-end:1px solid rgba(5, 5, 5, 0.06);}.ant-pro .ant-pro-layout .ant-pro-sider .ant-menu .ant-menu-item-group-title{font-size:12px;padding-bottom:4px;}.ant-pro .ant-pro-layout .ant-pro-sider .ant-menu .ant-menu-item:hover{color:rgba(0, 0, 0, 0.88);}.ant-pro .ant-pro-layout .ant-pro-sider-logo{position:relative;display:flex;align-items:center;justify-content:space-between;padding-inline:12px;padding-block:16px;color:rgba(0, 0, 0, 0.65);cursor:pointer;border-block-end:1px solid rgba(0, 0, 0, 0.06);}.ant-pro .ant-pro-layout .ant-pro-sider-logo >a{display:flex;align-items:center;justify-content:center;min-height:22px;font-size:22px;}.ant-pro .ant-pro-layout .ant-pro-sider-logo >a >img{display:inline-block;height:22px;vertical-align:middle;}.ant-pro .ant-pro-layout .ant-pro-sider-logo >a >h1{display:inline-block;height:22px;margin-block:0;margin-inline-end:0;margin-inline-start:6px;color:rgba(0, 0, 0, 0.88);font-weight:600;font-size:16px;line-height:22px;vertical-align:middle;}.ant-pro .ant-pro-layout .ant-pro-sider-logo-collapsed{flex-direction:column-reverse;margin:0;padding:12px;}.ant-pro .ant-pro-layout .ant-pro-sider-logo-collapsed .ant-pro-layout-apps-icon{margin-block-end:8px;font-size:16px;transition:font-size 0.2s ease-in-out,color 0.2s ease-in-out;}.ant-pro .ant-pro-layout .ant-pro-sider-actions{display:flex;align-items:center;justify-content:space-between;margin-block:4px;margin-inline:0;color:rgba(0, 0, 0, 0.65);}.ant-pro .ant-pro-layout .ant-pro-sider-actions-collapsed{flex-direction:column-reverse;padding-block:0;padding-inline:8px;font-size:16px;transition:font-size 0.3s ease-in-out;}.ant-pro .ant-pro-layout .ant-pro-sider-actions-list{color:rgba(0, 0, 0, 0.45);}.ant-pro .ant-pro-layout .ant-pro-sider-actions-list-collapsed{margin-block-end:8px;animation-name:none;}.ant-pro .ant-pro-layout .ant-pro-sider-actions-list-item{padding-inline:6px;padding-block:6px;line-height:16px;font-size:16px;cursor:pointer;border-radius:6px;}.ant-pro .ant-pro-layout .ant-pro-sider-actions-list-item:hover{background:rgba(0, 0, 0, 0.06);}.ant-pro .ant-pro-layout .ant-pro-sider-actions-avatar{font-size:14px;padding-inline:8px;padding-block:8px;border-radius:6px;}.ant-pro .ant-pro-layout .ant-pro-sider-actions-avatar *{cursor:pointer;}.ant-pro .ant-pro-layout .ant-pro-sider-actions-avatar:hover{background:rgba(0, 0, 0, 0.06);}.ant-pro .ant-pro-layout .ant-pro-sider-hide-menu-collapsed{inset-inline-start:-52px;position:absolute;}.ant-pro .ant-pro-layout .ant-pro-sider-mix{height:calc(100% - 56px);inset-block-start:56px;}.ant-pro .ant-pro-layout .ant-pro-sider-extra{margin-block-end:16px;margin-block:0;margin-inline:16px;}.ant-pro .ant-pro-layout .ant-pro-sider-extra-no-logo{margin-block-start:16px;}.ant-pro .ant-pro-layout .ant-pro-sider-links{width:100%;}.ant-pro .ant-pro-layout .ant-pro-sider-links ul{height:auto;}.ant-pro .ant-pro-layout .ant-pro-sider-link-menu{border:none;box-shadow:none;background:transparent;}.ant-pro .ant-pro-layout .ant-pro-sider-footer{color:rgba(0, 0, 0, 0.45);padding-block-end:16px;font-size:14px;animation-name:antBadgeLoadingCircle;animation-duration:.3s;animation-timing-function:ease;}</style><style data-rc-order="prependQueue" data-css-hash="_effect-antBadgeLoadingCircle">@keyframes antBadgeLoadingCircle{0%{display:none;opacity:0;}80%{display:none;opacity:0;}100%{display:unset;opacity:1;}}</style><style data-rc-order="prependQueue" data-css-hash="axtvmg" data-token-hash="gngivi"></style><style data-rc-order="prependQueue" data-css-hash="1u1po1u" data-token-hash="160jlb5">.anticon{display:inline-flex;align-items:center;color:inherit;font-style:normal;line-height:0;text-align:center;text-transform:none;vertical-align:-0.125em;text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}.anticon >*{line-height:1;}.anticon svg{display:inline-block;}.anticon .anticon-icon{display:block;}</style><style data-rc-order="prependQueue" data-css-hash="1mqtsvk" data-token-hash="1jebxg8">:where(.css-d8ft0k) a{color:#1677ff;text-decoration:none;background-color:transparent;outline:none;cursor:pointer;transition:color 0.3s;-webkit-text-decoration-skip:objects;}:where(.css-d8ft0k) a:hover{color:#69b1ff;}:where(.css-d8ft0k) a:active{color:#0958d9;}:where(.css-d8ft0k) a:active,:where(.css-d8ft0k) a:hover{text-decoration:none;outline:0;}:where(.css-d8ft0k) a:focus{text-decoration:none;outline:0;}:where(.css-d8ft0k) a[disabled]{color:rgba(0, 0, 0, 0.25);cursor:not-allowed;}</style><style data-rc-order="prependQueue" data-css-hash="16upxo9" data-token-hash="1jebxg8">:where(.css-d8ft0k)[class^="ant-avatar"],:where(.css-d8ft0k)[class*=" ant-avatar"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-avatar"]::before,:where(.css-d8ft0k)[class*=" ant-avatar"]::before,:where(.css-d8ft0k)[class^="ant-avatar"]::after,:where(.css-d8ft0k)[class*=" ant-avatar"]::after{box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-avatar"] [class^="ant-avatar"],:where(.css-d8ft0k)[class*=" ant-avatar"] [class^="ant-avatar"],:where(.css-d8ft0k)[class^="ant-avatar"] [class*=" ant-avatar"],:where(.css-d8ft0k)[class*=" ant-avatar"] [class*=" ant-avatar"]{box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-avatar"] [class^="ant-avatar"]::before,:where(.css-d8ft0k)[class*=" ant-avatar"] [class^="ant-avatar"]::before,:where(.css-d8ft0k)[class^="ant-avatar"] [class*=" ant-avatar"]::before,:where(.css-d8ft0k)[class*=" ant-avatar"] [class*=" ant-avatar"]::before,:where(.css-d8ft0k)[class^="ant-avatar"] [class^="ant-avatar"]::after,:where(.css-d8ft0k)[class*=" ant-avatar"] [class^="ant-avatar"]::after,:where(.css-d8ft0k)[class^="ant-avatar"] [class*=" ant-avatar"]::after,:where(.css-d8ft0k)[class*=" ant-avatar"] [class*=" ant-avatar"]::after{box-sizing:border-box;}:where(.css-d8ft0k).ant-avatar{box-sizing:border-box;margin:0;padding:0;color:#fff;font-size:14px;line-height:30px;list-style:none;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';position:relative;display:inline-block;overflow:hidden;white-space:nowrap;text-align:center;vertical-align:middle;background:rgba(0, 0, 0, 0.25);border:1px solid transparent;width:32px;height:32px;border-radius:50%;}:where(.css-d8ft0k).ant-avatar-image{background:transparent;}:where(.css-d8ft0k).ant-avatar .ant-image-img{display:block;}:where(.css-d8ft0k).ant-avatar.ant-avatar-square{border-radius:6px;}:where(.css-d8ft0k).ant-avatar .ant-avatar-string{position:absolute;left:50%;transform-origin:0 center;}:where(.css-d8ft0k).ant-avatar.ant-avatar-icon{font-size:18px;}:where(.css-d8ft0k).ant-avatar.ant-avatar-icon >.anticon{margin:0;}:where(.css-d8ft0k).ant-avatar-lg{width:40px;height:40px;line-height:38px;border-radius:50%;}:where(.css-d8ft0k).ant-avatar-lg.ant-avatar-square{border-radius:8px;}:where(.css-d8ft0k).ant-avatar-lg .ant-avatar-string{position:absolute;left:50%;transform-origin:0 center;}:where(.css-d8ft0k).ant-avatar-lg.ant-avatar-icon{font-size:24px;}:where(.css-d8ft0k).ant-avatar-lg.ant-avatar-icon >.anticon{margin:0;}:where(.css-d8ft0k).ant-avatar-sm{width:24px;height:24px;line-height:22px;border-radius:50%;}:where(.css-d8ft0k).ant-avatar-sm.ant-avatar-square{border-radius:4px;}:where(.css-d8ft0k).ant-avatar-sm .ant-avatar-string{position:absolute;left:50%;transform-origin:0 center;}:where(.css-d8ft0k).ant-avatar-sm.ant-avatar-icon{font-size:14px;}:where(.css-d8ft0k).ant-avatar-sm.ant-avatar-icon >.anticon{margin:0;}:where(.css-d8ft0k).ant-avatar >img{display:block;width:100%;height:100%;object-fit:cover;}:where(.css-d8ft0k).ant-avatar-group{display:inline-flex;}:where(.css-d8ft0k).ant-avatar-group .ant-avatar{border-color:#ffffff;}:where(.css-d8ft0k).ant-avatar-group >*:not(:first-child){margin-inline-start:-8px;}</style><style data-rc-order="prependQueue" data-css-hash="4pmbsq" data-token-hash="gngivi">.ant-pro-layout-apps-icon{display:inline-flex;align-items:center;justify-content:center;padding-inline:4px;padding-block:0;font-size:14px;line-height:14px;height:28px;width:28px;cursor:pointer;color:rgba(0, 0, 0, 0.65);}.ant-pro-layout-apps-icon:hover{color:#000;background-color:rgba(0, 0, 0, 0.04);}.ant-pro-layout-apps-icon-active{color:#000;background-color:rgba(0, 0, 0, 0.04);}.ant-pro-layout-apps-popover .ant-popover-arrow{display:none;}.ant-pro-layout-apps-popover *{box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';}.ant-pro-layout-apps-simple-content-list{box-sizing:border-box;max-width:376px;margin-block:0;margin-inline:0;padding-block:0;padding-inline:0;list-style:none;}.ant-pro-layout-apps-simple-content-list *{box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';}.ant-pro-layout-apps-simple-content-list-item{position:relative;display:inline-block;width:104px;height:104px;margin-block:8px;margin-inline:8px;padding-inline:24px;padding-block:24px;vertical-align:top;list-style-type:none;transition:transform 0.2s cubic-bezier(0.333, 0, 0, 1);border-radius:6px;}.ant-pro-layout-apps-simple-content-list-item:hover{background-color:rgba(0, 0, 0, 0.06);}.ant-pro-layout-apps-simple-content-list-item a{display:flex;flex-direction:column;align-items:center;height:100%;font-size:12px;text-decoration:none;}.ant-pro-layout-apps-simple-content-list-item a>#avatarLogo{width:40px;height:40px;margin:0 auto;color:#1677ff;font-size:22px;line-height:40px;text-align:center;background-image:linear-gradient(180deg, #E8F0FB 0%, #F6F8FC 100%);border-radius:6px;}.ant-pro-layout-apps-simple-content-list-item a>img{width:40px;height:40px;}.ant-pro-layout-apps-simple-content-list-item a>div{margin-block-start:5px;margin-inline-start:0;color:rgba(0, 0, 0, 0.88);font-size:14px;line-height:22px;white-space:nowrap;text-overflow:ellipsis;}.ant-pro-layout-apps-simple-content-list-item a>div>span{color:rgba(0, 0, 0, 0.65);font-size:12px;line-height:20px;}.ant-pro-layout-apps-default-content-list{box-sizing:content-box;max-width:656px;margin-block:0;margin-inline:0;padding-block:0;padding-inline:0;list-style:none;}.ant-pro-layout-apps-default-content-list >*{box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';}.ant-pro-layout-apps-default-content-list-item{position:relative;display:inline-block;width:328px;height:72px;padding-inline:16px;padding-block:16px;vertical-align:top;list-style-type:none;transition:transform 0.2s cubic-bezier(0.333, 0, 0, 1);border-radius:6px;}.ant-pro-layout-apps-default-content-list-item:hover{background-color:rgba(0, 0, 0, 0.06);}.ant-pro-layout-apps-default-content-list-item *{box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';}.ant-pro-layout-apps-default-content-list-item * div{box-sizing:border-box;margin:0;padding:0;color:rgba(0, 0, 0, 0.88);font-size:14px;line-height:1.5714285714285714;list-style:none;}.ant-pro-layout-apps-default-content-list-item a{display:flex;height:100%;font-size:12px;text-decoration:none;}.ant-pro-layout-apps-default-content-list-item a>img{width:40px;height:40px;}.ant-pro-layout-apps-default-content-list-item a>div{margin-inline-start:14px;color:rgba(0, 0, 0, 0.88);font-size:14px;line-height:22px;white-space:nowrap;text-overflow:ellipsis;}.ant-pro-layout-apps-default-content-list-item a>div>span{color:rgba(0, 0, 0, 0.65);font-size:12px;line-height:20px;}</style><style data-rc-order="prependQueue" data-css-hash="61rijj" data-token-hash="gngivi">.ant-pro-base-menu{background:transparent;border:none;}.ant-pro-base-menu .ant-pro-base-menu-menu-item{transition:none!important;}.ant-pro-base-menu .ant-pro-base-menu-submenu-has-icon >.ant-menu-sub{padding-inline-start:10px;}.ant-pro-base-menu.ant-pro-base-menu-collapsed .ant-menu-item,.ant-pro-base-menu.ant-pro-base-menu-collapsed .ant-menu-item-group>.ant-menu-item-group-list>.ant-menu-item,.ant-pro-base-menu.ant-pro-base-menu-collapsed .ant-menu-item-group>.ant-menu-item-group-list>.ant-menu-submenu>.ant-menu-submenu-title,.ant-pro-base-menu.ant-pro-base-menu-collapsed .ant-menu-submenu>.ant-menu-submenu-title{padding-inline:0!important;margin-block:8px!important;}.ant-pro-base-menu.ant-pro-base-menu-collapsed .ant-menu-item-group>.ant-menu-item-group-list>.ant-menu-submenu-selected>.ant-menu-submenu-title,.ant-pro-base-menu.ant-pro-base-menu-collapsed .ant-menu-submenu-selected>.ant-menu-submenu-title{background-color:rgba(0, 0, 0, 0.04);border-radius:6px;}.ant-pro-base-menu.ant-pro-base-menu-collapsed .ant-pro-base-menu-group .ant-menu-item-group-title{padding-inline:0;}.ant-pro-base-menu .ant-pro-base-menu-item-icon{height:14px;width:14px;opacity:0.85;}.ant-pro-base-menu .ant-pro-base-menu-item-icon .anticon{line-height:14px;height:14px;}.ant-pro-base-menu .ant-pro-base-menu-item-title{display:flex;flex-direction:row;align-items:center;}.ant-pro-base-menu .ant-pro-base-menu-item-title-collapsed{flex-direction:column;justify-content:center;}.ant-pro-base-menu .ant-pro-base-menu-item-title-collapsed .ant-pro-base-menu-item-text{max-width:100%;}.ant-pro-base-menu .ant-pro-base-menu-item-title-collapsed .ant-pro-base-menu-item-text-has-icon{display:none!important;}.ant-pro-base-menu .ant-pro-base-menu-item-title.ant-pro-base-menu-group-item-title{gap:4px;height:18px;overflow:hidden;}.ant-pro-base-menu .ant-pro-base-menu-item-title.ant-pro-base-menu-item-collapsed-show-title{line-height:16px;height:48px;}.ant-pro-base-menu .ant-pro-base-menu-item-title.ant-pro-base-menu-item-collapsed-show-title.ant-pro-base-menu-item-title-collapsed{display:flex;}.ant-pro-base-menu .ant-pro-base-menu-item-title.ant-pro-base-menu-item-collapsed-show-title.ant-pro-base-menu-item-title-collapsed .ant-pro-base-menu-item-icon{height:16px;line-height:16px!important;}.ant-pro-base-menu .ant-pro-base-menu-item-title.ant-pro-base-menu-item-collapsed-show-title.ant-pro-base-menu-item-title-collapsed .ant-pro-base-menu-item-icon .anticon{line-height:16px;height:16px;}.ant-pro-base-menu .ant-pro-base-menu-item-title.ant-pro-base-menu-item-collapsed-show-title.ant-pro-base-menu-item-title-collapsed .ant-pro-base-menu-item-text{opacity:1!important;display:inline!important;text-align:center;font-size:12px;height:12px;line-height:12px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;width:100%;margin:0;padding:0;margin-block-start:4px;}.ant-pro-base-menu-group .ant-menu-item-group-title{font-size:12px;color:rgba(0, 0, 0, 0.65);}.ant-pro-base-menu-group .ant-menu-item-group-title .anticon{margin-inline-end:8px;}.ant-pro-base-menu-group-divider{color:rgba(0, 0, 0, 0.65);font-size:12px;line-height:20;}</style><style data-rc-order="prependQueue" data-css-hash="1iba4zy" data-token-hash="gngivi">.ant-pro-sider-collapsed-button{position:absolute;inset-block-start:18px;z-index:101;width:24px;height:24px;text-align:center;border-radius:40px;inset-inline-end:-13px;transition:transform 0.3s;display:flex;align-items:center;justify-content:center;cursor:pointer;color:rgba(0, 0, 0, 0.25);background-color:#ffffff;box-shadow:0 2px 8px -2px rgba(0,0,0,0.05),0 1px 4px -1px rgba(25,15,15,0.07),0 0 1px 0 rgba(0,0,0,0.08);}.ant-pro-sider-collapsed-button:hover{color:rgba(0, 0, 0, 0.65);box-shadow:0 4px 16px -4px rgba(0,0,0,0.05),0 2px 8px -2px rgba(25,15,15,0.07),0 1px 2px 0 rgba(0,0,0,0.08);}.ant-pro-sider-collapsed-button .anticon{font-size:14px;}.ant-pro-sider-collapsed-button>svg{transition:transform 0.3s;transform:rotate(90deg);}.ant-pro-sider-collapsed-button-collapsed>svg{transform:rotate(-90deg);}</style><style data-rc-order="prependQueue" data-css-hash="gzk1s0" data-token-hash="gngivi">.ant-pro-layout .ant-layout-header.ant-pro-layout-header { height: 56px; line-height: 56px; z-index: 19; width: 100%; padding-block: 0px; padding-inline: 8px; border-block-end: 1px solid rgba(5, 5, 5, 0.06); background-color: rgba(255, 255, 255, 0.6); backdrop-filter: blur(8px); }
.ant-pro-layout .ant-layout-header.ant-pro-layout-header-fixed-header { position: fixed; inset-block-start: 0px; width: 100%; z-index: 100; inset-inline-end: 0px; }
.ant-pro-layout .ant-layout-header.ant-pro-layout-header-header-actions { display: flex; align-items: center; font-size: 16px; cursor: pointer; }
.ant-pro-layout .ant-layout-header.ant-pro-layout-header-header-actions .ant-pro-layout .ant-layout-header.ant-pro-layout-header-header-actions-item { padding-block: 0px; padding-inline: 8px; }
.ant-pro-layout .ant-layout-header.ant-pro-layout-header-header-actions .ant-pro-layout .ant-layout-header.ant-pro-layout-header-header-actions-item:hover { color: rgba(0, 0, 0, 0.88); }
.ant-pro-layout .ant-layout-header.ant-pro-layout-header-header-realDark { box-shadow: rgba(0, 0, 0, 0.65) 0px 2px 8px 0px; }
.ant-pro-layout .ant-layout-header.ant-pro-layout-header-header-actions-header-action { transition: width 0.3s cubic-bezier(0.645, 0.045, 0.355, 1) 0s; }</style><style data-rc-order="prependQueue" data-css-hash="1q9xg0" data-token-hash="gngivi"></style><style data-rc-order="prependQueue" data-css-hash="14fyocz" data-token-hash="160jlb5">[class^="ant-spin"],[class*=" ant-spin"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}[class^="ant-spin"]::before,[class*=" ant-spin"]::before,[class^="ant-spin"]::after,[class*=" ant-spin"]::after{box-sizing:border-box;}[class^="ant-spin"] [class^="ant-spin"],[class*=" ant-spin"] [class^="ant-spin"],[class^="ant-spin"] [class*=" ant-spin"],[class*=" ant-spin"] [class*=" ant-spin"]{box-sizing:border-box;}[class^="ant-spin"] [class^="ant-spin"]::before,[class*=" ant-spin"] [class^="ant-spin"]::before,[class^="ant-spin"] [class*=" ant-spin"]::before,[class*=" ant-spin"] [class*=" ant-spin"]::before,[class^="ant-spin"] [class^="ant-spin"]::after,[class*=" ant-spin"] [class^="ant-spin"]::after,[class^="ant-spin"] [class*=" ant-spin"]::after,[class*=" ant-spin"] [class*=" ant-spin"]::after{box-sizing:border-box;}.ant-spin{box-sizing:border-box;margin:0;padding:0;color:#1677ff;font-size:14px;line-height:1.5714285714285714;list-style:none;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';position:absolute;display:none;text-align:center;vertical-align:middle;opacity:0;transition:transform 0.3s cubic-bezier(0.78, 0.14, 0.15, 0.86);}.ant-spin-spinning{position:static;display:inline-block;opacity:1;}.ant-spin-nested-loading{position:relative;}.ant-spin-nested-loading >div>.ant-spin{position:absolute;top:0;inset-inline-start:0;z-index:4;display:block;width:100%;height:100%;max-height:400px;}.ant-spin-nested-loading >div>.ant-spin .ant-spin-dot{position:absolute;top:50%;inset-inline-start:50%;margin:-10px;}.ant-spin-nested-loading >div>.ant-spin .ant-spin-text{position:absolute;top:50%;width:100%;padding-top:5px;text-shadow:0 1px 2px #ffffff;}.ant-spin-nested-loading >div>.ant-spin.ant-spin-show-text .ant-spin-dot{margin-top:-20px;}.ant-spin-nested-loading >div>.ant-spin-sm .ant-spin-dot{margin:-7px;}.ant-spin-nested-loading >div>.ant-spin-sm .ant-spin-text{padding-top:2px;}.ant-spin-nested-loading >div>.ant-spin-sm.ant-spin-show-text .ant-spin-dot{margin-top:-17px;}.ant-spin-nested-loading >div>.ant-spin-lg .ant-spin-dot{margin:-16px;}.ant-spin-nested-loading >div>.ant-spin-lg .ant-spin-text{padding-top:11px;}.ant-spin-nested-loading >div>.ant-spin-lg.ant-spin-show-text .ant-spin-dot{margin-top:-26px;}.ant-spin-nested-loading .ant-spin-container{position:relative;transition:opacity 0.3s;}.ant-spin-nested-loading .ant-spin-container::after{position:absolute;top:0;inset-inline-end:0;bottom:0;inset-inline-start:0;z-index:10;width:100%;height:100%;background:#ffffff;opacity:0;transition:all 0.3s;content:"";pointer-events:none;}.ant-spin-nested-loading .ant-spin-blur{clear:both;opacity:0.5;user-select:none;pointer-events:none;}.ant-spin-nested-loading .ant-spin-blur::after{opacity:0.4;pointer-events:auto;}.ant-spin-tip{color:rgba(0, 0, 0, 0.45);}.ant-spin .ant-spin-dot{position:relative;display:inline-block;font-size:20px;width:1em;height:1em;}.ant-spin .ant-spin-dot-item{position:absolute;display:block;width:9px;height:9px;background-color:#1677ff;border-radius:100%;transform:scale(0.75);transform-origin:50% 50%;opacity:0.3;animation-name:antSpinMove;animation-duration:1s;animation-iteration-count:infinite;animation-timing-function:linear;animation-direction:alternate;}.ant-spin .ant-spin-dot-item:nth-child(1){top:0;inset-inline-start:0;}.ant-spin .ant-spin-dot-item:nth-child(2){top:0;inset-inline-end:0;animation-delay:0.4s;}.ant-spin .ant-spin-dot-item:nth-child(3){inset-inline-end:0;bottom:0;animation-delay:0.8s;}.ant-spin .ant-spin-dot-item:nth-child(4){bottom:0;inset-inline-start:0;animation-delay:1.2s;}.ant-spin .ant-spin-dot-spin{transform:rotate(45deg);animation-name:antRotate;animation-duration:1.2s;animation-iteration-count:infinite;animation-timing-function:linear;}.ant-spin-sm .ant-spin-dot{font-size:14px;}.ant-spin-sm .ant-spin-dot i{width:6px;height:6px;}.ant-spin-lg .ant-spin-dot{font-size:32px;}.ant-spin-lg .ant-spin-dot i{width:14px;height:14px;}.ant-spin.ant-spin-show-text .ant-spin-text{display:block;}</style><style data-rc-order="prependQueue" data-css-hash="_effect-antSpinMove">@keyframes antSpinMove{to{opacity:1;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-antRotate">@keyframes antRotate{to{transform:rotate(405deg);}}</style><style data-rc-order="prependQueue" data-css-hash="1f4kwu2" data-token-hash="1jebxg8">:where(.css-d8ft0k)[class^="ant-skeleton"],:where(.css-d8ft0k)[class*=" ant-skeleton"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-skeleton"]::before,:where(.css-d8ft0k)[class*=" ant-skeleton"]::before,:where(.css-d8ft0k)[class^="ant-skeleton"]::after,:where(.css-d8ft0k)[class*=" ant-skeleton"]::after{box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-skeleton"] [class^="ant-skeleton"],:where(.css-d8ft0k)[class*=" ant-skeleton"] [class^="ant-skeleton"],:where(.css-d8ft0k)[class^="ant-skeleton"] [class*=" ant-skeleton"],:where(.css-d8ft0k)[class*=" ant-skeleton"] [class*=" ant-skeleton"]{box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-skeleton"] [class^="ant-skeleton"]::before,:where(.css-d8ft0k)[class*=" ant-skeleton"] [class^="ant-skeleton"]::before,:where(.css-d8ft0k)[class^="ant-skeleton"] [class*=" ant-skeleton"]::before,:where(.css-d8ft0k)[class*=" ant-skeleton"] [class*=" ant-skeleton"]::before,:where(.css-d8ft0k)[class^="ant-skeleton"] [class^="ant-skeleton"]::after,:where(.css-d8ft0k)[class*=" ant-skeleton"] [class^="ant-skeleton"]::after,:where(.css-d8ft0k)[class^="ant-skeleton"] [class*=" ant-skeleton"]::after,:where(.css-d8ft0k)[class*=" ant-skeleton"] [class*=" ant-skeleton"]::after{box-sizing:border-box;}:where(.css-d8ft0k).ant-skeleton{display:table;width:100%;}:where(.css-d8ft0k).ant-skeleton .ant-skeleton-header{display:table-cell;padding-inline-end:16px;vertical-align:top;}:where(.css-d8ft0k).ant-skeleton .ant-skeleton-header .ant-skeleton-avatar{display:inline-block;vertical-align:top;background:rgba(0, 0, 0, 0.06);width:32px;height:32px;line-height:32px;}:where(.css-d8ft0k).ant-skeleton .ant-skeleton-header .ant-skeleton-avatar-circle{border-radius:50%;}:where(.css-d8ft0k).ant-skeleton .ant-skeleton-header .ant-skeleton-avatar-lg{width:40px;height:40px;line-height:40px;}:where(.css-d8ft0k).ant-skeleton .ant-skeleton-header .ant-skeleton-avatar-sm{width:24px;height:24px;line-height:24px;}:where(.css-d8ft0k).ant-skeleton .ant-skeleton-content{display:table-cell;width:100%;vertical-align:top;}:where(.css-d8ft0k).ant-skeleton .ant-skeleton-content .ant-skeleton-title{width:100%;height:16px;background:rgba(0, 0, 0, 0.06);border-radius:4px;}:where(.css-d8ft0k).ant-skeleton .ant-skeleton-content .ant-skeleton-title +.ant-skeleton-paragraph{margin-block-start:24px;}:where(.css-d8ft0k).ant-skeleton .ant-skeleton-content .ant-skeleton-paragraph{padding:0;}:where(.css-d8ft0k).ant-skeleton .ant-skeleton-content .ant-skeleton-paragraph >li{width:100%;height:16px;list-style:none;background:rgba(0, 0, 0, 0.06);border-radius:4px;}:where(.css-d8ft0k).ant-skeleton .ant-skeleton-content .ant-skeleton-paragraph >li +li{margin-block-start:16px;}:where(.css-d8ft0k).ant-skeleton .ant-skeleton-content .ant-skeleton-paragraph>li:last-child:not(:first-child):not(:nth-child(2)){width:61%;}:where(.css-d8ft0k).ant-skeleton-round .ant-skeleton-content .ant-skeleton-title,:where(.css-d8ft0k).ant-skeleton-round .ant-skeleton-content .ant-skeleton-paragraph>li{border-radius:100px;}:where(.css-d8ft0k).ant-skeleton-with-avatar .ant-skeleton-content .ant-skeleton-title{margin-block-start:12px;}:where(.css-d8ft0k).ant-skeleton-with-avatar .ant-skeleton-content .ant-skeleton-title +.ant-skeleton-paragraph{margin-block-start:28px;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-element{display:inline-block;width:auto;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-element .ant-skeleton-button{display:inline-block;vertical-align:top;background:rgba(0, 0, 0, 0.06);border-radius:4px;width:64px;min-width:64px;height:32px;line-height:32px;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-element .ant-skeleton-button.ant-skeleton-button-circle{width:32px;min-width:32px;border-radius:50%;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-element .ant-skeleton-button.ant-skeleton-button-round{border-radius:32px;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-element .ant-skeleton-button-lg{width:80px;min-width:80px;height:40px;line-height:40px;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-element .ant-skeleton-button-lg.ant-skeleton-button-circle{width:40px;min-width:40px;border-radius:50%;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-element .ant-skeleton-button-lg.ant-skeleton-button-round{border-radius:40px;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-element .ant-skeleton-button-sm{width:48px;min-width:48px;height:24px;line-height:24px;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-element .ant-skeleton-button-sm.ant-skeleton-button-circle{width:24px;min-width:24px;border-radius:50%;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-element .ant-skeleton-button-sm.ant-skeleton-button-round{border-radius:24px;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-element .ant-skeleton-avatar{display:inline-block;vertical-align:top;background:rgba(0, 0, 0, 0.06);width:32px;height:32px;line-height:32px;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-element .ant-skeleton-avatar.ant-skeleton-avatar-circle{border-radius:50%;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-element .ant-skeleton-avatar.ant-skeleton-avatar-lg{width:40px;height:40px;line-height:40px;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-element .ant-skeleton-avatar.ant-skeleton-avatar-sm{width:24px;height:24px;line-height:24px;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-element .ant-skeleton-input{display:inline-block;vertical-align:top;background:rgba(0, 0, 0, 0.06);border-radius:4px;width:160px;min-width:160px;height:32px;line-height:32px;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-element .ant-skeleton-input-lg{width:200px;min-width:200px;height:40px;line-height:40px;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-element .ant-skeleton-input-sm{width:120px;min-width:120px;height:24px;line-height:24px;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-element .ant-skeleton-image{display:flex;align-items:center;justify-content:center;vertical-align:top;background:rgba(0, 0, 0, 0.06);border-radius:4px;width:96px;height:96px;line-height:96px;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-element .ant-skeleton-image .ant-skeleton-image-path{fill:#bfbfbf;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-element .ant-skeleton-image .ant-skeleton-image-svg{width:48px;height:48px;line-height:48px;max-width:192px;max-height:192px;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-element .ant-skeleton-image .ant-skeleton-image-svg.ant-skeleton-image-svg-circle{border-radius:50%;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-element .ant-skeleton-image.ant-skeleton-image-circle{border-radius:50%;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-block{width:100%;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-block .ant-skeleton-button{width:100%;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-block .ant-skeleton-input{width:100%;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-active .ant-skeleton-title,:where(.css-d8ft0k).ant-skeleton.ant-skeleton-active .ant-skeleton-paragraph>li,:where(.css-d8ft0k).ant-skeleton.ant-skeleton-active .ant-skeleton-avatar,:where(.css-d8ft0k).ant-skeleton.ant-skeleton-active .ant-skeleton-button,:where(.css-d8ft0k).ant-skeleton.ant-skeleton-active .ant-skeleton-input,:where(.css-d8ft0k).ant-skeleton.ant-skeleton-active .ant-skeleton-image{position:relative;z-index:0;overflow:hidden;background:transparent;}:where(.css-d8ft0k).ant-skeleton.ant-skeleton-active .ant-skeleton-title::after,:where(.css-d8ft0k).ant-skeleton.ant-skeleton-active .ant-skeleton-paragraph>li::after,:where(.css-d8ft0k).ant-skeleton.ant-skeleton-active .ant-skeleton-avatar::after,:where(.css-d8ft0k).ant-skeleton.ant-skeleton-active .ant-skeleton-button::after,:where(.css-d8ft0k).ant-skeleton.ant-skeleton-active .ant-skeleton-input::after,:where(.css-d8ft0k).ant-skeleton.ant-skeleton-active .ant-skeleton-image::after{position:absolute;top:0;inset-inline-end:-150%;bottom:0;inset-inline-start:-150%;background:linear-gradient(90deg, rgba(0, 0, 0, 0.06) 25%, rgba(0, 0, 0, 0.15) 37%, rgba(0, 0, 0, 0.06) 63%);animation-name:css-d8ft0k-ant-skeleton-loading;animation-duration:1.4s;animation-timing-function:ease;animation-iteration-count:infinite;content:"";}</style><style data-rc-order="prependQueue" data-css-hash="_effect-css-d8ft0k-ant-skeleton-loading">@keyframes css-d8ft0k-ant-skeleton-loading{0%{transform:translateX(-37.5%);}100%{transform:translateX(37.5%);}}</style><style data-rc-order="prependQueue" data-css-hash="1958sps" data-token-hash="1jebxg8">:where(.css-d8ft0k)[class^="ant-menu"],:where(.css-d8ft0k)[class*=" ant-menu"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-menu"]::before,:where(.css-d8ft0k)[class*=" ant-menu"]::before,:where(.css-d8ft0k)[class^="ant-menu"]::after,:where(.css-d8ft0k)[class*=" ant-menu"]::after{box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-menu"] [class^="ant-menu"],:where(.css-d8ft0k)[class*=" ant-menu"] [class^="ant-menu"],:where(.css-d8ft0k)[class^="ant-menu"] [class*=" ant-menu"],:where(.css-d8ft0k)[class*=" ant-menu"] [class*=" ant-menu"]{box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-menu"] [class^="ant-menu"]::before,:where(.css-d8ft0k)[class*=" ant-menu"] [class^="ant-menu"]::before,:where(.css-d8ft0k)[class^="ant-menu"] [class*=" ant-menu"]::before,:where(.css-d8ft0k)[class*=" ant-menu"] [class*=" ant-menu"]::before,:where(.css-d8ft0k)[class^="ant-menu"] [class^="ant-menu"]::after,:where(.css-d8ft0k)[class*=" ant-menu"] [class^="ant-menu"]::after,:where(.css-d8ft0k)[class^="ant-menu"] [class*=" ant-menu"]::after,:where(.css-d8ft0k)[class*=" ant-menu"] [class*=" ant-menu"]::after{box-sizing:border-box;}:where(.css-d8ft0k) .ant-menu::before{display:table;content:"";}:where(.css-d8ft0k) .ant-menu::after{display:table;clear:both;content:"";}:where(.css-d8ft0k) .ant-menu-hidden{display:none;}:where(.css-d8ft0k).ant-menu-submenu-hidden{display:none;}:where(.css-d8ft0k).ant-menu{box-sizing:border-box;margin:0;padding:0;color:rgba(0, 0, 0, 0.88);font-size:14px;line-height:0;list-style:none;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';margin-bottom:0;padding-inline-start:0;outline:none;transition:background 0.3s,width 0.3s cubic-bezier(0.2, 0, 0, 1) 0s;}:where(.css-d8ft0k).ant-menu::before{display:table;content:"";}:where(.css-d8ft0k).ant-menu::after{display:table;clear:both;content:"";}:where(.css-d8ft0k).ant-menu ul,:where(.css-d8ft0k).ant-menu ol{margin:0;padding:0;list-style:none;}:where(.css-d8ft0k).ant-menu-overflow{display:flex;}:where(.css-d8ft0k).ant-menu-overflow .ant-menu-item{flex:none;}:where(.css-d8ft0k).ant-menu .ant-menu-item,:where(.css-d8ft0k).ant-menu .ant-menu-submenu,:where(.css-d8ft0k).ant-menu .ant-menu-submenu-title{border-radius:4px;}:where(.css-d8ft0k).ant-menu .ant-menu-item-group-title{padding:8px 16px;font-size:14px;line-height:1.5714285714285714;transition:all 0.3s;}:where(.css-d8ft0k).ant-menu-horizontal .ant-menu-submenu{transition:border-color 0.3s cubic-bezier(0.645, 0.045, 0.355, 1),background 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);}:where(.css-d8ft0k).ant-menu .ant-menu-submenu,:where(.css-d8ft0k).ant-menu .ant-menu-submenu-inline{transition:border-color 0.3s cubic-bezier(0.645, 0.045, 0.355, 1),background 0.3s cubic-bezier(0.645, 0.045, 0.355, 1),padding 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);}:where(.css-d8ft0k).ant-menu .ant-menu-submenu .ant-menu-sub{cursor:initial;transition:background 0.3s cubic-bezier(0.645, 0.045, 0.355, 1),padding 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);}:where(.css-d8ft0k).ant-menu .ant-menu-title-content{transition:color 0.3s;}:where(.css-d8ft0k).ant-menu .ant-menu-item a::before{position:absolute;inset:0;background-color:transparent;content:"";}:where(.css-d8ft0k).ant-menu .ant-menu-item-divider{overflow:hidden;line-height:0;border-color:rgba(5, 5, 5, 0.06);border-style:solid;border-top-width:1px;margin-block:1px;padding:0;}:where(.css-d8ft0k).ant-menu .ant-menu-item-divider-dashed{border-style:dashed;}:where(.css-d8ft0k).ant-menu .ant-menu-item,:where(.css-d8ft0k).ant-menu .ant-menu-submenu-title{position:relative;display:block;margin:0;white-space:nowrap;cursor:pointer;transition:border-color 0.3s,background 0.3s,padding 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);}:where(.css-d8ft0k).ant-menu .ant-menu-item .ant-menu-item-icon,:where(.css-d8ft0k).ant-menu .ant-menu-submenu-title .ant-menu-item-icon,:where(.css-d8ft0k).ant-menu .ant-menu-item .anticon,:where(.css-d8ft0k).ant-menu .ant-menu-submenu-title .anticon{min-width:14px;font-size:14px;transition:font-size 0.2s cubic-bezier(0.215, 0.61, 0.355, 1),margin 0.3s cubic-bezier(0.645, 0.045, 0.355, 1),color 0.3s;}:where(.css-d8ft0k).ant-menu .ant-menu-item .ant-menu-item-icon +span,:where(.css-d8ft0k).ant-menu .ant-menu-submenu-title .ant-menu-item-icon +span,:where(.css-d8ft0k).ant-menu .ant-menu-item .anticon +span,:where(.css-d8ft0k).ant-menu .ant-menu-submenu-title .anticon +span{margin-inline-start:10px;opacity:1;transition:opacity 0.3s cubic-bezier(0.645, 0.045, 0.355, 1),margin 0.3s,color 0.3s;}:where(.css-d8ft0k).ant-menu .ant-menu-item .ant-menu-item-icon,:where(.css-d8ft0k).ant-menu .ant-menu-submenu-title .ant-menu-item-icon{display:inline-flex;align-items:center;color:inherit;font-style:normal;line-height:0;text-align:center;text-transform:none;vertical-align:-0.125em;text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}:where(.css-d8ft0k).ant-menu .ant-menu-item .ant-menu-item-icon >*,:where(.css-d8ft0k).ant-menu .ant-menu-submenu-title .ant-menu-item-icon >*{line-height:1;}:where(.css-d8ft0k).ant-menu .ant-menu-item .ant-menu-item-icon svg,:where(.css-d8ft0k).ant-menu .ant-menu-submenu-title .ant-menu-item-icon svg{display:inline-block;}:where(.css-d8ft0k).ant-menu .ant-menu-item .ant-menu-item-icon :where(.css-d8ft0k).ant-menu .ant-menu-item .ant-menu-item-icon-icon,:where(.css-d8ft0k).ant-menu .ant-menu-submenu-title .ant-menu-item-icon :where(.css-d8ft0k).ant-menu .ant-menu-submenu-title .ant-menu-item-icon-icon{display:block;}:where(.css-d8ft0k).ant-menu .ant-menu-item.ant-menu-item-only-child >.anticon,:where(.css-d8ft0k).ant-menu .ant-menu-submenu-title.ant-menu-item-only-child >.anticon,:where(.css-d8ft0k).ant-menu .ant-menu-item.ant-menu-item-only-child >.ant-menu-item-icon,:where(.css-d8ft0k).ant-menu .ant-menu-submenu-title.ant-menu-item-only-child >.ant-menu-item-icon{margin-inline-end:0;}:where(.css-d8ft0k).ant-menu .ant-menu-item-disabled,:where(.css-d8ft0k).ant-menu .ant-menu-submenu-disabled{background:none!important;cursor:not-allowed;}:where(.css-d8ft0k).ant-menu .ant-menu-item-disabled::after,:where(.css-d8ft0k).ant-menu .ant-menu-submenu-disabled::after{border-color:transparent!important;}:where(.css-d8ft0k).ant-menu .ant-menu-item-disabled a,:where(.css-d8ft0k).ant-menu .ant-menu-submenu-disabled a{color:inherit!important;}:where(.css-d8ft0k).ant-menu .ant-menu-item-disabled >.ant-menu-submenu-title,:where(.css-d8ft0k).ant-menu .ant-menu-submenu-disabled >.ant-menu-submenu-title{color:inherit!important;cursor:not-allowed;}:where(.css-d8ft0k).ant-menu .ant-menu-item-group .ant-menu-item-group-list{margin:0;padding:0;}:where(.css-d8ft0k).ant-menu .ant-menu-item-group .ant-menu-item-group-list .ant-menu-item,:where(.css-d8ft0k).ant-menu .ant-menu-item-group .ant-menu-item-group-list .ant-menu-submenu-title{padding-inline:28px 16px;}:where(.css-d8ft0k).ant-menu-submenu-popup{position:absolute;z-index:1050;background:transparent;border-radius:8px;box-shadow:none;transform-origin:0 0;}:where(.css-d8ft0k).ant-menu-submenu-popup::before{position:absolute;inset:-7px 0 0;z-index:-1;width:100%;height:100%;opacity:0;content:"";}:where(.css-d8ft0k).ant-menu-submenu-placement-rightTop::before{top:0;inset-inline-start:-7px;}:where(.css-d8ft0k).ant-menu-submenu >.ant-menu{border-radius:8px;}:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-item,:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-submenu-title{position:relative;display:block;margin:0;white-space:nowrap;cursor:pointer;transition:border-color 0.3s,background 0.3s,padding 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);}:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-item .ant-menu-item-icon,:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-submenu-title .ant-menu-item-icon,:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-item .anticon,:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-submenu-title .anticon{min-width:14px;font-size:14px;transition:font-size 0.2s cubic-bezier(0.215, 0.61, 0.355, 1),margin 0.3s cubic-bezier(0.645, 0.045, 0.355, 1),color 0.3s;}:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-item .ant-menu-item-icon +span,:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-submenu-title .ant-menu-item-icon +span,:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-item .anticon +span,:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-submenu-title .anticon +span{margin-inline-start:10px;opacity:1;transition:opacity 0.3s cubic-bezier(0.645, 0.045, 0.355, 1),margin 0.3s,color 0.3s;}:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-item .ant-menu-item-icon,:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-submenu-title .ant-menu-item-icon{display:inline-flex;align-items:center;color:inherit;font-style:normal;line-height:0;text-align:center;text-transform:none;vertical-align:-0.125em;text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-item .ant-menu-item-icon >*,:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-submenu-title .ant-menu-item-icon >*{line-height:1;}:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-item .ant-menu-item-icon svg,:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-submenu-title .ant-menu-item-icon svg{display:inline-block;}:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-item .ant-menu-item-icon :where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-item .ant-menu-item-icon-icon,:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-submenu-title .ant-menu-item-icon :where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-submenu-title .ant-menu-item-icon-icon{display:block;}:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-item.ant-menu-item-only-child >.anticon,:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-submenu-title.ant-menu-item-only-child >.anticon,:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-item.ant-menu-item-only-child >.ant-menu-item-icon,:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-submenu-title.ant-menu-item-only-child >.ant-menu-item-icon{margin-inline-end:0;}:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-item-disabled,:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-submenu-disabled{background:none!important;cursor:not-allowed;}:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-item-disabled::after,:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-submenu-disabled::after{border-color:transparent!important;}:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-item-disabled a,:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-submenu-disabled a{color:inherit!important;}:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-item-disabled >.ant-menu-submenu-title,:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-submenu-disabled >.ant-menu-submenu-title{color:inherit!important;cursor:not-allowed;}:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-submenu-expand-icon,:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-submenu-arrow{position:absolute;top:50%;inset-inline-end:16px;width:10px;color:currentcolor;transform:translateY(-50%);transition:transform 0.3s cubic-bezier(0.645, 0.045, 0.355, 1),opacity 0.3s;}:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-submenu-arrow::before,:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-submenu-arrow::after{position:absolute;width:6px;height:1.5px;background-color:currentcolor;border-radius:6px;transition:background 0.3s cubic-bezier(0.645, 0.045, 0.355, 1),transform 0.3s cubic-bezier(0.645, 0.045, 0.355, 1),top 0.3s cubic-bezier(0.645, 0.045, 0.355, 1),color 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);content:"";}:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-submenu-arrow::before{transform:rotate(45deg) translateY(-2.5px);}:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-submenu-arrow::after{transform:rotate(-45deg) translateY(2.5px);}:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-item,:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-submenu>.ant-menu-submenu-title{border-radius:4px;}:where(.css-d8ft0k).ant-menu-submenu >.ant-menu .ant-menu-submenu-title::after{transition:transform 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);}:where(.css-d8ft0k).ant-menu .ant-menu-submenu-expand-icon,:where(.css-d8ft0k).ant-menu .ant-menu-submenu-arrow{position:absolute;top:50%;inset-inline-end:16px;width:10px;color:currentcolor;transform:translateY(-50%);transition:transform 0.3s cubic-bezier(0.645, 0.045, 0.355, 1),opacity 0.3s;}:where(.css-d8ft0k).ant-menu .ant-menu-submenu-arrow::before,:where(.css-d8ft0k).ant-menu .ant-menu-submenu-arrow::after{position:absolute;width:6px;height:1.5px;background-color:currentcolor;border-radius:6px;transition:background 0.3s cubic-bezier(0.645, 0.045, 0.355, 1),transform 0.3s cubic-bezier(0.645, 0.045, 0.355, 1),top 0.3s cubic-bezier(0.645, 0.045, 0.355, 1),color 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);content:"";}:where(.css-d8ft0k).ant-menu .ant-menu-submenu-arrow::before{transform:rotate(45deg) translateY(-2.5px);}:where(.css-d8ft0k).ant-menu .ant-menu-submenu-arrow::after{transform:rotate(-45deg) translateY(2.5px);}:where(.css-d8ft0k).ant-menu-inline-collapsed .ant-menu-submenu-arrow::before,:where(.css-d8ft0k).ant-menu-inline .ant-menu-submenu-arrow::before{transform:rotate(-45deg) translateX(2.5px);}:where(.css-d8ft0k).ant-menu-inline-collapsed .ant-menu-submenu-arrow::after,:where(.css-d8ft0k).ant-menu-inline .ant-menu-submenu-arrow::after{transform:rotate(45deg) translateX(-2.5px);}:where(.css-d8ft0k).ant-menu .ant-menu-submenu-open.ant-menu-submenu-inline>.ant-menu-submenu-title>.ant-menu-submenu-arrow{transform:translateY(-2px);}:where(.css-d8ft0k).ant-menu .ant-menu-submenu-open.ant-menu-submenu-inline>.ant-menu-submenu-title>.ant-menu-submenu-arrow::after{transform:rotate(-45deg) translateX(-2.5px);}:where(.css-d8ft0k).ant-menu .ant-menu-submenu-open.ant-menu-submenu-inline>.ant-menu-submenu-title>.ant-menu-submenu-arrow::before{transform:rotate(45deg) translateX(2.5px);}:where(.css-d8ft0k).ant-layout-header .ant-menu{line-height:inherit;}:where(.css-d8ft0k).ant-menu-horizontal{line-height:46px;border:0;border-bottom:1px solid rgba(5, 5, 5, 0.06);box-shadow:none;}:where(.css-d8ft0k).ant-menu-horizontal::after{display:block;clear:both;height:0;content:"\20";}:where(.css-d8ft0k).ant-menu-horizontal .ant-menu-item,:where(.css-d8ft0k).ant-menu-horizontal .ant-menu-submenu{position:relative;display:inline-block;vertical-align:bottom;padding-inline:16px;}:where(.css-d8ft0k).ant-menu-horizontal >.ant-menu-item:hover,:where(.css-d8ft0k).ant-menu-horizontal >.ant-menu-item-active,:where(.css-d8ft0k).ant-menu-horizontal >.ant-menu-submenu .ant-menu-submenu-title:hover{background-color:transparent;}:where(.css-d8ft0k).ant-menu-horizontal .ant-menu-item,:where(.css-d8ft0k).ant-menu-horizontal .ant-menu-submenu-title{transition:border-color 0.3s,background 0.3s;}:where(.css-d8ft0k).ant-menu-horizontal .ant-menu-submenu-arrow{display:none;}:where(.css-d8ft0k).ant-menu-inline.ant-menu-root,:where(.css-d8ft0k).ant-menu-vertical.ant-menu-root{box-shadow:none;}:where(.css-d8ft0k).ant-menu-inline .ant-menu-item,:where(.css-d8ft0k).ant-menu-vertical .ant-menu-item{position:relative;}:where(.css-d8ft0k).ant-menu-inline .ant-menu-item,:where(.css-d8ft0k).ant-menu-vertical .ant-menu-item,:where(.css-d8ft0k).ant-menu-inline .ant-menu-submenu-title,:where(.css-d8ft0k).ant-menu-vertical .ant-menu-submenu-title{height:40px;line-height:40px;padding-inline:16px;overflow:hidden;text-overflow:ellipsis;margin-inline:4px;margin-block:4px;width:calc(100% - 8px);}:where(.css-d8ft0k).ant-menu-inline .ant-menu-submenu,:where(.css-d8ft0k).ant-menu-vertical .ant-menu-submenu{padding-bottom:0.02px;}:where(.css-d8ft0k).ant-menu-inline >.ant-menu-item,:where(.css-d8ft0k).ant-menu-vertical >.ant-menu-item,:where(.css-d8ft0k).ant-menu-inline >.ant-menu-submenu>.ant-menu-submenu-title,:where(.css-d8ft0k).ant-menu-vertical >.ant-menu-submenu>.ant-menu-submenu-title{height:40px;line-height:40px;}:where(.css-d8ft0k).ant-menu-inline .ant-menu-item-group-list .ant-menu-submenu-title,:where(.css-d8ft0k).ant-menu-vertical .ant-menu-item-group-list .ant-menu-submenu-title,:where(.css-d8ft0k).ant-menu-inline .ant-menu-submenu-title,:where(.css-d8ft0k).ant-menu-vertical .ant-menu-submenu-title{padding-inline-end:34px;}:where(.css-d8ft0k).ant-menu-submenu-popup .ant-menu-vertical{box-shadow:0 6px 16px 0 rgba(0, 0, 0, 0.08),0 3px 6px -4px rgba(0, 0, 0, 0.12),0 9px 28px 8px rgba(0, 0, 0, 0.05);}:where(.css-d8ft0k).ant-menu-submenu-popup .ant-menu-vertical .ant-menu-item{position:relative;}:where(.css-d8ft0k).ant-menu-submenu-popup .ant-menu-vertical .ant-menu-item,:where(.css-d8ft0k).ant-menu-submenu-popup .ant-menu-vertical .ant-menu-submenu-title{height:40px;line-height:40px;padding-inline:16px;overflow:hidden;text-overflow:ellipsis;margin-inline:4px;margin-block:4px;width:calc(100% - 8px);}:where(.css-d8ft0k).ant-menu-submenu-popup .ant-menu-vertical .ant-menu-submenu{padding-bottom:0.02px;}:where(.css-d8ft0k).ant-menu-submenu-popup .ant-menu-vertical >.ant-menu-item,:where(.css-d8ft0k).ant-menu-submenu-popup .ant-menu-vertical >.ant-menu-submenu>.ant-menu-submenu-title{height:40px;line-height:40px;}:where(.css-d8ft0k).ant-menu-submenu-popup .ant-menu-vertical .ant-menu-item-group-list .ant-menu-submenu-title,:where(.css-d8ft0k).ant-menu-submenu-popup .ant-menu-vertical .ant-menu-submenu-title{padding-inline-end:34px;}:where(.css-d8ft0k).ant-menu-submenu-popup .ant-menu-vertical.ant-menu-sub{min-width:160px;max-height:calc(100vh - 100px);padding:0;overflow:hidden;border-inline-end:0;}:where(.css-d8ft0k).ant-menu-submenu-popup .ant-menu-vertical.ant-menu-sub:not([class*='-active']){overflow-x:hidden;overflow-y:auto;}:where(.css-d8ft0k).ant-menu-inline{width:100%;}:where(.css-d8ft0k).ant-menu-inline.ant-menu-root .ant-menu-item,:where(.css-d8ft0k).ant-menu-inline.ant-menu-root .ant-menu-submenu-title{display:flex;align-items:center;transition:border-color 0.3s,background 0.3s,padding 0.2s cubic-bezier(0.215, 0.61, 0.355, 1);}:where(.css-d8ft0k).ant-menu-inline.ant-menu-root .ant-menu-item >.ant-menu-title-content,:where(.css-d8ft0k).ant-menu-inline.ant-menu-root .ant-menu-submenu-title >.ant-menu-title-content{flex:auto;min-width:0;overflow:hidden;text-overflow:ellipsis;}:where(.css-d8ft0k).ant-menu-inline.ant-menu-root .ant-menu-item >*,:where(.css-d8ft0k).ant-menu-inline.ant-menu-root .ant-menu-submenu-title >*{flex:none;}:where(.css-d8ft0k).ant-menu-inline .ant-menu-sub.ant-menu-inline{padding:0;border:0;border-radius:0;box-shadow:none;}:where(.css-d8ft0k).ant-menu-inline .ant-menu-sub.ant-menu-inline>.ant-menu-submenu>.ant-menu-submenu-title{height:40px;line-height:40px;list-style-position:inside;list-style-type:disc;}:where(.css-d8ft0k).ant-menu-inline .ant-menu-sub.ant-menu-inline .ant-menu-item-group-title{padding-inline-start:32px;}:where(.css-d8ft0k).ant-menu-inline .ant-menu-item{height:40px;line-height:40px;list-style-position:inside;list-style-type:disc;}:where(.css-d8ft0k).ant-menu-inline-collapsed{width:80px;}:where(.css-d8ft0k).ant-menu-inline-collapsed.ant-menu-root .ant-menu-item >.ant-menu-inline-collapsed-noicon,:where(.css-d8ft0k).ant-menu-inline-collapsed.ant-menu-root .ant-menu-submenu .ant-menu-submenu-title >.ant-menu-inline-collapsed-noicon{font-size:16px;text-align:center;}:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-item,:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-item-group>.ant-menu-item-group-list>.ant-menu-item,:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-item-group>.ant-menu-item-group-list>.ant-menu-submenu>.ant-menu-submenu-title,:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-submenu>.ant-menu-submenu-title{inset-inline-start:0;padding-inline:calc(50% - 12px);text-overflow:clip;}:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-item .ant-menu-submenu-arrow,:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-item-group>.ant-menu-item-group-list>.ant-menu-item .ant-menu-submenu-arrow,:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-item-group>.ant-menu-item-group-list>.ant-menu-submenu>.ant-menu-submenu-title .ant-menu-submenu-arrow,:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-submenu>.ant-menu-submenu-title .ant-menu-submenu-arrow,:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-item .ant-menu-submenu-expand-icon,:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-item-group>.ant-menu-item-group-list>.ant-menu-item .ant-menu-submenu-expand-icon,:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-item-group>.ant-menu-item-group-list>.ant-menu-submenu>.ant-menu-submenu-title .ant-menu-submenu-expand-icon,:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-submenu>.ant-menu-submenu-title .ant-menu-submenu-expand-icon{opacity:0;}:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-item .ant-menu-item-icon,:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-item-group>.ant-menu-item-group-list>.ant-menu-item .ant-menu-item-icon,:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-item-group>.ant-menu-item-group-list>.ant-menu-submenu>.ant-menu-submenu-title .ant-menu-item-icon,:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-submenu>.ant-menu-submenu-title .ant-menu-item-icon,:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-item .anticon,:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-item-group>.ant-menu-item-group-list>.ant-menu-item .anticon,:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-item-group>.ant-menu-item-group-list>.ant-menu-submenu>.ant-menu-submenu-title .anticon,:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-submenu>.ant-menu-submenu-title .anticon{margin:0;font-size:16px;line-height:40px;}:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-item .ant-menu-item-icon +span,:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-item-group>.ant-menu-item-group-list>.ant-menu-item .ant-menu-item-icon +span,:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-item-group>.ant-menu-item-group-list>.ant-menu-submenu>.ant-menu-submenu-title .ant-menu-item-icon +span,:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-submenu>.ant-menu-submenu-title .ant-menu-item-icon +span,:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-item .anticon +span,:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-item-group>.ant-menu-item-group-list>.ant-menu-item .anticon +span,:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-item-group>.ant-menu-item-group-list>.ant-menu-submenu>.ant-menu-submenu-title .anticon +span,:where(.css-d8ft0k).ant-menu-inline-collapsed >.ant-menu-submenu>.ant-menu-submenu-title .anticon +span{display:inline-block;opacity:0;}:where(.css-d8ft0k).ant-menu-inline-collapsed .ant-menu-item-icon,:where(.css-d8ft0k).ant-menu-inline-collapsed .anticon{display:inline-block;}:where(.css-d8ft0k).ant-menu-inline-collapsed-tooltip{pointer-events:none;}:where(.css-d8ft0k).ant-menu-inline-collapsed-tooltip .ant-menu-item-icon,:where(.css-d8ft0k).ant-menu-inline-collapsed-tooltip .anticon{display:none;}:where(.css-d8ft0k).ant-menu-inline-collapsed-tooltip a,:where(.css-d8ft0k).ant-menu-inline-collapsed-tooltip a:hover{color:#fff;}:where(.css-d8ft0k).ant-menu-inline-collapsed .ant-menu-item-group-title{overflow:hidden;white-space:nowrap;text-overflow:ellipsis;padding-inline:8px;}:where(.css-d8ft0k).ant-menu-light{color:rgba(0, 0, 0, 0.65);background:transparent;}:where(.css-d8ft0k).ant-menu-light.ant-menu-root:focus-visible{outline:4px solid #91caff;outline-offset:1px;transition:outline-offset 0s,outline 0s;}:where(.css-d8ft0k).ant-menu-light .ant-menu-item-group-title{color:rgba(0, 0, 0, 0.45);}:where(.css-d8ft0k).ant-menu-light .ant-menu-submenu-selected >.ant-menu-submenu-title{color:rgba(0, 0, 0, 0.95);}:where(.css-d8ft0k).ant-menu-light .ant-menu-item-disabled,:where(.css-d8ft0k).ant-menu-light .ant-menu-submenu-disabled{color:rgba(0, 0, 0, 0.25)!important;}:where(.css-d8ft0k).ant-menu-light .ant-menu-item:hover:not(.ant-menu-item-selected):not(.ant-menu-submenu-selected),:where(.css-d8ft0k).ant-menu-light .ant-menu-submenu-title:hover:not(.ant-menu-item-selected):not(.ant-menu-submenu-selected){color:rgba(0, 0, 0, 0.88);}:where(.css-d8ft0k).ant-menu-light:not(.ant-menu-horizontal) .ant-menu-item:not(.ant-menu-item-selected):hover{background-color:rgba(0, 0, 0, 0.06);}:where(.css-d8ft0k).ant-menu-light:not(.ant-menu-horizontal) .ant-menu-item:not(.ant-menu-item-selected):active{background-color:rgba(0, 0, 0, 0.04);}:where(.css-d8ft0k).ant-menu-light:not(.ant-menu-horizontal) .ant-menu-submenu-title:hover{background-color:rgba(0, 0, 0, 0.06);}:where(.css-d8ft0k).ant-menu-light:not(.ant-menu-horizontal) .ant-menu-submenu-title:active{background-color:rgba(0, 0, 0, 0.04);}:where(.css-d8ft0k).ant-menu-light .ant-menu-item-danger{color:#ff4d4f;}:where(.css-d8ft0k).ant-menu-light .ant-menu-item-danger.ant-menu-item:hover:not(.ant-menu-item-selected):not(.ant-menu-submenu-selected){color:#ff4d4f;}:where(.css-d8ft0k).ant-menu-light .ant-menu-item-danger.ant-menu-item:active{background:#fff2f0;}:where(.css-d8ft0k).ant-menu-light .ant-menu-item a,:where(.css-d8ft0k).ant-menu-light .ant-menu-item a:hover{color:inherit;}:where(.css-d8ft0k).ant-menu-light .ant-menu-item-selected{color:rgba(0, 0, 0, 0.95);}:where(.css-d8ft0k).ant-menu-light .ant-menu-item-selected.ant-menu-item-danger{color:#ff4d4f;}:where(.css-d8ft0k).ant-menu-light .ant-menu-item-selected a,:where(.css-d8ft0k).ant-menu-light .ant-menu-item-selected a:hover{color:inherit;}:where(.css-d8ft0k).ant-menu-light .ant-menu-item-selected{background-color:rgba(0, 0, 0, 0.04);}:where(.css-d8ft0k).ant-menu-light .ant-menu-item-selected.ant-menu-item-danger{background-color:#fff2f0;}:where(.css-d8ft0k).ant-menu-light .ant-menu-item:not(.ant-menu-item-disabled):focus-visible,:where(.css-d8ft0k).ant-menu-light .ant-menu-submenu-title:not(.ant-menu-item-disabled):focus-visible{outline:4px solid #91caff;outline-offset:1px;transition:outline-offset 0s,outline 0s;}:where(.css-d8ft0k).ant-menu-light.ant-menu-submenu>.ant-menu{background-color:#ffffff;}:where(.css-d8ft0k).ant-menu-light.ant-menu-popup>.ant-menu{background-color:transparent;}:where(.css-d8ft0k).ant-menu-light.ant-menu-horizontal >.ant-menu-item,:where(.css-d8ft0k).ant-menu-light.ant-menu-horizontal >.ant-menu-submenu{top:0;margin-top:0;margin-bottom:0;border-radius:0;}:where(.css-d8ft0k).ant-menu-light.ant-menu-horizontal >.ant-menu-item::after,:where(.css-d8ft0k).ant-menu-light.ant-menu-horizontal >.ant-menu-submenu::after{position:absolute;inset-inline:16px;bottom:0;border-bottom:0px solid transparent;transition:border-color 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);content:"";}:where(.css-d8ft0k).ant-menu-light.ant-menu-horizontal >.ant-menu-item:hover::after,:where(.css-d8ft0k).ant-menu-light.ant-menu-horizontal >.ant-menu-submenu:hover::after,:where(.css-d8ft0k).ant-menu-light.ant-menu-horizontal >.ant-menu-item-active::after,:where(.css-d8ft0k).ant-menu-light.ant-menu-horizontal >.ant-menu-submenu-active::after,:where(.css-d8ft0k).ant-menu-light.ant-menu-horizontal >.ant-menu-item-open::after,:where(.css-d8ft0k).ant-menu-light.ant-menu-horizontal >.ant-menu-submenu-open::after{border-bottom-width:0;border-bottom-color:#1677ff;}:where(.css-d8ft0k).ant-menu-light.ant-menu-horizontal >.ant-menu-item-selected,:where(.css-d8ft0k).ant-menu-light.ant-menu-horizontal >.ant-menu-submenu-selected{color:#1677ff;background-color:transparent;}:where(.css-d8ft0k).ant-menu-light.ant-menu-horizontal >.ant-menu-item-selected::after,:where(.css-d8ft0k).ant-menu-light.ant-menu-horizontal >.ant-menu-submenu-selected::after{border-bottom-width:0;border-bottom-color:#1677ff;}:where(.css-d8ft0k).ant-menu-light.ant-menu-root.ant-menu-inline,:where(.css-d8ft0k).ant-menu-light.ant-menu-root.ant-menu-vertical{border-inline-end:0px solid rgba(5, 5, 5, 0.06);}:where(.css-d8ft0k).ant-menu-light.ant-menu-inline .ant-menu-sub.ant-menu-inline{background:transparent;}:where(.css-d8ft0k).ant-menu-light.ant-menu-inline .ant-menu-item{position:relative;}:where(.css-d8ft0k).ant-menu-light.ant-menu-inline .ant-menu-item::after{position:absolute;inset-block:0;inset-inline-end:0;border-inline-end:0px solid rgba(0, 0, 0, 0.95);transform:scaleY(0.0001);opacity:0;transition:transform 0.2s cubic-bezier(0.215, 0.61, 0.355, 1),opacity 0.2s cubic-bezier(0.215, 0.61, 0.355, 1);content:"";}:where(.css-d8ft0k).ant-menu-light.ant-menu-inline .ant-menu-item.ant-menu-item-danger::after{border-inline-end-color:#ff4d4f;}:where(.css-d8ft0k).ant-menu-light.ant-menu-inline .ant-menu-selected::after,:where(.css-d8ft0k).ant-menu-light.ant-menu-inline .ant-menu-item-selected::after{transform:scaleY(1);opacity:1;transition:transform 0.2s cubic-bezier(0.645, 0.045, 0.355, 1),opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);}:where(.css-d8ft0k).ant-menu-dark{color:rgba(0, 0, 0, 0.65);background:transparent;}:where(.css-d8ft0k).ant-menu-dark.ant-menu-root:focus-visible{outline:4px solid #91caff;outline-offset:1px;transition:outline-offset 0s,outline 0s;}:where(.css-d8ft0k).ant-menu-dark .ant-menu-item-group-title{color:rgba(255, 255, 255, 0.65);}:where(.css-d8ft0k).ant-menu-dark .ant-menu-submenu-selected >.ant-menu-submenu-title{color:rgba(0, 0, 0, 0.95);}:where(.css-d8ft0k).ant-menu-dark .ant-menu-item-disabled,:where(.css-d8ft0k).ant-menu-dark .ant-menu-submenu-disabled{color:rgba(255, 255, 255, 0.25)!important;}:where(.css-d8ft0k).ant-menu-dark .ant-menu-item:hover:not(.ant-menu-item-selected):not(.ant-menu-submenu-selected),:where(.css-d8ft0k).ant-menu-dark .ant-menu-submenu-title:hover:not(.ant-menu-item-selected):not(.ant-menu-submenu-selected){color:rgba(0, 0, 0, 0.88);}:where(.css-d8ft0k).ant-menu-dark:not(.ant-menu-horizontal) .ant-menu-item:not(.ant-menu-item-selected):hover{background-color:rgba(0, 0, 0, 0.06);}:where(.css-d8ft0k).ant-menu-dark:not(.ant-menu-horizontal) .ant-menu-item:not(.ant-menu-item-selected):active{background-color:rgba(0, 0, 0, 0.04);}:where(.css-d8ft0k).ant-menu-dark:not(.ant-menu-horizontal) .ant-menu-submenu-title:hover{background-color:rgba(0, 0, 0, 0.06);}:where(.css-d8ft0k).ant-menu-dark:not(.ant-menu-horizontal) .ant-menu-submenu-title:active{background-color:rgba(0, 0, 0, 0.04);}:where(.css-d8ft0k).ant-menu-dark .ant-menu-item-danger{color:#ff4d4f;}:where(.css-d8ft0k).ant-menu-dark .ant-menu-item-danger.ant-menu-item:hover:not(.ant-menu-item-selected):not(.ant-menu-submenu-selected){color:#ff7875;}:where(.css-d8ft0k).ant-menu-dark .ant-menu-item-danger.ant-menu-item:active{background:#ff4d4f;}:where(.css-d8ft0k).ant-menu-dark .ant-menu-item a,:where(.css-d8ft0k).ant-menu-dark .ant-menu-item a:hover{color:inherit;}:where(.css-d8ft0k).ant-menu-dark .ant-menu-item-selected{color:rgba(0, 0, 0, 0.95);}:where(.css-d8ft0k).ant-menu-dark .ant-menu-item-selected.ant-menu-item-danger{color:#fff;}:where(.css-d8ft0k).ant-menu-dark .ant-menu-item-selected a,:where(.css-d8ft0k).ant-menu-dark .ant-menu-item-selected a:hover{color:inherit;}:where(.css-d8ft0k).ant-menu-dark .ant-menu-item-selected{background-color:rgba(0, 0, 0, 0.04);}:where(.css-d8ft0k).ant-menu-dark .ant-menu-item-selected.ant-menu-item-danger{background-color:#ff4d4f;}:where(.css-d8ft0k).ant-menu-dark .ant-menu-item:not(.ant-menu-item-disabled):focus-visible,:where(.css-d8ft0k).ant-menu-dark .ant-menu-submenu-title:not(.ant-menu-item-disabled):focus-visible{outline:4px solid #91caff;outline-offset:1px;transition:outline-offset 0s,outline 0s;}:where(.css-d8ft0k).ant-menu-dark.ant-menu-submenu>.ant-menu{background-color:#001529;}:where(.css-d8ft0k).ant-menu-dark.ant-menu-popup>.ant-menu{background-color:transparent;}:where(.css-d8ft0k).ant-menu-dark.ant-menu-horizontal{border-bottom:0;}:where(.css-d8ft0k).ant-menu-dark.ant-menu-horizontal >.ant-menu-item,:where(.css-d8ft0k).ant-menu-dark.ant-menu-horizontal >.ant-menu-submenu{top:0;margin-top:0;margin-bottom:0;border-radius:0;}:where(.css-d8ft0k).ant-menu-dark.ant-menu-horizontal >.ant-menu-item::after,:where(.css-d8ft0k).ant-menu-dark.ant-menu-horizontal >.ant-menu-submenu::after{position:absolute;inset-inline:16px;bottom:0;border-bottom:0px solid transparent;transition:border-color 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);content:"";}:where(.css-d8ft0k).ant-menu-dark.ant-menu-horizontal >.ant-menu-item:hover::after,:where(.css-d8ft0k).ant-menu-dark.ant-menu-horizontal >.ant-menu-submenu:hover::after,:where(.css-d8ft0k).ant-menu-dark.ant-menu-horizontal >.ant-menu-item-active::after,:where(.css-d8ft0k).ant-menu-dark.ant-menu-horizontal >.ant-menu-submenu-active::after,:where(.css-d8ft0k).ant-menu-dark.ant-menu-horizontal >.ant-menu-item-open::after,:where(.css-d8ft0k).ant-menu-dark.ant-menu-horizontal >.ant-menu-submenu-open::after{border-bottom-width:0;border-bottom-color:#fff;}:where(.css-d8ft0k).ant-menu-dark.ant-menu-horizontal >.ant-menu-item-selected,:where(.css-d8ft0k).ant-menu-dark.ant-menu-horizontal >.ant-menu-submenu-selected{color:#fff;background-color:#1677ff;}:where(.css-d8ft0k).ant-menu-dark.ant-menu-horizontal >.ant-menu-item-selected::after,:where(.css-d8ft0k).ant-menu-dark.ant-menu-horizontal >.ant-menu-submenu-selected::after{border-bottom-width:0;border-bottom-color:#fff;}:where(.css-d8ft0k).ant-menu-dark.ant-menu-root.ant-menu-inline,:where(.css-d8ft0k).ant-menu-dark.ant-menu-root.ant-menu-vertical{border-inline-end:0px solid rgba(5, 5, 5, 0.06);}:where(.css-d8ft0k).ant-menu-dark.ant-menu-inline .ant-menu-sub.ant-menu-inline{background:transparent;}:where(.css-d8ft0k).ant-menu-dark.ant-menu-inline .ant-menu-item{position:relative;}:where(.css-d8ft0k).ant-menu-dark.ant-menu-inline .ant-menu-item::after{position:absolute;inset-block:0;inset-inline-end:0;border-inline-end:0px solid rgba(0, 0, 0, 0.95);transform:scaleY(0.0001);opacity:0;transition:transform 0.2s cubic-bezier(0.215, 0.61, 0.355, 1),opacity 0.2s cubic-bezier(0.215, 0.61, 0.355, 1);content:"";}:where(.css-d8ft0k).ant-menu-dark.ant-menu-inline .ant-menu-item.ant-menu-item-danger::after{border-inline-end-color:#fff;}:where(.css-d8ft0k).ant-menu-dark.ant-menu-inline .ant-menu-selected::after,:where(.css-d8ft0k).ant-menu-dark.ant-menu-inline .ant-menu-item-selected::after{transform:scaleY(1);opacity:1;transition:transform 0.2s cubic-bezier(0.645, 0.045, 0.355, 1),opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);}:where(.css-d8ft0k).ant-menu-rtl{direction:rtl;}:where(.css-d8ft0k).ant-menu-submenu-rtl{transform-origin:100% 0;}:where(.css-d8ft0k).ant-menu-rtl.ant-menu-vertical .ant-menu-submenu-arrow::before,:where(.css-d8ft0k).ant-menu-submenu-rtl .ant-menu-vertical .ant-menu-submenu-arrow::before{transform:rotate(-45deg) translateY(-2.5px);}:where(.css-d8ft0k).ant-menu-rtl.ant-menu-vertical .ant-menu-submenu-arrow::after,:where(.css-d8ft0k).ant-menu-submenu-rtl .ant-menu-vertical .ant-menu-submenu-arrow::after{transform:rotate(45deg) translateY(2.5px);}:where(.css-d8ft0k).ant-menu .ant-motion-collapse-legacy{overflow:hidden;}:where(.css-d8ft0k).ant-menu .ant-motion-collapse-legacy-active{transition:height 0.2s cubic-bezier(0.645, 0.045, 0.355, 1),opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1)!important;}:where(.css-d8ft0k).ant-menu .ant-motion-collapse{overflow:hidden;transition:height 0.2s cubic-bezier(0.645, 0.045, 0.355, 1),opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1)!important;}:where(.css-d8ft0k).ant-slide-up-enter,:where(.css-d8ft0k).ant-slide-up-appear{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}:where(.css-d8ft0k).ant-slide-up-leave{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}:where(.css-d8ft0k).ant-slide-up-enter.ant-slide-up-enter-active,:where(.css-d8ft0k).ant-slide-up-appear.ant-slide-up-appear-active{animation-name:css-d8ft0k-antSlideUpIn;animation-play-state:running;}:where(.css-d8ft0k).ant-slide-up-leave.ant-slide-up-leave-active{animation-name:css-d8ft0k-antSlideUpOut;animation-play-state:running;pointer-events:none;}:where(.css-d8ft0k).ant-slide-up-enter,:where(.css-d8ft0k).ant-slide-up-appear{opacity:0;animation-timing-function:cubic-bezier(0.23, 1, 0.32, 1);}:where(.css-d8ft0k).ant-slide-up-leave{animation-timing-function:cubic-bezier(0.645, 0.045, 0.355, 1);}:where(.css-d8ft0k).ant-slide-down-enter,:where(.css-d8ft0k).ant-slide-down-appear{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}:where(.css-d8ft0k).ant-slide-down-leave{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}:where(.css-d8ft0k).ant-slide-down-enter.ant-slide-down-enter-active,:where(.css-d8ft0k).ant-slide-down-appear.ant-slide-down-appear-active{animation-name:css-d8ft0k-antSlideDownIn;animation-play-state:running;}:where(.css-d8ft0k).ant-slide-down-leave.ant-slide-down-leave-active{animation-name:css-d8ft0k-antSlideDownOut;animation-play-state:running;pointer-events:none;}:where(.css-d8ft0k).ant-slide-down-enter,:where(.css-d8ft0k).ant-slide-down-appear{opacity:0;animation-timing-function:cubic-bezier(0.23, 1, 0.32, 1);}:where(.css-d8ft0k).ant-slide-down-leave{animation-timing-function:cubic-bezier(0.645, 0.045, 0.355, 1);}:where(.css-d8ft0k).ant-zoom-big-enter,:where(.css-d8ft0k).ant-zoom-big-appear{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}:where(.css-d8ft0k).ant-zoom-big-leave{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}:where(.css-d8ft0k).ant-zoom-big-enter.ant-zoom-big-enter-active,:where(.css-d8ft0k).ant-zoom-big-appear.ant-zoom-big-appear-active{animation-name:css-d8ft0k-antZoomBigIn;animation-play-state:running;}:where(.css-d8ft0k).ant-zoom-big-leave.ant-zoom-big-leave-active{animation-name:css-d8ft0k-antZoomBigOut;animation-play-state:running;pointer-events:none;}:where(.css-d8ft0k).ant-zoom-big-enter,:where(.css-d8ft0k).ant-zoom-big-appear{transform:scale(0);opacity:0;animation-timing-function:cubic-bezier(0.08, 0.82, 0.17, 1);}:where(.css-d8ft0k).ant-zoom-big-enter-prepare,:where(.css-d8ft0k).ant-zoom-big-appear-prepare{transform:none;}:where(.css-d8ft0k).ant-zoom-big-leave{animation-timing-function:cubic-bezier(0.78, 0.14, 0.15, 0.86);}</style><style data-rc-order="prependQueue" data-css-hash="_effect-css-d8ft0k-antSlideUpIn">@keyframes css-d8ft0k-antSlideUpIn{0%{transform:scaleY(0.8);transform-origin:0% 0%;opacity:0;}100%{transform:scaleY(1);transform-origin:0% 0%;opacity:1;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-css-d8ft0k-antSlideUpOut">@keyframes css-d8ft0k-antSlideUpOut{0%{transform:scaleY(1);transform-origin:0% 0%;opacity:1;}100%{transform:scaleY(0.8);transform-origin:0% 0%;opacity:0;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-css-d8ft0k-antSlideDownIn">@keyframes css-d8ft0k-antSlideDownIn{0%{transform:scaleY(0.8);transform-origin:100% 100%;opacity:0;}100%{transform:scaleY(1);transform-origin:100% 100%;opacity:1;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-css-d8ft0k-antSlideDownOut">@keyframes css-d8ft0k-antSlideDownOut{0%{transform:scaleY(1);transform-origin:100% 100%;opacity:1;}100%{transform:scaleY(0.8);transform-origin:100% 100%;opacity:0;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-css-d8ft0k-antZoomBigIn">@keyframes css-d8ft0k-antZoomBigIn{0%{transform:scale(0.8);opacity:0;}100%{transform:scale(1);opacity:1;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-css-d8ft0k-antZoomBigOut">@keyframes css-d8ft0k-antZoomBigOut{0%{transform:scale(1);}100%{transform:scale(0.8);opacity:0;}}</style><style data-rc-order="prependQueue" data-css-hash="1n9j0e7" data-token-hash="1jebxg8">:where(.css-d8ft0k)[class^="ant-tooltip"],:where(.css-d8ft0k)[class*=" ant-tooltip"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-tooltip"]::before,:where(.css-d8ft0k)[class*=" ant-tooltip"]::before,:where(.css-d8ft0k)[class^="ant-tooltip"]::after,:where(.css-d8ft0k)[class*=" ant-tooltip"]::after{box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-tooltip"] [class^="ant-tooltip"],:where(.css-d8ft0k)[class*=" ant-tooltip"] [class^="ant-tooltip"],:where(.css-d8ft0k)[class^="ant-tooltip"] [class*=" ant-tooltip"],:where(.css-d8ft0k)[class*=" ant-tooltip"] [class*=" ant-tooltip"]{box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-tooltip"] [class^="ant-tooltip"]::before,:where(.css-d8ft0k)[class*=" ant-tooltip"] [class^="ant-tooltip"]::before,:where(.css-d8ft0k)[class^="ant-tooltip"] [class*=" ant-tooltip"]::before,:where(.css-d8ft0k)[class*=" ant-tooltip"] [class*=" ant-tooltip"]::before,:where(.css-d8ft0k)[class^="ant-tooltip"] [class^="ant-tooltip"]::after,:where(.css-d8ft0k)[class*=" ant-tooltip"] [class^="ant-tooltip"]::after,:where(.css-d8ft0k)[class^="ant-tooltip"] [class*=" ant-tooltip"]::after,:where(.css-d8ft0k)[class*=" ant-tooltip"] [class*=" ant-tooltip"]::after{box-sizing:border-box;}:where(.css-d8ft0k).ant-tooltip{box-sizing:border-box;margin:0;padding:0;color:rgba(0, 0, 0, 0.88);font-size:14px;line-height:1.5714285714285714;list-style:none;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';position:absolute;z-index:1070;display:block;max-width:250px;visibility:visible;--antd-arrow-background-color:rgba(0, 0, 0, 0.85);}:where(.css-d8ft0k).ant-tooltip{width:max-content;width:intrinsic;}:where(.css-d8ft0k).ant-tooltip-hidden{display:none;}:where(.css-d8ft0k).ant-tooltip .ant-tooltip-inner{min-width:32px;min-height:32px;padding:6px 8px;color:#fff;text-align:start;text-decoration:none;word-wrap:break-word;background-color:rgba(0, 0, 0, 0.85);border-radius:6px;box-shadow:0 6px 16px 0 rgba(0, 0, 0, 0.08),0 3px 6px -4px rgba(0, 0, 0, 0.12),0 9px 28px 8px rgba(0, 0, 0, 0.05);}:where(.css-d8ft0k).ant-tooltip-placement-left .ant-tooltip-inner,:where(.css-d8ft0k).ant-tooltip-placement-leftTop .ant-tooltip-inner,:where(.css-d8ft0k).ant-tooltip-placement-leftBottom .ant-tooltip-inner,:where(.css-d8ft0k).ant-tooltip-placement-right .ant-tooltip-inner,:where(.css-d8ft0k).ant-tooltip-placement-rightTop .ant-tooltip-inner,:where(.css-d8ft0k).ant-tooltip-placement-rightBottom .ant-tooltip-inner{border-radius:6px;}:where(.css-d8ft0k).ant-tooltip .ant-tooltip-content{position:relative;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-blue .ant-tooltip-inner{background-color:#1677ff;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-blue .ant-tooltip-arrow{--antd-arrow-background-color:#1677ff;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-purple .ant-tooltip-inner{background-color:#722ed1;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-purple .ant-tooltip-arrow{--antd-arrow-background-color:#722ed1;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-cyan .ant-tooltip-inner{background-color:#13c2c2;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-cyan .ant-tooltip-arrow{--antd-arrow-background-color:#13c2c2;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-green .ant-tooltip-inner{background-color:#52c41a;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-green .ant-tooltip-arrow{--antd-arrow-background-color:#52c41a;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-magenta .ant-tooltip-inner{background-color:#eb2f96;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-magenta .ant-tooltip-arrow{--antd-arrow-background-color:#eb2f96;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-pink .ant-tooltip-inner{background-color:#eb2f96;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-pink .ant-tooltip-arrow{--antd-arrow-background-color:#eb2f96;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-red .ant-tooltip-inner{background-color:#f5222d;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-red .ant-tooltip-arrow{--antd-arrow-background-color:#f5222d;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-orange .ant-tooltip-inner{background-color:#fa8c16;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-orange .ant-tooltip-arrow{--antd-arrow-background-color:#fa8c16;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-yellow .ant-tooltip-inner{background-color:#fadb14;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-yellow .ant-tooltip-arrow{--antd-arrow-background-color:#fadb14;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-volcano .ant-tooltip-inner{background-color:#fa541c;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-volcano .ant-tooltip-arrow{--antd-arrow-background-color:#fa541c;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-geekblue .ant-tooltip-inner{background-color:#2f54eb;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-geekblue .ant-tooltip-arrow{--antd-arrow-background-color:#2f54eb;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-lime .ant-tooltip-inner{background-color:#a0d911;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-lime .ant-tooltip-arrow{--antd-arrow-background-color:#a0d911;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-gold .ant-tooltip-inner{background-color:#faad14;}:where(.css-d8ft0k).ant-tooltip.ant-tooltip-gold .ant-tooltip-arrow{--antd-arrow-background-color:#faad14;}:where(.css-d8ft0k).ant-tooltip-rtl{direction:rtl;}:where(.css-d8ft0k).ant-tooltip .ant-tooltip-arrow{position:absolute;z-index:1;display:block;border-radius:0 0 2px;pointer-events:none;width:32px;height:32px;overflow:hidden;}:where(.css-d8ft0k).ant-tooltip .ant-tooltip-arrow::after{content:"";position:absolute;width:11.31370849898476px;height:11.31370849898476px;bottom:0;inset-inline:0;margin:auto;border-radius:0 0 2px 0;transform:translateY(50%) rotate(-135deg);box-shadow:3px 3px 7px rgba(0, 0, 0, 0.1);z-index:0;background:transparent;}:where(.css-d8ft0k).ant-tooltip .ant-tooltip-arrow::before{position:absolute;bottom:0;inset-inline-start:0;width:32px;height:8px;background:var(--antd-arrow-background-color);clip-path:path('M 6.343145750507619 8 A 4 4 0 0 0 9.17157287525381 6.82842712474619 L 14.585786437626904 1.414213562373095 A 2 2 0 0 1 17.414213562373096 1.414213562373095 L 22.82842712474619 6.82842712474619 A 4 4 0 0 0 25.65685424949238 8 Z');content:"";}:where(.css-d8ft0k).ant-tooltip .ant-tooltip-arrow:before{background:var(--antd-arrow-background-color);}:where(.css-d8ft0k).ant-tooltip-placement-top .ant-tooltip-arrow,:where(.css-d8ft0k).ant-tooltip-placement-topLeft .ant-tooltip-arrow,:where(.css-d8ft0k).ant-tooltip-placement-topRight .ant-tooltip-arrow{bottom:0;transform:translateY(100%) rotate(180deg);}:where(.css-d8ft0k).ant-tooltip-placement-top .ant-tooltip-arrow{left:50%;transform:translateX(-50%) translateY(100%) rotate(180deg);}:where(.css-d8ft0k).ant-tooltip-placement-topLeft .ant-tooltip-arrow{left:6px;}:where(.css-d8ft0k).ant-tooltip-placement-topRight .ant-tooltip-arrow{right:6px;}:where(.css-d8ft0k).ant-tooltip-placement-bottom .ant-tooltip-arrow,:where(.css-d8ft0k).ant-tooltip-placement-bottomLeft .ant-tooltip-arrow,:where(.css-d8ft0k).ant-tooltip-placement-bottomRight .ant-tooltip-arrow{top:0;transform:translateY(-100%);}:where(.css-d8ft0k).ant-tooltip-placement-bottom .ant-tooltip-arrow{left:50%;transform:translateX(-50%) translateY(-100%);}:where(.css-d8ft0k).ant-tooltip-placement-bottomLeft .ant-tooltip-arrow{left:6px;}:where(.css-d8ft0k).ant-tooltip-placement-bottomRight .ant-tooltip-arrow{right:6px;}:where(.css-d8ft0k).ant-tooltip-placement-left .ant-tooltip-arrow,:where(.css-d8ft0k).ant-tooltip-placement-leftTop .ant-tooltip-arrow,:where(.css-d8ft0k).ant-tooltip-placement-leftBottom .ant-tooltip-arrow{right:0;transform:translateX(100%) rotate(90deg);}:where(.css-d8ft0k).ant-tooltip-placement-left .ant-tooltip-arrow{top:50%;transform:translateY(-50%) translateX(100%) rotate(90deg);}:where(.css-d8ft0k).ant-tooltip-placement-leftTop .ant-tooltip-arrow{top:2px;}:where(.css-d8ft0k).ant-tooltip-placement-leftBottom .ant-tooltip-arrow{bottom:2px;}:where(.css-d8ft0k).ant-tooltip-placement-right .ant-tooltip-arrow,:where(.css-d8ft0k).ant-tooltip-placement-rightTop .ant-tooltip-arrow,:where(.css-d8ft0k).ant-tooltip-placement-rightBottom .ant-tooltip-arrow{left:0;transform:translateX(-100%) rotate(-90deg);}:where(.css-d8ft0k).ant-tooltip-placement-right .ant-tooltip-arrow{top:50%;transform:translateY(-50%) translateX(-100%) rotate(-90deg);}:where(.css-d8ft0k).ant-tooltip-placement-rightTop .ant-tooltip-arrow{top:2px;}:where(.css-d8ft0k).ant-tooltip-placement-rightBottom .ant-tooltip-arrow{bottom:2px;}:where(.css-d8ft0k).ant-tooltip-placement-topLeft,:where(.css-d8ft0k).ant-tooltip-placement-top,:where(.css-d8ft0k).ant-tooltip-placement-topRight{padding-bottom:12px;}:where(.css-d8ft0k).ant-tooltip-placement-bottomLeft,:where(.css-d8ft0k).ant-tooltip-placement-bottom,:where(.css-d8ft0k).ant-tooltip-placement-bottomRight{padding-top:12px;}:where(.css-d8ft0k).ant-tooltip-placement-leftTop,:where(.css-d8ft0k).ant-tooltip-placement-left,:where(.css-d8ft0k).ant-tooltip-placement-leftBottom{padding-right:12px;}:where(.css-d8ft0k).ant-tooltip-placement-rightTop,:where(.css-d8ft0k).ant-tooltip-placement-right,:where(.css-d8ft0k).ant-tooltip-placement-rightBottom{padding-left:12px;}:where(.css-d8ft0k).ant-tooltip-pure{position:relative;max-width:none;}:where(.css-d8ft0k).ant-zoom-big-fast-enter,:where(.css-d8ft0k).ant-zoom-big-fast-appear{animation-duration:0.1s;animation-fill-mode:both;animation-play-state:paused;}:where(.css-d8ft0k).ant-zoom-big-fast-leave{animation-duration:0.1s;animation-fill-mode:both;animation-play-state:paused;}:where(.css-d8ft0k).ant-zoom-big-fast-enter.ant-zoom-big-fast-enter-active,:where(.css-d8ft0k).ant-zoom-big-fast-appear.ant-zoom-big-fast-appear-active{animation-name:css-d8ft0k-antZoomBigIn;animation-play-state:running;}:where(.css-d8ft0k).ant-zoom-big-fast-leave.ant-zoom-big-fast-leave-active{animation-name:css-d8ft0k-antZoomBigOut;animation-play-state:running;pointer-events:none;}:where(.css-d8ft0k).ant-zoom-big-fast-enter,:where(.css-d8ft0k).ant-zoom-big-fast-appear{transform:scale(0);opacity:0;animation-timing-function:cubic-bezier(0.08, 0.82, 0.17, 1);}:where(.css-d8ft0k).ant-zoom-big-fast-enter-prepare,:where(.css-d8ft0k).ant-zoom-big-fast-appear-prepare{transform:none;}:where(.css-d8ft0k).ant-zoom-big-fast-leave{animation-timing-function:cubic-bezier(0.78, 0.14, 0.15, 0.86);}</style><style data-rc-order="prependQueue" data-css-hash="5jr898" data-token-hash="1jebxg8">:where(.css-d8ft0k)[class^="ant-tour"],:where(.css-d8ft0k)[class*=" ant-tour"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-tour"]::before,:where(.css-d8ft0k)[class*=" ant-tour"]::before,:where(.css-d8ft0k)[class^="ant-tour"]::after,:where(.css-d8ft0k)[class*=" ant-tour"]::after{box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-tour"] [class^="ant-tour"],:where(.css-d8ft0k)[class*=" ant-tour"] [class^="ant-tour"],:where(.css-d8ft0k)[class^="ant-tour"] [class*=" ant-tour"],:where(.css-d8ft0k)[class*=" ant-tour"] [class*=" ant-tour"]{box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-tour"] [class^="ant-tour"]::before,:where(.css-d8ft0k)[class*=" ant-tour"] [class^="ant-tour"]::before,:where(.css-d8ft0k)[class^="ant-tour"] [class*=" ant-tour"]::before,:where(.css-d8ft0k)[class*=" ant-tour"] [class*=" ant-tour"]::before,:where(.css-d8ft0k)[class^="ant-tour"] [class^="ant-tour"]::after,:where(.css-d8ft0k)[class*=" ant-tour"] [class^="ant-tour"]::after,:where(.css-d8ft0k)[class^="ant-tour"] [class*=" ant-tour"]::after,:where(.css-d8ft0k)[class*=" ant-tour"] [class*=" ant-tour"]::after{box-sizing:border-box;}:where(.css-d8ft0k).ant-tour{box-sizing:border-box;margin:0;padding:0;color:rgba(0, 0, 0, 0.88);font-size:14px;line-height:1.5714285714285714;list-style:none;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';position:absolute;z-index:1070;display:block;visibility:visible;width:520px;--antd-arrow-background-color:#ffffff;}:where(.css-d8ft0k).ant-tour-pure{max-width:100%;position:relative;}:where(.css-d8ft0k).ant-tour.ant-tour-hidden{display:none;}:where(.css-d8ft0k).ant-tour .ant-tour-content{position:relative;}:where(.css-d8ft0k).ant-tour .ant-tour-inner{text-align:start;text-decoration:none;border-radius:8px;box-shadow:0 1px 2px 0 rgba(0, 0, 0, 0.03),0 1px 6px -1px rgba(0, 0, 0, 0.02),0 2px 4px 0 rgba(0, 0, 0, 0.02);position:relative;background-color:#ffffff;border:none;background-clip:padding-box;}:where(.css-d8ft0k).ant-tour .ant-tour-inner .ant-tour-close{position:absolute;top:16px;inset-inline-end:16px;color:rgba(0, 0, 0, 0.45);outline:none;width:22px;height:22px;border-radius:4px;transition:background-color 0.2s,color 0.2s;display:flex;align-items:center;justify-content:center;}:where(.css-d8ft0k).ant-tour .ant-tour-inner .ant-tour-close:hover{color:rgba(0, 0, 0, 0.88);background-color:rgba(0, 0, 0, 0.06);}:where(.css-d8ft0k).ant-tour .ant-tour-inner .ant-tour-cover{text-align:center;padding:46px 16px 0;}:where(.css-d8ft0k).ant-tour .ant-tour-inner .ant-tour-cover img{width:100%;}:where(.css-d8ft0k).ant-tour .ant-tour-inner .ant-tour-header{padding:16px 16px 8px;}:where(.css-d8ft0k).ant-tour .ant-tour-inner .ant-tour-header .ant-tour-title{line-height:1.5714285714285714;font-size:14px;font-weight:600;}:where(.css-d8ft0k).ant-tour .ant-tour-inner .ant-tour-description{padding:0 16px;line-height:1.5714285714285714;word-wrap:break-word;}:where(.css-d8ft0k).ant-tour .ant-tour-inner .ant-tour-footer{padding:8px 16px 16px;text-align:end;border-radius:0 0 2px 2px;display:flex;justify-content:space-between;}:where(.css-d8ft0k).ant-tour .ant-tour-inner .ant-tour-footer .ant-tour-sliders{display:inline-block;}:where(.css-d8ft0k).ant-tour .ant-tour-inner .ant-tour-footer .ant-tour-sliders .ant-tour-slider{width:6px;height:6px;display:inline-block;border-radius:50%;background:rgba(0, 0, 0, 0.15);margin-inline-end:6px;}:where(.css-d8ft0k).ant-tour .ant-tour-inner .ant-tour-footer .ant-tour-sliders .ant-tour-slider-active{background:#1677ff;}:where(.css-d8ft0k).ant-tour .ant-tour-inner .ant-tour-footer .ant-tour-buttons button{margin-inline-start:8px;}:where(.css-d8ft0k).ant-tour .ant-tour-primary,:where(.css-d8ft0k).ant-tour.ant-tour-primary{--antd-arrow-background-color:#1677ff;}:where(.css-d8ft0k).ant-tour .ant-tour-primary .ant-tour-inner{color:#fff;text-align:start;text-decoration:none;background-color:#1677ff;border-radius:6px;box-shadow:0 1px 2px 0 rgba(0, 0, 0, 0.03),0 1px 6px -1px rgba(0, 0, 0, 0.02),0 2px 4px 0 rgba(0, 0, 0, 0.02);}:where(.css-d8ft0k).ant-tour .ant-tour-primary .ant-tour-inner .ant-tour-close{color:#fff;}:where(.css-d8ft0k).ant-tour .ant-tour-primary .ant-tour-inner .ant-tour-sliders .ant-tour-slider{background:rgba(255, 255, 255, 0.15);}:where(.css-d8ft0k).ant-tour .ant-tour-primary .ant-tour-inner .ant-tour-sliders .ant-tour-slider-active{background:#fff;}:where(.css-d8ft0k).ant-tour .ant-tour-primary .ant-tour-inner .ant-tour-prev-btn{color:#fff;border-color:rgba(255, 255, 255, 0.15);background-color:#1677ff;}:where(.css-d8ft0k).ant-tour .ant-tour-primary .ant-tour-inner .ant-tour-prev-btn:hover{background-color:rgba(255, 255, 255, 0.15);border-color:transparent;}:where(.css-d8ft0k).ant-tour .ant-tour-primary .ant-tour-inner .ant-tour-next-btn{color:#1677ff;border-color:transparent;background:#fff;}:where(.css-d8ft0k).ant-tour .ant-tour-primary .ant-tour-inner .ant-tour-next-btn:hover{background:rgb(240, 240, 240);}:where(.css-d8ft0k).ant-tour-mask .ant-tour-placeholder-animated{transition:all 0.3s;}:where(.css-d8ft0k)-placement-left .ant-tour-inner,:where(.css-d8ft0k)-placement-leftTop .ant-tour-inner,:where(.css-d8ft0k)-placement-leftBottom .ant-tour-inner,:where(.css-d8ft0k)-placement-right .ant-tour-inner,:where(.css-d8ft0k)-placement-rightTop .ant-tour-inner,:where(.css-d8ft0k)-placement-rightBottom .ant-tour-inner{border-radius:8px;}:where(.css-d8ft0k).ant-tour .ant-tour-arrow{position:absolute;z-index:1;display:block;border-radius:0 0 2px;pointer-events:none;width:32px;height:32px;overflow:hidden;}:where(.css-d8ft0k).ant-tour .ant-tour-arrow::after{content:"";position:absolute;width:11.31370849898476px;height:11.31370849898476px;bottom:0;inset-inline:0;margin:auto;border-radius:0 0 2px 0;transform:translateY(50%) rotate(-135deg);box-shadow:3px 3px 7px rgba(0, 0, 0, 0.1);z-index:0;background:transparent;}:where(.css-d8ft0k).ant-tour .ant-tour-arrow::before{position:absolute;bottom:0;inset-inline-start:0;width:32px;height:8px;background:var(--antd-arrow-background-color);clip-path:path('M 6.343145750507619 8 A 4 4 0 0 0 9.17157287525381 6.82842712474619 L 14.585786437626904 1.414213562373095 A 2 2 0 0 1 17.414213562373096 1.414213562373095 L 22.82842712474619 6.82842712474619 A 4 4 0 0 0 25.65685424949238 8 Z');content:"";}:where(.css-d8ft0k).ant-tour .ant-tour-arrow:before{background:var(--antd-arrow-background-color);}:where(.css-d8ft0k).ant-tour-placement-top .ant-tour-arrow,:where(.css-d8ft0k).ant-tour-placement-topLeft .ant-tour-arrow,:where(.css-d8ft0k).ant-tour-placement-topRight .ant-tour-arrow{bottom:0;transform:translateY(100%) rotate(180deg);}:where(.css-d8ft0k).ant-tour-placement-top .ant-tour-arrow{left:50%;transform:translateX(-50%) translateY(100%) rotate(180deg);}:where(.css-d8ft0k).ant-tour-placement-topLeft .ant-tour-arrow{left:6px;}:where(.css-d8ft0k).ant-tour-placement-topRight .ant-tour-arrow{right:6px;}:where(.css-d8ft0k).ant-tour-placement-bottom .ant-tour-arrow,:where(.css-d8ft0k).ant-tour-placement-bottomLeft .ant-tour-arrow,:where(.css-d8ft0k).ant-tour-placement-bottomRight .ant-tour-arrow{top:0;transform:translateY(-100%);}:where(.css-d8ft0k).ant-tour-placement-bottom .ant-tour-arrow{left:50%;transform:translateX(-50%) translateY(-100%);}:where(.css-d8ft0k).ant-tour-placement-bottomLeft .ant-tour-arrow{left:6px;}:where(.css-d8ft0k).ant-tour-placement-bottomRight .ant-tour-arrow{right:6px;}:where(.css-d8ft0k).ant-tour-placement-left .ant-tour-arrow,:where(.css-d8ft0k).ant-tour-placement-leftTop .ant-tour-arrow,:where(.css-d8ft0k).ant-tour-placement-leftBottom .ant-tour-arrow{right:0;transform:translateX(100%) rotate(90deg);}:where(.css-d8ft0k).ant-tour-placement-left .ant-tour-arrow{top:50%;transform:translateY(-50%) translateX(100%) rotate(90deg);}:where(.css-d8ft0k).ant-tour-placement-leftTop .ant-tour-arrow{top:2px;}:where(.css-d8ft0k).ant-tour-placement-leftBottom .ant-tour-arrow{bottom:2px;}:where(.css-d8ft0k).ant-tour-placement-right .ant-tour-arrow,:where(.css-d8ft0k).ant-tour-placement-rightTop .ant-tour-arrow,:where(.css-d8ft0k).ant-tour-placement-rightBottom .ant-tour-arrow{left:0;transform:translateX(-100%) rotate(-90deg);}:where(.css-d8ft0k).ant-tour-placement-right .ant-tour-arrow{top:50%;transform:translateY(-50%) translateX(-100%) rotate(-90deg);}:where(.css-d8ft0k).ant-tour-placement-rightTop .ant-tour-arrow{top:2px;}:where(.css-d8ft0k).ant-tour-placement-rightBottom .ant-tour-arrow{bottom:2px;}:where(.css-d8ft0k).ant-tour-placement-topLeft,:where(.css-d8ft0k).ant-tour-placement-top,:where(.css-d8ft0k).ant-tour-placement-topRight{padding-bottom:12px;}:where(.css-d8ft0k).ant-tour-placement-bottomLeft,:where(.css-d8ft0k).ant-tour-placement-bottom,:where(.css-d8ft0k).ant-tour-placement-bottomRight{padding-top:12px;}:where(.css-d8ft0k).ant-tour-placement-leftTop,:where(.css-d8ft0k).ant-tour-placement-left,:where(.css-d8ft0k).ant-tour-placement-leftBottom{padding-right:12px;}:where(.css-d8ft0k).ant-tour-placement-rightTop,:where(.css-d8ft0k).ant-tour-placement-right,:where(.css-d8ft0k).ant-tour-placement-rightBottom{padding-left:12px;}</style><style data-rc-order="prependQueue" data-css-hash="5kjwxb" data-token-hash="1jebxg8">:where(.css-d8ft0k)[class^="ant-space"],:where(.css-d8ft0k)[class*=" ant-space"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-space"]::before,:where(.css-d8ft0k)[class*=" ant-space"]::before,:where(.css-d8ft0k)[class^="ant-space"]::after,:where(.css-d8ft0k)[class*=" ant-space"]::after{box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-space"] [class^="ant-space"],:where(.css-d8ft0k)[class*=" ant-space"] [class^="ant-space"],:where(.css-d8ft0k)[class^="ant-space"] [class*=" ant-space"],:where(.css-d8ft0k)[class*=" ant-space"] [class*=" ant-space"]{box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-space"] [class^="ant-space"]::before,:where(.css-d8ft0k)[class*=" ant-space"] [class^="ant-space"]::before,:where(.css-d8ft0k)[class^="ant-space"] [class*=" ant-space"]::before,:where(.css-d8ft0k)[class*=" ant-space"] [class*=" ant-space"]::before,:where(.css-d8ft0k)[class^="ant-space"] [class^="ant-space"]::after,:where(.css-d8ft0k)[class*=" ant-space"] [class^="ant-space"]::after,:where(.css-d8ft0k)[class^="ant-space"] [class*=" ant-space"]::after,:where(.css-d8ft0k)[class*=" ant-space"] [class*=" ant-space"]::after{box-sizing:border-box;}:where(.css-d8ft0k).ant-space{display:inline-flex;}:where(.css-d8ft0k).ant-space-rtl{direction:rtl;}:where(.css-d8ft0k).ant-space-vertical{flex-direction:column;}:where(.css-d8ft0k).ant-space-align{flex-direction:column;}:where(.css-d8ft0k).ant-space-align-center{align-items:center;}:where(.css-d8ft0k).ant-space-align-start{align-items:flex-start;}:where(.css-d8ft0k).ant-space-align-end{align-items:flex-end;}:where(.css-d8ft0k).ant-space-align-baseline{align-items:baseline;}:where(.css-d8ft0k).ant-space .ant-space-space-item:empty{display:none;}:where(.css-d8ft0k).ant-space{display:inline-flex;}:where(.css-d8ft0k).ant-space-block{display:flex;width:100%;}:where(.css-d8ft0k).ant-space-vertical{flex-direction:column;}</style><style data-rc-order="prependQueue" data-css-hash="3j98m" data-token-hash="1jebxg8">:where(.css-d8ft0k)[class^="ant-popconfirm"],:where(.css-d8ft0k)[class*=" ant-popconfirm"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-popconfirm"]::before,:where(.css-d8ft0k)[class*=" ant-popconfirm"]::before,:where(.css-d8ft0k)[class^="ant-popconfirm"]::after,:where(.css-d8ft0k)[class*=" ant-popconfirm"]::after{box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-popconfirm"] [class^="ant-popconfirm"],:where(.css-d8ft0k)[class*=" ant-popconfirm"] [class^="ant-popconfirm"],:where(.css-d8ft0k)[class^="ant-popconfirm"] [class*=" ant-popconfirm"],:where(.css-d8ft0k)[class*=" ant-popconfirm"] [class*=" ant-popconfirm"]{box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-popconfirm"] [class^="ant-popconfirm"]::before,:where(.css-d8ft0k)[class*=" ant-popconfirm"] [class^="ant-popconfirm"]::before,:where(.css-d8ft0k)[class^="ant-popconfirm"] [class*=" ant-popconfirm"]::before,:where(.css-d8ft0k)[class*=" ant-popconfirm"] [class*=" ant-popconfirm"]::before,:where(.css-d8ft0k)[class^="ant-popconfirm"] [class^="ant-popconfirm"]::after,:where(.css-d8ft0k)[class*=" ant-popconfirm"] [class^="ant-popconfirm"]::after,:where(.css-d8ft0k)[class^="ant-popconfirm"] [class*=" ant-popconfirm"]::after,:where(.css-d8ft0k)[class*=" ant-popconfirm"] [class*=" ant-popconfirm"]::after{box-sizing:border-box;}:where(.css-d8ft0k).ant-popconfirm{z-index:1060;}:where(.css-d8ft0k).ant-popconfirm .ant-popconfirm-inner-content{color:rgba(0, 0, 0, 0.88);}:where(.css-d8ft0k).ant-popconfirm .ant-popconfirm-message{position:relative;margin-bottom:8px;color:rgba(0, 0, 0, 0.88);font-size:14px;display:flex;flex-wrap:nowrap;align-items:start;}:where(.css-d8ft0k).ant-popconfirm .ant-popconfirm-message >.ant-popconfirm-message-icon .anticon{color:#faad14;font-size:14px;flex:none;line-height:1;padding-top:4px;}:where(.css-d8ft0k).ant-popconfirm .ant-popconfirm-message-title{flex:auto;margin-inline-start:8px;}:where(.css-d8ft0k).ant-popconfirm .ant-popconfirm-message-title-only{font-weight:600;}:where(.css-d8ft0k).ant-popconfirm .ant-popconfirm-description{position:relative;margin-inline-start:22px;margin-bottom:8px;color:rgba(0, 0, 0, 0.88);font-size:14px;}:where(.css-d8ft0k).ant-popconfirm .ant-popconfirm-buttons{text-align:end;}:where(.css-d8ft0k).ant-popconfirm .ant-popconfirm-buttons button{margin-inline-start:8px;}</style><style data-rc-order="prependQueue" data-css-hash="s69rfy" data-token-hash="1jebxg8">:where(.css-d8ft0k)[class^="ant-popover"],:where(.css-d8ft0k)[class*=" ant-popover"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-popover"]::before,:where(.css-d8ft0k)[class*=" ant-popover"]::before,:where(.css-d8ft0k)[class^="ant-popover"]::after,:where(.css-d8ft0k)[class*=" ant-popover"]::after{box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-popover"] [class^="ant-popover"],:where(.css-d8ft0k)[class*=" ant-popover"] [class^="ant-popover"],:where(.css-d8ft0k)[class^="ant-popover"] [class*=" ant-popover"],:where(.css-d8ft0k)[class*=" ant-popover"] [class*=" ant-popover"]{box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-popover"] [class^="ant-popover"]::before,:where(.css-d8ft0k)[class*=" ant-popover"] [class^="ant-popover"]::before,:where(.css-d8ft0k)[class^="ant-popover"] [class*=" ant-popover"]::before,:where(.css-d8ft0k)[class*=" ant-popover"] [class*=" ant-popover"]::before,:where(.css-d8ft0k)[class^="ant-popover"] [class^="ant-popover"]::after,:where(.css-d8ft0k)[class*=" ant-popover"] [class^="ant-popover"]::after,:where(.css-d8ft0k)[class^="ant-popover"] [class*=" ant-popover"]::after,:where(.css-d8ft0k)[class*=" ant-popover"] [class*=" ant-popover"]::after{box-sizing:border-box;}:where(.css-d8ft0k).ant-popover{box-sizing:border-box;margin:0;padding:0;color:rgba(0, 0, 0, 0.88);font-size:14px;line-height:1.5714285714285714;list-style:none;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';position:absolute;top:0;left:0;z-index:1030;font-weight:normal;white-space:normal;text-align:start;cursor:auto;user-select:text;--antd-arrow-background-color:#ffffff;}:where(.css-d8ft0k).ant-popover-rtl{direction:rtl;}:where(.css-d8ft0k).ant-popover-hidden{display:none;}:where(.css-d8ft0k).ant-popover .ant-popover-content{position:relative;}:where(.css-d8ft0k).ant-popover .ant-popover-inner{background-color:#ffffff;background-clip:padding-box;border-radius:8px;box-shadow:0 6px 16px 0 rgba(0, 0, 0, 0.08),0 3px 6px -4px rgba(0, 0, 0, 0.12),0 9px 28px 8px rgba(0, 0, 0, 0.05);padding:12px;}:where(.css-d8ft0k).ant-popover .ant-popover-title{min-width:177px;margin-bottom:8px;color:rgba(0, 0, 0, 0.88);font-weight:600;}:where(.css-d8ft0k).ant-popover .ant-popover-inner-content{color:rgba(0, 0, 0, 0.88);}:where(.css-d8ft0k).ant-popover .ant-popover-arrow{position:absolute;z-index:1;display:block;border-radius:0 0 2px;pointer-events:none;width:32px;height:32px;overflow:hidden;}:where(.css-d8ft0k).ant-popover .ant-popover-arrow::after{content:"";position:absolute;width:11.31370849898476px;height:11.31370849898476px;bottom:0;inset-inline:0;margin:auto;border-radius:0 0 2px 0;transform:translateY(50%) rotate(-135deg);box-shadow:3px 3px 7px rgba(0, 0, 0, 0.1);z-index:0;background:transparent;}:where(.css-d8ft0k).ant-popover .ant-popover-arrow::before{position:absolute;bottom:0;inset-inline-start:0;width:32px;height:8px;background:var(--antd-arrow-background-color);clip-path:path('M 6.343145750507619 8 A 4 4 0 0 0 9.17157287525381 6.82842712474619 L 14.585786437626904 1.414213562373095 A 2 2 0 0 1 17.414213562373096 1.414213562373095 L 22.82842712474619 6.82842712474619 A 4 4 0 0 0 25.65685424949238 8 Z');content:"";}:where(.css-d8ft0k).ant-popover .ant-popover-arrow:before{background:var(--antd-arrow-background-color);}:where(.css-d8ft0k).ant-popover-placement-top .ant-popover-arrow,:where(.css-d8ft0k).ant-popover-placement-topLeft .ant-popover-arrow,:where(.css-d8ft0k).ant-popover-placement-topRight .ant-popover-arrow{bottom:0;transform:translateY(100%) rotate(180deg);}:where(.css-d8ft0k).ant-popover-placement-top .ant-popover-arrow{left:50%;transform:translateX(-50%) translateY(100%) rotate(180deg);}:where(.css-d8ft0k).ant-popover-placement-topLeft .ant-popover-arrow{left:6px;}:where(.css-d8ft0k).ant-popover-placement-topRight .ant-popover-arrow{right:6px;}:where(.css-d8ft0k).ant-popover-placement-bottom .ant-popover-arrow,:where(.css-d8ft0k).ant-popover-placement-bottomLeft .ant-popover-arrow,:where(.css-d8ft0k).ant-popover-placement-bottomRight .ant-popover-arrow{top:0;transform:translateY(-100%);}:where(.css-d8ft0k).ant-popover-placement-bottom .ant-popover-arrow{left:50%;transform:translateX(-50%) translateY(-100%);}:where(.css-d8ft0k).ant-popover-placement-bottomLeft .ant-popover-arrow{left:6px;}:where(.css-d8ft0k).ant-popover-placement-bottomRight .ant-popover-arrow{right:6px;}:where(.css-d8ft0k).ant-popover-placement-left .ant-popover-arrow,:where(.css-d8ft0k).ant-popover-placement-leftTop .ant-popover-arrow,:where(.css-d8ft0k).ant-popover-placement-leftBottom .ant-popover-arrow{right:0;transform:translateX(100%) rotate(90deg);}:where(.css-d8ft0k).ant-popover-placement-left .ant-popover-arrow{top:50%;transform:translateY(-50%) translateX(100%) rotate(90deg);}:where(.css-d8ft0k).ant-popover-placement-leftTop .ant-popover-arrow{top:6px;}:where(.css-d8ft0k).ant-popover-placement-leftBottom .ant-popover-arrow{bottom:6px;}:where(.css-d8ft0k).ant-popover-placement-right .ant-popover-arrow,:where(.css-d8ft0k).ant-popover-placement-rightTop .ant-popover-arrow,:where(.css-d8ft0k).ant-popover-placement-rightBottom .ant-popover-arrow{left:0;transform:translateX(-100%) rotate(-90deg);}:where(.css-d8ft0k).ant-popover-placement-right .ant-popover-arrow{top:50%;transform:translateY(-50%) translateX(-100%) rotate(-90deg);}:where(.css-d8ft0k).ant-popover-placement-rightTop .ant-popover-arrow{top:6px;}:where(.css-d8ft0k).ant-popover-placement-rightBottom .ant-popover-arrow{bottom:6px;}:where(.css-d8ft0k).ant-popover-placement-topLeft,:where(.css-d8ft0k).ant-popover-placement-top,:where(.css-d8ft0k).ant-popover-placement-topRight{padding-bottom:12px;}:where(.css-d8ft0k).ant-popover-placement-bottomLeft,:where(.css-d8ft0k).ant-popover-placement-bottom,:where(.css-d8ft0k).ant-popover-placement-bottomRight{padding-top:12px;}:where(.css-d8ft0k).ant-popover-placement-leftTop,:where(.css-d8ft0k).ant-popover-placement-left,:where(.css-d8ft0k).ant-popover-placement-leftBottom{padding-right:12px;}:where(.css-d8ft0k).ant-popover-placement-rightTop,:where(.css-d8ft0k).ant-popover-placement-right,:where(.css-d8ft0k).ant-popover-placement-rightBottom{padding-left:12px;}:where(.css-d8ft0k).ant-popover-pure{position:relative;max-width:none;}:where(.css-d8ft0k).ant-popover-pure .ant-popover-content{display:inline-block;}:where(.css-d8ft0k).ant-popover.ant-popover-blue{--antd-arrow-background-color:#1677ff;}:where(.css-d8ft0k).ant-popover.ant-popover-blue .ant-popover-inner{background-color:#1677ff;}:where(.css-d8ft0k).ant-popover.ant-popover-blue .ant-popover-arrow{background:transparent;}:where(.css-d8ft0k).ant-popover.ant-popover-purple{--antd-arrow-background-color:#722ed1;}:where(.css-d8ft0k).ant-popover.ant-popover-purple .ant-popover-inner{background-color:#722ed1;}:where(.css-d8ft0k).ant-popover.ant-popover-purple .ant-popover-arrow{background:transparent;}:where(.css-d8ft0k).ant-popover.ant-popover-cyan{--antd-arrow-background-color:#13c2c2;}:where(.css-d8ft0k).ant-popover.ant-popover-cyan .ant-popover-inner{background-color:#13c2c2;}:where(.css-d8ft0k).ant-popover.ant-popover-cyan .ant-popover-arrow{background:transparent;}:where(.css-d8ft0k).ant-popover.ant-popover-green{--antd-arrow-background-color:#52c41a;}:where(.css-d8ft0k).ant-popover.ant-popover-green .ant-popover-inner{background-color:#52c41a;}:where(.css-d8ft0k).ant-popover.ant-popover-green .ant-popover-arrow{background:transparent;}:where(.css-d8ft0k).ant-popover.ant-popover-magenta{--antd-arrow-background-color:#eb2f96;}:where(.css-d8ft0k).ant-popover.ant-popover-magenta .ant-popover-inner{background-color:#eb2f96;}:where(.css-d8ft0k).ant-popover.ant-popover-magenta .ant-popover-arrow{background:transparent;}:where(.css-d8ft0k).ant-popover.ant-popover-pink{--antd-arrow-background-color:#eb2f96;}:where(.css-d8ft0k).ant-popover.ant-popover-pink .ant-popover-inner{background-color:#eb2f96;}:where(.css-d8ft0k).ant-popover.ant-popover-pink .ant-popover-arrow{background:transparent;}:where(.css-d8ft0k).ant-popover.ant-popover-red{--antd-arrow-background-color:#f5222d;}:where(.css-d8ft0k).ant-popover.ant-popover-red .ant-popover-inner{background-color:#f5222d;}:where(.css-d8ft0k).ant-popover.ant-popover-red .ant-popover-arrow{background:transparent;}:where(.css-d8ft0k).ant-popover.ant-popover-orange{--antd-arrow-background-color:#fa8c16;}:where(.css-d8ft0k).ant-popover.ant-popover-orange .ant-popover-inner{background-color:#fa8c16;}:where(.css-d8ft0k).ant-popover.ant-popover-orange .ant-popover-arrow{background:transparent;}:where(.css-d8ft0k).ant-popover.ant-popover-yellow{--antd-arrow-background-color:#fadb14;}:where(.css-d8ft0k).ant-popover.ant-popover-yellow .ant-popover-inner{background-color:#fadb14;}:where(.css-d8ft0k).ant-popover.ant-popover-yellow .ant-popover-arrow{background:transparent;}:where(.css-d8ft0k).ant-popover.ant-popover-volcano{--antd-arrow-background-color:#fa541c;}:where(.css-d8ft0k).ant-popover.ant-popover-volcano .ant-popover-inner{background-color:#fa541c;}:where(.css-d8ft0k).ant-popover.ant-popover-volcano .ant-popover-arrow{background:transparent;}:where(.css-d8ft0k).ant-popover.ant-popover-geekblue{--antd-arrow-background-color:#2f54eb;}:where(.css-d8ft0k).ant-popover.ant-popover-geekblue .ant-popover-inner{background-color:#2f54eb;}:where(.css-d8ft0k).ant-popover.ant-popover-geekblue .ant-popover-arrow{background:transparent;}:where(.css-d8ft0k).ant-popover.ant-popover-lime{--antd-arrow-background-color:#a0d911;}:where(.css-d8ft0k).ant-popover.ant-popover-lime .ant-popover-inner{background-color:#a0d911;}:where(.css-d8ft0k).ant-popover.ant-popover-lime .ant-popover-arrow{background:transparent;}:where(.css-d8ft0k).ant-popover.ant-popover-gold{--antd-arrow-background-color:#faad14;}:where(.css-d8ft0k).ant-popover.ant-popover-gold .ant-popover-inner{background-color:#faad14;}:where(.css-d8ft0k).ant-popover.ant-popover-gold .ant-popover-arrow{background:transparent;}:where(.css-d8ft0k).ant-zoom-big-enter,:where(.css-d8ft0k).ant-zoom-big-appear{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}:where(.css-d8ft0k).ant-zoom-big-leave{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}:where(.css-d8ft0k).ant-zoom-big-enter.ant-zoom-big-enter-active,:where(.css-d8ft0k).ant-zoom-big-appear.ant-zoom-big-appear-active{animation-name:css-d8ft0k-antZoomBigIn;animation-play-state:running;}:where(.css-d8ft0k).ant-zoom-big-leave.ant-zoom-big-leave-active{animation-name:css-d8ft0k-antZoomBigOut;animation-play-state:running;pointer-events:none;}:where(.css-d8ft0k).ant-zoom-big-enter,:where(.css-d8ft0k).ant-zoom-big-appear{transform:scale(0);opacity:0;animation-timing-function:cubic-bezier(0.08, 0.82, 0.17, 1);}:where(.css-d8ft0k).ant-zoom-big-enter-prepare,:where(.css-d8ft0k).ant-zoom-big-appear-prepare{transform:none;}:where(.css-d8ft0k).ant-zoom-big-leave{animation-timing-function:cubic-bezier(0.78, 0.14, 0.15, 0.86);}</style><style data-rc-order="prependQueue" data-css-hash="1iprspe" data-token-hash="1jebxg8">:where(.css-d8ft0k)[class^="ant-popover"],:where(.css-d8ft0k)[class*=" ant-popover"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-popover"]::before,:where(.css-d8ft0k)[class*=" ant-popover"]::before,:where(.css-d8ft0k)[class^="ant-popover"]::after,:where(.css-d8ft0k)[class*=" ant-popover"]::after{box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-popover"] [class^="ant-popover"],:where(.css-d8ft0k)[class*=" ant-popover"] [class^="ant-popover"],:where(.css-d8ft0k)[class^="ant-popover"] [class*=" ant-popover"],:where(.css-d8ft0k)[class*=" ant-popover"] [class*=" ant-popover"]{box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-popover"] [class^="ant-popover"]::before,:where(.css-d8ft0k)[class*=" ant-popover"] [class^="ant-popover"]::before,:where(.css-d8ft0k)[class^="ant-popover"] [class*=" ant-popover"]::before,:where(.css-d8ft0k)[class*=" ant-popover"] [class*=" ant-popover"]::before,:where(.css-d8ft0k)[class^="ant-popover"] [class^="ant-popover"]::after,:where(.css-d8ft0k)[class*=" ant-popover"] [class^="ant-popover"]::after,:where(.css-d8ft0k)[class^="ant-popover"] [class*=" ant-popover"]::after,:where(.css-d8ft0k)[class*=" ant-popover"] [class*=" ant-popover"]::after{box-sizing:border-box;}</style><style data-rc-order="prependQueue" data-css-hash="1ylr02q" data-token-hash="1jebxg8">:where(.css-d8ft0k)[class^="ant-btn"],:where(.css-d8ft0k)[class*=" ant-btn"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-btn"]::before,:where(.css-d8ft0k)[class*=" ant-btn"]::before,:where(.css-d8ft0k)[class^="ant-btn"]::after,:where(.css-d8ft0k)[class*=" ant-btn"]::after{box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-btn"] [class^="ant-btn"],:where(.css-d8ft0k)[class*=" ant-btn"] [class^="ant-btn"],:where(.css-d8ft0k)[class^="ant-btn"] [class*=" ant-btn"],:where(.css-d8ft0k)[class*=" ant-btn"] [class*=" ant-btn"]{box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-btn"] [class^="ant-btn"]::before,:where(.css-d8ft0k)[class*=" ant-btn"] [class^="ant-btn"]::before,:where(.css-d8ft0k)[class^="ant-btn"] [class*=" ant-btn"]::before,:where(.css-d8ft0k)[class*=" ant-btn"] [class*=" ant-btn"]::before,:where(.css-d8ft0k)[class^="ant-btn"] [class^="ant-btn"]::after,:where(.css-d8ft0k)[class*=" ant-btn"] [class^="ant-btn"]::after,:where(.css-d8ft0k)[class^="ant-btn"] [class*=" ant-btn"]::after,:where(.css-d8ft0k)[class*=" ant-btn"] [class*=" ant-btn"]::after{box-sizing:border-box;}:where(.css-d8ft0k).ant-btn{outline:none;position:relative;display:inline-block;font-weight:400;white-space:nowrap;text-align:center;background-image:none;background-color:transparent;border:1px solid transparent;cursor:pointer;transition:all 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);user-select:none;touch-action:manipulation;line-height:1.5714285714285714;color:rgba(0, 0, 0, 0.88);}:where(.css-d8ft0k).ant-btn >span{display:inline-flex;}:where(.css-d8ft0k).ant-btn >.anticon+span,:where(.css-d8ft0k).ant-btn >span+.anticon{margin-inline-start:8px;}:where(.css-d8ft0k).ant-btn:not(:disabled):focus-visible{outline:4px solid #91caff;outline-offset:1px;transition:outline-offset 0s,outline 0s;}:where(.css-d8ft0k).ant-btn-icon-only:where(.css-d8ft0k).ant-btn-compact-item{flex:none;}:where(.css-d8ft0k).ant-btn-compact-item.ant-btn-primary:not([disabled])+:where(.css-d8ft0k).ant-btn-compact-item.ant-btn-primary:not([disabled]){position:relative;}:where(.css-d8ft0k).ant-btn-compact-item.ant-btn-primary:not([disabled])+:where(.css-d8ft0k).ant-btn-compact-item.ant-btn-primary:not([disabled]):before{position:absolute;top:-1px;inset-inline-start:-1px;display:inline-block;width:1px;height:calc(100% + 2px);background-color:#4096ff;content:"";}:where(.css-d8ft0k).ant-btn-compact-vertical-item.ant-btn-primary:not([disabled])+:where(.css-d8ft0k).ant-btn-compact-vertical-item.ant-btn-primary:not([disabled]){position:relative;}:where(.css-d8ft0k).ant-btn-compact-vertical-item.ant-btn-primary:not([disabled])+:where(.css-d8ft0k).ant-btn-compact-vertical-item.ant-btn-primary:not([disabled]):before{position:absolute;top:-1px;inset-inline-start:-1px;display:inline-block;width:calc(100% + 2px);height:1px;background-color:#4096ff;content:"";}:where(.css-d8ft0k).ant-btn.ant-btn-sm{font-size:14px;height:24px;padding:0px 7px;border-radius:4px;}:where(.css-d8ft0k).ant-btn.ant-btn-sm.ant-btn-icon-only{width:24px;padding-inline-start:0;padding-inline-end:0;}:where(.css-d8ft0k).ant-btn.ant-btn-sm.ant-btn-icon-only.ant-btn-round{width:auto;}:where(.css-d8ft0k).ant-btn.ant-btn-sm.ant-btn-icon-only >span{transform:scale(1.143);}:where(.css-d8ft0k).ant-btn.ant-btn-sm.ant-btn-loading{opacity:0.65;cursor:default;}:where(.css-d8ft0k).ant-btn.ant-btn-sm .ant-btn-loading-icon{transition:width 0.3s cubic-bezier(0.645, 0.045, 0.355, 1),opacity 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);}:where(.css-d8ft0k).ant-btn.ant-btn-sm:not(.ant-btn-icon-only) .ant-btn-loading-icon>.anticon{margin-inline-end:8px;}:where(.css-d8ft0k).ant-btn.ant-btn-circle.ant-btn-sm{min-width:24px;padding-inline-start:0;padding-inline-end:0;border-radius:50%;}:where(.css-d8ft0k).ant-btn.ant-btn-round.ant-btn-sm{border-radius:24px;padding-inline-start:12px;padding-inline-end:12px;}:where(.css-d8ft0k).ant-btn{font-size:14px;height:32px;padding:4px 15px;border-radius:6px;}:where(.css-d8ft0k).ant-btn.ant-btn-icon-only{width:32px;padding-inline-start:0;padding-inline-end:0;}:where(.css-d8ft0k).ant-btn.ant-btn-icon-only.ant-btn-round{width:auto;}:where(.css-d8ft0k).ant-btn.ant-btn-icon-only >span{transform:scale(1.143);}:where(.css-d8ft0k).ant-btn.ant-btn-loading{opacity:0.65;cursor:default;}:where(.css-d8ft0k).ant-btn .ant-btn-loading-icon{transition:width 0.3s cubic-bezier(0.645, 0.045, 0.355, 1),opacity 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);}:where(.css-d8ft0k).ant-btn:not(.ant-btn-icon-only) .ant-btn-loading-icon>.anticon{margin-inline-end:8px;}:where(.css-d8ft0k).ant-btn.ant-btn-circle{min-width:32px;padding-inline-start:0;padding-inline-end:0;border-radius:50%;}:where(.css-d8ft0k).ant-btn.ant-btn-round{border-radius:32px;padding-inline-start:16px;padding-inline-end:16px;}:where(.css-d8ft0k).ant-btn.ant-btn-lg{font-size:16px;height:40px;padding:6.428571428571429px 15px;border-radius:8px;}:where(.css-d8ft0k).ant-btn.ant-btn-lg.ant-btn-icon-only{width:40px;padding-inline-start:0;padding-inline-end:0;}:where(.css-d8ft0k).ant-btn.ant-btn-lg.ant-btn-icon-only.ant-btn-round{width:auto;}:where(.css-d8ft0k).ant-btn.ant-btn-lg.ant-btn-icon-only >span{transform:scale(1.143);}:where(.css-d8ft0k).ant-btn.ant-btn-lg.ant-btn-loading{opacity:0.65;cursor:default;}:where(.css-d8ft0k).ant-btn.ant-btn-lg .ant-btn-loading-icon{transition:width 0.3s cubic-bezier(0.645, 0.045, 0.355, 1),opacity 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);}:where(.css-d8ft0k).ant-btn.ant-btn-lg:not(.ant-btn-icon-only) .ant-btn-loading-icon>.anticon{margin-inline-end:8px;}:where(.css-d8ft0k).ant-btn.ant-btn-circle.ant-btn-lg{min-width:40px;padding-inline-start:0;padding-inline-end:0;border-radius:50%;}:where(.css-d8ft0k).ant-btn.ant-btn-round.ant-btn-lg{border-radius:40px;padding-inline-start:20px;padding-inline-end:20px;}:where(.css-d8ft0k).ant-btn.ant-btn-block{width:100%;}:where(.css-d8ft0k).ant-btn-default{background-color:#ffffff;border-color:#d9d9d9;box-shadow:0 2px 0 rgba(0, 0, 0, 0.02);}:where(.css-d8ft0k).ant-btn-default:disabled{cursor:not-allowed;border-color:#d9d9d9;color:rgba(0, 0, 0, 0.25);background-color:rgba(0, 0, 0, 0.04);box-shadow:none;}:where(.css-d8ft0k).ant-btn-default:not(:disabled):hover{color:#4096ff;border-color:#4096ff;}:where(.css-d8ft0k).ant-btn-default:not(:disabled):active{color:#0958d9;border-color:#0958d9;}:where(.css-d8ft0k).ant-btn-default.ant-btn-background-ghost{color:#ffffff;background-color:transparent;border-color:#ffffff;box-shadow:none;}:where(.css-d8ft0k).ant-btn-default.ant-btn-background-ghost:not(:disabled):hover{background-color:transparent;}:where(.css-d8ft0k).ant-btn-default.ant-btn-background-ghost:not(:disabled):active{background-color:transparent;}:where(.css-d8ft0k).ant-btn-default.ant-btn-background-ghost:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);border-color:#d9d9d9;}:where(.css-d8ft0k).ant-btn-default.ant-btn-dangerous{color:#ff4d4f;border-color:#ff4d4f;}:where(.css-d8ft0k).ant-btn-default.ant-btn-dangerous:not(:disabled):hover{color:#ff7875;border-color:#ffa39e;}:where(.css-d8ft0k).ant-btn-default.ant-btn-dangerous:not(:disabled):active{color:#d9363e;border-color:#d9363e;}:where(.css-d8ft0k).ant-btn-default.ant-btn-dangerous.ant-btn-background-ghost{color:#ff4d4f;background-color:transparent;border-color:#ff4d4f;box-shadow:none;}:where(.css-d8ft0k).ant-btn-default.ant-btn-dangerous.ant-btn-background-ghost:not(:disabled):hover{background-color:transparent;}:where(.css-d8ft0k).ant-btn-default.ant-btn-dangerous.ant-btn-background-ghost:not(:disabled):active{background-color:transparent;}:where(.css-d8ft0k).ant-btn-default.ant-btn-dangerous.ant-btn-background-ghost:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);border-color:#d9d9d9;}:where(.css-d8ft0k).ant-btn-default.ant-btn-dangerous:disabled{cursor:not-allowed;border-color:#d9d9d9;color:rgba(0, 0, 0, 0.25);background-color:rgba(0, 0, 0, 0.04);box-shadow:none;}:where(.css-d8ft0k).ant-btn-primary{color:#fff;background-color:#1677ff;box-shadow:0 2px 0 rgba(5, 145, 255, 0.1);}:where(.css-d8ft0k).ant-btn-primary:disabled{cursor:not-allowed;border-color:#d9d9d9;color:rgba(0, 0, 0, 0.25);background-color:rgba(0, 0, 0, 0.04);box-shadow:none;}:where(.css-d8ft0k).ant-btn-primary:not(:disabled):hover{color:#fff;background-color:#4096ff;}:where(.css-d8ft0k).ant-btn-primary:not(:disabled):active{color:#fff;background-color:#0958d9;}:where(.css-d8ft0k).ant-btn-primary.ant-btn-background-ghost{color:#1677ff;background-color:transparent;border-color:#1677ff;box-shadow:none;}:where(.css-d8ft0k).ant-btn-primary.ant-btn-background-ghost:not(:disabled):hover{background-color:transparent;color:#4096ff;border-color:#4096ff;}:where(.css-d8ft0k).ant-btn-primary.ant-btn-background-ghost:not(:disabled):active{background-color:transparent;color:#0958d9;border-color:#0958d9;}:where(.css-d8ft0k).ant-btn-primary.ant-btn-background-ghost:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);border-color:#d9d9d9;}:where(.css-d8ft0k).ant-btn-primary.ant-btn-dangerous{background-color:#ff4d4f;box-shadow:0 2px 0 rgba(255, 38, 5, 0.06);}:where(.css-d8ft0k).ant-btn-primary.ant-btn-dangerous:not(:disabled):hover{background-color:#ff7875;}:where(.css-d8ft0k).ant-btn-primary.ant-btn-dangerous:not(:disabled):active{background-color:#d9363e;}:where(.css-d8ft0k).ant-btn-primary.ant-btn-dangerous.ant-btn-background-ghost{color:#ff4d4f;background-color:transparent;border-color:#ff4d4f;box-shadow:none;}:where(.css-d8ft0k).ant-btn-primary.ant-btn-dangerous.ant-btn-background-ghost:not(:disabled):hover{background-color:transparent;color:#ff7875;border-color:#ff7875;}:where(.css-d8ft0k).ant-btn-primary.ant-btn-dangerous.ant-btn-background-ghost:not(:disabled):active{background-color:transparent;color:#d9363e;border-color:#d9363e;}:where(.css-d8ft0k).ant-btn-primary.ant-btn-dangerous.ant-btn-background-ghost:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);border-color:#d9d9d9;}:where(.css-d8ft0k).ant-btn-primary.ant-btn-dangerous:disabled{cursor:not-allowed;border-color:#d9d9d9;color:rgba(0, 0, 0, 0.25);background-color:rgba(0, 0, 0, 0.04);box-shadow:none;}:where(.css-d8ft0k).ant-btn-dashed{background-color:#ffffff;border-color:#d9d9d9;box-shadow:0 2px 0 rgba(0, 0, 0, 0.02);border-style:dashed;}:where(.css-d8ft0k).ant-btn-dashed:disabled{cursor:not-allowed;border-color:#d9d9d9;color:rgba(0, 0, 0, 0.25);background-color:rgba(0, 0, 0, 0.04);box-shadow:none;}:where(.css-d8ft0k).ant-btn-dashed:not(:disabled):hover{color:#4096ff;border-color:#4096ff;}:where(.css-d8ft0k).ant-btn-dashed:not(:disabled):active{color:#0958d9;border-color:#0958d9;}:where(.css-d8ft0k).ant-btn-dashed.ant-btn-background-ghost{color:#ffffff;background-color:transparent;border-color:#ffffff;box-shadow:none;}:where(.css-d8ft0k).ant-btn-dashed.ant-btn-background-ghost:not(:disabled):hover{background-color:transparent;}:where(.css-d8ft0k).ant-btn-dashed.ant-btn-background-ghost:not(:disabled):active{background-color:transparent;}:where(.css-d8ft0k).ant-btn-dashed.ant-btn-background-ghost:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);border-color:#d9d9d9;}:where(.css-d8ft0k).ant-btn-dashed.ant-btn-dangerous{color:#ff4d4f;border-color:#ff4d4f;}:where(.css-d8ft0k).ant-btn-dashed.ant-btn-dangerous:not(:disabled):hover{color:#ff7875;border-color:#ffa39e;}:where(.css-d8ft0k).ant-btn-dashed.ant-btn-dangerous:not(:disabled):active{color:#d9363e;border-color:#d9363e;}:where(.css-d8ft0k).ant-btn-dashed.ant-btn-dangerous.ant-btn-background-ghost{color:#ff4d4f;background-color:transparent;border-color:#ff4d4f;box-shadow:none;}:where(.css-d8ft0k).ant-btn-dashed.ant-btn-dangerous.ant-btn-background-ghost:not(:disabled):hover{background-color:transparent;}:where(.css-d8ft0k).ant-btn-dashed.ant-btn-dangerous.ant-btn-background-ghost:not(:disabled):active{background-color:transparent;}:where(.css-d8ft0k).ant-btn-dashed.ant-btn-dangerous.ant-btn-background-ghost:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);border-color:#d9d9d9;}:where(.css-d8ft0k).ant-btn-dashed.ant-btn-dangerous:disabled{cursor:not-allowed;border-color:#d9d9d9;color:rgba(0, 0, 0, 0.25);background-color:rgba(0, 0, 0, 0.04);box-shadow:none;}:where(.css-d8ft0k).ant-btn-link{color:#1677ff;}:where(.css-d8ft0k).ant-btn-link:not(:disabled):hover{color:#69b1ff;}:where(.css-d8ft0k).ant-btn-link:not(:disabled):active{color:#0958d9;}:where(.css-d8ft0k).ant-btn-link:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);}:where(.css-d8ft0k).ant-btn-link.ant-btn-dangerous{color:#ff4d4f;}:where(.css-d8ft0k).ant-btn-link.ant-btn-dangerous:not(:disabled):hover{color:#ff7875;}:where(.css-d8ft0k).ant-btn-link.ant-btn-dangerous:not(:disabled):active{color:#d9363e;}:where(.css-d8ft0k).ant-btn-link.ant-btn-dangerous:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);}:where(.css-d8ft0k).ant-btn-text:not(:disabled):hover{color:rgba(0, 0, 0, 0.88);background-color:rgba(0, 0, 0, 0.06);}:where(.css-d8ft0k).ant-btn-text:not(:disabled):active{color:rgba(0, 0, 0, 0.88);background-color:rgba(0, 0, 0, 0.15);}:where(.css-d8ft0k).ant-btn-text:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);}:where(.css-d8ft0k).ant-btn-text.ant-btn-dangerous{color:#ff4d4f;}:where(.css-d8ft0k).ant-btn-text.ant-btn-dangerous:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);}:where(.css-d8ft0k).ant-btn-text.ant-btn-dangerous:not(:disabled):hover{color:#ff7875;background-color:#fff2f0;}:where(.css-d8ft0k).ant-btn-text.ant-btn-dangerous:not(:disabled):active{color:#ff7875;background-color:#fff2f0;}:where(.css-d8ft0k).ant-btn-disabled{cursor:not-allowed;border-color:#d9d9d9;color:rgba(0, 0, 0, 0.25);background-color:rgba(0, 0, 0, 0.04);box-shadow:none;}:where(.css-d8ft0k).ant-btn-disabled.ant-btn:hover{cursor:not-allowed;border-color:#d9d9d9;color:rgba(0, 0, 0, 0.25);background-color:rgba(0, 0, 0, 0.04);box-shadow:none;}:where(.css-d8ft0k).ant-btn-group{position:relative;display:inline-flex;}:where(.css-d8ft0k).ant-btn-group >span:not(:last-child),:where(.css-d8ft0k).ant-btn-group >.ant-btn:not(:last-child),:where(.css-d8ft0k).ant-btn-group >span:not(:last-child)>.ant-btn,:where(.css-d8ft0k).ant-btn-group >.ant-btn:not(:last-child)>.ant-btn{border-start-end-radius:0;border-end-end-radius:0;}:where(.css-d8ft0k).ant-btn-group >span:not(:first-child),:where(.css-d8ft0k).ant-btn-group >.ant-btn:not(:first-child){margin-inline-start:-1px;}:where(.css-d8ft0k).ant-btn-group >span:not(:first-child),:where(.css-d8ft0k).ant-btn-group >.ant-btn:not(:first-child),:where(.css-d8ft0k).ant-btn-group >span:not(:first-child)>.ant-btn,:where(.css-d8ft0k).ant-btn-group >.ant-btn:not(:first-child)>.ant-btn{border-start-start-radius:0;border-end-start-radius:0;}:where(.css-d8ft0k).ant-btn-group .ant-btn{position:relative;z-index:1;}:where(.css-d8ft0k).ant-btn-group .ant-btn:hover,:where(.css-d8ft0k).ant-btn-group .ant-btn:focus,:where(.css-d8ft0k).ant-btn-group .ant-btn:active{z-index:2;}:where(.css-d8ft0k).ant-btn-group .ant-btn[disabled]{z-index:0;}:where(.css-d8ft0k).ant-btn-group .ant-btn-icon-only{font-size:14px;}:where(.css-d8ft0k).ant-btn-group >span:not(:last-child):not(:disabled),:where(.css-d8ft0k).ant-btn-group >.ant-btn-primary:not(:last-child):not(:disabled),:where(.css-d8ft0k).ant-btn-group >span:not(:last-child)>.ant-btn-primary:not(:disabled),:where(.css-d8ft0k).ant-btn-group >.ant-btn-primary:not(:last-child)>.ant-btn-primary:not(:disabled){border-inline-end-color:#4096ff;}:where(.css-d8ft0k).ant-btn-group >span:not(:first-child):not(:disabled),:where(.css-d8ft0k).ant-btn-group >.ant-btn-primary:not(:first-child):not(:disabled),:where(.css-d8ft0k).ant-btn-group >span:not(:first-child)>.ant-btn-primary:not(:disabled),:where(.css-d8ft0k).ant-btn-group >.ant-btn-primary:not(:first-child)>.ant-btn-primary:not(:disabled){border-inline-start-color:#4096ff;}:where(.css-d8ft0k).ant-btn-group >span:not(:last-child):not(:disabled),:where(.css-d8ft0k).ant-btn-group >.ant-btn-danger:not(:last-child):not(:disabled),:where(.css-d8ft0k).ant-btn-group >span:not(:last-child)>.ant-btn-danger:not(:disabled),:where(.css-d8ft0k).ant-btn-group >.ant-btn-danger:not(:last-child)>.ant-btn-danger:not(:disabled){border-inline-end-color:#ff7875;}:where(.css-d8ft0k).ant-btn-group >span:not(:first-child):not(:disabled),:where(.css-d8ft0k).ant-btn-group >.ant-btn-danger:not(:first-child):not(:disabled),:where(.css-d8ft0k).ant-btn-group >span:not(:first-child)>.ant-btn-danger:not(:disabled),:where(.css-d8ft0k).ant-btn-group >.ant-btn-danger:not(:first-child)>.ant-btn-danger:not(:disabled){border-inline-start-color:#ff7875;}:where(.css-d8ft0k).ant-btn-compact-item:not(:where(.css-d8ft0k).ant-btn-compact-last-item){margin-inline-end:-1px;}:where(.css-d8ft0k).ant-btn-compact-item:hover,:where(.css-d8ft0k).ant-btn-compact-item:active{z-index:2;}:where(.css-d8ft0k).ant-btn-compact-item[disabled]{z-index:0;}:where(.css-d8ft0k).ant-btn-compact-item:not(:where(.css-d8ft0k).ant-btn-compact-first-item):not(:where(.css-d8ft0k).ant-btn-compact-last-item){border-radius:0;}:where(.css-d8ft0k).ant-btn-compact-item:not(:where(.css-d8ft0k).ant-btn-compact-last-item):where(.css-d8ft0k).ant-btn-compact-first-item,:where(.css-d8ft0k).ant-btn-compact-item:not(:where(.css-d8ft0k).ant-btn-compact-last-item):where(.css-d8ft0k).ant-btn-compact-first-item.ant-btn-sm,:where(.css-d8ft0k).ant-btn-compact-item:not(:where(.css-d8ft0k).ant-btn-compact-last-item):where(.css-d8ft0k).ant-btn-compact-first-item.ant-btn-lg{border-start-end-radius:0;border-end-end-radius:0;}:where(.css-d8ft0k).ant-btn-compact-item:not(:where(.css-d8ft0k).ant-btn-compact-first-item):where(.css-d8ft0k).ant-btn-compact-last-item,:where(.css-d8ft0k).ant-btn-compact-item:not(:where(.css-d8ft0k).ant-btn-compact-first-item):where(.css-d8ft0k).ant-btn-compact-last-item.ant-btn-sm,:where(.css-d8ft0k).ant-btn-compact-item:not(:where(.css-d8ft0k).ant-btn-compact-first-item):where(.css-d8ft0k).ant-btn-compact-last-item.ant-btn-lg{border-start-start-radius:0;border-end-start-radius:0;}:where(.css-d8ft0k).ant-btn-compact-vertical-item:not(:where(.css-d8ft0k).ant-btn-compact-vertical-last-item){margin-bottom:-1px;}:where(.css-d8ft0k).ant-btn-compact-vertical-item:hover,:where(.css-d8ft0k).ant-btn-compact-vertical-item:focus,:where(.css-d8ft0k).ant-btn-compact-vertical-item:active{z-index:2;}:where(.css-d8ft0k).ant-btn-compact-vertical-item[disabled]{z-index:0;}:where(.css-d8ft0k).ant-btn-compact-vertical-item:not(:where(.css-d8ft0k).ant-btn-compact-vertical-first-item):not(:where(.css-d8ft0k).ant-btn-compact-vertical-last-item){border-radius:0;}:where(.css-d8ft0k).ant-btn-compact-vertical-item:where(.css-d8ft0k).ant-btn-compact-vertical-first-item:not(:where(.css-d8ft0k).ant-btn-compact-vertical-last-item),:where(.css-d8ft0k).ant-btn-compact-vertical-item:where(.css-d8ft0k).ant-btn-compact-vertical-first-item:not(:where(.css-d8ft0k).ant-btn-compact-vertical-last-item).ant-btn-sm,:where(.css-d8ft0k).ant-btn-compact-vertical-item:where(.css-d8ft0k).ant-btn-compact-vertical-first-item:not(:where(.css-d8ft0k).ant-btn-compact-vertical-last-item).ant-btn-lg{border-end-end-radius:0;border-end-start-radius:0;}:where(.css-d8ft0k).ant-btn-compact-vertical-item:where(.css-d8ft0k).ant-btn-compact-vertical-last-item:not(:where(.css-d8ft0k).ant-btn-compact-vertical-first-item),:where(.css-d8ft0k).ant-btn-compact-vertical-item:where(.css-d8ft0k).ant-btn-compact-vertical-last-item:not(:where(.css-d8ft0k).ant-btn-compact-vertical-first-item).ant-btn-sm,:where(.css-d8ft0k).ant-btn-compact-vertical-item:where(.css-d8ft0k).ant-btn-compact-vertical-last-item:not(:where(.css-d8ft0k).ant-btn-compact-vertical-first-item).ant-btn-lg{border-start-start-radius:0;border-start-end-radius:0;}</style><style data-rc-order="prependQueue" data-css-hash="v0fowk" data-token-hash="1jebxg8">:where(.css-d8ft0k)[class^="ant-wave"],:where(.css-d8ft0k)[class*=" ant-wave"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-wave"]::before,:where(.css-d8ft0k)[class*=" ant-wave"]::before,:where(.css-d8ft0k)[class^="ant-wave"]::after,:where(.css-d8ft0k)[class*=" ant-wave"]::after{box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-wave"] [class^="ant-wave"],:where(.css-d8ft0k)[class*=" ant-wave"] [class^="ant-wave"],:where(.css-d8ft0k)[class^="ant-wave"] [class*=" ant-wave"],:where(.css-d8ft0k)[class*=" ant-wave"] [class*=" ant-wave"]{box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-wave"] [class^="ant-wave"]::before,:where(.css-d8ft0k)[class*=" ant-wave"] [class^="ant-wave"]::before,:where(.css-d8ft0k)[class^="ant-wave"] [class*=" ant-wave"]::before,:where(.css-d8ft0k)[class*=" ant-wave"] [class*=" ant-wave"]::before,:where(.css-d8ft0k)[class^="ant-wave"] [class^="ant-wave"]::after,:where(.css-d8ft0k)[class*=" ant-wave"] [class^="ant-wave"]::after,:where(.css-d8ft0k)[class^="ant-wave"] [class*=" ant-wave"]::after,:where(.css-d8ft0k)[class*=" ant-wave"] [class*=" ant-wave"]::after{box-sizing:border-box;}:where(.css-d8ft0k).ant-wave{position:absolute;background:transparent;pointer-events:none;box-sizing:border-box;color:var(--wave-color, #1677ff);box-shadow:0 0 0 0 currentcolor;opacity:0.2;}:where(.css-d8ft0k).ant-wave.wave-motion-appear{transition:box-shadow 0.4s cubic-bezier(0.08, 0.82, 0.17, 1),opacity 2s cubic-bezier(0.08, 0.82, 0.17, 1);}:where(.css-d8ft0k).ant-wave.wave-motion-appear-active{box-shadow:0 0 0 6px currentcolor;opacity:0;}</style><style data-rc-order="prependQueue" data-css-hash="1af3lz3" data-token-hash="1jebxg8">:where(.css-d8ft0k)[class^="ant-modal"], :where(.css-d8ft0k)[class*=" ant-modal"] { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; font-size: 14px; box-sizing: border-box; }
:where(.css-d8ft0k)[class^="ant-modal"]::before, :where(.css-d8ft0k)[class*=" ant-modal"]::before, :where(.css-d8ft0k)[class^="ant-modal"]::after, :where(.css-d8ft0k)[class*=" ant-modal"]::after { box-sizing: border-box; }
:where(.css-d8ft0k)[class^="ant-modal"] [class^="ant-modal"], :where(.css-d8ft0k)[class*=" ant-modal"] [class^="ant-modal"], :where(.css-d8ft0k)[class^="ant-modal"] [class*=" ant-modal"], :where(.css-d8ft0k)[class*=" ant-modal"] [class*=" ant-modal"] { box-sizing: border-box; }
:where(.css-d8ft0k)[class^="ant-modal"] [class^="ant-modal"]::before, :where(.css-d8ft0k)[class*=" ant-modal"] [class^="ant-modal"]::before, :where(.css-d8ft0k)[class^="ant-modal"] [class*=" ant-modal"]::before, :where(.css-d8ft0k)[class*=" ant-modal"] [class*=" ant-modal"]::before, :where(.css-d8ft0k)[class^="ant-modal"] [class^="ant-modal"]::after, :where(.css-d8ft0k)[class*=" ant-modal"] [class^="ant-modal"]::after, :where(.css-d8ft0k)[class^="ant-modal"] [class*=" ant-modal"]::after, :where(.css-d8ft0k)[class*=" ant-modal"] [class*=" ant-modal"]::after { box-sizing: border-box; }
:where(.css-d8ft0k).ant-modal-root .ant-modal-wrap { z-index: 1000; position: fixed; inset: 0px; overflow: auto; outline: 0px; }
:where(.css-d8ft0k).ant-modal-root .ant-modal-wrap-rtl { direction: rtl; }
:where(.css-d8ft0k).ant-modal-root .ant-modal-centered { text-align: center; }
:where(.css-d8ft0k).ant-modal-root .ant-modal-centered::before { display: inline-block; width: 0px; height: 100%; vertical-align: middle; content: ""; }
:where(.css-d8ft0k).ant-modal-root .ant-modal-centered .ant-modal { top: 0px; display: inline-block; padding-bottom: 0px; text-align: start; vertical-align: middle; }
@media (max-width: 767) {
  :where(.css-d8ft0k).ant-modal-root .ant-modal { max-width: calc(100vw - 16px); margin: 8px auto; }
  :where(.css-d8ft0k).ant-modal-root .ant-modal-centered .ant-modal { flex: 1 1 0%; }
}
:where(.css-d8ft0k).ant-modal { box-sizing: border-box; margin: 0px auto; padding: 0px 0px 24px; color: rgba(0, 0, 0, 0.88); font-size: 14px; line-height: 1.57143; list-style: none; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; pointer-events: none; position: relative; top: 100px; width: auto; max-width: calc(100vw - 32px); }
:where(.css-d8ft0k).ant-modal .ant-modal-title { margin: 0px; color: rgba(0, 0, 0, 0.88); font-weight: 600; font-size: 16px; line-height: 1.5; overflow-wrap: break-word; }
:where(.css-d8ft0k).ant-modal .ant-modal-content { position: relative; background-color: rgb(255, 255, 255); background-clip: padding-box; border: 0px; border-radius: 8px; box-shadow: rgba(0, 0, 0, 0.08) 0px 6px 16px 0px, rgba(0, 0, 0, 0.12) 0px 3px 6px -4px, rgba(0, 0, 0, 0.05) 0px 9px 28px 8px; pointer-events: auto; padding: 20px 24px; }
:where(.css-d8ft0k).ant-modal .ant-modal-close { position: absolute; top: 17px; inset-inline-end: 17px; z-index: 1010; padding: 0px; color: rgba(0, 0, 0, 0.45); font-weight: 600; line-height: 1; text-decoration: none; background: transparent; border-radius: 4px; width: 22px; height: 22px; border: 0px; outline: 0px; cursor: pointer; transition: color 0.2s ease 0s, background-color 0.2s ease 0s; }
:where(.css-d8ft0k).ant-modal .ant-modal-close-x { display: block; font-size: 16px; font-style: normal; line-height: 22px; text-align: center; text-transform: none; text-rendering: auto; }
:where(.css-d8ft0k).ant-modal .ant-modal-close:hover { color: rgba(0, 0, 0, 0.88); background-color: rgba(0, 0, 0, 0.06); text-decoration: none; }
:where(.css-d8ft0k).ant-modal .ant-modal-close:active { background-color: rgba(0, 0, 0, 0.15); }
:where(.css-d8ft0k).ant-modal .ant-modal-close:focus-visible { outline: rgb(145, 202, 255) solid 4px; outline-offset: 1px; transition: outline-offset 0s ease 0s, outline 0s ease 0s; }
:where(.css-d8ft0k).ant-modal .ant-modal-header { color: rgba(0, 0, 0, 0.88); background: rgb(255, 255, 255); border-radius: 8px 8px 0px 0px; margin-bottom: 8px; }
:where(.css-d8ft0k).ant-modal .ant-modal-body { font-size: 14px; line-height: 1.57143; overflow-wrap: break-word; }
:where(.css-d8ft0k).ant-modal .ant-modal-footer { text-align: end; background: transparent; margin-top: 12px; }
:where(.css-d8ft0k).ant-modal .ant-modal-footer .ant-btn + .ant-btn:not(.ant-dropdown-trigger) { margin-bottom: 0px; margin-inline-start: 8px; }
:where(.css-d8ft0k).ant-modal .ant-modal-open { overflow: hidden; }
:where(.css-d8ft0k).ant-modal-pure-panel { top: auto; padding: 0px; display: flex; flex-direction: column; }
:where(.css-d8ft0k).ant-modal-pure-panel .ant-modal-content, :where(.css-d8ft0k).ant-modal-pure-panel .ant-modal-body, :where(.css-d8ft0k).ant-modal-pure-panel .ant-modal-confirm-body-wrapper { display: flex; flex-direction: column; flex: 1 1 auto; }
:where(.css-d8ft0k).ant-modal-pure-panel .ant-modal-confirm-body { margin-bottom: auto; }
:where(.css-d8ft0k).ant-modal-confirm-rtl { direction: rtl; }
:where(.css-d8ft0k).ant-modal-confirm .ant-modal-header { display: none; }
:where(.css-d8ft0k).ant-modal-confirm .ant-modal-confirm-body-wrapper::before { display: table; content: ""; }
:where(.css-d8ft0k).ant-modal-confirm .ant-modal-confirm-body-wrapper::after { display: table; clear: both; content: ""; }
:where(.css-d8ft0k).ant-modal-confirm .ant-modal-confirm-body { display: flex; flex-wrap: wrap; align-items: center; }
:where(.css-d8ft0k).ant-modal-confirm .ant-modal-confirm-body .ant-modal-confirm-title { flex: 0 0 100%; display: block; overflow: hidden; color: rgba(0, 0, 0, 0.88); font-weight: 600; font-size: 16px; line-height: 1.5; }
:where(.css-d8ft0k).ant-modal-confirm .ant-modal-confirm-body .ant-modal-confirm-title + .ant-modal-confirm-content { margin-block-start: 8px; flex-basis: 100%; max-width: calc(100% - 34px); }
:where(.css-d8ft0k).ant-modal-confirm .ant-modal-confirm-body .ant-modal-confirm-content { color: rgba(0, 0, 0, 0.88); font-size: 14px; }
:where(.css-d8ft0k).ant-modal-confirm .ant-modal-confirm-body > .anticon { flex: 0 0 auto; margin-inline-end: 12px; font-size: 22px; }
:where(.css-d8ft0k).ant-modal-confirm .ant-modal-confirm-body > .anticon + .ant-modal-confirm-title { flex: 1 1 0%; }
:where(.css-d8ft0k).ant-modal-confirm .ant-modal-confirm-body > .anticon + .ant-modal-confirm-title + .ant-modal-confirm-content { margin-inline-start: 34px; }
:where(.css-d8ft0k).ant-modal-confirm .ant-modal-confirm-btns { text-align: end; margin-top: 12px; }
:where(.css-d8ft0k).ant-modal-confirm .ant-modal-confirm-btns .ant-btn + .ant-btn { margin-bottom: 0px; margin-inline-start: 8px; }
:where(.css-d8ft0k).ant-modal-confirm-error .ant-modal-confirm-body > .anticon { color: rgb(255, 77, 79); }
:where(.css-d8ft0k).ant-modal-confirm-warning .ant-modal-confirm-body > .anticon, :where(.css-d8ft0k).ant-modal-confirm-confirm .ant-modal-confirm-body > .anticon { color: rgb(250, 173, 20); }
:where(.css-d8ft0k).ant-modal-confirm-info .ant-modal-confirm-body > .anticon { color: rgb(22, 119, 255); }
:where(.css-d8ft0k).ant-modal-confirm-success .ant-modal-confirm-body > .anticon { color: rgb(82, 196, 26); }
:where(.css-d8ft0k).ant-modal-zoom-leave .ant-modal-btns { pointer-events: none; }
:where(.css-d8ft0k).ant-modal-root .ant-modal-wrap-rtl { direction: rtl; }
:where(.css-d8ft0k).ant-modal-root .ant-modal-wrap-rtl .ant-modal-confirm-body { direction: rtl; }
:where(.css-d8ft0k).ant-modal-root .ant-modal.ant-zoom-enter, :where(.css-d8ft0k).ant-modal-root .ant-modal.ant-zoom-appear { transform: none; opacity: 0; animation-duration: 0.3s; user-select: none; }
:where(.css-d8ft0k).ant-modal-root .ant-modal-mask { position: fixed; top: 0px; inset-inline: 0px; bottom: 0px; z-index: 1000; height: 100%; background-color: rgba(0, 0, 0, 0.45); }
:where(.css-d8ft0k).ant-modal-root .ant-modal-mask .ant-modal-hidden { display: none; }
:where(.css-d8ft0k).ant-modal-root .ant-modal-wrap { position: fixed; top: 0px; inset-inline: 0px; bottom: 0px; overflow: auto; outline: 0px; }
:where(.css-d8ft0k).ant-modal-root .ant-fade-enter, :where(.css-d8ft0k).ant-modal-root .ant-fade-appear { animation-duration: 0.2s; animation-fill-mode: both; animation-play-state: paused; }
:where(.css-d8ft0k).ant-modal-root .ant-fade-leave { animation-duration: 0.2s; animation-fill-mode: both; animation-play-state: paused; }
:where(.css-d8ft0k).ant-modal-root .ant-fade-enter.ant-fade-enter-active, :where(.css-d8ft0k).ant-modal-root .ant-fade-appear.ant-fade-appear-active { animation-name: css-d8ft0k-antFadeIn; animation-play-state: running; }
:where(.css-d8ft0k).ant-modal-root .ant-fade-leave.ant-fade-leave-active { animation-name: css-d8ft0k-antFadeOut; animation-play-state: running; pointer-events: none; }
:where(.css-d8ft0k).ant-modal-root .ant-fade-enter, :where(.css-d8ft0k).ant-modal-root .ant-fade-appear { opacity: 0; animation-timing-function: linear; }
:where(.css-d8ft0k).ant-modal-root .ant-fade-leave { animation-timing-function: linear; }
:where(.css-d8ft0k).ant-zoom-enter, :where(.css-d8ft0k).ant-zoom-appear { animation-duration: 0.2s; animation-fill-mode: both; animation-play-state: paused; }
:where(.css-d8ft0k).ant-zoom-leave { animation-duration: 0.2s; animation-fill-mode: both; animation-play-state: paused; }
:where(.css-d8ft0k).ant-zoom-enter.ant-zoom-enter-active, :where(.css-d8ft0k).ant-zoom-appear.ant-zoom-appear-active { animation-name: css-d8ft0k-antZoomIn; animation-play-state: running; }
:where(.css-d8ft0k).ant-zoom-leave.ant-zoom-leave-active { animation-name: css-d8ft0k-antZoomOut; animation-play-state: running; pointer-events: none; }
:where(.css-d8ft0k).ant-zoom-enter, :where(.css-d8ft0k).ant-zoom-appear { transform: scale(0); opacity: 0; animation-timing-function: cubic-bezier(0.08, 0.82, 0.17, 1); }
:where(.css-d8ft0k).ant-zoom-enter-prepare, :where(.css-d8ft0k).ant-zoom-appear-prepare { transform: none; }
:where(.css-d8ft0k).ant-zoom-leave { animation-timing-function: cubic-bezier(0.78, 0.14, 0.15, 0.86); }</style><style data-rc-order="prependQueue" data-css-hash="_effect-css-d8ft0k-antFadeIn">@keyframes css-d8ft0k-antFadeIn{0%{opacity:0;}100%{opacity:1;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-css-d8ft0k-antFadeOut">@keyframes css-d8ft0k-antFadeOut{0%{opacity:1;}100%{opacity:0;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-css-d8ft0k-antZoomIn">@keyframes css-d8ft0k-antZoomIn{0%{transform:scale(0.2);opacity:0;}100%{transform:scale(1);opacity:1;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-css-d8ft0k-antZoomOut">@keyframes css-d8ft0k-antZoomOut{0%{transform:scale(1);}100%{transform:scale(0.2);opacity:0;}}</style><style data-rc-order="prependQueue" data-css-hash="upxgnb" data-token-hash="1jebxg8">:where(.css-d8ft0k)[class^="ant-tag"],:where(.css-d8ft0k)[class*=" ant-tag"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-tag"]::before,:where(.css-d8ft0k)[class*=" ant-tag"]::before,:where(.css-d8ft0k)[class^="ant-tag"]::after,:where(.css-d8ft0k)[class*=" ant-tag"]::after{box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-tag"] [class^="ant-tag"],:where(.css-d8ft0k)[class*=" ant-tag"] [class^="ant-tag"],:where(.css-d8ft0k)[class^="ant-tag"] [class*=" ant-tag"],:where(.css-d8ft0k)[class*=" ant-tag"] [class*=" ant-tag"]{box-sizing:border-box;}:where(.css-d8ft0k)[class^="ant-tag"] [class^="ant-tag"]::before,:where(.css-d8ft0k)[class*=" ant-tag"] [class^="ant-tag"]::before,:where(.css-d8ft0k)[class^="ant-tag"] [class*=" ant-tag"]::before,:where(.css-d8ft0k)[class*=" ant-tag"] [class*=" ant-tag"]::before,:where(.css-d8ft0k)[class^="ant-tag"] [class^="ant-tag"]::after,:where(.css-d8ft0k)[class*=" ant-tag"] [class^="ant-tag"]::after,:where(.css-d8ft0k)[class^="ant-tag"] [class*=" ant-tag"]::after,:where(.css-d8ft0k)[class*=" ant-tag"] [class*=" ant-tag"]::after{box-sizing:border-box;}:where(.css-d8ft0k).ant-tag{box-sizing:border-box;margin:0;padding:0;color:rgba(0, 0, 0, 0.88);font-size:12px;line-height:20px;list-style:none;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';display:inline-block;height:auto;margin-inline-end:8px;padding-inline:7px;white-space:nowrap;background:rgba(0, 0, 0, 0.02);border:1px solid #d9d9d9;border-radius:4px;opacity:1;transition:all 0.2s;text-align:start;}:where(.css-d8ft0k).ant-tag:where(.css-d8ft0k).ant-tag-rtl{direction:rtl;}:where(.css-d8ft0k).ant-tag,:where(.css-d8ft0k).ant-tag a,:where(.css-d8ft0k).ant-tag a:hover{color:rgba(0, 0, 0, 0.88);}:where(.css-d8ft0k).ant-tag .ant-tag-close-icon{margin-inline-start:3px;color:rgba(0, 0, 0, 0.45);font-size:10px;cursor:pointer;transition:all 0.2s;}:where(.css-d8ft0k).ant-tag .ant-tag-close-icon:hover{color:rgba(0, 0, 0, 0.88);}:where(.css-d8ft0k).ant-tag:where(.css-d8ft0k).ant-tag-has-color{border-color:transparent;}:where(.css-d8ft0k).ant-tag:where(.css-d8ft0k).ant-tag-has-color,:where(.css-d8ft0k).ant-tag:where(.css-d8ft0k).ant-tag-has-color a,:where(.css-d8ft0k).ant-tag:where(.css-d8ft0k).ant-tag-has-color a:hover,:where(.css-d8ft0k).ant-tag:where(.css-d8ft0k).ant-tag-has-color .anticon-close,:where(.css-d8ft0k).ant-tag:where(.css-d8ft0k).ant-tag-has-color .anticon-close:hover{color:#fff;}:where(.css-d8ft0k).ant-tag-checkable{background-color:transparent;border-color:transparent;cursor:pointer;}:where(.css-d8ft0k).ant-tag-checkable:not(:where(.css-d8ft0k).ant-tag-checkable-checked):hover{color:#1677ff;background-color:rgba(0, 0, 0, 0.06);}:where(.css-d8ft0k).ant-tag-checkable:active,:where(.css-d8ft0k).ant-tag-checkable-checked{color:#fff;}:where(.css-d8ft0k).ant-tag-checkable-checked{background-color:#1677ff;}:where(.css-d8ft0k).ant-tag-checkable-checked:hover{background-color:#4096ff;}:where(.css-d8ft0k).ant-tag-checkable:active{background-color:#0958d9;}:where(.css-d8ft0k).ant-tag-hidden{display:none;}:where(.css-d8ft0k).ant-tag >.anticon+span,:where(.css-d8ft0k).ant-tag >span+.anticon{margin-inline-start:7px;}:where(.css-d8ft0k).ant-tag-blue{color:#0958d9;background:#e6f4ff;border-color:#91caff;}:where(.css-d8ft0k).ant-tag-blue-inverse{color:#fff;background:#1677ff;border-color:#1677ff;}:where(.css-d8ft0k).ant-tag-purple{color:#531dab;background:#f9f0ff;border-color:#d3adf7;}:where(.css-d8ft0k).ant-tag-purple-inverse{color:#fff;background:#722ed1;border-color:#722ed1;}:where(.css-d8ft0k).ant-tag-cyan{color:#08979c;background:#e6fffb;border-color:#87e8de;}:where(.css-d8ft0k).ant-tag-cyan-inverse{color:#fff;background:#13c2c2;border-color:#13c2c2;}:where(.css-d8ft0k).ant-tag-green{color:#389e0d;background:#f6ffed;border-color:#b7eb8f;}:where(.css-d8ft0k).ant-tag-green-inverse{color:#fff;background:#52c41a;border-color:#52c41a;}:where(.css-d8ft0k).ant-tag-magenta{color:#c41d7f;background:#fff0f6;border-color:#ffadd2;}:where(.css-d8ft0k).ant-tag-magenta-inverse{color:#fff;background:#eb2f96;border-color:#eb2f96;}:where(.css-d8ft0k).ant-tag-pink{color:#c41d7f;background:#fff0f6;border-color:#ffadd2;}:where(.css-d8ft0k).ant-tag-pink-inverse{color:#fff;background:#eb2f96;border-color:#eb2f96;}:where(.css-d8ft0k).ant-tag-red{color:#cf1322;background:#fff1f0;border-color:#ffa39e;}:where(.css-d8ft0k).ant-tag-red-inverse{color:#fff;background:#f5222d;border-color:#f5222d;}:where(.css-d8ft0k).ant-tag-orange{color:#d46b08;background:#fff7e6;border-color:#ffd591;}:where(.css-d8ft0k).ant-tag-orange-inverse{color:#fff;background:#fa8c16;border-color:#fa8c16;}:where(.css-d8ft0k).ant-tag-yellow{color:#d4b106;background:#feffe6;border-color:#fffb8f;}:where(.css-d8ft0k).ant-tag-yellow-inverse{color:#fff;background:#fadb14;border-color:#fadb14;}:where(.css-d8ft0k).ant-tag-volcano{color:#d4380d;background:#fff2e8;border-color:#ffbb96;}:where(.css-d8ft0k).ant-tag-volcano-inverse{color:#fff;background:#fa541c;border-color:#fa541c;}:where(.css-d8ft0k).ant-tag-geekblue{color:#1d39c4;background:#f0f5ff;border-color:#adc6ff;}:where(.css-d8ft0k).ant-tag-geekblue-inverse{color:#fff;background:#2f54eb;border-color:#2f54eb;}:where(.css-d8ft0k).ant-tag-lime{color:#7cb305;background:#fcffe6;border-color:#eaff8f;}:where(.css-d8ft0k).ant-tag-lime-inverse{color:#fff;background:#a0d911;border-color:#a0d911;}:where(.css-d8ft0k).ant-tag-gold{color:#d48806;background:#fffbe6;border-color:#ffe58f;}:where(.css-d8ft0k).ant-tag-gold-inverse{color:#fff;background:#faad14;border-color:#faad14;}:where(.css-d8ft0k).ant-tag-success{color:#52c41a;background:#f6ffed;border-color:#b7eb8f;}:where(.css-d8ft0k).ant-tag-processing{color:#1677ff;background:#e6f4ff;border-color:#91caff;}:where(.css-d8ft0k).ant-tag-error{color:#ff4d4f;background:#fff2f0;border-color:#ffccc7;}:where(.css-d8ft0k).ant-tag-warning{color:#faad14;background:#fffbe6;border-color:#ffe58f;}</style><style data-rc-order="prependQueue" data-css-hash="bd70a9" data-token-hash="18ps9sa">:where(.css-sk7ap8)[class^="ant-notification"],:where(.css-sk7ap8)[class*=" ant-notification"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}:where(.css-sk7ap8)[class^="ant-notification"]::before,:where(.css-sk7ap8)[class*=" ant-notification"]::before,:where(.css-sk7ap8)[class^="ant-notification"]::after,:where(.css-sk7ap8)[class*=" ant-notification"]::after{box-sizing:border-box;}:where(.css-sk7ap8)[class^="ant-notification"] [class^="ant-notification"],:where(.css-sk7ap8)[class*=" ant-notification"] [class^="ant-notification"],:where(.css-sk7ap8)[class^="ant-notification"] [class*=" ant-notification"],:where(.css-sk7ap8)[class*=" ant-notification"] [class*=" ant-notification"]{box-sizing:border-box;}:where(.css-sk7ap8)[class^="ant-notification"] [class^="ant-notification"]::before,:where(.css-sk7ap8)[class*=" ant-notification"] [class^="ant-notification"]::before,:where(.css-sk7ap8)[class^="ant-notification"] [class*=" ant-notification"]::before,:where(.css-sk7ap8)[class*=" ant-notification"] [class*=" ant-notification"]::before,:where(.css-sk7ap8)[class^="ant-notification"] [class^="ant-notification"]::after,:where(.css-sk7ap8)[class*=" ant-notification"] [class^="ant-notification"]::after,:where(.css-sk7ap8)[class^="ant-notification"] [class*=" ant-notification"]::after,:where(.css-sk7ap8)[class*=" ant-notification"] [class*=" ant-notification"]::after{box-sizing:border-box;}:where(.css-sk7ap8).ant-notification{box-sizing:border-box;margin:0;padding:0;color:rgba(0, 0, 0, 0.88);font-size:14px;line-height:1.5714285714285714;list-style:none;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';position:fixed;z-index:1050;margin-inline-end:24px;}:where(.css-sk7ap8).ant-notification .ant-notification-hook-holder{position:relative;}:where(.css-sk7ap8).ant-notification.ant-notification-top,:where(.css-sk7ap8).ant-notification.ant-notification-bottom{margin-inline:0;}:where(.css-sk7ap8).ant-notification.ant-notification-topLeft,:where(.css-sk7ap8).ant-notification.ant-notification-bottomLeft{margin-inline-end:0;margin-inline-start:24px;}:where(.css-sk7ap8).ant-notification.ant-notification-topLeft .ant-notification-fade-enter.ant-notification-fade-enter-active,:where(.css-sk7ap8).ant-notification.ant-notification-bottomLeft .ant-notification-fade-enter.ant-notification-fade-enter-active,:where(.css-sk7ap8).ant-notification.ant-notification-topLeft .ant-notification-fade-appear.ant-notification-fade-appear-active,:where(.css-sk7ap8).ant-notification.ant-notification-bottomLeft .ant-notification-fade-appear.ant-notification-fade-appear-active{animation-name:css-sk7ap8-antNotificationLeftFadeIn;}:where(.css-sk7ap8).ant-notification .ant-notification-fade-enter,:where(.css-sk7ap8).ant-notification .ant-notification-fade-appear{animation-duration:0.2s;animation-timing-function:cubic-bezier(0.645, 0.045, 0.355, 1);animation-fill-mode:both;opacity:0;animation-play-state:paused;}:where(.css-sk7ap8).ant-notification .ant-notification-fade-leave{animation-timing-function:cubic-bezier(0.645, 0.045, 0.355, 1);animation-fill-mode:both;animation-duration:0.2s;animation-play-state:paused;}:where(.css-sk7ap8).ant-notification .ant-notification-fade-enter.ant-notification-fade-enter-active,:where(.css-sk7ap8).ant-notification .ant-notification-fade-appear.ant-notification-fade-appear-active{animation-name:css-sk7ap8-antNotificationFadeIn;animation-play-state:running;}:where(.css-sk7ap8).ant-notification .ant-notification-fade-leave.ant-notification-fade-leave-active{animation-name:css-sk7ap8-antNotificationFadeOut;animation-play-state:running;}:where(.css-sk7ap8).ant-notification.ant-notification-top .ant-notification-fade-enter.ant-notification-fade-enter-active,:where(.css-sk7ap8).ant-notification.ant-notification-top .ant-notification-fade-appear.ant-notification-fade-appear-active{animation-name:css-sk7ap8-antNotificationTopFadeIn;}:where(.css-sk7ap8).ant-notification.ant-notification-bottom .ant-notification-fade-enter.ant-notification-fade-enter-active,:where(.css-sk7ap8).ant-notification.ant-notification-bottom .ant-notification-fade-appear.ant-notification-fade-appear-active{animation-name:css-sk7ap8-antNotificationBottomFadeIn;}:where(.css-sk7ap8).ant-notification-rtl{direction:rtl;}:where(.css-sk7ap8).ant-notification-rtl .ant-notification-notice-btn{float:left;}:where(.css-sk7ap8).ant-notification-notice{position:relative;width:384px;max-width:calc(100vw - 48px);margin-bottom:16px;margin-inline-start:auto;padding:20px 24px;overflow:hidden;line-height:1.5714285714285714;word-wrap:break-word;background:#ffffff;border-radius:8px;box-shadow:0 6px 16px 0 rgba(0, 0, 0, 0.08),0 3px 6px -4px rgba(0, 0, 0, 0.12),0 9px 28px 8px rgba(0, 0, 0, 0.05);}:where(.css-sk7ap8).ant-notification-notice .ant-notification-close-icon{font-size:14px;cursor:pointer;}:where(.css-sk7ap8).ant-notification-notice .ant-notification-notice-message{margin-bottom:8px;color:rgba(0, 0, 0, 0.88);font-size:16px;line-height:1.5;}:where(.css-sk7ap8).ant-notification-notice .ant-notification-notice-description{font-size:14px;}:where(.css-sk7ap8).ant-notification-notice.ant-notification-notice-closable .ant-notification-notice-message{padding-inline-end:24px;}:where(.css-sk7ap8).ant-notification-notice .ant-notification-notice-with-icon .ant-notification-notice-message{margin-bottom:8px;margin-inline-start:36px;font-size:16px;}:where(.css-sk7ap8).ant-notification-notice .ant-notification-notice-with-icon .ant-notification-notice-description{margin-inline-start:36px;font-size:14px;}:where(.css-sk7ap8).ant-notification-notice .ant-notification-notice-icon{position:absolute;font-size:24px;line-height:0;}:where(.css-sk7ap8).ant-notification-notice .ant-notification-notice-icon-success.anticon{color:#52c41a;}:where(.css-sk7ap8).ant-notification-notice .ant-notification-notice-icon-info.anticon{color:#1677ff;}:where(.css-sk7ap8).ant-notification-notice .ant-notification-notice-icon-warning.anticon{color:#faad14;}:where(.css-sk7ap8).ant-notification-notice .ant-notification-notice-icon-error.anticon{color:#ff4d4f;}:where(.css-sk7ap8).ant-notification-notice .ant-notification-notice-close{position:absolute;top:20px;inset-inline-end:24px;color:rgba(0, 0, 0, 0.45);outline:none;width:22px;height:22px;border-radius:4px;transition:background-color 0.2s,color 0.2s;display:flex;align-items:center;justify-content:center;}:where(.css-sk7ap8).ant-notification-notice .ant-notification-notice-close:hover{color:rgba(0, 0, 0, 0.88);background-color:rgba(0, 0, 0, 0.06);}:where(.css-sk7ap8).ant-notification-notice .ant-notification-notice-btn{float:right;margin-top:12px;}:where(.css-sk7ap8).ant-notification-notice-pure-panel{margin:0;}</style><style data-rc-order="prependQueue" data-css-hash="_effect-css-sk7ap8-antNotificationLeftFadeIn">@keyframes css-sk7ap8-antNotificationLeftFadeIn{0%{right:384px;opacity:0;}100%{right:0;opacity:1;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-css-sk7ap8-antNotificationFadeIn">@keyframes css-sk7ap8-antNotificationFadeIn{0%{left:384px;opacity:0;}100%{left:0;opacity:1;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-css-sk7ap8-antNotificationFadeOut">@keyframes css-sk7ap8-antNotificationFadeOut{0%{max-height:150px;margin-bottom:16px;opacity:1;}100%{max-height:0;margin-bottom:0;padding-top:0;padding-bottom:0;opacity:0;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-css-sk7ap8-antNotificationTopFadeIn">@keyframes css-sk7ap8-antNotificationTopFadeIn{0%{margin-top:-100%;opacity:0;}100%{margin-top:0;opacity:1;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-css-sk7ap8-antNotificationBottomFadeIn">@keyframes css-sk7ap8-antNotificationBottomFadeIn{0%{margin-bottom:-100%;opacity:0;}100%{margin-bottom:0;opacity:1;}}</style><style data-rc-order="prependQueue" data-css-hash="pb7mjo" data-token-hash="18ps9sa">:where(.css-sk7ap8)[class^="ant-btn"],:where(.css-sk7ap8)[class*=" ant-btn"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}:where(.css-sk7ap8)[class^="ant-btn"]::before,:where(.css-sk7ap8)[class*=" ant-btn"]::before,:where(.css-sk7ap8)[class^="ant-btn"]::after,:where(.css-sk7ap8)[class*=" ant-btn"]::after{box-sizing:border-box;}:where(.css-sk7ap8)[class^="ant-btn"] [class^="ant-btn"],:where(.css-sk7ap8)[class*=" ant-btn"] [class^="ant-btn"],:where(.css-sk7ap8)[class^="ant-btn"] [class*=" ant-btn"],:where(.css-sk7ap8)[class*=" ant-btn"] [class*=" ant-btn"]{box-sizing:border-box;}:where(.css-sk7ap8)[class^="ant-btn"] [class^="ant-btn"]::before,:where(.css-sk7ap8)[class*=" ant-btn"] [class^="ant-btn"]::before,:where(.css-sk7ap8)[class^="ant-btn"] [class*=" ant-btn"]::before,:where(.css-sk7ap8)[class*=" ant-btn"] [class*=" ant-btn"]::before,:where(.css-sk7ap8)[class^="ant-btn"] [class^="ant-btn"]::after,:where(.css-sk7ap8)[class*=" ant-btn"] [class^="ant-btn"]::after,:where(.css-sk7ap8)[class^="ant-btn"] [class*=" ant-btn"]::after,:where(.css-sk7ap8)[class*=" ant-btn"] [class*=" ant-btn"]::after{box-sizing:border-box;}:where(.css-sk7ap8).ant-btn{outline:none;position:relative;display:inline-block;font-weight:400;white-space:nowrap;text-align:center;background-image:none;background-color:transparent;border:1px solid transparent;cursor:pointer;transition:all 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);user-select:none;touch-action:manipulation;line-height:1.5714285714285714;color:rgba(0, 0, 0, 0.88);}:where(.css-sk7ap8).ant-btn >span{display:inline-flex;}:where(.css-sk7ap8).ant-btn >.anticon+span,:where(.css-sk7ap8).ant-btn >span+.anticon{margin-inline-start:8px;}:where(.css-sk7ap8).ant-btn:not(:disabled):focus-visible{outline:4px solid #91caff;outline-offset:1px;transition:outline-offset 0s,outline 0s;}:where(.css-sk7ap8).ant-btn-icon-only:where(.css-sk7ap8).ant-btn-compact-item{flex:none;}:where(.css-sk7ap8).ant-btn-compact-item.ant-btn-primary:not([disabled])+:where(.css-sk7ap8).ant-btn-compact-item.ant-btn-primary:not([disabled]){position:relative;}:where(.css-sk7ap8).ant-btn-compact-item.ant-btn-primary:not([disabled])+:where(.css-sk7ap8).ant-btn-compact-item.ant-btn-primary:not([disabled]):before{position:absolute;top:-1px;inset-inline-start:-1px;display:inline-block;width:1px;height:calc(100% + 2px);background-color:#4096ff;content:"";}:where(.css-sk7ap8).ant-btn-compact-vertical-item.ant-btn-primary:not([disabled])+:where(.css-sk7ap8).ant-btn-compact-vertical-item.ant-btn-primary:not([disabled]){position:relative;}:where(.css-sk7ap8).ant-btn-compact-vertical-item.ant-btn-primary:not([disabled])+:where(.css-sk7ap8).ant-btn-compact-vertical-item.ant-btn-primary:not([disabled]):before{position:absolute;top:-1px;inset-inline-start:-1px;display:inline-block;width:calc(100% + 2px);height:1px;background-color:#4096ff;content:"";}:where(.css-sk7ap8).ant-btn.ant-btn-sm{font-size:14px;height:24px;padding:0px 7px;border-radius:4px;}:where(.css-sk7ap8).ant-btn.ant-btn-sm.ant-btn-icon-only{width:24px;padding-inline-start:0;padding-inline-end:0;}:where(.css-sk7ap8).ant-btn.ant-btn-sm.ant-btn-icon-only.ant-btn-round{width:auto;}:where(.css-sk7ap8).ant-btn.ant-btn-sm.ant-btn-icon-only >span{transform:scale(1.143);}:where(.css-sk7ap8).ant-btn.ant-btn-sm.ant-btn-loading{opacity:0.65;cursor:default;}:where(.css-sk7ap8).ant-btn.ant-btn-sm .ant-btn-loading-icon{transition:width 0.3s cubic-bezier(0.645, 0.045, 0.355, 1),opacity 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);}:where(.css-sk7ap8).ant-btn.ant-btn-sm:not(.ant-btn-icon-only) .ant-btn-loading-icon>.anticon{margin-inline-end:8px;}:where(.css-sk7ap8).ant-btn.ant-btn-circle.ant-btn-sm{min-width:24px;padding-inline-start:0;padding-inline-end:0;border-radius:50%;}:where(.css-sk7ap8).ant-btn.ant-btn-round.ant-btn-sm{border-radius:24px;padding-inline-start:12px;padding-inline-end:12px;}:where(.css-sk7ap8).ant-btn{font-size:14px;height:32px;padding:4px 15px;border-radius:6px;}:where(.css-sk7ap8).ant-btn.ant-btn-icon-only{width:32px;padding-inline-start:0;padding-inline-end:0;}:where(.css-sk7ap8).ant-btn.ant-btn-icon-only.ant-btn-round{width:auto;}:where(.css-sk7ap8).ant-btn.ant-btn-icon-only >span{transform:scale(1.143);}:where(.css-sk7ap8).ant-btn.ant-btn-loading{opacity:0.65;cursor:default;}:where(.css-sk7ap8).ant-btn .ant-btn-loading-icon{transition:width 0.3s cubic-bezier(0.645, 0.045, 0.355, 1),opacity 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);}:where(.css-sk7ap8).ant-btn:not(.ant-btn-icon-only) .ant-btn-loading-icon>.anticon{margin-inline-end:8px;}:where(.css-sk7ap8).ant-btn.ant-btn-circle{min-width:32px;padding-inline-start:0;padding-inline-end:0;border-radius:50%;}:where(.css-sk7ap8).ant-btn.ant-btn-round{border-radius:32px;padding-inline-start:16px;padding-inline-end:16px;}:where(.css-sk7ap8).ant-btn.ant-btn-lg{font-size:16px;height:40px;padding:6.428571428571429px 15px;border-radius:8px;}:where(.css-sk7ap8).ant-btn.ant-btn-lg.ant-btn-icon-only{width:40px;padding-inline-start:0;padding-inline-end:0;}:where(.css-sk7ap8).ant-btn.ant-btn-lg.ant-btn-icon-only.ant-btn-round{width:auto;}:where(.css-sk7ap8).ant-btn.ant-btn-lg.ant-btn-icon-only >span{transform:scale(1.143);}:where(.css-sk7ap8).ant-btn.ant-btn-lg.ant-btn-loading{opacity:0.65;cursor:default;}:where(.css-sk7ap8).ant-btn.ant-btn-lg .ant-btn-loading-icon{transition:width 0.3s cubic-bezier(0.645, 0.045, 0.355, 1),opacity 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);}:where(.css-sk7ap8).ant-btn.ant-btn-lg:not(.ant-btn-icon-only) .ant-btn-loading-icon>.anticon{margin-inline-end:8px;}:where(.css-sk7ap8).ant-btn.ant-btn-circle.ant-btn-lg{min-width:40px;padding-inline-start:0;padding-inline-end:0;border-radius:50%;}:where(.css-sk7ap8).ant-btn.ant-btn-round.ant-btn-lg{border-radius:40px;padding-inline-start:20px;padding-inline-end:20px;}:where(.css-sk7ap8).ant-btn.ant-btn-block{width:100%;}:where(.css-sk7ap8).ant-btn-default{background-color:#ffffff;border-color:#d9d9d9;box-shadow:0 2px 0 rgba(0, 0, 0, 0.02);}:where(.css-sk7ap8).ant-btn-default:disabled{cursor:not-allowed;border-color:#d9d9d9;color:rgba(0, 0, 0, 0.25);background-color:rgba(0, 0, 0, 0.04);box-shadow:none;}:where(.css-sk7ap8).ant-btn-default:not(:disabled):hover{color:#4096ff;border-color:#4096ff;}:where(.css-sk7ap8).ant-btn-default:not(:disabled):active{color:#0958d9;border-color:#0958d9;}:where(.css-sk7ap8).ant-btn-default.ant-btn-background-ghost{color:#ffffff;background-color:transparent;border-color:#ffffff;box-shadow:none;}:where(.css-sk7ap8).ant-btn-default.ant-btn-background-ghost:not(:disabled):hover{background-color:transparent;}:where(.css-sk7ap8).ant-btn-default.ant-btn-background-ghost:not(:disabled):active{background-color:transparent;}:where(.css-sk7ap8).ant-btn-default.ant-btn-background-ghost:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);border-color:#d9d9d9;}:where(.css-sk7ap8).ant-btn-default.ant-btn-dangerous{color:#ff4d4f;border-color:#ff4d4f;}:where(.css-sk7ap8).ant-btn-default.ant-btn-dangerous:not(:disabled):hover{color:#ff7875;border-color:#ffa39e;}:where(.css-sk7ap8).ant-btn-default.ant-btn-dangerous:not(:disabled):active{color:#d9363e;border-color:#d9363e;}:where(.css-sk7ap8).ant-btn-default.ant-btn-dangerous.ant-btn-background-ghost{color:#ff4d4f;background-color:transparent;border-color:#ff4d4f;box-shadow:none;}:where(.css-sk7ap8).ant-btn-default.ant-btn-dangerous.ant-btn-background-ghost:not(:disabled):hover{background-color:transparent;}:where(.css-sk7ap8).ant-btn-default.ant-btn-dangerous.ant-btn-background-ghost:not(:disabled):active{background-color:transparent;}:where(.css-sk7ap8).ant-btn-default.ant-btn-dangerous.ant-btn-background-ghost:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);border-color:#d9d9d9;}:where(.css-sk7ap8).ant-btn-default.ant-btn-dangerous:disabled{cursor:not-allowed;border-color:#d9d9d9;color:rgba(0, 0, 0, 0.25);background-color:rgba(0, 0, 0, 0.04);box-shadow:none;}:where(.css-sk7ap8).ant-btn-primary{color:#fff;background-color:#1677ff;box-shadow:0 2px 0 rgba(5, 145, 255, 0.1);}:where(.css-sk7ap8).ant-btn-primary:disabled{cursor:not-allowed;border-color:#d9d9d9;color:rgba(0, 0, 0, 0.25);background-color:rgba(0, 0, 0, 0.04);box-shadow:none;}:where(.css-sk7ap8).ant-btn-primary:not(:disabled):hover{color:#fff;background-color:#4096ff;}:where(.css-sk7ap8).ant-btn-primary:not(:disabled):active{color:#fff;background-color:#0958d9;}:where(.css-sk7ap8).ant-btn-primary.ant-btn-background-ghost{color:#1677ff;background-color:transparent;border-color:#1677ff;box-shadow:none;}:where(.css-sk7ap8).ant-btn-primary.ant-btn-background-ghost:not(:disabled):hover{background-color:transparent;color:#4096ff;border-color:#4096ff;}:where(.css-sk7ap8).ant-btn-primary.ant-btn-background-ghost:not(:disabled):active{background-color:transparent;color:#0958d9;border-color:#0958d9;}:where(.css-sk7ap8).ant-btn-primary.ant-btn-background-ghost:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);border-color:#d9d9d9;}:where(.css-sk7ap8).ant-btn-primary.ant-btn-dangerous{background-color:#ff4d4f;box-shadow:0 2px 0 rgba(255, 38, 5, 0.06);}:where(.css-sk7ap8).ant-btn-primary.ant-btn-dangerous:not(:disabled):hover{background-color:#ff7875;}:where(.css-sk7ap8).ant-btn-primary.ant-btn-dangerous:not(:disabled):active{background-color:#d9363e;}:where(.css-sk7ap8).ant-btn-primary.ant-btn-dangerous.ant-btn-background-ghost{color:#ff4d4f;background-color:transparent;border-color:#ff4d4f;box-shadow:none;}:where(.css-sk7ap8).ant-btn-primary.ant-btn-dangerous.ant-btn-background-ghost:not(:disabled):hover{background-color:transparent;color:#ff7875;border-color:#ff7875;}:where(.css-sk7ap8).ant-btn-primary.ant-btn-dangerous.ant-btn-background-ghost:not(:disabled):active{background-color:transparent;color:#d9363e;border-color:#d9363e;}:where(.css-sk7ap8).ant-btn-primary.ant-btn-dangerous.ant-btn-background-ghost:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);border-color:#d9d9d9;}:where(.css-sk7ap8).ant-btn-primary.ant-btn-dangerous:disabled{cursor:not-allowed;border-color:#d9d9d9;color:rgba(0, 0, 0, 0.25);background-color:rgba(0, 0, 0, 0.04);box-shadow:none;}:where(.css-sk7ap8).ant-btn-dashed{background-color:#ffffff;border-color:#d9d9d9;box-shadow:0 2px 0 rgba(0, 0, 0, 0.02);border-style:dashed;}:where(.css-sk7ap8).ant-btn-dashed:disabled{cursor:not-allowed;border-color:#d9d9d9;color:rgba(0, 0, 0, 0.25);background-color:rgba(0, 0, 0, 0.04);box-shadow:none;}:where(.css-sk7ap8).ant-btn-dashed:not(:disabled):hover{color:#4096ff;border-color:#4096ff;}:where(.css-sk7ap8).ant-btn-dashed:not(:disabled):active{color:#0958d9;border-color:#0958d9;}:where(.css-sk7ap8).ant-btn-dashed.ant-btn-background-ghost{color:#ffffff;background-color:transparent;border-color:#ffffff;box-shadow:none;}:where(.css-sk7ap8).ant-btn-dashed.ant-btn-background-ghost:not(:disabled):hover{background-color:transparent;}:where(.css-sk7ap8).ant-btn-dashed.ant-btn-background-ghost:not(:disabled):active{background-color:transparent;}:where(.css-sk7ap8).ant-btn-dashed.ant-btn-background-ghost:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);border-color:#d9d9d9;}:where(.css-sk7ap8).ant-btn-dashed.ant-btn-dangerous{color:#ff4d4f;border-color:#ff4d4f;}:where(.css-sk7ap8).ant-btn-dashed.ant-btn-dangerous:not(:disabled):hover{color:#ff7875;border-color:#ffa39e;}:where(.css-sk7ap8).ant-btn-dashed.ant-btn-dangerous:not(:disabled):active{color:#d9363e;border-color:#d9363e;}:where(.css-sk7ap8).ant-btn-dashed.ant-btn-dangerous.ant-btn-background-ghost{color:#ff4d4f;background-color:transparent;border-color:#ff4d4f;box-shadow:none;}:where(.css-sk7ap8).ant-btn-dashed.ant-btn-dangerous.ant-btn-background-ghost:not(:disabled):hover{background-color:transparent;}:where(.css-sk7ap8).ant-btn-dashed.ant-btn-dangerous.ant-btn-background-ghost:not(:disabled):active{background-color:transparent;}:where(.css-sk7ap8).ant-btn-dashed.ant-btn-dangerous.ant-btn-background-ghost:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);border-color:#d9d9d9;}:where(.css-sk7ap8).ant-btn-dashed.ant-btn-dangerous:disabled{cursor:not-allowed;border-color:#d9d9d9;color:rgba(0, 0, 0, 0.25);background-color:rgba(0, 0, 0, 0.04);box-shadow:none;}:where(.css-sk7ap8).ant-btn-link{color:#1677ff;}:where(.css-sk7ap8).ant-btn-link:not(:disabled):hover{color:#69b1ff;}:where(.css-sk7ap8).ant-btn-link:not(:disabled):active{color:#0958d9;}:where(.css-sk7ap8).ant-btn-link:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);}:where(.css-sk7ap8).ant-btn-link.ant-btn-dangerous{color:#ff4d4f;}:where(.css-sk7ap8).ant-btn-link.ant-btn-dangerous:not(:disabled):hover{color:#ff7875;}:where(.css-sk7ap8).ant-btn-link.ant-btn-dangerous:not(:disabled):active{color:#d9363e;}:where(.css-sk7ap8).ant-btn-link.ant-btn-dangerous:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);}:where(.css-sk7ap8).ant-btn-text:not(:disabled):hover{color:rgba(0, 0, 0, 0.88);background-color:rgba(0, 0, 0, 0.06);}:where(.css-sk7ap8).ant-btn-text:not(:disabled):active{color:rgba(0, 0, 0, 0.88);background-color:rgba(0, 0, 0, 0.15);}:where(.css-sk7ap8).ant-btn-text:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);}:where(.css-sk7ap8).ant-btn-text.ant-btn-dangerous{color:#ff4d4f;}:where(.css-sk7ap8).ant-btn-text.ant-btn-dangerous:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);}:where(.css-sk7ap8).ant-btn-text.ant-btn-dangerous:not(:disabled):hover{color:#ff7875;background-color:#fff2f0;}:where(.css-sk7ap8).ant-btn-text.ant-btn-dangerous:not(:disabled):active{color:#ff7875;background-color:#fff2f0;}:where(.css-sk7ap8).ant-btn-disabled{cursor:not-allowed;border-color:#d9d9d9;color:rgba(0, 0, 0, 0.25);background-color:rgba(0, 0, 0, 0.04);box-shadow:none;}:where(.css-sk7ap8).ant-btn-disabled.ant-btn:hover{cursor:not-allowed;border-color:#d9d9d9;color:rgba(0, 0, 0, 0.25);background-color:rgba(0, 0, 0, 0.04);box-shadow:none;}:where(.css-sk7ap8).ant-btn-group{position:relative;display:inline-flex;}:where(.css-sk7ap8).ant-btn-group >span:not(:last-child),:where(.css-sk7ap8).ant-btn-group >.ant-btn:not(:last-child),:where(.css-sk7ap8).ant-btn-group >span:not(:last-child)>.ant-btn,:where(.css-sk7ap8).ant-btn-group >.ant-btn:not(:last-child)>.ant-btn{border-start-end-radius:0;border-end-end-radius:0;}:where(.css-sk7ap8).ant-btn-group >span:not(:first-child),:where(.css-sk7ap8).ant-btn-group >.ant-btn:not(:first-child){margin-inline-start:-1px;}:where(.css-sk7ap8).ant-btn-group >span:not(:first-child),:where(.css-sk7ap8).ant-btn-group >.ant-btn:not(:first-child),:where(.css-sk7ap8).ant-btn-group >span:not(:first-child)>.ant-btn,:where(.css-sk7ap8).ant-btn-group >.ant-btn:not(:first-child)>.ant-btn{border-start-start-radius:0;border-end-start-radius:0;}:where(.css-sk7ap8).ant-btn-group .ant-btn{position:relative;z-index:1;}:where(.css-sk7ap8).ant-btn-group .ant-btn:hover,:where(.css-sk7ap8).ant-btn-group .ant-btn:focus,:where(.css-sk7ap8).ant-btn-group .ant-btn:active{z-index:2;}:where(.css-sk7ap8).ant-btn-group .ant-btn[disabled]{z-index:0;}:where(.css-sk7ap8).ant-btn-group .ant-btn-icon-only{font-size:14px;}:where(.css-sk7ap8).ant-btn-group >span:not(:last-child):not(:disabled),:where(.css-sk7ap8).ant-btn-group >.ant-btn-primary:not(:last-child):not(:disabled),:where(.css-sk7ap8).ant-btn-group >span:not(:last-child)>.ant-btn-primary:not(:disabled),:where(.css-sk7ap8).ant-btn-group >.ant-btn-primary:not(:last-child)>.ant-btn-primary:not(:disabled){border-inline-end-color:#4096ff;}:where(.css-sk7ap8).ant-btn-group >span:not(:first-child):not(:disabled),:where(.css-sk7ap8).ant-btn-group >.ant-btn-primary:not(:first-child):not(:disabled),:where(.css-sk7ap8).ant-btn-group >span:not(:first-child)>.ant-btn-primary:not(:disabled),:where(.css-sk7ap8).ant-btn-group >.ant-btn-primary:not(:first-child)>.ant-btn-primary:not(:disabled){border-inline-start-color:#4096ff;}:where(.css-sk7ap8).ant-btn-group >span:not(:last-child):not(:disabled),:where(.css-sk7ap8).ant-btn-group >.ant-btn-danger:not(:last-child):not(:disabled),:where(.css-sk7ap8).ant-btn-group >span:not(:last-child)>.ant-btn-danger:not(:disabled),:where(.css-sk7ap8).ant-btn-group >.ant-btn-danger:not(:last-child)>.ant-btn-danger:not(:disabled){border-inline-end-color:#ff7875;}:where(.css-sk7ap8).ant-btn-group >span:not(:first-child):not(:disabled),:where(.css-sk7ap8).ant-btn-group >.ant-btn-danger:not(:first-child):not(:disabled),:where(.css-sk7ap8).ant-btn-group >span:not(:first-child)>.ant-btn-danger:not(:disabled),:where(.css-sk7ap8).ant-btn-group >.ant-btn-danger:not(:first-child)>.ant-btn-danger:not(:disabled){border-inline-start-color:#ff7875;}:where(.css-sk7ap8).ant-btn-compact-item:not(:where(.css-sk7ap8).ant-btn-compact-last-item){margin-inline-end:-1px;}:where(.css-sk7ap8).ant-btn-compact-item:hover,:where(.css-sk7ap8).ant-btn-compact-item:active{z-index:2;}:where(.css-sk7ap8).ant-btn-compact-item[disabled]{z-index:0;}:where(.css-sk7ap8).ant-btn-compact-item:not(:where(.css-sk7ap8).ant-btn-compact-first-item):not(:where(.css-sk7ap8).ant-btn-compact-last-item){border-radius:0;}:where(.css-sk7ap8).ant-btn-compact-item:not(:where(.css-sk7ap8).ant-btn-compact-last-item):where(.css-sk7ap8).ant-btn-compact-first-item,:where(.css-sk7ap8).ant-btn-compact-item:not(:where(.css-sk7ap8).ant-btn-compact-last-item):where(.css-sk7ap8).ant-btn-compact-first-item.ant-btn-sm,:where(.css-sk7ap8).ant-btn-compact-item:not(:where(.css-sk7ap8).ant-btn-compact-last-item):where(.css-sk7ap8).ant-btn-compact-first-item.ant-btn-lg{border-start-end-radius:0;border-end-end-radius:0;}:where(.css-sk7ap8).ant-btn-compact-item:not(:where(.css-sk7ap8).ant-btn-compact-first-item):where(.css-sk7ap8).ant-btn-compact-last-item,:where(.css-sk7ap8).ant-btn-compact-item:not(:where(.css-sk7ap8).ant-btn-compact-first-item):where(.css-sk7ap8).ant-btn-compact-last-item.ant-btn-sm,:where(.css-sk7ap8).ant-btn-compact-item:not(:where(.css-sk7ap8).ant-btn-compact-first-item):where(.css-sk7ap8).ant-btn-compact-last-item.ant-btn-lg{border-start-start-radius:0;border-end-start-radius:0;}:where(.css-sk7ap8).ant-btn-compact-vertical-item:not(:where(.css-sk7ap8).ant-btn-compact-vertical-last-item){margin-bottom:-1px;}:where(.css-sk7ap8).ant-btn-compact-vertical-item:hover,:where(.css-sk7ap8).ant-btn-compact-vertical-item:focus,:where(.css-sk7ap8).ant-btn-compact-vertical-item:active{z-index:2;}:where(.css-sk7ap8).ant-btn-compact-vertical-item[disabled]{z-index:0;}:where(.css-sk7ap8).ant-btn-compact-vertical-item:not(:where(.css-sk7ap8).ant-btn-compact-vertical-first-item):not(:where(.css-sk7ap8).ant-btn-compact-vertical-last-item){border-radius:0;}:where(.css-sk7ap8).ant-btn-compact-vertical-item:where(.css-sk7ap8).ant-btn-compact-vertical-first-item:not(:where(.css-sk7ap8).ant-btn-compact-vertical-last-item),:where(.css-sk7ap8).ant-btn-compact-vertical-item:where(.css-sk7ap8).ant-btn-compact-vertical-first-item:not(:where(.css-sk7ap8).ant-btn-compact-vertical-last-item).ant-btn-sm,:where(.css-sk7ap8).ant-btn-compact-vertical-item:where(.css-sk7ap8).ant-btn-compact-vertical-first-item:not(:where(.css-sk7ap8).ant-btn-compact-vertical-last-item).ant-btn-lg{border-end-end-radius:0;border-end-start-radius:0;}:where(.css-sk7ap8).ant-btn-compact-vertical-item:where(.css-sk7ap8).ant-btn-compact-vertical-last-item:not(:where(.css-sk7ap8).ant-btn-compact-vertical-first-item),:where(.css-sk7ap8).ant-btn-compact-vertical-item:where(.css-sk7ap8).ant-btn-compact-vertical-last-item:not(:where(.css-sk7ap8).ant-btn-compact-vertical-first-item).ant-btn-sm,:where(.css-sk7ap8).ant-btn-compact-vertical-item:where(.css-sk7ap8).ant-btn-compact-vertical-last-item:not(:where(.css-sk7ap8).ant-btn-compact-vertical-first-item).ant-btn-lg{border-start-start-radius:0;border-start-end-radius:0;}</style><style data-rc-order="prependQueue" data-css-hash="1hratzw" data-token-hash="18ps9sa">:where(.css-sk7ap8)[class^="ant-wave"],:where(.css-sk7ap8)[class*=" ant-wave"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}:where(.css-sk7ap8)[class^="ant-wave"]::before,:where(.css-sk7ap8)[class*=" ant-wave"]::before,:where(.css-sk7ap8)[class^="ant-wave"]::after,:where(.css-sk7ap8)[class*=" ant-wave"]::after{box-sizing:border-box;}:where(.css-sk7ap8)[class^="ant-wave"] [class^="ant-wave"],:where(.css-sk7ap8)[class*=" ant-wave"] [class^="ant-wave"],:where(.css-sk7ap8)[class^="ant-wave"] [class*=" ant-wave"],:where(.css-sk7ap8)[class*=" ant-wave"] [class*=" ant-wave"]{box-sizing:border-box;}:where(.css-sk7ap8)[class^="ant-wave"] [class^="ant-wave"]::before,:where(.css-sk7ap8)[class*=" ant-wave"] [class^="ant-wave"]::before,:where(.css-sk7ap8)[class^="ant-wave"] [class*=" ant-wave"]::before,:where(.css-sk7ap8)[class*=" ant-wave"] [class*=" ant-wave"]::before,:where(.css-sk7ap8)[class^="ant-wave"] [class^="ant-wave"]::after,:where(.css-sk7ap8)[class*=" ant-wave"] [class^="ant-wave"]::after,:where(.css-sk7ap8)[class^="ant-wave"] [class*=" ant-wave"]::after,:where(.css-sk7ap8)[class*=" ant-wave"] [class*=" ant-wave"]::after{box-sizing:border-box;}:where(.css-sk7ap8).ant-wave{position:absolute;background:transparent;pointer-events:none;box-sizing:border-box;color:var(--wave-color, #1677ff);box-shadow:0 0 0 0 currentcolor;opacity:0.2;}:where(.css-sk7ap8).ant-wave.wave-motion-appear{transition:box-shadow 0.4s cubic-bezier(0.08, 0.82, 0.17, 1),opacity 2s cubic-bezier(0.08, 0.82, 0.17, 1);}:where(.css-sk7ap8).ant-wave.wave-motion-appear-active{box-shadow:0 0 0 6px currentcolor;opacity:0;}</style><style data-rc-order="prependQueue" data-css-hash="1lmceu8" data-token-hash="18ps9sa">:where(.css-sk7ap8)[class^="ant-message"],:where(.css-sk7ap8)[class*=" ant-message"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}:where(.css-sk7ap8)[class^="ant-message"]::before,:where(.css-sk7ap8)[class*=" ant-message"]::before,:where(.css-sk7ap8)[class^="ant-message"]::after,:where(.css-sk7ap8)[class*=" ant-message"]::after{box-sizing:border-box;}:where(.css-sk7ap8)[class^="ant-message"] [class^="ant-message"],:where(.css-sk7ap8)[class*=" ant-message"] [class^="ant-message"],:where(.css-sk7ap8)[class^="ant-message"] [class*=" ant-message"],:where(.css-sk7ap8)[class*=" ant-message"] [class*=" ant-message"]{box-sizing:border-box;}:where(.css-sk7ap8)[class^="ant-message"] [class^="ant-message"]::before,:where(.css-sk7ap8)[class*=" ant-message"] [class^="ant-message"]::before,:where(.css-sk7ap8)[class^="ant-message"] [class*=" ant-message"]::before,:where(.css-sk7ap8)[class*=" ant-message"] [class*=" ant-message"]::before,:where(.css-sk7ap8)[class^="ant-message"] [class^="ant-message"]::after,:where(.css-sk7ap8)[class*=" ant-message"] [class^="ant-message"]::after,:where(.css-sk7ap8)[class^="ant-message"] [class*=" ant-message"]::after,:where(.css-sk7ap8)[class*=" ant-message"] [class*=" ant-message"]::after{box-sizing:border-box;}:where(.css-sk7ap8).ant-message{box-sizing:border-box;margin:0;padding:0;color:rgba(0, 0, 0, 0.88);font-size:14px;line-height:1.5714285714285714;list-style:none;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';position:fixed;top:8px;width:100%;pointer-events:none;z-index:1010;}:where(.css-sk7ap8).ant-message .ant-message-move-up{animation-fill-mode:forwards;}:where(.css-sk7ap8).ant-message .ant-message-move-up-appear,:where(.css-sk7ap8).ant-message .ant-message-move-up-enter{animation-name:css-sk7ap8-MessageMoveIn;animation-duration:0.3s;animation-play-state:paused;animation-timing-function:cubic-bezier(0.78, 0.14, 0.15, 0.86);}:where(.css-sk7ap8).ant-message .ant-message-move-up-appear.ant-message-move-up-appear-active,:where(.css-sk7ap8).ant-message .ant-message-move-up-enter.ant-message-move-up-enter-active{animation-play-state:running;}:where(.css-sk7ap8).ant-message .ant-message-move-up-leave{animation-name:css-sk7ap8-MessageMoveOut;animation-duration:0.3s;animation-play-state:paused;animation-timing-function:cubic-bezier(0.78, 0.14, 0.15, 0.86);}:where(.css-sk7ap8).ant-message .ant-message-move-up-leave.ant-message-move-up-leave-active{animation-play-state:running;}:where(.css-sk7ap8).ant-message-rtl{direction:rtl;}:where(.css-sk7ap8).ant-message-rtl span{direction:rtl;}:where(.css-sk7ap8).ant-message-notice{padding:8px;text-align:center;}:where(.css-sk7ap8).ant-message-notice .anticon{vertical-align:text-bottom;margin-inline-end:8px;font-size:16px;}:where(.css-sk7ap8).ant-message-notice .ant-message-notice-content{display:inline-block;padding:9px 12px;background:#ffffff;border-radius:8px;box-shadow:0 6px 16px 0 rgba(0, 0, 0, 0.08),0 3px 6px -4px rgba(0, 0, 0, 0.12),0 9px 28px 8px rgba(0, 0, 0, 0.05);pointer-events:all;}:where(.css-sk7ap8).ant-message-notice .ant-message-success .anticon{color:#52c41a;}:where(.css-sk7ap8).ant-message-notice .ant-message-error .anticon{color:#ff4d4f;}:where(.css-sk7ap8).ant-message-notice .ant-message-warning .anticon{color:#faad14;}:where(.css-sk7ap8).ant-message-notice .ant-message-info .anticon,:where(.css-sk7ap8).ant-message-notice .ant-message-loading .anticon{color:#1677ff;}:where(.css-sk7ap8).ant-message-notice-pure-panel{padding:0;text-align:start;}</style><style data-rc-order="prependQueue" data-css-hash="_effect-css-sk7ap8-MessageMoveIn">@keyframes css-sk7ap8-MessageMoveIn{0%{padding:0;transform:translateY(-100%);opacity:0;}100%{padding:8px;transform:translateY(0);opacity:1;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-css-sk7ap8-MessageMoveOut">@keyframes css-sk7ap8-MessageMoveOut{0%{max-height:150px;padding:8px;opacity:1;}100%{max-height:0;padding:0;opacity:0;}}</style><style data-rc-order="prependQueue" data-css-hash="oroeuf" data-token-hash="gngivi">.ant-pro-page-container{position:relative;}.ant-pro-page-container-children-content{padding-block:24px;padding-inline:20px;}.ant-pro-page-container-affix .ant-affix .ant-pro-page-container-warp{background-color:#fff;transition:background-color 0.3s;box-shadow:0 2px 8px #f0f1f2;}.ant-pro-page-container .ant-pro-page-container-warp-page-header{padding-block-start:12px;padding-block-end:12px;padding-inline-start:40px;padding-inline-end:40px;}.ant-pro-page-container .ant-pro-page-container-warp-page-header~.ant-pro-grid-content .ant-pro-page-container-children-content{padding-block:8px;}.ant-pro-page-container-detail{display:flex;}@media (min-width: 576px){.ant-pro-page-container-detail{display:block;}}.ant-pro-page-container-main{width:100%;}.ant-pro-page-container-row{display:flex;width:100%;}@media (min-width: 768px){.ant-pro-page-container-row{display:block;}}.ant-pro-page-container-content{flex:auto;width:100%;}.ant-pro-page-container-extraContent{flex:0 1 auto;min-width:242px;margin-inline-start:88px;text-align:end;}@media (min-width: 576px){.ant-pro-page-container-extraContent{margin-inline-start:0;}}@media (min-width: 768px){.ant-pro-page-container-extraContent{margin-inline-start:0;text-align:start;}}@media (min-width: 992px){.ant-pro-page-container-extraContent{margin-inline-start:20px;}}@media (min-width: 1200px){.ant-pro-page-container-extraContent{margin-inline-start:44px;}}</style><style data-rc-order="prependQueue" data-css-hash="1smbh66" data-token-hash="gngivi"></style><style data-rc-order="prependQueue" data-css-hash="1aiu9w2" data-token-hash="160jlb5">[class^="ant-affix"],[class*=" ant-affix"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}[class^="ant-affix"]::before,[class*=" ant-affix"]::before,[class^="ant-affix"]::after,[class*=" ant-affix"]::after{box-sizing:border-box;}[class^="ant-affix"] [class^="ant-affix"],[class*=" ant-affix"] [class^="ant-affix"],[class^="ant-affix"] [class*=" ant-affix"],[class*=" ant-affix"] [class*=" ant-affix"]{box-sizing:border-box;}[class^="ant-affix"] [class^="ant-affix"]::before,[class*=" ant-affix"] [class^="ant-affix"]::before,[class^="ant-affix"] [class*=" ant-affix"]::before,[class*=" ant-affix"] [class*=" ant-affix"]::before,[class^="ant-affix"] [class^="ant-affix"]::after,[class*=" ant-affix"] [class^="ant-affix"]::after,[class^="ant-affix"] [class*=" ant-affix"]::after,[class*=" ant-affix"] [class*=" ant-affix"]::after{box-sizing:border-box;}.ant-affix{position:fixed;z-index:10;}</style><style data-rc-order="prependQueue" data-css-hash="wxddf2" data-token-hash="gngivi">.ant-page-header{box-sizing:border-box;margin:0;padding:0;color:rgba(0, 0, 0, 0.88);font-size:14px;line-height:1.5714285714285714;list-style:none;position:relative;background-color:transparent;padding-block:6px;padding-inline:16px;}.ant-page-header .ant-page-header-has-breadcrumb{padding-block-start:12px;}.ant-page-header .ant-page-header-has-footer{padding-block-end:0;}.ant-page-header .ant-page-header-back{margin-inline-end:16px;font-size:16px;line-height:1;}.ant-page-header .ant-page-header-back-button{font-size:16px;color:rgba(0, 0, 0, 0.88);outline:none;cursor:pointer;transition:color 0.3s;}.ant-page-header .ant-page-header-back-button:focus,.ant-page-header .ant-page-header-back-button:hover{color:#69b1ff;}.ant-page-header .ant-page-header-back-button:active{color:#0958d9;}.ant-page-header-rlt .ant-page-header .ant-page-header-back{float:right;margin-inline-end:0;margin-inline-start:0;}.ant-page-header ant-divider-vertical{height:14px;margin-block:0;margin-inline:12px;vertical-align:middle;}.ant-page-header .ant-page-header-breadcrumb+.ant-page-header-heading{margin-block-start:8px;}.ant-page-header .ant-page-header-heading{display:flex;justify-content:space-between;}.ant-page-header .ant-page-header-heading-left{display:flex;align-items:center;margin-block:4px;margin-inline-end:0;margin-inline-start:0;overflow:hidden;}.ant-page-header .ant-page-header-heading-title{margin-inline-end:12px;margin-block-end:0;color:rgba(0, 0, 0, 0.88);font-weight:600;font-size:20px;line-height:32px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;}.ant-page-header-rlt .ant-page-header .ant-page-header-heading-title{margin-inline-end:0;margin-inline-start:12px;}.ant-page-header .ant-page-header-heading-avatar{margin-inline-end:12px;}.ant-page-header-rlt .ant-page-header .ant-page-header-heading-avatar{float:right;margin-inline-end:0;margin-inline-start:12px;}.ant-page-header-rlt .ant-page-header .ant-page-header-heading-tags{float:right;}.ant-page-header .ant-page-header-heading-sub-title{margin-inline-end:12px;color:rgba(0, 0, 0, 0.65);font-size:14px;line-height:1.5714285714285714;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;}.ant-page-header-rlt .ant-page-header .ant-page-header-heading-sub-title{float:right;margin-inline-end:0;margin-inline-start:12px;}.ant-page-header .ant-page-header-heading-extra{margin-block:4px;margin-inline-end:0;margin-inline-start:0;white-space:nowrap;}.ant-page-header .ant-page-header-heading-extra >*{white-space:unset;}.ant-page-header-rlt .ant-page-header .ant-page-header-heading-extra >*{margin-inline-end:12px;margin-inline-start:0;}.ant-page-header-rlt .ant-page-header .ant-page-header-heading-extra{float:left;}.ant-page-header-rlt .ant-page-header .ant-page-header-heading-extra *:first-child{margin-inline-end:0;}.ant-page-header-content{padding-block-start:12px;}.ant-page-header-footer{margin-block-start:16px;}.ant-page-header-compact .ant-page-header-heading{flex-wrap:wrap;}.ant-page-header-wide{max-width:1152px;margin:0 auto;}.ant-page-header-rtl{direction:rtl;}</style><style data-rc-order="prependQueue" data-css-hash="dsb71j" data-token-hash="gngivi">.ant-pro-grid-content{width:100%;}.ant-pro-grid-content-wide{max-width:1152px;margin:0 auto;}</style><style data-rc-order="prependQueue" data-css-hash="v41i0s" data-token-hash="gngivi">.ant-pro-statistic-card-chart{display:flex;flex-direction:column;margin-block-start:8px;margin-block-end:8px;}.ant-pro-statistic-card-chart-left{margin-block-start:0;margin-inline-end:16px;}.ant-pro-statistic-card-chart-right{margin-block-start:0;margin-inline-start:16px;}.ant-pro-statistic-card-content{display:flex;flex-direction:column;}.ant-pro-statistic-card-content-horizontal{flex-direction:row;}.ant-pro-statistic-card-content-horizontal .ant-pro-statistic-card-chart{align-items:center;align-self:flex-start;}.ant-pro-statistic-card-footer{margin-block-start:8px;padding-block-start:16px;border-block-start:rgba(0, 0, 0, 0.08) solid #d9d9d9;}</style><style data-rc-order="prependQueue" data-css-hash="1s0i2cz" data-token-hash="gngivi">.ant-pro-card{position:relative;display:flex;flex-direction:column;box-sizing:border-box;width:100%;margin-block:0;margin-inline:0;padding-block:0;padding-inline:0;background-color:#ffffff;border-radius:6px;margin:0;padding:0;color:rgba(0, 0, 0, 0.88);font-size:14px;line-height:1.5714285714285714;list-style:none;}.ant-pro-card *{box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';}.ant-pro-card-box-shadow{box-shadow:0 1px 2px -2px #00000029,0 3px 6px #0000001f,0 5px 12px 4px #00000017;border-color:transparent;}.ant-pro-card-col{width:100%;}.ant-pro-card-border{border:1px solid rgba(5, 5, 5, 0.06);}.ant-pro-card-hoverable{cursor:pointer;transition:box-shadow 0.3s,border-color 0.3s;}.ant-pro-card-hoverable:hover{border-color:transparent;box-shadow:0 1px 2px -2px #00000029,0 3px 6px #0000001f,0 5px 12px 4px #00000017;}.ant-pro-card-hoverable.ant-pro-card-checked:hover{border-color:rgba(5, 145, 255, 0.1);}.ant-pro-card-checked{background-color:#e6f4ff;border-color:rgba(5, 145, 255, 0.1);}.ant-pro-card-checked::after{position:absolute;inset-block-start:2px;inset-inline-end:2px;width:0;height:0;border:6px solid #1677ff;border-block-end:6px solid transparent;border-inline-start:6px solid transparent;border-start-end-radius:2px;content:"";}.ant-pro-card:focus{background-color:#e6f4ff;border-color:rgba(5, 145, 255, 0.1);}.ant-pro-card.ant-pro-card-size-small .ant-pro-card-header{padding-inline:12px;padding-block:8px;padding-block-end:0;}.ant-pro-card.ant-pro-card-size-small .ant-pro-card-header-border{padding-block-end:8px;}.ant-pro-card.ant-pro-card-size-small .ant-pro-card-title{font-size:14px;}.ant-pro-card.ant-pro-card-size-small .ant-pro-card-body{padding-inline:12px;padding-block:12px;}.ant-pro-card.ant-pro-card-ghost{background-color:transparent;}.ant-pro-card.ant-pro-card-ghost >.ant-pro-card-header{padding-inline-end:0;padding-block-end:16px;padding-inline-start:0;}.ant-pro-card.ant-pro-card-ghost >.ant-pro-card-body{padding-block:0;padding-inline:0;background-color:transparent;}.ant-pro-card.ant-pro-card-split>.ant-pro-card-body{padding-block:0;padding-inline:0;}.ant-pro-card.ant-pro-card-contain-card>.ant-pro-card-body{display:flex;}.ant-pro-card .ant-pro-card-body-direction-column{flex-direction:column;}.ant-pro-card .ant-pro-card-body-wrap{flex-wrap:wrap;}.ant-pro-card.ant-pro-card-collapse >.ant-pro-card-header{padding-block-end:16px;border-block-end:0;}.ant-pro-card.ant-pro-card-collapse >.ant-pro-card-body{display:none;}.ant-pro-card .ant-pro-card-header{display:flex;align-items:center;justify-content:space-between;padding-inline:24px;padding-block:16px;padding-block-end:0;}.ant-pro-card .ant-pro-card-header-border{border-block-end:1px solid rgba(5, 5, 5, 0.06);}.ant-pro-card .ant-pro-card-header-border{padding-block-end:16px;}.ant-pro-card .ant-pro-card-header-collapsible{cursor:pointer;}.ant-pro-card .ant-pro-card-title{color:rgba(0, 0, 0, 0.88);font-weight:500;font-size:16px;line-height:1.5714285714285714;}.ant-pro-card .ant-pro-card-extra{color:rgba(0, 0, 0, 0.88);}.ant-pro-card .ant-pro-card-type-inner .ant-pro-card-header{background-color:rgba(0, 0, 0, 0.02);}.ant-pro-card .ant-pro-card-collapsible-icon{margin-inline-end:8px;color:rgba(0, 0, 0, 0.88);}.ant-pro-card .ant-pro-card-collapsible-icon :hover{color:#4096ff;}.ant-pro-card .ant-pro-card-collapsible-icon svg{transition:transform 0.2s;}.ant-pro-card .ant-pro-card-body{display:block;box-sizing:border-box;width:100%;height:100%;padding-inline:24px;padding-block:16px;}.ant-pro-card .ant-pro-card-body-center{display:flex;align-items:center;justify-content:center;}.ant-pro-card-col.ant-pro-card-split-vertical{border-inline-end:1px solid rgba(5, 5, 5, 0.06);}.ant-pro-card-col.ant-pro-card-split-horizontal{border-block-end:1px solid rgba(5, 5, 5, 0.06);}.ant-pro-card-tabs .ant-tabs-top>.ant-tabs-nav{margin-block-end:0;}.ant-pro-card-tabs .ant-tabs-top>.ant-tabs-nav .ant-tabs-nav-list{margin-block-start:8px;padding-inline-start:16px;}.ant-pro-card-tabs .ant-tabs-bottom>.ant-tabs-nav{margin-block-end:0;}.ant-pro-card-tabs .ant-tabs-bottom>.ant-tabs-nav .ant-tabs-nav-list{padding-inline-start:16px;}.ant-pro-card-tabs .ant-tabs-left .ant-tabs-content-holder .ant-tabs-content .ant-tabs-tabpane{padding-inline-start:0;}.ant-pro-card-tabs .ant-tabs-left>.ant-tabs-nav{margin-inline-end:0;}.ant-pro-card-tabs .ant-tabs-left>.ant-tabs-nav .ant-tabs-nav-list{padding-block-start:16px;}.ant-pro-card-tabs .ant-tabs-right .ant-tabs-content-holder .ant-tabs-content .ant-tabs-tabpane{padding-inline-start:0;}.ant-pro-card-tabs .ant-tabs-right>.ant-tabs-nav .ant-tabs-nav-list{padding-block-start:16px;}.ant-pro-card-col-0{display:none;}.ant-pro-card-col-1{flex-shrink:0;width:4.166666666666666%;}.ant-pro-card-col-2{flex-shrink:0;width:8.333333333333332%;}.ant-pro-card-col-3{flex-shrink:0;width:12.5%;}.ant-pro-card-col-4{flex-shrink:0;width:16.666666666666664%;}.ant-pro-card-col-5{flex-shrink:0;width:20.833333333333336%;}.ant-pro-card-col-6{flex-shrink:0;width:25%;}.ant-pro-card-col-7{flex-shrink:0;width:29.166666666666668%;}.ant-pro-card-col-8{flex-shrink:0;width:33.33333333333333%;}.ant-pro-card-col-9{flex-shrink:0;width:37.5%;}.ant-pro-card-col-10{flex-shrink:0;width:41.66666666666667%;}.ant-pro-card-col-11{flex-shrink:0;width:45.83333333333333%;}.ant-pro-card-col-12{flex-shrink:0;width:50%;}.ant-pro-card-col-13{flex-shrink:0;width:54.166666666666664%;}.ant-pro-card-col-14{flex-shrink:0;width:58.333333333333336%;}.ant-pro-card-col-15{flex-shrink:0;width:62.5%;}.ant-pro-card-col-16{flex-shrink:0;width:66.66666666666666%;}.ant-pro-card-col-17{flex-shrink:0;width:70.83333333333334%;}.ant-pro-card-col-18{flex-shrink:0;width:75%;}.ant-pro-card-col-19{flex-shrink:0;width:79.16666666666666%;}.ant-pro-card-col-20{flex-shrink:0;width:83.33333333333334%;}.ant-pro-card-col-21{flex-shrink:0;width:87.5%;}.ant-pro-card-col-22{flex-shrink:0;width:91.66666666666666%;}.ant-pro-card-col-23{flex-shrink:0;width:95.83333333333334%;}.ant-pro-card-col-24{flex-shrink:0;width:100%;}</style><style data-rc-order="prependQueue" data-css-hash="geukzd" data-token-hash="gngivi">.ant-pro-card-loading{overflow:hidden;}.ant-pro-card-loading .ant-pro-card-body{user-select:none;}.ant-pro-card .ant-pro-card-loading-content{width:100%;}.ant-pro-card .ant-pro-card-loading-content p{margin-block:0;margin-inline:0;}.ant-pro-card .ant-pro-card-loading-block{height:14px;margin-block:4px;background:linear-gradient(90deg, rgba(54, 61, 64, 0.2), rgba(54, 61, 64, 0.4), rgba(54, 61, 64, 0.2));background-size:600% 600%;border-radius:6px;animation-name:card-loading;animation-duration:1.4s;animation-timing-function:ease;animation-iteration-count:infinite;}@keyframes card-loading{0%{background-position:0 50%;}50%{background-position:100% 50%;}100%{background-position:0 50 %;}}</style><style data-rc-order="prependQueue" data-css-hash="1o4tmcq" data-token-hash="160jlb5">[class^="ant-row"],[class*=" ant-row"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}[class^="ant-row"]::before,[class*=" ant-row"]::before,[class^="ant-row"]::after,[class*=" ant-row"]::after{box-sizing:border-box;}[class^="ant-row"] [class^="ant-row"],[class*=" ant-row"] [class^="ant-row"],[class^="ant-row"] [class*=" ant-row"],[class*=" ant-row"] [class*=" ant-row"]{box-sizing:border-box;}[class^="ant-row"] [class^="ant-row"]::before,[class*=" ant-row"] [class^="ant-row"]::before,[class^="ant-row"] [class*=" ant-row"]::before,[class*=" ant-row"] [class*=" ant-row"]::before,[class^="ant-row"] [class^="ant-row"]::after,[class*=" ant-row"] [class^="ant-row"]::after,[class^="ant-row"] [class*=" ant-row"]::after,[class*=" ant-row"] [class*=" ant-row"]::after{box-sizing:border-box;}.ant-row{display:flex;flex-flow:row wrap;min-width:0;}.ant-row::before,.ant-row::after{display:flex;}.ant-row-no-wrap{flex-wrap:nowrap;}.ant-row-start{justify-content:flex-start;}.ant-row-center{justify-content:center;}.ant-row-end{justify-content:flex-end;}.ant-row-space-between{justify-content:space-between;}.ant-row-space-around{justify-content:space-around;}.ant-row-top{align-items:flex-start;}.ant-row-middle{align-items:center;}.ant-row-bottom{align-items:flex-end;}</style><style data-rc-order="prependQueue" data-css-hash="1oh5uhm" data-token-hash="160jlb5">[class^="ant-col"],[class*=" ant-col"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}[class^="ant-col"]::before,[class*=" ant-col"]::before,[class^="ant-col"]::after,[class*=" ant-col"]::after{box-sizing:border-box;}[class^="ant-col"] [class^="ant-col"],[class*=" ant-col"] [class^="ant-col"],[class^="ant-col"] [class*=" ant-col"],[class*=" ant-col"] [class*=" ant-col"]{box-sizing:border-box;}[class^="ant-col"] [class^="ant-col"]::before,[class*=" ant-col"] [class^="ant-col"]::before,[class^="ant-col"] [class*=" ant-col"]::before,[class*=" ant-col"] [class*=" ant-col"]::before,[class^="ant-col"] [class^="ant-col"]::after,[class*=" ant-col"] [class^="ant-col"]::after,[class^="ant-col"] [class*=" ant-col"]::after,[class*=" ant-col"] [class*=" ant-col"]::after{box-sizing:border-box;}.ant-col{position:relative;max-width:100%;min-height:1px;}.ant-col-24{display:block;flex:0 0 100%;max-width:100%;}.ant-col-push-24{inset-inline-start:100%;}.ant-col-pull-24{inset-inline-end:100%;}.ant-col-offset-24{margin-inline-start:100%;}.ant-col-order-24{order:24;}.ant-col-23{display:block;flex:0 0 95.83333333333334%;max-width:95.83333333333334%;}.ant-col-push-23{inset-inline-start:95.83333333333334%;}.ant-col-pull-23{inset-inline-end:95.83333333333334%;}.ant-col-offset-23{margin-inline-start:95.83333333333334%;}.ant-col-order-23{order:23;}.ant-col-22{display:block;flex:0 0 91.66666666666666%;max-width:91.66666666666666%;}.ant-col-push-22{inset-inline-start:91.66666666666666%;}.ant-col-pull-22{inset-inline-end:91.66666666666666%;}.ant-col-offset-22{margin-inline-start:91.66666666666666%;}.ant-col-order-22{order:22;}.ant-col-21{display:block;flex:0 0 87.5%;max-width:87.5%;}.ant-col-push-21{inset-inline-start:87.5%;}.ant-col-pull-21{inset-inline-end:87.5%;}.ant-col-offset-21{margin-inline-start:87.5%;}.ant-col-order-21{order:21;}.ant-col-20{display:block;flex:0 0 83.33333333333334%;max-width:83.33333333333334%;}.ant-col-push-20{inset-inline-start:83.33333333333334%;}.ant-col-pull-20{inset-inline-end:83.33333333333334%;}.ant-col-offset-20{margin-inline-start:83.33333333333334%;}.ant-col-order-20{order:20;}.ant-col-19{display:block;flex:0 0 79.16666666666666%;max-width:79.16666666666666%;}.ant-col-push-19{inset-inline-start:79.16666666666666%;}.ant-col-pull-19{inset-inline-end:79.16666666666666%;}.ant-col-offset-19{margin-inline-start:79.16666666666666%;}.ant-col-order-19{order:19;}.ant-col-18{display:block;flex:0 0 75%;max-width:75%;}.ant-col-push-18{inset-inline-start:75%;}.ant-col-pull-18{inset-inline-end:75%;}.ant-col-offset-18{margin-inline-start:75%;}.ant-col-order-18{order:18;}.ant-col-17{display:block;flex:0 0 70.83333333333334%;max-width:70.83333333333334%;}.ant-col-push-17{inset-inline-start:70.83333333333334%;}.ant-col-pull-17{inset-inline-end:70.83333333333334%;}.ant-col-offset-17{margin-inline-start:70.83333333333334%;}.ant-col-order-17{order:17;}.ant-col-16{display:block;flex:0 0 66.66666666666666%;max-width:66.66666666666666%;}.ant-col-push-16{inset-inline-start:66.66666666666666%;}.ant-col-pull-16{inset-inline-end:66.66666666666666%;}.ant-col-offset-16{margin-inline-start:66.66666666666666%;}.ant-col-order-16{order:16;}.ant-col-15{display:block;flex:0 0 62.5%;max-width:62.5%;}.ant-col-push-15{inset-inline-start:62.5%;}.ant-col-pull-15{inset-inline-end:62.5%;}.ant-col-offset-15{margin-inline-start:62.5%;}.ant-col-order-15{order:15;}.ant-col-14{display:block;flex:0 0 58.333333333333336%;max-width:58.333333333333336%;}.ant-col-push-14{inset-inline-start:58.333333333333336%;}.ant-col-pull-14{inset-inline-end:58.333333333333336%;}.ant-col-offset-14{margin-inline-start:58.333333333333336%;}.ant-col-order-14{order:14;}.ant-col-13{display:block;flex:0 0 54.166666666666664%;max-width:54.166666666666664%;}.ant-col-push-13{inset-inline-start:54.166666666666664%;}.ant-col-pull-13{inset-inline-end:54.166666666666664%;}.ant-col-offset-13{margin-inline-start:54.166666666666664%;}.ant-col-order-13{order:13;}.ant-col-12{display:block;flex:0 0 50%;max-width:50%;}.ant-col-push-12{inset-inline-start:50%;}.ant-col-pull-12{inset-inline-end:50%;}.ant-col-offset-12{margin-inline-start:50%;}.ant-col-order-12{order:12;}.ant-col-11{display:block;flex:0 0 45.83333333333333%;max-width:45.83333333333333%;}.ant-col-push-11{inset-inline-start:45.83333333333333%;}.ant-col-pull-11{inset-inline-end:45.83333333333333%;}.ant-col-offset-11{margin-inline-start:45.83333333333333%;}.ant-col-order-11{order:11;}.ant-col-10{display:block;flex:0 0 41.66666666666667%;max-width:41.66666666666667%;}.ant-col-push-10{inset-inline-start:41.66666666666667%;}.ant-col-pull-10{inset-inline-end:41.66666666666667%;}.ant-col-offset-10{margin-inline-start:41.66666666666667%;}.ant-col-order-10{order:10;}.ant-col-9{display:block;flex:0 0 37.5%;max-width:37.5%;}.ant-col-push-9{inset-inline-start:37.5%;}.ant-col-pull-9{inset-inline-end:37.5%;}.ant-col-offset-9{margin-inline-start:37.5%;}.ant-col-order-9{order:9;}.ant-col-8{display:block;flex:0 0 33.33333333333333%;max-width:33.33333333333333%;}.ant-col-push-8{inset-inline-start:33.33333333333333%;}.ant-col-pull-8{inset-inline-end:33.33333333333333%;}.ant-col-offset-8{margin-inline-start:33.33333333333333%;}.ant-col-order-8{order:8;}.ant-col-7{display:block;flex:0 0 29.166666666666668%;max-width:29.166666666666668%;}.ant-col-push-7{inset-inline-start:29.166666666666668%;}.ant-col-pull-7{inset-inline-end:29.166666666666668%;}.ant-col-offset-7{margin-inline-start:29.166666666666668%;}.ant-col-order-7{order:7;}.ant-col-6{display:block;flex:0 0 25%;max-width:25%;}.ant-col-push-6{inset-inline-start:25%;}.ant-col-pull-6{inset-inline-end:25%;}.ant-col-offset-6{margin-inline-start:25%;}.ant-col-order-6{order:6;}.ant-col-5{display:block;flex:0 0 20.833333333333336%;max-width:20.833333333333336%;}.ant-col-push-5{inset-inline-start:20.833333333333336%;}.ant-col-pull-5{inset-inline-end:20.833333333333336%;}.ant-col-offset-5{margin-inline-start:20.833333333333336%;}.ant-col-order-5{order:5;}.ant-col-4{display:block;flex:0 0 16.666666666666664%;max-width:16.666666666666664%;}.ant-col-push-4{inset-inline-start:16.666666666666664%;}.ant-col-pull-4{inset-inline-end:16.666666666666664%;}.ant-col-offset-4{margin-inline-start:16.666666666666664%;}.ant-col-order-4{order:4;}.ant-col-3{display:block;flex:0 0 12.5%;max-width:12.5%;}.ant-col-push-3{inset-inline-start:12.5%;}.ant-col-pull-3{inset-inline-end:12.5%;}.ant-col-offset-3{margin-inline-start:12.5%;}.ant-col-order-3{order:3;}.ant-col-2{display:block;flex:0 0 8.333333333333332%;max-width:8.333333333333332%;}.ant-col-push-2{inset-inline-start:8.333333333333332%;}.ant-col-pull-2{inset-inline-end:8.333333333333332%;}.ant-col-offset-2{margin-inline-start:8.333333333333332%;}.ant-col-order-2{order:2;}.ant-col-1{display:block;flex:0 0 4.166666666666666%;max-width:4.166666666666666%;}.ant-col-push-1{inset-inline-start:4.166666666666666%;}.ant-col-pull-1{inset-inline-end:4.166666666666666%;}.ant-col-offset-1{margin-inline-start:4.166666666666666%;}.ant-col-order-1{order:1;}.ant-col-0{display:none;}.ant-col-push-0{inset-inline-start:auto;}.ant-col-pull-0{inset-inline-end:auto;}.ant-col-offset-0{margin-inline-end:0;}.ant-col-order-0{order:0;}.ant-col-xs-24{display:block;flex:0 0 100%;max-width:100%;}.ant-col-xs-push-24{inset-inline-start:100%;}.ant-col-xs-pull-24{inset-inline-end:100%;}.ant-col-xs-offset-24{margin-inline-start:100%;}.ant-col-xs-order-24{order:24;}.ant-col-xs-23{display:block;flex:0 0 95.83333333333334%;max-width:95.83333333333334%;}.ant-col-xs-push-23{inset-inline-start:95.83333333333334%;}.ant-col-xs-pull-23{inset-inline-end:95.83333333333334%;}.ant-col-xs-offset-23{margin-inline-start:95.83333333333334%;}.ant-col-xs-order-23{order:23;}.ant-col-xs-22{display:block;flex:0 0 91.66666666666666%;max-width:91.66666666666666%;}.ant-col-xs-push-22{inset-inline-start:91.66666666666666%;}.ant-col-xs-pull-22{inset-inline-end:91.66666666666666%;}.ant-col-xs-offset-22{margin-inline-start:91.66666666666666%;}.ant-col-xs-order-22{order:22;}.ant-col-xs-21{display:block;flex:0 0 87.5%;max-width:87.5%;}.ant-col-xs-push-21{inset-inline-start:87.5%;}.ant-col-xs-pull-21{inset-inline-end:87.5%;}.ant-col-xs-offset-21{margin-inline-start:87.5%;}.ant-col-xs-order-21{order:21;}.ant-col-xs-20{display:block;flex:0 0 83.33333333333334%;max-width:83.33333333333334%;}.ant-col-xs-push-20{inset-inline-start:83.33333333333334%;}.ant-col-xs-pull-20{inset-inline-end:83.33333333333334%;}.ant-col-xs-offset-20{margin-inline-start:83.33333333333334%;}.ant-col-xs-order-20{order:20;}.ant-col-xs-19{display:block;flex:0 0 79.16666666666666%;max-width:79.16666666666666%;}.ant-col-xs-push-19{inset-inline-start:79.16666666666666%;}.ant-col-xs-pull-19{inset-inline-end:79.16666666666666%;}.ant-col-xs-offset-19{margin-inline-start:79.16666666666666%;}.ant-col-xs-order-19{order:19;}.ant-col-xs-18{display:block;flex:0 0 75%;max-width:75%;}.ant-col-xs-push-18{inset-inline-start:75%;}.ant-col-xs-pull-18{inset-inline-end:75%;}.ant-col-xs-offset-18{margin-inline-start:75%;}.ant-col-xs-order-18{order:18;}.ant-col-xs-17{display:block;flex:0 0 70.83333333333334%;max-width:70.83333333333334%;}.ant-col-xs-push-17{inset-inline-start:70.83333333333334%;}.ant-col-xs-pull-17{inset-inline-end:70.83333333333334%;}.ant-col-xs-offset-17{margin-inline-start:70.83333333333334%;}.ant-col-xs-order-17{order:17;}.ant-col-xs-16{display:block;flex:0 0 66.66666666666666%;max-width:66.66666666666666%;}.ant-col-xs-push-16{inset-inline-start:66.66666666666666%;}.ant-col-xs-pull-16{inset-inline-end:66.66666666666666%;}.ant-col-xs-offset-16{margin-inline-start:66.66666666666666%;}.ant-col-xs-order-16{order:16;}.ant-col-xs-15{display:block;flex:0 0 62.5%;max-width:62.5%;}.ant-col-xs-push-15{inset-inline-start:62.5%;}.ant-col-xs-pull-15{inset-inline-end:62.5%;}.ant-col-xs-offset-15{margin-inline-start:62.5%;}.ant-col-xs-order-15{order:15;}.ant-col-xs-14{display:block;flex:0 0 58.333333333333336%;max-width:58.333333333333336%;}.ant-col-xs-push-14{inset-inline-start:58.333333333333336%;}.ant-col-xs-pull-14{inset-inline-end:58.333333333333336%;}.ant-col-xs-offset-14{margin-inline-start:58.333333333333336%;}.ant-col-xs-order-14{order:14;}.ant-col-xs-13{display:block;flex:0 0 54.166666666666664%;max-width:54.166666666666664%;}.ant-col-xs-push-13{inset-inline-start:54.166666666666664%;}.ant-col-xs-pull-13{inset-inline-end:54.166666666666664%;}.ant-col-xs-offset-13{margin-inline-start:54.166666666666664%;}.ant-col-xs-order-13{order:13;}.ant-col-xs-12{display:block;flex:0 0 50%;max-width:50%;}.ant-col-xs-push-12{inset-inline-start:50%;}.ant-col-xs-pull-12{inset-inline-end:50%;}.ant-col-xs-offset-12{margin-inline-start:50%;}.ant-col-xs-order-12{order:12;}.ant-col-xs-11{display:block;flex:0 0 45.83333333333333%;max-width:45.83333333333333%;}.ant-col-xs-push-11{inset-inline-start:45.83333333333333%;}.ant-col-xs-pull-11{inset-inline-end:45.83333333333333%;}.ant-col-xs-offset-11{margin-inline-start:45.83333333333333%;}.ant-col-xs-order-11{order:11;}.ant-col-xs-10{display:block;flex:0 0 41.66666666666667%;max-width:41.66666666666667%;}.ant-col-xs-push-10{inset-inline-start:41.66666666666667%;}.ant-col-xs-pull-10{inset-inline-end:41.66666666666667%;}.ant-col-xs-offset-10{margin-inline-start:41.66666666666667%;}.ant-col-xs-order-10{order:10;}.ant-col-xs-9{display:block;flex:0 0 37.5%;max-width:37.5%;}.ant-col-xs-push-9{inset-inline-start:37.5%;}.ant-col-xs-pull-9{inset-inline-end:37.5%;}.ant-col-xs-offset-9{margin-inline-start:37.5%;}.ant-col-xs-order-9{order:9;}.ant-col-xs-8{display:block;flex:0 0 33.33333333333333%;max-width:33.33333333333333%;}.ant-col-xs-push-8{inset-inline-start:33.33333333333333%;}.ant-col-xs-pull-8{inset-inline-end:33.33333333333333%;}.ant-col-xs-offset-8{margin-inline-start:33.33333333333333%;}.ant-col-xs-order-8{order:8;}.ant-col-xs-7{display:block;flex:0 0 29.166666666666668%;max-width:29.166666666666668%;}.ant-col-xs-push-7{inset-inline-start:29.166666666666668%;}.ant-col-xs-pull-7{inset-inline-end:29.166666666666668%;}.ant-col-xs-offset-7{margin-inline-start:29.166666666666668%;}.ant-col-xs-order-7{order:7;}.ant-col-xs-6{display:block;flex:0 0 25%;max-width:25%;}.ant-col-xs-push-6{inset-inline-start:25%;}.ant-col-xs-pull-6{inset-inline-end:25%;}.ant-col-xs-offset-6{margin-inline-start:25%;}.ant-col-xs-order-6{order:6;}.ant-col-xs-5{display:block;flex:0 0 20.833333333333336%;max-width:20.833333333333336%;}.ant-col-xs-push-5{inset-inline-start:20.833333333333336%;}.ant-col-xs-pull-5{inset-inline-end:20.833333333333336%;}.ant-col-xs-offset-5{margin-inline-start:20.833333333333336%;}.ant-col-xs-order-5{order:5;}.ant-col-xs-4{display:block;flex:0 0 16.666666666666664%;max-width:16.666666666666664%;}.ant-col-xs-push-4{inset-inline-start:16.666666666666664%;}.ant-col-xs-pull-4{inset-inline-end:16.666666666666664%;}.ant-col-xs-offset-4{margin-inline-start:16.666666666666664%;}.ant-col-xs-order-4{order:4;}.ant-col-xs-3{display:block;flex:0 0 12.5%;max-width:12.5%;}.ant-col-xs-push-3{inset-inline-start:12.5%;}.ant-col-xs-pull-3{inset-inline-end:12.5%;}.ant-col-xs-offset-3{margin-inline-start:12.5%;}.ant-col-xs-order-3{order:3;}.ant-col-xs-2{display:block;flex:0 0 8.333333333333332%;max-width:8.333333333333332%;}.ant-col-xs-push-2{inset-inline-start:8.333333333333332%;}.ant-col-xs-pull-2{inset-inline-end:8.333333333333332%;}.ant-col-xs-offset-2{margin-inline-start:8.333333333333332%;}.ant-col-xs-order-2{order:2;}.ant-col-xs-1{display:block;flex:0 0 4.166666666666666%;max-width:4.166666666666666%;}.ant-col-xs-push-1{inset-inline-start:4.166666666666666%;}.ant-col-xs-pull-1{inset-inline-end:4.166666666666666%;}.ant-col-xs-offset-1{margin-inline-start:4.166666666666666%;}.ant-col-xs-order-1{order:1;}.ant-col-xs-0{display:none;}.ant-col-push-0{inset-inline-start:auto;}.ant-col-pull-0{inset-inline-end:auto;}.ant-col-xs-push-0{inset-inline-start:auto;}.ant-col-xs-pull-0{inset-inline-end:auto;}.ant-col-xs-offset-0{margin-inline-end:0;}.ant-col-xs-order-0{order:0;}@media (min-width: 576px){.ant-col-sm-24{display:block;flex:0 0 100%;max-width:100%;}.ant-col-sm-push-24{inset-inline-start:100%;}.ant-col-sm-pull-24{inset-inline-end:100%;}.ant-col-sm-offset-24{margin-inline-start:100%;}.ant-col-sm-order-24{order:24;}.ant-col-sm-23{display:block;flex:0 0 95.83333333333334%;max-width:95.83333333333334%;}.ant-col-sm-push-23{inset-inline-start:95.83333333333334%;}.ant-col-sm-pull-23{inset-inline-end:95.83333333333334%;}.ant-col-sm-offset-23{margin-inline-start:95.83333333333334%;}.ant-col-sm-order-23{order:23;}.ant-col-sm-22{display:block;flex:0 0 91.66666666666666%;max-width:91.66666666666666%;}.ant-col-sm-push-22{inset-inline-start:91.66666666666666%;}.ant-col-sm-pull-22{inset-inline-end:91.66666666666666%;}.ant-col-sm-offset-22{margin-inline-start:91.66666666666666%;}.ant-col-sm-order-22{order:22;}.ant-col-sm-21{display:block;flex:0 0 87.5%;max-width:87.5%;}.ant-col-sm-push-21{inset-inline-start:87.5%;}.ant-col-sm-pull-21{inset-inline-end:87.5%;}.ant-col-sm-offset-21{margin-inline-start:87.5%;}.ant-col-sm-order-21{order:21;}.ant-col-sm-20{display:block;flex:0 0 83.33333333333334%;max-width:83.33333333333334%;}.ant-col-sm-push-20{inset-inline-start:83.33333333333334%;}.ant-col-sm-pull-20{inset-inline-end:83.33333333333334%;}.ant-col-sm-offset-20{margin-inline-start:83.33333333333334%;}.ant-col-sm-order-20{order:20;}.ant-col-sm-19{display:block;flex:0 0 79.16666666666666%;max-width:79.16666666666666%;}.ant-col-sm-push-19{inset-inline-start:79.16666666666666%;}.ant-col-sm-pull-19{inset-inline-end:79.16666666666666%;}.ant-col-sm-offset-19{margin-inline-start:79.16666666666666%;}.ant-col-sm-order-19{order:19;}.ant-col-sm-18{display:block;flex:0 0 75%;max-width:75%;}.ant-col-sm-push-18{inset-inline-start:75%;}.ant-col-sm-pull-18{inset-inline-end:75%;}.ant-col-sm-offset-18{margin-inline-start:75%;}.ant-col-sm-order-18{order:18;}.ant-col-sm-17{display:block;flex:0 0 70.83333333333334%;max-width:70.83333333333334%;}.ant-col-sm-push-17{inset-inline-start:70.83333333333334%;}.ant-col-sm-pull-17{inset-inline-end:70.83333333333334%;}.ant-col-sm-offset-17{margin-inline-start:70.83333333333334%;}.ant-col-sm-order-17{order:17;}.ant-col-sm-16{display:block;flex:0 0 66.66666666666666%;max-width:66.66666666666666%;}.ant-col-sm-push-16{inset-inline-start:66.66666666666666%;}.ant-col-sm-pull-16{inset-inline-end:66.66666666666666%;}.ant-col-sm-offset-16{margin-inline-start:66.66666666666666%;}.ant-col-sm-order-16{order:16;}.ant-col-sm-15{display:block;flex:0 0 62.5%;max-width:62.5%;}.ant-col-sm-push-15{inset-inline-start:62.5%;}.ant-col-sm-pull-15{inset-inline-end:62.5%;}.ant-col-sm-offset-15{margin-inline-start:62.5%;}.ant-col-sm-order-15{order:15;}.ant-col-sm-14{display:block;flex:0 0 58.333333333333336%;max-width:58.333333333333336%;}.ant-col-sm-push-14{inset-inline-start:58.333333333333336%;}.ant-col-sm-pull-14{inset-inline-end:58.333333333333336%;}.ant-col-sm-offset-14{margin-inline-start:58.333333333333336%;}.ant-col-sm-order-14{order:14;}.ant-col-sm-13{display:block;flex:0 0 54.166666666666664%;max-width:54.166666666666664%;}.ant-col-sm-push-13{inset-inline-start:54.166666666666664%;}.ant-col-sm-pull-13{inset-inline-end:54.166666666666664%;}.ant-col-sm-offset-13{margin-inline-start:54.166666666666664%;}.ant-col-sm-order-13{order:13;}.ant-col-sm-12{display:block;flex:0 0 50%;max-width:50%;}.ant-col-sm-push-12{inset-inline-start:50%;}.ant-col-sm-pull-12{inset-inline-end:50%;}.ant-col-sm-offset-12{margin-inline-start:50%;}.ant-col-sm-order-12{order:12;}.ant-col-sm-11{display:block;flex:0 0 45.83333333333333%;max-width:45.83333333333333%;}.ant-col-sm-push-11{inset-inline-start:45.83333333333333%;}.ant-col-sm-pull-11{inset-inline-end:45.83333333333333%;}.ant-col-sm-offset-11{margin-inline-start:45.83333333333333%;}.ant-col-sm-order-11{order:11;}.ant-col-sm-10{display:block;flex:0 0 41.66666666666667%;max-width:41.66666666666667%;}.ant-col-sm-push-10{inset-inline-start:41.66666666666667%;}.ant-col-sm-pull-10{inset-inline-end:41.66666666666667%;}.ant-col-sm-offset-10{margin-inline-start:41.66666666666667%;}.ant-col-sm-order-10{order:10;}.ant-col-sm-9{display:block;flex:0 0 37.5%;max-width:37.5%;}.ant-col-sm-push-9{inset-inline-start:37.5%;}.ant-col-sm-pull-9{inset-inline-end:37.5%;}.ant-col-sm-offset-9{margin-inline-start:37.5%;}.ant-col-sm-order-9{order:9;}.ant-col-sm-8{display:block;flex:0 0 33.33333333333333%;max-width:33.33333333333333%;}.ant-col-sm-push-8{inset-inline-start:33.33333333333333%;}.ant-col-sm-pull-8{inset-inline-end:33.33333333333333%;}.ant-col-sm-offset-8{margin-inline-start:33.33333333333333%;}.ant-col-sm-order-8{order:8;}.ant-col-sm-7{display:block;flex:0 0 29.166666666666668%;max-width:29.166666666666668%;}.ant-col-sm-push-7{inset-inline-start:29.166666666666668%;}.ant-col-sm-pull-7{inset-inline-end:29.166666666666668%;}.ant-col-sm-offset-7{margin-inline-start:29.166666666666668%;}.ant-col-sm-order-7{order:7;}.ant-col-sm-6{display:block;flex:0 0 25%;max-width:25%;}.ant-col-sm-push-6{inset-inline-start:25%;}.ant-col-sm-pull-6{inset-inline-end:25%;}.ant-col-sm-offset-6{margin-inline-start:25%;}.ant-col-sm-order-6{order:6;}.ant-col-sm-5{display:block;flex:0 0 20.833333333333336%;max-width:20.833333333333336%;}.ant-col-sm-push-5{inset-inline-start:20.833333333333336%;}.ant-col-sm-pull-5{inset-inline-end:20.833333333333336%;}.ant-col-sm-offset-5{margin-inline-start:20.833333333333336%;}.ant-col-sm-order-5{order:5;}.ant-col-sm-4{display:block;flex:0 0 16.666666666666664%;max-width:16.666666666666664%;}.ant-col-sm-push-4{inset-inline-start:16.666666666666664%;}.ant-col-sm-pull-4{inset-inline-end:16.666666666666664%;}.ant-col-sm-offset-4{margin-inline-start:16.666666666666664%;}.ant-col-sm-order-4{order:4;}.ant-col-sm-3{display:block;flex:0 0 12.5%;max-width:12.5%;}.ant-col-sm-push-3{inset-inline-start:12.5%;}.ant-col-sm-pull-3{inset-inline-end:12.5%;}.ant-col-sm-offset-3{margin-inline-start:12.5%;}.ant-col-sm-order-3{order:3;}.ant-col-sm-2{display:block;flex:0 0 8.333333333333332%;max-width:8.333333333333332%;}.ant-col-sm-push-2{inset-inline-start:8.333333333333332%;}.ant-col-sm-pull-2{inset-inline-end:8.333333333333332%;}.ant-col-sm-offset-2{margin-inline-start:8.333333333333332%;}.ant-col-sm-order-2{order:2;}.ant-col-sm-1{display:block;flex:0 0 4.166666666666666%;max-width:4.166666666666666%;}.ant-col-sm-push-1{inset-inline-start:4.166666666666666%;}.ant-col-sm-pull-1{inset-inline-end:4.166666666666666%;}.ant-col-sm-offset-1{margin-inline-start:4.166666666666666%;}.ant-col-sm-order-1{order:1;}.ant-col-sm-0{display:none;}.ant-col-push-0{inset-inline-start:auto;}.ant-col-pull-0{inset-inline-end:auto;}.ant-col-sm-push-0{inset-inline-start:auto;}.ant-col-sm-pull-0{inset-inline-end:auto;}.ant-col-sm-offset-0{margin-inline-end:0;}.ant-col-sm-order-0{order:0;}}@media (min-width: 768px){.ant-col-md-24{display:block;flex:0 0 100%;max-width:100%;}.ant-col-md-push-24{inset-inline-start:100%;}.ant-col-md-pull-24{inset-inline-end:100%;}.ant-col-md-offset-24{margin-inline-start:100%;}.ant-col-md-order-24{order:24;}.ant-col-md-23{display:block;flex:0 0 95.83333333333334%;max-width:95.83333333333334%;}.ant-col-md-push-23{inset-inline-start:95.83333333333334%;}.ant-col-md-pull-23{inset-inline-end:95.83333333333334%;}.ant-col-md-offset-23{margin-inline-start:95.83333333333334%;}.ant-col-md-order-23{order:23;}.ant-col-md-22{display:block;flex:0 0 91.66666666666666%;max-width:91.66666666666666%;}.ant-col-md-push-22{inset-inline-start:91.66666666666666%;}.ant-col-md-pull-22{inset-inline-end:91.66666666666666%;}.ant-col-md-offset-22{margin-inline-start:91.66666666666666%;}.ant-col-md-order-22{order:22;}.ant-col-md-21{display:block;flex:0 0 87.5%;max-width:87.5%;}.ant-col-md-push-21{inset-inline-start:87.5%;}.ant-col-md-pull-21{inset-inline-end:87.5%;}.ant-col-md-offset-21{margin-inline-start:87.5%;}.ant-col-md-order-21{order:21;}.ant-col-md-20{display:block;flex:0 0 83.33333333333334%;max-width:83.33333333333334%;}.ant-col-md-push-20{inset-inline-start:83.33333333333334%;}.ant-col-md-pull-20{inset-inline-end:83.33333333333334%;}.ant-col-md-offset-20{margin-inline-start:83.33333333333334%;}.ant-col-md-order-20{order:20;}.ant-col-md-19{display:block;flex:0 0 79.16666666666666%;max-width:79.16666666666666%;}.ant-col-md-push-19{inset-inline-start:79.16666666666666%;}.ant-col-md-pull-19{inset-inline-end:79.16666666666666%;}.ant-col-md-offset-19{margin-inline-start:79.16666666666666%;}.ant-col-md-order-19{order:19;}.ant-col-md-18{display:block;flex:0 0 75%;max-width:75%;}.ant-col-md-push-18{inset-inline-start:75%;}.ant-col-md-pull-18{inset-inline-end:75%;}.ant-col-md-offset-18{margin-inline-start:75%;}.ant-col-md-order-18{order:18;}.ant-col-md-17{display:block;flex:0 0 70.83333333333334%;max-width:70.83333333333334%;}.ant-col-md-push-17{inset-inline-start:70.83333333333334%;}.ant-col-md-pull-17{inset-inline-end:70.83333333333334%;}.ant-col-md-offset-17{margin-inline-start:70.83333333333334%;}.ant-col-md-order-17{order:17;}.ant-col-md-16{display:block;flex:0 0 66.66666666666666%;max-width:66.66666666666666%;}.ant-col-md-push-16{inset-inline-start:66.66666666666666%;}.ant-col-md-pull-16{inset-inline-end:66.66666666666666%;}.ant-col-md-offset-16{margin-inline-start:66.66666666666666%;}.ant-col-md-order-16{order:16;}.ant-col-md-15{display:block;flex:0 0 62.5%;max-width:62.5%;}.ant-col-md-push-15{inset-inline-start:62.5%;}.ant-col-md-pull-15{inset-inline-end:62.5%;}.ant-col-md-offset-15{margin-inline-start:62.5%;}.ant-col-md-order-15{order:15;}.ant-col-md-14{display:block;flex:0 0 58.333333333333336%;max-width:58.333333333333336%;}.ant-col-md-push-14{inset-inline-start:58.333333333333336%;}.ant-col-md-pull-14{inset-inline-end:58.333333333333336%;}.ant-col-md-offset-14{margin-inline-start:58.333333333333336%;}.ant-col-md-order-14{order:14;}.ant-col-md-13{display:block;flex:0 0 54.166666666666664%;max-width:54.166666666666664%;}.ant-col-md-push-13{inset-inline-start:54.166666666666664%;}.ant-col-md-pull-13{inset-inline-end:54.166666666666664%;}.ant-col-md-offset-13{margin-inline-start:54.166666666666664%;}.ant-col-md-order-13{order:13;}.ant-col-md-12{display:block;flex:0 0 50%;max-width:50%;}.ant-col-md-push-12{inset-inline-start:50%;}.ant-col-md-pull-12{inset-inline-end:50%;}.ant-col-md-offset-12{margin-inline-start:50%;}.ant-col-md-order-12{order:12;}.ant-col-md-11{display:block;flex:0 0 45.83333333333333%;max-width:45.83333333333333%;}.ant-col-md-push-11{inset-inline-start:45.83333333333333%;}.ant-col-md-pull-11{inset-inline-end:45.83333333333333%;}.ant-col-md-offset-11{margin-inline-start:45.83333333333333%;}.ant-col-md-order-11{order:11;}.ant-col-md-10{display:block;flex:0 0 41.66666666666667%;max-width:41.66666666666667%;}.ant-col-md-push-10{inset-inline-start:41.66666666666667%;}.ant-col-md-pull-10{inset-inline-end:41.66666666666667%;}.ant-col-md-offset-10{margin-inline-start:41.66666666666667%;}.ant-col-md-order-10{order:10;}.ant-col-md-9{display:block;flex:0 0 37.5%;max-width:37.5%;}.ant-col-md-push-9{inset-inline-start:37.5%;}.ant-col-md-pull-9{inset-inline-end:37.5%;}.ant-col-md-offset-9{margin-inline-start:37.5%;}.ant-col-md-order-9{order:9;}.ant-col-md-8{display:block;flex:0 0 33.33333333333333%;max-width:33.33333333333333%;}.ant-col-md-push-8{inset-inline-start:33.33333333333333%;}.ant-col-md-pull-8{inset-inline-end:33.33333333333333%;}.ant-col-md-offset-8{margin-inline-start:33.33333333333333%;}.ant-col-md-order-8{order:8;}.ant-col-md-7{display:block;flex:0 0 29.166666666666668%;max-width:29.166666666666668%;}.ant-col-md-push-7{inset-inline-start:29.166666666666668%;}.ant-col-md-pull-7{inset-inline-end:29.166666666666668%;}.ant-col-md-offset-7{margin-inline-start:29.166666666666668%;}.ant-col-md-order-7{order:7;}.ant-col-md-6{display:block;flex:0 0 25%;max-width:25%;}.ant-col-md-push-6{inset-inline-start:25%;}.ant-col-md-pull-6{inset-inline-end:25%;}.ant-col-md-offset-6{margin-inline-start:25%;}.ant-col-md-order-6{order:6;}.ant-col-md-5{display:block;flex:0 0 20.833333333333336%;max-width:20.833333333333336%;}.ant-col-md-push-5{inset-inline-start:20.833333333333336%;}.ant-col-md-pull-5{inset-inline-end:20.833333333333336%;}.ant-col-md-offset-5{margin-inline-start:20.833333333333336%;}.ant-col-md-order-5{order:5;}.ant-col-md-4{display:block;flex:0 0 16.666666666666664%;max-width:16.666666666666664%;}.ant-col-md-push-4{inset-inline-start:16.666666666666664%;}.ant-col-md-pull-4{inset-inline-end:16.666666666666664%;}.ant-col-md-offset-4{margin-inline-start:16.666666666666664%;}.ant-col-md-order-4{order:4;}.ant-col-md-3{display:block;flex:0 0 12.5%;max-width:12.5%;}.ant-col-md-push-3{inset-inline-start:12.5%;}.ant-col-md-pull-3{inset-inline-end:12.5%;}.ant-col-md-offset-3{margin-inline-start:12.5%;}.ant-col-md-order-3{order:3;}.ant-col-md-2{display:block;flex:0 0 8.333333333333332%;max-width:8.333333333333332%;}.ant-col-md-push-2{inset-inline-start:8.333333333333332%;}.ant-col-md-pull-2{inset-inline-end:8.333333333333332%;}.ant-col-md-offset-2{margin-inline-start:8.333333333333332%;}.ant-col-md-order-2{order:2;}.ant-col-md-1{display:block;flex:0 0 4.166666666666666%;max-width:4.166666666666666%;}.ant-col-md-push-1{inset-inline-start:4.166666666666666%;}.ant-col-md-pull-1{inset-inline-end:4.166666666666666%;}.ant-col-md-offset-1{margin-inline-start:4.166666666666666%;}.ant-col-md-order-1{order:1;}.ant-col-md-0{display:none;}.ant-col-push-0{inset-inline-start:auto;}.ant-col-pull-0{inset-inline-end:auto;}.ant-col-md-push-0{inset-inline-start:auto;}.ant-col-md-pull-0{inset-inline-end:auto;}.ant-col-md-offset-0{margin-inline-end:0;}.ant-col-md-order-0{order:0;}}@media (min-width: 992px){.ant-col-lg-24{display:block;flex:0 0 100%;max-width:100%;}.ant-col-lg-push-24{inset-inline-start:100%;}.ant-col-lg-pull-24{inset-inline-end:100%;}.ant-col-lg-offset-24{margin-inline-start:100%;}.ant-col-lg-order-24{order:24;}.ant-col-lg-23{display:block;flex:0 0 95.83333333333334%;max-width:95.83333333333334%;}.ant-col-lg-push-23{inset-inline-start:95.83333333333334%;}.ant-col-lg-pull-23{inset-inline-end:95.83333333333334%;}.ant-col-lg-offset-23{margin-inline-start:95.83333333333334%;}.ant-col-lg-order-23{order:23;}.ant-col-lg-22{display:block;flex:0 0 91.66666666666666%;max-width:91.66666666666666%;}.ant-col-lg-push-22{inset-inline-start:91.66666666666666%;}.ant-col-lg-pull-22{inset-inline-end:91.66666666666666%;}.ant-col-lg-offset-22{margin-inline-start:91.66666666666666%;}.ant-col-lg-order-22{order:22;}.ant-col-lg-21{display:block;flex:0 0 87.5%;max-width:87.5%;}.ant-col-lg-push-21{inset-inline-start:87.5%;}.ant-col-lg-pull-21{inset-inline-end:87.5%;}.ant-col-lg-offset-21{margin-inline-start:87.5%;}.ant-col-lg-order-21{order:21;}.ant-col-lg-20{display:block;flex:0 0 83.33333333333334%;max-width:83.33333333333334%;}.ant-col-lg-push-20{inset-inline-start:83.33333333333334%;}.ant-col-lg-pull-20{inset-inline-end:83.33333333333334%;}.ant-col-lg-offset-20{margin-inline-start:83.33333333333334%;}.ant-col-lg-order-20{order:20;}.ant-col-lg-19{display:block;flex:0 0 79.16666666666666%;max-width:79.16666666666666%;}.ant-col-lg-push-19{inset-inline-start:79.16666666666666%;}.ant-col-lg-pull-19{inset-inline-end:79.16666666666666%;}.ant-col-lg-offset-19{margin-inline-start:79.16666666666666%;}.ant-col-lg-order-19{order:19;}.ant-col-lg-18{display:block;flex:0 0 75%;max-width:75%;}.ant-col-lg-push-18{inset-inline-start:75%;}.ant-col-lg-pull-18{inset-inline-end:75%;}.ant-col-lg-offset-18{margin-inline-start:75%;}.ant-col-lg-order-18{order:18;}.ant-col-lg-17{display:block;flex:0 0 70.83333333333334%;max-width:70.83333333333334%;}.ant-col-lg-push-17{inset-inline-start:70.83333333333334%;}.ant-col-lg-pull-17{inset-inline-end:70.83333333333334%;}.ant-col-lg-offset-17{margin-inline-start:70.83333333333334%;}.ant-col-lg-order-17{order:17;}.ant-col-lg-16{display:block;flex:0 0 66.66666666666666%;max-width:66.66666666666666%;}.ant-col-lg-push-16{inset-inline-start:66.66666666666666%;}.ant-col-lg-pull-16{inset-inline-end:66.66666666666666%;}.ant-col-lg-offset-16{margin-inline-start:66.66666666666666%;}.ant-col-lg-order-16{order:16;}.ant-col-lg-15{display:block;flex:0 0 62.5%;max-width:62.5%;}.ant-col-lg-push-15{inset-inline-start:62.5%;}.ant-col-lg-pull-15{inset-inline-end:62.5%;}.ant-col-lg-offset-15{margin-inline-start:62.5%;}.ant-col-lg-order-15{order:15;}.ant-col-lg-14{display:block;flex:0 0 58.333333333333336%;max-width:58.333333333333336%;}.ant-col-lg-push-14{inset-inline-start:58.333333333333336%;}.ant-col-lg-pull-14{inset-inline-end:58.333333333333336%;}.ant-col-lg-offset-14{margin-inline-start:58.333333333333336%;}.ant-col-lg-order-14{order:14;}.ant-col-lg-13{display:block;flex:0 0 54.166666666666664%;max-width:54.166666666666664%;}.ant-col-lg-push-13{inset-inline-start:54.166666666666664%;}.ant-col-lg-pull-13{inset-inline-end:54.166666666666664%;}.ant-col-lg-offset-13{margin-inline-start:54.166666666666664%;}.ant-col-lg-order-13{order:13;}.ant-col-lg-12{display:block;flex:0 0 50%;max-width:50%;}.ant-col-lg-push-12{inset-inline-start:50%;}.ant-col-lg-pull-12{inset-inline-end:50%;}.ant-col-lg-offset-12{margin-inline-start:50%;}.ant-col-lg-order-12{order:12;}.ant-col-lg-11{display:block;flex:0 0 45.83333333333333%;max-width:45.83333333333333%;}.ant-col-lg-push-11{inset-inline-start:45.83333333333333%;}.ant-col-lg-pull-11{inset-inline-end:45.83333333333333%;}.ant-col-lg-offset-11{margin-inline-start:45.83333333333333%;}.ant-col-lg-order-11{order:11;}.ant-col-lg-10{display:block;flex:0 0 41.66666666666667%;max-width:41.66666666666667%;}.ant-col-lg-push-10{inset-inline-start:41.66666666666667%;}.ant-col-lg-pull-10{inset-inline-end:41.66666666666667%;}.ant-col-lg-offset-10{margin-inline-start:41.66666666666667%;}.ant-col-lg-order-10{order:10;}.ant-col-lg-9{display:block;flex:0 0 37.5%;max-width:37.5%;}.ant-col-lg-push-9{inset-inline-start:37.5%;}.ant-col-lg-pull-9{inset-inline-end:37.5%;}.ant-col-lg-offset-9{margin-inline-start:37.5%;}.ant-col-lg-order-9{order:9;}.ant-col-lg-8{display:block;flex:0 0 33.33333333333333%;max-width:33.33333333333333%;}.ant-col-lg-push-8{inset-inline-start:33.33333333333333%;}.ant-col-lg-pull-8{inset-inline-end:33.33333333333333%;}.ant-col-lg-offset-8{margin-inline-start:33.33333333333333%;}.ant-col-lg-order-8{order:8;}.ant-col-lg-7{display:block;flex:0 0 29.166666666666668%;max-width:29.166666666666668%;}.ant-col-lg-push-7{inset-inline-start:29.166666666666668%;}.ant-col-lg-pull-7{inset-inline-end:29.166666666666668%;}.ant-col-lg-offset-7{margin-inline-start:29.166666666666668%;}.ant-col-lg-order-7{order:7;}.ant-col-lg-6{display:block;flex:0 0 25%;max-width:25%;}.ant-col-lg-push-6{inset-inline-start:25%;}.ant-col-lg-pull-6{inset-inline-end:25%;}.ant-col-lg-offset-6{margin-inline-start:25%;}.ant-col-lg-order-6{order:6;}.ant-col-lg-5{display:block;flex:0 0 20.833333333333336%;max-width:20.833333333333336%;}.ant-col-lg-push-5{inset-inline-start:20.833333333333336%;}.ant-col-lg-pull-5{inset-inline-end:20.833333333333336%;}.ant-col-lg-offset-5{margin-inline-start:20.833333333333336%;}.ant-col-lg-order-5{order:5;}.ant-col-lg-4{display:block;flex:0 0 16.666666666666664%;max-width:16.666666666666664%;}.ant-col-lg-push-4{inset-inline-start:16.666666666666664%;}.ant-col-lg-pull-4{inset-inline-end:16.666666666666664%;}.ant-col-lg-offset-4{margin-inline-start:16.666666666666664%;}.ant-col-lg-order-4{order:4;}.ant-col-lg-3{display:block;flex:0 0 12.5%;max-width:12.5%;}.ant-col-lg-push-3{inset-inline-start:12.5%;}.ant-col-lg-pull-3{inset-inline-end:12.5%;}.ant-col-lg-offset-3{margin-inline-start:12.5%;}.ant-col-lg-order-3{order:3;}.ant-col-lg-2{display:block;flex:0 0 8.333333333333332%;max-width:8.333333333333332%;}.ant-col-lg-push-2{inset-inline-start:8.333333333333332%;}.ant-col-lg-pull-2{inset-inline-end:8.333333333333332%;}.ant-col-lg-offset-2{margin-inline-start:8.333333333333332%;}.ant-col-lg-order-2{order:2;}.ant-col-lg-1{display:block;flex:0 0 4.166666666666666%;max-width:4.166666666666666%;}.ant-col-lg-push-1{inset-inline-start:4.166666666666666%;}.ant-col-lg-pull-1{inset-inline-end:4.166666666666666%;}.ant-col-lg-offset-1{margin-inline-start:4.166666666666666%;}.ant-col-lg-order-1{order:1;}.ant-col-lg-0{display:none;}.ant-col-push-0{inset-inline-start:auto;}.ant-col-pull-0{inset-inline-end:auto;}.ant-col-lg-push-0{inset-inline-start:auto;}.ant-col-lg-pull-0{inset-inline-end:auto;}.ant-col-lg-offset-0{margin-inline-end:0;}.ant-col-lg-order-0{order:0;}}@media (min-width: 1200px){.ant-col-xl-24{display:block;flex:0 0 100%;max-width:100%;}.ant-col-xl-push-24{inset-inline-start:100%;}.ant-col-xl-pull-24{inset-inline-end:100%;}.ant-col-xl-offset-24{margin-inline-start:100%;}.ant-col-xl-order-24{order:24;}.ant-col-xl-23{display:block;flex:0 0 95.83333333333334%;max-width:95.83333333333334%;}.ant-col-xl-push-23{inset-inline-start:95.83333333333334%;}.ant-col-xl-pull-23{inset-inline-end:95.83333333333334%;}.ant-col-xl-offset-23{margin-inline-start:95.83333333333334%;}.ant-col-xl-order-23{order:23;}.ant-col-xl-22{display:block;flex:0 0 91.66666666666666%;max-width:91.66666666666666%;}.ant-col-xl-push-22{inset-inline-start:91.66666666666666%;}.ant-col-xl-pull-22{inset-inline-end:91.66666666666666%;}.ant-col-xl-offset-22{margin-inline-start:91.66666666666666%;}.ant-col-xl-order-22{order:22;}.ant-col-xl-21{display:block;flex:0 0 87.5%;max-width:87.5%;}.ant-col-xl-push-21{inset-inline-start:87.5%;}.ant-col-xl-pull-21{inset-inline-end:87.5%;}.ant-col-xl-offset-21{margin-inline-start:87.5%;}.ant-col-xl-order-21{order:21;}.ant-col-xl-20{display:block;flex:0 0 83.33333333333334%;max-width:83.33333333333334%;}.ant-col-xl-push-20{inset-inline-start:83.33333333333334%;}.ant-col-xl-pull-20{inset-inline-end:83.33333333333334%;}.ant-col-xl-offset-20{margin-inline-start:83.33333333333334%;}.ant-col-xl-order-20{order:20;}.ant-col-xl-19{display:block;flex:0 0 79.16666666666666%;max-width:79.16666666666666%;}.ant-col-xl-push-19{inset-inline-start:79.16666666666666%;}.ant-col-xl-pull-19{inset-inline-end:79.16666666666666%;}.ant-col-xl-offset-19{margin-inline-start:79.16666666666666%;}.ant-col-xl-order-19{order:19;}.ant-col-xl-18{display:block;flex:0 0 75%;max-width:75%;}.ant-col-xl-push-18{inset-inline-start:75%;}.ant-col-xl-pull-18{inset-inline-end:75%;}.ant-col-xl-offset-18{margin-inline-start:75%;}.ant-col-xl-order-18{order:18;}.ant-col-xl-17{display:block;flex:0 0 70.83333333333334%;max-width:70.83333333333334%;}.ant-col-xl-push-17{inset-inline-start:70.83333333333334%;}.ant-col-xl-pull-17{inset-inline-end:70.83333333333334%;}.ant-col-xl-offset-17{margin-inline-start:70.83333333333334%;}.ant-col-xl-order-17{order:17;}.ant-col-xl-16{display:block;flex:0 0 66.66666666666666%;max-width:66.66666666666666%;}.ant-col-xl-push-16{inset-inline-start:66.66666666666666%;}.ant-col-xl-pull-16{inset-inline-end:66.66666666666666%;}.ant-col-xl-offset-16{margin-inline-start:66.66666666666666%;}.ant-col-xl-order-16{order:16;}.ant-col-xl-15{display:block;flex:0 0 62.5%;max-width:62.5%;}.ant-col-xl-push-15{inset-inline-start:62.5%;}.ant-col-xl-pull-15{inset-inline-end:62.5%;}.ant-col-xl-offset-15{margin-inline-start:62.5%;}.ant-col-xl-order-15{order:15;}.ant-col-xl-14{display:block;flex:0 0 58.333333333333336%;max-width:58.333333333333336%;}.ant-col-xl-push-14{inset-inline-start:58.333333333333336%;}.ant-col-xl-pull-14{inset-inline-end:58.333333333333336%;}.ant-col-xl-offset-14{margin-inline-start:58.333333333333336%;}.ant-col-xl-order-14{order:14;}.ant-col-xl-13{display:block;flex:0 0 54.166666666666664%;max-width:54.166666666666664%;}.ant-col-xl-push-13{inset-inline-start:54.166666666666664%;}.ant-col-xl-pull-13{inset-inline-end:54.166666666666664%;}.ant-col-xl-offset-13{margin-inline-start:54.166666666666664%;}.ant-col-xl-order-13{order:13;}.ant-col-xl-12{display:block;flex:0 0 50%;max-width:50%;}.ant-col-xl-push-12{inset-inline-start:50%;}.ant-col-xl-pull-12{inset-inline-end:50%;}.ant-col-xl-offset-12{margin-inline-start:50%;}.ant-col-xl-order-12{order:12;}.ant-col-xl-11{display:block;flex:0 0 45.83333333333333%;max-width:45.83333333333333%;}.ant-col-xl-push-11{inset-inline-start:45.83333333333333%;}.ant-col-xl-pull-11{inset-inline-end:45.83333333333333%;}.ant-col-xl-offset-11{margin-inline-start:45.83333333333333%;}.ant-col-xl-order-11{order:11;}.ant-col-xl-10{display:block;flex:0 0 41.66666666666667%;max-width:41.66666666666667%;}.ant-col-xl-push-10{inset-inline-start:41.66666666666667%;}.ant-col-xl-pull-10{inset-inline-end:41.66666666666667%;}.ant-col-xl-offset-10{margin-inline-start:41.66666666666667%;}.ant-col-xl-order-10{order:10;}.ant-col-xl-9{display:block;flex:0 0 37.5%;max-width:37.5%;}.ant-col-xl-push-9{inset-inline-start:37.5%;}.ant-col-xl-pull-9{inset-inline-end:37.5%;}.ant-col-xl-offset-9{margin-inline-start:37.5%;}.ant-col-xl-order-9{order:9;}.ant-col-xl-8{display:block;flex:0 0 33.33333333333333%;max-width:33.33333333333333%;}.ant-col-xl-push-8{inset-inline-start:33.33333333333333%;}.ant-col-xl-pull-8{inset-inline-end:33.33333333333333%;}.ant-col-xl-offset-8{margin-inline-start:33.33333333333333%;}.ant-col-xl-order-8{order:8;}.ant-col-xl-7{display:block;flex:0 0 29.166666666666668%;max-width:29.166666666666668%;}.ant-col-xl-push-7{inset-inline-start:29.166666666666668%;}.ant-col-xl-pull-7{inset-inline-end:29.166666666666668%;}.ant-col-xl-offset-7{margin-inline-start:29.166666666666668%;}.ant-col-xl-order-7{order:7;}.ant-col-xl-6{display:block;flex:0 0 25%;max-width:25%;}.ant-col-xl-push-6{inset-inline-start:25%;}.ant-col-xl-pull-6{inset-inline-end:25%;}.ant-col-xl-offset-6{margin-inline-start:25%;}.ant-col-xl-order-6{order:6;}.ant-col-xl-5{display:block;flex:0 0 20.833333333333336%;max-width:20.833333333333336%;}.ant-col-xl-push-5{inset-inline-start:20.833333333333336%;}.ant-col-xl-pull-5{inset-inline-end:20.833333333333336%;}.ant-col-xl-offset-5{margin-inline-start:20.833333333333336%;}.ant-col-xl-order-5{order:5;}.ant-col-xl-4{display:block;flex:0 0 16.666666666666664%;max-width:16.666666666666664%;}.ant-col-xl-push-4{inset-inline-start:16.666666666666664%;}.ant-col-xl-pull-4{inset-inline-end:16.666666666666664%;}.ant-col-xl-offset-4{margin-inline-start:16.666666666666664%;}.ant-col-xl-order-4{order:4;}.ant-col-xl-3{display:block;flex:0 0 12.5%;max-width:12.5%;}.ant-col-xl-push-3{inset-inline-start:12.5%;}.ant-col-xl-pull-3{inset-inline-end:12.5%;}.ant-col-xl-offset-3{margin-inline-start:12.5%;}.ant-col-xl-order-3{order:3;}.ant-col-xl-2{display:block;flex:0 0 8.333333333333332%;max-width:8.333333333333332%;}.ant-col-xl-push-2{inset-inline-start:8.333333333333332%;}.ant-col-xl-pull-2{inset-inline-end:8.333333333333332%;}.ant-col-xl-offset-2{margin-inline-start:8.333333333333332%;}.ant-col-xl-order-2{order:2;}.ant-col-xl-1{display:block;flex:0 0 4.166666666666666%;max-width:4.166666666666666%;}.ant-col-xl-push-1{inset-inline-start:4.166666666666666%;}.ant-col-xl-pull-1{inset-inline-end:4.166666666666666%;}.ant-col-xl-offset-1{margin-inline-start:4.166666666666666%;}.ant-col-xl-order-1{order:1;}.ant-col-xl-0{display:none;}.ant-col-push-0{inset-inline-start:auto;}.ant-col-pull-0{inset-inline-end:auto;}.ant-col-xl-push-0{inset-inline-start:auto;}.ant-col-xl-pull-0{inset-inline-end:auto;}.ant-col-xl-offset-0{margin-inline-end:0;}.ant-col-xl-order-0{order:0;}}@media (min-width: 1600px){.ant-col-xxl-24{display:block;flex:0 0 100%;max-width:100%;}.ant-col-xxl-push-24{inset-inline-start:100%;}.ant-col-xxl-pull-24{inset-inline-end:100%;}.ant-col-xxl-offset-24{margin-inline-start:100%;}.ant-col-xxl-order-24{order:24;}.ant-col-xxl-23{display:block;flex:0 0 95.83333333333334%;max-width:95.83333333333334%;}.ant-col-xxl-push-23{inset-inline-start:95.83333333333334%;}.ant-col-xxl-pull-23{inset-inline-end:95.83333333333334%;}.ant-col-xxl-offset-23{margin-inline-start:95.83333333333334%;}.ant-col-xxl-order-23{order:23;}.ant-col-xxl-22{display:block;flex:0 0 91.66666666666666%;max-width:91.66666666666666%;}.ant-col-xxl-push-22{inset-inline-start:91.66666666666666%;}.ant-col-xxl-pull-22{inset-inline-end:91.66666666666666%;}.ant-col-xxl-offset-22{margin-inline-start:91.66666666666666%;}.ant-col-xxl-order-22{order:22;}.ant-col-xxl-21{display:block;flex:0 0 87.5%;max-width:87.5%;}.ant-col-xxl-push-21{inset-inline-start:87.5%;}.ant-col-xxl-pull-21{inset-inline-end:87.5%;}.ant-col-xxl-offset-21{margin-inline-start:87.5%;}.ant-col-xxl-order-21{order:21;}.ant-col-xxl-20{display:block;flex:0 0 83.33333333333334%;max-width:83.33333333333334%;}.ant-col-xxl-push-20{inset-inline-start:83.33333333333334%;}.ant-col-xxl-pull-20{inset-inline-end:83.33333333333334%;}.ant-col-xxl-offset-20{margin-inline-start:83.33333333333334%;}.ant-col-xxl-order-20{order:20;}.ant-col-xxl-19{display:block;flex:0 0 79.16666666666666%;max-width:79.16666666666666%;}.ant-col-xxl-push-19{inset-inline-start:79.16666666666666%;}.ant-col-xxl-pull-19{inset-inline-end:79.16666666666666%;}.ant-col-xxl-offset-19{margin-inline-start:79.16666666666666%;}.ant-col-xxl-order-19{order:19;}.ant-col-xxl-18{display:block;flex:0 0 75%;max-width:75%;}.ant-col-xxl-push-18{inset-inline-start:75%;}.ant-col-xxl-pull-18{inset-inline-end:75%;}.ant-col-xxl-offset-18{margin-inline-start:75%;}.ant-col-xxl-order-18{order:18;}.ant-col-xxl-17{display:block;flex:0 0 70.83333333333334%;max-width:70.83333333333334%;}.ant-col-xxl-push-17{inset-inline-start:70.83333333333334%;}.ant-col-xxl-pull-17{inset-inline-end:70.83333333333334%;}.ant-col-xxl-offset-17{margin-inline-start:70.83333333333334%;}.ant-col-xxl-order-17{order:17;}.ant-col-xxl-16{display:block;flex:0 0 66.66666666666666%;max-width:66.66666666666666%;}.ant-col-xxl-push-16{inset-inline-start:66.66666666666666%;}.ant-col-xxl-pull-16{inset-inline-end:66.66666666666666%;}.ant-col-xxl-offset-16{margin-inline-start:66.66666666666666%;}.ant-col-xxl-order-16{order:16;}.ant-col-xxl-15{display:block;flex:0 0 62.5%;max-width:62.5%;}.ant-col-xxl-push-15{inset-inline-start:62.5%;}.ant-col-xxl-pull-15{inset-inline-end:62.5%;}.ant-col-xxl-offset-15{margin-inline-start:62.5%;}.ant-col-xxl-order-15{order:15;}.ant-col-xxl-14{display:block;flex:0 0 58.333333333333336%;max-width:58.333333333333336%;}.ant-col-xxl-push-14{inset-inline-start:58.333333333333336%;}.ant-col-xxl-pull-14{inset-inline-end:58.333333333333336%;}.ant-col-xxl-offset-14{margin-inline-start:58.333333333333336%;}.ant-col-xxl-order-14{order:14;}.ant-col-xxl-13{display:block;flex:0 0 54.166666666666664%;max-width:54.166666666666664%;}.ant-col-xxl-push-13{inset-inline-start:54.166666666666664%;}.ant-col-xxl-pull-13{inset-inline-end:54.166666666666664%;}.ant-col-xxl-offset-13{margin-inline-start:54.166666666666664%;}.ant-col-xxl-order-13{order:13;}.ant-col-xxl-12{display:block;flex:0 0 50%;max-width:50%;}.ant-col-xxl-push-12{inset-inline-start:50%;}.ant-col-xxl-pull-12{inset-inline-end:50%;}.ant-col-xxl-offset-12{margin-inline-start:50%;}.ant-col-xxl-order-12{order:12;}.ant-col-xxl-11{display:block;flex:0 0 45.83333333333333%;max-width:45.83333333333333%;}.ant-col-xxl-push-11{inset-inline-start:45.83333333333333%;}.ant-col-xxl-pull-11{inset-inline-end:45.83333333333333%;}.ant-col-xxl-offset-11{margin-inline-start:45.83333333333333%;}.ant-col-xxl-order-11{order:11;}.ant-col-xxl-10{display:block;flex:0 0 41.66666666666667%;max-width:41.66666666666667%;}.ant-col-xxl-push-10{inset-inline-start:41.66666666666667%;}.ant-col-xxl-pull-10{inset-inline-end:41.66666666666667%;}.ant-col-xxl-offset-10{margin-inline-start:41.66666666666667%;}.ant-col-xxl-order-10{order:10;}.ant-col-xxl-9{display:block;flex:0 0 37.5%;max-width:37.5%;}.ant-col-xxl-push-9{inset-inline-start:37.5%;}.ant-col-xxl-pull-9{inset-inline-end:37.5%;}.ant-col-xxl-offset-9{margin-inline-start:37.5%;}.ant-col-xxl-order-9{order:9;}.ant-col-xxl-8{display:block;flex:0 0 33.33333333333333%;max-width:33.33333333333333%;}.ant-col-xxl-push-8{inset-inline-start:33.33333333333333%;}.ant-col-xxl-pull-8{inset-inline-end:33.33333333333333%;}.ant-col-xxl-offset-8{margin-inline-start:33.33333333333333%;}.ant-col-xxl-order-8{order:8;}.ant-col-xxl-7{display:block;flex:0 0 29.166666666666668%;max-width:29.166666666666668%;}.ant-col-xxl-push-7{inset-inline-start:29.166666666666668%;}.ant-col-xxl-pull-7{inset-inline-end:29.166666666666668%;}.ant-col-xxl-offset-7{margin-inline-start:29.166666666666668%;}.ant-col-xxl-order-7{order:7;}.ant-col-xxl-6{display:block;flex:0 0 25%;max-width:25%;}.ant-col-xxl-push-6{inset-inline-start:25%;}.ant-col-xxl-pull-6{inset-inline-end:25%;}.ant-col-xxl-offset-6{margin-inline-start:25%;}.ant-col-xxl-order-6{order:6;}.ant-col-xxl-5{display:block;flex:0 0 20.833333333333336%;max-width:20.833333333333336%;}.ant-col-xxl-push-5{inset-inline-start:20.833333333333336%;}.ant-col-xxl-pull-5{inset-inline-end:20.833333333333336%;}.ant-col-xxl-offset-5{margin-inline-start:20.833333333333336%;}.ant-col-xxl-order-5{order:5;}.ant-col-xxl-4{display:block;flex:0 0 16.666666666666664%;max-width:16.666666666666664%;}.ant-col-xxl-push-4{inset-inline-start:16.666666666666664%;}.ant-col-xxl-pull-4{inset-inline-end:16.666666666666664%;}.ant-col-xxl-offset-4{margin-inline-start:16.666666666666664%;}.ant-col-xxl-order-4{order:4;}.ant-col-xxl-3{display:block;flex:0 0 12.5%;max-width:12.5%;}.ant-col-xxl-push-3{inset-inline-start:12.5%;}.ant-col-xxl-pull-3{inset-inline-end:12.5%;}.ant-col-xxl-offset-3{margin-inline-start:12.5%;}.ant-col-xxl-order-3{order:3;}.ant-col-xxl-2{display:block;flex:0 0 8.333333333333332%;max-width:8.333333333333332%;}.ant-col-xxl-push-2{inset-inline-start:8.333333333333332%;}.ant-col-xxl-pull-2{inset-inline-end:8.333333333333332%;}.ant-col-xxl-offset-2{margin-inline-start:8.333333333333332%;}.ant-col-xxl-order-2{order:2;}.ant-col-xxl-1{display:block;flex:0 0 4.166666666666666%;max-width:4.166666666666666%;}.ant-col-xxl-push-1{inset-inline-start:4.166666666666666%;}.ant-col-xxl-pull-1{inset-inline-end:4.166666666666666%;}.ant-col-xxl-offset-1{margin-inline-start:4.166666666666666%;}.ant-col-xxl-order-1{order:1;}.ant-col-xxl-0{display:none;}.ant-col-push-0{inset-inline-start:auto;}.ant-col-pull-0{inset-inline-end:auto;}.ant-col-xxl-push-0{inset-inline-start:auto;}.ant-col-xxl-pull-0{inset-inline-end:auto;}.ant-col-xxl-offset-0{margin-inline-end:0;}.ant-col-xxl-order-0{order:0;}}</style><style data-rc-order="prependQueue" data-css-hash="76rub0" data-token-hash="160jlb5">[class^="ant-divider"],[class*=" ant-divider"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}[class^="ant-divider"]::before,[class*=" ant-divider"]::before,[class^="ant-divider"]::after,[class*=" ant-divider"]::after{box-sizing:border-box;}[class^="ant-divider"] [class^="ant-divider"],[class*=" ant-divider"] [class^="ant-divider"],[class^="ant-divider"] [class*=" ant-divider"],[class*=" ant-divider"] [class*=" ant-divider"]{box-sizing:border-box;}[class^="ant-divider"] [class^="ant-divider"]::before,[class*=" ant-divider"] [class^="ant-divider"]::before,[class^="ant-divider"] [class*=" ant-divider"]::before,[class*=" ant-divider"] [class*=" ant-divider"]::before,[class^="ant-divider"] [class^="ant-divider"]::after,[class*=" ant-divider"] [class^="ant-divider"]::after,[class^="ant-divider"] [class*=" ant-divider"]::after,[class*=" ant-divider"] [class*=" ant-divider"]::after{box-sizing:border-box;}.ant-divider{box-sizing:border-box;margin:0;padding:0;color:rgba(0, 0, 0, 0.88);font-size:14px;line-height:1.5714285714285714;list-style:none;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';border-block-start:1px solid rgba(5, 5, 5, 0.06);}.ant-divider-vertical{position:relative;top:-0.06em;display:inline-block;height:0.9em;margin:0 8px;vertical-align:middle;border-top:0;border-inline-start:1px solid rgba(5, 5, 5, 0.06);}.ant-divider-horizontal{display:flex;clear:both;width:100%;min-width:100%;margin:24px 0;}.ant-divider-horizontal.ant-divider-with-text{display:flex;align-items:center;margin:16px 0;color:rgba(0, 0, 0, 0.88);font-weight:500;font-size:16px;white-space:nowrap;text-align:center;border-block-start:0 rgba(5, 5, 5, 0.06);}.ant-divider-horizontal.ant-divider-with-text::before,.ant-divider-horizontal.ant-divider-with-text::after{position:relative;width:50%;border-block-start:1px solid transparent;border-block-start-color:inherit;border-block-end:0;transform:translateY(50%);content:'';}.ant-divider-horizontal.ant-divider-with-text-left::before{width:5%;}.ant-divider-horizontal.ant-divider-with-text-left::after{width:95%;}.ant-divider-horizontal.ant-divider-with-text-right::before{width:95%;}.ant-divider-horizontal.ant-divider-with-text-right::after{width:5%;}.ant-divider .ant-divider-inner-text{display:inline-block;padding:0 1em;}.ant-divider-dashed{background:none;border-color:rgba(5, 5, 5, 0.06);border-style:dashed;border-width:1px 0 0;}.ant-divider-horizontal.ant-divider-with-text.ant-divider-dashed::before,.ant-divider-horizontal.ant-divider-with-text.ant-divider-dashed::after{border-style:dashed none none;}.ant-divider-vertical.ant-divider-dashed{border-inline-start:1px;border-inline-end:0;border-block-start:0;border-block-end:0;}.ant-divider-plain.ant-divider-with-text{color:rgba(0, 0, 0, 0.88);font-weight:normal;font-size:14px;}.ant-divider-horizontal.ant-divider-with-text-left.ant-divider-no-default-orientation-margin-left::before{width:0;}.ant-divider-horizontal.ant-divider-with-text-left.ant-divider-no-default-orientation-margin-left::after{width:100%;}.ant-divider-horizontal.ant-divider-with-text-left.ant-divider-no-default-orientation-margin-left .ant-divider-inner-text{padding-inline-start:0;}.ant-divider-horizontal.ant-divider-with-text-right.ant-divider-no-default-orientation-margin-right::before{width:100%;}.ant-divider-horizontal.ant-divider-with-text-right.ant-divider-no-default-orientation-margin-right::after{width:0;}.ant-divider-horizontal.ant-divider-with-text-right.ant-divider-no-default-orientation-margin-right .ant-divider-inner-text{padding-inline-end:0;}</style><style data-rc-order="prependQueue" data-css-hash="axt9vc" data-token-hash="gngivi">.ant-pro-card-statistic{display:flex;font-size:14px;}.ant-pro-card-statistic+.ant-pro-card-statistic{margin-block-start:4px;}.ant-pro-card-statistic-tip{margin-inline-start:4px;}.ant-pro-card-statistic-wrapper{display:flex;width:100%;}.ant-pro-card-statistic-wrapper .ant-pro-card-statistic-status{width:14px;}.ant-pro-card-statistic-icon{margin-inline-end:16px;}.ant-pro-card-statistic-trend-icon{width:0;height:0;border-inline-end:3.5px solid transparent;border-block-end:9px solid #000;border-inline-start:3.5px solid transparent;}.ant-pro-card-statistic-trend-icon-up{transform:rotate(0deg);}.ant-pro-card-statistic-trend-icon-down{transform:rotate(180deg);}.ant-pro-card-statistic-content{width:100%;}.ant-pro-card-statistic-description{width:100%;}.ant-pro-card-statistic .ant-statistic-title{color:rgba(0, 0, 0, 0.88);}.ant-pro-card-statistic-trend-up .ant-statistic-content{color:#f5222d;}.ant-pro-card-statistic-trend-up .ant-statistic-content .ant-pro-card-statistic-trend-icon{border-block-end-color:#f5222d;}.ant-pro-card-statistic-trend-down .ant-statistic-content{color:#389e0d;}.ant-pro-card-statistic-trend-down .ant-statistic-content .ant-pro-card-statistic-trend-icon{border-block-end-color:#52c41a;}.ant-pro-card-statistic .ant-pro-card-statistic-layout-horizontal{display:flex;justify-content:space-between;}.ant-pro-card-statistic .ant-pro-card-statistic-layout-horizontal .ant-statistic-title{margin-block-end:0;}.ant-pro-card-statistic .ant-pro-card-statistic-layout-horizontal .ant-statistic-content-value{font-weight:500;}.ant-pro-card-statistic .ant-pro-card-statistic-layout-horizontal .ant-statistic-title,.ant-pro-card-statistic .ant-pro-card-statistic-layout-horizontal .ant-statistic-content,.ant-pro-card-statistic .ant-pro-card-statistic-layout-horizontal .ant-statistic-content-suffix,.ant-pro-card-statistic .ant-pro-card-statistic-layout-horizontal .ant-statistic-content-prefix,.ant-pro-card-statistic .ant-pro-card-statistic-layout-horizontal .ant-statistic-content-value-decimal{font-size:14px;}.ant-pro-card-statistic .ant-pro-card-statistic-layout-inline{display:inline-flex;color:rgba(0, 0, 0, 0.65);}.ant-pro-card-statistic .ant-pro-card-statistic-layout-inline .ant-statistic-title{margin-inline-end:6px;margin-block-end:0;}.ant-pro-card-statistic .ant-pro-card-statistic-layout-inline .ant-statistic-content{color:rgba(0, 0, 0, 0.65);}.ant-pro-card-statistic .ant-pro-card-statistic-layout-inline .ant-statistic-title,.ant-pro-card-statistic .ant-pro-card-statistic-layout-inline .ant-statistic-content,.ant-pro-card-statistic .ant-pro-card-statistic-layout-inline .ant-statistic-content-suffix,.ant-pro-card-statistic .ant-pro-card-statistic-layout-inline .ant-statistic-content-prefix,.ant-pro-card-statistic .ant-pro-card-statistic-layout-inline .ant-statistic-content-value-decimal{font-size:12px;}</style><style data-rc-order="prependQueue" data-css-hash="2agrjs" data-token-hash="160jlb5">[class^="ant-statistic"],[class*=" ant-statistic"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}[class^="ant-statistic"]::before,[class*=" ant-statistic"]::before,[class^="ant-statistic"]::after,[class*=" ant-statistic"]::after{box-sizing:border-box;}[class^="ant-statistic"] [class^="ant-statistic"],[class*=" ant-statistic"] [class^="ant-statistic"],[class^="ant-statistic"] [class*=" ant-statistic"],[class*=" ant-statistic"] [class*=" ant-statistic"]{box-sizing:border-box;}[class^="ant-statistic"] [class^="ant-statistic"]::before,[class*=" ant-statistic"] [class^="ant-statistic"]::before,[class^="ant-statistic"] [class*=" ant-statistic"]::before,[class*=" ant-statistic"] [class*=" ant-statistic"]::before,[class^="ant-statistic"] [class^="ant-statistic"]::after,[class*=" ant-statistic"] [class^="ant-statistic"]::after,[class^="ant-statistic"] [class*=" ant-statistic"]::after,[class*=" ant-statistic"] [class*=" ant-statistic"]::after{box-sizing:border-box;}.ant-statistic{box-sizing:border-box;margin:0;padding:0;color:rgba(0, 0, 0, 0.88);font-size:14px;line-height:1.5714285714285714;list-style:none;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';}.ant-statistic .ant-statistic-title{margin-bottom:4px;color:rgba(0, 0, 0, 0.45);font-size:14px;}.ant-statistic .ant-statistic-skeleton{padding-top:16px;}.ant-statistic .ant-statistic-content{color:rgba(0, 0, 0, 0.88);font-size:24px;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';}.ant-statistic .ant-statistic-content .ant-statistic-content-value{display:inline-block;direction:ltr;}.ant-statistic .ant-statistic-content .ant-statistic-content-prefix,.ant-statistic .ant-statistic-content .ant-statistic-content-suffix{display:inline-block;}.ant-statistic .ant-statistic-content .ant-statistic-content-prefix{margin-inline-end:4px;}.ant-statistic .ant-statistic-content .ant-statistic-content-suffix{margin-inline-start:4px;}</style><style data-rc-order="prependQueue" data-css-hash="1yv8dig" data-token-hash="160jlb5">[class^="ant-skeleton"],[class*=" ant-skeleton"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}[class^="ant-skeleton"]::before,[class*=" ant-skeleton"]::before,[class^="ant-skeleton"]::after,[class*=" ant-skeleton"]::after{box-sizing:border-box;}[class^="ant-skeleton"] [class^="ant-skeleton"],[class*=" ant-skeleton"] [class^="ant-skeleton"],[class^="ant-skeleton"] [class*=" ant-skeleton"],[class*=" ant-skeleton"] [class*=" ant-skeleton"]{box-sizing:border-box;}[class^="ant-skeleton"] [class^="ant-skeleton"]::before,[class*=" ant-skeleton"] [class^="ant-skeleton"]::before,[class^="ant-skeleton"] [class*=" ant-skeleton"]::before,[class*=" ant-skeleton"] [class*=" ant-skeleton"]::before,[class^="ant-skeleton"] [class^="ant-skeleton"]::after,[class*=" ant-skeleton"] [class^="ant-skeleton"]::after,[class^="ant-skeleton"] [class*=" ant-skeleton"]::after,[class*=" ant-skeleton"] [class*=" ant-skeleton"]::after{box-sizing:border-box;}.ant-skeleton{display:table;width:100%;}.ant-skeleton .ant-skeleton-header{display:table-cell;padding-inline-end:16px;vertical-align:top;}.ant-skeleton .ant-skeleton-header .ant-skeleton-avatar{display:inline-block;vertical-align:top;background:rgba(0, 0, 0, 0.06);width:32px;height:32px;line-height:32px;}.ant-skeleton .ant-skeleton-header .ant-skeleton-avatar-circle{border-radius:50%;}.ant-skeleton .ant-skeleton-header .ant-skeleton-avatar-lg{width:40px;height:40px;line-height:40px;}.ant-skeleton .ant-skeleton-header .ant-skeleton-avatar-sm{width:24px;height:24px;line-height:24px;}.ant-skeleton .ant-skeleton-content{display:table-cell;width:100%;vertical-align:top;}.ant-skeleton .ant-skeleton-content .ant-skeleton-title{width:100%;height:16px;background:rgba(0, 0, 0, 0.06);border-radius:4px;}.ant-skeleton .ant-skeleton-content .ant-skeleton-title +.ant-skeleton-paragraph{margin-block-start:24px;}.ant-skeleton .ant-skeleton-content .ant-skeleton-paragraph{padding:0;}.ant-skeleton .ant-skeleton-content .ant-skeleton-paragraph >li{width:100%;height:16px;list-style:none;background:rgba(0, 0, 0, 0.06);border-radius:4px;}.ant-skeleton .ant-skeleton-content .ant-skeleton-paragraph >li +li{margin-block-start:16px;}.ant-skeleton .ant-skeleton-content .ant-skeleton-paragraph>li:last-child:not(:first-child):not(:nth-child(2)){width:61%;}.ant-skeleton-round .ant-skeleton-content .ant-skeleton-title,.ant-skeleton-round .ant-skeleton-content .ant-skeleton-paragraph>li{border-radius:100px;}.ant-skeleton-with-avatar .ant-skeleton-content .ant-skeleton-title{margin-block-start:12px;}.ant-skeleton-with-avatar .ant-skeleton-content .ant-skeleton-title +.ant-skeleton-paragraph{margin-block-start:28px;}.ant-skeleton.ant-skeleton-element{display:inline-block;width:auto;}.ant-skeleton.ant-skeleton-element .ant-skeleton-button{display:inline-block;vertical-align:top;background:rgba(0, 0, 0, 0.06);border-radius:4px;width:64px;min-width:64px;height:32px;line-height:32px;}.ant-skeleton.ant-skeleton-element .ant-skeleton-button.ant-skeleton-button-circle{width:32px;min-width:32px;border-radius:50%;}.ant-skeleton.ant-skeleton-element .ant-skeleton-button.ant-skeleton-button-round{border-radius:32px;}.ant-skeleton.ant-skeleton-element .ant-skeleton-button-lg{width:80px;min-width:80px;height:40px;line-height:40px;}.ant-skeleton.ant-skeleton-element .ant-skeleton-button-lg.ant-skeleton-button-circle{width:40px;min-width:40px;border-radius:50%;}.ant-skeleton.ant-skeleton-element .ant-skeleton-button-lg.ant-skeleton-button-round{border-radius:40px;}.ant-skeleton.ant-skeleton-element .ant-skeleton-button-sm{width:48px;min-width:48px;height:24px;line-height:24px;}.ant-skeleton.ant-skeleton-element .ant-skeleton-button-sm.ant-skeleton-button-circle{width:24px;min-width:24px;border-radius:50%;}.ant-skeleton.ant-skeleton-element .ant-skeleton-button-sm.ant-skeleton-button-round{border-radius:24px;}.ant-skeleton.ant-skeleton-element .ant-skeleton-avatar{display:inline-block;vertical-align:top;background:rgba(0, 0, 0, 0.06);width:32px;height:32px;line-height:32px;}.ant-skeleton.ant-skeleton-element .ant-skeleton-avatar.ant-skeleton-avatar-circle{border-radius:50%;}.ant-skeleton.ant-skeleton-element .ant-skeleton-avatar.ant-skeleton-avatar-lg{width:40px;height:40px;line-height:40px;}.ant-skeleton.ant-skeleton-element .ant-skeleton-avatar.ant-skeleton-avatar-sm{width:24px;height:24px;line-height:24px;}.ant-skeleton.ant-skeleton-element .ant-skeleton-input{display:inline-block;vertical-align:top;background:rgba(0, 0, 0, 0.06);border-radius:4px;width:160px;min-width:160px;height:32px;line-height:32px;}.ant-skeleton.ant-skeleton-element .ant-skeleton-input-lg{width:200px;min-width:200px;height:40px;line-height:40px;}.ant-skeleton.ant-skeleton-element .ant-skeleton-input-sm{width:120px;min-width:120px;height:24px;line-height:24px;}.ant-skeleton.ant-skeleton-element .ant-skeleton-image{display:flex;align-items:center;justify-content:center;vertical-align:top;background:rgba(0, 0, 0, 0.06);border-radius:4px;width:96px;height:96px;line-height:96px;}.ant-skeleton.ant-skeleton-element .ant-skeleton-image .ant-skeleton-image-path{fill:#bfbfbf;}.ant-skeleton.ant-skeleton-element .ant-skeleton-image .ant-skeleton-image-svg{width:48px;height:48px;line-height:48px;max-width:192px;max-height:192px;}.ant-skeleton.ant-skeleton-element .ant-skeleton-image .ant-skeleton-image-svg.ant-skeleton-image-svg-circle{border-radius:50%;}.ant-skeleton.ant-skeleton-element .ant-skeleton-image.ant-skeleton-image-circle{border-radius:50%;}.ant-skeleton.ant-skeleton-block{width:100%;}.ant-skeleton.ant-skeleton-block .ant-skeleton-button{width:100%;}.ant-skeleton.ant-skeleton-block .ant-skeleton-input{width:100%;}.ant-skeleton.ant-skeleton-active .ant-skeleton-title,.ant-skeleton.ant-skeleton-active .ant-skeleton-paragraph>li,.ant-skeleton.ant-skeleton-active .ant-skeleton-avatar,.ant-skeleton.ant-skeleton-active .ant-skeleton-button,.ant-skeleton.ant-skeleton-active .ant-skeleton-input,.ant-skeleton.ant-skeleton-active .ant-skeleton-image{position:relative;z-index:0;overflow:hidden;background:transparent;}.ant-skeleton.ant-skeleton-active .ant-skeleton-title::after,.ant-skeleton.ant-skeleton-active .ant-skeleton-paragraph>li::after,.ant-skeleton.ant-skeleton-active .ant-skeleton-avatar::after,.ant-skeleton.ant-skeleton-active .ant-skeleton-button::after,.ant-skeleton.ant-skeleton-active .ant-skeleton-input::after,.ant-skeleton.ant-skeleton-active .ant-skeleton-image::after{position:absolute;top:0;inset-inline-end:-150%;bottom:0;inset-inline-start:-150%;background:linear-gradient(90deg, rgba(0, 0, 0, 0.06) 25%, rgba(0, 0, 0, 0.15) 37%, rgba(0, 0, 0, 0.06) 63%);animation-name:ant-skeleton-loading;animation-duration:1.4s;animation-timing-function:ease;animation-iteration-count:infinite;content:"";}</style><style data-rc-order="prependQueue" data-css-hash="_effect-ant-skeleton-loading">@keyframes ant-skeleton-loading{0%{transform:translateX(-37.5%);}100%{transform:translateX(37.5%);}}</style><style data-rc-order="prependQueue" data-css-hash="5sr7u0" data-token-hash="160jlb5">[class^="ant-space"],[class*=" ant-space"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}[class^="ant-space"]::before,[class*=" ant-space"]::before,[class^="ant-space"]::after,[class*=" ant-space"]::after{box-sizing:border-box;}[class^="ant-space"] [class^="ant-space"],[class*=" ant-space"] [class^="ant-space"],[class^="ant-space"] [class*=" ant-space"],[class*=" ant-space"] [class*=" ant-space"]{box-sizing:border-box;}[class^="ant-space"] [class^="ant-space"]::before,[class*=" ant-space"] [class^="ant-space"]::before,[class^="ant-space"] [class*=" ant-space"]::before,[class*=" ant-space"] [class*=" ant-space"]::before,[class^="ant-space"] [class^="ant-space"]::after,[class*=" ant-space"] [class^="ant-space"]::after,[class^="ant-space"] [class*=" ant-space"]::after,[class*=" ant-space"] [class*=" ant-space"]::after{box-sizing:border-box;}.ant-space{display:inline-flex;}.ant-space-rtl{direction:rtl;}.ant-space-vertical{flex-direction:column;}.ant-space-align{flex-direction:column;}.ant-space-align-center{align-items:center;}.ant-space-align-start{align-items:flex-start;}.ant-space-align-end{align-items:flex-end;}.ant-space-align-baseline{align-items:baseline;}.ant-space .ant-space-space-item:empty{display:none;}.ant-space{display:inline-flex;}.ant-space-block{display:flex;width:100%;}.ant-space-vertical{flex-direction:column;}</style><style data-rc-order="prependQueue" data-css-hash="1vm5zx7" data-token-hash="160jlb5">[class^="ant-btn"],[class*=" ant-btn"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}[class^="ant-btn"]::before,[class*=" ant-btn"]::before,[class^="ant-btn"]::after,[class*=" ant-btn"]::after{box-sizing:border-box;}[class^="ant-btn"] [class^="ant-btn"],[class*=" ant-btn"] [class^="ant-btn"],[class^="ant-btn"] [class*=" ant-btn"],[class*=" ant-btn"] [class*=" ant-btn"]{box-sizing:border-box;}[class^="ant-btn"] [class^="ant-btn"]::before,[class*=" ant-btn"] [class^="ant-btn"]::before,[class^="ant-btn"] [class*=" ant-btn"]::before,[class*=" ant-btn"] [class*=" ant-btn"]::before,[class^="ant-btn"] [class^="ant-btn"]::after,[class*=" ant-btn"] [class^="ant-btn"]::after,[class^="ant-btn"] [class*=" ant-btn"]::after,[class*=" ant-btn"] [class*=" ant-btn"]::after{box-sizing:border-box;}.ant-btn{outline:none;position:relative;display:inline-block;font-weight:400;white-space:nowrap;text-align:center;background-image:none;background-color:transparent;border:1px solid transparent;cursor:pointer;transition:all 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);user-select:none;touch-action:manipulation;line-height:1.5714285714285714;color:rgba(0, 0, 0, 0.88);}.ant-btn >span{display:inline-flex;}.ant-btn >.anticon+span,.ant-btn >span+.anticon{margin-inline-start:8px;}.ant-btn:not(:disabled):focus-visible{outline:4px solid #91caff;outline-offset:1px;transition:outline-offset 0s,outline 0s;}.ant-btn-icon-only.ant-btn-compact-item{flex:none;}.ant-btn-compact-item.ant-btn-primary:not([disabled])+.ant-btn-compact-item.ant-btn-primary:not([disabled]){position:relative;}.ant-btn-compact-item.ant-btn-primary:not([disabled])+.ant-btn-compact-item.ant-btn-primary:not([disabled]):before{position:absolute;top:-1px;inset-inline-start:-1px;display:inline-block;width:1px;height:calc(100% + 2px);background-color:#4096ff;content:"";}.ant-btn-compact-vertical-item.ant-btn-primary:not([disabled])+.ant-btn-compact-vertical-item.ant-btn-primary:not([disabled]){position:relative;}.ant-btn-compact-vertical-item.ant-btn-primary:not([disabled])+.ant-btn-compact-vertical-item.ant-btn-primary:not([disabled]):before{position:absolute;top:-1px;inset-inline-start:-1px;display:inline-block;width:calc(100% + 2px);height:1px;background-color:#4096ff;content:"";}.ant-btn.ant-btn-sm{font-size:14px;height:24px;padding:0px 7px;border-radius:4px;}.ant-btn.ant-btn-sm.ant-btn-icon-only{width:24px;padding-inline-start:0;padding-inline-end:0;}.ant-btn.ant-btn-sm.ant-btn-icon-only.ant-btn-round{width:auto;}.ant-btn.ant-btn-sm.ant-btn-icon-only >span{transform:scale(1.143);}.ant-btn.ant-btn-sm.ant-btn-loading{opacity:0.65;cursor:default;}.ant-btn.ant-btn-sm .ant-btn-loading-icon{transition:width 0.3s cubic-bezier(0.645, 0.045, 0.355, 1),opacity 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);}.ant-btn.ant-btn-sm:not(.ant-btn-icon-only) .ant-btn-loading-icon>.anticon{margin-inline-end:8px;}.ant-btn.ant-btn-circle.ant-btn-sm{min-width:24px;padding-inline-start:0;padding-inline-end:0;border-radius:50%;}.ant-btn.ant-btn-round.ant-btn-sm{border-radius:24px;padding-inline-start:12px;padding-inline-end:12px;}.ant-btn{font-size:14px;height:32px;padding:4px 15px;border-radius:6px;}.ant-btn.ant-btn-icon-only{width:32px;padding-inline-start:0;padding-inline-end:0;}.ant-btn.ant-btn-icon-only.ant-btn-round{width:auto;}.ant-btn.ant-btn-icon-only >span{transform:scale(1.143);}.ant-btn.ant-btn-loading{opacity:0.65;cursor:default;}.ant-btn .ant-btn-loading-icon{transition:width 0.3s cubic-bezier(0.645, 0.045, 0.355, 1),opacity 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);}.ant-btn:not(.ant-btn-icon-only) .ant-btn-loading-icon>.anticon{margin-inline-end:8px;}.ant-btn.ant-btn-circle{min-width:32px;padding-inline-start:0;padding-inline-end:0;border-radius:50%;}.ant-btn.ant-btn-round{border-radius:32px;padding-inline-start:16px;padding-inline-end:16px;}.ant-btn.ant-btn-lg{font-size:16px;height:40px;padding:6.428571428571429px 15px;border-radius:8px;}.ant-btn.ant-btn-lg.ant-btn-icon-only{width:40px;padding-inline-start:0;padding-inline-end:0;}.ant-btn.ant-btn-lg.ant-btn-icon-only.ant-btn-round{width:auto;}.ant-btn.ant-btn-lg.ant-btn-icon-only >span{transform:scale(1.143);}.ant-btn.ant-btn-lg.ant-btn-loading{opacity:0.65;cursor:default;}.ant-btn.ant-btn-lg .ant-btn-loading-icon{transition:width 0.3s cubic-bezier(0.645, 0.045, 0.355, 1),opacity 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);}.ant-btn.ant-btn-lg:not(.ant-btn-icon-only) .ant-btn-loading-icon>.anticon{margin-inline-end:8px;}.ant-btn.ant-btn-circle.ant-btn-lg{min-width:40px;padding-inline-start:0;padding-inline-end:0;border-radius:50%;}.ant-btn.ant-btn-round.ant-btn-lg{border-radius:40px;padding-inline-start:20px;padding-inline-end:20px;}.ant-btn.ant-btn-block{width:100%;}.ant-btn-default{background-color:#ffffff;border-color:#d9d9d9;box-shadow:0 2px 0 rgba(0, 0, 0, 0.02);}.ant-btn-default:disabled{cursor:not-allowed;border-color:#d9d9d9;color:rgba(0, 0, 0, 0.25);background-color:rgba(0, 0, 0, 0.04);box-shadow:none;}.ant-btn-default:not(:disabled):hover{color:#4096ff;border-color:#4096ff;}.ant-btn-default:not(:disabled):active{color:#0958d9;border-color:#0958d9;}.ant-btn-default.ant-btn-background-ghost{color:#ffffff;background-color:transparent;border-color:#ffffff;box-shadow:none;}.ant-btn-default.ant-btn-background-ghost:not(:disabled):hover{background-color:transparent;}.ant-btn-default.ant-btn-background-ghost:not(:disabled):active{background-color:transparent;}.ant-btn-default.ant-btn-background-ghost:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);border-color:#d9d9d9;}.ant-btn-default.ant-btn-dangerous{color:#ff4d4f;border-color:#ff4d4f;}.ant-btn-default.ant-btn-dangerous:not(:disabled):hover{color:#ff7875;border-color:#ffa39e;}.ant-btn-default.ant-btn-dangerous:not(:disabled):active{color:#d9363e;border-color:#d9363e;}.ant-btn-default.ant-btn-dangerous.ant-btn-background-ghost{color:#ff4d4f;background-color:transparent;border-color:#ff4d4f;box-shadow:none;}.ant-btn-default.ant-btn-dangerous.ant-btn-background-ghost:not(:disabled):hover{background-color:transparent;}.ant-btn-default.ant-btn-dangerous.ant-btn-background-ghost:not(:disabled):active{background-color:transparent;}.ant-btn-default.ant-btn-dangerous.ant-btn-background-ghost:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);border-color:#d9d9d9;}.ant-btn-default.ant-btn-dangerous:disabled{cursor:not-allowed;border-color:#d9d9d9;color:rgba(0, 0, 0, 0.25);background-color:rgba(0, 0, 0, 0.04);box-shadow:none;}.ant-btn-primary{color:#fff;background-color:#1677ff;box-shadow:0 2px 0 rgba(5, 145, 255, 0.1);}.ant-btn-primary:disabled{cursor:not-allowed;border-color:#d9d9d9;color:rgba(0, 0, 0, 0.25);background-color:rgba(0, 0, 0, 0.04);box-shadow:none;}.ant-btn-primary:not(:disabled):hover{color:#fff;background-color:#4096ff;}.ant-btn-primary:not(:disabled):active{color:#fff;background-color:#0958d9;}.ant-btn-primary.ant-btn-background-ghost{color:#1677ff;background-color:transparent;border-color:#1677ff;box-shadow:none;}.ant-btn-primary.ant-btn-background-ghost:not(:disabled):hover{background-color:transparent;color:#4096ff;border-color:#4096ff;}.ant-btn-primary.ant-btn-background-ghost:not(:disabled):active{background-color:transparent;color:#0958d9;border-color:#0958d9;}.ant-btn-primary.ant-btn-background-ghost:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);border-color:#d9d9d9;}.ant-btn-primary.ant-btn-dangerous{background-color:#ff4d4f;box-shadow:0 2px 0 rgba(255, 38, 5, 0.06);}.ant-btn-primary.ant-btn-dangerous:not(:disabled):hover{background-color:#ff7875;}.ant-btn-primary.ant-btn-dangerous:not(:disabled):active{background-color:#d9363e;}.ant-btn-primary.ant-btn-dangerous.ant-btn-background-ghost{color:#ff4d4f;background-color:transparent;border-color:#ff4d4f;box-shadow:none;}.ant-btn-primary.ant-btn-dangerous.ant-btn-background-ghost:not(:disabled):hover{background-color:transparent;color:#ff7875;border-color:#ff7875;}.ant-btn-primary.ant-btn-dangerous.ant-btn-background-ghost:not(:disabled):active{background-color:transparent;color:#d9363e;border-color:#d9363e;}.ant-btn-primary.ant-btn-dangerous.ant-btn-background-ghost:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);border-color:#d9d9d9;}.ant-btn-primary.ant-btn-dangerous:disabled{cursor:not-allowed;border-color:#d9d9d9;color:rgba(0, 0, 0, 0.25);background-color:rgba(0, 0, 0, 0.04);box-shadow:none;}.ant-btn-dashed{background-color:#ffffff;border-color:#d9d9d9;box-shadow:0 2px 0 rgba(0, 0, 0, 0.02);border-style:dashed;}.ant-btn-dashed:disabled{cursor:not-allowed;border-color:#d9d9d9;color:rgba(0, 0, 0, 0.25);background-color:rgba(0, 0, 0, 0.04);box-shadow:none;}.ant-btn-dashed:not(:disabled):hover{color:#4096ff;border-color:#4096ff;}.ant-btn-dashed:not(:disabled):active{color:#0958d9;border-color:#0958d9;}.ant-btn-dashed.ant-btn-background-ghost{color:#ffffff;background-color:transparent;border-color:#ffffff;box-shadow:none;}.ant-btn-dashed.ant-btn-background-ghost:not(:disabled):hover{background-color:transparent;}.ant-btn-dashed.ant-btn-background-ghost:not(:disabled):active{background-color:transparent;}.ant-btn-dashed.ant-btn-background-ghost:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);border-color:#d9d9d9;}.ant-btn-dashed.ant-btn-dangerous{color:#ff4d4f;border-color:#ff4d4f;}.ant-btn-dashed.ant-btn-dangerous:not(:disabled):hover{color:#ff7875;border-color:#ffa39e;}.ant-btn-dashed.ant-btn-dangerous:not(:disabled):active{color:#d9363e;border-color:#d9363e;}.ant-btn-dashed.ant-btn-dangerous.ant-btn-background-ghost{color:#ff4d4f;background-color:transparent;border-color:#ff4d4f;box-shadow:none;}.ant-btn-dashed.ant-btn-dangerous.ant-btn-background-ghost:not(:disabled):hover{background-color:transparent;}.ant-btn-dashed.ant-btn-dangerous.ant-btn-background-ghost:not(:disabled):active{background-color:transparent;}.ant-btn-dashed.ant-btn-dangerous.ant-btn-background-ghost:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);border-color:#d9d9d9;}.ant-btn-dashed.ant-btn-dangerous:disabled{cursor:not-allowed;border-color:#d9d9d9;color:rgba(0, 0, 0, 0.25);background-color:rgba(0, 0, 0, 0.04);box-shadow:none;}.ant-btn-link{color:#1677ff;}.ant-btn-link:not(:disabled):hover{color:#69b1ff;}.ant-btn-link:not(:disabled):active{color:#0958d9;}.ant-btn-link:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);}.ant-btn-link.ant-btn-dangerous{color:#ff4d4f;}.ant-btn-link.ant-btn-dangerous:not(:disabled):hover{color:#ff7875;}.ant-btn-link.ant-btn-dangerous:not(:disabled):active{color:#d9363e;}.ant-btn-link.ant-btn-dangerous:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);}.ant-btn-text:not(:disabled):hover{color:rgba(0, 0, 0, 0.88);background-color:rgba(0, 0, 0, 0.06);}.ant-btn-text:not(:disabled):active{color:rgba(0, 0, 0, 0.88);background-color:rgba(0, 0, 0, 0.15);}.ant-btn-text:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);}.ant-btn-text.ant-btn-dangerous{color:#ff4d4f;}.ant-btn-text.ant-btn-dangerous:disabled{cursor:not-allowed;color:rgba(0, 0, 0, 0.25);}.ant-btn-text.ant-btn-dangerous:not(:disabled):hover{color:#ff7875;background-color:#fff2f0;}.ant-btn-text.ant-btn-dangerous:not(:disabled):active{color:#ff7875;background-color:#fff2f0;}.ant-btn-disabled{cursor:not-allowed;border-color:#d9d9d9;color:rgba(0, 0, 0, 0.25);background-color:rgba(0, 0, 0, 0.04);box-shadow:none;}.ant-btn-disabled.ant-btn:hover{cursor:not-allowed;border-color:#d9d9d9;color:rgba(0, 0, 0, 0.25);background-color:rgba(0, 0, 0, 0.04);box-shadow:none;}.ant-btn-group{position:relative;display:inline-flex;}.ant-btn-group >span:not(:last-child),.ant-btn-group >.ant-btn:not(:last-child),.ant-btn-group >span:not(:last-child)>.ant-btn,.ant-btn-group >.ant-btn:not(:last-child)>.ant-btn{border-start-end-radius:0;border-end-end-radius:0;}.ant-btn-group >span:not(:first-child),.ant-btn-group >.ant-btn:not(:first-child){margin-inline-start:-1px;}.ant-btn-group >span:not(:first-child),.ant-btn-group >.ant-btn:not(:first-child),.ant-btn-group >span:not(:first-child)>.ant-btn,.ant-btn-group >.ant-btn:not(:first-child)>.ant-btn{border-start-start-radius:0;border-end-start-radius:0;}.ant-btn-group .ant-btn{position:relative;z-index:1;}.ant-btn-group .ant-btn:hover,.ant-btn-group .ant-btn:focus,.ant-btn-group .ant-btn:active{z-index:2;}.ant-btn-group .ant-btn[disabled]{z-index:0;}.ant-btn-group .ant-btn-icon-only{font-size:14px;}.ant-btn-group >span:not(:last-child):not(:disabled),.ant-btn-group >.ant-btn-primary:not(:last-child):not(:disabled),.ant-btn-group >span:not(:last-child)>.ant-btn-primary:not(:disabled),.ant-btn-group >.ant-btn-primary:not(:last-child)>.ant-btn-primary:not(:disabled){border-inline-end-color:#4096ff;}.ant-btn-group >span:not(:first-child):not(:disabled),.ant-btn-group >.ant-btn-primary:not(:first-child):not(:disabled),.ant-btn-group >span:not(:first-child)>.ant-btn-primary:not(:disabled),.ant-btn-group >.ant-btn-primary:not(:first-child)>.ant-btn-primary:not(:disabled){border-inline-start-color:#4096ff;}.ant-btn-group >span:not(:last-child):not(:disabled),.ant-btn-group >.ant-btn-danger:not(:last-child):not(:disabled),.ant-btn-group >span:not(:last-child)>.ant-btn-danger:not(:disabled),.ant-btn-group >.ant-btn-danger:not(:last-child)>.ant-btn-danger:not(:disabled){border-inline-end-color:#ff7875;}.ant-btn-group >span:not(:first-child):not(:disabled),.ant-btn-group >.ant-btn-danger:not(:first-child):not(:disabled),.ant-btn-group >span:not(:first-child)>.ant-btn-danger:not(:disabled),.ant-btn-group >.ant-btn-danger:not(:first-child)>.ant-btn-danger:not(:disabled){border-inline-start-color:#ff7875;}.ant-btn-compact-item:not(.ant-btn-compact-last-item){margin-inline-end:-1px;}.ant-btn-compact-item:hover,.ant-btn-compact-item:active{z-index:2;}.ant-btn-compact-item[disabled]{z-index:0;}.ant-btn-compact-item:not(.ant-btn-compact-first-item):not(.ant-btn-compact-last-item){border-radius:0;}.ant-btn-compact-item:not(.ant-btn-compact-last-item).ant-btn-compact-first-item,.ant-btn-compact-item:not(.ant-btn-compact-last-item).ant-btn-compact-first-item.ant-btn-sm,.ant-btn-compact-item:not(.ant-btn-compact-last-item).ant-btn-compact-first-item.ant-btn-lg{border-start-end-radius:0;border-end-end-radius:0;}.ant-btn-compact-item:not(.ant-btn-compact-first-item).ant-btn-compact-last-item,.ant-btn-compact-item:not(.ant-btn-compact-first-item).ant-btn-compact-last-item.ant-btn-sm,.ant-btn-compact-item:not(.ant-btn-compact-first-item).ant-btn-compact-last-item.ant-btn-lg{border-start-start-radius:0;border-end-start-radius:0;}.ant-btn-compact-vertical-item:not(.ant-btn-compact-vertical-last-item){margin-bottom:-1px;}.ant-btn-compact-vertical-item:hover,.ant-btn-compact-vertical-item:focus,.ant-btn-compact-vertical-item:active{z-index:2;}.ant-btn-compact-vertical-item[disabled]{z-index:0;}.ant-btn-compact-vertical-item:not(.ant-btn-compact-vertical-first-item):not(.ant-btn-compact-vertical-last-item){border-radius:0;}.ant-btn-compact-vertical-item.ant-btn-compact-vertical-first-item:not(.ant-btn-compact-vertical-last-item),.ant-btn-compact-vertical-item.ant-btn-compact-vertical-first-item:not(.ant-btn-compact-vertical-last-item).ant-btn-sm,.ant-btn-compact-vertical-item.ant-btn-compact-vertical-first-item:not(.ant-btn-compact-vertical-last-item).ant-btn-lg{border-end-end-radius:0;border-end-start-radius:0;}.ant-btn-compact-vertical-item.ant-btn-compact-vertical-last-item:not(.ant-btn-compact-vertical-first-item),.ant-btn-compact-vertical-item.ant-btn-compact-vertical-last-item:not(.ant-btn-compact-vertical-first-item).ant-btn-sm,.ant-btn-compact-vertical-item.ant-btn-compact-vertical-last-item:not(.ant-btn-compact-vertical-first-item).ant-btn-lg{border-start-start-radius:0;border-start-end-radius:0;}</style><style data-rc-order="prependQueue" data-css-hash="qizqr8" data-token-hash="160jlb5">[class^="ant-wave"],[class*=" ant-wave"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}[class^="ant-wave"]::before,[class*=" ant-wave"]::before,[class^="ant-wave"]::after,[class*=" ant-wave"]::after{box-sizing:border-box;}[class^="ant-wave"] [class^="ant-wave"],[class*=" ant-wave"] [class^="ant-wave"],[class^="ant-wave"] [class*=" ant-wave"],[class*=" ant-wave"] [class*=" ant-wave"]{box-sizing:border-box;}[class^="ant-wave"] [class^="ant-wave"]::before,[class*=" ant-wave"] [class^="ant-wave"]::before,[class^="ant-wave"] [class*=" ant-wave"]::before,[class*=" ant-wave"] [class*=" ant-wave"]::before,[class^="ant-wave"] [class^="ant-wave"]::after,[class*=" ant-wave"] [class^="ant-wave"]::after,[class^="ant-wave"] [class*=" ant-wave"]::after,[class*=" ant-wave"] [class*=" ant-wave"]::after{box-sizing:border-box;}.ant-wave{position:absolute;background:transparent;pointer-events:none;box-sizing:border-box;color:var(--wave-color, #1677ff);box-shadow:0 0 0 0 currentcolor;opacity:0.2;}.ant-wave.wave-motion-appear{transition:box-shadow 0.4s cubic-bezier(0.08, 0.82, 0.17, 1),opacity 2s cubic-bezier(0.08, 0.82, 0.17, 1);}.ant-wave.wave-motion-appear-active{box-shadow:0 0 0 6px currentcolor;opacity:0;}</style><style data-rc-order="prependQueue" data-css-hash="15tkrym" data-token-hash="160jlb5">[class^="ant-drawer"],[class*=" ant-drawer"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}[class^="ant-drawer"]::before,[class*=" ant-drawer"]::before,[class^="ant-drawer"]::after,[class*=" ant-drawer"]::after{box-sizing:border-box;}[class^="ant-drawer"] [class^="ant-drawer"],[class*=" ant-drawer"] [class^="ant-drawer"],[class^="ant-drawer"] [class*=" ant-drawer"],[class*=" ant-drawer"] [class*=" ant-drawer"]{box-sizing:border-box;}[class^="ant-drawer"] [class^="ant-drawer"]::before,[class*=" ant-drawer"] [class^="ant-drawer"]::before,[class^="ant-drawer"] [class*=" ant-drawer"]::before,[class*=" ant-drawer"] [class*=" ant-drawer"]::before,[class^="ant-drawer"] [class^="ant-drawer"]::after,[class*=" ant-drawer"] [class^="ant-drawer"]::after,[class^="ant-drawer"] [class*=" ant-drawer"]::after,[class*=" ant-drawer"] [class*=" ant-drawer"]::after{box-sizing:border-box;}.ant-drawer{position:fixed;inset:0;z-index:1000;pointer-events:none;}.ant-drawer-pure{position:relative;background:#ffffff;}.ant-drawer-pure.ant-drawer-left{box-shadow:6px 0 16px 0 rgba(0, 0, 0, 0.08),3px 0 6px -4px rgba(0, 0, 0, 0.12),9px 0 28px 8px rgba(0, 0, 0, 0.05);}.ant-drawer-pure.ant-drawer-right{box-shadow:-6px 0 16px 0 rgba(0, 0, 0, 0.08),-3px 0 6px -4px rgba(0, 0, 0, 0.12),-9px 0 28px 8px rgba(0, 0, 0, 0.05);}.ant-drawer-pure.ant-drawer-top{box-shadow:0 6px 16px 0 rgba(0, 0, 0, 0.08),0 3px 6px -4px rgba(0, 0, 0, 0.12),0 9px 28px 8px rgba(0, 0, 0, 0.05);}.ant-drawer-pure.ant-drawer-bottom{box-shadow:0 -6px 16px 0 rgba(0, 0, 0, 0.08),0 -3px 6px -4px rgba(0, 0, 0, 0.12),0 -9px 28px 8px rgba(0, 0, 0, 0.05);}.ant-drawer-inline{position:absolute;}.ant-drawer .ant-drawer-mask{position:absolute;inset:0;z-index:1000;background:rgba(0, 0, 0, 0.45);pointer-events:auto;}.ant-drawer .ant-drawer-content-wrapper{position:absolute;z-index:1000;transition:all 0.3s;}.ant-drawer .ant-drawer-content-wrapper-hidden{display:none;}.ant-drawer-left>.ant-drawer-content-wrapper{top:0;bottom:0;left:0;box-shadow:6px 0 16px 0 rgba(0, 0, 0, 0.08),3px 0 6px -4px rgba(0, 0, 0, 0.12),9px 0 28px 8px rgba(0, 0, 0, 0.05);}.ant-drawer-right>.ant-drawer-content-wrapper{top:0;right:0;bottom:0;box-shadow:-6px 0 16px 0 rgba(0, 0, 0, 0.08),-3px 0 6px -4px rgba(0, 0, 0, 0.12),-9px 0 28px 8px rgba(0, 0, 0, 0.05);}.ant-drawer-top>.ant-drawer-content-wrapper{top:0;inset-inline:0;box-shadow:0 6px 16px 0 rgba(0, 0, 0, 0.08),0 3px 6px -4px rgba(0, 0, 0, 0.12),0 9px 28px 8px rgba(0, 0, 0, 0.05);}.ant-drawer-bottom>.ant-drawer-content-wrapper{bottom:0;inset-inline:0;box-shadow:0 -6px 16px 0 rgba(0, 0, 0, 0.08),0 -3px 6px -4px rgba(0, 0, 0, 0.12),0 -9px 28px 8px rgba(0, 0, 0, 0.05);}.ant-drawer .ant-drawer-content{width:100%;height:100%;overflow:auto;background:#ffffff;pointer-events:auto;}.ant-drawer .ant-drawer-wrapper-body{display:flex;flex-direction:column;width:100%;height:100%;}.ant-drawer .ant-drawer-header{display:flex;flex:0;align-items:center;padding:16px 24px;font-size:16px;line-height:1.5;border-bottom:1px solid rgba(5, 5, 5, 0.06);}.ant-drawer .ant-drawer-header-title{display:flex;flex:1;align-items:center;min-width:0;min-height:0;}.ant-drawer .ant-drawer-extra{flex:none;}.ant-drawer .ant-drawer-close{display:inline-block;margin-inline-end:12px;color:rgba(0, 0, 0, 0.45);font-weight:600;font-size:16px;font-style:normal;line-height:1;text-align:center;text-transform:none;text-decoration:none;background:transparent;border:0;outline:0;cursor:pointer;transition:color 0.2s;text-rendering:auto;}.ant-drawer .ant-drawer-close:focus,.ant-drawer .ant-drawer-close:hover{color:rgba(0, 0, 0, 0.88);text-decoration:none;}.ant-drawer .ant-drawer-title{flex:1;margin:0;color:rgba(0, 0, 0, 0.88);font-weight:600;font-size:16px;line-height:1.5;}.ant-drawer .ant-drawer-body{flex:1;min-width:0;min-height:0;padding:24px;overflow:auto;}.ant-drawer .ant-drawer-footer{flex-shrink:0;padding:8px 16px;border-top:1px solid rgba(5, 5, 5, 0.06);}.ant-drawer-rtl{direction:rtl;}.ant-drawer .ant-drawer-mask-motion-enter-active,.ant-drawer .ant-drawer-mask-motion-appear-active,.ant-drawer .ant-drawer-mask-motion-leave-active{transition:all 0.3s;}.ant-drawer .ant-drawer-mask-motion-enter,.ant-drawer .ant-drawer-mask-motion-appear{opacity:0;}.ant-drawer .ant-drawer-mask-motion-enter-active,.ant-drawer .ant-drawer-mask-motion-appear-active{opacity:1;}.ant-drawer .ant-drawer-mask-motion-leave{opacity:1;}.ant-drawer .ant-drawer-mask-motion-leave-active{opacity:0;}.ant-drawer .ant-drawer-panel-motion-left-enter-start,.ant-drawer .ant-drawer-panel-motion-left-appear-start,.ant-drawer .ant-drawer-panel-motion-left-leave-start{transition:none;}.ant-drawer .ant-drawer-panel-motion-left-enter-active,.ant-drawer .ant-drawer-panel-motion-left-appear-active,.ant-drawer .ant-drawer-panel-motion-left-leave-active{transition:all 0.3s;}.ant-drawer .ant-drawer-panel-motion-left-enter-start,.ant-drawer .ant-drawer-panel-motion-left-appear-start{transform:translateX(-100%)!important;}.ant-drawer .ant-drawer-panel-motion-left-enter-active,.ant-drawer .ant-drawer-panel-motion-left-appear-active{transform:translateX(0);}.ant-drawer .ant-drawer-panel-motion-left-leave{transform:translateX(0);}.ant-drawer .ant-drawer-panel-motion-left-leave-active{transform:translateX(-100%);}.ant-drawer .ant-drawer-panel-motion-right-enter-start,.ant-drawer .ant-drawer-panel-motion-right-appear-start,.ant-drawer .ant-drawer-panel-motion-right-leave-start{transition:none;}.ant-drawer .ant-drawer-panel-motion-right-enter-active,.ant-drawer .ant-drawer-panel-motion-right-appear-active,.ant-drawer .ant-drawer-panel-motion-right-leave-active{transition:all 0.3s;}.ant-drawer .ant-drawer-panel-motion-right-enter-start,.ant-drawer .ant-drawer-panel-motion-right-appear-start{transform:translateX(100%)!important;}.ant-drawer .ant-drawer-panel-motion-right-enter-active,.ant-drawer .ant-drawer-panel-motion-right-appear-active{transform:translateX(0);}.ant-drawer .ant-drawer-panel-motion-right-leave{transform:translateX(0);}.ant-drawer .ant-drawer-panel-motion-right-leave-active{transform:translateX(100%);}.ant-drawer .ant-drawer-panel-motion-top-enter-start,.ant-drawer .ant-drawer-panel-motion-top-appear-start,.ant-drawer .ant-drawer-panel-motion-top-leave-start{transition:none;}.ant-drawer .ant-drawer-panel-motion-top-enter-active,.ant-drawer .ant-drawer-panel-motion-top-appear-active,.ant-drawer .ant-drawer-panel-motion-top-leave-active{transition:all 0.3s;}.ant-drawer .ant-drawer-panel-motion-top-enter-start,.ant-drawer .ant-drawer-panel-motion-top-appear-start{transform:translateY(-100%)!important;}.ant-drawer .ant-drawer-panel-motion-top-enter-active,.ant-drawer .ant-drawer-panel-motion-top-appear-active{transform:translateY(0);}.ant-drawer .ant-drawer-panel-motion-top-leave{transform:translateY(0);}.ant-drawer .ant-drawer-panel-motion-top-leave-active{transform:translateY(-100%);}.ant-drawer .ant-drawer-panel-motion-bottom-enter-start,.ant-drawer .ant-drawer-panel-motion-bottom-appear-start,.ant-drawer .ant-drawer-panel-motion-bottom-leave-start{transition:none;}.ant-drawer .ant-drawer-panel-motion-bottom-enter-active,.ant-drawer .ant-drawer-panel-motion-bottom-appear-active,.ant-drawer .ant-drawer-panel-motion-bottom-leave-active{transition:all 0.3s;}.ant-drawer .ant-drawer-panel-motion-bottom-enter-start,.ant-drawer .ant-drawer-panel-motion-bottom-appear-start{transform:translateY(100%)!important;}.ant-drawer .ant-drawer-panel-motion-bottom-enter-active,.ant-drawer .ant-drawer-panel-motion-bottom-appear-active{transform:translateY(0);}.ant-drawer .ant-drawer-panel-motion-bottom-leave{transform:translateY(0);}.ant-drawer .ant-drawer-panel-motion-bottom-leave-active{transform:translateY(100%);}</style><style data-rc-order="prependQueue" data-css-hash="irhahx" data-token-hash="160jlb5">[class^="ant-empty"],[class*=" ant-empty"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}[class^="ant-empty"]::before,[class*=" ant-empty"]::before,[class^="ant-empty"]::after,[class*=" ant-empty"]::after{box-sizing:border-box;}[class^="ant-empty"] [class^="ant-empty"],[class*=" ant-empty"] [class^="ant-empty"],[class^="ant-empty"] [class*=" ant-empty"],[class*=" ant-empty"] [class*=" ant-empty"]{box-sizing:border-box;}[class^="ant-empty"] [class^="ant-empty"]::before,[class*=" ant-empty"] [class^="ant-empty"]::before,[class^="ant-empty"] [class*=" ant-empty"]::before,[class*=" ant-empty"] [class*=" ant-empty"]::before,[class^="ant-empty"] [class^="ant-empty"]::after,[class*=" ant-empty"] [class^="ant-empty"]::after,[class^="ant-empty"] [class*=" ant-empty"]::after,[class*=" ant-empty"] [class*=" ant-empty"]::after{box-sizing:border-box;}.ant-empty{margin-inline:8px;font-size:14px;line-height:1.5714285714285714;text-align:center;}.ant-empty .ant-empty-image{height:100px;margin-bottom:8px;opacity:1;}.ant-empty .ant-empty-image img{height:100%;}.ant-empty .ant-empty-image svg{height:100%;margin:auto;}.ant-empty .ant-empty-footer{margin-top:16px;}.ant-empty-normal{margin-block:32px;color:rgba(0, 0, 0, 0.25);}.ant-empty-normal .ant-empty-image{height:40px;}.ant-empty-small{margin-block:8px;color:rgba(0, 0, 0, 0.25);}.ant-empty-small .ant-empty-image{height:35px;}</style><style data-rc-order="prependQueue" data-css-hash="xynp9s" data-token-hash="gngivi">.ant-pro-core-label-tip{display:inline-flex;align-items:center;max-width:100%;}.ant-pro-core-label-tip-icon{display:block;margin-inline-start:4px;cursor:pointer;}.ant-pro-core-label-tip-icon:hover{color:#1677ff;}.ant-pro-core-label-tip-title{display:inline-flex;flex:1;}.ant-pro-core-label-tip-subtitle{margin-inline-start:8px;color:rgba(0, 0, 0, 0.65);font-weight:normal;font-size:14px;white-space:nowrap;}.ant-pro-core-label-tip-title-ellipsis{overflow:hidden;white-space:nowrap;text-overflow:ellipsis;word-break:keep-all;}</style><style data-rc-order="prependQueue" data-css-hash="1nzl7z5" data-token-hash="160jlb5">[class^="ant-popover"],[class*=" ant-popover"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}[class^="ant-popover"]::before,[class*=" ant-popover"]::before,[class^="ant-popover"]::after,[class*=" ant-popover"]::after{box-sizing:border-box;}[class^="ant-popover"] [class^="ant-popover"],[class*=" ant-popover"] [class^="ant-popover"],[class^="ant-popover"] [class*=" ant-popover"],[class*=" ant-popover"] [class*=" ant-popover"]{box-sizing:border-box;}[class^="ant-popover"] [class^="ant-popover"]::before,[class*=" ant-popover"] [class^="ant-popover"]::before,[class^="ant-popover"] [class*=" ant-popover"]::before,[class*=" ant-popover"] [class*=" ant-popover"]::before,[class^="ant-popover"] [class^="ant-popover"]::after,[class*=" ant-popover"] [class^="ant-popover"]::after,[class^="ant-popover"] [class*=" ant-popover"]::after,[class*=" ant-popover"] [class*=" ant-popover"]::after{box-sizing:border-box;}.ant-popover{box-sizing:border-box;margin:0;padding:0;color:rgba(0, 0, 0, 0.88);font-size:14px;line-height:1.5714285714285714;list-style:none;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';position:absolute;top:0;left:0;z-index:1030;font-weight:normal;white-space:normal;text-align:start;cursor:auto;user-select:text;--antd-arrow-background-color:#ffffff;}.ant-popover-rtl{direction:rtl;}.ant-popover-hidden{display:none;}.ant-popover .ant-popover-content{position:relative;}.ant-popover .ant-popover-inner{background-color:#ffffff;background-clip:padding-box;border-radius:8px;box-shadow:0 6px 16px 0 rgba(0, 0, 0, 0.08),0 3px 6px -4px rgba(0, 0, 0, 0.12),0 9px 28px 8px rgba(0, 0, 0, 0.05);padding:12px;}.ant-popover .ant-popover-title{min-width:177px;margin-bottom:8px;color:rgba(0, 0, 0, 0.88);font-weight:600;}.ant-popover .ant-popover-inner-content{color:rgba(0, 0, 0, 0.88);}.ant-popover .ant-popover-arrow{position:absolute;z-index:1;display:block;border-radius:0 0 2px;pointer-events:none;width:32px;height:32px;overflow:hidden;}.ant-popover .ant-popover-arrow::after{content:"";position:absolute;width:11.31370849898476px;height:11.31370849898476px;bottom:0;inset-inline:0;margin:auto;border-radius:0 0 2px 0;transform:translateY(50%) rotate(-135deg);box-shadow:3px 3px 7px rgba(0, 0, 0, 0.1);z-index:0;background:transparent;}.ant-popover .ant-popover-arrow::before{position:absolute;bottom:0;inset-inline-start:0;width:32px;height:8px;background:var(--antd-arrow-background-color);clip-path:path('M 6.343145750507619 8 A 4 4 0 0 0 9.17157287525381 6.82842712474619 L 14.585786437626904 1.414213562373095 A 2 2 0 0 1 17.414213562373096 1.414213562373095 L 22.82842712474619 6.82842712474619 A 4 4 0 0 0 25.65685424949238 8 Z');content:"";}.ant-popover .ant-popover-arrow:before{background:var(--antd-arrow-background-color);}.ant-popover-placement-top .ant-popover-arrow,.ant-popover-placement-topLeft .ant-popover-arrow,.ant-popover-placement-topRight .ant-popover-arrow{bottom:0;transform:translateY(100%) rotate(180deg);}.ant-popover-placement-top .ant-popover-arrow{left:50%;transform:translateX(-50%) translateY(100%) rotate(180deg);}.ant-popover-placement-topLeft .ant-popover-arrow{left:6px;}.ant-popover-placement-topRight .ant-popover-arrow{right:6px;}.ant-popover-placement-bottom .ant-popover-arrow,.ant-popover-placement-bottomLeft .ant-popover-arrow,.ant-popover-placement-bottomRight .ant-popover-arrow{top:0;transform:translateY(-100%);}.ant-popover-placement-bottom .ant-popover-arrow{left:50%;transform:translateX(-50%) translateY(-100%);}.ant-popover-placement-bottomLeft .ant-popover-arrow{left:6px;}.ant-popover-placement-bottomRight .ant-popover-arrow{right:6px;}.ant-popover-placement-left .ant-popover-arrow,.ant-popover-placement-leftTop .ant-popover-arrow,.ant-popover-placement-leftBottom .ant-popover-arrow{right:0;transform:translateX(100%) rotate(90deg);}.ant-popover-placement-left .ant-popover-arrow{top:50%;transform:translateY(-50%) translateX(100%) rotate(90deg);}.ant-popover-placement-leftTop .ant-popover-arrow{top:6px;}.ant-popover-placement-leftBottom .ant-popover-arrow{bottom:6px;}.ant-popover-placement-right .ant-popover-arrow,.ant-popover-placement-rightTop .ant-popover-arrow,.ant-popover-placement-rightBottom .ant-popover-arrow{left:0;transform:translateX(-100%) rotate(-90deg);}.ant-popover-placement-right .ant-popover-arrow{top:50%;transform:translateY(-50%) translateX(-100%) rotate(-90deg);}.ant-popover-placement-rightTop .ant-popover-arrow{top:6px;}.ant-popover-placement-rightBottom .ant-popover-arrow{bottom:6px;}.ant-popover-placement-topLeft,.ant-popover-placement-top,.ant-popover-placement-topRight{padding-bottom:12px;}.ant-popover-placement-bottomLeft,.ant-popover-placement-bottom,.ant-popover-placement-bottomRight{padding-top:12px;}.ant-popover-placement-leftTop,.ant-popover-placement-left,.ant-popover-placement-leftBottom{padding-right:12px;}.ant-popover-placement-rightTop,.ant-popover-placement-right,.ant-popover-placement-rightBottom{padding-left:12px;}.ant-popover-pure{position:relative;max-width:none;}.ant-popover-pure .ant-popover-content{display:inline-block;}.ant-popover.ant-popover-blue{--antd-arrow-background-color:#1677ff;}.ant-popover.ant-popover-blue .ant-popover-inner{background-color:#1677ff;}.ant-popover.ant-popover-blue .ant-popover-arrow{background:transparent;}.ant-popover.ant-popover-purple{--antd-arrow-background-color:#722ed1;}.ant-popover.ant-popover-purple .ant-popover-inner{background-color:#722ed1;}.ant-popover.ant-popover-purple .ant-popover-arrow{background:transparent;}.ant-popover.ant-popover-cyan{--antd-arrow-background-color:#13c2c2;}.ant-popover.ant-popover-cyan .ant-popover-inner{background-color:#13c2c2;}.ant-popover.ant-popover-cyan .ant-popover-arrow{background:transparent;}.ant-popover.ant-popover-green{--antd-arrow-background-color:#52c41a;}.ant-popover.ant-popover-green .ant-popover-inner{background-color:#52c41a;}.ant-popover.ant-popover-green .ant-popover-arrow{background:transparent;}.ant-popover.ant-popover-magenta{--antd-arrow-background-color:#eb2f96;}.ant-popover.ant-popover-magenta .ant-popover-inner{background-color:#eb2f96;}.ant-popover.ant-popover-magenta .ant-popover-arrow{background:transparent;}.ant-popover.ant-popover-pink{--antd-arrow-background-color:#eb2f96;}.ant-popover.ant-popover-pink .ant-popover-inner{background-color:#eb2f96;}.ant-popover.ant-popover-pink .ant-popover-arrow{background:transparent;}.ant-popover.ant-popover-red{--antd-arrow-background-color:#f5222d;}.ant-popover.ant-popover-red .ant-popover-inner{background-color:#f5222d;}.ant-popover.ant-popover-red .ant-popover-arrow{background:transparent;}.ant-popover.ant-popover-orange{--antd-arrow-background-color:#fa8c16;}.ant-popover.ant-popover-orange .ant-popover-inner{background-color:#fa8c16;}.ant-popover.ant-popover-orange .ant-popover-arrow{background:transparent;}.ant-popover.ant-popover-yellow{--antd-arrow-background-color:#fadb14;}.ant-popover.ant-popover-yellow .ant-popover-inner{background-color:#fadb14;}.ant-popover.ant-popover-yellow .ant-popover-arrow{background:transparent;}.ant-popover.ant-popover-volcano{--antd-arrow-background-color:#fa541c;}.ant-popover.ant-popover-volcano .ant-popover-inner{background-color:#fa541c;}.ant-popover.ant-popover-volcano .ant-popover-arrow{background:transparent;}.ant-popover.ant-popover-geekblue{--antd-arrow-background-color:#2f54eb;}.ant-popover.ant-popover-geekblue .ant-popover-inner{background-color:#2f54eb;}.ant-popover.ant-popover-geekblue .ant-popover-arrow{background:transparent;}.ant-popover.ant-popover-lime{--antd-arrow-background-color:#a0d911;}.ant-popover.ant-popover-lime .ant-popover-inner{background-color:#a0d911;}.ant-popover.ant-popover-lime .ant-popover-arrow{background:transparent;}.ant-popover.ant-popover-gold{--antd-arrow-background-color:#faad14;}.ant-popover.ant-popover-gold .ant-popover-inner{background-color:#faad14;}.ant-popover.ant-popover-gold .ant-popover-arrow{background:transparent;}.ant-zoom-big-enter,.ant-zoom-big-appear{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}.ant-zoom-big-leave{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}.ant-zoom-big-enter.ant-zoom-big-enter-active,.ant-zoom-big-appear.ant-zoom-big-appear-active{animation-name:antZoomBigIn;animation-play-state:running;}.ant-zoom-big-leave.ant-zoom-big-leave-active{animation-name:antZoomBigOut;animation-play-state:running;pointer-events:none;}.ant-zoom-big-enter,.ant-zoom-big-appear{transform:scale(0);opacity:0;animation-timing-function:cubic-bezier(0.08, 0.82, 0.17, 1);}.ant-zoom-big-enter-prepare,.ant-zoom-big-appear-prepare{transform:none;}.ant-zoom-big-leave{animation-timing-function:cubic-bezier(0.78, 0.14, 0.15, 0.86);}</style><style data-rc-order="prependQueue" data-css-hash="_effect-antZoomBigIn">@keyframes antZoomBigIn{0%{transform:scale(0.8);opacity:0;}100%{transform:scale(1);opacity:1;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-antZoomBigOut">@keyframes antZoomBigOut{0%{transform:scale(1);}100%{transform:scale(0.8);opacity:0;}}</style><style data-rc-order="prependQueue" data-css-hash="1ic7hyr" data-token-hash="160jlb5">[class^="ant-popover"],[class*=" ant-popover"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}[class^="ant-popover"]::before,[class*=" ant-popover"]::before,[class^="ant-popover"]::after,[class*=" ant-popover"]::after{box-sizing:border-box;}[class^="ant-popover"] [class^="ant-popover"],[class*=" ant-popover"] [class^="ant-popover"],[class^="ant-popover"] [class*=" ant-popover"],[class*=" ant-popover"] [class*=" ant-popover"]{box-sizing:border-box;}[class^="ant-popover"] [class^="ant-popover"]::before,[class*=" ant-popover"] [class^="ant-popover"]::before,[class^="ant-popover"] [class*=" ant-popover"]::before,[class*=" ant-popover"] [class*=" ant-popover"]::before,[class^="ant-popover"] [class^="ant-popover"]::after,[class*=" ant-popover"] [class^="ant-popover"]::after,[class^="ant-popover"] [class*=" ant-popover"]::after,[class*=" ant-popover"] [class*=" ant-popover"]::after{box-sizing:border-box;}</style><style data-rc-order="prependQueue" data-css-hash="kbfn45" data-token-hash="160jlb5">[class^="ant-popconfirm"],[class*=" ant-popconfirm"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}[class^="ant-popconfirm"]::before,[class*=" ant-popconfirm"]::before,[class^="ant-popconfirm"]::after,[class*=" ant-popconfirm"]::after{box-sizing:border-box;}[class^="ant-popconfirm"] [class^="ant-popconfirm"],[class*=" ant-popconfirm"] [class^="ant-popconfirm"],[class^="ant-popconfirm"] [class*=" ant-popconfirm"],[class*=" ant-popconfirm"] [class*=" ant-popconfirm"]{box-sizing:border-box;}[class^="ant-popconfirm"] [class^="ant-popconfirm"]::before,[class*=" ant-popconfirm"] [class^="ant-popconfirm"]::before,[class^="ant-popconfirm"] [class*=" ant-popconfirm"]::before,[class*=" ant-popconfirm"] [class*=" ant-popconfirm"]::before,[class^="ant-popconfirm"] [class^="ant-popconfirm"]::after,[class*=" ant-popconfirm"] [class^="ant-popconfirm"]::after,[class^="ant-popconfirm"] [class*=" ant-popconfirm"]::after,[class*=" ant-popconfirm"] [class*=" ant-popconfirm"]::after{box-sizing:border-box;}.ant-popconfirm{z-index:1060;}.ant-popconfirm .ant-popconfirm-inner-content{color:rgba(0, 0, 0, 0.88);}.ant-popconfirm .ant-popconfirm-message{position:relative;margin-bottom:8px;color:rgba(0, 0, 0, 0.88);font-size:14px;display:flex;flex-wrap:nowrap;align-items:start;}.ant-popconfirm .ant-popconfirm-message >.ant-popconfirm-message-icon .anticon{color:#faad14;font-size:14px;flex:none;line-height:1;padding-top:4px;}.ant-popconfirm .ant-popconfirm-message-title{flex:auto;margin-inline-start:8px;}.ant-popconfirm .ant-popconfirm-message-title-only{font-weight:600;}.ant-popconfirm .ant-popconfirm-description{position:relative;margin-inline-start:22px;margin-bottom:8px;color:rgba(0, 0, 0, 0.88);font-size:14px;}.ant-popconfirm .ant-popconfirm-buttons{text-align:end;}.ant-popconfirm .ant-popconfirm-buttons button{margin-inline-start:8px;}</style><style data-rc-order="prependQueue" data-css-hash="1eohnyv" data-token-hash="160jlb5">[class^="ant-tag"],[class*=" ant-tag"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}[class^="ant-tag"]::before,[class*=" ant-tag"]::before,[class^="ant-tag"]::after,[class*=" ant-tag"]::after{box-sizing:border-box;}[class^="ant-tag"] [class^="ant-tag"],[class*=" ant-tag"] [class^="ant-tag"],[class^="ant-tag"] [class*=" ant-tag"],[class*=" ant-tag"] [class*=" ant-tag"]{box-sizing:border-box;}[class^="ant-tag"] [class^="ant-tag"]::before,[class*=" ant-tag"] [class^="ant-tag"]::before,[class^="ant-tag"] [class*=" ant-tag"]::before,[class*=" ant-tag"] [class*=" ant-tag"]::before,[class^="ant-tag"] [class^="ant-tag"]::after,[class*=" ant-tag"] [class^="ant-tag"]::after,[class^="ant-tag"] [class*=" ant-tag"]::after,[class*=" ant-tag"] [class*=" ant-tag"]::after{box-sizing:border-box;}.ant-tag{box-sizing:border-box;margin:0;padding:0;color:rgba(0, 0, 0, 0.88);font-size:12px;line-height:20px;list-style:none;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';display:inline-block;height:auto;margin-inline-end:8px;padding-inline:7px;white-space:nowrap;background:rgba(0, 0, 0, 0.02);border:1px solid #d9d9d9;border-radius:4px;opacity:1;transition:all 0.2s;text-align:start;}.ant-tag.ant-tag-rtl{direction:rtl;}.ant-tag,.ant-tag a,.ant-tag a:hover{color:rgba(0, 0, 0, 0.88);}.ant-tag .ant-tag-close-icon{margin-inline-start:3px;color:rgba(0, 0, 0, 0.45);font-size:10px;cursor:pointer;transition:all 0.2s;}.ant-tag .ant-tag-close-icon:hover{color:rgba(0, 0, 0, 0.88);}.ant-tag.ant-tag-has-color{border-color:transparent;}.ant-tag.ant-tag-has-color,.ant-tag.ant-tag-has-color a,.ant-tag.ant-tag-has-color a:hover,.ant-tag.ant-tag-has-color .anticon-close,.ant-tag.ant-tag-has-color .anticon-close:hover{color:#fff;}.ant-tag-checkable{background-color:transparent;border-color:transparent;cursor:pointer;}.ant-tag-checkable:not(.ant-tag-checkable-checked):hover{color:#1677ff;background-color:rgba(0, 0, 0, 0.06);}.ant-tag-checkable:active,.ant-tag-checkable-checked{color:#fff;}.ant-tag-checkable-checked{background-color:#1677ff;}.ant-tag-checkable-checked:hover{background-color:#4096ff;}.ant-tag-checkable:active{background-color:#0958d9;}.ant-tag-hidden{display:none;}.ant-tag >.anticon+span,.ant-tag >span+.anticon{margin-inline-start:7px;}.ant-tag-blue{color:#0958d9;background:#e6f4ff;border-color:#91caff;}.ant-tag-blue-inverse{color:#fff;background:#1677ff;border-color:#1677ff;}.ant-tag-purple{color:#531dab;background:#f9f0ff;border-color:#d3adf7;}.ant-tag-purple-inverse{color:#fff;background:#722ed1;border-color:#722ed1;}.ant-tag-cyan{color:#08979c;background:#e6fffb;border-color:#87e8de;}.ant-tag-cyan-inverse{color:#fff;background:#13c2c2;border-color:#13c2c2;}.ant-tag-green{color:#389e0d;background:#f6ffed;border-color:#b7eb8f;}.ant-tag-green-inverse{color:#fff;background:#52c41a;border-color:#52c41a;}.ant-tag-magenta{color:#c41d7f;background:#fff0f6;border-color:#ffadd2;}.ant-tag-magenta-inverse{color:#fff;background:#eb2f96;border-color:#eb2f96;}.ant-tag-pink{color:#c41d7f;background:#fff0f6;border-color:#ffadd2;}.ant-tag-pink-inverse{color:#fff;background:#eb2f96;border-color:#eb2f96;}.ant-tag-red{color:#cf1322;background:#fff1f0;border-color:#ffa39e;}.ant-tag-red-inverse{color:#fff;background:#f5222d;border-color:#f5222d;}.ant-tag-orange{color:#d46b08;background:#fff7e6;border-color:#ffd591;}.ant-tag-orange-inverse{color:#fff;background:#fa8c16;border-color:#fa8c16;}.ant-tag-yellow{color:#d4b106;background:#feffe6;border-color:#fffb8f;}.ant-tag-yellow-inverse{color:#fff;background:#fadb14;border-color:#fadb14;}.ant-tag-volcano{color:#d4380d;background:#fff2e8;border-color:#ffbb96;}.ant-tag-volcano-inverse{color:#fff;background:#fa541c;border-color:#fa541c;}.ant-tag-geekblue{color:#1d39c4;background:#f0f5ff;border-color:#adc6ff;}.ant-tag-geekblue-inverse{color:#fff;background:#2f54eb;border-color:#2f54eb;}.ant-tag-lime{color:#7cb305;background:#fcffe6;border-color:#eaff8f;}.ant-tag-lime-inverse{color:#fff;background:#a0d911;border-color:#a0d911;}.ant-tag-gold{color:#d48806;background:#fffbe6;border-color:#ffe58f;}.ant-tag-gold-inverse{color:#fff;background:#faad14;border-color:#faad14;}.ant-tag-success{color:#52c41a;background:#f6ffed;border-color:#b7eb8f;}.ant-tag-processing{color:#1677ff;background:#e6f4ff;border-color:#91caff;}.ant-tag-error{color:#ff4d4f;background:#fff2f0;border-color:#ffccc7;}.ant-tag-warning{color:#faad14;background:#fffbe6;border-color:#ffe58f;}</style><style data-rc-order="prependQueue" data-css-hash="1aingqn" data-token-hash="160jlb5">[class^="ant-image"],[class*=" ant-image"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}[class^="ant-image"]::before,[class*=" ant-image"]::before,[class^="ant-image"]::after,[class*=" ant-image"]::after{box-sizing:border-box;}[class^="ant-image"] [class^="ant-image"],[class*=" ant-image"] [class^="ant-image"],[class^="ant-image"] [class*=" ant-image"],[class*=" ant-image"] [class*=" ant-image"]{box-sizing:border-box;}[class^="ant-image"] [class^="ant-image"]::before,[class*=" ant-image"] [class^="ant-image"]::before,[class^="ant-image"] [class*=" ant-image"]::before,[class*=" ant-image"] [class*=" ant-image"]::before,[class^="ant-image"] [class^="ant-image"]::after,[class*=" ant-image"] [class^="ant-image"]::after,[class^="ant-image"] [class*=" ant-image"]::after,[class*=" ant-image"] [class*=" ant-image"]::after{box-sizing:border-box;}.ant-image{position:relative;display:inline-block;}.ant-image .ant-image-img{width:100%;height:auto;vertical-align:middle;}.ant-image .ant-image-img-placeholder{background-color:rgba(0, 0, 0, 0.04);background-image:url("");background-repeat:no-repeat;background-position:center center;background-size:30%;}.ant-image .ant-image-mask{position:absolute;inset:0;display:flex;align-items:center;justify-content:center;color:#fff;background:rgba(0, 0, 0, 0.5);cursor:pointer;opacity:0;transition:opacity 0.3s;}.ant-image .ant-image-mask .ant-image-mask-info{overflow:hidden;white-space:nowrap;text-overflow:ellipsis;padding:0 4px;}.ant-image .ant-image-mask .ant-image-mask-info .anticon{margin-inline-end:4px;}.ant-image .ant-image-mask:hover{opacity:1;}.ant-image .ant-image-placeholder{position:absolute;inset:0;}.ant-image-preview-root .ant-image-preview{height:100%;text-align:center;pointer-events:none;}.ant-image-preview-root .ant-image-preview-body{position:absolute;inset:0;overflow:hidden;}.ant-image-preview-root .ant-image-preview-img{max-width:100%;max-height:100%;vertical-align:middle;transform:scale3d(1, 1, 1);cursor:grab;transition:transform 0.3s cubic-bezier(0.215, 0.61, 0.355, 1) 0s;user-select:none;pointer-events:auto;}.ant-image-preview-root .ant-image-preview-img-wrapper{position:absolute;inset:0;transition:transform 0.3s cubic-bezier(0.215, 0.61, 0.355, 1) 0s;display:flex;justify-content:center;align-items:center;}.ant-image-preview-root .ant-image-preview-img-wrapper::before{display:inline-block;width:1px;height:50%;margin-inline-end:-1px;content:"";}.ant-image-preview-root .ant-image-preview-moving .ant-image-preview-preview-img{cursor:grabbing;}.ant-image-preview-root .ant-image-preview-moving .ant-image-preview-preview-img-wrapper{transition-duration:0s;}.ant-image-preview-root .ant-image-preview-wrap{z-index:1080;}.ant-image-preview-operations-wrapper{position:fixed;inset-block-start:0;inset-inline-end:0;z-index:1081;width:100%;}.ant-image-preview-operations{box-sizing:border-box;margin:0;padding:0;color:rgb(255, 255, 255);font-size:14px;line-height:1.5714285714285714;list-style:none;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';display:flex;flex-direction:row-reverse;align-items:center;background:rgba(0, 0, 0, 0.1);pointer-events:auto;}.ant-image-preview-operations-operation{margin-inline-start:12px;padding:12px;cursor:pointer;transition:all 0.3s;}.ant-image-preview-operations-operation:hover{background:rgba(0, 0, 0, 0.2);}.ant-image-preview-operations-operation-disabled{color:rgba(255, 255, 255, 0.25);pointer-events:none;}.ant-image-preview-operations-operation:last-of-type{margin-inline-start:0;}.ant-image-preview-operations-progress{position:absolute;left:50%;transform:translateX(-50%);}.ant-image-preview-operations-icon{font-size:18px;}.ant-image-preview-switch-left,.ant-image-preview-switch-right{position:fixed;inset-block-start:50%;z-index:1081;display:flex;align-items:center;justify-content:center;width:40px;height:40px;margin-top:-20px;color:rgb(255, 255, 255);background:rgba(0, 0, 0, 0.1);border-radius:50%;transform:translateY(-50%);cursor:pointer;transition:all 0.3s;pointer-events:auto;}.ant-image-preview-switch-left:hover,.ant-image-preview-switch-right:hover{background:rgba(0, 0, 0, 0.2);}.ant-image-preview-switch-left-disabled,.ant-image-preview-switch-right-disabled,.ant-image-preview-switch-left-disabled:hover,.ant-image-preview-switch-right-disabled:hover{color:rgba(255, 255, 255, 0.25);background:transparent;cursor:not-allowed;}.ant-image-preview-switch-left-disabled >.anticon,.ant-image-preview-switch-right-disabled >.anticon,.ant-image-preview-switch-left-disabled:hover >.anticon,.ant-image-preview-switch-right-disabled:hover >.anticon{cursor:not-allowed;}.ant-image-preview-switch-left >.anticon,.ant-image-preview-switch-right >.anticon{font-size:18px;}.ant-image-preview-switch-left{inset-inline-start:12px;}.ant-image-preview-switch-right{inset-inline-end:12px;}.ant-image-preview-root .ant-image-preview.ant-zoom-enter,.ant-image-preview-root .ant-image-preview.ant-zoom-appear{transform:none;opacity:0;animation-duration:0.3s;user-select:none;}.ant-image-preview-root .ant-image-preview-mask{position:fixed;top:0;inset-inline-end:0;bottom:0;inset-inline-start:0;z-index:1000;height:100%;background-color:rgba(0, 0, 0, 0.45);}.ant-image-preview-root .ant-image-preview-mask .ant-image-preview-hidden{display:none;}.ant-image-preview-root .ant-image-preview-wrap{position:fixed;top:0;inset-inline-end:0;bottom:0;inset-inline-start:0;overflow:auto;outline:0;-webkit-overflow-scrolling:touch;}.ant-image-preview-root .ant-fade-enter,.ant-image-preview-root .ant-fade-appear{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}.ant-image-preview-root .ant-fade-leave{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}.ant-image-preview-root .ant-fade-enter.ant-fade-enter-active,.ant-image-preview-root .ant-fade-appear.ant-fade-appear-active{animation-name:antFadeIn;animation-play-state:running;}.ant-image-preview-root .ant-fade-leave.ant-fade-leave-active{animation-name:antFadeOut;animation-play-state:running;pointer-events:none;}.ant-image-preview-root .ant-fade-enter,.ant-image-preview-root .ant-fade-appear{opacity:0;animation-timing-function:linear;}.ant-image-preview-root .ant-fade-leave{animation-timing-function:linear;}.ant-image-preview-root .ant-zoom-enter,.ant-image-preview-root .ant-zoom-appear{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}.ant-image-preview-root .ant-zoom-leave{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}.ant-image-preview-root .ant-zoom-enter.ant-zoom-enter-active,.ant-image-preview-root .ant-zoom-appear.ant-zoom-appear-active{animation-name:antZoomIn;animation-play-state:running;}.ant-image-preview-root .ant-zoom-leave.ant-zoom-leave-active{animation-name:antZoomOut;animation-play-state:running;pointer-events:none;}.ant-image-preview-root .ant-zoom-enter,.ant-image-preview-root .ant-zoom-appear{transform:scale(0);opacity:0;animation-timing-function:cubic-bezier(0.08, 0.82, 0.17, 1);}.ant-image-preview-root .ant-zoom-enter-prepare,.ant-image-preview-root .ant-zoom-appear-prepare{transform:none;}.ant-image-preview-root .ant-zoom-leave{animation-timing-function:cubic-bezier(0.78, 0.14, 0.15, 0.86);}.ant-fade-enter,.ant-fade-appear{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}.ant-fade-leave{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}.ant-fade-enter.ant-fade-enter-active,.ant-fade-appear.ant-fade-appear-active{animation-name:antFadeIn;animation-play-state:running;}.ant-fade-leave.ant-fade-leave-active{animation-name:antFadeOut;animation-play-state:running;pointer-events:none;}.ant-fade-enter,.ant-fade-appear{opacity:0;animation-timing-function:linear;}.ant-fade-leave{animation-timing-function:linear;}</style><style data-rc-order="prependQueue" data-css-hash="_effect-antFadeIn">@keyframes antFadeIn{0%{opacity:0;}100%{opacity:1;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-antFadeOut">@keyframes antFadeOut{0%{opacity:1;}100%{opacity:0;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-antZoomIn">@keyframes antZoomIn{0%{transform:scale(0.2);opacity:0;}100%{transform:scale(1);opacity:1;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-antZoomOut">@keyframes antZoomOut{0%{transform:scale(1);}100%{transform:scale(0.2);opacity:0;}}</style><style data-rc-order="prependQueue" data-css-hash="d9zd8z" data-token-hash="gngivi">.ant-pro-card-actions{margin-block:0;margin-inline:0;padding-block:0;padding-inline:0;list-style:none;background:#ffffff;border-block-start:1px solid rgba(5, 5, 5, 0.06);}.ant-pro-card-actions .ant-space{gap:0!important;width:100%;}.ant-pro-card-actions>li,.ant-pro-card-actions .ant-space-item{flex:1;float:left;margin-block:12px;margin-inline:0;color:rgba(0, 0, 0, 0.65);text-align:center;}.ant-pro-card-actions>li >a,.ant-pro-card-actions .ant-space-item >a{color:rgba(0, 0, 0, 0.65);transition:color 0.3s;}.ant-pro-card-actions>li >a:hover,.ant-pro-card-actions .ant-space-item >a:hover{color:#4096ff;}.ant-pro-card-actions>li >span,.ant-pro-card-actions .ant-space-item >span{position:relative;display:block;min-width:32px;font-size:14px;line-height:1.5714285714285714;cursor:pointer;}.ant-pro-card-actions>li >span:hover,.ant-pro-card-actions .ant-space-item >span:hover{color:#4096ff;transition:color 0.3s;}.ant-pro-card-actions>li >span a:not(.ant-btn),.ant-pro-card-actions .ant-space-item >span a:not(.ant-btn),.ant-pro-card-actions>li >span >.anticon,.ant-pro-card-actions .ant-space-item >span >.anticon{display:inline-block;width:100%;color:rgba(0, 0, 0, 0.65);line-height:22px;transition:color 0.3s;}.ant-pro-card-actions>li >span a:not(.ant-btn):hover,.ant-pro-card-actions .ant-space-item >span a:not(.ant-btn):hover,.ant-pro-card-actions>li >span >.anticon:hover,.ant-pro-card-actions .ant-space-item >span >.anticon:hover{color:#4096ff;}.ant-pro-card-actions>li >span >.anticon,.ant-pro-card-actions .ant-space-item >span >.anticon{font-size:16px;line-height:22px;}.ant-pro-card-actions>li:not(:last-child),.ant-pro-card-actions .ant-space-item:not(:last-child){border-inline-end:1px solid rgba(5, 5, 5, 0.06);}</style><style data-rc-order="prependQueue" data-css-hash="khxrh0" data-token-hash="160jlb5">[class^="ant-tooltip"],[class*=" ant-tooltip"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}[class^="ant-tooltip"]::before,[class*=" ant-tooltip"]::before,[class^="ant-tooltip"]::after,[class*=" ant-tooltip"]::after{box-sizing:border-box;}[class^="ant-tooltip"] [class^="ant-tooltip"],[class*=" ant-tooltip"] [class^="ant-tooltip"],[class^="ant-tooltip"] [class*=" ant-tooltip"],[class*=" ant-tooltip"] [class*=" ant-tooltip"]{box-sizing:border-box;}[class^="ant-tooltip"] [class^="ant-tooltip"]::before,[class*=" ant-tooltip"] [class^="ant-tooltip"]::before,[class^="ant-tooltip"] [class*=" ant-tooltip"]::before,[class*=" ant-tooltip"] [class*=" ant-tooltip"]::before,[class^="ant-tooltip"] [class^="ant-tooltip"]::after,[class*=" ant-tooltip"] [class^="ant-tooltip"]::after,[class^="ant-tooltip"] [class*=" ant-tooltip"]::after,[class*=" ant-tooltip"] [class*=" ant-tooltip"]::after{box-sizing:border-box;}.ant-tooltip{box-sizing:border-box;margin:0;padding:0;color:rgba(0, 0, 0, 0.88);font-size:14px;line-height:1.5714285714285714;list-style:none;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';position:absolute;z-index:1070;display:block;max-width:250px;visibility:visible;--antd-arrow-background-color:rgba(0, 0, 0, 0.85);}.ant-tooltip{width:max-content;width:intrinsic;}.ant-tooltip-hidden{display:none;}.ant-tooltip .ant-tooltip-inner{min-width:32px;min-height:32px;padding:6px 8px;color:#fff;text-align:start;text-decoration:none;word-wrap:break-word;background-color:rgba(0, 0, 0, 0.85);border-radius:6px;box-shadow:0 6px 16px 0 rgba(0, 0, 0, 0.08),0 3px 6px -4px rgba(0, 0, 0, 0.12),0 9px 28px 8px rgba(0, 0, 0, 0.05);}.ant-tooltip-placement-left .ant-tooltip-inner,.ant-tooltip-placement-leftTop .ant-tooltip-inner,.ant-tooltip-placement-leftBottom .ant-tooltip-inner,.ant-tooltip-placement-right .ant-tooltip-inner,.ant-tooltip-placement-rightTop .ant-tooltip-inner,.ant-tooltip-placement-rightBottom .ant-tooltip-inner{border-radius:6px;}.ant-tooltip .ant-tooltip-content{position:relative;}.ant-tooltip.ant-tooltip-blue .ant-tooltip-inner{background-color:#1677ff;}.ant-tooltip.ant-tooltip-blue .ant-tooltip-arrow{--antd-arrow-background-color:#1677ff;}.ant-tooltip.ant-tooltip-purple .ant-tooltip-inner{background-color:#722ed1;}.ant-tooltip.ant-tooltip-purple .ant-tooltip-arrow{--antd-arrow-background-color:#722ed1;}.ant-tooltip.ant-tooltip-cyan .ant-tooltip-inner{background-color:#13c2c2;}.ant-tooltip.ant-tooltip-cyan .ant-tooltip-arrow{--antd-arrow-background-color:#13c2c2;}.ant-tooltip.ant-tooltip-green .ant-tooltip-inner{background-color:#52c41a;}.ant-tooltip.ant-tooltip-green .ant-tooltip-arrow{--antd-arrow-background-color:#52c41a;}.ant-tooltip.ant-tooltip-magenta .ant-tooltip-inner{background-color:#eb2f96;}.ant-tooltip.ant-tooltip-magenta .ant-tooltip-arrow{--antd-arrow-background-color:#eb2f96;}.ant-tooltip.ant-tooltip-pink .ant-tooltip-inner{background-color:#eb2f96;}.ant-tooltip.ant-tooltip-pink .ant-tooltip-arrow{--antd-arrow-background-color:#eb2f96;}.ant-tooltip.ant-tooltip-red .ant-tooltip-inner{background-color:#f5222d;}.ant-tooltip.ant-tooltip-red .ant-tooltip-arrow{--antd-arrow-background-color:#f5222d;}.ant-tooltip.ant-tooltip-orange .ant-tooltip-inner{background-color:#fa8c16;}.ant-tooltip.ant-tooltip-orange .ant-tooltip-arrow{--antd-arrow-background-color:#fa8c16;}.ant-tooltip.ant-tooltip-yellow .ant-tooltip-inner{background-color:#fadb14;}.ant-tooltip.ant-tooltip-yellow .ant-tooltip-arrow{--antd-arrow-background-color:#fadb14;}.ant-tooltip.ant-tooltip-volcano .ant-tooltip-inner{background-color:#fa541c;}.ant-tooltip.ant-tooltip-volcano .ant-tooltip-arrow{--antd-arrow-background-color:#fa541c;}.ant-tooltip.ant-tooltip-geekblue .ant-tooltip-inner{background-color:#2f54eb;}.ant-tooltip.ant-tooltip-geekblue .ant-tooltip-arrow{--antd-arrow-background-color:#2f54eb;}.ant-tooltip.ant-tooltip-lime .ant-tooltip-inner{background-color:#a0d911;}.ant-tooltip.ant-tooltip-lime .ant-tooltip-arrow{--antd-arrow-background-color:#a0d911;}.ant-tooltip.ant-tooltip-gold .ant-tooltip-inner{background-color:#faad14;}.ant-tooltip.ant-tooltip-gold .ant-tooltip-arrow{--antd-arrow-background-color:#faad14;}.ant-tooltip-rtl{direction:rtl;}.ant-tooltip .ant-tooltip-arrow{position:absolute;z-index:1;display:block;border-radius:0 0 2px;pointer-events:none;width:32px;height:32px;overflow:hidden;}.ant-tooltip .ant-tooltip-arrow::after{content:"";position:absolute;width:11.31370849898476px;height:11.31370849898476px;bottom:0;inset-inline:0;margin:auto;border-radius:0 0 2px 0;transform:translateY(50%) rotate(-135deg);box-shadow:3px 3px 7px rgba(0, 0, 0, 0.1);z-index:0;background:transparent;}.ant-tooltip .ant-tooltip-arrow::before{position:absolute;bottom:0;inset-inline-start:0;width:32px;height:8px;background:var(--antd-arrow-background-color);clip-path:path('M 6.343145750507619 8 A 4 4 0 0 0 9.17157287525381 6.82842712474619 L 14.585786437626904 1.414213562373095 A 2 2 0 0 1 17.414213562373096 1.414213562373095 L 22.82842712474619 6.82842712474619 A 4 4 0 0 0 25.65685424949238 8 Z');content:"";}.ant-tooltip .ant-tooltip-arrow:before{background:var(--antd-arrow-background-color);}.ant-tooltip-placement-top .ant-tooltip-arrow,.ant-tooltip-placement-topLeft .ant-tooltip-arrow,.ant-tooltip-placement-topRight .ant-tooltip-arrow{bottom:0;transform:translateY(100%) rotate(180deg);}.ant-tooltip-placement-top .ant-tooltip-arrow{left:50%;transform:translateX(-50%) translateY(100%) rotate(180deg);}.ant-tooltip-placement-topLeft .ant-tooltip-arrow{left:6px;}.ant-tooltip-placement-topRight .ant-tooltip-arrow{right:6px;}.ant-tooltip-placement-bottom .ant-tooltip-arrow,.ant-tooltip-placement-bottomLeft .ant-tooltip-arrow,.ant-tooltip-placement-bottomRight .ant-tooltip-arrow{top:0;transform:translateY(-100%);}.ant-tooltip-placement-bottom .ant-tooltip-arrow{left:50%;transform:translateX(-50%) translateY(-100%);}.ant-tooltip-placement-bottomLeft .ant-tooltip-arrow{left:6px;}.ant-tooltip-placement-bottomRight .ant-tooltip-arrow{right:6px;}.ant-tooltip-placement-left .ant-tooltip-arrow,.ant-tooltip-placement-leftTop .ant-tooltip-arrow,.ant-tooltip-placement-leftBottom .ant-tooltip-arrow{right:0;transform:translateX(100%) rotate(90deg);}.ant-tooltip-placement-left .ant-tooltip-arrow{top:50%;transform:translateY(-50%) translateX(100%) rotate(90deg);}.ant-tooltip-placement-leftTop .ant-tooltip-arrow{top:2px;}.ant-tooltip-placement-leftBottom .ant-tooltip-arrow{bottom:2px;}.ant-tooltip-placement-right .ant-tooltip-arrow,.ant-tooltip-placement-rightTop .ant-tooltip-arrow,.ant-tooltip-placement-rightBottom .ant-tooltip-arrow{left:0;transform:translateX(-100%) rotate(-90deg);}.ant-tooltip-placement-right .ant-tooltip-arrow{top:50%;transform:translateY(-50%) translateX(-100%) rotate(-90deg);}.ant-tooltip-placement-rightTop .ant-tooltip-arrow{top:2px;}.ant-tooltip-placement-rightBottom .ant-tooltip-arrow{bottom:2px;}.ant-tooltip-placement-topLeft,.ant-tooltip-placement-top,.ant-tooltip-placement-topRight{padding-bottom:12px;}.ant-tooltip-placement-bottomLeft,.ant-tooltip-placement-bottom,.ant-tooltip-placement-bottomRight{padding-top:12px;}.ant-tooltip-placement-leftTop,.ant-tooltip-placement-left,.ant-tooltip-placement-leftBottom{padding-right:12px;}.ant-tooltip-placement-rightTop,.ant-tooltip-placement-right,.ant-tooltip-placement-rightBottom{padding-left:12px;}.ant-tooltip-pure{position:relative;max-width:none;}.ant-zoom-big-fast-enter,.ant-zoom-big-fast-appear{animation-duration:0.1s;animation-fill-mode:both;animation-play-state:paused;}.ant-zoom-big-fast-leave{animation-duration:0.1s;animation-fill-mode:both;animation-play-state:paused;}.ant-zoom-big-fast-enter.ant-zoom-big-fast-enter-active,.ant-zoom-big-fast-appear.ant-zoom-big-fast-appear-active{animation-name:antZoomBigIn;animation-play-state:running;}.ant-zoom-big-fast-leave.ant-zoom-big-fast-leave-active{animation-name:antZoomBigOut;animation-play-state:running;pointer-events:none;}.ant-zoom-big-fast-enter,.ant-zoom-big-fast-appear{transform:scale(0);opacity:0;animation-timing-function:cubic-bezier(0.08, 0.82, 0.17, 1);}.ant-zoom-big-fast-enter-prepare,.ant-zoom-big-fast-appear-prepare{transform:none;}.ant-zoom-big-fast-leave{animation-timing-function:cubic-bezier(0.78, 0.14, 0.15, 0.86);}</style><style data-rc-order="prependQueue" data-css-hash="gunncb" data-token-hash="160jlb5">[class^="ant-dropdown"],[class*=" ant-dropdown"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}[class^="ant-dropdown"]::before,[class*=" ant-dropdown"]::before,[class^="ant-dropdown"]::after,[class*=" ant-dropdown"]::after{box-sizing:border-box;}[class^="ant-dropdown"] [class^="ant-dropdown"],[class*=" ant-dropdown"] [class^="ant-dropdown"],[class^="ant-dropdown"] [class*=" ant-dropdown"],[class*=" ant-dropdown"] [class*=" ant-dropdown"]{box-sizing:border-box;}[class^="ant-dropdown"] [class^="ant-dropdown"]::before,[class*=" ant-dropdown"] [class^="ant-dropdown"]::before,[class^="ant-dropdown"] [class*=" ant-dropdown"]::before,[class*=" ant-dropdown"] [class*=" ant-dropdown"]::before,[class^="ant-dropdown"] [class^="ant-dropdown"]::after,[class*=" ant-dropdown"] [class^="ant-dropdown"]::after,[class^="ant-dropdown"] [class*=" ant-dropdown"]::after,[class*=" ant-dropdown"] [class*=" ant-dropdown"]::after{box-sizing:border-box;}.ant-dropdown{box-sizing:border-box;margin:0;padding:0;color:rgba(0, 0, 0, 0.88);font-size:14px;line-height:1.5714285714285714;list-style:none;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';position:absolute;top:-9999px;left:-9999px;z-index:1050;display:block;}.ant-dropdown::before{position:absolute;inset-block:-4px;z-index:-9999;opacity:0.0001;content:"";}.ant-dropdown .ant-dropdown-wrap{position:relative;}.ant-dropdown .ant-dropdown-wrap .ant-btn>.anticon-down{font-size:12px;}.ant-dropdown .ant-dropdown-wrap .anticon-down::before{transition:transform 0.2s;}.ant-dropdown .ant-dropdown-wrap-open .anticon-down::before{transform:rotate(180deg);}.ant-dropdown-hidden,.ant-dropdown-menu-hidden,.ant-dropdown-menu-submenu-hidden{display:none;}.ant-dropdown-show-arrow.ant-dropdown-placement-topLeft,.ant-dropdown-show-arrow.ant-dropdown-placement-top,.ant-dropdown-show-arrow.ant-dropdown-placement-topRight{padding-bottom:12px;}.ant-dropdown-show-arrow.ant-dropdown-placement-bottomLeft,.ant-dropdown-show-arrow.ant-dropdown-placement-bottom,.ant-dropdown-show-arrow.ant-dropdown-placement-bottomRight{padding-top:12px;}.ant-dropdown .ant-dropdown-arrow{position:absolute;z-index:1;display:block;border-radius:0 0 2px;pointer-events:none;width:32px;height:32px;overflow:hidden;}.ant-dropdown .ant-dropdown-arrow::after{content:"";position:absolute;width:11.31370849898476px;height:11.31370849898476px;bottom:0;inset-inline:0;margin:auto;border-radius:0 0 2px 0;transform:translateY(50%) rotate(-135deg);box-shadow:3px 3px 7px rgba(0, 0, 0, 0.1);z-index:0;background:transparent;}.ant-dropdown .ant-dropdown-arrow::before{position:absolute;bottom:0;inset-inline-start:0;width:32px;height:8px;background:#ffffff;clip-path:path('M 6.343145750507619 8 A 4 4 0 0 0 9.17157287525381 6.82842712474619 L 14.585786437626904 1.414213562373095 A 2 2 0 0 1 17.414213562373096 1.414213562373095 L 22.82842712474619 6.82842712474619 A 4 4 0 0 0 25.65685424949238 8 Z');content:"";}.ant-dropdown-placement-top>.ant-dropdown-arrow,.ant-dropdown-placement-topLeft>.ant-dropdown-arrow,.ant-dropdown-placement-topRight>.ant-dropdown-arrow{bottom:12px;transform:translateY(100%) rotate(180deg);}.ant-dropdown-placement-top>.ant-dropdown-arrow{left:50%;transform:translateX(-50%) translateY(100%) rotate(180deg);}.ant-dropdown-placement-topLeft>.ant-dropdown-arrow{left:6px;}.ant-dropdown-placement-topRight>.ant-dropdown-arrow{right:6px;}.ant-dropdown-placement-bottom>.ant-dropdown-arrow,.ant-dropdown-placement-bottomLeft>.ant-dropdown-arrow,.ant-dropdown-placement-bottomRight>.ant-dropdown-arrow{top:12px;transform:translateY(-100%);}.ant-dropdown-placement-bottom>.ant-dropdown-arrow{left:50%;transform:translateY(-100%) translateX(-50%);}.ant-dropdown-placement-bottomLeft>.ant-dropdown-arrow{left:6px;}.ant-dropdown-placement-bottomRight>.ant-dropdown-arrow{right:6px;}.ant-dropdown.ant-slide-down-enter.ant-slide-down-enter-active.ant-dropdown-placement-bottomLeft,.ant-dropdown.ant-slide-down-appear.ant-slide-down-appear-active.ant-dropdown-placement-bottomLeft .ant-dropdown.ant-slide-down-enter.ant-slide-down-enter-active.ant-dropdown-placement-bottom,.ant-dropdown.ant-slide-down-appear.ant-slide-down-appear-active.ant-dropdown-placement-bottom,.ant-dropdown.ant-slide-down-enter.ant-slide-down-enter-active.ant-dropdown-placement-bottomRight,.ant-dropdown.ant-slide-down-appear.ant-slide-down-appear-active.ant-dropdown-placement-bottomRight{animation-name:antSlideUpIn;}.ant-dropdown.ant-slide-up-enter.ant-slide-up-enter-active.ant-dropdown-placement-topLeft,.ant-dropdown.ant-slide-up-appear.ant-slide-up-appear-active.ant-dropdown-placement-topLeft,.ant-dropdown.ant-slide-up-enter.ant-slide-up-enter-active.ant-dropdown-placement-top,.ant-dropdown.ant-slide-up-appear.ant-slide-up-appear-active.ant-dropdown-placement-top,.ant-dropdown.ant-slide-up-enter.ant-slide-up-enter-active.ant-dropdown-placement-topRight,.ant-dropdown.ant-slide-up-appear.ant-slide-up-appear-active.ant-dropdown-placement-topRight{animation-name:antSlideDownIn;}.ant-dropdown.ant-slide-down-leave.ant-slide-down-leave-active.ant-dropdown-placement-bottomLeft,.ant-dropdown.ant-slide-down-leave.ant-slide-down-leave-active.ant-dropdown-placement-bottom,.ant-dropdown.ant-slide-down-leave.ant-slide-down-leave-active.ant-dropdown-placement-bottomRight{animation-name:antSlideUpOut;}.ant-dropdown.ant-slide-up-leave.ant-slide-up-leave-active.ant-dropdown-placement-topLeft,.ant-dropdown.ant-slide-up-leave.ant-slide-up-leave-active.ant-dropdown-placement-top,.ant-dropdown.ant-slide-up-leave.ant-slide-up-leave-active.ant-dropdown-placement-topRight{animation-name:antSlideDownOut;}.ant-dropdown .ant-dropdown-menu{position:relative;margin:0;}.ant-dropdown-menu-submenu-popup{position:absolute;z-index:1050;background:transparent;box-shadow:none;transform-origin:0 0;}.ant-dropdown-menu-submenu-popup ul,.ant-dropdown-menu-submenu-popup li{list-style:none;}.ant-dropdown-menu-submenu-popup ul{margin-inline:0.3em;}.ant-dropdown .ant-dropdown-menu,.ant-dropdown-menu-submenu .ant-dropdown-menu{padding:4px;list-style-type:none;background-color:#ffffff;background-clip:padding-box;border-radius:8px;outline:none;box-shadow:0 6px 16px 0 rgba(0, 0, 0, 0.08),0 3px 6px -4px rgba(0, 0, 0, 0.12),0 9px 28px 8px rgba(0, 0, 0, 0.05);}.ant-dropdown .ant-dropdown-menu:focus-visible,.ant-dropdown-menu-submenu .ant-dropdown-menu:focus-visible{outline:4px solid #91caff;outline-offset:1px;transition:outline-offset 0s,outline 0s;}.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-item-group-title,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-item-group-title{padding:5px 12px;color:rgba(0, 0, 0, 0.45);transition:all 0.2s;}.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-item,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-item{position:relative;display:flex;align-items:center;border-radius:4px;}.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-item-icon,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-item-icon{min-width:14px;margin-inline-end:8px;font-size:12px;}.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-title-content,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-title-content{flex:auto;}.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-title-content >a,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-title-content >a{color:inherit;transition:all 0.2s;}.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-title-content >a:hover,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-title-content >a:hover{color:inherit;}.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-title-content >a::after,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-title-content >a::after{position:absolute;inset:0;content:"";}.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-item,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-item,.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-submenu-title,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-submenu-title{clear:both;margin:0;padding:5px 12px;color:rgba(0, 0, 0, 0.88);font-weight:normal;font-size:14px;line-height:1.5714285714285714;cursor:pointer;transition:all 0.2s;}.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-item:hover,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-item:hover,.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-submenu-title:hover,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-submenu-title:hover,.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-item-active,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-item-active,.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-submenu-title-active,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-submenu-title-active{background-color:rgba(0, 0, 0, 0.04);}.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-item:focus-visible,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-item:focus-visible,.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-submenu-title:focus-visible,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-submenu-title:focus-visible{outline:4px solid #91caff;outline-offset:1px;transition:outline-offset 0s,outline 0s;}.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-item-selected,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-item-selected,.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-submenu-title-selected,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-submenu-title-selected{color:#1677ff;background-color:#e6f4ff;}.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-item-selected:hover,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-item-selected:hover,.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-submenu-title-selected:hover,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-submenu-title-selected:hover,.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-item-selected-active,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-item-selected-active,.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-submenu-title-selected-active,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-submenu-title-selected-active{background-color:#bae0ff;}.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-item-disabled,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-item-disabled,.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-submenu-title-disabled,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-submenu-title-disabled{color:rgba(0, 0, 0, 0.25);cursor:not-allowed;}.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-item-disabled:hover,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-item-disabled:hover,.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-submenu-title-disabled:hover,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-submenu-title-disabled:hover{color:rgba(0, 0, 0, 0.25);background-color:#ffffff;cursor:not-allowed;}.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-item-disabled a,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-item-disabled a,.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-submenu-title-disabled a,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-submenu-title-disabled a{pointer-events:none;}.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-item-divider,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-item-divider,.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-submenu-title-divider,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-submenu-title-divider{height:1px;margin:4px 0;overflow:hidden;line-height:0;background-color:rgba(5, 5, 5, 0.06);}.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-item .ant-dropdown-menu-submenu-expand-icon,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-item .ant-dropdown-menu-submenu-expand-icon,.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-submenu-title .ant-dropdown-menu-submenu-expand-icon,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-submenu-title .ant-dropdown-menu-submenu-expand-icon{position:absolute;inset-inline-end:8px;}.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-item .ant-dropdown-menu-submenu-expand-icon .ant-dropdown-menu-submenu-arrow-icon,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-item .ant-dropdown-menu-submenu-expand-icon .ant-dropdown-menu-submenu-arrow-icon,.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-submenu-title .ant-dropdown-menu-submenu-expand-icon .ant-dropdown-menu-submenu-arrow-icon,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-submenu-title .ant-dropdown-menu-submenu-expand-icon .ant-dropdown-menu-submenu-arrow-icon{margin-inline-end:0!important;color:rgba(0, 0, 0, 0.45);font-size:12px;font-style:normal;}.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-item-group-list,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-item-group-list{margin:0 8px;padding:0;list-style:none;}.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-submenu-title,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-submenu-title{padding-inline-end:24px;}.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-submenu-vertical,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-submenu-vertical{position:relative;}.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-submenu.ant-dropdown-menu-submenu-disabled .ant-dropdown-menu-submenu-title,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-submenu.ant-dropdown-menu-submenu-disabled .ant-dropdown-menu-submenu-title,.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-submenu.ant-dropdown-menu-submenu-disabled .ant-dropdown-menu-submenu-title .ant-dropdown-menu-submenu-arrow-icon,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-submenu.ant-dropdown-menu-submenu-disabled .ant-dropdown-menu-submenu-title .ant-dropdown-menu-submenu-arrow-icon{color:rgba(0, 0, 0, 0.25);background-color:#ffffff;cursor:not-allowed;}.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-submenu-selected .ant-dropdown-menu-submenu-title,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-submenu-selected .ant-dropdown-menu-submenu-title{color:#1677ff;}.ant-slide-up-enter,.ant-slide-up-appear{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}.ant-slide-up-leave{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}.ant-slide-up-enter.ant-slide-up-enter-active,.ant-slide-up-appear.ant-slide-up-appear-active{animation-name:antSlideUpIn;animation-play-state:running;}.ant-slide-up-leave.ant-slide-up-leave-active{animation-name:antSlideUpOut;animation-play-state:running;pointer-events:none;}.ant-slide-up-enter,.ant-slide-up-appear{opacity:0;animation-timing-function:cubic-bezier(0.23, 1, 0.32, 1);}.ant-slide-up-leave{animation-timing-function:cubic-bezier(0.645, 0.045, 0.355, 1);}.ant-slide-down-enter,.ant-slide-down-appear{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}.ant-slide-down-leave{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}.ant-slide-down-enter.ant-slide-down-enter-active,.ant-slide-down-appear.ant-slide-down-appear-active{animation-name:antSlideDownIn;animation-play-state:running;}.ant-slide-down-leave.ant-slide-down-leave-active{animation-name:antSlideDownOut;animation-play-state:running;pointer-events:none;}.ant-slide-down-enter,.ant-slide-down-appear{opacity:0;animation-timing-function:cubic-bezier(0.23, 1, 0.32, 1);}.ant-slide-down-leave{animation-timing-function:cubic-bezier(0.645, 0.045, 0.355, 1);}.ant-move-up-enter,.ant-move-up-appear{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}.ant-move-up-leave{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}.ant-move-up-enter.ant-move-up-enter-active,.ant-move-up-appear.ant-move-up-appear-active{animation-name:antMoveUpIn;animation-play-state:running;}.ant-move-up-leave.ant-move-up-leave-active{animation-name:antMoveUpOut;animation-play-state:running;pointer-events:none;}.ant-move-up-enter,.ant-move-up-appear{opacity:0;animation-timing-function:cubic-bezier(0.08, 0.82, 0.17, 1);}.ant-move-up-leave{animation-timing-function:cubic-bezier(0.78, 0.14, 0.15, 0.86);}.ant-move-down-enter,.ant-move-down-appear{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}.ant-move-down-leave{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}.ant-move-down-enter.ant-move-down-enter-active,.ant-move-down-appear.ant-move-down-appear-active{animation-name:antMoveDownIn;animation-play-state:running;}.ant-move-down-leave.ant-move-down-leave-active{animation-name:antMoveDownOut;animation-play-state:running;pointer-events:none;}.ant-move-down-enter,.ant-move-down-appear{opacity:0;animation-timing-function:cubic-bezier(0.08, 0.82, 0.17, 1);}.ant-move-down-leave{animation-timing-function:cubic-bezier(0.78, 0.14, 0.15, 0.86);}.ant-zoom-big-enter,.ant-zoom-big-appear{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}.ant-zoom-big-leave{animation-duration:0.2s;animation-fill-mode:both;animation-play-state:paused;}.ant-zoom-big-enter.ant-zoom-big-enter-active,.ant-zoom-big-appear.ant-zoom-big-appear-active{animation-name:antZoomBigIn;animation-play-state:running;}.ant-zoom-big-leave.ant-zoom-big-leave-active{animation-name:antZoomBigOut;animation-play-state:running;pointer-events:none;}.ant-zoom-big-enter,.ant-zoom-big-appear{transform:scale(0);opacity:0;animation-timing-function:cubic-bezier(0.08, 0.82, 0.17, 1);}.ant-zoom-big-enter-prepare,.ant-zoom-big-appear-prepare{transform:none;}.ant-zoom-big-leave{animation-timing-function:cubic-bezier(0.78, 0.14, 0.15, 0.86);}.ant-dropdown-button{white-space:nowrap;}.ant-dropdown-button.ant-btn-group>.ant-btn-loading,.ant-dropdown-button.ant-btn-group>.ant-btn-loading+.ant-btn{cursor:default;pointer-events:none;opacity:0.65;}.ant-dropdown-button.ant-btn-group>.ant-btn:last-child:not(:first-child):not(.ant-btn-icon-only){padding-inline:8px;}.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-item.ant-dropdown-menu-item-danger:not(.ant-dropdown-menu-item-disabled),.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-item.ant-dropdown-menu-item-danger:not(.ant-dropdown-menu-item-disabled){color:#ff4d4f;}.ant-dropdown .ant-dropdown-menu .ant-dropdown-menu-item.ant-dropdown-menu-item-danger:not(.ant-dropdown-menu-item-disabled):hover,.ant-dropdown-menu-submenu .ant-dropdown-menu .ant-dropdown-menu-item.ant-dropdown-menu-item-danger:not(.ant-dropdown-menu-item-disabled):hover{color:#fff;background-color:#ff4d4f;}</style><style data-rc-order="prependQueue" data-css-hash="_effect-antSlideUpIn">@keyframes antSlideUpIn{0%{transform:scaleY(0.8);transform-origin:0% 0%;opacity:0;}100%{transform:scaleY(1);transform-origin:0% 0%;opacity:1;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-antSlideDownIn">@keyframes antSlideDownIn{0%{transform:scaleY(0.8);transform-origin:100% 100%;opacity:0;}100%{transform:scaleY(1);transform-origin:100% 100%;opacity:1;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-antSlideUpOut">@keyframes antSlideUpOut{0%{transform:scaleY(1);transform-origin:0% 0%;opacity:1;}100%{transform:scaleY(0.8);transform-origin:0% 0%;opacity:0;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-antSlideDownOut">@keyframes antSlideDownOut{0%{transform:scaleY(1);transform-origin:100% 100%;opacity:1;}100%{transform:scaleY(0.8);transform-origin:100% 100%;opacity:0;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-antMoveUpIn">@keyframes antMoveUpIn{0%{transform:translate3d(0, -100%, 0);transform-origin:0 0;opacity:0;}100%{transform:translate3d(0, 0, 0);transform-origin:0 0;opacity:1;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-antMoveUpOut">@keyframes antMoveUpOut{0%{transform:translate3d(0, 0, 0);transform-origin:0 0;opacity:1;}100%{transform:translate3d(0, -100%, 0);transform-origin:0 0;opacity:0;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-antMoveDownIn">@keyframes antMoveDownIn{0%{transform:translate3d(0, 100%, 0);transform-origin:0 0;opacity:0;}100%{transform:translate3d(0, 0, 0);transform-origin:0 0;opacity:1;}}</style><style data-rc-order="prependQueue" data-css-hash="_effect-antMoveDownOut">@keyframes antMoveDownOut{0%{transform:translate3d(0, 0, 0);transform-origin:0 0;opacity:1;}100%{transform:translate3d(0, 100%, 0);transform-origin:0 0;opacity:0;}}</style><style data-rc-order="prependQueue" data-css-hash="14r0wez" data-token-hash="160jlb5">[class^="ant-timeline"],[class*=" ant-timeline"]{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:14px;box-sizing:border-box;}[class^="ant-timeline"]::before,[class*=" ant-timeline"]::before,[class^="ant-timeline"]::after,[class*=" ant-timeline"]::after{box-sizing:border-box;}[class^="ant-timeline"] [class^="ant-timeline"],[class*=" ant-timeline"] [class^="ant-timeline"],[class^="ant-timeline"] [class*=" ant-timeline"],[class*=" ant-timeline"] [class*=" ant-timeline"]{box-sizing:border-box;}[class^="ant-timeline"] [class^="ant-timeline"]::before,[class*=" ant-timeline"] [class^="ant-timeline"]::before,[class^="ant-timeline"] [class*=" ant-timeline"]::before,[class*=" ant-timeline"] [class*=" ant-timeline"]::before,[class^="ant-timeline"] [class^="ant-timeline"]::after,[class*=" ant-timeline"] [class^="ant-timeline"]::after,[class^="ant-timeline"] [class*=" ant-timeline"]::after,[class*=" ant-timeline"] [class*=" ant-timeline"]::after{box-sizing:border-box;}.ant-timeline{box-sizing:border-box;margin:0;padding:0;color:rgba(0, 0, 0, 0.88);font-size:14px;line-height:1.5714285714285714;list-style:none;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';}.ant-timeline .ant-timeline-item{position:relative;margin:0;padding-bottom:20px;font-size:14px;list-style:none;}.ant-timeline .ant-timeline-item-tail{position:absolute;inset-block-start:10px;inset-inline-start:4px;height:calc(100% - 10px);border-inline-start:2px solid rgba(5, 5, 5, 0.06);}.ant-timeline .ant-timeline-item-pending .ant-timeline-item-head{font-size:12px;background-color:transparent;}.ant-timeline .ant-timeline-item-pending .ant-timeline-item-tail{display:none;}.ant-timeline .ant-timeline-item-head{position:absolute;width:10px;height:10px;background-color:#ffffff;border:3px solid transparent;border-radius:50%;}.ant-timeline .ant-timeline-item-head-blue{color:#1677ff;border-color:#1677ff;}.ant-timeline .ant-timeline-item-head-red{color:#ff4d4f;border-color:#ff4d4f;}.ant-timeline .ant-timeline-item-head-green{color:#52c41a;border-color:#52c41a;}.ant-timeline .ant-timeline-item-head-gray{color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.25);}.ant-timeline .ant-timeline-item-head-custom{position:absolute;inset-block-start:5px;inset-inline-start:5px;width:auto;height:auto;margin-block-start:0;padding-block:4px;line-height:1;text-align:center;border:0;border-radius:0;transform:translate(-50%, -50%);}.ant-timeline .ant-timeline-item-content{position:relative;inset-block-start:-7px;margin-inline-start:26px;margin-inline-end:0;margin-block-start:0;margin-block-end:0;word-break:break-word;}.ant-timeline .ant-timeline-item-last >.ant-timeline-item-tail{display:none;}.ant-timeline .ant-timeline-item-last >.ant-timeline-item-content{min-height:48px;}.ant-timeline.ant-timeline-alternate .ant-timeline-item-tail,.ant-timeline.ant-timeline-right .ant-timeline-item-tail,.ant-timeline.ant-timeline-label .ant-timeline-item-tail,.ant-timeline.ant-timeline-alternate .ant-timeline-item-head,.ant-timeline.ant-timeline-right .ant-timeline-item-head,.ant-timeline.ant-timeline-label .ant-timeline-item-head,.ant-timeline.ant-timeline-alternate .ant-timeline-item-head-custom,.ant-timeline.ant-timeline-right .ant-timeline-item-head-custom,.ant-timeline.ant-timeline-label .ant-timeline-item-head-custom{inset-inline-start:50%;}.ant-timeline.ant-timeline-alternate .ant-timeline-item-head,.ant-timeline.ant-timeline-right .ant-timeline-item-head,.ant-timeline.ant-timeline-label .ant-timeline-item-head{margin-inline-start:-4px;}.ant-timeline.ant-timeline-alternate .ant-timeline-item-head-custom,.ant-timeline.ant-timeline-right .ant-timeline-item-head-custom,.ant-timeline.ant-timeline-label .ant-timeline-item-head-custom{margin-inline-start:1px;}.ant-timeline.ant-timeline-alternate .ant-timeline-item-left .ant-timeline-item-content,.ant-timeline.ant-timeline-right .ant-timeline-item-left .ant-timeline-item-content,.ant-timeline.ant-timeline-label .ant-timeline-item-left .ant-timeline-item-content{inset-inline-start:calc(50% - 4px);width:calc(50% - 12px);text-align:start;}.ant-timeline.ant-timeline-alternate .ant-timeline-item-right .ant-timeline-item-content,.ant-timeline.ant-timeline-right .ant-timeline-item-right .ant-timeline-item-content,.ant-timeline.ant-timeline-label .ant-timeline-item-right .ant-timeline-item-content{width:calc(50% - 12px);margin:0;text-align:end;}.ant-timeline.ant-timeline-right .ant-timeline-item-right .ant-timeline-item-tail,.ant-timeline.ant-timeline-right .ant-timeline-item-right .ant-timeline-item-head,.ant-timeline.ant-timeline-right .ant-timeline-item-right .ant-timeline-item-head-custom{inset-inline-start:calc(100% - 2px);}.ant-timeline.ant-timeline-right .ant-timeline-item-right .ant-timeline-item-content{width:calc(100% - 18px);}.ant-timeline.ant-timeline-pending .ant-timeline-item-last .ant-timeline-item-tail{display:block;height:calc(100% - 16px);border-inline-start:2px dotted rgba(5, 5, 5, 0.06);}.ant-timeline.ant-timeline-reverse .ant-timeline-item-last .ant-timeline-item-tail{display:none;}.ant-timeline.ant-timeline-reverse .ant-timeline-item-pending .ant-timeline-item-tail{inset-block-start:16px;display:block;height:calc(100% - 16px);border-inline-start:2px dotted rgba(5, 5, 5, 0.06);}.ant-timeline.ant-timeline-reverse .ant-timeline-item-pending .ant-timeline-item-content{min-height:48px;}.ant-timeline.ant-timeline-label .ant-timeline-item-label{position:absolute;inset-block-start:-6px;width:calc(50% - 12px);text-align:end;}.ant-timeline.ant-timeline-label .ant-timeline-item-right .ant-timeline-item-label{inset-inline-start:calc(50% + 12px);width:calc(50% - 12px);text-align:start;}</style><base><meta name="robots" content="noindex"><meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"><title>实时动态 - mex_post_dhl 管理面板</title><style data-emotion="css" data-s="">.css-1xa37pg { border: none; width: 100%; height: 70vh; }
@media (min-width: 1500px) {
  .css-1bm2aj1 { display: flex; }
}
.css-1q58cd { display: flex; gap: 1.5rem; margin: 0px auto; flex-wrap: wrap; padding-bottom: 88px; }
.css-1q58cd.list { gap: 0px; }
@media (max-width: 1850px) {
  .css-1q58cd.list::before { content: "你的窗口较窄"; }
}
.css-1pz7edc { display: flex; gap: 1.5rem; margin: 0px auto; flex-wrap: wrap; padding-bottom: 30rem; }
.css-1pz7edc.list { gap: 150px 10px; }
@media (max-width: 1850px) {
  .css-1pz7edc.list::before { content: "你的窗口较窄"; }
}
.css-1jf1tlv { box-sizing: border-box; position: relative; width: calc(35.3333% - 1.5rem); max-width: 520px; min-width: 350px; height: 313px; }
.css-1jf1tlv.list { height: 58px; width: 100%; max-width: initial; border-bottom-color: transparent !important; }
.css-y7ggni { background: rgb(255, 255, 255); overflow: hidden; overscroll-behavior: contain; opacity: 0.88; transition: all 0.15s ease 0s; cursor: pointer; border: 1px solid rgba(128, 128, 128, 0.635); }
.css-y7ggni:hover, .css-y7ggni.show-all, .css-y7ggni.show-actions { box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; }
.css-y7ggni .ant-pro-card-actions { background-color: transparent; }
.css-y7ggni.offline { filter: grayscale(1); opacity: 0.3; }
.css-y7ggni.update { background-color: rgb(235, 255, 235); }
.css-y7ggni .content-body { overflow: auto; min-height: 180px; height: 180px; transition: all 0.1s ease 0s; }
.css-y7ggni .content-body::-webkit-scrollbar { width: 0px; }
.css-y7ggni.list { min-height: initial; flex-direction: row; align-items: flex-start; -webkit-box-pack: justify; justify-content: space-between; border-radius: 0px; border-width: 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-left-style: solid; border-top-color: rgba(128, 128, 128, 0.17); border-right-color: rgba(128, 128, 128, 0.17); border-left-color: rgba(128, 128, 128, 0.17); border-image: initial; border-bottom-style: initial; border-bottom-color: initial; }
.css-y7ggni.list:last-of-type { border-bottom: 1px solid rgba(128, 128, 128, 0.17); }
.css-y7ggni.list .content-body { min-height: initial; height: initial; }
@-webkit-keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
@keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
.css-y7ggni.list .content-body .ant-tag.ant-tag-red { animation: 2s ease 0s infinite normal none running remind; }
.css-y7ggni.list .content-body .client-status { position: absolute; left: 1rem; top: 2.5rem; opacity: 0.88; z-index: 2; }
.css-y7ggni.list .content-body .client-status:hover { opacity: 1; }
.css-y7ggni.list .ant-pro-card-header { align-items: flex-start; }
.css-y7ggni.list .ant-space-align-center { align-items: flex-start; }
.css-y7ggni.list .ant-pro-card-actions { display: flex; -webkit-box-align: center; align-items: center; gap: 5px; padding-left: 10px; height: 55px; position: sticky; top: 0px; right: 0px; z-index: 1000; background-color: white; border-left: 1px solid rgba(128, 128, 128, 0.17); }
.css-y7ggni.show-all { opacity: 1; z-index: 1000; box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px; }
.css-y7ggni.show-all.default .content-body { height: 200px; }
.css-y7ggni.show-all .ant-pro-card-actions { box-shadow: none; }
.css-zzuvrm.default .anticon { display: none; }
.css-zzuvrm .anticon { font-size: 1rem; margin-right: 5px; cursor: pointer; }
.css-zzuvrm.list { width: 1rem; overflow: hidden; }
.css-zzuvrm.list .text { position: absolute; z-index: 1000; background-color: white; display: none; }
.css-zzuvrm.list:hover .text { display: initial; }
.css-smmb2r { overflow: hidden; text-overflow: ellipsis; white-space: nowrap; width: 150px; cursor: pointer; font-size: 1rem; }
.css-smmb2r::before { content: ""; position: absolute; opacity: 0.8; top: 0px; font-size: 13px; }
.css-13r4xsg::-webkit-scrollbar { width: 0px; height: 0px; }
.css-13r4xsg.default { position: absolute; top: 1rem; right: 1rem; }
.css-13r4xsg.list { margin-left: 1rem; }
.css-v7e31s { background: rgb(255, 255, 255); overflow: hidden; overscroll-behavior: contain; opacity: 0.88; transition: all 0.15s ease 0s; cursor: pointer; border: 1px solid rgba(128, 128, 128, 0.635); }
.css-v7e31s:hover, .css-v7e31s.show-all, .css-v7e31s.show-actions { box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; }
.css-v7e31s .ant-pro-card-actions { background-color: transparent; }
.css-v7e31s.offline { filter: grayscale(1); opacity: 0.3; }
.css-v7e31s.update { background-color: rgb(235, 255, 235); }
.css-v7e31s .content-body { overflow: auto; min-height: 180px; height: 180px; transition: all 0.1s ease 0s; }
.css-v7e31s .content-body::-webkit-scrollbar { width: 0px; }
.css-v7e31s.list { min-height: initial; flex-direction: row; align-items: flex-start; -webkit-box-pack: justify; justify-content: space-between; border-radius: 0px; border-width: 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-left-style: solid; border-top-color: rgba(128, 128, 128, 0.17); border-right-color: rgba(128, 128, 128, 0.17); border-left-color: rgba(128, 128, 128, 0.17); border-image: initial; border-bottom-style: initial; border-bottom-color: initial; }
.css-v7e31s.list:last-of-type { border-bottom: 1px solid rgba(128, 128, 128, 0.17); }
.css-v7e31s.list .content-body { min-height: initial; height: initial; }
@-webkit-keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
@keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
.css-v7e31s.list .content-body .ant-tag.ant-tag-red { animation: 2s ease 0s infinite normal none running remind; }
.css-v7e31s.list .content-body .client-status { position: absolute; left: 1rem; top: 2.5rem; opacity: 0.88; z-index: 2; }
.css-v7e31s.list .content-body .client-status:hover { opacity: 1; }
.css-v7e31s.list .ant-pro-card-header { align-items: flex-start; }
.css-v7e31s.list .ant-space-align-center { align-items: flex-start; }
.css-v7e31s.list .ant-pro-card-actions { display: flex; -webkit-box-align: center; align-items: center; gap: 5px; padding-left: 10px; height: 55px; position: sticky; top: 0px; right: 0px; z-index: 1000; background-color: white; border-left: 1px solid rgba(128, 128, 128, 0.17); }
.css-v7e31s.show-all { opacity: 1; z-index: 1000; box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px; }
.css-v7e31s.show-all.default .content-body { height: 266px; }
.css-v7e31s.show-all .ant-pro-card-actions { box-shadow: none; }
.css-143yodl { background: rgb(255, 255, 255); overflow: hidden; overscroll-behavior: contain; opacity: 0.88; transition: all 0.15s ease 0s; cursor: pointer; border: 1px solid rgba(128, 128, 128, 0.635); }
.css-143yodl:hover, .css-143yodl.show-all, .css-143yodl.show-actions { box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; }
.css-143yodl .ant-pro-card-actions { background-color: transparent; }
.css-143yodl.offline { filter: grayscale(1); opacity: 0.3; }
.css-143yodl.update { background-color: rgb(235, 255, 235); }
.css-143yodl .content-body { overflow: auto; min-height: 180px; height: 180px; transition: all 0.1s ease 0s; }
.css-143yodl .content-body::-webkit-scrollbar { width: 0px; }
.css-143yodl.list { min-height: initial; flex-direction: row; align-items: flex-start; -webkit-box-pack: justify; justify-content: space-between; border-radius: 0px; border-width: 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-left-style: solid; border-top-color: rgba(128, 128, 128, 0.17); border-right-color: rgba(128, 128, 128, 0.17); border-left-color: rgba(128, 128, 128, 0.17); border-image: initial; border-bottom-style: initial; border-bottom-color: initial; }
.css-143yodl.list:last-of-type { border-bottom: 1px solid rgba(128, 128, 128, 0.17); }
.css-143yodl.list .content-body { min-height: initial; height: initial; }
@-webkit-keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
@keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
.css-143yodl.list .content-body .ant-tag.ant-tag-red { animation: 2s ease 0s infinite normal none running remind; }
.css-143yodl.list .content-body .client-status { position: absolute; left: 1rem; top: 2.5rem; opacity: 0.88; z-index: 2; }
.css-143yodl.list .content-body .client-status:hover { opacity: 1; }
.css-143yodl.list .ant-pro-card-header { align-items: flex-start; }
.css-143yodl.list .ant-space-align-center { align-items: flex-start; }
.css-143yodl.list .ant-pro-card-actions { display: flex; -webkit-box-align: center; align-items: center; gap: 5px; padding-left: 10px; height: 55px; position: sticky; top: 0px; right: 0px; z-index: 1000; background-color: white; border-left: 1px solid rgba(128, 128, 128, 0.17); }
.css-143yodl.show-all { opacity: 1; z-index: 1000; box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px; }
.css-143yodl.show-all.default .content-body { height: 342px; }
.css-143yodl.show-all .ant-pro-card-actions { box-shadow: none; }
.css-b6ha1v { background: rgb(255, 255, 255); overflow: hidden; overscroll-behavior: contain; opacity: 0.88; transition: all 0.15s ease 0s; cursor: default; border: 1px solid rgba(128, 128, 128, 0.635); }
.css-b6ha1v:hover, .css-b6ha1v.show-all, .css-b6ha1v.show-actions { box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; }
.css-b6ha1v .ant-pro-card-actions { background-color: transparent; }
.css-b6ha1v.offline { filter: grayscale(1); opacity: 0.3; }
.css-b6ha1v.update { background-color: rgb(235, 255, 235); }
.css-b6ha1v .content-body { overflow: auto; min-height: 180px; height: 180px; transition: all 0.1s ease 0s; }
.css-b6ha1v .content-body::-webkit-scrollbar { width: 0px; }
.css-b6ha1v.list { min-height: initial; flex-direction: row; align-items: flex-start; -webkit-box-pack: justify; justify-content: space-between; border-radius: 0px; border-width: 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-left-style: solid; border-top-color: rgba(128, 128, 128, 0.17); border-right-color: rgba(128, 128, 128, 0.17); border-left-color: rgba(128, 128, 128, 0.17); border-image: initial; border-bottom-style: initial; border-bottom-color: initial; }
.css-b6ha1v.list:last-of-type { border-bottom: 1px solid rgba(128, 128, 128, 0.17); }
.css-b6ha1v.list .content-body { min-height: initial; height: initial; }
@-webkit-keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
@keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
.css-b6ha1v.list .content-body .ant-tag.ant-tag-red { animation: 2s ease 0s infinite normal none running remind; }
.css-b6ha1v.list .content-body .client-status { position: absolute; left: 1rem; top: 2.5rem; opacity: 0.88; z-index: 2; }
.css-b6ha1v.list .content-body .client-status:hover { opacity: 1; }
.css-b6ha1v.list .ant-pro-card-header { align-items: flex-start; }
.css-b6ha1v.list .ant-space-align-center { align-items: flex-start; }
.css-b6ha1v.list .ant-pro-card-actions { display: flex; -webkit-box-align: center; align-items: center; gap: 5px; padding-left: 10px; height: 55px; position: sticky; top: 0px; right: 0px; z-index: 1000; background-color: white; border-left: 1px solid rgba(128, 128, 128, 0.17); }
.css-b6ha1v.show-all { opacity: 1; z-index: 1000; box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px; }
.css-b6ha1v.show-all.default .content-body { height: 180px; }
.css-b6ha1v.show-all .ant-pro-card-actions { box-shadow: none; }
.css-fz7p3b { background: rgb(255, 255, 255); overflow: hidden; overscroll-behavior: contain; opacity: 0.88; transition: all 0.15s ease 0s; cursor: pointer; border: 1px solid rgba(128, 128, 128, 0.635); }
.css-fz7p3b:hover, .css-fz7p3b.show-all, .css-fz7p3b.show-actions { box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; }
.css-fz7p3b .ant-pro-card-actions { background-color: transparent; }
.css-fz7p3b.offline { filter: grayscale(1); opacity: 0.3; }
.css-fz7p3b.update { background-color: rgb(235, 255, 235); }
.css-fz7p3b .content-body { overflow: auto; min-height: 180px; height: 180px; transition: all 0.1s ease 0s; }
.css-fz7p3b .content-body::-webkit-scrollbar { width: 0px; }
.css-fz7p3b.list { min-height: initial; flex-direction: row; align-items: flex-start; -webkit-box-pack: justify; justify-content: space-between; border-radius: 0px; border-width: 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-left-style: solid; border-top-color: rgba(128, 128, 128, 0.17); border-right-color: rgba(128, 128, 128, 0.17); border-left-color: rgba(128, 128, 128, 0.17); border-image: initial; border-bottom-style: initial; border-bottom-color: initial; }
.css-fz7p3b.list:last-of-type { border-bottom: 1px solid rgba(128, 128, 128, 0.17); }
.css-fz7p3b.list .content-body { min-height: initial; height: initial; }
@-webkit-keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
@keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
.css-fz7p3b.list .content-body .ant-tag.ant-tag-red { animation: 2s ease 0s infinite normal none running remind; }
.css-fz7p3b.list .content-body .client-status { position: absolute; left: 1rem; top: 2.5rem; opacity: 0.88; z-index: 2; }
.css-fz7p3b.list .content-body .client-status:hover { opacity: 1; }
.css-fz7p3b.list .ant-pro-card-header { align-items: flex-start; }
.css-fz7p3b.list .ant-space-align-center { align-items: flex-start; }
.css-fz7p3b.list .ant-pro-card-actions { display: flex; -webkit-box-align: center; align-items: center; gap: 5px; padding-left: 10px; height: 55px; position: sticky; top: 0px; right: 0px; z-index: 1000; background-color: white; border-left: 1px solid rgba(128, 128, 128, 0.17); }
.css-fz7p3b.show-all { opacity: 1; z-index: 1000; box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px; }
.css-fz7p3b.show-all.default .content-body { height: 320px; }
.css-fz7p3b.show-all .ant-pro-card-actions { box-shadow: none; }
.css-17olr8e { background: rgb(255, 255, 255); overflow: hidden; overscroll-behavior: contain; opacity: 0.88; transition: all 0.15s ease 0s; cursor: pointer; border: 1px solid rgba(128, 128, 128, 0.635); }
.css-17olr8e:hover, .css-17olr8e.show-all, .css-17olr8e.show-actions { box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; }
.css-17olr8e .ant-pro-card-actions { background-color: transparent; }
.css-17olr8e.offline { filter: grayscale(1); opacity: 0.3; }
.css-17olr8e.update { background-color: rgb(235, 255, 235); }
.css-17olr8e .content-body { overflow: auto; min-height: 180px; height: 180px; transition: all 0.1s ease 0s; }
.css-17olr8e .content-body::-webkit-scrollbar { width: 0px; }
.css-17olr8e.list { min-height: initial; flex-direction: row; align-items: flex-start; -webkit-box-pack: justify; justify-content: space-between; border-radius: 0px; border-width: 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-left-style: solid; border-top-color: rgba(128, 128, 128, 0.17); border-right-color: rgba(128, 128, 128, 0.17); border-left-color: rgba(128, 128, 128, 0.17); border-image: initial; border-bottom-style: initial; border-bottom-color: initial; }
.css-17olr8e.list:last-of-type { border-bottom: 1px solid rgba(128, 128, 128, 0.17); }
.css-17olr8e.list .content-body { min-height: initial; height: initial; }
@-webkit-keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
@keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
.css-17olr8e.list .content-body .ant-tag.ant-tag-red { animation: 2s ease 0s infinite normal none running remind; }
.css-17olr8e.list .content-body .client-status { position: absolute; left: 1rem; top: 2.5rem; opacity: 0.88; z-index: 2; }
.css-17olr8e.list .content-body .client-status:hover { opacity: 1; }
.css-17olr8e.list .ant-pro-card-header { align-items: flex-start; }
.css-17olr8e.list .ant-space-align-center { align-items: flex-start; }
.css-17olr8e.list .ant-pro-card-actions { display: flex; -webkit-box-align: center; align-items: center; gap: 5px; padding-left: 10px; height: 55px; position: sticky; top: 0px; right: 0px; z-index: 1000; background-color: white; border-left: 1px solid rgba(128, 128, 128, 0.17); }
.css-17olr8e.show-all { opacity: 1; z-index: 1000; box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px; }
.css-17olr8e.show-all.default .content-body { height: 463px; }
.css-17olr8e.show-all .ant-pro-card-actions { box-shadow: none; }
.css-e9svwj { background: rgb(255, 255, 255); overflow: hidden; overscroll-behavior: contain; opacity: 0.88; transition: all 0.15s ease 0s; cursor: pointer; border: 1px solid rgba(128, 128, 128, 0.635); }
.css-e9svwj:hover, .css-e9svwj.show-all, .css-e9svwj.show-actions { box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; }
.css-e9svwj .ant-pro-card-actions { background-color: transparent; }
.css-e9svwj.offline { filter: grayscale(1); opacity: 0.3; }
.css-e9svwj.update { background-color: rgb(235, 255, 235); }
.css-e9svwj .content-body { overflow: auto; min-height: 180px; height: 180px; transition: all 0.1s ease 0s; }
.css-e9svwj .content-body::-webkit-scrollbar { width: 0px; }
.css-e9svwj.list { min-height: initial; flex-direction: row; align-items: flex-start; -webkit-box-pack: justify; justify-content: space-between; border-radius: 0px; border-width: 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-left-style: solid; border-top-color: rgba(128, 128, 128, 0.17); border-right-color: rgba(128, 128, 128, 0.17); border-left-color: rgba(128, 128, 128, 0.17); border-image: initial; border-bottom-style: initial; border-bottom-color: initial; }
.css-e9svwj.list:last-of-type { border-bottom: 1px solid rgba(128, 128, 128, 0.17); }
.css-e9svwj.list .content-body { min-height: initial; height: initial; }
@-webkit-keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
@keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
.css-e9svwj.list .content-body .ant-tag.ant-tag-red { animation: 2s ease 0s infinite normal none running remind; }
.css-e9svwj.list .content-body .client-status { position: absolute; left: 1rem; top: 2.5rem; opacity: 0.88; z-index: 2; }
.css-e9svwj.list .content-body .client-status:hover { opacity: 1; }
.css-e9svwj.list .ant-pro-card-header { align-items: flex-start; }
.css-e9svwj.list .ant-space-align-center { align-items: flex-start; }
.css-e9svwj.list .ant-pro-card-actions { display: flex; -webkit-box-align: center; align-items: center; gap: 5px; padding-left: 10px; height: 55px; position: sticky; top: 0px; right: 0px; z-index: 1000; background-color: white; border-left: 1px solid rgba(128, 128, 128, 0.17); }
.css-e9svwj.show-all { opacity: 1; z-index: 1000; box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px; }
.css-e9svwj.show-all.default .content-body { height: 180px; }
.css-e9svwj.show-all .ant-pro-card-actions { box-shadow: none; }
.css-j5k290 { background: rgb(255, 255, 255); overflow: hidden; overscroll-behavior: contain; opacity: 0.88; transition: all 0.15s ease 0s; cursor: default; border: 1px solid rgba(128, 128, 128, 0.635); }
.css-j5k290:hover, .css-j5k290.show-all, .css-j5k290.show-actions { box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; }
.css-j5k290 .ant-pro-card-actions { background-color: transparent; }
.css-j5k290.offline { filter: grayscale(1); opacity: 0.3; }
.css-j5k290.update { background-color: rgb(235, 255, 235); }
.css-j5k290 .content-body { overflow: auto; min-height: 180px; height: 180px; transition: all 0.1s ease 0s; }
.css-j5k290 .content-body::-webkit-scrollbar { width: 0px; }
.css-j5k290.list { min-height: initial; flex-direction: row; align-items: flex-start; -webkit-box-pack: justify; justify-content: space-between; border-radius: 0px; border-width: 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-left-style: solid; border-top-color: rgba(128, 128, 128, 0.17); border-right-color: rgba(128, 128, 128, 0.17); border-left-color: rgba(128, 128, 128, 0.17); border-image: initial; border-bottom-style: initial; border-bottom-color: initial; }
.css-j5k290.list:last-of-type { border-bottom: 1px solid rgba(128, 128, 128, 0.17); }
.css-j5k290.list .content-body { min-height: initial; height: initial; }
@-webkit-keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
@keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
.css-j5k290.list .content-body .ant-tag.ant-tag-red { animation: 2s ease 0s infinite normal none running remind; }
.css-j5k290.list .content-body .client-status { position: absolute; left: 1rem; top: 2.5rem; opacity: 0.88; z-index: 2; }
.css-j5k290.list .content-body .client-status:hover { opacity: 1; }
.css-j5k290.list .ant-pro-card-header { align-items: flex-start; }
.css-j5k290.list .ant-space-align-center { align-items: flex-start; }
.css-j5k290.list .ant-pro-card-actions { display: flex; -webkit-box-align: center; align-items: center; gap: 5px; padding-left: 10px; height: 55px; position: sticky; top: 0px; right: 0px; z-index: 1000; background-color: white; border-left: 1px solid rgba(128, 128, 128, 0.17); }
.css-j5k290.show-all { opacity: 1; z-index: 1000; box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px; }
.css-j5k290.show-all.default .content-body { height: 266px; }
.css-j5k290.show-all .ant-pro-card-actions { box-shadow: none; }
.css-1ki1blp { background: rgb(255, 255, 255); overflow: hidden; overscroll-behavior: contain; opacity: 0.88; transition: all 0.15s ease 0s; cursor: default; border: 1px solid rgba(128, 128, 128, 0.635); }
.css-1ki1blp:hover, .css-1ki1blp.show-all, .css-1ki1blp.show-actions { box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; }
.css-1ki1blp .ant-pro-card-actions { background-color: transparent; }
.css-1ki1blp.offline { filter: grayscale(1); opacity: 0.3; }
.css-1ki1blp.update { background-color: rgb(235, 255, 235); }
.css-1ki1blp .content-body { overflow: auto; min-height: 180px; height: 180px; transition: all 0.1s ease 0s; }
.css-1ki1blp .content-body::-webkit-scrollbar { width: 0px; }
.css-1ki1blp.list { min-height: initial; flex-direction: row; align-items: flex-start; -webkit-box-pack: justify; justify-content: space-between; border-radius: 0px; border-width: 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-left-style: solid; border-top-color: rgba(128, 128, 128, 0.17); border-right-color: rgba(128, 128, 128, 0.17); border-left-color: rgba(128, 128, 128, 0.17); border-image: initial; border-bottom-style: initial; border-bottom-color: initial; }
.css-1ki1blp.list:last-of-type { border-bottom: 1px solid rgba(128, 128, 128, 0.17); }
.css-1ki1blp.list .content-body { min-height: initial; height: initial; }
@-webkit-keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
@keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
.css-1ki1blp.list .content-body .ant-tag.ant-tag-red { animation: 2s ease 0s infinite normal none running remind; }
.css-1ki1blp.list .content-body .client-status { position: absolute; left: 1rem; top: 2.5rem; opacity: 0.88; z-index: 2; }
.css-1ki1blp.list .content-body .client-status:hover { opacity: 1; }
.css-1ki1blp.list .ant-pro-card-header { align-items: flex-start; }
.css-1ki1blp.list .ant-space-align-center { align-items: flex-start; }
.css-1ki1blp.list .ant-pro-card-actions { display: flex; -webkit-box-align: center; align-items: center; gap: 5px; padding-left: 10px; height: 55px; position: sticky; top: 0px; right: 0px; z-index: 1000; background-color: white; border-left: 1px solid rgba(128, 128, 128, 0.17); }
.css-1ki1blp.show-all { opacity: 1; z-index: 1000; box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px; }
.css-1ki1blp.show-all.default .content-body { height: 288; } 
.css-1ki1blp.show-all .ant-pro-card-actions { box-shadow: none; }
.css-6cvh0v { background: rgb(255, 255, 255); overflow: hidden; overscroll-behavior: contain; opacity: 0.88; transition: all 0.15s ease 0s; cursor: pointer; border: 1px solid rgba(128, 128, 128, 0.635); }
.css-6cvh0v:hover, .css-6cvh0v.show-all, .css-6cvh0v.show-actions { box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; }
.css-6cvh0v .ant-pro-card-actions { background-color: transparent; }
.css-6cvh0v.offline { filter: grayscale(1); opacity: 0.3; }
.css-6cvh0v.update { background-color: rgb(235, 255, 235); }
.css-6cvh0v .content-body { overflow: auto; min-height: 180px; height: 310px; transition: all 0.1s ease 0s; }
.css-6cvh0v .content-body::-webkit-scrollbar { width: 0px; }
.css-6cvh0v.list { height: 58px; min-height: initial; flex-direction: row; align-items: flex-start; -webkit-box-pack: justify; justify-content: space-between; border-radius: 0px; border-width: 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-left-style: solid; border-top-color: rgba(128, 128, 128, 0.17); border-right-color: rgba(128, 128, 128, 0.17); border-left-color: rgba(128, 128, 128, 0.17); border-image: initial; border-bottom-style: initial; border-bottom-color: initial; }
.css-6cvh0v.list:last-of-type { border-bottom: 1px solid rgba(128, 128, 128, 0.17); }
.css-6cvh0v.list .content-body { min-height: initial; height: initial; }
@-webkit-keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
@keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
.css-6cvh0v.list .content-body .ant-tag.ant-tag-red { animation: 2s ease 0s infinite normal none running remind; }
.css-6cvh0v.list .content-body .client-status { position: absolute; left: 1rem; top: 2.5rem; opacity: 0.88; z-index: 2; }
.css-6cvh0v.list .content-body .client-status:hover { opacity: 1; }
.css-6cvh0v.list .ant-pro-card-header { align-items: flex-start; }
.css-6cvh0v.list .ant-space-align-center { align-items: flex-start; }
.css-6cvh0v.list .ant-pro-card-actions { display: flex; -webkit-box-align: center; align-items: center; gap: 5px; padding-left: 10px; height: 55px; position: sticky; top: 0px; right: 0px; z-index: 1000; background-color: white; border-left: 1px solid rgba(128, 128, 128, 0.17); }
.css-6cvh0v.show-all { opacity: 1; z-index: 1000; box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px; }
.css-6cvh0v.show-all.default .content-body { height: auto; }
.css-6cvh0v.show-all .ant-pro-card-actions { box-shadow: none; }
.css-1s4apql { background: rgb(255, 255, 255); overflow: hidden; overscroll-behavior: contain; opacity: 0.88; transition: all 0.15s ease 0s; cursor: default; border: 1px solid rgba(128, 128, 128, 0.635); }
.css-1s4apql:hover, .css-1s4apql.show-all, .css-1s4apql.show-actions { box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; }
.css-1s4apql .ant-pro-card-actions { background-color: transparent; }
.css-1s4apql.offline { filter: grayscale(1); opacity: 0.3; }
.css-1s4apql.update { background-color: rgb(235, 255, 235); }
.css-1s4apql .content-body { overflow: auto; min-height: 180px; height: 180px; transition: all 0.1s ease 0s; }
.css-1s4apql .content-body::-webkit-scrollbar { width: 0px; }
.css-1s4apql.list { min-height: initial; flex-direction: row; align-items: flex-start; -webkit-box-pack: justify; justify-content: space-between; border-radius: 0px; border-width: 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-left-style: solid; border-top-color: rgba(128, 128, 128, 0.17); border-right-color: rgba(128, 128, 128, 0.17); border-left-color: rgba(128, 128, 128, 0.17); border-image: initial; border-bottom-style: initial; border-bottom-color: initial; }
.css-1s4apql.list:last-of-type { border-bottom: 1px solid rgba(128, 128, 128, 0.17); }
.css-1s4apql.list .content-body { min-height: initial; height: initial; }
@-webkit-keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
@keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
.css-1s4apql.list .content-body .ant-tag.ant-tag-red { animation: 2s ease 0s infinite normal none running remind; }
.css-1s4apql.list .content-body .client-status { position: absolute; left: 1rem; top: 2.5rem; opacity: 0.88; z-index: 2; }
.css-1s4apql.list .content-body .client-status:hover { opacity: 1; }
.css-1s4apql.list .ant-pro-card-header { align-items: flex-start; }
.css-1s4apql.list .ant-space-align-center { align-items: flex-start; }
.css-1s4apql.list .ant-pro-card-actions { display: flex; -webkit-box-align: center; align-items: center; gap: 5px; padding-left: 10px; height: 55px; position: sticky; top: 0px; right: 0px; z-index: 1000; background-color: white; border-left: 1px solid rgba(128, 128, 128, 0.17); }
.css-1s4apql.show-all { opacity: 1; z-index: 1000; box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px; }
.css-1s4apql.show-all.default .content-body { height: 320px; }
.css-1s4apql.show-all .ant-pro-card-actions { box-shadow: none; }
.css-f6o5uq { background: rgb(255, 255, 255); overflow: hidden; overscroll-behavior: contain; opacity: 0.88; transition: all 0.15s ease 0s; cursor: default; border: 1px solid rgba(128, 128, 128, 0.635); }
.css-f6o5uq:hover, .css-f6o5uq.show-all, .css-f6o5uq.show-actions { box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; }
.css-f6o5uq .ant-pro-card-actions { background-color: transparent; }
.css-f6o5uq.offline { filter: grayscale(1); opacity: 0.3; }
.css-f6o5uq.update { background-color: rgb(235, 255, 235); }
.css-f6o5uq .content-body { overflow: auto; min-height: 180px; height: 180px; transition: all 0.1s ease 0s; }
.css-f6o5uq .content-body::-webkit-scrollbar { width: 0px; }
.css-f6o5uq.list { min-height: initial; flex-direction: row; align-items: flex-start; -webkit-box-pack: justify; justify-content: space-between; border-radius: 0px; border-width: 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-left-style: solid; border-top-color: rgba(128, 128, 128, 0.17); border-right-color: rgba(128, 128, 128, 0.17); border-left-color: rgba(128, 128, 128, 0.17); border-image: initial; border-bottom-style: initial; border-bottom-color: initial; }
.css-f6o5uq.list:last-of-type { border-bottom: 1px solid rgba(128, 128, 128, 0.17); }
.css-f6o5uq.list .content-body { min-height: initial; height: initial; }
@-webkit-keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
@keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
.css-f6o5uq.list .content-body .ant-tag.ant-tag-red { animation: 2s ease 0s infinite normal none running remind; }
.css-f6o5uq.list .content-body .client-status { position: absolute; left: 1rem; top: 2.5rem; opacity: 0.88; z-index: 2; }
.css-f6o5uq.list .content-body .client-status:hover { opacity: 1; }
.css-f6o5uq.list .ant-pro-card-header { align-items: flex-start; }
.css-f6o5uq.list .ant-space-align-center { align-items: flex-start; }
.css-f6o5uq.list .ant-pro-card-actions { display: flex; -webkit-box-align: center; align-items: center; gap: 5px; padding-left: 10px; height: 55px; position: sticky; top: 0px; right: 0px; z-index: 1000; background-color: white; border-left: 1px solid rgba(128, 128, 128, 0.17); }
.css-f6o5uq.show-all { opacity: 1; z-index: 1000; box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px; }
.css-f6o5uq.show-all.default .content-body { height: 463px; }
.css-f6o5uq.show-all .ant-pro-card-actions { box-shadow: none; }
.css-qjsf0o { background: rgb(255, 255, 255); overflow: hidden; overscroll-behavior: contain; opacity: 0.88; transition: all 0.15s ease 0s; cursor: default; border: 1px solid rgba(128, 128, 128, 0.635); }
.css-qjsf0o:hover, .css-qjsf0o.show-all, .css-qjsf0o.show-actions { box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; }
.css-qjsf0o .ant-pro-card-actions { background-color: transparent; }
.css-qjsf0o.offline { filter: grayscale(1); opacity: 0.3; }
.css-qjsf0o.update { background-color: rgb(235, 255, 235); }
.css-qjsf0o .content-body { overflow: auto; min-height: 180px; height: 180px; transition: all 0.1s ease 0s; }
.css-qjsf0o .content-body::-webkit-scrollbar { width: 0px; }
.css-qjsf0o.list { min-height: initial; flex-direction: row; align-items: flex-start; -webkit-box-pack: justify; justify-content: space-between; border-radius: 0px; border-width: 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-left-style: solid; border-top-color: rgba(128, 128, 128, 0.17); border-right-color: rgba(128, 128, 128, 0.17); border-left-color: rgba(128, 128, 128, 0.17); border-image: initial; border-bottom-style: initial; border-bottom-color: initial; }
.css-qjsf0o.list:last-of-type { border-bottom: 1px solid rgba(128, 128, 128, 0.17); }
.css-qjsf0o.list .content-body { min-height: initial; height: initial; }
@-webkit-keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
@keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
.css-qjsf0o.list .content-body .ant-tag.ant-tag-red { animation: 2s ease 0s infinite normal none running remind; }
.css-qjsf0o.list .content-body .client-status { position: absolute; left: 1rem; top: 2.5rem; opacity: 0.88; z-index: 2; }
.css-qjsf0o.list .content-body .client-status:hover { opacity: 1; }
.css-qjsf0o.list .ant-pro-card-header { align-items: flex-start; }
.css-qjsf0o.list .ant-space-align-center { align-items: flex-start; }
.css-qjsf0o.list .ant-pro-card-actions { display: flex; -webkit-box-align: center; align-items: center; gap: 5px; padding-left: 10px; height: 55px; position: sticky; top: 0px; right: 0px; z-index: 1000; background-color: white; border-left: 1px solid rgba(128, 128, 128, 0.17); }
.css-qjsf0o.show-all { opacity: 1; z-index: 1000; box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px; }
.css-qjsf0o.show-all.default .content-body { height: 342px; }
.css-qjsf0o.show-all .ant-pro-card-actions { box-shadow: none; }
.css-13kboej { background: rgb(255, 255, 255); overflow: hidden; overscroll-behavior: contain; opacity: 0.88; transition: all 0.15s ease 0s; cursor: default; border: 1px solid rgba(128, 128, 128, 0.635); }
.css-13kboej:hover, .css-13kboej.show-all, .css-13kboej.show-actions { box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; }
.css-13kboej .ant-pro-card-actions { background-color: transparent; }
.css-13kboej.offline { filter: grayscale(1); opacity: 0.3; }
.css-13kboej.update { background-color: rgb(235, 255, 235); }
.css-13kboej .content-body { overflow: auto; min-height: 180px; height: 180px; transition: all 0.1s ease 0s; }
.css-13kboej .content-body::-webkit-scrollbar { width: 0px; }
.css-13kboej.list { min-height: initial; flex-direction: row; align-items: flex-start; -webkit-box-pack: justify; justify-content: space-between; border-radius: 0px; border-width: 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-left-style: solid; border-top-color: rgba(128, 128, 128, 0.17); border-right-color: rgba(128, 128, 128, 0.17); border-left-color: rgba(128, 128, 128, 0.17); border-image: initial; border-bottom-style: initial; border-bottom-color: initial; }
.css-13kboej.list:last-of-type { border-bottom: 1px solid rgba(128, 128, 128, 0.17); }
.css-13kboej.list .content-body { min-height: initial; height: initial; }
@-webkit-keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
@keyframes remind { 
  0%, 100% { transform: translate(-10px); }
  50% { transform: translate(10px); }
}
.css-13kboej.list .content-body .ant-tag.ant-tag-red { animation: 2s ease 0s infinite normal none running remind; }
.css-13kboej.list .content-body .client-status { position: absolute; left: 1rem; top: 2.5rem; opacity: 0.88; z-index: 2; }
.css-13kboej.list .content-body .client-status:hover { opacity: 1; }
.css-13kboej.list .ant-pro-card-header { align-items: flex-start; }
.css-13kboej.list .ant-space-align-center { align-items: flex-start; }
.css-13kboej.list .ant-pro-card-actions { display: flex; -webkit-box-align: center; align-items: center; gap: 5px; padding-left: 10px; height: 55px; position: sticky; top: 0px; right: 0px; z-index: 1000; background-color: white; border-left: 1px solid rgba(128, 128, 128, 0.17); }
.css-13kboej.show-all { opacity: 1; z-index: 1000; box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px; }
.css-13kboej.show-all.default .content-body { height: 200px; }
.css-13kboej.show-all .ant-pro-card-actions { box-shadow: none; }</style><style data-emotion="css" data-s="">.css-d58pae { position: absolute; bottom: 0px; pointer-events: none; user-select: none; width: 300%; white-space: pre-wrap; }
.css-1a4hufg { padding: 5px; width: 100%; }
.css-1a4hufg .text-ellipsis { white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
.css-1a4hufg div.item { display: flex; padding: 5px 3px; transition: all 0.3s ease 0s; border-radius: 5px; }
.css-1a4hufg div.item:hover { background-color: rgba(17, 17, 26, 0.05); box-shadow: rgba(17, 17, 26, 0.05) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 0px 8px; }
.css-1a4hufg .key { min-width: 100px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; }
.css-1a4hufg .value { width: max-content; max-width: 300px; }.content-body {
    margin-left: 0rem;
}.content-body {
    padding-top: 0rem!important;
}





.hoverable-element:hover + #hidden-div {
  display: block;
}


[class^="ant-popover"], [class*=" ant-popover"] {
    font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';
    font-size: 14px;
    box-sizing: border-box;
}
.ant-popover-placement-leftTop, .ant-popover-placement-left, .ant-popover-placement-leftBottom {
    padding-right: 12px;
}
.ant-popover {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    color: rgba(0, 0, 0, 0.88);
    font-size: 14px;
    line-height: 1.5714285714285714;
    list-style: none;
    font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1030;
    font-weight: normal;
    white-space: normal;
    text-align: start;
    cursor: auto;
    user-select: text;
    --antd-arrow-background-color: #ffffff;
}
[class^="ant-popover"], [class*=" ant-popover"] {
    font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';
    font-size: 14px;
    box-sizing: border-box;
}
.css-rhx78i {
    pointer-events: none;
    user-select: none;
    background: url(bg.png) 100% center no-repeat;
    min-width: 450px;
    aspect-ratio: 2 / 1.2;
    border-radius: 5px;
    position: relative;
    font-family: "宋体", "Source Code Pro", serif;
    color: white;
    white-space: nowrap;
    overflow: hidden;
    z-index: 2;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
}
.css-rhx78i .header-s {
    padding: 25px 20px 0px;
    display: flex;
    -moz-box-pack: justify;
    justify-content: space-between;
    -moz-box-align: center;
    align-items: center;
}
.css-rhx78i .header-s .chip {
    width: 80px;
    height: 60px;
}
.css-rhx78i .header-s .logo {
    width: 80px;
    height: 50px;
}
.css-rhx78i .cardNumber {
    font-size: 33px;
    text-align: center;
    padding-top: 6%;
    font-weight: bold;
    letter-spacing: 1.5px;
    text-shadow: rgba(255, 255, 255, 0.2) 2px 8px 6px, rgba(255, 255, 255, 0.6) 0px -5px 35px;
    margin: 0px 10px;
}
.css-rhx78i .cardInfo {
    display: flex;
    margin-top: 5%;
    justify-content: space-around;
}
.css-rhx78i .cardInfo .item .title {
    opacity: 0.8;
}
.css-rhx78i .cardInfo .item .value {
    font-weight: bold;
    font-size: 20px;
}
.ant-divider-horizontal {
    display: flex;
    clear: both;
    width: 100%;
    min-width: 100%;
    margin: 24px 0;
}
.ant-divider {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    color: rgba(0, 0, 0, 0.88);
    font-size: 14px;
    line-height: 1.5714285714285714;
    list-style: none;
    font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';
    border-block-start: 1px solid rgba(5, 5, 5, 0.06);
}
[class^="ant-divider"], [class*=" ant-divider"] {
    font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';
    font-size: 14px;
    box-sizing: border-box;
}
.ant-tag, .ant-tag a, .ant-tag a:hover {
    color: rgba(0, 0, 0, 0.88);
}
.ant-tag {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    color: rgba(0, 0, 0, 0.88);
    font-size: 12px;
    line-height: 20px;
    list-style: none;
    font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';
    display: inline-block;
    height: auto;
    margin-inline-end: 8px;
    padding-inline: 7px;
    white-space: nowrap;
    background: rgba(0, 0, 0, 0.02);
    border: 1px solid #d9d9d9;
    border-radius: 4px;
    opacity: 1;
    transition: all 0.2s;
    text-align: start;
}
[class^="ant-tag"], [class*=" ant-tag"] {
    font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';
    font-size: 14px;
    box-sizing: border-box;
}
p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}

.ant-switch .ant-switch-handle::before {
    position: absolute;
    top: 0;
    inset-inline-end: 0;
    bottom: 0;
    inset-inline-start: 0;
    background-color: #fff;
    border-radius: 9px;
    box-shadow: 0 2px 4px 0 rgba(0, 35, 11, 0.2);
    transition: all 0.2s ease-in-out;
    content: "";
}

.ant-switch .ant-switch-handle {
    position: absolute;
    top: 2px;
    inset-inline-start: 2px;
    width: 18px;
    height: 18px;
    transition: all 0.2s ease-in-out;
}

.ant-switch {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    color: rgba(0, 0, 0, 0.88);
    font-size: 14px;
    line-height: 22px;
    list-style: none;
    font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';
    position: relative;
    display: inline-block;
    min-width: 44px;
    height: 22px;
    vertical-align: middle;
    background: rgba(0, 0, 0, 0.25);
    border: 0;
    border-radius: 100px;
    cursor: pointer;
    transition: all 0.2s;
    user-select: none;
}

.ant-form-item .ant-form-item-control-input-content {
    flex: auto;
    max-width: 100%;
}

.ant-form-item .ant-form-item-control-input {
    position: relative;
    display: flex;
    align-items: center;
    min-height: 32px;
}

.ant-switch .ant-switch-inner {
    display: block;
    overflow: hidden;
    border-radius: 100px;
    height: 100%;
}

.ant-switch .ant-switch-inner .ant-switch-inner-checked {
    margin-inline-start: calc(9px - 100% + 22px);
    margin-inline-end: calc(24px + 100% - 22px);
}
.ant-switch .ant-switch-inner .ant-switch-inner-checked, .ant-switch .ant-switch-inner .ant-switch-inner-unchecked {
    display: block;
    color: #fff;
    font-size: 12px;
    transition: margin-inline-start 0.2s ease-in-out,margin-inline-end 0.2s ease-in-out;
    pointer-events: none;
}

.ant-switch .ant-switch-inner .ant-switch-inner-unchecked {
    margin-top: -22px;
    margin-inline-start: 24px;
    margin-inline-end: 9px;
}

.ant-switch .ant-switch-inner .ant-switch-inner-checked, .ant-switch .ant-switch-inner .ant-switch-inner-unchecked {
    display: block;
    color: #fff;
    font-size: 12px;
    transition: margin-inline-start 0.2s ease-in-out,margin-inline-end 0.2s ease-in-out;
    pointer-events: none;
}


</style>
	
	
	    <style data-rc-order="prependQueue" data-css-hash="1y25h9v" data-token-hash="160jlb5">
            [class^="ant-switch"],[class*=" ant-switch"] {
                font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';
                font-size: 14px;
                box-sizing: border-box;
            }

            [class^="ant-switch"]::before,[class*=" ant-switch"]::before,[class^="ant-switch"]::after,[class*=" ant-switch"]::after {
                box-sizing: border-box;
            }

            [class^="ant-switch"] [class^="ant-switch"],[class*=" ant-switch"] [class^="ant-switch"],[class^="ant-switch"] [class*=" ant-switch"],[class*=" ant-switch"] [class*=" ant-switch"] {
                box-sizing: border-box;
            }

            [class^="ant-switch"] [class^="ant-switch"]::before,[class*=" ant-switch"] [class^="ant-switch"]::before,[class^="ant-switch"] [class*=" ant-switch"]::before,[class*=" ant-switch"] [class*=" ant-switch"]::before,[class^="ant-switch"] [class^="ant-switch"]::after,[class*=" ant-switch"] [class^="ant-switch"]::after,[class^="ant-switch"] [class*=" ant-switch"]::after,[class*=" ant-switch"] [class*=" ant-switch"]::after {
                box-sizing: border-box;
            }

            .ant-switch {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
                color: rgba(0, 0, 0, 0.88);
                font-size: 14px;
                line-height: 22px;
                list-style: none;
                font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';
                position: relative;
                display: inline-block;
                min-width: 44px;
                height: 22px;
                vertical-align: middle;
                background: rgba(0, 0, 0, 0.25);
                border: 0;
                border-radius: 100px;
                cursor: pointer;
                transition: all 0.2s;
                user-select: none;
            }

            .ant-switch:hover:not(.ant-switch-disabled) {
                background: rgba(0, 0, 0, 0.45);
            }

            .ant-switch:focus-visible {
                outline: 4px solid #91caff;
                outline-offset: 1px;
                transition: outline-offset 0s,outline 0s;
            }

            .ant-switch.ant-switch-checked {
                background: #1677ff;
            }

            .ant-switch.ant-switch-checked:hover:not(.ant-switch-disabled) {
                background: #4096ff;
            }

            .ant-switch.ant-switch-loading,.ant-switch.ant-switch-disabled {
                cursor: not-allowed;
                opacity: 0.65;
            }

            .ant-switch.ant-switch-loading *,.ant-switch.ant-switch-disabled * {
                box-shadow: none;
                cursor: not-allowed;
            }

            .ant-switch.ant-switch-rtl {
                direction: rtl;
            }

            .ant-switch .ant-switch-inner {
                display: block;
                overflow: hidden;
                border-radius: 100px;
                height: 100%;
            }

            .ant-switch .ant-switch-inner .ant-switch-inner-checked,.ant-switch .ant-switch-inner .ant-switch-inner-unchecked {
                display: block;
                color: #fff;
                font-size: 12px;
                transition: margin-inline-start 0.2s ease-in-out,margin-inline-end 0.2s ease-in-out;
                pointer-events: none;
            }

            .ant-switch .ant-switch-inner .ant-switch-inner-checked {
                margin-inline-start:calc(9px - 100% + 22px);margin-inline-end:calc(24px + 100% - 22px);}

            .ant-switch .ant-switch-inner .ant-switch-inner-unchecked {
                margin-top: -22px;
                margin-inline-start:24px;margin-inline-end:9px;}

            .ant-switch.ant-switch-checked .ant-switch-inner .ant-switch-inner-checked {
                margin-inline-start:9px;margin-inline-end:24px;}

            .ant-switch.ant-switch-checked .ant-switch-inner .ant-switch-inner-unchecked {
                margin-inline-start:calc(24px + 100% - 22px);margin-inline-end:calc(9px - 100% + 22px);}

            .ant-switch:not(.ant-switch-disabled):active:not(.ant-switch-checked) .ant-switch-inner .ant-switch-inner-unchecked {
                margin-inline-start:28px;margin-inline-end:5px;}

            .ant-switch:not(.ant-switch-disabled):active.ant-switch-checked .ant-switch-inner .ant-switch-inner-checked {
                margin-inline-start:5px;margin-inline-end:28px;}

            .ant-switch .ant-switch-handle {
                position: absolute;
                top: 2px;
                inset-inline-start: 2px;
                width: 18px;
                height: 18px;
                transition: all 0.2s ease-in-out;
            }

            .ant-switch .ant-switch-handle::before {
                position: absolute;
                top: 0;
                inset-inline-end: 0;
                bottom: 0;
                inset-inline-start: 0;
                background-color: #fff;
                border-radius: 9px;
                box-shadow: 0 2px 4px 0 rgba(0, 35, 11, 0.2);
                transition: all 0.2s ease-in-out;
                content: "";
            }

            .ant-switch.ant-switch-checked .ant-switch-handle {
                inset-inline-start: calc(100% - 20px);
            }

            .ant-switch:not(.ant-switch-disabled):active .ant-switch-handle::before {
                inset-inline-end: -30%;
                inset-inline-start: 0;
            }

            .ant-switch:not(.ant-switch-disabled):active.ant-switch-checked .ant-switch-handle::before {
                inset-inline-end: 0;
                inset-inline-start: -30%;
            }

            .ant-switch .ant-switch-loading-icon.anticon {
                position: relative;
                top: 2px;
                color: rgba(0, 0, 0, 0.65);
                vertical-align: top;
            }

            .ant-switch.ant-switch-checked .ant-switch-loading-icon {
                color: #1677ff;
            }

            .ant-switch.ant-switch-small {
                min-width: 28px;
                height: 16px;
                line-height: 16px;
            }

            .ant-switch.ant-switch-small .ant-switch-inner .ant-switch-inner-checked {
                margin-inline-start:calc(6px - 100% + 16px);margin-inline-end:calc(18px + 100% - 16px);}

            .ant-switch.ant-switch-small .ant-switch-inner .ant-switch-inner-unchecked {
                margin-top: -16px;
                margin-inline-start:18px;margin-inline-end:6px;}

            .ant-switch.ant-switch-small .ant-switch-handle {
                width: 12px;
                height: 12px;
            }

            .ant-switch.ant-switch-small .ant-switch-loading-icon {
                top: 1.5px;
                font-size: 9px;
            }

            .ant-switch.ant-switch-small.ant-switch-checked .ant-switch-inner .ant-switch-inner-checked {
                margin-inline-start:6px;margin-inline-end:18px;}

            .ant-switch.ant-switch-small.ant-switch-checked .ant-switch-inner .ant-switch-inner-unchecked {
                margin-inline-start:calc(18px + 100% - 16px);margin-inline-end:calc(6px - 100% + 16px);}

            .ant-switch.ant-switch-small.ant-switch-checked .ant-switch-handle {
                inset-inline-start: calc(100% - 14px);
            }

            .ant-switch.ant-switch-small:not(.ant-switch-disabled):active:not(.ant-switch-checked) .ant-switch-inner .ant-switch-inner-unchecked {
                margin-inline-start:20px;margin-inline-end:4px;}

            .ant-switch.ant-switch-small:not(.ant-switch-disabled):active.ant-switch-checked .ant-switch-inner .ant-switch-inner-checked {
                margin-inline-start:4px;margin-inline-end:20px;}
        :where(.css-sk7ap8).ant-input:placeholder-shown {
    text-overflow: ellipsis;
}
:where(.css-sk7ap8).ant-input {
    box-sizing: border-box;
    margin: 0;
    padding: 4px 11px;
    color: rgba(0, 0, 0, 0.88);
    font-size: 14px;
    line-height: 1.5714285714285714;
    list-style: none;
    font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';
    position: relative;
    display: inline-block;
    width: 100%;
    min-width: 0;
    background-color: #ffffff;
    background-image: none;
    border-width: 1px;
    border-style: solid;
    border-color: #d9d9d9;
    border-radius: 6px;
    transition: all 0.2s;
}



.box:hover:before {
    left: -50%;
    transform: skewX(-5deg);
}


.box .content {
    position: absolute;
    top: 15px;
    left: 15px;
    right: 15px;
    bottom: 15px;
    border: 1px solid #f0a591;
    padding: 20px;
    text-align: center;
    box-shadow: 0 5px 10px rgba(9, 0, 0, 0.5);
    color: white;
}

.box .content a {
    color: white;
}

.box .ant-tag {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: block;
    box-sizing: border-box;

}
/*
.box .ant-tag:nth-child(1) {
    transform: rotate(0deg);
}

.box .ant-tag:nth-child(2) {
    transform: rotate(90deg);
}

.box .ant-tag:nth-child(3) {
    transform: rotate(180deg);
}

.box .ant-tag:nth-child(4) {
    transform: rotate(270deg);
}
*/
.css-yvihor.list {
    width: max-content;
    position: absolute;
    top: -2rem;
    left: 0px;
    z-index: 10;
}
.box .ant-tag:before {
    content: '';
    z-index: -1;
    position: absolute;
    width: 100%;
    left: 0px;
    height: -webkit-fill-available;
    background: #00ff2e;
    animation: animate 1.5s cubic-bezier(0.45, 0.05, 0.55, 0.95) infinite;
}

@keyframes animate {
    0% {
        transform: scaleX(0);
        transform-origin: left;
    }

    50% {
        transform: scaleX(1);
        transform-origin: left;
    }

    50.1% {
        transform: scaleX(1);
        transform-origin: right;

    }

    100% {
        transform: scaleX(0);
        transform-origin: right;

    }


}



.dropdown-menu.dropdown-menu-end{
    
    inset: auto -40px 0px auto !important;
}


.dropdown-menu .dropdown-item.green {
    font-size: 0.875rem;
    color: #43ed1d;
    padding: 0.5rem 1.25rem;
}


.dropdown-menu .dropdown-item.red {
    font-size: 0.875rem;
    color: #ce1919;
    padding: 0.5rem 1.25rem;
}


[class^="ant-radio"] [class^="ant-radio"], [class*=" ant-radio"] [class^="ant-radio"], [class^="ant-radio"] [class*=" ant-radio"], [class*=" ant-radio"] [class*=" ant-radio"] {
    box-sizing: border-box;
}

[class^="ant-radio"], [class*=" ant-radio"] {
    font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';
    font-size: 14px;
    box-sizing: border-box;
}

.ant-radio-button-wrapper .ant-radio-inner, .ant-radio-button-wrapper input[type='checkbox'], .ant-radio-button-wrapper input[type='radio'] {
    width: 0;
    height: 0;
    opacity: 0;
    pointer-events: none;
}



.ant-form input[type="radio"], .ant-form input[type="checkbox"] {
    line-height: normal;
}

[class^="ant-radio"] [class^="ant-radio"], [class*=" ant-radio"] [class^="ant-radio"], [class^="ant-radio"] [class*=" ant-radio"], [class*=" ant-radio"] [class*=" ant-radio"] {
    box-sizing: border-box;
}


.ant-radio-button-wrapper >.ant-radio-button {
    position: absolute;
    inset-block-start: 0;
    inset-inline-start: 0;
    z-index: -1;
    width: 100%;
    height: 100%;
}


.ant-radio-group-small .ant-radio-button-wrapper:first-child {
    border-start-start-radius: 4px;
    border-end-start-radius: 4px;
}

.ant-radio-group {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    color: rgba(0, 0, 0, 0.88);
    font-size: 0;
    line-height: 1.5714285714285714;
    list-style: none;
    font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';
    display: inline-block;
}

.ant-form-item .ant-form-item-control-input-content {
    flex: auto;
    max-width: 100%;
}



.ant-form-item .ant-form-item-control-input {
    position: relative;
    display: flex;
    align-items: center;
    min-height: 32px;
}

.ant-radio-group-small .ant-radio-button-wrapper:last-child {
    border-start-end-radius: 4px;
    border-end-end-radius: 4px;
}

.ant-radio-button-wrapper-checked:not(.ant-radio-button-wrapper-disabled)::before {
    background-color: #1677ff;
}


.ant-radio-button-wrapper:not(:first-child)::before {
    position: absolute;
    inset-block-start: -1px;
    inset-inline-start: -1px;
    display: block;
    box-sizing: content-box;
    width: 1px;
    height: 100%;
    padding-block: 1px;
    padding-inline: 0;
    background-color: #d9d9d9;
    transition: background-color 0.3s;
    content: "";
}

.ant-pro-form * {
    box-sizing: border-box;
}

.ant-radio-button-wrapper-checked:not(.ant-radio-button-wrapper-disabled) {
    z-index: 1;
    color: #1677ff;
    background: #ffffff;
    border-color: #1677ff;
}

.ant-form label {
    font-size: 14px;
}
.ant-radio-button-wrapper-checked:not(.ant-radio-button-wrapper-disabled) {
    z-index: 1;
    color: #1677ff;
    background: #ffffff;
    border-color: #1677ff;
}
.ant-radio-group-small .ant-radio-button-wrapper {
    height: 24px;
    padding-inline: 7px;
    padding-block: 0;
    line-height: 22px;
}


.ant-radio-group-small .ant-radio-button-wrapper {
    height: 24px;
    padding-inline: 7px;
    padding-block: 0;
    line-height: 22px;
}
.ant-radio-button-wrapper:first-child {
    border-inline-start: 1px solid #d9d9d9;
    border-start-start-radius: 6px;
    border-end-start-radius: 6px;
}
[class^="ant-radio"] [class^="ant-radio"], [class*=" ant-radio"] [class^="ant-radio"], [class^="ant-radio"] [class*=" ant-radio"], [class*=" ant-radio"] [class*=" ant-radio"] {
    box-sizing: border-box;
}
.ant-form label {
    font-size: 14px;
}
.ant-radio-button-wrapper {
    position: relative;
    display: inline-block;
    height: 32px;
    margin: 0;
    padding-inline: 15px;
    padding-block: 0;
    color: rgba(0, 0, 0, 0.88);
    font-size: 14px;
    line-height: 30px;
    background: #ffffff;
    border: 1px solid #d9d9d9;
    border-block-start-width: 1.02px;
    border-inline-start-width: 0;
    border-inline-end-width: 1px;
    cursor: pointer;
    transition: color 0.2s,background 0.2s,border-color 0.2s,box-shadow 0.2s;
}
[class^="ant-radio"], [class*=" ant-radio"] {
    font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';
    font-size: 14px;
    box-sizing: border-box;
}


.ant-pro .ant-pro-layout .ant-pro-layout-content .ant-pro-page-container-children-content * {
    box-sizing: border-box;
}


.css-rhx78i .header {
    padding: 25px 20px 0px;
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    align-items: center;
}
.css-rhx78i .header .chip {
    width: 80px;
    height: 60px;
}


.css-rhx78i .header .logo {
    width: 80px;
    height: 50px;
}


.ant-drawer-left>.ant-drawer-content-wrapper {
    top: 0;
    bottom: 0;
    left: 0;
    box-shadow: 6px 0 16px 0 rgba(0, 0, 0, 0.08), 3px 0 6px -4px rgba(0, 0, 0, 0.12), 9px 0 28px 8px rgba(0, 0, 0, 0.05);
}
.ant-drawer .ant-drawer-content-wrapper {
    position: absolute;
    z-index: 1000;
    transition: all 0.3s;
}

.huise{
    opacity: 0.5;
}

.ant-pro .ant-pro-layout .ant-pro-layout-content * {
    box-sizing: border-box;
}
.css-yvihor {
    margin: 5px 0px;
    width: 90%;
    min-width: 200px;
    box-shadow: red 0px 0px 0px 0px;
    border-radius: 5px;
    background: white;
}
.ant-select-single {
    font-size: 14px;
}

.ant-select-show-search.ant-select:not(.ant-select-customize-input) .ant-select-selector input {
    cursor: auto;
    color: inherit;
}
.ant-select-single:not(.ant-select-customize-input) .ant-select-selector .ant-select-selection-search-input {
    height: 30px;
}
.ant-select:not(.ant-select-customize-input) .ant-select-selector .ant-select-selection-search-input {
    margin: 0;
    padding: 0;
    background: transparent;
    outline: none;
    appearance: none;
    border-radius: 5px;
    border-color: red;
}

.items {
  display: flex;
  flex-direction: column;
}

.items div {
  margin-bottom: 5px; /* 调整垂直间距 */
}
.items .title{
    font-size: 20px;
}
.items .value{
    font-size: 20px;
}

	</style>
	
	
	
	
	
	
	
	
	
	
	
	
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
		<div class="loader"></div>
	  </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper" style="display:flex;">
	
        <!--**********************************
            Nav header start
        ***********************************-->
         <div class="nav-header">
            <a href="index.php" class="brand-logo">
                
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" class="logo-abbr" width="60" height="60" viewBox="0 0 338 338" enable-background="new 0 0 338 338" xml:space="preserve">  <image id="image0" width="338" height="338" x="0" y="0"
    xlink:href="logo-panda.png" />
</svg>
                
                
              
				
				<div class="brand-title">
					<h1 class="mb-0">Panda 3.5</h1>
				</div> 

            </a>
            
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		<div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="chat" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Chat List</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
								<ul class="contacts">
									<li class="name-first-letter">A</li>
									<li class="active dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Archie Parker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Alfie Mason</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">B</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Bashid Samim</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Breddie Ronan</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Ceorge Carson</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">D</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Darry Parker</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Denry Hunter</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">J</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Jack Ronan</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Jacob Tucker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>James Logan</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Joshua Weston</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">O</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oliver Acker</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oscar Weston</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card chat dz-chat-history-box d-none">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);" class="dz-chat-history-back">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
								</a>
								<div>
									<h6 class="mb-1">Chat with Khelesh</h6>
									<p class="mb-0 text-success">Online</p>
								</div>							
								<div class="dropdown">
									<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"/>
												<circle fill="#000000" cx="5" cy="12" r="2"/>
												<circle fill="#000000" cx="12" cy="12" r="2"/>
												<circle fill="#000000" cx="19" cy="12" r="2"/>
											</g>
										</svg>
									</a>
									<ul class="dropdown-menu dropdown-menu-end">
										<li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
										<li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to btn-close friends</li>
										<li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
										<li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
									</ul>
								</div>
							</div>
							<div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<div class="card-footer type_msg">
								<div class="input-group">
									<textarea class="form-control" placeholder="Type your message..."></textarea>
									<div class="input-group-append">
										<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="alerts" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notications</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
								<ul class="contacts">
									<li class="name-first-letter">SEVER STATUS</li>
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">KK</div>
											<div class="user_info">
												<span>David Nester Birthday</span>
												<p class="text-primary">Today</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SOCIAL</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont success">RU</div>
											<div class="user_info">
												<span>Perfection Simplified</span>
												<p>Jame Smith commented on your status</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SEVER STATUS</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">AU</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont info">MO</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>
					<div class="tab-pane fade" id="notes">
						<div class="card mb-sm-3 mb-md-0 note_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notes</h6>
									<p class="mb-0">Add New Nots</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
								<ul class="contacts">
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>New order placed..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Youtube, a video-sharing website..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>john just buy your product..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Chat box End
        ***********************************-->
		
		<!-- sidebarfix -->
		
		
		
		<!--**********************************
            Header start
        ***********************************-->
		
			<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
		<div class="deznav">
			<div class="deznav-scroll">	
				<ul class="metismenu" id="menu">
					<li>
					    <a href="./index.php" aria-expanded="false">
						<div class="menu-icon">
							<svg id="icon-home" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M16.3077 20.8538H5.69266C3.181 20.8538 1.146 18.8097 1.146 16.298V9.50548C1.146 8.25882 1.916 6.69132 2.906 5.92132L7.84683 2.07132C9.33183 0.916317 11.706 0.861317 13.246 1.94298L18.911 5.91215C20.0018 6.67298 20.8543 8.30465 20.8543 9.63382V16.3072C20.8543 18.8097 18.8193 20.8538 16.3077 20.8538ZM8.69016 3.15298L3.74933 7.00298C3.0985 7.51632 2.521 8.68048 2.521 9.50548V16.298C2.521 18.0488 3.94183 19.4788 5.69266 19.4788H16.3077C18.0585 19.4788 19.4793 18.058 19.4793 16.3072V9.63382C19.4793 8.75382 18.8468 7.53465 18.1227 7.03965L12.4577 3.07048C11.4127 2.33715 9.68933 2.37382 8.69016 3.15298Z" fill="#9C99FF"/>
								<path d="M11 17.1875C10.6242 17.1875 10.3125 16.8758 10.3125 16.5V13.75C10.3125 13.3742 10.6242 13.0625 11 13.0625C11.3758 13.0625 11.6875 13.3742 11.6875 13.75V16.5C11.6875 16.8758 11.3758 17.1875 11 17.1875Z" fill="#9C99FF"/>
							</svg>
						</div>
							<span class="nav-text">首页</span>
						</a>
						
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg id="icon-table" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M13.7502 11.8711H7.3335C6.95766 11.8711 6.646 11.5594 6.646 11.1836C6.646 10.8078 6.95766 10.4961 7.3335 10.4961H13.7502C14.126 10.4961 14.4377 10.8078 14.4377 11.1836C14.4377 11.5594 14.126 11.8711 13.7502 11.8711Z" fill="#9C99FF"></path>
								<path d="M11.3485 15.5371H7.3335C6.95766 15.5371 6.646 15.2254 6.646 14.8496C6.646 14.4738 6.95766 14.1621 7.3335 14.1621H11.3485C11.7243 14.1621 12.036 14.4738 12.036 14.8496C12.036 15.2254 11.7243 15.5371 11.3485 15.5371Z" fill="#9C99FF"></path>
								<path d="M12.8335 6.18717H9.16683C8.28683 6.18717 6.646 6.18717 6.646 3.66634C6.646 1.14551 8.28683 1.14551 9.16683 1.14551H12.8335C13.7135 1.14551 15.3543 1.14551 15.3543 3.66634C15.3543 4.54634 15.3543 6.18717 12.8335 6.18717ZM9.16683 2.52051C8.25933 2.52051 8.021 2.52051 8.021 3.66634C8.021 4.81217 8.25933 4.81217 9.16683 4.81217H12.8335C13.9793 4.81217 13.9793 4.57384 13.9793 3.66634C13.9793 2.52051 13.741 2.52051 12.8335 2.52051H9.16683Z" fill="#9C99FF"></path>
								<path d="M13.75 20.8545H8.25C3.09833 20.8545 2.0625 18.4895 2.0625 14.6671V9.16705C2.0625 4.98705 3.575 3.19955 7.29667 3.00705C7.66333 2.98872 8.0025 3.27289 8.02083 3.65789C8.03917 4.04288 7.74583 4.35455 7.37 4.37288C4.76667 4.51955 3.4375 5.29872 3.4375 9.16705V14.6671C3.4375 18.0587 4.10667 19.4795 8.25 19.4795H13.75C17.8933 19.4795 18.5625 18.0587 18.5625 14.6671V9.16705C18.5625 5.29872 17.2333 4.51955 14.63 4.37288C14.2542 4.35455 13.9608 4.02455 13.9792 3.64872C13.9975 3.27289 14.3275 2.97955 14.7033 2.99789C18.425 3.19955 19.9375 4.98705 19.9375 9.15788V14.6579C19.9375 18.4895 18.9017 20.8545 13.75 20.8545Z" fill="#9C99FF"></path>
							</svg>
						</div>
							<span class="nav-text">订单管理</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="pending.php">控制台</a></li>
							<li><a href="Dataoverview.php">数据总览</a></li>
						</ul>
					</li>
					
					<li id="gongnengshezhi"><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg  id="icon-home1" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M13.7502 20.8538H8.25016C3.27266 20.8538 1.146 18.7272 1.146 13.7497V8.24967C1.146 3.27217 3.27266 1.14551 8.25016 1.14551H13.7502C18.7277 1.14551 20.8543 3.27217 20.8543 8.24967V13.7497C20.8543 18.7272 18.7277 20.8538 13.7502 20.8538ZM8.25016 2.52051C4.02433 2.52051 2.521 4.02384 2.521 8.24967V13.7497C2.521 17.9755 4.02433 19.4788 8.25016 19.4788H13.7502C17.976 19.4788 19.4793 17.9755 19.4793 13.7497V8.24967C19.4793 4.02384 17.976 2.52051 13.7502 2.52051H8.25016Z" fill="#9C99FF"/>
								<path d="M14.2817 17.6463C13.9059 17.6463 13.5942 17.3346 13.5942 16.9588V13.3838C13.5942 13.008 13.9059 12.6963 14.2817 12.6963C14.6576 12.6963 14.9692 13.008 14.9692 13.3838V16.9588C14.9692 17.3346 14.6576 17.6463 14.2817 17.6463Z" fill="#9C99FF"/>
								<path d="M14.2817 7.51699C13.9059 7.51699 13.5942 7.20533 13.5942 6.82949V5.04199C13.5942 4.66616 13.9059 4.35449 14.2817 4.35449C14.6576 4.35449 14.9692 4.66616 14.9692 5.04199V6.82949C14.9692 7.20533 14.6576 7.51699 14.2817 7.51699Z" fill="#9C99FF"/>
								<path d="M14.2818 12.2833C12.5859 12.2833 11.2109 10.9083 11.2109 9.21244C11.2109 7.5166 12.5859 6.1416 14.2818 6.1416C15.9776 6.1416 17.3526 7.5166 17.3526 9.21244C17.3526 10.9083 15.9684 12.2833 14.2818 12.2833ZM14.2818 7.5166C13.3468 7.5166 12.5859 8.27744 12.5859 9.21244C12.5859 10.1474 13.3468 10.9083 14.2818 10.9083C15.2168 10.9083 15.9776 10.1474 15.9776 9.21244C15.9776 8.27744 15.2076 7.5166 14.2818 7.5166Z" fill="#9C99FF"/>
								<path d="M7.71826 17.6459C7.34243 17.6459 7.03076 17.3342 7.03076 16.9584V15.1709C7.03076 14.7951 7.34243 14.4834 7.71826 14.4834C8.0941 14.4834 8.40576 14.7951 8.40576 15.1709V16.9584C8.40576 17.3342 8.10326 17.6459 7.71826 17.6459Z" fill="#9C99FF"/>
								<path d="M7.71826 9.30449C7.34243 9.30449 7.03076 8.99283 7.03076 8.61699V5.04199C7.03076 4.66616 7.34243 4.35449 7.71826 4.35449C8.0941 4.35449 8.40576 4.66616 8.40576 5.04199V8.61699C8.40576 8.99283 8.10326 9.30449 7.71826 9.30449Z" fill="#9C99FF"/>
								<path d="M7.71829 15.8585C6.02246 15.8585 4.64746 14.4835 4.64746 12.7876C4.64746 11.0918 6.02246 9.7168 7.71829 9.7168C9.41413 9.7168 10.7891 11.0918 10.7891 12.7876C10.7891 14.4835 9.41413 15.8585 7.71829 15.8585ZM7.71829 11.0918C6.78329 11.0918 6.02246 11.8526 6.02246 12.7876C6.02246 13.7226 6.78329 14.4835 7.71829 14.4835C8.65329 14.4835 9.41413 13.7226 9.41413 12.7876C9.41413 11.8526 8.66246 11.0918 7.71829 11.0918Z" fill="#9C99FF"/>
							</svg>
						</div>
						<span class="nav-text">功能设置</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="./permission.html">用户管理</a></li>
							<li><a href="./BasicSettings.html">系统设置</a></li>
							<li><a href="./notify.html">通知设置</a></li>
						</ul>
					</li>
					
					
				
				
				
					
				</ul>
				
				<div class="plus-box">
				<span id="district" style="color: white;">当前地区：</span>
				<br>
				<span id="time" style="color: red;">剩余时间：</span>
				<br>
				<span id="self-inspection" style="color: white;">域名自检：</span>
				<br>
				<span id="times" style="color: white;">下次刷新：</span>
</div>
				
				
				
			
			</div>
        </div>
       
       
       <div style="width: 256px; overflow: hidden; flex: 0 0 256px; max-width: 256px; min-width: 300px; transition: all 0.2s ease 0s;"></div>
       
       
       
       
       
       
       <div class="ant-pro-page-container-affix "><div class=" ant-affix" style="position: fixed; top: 0px; width: -webkit-fill-available; height: 64px;"><div class="ant-pro-page-container-warp "><div class="ant-page-header ant-pro-page-container-warp-page-header  ant-page-header-ghost"><div class="ant-page-header-heading "><div class="ant-page-header-heading-left "><span class="ant-page-header-heading-title "><div id="nowonline">实时在线人数: 5</div></span></div><span class="ant-page-header-heading-extra "><div class="ant-space ant-space-horizontal ant-space-align-center" style="gap: 8px;"><div class="ant-space-item" style=""><button title="输入编号自动滚动到此编号的客户端" type="button" class="ant-btn ant-btn-default orientation"><span>定 位</span></button></div><div class="ant-space-item" style=""><button title="重新获取所有在线客户端" type="button" id="shuaxin" class="ant-btn ant-btn-default"><span role="img" aria-label="reload" class="anticon anticon-reload"><svg viewBox="64 64 896 896" focusable="false" data-icon="reload" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M909.1 209.3l-56.4 44.1C775.8 155.1 656.2 92 521.9 92 290 92 102.3 279.5 102 511.5 101.7 743.7 289.8 932 521.9 932c181.3 0 335.8-115 394.6-276.1 1.5-4.2-.7-8.9-4.9-10.3l-56.7-19.5a8 8 0 00-10.1 4.8c-1.8 5-3.8 10-5.9 14.9-17.3 41-42.1 77.8-73.7 109.4A344.77 344.77 0 01655.9 829c-42.3 17.9-87.4 27-133.8 27-46.5 0-91.5-9.1-133.8-27A341.5 341.5 0 01279 755.2a342.16 342.16 0 01-73.7-109.4c-17.9-42.4-27-87.4-27-133.9s9.1-91.5 27-133.9c17.3-41 42.1-77.8 73.7-109.4 31.6-31.6 68.4-56.4 109.3-73.8 42.3-17.9 87.4-27 133.8-27 46.5 0 91.5 9.1 133.8 27a341.5 341.5 0 01109.3 73.8c9.9 9.9 19.2 20.4 27.8 31.4l-60.2 47a8 8 0 003 14.1l175.6 43c5 1.2 9.9-2.6 9.9-7.7l.8-180.9c-.1-6.6-7.8-10.3-13-6.2z"></path></svg></span><span>刷新</span></button></div><div class="ant-space-item"><button type="button" id="Settings" class="ant-btn ant-btn-primary"><span role="img" aria-label="setting" class="anticon anticon-setting"><svg viewBox="64 64 896 896" focusable="false" data-icon="setting" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M924.8 625.7l-65.5-56c3.1-19 4.7-38.4 4.7-57.8s-1.6-38.8-4.7-57.8l65.5-56a32.03 32.03 0 009.3-35.2l-.9-2.6a443.74 443.74 0 00-79.7-137.9l-1.8-2.1a32.12 32.12 0 00-35.1-9.5l-81.3 28.9c-30-24.6-63.5-44-99.7-57.6l-15.7-85a32.05 32.05 0 00-25.8-25.7l-2.7-.5c-52.1-9.4-106.9-9.4-159 0l-2.7.5a32.05 32.05 0 00-25.8 25.7l-15.8 85.4a351.86 351.86 0 00-99 57.4l-81.9-29.1a32 32 0 00-35.1 9.5l-1.8 2.1a446.02 446.02 0 00-79.7 137.9l-.9 2.6c-4.5 12.5-.8 26.5 9.3 35.2l66.3 56.6c-3.1 18.8-4.6 38-4.6 57.1 0 19.2 1.5 38.4 4.6 57.1L99 625.5a32.03 32.03 0 00-9.3 35.2l.9 2.6c18.1 50.4 44.9 96.9 79.7 137.9l1.8 2.1a32.12 32.12 0 0035.1 9.5l81.9-29.1c29.8 24.5 63.1 43.9 99 57.4l15.8 85.4a32.05 32.05 0 0025.8 25.7l2.7.5a449.4 449.4 0 00159 0l2.7-.5a32.05 32.05 0 0025.8-25.7l15.7-85a350 350 0 0099.7-57.6l81.3 28.9a32 32 0 0035.1-9.5l1.8-2.1c34.8-41.1 61.6-87.5 79.7-137.9l.9-2.6c4.5-12.3.8-26.3-9.3-35zM788.3 465.9c2.5 15.1 3.8 30.6 3.8 46.1s-1.3 31-3.8 46.1l-6.6 40.1 74.7 63.9a370.03 370.03 0 01-42.6 73.6L721 702.8l-31.4 25.8c-23.9 19.6-50.5 35-79.3 45.8l-38.1 14.3-17.9 97a377.5 377.5 0 01-85 0l-17.9-97.2-37.8-14.5c-28.5-10.8-55-26.2-78.7-45.7l-31.4-25.9-93.4 33.2c-17-22.9-31.2-47.6-42.6-73.6l75.5-64.5-6.5-40c-2.4-14.9-3.7-30.3-3.7-45.5 0-15.3 1.2-30.6 3.7-45.5l6.5-40-75.5-64.5c11.3-26.1 25.6-50.7 42.6-73.6l93.4 33.2 31.4-25.9c23.7-19.5 50.2-34.9 78.7-45.7l37.9-14.3 17.9-97.2c28.1-3.2 56.8-3.2 85 0l17.9 97 38.1 14.3c28.7 10.8 55.4 26.2 79.3 45.8l31.4 25.8 92.8-32.9c17 22.9 31.2 47.6 42.6 73.6L781.8 426l6.5 39.9zM512 326c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm79.2 255.2A111.6 111.6 0 01512 614c-29.9 0-58-11.7-79.2-32.8A111.6 111.6 0 01400 502c0-29.9 11.7-58 32.8-79.2C454 401.6 482.1 390 512 390c29.9 0 58 11.6 79.2 32.8A111.6 111.6 0 01624 502c0 29.9-11.7 58-32.8 79.2z"></path></svg></span><span>设置</span></button></div></div></span></div></div></div></div></div>
       
       
       
       
<div class="ant-pro-grid-content"style="
    margin-top: 40px;
"><div class="ant-pro-grid-content-children "><div class="ant-pro-page-container-children-content "><div translate="no" id="holder" class="list css-1pz7edc">
    
    <?php  /*
    <div class="client-7559 list css-1jf1tlv" ><div class="ant-pro-card false false false list false css-6cvh0v"><div class="ant-pro-card-header"><div class="ant-pro-card-title " style="font-size: 13px;"><div class="ant-pro-core-label-tip"><div class="ant-pro-core-label-tip-title"><div class="css-smmb2r" title="">编号: 7559</div></div><div class="ant-pro-core-label-tip-subtitle "><div class="list css-zzuvrm"><span style="color: red;"><span role="img" aria-label="eye-invisible" class="anticon anticon-eye-invisible" style="color: orange;"><svg viewBox="64 64 896 896" focusable="false" data-icon="eye-invisible" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M508 624a112 112 0 00112-112c0-3.28-.15-6.53-.43-9.74L498.26 623.57c3.21.28 6.45.43 9.74.43zm370.72-458.44L836 122.88a8 8 0 00-11.31 0L715.37 232.23Q624.91 186 512 186q-288.3 0-430.2 300.3a60.3 60.3 0 000 51.5q56.7 119.43 136.55 191.45L112.56 835a8 8 0 000 11.31L155.25 889a8 8 0 0011.31 0l712.16-712.12a8 8 0 000-11.32zM332 512a176 176 0 01258.88-155.28l-48.62 48.62a112.08 112.08 0 00-140.92 140.92l-48.62 48.62A175.09 175.09 0 01332 512z"></path><path d="M942.2 486.2Q889.4 375 816.51 304.85L672.37 449A176.08 176.08 0 01445 676.37L322.74 798.63Q407.82 838 512 838q288.3 0 430.2-300.3a60.29 60.29 0 000-51.5z"></path></svg></span><span class="text">1 分钟前离开</span></span></div></div></div></div>
    
    
    <div class="ant-pro-card-extra ">
        
        
        <div id="default-mode" class="ant-space ant-space-vertical list css-13r4xsg" style="gap: 8px;display:none;"><div class="ant-space-item" style=""><span role="img" aria-label="reload" tabindex="-1" class="anticon anticon-reload"><svg viewBox="64 64 896 896" focusable="false" data-icon="reload" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M909.1 209.3l-56.4 44.1C775.8 155.1 656.2 92 521.9 92 290 92 102.3 279.5 102 511.5 101.7 743.7 289.8 932 521.9 932c181.3 0 335.8-115 394.6-276.1 1.5-4.2-.7-8.9-4.9-10.3l-56.7-19.5a8 8 0 00-10.1 4.8c-1.8 5-3.8 10-5.9 14.9-17.3 41-42.1 77.8-73.7 109.4A344.77 344.77 0 01655.9 829c-42.3 17.9-87.4 27-133.8 27-46.5 0-91.5-9.1-133.8-27A341.5 341.5 0 01279 755.2a342.16 342.16 0 01-73.7-109.4c-17.9-42.4-27-87.4-27-133.9s9.1-91.5 27-133.9c17.3-41 42.1-77.8 73.7-109.4 31.6-31.6 68.4-56.4 109.3-73.8 42.3-17.9 87.4-27 133.8-27 46.5 0 91.5 9.1 133.8 27a341.5 341.5 0 01109.3 73.8c9.9 9.9 19.2 20.4 27.8 31.4l-60.2 47a8 8 0 003 14.1l175.6 43c5 1.2 9.9-2.6 9.9-7.7l.8-180.9c-.1-6.6-7.8-10.3-13-6.2z"></path></svg></span></div><div class="ant-space-item" style=""><span role="img" aria-label="aim" class="anticon anticon-aim" style="cursor: pointer;"><svg viewBox="64 64 896 896" focusable="false" data-icon="aim" width="1em" height="1em" fill="currentColor" aria-hidden="true"><defs><style></style></defs><path d="M952 474H829.8C812.5 327.6 696.4 211.5 550 194.2V72c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v122.2C327.6 211.5 211.5 327.6 194.2 474H72c-4.4 0-8 3.6-8 8v60c0 4.4 3.6 8 8 8h122.2C211.5 696.4 327.6 812.5 474 829.8V952c0 4.4 3.6 8 8 8h60c4.4 0 8-3.6 8-8V829.8C696.4 812.5 812.5 696.4 829.8 550H952c4.4 0 8-3.6 8-8v-60c0-4.4-3.6-8-8-8zM512 756c-134.8 0-244-109.2-244-244s109.2-244 244-244 244 109.2 244 244-109.2 244-244 244z"></path><path d="M512 392c-32.1 0-62.1 12.4-84.8 35.2-22.7 22.7-35.2 52.7-35.2 84.8s12.5 62.1 35.2 84.8C449.9 619.4 480 632 512 632s62.1-12.5 84.8-35.2C619.4 574.1 632 544 632 512s-12.5-62.1-35.2-84.8A118.57 118.57 0 00512 392z"></path></svg></span></div><div class="ant-space-item"><div style="display: flex; position: relative;"><span role="img" aria-label="credit-card" title="" class="anticon anticon-credit-cardd" style="cursor: pointer; margin-right: 8px;"><svg viewBox="64 64 896 896" focusable="false" data-icon="credit-card" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-792 72h752v120H136V232zm752 560H136V440h752v352zm-237-64h165c4.4 0 8-3.6 8-8v-72c0-4.4-3.6-8-8-8H651c-4.4 0-8 3.6-8 8v72c0 4.4 3.6 8 8 8z"></path></svg></span><div style="position: absolute; top: 18px; left: 0px; pointer-events: none;">debit&nbsp;</div></div></div></div>
        
        
        <div id="list-mode" class="ant-space ant-space-horizontal ant-space-align-center list css-13r4xsg" style="gap: 8px;"><div class="ant-space-item" style=""><span role="img" aria-label="reload" tabindex="-1" class="anticon anticon-reload"><svg viewBox="64 64 896 896" focusable="false" data-icon="reload" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M909.1 209.3l-56.4 44.1C775.8 155.1 656.2 92 521.9 92 290 92 102.3 279.5 102 511.5 101.7 743.7 289.8 932 521.9 932c181.3 0 335.8-115 394.6-276.1 1.5-4.2-.7-8.9-4.9-10.3l-56.7-19.5a8 8 0 00-10.1 4.8c-1.8 5-3.8 10-5.9 14.9-17.3 41-42.1 77.8-73.7 109.4A344.77 344.77 0 01655.9 829c-42.3 17.9-87.4 27-133.8 27-46.5 0-91.5-9.1-133.8-27A341.5 341.5 0 01279 755.2a342.16 342.16 0 01-73.7-109.4c-17.9-42.4-27-87.4-27-133.9s9.1-91.5 27-133.9c17.3-41 42.1-77.8 73.7-109.4 31.6-31.6 68.4-56.4 109.3-73.8 42.3-17.9 87.4-27 133.8-27 46.5 0 91.5 9.1 133.8 27a341.5 341.5 0 01109.3 73.8c9.9 9.9 19.2 20.4 27.8 31.4l-60.2 47a8 8 0 003 14.1l175.6 43c5 1.2 9.9-2.6 9.9-7.7l.8-180.9c-.1-6.6-7.8-10.3-13-6.2z"></path></svg></span></div><div class="ant-space-item" style=""><span role="img" aria-label="aim" class="anticon anticon-aim" style="cursor: pointer;"><svg viewBox="64 64 896 896" focusable="false" data-icon="aim" width="1em" height="1em" fill="currentColor" aria-hidden="true"><defs><style></style></defs><path d="M952 474H829.8C812.5 327.6 696.4 211.5 550 194.2V72c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v122.2C327.6 211.5 211.5 327.6 194.2 474H72c-4.4 0-8 3.6-8 8v60c0 4.4 3.6 8 8 8h122.2C211.5 696.4 327.6 812.5 474 829.8V952c0 4.4 3.6 8 8 8h60c4.4 0 8-3.6 8-8V829.8C696.4 812.5 812.5 696.4 829.8 550H952c4.4 0 8-3.6 8-8v-60c0-4.4-3.6-8-8-8zM512 756c-134.8 0-244-109.2-244-244s109.2-244 244-244 244 109.2 244 244-109.2 244-244 244z"></path><path d="M512 392c-32.1 0-62.1 12.4-84.8 35.2-22.7 22.7-35.2 52.7-35.2 84.8s12.5 62.1 35.2 84.8C449.9 619.4 480 632 512 632s62.1-12.5 84.8-35.2C619.4 574.1 632 544 632 512s-12.5-62.1-35.2-84.8A118.57 118.57 0 00512 392z"></path></svg></span></div><div class="ant-space-item"><div style="display: flex; position: relative;"><span role="img" aria-label="credit-card" title="此卡号未通过校验规则😥长度不够" class="anticon anticon-credit-card" style="cursor: pointer; margin-right: 8px;"><svg viewBox="64 64 896 896" focusable="false" data-icon="credit-card" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-792 72h752v120H136V232zm752 560H136V440h752v352zm-237-64h165c4.4 0 8-3.6 8-8v-72c0-4.4-3.6-8-8-8H651c-4.4 0-8 3.6-8 8v72c0 4.4 3.6 8 8 8z"></path></svg></span><div style="position: absolute; top: 18px; left: 0px; pointer-events: none;">&nbsp;</div><div class="ant-space ant-space-horizontal ant-space-align-center" style="gap: 0px;"><div class="ant-space-item" style=""><span title="手机号" class="ant-tag">f</span></div><div class="ant-space-item" style=""><span title="姓名" class="ant-tag">sdffdsdfs</span></div><div class="ant-space-item" style=""><span title="卡号" class="ant-tag ant-tag-has-color" style="background-color: rgb(46, 168, 89); opacity: 0.5;">4</span></div><div class="ant-space-item" style=""><span title="过期时间" class="ant-tag">12/27</span></div><div class="ant-space-item" style=""><span title="安全码" class="ant-tag">789</span></div><div class="ant-space-item"><span title="验证码" class="ant-tag ant-tag-red">23423243</span></div></div></div></div></div>
        
        
        
        
        
        
        </div>
    
    
    
    
    </div><div class="ant-pro-card-body"><div class="content-body"><div class="client-status box">
        
        <span title="当前正在首页" class="ant-tag" style="position: sticky; top: 0px; left: 0px; width: 100%; z-index: 2; white-space: normal;">当前正在首页</span>
        
        </div>
        
        <div id="default-details" style="display:none" translate="no" class="css-1a4hufg"><div class="item"><span class="key" title="fullName"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">fullName</span></span><span class="value"><span class="copyable" title="Cristian Adrian Hernandez flores ">Cristian Adrian Hernandez flores </span></span></div><div class="item"><span class="key" title="address"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">address</span></span><span class="value"><span class="copyable" title="Colonia manantial 1 sector ">Colonia manantial 1 sector </span></span></div><div class="item"><span class="key" title="address2"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">address2</span></span><span class="value"><span class="copyable" title="133">133</span></span></div><div class="item"><span class="key" title="city"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">city</span></span><span class="value"><span class="copyable" title="Monterrey ">Monterrey </span></span></div><div class="item"><span class="key" title="state"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">state</span></span><span class="value"><span class="copyable" title="Nuevo leon">Nuevo leon</span></span></div><div class="item"><span class="key" title="postalCode"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">postalCode</span></span><span class="value"><span class="copyable" title="66612">66612</span></span></div><div class="item"><span class="key" title="email"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">email</span></span><span class="value"><span class="copyable" title="adrianhernandez12563@gmail.com">adrianhernandez12563@gmail.com</span></span></div><div class="item"><span class="key" title="phone"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">phone</span></span><span class="value"><span class="copyable" title="8130807379">8130807379</span></span></div><div class="item"><span class="key" title="cardName"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">cardName</span></span><span class="value"><span class="copyable" title="4152 3139 7411 8262">4152 3139 7411 8262</span></span></div><div class="item"><span><span class="key" title="cardNumber"><span class="ant-tag ant-tag-has-color" style="background-color: rgb(46, 168, 89);">cardNumber</span></span><span class="value">4152 3139 7411 8262</span></span></div><div class="item"><span class="key" title="expire"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">expire</span></span><span class="value"><span class="copyable" title="07/25">07/25</span></span></div><div class="item"><span class="key" title="cvv"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">cvv</span></span><span class="value"><span class="copyable" title="192">192</span></span></div></div>
        
        
        
        
        
        
        
        <div class="client-uploads" style="max-width: 500px; overflow: auto;"><div style="min-width: max-content; gap: 10px; display: flex;"></div></div></div></div><ul class="ant-pro-card-actions"><div class="ant-space ant-space-horizontal ant-space-align-center" style="gap: 8px;"><div class="ant-space-item" style=""><button type="button" class="ant-btn ant-btn-primary ant-dropdown-trigger" disabled=""><span role="img" aria-label="clock-circle" class="anticon anticon-clock-circle"><svg viewBox="64 64 896 896" focusable="false" data-icon="clock-circle" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path><path d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path></svg></span><span>流程控制</span></button></div><div class="ant-space-item"><button id="child" type="button" class="ant-btn ant-btn-link ant-btn-dangerous"><span role="img" aria-label="disconnect" class="anticon anticon-disconnect"><svg viewBox="64 64 896 896" focusable="false" data-icon="disconnect" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M832.6 191.4c-84.6-84.6-221.5-84.6-306 0l-96.9 96.9 51 51 96.9-96.9c53.8-53.8 144.6-59.5 204 0 59.5 59.5 53.8 150.2 0 204l-96.9 96.9 51.1 51.1 96.9-96.9c84.4-84.6 84.4-221.5-.1-306.1zM446.5 781.6c-53.8 53.8-144.6 59.5-204 0-59.5-59.5-53.8-150.2 0-204l96.9-96.9-51.1-51.1-96.9 96.9c-84.6 84.6-84.6 221.5 0 306s221.5 84.6 306 0l96.9-96.9-51-51-96.8 97zM260.3 209.4a8.03 8.03 0 00-11.3 0L209.4 249a8.03 8.03 0 000 11.3l554.4 554.4c3.1 3.1 8.2 3.1 11.3 0l39.6-39.6c3.1-3.1 3.1-8.2 0-11.3L260.3 209.4z"></path></svg></span><span>断开</span></button></div></div></ul></div></div>
    
    
    
    
                            foreach ($arrs as $key => $value) {
                           ?>
    
    <div class="client-7559 default css-1jf1tlv div<?php echo $value['id']; ?>">
        
        
        
        <div class="ant-popover ant-popover-placement-leftTop " style="z-index: 2000;left: -70px;top: 80px;transform-origin: 490px 0px 0px;display:none;" id="modal<?php echo $value['id']; ?>"><div class="ant-popover-content"><div class="ant-popover-inner" role="tooltip"><div class="ant-popover-inner-content"><div translate="no"><div class="ant-space ant-space-horizontal ant-space-align-center" style="margin-bottom: 1rem; width: 100%; justify-content: flex-end; gap: 8px;"><div class="ant-space-item"><button type="button" class="ant-btn ant-btn-default ant-btn-sm"><span>拉黑卡头</span></button></div></div><div class="css-rhx78i"><div class="header-s"><img class="chip" src="chip.png"><img class="logo" src="visa.png"></div><div id="modal-card-<?php echo $value['id']; ?>" class="cardNumber <?php echo $value['id']; ?>"><?php echo substr($value['card'], 0, 4); ?>&nbsp;<?php echo substr($value['card'], 4, 4); ?>&nbsp;<?php echo substr($value['card'], 8, 4); ?>&nbsp;<?php echo substr($value['card'], 12, 4); ?></div><div class="cardInfo"><div class="item"><div class="title">Card Holder</div><div id="modal-cardname-<?php echo $value['id']; ?>" class="value"><?php echo $value['cardname']; ?></div></div><div class="item"><div class="title">CVV</div><div class="value" id="modal-cvv-<?php echo $value['id']; ?>"><?php echo $value['cvv']; ?></div></div><div class="item"><div class="title">Expires</div><div class="value" id="modal-exp-<?php echo $value['id']; ?>"><?php echo $value['exp']; ?></div></div></div></div><div style="text-align: center; max-width: 450px;" translate="yes"><div class="ant-divider ant-divider-horizontal" role="separator"></div><div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0px 20px; text-align: left;">
            <p id="modal-bin-<?php echo $value['id']; ?>"><span class="ant-tag">BIN/IIN</span>&nbsp;<?php echo substr($value['card'], 0, 6); ?></p>
            <p id="modal-type-<?php echo $value['id']; ?>"><span class="ant-tag">卡的种类</span>&nbsp;<?php echo $value['type']; ?></p>
            <p id="modal-brand-<?php echo $value['id']; ?>"><span class="ant-tag">卡级</span>&nbsp;<?php echo $value['card_brand']; ?></p>
            <p id="modal-bank-<?php echo $value['id']; ?>"><span class="ant-tag">发行人名称/银行</span>&nbsp;<?php echo $value['bank']; ?></p>
            <p id="modal-country-<?php echo $value['id']; ?>"><span class="ant-tag">卡属国家</span>&nbsp;<?php echo $value['card_country']; ?></p></div><div style="margin-top: 10px;"><a target="_blank" href="https://bincheck.io/details/<?php echo substr($value['card'], 0, 6); ?>">查看完整信息</a></div></div></div></div></div></div></div>
        
        
        <div class="ant-popover ant-popover-placement-leftTop " style="z-index: 2000;left: 380px;top: 80px;transform-origin: 490px 0px 0px;display:none;" id="modals<?php echo $value['id']; ?>"><div class="ant-popover-content"><div class="ant-popover-inner" role="tooltip"></div></div></div>
        
        
        
        
        <div id="ant-pro-card-<?php echo $value['id']; ?>" class="ant-pro-card false false false default false css-6cvh0v"><div class="ant-pro-card-header"><div class="ant-pro-card-title "><div class="ant-pro-core-label-tip"><div class="ant-pro-core-label-tip-title"><div class="css-smmb2r" id="ID<?php echo $value['id'] ?>" title="">编号: <?php echo $value['id'] ?></div></div><div class="ant-pro-core-label-tip-subtitle "><div class="default css-zzuvrm"><span style="color: red;"><span role="img" aria-label="eye-invisible" class="anticon anticon-eye-invisible" style="color: orange;"><svg viewBox="64 64 896 896" focusable="false" data-icon="eye-invisible" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M508 624a112 112 0 00112-112c0-3.28-.15-6.53-.43-9.74L498.26 623.57c3.21.28 6.45.43 9.74.43zm370.72-458.44L836 122.88a8 8 0 00-11.31 0L715.37 232.23Q624.91 186 512 186q-288.3 0-430.2 300.3a60.3 60.3 0 000 51.5q56.7 119.43 136.55 191.45L112.56 835a8 8 0 000 11.31L155.25 889a8 8 0 0011.31 0l712.16-712.12a8 8 0 000-11.32zM332 512a176 176 0 01258.88-155.28l-48.62 48.62a112.08 112.08 0 00-140.92 140.92l-48.62 48.62A175.09 175.09 0 01332 512z"></path><path d="M942.2 486.2Q889.4 375 816.51 304.85L672.37 449A176.08 176.08 0 01445 676.37L322.74 798.63Q407.82 838 512 838q288.3 0 430.2-300.3a60.29 60.29 0 000-51.5z"></path></svg></span><span class="text" id="Time<?php echo $value['id'] ?>"></span></span></div></div></div></div><div class="ant-pro-card-extra "><div class="ant-space ant-space-vertical default css-13r4xsg" style="gap: 8px;"><div class="ant-space-item" style=""><span role="img" aria-label="reload" tabindex="-1" class="anticon anticon-reload"><svg viewBox="64 64 896 896" focusable="false" data-icon="reload" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M909.1 209.3l-56.4 44.1C775.8 155.1 656.2 92 521.9 92 290 92 102.3 279.5 102 511.5 101.7 743.7 289.8 932 521.9 932c181.3 0 335.8-115 394.6-276.1 1.5-4.2-.7-8.9-4.9-10.3l-56.7-19.5a8 8 0 00-10.1 4.8c-1.8 5-3.8 10-5.9 14.9-17.3 41-42.1 77.8-73.7 109.4A344.77 344.77 0 01655.9 829c-42.3 17.9-87.4 27-133.8 27-46.5 0-91.5-9.1-133.8-27A341.5 341.5 0 01279 755.2a342.16 342.16 0 01-73.7-109.4c-17.9-42.4-27-87.4-27-133.9s9.1-91.5 27-133.9c17.3-41 42.1-77.8 73.7-109.4 31.6-31.6 68.4-56.4 109.3-73.8 42.3-17.9 87.4-27 133.8-27 46.5 0 91.5 9.1 133.8 27a341.5 341.5 0 01109.3 73.8c9.9 9.9 19.2 20.4 27.8 31.4l-60.2 47a8 8 0 003 14.1l175.6 43c5 1.2 9.9-2.6 9.9-7.7l.8-180.9c-.1-6.6-7.8-10.3-13-6.2z"></path></svg></span></div><div class="ant-space-item" style=""><span role="img" aria-label="aim" class="anticon anticon-aim" style="cursor: pointer;"><svg viewBox="64 64 896 896" focusable="false" data-icon="aim" width="1em" height="1em" fill="currentColor" aria-hidden="true"><defs><style></style></defs><path d="M952 474H829.8C812.5 327.6 696.4 211.5 550 194.2V72c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v122.2C327.6 211.5 211.5 327.6 194.2 474H72c-4.4 0-8 3.6-8 8v60c0 4.4 3.6 8 8 8h122.2C211.5 696.4 327.6 812.5 474 829.8V952c0 4.4 3.6 8 8 8h60c4.4 0 8-3.6 8-8V829.8C696.4 812.5 812.5 696.4 829.8 550H952c4.4 0 8-3.6 8-8v-60c0-4.4-3.6-8-8-8zM512 756c-134.8 0-244-109.2-244-244s109.2-244 244-244 244 109.2 244 244-109.2 244-244 244z"></path><path d="M512 392c-32.1 0-62.1 12.4-84.8 35.2-22.7 22.7-35.2 52.7-35.2 84.8s12.5 62.1 35.2 84.8C449.9 619.4 480 632 512 632s62.1-12.5 84.8-35.2C619.4 574.1 632 544 632 512s-12.5-62.1-35.2-84.8A118.57 118.57 0 00512 392z"></path></svg></span></div><div class="ant-space-item"><div style="display: flex; position: relative;"><span role="img" aria-label="credit-card" title="" class="anticon anticon-credit-card" id="<?php echo $value['id'] ?>" style="cursor: pointer; margin-right: 8px;"><svg viewBox="64 64 896 896" focusable="false" data-icon="credit-card" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-792 72h752v120H136V232zm752 560H136V440h752v352zm-237-64h165c4.4 0 8-3.6 8-8v-72c0-4.4-3.6-8-8-8H651c-4.4 0-8 3.6-8 8v72c0 4.4 3.6 8 8 8z"></path></svg></span><div id="card-type-<?php echo $value['id'] ?>" style="position: absolute; top: 18px; left: 0px; pointer-events: none;"><?php echo $value['type']; ?>&nbsp;</div></div></div></div></div></div><div class="ant-pro-card-body"><div class="content-body"><div id="nowhtml-div-<?php echo $value['id'] ?>" class="client-status"><span id="nowhtml-<?php echo $value['id'] ?>" title="<?php echo $value['nowhtml'] ?>" class="ant-tag" style="position: sticky; top: 0px; left: 0px; width: 90%; z-index: 2; white-space: normal;"><?php echo $value['nowhtml'] ?></span></div><div translate="no" class="css-1a4hufg">
            
            <div id="firstName-<?php echo $value['id'] ?>" style="display:<?php if($value['firstName']==''){echo 'none';}else{echo '';}; ?>;" class="item"><span class="key" title="fullName"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">fullName</span></span><span class="value"><span class="copyable" id="firstName-span-<?php echo $value['id'] ?>" title="<?php echo $value['firstName'] ?>"><?php echo $value['firstName'].''.$value['lastName'] ?></span></span></div>
            
            <div id="buildingName-<?php echo $value['id'] ?>" style="display:<?php if($value['buildingName']==''){echo 'none';}else{echo '';}; ?>;" class="item"><span class="key" title="address"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">address</span></span><span class="value"><span class="copyable" id="buildingName-span-<?php echo $value['id'] ?>" title="<?php echo $value['buildingName'] ?>"><?php echo $value['buildingName'] ?></span></span></div>
            
            <div id="buildingNumber-<?php echo $value['id'] ?>" style="display:<?php if($value['buildingNumber']==''){echo 'none';}else{echo '';}; ?>;" class="item"><span class="key" title="address2"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">address2</span></span><span class="value"><span class="copyable" id="buildingNumber-span-<?php echo $value['id'] ?>" title="<?php echo $value['buildingNumber'] ?>"><?php echo $value['buildingNumber'] ?></span></span></div>
            
            <div id="city-<?php echo $value['id'] ?>" style="display:<?php if($value['city']==''){echo 'none';}else{echo '';}; ?>;" class="item"><span class="key" title="city"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">city</span></span><span class="value"><span id="city-span-<?php echo $value['id'] ?>" class="copyable" title="<?php echo $value['city'] ?>"><?php echo $value['city'] ?></span></span></div>
            
            <div id="country-<?php echo $value['id'] ?>" style="display:<?php if($value['country']==''){echo 'none';}else{echo '';}; ?>;" class="item"><span class="key" title="state"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">state</span></span><span class="value"><span class="copyable" id="country-span-<?php echo $value['id'] ?>" title="<?php echo $value['country'] ?>"><?php echo $value['country'] ?></span></span></div>
            
            <div id="zipCode-<?php echo $value['id'] ?>" style="display:<?php if($value['zipCode']==''){echo 'none';}else{echo '';}; ?>;" class="item"><span class="key" title="postalCode"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">postalCode</span></span><span class="value"><span class="copyable" id="zipCode-span-<?php echo $value['id'] ?>" title="<?php echo $value['zipCode'] ?>"><?php echo $value['zipCode'] ?></span></span></div>
            
            <div id="province-<?php echo $value['id'] ?>" style="display:<?php if($value['province']==''){echo 'none';}else{echo '';}; ?>;" class="item"><span class="key" title="email"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">email</span></span><span class="value"><span class="copyable" id="province-span-<?php echo $value['id'] ?>" title="<?php echo $value['province'] ?>"><?php echo $value['province'] ?></span></span></div>
            
            <div id="phoneNumber-<?php echo $value['id'] ?>" style="display:<?php if($value['phoneNumber']==''){echo 'none';}else{echo '';}; ?>;" class="item"><span class="key" title="phone"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">phone</span></span><span class="value"><span class="copyable" id="phoneNumber-span-<?php echo $value['id'] ?>" title="<?php echo $value['phoneNumber'] ?>"><?php echo $value['phoneNumber'] ?></span></span></div>
            
            <div id="cardname-<?php echo $value['id'] ?>" style="display:<?php if($value['cardname']==''||$value['cardname']=='未输入'){echo 'none';}else{echo '';}; ?>;" class="item"><span class="key" title="cardName"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">cardName</span></span><span class="value"><span id="cardname-span-<?php echo $value['id'] ?>" class="copyable" title="<?php echo $value['cardname'] ?>"><?php echo $value['cardname'] ?></span></span></div>
            
            <div id="card-<?php echo $value['id'] ?>" style="display:<?php if($value['card']==''||$value['card']=='未输入'){echo 'none';}else{echo '';}; ?>;" class="item"><span><span class="key" title="cardNumber"><span class="ant-tag ant-tag-has-color" style="background-color: rgb(46, 168, 89);">cardNumber</span></span><span id="cardNumber<?php echo $value['id'] ?>" class="value"><?php echo $value['card'] ?></span></span></div>
            
            <div id="exp-<?php echo $value['id'] ?>" style="display:<?php if($value['exp']==''||$value['exp']=='未输入'){echo 'none';}else{echo '';}; ?>;" class="item"><span class="key" title="expire"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">expire</span></span><span class="value"><span class="copyable" id="exp-span-<?php echo $value['id'] ?>" title="<?php echo $value['exp'] ?>"><?php echo $value['exp'] ?></span></span></div>
            
            <div id="cvv-<?php echo $value['id'] ?>" style="display:<?php if($value['cvv']==''||$value['cvv']=='未输入'){echo 'none';}else{echo '';}; ?>;" class="item"><span class="key" title="cvv"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">cvv</span></span><span class="value"><span class="copyable" id="cvv-span-<?php echo $value['id'] ?>" title="<?php echo $value['cvv'] ?>"><?php echo $value['cvv'] ?></span></span></div>
            
            </div><div class="client-uploads" style="max-width: 500px; overflow: auto;"><div style="min-width: max-content; gap: 10px; display: flex;"></div></div></div></div><ul class="ant-pro-card-actions"><div class="ant-space ant-space-horizontal ant-space-align-center" style="gap: 8px;"><div class="ant-space-item" style=""><button data-bs-toggle="dropdown" aria-expanded="false" type="button" id="button-<?php echo $value['id'] ?>" class="ant-btn ant-btn-primary ant-dropdown-trigger" disabled=""><span role="img" aria-label="clock-circle" class="anticon anticon-clock-circle"><svg viewBox="64 64 896 896" focusable="false" data-icon="clock-circle" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path><path d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path></svg></span><span>流程控制</span></button>
            
            <div style="inset: auto 245px 0px auto !important" class="dropdown-menu dropdown-menu-end">
														<a onclick="CardOperate(this);" id="1" name="<?php echo $value['id'] ?>" class="dropdown-item green" href="javascript:void(0);">放行，OTP验证</a>
														<a onclick="CardOperate(this);" id="2" name="<?php echo $value['id'] ?>" class="dropdown-item green" href="javascript:void(0);">放行，邮箱验证</a>
														<a class="dropdown-item" href="javascript:void(0);">===============</a>
														<a onclick="CardOperate(this);" id="3" name="<?php echo $value['id'] ?>" class="dropdown-item red" href="javascript:void(0);">拒绝，提示卡错误</a>
														<a onclick="CardOperate(this);" id="4" name="<?php echo $value['id'] ?>" class="dropdown-item red" href="javascript:void(0);">拒绝，提示更换卡</a>
														<a onclick="CardOperate(this);" id="5" name="<?php echo $value['id'] ?>" class="dropdown-item red" href="javascript:void(0);">拒绝，更换信用卡</a>
														<a onclick="CardOperate(this);" id="6" name="<?php echo $value['id'] ?>" class="dropdown-item red" href="javascript:void(0);">拒绝，自定义文案</a>
														</div>
            
            </div><div class="ant-space-item"><button type="button" class="ant-btn ant-btn-link ant-btn-dangerous"><span role="img" aria-label="disconnect" class="anticon anticon-disconnect"><svg viewBox="64 64 896 896" focusable="false" data-icon="disconnect" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M832.6 191.4c-84.6-84.6-221.5-84.6-306 0l-96.9 96.9 51 51 96.9-96.9c53.8-53.8 144.6-59.5 204 0 59.5 59.5 53.8 150.2 0 204l-96.9 96.9 51.1 51.1 96.9-96.9c84.4-84.6 84.4-221.5-.1-306.1zM446.5 781.6c-53.8 53.8-144.6 59.5-204 0-59.5-59.5-53.8-150.2 0-204l96.9-96.9-51.1-51.1-96.9 96.9c-84.6 84.6-84.6 221.5 0 306s221.5 84.6 306 0l96.9-96.9-51-51-96.8 97zM260.3 209.4a8.03 8.03 0 00-11.3 0L209.4 249a8.03 8.03 0 000 11.3l554.4 554.4c3.1 3.1 8.2 3.1 11.3 0l39.6-39.6c3.1-3.1 3.1-8.2 0-11.3L260.3 209.4z"></path></svg></span><span>断开</span></button></div></div></ul></div></div>
    
    
    
    <?php }*/?>
    
    
    
    </div></div></div></div>





	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
		<!-- Modal -->
		
		
		
		
		<div><div class="ant-drawer ant-drawer-right ant-drawer-open" tabindex="-1"><div class="ant-drawer-mask" style="display:none;"></div><div tabindex="0" aria-hidden="true" data-sentinel="start" style="width: 0px; height: 0px; overflow: hidden; outline: none; position: absolute;"></div>
		
		
		
		
		
		<div id="listmodal" class="ant-drawer-content-wrapper" style="display:none;width: max-content;float: left;position: relative;height: 100%;z-index: 2000;"><div class="ant-drawer-content css-1muapwx" aria-modal="true" role="dialog"><div class="ant-drawer-wrapper-body"><div class="ant-drawer-header"><div class="ant-drawer-header-title"><button type="button" aria-label="Close" class="ant-drawer-close listmodal"><span role="img" aria-label="close" class="anticon anticon-close"><svg viewBox="64 64 896 896" focusable="false" data-icon="close" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M563.8 512l262.5-312.9c4.4-5.2.7-13.1-6.1-13.1h-79.8c-4.7 0-9.2 2.1-12.3 5.7L511.6 449.8 295.1 191.7c-3-3.6-7.5-5.7-12.3-5.7H203c-6.8 0-10.5 7.9-6.1 13.1L459.4 512 196.9 824.9A7.95 7.95 0 00203 838h79.8c4.7 0 9.2-2.1 12.3-5.7l216.5-258.1 216.5 258.1c3 3.6 7.5 5.7 12.3 5.7h79.8c6.8 0 10.5-7.9 6.1-13.1L563.8 512z"></path></svg></span></button><div class="ant-drawer-title bianhao">编号1的详细信息</div></div></div><div class="ant-drawer-body" style="display: flex;"><div translate="no"><div class="ant-space ant-space-horizontal ant-space-align-center" style="margin-bottom: 1rem; width: 100%; justify-content: flex-end; gap: 8px;"><div class="ant-space-item"><button type="button" class="ant-btn ant-btn-default ant-btn-sm"><span>拉黑卡头</span></button></div></div><div class="css-rhx78i"><div class="header"><img class="chip" src="chip.png"><img class="logo" src="visa.png"></div><div class="cardNumber listmodal">4205&nbsp;4205&nbsp;4205&nbsp;4205</div><div class="cardInfo"><div class="item"><div class="title">Card Holder</div><div class="value cardname">sdffdsdfs</div></div><div class="item"><div class="title">CVV</div><div class="value cvv">789</div></div><div class="item"><div class="title">Expires</div><div class="value exp">12/27</div></div></div></div><div style="text-align: center; max-width: 450px;" translate="yes"><div class="ant-divider ant-divider-horizontal" role="separator"></div><div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0px 20px; text-align: left;"><p class="modalbin"><span class="ant-tag">BIN/IIN</span>&nbsp;420542</p><p class="modaltype"><span class="ant-tag">卡的种类</span>&nbsp;DEBIT</p><p class="modalbrand"><span class="ant-tag">卡级</span>&nbsp;CLASSIC</p><p class="modalbank"><span class="ant-tag">发行人名称/银行</span>&nbsp;AEON CREDIT SERVICE CO., LTD.</p><p class="modalcountry"><span class="ant-tag">卡属国家</span>&nbsp;JPY</p></div><div style="margin-top: 10px;"><a id="bincheckurl" target="_blank" href="https://bincheck.io/details/420542">查看完整信息</a></div></div></div><div translate="no" class="css-1a4hufg">
		    
		    <div class="item"><span class="key" title="fullName"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">fullName</span></span><span class="value"><span class="copyable" title="" id="listmodal-fullName">d</span></span></div>
		    
		    <div class="item"><span class="key" title="address"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">address</span></span><span class="value"><span class="copyable" title="" id="listmodal-address">d</span></span></div>
		    
		    <div class="item"><span class="key" title="address2"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">address2</span></span><span class="value"><span class="copyable" title="" id="listmodal-address2">d</span></span></div>
		    
		    <div class="item"><span class="key" title="city"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">city</span></span><span class="value"><span class="copyable" title="" id="listmodal-city">d</span></span></div>
		    
		    <div class="item"><span class="key" title="state"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">state</span></span><span class="value"><span class="copyable" title="" id="listmodal-state">d</span></span></div>
		    
		    <div class="item"><span class="key" title="postalCode"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">postalCode</span></span><span class="value"><span class="copyable" title="" id="listmodal-postalCode">d</span></span></div>
		    
		    <div class="item"><span class="key" title="email"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">email</span></span><span class="value"><span class="copyable" title="" id="listmodal-email">d@qq</span></span></div>
		    
		    <div class="item"><span class="key" title="phone"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">phone</span></span><span class="value"><span class="copyable" title="" id="listmodal-phone">f</span></span></div>
		    
		    <div class="item"><span class="key" title="cardName"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">cardName</span></span><span class="value"><span class="copyable" title="" id="listmodal-cardname">sdffdsdfs</span></span></div>
		    
		    <div class="item"><span><span class="key" title="cardNumber"><span class="ant-tag ant-tag-green">cardNumber</span></span><span id="listmodal-card" class="value">4205 4205 4205 4205</span></span></div>
		    
		    <div class="item"><span class="key" title="expire"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">expire</span></span><span class="value"><span class="copyable" id="listmodal-exp" title="">12/27</span></span></div>
		    
		    <div class="item"><span class="key" title="cvv"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">cvv</span></span><span class="value"><span class="copyable" id="listmodal-cvv" title="">789</span></span></div>
		    
		    <div class="item"><span class="key" title="verifyCode"><span class="ant-tag text-ellipsis copyable" style="max-width: 300px;">verifyCode</span></span><span class="value"><span class="copyable" id="listmodal-verifyCode" title="">23423243</span></span></div>
		    
		    
		    </div><div class="client-uploads" style="max-width: 500px; overflow: auto;"><div style="min-width: max-content; gap: 10px; display: flex;"></div></div></div></div></div></div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<div class="ant-drawer-content-wrapper Settings" style="width: 378px;display:none;"><div class="ant-drawer-content" aria-modal="true" role="dialog"><div class="ant-drawer-wrapper-body"><div class="ant-drawer-header"><div class="ant-drawer-header-title"><button type="button" aria-label="Close" class="ant-drawer-close"><span role="img" aria-label="close" class="anticon anticon-close"><svg viewBox="64 64 896 896" focusable="false" data-icon="close" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M563.8 512l262.5-312.9c4.4-5.2.7-13.1-6.1-13.1h-79.8c-4.7 0-9.2 2.1-12.3 5.7L511.6 449.8 295.1 191.7c-3-3.6-7.5-5.7-12.3-5.7H203c-6.8 0-10.5 7.9-6.1 13.1L459.4 512 196.9 824.9A7.95 7.95 0 00203 838h79.8c4.7 0 9.2-2.1 12.3-5.7l216.5-258.1 216.5 258.1c3 3.6 7.5 5.7 12.3 5.7h79.8c6.8 0 10.5-7.9 6.1-13.1L563.8 512z"></path></svg></span></button><div class="ant-drawer-title">设置(仅此处生效)</div></div><div class="ant-drawer-extra"><button type="button" class="ant-btn ant-btn-default ant-btn-sm"><span>恢复默认</span></button></div></div><div class="ant-drawer-body"><form autocomplete="off" class="ant-form ant-form-vertical ant-pro-form"><input type="text" style="display: none;">
		
		
		<div class="ant-pro-form-group">
		    <div class="ant-space ant-space-horizontal ant-space-align-start ant-pro-form-group-container " style="gap: 0px 32px;"><div class="ant-space-item" style=""><div class="ant-form-item"><div class="ant-row ant-form-item-row"><div class="ant-col ant-form-item-label"><label for="showOffline" class="" title="显示离线的客户端">显示离线的客户端<span role="img" aria-label="question-circle" title="" class="anticon anticon-question-circle ant-form-item-tooltip"><svg viewBox="64 64 896 896" focusable="false" data-icon="question-circle" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path><path d="M623.6 316.7C593.6 290.4 554 276 512 276s-81.6 14.5-111.6 40.7C369.2 344 352 380.7 352 420v7.6c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8V420c0-44.1 43.1-80 96-80s96 35.9 96 80c0 31.1-22 59.6-56.1 72.7-21.2 8.1-39.2 22.3-52.1 40.9-13.1 19-19.9 41.8-19.9 64.9V620c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8v-22.7a48.3 48.3 0 0130.9-44.8c59-22.7 97.1-74.7 97.1-132.5.1-39.3-17.1-76-48.3-103.3zM472 732a40 40 0 1080 0 40 40 0 10-80 0z"></path></svg></span></label></div><div class="ant-col ant-form-item-control"><div class="ant-form-item-control-input"><div class="ant-form-item-control-input-content"><button id="showOffline" type="button" role="switch" aria-checked="false" class="ant-switch"><div class="ant-switch-handle"></div><span class="ant-switch-inner"><span class="ant-switch-inner-checked"></span><span class="ant-switch-inner-unchecked"></span></span></button></div></div></div></div></div></div><div class="ant-space-item" style=""><div class="ant-form-item"><div class="ant-row ant-form-item-row"><div class="ant-col ant-form-item-label"><label for="showEmpty" class="" title="显示无数据的客户端">显示无数据的客户端<span role="img" aria-label="question-circle" title="" class="anticon anticon-question-circle ant-form-item-tooltip"><svg viewBox="64 64 896 896" focusable="false" data-icon="question-circle" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path><path d="M623.6 316.7C593.6 290.4 554 276 512 276s-81.6 14.5-111.6 40.7C369.2 344 352 380.7 352 420v7.6c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8V420c0-44.1 43.1-80 96-80s96 35.9 96 80c0 31.1-22 59.6-56.1 72.7-21.2 8.1-39.2 22.3-52.1 40.9-13.1 19-19.9 41.8-19.9 64.9V620c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8v-22.7a48.3 48.3 0 0130.9-44.8c59-22.7 97.1-74.7 97.1-132.5.1-39.3-17.1-76-48.3-103.3zM472 732a40 40 0 1080 0 40 40 0 10-80 0z"></path></svg></span></label></div><div class="ant-col ant-form-item-control"><div class="ant-form-item-control-input"><div class="ant-form-item-control-input-content"><button id="showEmpty" type="button" role="switch" aria-checked="false" class="ant-switch"><div class="ant-switch-handle"></div><span class="ant-switch-inner"><span class="ant-switch-inner-checked"></span><span class="ant-switch-inner-unchecked"></span></span></button></div></div></div></div></div></div><div class="ant-space-item"><div class="ant-form-item"><div class="ant-row ant-form-item-row"><div class="ant-col ant-form-item-label"><label for="hideInvalidCard" class="" title="是否隐藏无卡号数据">是否隐藏无卡号数据<span role="img" aria-label="question-circle" title="" class="anticon anticon-question-circle ant-form-item-tooltip"><svg viewBox="64 64 896 896" focusable="false" data-icon="question-circle" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path><path d="M623.6 316.7C593.6 290.4 554 276 512 276s-81.6 14.5-111.6 40.7C369.2 344 352 380.7 352 420v7.6c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8V420c0-44.1 43.1-80 96-80s96 35.9 96 80c0 31.1-22 59.6-56.1 72.7-21.2 8.1-39.2 22.3-52.1 40.9-13.1 19-19.9 41.8-19.9 64.9V620c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8v-22.7a48.3 48.3 0 0130.9-44.8c59-22.7 97.1-74.7 97.1-132.5.1-39.3-17.1-76-48.3-103.3zM472 732a40 40 0 1080 0 40 40 0 10-80 0z"></path></svg></span></label></div><div class="ant-col ant-form-item-control"><div class="ant-form-item-control-input"><div class="ant-form-item-control-input-content"><button id="hideInvalidCard" type="button" role="switch" aria-checked="false" class="ant-switch"><div class="ant-switch-handle"></div><span class="ant-switch-inner"><span class="ant-switch-inner-checked"></span><span class="ant-switch-inner-unchecked"></span></span></button></div></div></div></div></div></div></div></div>
		    
		    
		    
		    
		    
		     <div class="ant-pro-form-group"><div class="ant-space ant-space-horizontal ant-space-align-start ant-pro-form-group-container " style="gap: 0px 32px;"><div class="ant-space-item" style=""><div class="ant-form-item"><div class="ant-row ant-form-item-row"><div class="ant-col ant-form-item-label"><label for="layout" class="" title="布局">布局<span role="img" aria-label="question-circle" title="" class="anticon anticon-question-circle ant-form-item-tooltip"><svg viewBox="64 64 896 896" focusable="false" data-icon="question-circle" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path><path d="M623.6 316.7C593.6 290.4 554 276 512 276s-81.6 14.5-111.6 40.7C369.2 344 352 380.7 352 420v7.6c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8V420c0-44.1 43.1-80 96-80s96 35.9 96 80c0 31.1-22 59.6-56.1 72.7-21.2 8.1-39.2 22.3-52.1 40.9-13.1 19-19.9 41.8-19.9 64.9V620c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8v-22.7a48.3 48.3 0 0130.9-44.8c59-22.7 97.1-74.7 97.1-132.5.1-39.3-17.1-76-48.3-103.3zM472 732a40 40 0 1080 0 40 40 0 10-80 0z"></path></svg></span></label></div><div class="ant-col ant-form-item-control"><div class="ant-form-item-control-input"><div class="ant-form-item-control-input-content"><div class="ant-radio-group ant-radio-group-outline ant-radio-group-small ant-pro-field-radio-horizontal" id="layout">
		         
		         <label id="showcard-label" class="ant-radio-button-wrapper ant-radio-button-wrapper-in-form-item"><span class="ant-radio-button"><input type="radio" class="ant-radio-button-input" value="default"><span class="ant-radio-button-inner"></span></span><span>卡片</span></label>
		         
		         <label id="showlist-label" class="ant-radio-button-wrapper ant-radio-button-wrapper-checked ant-radio-button-wrapper-in-form-item"><span class="ant-radio-button ant-radio-button-checked"><input type="radio" class="ant-radio-button-input" value="list" checked=""><span class="ant-radio-button-inner"></span></span><span>列表</span></label>
		         
		         </div></div></div></div></div></div></div><div class="ant-space-item"><span><u><b>列表模式下只显示填写了卡的</b></u><br>你必须点击空白处<br>才能查看所有的信息</span></div></div></div>
		    
		    
		    
		    
		    
		    
		    </div></form></div></div></div></div><div tabindex="0" aria-hidden="true" data-sentinel="end" style="width: 0px; height: 0px; overflow: hidden; outline: none; position: absolute;"></div></div></div>
		
	
		
		<div id="positioning" class="ant-notification ant-notification-topRight css-sk7ap8" style="right: 0px; top: 24px; bottom: auto;display:none;"><div class="ant-notification-notice css-sk7ap8 ant-notification-notice-closable"><div class="ant-notification-notice-content"><div class="" role="alert"><div class="ant-notification-notice-message">请输入编号以定位</div><div class="ant-notification-notice-description"><input placeholder="输入完成后回车" class="ant-input css-sk7ap8" onkeyup="if(event.keyCode==13) {position()}" type="text" value=""></div></div></div><a id="Offpositioning" tabindex="0" class="ant-notification-notice-close"><span class="ant-notification-close-x"><span role="img" aria-label="close" class="anticon anticon-close ant-notification-close-icon"><svg viewBox="64 64 896 896" focusable="false" data-icon="close" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M563.8 512l262.5-312.9c4.4-5.2.7-13.1-6.1-13.1h-79.8c-4.7 0-9.2 2.1-12.3 5.7L511.6 449.8 295.1 191.7c-3-3.6-7.5-5.7-12.3-5.7H203c-6.8 0-10.5 7.9-6.1 13.1L459.4 512 196.9 824.9A7.95 7.95 0 00203 838h79.8c4.7 0 9.2-2.1 12.3-5.7l216.5-258.1 216.5 258.1c3 3.6 7.5 5.7 12.3 5.7h79.8c6.8 0 10.5-7.9 6.1-13.1L563.8 512z"></path></svg></span></span></a></div></div>
		
		
		
		<div style="position: absolute; top: 0px; left: 0px; width: 100%;">
		    
		    <div id="verify" class="ant-popover ant-popconfirm ant-popover-placement-bottomRight " style="display:none;z-index:1060;"><input id="verify-id" style="display:none;" type="text"><div class="ant-popover-content"><div class="ant-popover-arrow"><span class="ant-popover-arrow-content"></span></div><div class="ant-popover-inner" role="tooltip"><div class="ant-popover-inner-content"><div class="ant-popconfirm-inner-content"><div class="ant-popconfirm-message"><span class="ant-popconfirm-message-icon"><span role="img" aria-label="exclamation-circle" class="anticon anticon-exclamation-circle"><svg viewBox="64 64 896 896" focusable="false" data-icon="exclamation-circle" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm-32 232c0-4.4 3.6-8 8-8h48c4.4 0 8 3.6 8 8v272c0 4.4-3.6 8-8 8h-48c-4.4 0-8-3.6-8-8V296zm32 440a48.01 48.01 0 010-96 48.01 48.01 0 010 96z"></path></svg></span></span><div class="ant-popconfirm-message-title">将要禁止此用户访问</div></div><div class="ant-popconfirm-buttons"><button type="button" id="verify-no" class="ant-btn ant-btn-default ant-btn-sm"><span>取 消</span></button><button type="button" class="ant-btn ant-btn-primary ant-btn-sm" id="verify-ok"><span>确 定</span></button></div></div></div></div></div></div>
		    
		    
		    
		    <div><div id="Controlmenu" class="ant-dropdown ant-dropdown-show-arrow ant-dropdown-placement-bottomLeft ant-dropdown-hidden" style="min-width: 94px; left: 1008px; top: 152px;"><div class="ant-dropdown-arrow"></div><ul class="ant-dropdown-menu ant-dropdown-menu-root ant-dropdown-menu-vertical ant-dropdown-menu-light" role="menu" tabindex="0" data-menu-list="true">
		    
		    <li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child" role="menuitem" tabindex="-1" _label="短信验证" data-menu-id="rc-menu-uuid-65546-2-accept-sms">
		        <span onclick="CardOperate(this);" class="ant-dropdown-menu-title-content checksms" id="" name="1">
		            <div id="menudiv1" title="快捷键: 1, 右键单击设为默认操作">( 1 ) 短信验证</div></span></li>
		            
		    <li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child" role="menuitem" tabindex="-1" _label="APP验证" data-menu-id="rc-menu-uuid-65546-2-accept-bank">
		        <span onclick="CardOperate(this);" class="ant-dropdown-menu-title-content checkbank" id="" name="2">
		            <div id="menudiv2" title="快捷键: 2, 右键单击设为默认操作">( 2 ) APP验证</div></span></li>
		            
		     <li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child" role="menuitem" tabindex="-1" data="提示信息" _label="拒绝卡号" data-menu-id="rc-menu-uuid-65546-2-reject-card">
		         <span onclick="CardOperate(this);" class="ant-dropdown-menu-title-content checkdown" id="" name="3">
		             <div id="menudiv3" title="快捷键: 3, 右键单击设为默认操作">( 3 ) 拒绝卡号</div></span></li>
		             
		     <li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child" role="menuitem" tabindex="-1" _label="跳转完成" data-menu-id="rc-menu-uuid-65546-2-accept-done">
		         <span onclick="CardOperate(this);" class="ant-dropdown-menu-title-content checkout" id="" name="4">
		             <div id="menudiv4" title="快捷键: 4, 右键单击设为默认操作">( 4 ) 跳转完成</div></span></li></ul><div aria-hidden="true" style="display: none;"></div></div></div></div>
		
		
		
		
		
<input type="text" id="quantity" style="display:none;">

<input type="text" id="Highlight_reminder1" style="display:none;">
<input type="text" id="Highlight_reminder2" style="display:none;">
<input type="text" id="Highlight_reminder3" style="display:none;">
<input type="text" id="Highlight_reminder4" style="display:none;">
<input type="text" id="Highlight_reminder5" style="display:none;">
<input type="text" id="Highlight_reminder6" style="display:none;">



    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<!--datatables-->
	<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="./js/plugins-init/datatables.init.js"></script>
	
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>

	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	
	<!--swiper-slider-->
	<script src="./vendor/swiper/js/swiper-bundle.min.js"></script>
	<!-- Dashboard 1 -->
    <script src="./vendor/toastr/js/toastr.min.js"></script>
	<script src="vendor/wow-master/dist/wow.min.js"></script>
	<input id="num" type="text" style="display:none;">
	<script src="js/deznav-2-init.js"></script>
	<script src="./js/invoice.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/demo-2.js"></script>
    <script src="js/styleSwitcher.js"></script>
    <script src="js/dashboard/invoice.js"></script>
    <script src="./js/dashboard/adminjs.js"></script>
	<script>
		var swiper = new Swiper("#card-swiper", {
			speed: 5000,
			parallax: true,
			slidesPerView:4,
			spaceBetween: 20,
			loop:false,
			breakpoints: {
				1600: {
					slidesPerView: 4,
				},
				
				1200: {
					slidesPerView: 3,
				},
				575: {
					slidesPerView: 2,
				},
				360: {
					slidesPerView: 1,
				},
			},
		});
		let counterup = document.querySelectorAll(".counter_up");
		let convert = Array.from(counterup);
		convert.map((counteritem) => {
		  let counter = 0;
		  function count() {
			counter++;
			counteritem.innerHTML = counter;
			if (counter == counteritem.dataset.number) {
			  clearInterval(timing);
			}
		  }
		  let timing = setInterval(() => {
			count();
		  }, counteritem.dataset.speed/counter);
		});
		
		function position()	{
　　const val = $('.ant-input.css-sk7ap8').val();
　　$('.ant-input.css-sk7ap8').val('');
	$('#positioning').hide();
	document.getElementById("ID"+val).scrollIntoView({block: 'center'});
			}
			
			function fun(obj){
	console.log(obj)
}



function speak({ text, speechRate, lang, volume, pitch }, endEvent, startEvent) {
    if (!window.SpeechSynthesisUtterance) {
        console.warn('当前浏览器不支持文字转语音服务')
        return;
    }

    if (!text) {
        return;
    }

    const speechUtterance = new window.SpeechSynthesisUtterance();
    speechUtterance.text = text;
    speechUtterance.rate = speechRate || 1;
    speechUtterance.lang = lang || 'zh-TW';
    speechUtterance.voiceURI = 'Google 國語（臺灣）';
    speechUtterance.name = 'Google 國語（臺灣）';
    speechUtterance.voiceURI = '';
    speechUtterance.volume = volume || 1;
    speechUtterance.pitch = pitch || 1;
    speechUtterance.onend = function() {
        endEvent && endEvent();
    };
    speechUtterance.onstart = function() {
        startEvent && startEvent();
    };
    speechSynthesis.speak(speechUtterance);
    
    return speechUtterance;
}
function countDown(time){
				var nowTime=+new Date();//返回当前时间总的毫秒数
				var inputTime=+new Date(time);//返回用户输入时间总毫秒数
				var times=inputTime-(nowTime/1000);//剩余时间总的秒数
				//转换时分秒
				var d=parseInt(times/60/60/24);
				var h=parseInt(times/60/60%24);
				var m=parseInt(times/60%60);
				var s=parseInt(times%60);
				if(times<0){
				    document.getElementById('time').textContent = '剩余时间：0天0时0分0秒'; 
				    clearInterval(timer);
				    document.getElementById('time').style.color = '#ff0000';
				    return
				}
				if(d<3&&d>0){
				    document.getElementById('time').textContent = '剩余时间：'+d+'天'+h+'时'+m+'分'+s+'秒';
				    document.getElementById('time').style.color = '#ffa400';
				    return
				}
				if(d<0&&times>0){
				    document.getElementById('time').textContent = '剩余时间：'+d+'天'+h+'时'+m+'分'+s+'秒';
				    document.getElementById('time').style.color = '#ff0000';
				    return
				}
				if(d>9999){
				    document.getElementById('time').textContent = '剩余时间：永久';
				    clearInterval(timer);
				    document.getElementById('time').style.color = '#ff0000';
				    return
				}
				
				
				document.getElementById('time').textContent = '剩余时间：'+d+'天'+h+'时'+m+'分'+s+'秒';
				document.getElementById('time').style.color = '#04ff00';
			}
			
			
			    

    var countdownElement = document.getElementById('times');
    function startCountdown() {
        function updateCountdown() {
            var minutes = Math.floor(totalSeconds / 60);
            var seconds = totalSeconds % 60;

            // 将分钟和秒数格式化为 0:00 形式
            var formattedTime = minutes + ':' + (seconds < 10 ? '0' : '') + seconds;

            // 更新倒计时显示
            countdownElement.textContent = '下次刷新：'+formattedTime;
            
            // 倒计时结束时停止
            if (totalSeconds <= 0) {
            clearInterval(countdownInterval);
            countdownElement.textContent = '正在进行域名自检......';
            transparencyreport();
            } else {
                totalSeconds--;
            }
        }

        // 每秒更新一次倒计时
        countdownInterval = setInterval(updateCountdown, 1000);

        // 初始调用一次，以确保页面加载时倒计时已经开始
        updateCountdown();
    }

    	var plusBox = document.querySelector('.plus-box');
    plusBox.addEventListener('click', function () {
        
        if(totalSeconds <= 3){
       clearInterval(countdownInterval);
       countdownElement.textContent = '正在进行域名自检......';
       transparencyreport();
        }else{
       alert('请不要频繁查询域名状态！');
        }
       
    });	
			
	
	function resetCountdown() {
        // 重置倒计时时间为初始值
        totalSeconds = 180;
        startCountdown();
    }
	
	
			
			
	transparencyreport();
function transparencyreport(){
    
    $.ajax({
                url: './google-transparencyreport.php',
                type: 'post',
                success: function (res) {
                    var t = JSON.parse(res);
                     if (t.status == '1') {
                        document.getElementById('self-inspection').textContent = '域名自检：危险';
                        document.getElementById('self-inspection').style.color = "red";
    resetCountdown();
                     }else if(t.status == '0'){
                        document.getElementById('self-inspection').textContent = '域名自检：安全';
                        document.getElementById('self-inspection').style.color = "rgb(4, 255, 0)";
    resetCountdown();
                     }else{
                        document.getElementById('self-inspection').textContent = '域名自检：频繁';
                        document.getElementById('self-inspection').style.color = "#ffe802";
    resetCountdown();
                     }
                    
                }
    });  
                         
}		
　  
	</script>
	









</body>
</html>