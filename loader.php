<style>
    /*--------------------------------------------------------------
# Preloader
--------------------------------------------------------------*/
#preloader {
  display: flex;
  position: fixed;
  inset: 0;
  width: 100%;
  height: 100vh;
  z-index: 99999;
}

#preloader:before,
#preloader:after {
  content: "";
  background-color: #000000;
  position: absolute;
  inset: 0;
  width: 50%;
  height: 100%;
  transition: all 0.3s ease 0s;
  z-index: -1;
}

#preloader:after {
  left: auto;
  right: 0;
}

#preloader .line {
  position: relative;
  overflow: hidden;
  margin: auto;
  width: 1px;
  height: 280px;
  transition: all 0.8s ease 0s;
}

#preloader .line:before {
  content: "";
  position: absolute;
  background-color: #ffffff;
  left: 0;
  top: 50%;
  width: 1px;
  height: 0%;
  transform: translateY(-50%);
  animation: lineincrease 1000ms ease-in-out 0s forwards;
}

#preloader .line:after {
  content: "";
  position: absolute;
  background-color: color-mix(in srgb, var(--default-color), transparent 95%);
  left: 0;
  top: 0;
  width: 1px;
  height: 100%;
  transform: translateY(-100%);
  animation: linemove 1200ms linear 0s infinite;
  animation-delay: 2000ms;
}

#preloader.loaded .line {
  opacity: 0;
  height: 100% !important;
}

#preloader.loaded .line:after {
  opacity: 0;
}

#preloader.loaded:before,
#preloader.loaded:after {
  animation: preloaderfinish 300ms ease-in-out 500ms forwards;
}

@keyframes lineincrease {
  0% {
    height: 0%;
  }

  100% {
    height: 100%;
  }
}

@keyframes linemove {
  0% {
    transform: translateY(200%);
  }

  100% {
    transform: translateY(-100%);
  }
}

@keyframes preloaderfinish {
  0% {
    width: 5 0%;
  }

  100% {
    width: 0%;
  }
}

</style>

<!-- Preloader -->
<div id="preloader">
    <div class="line"></div>
  </div>

  
<script>
 /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      setTimeout(() => {
        preloader.classList.add('loaded');
      }, 1000);
      setTimeout(() => {
        preloader.remove();
      }, 2000);
    });
  }
</script>
