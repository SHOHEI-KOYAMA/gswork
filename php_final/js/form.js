$(document).ready(function(){
  $(".form-wrapper .button").click(function(){
    var button = $(this);
    var currentSection = button.parents(".section");
    var currentSectionIndex = currentSection.index();
    var headerSection = $('.steps li').eq(currentSectionIndex);
    currentSection.removeClass("is-active").next().addClass("is-active");
    headerSection.removeClass("is-active").next().addClass("is-active");

    // $(".form-wrapper").submit(function(e) {
    //   e.preventDefault();
    // });

    if(currentSectionIndex === 3){
      $(document).find(".form-wrapper .section").first().addClass("is-active");
      $(document).find(".steps li").first().addClass("is-active");
    }
  });
});



// $("#submit_button").on("click",()=>{
//   let name = $('input[name = "name"]').val();
//   let email = $('input[name = "email"]').val();
//   let destination = $('input[name = "destination"]').val();
//   let address = $('input[name = "address"]').val();
//   let arrival = $('input[name = "arrival"]').val();
//   let departure = $('input[name = "departure"]').val();
//   let g1 = $('[name="g1"]:checked').val();
//   let r1 = $('[name="r1"]:checked').val();
//   let s1 = $('[name="s1"]:checked').val();
//   let p1 = $('[name="p1"]:checked').val();
//   console.log(r1);
//   console.log(s1);
//   console.log(p1);
// $.ajax({
//       type:"POST",
//       url : "search.php",
//       data : {
//         name: name, 
//         email: email, 
//         destination:destination,
//         address:address,
//         arrival:arrival,
//         departure: departure,
//         g1:g1,
//         r1:r1,
//         s1:s1,
//         p1:p1
//       }
//       }).done((data)=>{
//         let obj_data = JSON.parse(data);
//         console.log(obj_data);
//         console.log("success!");
        
//       //   $.ajax({
//       //     type:"POST",
//       //     url:"result.php",
//       //     data:{
//       //       result:obj_data
//       //     }
//       //   }).done((data)=>{
//       //       console.log(data);
//       //       let obj_data = JSON.parse(data);
//       //       console.log(obj_data);
//       //       $(".search").hide();
//       //       $("#tops-section").html(obj_data["tops"]);
//       //       $("#bottoms-section").html(obj_data["bottoms"]);
//       //       $("#main").fadeIn();

//       //     // window.location.href = "./main.php";
//       //   });

//       }).fail((data)=>{
//         console.log("failed");

//       });

// });

