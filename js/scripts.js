
/* - scripts.js - */
// http://novosite.fbc-ba.com.br/portal_javascripts/scripts.js?original=1
$j=jQuery.noConflict();$j(window).load(function(){$j('#slider').nivoSlider({effect:'random',animSpeed:500,pauseTime:8000,startSlide:0,directionNav:false,controlNav:false,controlNavThumbs:false,pauseOnHover:false,manualAdvance:false,prevText:'',nextText:'',randomStart:false})});$j(document).ready(function(){$j(".fancybox").fancybox({wrapCSS:'fancybox-custom',openEffect:'elastic',openSpeed:200,closeEffect:'elastic',closeSpeed:200,closeClick:true,helpers:{title:{type:'inside'},overlay:{css:{'background':'rgba(238,238,238,0.85)'}}}});$j(".mais").click(function(){var size=$j(".aumentar-fonte").css('font-size');size=size.replace('px','');size=parseInt(size)+1.4;$j(".aumentar-fonte").animate({'font-size':size+'px'})});$j(".menos").click(function(){var size=$j(".aumentar-fonte").css('font-size');size=size.replace('px','');size=parseInt(size)-1.4;$j(".aumentar-fonte").animate({'font-size':size+'px'})});$j(".normal").click(function(){$j(".aumentar-fonte").animate({'font-size':'16px'})});$j('div.accordion').click(function(){$j(this).parent().find('div.informacoes').slideToggle("normal");$j('.accordion').removeClass("atual");$j(this).attr("class","accordion atual")});$j("div.informacoes").hide();$j("#open").trigger('click');$j('html, body').animate({scrollTop:$j(".migalha").offset().bottom},70)});$=jQuery.noConflict();$(function(){$().timelinr({autoPlay:'false',autoPlayDirection:'forward',autoPlayPause:5000,startAt:1})});var win=null;
function NovaJanela(pagina,nome,w,h,scroll){LeftPosition=(screen.width)?(screen.width-w)/2:0;TopPosition=(screen.height)?(screen.height-h)/2:0;settings='height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
win=window.open(pagina,nome,settings)}

