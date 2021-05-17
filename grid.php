<?php require_once 'header.php';?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body class="word-cloud">
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
                                <div class="col-xs-12 col-sm-6" style="text-align: right !important; margin-bottom: 50px">
                                    <h1><strong>Some amazing</strong></h1>
                                    <h1><strong>species</strong></h1>
                                </div>
                            </div>
                            <div class="card-text text-center m-5">
                                <div class="gallery">
                                    <a type="button" href="" data-toggle="modal" data-target="#showModal1">
                                        <img id="img1" class="img-fluid rounded" src="imgs/rectangle1.png"/>
                                    </a>
                                    <a type="button" href="" data-toggle="modal" data-target="#showModal2">
                                        <img id="img2" class="img-fluid rounded" src="imgs/rectangle2.png"/>
                                    </a>
                                    <a type="button" href="" data-toggle="modal">
                                        <div class="middle">
                                            <img id="img3" class="img3 img-fluid rounded" src="imgs/rectangle3.png"/>
                                        </div>
                                    </a>
                                    <a type="button" href="" data-toggle="modal" data-target="#showModal4">
                                        <img id="img4" class="img-fluid rounded" src="imgs/rectangle4.png"/>
                                    </a>
                                    <a type="button" href="" data-toggle="modal">
                                        <div class="middle">
                                            <img id="img5" class="img-fluid rounded" src="imgs/rectangle5.png"/>
                                        </div>
                                    </a>
                                    <a type="button" href="" data-toggle="modal">
                                        <div class="middle">
                                            <img id="img6" class="img-fluid rounded" src="imgs/rectangle6.png"/>
                                        </div>
                                    </a>
                                    <a type="button" href="" data-toggle="modal" data-target="#showModal7">
                                        <img id="img7" class="img-fluid rounded" src="imgs/rectangle7.png"/>
                                    </a>
                                    <a type="button" href="" data-toggle="modal">
                                        <div class="middle">
                                            <img id="img8" class="img-fluid rounded" src="imgs/rectangle8.png"/>
                                        </div>
                                    </a>
                                    <a type="button" href="" data-toggle="modal" data-target="#showModal9">
                                        <img id="img9" class="img-fluid rounded" src="imgs/rectangle9.png"/>
                                    </a>
                                    <a type="button" href="" data-toggle="modal" data-target="#showModal10">
                                        <img id="img10" class="img-fluid rounded" src="imgs/rectangle10.png"/>
                                    </a>
                                    <a type="button" href="" data-toggle="modal">
                                        <div class="middle">
                                            <img id="img11" class="img-fluid rounded" src="imgs/rectangle11.png"/>
                                        </div>
                                    </a>
                                    <a type="button" href="" data-toggle="modal" data-target="#showModal12">
                                        <img id="img12" class="img-fluid rounded" src="imgs/rectangle12.png"/>
                                    </a>
                                    <a type="button" href="" data-toggle="modal">
                                        <div class="middle">
                                            <img id="img13" class="img-fluid rounded" src="imgs/rectangle13.png"/>
                                        </div>
                                    </a>
                                    <a type="button" href="" data-toggle="modal" data-target="#showModal14">
                                        <img id="img14" class="img-fluid rounded" src="imgs/rectangle14.png"/>
                                    </a>
                                    <a type="button" href="" data-toggle="modal">
                                        <div class="middle">
                                            <img id="img15" class="img-fluid rounded" src="imgs/rectangle15.png"/>
                                        </div>
                                    </a>
                                    <a type="button" href="" data-toggle="modal" data-target="#showModal16">
                                        <img id="img16" class="img-fluid rounded" src="imgs/rectangle16.png"/>
                                    </a>
                                    <a type="button" href="" data-toggle="modal">
                                        <div class="middle">
                                            <img id="img17" class="img-fluid rounded" src="imgs/rectangle17.png"/>
                                        </div>
                                    </a>
                                    <a type="button" href="" data-toggle="modal">
                                        <div class="middle">
                                            <img id="img18" class="img-fluid rounded" src="imgs/rectangle18.png"/>
                                        </div>
                                    </a>
                                    <a type="button" href="" data-toggle="modal" data-target="#showModal19">
                                        <img id="img19" class="img-fluid rounded" src="imgs/rectangle19.png"/>
                                    </a>
                                    <a type="button" href="" data-toggle="modal">
                                        <div class="middle">
                                            <img id="img20" class="img-fluid rounded" src="imgs/rectangle20.png"/>
                                        </div>
                                    </a>
                                </div>
                                <div class="modal fade" id="showModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLongTitle"><strong>Boomerang owl (<i>Caligo oedipus</i>)</strong></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <img class="img-fluid rounded" style="text-align: left" src="imgs/collage1.png"/>
                                                    </div>
                                                    <div class="col">
                                                        <p style="text-align: left">
                                                            This buttefly mimics a owl eye as a <strong>defence mechanism</strong> in order to scare away other birds that might want to feed on it.
                                                        </p>
                                                        <p style="text-align: left">
                                                            The eye pattern on wings is recurrent both in <strong>buttterlies and moths</strong>.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="showModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLongTitle"><strong>Blue swallowtail (<i>Battus philenor</i>)</strong></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <img class="img-fluid rounded" style="text-align: left" src="imgs/rectangle9.png"/>
                                                    </div>
                                                    <div class="col">
                                                        <p style="text-align: left">
                                                            They live mostly in <strong>forests</strong>, are known for sequestering acids from plants they feed on and defend themselves from predators by being <strong>poisonous when consumed</strong>.
                                                        </p>
                                                        <p style="text-align: left">
                                                            In some areas there are <strong>concerns regarding their conservation</strong>.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="showModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLongTitle"><strong>Orange Oak Leaf (<i>Kallima inachus</i>)</strong></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <img class="img-fluid rounded" src="imgs/collage2.png"/>
                                                    </div>
                                                    <div class="col">
                                                        <p style="text-align: left">
                                                            Closed, it <strong>looks like a dead leaf</strong> which helps it escape predators.
                                                        </p>
                                                        <p style="text-align: left">
                                                            They use a strategy called <strong>poliphemism</strong> to change color and other visual features depending on <strong>dry and wet season</strong>.
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="showModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLongTitle"><strong>Zebra longwing (<i>Heliconius charithonia</i>)</strong></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <img id="img4" class="img-fluid rounded" src="imgs/rectangle4.png"/>
                                                    </div>
                                                    <div class="col">
                                                        <p style="text-align: left">
                                                            The boldly striped <strong>black and white wing pattern</strong> is aposematic, <strong>warning off predators</strong>.
                                                        </p>
                                                        <p style="text-align: left">
                                                            They feed on pollen and nectar; which <strong>enables them to synthesize cyanogenic glycosides</strong> that make their <strong>bodies toxic to potential predators</strong>.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="showModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLongTitle"><strong>Western Pygmy Blue (<i>Brephidium exile</i>)</strong></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <img id="img7" class="img-fluid rounded" src="imgs/rectangle7.png"/>
                                                    </div>
                                                    <div class="col">
                                                        <p style="text-align: left">
                                                            This is the <strong>smallest butterfly</strong>, with a <strong>wingspan of 12–20 mm</strong> - as big as a human fingernail.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="showModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLongTitle"><strong>Madagascan sunset moth (<i>Chrysiridia rhipheus</i>)</strong></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <img id="img10" class="img-fluid rounded" src="imgs/rectangle10.png"/>
                                                    </div>
                                                    <div class="col">
                                                        <p style="text-align: left">
                                                            It’s a species of <strong>day-flying moth</strong> of the family Uraniidae.
                                                        </p>
                                                        <p style="text-align: left">
                                                            It is much sought after by collectors. The <strong>iridescent parts of the wings do not have pigment</strong>; the colours originate from <strong>optical interference</strong>.                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="showModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLongTitle"><strong>Large Blue (<i>Maculinea Arion</i>)</strong></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <img id="img12" class="img-fluid rounded" src="imgs/rectangle12.png"/>
                                                    </div>
                                                    <div class="col">
                                                        <p style="text-align: left">
                                                            Large Blue has a  <strong>symbiotic relationship with Myrmica sabuleti ants</strong> and is dependent on the ant for it's survival, which greatly limits the areas where the butterfly can breed.
                                                        </p>
                                                        <p style="text-align: left">
                                                            <strong>If the ant colonies die out, the Large Blue is predicted to die too</strong>. It is <strong>protected in Europe</strong>, and its collection is illegal.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="showModal14" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLongTitle"><strong>Glasswinged butterfly (<i>Greta oto</i>)</strong></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <img id="img14" class="img-fluid rounded" src="imgs/rectangle14.png"/>
                                                    </div>
                                                    <div class="col">
                                                        <p style="text-align: left">
                                                            It uses <strong>transparency instead</strong> of coloration for <strong>camouflage</strong> purposes.
                                                        </p>
                                                        <p style="text-align: left">
                                                            It looks fragile but it <strong>can carry up to 40 times of its body weight</strong> and is able to <strong>fly approximately 19 km per day</strong>.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="showModal16" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLongTitle"><strong>Atlas moth (<i>Attacus atlas</i>)</strong></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <img id="img16" class="img-fluid rounded" src="imgs/rectangle16.png"/>
                                                    </div>
                                                    <div class="col">
                                                        <p style="text-align: left">
                                                            One of the biggest moths in the world with a <strong>wing span up to 27 cm</strong>.
                                                        </p>
                                                        <p style="text-align: left">
                                                            The top of forewings <strong>mimics cobra snake head</strong> in order to scare predators. The caterpillars produce silk similar to domesticated silkworms.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="showModal19" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLongTitle"><strong>Anna's eighty-eight (<i>Diaethria anna</i>)</strong></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <img id="img19" class="img-fluid rounded" src="imgs/rectangle19.png"/>
                                                    </div>
                                                    <div class="col">
                                                        <p style="text-align: left">
                                                            Is a butterfly in wet tropical forests in Middle America <strong>distinct for its 88 like patterns</strong> on the outerside of the wings.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div style="text-align: right !important;">
                                <a href="app" style="text-align: center !important; margin-top: 50px" class="btn-next"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php require_once 'footer.php';?>