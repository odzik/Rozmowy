function browser(){
	$.ajax({
		type: "POST",
		url: "../php/przegladarka.php",
		success: function(g){
			if(g == 'Chrome'){
				$("#menu").css("zoom", '80%');
				$("#slajder").css("zoom", '80%');
				$("#uslugi-content").css("zoom", '80%');
				$("#kontakt").css("zoom", '80%');
				$("#stopka").css("zoom", '80%');
				$("#subskrypcja").css({"zoom": "75%", "margin-top": "3px"});
				$("#contact").css({"zoom": "75%", "margin-top": "2px"});
			}
			if(g == 'Mobile'){
				$("#menu").css("zoom", '55%');
				$(".logo").css({"margin-left": "50px"});
				$(".logo img").css({"width": "50px", "height": "50px", "margin-top": "5px"});
				$("#social").css({"width": "400px"});
				$("#social ul").css({"width": "350px", "margin-left": "auto", "margin-right": "auto" });
				$("#text-content ul li").css({"overflow-y": "auto", "height": "600px", "width": "800px"});
				$("#jezyk").css("margin-left", "80px");
				$("#slajder").css({"zoom": "19%", "margin-top": "825px", "height": "1050px"});
				$("#slajder-content").css({"height": "1000px"});
				$("#uslugi-content").css({"zoom": '19%', "height": "1250px", "margin-top": "50px", "top": "-250px", "position": "relative"});
				$("#slajder #slajder-content ul li img").css({"height": "1000px"})
				$("#uslugi-tlo").css({"height": "1250px"});
				$("#uslugi").css({"height": "1250px"});
				$("#uslugi-content #uslugi form ul li select[name=uslugi]").css({"width": "645"});
				$("#kontakt").css("zoom", '17%');
				$("#stopka").css("zoom", '25%');
				$("#social").css({"margin-left": "auto", "margin-right": "auto"})
				$("#subskrypcja").css({"zoom": "40%", "margin-top": "3px"});
				$("#contact").css({"zoom": "60%", "margin-top": "2px"});
			}
		}
	});
}

$(document).ready(function(){
	browser();
});