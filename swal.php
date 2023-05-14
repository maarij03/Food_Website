<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.addEventListener("DOMContentLoaded", function(event) {
  function showSwal(status, redirectUrl) {
    var icon, title, text;
    if (status == 'already_in_cart') {
        icon = 'error';
        title = 'Oops!';
        text = 'Product Already in cart!';
    } else if (status == 'added_to_cart') {
        icon = 'success';
        title = 'Success!';
        text = 'Product Added in cart!';
    }
    Swal.fire({ 
      icon: icon,
      title: title,
      text: text,
      confirmButtonText: 'close!'
    }).then(function() {
      // Redirect the user to the specified URL
      window.location = redirectUrl;
    });
  }

  // Call the showSwal function here, passing in the necessary arguments
  // For example:
  <?php
    if (in_array($product_name, $check_product)) {
        echo "showSwal('already_in_cart', 'index.php');";
    } else {
        echo "showSwal('added_to_cart', 'index.php');";
    }
  ?>
});
</script>
