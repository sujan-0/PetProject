document.addEventListener("DOMContentLoaded", function() {
  // Your JavaScript code here
  function searchProduct() {
      var searchInput = document.getElementById("searchInput").value.toLowerCase();
      var products = [
          "Japanese Spitz",
          "German Shepherd",
          "Labrador Retriever",
          "Golden Retriever",
          "Poodle",
          "Beagle"
      ];

      var matchingProducts = products.filter(function(product) {
          return product.toLowerCase().includes(searchInput);
      });

      // Redirect to the search results page with the search query as a parameter
      window.location.href = "search-results.html?query=" + encodeURIComponent(searchInput);
  }

    document.getElementById("shelter").addEventListener("click", function() {
        window.location.href = "login.php";
    });

    document.getElementById("dog").addEventListener("click", function() {
        window.location.href = "buy.html";
    });

    document.getElementById("adoptMe").addEventListener("click", function() {
        window.location.href = "order.html";
    });

   

  var imageSources = [
      "./public/beautifulpetportraitdog@2x.png",
      "./public/joe-caione-qO-PIF84Vxg-unsplash.jpg",
      "./public/closeup-shot-cute-husky-green-field.jpg"
  ];

  var currentIndex = 0;
  var slideshowInterval;

  // Function to start the slideshow
  function startSlideshow() {
      // Change the image source initially
      document.getElementById("slideshow").src = imageSources[currentIndex];
      currentIndex++;

      // Start the slideshow interval
      slideshowInterval = setInterval(function() {
          // Change image source
          document.getElementById("slideshow").src = imageSources[currentIndex];
          currentIndex++;

          // Reset index if it exceeds the length of image sources
          if (currentIndex === imageSources.length) {
              currentIndex = 0;
          }
      }, 3000); // Change image every 3 seconds (3000 milliseconds)
  }

  // Function to stop the slideshow
  function stopSlideshow() {
      clearInterval(slideshowInterval);
  }

  // Start the slideshow when the page loads
  startSlideshow();
});
