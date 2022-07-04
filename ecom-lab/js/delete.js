$(".remove").click(function(){
    var id = $(this).parents("tr").attr("id");
 if(confirm('Are you sure to delete this record ?'))
    {
        $.ajax({
           url: '../admin/delete.php',
           type: 'GET',
           data: {id: id},
           error: function() {
              alert('Something is wrong');
           },
           success: function(data) {
                $("#"+id).remove();
                alert("Record deleted successfully");  
           }
        });
    }
});