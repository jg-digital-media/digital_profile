console.log("app.js connected! - 05-12-2023 - 13:14");


document.addEventListener('DOMContentLoaded', function () {

    
    /* FLIP CARD BUTTON */
    const flipButton = document.getElementById('js-flip');
    const cardFront = document.getElementById('container-sideone');
    const cardBack = document.getElementById('container-sidetwo');
    let isFlipped = false;

    flipButton.addEventListener('click', () => {
        if (isFlipped) {
            cardFront.style.transform = 'rotateY(0deg)';
            cardBack.style.transform = 'rotateY(180deg)';
        } else {
            cardFront.style.transform = 'rotateY(180deg)';
            cardBack.style.transform = 'rotateY(0deg)';
        }
        isFlipped = !isFlipped;
    });


    
    const banner = document.getElementById('banner');
    const hideBannerButton = document.getElementById('hideBanner');

    // Check if the cookie is set to determine whether to show the banner
    const isBannerHidden = getCookie('bannerHidden');
    
    if (isBannerHidden) {
        
        banner.style.display = 'none';
    }

    // Event listener for the button click
    hideBannerButton.addEventListener('click', function () {
        
        // Set a cookie to remember that the banner should be hidden
        document.cookie = 'bannerHidden=true; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/';
        
        // Hide the banner
        banner.style.display = 'none';
    });

    // Function to get cookie value by name
    function getCookie(name) {
        
        const cookies = document.cookie.split(';');
        
        for (let i = 0; i < cookies.length; i++) {
            
            const cookie = cookies[i].trim();
            
            if (cookie.startsWith(name + '=')) {
                
                return cookie.substring(name.length + 1);
            }
        }
        
        return null;
    }



/* function rotateSection(flipElement) {
    
    const sideOne = flipElement.parentElement;
    const sideTwo = sideOne.nextElementSibling;

    
    
     // Check if sideOne and sideTwo are not null before accessing their styles
      if (sideOne && sideTwo) {
            if (sideOne.style.transform === "rotateY(0deg)") {

                sideOne.style.transform = "rotateY(-180deg)";
                sideTwo.style.transform = "rotateY(0deg)";
            } else {

                sideOne.style.transform = "rotateY(0deg)";
                sideTwo.style.transform = "rotateY(180deg)";
            }
      }
    */
    
/*// Add event listeners to flip elements to toggle between front and back
document.querySelectorAll('.flip').forEach(function(flipElement) {
  flipElement.addEventListener('click', function() {
    var containerSideOne = document.getElementById('container-sideone');
    var containerSideTwo = document.getElementById('container-sidetwo');
    
    containerSideOne.classList.toggle('flipped');
    containerSideTwo.classList.toggle('flipped');
  });
});*/


});