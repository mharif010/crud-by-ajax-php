//data insert 
$('#submit').on('click',function(){       
    var name = $("#name").val();
    var email = $("#email").val();
    var pass = $("#pass").val();
    $.ajax({
        method: "POST",
        data:{name:name,email:email,pass:pass},
        url : "handler/insertData.php",
        success:function(data){
            displayData();
        }
    });
    
});
// show data 
function displayData(){
    var read = "";
    $.ajax({
        url: "handler/readData.php",
        method: "POST",
        data: read,
        success: function(data){
            $("#data").html(data);
        }
    });
}
// delete data 
function deleteUser(userId){
    $checkConfirm = confirm("Are you sure delete the User?");
    if( true == $checkConfirm ){
        $.ajax({
            url: "handler/deleteData.php",
            method : "POST",
            data : {id:userId},
            success : function(){
                displayData();
            }
       });
    }
}
// edit data 
function editUser(userId){
    $.ajax({
        url : "handler/editData.php",
        method : "GET",
        data : {id:userId},
        success : function(data){
            $('body').html(data);
        }
    });
}
 
// update data
function updateData(userId){
    var name = $("#name").val();
    var email = $("#email").val();
    var pass = $("#pass").val();

    $.ajax({
        url : "handler/updateData.php",
        method : "GET",
        data : {id:userId,name:name,email:email,pass:pass},
        success : function(data){
            alert(data);
        }
    });
}
// show data
$('#show').on('click', function(){
    var read = "";
    $.ajax({
        url: "handler/readData.php",
        method: "POST",
        data: read,
        success: function(data){
            $("#data").html(data);
        }
    });
});
// back to home 
function backToHome(){
    var read = "";
    $.ajax({
        url: "index.php",
        method: "POST",
        data: read,
        success: function(data){
            $("body").html(data);
        }
    });
}