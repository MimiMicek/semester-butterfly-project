<?php require_once 'header.php';?>
    <title>Welcome</title>
    <script>
        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));
        }
    </script>
</head>
<body class="landing-page">
    <main>
        <div class="container">
            <div class="row h-50">
                <div class="col-sm-12 mx-auto my-auto">
                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="row logo-headline">
                                <div class="logo col-xs-6 col-md-4">
                                    <span>
                                        <svg width="228" height="164" viewBox="0 0 332 168" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M94.0498 122.634C91.7576 125.967 88.0964 127.633 83.0662 127.633C79.3944 127.633 76.6034 126.571 74.6931 124.449C72.7829 122.305 71.8065 119.142 71.764 114.96L71.7636 92.5439L75.5521 92.5439L75.5525 114.482C75.5526 121.042 78.2058 124.321 83.5119 124.321C89.0302 124.321 92.5216 122.04 93.986 117.476L93.9855 92.5443L97.8059 92.5443L97.8066 126.996L94.1135 126.996L94.0498 122.634ZM112.642 83.7247L112.642 92.5446L119.773 92.5447L119.773 95.6652L112.642 95.665L112.642 118.622C112.642 120.533 112.982 121.955 113.661 122.889C114.362 123.823 115.518 124.29 117.131 124.29C117.768 124.29 118.797 124.184 120.219 123.972L120.379 127.092C119.381 127.453 118.023 127.633 116.304 127.633C113.693 127.633 111.793 126.88 110.605 125.373C109.416 123.844 108.822 121.605 108.822 118.654L108.821 95.665L102.486 95.6648L102.486 92.5444L108.821 92.5445L108.821 83.7246L112.642 83.7247ZM132.571 83.725L132.572 92.545L139.703 92.5451L139.703 95.6655L132.572 95.6654L132.572 118.623C132.572 120.533 132.912 121.955 133.591 122.889C134.291 123.823 135.448 124.29 137.061 124.29C137.698 124.291 138.727 124.184 140.149 123.972L140.308 127.093C139.311 127.453 137.953 127.634 136.233 127.634C133.623 127.634 131.723 126.88 130.535 125.373C129.346 123.845 128.752 121.605 128.752 118.654L128.751 95.6653L122.416 95.6652L122.416 92.5448L128.751 92.5449L128.751 83.725L132.571 83.725ZM159.92 127.634C156.991 127.634 154.338 126.912 151.961 125.469C149.605 124.025 147.769 122.019 146.453 119.451C145.137 116.861 144.479 113.964 144.479 110.758L144.479 109.389C144.479 106.078 145.115 103.095 146.389 100.442C147.683 97.7884 149.477 95.7082 151.769 94.2011C154.061 92.6727 156.545 91.9086 159.219 91.9086C163.4 91.9087 166.711 93.3416 169.152 96.2074C171.614 99.0519 172.845 102.947 172.845 107.893L172.845 110.026L148.267 110.026L148.267 110.758C148.267 114.664 149.382 117.923 151.61 120.534C153.86 123.123 156.683 124.418 160.079 124.418C162.117 124.418 163.91 124.047 165.459 123.304C167.03 122.561 168.452 121.372 169.725 119.738L172.113 121.553C169.312 125.607 165.247 127.634 159.92 127.634ZM159.219 95.1564C156.354 95.1564 153.934 96.2071 151.96 98.3085C150.008 100.41 148.819 103.233 148.395 106.778L169.057 106.779L169.057 106.365C168.95 103.053 168.006 100.357 166.223 98.277C164.44 96.1967 162.105 95.1565 159.219 95.1564ZM195.162 95.7939C194.356 95.6453 193.496 95.571 192.584 95.571C190.207 95.5709 188.19 96.2395 186.535 97.5768C184.9 98.8929 183.733 100.814 183.033 103.34L183.033 126.998L179.245 126.998L179.244 92.5458L182.969 92.5459L183.033 98.0225C185.049 93.9469 188.286 91.9092 192.743 91.9093C193.804 91.9093 194.642 92.0473 195.258 92.3232L195.162 95.7939ZM221.427 81.7207C218.286 81.0838 215.676 80.7653 213.596 80.7653C211.409 80.7653 209.722 81.4233 208.534 82.7393C207.345 84.0342 206.751 85.881 206.751 88.2796L206.751 92.5463L214.965 92.5465L214.965 95.6669L206.751 95.6667L206.752 126.998L202.931 126.998L202.931 95.6667L197.232 95.6666L197.232 92.5462L202.93 92.5463L202.93 88.1522C202.952 84.6709 203.875 82.0175 205.7 80.192C207.525 78.3453 210.072 77.4219 213.341 77.422C215.973 77.422 219.931 78.0695 225.216 79.3645L225.217 126.999L221.428 126.999L221.427 81.7207ZM238.97 126.999L235.15 126.999L235.149 92.5469L238.97 92.5469L238.97 126.999ZM234.48 82.5806C234.48 81.8589 234.714 81.2539 235.181 80.7657C235.648 80.2562 236.284 80.0015 237.091 80.0015C237.897 80.0016 238.534 80.2563 239.001 80.7658C239.489 81.254 239.733 81.859 239.733 82.5807C239.733 83.3024 239.489 83.9074 239.001 84.3956C238.534 84.8839 237.898 85.128 237.091 85.1279C236.285 85.1279 235.648 84.8838 235.181 84.3956C234.714 83.9073 234.48 83.3023 234.48 82.5806ZM261.67 127.636C258.741 127.636 256.088 126.914 253.711 125.471C251.355 124.027 249.519 122.021 248.203 119.453C246.887 116.863 246.229 113.965 246.229 110.76L246.229 109.391C246.229 106.079 246.865 103.097 248.139 100.444C249.433 97.7903 251.227 95.71 253.519 94.2029C255.811 92.6746 258.294 91.9105 260.969 91.9105C265.15 91.9106 268.461 93.3435 270.902 96.2092C273.364 99.0537 274.595 102.949 274.595 107.895L274.595 110.028L250.017 110.028L250.017 110.76C250.017 114.666 251.132 117.924 253.36 120.535C255.61 123.125 258.433 124.42 261.829 124.42C263.866 124.42 265.66 124.049 267.209 123.306C268.78 122.563 270.202 121.374 271.475 119.74L273.863 121.555C271.061 125.609 266.997 127.636 261.67 127.636ZM260.969 95.1583C258.103 95.1582 255.684 96.2089 253.71 98.3104C251.757 100.412 250.569 103.235 250.144 106.78L270.806 106.78L270.806 106.366C270.7 103.055 269.756 100.359 267.973 98.2788C266.19 96.1985 263.855 95.1583 260.969 95.1583ZM301.625 118.244C301.624 116.354 300.86 114.837 299.332 113.69C297.825 112.544 295.544 111.653 292.487 111.016C289.431 110.358 287.054 109.615 285.356 108.787C283.679 107.938 282.427 106.908 281.599 105.698C280.792 104.488 280.389 103.023 280.389 101.304C280.389 98.5868 281.525 96.3474 283.796 94.5856C286.067 92.8025 288.974 91.911 292.519 91.9111C296.36 91.9112 299.438 92.8664 301.751 94.7769C304.086 96.6662 305.254 99.1392 305.254 102.196L301.433 102.196C301.433 100.179 300.584 98.5023 298.886 97.165C297.209 95.8276 295.087 95.1589 292.519 95.1589C290.014 95.1588 287.998 95.7213 286.47 96.8463C284.963 97.9501 284.21 99.3936 284.21 101.177C284.21 102.896 284.836 104.233 286.088 105.189C287.361 106.123 289.664 106.982 292.997 107.768C296.35 108.553 298.855 109.392 300.51 110.283C302.187 111.175 303.428 112.247 304.235 113.499C305.042 114.752 305.445 116.27 305.445 118.053C305.445 120.961 304.267 123.285 301.911 125.026C299.577 126.766 296.52 127.637 292.742 127.637C288.731 127.637 285.473 126.671 282.968 124.739C280.485 122.786 279.243 120.324 279.243 117.352L283.064 117.352C283.212 119.581 284.146 121.321 285.865 122.574C287.606 123.805 289.898 124.421 292.742 124.421C295.395 124.421 297.539 123.837 299.173 122.67C300.807 121.502 301.625 120.027 301.625 118.244Z" fill="black"/>
                                            <path d="M18.4359 98.5109C18.7947 99.6193 19.329 100.159 19.6014 100.374C19.6902 100.445 19.8314 100.422 19.9128 100.34C25.5822 94.4353 40.142 96.3604 42.0387 96.6392C42.1515 96.6566 42.3303 96.6406 42.4363 96.5971C43.2536 96.2674 45.4604 97.2932 48.9262 93.4252C50.318 91.8718 51.3466 89.1758 51.7098 88.553C52.4157 85.3364 52.4054 85.0728 53.102 82.9847C53.7986 80.8966 55.8998 77.115 53.3104 73.535C50.1037 69.1027 36.1329 78.104 36.1329 78.104C23.2196 85.4595 18.9981 96.5143 18.4423 98.1165C18.4051 98.2243 18.3997 98.4025 18.4359 98.5109Z" fill="#010002"/>
                                            <path d="M19.9528 102.147C20.9964 101.419 26.9211 98.1546 35.8646 110.23C39.9821 115.787 42.1626 119.552 43.2302 122.119C43.2735 122.223 43.3998 122.323 43.5132 122.335C43.7816 122.362 47.2595 123.363 47.5341 123.35C48.6115 123.3 48.9265 123.354 52.4054 122.119C55.8857 120.57 55.8857 120.107 57.2775 117.786C58.1123 116.394 58.3247 115.404 59.0711 113.628C59.8112 111.867 59.8743 110.598 59.86 110.531C59.86 110.531 59.8568 110.512 59.853 110.492C59.849 110.471 59.8368 110.434 59.8281 110.415L59.365 108.738C59.0765 108.083 58.3628 107.259 57.9727 106.65C53.7971 101.081 40.5741 97.8145 30.946 98.0134C25.0335 98.1353 21.7061 99.8814 19.9751 101.284C19.8865 101.356 19.8134 101.508 19.8089 101.623L19.7957 102.064C19.791 102.181 19.8593 102.214 19.9528 102.147Z" fill="#010002"/>
                                            <path d="M35.3442 111.708C35.2761 111.615 35.1665 111.466 35.0985 111.374C26.2237 99.4956 20.3479 102.735 19.3098 103.459C19.2158 103.525 19.096 103.662 19.0404 103.762C14.5914 111.715 26.4761 126.309 29.4399 127.986C31.6128 129.218 37.7219 128.491 38.2065 128.04C38.2903 127.962 38.4345 127.935 38.5366 127.986C39.2498 128.333 41.8218 129.498 42.7542 128.761C43.8363 127.904 45.0928 124.906 35.3442 111.708Z" fill="#010002"/>
                                            <path d="M17.853 100.189C17.5644 99.0468 16.8229 97.7153 16.4882 97.1923C15.845 97.0511 15.4528 97.3022 15.3116 97.9455C15.1705 98.5888 16.6765 100.942 16.6452 102.621C16.6138 104.3 14.7627 106.591 15.9079 107.516C16.8241 108.257 17.6074 106.429 17.6178 105.869C17.759 105.226 18.167 104.129 18.1825 103.296C18.2139 101.617 18.2139 101.617 17.853 100.189Z" fill="#010002"/>
                                        </svg>
                                    </span>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-8 mb-5" style="text-align: right !important;">
                                    <h1 class="display-3"><strong>What do butterflies</strong></h1>
                                    <h1 class="display-3"><strong>mean to you?</strong></h1>
                                </div>
                            </div>
                            <h4 style="text-align: center; margin-bottom: 30px; margin-top: 30px">Read the list of words on the left part of the page and choose 5 words that symbolize for you the butterflies as a concept. Remember: there are no right or wrong answers.</h4>
                            <div class="card-text text-center">
                                <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/aposematism.png" draggable="true" ondragstart="drag(event)" id="drag1" width="275" height="45" alt="">
                                </div>
                                <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/biodiversity.png" draggable="true" ondragstart="drag(event)" id="drag2" width="275" height="45" alt="">
                                </div>
                                <div id="div3" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/camouflage.png" draggable="true" ondragstart="drag(event)" id="drag3" width="275" height="45" alt="">
                                </div>
                                <div id="div4" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/caterpillar.png" draggable="true" ondragstart="drag(event)" id="drag4" width="275" height="45" alt="">
                                </div>
                                <div id="div5" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/climate.png" draggable="true" ondragstart="drag(event)" id="drag5" width="275" height="45" alt="">
                                </div>
                                <div id="div6" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/color.png" draggable="true" ondragstart="drag(event)" id="drag6" width="275" height="45" alt="">
                                </div>
                                <div id="div7" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/exoskeleton.png" draggable="true" ondragstart="drag(event)" id="drag7" width="275" height="45" alt="">
                                </div>
                                <div id="div8" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/extinction.png" draggable="true" ondragstart="drag(event)" id="drag8" width="275" height="45" alt="">
                                </div>
                                <div id="div9" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/flower.png" draggable="true" ondragstart="drag(event)" id="drag9" width="275" height="45" alt="">
                                </div>
                                <div id="div10" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/habitat.png" draggable="true" ondragstart="drag(event)" id="drag10" width="275" height="45" alt="">
                                </div>
                                <div id="div11" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/hibernate.png" draggable="true" ondragstart="drag(event)" id="drag11" width="275" height="45" alt="">
                                </div>
                                <div id="div12" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/insect.png" draggable="true" ondragstart="drag(event)" id="drag12" width="275" height="45" alt="">
                                </div>
                                <div id="div13" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/lifespan.png" draggable="true" ondragstart="drag(event)" id="drag13" width="275" height="45" alt="">
                                </div>
                                <div id="div14" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/metamophosis.png" draggable="true" ondragstart="drag(event)" id="drag14" width="275" height="45" alt="">
                                </div>
                                <div id="div15" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/migrate.png" draggable="true" ondragstart="drag(event)" id="drag15" width="275" height="45" alt="">
                                </div>
                                <div id="div16" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/mimicry.png" draggable="true" ondragstart="drag(event)" id="drag16" width="275" height="45" alt="">
                                </div>
                                <div id="div17" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/moths.png" draggable="true" ondragstart="drag(event)" id="drag17" width="275" height="45" alt="">
                                </div>
                                <div id="div18" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/nature.png" draggable="true" ondragstart="drag(event)" id="drag18" width="275" height="45" alt="">
                                </div>
                                <div id="div19" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/nectar.png" draggable="true" ondragstart="drag(event)" id="drag19" width="275" height="45" alt="">
                                </div>
                                <div id="div20" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/patterns.png" draggable="true" ondragstart="drag(event)" id="drag20" width="275" height="45" alt="">
                                </div>
                                <div id="div21" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/reproductive.png" draggable="true" ondragstart="drag(event)" id="drag21" width="275" height="45" alt="">
                                </div>
                                <div id="div22" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/skippers.png" draggable="true" ondragstart="drag(event)" id="drag22" width="275" height="45" alt="">
                                </div>
                                <div id="div23" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/species.png" draggable="true" ondragstart="drag(event)" id="drag23" width="275" height="45" alt="">
                                </div>
                                <div id="div24" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/taste.png" draggable="true" ondragstart="drag(event)" id="drag24" width="275" height="45" alt="">
                                </div>
                                <div id="div25" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/ultraviolet.png" draggable="true" ondragstart="drag(event)" id="drag25" width="275" height="45" alt="">
                                </div>
                                <div id="div26" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/ecosystem.png" draggable="true" ondragstart="drag(event)" id="drag26" width="275" height="45" alt="">
                                </div>
                                <div id="div27" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <img src="imgs/wings.png" draggable="true" ondragstart="drag(event)" id="drag27" width="275" height="45" alt="">
                                </div>
                                <div class="answer-box text-center">
                                    <div id="div-main1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                                    <div id="div-main2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                                    <div id="div-main3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                                    <div id="div-main4" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                                    <div id="div-main5" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                                </div>
                            </div>
                            <div style="text-align: right !important;">
                                <a href="app.php" style="text-align: center !important;" class="btn float-right mb-2">Next</a>
                            </div>

                          </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php require_once 'footer.php';?>