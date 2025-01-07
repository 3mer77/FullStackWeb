let menu = document.querySelector('.menu-icon');
let navbar = document.querySelector('.menu');

menu.onclick = () => {
  navbar.classList.toggle('active')
  menu.classList.toggle('move');
  bell.classList.remove('active');
}

let bell = document.querySelector('.notification');

document.querySelector('#bell-icon').onclick = () =>{
  bell.classList.toggle('active');
}

var swiper = new Swiper(".trending-content", {
  slidesPerView: 1,
  spaceBetween: 10,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  autoplay:{
    delay: 2800,
    disableOnInteraction: false,
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 15,
    },
    1068: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
  },
});

function preventDefault(event) {
  event.preventDefault();
  // Add your AJAX code here to send data to the server 
  // and update the page dynamically

    var form = $(this); // Get the current form element
    var formData = form.serialize(); // Convert form data into a string

    $.ajax({
        type: "POST", // HTTP method for sending data
        url: "index.php", // Replace with your actual PHP script path
        data: formData, // Send serialized form data to the server
        success: function(response) {
            // Handle successful response from the server (e.g., update cart summary, display message)
            alert("Sucessfully Added to the cart"); // Example: Display a success message
        },
        error: function(xhr, status, error) {
           alert("Error:", error); // Handle errors during the AJAX request
        }
    });
}
