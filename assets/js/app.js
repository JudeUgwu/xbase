$('#switch').on('click',() =>{
    if( $('#switch').prop('checked')){
        $('body').addClass('dark');
    }
    else{
        $('body').removeClass('dark');
    }
})

$(document).ready(function () {
    $(".search-form input").focus(function () { 
     $(".banner-img img").css("filter","blur(15px)")
        
    });

    $(".search-form input").blur(function () { 
        $(".banner-img img").css("filter","blur(0px)")
           
       });
})




function forward() {
    window.history.forward();

 }

 function backward() {
     window.history.backward();
 }





 $(document).ready(function () {
    $(".admin-table input").focus(function () {
        $(this).css('background-color', 'whitesmoke') ;
     })
     $(".admin-table input").blur(function () {
        $(this).css('background-color', 'wheat') ;
     })
    })





            //  Sign-in and sign-out
  
const sign_in_btn = document.querySelector('#sign-in-btn');
const sign_up_btn = document.querySelector('#sign-up-btn');
 const container = document.querySelector('.container');
 
 sign_up_btn.addEventListener('click', () => {
   container.classList.add('sign-up-mode');
 });
 
sign_in_btn.addEventListener('click', () => {
  container.classList.remove('sign-up-mode');
});

$(document).ready(function () {
    $(".input-field input").focus(function () {
        $(this).css('background-color', 'whitesmoke') ;
     })
     $(".inpu-field input").blur(function () {
        $(this).css('background-color', 'wheat') ;
     })
    })
