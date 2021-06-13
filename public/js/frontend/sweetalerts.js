$(".favdel").on("click", function(e) {
Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  })
  
  .then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      )
    }
  })
  return confirm('Are sure to remove this product from your favourite products?');
    });

$(".place-order").on("click", function(e) {
  Swal.fire(
    'Attention!',
    'Your order has been placed !',
    'success'
  )
});