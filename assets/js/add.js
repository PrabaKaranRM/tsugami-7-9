// $('#option').bind('change', function(event) {

//     var i= $('#option').val();

//      if(i=="20") // equal to a selection option
//       {
//           $('#hidden-input').show();
//       }
//     else
//       {
//         $('#hidden-input').hide(); // hide the first one
       
//        }
// });


// function changeStatus(){
//     var status = document.getElementById("contactForm");
//     if(status.value == "20"){
//         document.getElementById("hidden-input").style.visibility="visible";
//     }

//     else{
//         document.getElementById("hidden-input").style.visibility="hidden";
//     }
// }

document.getElementById("hidden-input").style.display="none";

function changeStatus(that){
 
   if(that.value == "20"){
    document.getElementById("hidden-input").style.display="block";
   } else {
    document.getElementById("hidden-input").style.display="none";
   }
}