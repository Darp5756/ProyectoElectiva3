
                    document.addEventListener("DOMContentLoaded", function() {
                      var videos = document.querySelectorAll("video");
                  
                      function playVideoWhenVisible() {
                        for (var i = 0; i < videos.length; i++) {
                          var video = videos[i];
                          var rect = video.getBoundingClientRect();
                  
                          // Verificar si el video está en el viewport
                          if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
                            video.play();
                          } else {
                            video.pause();
                          }
                        }
                      }
                  
                      // Reproducir los videos cuando se desplaza hacia ellos
                      window.addEventListener("scroll", playVideoWhenVisible);
                      window.addEventListener("resize", playVideoWhenVisible);
                      playVideoWhenVisible();})