function checkDelete(id){
    if(confirm("Are you sure you want to delete this item?")){
        window.location='delete.php?id='+id;
    }
}