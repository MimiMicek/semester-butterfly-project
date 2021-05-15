<?php require_once 'header.php';?>
    </head>
    <body class="closer-look">
    <main>
        <div class="container">
            <div class="row h-50">
                <div class="col-sm-12 mx-auto my-auto">
                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="row logo-headline">
                                <div class="logo col-xs-6 col-md-4">
                                    <span>
                                        <svg width="229" height="164" viewBox="0 0 229 164" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M73.2642 70.445C73.825 72.1738 74.659 73.0148 75.0842 73.3498C75.2228 73.4611 75.4431 73.4252 75.5699 73.2973C84.4087 64.0802 107.124 67.0694 110.083 67.5027C112.001 67.4518 116.834 66.3765 120.825 62.4821L121.011 62.2736C123.113 59.9256 125.107 57.6982 126.293 55.7217C128.689 51.7274 128.975 50.5477 129.629 47.8441L129.629 47.8441C129.717 47.4782 129.812 47.0845 129.92 46.652C130.828 43.0241 131.688 37.0314 127.645 31.449C122.638 24.5377 107.192 31.4491 107.192 31.4491C87.0543 42.9361 74.1394 67.3298 73.2737 69.8296C73.2159 69.9979 73.2076 70.2759 73.2642 70.445ZM114.193 49.8521C112.42 50.0136 111.114 51.5818 111.275 53.3548C111.437 55.1277 113.005 56.4341 114.778 56.2725C116.551 56.111 117.857 54.5428 117.696 52.7699C117.534 50.9969 115.966 49.6906 114.193 49.8521ZM97.7202 53.8809C97.5586 52.1079 98.865 50.5397 100.638 50.3782C102.411 50.2167 103.979 51.523 104.141 53.296C104.302 55.0689 102.996 56.6371 101.223 56.7987C99.4499 56.9602 97.8817 55.6539 97.7202 53.8809ZM119.736 39.6345C117.963 39.796 116.657 41.3642 116.818 43.1372C116.98 44.9101 118.548 46.2165 120.321 46.055C122.094 45.8934 123.4 44.3252 123.239 42.5523C123.077 40.7793 121.509 39.473 119.736 39.6345Z" fill="#010002"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M111.915 114.593C117.343 112.173 130.9 103.293 133.825 100.249C139.843 93.9869 137.795 86.7312 134.899 82.8752C128.38 74.1925 107.749 69.1087 92.7291 69.4282C84.0206 69.6131 78.9085 72.0544 76.0932 74.1689C75.7625 74.2811 75.1463 74.8806 75.0877 74.986C68.1548 87.3978 87.4812 110.087 92.1064 112.701C92.2635 112.79 92.4321 112.871 92.611 112.946L92.7291 113.203C97.392 117.094 107.462 115.751 111.915 114.593Z" fill="#010002"/>
                                            <path d="M65.708 68.4189C69.494 72.5479 69.7593 76.2804 66.5305 81.8134" stroke="black" stroke-width="2.77937" stroke-linecap="round"/>
                                        </svg>
                                    </span>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-8" style="text-align: right !important; margin-bottom: 50px">
                                    <h1><strong>Getting a</strong></h1>
                                    <h1><strong>closer look</strong></h1>
                                </div>
                            </div>
                            <h4 style="text-align: center;">
                                What products do you think humans benefit from by preserving different lepidoptera species?
                            </h4>
                            <h5 style="text-align: center; margin-bottom: 30px;">*click to select</h5>
                            <div class="card-text text-center m-5">
                                <div class="row">
                                    <div class="col-sm">
                                        <label>
                                            <input type="radio" name="test" value="small" checked>
                                            <img style="width: 85%" src="imgs/benefitA.png">
                                        </label>
                                    </div>
                                    <div class="col-sm">
                                        <label>
                                            <input type="radio" name="test" value="small" checked>
                                            <img style="width: 85%" src="imgs/benefitB.png">
                                        </label>
                                    </div>
                                    <div class="col-sm">
                                        <label>
                                            <input type="radio" name="test" value="small" checked>
                                            <img style="width: 85%" src="imgs/benefitC.png">
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div style="text-align: left !important; margin-top: 100px; margin-left: 30px" class="col-xs-6 col-md-4">
                                        <button id="checkBtn" onclick="showAnswer()" style="" class="btn btn-success">Check answer</button>
                                    </div>
                                    <div id="answer" class="col-xs-12 col-sm-6 col-md-8 answer float-right" style="text-align: right !important; margin-top: 80px; margin-left: 150px">
                                        <p style="text-align: center !important; margin-top: inherit">
                                            <strong>All of the above (A, B, C) </strong>and many other.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div style="text-align: right !important;">
                                <a href="grid" style="text-align: center !important; margin-top: 50px" class="btn-next"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        let input = document.getElementsByTagName("input");
        for (let i = input.length - 1; i >= 0; i--) {
            if ('radio'===input[i].type) input[i].checked = false;
        }

        function showAnswer(){
            let answer = document.getElementById("answer");
            let checkBtn = document.getElementById("checkBtn");
            checkBtn.disable = "true";
            checkBtn.style.backgroundColor = "gray";
            checkBtn.style.borderColor = "gray";
            answer.style.display = "block";
        }
    </script>
<?php require_once 'footer.php';?>