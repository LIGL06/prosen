$(window).on("load",function(){$(".js-mega-menu").HSMegaMenu({event:"hover",pageContainer:$(".container"),breakpoint:767,hideTimeOut:0})}),$(document).ready(function(){$.HSCore.components.HSHeader.init($("#header")),$.HSCore.components.HSUnfold.init($("[data-unfold-target]"),{afterOpen:function(){$(this).find('input[type="search"]').focus()}}),$.HSCore.components.HSMalihuScrollBar.init($(".js-scrollbar")),$.HSCore.helpers.HSFocusState.init(),$.HSCore.components.HSValidation.init(".js-validate",{rules:{confirmPassword:{equalTo:"#password"}}}),$.HSCore.components.HSShowAnimation.init(".js-animation-link"),$.HSCore.components.HSFancyBox.init(".js-fancybox");new Typed(".u-text-animation.u-text-animation--typing",{strings:["logística.","seguridad industrial.","vigilancia."],typeSpeed:60,loop:!0,backSpeed:25,backDelay:1500});$("#js-slick-carousel").slick({arrows:!0,infinite:!0,dots:!0,speed:300,slidesToShow:3,slidesToScroll:1,responsive:[{breakpoint:992,settings:{slidesToShow:2}},{breakpoint:768,settings:{slidesToShow:1}},{breakpoint:554,settings:{slidesToShow:1}}]}),$.HSCore.components.HSGoTo.init(".js-go-to")});