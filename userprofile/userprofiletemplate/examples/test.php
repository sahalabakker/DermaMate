<script>
    $(document).ready(function(){
        $.ajax({url: "ajax1.php",
            context:document.body,
            success: function(ret){
                alert(ret);
            }});
    });
</script>