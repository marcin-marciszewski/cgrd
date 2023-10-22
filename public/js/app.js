
// $(document).ready(function() {
//     showAllCustomer();
//     //View Record
//     function showAllCustomer() {
//         $.ajax({
//             url: "action.php",
//             type: "POST",
//             data: {
//                 action: "view"
//             },
//             success: function(response) {
//                 $("#tableData").html(response);
//                 $("table").DataTable({
//                     order: [0, 'DESC']
//                 });
//             }
//         });
//     }
//     //insert ajax request data
//     $("#submit").click(function(e) {
//         if ($("#formData")[0].checkValidity()) {
//             e.preventDefault();
//             $.ajax({
//                 url: "action.php",
//                 type: "POST",
//                 data: $("#formData").serialize() + "&action=insert",
//                 success: function(response) {
//                     Swal.fire({
//                         icon: 'success',
//                         title: 'Customer added successfully',
//                     });
//                     $("#addModal").modal('hide');
//                     $("#formData")[0].reset();
//                     showAllCustomer();
//                 }
//             });
//         }
//     });
//     //Edit Record
//     $("body").on("click", ".editBtn", function(e) {
//         e.preventDefault();
//         var editId = $(this).attr('id');
//         $.ajax({
//             url: "action.php",
//             type: "POST",
//             data: {
//                 editId: editId
//             },
//             success: function(response) {
//                 var data = JSON.parse(response);
//                 $("#edit-form-id").val(data.id);
//                 $("#name").val(data.name);
//                 $("#email").val(data.email);
//                 $("#username").val(data.username);
//                 $("#dob").val(data.dob);

//             }
//         });
//     });
// });