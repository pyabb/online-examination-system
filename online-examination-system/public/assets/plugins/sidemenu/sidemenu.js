(()=>{function e(){window.innerWidth>=992&&document.querySelector("body").classList.contains("sidenav-toggled")&&document.querySelector("body").classList.contains("horizontal")&&document.querySelector("body").classList.remove("sidenav-toggled")}!function(){"use strict";$(".side-menu");$(document).on("click",'[data-bs-toggle="sidebar"]',(function(e){e.preventDefault(),$(".app").toggleClass("sidenav-toggled")})),e(),$("[data-bs-toggle='slide']").off("click"),$("[data-bs-toggle='sub-slide']").off("click"),$("[data-bs-toggle='sub-slide2']").off("click"),$("[data-bs-toggle='slide']").on("click",(function(e){var t=$(this),n=t.next(),i=".slide-menu";if(n.is(i)&&n.is(":visible"))n.slideUp(300,(function(){n.removeClass("open")})),n.parent("li").removeClass("is-expanded");else if(n.is(i)&&!n.is(":visible")){var s=t.parents("ul").first();s.find("ul:visible").slideUp(300).removeClass("open");var a=t.parent("li");n.slideDown(300,(function(){n.addClass("open"),s.find("li.is-expanded").removeClass("is-expanded"),a.addClass("is-expanded")}))}n.is(i)&&e.preventDefault()})),$("[data-bs-toggle='sub-slide']").on("click",(function(e){var t=$(this),n=t.next(),i=".sub-slide-menu";if(n.is(i)&&n.is(":visible"))n.slideUp(300,(function(){n.removeClass("open")})),n.parent("li").removeClass("is-expanded");else if(n.is(i)&&!n.is(":visible")){var s=t.parents("ul").first();s.find("ul:visible").slideUp(300).removeClass("open");var a=t.parent("li");n.slideDown(300,(function(){n.addClass("open"),s.find("li.is-expanded").removeClass("is-expanded"),a.addClass("is-expanded")}))}n.is(i)&&e.preventDefault()})),$("[data-bs-toggle='sub-slide2']").on("click",(function(e){var t=$(this),n=t.next(),i=".sub-slide-menu2";if(n.is(i)&&n.is(":visible"))n.slideUp(300,(function(){n.removeClass("open")})),n.parent("li").removeClass("is-expanded");else if(n.is(i)&&!n.is(":visible")){var s=t.parents("ul").first();s.find("ul:visible").slideUp(300).removeClass("open");var a=t.parent("li");n.slideDown(300,(function(){n.addClass("open"),s.find("li.is-expanded").removeClass("is-expanded"),a.addClass("is-expanded")}))}n.is(i)&&e.preventDefault()})),$(".hor-content").on("click",(function(){$(".side-menu li").each((function(){$(".side-menu ul.open").slideUp(300),$(this).parent().removeClass("is-expanded"),$(this).parent().parent().removeClass("open"),$(this).parent().parent().prev().removeClass("is-expanded"),$(this).parent().parent().parent().removeClass("is-expanded"),$(this).parent().parent().parent().parent().removeClass("open"),$(this).parent().parent().parent().parent().parent().removeClass("is-expanded")}))}));var t=window.location.pathname.split("/");$(".app-sidebar li a").each((function(){var e=$(this).attr("href");if(e&&t[t.length-1]==e)return $(this).addClass("active"),$(this).parent().addClass("is-expanded"),$(this).parent().parent().prev().addClass("active"),$(this).parent().parent().addClass("open"),$(this).parent().parent().prev().addClass("is-expanded"),$(this).parent().parent().parent().addClass("is-expanded"),$(this).parent().parent().parent().parent().addClass("open"),$(this).parent().parent().parent().parent().prev().addClass("active"),$(this).parent().parent().parent().parent().parent().addClass("is-expanded"),$(this).parent().parent().parent().parent().parent().prev().addClass("active"),$(this).parent().parent().parent().parent().parent().prev().parent().addClass("is-expanded"),!1})),$(".slide-item").hasClass("active")&&$(".app-sidebar").animate({scrollTop:$("a.slide-item.active").offset().top-600},600),$(".sub-slide-item").hasClass("active")&&$(".app-sidebar").animate({scrollTop:$("a.sub-slide-item.active").offset().top-600},600);var n=function(){$(window).outerWidth()<=1024?($("body").addClass("sidebar-gone"),$(document).off("click","body").on("click","body",(function(e){($(e.target).hasClass("sidebar-show")||$(e.target).hasClass("search-show"))&&($("body").removeClass("sidebar-show"),$("body").addClass("sidebar-gone"),$("body").removeClass("search-show"))}))):$("body").removeClass("sidebar-gone")};n(),$(window).resize(n()),$(window).on("scroll",(function(e){$(window).scrollTop()>=70?($(".app-header").addClass("fixed-header"),$(".app-header").addClass("visible-title")):($(".app-header").removeClass("fixed-header"),$(".app-header").removeClass("visible-title"))})),$(window).on("scroll",(function(e){$(window).scrollTop()>=70?($(".horizontal-main").addClass("fixed-header"),$(".horizontal-main").addClass("visible-title")):($(".horizontal-main").removeClass("fixed-header"),$(".horizontal-main").removeClass("visible-title"))}))}(),jQuery(function(){"use strict";document.addEventListener("touchstart",(function(){}),!1),jQuery((function(){jQuery("body").wrapInner('<div class="horizontalMenucontainer" />')}))}()),$(".app-sidebar").hover((function(){$(".app").hasClass("sidenav-toggled")&&$(".app").addClass("sidenav-toggled-open")}),(function(){$(".app").hasClass("sidenav-toggled")&&$(".app").removeClass("sidenav-toggled-open")}));var t=document.querySelector(".slide-left"),n=document.querySelector(".slide-right");function i(){var e=document.querySelectorAll(".slide"),t=document.querySelectorAll(".slide-menu");e.forEach((function(e,t){1==e.classList.contains("is-expanded")&&e.classList.remove("is-expanded")})),t.forEach((function(e,t){1==e.classList.contains("open")&&(e.classList.remove("open"),e.style.display="none")}))}t.addEventListener("click",(function(){i()}),!0),n.addEventListener("click",(function(){i()}),!0);var s=$(".side-menu"),a=(document.querySelector(".horizontal-main"),document.querySelector(".side-menu"),[window.innerWidth]);function d(){setTimeout((function(){var e=document.querySelector(".horizontal-main"),t=document.querySelector(".side-menu"),n=document.querySelector(".main-sidemenu"),i=(null==e?void 0:e.offsetWidth)-(null==n?void 0:n.offsetWidth),s=Math.ceil(window.getComputedStyle(t).marginLeft.split("px")[0]),a=Math.ceil(window.getComputedStyle(t).marginRight.split("px")[0]),d=t.scrollWidth+(0-(null==e?void 0:e.offsetWidth))+i;$("body").hasClass("ltr")?t.style.marginRight=0:t.style.marginLeft=0,t.scrollWidth-2<(null==e?void 0:e.offsetWidth)-i?($("#slide-right").addClass("d-none"),$("#slide-left").addClass("d-none")):0!=s?$("#slide-left").removeClass("d-none"):s!=-d?$("#slide-right").removeClass("d-none"):0!=a?$("#slide-left").removeClass("d-none"):a!=-d&&$("#slide-right").removeClass("d-none")}),100)}$(window).resize((function(){var t=document.querySelector(".horizontal-main"),n=document.querySelector(".side-menu"),i=document.querySelector(".main-sidemenu"),l=(null==t?void 0:t.offsetWidth)-(null==i?void 0:i.offsetWidth),o=Math.ceil(window.getComputedStyle(n).marginLeft.split("px")[0]),r=Math.ceil(window.getComputedStyle(n).marginRight.split("px")[0]),p=n.scrollWidth+(0-(null==t?void 0:t.offsetWidth))+l;$("body").hasClass("ltr")?o>-p==0&&(null==t?void 0:t.offsetWidth)-l<n.scrollWidth?s.stop(!1,!0).animate({marginLeft:-p},{duration:400}):s.stop(!1,!0).animate({marginLeft:0},{duration:400}):r>-p==0&&(null==t?void 0:t.offsetWidth)<n.scrollWidth?s.stop(!1,!0).animate({marginRight:-p},{duration:400}):s.stop(!1,!0).animate({marginRight:0},{duration:400}),d(),e(),a.push(window.innerWidth),a.length>3&&a.shift();var u,c=a[a.length-2];if(window.innerWidth>=992&&c<992||window.innerWidth>=992){if(document.querySelector("body").classList.contains("horizontal")){document.querySelectorAll(".side-menu li").forEach((function(e,t){e.classList.remove("is-expanded")}));$("[data-bs-toggle='sub-slide']").parents("ul").find("ul:visible").slideUp(300).removeClass("open"),$("[data-bs-toggle='sub-slide2']").parents("ul").find("ul:visible").slideUp(300).removeClass("open")}}else u=window.location.pathname.split("/"),$(".app-sidebar li a").each((function(){var e=this,t=$(this).attr("href"),n=a[a.length-2];setTimeout((function(){if((window.innerWidth<992&&n>992||1!=document.querySelector("body").classList.contains("horizontal"))&&t&&u[u.length-1]==t)return $(e).addClass("active"),$(e).parent().addClass("is-expanded"),$(e).parent().parent().prev().addClass("active"),$(e).parent().parent().prev().addClass("is-expanded"),$(e).parent().parent().parent().addClass("is-expanded"),$(e).parent().parent().parent().parent().prev().addClass("active"),$(e).parent().parent().parent().parent().parent().addClass("is-expanded"),$(e).next().slideDown(300,(function(){})),$(e).parent().parent().slideDown(300,(function(){$(this).parent().parent().addClass("open")})),$(e).parent().parent().parent().parent().slideDown(300,(function(){$(this).parent().parent().parent().parent().addClass("open")})),$(e).parent().parent().parent().parent().parent().prev().addClass("active"),$(e).parent().parent().parent().parent().parent().prev().parent().addClass("is-expanded"),!1}),100)}))})),d(),$(document).on("click",".ltr #slide-left",(function(){var e=document.querySelector(".horizontal-main"),t=document.querySelector(".side-menu"),n=document.querySelector(".main-sidemenu"),i=(null==e?void 0:e.offsetWidth)-(null==n?void 0:n.offsetWidth),a=Math.ceil(window.getComputedStyle(t).marginLeft.split("px")[0])+100;a<0?(s.stop(!1,!0).animate({marginLeft:"+=100px"},{duration:400}),(null==e?void 0:e.offsetWidth)-i<t.scrollWidth&&$("#slide-right").removeClass("d-none")):$("#slide-left").addClass("d-none"),a>=0&&(s.stop(!1,!0).animate({marginLeft:0},{duration:400}),null==e||e.offsetWidth,t.scrollWidth),document.querySelectorAll(".sub-nav-sub").forEach((function(e){e.style.display=""})),document.querySelectorAll(".nav-sub").forEach((function(e){e.style.display=""}))})),$(document).on("click",".ltr #slide-right",(function(){var e=document.querySelector(".app-sidebar"),t=document.querySelector(".side-menu"),n=document.querySelector(".main-sidemenu"),i=(null==e?void 0:e.offsetWidth)-(null==n?void 0:n.offsetWidth),a=Math.ceil(window.getComputedStyle(t).marginLeft.split("px")[0])-100,d=t.scrollWidth+(0-(null==e?void 0:e.offsetWidth))+i;a>-d?s.stop(!1,!0).animate({marginLeft:"-=100px",marginRight:0},{duration:400}):(s.stop(!1,!0).animate({marginRight:0,marginLeft:-d},{duration:400}),$("#slide-right").addClass("d-none")),0!=a&&$("#slide-left").removeClass("d-none"),document.querySelectorAll(".sub-nav-sub").forEach((function(e){e.style.display=""})),document.querySelectorAll(".nav-sub").forEach((function(e){e.style.display=""}))})),$(document).on("click",".rtl #slide-left",(function(){var e=document.querySelector(".horizontal-main"),t=document.querySelector(".side-menu"),n=document.querySelector(".main-sidemenu"),i=(null==e?void 0:e.offsetWidth)-(null==n?void 0:n.offsetWidth),a=Math.ceil(window.getComputedStyle(t).marginRight.split("px")[0])+100;a<0?(s.stop(!1,!0).animate({marginLeft:0,marginRight:"+=100px"},{duration:400}),(null==e?void 0:e.offsetWidth)-i<t.scrollWidth&&$("#slide-right").removeClass("d-none")):$("#slide-left").addClass("d-none"),a>=0&&($("#slide-left").addClass("d-none"),s.stop(!1,!0).animate({marginLeft:0},{duration:400})),document.querySelectorAll(".sub-nav-sub").forEach((function(e){e.style.display=""})),document.querySelectorAll(".nav-sub").forEach((function(e){e.style.display=""}))})),$(document).on("click",".rtl #slide-right",(function(){var e=document.querySelector(".app-sidebar"),t=document.querySelector(".side-menu"),n=document.querySelector(".main-sidemenu"),i=(null==e?void 0:e.offsetWidth)-(null==n?void 0:n.offsetWidth),a=Math.ceil(window.getComputedStyle(t).marginRight.split("px")[0])-100,d=t.scrollWidth+(0-(null==e?void 0:e.offsetWidth))+i;a>-d?s.stop(!1,!0).animate({marginLeft:0,marginRight:"-=100px"},{duration:400}):(s.stop(!1,!0).animate({marginLeft:0,marginRight:-d},{duration:400}),$("#slide-right").addClass("d-none")),0!=a&&$("#slide-left").removeClass("d-none"),document.querySelectorAll(".sub-nav-sub").forEach((function(e){e.style.display=""})),document.querySelectorAll(".nav-sub").forEach((function(e){e.style.display=""}))})),document.getElementById("year").innerHTML=(new Date).getFullYear(),document.querySelector(".main-content").addEventListener("click",(function(){if(document.querySelector("body").classList.contains("horizontal")){document.querySelectorAll(".side-menu li").forEach((function(e,t){e.classList.remove("is-expanded")}));$("[data-bs-toggle='sub-slide']").parents("ul").find("ul:visible").slideUp(300).removeClass("open"),$("[data-bs-toggle='sub-slide2']").parents("ul").find("ul:visible").slideUp(300).removeClass("open")}}),!0)})();