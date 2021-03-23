$(document).ready(function(){
   $(".process_form").submit(processForm);
   $(".__search").submit(processSearch);
  //  $(".authenticate").click(AuthenticateStudent);
})



function processForm(e){
  e.preventDefault();
  $form = $(this);
  $errorFlag = false;
  $formData = $form.serializeArray();
  $formType = $form.attr("data-type");
  $formData.push({name:$formType,value:true})
  for (const $key in $formData) {
    if ($formData.hasOwnProperty($key)) {
      if($formData[$key].value == ""){
        $errorFlag = true;
        $form.find(`input#${$formData[$key].name}`).parent().addClass(`danger_1`)
      }else{
        $form.find(`input#${$formData[$key].name}`).parent().removeClass(`danger_1`)
      }

    }
  }

  if($errorFlag == false){
    $.ajax({
      method:"POST",
      url:`${$SITE}functions/api.php`,
      data:$formData,
      success:function($res){
          $response = JSON.parse($res);
          if($response.status){
            alert($response.message);
            if($response.url != undefined){
              location.href = $response.url;
            }
          }else{
            alert($response.message)
          }
      }
    })
  }


}




function processSearch(event){
  event.preventDefault()
  $form = $(this);
  $errorFlag = false;
  $formData = [];
  $formType = $form.attr("data-type");

  $inputData = $form.find("input.search_input").val();

  if($inputData != ""){
  $formData.push({name:"search",value:$inputData});
  if($errorFlag == false){
    $.ajax({
      method:"POST",
      url:`${$SITE}functions/api.php`,
      data:$formData,
      success:function($res){
          $response = JSON.parse($res);
          if($response.status){
            alert($response.message);
            console.log($response.data);
            if($response.data.length > 0){
              $("ul.student_found").empty()
              $.each($response.data,function(index,student){
                 $("ul.student_found").append(
                   $("<li>").addClass("list-group-item").html(`${student.firstname}  ${student.lastname}`)
                   .append($("<a>").addClass("btn btn-success d-inline mr-3 ml-2 authenticate").attr({
                     "data-type":"signin",
                     "data-user-id":student.id,
                     "data-student-username":student.username
                   }).html("check in").click(AuthenticateStudent))
                     .append($("<a>").addClass("btn btn-danger d-inline mr-3 ml-2 authenticate").attr({
                      "data-type":"signout",
                      "data-user-id":student.id,
                      "data-student-username":student.username
                     }).html("check out").click(AuthenticateStudent)));
              })
              $('#searchModal').modal('show');
            }

          }else{
            alert($response.message)
          }
      }
    })
  }
  }else{
    alert("Please enter data")
  }

}



/**
 * Authenticate user
 */
function AuthenticateStudent(e){
  e.preventDefault();

  $data = {
    id:$(this).data("user-id"),
    type:$(this).data('type'),
    attendance:true
  }

  $.ajax({
    method:"POST",
    url:`${$SITE}functions/api.php`,
    data:$data,
    success:function($res){
       console.log($res)
    }
  })

}