 $(".update").on('click',()=>{
    	let name = $('[name=name]').val();
	    let lid = $('[name=lid]').val();
	    let lpw = $('[name=lpw]').val();
	    let id = $('[name=id]').val();
	    console.log(name);
    	$.ajax({
    	type:"POST",
    	url : "update.php",
        type : "POST",
        data : {name: name,
        		lid : lid,
        		lpw : lpw,
        		id : id}
	    }).done(()=>{
	    	$("fieldset").append('<p class="updates text-center">登録情報が更新されました。</p>');
	    	$(".updates").fadeOut(1500);
	    	console.log("success!");
	    }).fail((data)=>{
	    	console.log("failed");

	    });
    });