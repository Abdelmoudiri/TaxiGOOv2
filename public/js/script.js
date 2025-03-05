const accountTypes = document.querySelectorAll('input[name = "account_type"]');
const reservationModal = document.getElementById('reservation-modal');
const reserveButtons = document.querySelectorAll('.reserver');

for(const accountType of accountTypes ){
    accountType.addEventListener('change',()=>{
        if(accountType.value == "driver"){
            document.getElementById('lisence').classList.remove('hidden');
        }
        else document.getElementById('lisence').classList.add('hidden');
    })
}


// document.getElementById('annuler').addEventListener('click',function(){
//     reservationModal.classList.add('hidden');
// })


function reserve(driverid){
    reservationModal.classList.remove('hidden');
    document.getElementById('driverid').value = driverid;
}


// document.getElementById('reservation-form').addEventListener('submit',function(e){
//    e.preventDefault();

//    var url = this.getAttribute('action');
//    let formData = new FormData(this);

//    console.log(formData);

//    var xhttp = new XMLHttpRequest();
//   xhttp.open(
//     'POST',
//      url,
//   )
// })

   $('#reservation-form').submit(function(e) {
    e.preventDefault();
     
    var url = $(this).attr("action");
    let formData = new FormData(this);

    $.ajax({
            type:'POST',
            url: url,
            data: formData,
            contentType: false,
            processData: false,
            success: (response) => {
                alert('Form submitted successfully');
                location.reload();
            },
            error: function(response){
                $('#ajax-form').find(".print-error-msg").find("ul").html('');
                $('#ajax-form').find(".print-error-msg").css('display','block');
                $.each( response.responseJSON.errors, function( key, value ) {
                    $('#ajax-form').find(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                });
            }
       });
    
});

function cancelReservation(reservationId){

    console.log(reservationId)
    $.ajax({
        type:'PUT',
        url: '/reservations'+reservationId,
        data: { reservationId : reservationId },
        success: (response) => {
            alert(response.message);
            location.reload();
        },
    
   });

}

// document.querySelectorAll('.cancel-reservation').forEach(btn => {

//     btn.addEventListener('click',function(){
        

//     })
// });


