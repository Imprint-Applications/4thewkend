"use strict";

//Nav
var hamburger = document.querySelector(".hamburger");
var pageNav = document.querySelector(".pageNav");
var links = document.querySelectorAll(".nav-links.ul li");
hamburger.addEventListener('click', function () {
  pageNav.classList.toggle("open");
});

(function () {
  var pushingNavTrigger = document.getElementsByClassName('js-cd-nav-trigger');

  if (pushingNavTrigger.length > 0) {
    var mainContent = document.getElementsByClassName('cd-main__content')[0],
        navAnimating = false;
    pushingNavTrigger[0].addEventListener('click', function (event) {
      event.preventDefault();
      if (navAnimating) return; // already animating -> do not toggle

      navAnimating = true;
      Util.toggleClass(document.body, 'nav-is-open', !Util.hasClass(document.body, 'nav-is-open'));
    });
    mainContent.addEventListener('transitionend', function () {
      navAnimating = false; // wait for the ened of animation to reset the variable
    });
  }
})(); // //Image Slider
// document.querySelector(".slider input").addEventListener("input", function(){
//     document.querySelector(".original-image").style.width = this.value + "%";
// });
//Toggle Image


function toggleImage() {
  var vector = document.getElementById("vectorImg");
  var rastor = document.getElementById("rastorImg");

  if (vector.style.display === "none") {
    vector.style.display = "inline";
    rastor.style.display = "none";
  } else {
    vector.style.display = "none";
    rastor.style.display = "inline";
  }
} //Lottie


var animationData = {
  "v": "5.4.4",
  "fr": 30,
  "ip": 0,
  "op": 151,
  "w": 43,
  "h": 55,
  "nm": "Scroll Down Mouse",
  "ddd": 0,
  "assets": [],
  "layers": [{
    "ddd": 0,
    "ind": 1,
    "ty": 4,
    "nm": "Scroll Ball Outlines",
    "sr": 1,
    "ks": {
      "o": {
        "a": 0,
        "k": 100,
        "ix": 11
      },
      "r": {
        "a": 0,
        "k": 0,
        "ix": 10
      },
      "p": {
        "a": 1,
        "k": [{
          "i": {
            "x": 0,
            "y": 1
          },
          "o": {
            "x": 0.333,
            "y": 0
          },
          "t": 0,
          "s": [20.674, 15.046, 0],
          "e": [20.674, 25.671, 0],
          "to": [0, 1.771, 0],
          "ti": [0, -1.771, 0]
        }, {
          "i": {
            "x": 0,
            "y": 0
          },
          "o": {
            "x": 0.333,
            "y": 0.333
          },
          "t": 60,
          "s": [20.674, 25.671, 0],
          "e": [20.674, 25.671, 0],
          "to": [0, 0, 0],
          "ti": [0, 0, 0]
        }, {
          "i": {
            "x": 0,
            "y": 1
          },
          "o": {
            "x": 0.333,
            "y": 0
          },
          "t": 75,
          "s": [20.674, 25.671, 0],
          "e": [20.674, 15.046, 0],
          "to": [0, -1.771, 0],
          "ti": [0, 1.771, 0]
        }, {
          "t": 135
        }],
        "ix": 2
      },
      "a": {
        "a": 0,
        "k": [4.25, 4.25, 0],
        "ix": 1
      },
      "s": {
        "a": 0,
        "k": [100, 100, 100],
        "ix": 6
      }
    },
    "ao": 0,
    "shapes": [{
      "ty": "gr",
      "it": [{
        "ind": 0,
        "ty": "sh",
        "ix": 1,
        "ks": {
          "a": 0,
          "k": {
            "i": [[0, -2.209], [2.209, 0], [0, 2.209], [-2.209, 0]],
            "o": [[0, 2.209], [-2.209, 0], [0, -2.209], [2.209, 0]],
            "v": [[4, 0], [0, 4], [-4, 0], [0, -4]],
            "c": true
          },
          "ix": 2
        },
        "nm": "Path 1",
        "mn": "ADBE Vector Shape - Group",
        "hd": false
      }, {
        "ty": "fl",
        "c": {
          "a": 0,
          "k": [0.13300000359, 0.169000004787, 0.165000002992, 1],
          "ix": 4
        },
        "o": {
          "a": 0,
          "k": 100,
          "ix": 5
        },
        "r": 1,
        "bm": 0,
        "nm": "Fill 1",
        "mn": "ADBE Vector Graphic - Fill",
        "hd": false
      }, {
        "ty": "tr",
        "p": {
          "a": 0,
          "k": [4.25, 4.25],
          "ix": 2
        },
        "a": {
          "a": 0,
          "k": [0, 0],
          "ix": 1
        },
        "s": {
          "a": 0,
          "k": [100, 100],
          "ix": 3
        },
        "r": {
          "a": 0,
          "k": 0,
          "ix": 6
        },
        "o": {
          "a": 0,
          "k": 100,
          "ix": 7
        },
        "sk": {
          "a": 0,
          "k": 0,
          "ix": 4
        },
        "sa": {
          "a": 0,
          "k": 0,
          "ix": 5
        },
        "nm": "Transform"
      }],
      "nm": "Group 1",
      "np": 2,
      "cix": 2,
      "bm": 0,
      "ix": 1,
      "mn": "ADBE Vector Group",
      "hd": false
    }],
    "ip": 0,
    "op": 151,
    "st": 0,
    "bm": 0
  }, {
    "ddd": 0,
    "ind": 2,
    "ty": 4,
    "nm": "Mouse Outlines",
    "sr": 1,
    "ks": {
      "o": {
        "a": 0,
        "k": 100,
        "ix": 11
      },
      "r": {
        "a": 0,
        "k": 0,
        "ix": 10
      },
      "p": {
        "a": 0,
        "k": [20.5, 25.25, 0],
        "ix": 2
      },
      "a": {
        "a": 0,
        "k": [11.597, 20.25, 0],
        "ix": 1
      },
      "s": {
        "a": 0,
        "k": [100, 100, 100],
        "ix": 6
      }
    },
    "ao": 0,
    "shapes": [{
      "ty": "gr",
      "it": [{
        "ind": 0,
        "ty": "sh",
        "ix": 1,
        "ks": {
          "a": 0,
          "k": {
            "i": [[0, 0], [2.524, 0], [0, 2.523], [0, 0], [-2.524, 0], [-0.828, -0.826], [0, -1.262]],
            "o": [[0, 2.523], [-2.524, 0], [0, 0], [0, -2.524], [1.262, 0], [0.826, 0.828], [0, 0]],
            "v": [[4.745, 0.245], [0.173, 4.816], [-4.398, 0.245], [-4.398, -10.286], [0.173, -14.857], [3.406, -13.519], [4.745, -10.286]],
            "c": true
          },
          "ix": 2
        },
        "nm": "Path 1",
        "mn": "ADBE Vector Shape - Group",
        "hd": false
      }, {
        "ind": 1,
        "ty": "sh",
        "ix": 2,
        "ks": {
          "a": 0,
          "k": {
            "i": [[2.055, 2.054], [3.133, 0], [0, -6.266], [0, 0], [-6.266, 0], [0, 6.266], [0, 0]],
            "o": [[-2.053, -2.054], [-6.266, 0], [0, 0], [0, 6.266], [6.266, 0], [0, 0], [0, -3.133]],
            "v": [[8.022, -16.676], [0, -20], [-11.347, -8.653], [-11.347, 8.653], [0, 20], [11.347, 8.653], [11.347, -8.653]],
            "c": true
          },
          "ix": 2
        },
        "nm": "Path 2",
        "mn": "ADBE Vector Shape - Group",
        "hd": false
      }, {
        "ty": "mm",
        "mm": 1,
        "nm": "Merge Paths 1",
        "mn": "ADBE Vector Filter - Merge",
        "hd": false
      }, {
        "ty": "fl",
        "c": {
          "a": 0,
          "k": [0.102000000898, 0.948999980852, 0.838999968884, 1],
          "ix": 4
        },
        "o": {
          "a": 0,
          "k": 100,
          "ix": 5
        },
        "r": 1,
        "bm": 0,
        "nm": "Fill 1",
        "mn": "ADBE Vector Graphic - Fill",
        "hd": false
      }, {
        "ty": "tr",
        "p": {
          "a": 0,
          "k": [11.597, 20.25],
          "ix": 2
        },
        "a": {
          "a": 0,
          "k": [0, 0],
          "ix": 1
        },
        "s": {
          "a": 0,
          "k": [100, 100],
          "ix": 3
        },
        "r": {
          "a": 0,
          "k": 0,
          "ix": 6
        },
        "o": {
          "a": 0,
          "k": 100,
          "ix": 7
        },
        "sk": {
          "a": 0,
          "k": 0,
          "ix": 4
        },
        "sa": {
          "a": 0,
          "k": 0,
          "ix": 5
        },
        "nm": "Transform"
      }],
      "nm": "Group 1",
      "np": 4,
      "cix": 2,
      "bm": 0,
      "ix": 1,
      "mn": "ADBE Vector Group",
      "hd": false
    }],
    "ip": 0,
    "op": 151,
    "st": 0,
    "bm": 0
  }],
  "markers": []
};
var params = {
  container: document.getElementById('lottie'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  animationData: animationData
};
var anim;
anim = lottie.loadAnimation(params);
var animationData = {
  "v": "5.4.4",
  "fr": 30,
  "ip": 0,
  "op": 151,
  "w": 43,
  "h": 55,
  "nm": "Scroll Down Mouse",
  "ddd": 0,
  "assets": [],
  "layers": [{
    "ddd": 0,
    "ind": 1,
    "ty": 4,
    "nm": "Scroll Ball Outlines",
    "sr": 1,
    "ks": {
      "o": {
        "a": 0,
        "k": 100,
        "ix": 11
      },
      "r": {
        "a": 0,
        "k": 0,
        "ix": 10
      },
      "p": {
        "a": 1,
        "k": [{
          "i": {
            "x": 0,
            "y": 1
          },
          "o": {
            "x": 0.333,
            "y": 0
          },
          "t": 0,
          "s": [20.674, 15.046, 0],
          "e": [20.674, 25.671, 0],
          "to": [0, 1.771, 0],
          "ti": [0, -1.771, 0]
        }, {
          "i": {
            "x": 0,
            "y": 0
          },
          "o": {
            "x": 0.333,
            "y": 0.333
          },
          "t": 60,
          "s": [20.674, 25.671, 0],
          "e": [20.674, 25.671, 0],
          "to": [0, 0, 0],
          "ti": [0, 0, 0]
        }, {
          "i": {
            "x": 0,
            "y": 1
          },
          "o": {
            "x": 0.333,
            "y": 0
          },
          "t": 75,
          "s": [20.674, 25.671, 0],
          "e": [20.674, 15.046, 0],
          "to": [0, -1.771, 0],
          "ti": [0, 1.771, 0]
        }, {
          "t": 135
        }],
        "ix": 2
      },
      "a": {
        "a": 0,
        "k": [4.25, 4.25, 0],
        "ix": 1
      },
      "s": {
        "a": 0,
        "k": [100, 100, 100],
        "ix": 6
      }
    },
    "ao": 0,
    "shapes": [{
      "ty": "gr",
      "it": [{
        "ind": 0,
        "ty": "sh",
        "ix": 1,
        "ks": {
          "a": 0,
          "k": {
            "i": [[0, -2.209], [2.209, 0], [0, 2.209], [-2.209, 0]],
            "o": [[0, 2.209], [-2.209, 0], [0, -2.209], [2.209, 0]],
            "v": [[4, 0], [0, 4], [-4, 0], [0, -4]],
            "c": true
          },
          "ix": 2
        },
        "nm": "Path 1",
        "mn": "ADBE Vector Shape - Group",
        "hd": false
      }, {
        "ty": "fl",
        "c": {
          "a": 0,
          "k": [0.13300000359, 0.169000004787, 0.165000002992, 1],
          "ix": 4
        },
        "o": {
          "a": 0,
          "k": 100,
          "ix": 5
        },
        "r": 1,
        "bm": 0,
        "nm": "Fill 1",
        "mn": "ADBE Vector Graphic - Fill",
        "hd": false
      }, {
        "ty": "tr",
        "p": {
          "a": 0,
          "k": [4.25, 4.25],
          "ix": 2
        },
        "a": {
          "a": 0,
          "k": [0, 0],
          "ix": 1
        },
        "s": {
          "a": 0,
          "k": [100, 100],
          "ix": 3
        },
        "r": {
          "a": 0,
          "k": 0,
          "ix": 6
        },
        "o": {
          "a": 0,
          "k": 100,
          "ix": 7
        },
        "sk": {
          "a": 0,
          "k": 0,
          "ix": 4
        },
        "sa": {
          "a": 0,
          "k": 0,
          "ix": 5
        },
        "nm": "Transform"
      }],
      "nm": "Group 1",
      "np": 2,
      "cix": 2,
      "bm": 0,
      "ix": 1,
      "mn": "ADBE Vector Group",
      "hd": false
    }],
    "ip": 0,
    "op": 151,
    "st": 0,
    "bm": 0
  }, {
    "ddd": 0,
    "ind": 2,
    "ty": 4,
    "nm": "Mouse Outlines",
    "sr": 1,
    "ks": {
      "o": {
        "a": 0,
        "k": 100,
        "ix": 11
      },
      "r": {
        "a": 0,
        "k": 0,
        "ix": 10
      },
      "p": {
        "a": 0,
        "k": [20.5, 25.25, 0],
        "ix": 2
      },
      "a": {
        "a": 0,
        "k": [11.597, 20.25, 0],
        "ix": 1
      },
      "s": {
        "a": 0,
        "k": [100, 100, 100],
        "ix": 6
      }
    },
    "ao": 0,
    "shapes": [{
      "ty": "gr",
      "it": [{
        "ind": 0,
        "ty": "sh",
        "ix": 1,
        "ks": {
          "a": 0,
          "k": {
            "i": [[0, 0], [2.524, 0], [0, 2.523], [0, 0], [-2.524, 0], [-0.828, -0.826], [0, -1.262]],
            "o": [[0, 2.523], [-2.524, 0], [0, 0], [0, -2.524], [1.262, 0], [0.826, 0.828], [0, 0]],
            "v": [[4.745, 0.245], [0.173, 4.816], [-4.398, 0.245], [-4.398, -10.286], [0.173, -14.857], [3.406, -13.519], [4.745, -10.286]],
            "c": true
          },
          "ix": 2
        },
        "nm": "Path 1",
        "mn": "ADBE Vector Shape - Group",
        "hd": false
      }, {
        "ind": 1,
        "ty": "sh",
        "ix": 2,
        "ks": {
          "a": 0,
          "k": {
            "i": [[2.055, 2.054], [3.133, 0], [0, -6.266], [0, 0], [-6.266, 0], [0, 6.266], [0, 0]],
            "o": [[-2.053, -2.054], [-6.266, 0], [0, 0], [0, 6.266], [6.266, 0], [0, 0], [0, -3.133]],
            "v": [[8.022, -16.676], [0, -20], [-11.347, -8.653], [-11.347, 8.653], [0, 20], [11.347, 8.653], [11.347, -8.653]],
            "c": true
          },
          "ix": 2
        },
        "nm": "Path 2",
        "mn": "ADBE Vector Shape - Group",
        "hd": false
      }, {
        "ty": "mm",
        "mm": 1,
        "nm": "Merge Paths 1",
        "mn": "ADBE Vector Filter - Merge",
        "hd": false
      }, {
        "ty": "fl",
        "c": {
          "a": 0,
          "k": [0.102000000898, 0.948999980852, 0.838999968884, 1],
          "ix": 4
        },
        "o": {
          "a": 0,
          "k": 100,
          "ix": 5
        },
        "r": 1,
        "bm": 0,
        "nm": "Fill 1",
        "mn": "ADBE Vector Graphic - Fill",
        "hd": false
      }, {
        "ty": "tr",
        "p": {
          "a": 0,
          "k": [11.597, 20.25],
          "ix": 2
        },
        "a": {
          "a": 0,
          "k": [0, 0],
          "ix": 1
        },
        "s": {
          "a": 0,
          "k": [100, 100],
          "ix": 3
        },
        "r": {
          "a": 0,
          "k": 0,
          "ix": 6
        },
        "o": {
          "a": 0,
          "k": 100,
          "ix": 7
        },
        "sk": {
          "a": 0,
          "k": 0,
          "ix": 4
        },
        "sa": {
          "a": 0,
          "k": 0,
          "ix": 5
        },
        "nm": "Transform"
      }],
      "nm": "Group 1",
      "np": 4,
      "cix": 2,
      "bm": 0,
      "ix": 1,
      "mn": "ADBE Vector Group",
      "hd": false
    }],
    "ip": 0,
    "op": 151,
    "st": 0,
    "bm": 0
  }],
  "markers": []
};
var params = {
  container: document.getElementById('lottieProducts'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  animationData: animationData
};
var anim;
anim = lottie.loadAnimation(params);
var divisor = document.getElementById("divisor");
slider = document.getElementById("slider");

function moveDivisor() {
  divisor.style.width = slider.value + "%";
}

window.onload = function () {
  moveDivisor();
};