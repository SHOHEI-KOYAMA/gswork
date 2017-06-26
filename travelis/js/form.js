$(document).ready(function(){
  $(".form-wrapper .button").click(function(){
    var button = $(this);
    var currentSection = button.parents(".section");
    var currentSectionIndex = currentSection.index();
    var headerSection = $('.steps li').eq(currentSectionIndex);
    currentSection.removeClass("is-active").next().addClass("is-active");
    headerSection.removeClass("is-active").next().addClass("is-active");

    $(".form-wrapper").submit(function(e) {
      e.preventDefault();
    });

    if(currentSectionIndex === 3){
      $(document).find(".form-wrapper .section").first().addClass("is-active");
      $(document).find(".steps li").first().addClass("is-active");
    }
  });
});

$("#submit_button").on("click",()=>{
  let name = $('input[name = "name"]').val();
  let email = $('input[name = "email"]').val();
  let destination = $('input[name = "destination"]').val();
  let address = $('input[name = "address"]').val();
  let arrival = $('input[name = "arrival"]').val();
  let departure = $('input[name = "departure"]').val();
  let r1 = $('input[name = "r1"]').val();
  let s1 = $('input[name = "s1"]').val();
  let p1 = $('input[name = "p1"]').val();

$.ajax({
      type:"POST",
      url : "select.php",
      data : {
        name: name, 
        email: email, 
        destination:destination,
        address:address,
        arrival:arrival,
        departure: departure,
        r1:r1,
        s1:s1,
        p1:p1
      }
      }).done((data)=>{
        console.log(data);
        console.log("success!");

        $.ajax({
          type:"POST",
          url:"index.php",
          data:{
            result:data
          }
        }).done((data)=>{
          window.location.href = "./index.php";
        });

      }).fail((data)=>{
        console.log("failed");

      });

});

