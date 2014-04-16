	
	
	var inc=0,k=0, kha=5;
	
	function nextQuestion(){
		  var div1=$("#progression_question");
		  var div2=$("#progression_question_bar");
		  var div3=$("#span_num_quest");
		  var div4=$("#num_question");
		div1.animate({top:'-3px'},400);
		div1.animate({top:'3px'},400);
		div1.animate({top:'-3px'},400);
		div1.animate({top:'3px'},400);
		div1.animate({top:'0px'},400);

		if(inc<612){inc=inc+41;k++};

		div2.animate({width:(inc+5)+'px'},400);
		div2.animate({width:(inc-5)+'px'},400);
		div2.animate({width:(inc+5)+'px'},400);
		div2.animate({width:(inc-5)+'px'},400);
		div2.animate({width:(inc)+'px'},400);
		div3.html("15 السؤال "+k+" من أصل");
		div4.html(" "+k);
		if(k==15)div3.html("إنتهى الإختبار");
		 for(i=1;i<5;i++){
		 $("#rep"+i).animate({  borderSpacing: -360 }, {
			step: function(now,fx) {
			  $(this).css('-webkit-transform','rotateX('+now+'deg)'); 
			  $(this).css('-moz-transform','rotateX('+now+'deg)');
			  $(this).css('transform','rotateX('+now+'deg)');
			},
			duration:'slow'
		},'linear');
		}

		 $("#img_quest").animate({  borderSpacing: -360 }, {
			step: function(now,fx) {
			  $(this).css('-webkit-transform','rotateY('+now+'deg)'); 
			  $(this).css('-moz-transform','rotateY('+now+'deg)');
			  $(this).css('transform','rotateY('+now+'deg)');
			},
			duration:'slow'
		},'linear');

		$("#question").animate({  borderSpacing: -360 }, {
			step: function(now,fx) {
			  $(this).css('-webkit-transform','rotateX('+now+'deg)'); 
			  $(this).css('-moz-transform','rotateX('+now+'deg)');
			  $(this).css('transform','rotateX('+now+'deg)');
			},
			duration:'slow'
		},'linear');

		 
	}
	
	 
	
	function getQuestion(id)
	{
		var xhr = getXMLHttpRequest();
	
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
					var q=document.getElementById("question");
					//var cn=document.createTextNode(xhr.responseXML.getElementsByTagName(question));
					//q.appendChild(cn) ;
					console.log(xhr.responseXML.getElementsByTagName('reponse1').innerHTML);
					
		}
	};
	
	xhr.open("GET", "http://127.0.0.1/remi/Symfony/web/app_dev.php/questions/pick/"+id, true);
	xhr.send(null);
	}
	
	
	getQuestion(25);
		
		var rep1=document.getElementById("rep1_a"); 
		
		
		
	$("#valider").click(function(){
		nextQuestion();
		//getQuestion(kha); kha=kha+1 ;
	
	});