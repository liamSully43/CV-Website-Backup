
document.querySelector("#fonts").removeAttribute("disabled");
let sections = [
  document.querySelector("#about"),
  document.querySelector("#skills"),
  document.querySelector("#portfolio"),
  document.querySelector("#contact")
]

const about = document.querySelector("#about");
const skills = document.querySelector("#skills");
const portfolio = document.querySelector("#portfolio");

// cross browser support
const height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

// Triggers sliding up animations for each section
window.addEventListener("scroll", function() {
  if(about.getBoundingClientRect().top < height) {
    Array.prototype.forEach.call(about.children, ele => {
      ele.classList.add("slide-up");
    })
  }

  if(skills.getBoundingClientRect().top < height) {
    Array.prototype.forEach.call(skills.children, ele => {
      ele.classList.add("slide-up");
      setTimeout(() => {
        document.querySelector(".front-end").classList.add("expand-front-end");
        document.querySelector(".back-end").classList.add("expand-back-end");
        document.querySelector(".miscellaneous").classList.add("expand-miscellaneous");
      }, 1500);
    })
  }

  if(portfolio.getBoundingClientRect().top < height) {
    Array.prototype.forEach.call(portfolio.children, ele => {
      ele.classList.add("slide-up");
    })
  }
});

// toggles video expand & shrink classes to expand & shrink the container

const videoDemoButton = document.querySelector(".fa-video");
const videoContainer = document.querySelector(".video-container");

videoDemoButton.addEventListener("click", () => {
  if(videoContainer.classList.contains("video-container-expanded")) {
    videoContainer.classList.remove("video-container-expanded");
    videoContainer.classList.add("video-container-shrink");
  }
  else {
    videoContainer.classList.remove("video-container-shrink");
    videoContainer.classList.add("video-container-expanded");

  }
})

const nameField = document.querySelectorAll(".fields")[0];
const email = document.querySelectorAll(".fields")[1];
const subject = document.querySelectorAll(".fields")[2];
const fields = [nameField, email, subject];
let showButton = null;

// triggers animation for the form submit button

for(let i=0; 3 > i; i++){
  document.querySelectorAll(".fields")[i].addEventListener("keydown", function() {
    setTimeout(function() {
      if(nameField.value.length > 0 && email.value.length > 0 && subject.value.length > 0) {
        document.querySelector("button").style.animation = "expand 1s";
        document.querySelector("button").style.height = "100%";
        document.querySelector("button").style.borderWidth = "1px";
        document.querySelector(".button-cover").style.animation = "shrink 1s";
        document.querySelector(".button-cover").style.height = "0%";
        showButton = false;
      }
      else if((nameField.value.length <= 0 || email.value.length <= 0 || subject.value.length <= 0) && showButton == false) {
        document.querySelector("button").style.animation = "shrink 1s";
        document.querySelector("button").style.height = "0%";
        document.querySelector(".button-cover").style.animation = "expand 1s";
        document.querySelector(".button-cover").style.height = "100%";
        setTimeout(function() {
          document.querySelector("button").style.borderWidth = "0px";
          showButton = true;
        }, 800);
      }
    }, 1);
  })
}

// Checks if anything has been inputted in the fields before submitting

document.querySelector("form").addEventListener("submit", function(e) {
  for(let i=0; fields.length > i;  i++) {
    if(fields[i].value.length < 1) {
      fields[i].style.borderColor = "#ff284c";
      e.preventDefault();
    }
    else {
      fields[i].style.borderColor = "#fff";
    }
  }
})

// Checks if the form fields have enough charcters justify submiting the form

nameField.addEventListener("keydown", function() {
  if(nameField.value.length >= 1) {
    setTimeout(function() {
      nameField.style.borderColor = "#fff";
    }, 1);
  }
});

email.addEventListener("keydown", function() {
  if(email.value.length >= 1) {
    setTimeout(function() {
      email.style.borderColor = "#fff";
    }, 1);
  }
});

subject.addEventListener("keydown", function() {
  if(subject.value.length >= 10) {
    setTimeout(function() {
      subject.style.borderColor = "#fff";
    }, 1);
  }
});

// Config for the animated backgrounds 

const particlesConfig = {
  "particles": {
    "number": {
      "value": 80,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 2,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 5,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": true,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "window",
    "events": {
      "onhover": {
        "enable": false
      },
      "onclick": {
        "enable": true,
        "mode": "repulse"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": false
}


particlesJS("particles-js", particlesConfig);
particlesJS("background", particlesConfig);