<!DOCTYPE html>
<html lang="no">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- General -->
    <title>Javascript Basics</title>
    <link rel="icon" href="images/favicon.png">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <script src="script/script.js" defer></script>
    <script src="../../javascript/rellax.min.js"></script>
    <script src="../../javascript/rellax.js"></script>
    <!-- Stylesheets -->
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
</head>
<body>
<main class="flexbox-col">

    <!-- Back to top button -->
    <div class="back-to-top">
        <a class="semplice-event" href="#header">
            <svg version="1.1" id="Scroll_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="53px" height="20px" viewBox="0 0 53 20" enable-background="new 0 0 53 20" xml:space="preserve">
                <g id="Ebene_3"></g>
                <g><polygon points="43.886,16.221 42.697,17.687 26.5,4.731 10.303,17.688 9.114,16.221 26.5,2.312"></polygon></g>
            </svg>
        </a>
    </div>

    <!-- Header -->
    <header id="header" class="flexbox">
        <div class="header-inner flexbox">
            <h1>Javascript Basics</h1>
            <img class="rellax" data-rellax-speed="-7" src="https://images.unsplash.com/photo-1487391696373-2e7a38998e95?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1966&q=80" alt="">
        </div>
        <img class="rellax" data-rellax-speed="-7" src="https://images.unsplash.com/photo-1487391696373-2e7a38998e95?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1966&q=80" alt="">
    </header>

    <!-- Content Top -->
    <section class="top-content flexbox-col">

        <!-- Useful links -->
        <article class="content">
            <!-- Texts -->
            <h2>Nyttige lenker!</h2>
            <p class="undertitle flexbox-left">Nedenfor er lenker til relevant info innen javascript</p>
            <div class="content-list">
                <p class="flexbox-col-left">
                    <a class="link" href="https://www.w3schools.com/js/js_if_else.asp" target="_blank"><span>1.</span>Conditions</a>
                    <a class="link indent" href="https://www.w3schools.com/js/js_switch.asp" target="_blank"><span>1.1</span>Switch Statements</a>
                    <a class="link" href="https://www.w3schools.com/js/js_events.asp" target="_blank"><span>2.</span>Events</a>
                    <a class="link" href="https://www.w3schools.com/js/js_arrays.asp" target="_blank"><span>3.</span>Array</a>
                    <a class="link indent" href="https://www.w3schools.com/js/js_array_sort.asp" target="_blank"><span>3.1</span>Array Sort</a>
                </p>
                <p class="flexbox-col-left">
                    <a class="link" href="https://www.w3schools.com/js/js_string_methods.asp" target="_blank"><span>4.</span>String Methods</a>
                    <a class="link" href="https://www.w3schools.com/js/js_number_methods.asp" target="_blank"><span>5.</span>Number Methods</a>
                    <a class="link" href="https://www.w3schools.com/js/js_math.asp" target="_blank"><span>6.</span>Math</a>
                    <a class="link" href="https://www.w3schools.com/js/js_booleans.asp" target="_blank"><span>7.</span>Boolean</a>
                    <a class="link" href="https://www.w3schools.com/js/js_timing.asp" target="_blank"><span>8.</span>Timing</a>
                </p>
            </div>
        </article>

        <!-- Main Content -->
        <article class="content">
            <!-- Texts -->
            <h2>Innhold</h2>
            <p class="undertitle flexbox-left">Lenkene nedenfor er klikkbare som tar deg til temaet de handler om.</p>
            <div class="content-list">
                <p class="flexbox-col-left">
                    <a class="variabler-list" href="#variabler"><span>1.</span>Variabler</a>
                    <a class="variabler-list indent" href="#syntaks-variabler"><span>1.1</span>Syntaks</a>
                    <a class="variabler-list indent" href="#deklarere-variabler"><span>1.2</span>Deklarere variabler</a>
                    <a class="variabler-list indent-last" href="#bruke-variabler"><span>1.3</span>Bruke variabler</a>
                    <a class="funksjoner-list" href="#funksjoner"><span>2.</span>Funksjoner</a>
                    <a class="funksjoner-list indent-last" href="#lage-funksjoner"><span>2.1</span>Lage funksjoner</a>
                    <a class="eventer-list" href="#eventer"><span>3.</span>Eventer</a>
                    <a class="eventer-list indent" href="#eventer-list"><span>3.1</span>Eventer</a>
                    <a class="eventer-list indent-last" href="#funksjoner-eventer-list"><span>3.1</span>funksjoner og eventer</a>
                </p>
                <p class="flexbox-col-left">
                    <a class="lokker-list" href="#lokker"><span>4.</span>Løkker</a>
                    <a class="lokker-list indent" href="#for-loops"><span>4.1</span>For loops</a>
                    <a class="lokker-list indent-last" href="#while-loops"><span>4.2</span>While loops</a>
                    <a class="arrays-list" href="#arrays"><span>5.</span>Arrays</a>
                    <a class="arrays-list indent-last" href="#arrays-list"><span>5.1</span>Arrays</a>
                </p>
            </div>
        </article>

        <!-- Generell Info -->
        <article class="content">
            <!-- Texts -->
            <h3 class="title">Generelt</h3>
            <div class="blocks-grid">
                <div class="block">
                    <h4>Eksempel 1</h4>
                    <p class="undertitle lineheight">Eksempel hvor <span class="wrap"><span class="brackets">&#60;</span><span class="element">script</span><span class="brackets">&#62;</span></span> ligger i <span class="wrap"><span class="brackets">&#60;</span><span class="element">head</span><span class="brackets">&#62;</span></span>.</p>
                    <p class="undertitle-text lineheight">Om <span class="wrap"><span class="brackets">&#60;</span><span class="element">script</span><span class="brackets">&#62;</span></span> skal ligge i <span class="wrap"><span class="brackets">&#60;</span><span class="element">head</span><span class="brackets">&#62;</span></span> må den ha attributen <span class="wrap"><span class="italic ident">defer</span></span>.</p>
                    <div class="code-block cb-long">
                        <p>
                            <span class="brackets">&#60;</span><span class="element">html</span>
                            <span class="ident">lang</span><span class="text">="no"</span><span class="brackets">&#62;</span></p>
                        <p>
                            <span class="brackets">&#60;</span><span class="element">head</span><span class="brackets">&#62;</span></p>
                        <p>
                            <span class="indent comment">&#60;!-- Her lastes script i html head taggen --&#62;</span></p>
                        <p>
                            <span class="indent brackets">&#60;</span><span class="element">script</span>
                            <span class="ident">src</span><span class="text">="javascript/script.js"</span>
                            <span class="italic ident">defer</span><span class="brackets">&#62;</span><span class="brackets">&#60;/</span><span class="element">script</span><span class="brackets">&#62;</span></p>
                        <p>
                            <span class="brackets">&#60;/</span><span class="element">head</span><span class="brackets">&#62;</span></p>
                        <p>
                            <span class="brackets">&#60;</span><span class="element">body</span><span class="brackets">&#62;</span></p>
                        <p>
                            <span class="indent">[...]</span></p>
                        <p>
                            <span class="brackets">&#60;/</span><span class="element">body</span><span class="brackets">&#62;</span></p>
                        <p>
                            <span class="brackets">&#60;/</span><span class="element">html</span><span class="brackets">&#62;</span></p>
                    </div>
                </div>

                <div class="block">
                    <h4>Eksempel 2</h4>
                    <p class="undertitle lineheight">Eksempel hvor <span class="wrap"><span class="brackets">&#60;</span><span class="element">script</span><span class="brackets">&#62;</span></span> ligger i bunnen av html dokumentet.</p>
                    <p class="undertitle-text lineheight">Om <span class="wrap"><span class="brackets">&#60;</span><span class="element">script</span><span class="brackets">&#62;</span></span> skal ligge i bunnen av dokumentet trenger den ikke å ha attributen <span class="wrap"><span class="italic ident">defer</span></span>.</p>
                    <div class="code-block cb-long">
                        <p>
                            <span class="brackets">&#60;</span><span class="element">html</span>
                            <span class="ident">lang</span><span class="text">="no"</span><span class="brackets">&#62;</span></p>
                        <p>
                            <span class="brackets">&#60;</span><span class="element">head</span><span class="brackets">&#62;</span></p>
                        <p>
                            <span class="indent">[...]</span></p>
                        <p>
                            <span class="brackets">&#60;/</span><span class="element">head</span><span class="brackets">&#62;</span></p>
                        <p>
                            <span class="brackets">&#60;</span><span class="element">body</span><span class="brackets">&#62;</span></p>
                        <p>
                            <span class="indent">[...]</span></p>
                        <p>
                            <span class="indent comment">&#60;!-- Her lastes script nederst i html dokumentet --&#62;</span></p>
                        <p>
                            <span class="indent brackets">&#60;</span><span class="element">script</span>
                            <span class="ident">src</span><span class="text">="javascript/script.js"</span><span class="brackets">&#62;</span><span class="brackets">&#60;/</span><span class="element">script</span><span class="brackets">&#62;</span></p>
                        <p>
                            <span class="brackets">&#60;/</span><span class="element">body</span><span class="brackets">&#62;</span></p>
                        <p>
                            <span class="brackets">&#60;/</span><span class="element">html</span><span class="brackets">&#62;</span></p>
                    </div>
                </div>
            </div>

        </article>

    </section>

    <!-- Variabler -->
    <section class="content variabler">
        <h3 id="variabler" class="title flexbox-left"><i class="uil uil-link"></i> Variabler</h3>
        <div class="block">
            <p id="syntaks-variabler" class="undertitle flexbox-left">1.1 Syntaks</p>
            <div class="code-block cb-short">
                <p>
                    <span class="var">var</span>
                    <span class="var-name">x, y, z</span><span class="unique">;</span><span class="indent comment">&nbsp// Deklarere variabler</span></p>
                <p>
                    <span class="var-name">x</span>
                    <span class="unique">=</span>
                    <span class="number">5</span><span class="unique">;</span>
                    <span class="var-name">y</span>
                    <span class="unique">=</span>
                    <span class="number">6</span><span class="unique">;</span><span class="indent comment">// Gi dem verdier</span></p>
                <p>
                    <span class="var-name">z</span>
                    <span class="unique">=</span>
                    <span class="var-name">x</span>
                    <span class="unique">+</span>
                    <span class="var-name">y</span><span class="unique">;</span><span class="indent comment">&nbsp&nbsp&nbsp// Beregne verdiene</span></p>
            </div>
        </div>
        <div class="block">
            <p id="deklarere-variabler" class="undertitle flexbox-left">1.2 Deklarere variabler</p>
            <div class="code-block cb-short">
                <p>
                    <span class="comment">// Her deklareres de tre variablene på de</span></p>
                <p>
                    <span class="comment">// forskjellige måtene</span></p>
                <p>
                    <span class="var">var</span>
                    <span class="var-name">svaretPaAlt</span>
                    <span class="unique">=</span>
                    <span class="number">42</span><span class="unique">;</span></p>
                <p class="small-space">&nbsp</p>
                <p>
                    <span class="var">let</span>
                    <span class="var-name">variabelTo</span>
                    <span class="unique">=</span>
                    <span class="text">"Hello World!"</span><span class="unique">;</span></p>
                <p class="small-space">&nbsp</p>
                <p>
                    <span class="var">const</span>
                    <span class="var-name">minKnapp</span>
                    <span class="unique">=</span>
                    <span class="ident">document</span><span class="evt">.getElementById</span><span class="unique">(</span><span class="text">"min-knapp"</span><span class="unique">);</span></p>
            </div>
            <div class="code-block cb-short">
                <p>
                    <span class="var">let</span>
                    <span class="var-name">minInput</span>
                    <span class="unique">=</span>
                    <span class="ident">document</span><span class="evt">.getElementsByClassName</span><span class="unique">(</span><span class="text">"input"</span><span class="unique">)</span><span class="unique">[</span><span class="number">0</span><span class="unique">]</span><span class="unique">.</span><span class="evt">value</span><span class="unique">;</span></p>
            </div>
        </div>
        <div class="block">
            <p id="bruke-variabler" class="undertitle flexbox-left">1.3 Bruke variabler</p>
            <p class="undertitle-text">For å åpne konsollen kan du trykke: <b>Command + Option + J</b> (Mac) eller <b>Control + Shift + J</b> (Windows, Linux, Chrome OS)</p>
            <div class="code-block-wrapper flexbox-left">
                <div class="code-block cb-short">
                    <p>
                        <span class="var">let</span>
                        <span class="var-name">helloWorld</span>
                        <span class="unique">=</span>
                        <span class="text">"Hello World!"</span><span class="unique">;</span></p>
                    <p>
                        <span class="ident">console</span><span class="evt">.log</span><span class="unique">(</span><span class="var-name">helloWorld</span><span class="unique">);</span></p>
                    <div class="code-block-button-wrapper">
                        <button onclick="console.log('Hello World!')" class="secondary flexbox"><i class="uil uil-brackets-curly"></i> Test koden!</button>
                    </div>
                </div>

            </div>
            <div class="code-block-wrapper flexbox-left">
                <div class="code-block cb-short">
                    <p>
                        <span class="var">let</span>
                        <span class="var-name">helloWorld</span>
                        <span class="unique">=</span>
                        <span class="text">"Hello World!"</span><span class="unique">;</span></p>
                    <p>
                        <span class="evt">alert</span><span class="unique">(</span><span class="var-name">helloWorld</span><span class="unique">);</span></p>
                    <div class="code-block-button-wrapper">
                        <button onclick="alert('Hello World!')" class="secondary flexbox"><i class="uil uil-brackets-curly"></i> Test koden!</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Funksjoner -->
    <section class="content funksjoner">
        <h3 id="funksjoner" class="title flexbox-left"><i class="uil uil-link"></i> Funksjoner</h3>
        <div class="block">
            <p id="lage-funksjoner" class="undertitle flexbox-left">2.1 Lage funksjoner</p>
            <div class="code-block cb-short">
                <p>
                    <span class="var">function</span>
                    <span class="evt">navn</span><span class="unique">(</span><span class="italic var-name">parameter1</span><span class="var-name">,</span>
                    <span class="italic var-name">parameter2</span><span class="var-name">,</span>
                    <span class="italic var-name">parameter3</span><span class="unique">)</span>
                    <span class="unique">{</span></p>
                <p>
                    <span class="indent comment">// Koden som skal kjøres</span></p>
                <p>
                    <span class="unique">}</span></p>
            </div>
            <div class="code-block cb-short">
                <p>
                    <span class="var">let</span>
                    <span class="var-name">svar</span>
                    <span class="unique">=</span>
                    <span class="evt">minFunksjon</span><span class="unique">(</span><span class="number">4</span><span class="var-name">,</span>
                    <span class="number">3</span><span class="unique">);</span></p>
                <p class="small-space">&nbsp</p>
                <p>
                    <span class="var">function</span>
                    <span class="evt">minFunksjon</span><span class="unique">(</span><span class="number">a</span><span class="var-name">,</span>
                    <span class="number">b</span><span class="unique">)</span>
                    <span class="unique">{</span></p>
                <p>
                    <span class="indent var">return</span>
                    <span class="var-name">a</span>
                    <span class="unique">*</span>
                    <span class="var-name">b</span><span class="unique">;</span></p>
                <p>
                    <span class="unique">}</span></p>
                <p class="small-space">&nbsp</p>
                <p>
                    <span class="ident">document</span><span class="evt">.getElementById</span><span class="unique">(</span><span class="text">"svar"</span><span class="unique">).</span><span class="evt">innerHTML</span>
                    <span class="unique">=</span>
                    <span class="var-name">svar</span><span class="unique">;</span></p>
                <p class="small-space">&nbsp</p>
                <p class="text-box-wrapper">
                    <span class="comment">&#60;!-- Hva tror du er svaret? --&#62;</span></p>
                <p>
                    <span class="brackets">&lt;</span><span class="element">p</span> <span class="ident">id</span><span class="text">="svar"</span><span class="brackets">&gt;</span><span id="svar"> </span><span class="brackets">&lt;/</span><span class="element">p<span class="brackets">&gt;</span></span></p>
                <div class="code-block-button-wrapper">
                    <script>
                        let svar = minFunksjon(4, 3);

                        function minFunksjon(a, b) {
                            return a * b;
                        }
                    </script>
                    <button onclick="document.getElementById('svar').innerHTML = svar;" class="secondary flexbox"><i class="uil uil-brackets-curly"></i> Test koden!</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Eventer -->
    <section class="content eventer">
        <h3 id="eventer" class="title flexbox-left"><i class="uil uil-link"></i> Eventer</h3>
        <div class="block">
            <p id="eventer-list" class="undertitle flexbox-left">3.1 Eventer</p>
            <div class="code-block cb-short">
                <p>
                    <span class="comment">// Javascript Koden</span></p>
                <p>
                    <span class="brackets">&#60;</span><span class="element">button</span>
                    <span class="var">onclick</span><span class="unique">=</span><span class="text">"document.getElementById('text-box').innerHTML = 'Hello World!'</span><span class="brackets">&#62;</span><span class="brackets">&#60;/</span><span class="element">button</span><span class="brackets">&#62;</span></p>
                <p class="text-box-wrapper">
                    <span class="comment">&#60;!-- HTML Koden --&#62;</span></p>
                <p>
                    <span class="brackets">&#60;</span><span class="element">p</span> <span class="ident">id</span><span class="text">="text-box"</span><span class="brackets">&#62;</span><span id="text-box">Trykk på knappen for å endre meg!</span><span class="brackets">&#60;/</span><span class="element">p<span class="brackets">&#62;</span></span></p>
                <div class="code-block-button-wrapper">
                    <button onclick="document.getElementById('text-box').innerHTML = 'Hello World!'" class="secondary flexbox"><i class="uil uil-brackets-curly"></i> Test koden!</button>
                </div>
            </div>
        </div>
        <div class="block">
            <p id="funksjoner-eventer-list" class="undertitle flexbox-left">3.2 Bruke funksjoner og eventer sammen</p>
            <div class="code-block cb-short">
                <p>
                    <span class="var">function</span>
                    <span class="evt">minFunksjon</span><span class="unique">(</span><span class="unique">)</span>
                    <span class="unique">{</span></p>
                <p>
                    <span class="indent ident">document</span><span class="unique">.</span><span class="evt">getElementById</span><span class="unique">(</span><span class="text">"paragraph"</span><span class="unique">).</span><span class="evt">style</span><span class="unique">.</span><span class="evt">display</span>
                    <span class="unique">=</span>
                    <span class="text">"block"</span><span class="unique">;</span></p>
                <p>
                    <span class="unique">}</span></p>
                <p class="small-space">&nbsp</p>
                <p>
                    <span class="brackets">&#60;</span><span class="element">button</span>
                    <span class="var">onclick</span><span class="unique">=</span><span class="text">"minFunksjon()'</span><span class="brackets">&#62;</span><span class="brackets">&#60;/</span><span class="element">button</span><span class="brackets">&#62;</span></p>
                <p id="paragraph" class="text-box-wrapper">
                    <span class="brackets">&#60;</span><span class="element">p</span> <span class="ident">id</span><span class="text">="paragraph"</span><span class="brackets">&#62;</span><span>Nå kan du se meg!</span><span class="brackets">&#60;/</span><span class="element">p<span class="brackets">&#62;</span></span></p>
                <div class="code-block-button-wrapper">
                    <button onclick="document.getElementById('paragraph').style.display = 'block'" class="secondary flexbox"><i class="uil uil-brackets-curly"></i> Test koden!</button>
                </div>
            </div>
            <div class="code-block cb-short">
                <p>
                    <span class="var">let</span>
                    <span class="var-name">button</span>
                    <span class="unique">=</span>
                    <span class="ident">document</span><span class="unique">.</span><span class="evt">getElementById</span><span class="unique">(</span><span class="text">"button"</span><span class="unique">);</span></p>
                <p class="small-space">&nbsp</p>
                <p>
                    <span class="var-name">button</span><span class="unique">.</span><span class="evt">addEventListener</span><span class="unique">(</span><span class="text">'click'</span><span class="var-name">,</span>
                    <span class="var">function</span><span class="unique">()</span>
                    <span class="unique">{</span></p>
                <p>
                    <span class="indent comment">// Koden for hva som skjer når "button" trykkes på</span></p>
                <p>
                    <span class="unique">});</span></p>
            </div>
        </div>
    </section>

    <!-- Løkker -->
    <section class="content lokker">
        <h3 id="lokker" class="title flexbox-left"><i class="uil uil-link"></i> Løkker</h3>
        <div class="block">
            <p id="for-loops" class="undertitle flexbox-left">4.1 For loops</p>
            <p class="undertitle-text lineheight">I en <b>for loop</b>:</p>
            <ul>
                <li>blir <b>statement 1</b> kjørt én gang.</li>
                <li>definerer <b>statement 2</b> vilkåret for å kjøre koden.</li>
                <li>blir <b>statement 3</b> kjørt hver gang etter koden har blitt kjørt.</li>
            </ul>
            <div class="code-block cb-short">
                <p>
                    <span class="var">for</span>
                    <span class="unique">(</span><span class="italic var-name">statement 1</span><span class="unique">;</span>
                    <span class="italic var-name">statement 2</span><span class="unique">;</span>
                    <span class="italic var-name">statement 3</span><span class="unique">)</span>
                    <span class="unique">{</span></p>
                <p>
                    <span class="indent comment">// Koden som skal kjøres</span>
                <p>
                    <span class="unique">}</span></p>
            </div>
            <div class="code-block cb-short">
                <p>
                    <span class="var">let</span>
                    <span class="var-name">text</span>
                    <span class="unique">=</span>
                    <span class="text">""</span><span class="unique">;</span></p>
                <p>
                    <span class="var">let</span>
                    <span class="var-name">i</span><span class="unique">;</span></p>
                <p class="small-space">&nbsp</p>
                <p>
                    <span class="var">for</span>
                    <span class="unique">(</span><span class="var-name">i</span>
                    <span class="unique">=</span>
                    <span class="number">0</span><span class="unique">;</span>
                    <span class="var-name">i</span>
                    <span class="unique">&#60;</span>
                    <span class="number">5</span><span class="unique">;</span>
                    <span class="var-name">i</span><span class="unique">++</span><span class="unique">)</span>
                    <span class="unique">{</span></p>
                <p>
                    <span class="indent var-name">text</span>
                    <span class="unique">+=</span>
                    <span class="text">"&lt;br/&gt;Tallet er "</span>
                    <span class="unique">+</span>
                    <span class="var-name">i</span><span class="unique">;</span>
                <p>
                    <span class="unique">}</span></p>
            </div>
        </div>
        <div class="block">
            <p id="while-loops" class="undertitle flexbox-left">4.2 While loops</p>
            <p class="undertitle-text lineheight">En <b>while loop</b> vil loope så lenge den spesifiserte <i>condition</i> er <i>true</i></p>
            <div class="code-block cb-short">
                <p>
                    <span class="var">while</span>
                    <span class="unique">(</span><span class="italic var-name">condition</span><span class="unique">)</span>
                    <span class="unique">{</span></p>
                <p>
                    <span class="indent comment">// Koden som skal kjøres</span>
                <p>
                    <span class="unique">}</span></p>
            </div>
            <div class="code-block cb-short">
                <p>
                    <span class="var">let</span>
                    <span class="var-name">tullball</span>
                    <span class="unique">=</span>
                    <span class="text">""</span><span class="unique">;</span></p>
                <p>
                    <span class="var">let</span>
                    <span class="var-name">i</span>
                    <span class="unique">=</span>
                    <span class="number">0</span><span class="unique">;</span></p>
                <p class="small-space">&nbsp</p>
                <p>
                    <span class="var">while</span>
                    <span class="unique">(</span><span class="var-name">i</span>
                    <span class="unique">&#60;</span>
                    <span class="number">10</span><span class="unique">)</span>
                    <span class="unique">{</span></p>
                <p>
                    <span class="indent var-name">tullball</span>
                    <span class="unique">+=</span>
                    <span class="text">"&lt;br/&gt;Tallet er "</span>
                    <span class="unique">+</span>
                    <span class="var-name">i</span><span class="unique">;</span></p>
                <p>
                    <span class="indent var-name">i</span><span class="unique">++;</span></p>
                <p>
                    <span class="unique">}</span></p>
            </div>
        </div>
    </section>

    <!-- Arrays -->
    <section class="content arrays">
        <h3 id="arrays" class="title flexbox-left"><i class="uil uil-link"></i> Arrays</h3>
        <div class="block">
            <p id="arrays-list" class="undertitle flexbox-left">5.1 Arrays</p>
            <div class="code-block cb-short">
                <p>
                    <span class="var">let</span>
                    <span class="var-name">arraynavn</span>
                    <span class="unique">=</span>
                    <span class="unique">[</span><span class="italic var-name">item1</span><span class="var-name">, </span><span class="italic var-name">item2</span><span class="var-name">, </span><span class="italic var-name">...</span><span class="unique">];</span>
            </div>
            <div class="code-block cb-short">
                <p>
                    <span class="var">let</span>
                    <span class="var-name">arraynavn</span>
                    <span class="unique">=</span>
                    <span class="unique">[</span>
                <p>
                    <span class="indent text">"bil"</span><span class="var-name">,</span></p>
                <p>
                    <span class="indent text">"båt"</span><span class="var-name">,</span>
                <p>
                    <span class="indent text">"hus"</span>
                <p>
                    <span class="unique">]</span></p>
                <p class="small-space">&nbsp</p>
                <p>
                    <span class="ident">document</span><span class="evt">.getElementById</span><span class="unique">(</span><span class="text">"rareting"</span><span class="unique">).</span><span class="evt">innerHTML</span>
                    <span class="unique">=</span>
                    <span class="var-name">arraynavn</span><span class="unique">[</span><span class="number">1</span><span class="unique">]</span><span class="unique">;</span></p>
                <p class="text-box-wrapper">
                    <span class="comment">&lt;!-- Hva kommer til å vises her? --&gt;</span></p>
                <p>
                    <span class="brackets">&lt;</span><span class="element">p</span> <span class="ident">id</span><span class="text">="rareting"</span><span class="brackets">&gt;</span><span id="rareting"> </span><span class="brackets">&lt;/</span><span class="element">p<span class="brackets">&gt;</span></span></p>
                <div class="code-block-button-wrapper">
                    <script>
                        let arraynavn = [
                            "bil",
                            "båt",
                            "hus"
                        ]
                    </script>
                    <button onclick="document.getElementById('rareting').innerHTML = arraynavn[1];" class="secondary flexbox"><i class="uil uil-brackets-curly"></i> Test koden!</button>
                </div>
            </div>
        </div>
    </section>
</main>
<script>

    // Accepts any class name
    var rellax = new Rellax('.rellax');

</script>
</body>
</html>
