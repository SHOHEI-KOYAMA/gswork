 $(".search").on('click',()=>{
 		$(".main-page").hide();
 		$('#search_result').empty();
    	let input_keyword = $('.input_keyword').val();
	    console.log(input_keyword);
    	$.ajax({
    	type:"POST",
    	url : "events_scraping.php",
        type : "POST",
        data : {keyword: input_keyword}
	    }).done((data)=>{
	    	// var jsondata = $.parseJSON(data);
	    	var jsondata = data;
	        console.log(jsondata);
	        var length = jsondata.length;
	        for(var i =1; i< 20; i++){
	            var resulthtml = jsondata[i].event;
	            $("#search_result").append(resulthtml);
	        }
	        console.log("success!");

	    }).fail((data)=>{
	    	console.log("failed");

	    });
    });