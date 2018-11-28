@extends('layouts.layout')

@section('content')
@include('partial.search_home')
<div id="main-catdes">
    <div class="container">
        <div id="content-catdes">

            <div id="txt-des">
                <h1>Laos</h1>
                <p>Nestled between Cambodia, Vietnam, Thailand, Myanmar and China, the landlocked country of Laos is known for its warm, welcoming locals and laid-back atmosphere. Despite the arrival of tourism over two decades ago, traditions still hold strong in Laos making for a truly unique and relaxing visit.</p>
                <p>There is no mistaking the charm of Laos. As soon as one touches down there is an undeniable sense of tranquility that sweeps through the streets. Locals are friendly and hospitable, the attractions are captivating yet unimposing, and nature is always respected, protected and bountiful.</p>
                <div id="img-des">
                    <a href="/tours/laos" title="Laos Tours" id="box-img">
                        <img src="/assets/frontend/images/laos1.jpg" class="lazyload"/>
                        <h3><span>Laos Tours</span></h3>
                    </a>
                    <a href="/hotels/laos"  title="Laos Hotels" id="box-img">
                        <img src="/assets/frontend/images/laos2.jpg" class="lazyload"/>
                        <h3><span>Laos Hotels</span></h3>
                    </a>
                    <a href="/destinations/laos"  title="Laos Destinations" id="box-img" style="margin-right:0;">
                        <img src="/assets/frontend/images/laos3.jpg" class="lazyload"/>
                        <h3><span>Laos Destinations</span></h3>
                    </a>
                </div>
                <p>Most travelers start their tours in either Luang Prabang or Vientiane, discovering the colonial roots, traditional attractions and deep spirituality found in both destinations. From temples, pagodas and spiritual parks to outdoor markets, majestic waterfalls and riverfront promenades, Laos’ major ‘cities’ exude a charming feel that is generally associate with small towns. The enriching experience only deepens when moving farther outside the ‘busy’ parts of Laos, where locals go about their day to day as they have for centuries.</p>
                <div id="body_about">
                    <p>Destinations such as Si Phan Don, or the 4,000 Islands, and Vang Vieng display the natural beauty that Laos has been blessed with, boasting thousands of tiny islands and towering limestone caves accessibly to all adventurous travelers. Other places such as the Plain of Jars reveal a more mysterious background, surrounded by active remnants of a forgotten war-torn nation. Move even farther into the wild and you’ll find destinations in the Phongsaly province where rainforest trekking, treetop canopy living and zipline adventures are a daily occurrence.</p>
                    <p>No matter what you’re looking for with a visit to Laos, the country has something unique to offer. Excellent outdoor adventures, intriguing cultural enclaves, deep-seated spiritual practices and delicious local cuisine are found around every corner, and a handful of pleasant surprises are always popping up. Many unsuspecting travelers find they have a difficult time leaving this tranquil corner of Southeast Asia… so if you find yourself not wanting to leave, don’t say we didn’t warn you!</p>
                </div>
                <div id="detail" class="more"><a href="javascript:;" onclick="more_text_in('body_about');" class="viewmore">Read more <font>»</font></a></div>
                <div id="detail" class="hide" style="display: none;"><a class="viewmore" href="javascript:;" onclick="hide_text_in('body_about',62)">Less <font>»</font></a></div>
            </div>

            <div class="map-overview" id="map-des">
                    <div id="map-image">
                        <!-- <img src="images/mapvietnam.png" alt=""> -->
                        <div class="samap leaflet-container leaflet-touch leaflet-fade-anim" id="samap"><div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="leaflet-pane leaflet-tile-pane"></div>
                            <div class="leaflet-pane leaflet-shadow-pane"></div>
                            <div class="leaflet-pane leaflet-overlay-pane">
                                <svg pointer-events="none" width="442" height="589" viewBox="-37 -50 442 589" style="transform: translate3d(-37px, -50px, 0px);">
                                    <g>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M146 496L147 501L144 500L144 497L146 495zM134 479L136 479L141 485L136 486L134 479zM47 150L53 156L54 154L56 154L58 150L61 150L65 158L67 160L68 159L69 162L66 171L62 176L66 186L69 187L71 185L76 187L81 182L90 184L93 183L96 186L95 188L93 188L95 201L98 205L94 213L95 220L92 223L92 225L87 229L87 231L91 234L92 246L86 251L82 265L91 269L108 253L114 251L116 245L120 246L127 239L130 239L141 248L146 248L148 251L147 253L149 255L157 248L163 248L165 246L165 243L168 240L168 238L174 235L171 233L173 230L177 229L186 231L192 233L195 236L201 234L205 243L218 261L228 266L232 272L232 280L229 286L231 299L229 304L230 306L235 313L240 317L241 322L255 327L253 329L253 332L256 336L261 337L264 340L264 344L262 349L257 353L261 355L256 361L256 363L261 367L258 374L259 383L254 390L245 393L243 397L239 397L238 392L231 389L223 390L222 392L208 392L208 390L202 393L189 391L187 389L176 393L170 393L159 399L158 405L152 412L151 416L145 419L147 422L136 425L137 435L143 448L142 458L146 460L153 468L151 480L160 496L159 499L159 496L154 489L153 483L148 479L149 478L146 478L147 483L145 483L145 481L142 479L137 477L136 478L134 474L138 472L137 470L136 473L135 472L136 468L132 468L135 472L134 473L129 469L126 463L126 466L123 464L122 461L122 464L115 457L113 457L110 460L108 459L102 462L89 458L85 460L85 462L83 461L84 460L81 459L80 457L83 454L81 449L83 445L81 442L84 438L83 432L85 432L86 427L74 426L71 424L71 422L69 426L61 427L58 425L57 427L50 429L46 434L46 436L50 439L52 444L49 448L46 457L48 477L47 481L41 488L41 494L35 501L31 511L32 516L30 516L28 519L29 529L27 529L20 540L1 540L0 537L3 533L9 530L9 526L15 523L26 504L26 501L33 496L33 492L31 491L31 485L29 484L30 480L27 480L24 468L25 463L18 457L15 450L16 448L13 444L14 438L17 437L17 430L13 413L8 405L-8 392L-12 383L-20 375L-22 367L-21 366L-23 363L-22 359L-18 355L-14 357L-14 353L-7 353L-8 326L-5 325L-3 322L3 322L6 313L3 310L3 308L2 311L-3 316L-5 311L-4 310L-11 298L-9 293L-12 287L-19 283L-18 282L-28 271L-29 267L-38 260L-38 204L-36 203L-38 191L-35 188L-35 184L-28 180L-29 178L-27 174L-20 180L-11 178L-9 179L2 174L5 177L10 172L10 165L12 162L15 161L21 164L29 160L28 154L25 151L34 154L39 153L43 148L45 148z"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M-8 531L-10 531L-10 529L-8 529zM-32 530L-33 527L-31 528zM-20 527L-18 536L-20 536L-20 531L-22 528L-26 528L-23 525L-21 526zM-12 525L-12 525zM-8 525L-11 525L-9 521L-8 523zM-18 514L-17 515L-19 516L-20 515L-18 513zM-18 504L-20 504L-21 507L-23 506L-18 493L-18 502zM-8 493L-8 503L-13 500L-13 494L-15 494L-9 493zM-27 495L-26 499L-29 494L-28 490L-27 493zM-18 490L-19 491L-18 489zM-19 488L-19 487zM-9 485L-4 487L-10 489L-12 485L-11 482zM-25 477L-24 479L-26 479L-28 476L-26 474L-24 476zM-25 471L-31 473L-29 469L-29 471L-27 471L-25 468L-25 470zM-9 469L-11 468L-9 466zM-18 465L-19 466L-20 463L-19 462L-18 464zM-34 463L-35 464L-35 462zM-14 463L-13 464L-12 462L-11 467L-16 472L-17 458L-13 460zM-34 455L-34 454zM-18 442L-16 442L-17 449L-20 440L-19 437zM-32 415L-31 412zM-38 -51L-31 -51L-37 -51L-38 -46L-38 3L-22 -4L-10 -4L-7 -2L4 -5L4 -2L-1 2L-4 2L-4 10L1 11L4 17L1 20L2 23L5 24L4 29L6 30L4 34L10 36L12 39L14 38L17 40L22 37L25 40L28 40L30 45L29 47L26 45L24 51L21 53L23 65L19 68L15 77L16 79L26 79L34 81L36 83L37 81L40 83L45 82L46 86L44 91L46 96L53 98L51 104L55 108L60 104L66 107L70 107L75 104L81 97L89 94L92 98L92 104L79 113L75 113L74 119L69 124L67 129L73 130L69 133L62 132L56 137L51 153L45 148L42 149L39 153L35 154L26 151L29 160L21 164L16 161L12 162L10 165L10 172L5 177L2 174L-8 179L-10 178L-19 180L-27 174L-29 177L-28 180L-35 185L-38 191L-36 195L-38 196L-36 198L-36 202L-38 204L-38 260L-25 273L-25 275L-18 282L-19 283L-14 286L-9 292L-9 295L-12 298L-7 303L-4 315L-3 316L3 308L3 310L6 312L2 323L-2 322L-5 325L-8 325L-7 353L-8 354L-12 352L-14 356L-18 355L-20 358L-22 358L-22 367L-18 378L-13 382L-8 392L6 403L13 412L17 429L17 437L13 439L13 443L16 447L15 449L18 456L25 464L24 466L27 479L30 479L29 483L31 485L31 490L33 492L33 496L26 501L24 509L21 512L18 520L16 520L12 526L9 526L9 531L6 531L0 536L1 540L-10 540L-11 538L-11 535L-8 536L-9 534L-7 535L-5 530L-6 529L-2 527L-1 522L-4 519L-1 517L0 514L-2 508L-1 506L1 506L-1 503L-1 499L0 497L5 497L1 494L3 492L2 491L-3 497L-5 496L-6 495L-2 489L-8 490L-1 486L-2 483L-5 481L-5 479L-3 479L-4 478L-2 477L-8 476L-8 474L-2 472L-3 470L-6 469L-6 466L-2 465L-5 464L-2 457L-4 457L-3 456L-5 455L-4 454L-6 449L-6 442L-7 438L-10 436L-10 434L-11 435L-11 431L-13 428L-12 427L-17 419L-20 418L-19 413L-22 404L-21 419L-23 425L-23 419L-26 415L-25 411L-27 406L-25 403L-25 399L-30 392L-29 389L-31 387L-33 379L-31 378L-28 381L-30 376L-31 375L-32 377L-33 375L-34 378L-37 372L-36 368L-38 366L-36 366L-36 359L-38 358L-38 345z"></path>
                                        <path stroke="#C8A56A" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#C8A56A" fill-opacity="1" fill-rule="evenodd" d="M119 69L120 66L127 66L130 72L142 83L142 86L147 88L149 98L152 98L154 96L155 91L156 96L161 96L161 102L157 108L159 107L158 112L155 114L158 116L160 122L163 124L167 131L176 134L179 133L182 136L185 136L188 139L190 139L189 137L191 136L192 132L205 127L211 130L216 135L218 135L220 138L224 139L224 141L220 145L218 144L214 148L223 149L227 154L227 158L231 157L235 159L235 161L238 163L237 166L230 171L232 175L227 177L225 182L217 181L216 179L212 180L209 178L205 180L201 179L201 182L204 185L204 187L202 190L198 191L195 194L200 198L201 197L208 200L209 203L210 202L228 215L243 219L245 222L243 224L242 229L245 232L245 234L248 237L250 237L251 240L257 240L260 247L262 247L262 252L266 260L270 262L284 277L287 276L293 287L296 289L297 288L298 302L301 304L302 308L305 311L309 306L310 311L314 315L320 317L321 320L324 321L327 325L332 324L333 327L321 335L330 347L332 347L335 351L337 350L341 356L338 365L333 366L333 368L337 371L334 375L336 378L332 385L327 383L321 390L317 389L313 394L309 394L300 388L297 383L295 385L296 386L294 386L293 388L290 389L286 387L284 391L279 393L276 392L277 397L283 404L280 409L274 410L266 402L265 403L259 400L253 402L249 399L246 394L250 391L255 390L255 388L258 385L258 375L260 372L259 370L262 367L260 367L256 360L260 356L260 354L257 354L262 350L264 340L261 337L255 336L253 330L255 327L242 323L240 321L240 317L229 305L231 299L229 290L232 280L231 270L218 261L215 255L210 251L209 247L205 243L201 235L199 234L196 236L192 233L183 230L174 230L171 233L174 235L168 238L168 240L165 243L165 246L163 248L157 248L150 252L150 254L147 254L148 251L146 248L141 248L130 239L126 239L121 246L116 244L114 250L110 251L109 253L108 252L108 254L106 255L107 256L104 258L103 257L91 269L85 265L82 265L86 252L92 246L92 234L87 231L87 229L95 220L94 213L98 206L95 202L93 193L93 188L95 188L96 184L82 182L77 187L72 185L69 187L66 186L62 177L64 172L66 172L69 160L65 158L61 150L57 151L54 154L54 156L52 156L51 152L54 141L57 136L62 132L69 133L73 130L67 129L69 125L68 124L71 124L74 119L75 113L79 113L86 109L92 103L92 108L95 110L94 114L96 118L105 115L113 120L115 119L115 117L117 117L117 115L113 112L115 104L114 103L117 100L114 96L115 92L109 86L107 80L108 78L106 75L107 73L109 73L112 64L115 64L118 68z"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M174 540L175 539L174 540zM173 534L173 536L170 534L172 533zM162 508L164 509L163 514L162 507zM164 507L162 505L163 503L164 506zM335 384L333 389L331 389L329 392L328 403L329 406L332 407L332 414L339 426L339 430L333 445L337 461L336 471L331 475L328 472L321 474L314 482L308 482L304 486L301 486L302 487L292 486L294 489L292 494L294 498L288 498L287 496L278 494L275 499L272 498L269 500L272 503L271 512L273 516L281 522L282 521L284 524L282 525L284 533L278 531L275 528L273 531L267 523L264 525L255 526L252 530L243 528L242 526L239 529L242 534L235 540L199 540L196 536L195 540L184 540L182 539L186 534L189 534L188 533L190 530L188 521L186 521L184 518L180 518L181 519L178 526L179 528L176 529L174 527L168 529L166 527L167 519L165 513L168 512L168 510L167 511L165 507L169 507L167 504L167 506L165 504L164 501L164 503L161 502L162 503L162 499L164 499L161 498L165 496L162 496L159 492L161 495L161 501L159 499L160 496L151 480L153 467L142 458L144 455L142 449L143 446L137 435L136 425L138 423L141 424L146 422L146 418L151 416L153 410L158 405L160 398L167 394L176 393L178 391L179 392L186 389L188 389L188 391L196 393L201 393L205 391L206 392L208 390L208 392L222 392L223 390L230 389L237 391L240 398L243 397L245 393L252 402L259 400L262 402L266 402L274 410L279 410L280 407L283 405L277 397L278 396L276 392L283 392L286 388L292 388L297 383L298 386L304 389L307 393L313 394L317 389L319 391L321 390L326 383L331 385L335 379L335 383z"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M313 540L310 540L310 538L313 540zM307 540L306 537L310 540zM405 476L405 478L401 476L403 476zM406 462L404 461L406 460zM330 133L329 132zM315 131L317 131L320 134L319 133L317 137L312 132L314 131zM329 130L331 130L328 130zM309 130L311 133L310 134L309 131L307 131L307 129L309 129zM334 133L337 127L336 129zM346 126L344 128L344 125zM347 126L348 124zM336 124L336 128L331 129L335 125zM338 125L337 126L340 120L338 124zM336 117L339 116L330 123L333 114L336 116zM347 111L343 113L347 111zM354 109L348 111L349 110L347 110L354 109zM254 31L259 36L260 40L266 41L272 47L277 44L284 44L287 49L296 46L307 51L308 52L306 53L303 60L299 60L297 66L299 71L301 71L303 75L302 86L305 84L312 87L316 87L316 92L322 96L326 96L329 101L331 99L335 101L344 98L347 99L353 105L352 107L350 103L348 105L345 104L344 105L346 105L346 107L343 109L341 108L341 110L338 113L336 111L336 113L331 112L332 113L329 116L329 124L325 125L322 128L319 127L319 125L321 124L317 124L316 127L311 125L310 126L313 129L310 130L309 128L307 128L309 126L307 124L302 124L303 127L306 128L306 130L304 130L306 132L305 134L308 139L307 137L303 138L304 139L302 141L300 139L300 143L297 144L299 144L300 146L297 148L300 148L300 154L296 154L298 154L299 156L292 158L293 157L287 164L281 168L282 165L280 168L278 166L275 170L275 174L272 176L275 175L272 178L271 182L269 182L270 196L266 204L265 203L262 207L268 216L268 220L268 217L277 232L282 237L284 236L289 240L291 242L289 243L291 245L291 243L293 242L297 249L294 253L296 258L294 259L293 257L288 256L294 258L292 258L293 260L292 259L296 259L306 274L320 284L320 287L323 290L321 292L324 291L339 303L340 304L332 301L337 303L341 307L342 306L347 312L346 314L348 316L350 316L351 313L355 314L357 318L356 317L361 319L359 321L361 324L363 324L362 327L364 327L363 322L367 322L364 323L364 326L377 346L380 346L379 348L378 347L378 349L380 347L384 354L384 350L386 350L388 354L389 359L387 361L389 361L390 368L396 380L395 379L394 384L397 388L400 397L399 398L401 401L399 401L402 405L402 410L404 411L404 416L402 416L403 413L402 411L401 412L401 419L403 425L400 420L403 426L404 425L404 430L403 427L401 427L401 429L403 432L404 431L402 434L403 436L404 435L406 445L406 459L406 454L400 460L400 463L401 462L401 464L404 467L403 468L405 469L403 471L399 467L398 468L401 473L399 475L401 477L399 477L401 479L400 481L403 490L401 489L399 480L398 481L400 486L397 490L397 492L400 490L399 491L401 495L397 502L394 499L393 500L393 510L391 512L386 511L383 513L382 517L377 517L373 519L372 522L368 523L365 527L364 526L357 528L354 536L349 535L340 540L317 540L315 536L315 540L307 536L306 540L235 540L242 535L239 529L242 526L251 530L255 525L257 526L267 523L273 531L275 529L279 532L284 533L282 528L282 525L284 525L283 522L281 522L272 513L272 503L269 501L271 498L276 498L278 494L286 496L288 498L293 498L292 494L294 490L292 486L302 487L301 486L303 486L307 482L314 482L321 474L328 472L331 475L335 472L337 461L333 445L339 431L339 426L332 415L333 410L332 407L329 406L328 402L330 390L333 389L336 381L334 375L337 372L333 366L338 365L339 359L341 359L341 357L338 354L338 351L335 351L333 347L330 348L321 336L322 333L329 331L332 325L328 325L324 321L321 321L320 317L314 315L310 311L309 306L305 310L302 308L302 304L298 302L298 288L293 288L289 278L287 276L284 277L270 262L267 261L264 254L262 253L262 247L260 247L258 242L255 239L253 241L251 240L250 237L245 235L245 233L242 230L245 222L243 219L225 214L218 207L217 208L215 205L210 202L209 203L208 200L202 197L200 198L195 195L204 187L204 185L201 182L202 179L205 180L208 178L224 182L226 178L231 175L232 173L230 171L237 166L238 163L236 159L232 157L227 158L227 152L214 148L218 144L221 145L224 139L216 135L211 129L209 130L208 128L205 127L194 132L193 131L189 138L190 139L181 136L179 133L175 134L173 132L168 132L158 118L158 116L155 115L159 107L157 108L158 105L161 102L161 96L157 96L155 91L153 97L149 98L147 88L142 86L143 83L132 74L129 68L132 67L139 59L138 57L142 52L144 55L151 56L159 65L162 66L164 66L164 64L168 62L167 60L175 51L181 60L187 51L199 63L201 56L205 51L209 50L210 53L214 56L222 50L226 51L232 46L231 39L233 39L234 36L246 32L250 28L252 30z"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M406 235L399 236L396 232L392 232L386 228L380 227L380 218L378 213L379 209L377 203L379 201L379 193L389 186L390 187L390 185L401 177L404 178L403 175L399 177L398 175L404 169L404 171L406 171zM396 124L397 124zM406 -51L406 107L404 106L401 108L401 106L397 109L394 107L398 104L397 101L395 101L395 99L390 100L387 97L387 92L384 92L386 94L386 96L385 94L384 95L386 98L385 99L387 99L382 101L381 98L382 99L383 97L382 98L382 95L379 95L380 92L378 92L378 94L377 93L378 95L376 93L378 89L376 89L375 86L372 90L372 86L371 87L373 93L372 96L374 96L374 98L375 97L373 100L374 101L372 101L373 100L369 102L371 98L366 96L365 103L362 104L363 99L361 99L361 102L359 101L356 102L357 103L353 103L355 104L354 105L356 105L353 108L353 106L345 98L342 100L335 101L331 99L329 101L326 96L322 96L315 91L316 87L312 88L311 86L306 84L303 86L302 85L303 75L302 72L297 67L299 60L303 60L308 52L307 51L296 46L287 49L284 44L277 44L272 47L266 41L261 41L251 28L248 29L247 32L234 36L234 38L231 39L232 46L227 51L222 50L214 56L210 54L209 50L204 51L202 53L199 63L190 55L188 51L183 55L184 58L182 60L175 51L172 56L167 60L168 62L164 66L159 65L156 59L154 59L151 56L145 55L142 52L140 56L138 56L139 58L133 67L128 68L127 66L121 66L119 68L115 64L113 64L109 72L106 73L109 86L112 87L115 92L114 95L115 99L117 100L114 103L115 104L113 111L117 115L117 117L115 117L115 119L113 120L106 115L98 118L94 116L95 110L92 108L93 100L90 94L81 97L75 104L70 107L66 107L62 103L55 108L51 104L51 101L53 99L51 97L46 96L44 91L46 87L45 83L26 79L19 80L15 78L19 70L18 68L23 64L21 54L25 49L26 45L28 47L30 46L28 41L22 37L18 40L15 38L13 39L10 36L4 35L6 30L4 23L2 23L1 21L4 17L2 15L2 12L-3 10L-4 3L4 -2L4 -5L-6 -2L-10 -4L-22 -4L-38 3L-38 -46L-37 -51L-31 -51z"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M212 145L181 184"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#3388ff" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0" fill-rule="evenodd" d="M171,184a10,10 0 1,0 20,0 a10,10 0 1,0 -20,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M260 173L197 187"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#3388ff" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0" fill-rule="evenodd" d="M187,187a10,10 0 1,0 20,0 a10,10 0 1,0 -20,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M225 339L314 347"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#3388ff" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0" fill-rule="evenodd" d="M304,347a10,10 0 1,0 20,0 a10,10 0 1,0 -20,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M274 419L277 390"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#3388ff" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0" fill-rule="evenodd" d="M267,390a10,10 0 1,0 20,0 a10,10 0 1,0 -20,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M200 405L267 375"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M264,375a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M215 373L274 357"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M271,357a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M195 305L239 293"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M236,293a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M170 264L152 244"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#fff" fill-opacity="1" fill-rule="evenodd" d="M149,244a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M84 243L95 175"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M92,175a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M52 207L66 151"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M63,151a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M159 69L140 97"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M137,97a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M145 51L100 130"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M97,130a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M63 87L89 119"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M86,119a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M179 106L144 145"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M141,145a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M179 207L142 178"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M139,178a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="leaflet-pane leaflet-marker-pane">
                                <div class="leaflet-marker-icon offset-marker style-d style-medium bBg top right leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 81px; height: 26px; transform: translate3d(212px, 145px, 0px); z-index: 145; display: block;"><div class="labelText"><a target="_blank" href="https://www.mywaytravel.com/laos/travel-guide/plain-of-jars.html">Plain of Jars</a></div></div>
                                <div class="leaflet-marker-icon offset-marker style-d style-medium bBg right leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 66px; height: 44px; transform: translate3d(260px, 173px, 0px); z-index: 173; display: block;"><div class="labelText"><a target="_blank" href="https://www.mywaytravel.com/laos/travel-guide/viang-xai.html">Viang Xai<br>Caves</a></div></div>
                                <div class="leaflet-marker-icon offset-marker style-d style-medium bBg left leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 106px; height: 26px; transform: translate3d(225px, 339px, 0px); z-index: 339; display: block;"><div class="labelText"><a target="_blank" href="https://www.mywaytravel.com/laos/travel-guide/bolaven-plateau.html">Bolaven Plateau</a></div></div>
                                <div class="leaflet-marker-icon offset-marker style-d style-medium bBg bottom leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 92px; height: 44px; transform: translate3d(274px, 419px, 0px); z-index: 419; display: block;"><div class="labelText"><a target="_blank" href="/Khong-Island.html">4,000 Islands <br>(Si Phan Don)</a></div></div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg bottom left leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 79px; height: 26px; transform: translate3d(200px, 405px, 0px); z-index: 405; display: block;"><div class="labelText"><a target="_blank" href="/Champasak.html">Champasak</a></div></div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg left leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 43px; height: 26px; transform: translate3d(215px, 373px, 0px); z-index: 373; display: block;"><div class="labelText"><a target="_blank" href="/Pakse.html">Pakse</a></div></div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg left leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 86px; height: 26px; transform: translate3d(195px, 305px, 0px); z-index: 305; display: block;"><div class="labelText"><a target="_blank" href="https://www.mywaytravel.com/laos/travel-guide/savannakhet.html">Savannakhet</a></div></div>
                                <div class="leaflet-marker-icon offset-marker style-b style-medium bBg bottom leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 66px; height: 26px; transform: translate3d(170px, 264px, 0px); z-index: 264; display: block;"><div class="labelText"><a target="_blank" href="/Vientiane.html">Vientiane</a></div></div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg top leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 62px; height: 26px; transform: translate3d(84px, 243px, 0px); z-index: 243; display: block;"><div class="labelText"><a target="_blank" href="https://www.mywaytravel.com/laos/travel-guide/pakbeng.html">Pakbeng</a></div></div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg top leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 44px; height: 44px; transform: translate3d(52px, 207px, 0px); z-index: 207; display: block;"><div class="labelText"><a target="_blank" href="/Houay-Xay.html">Huay <br>Xai</a></div></div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg top right leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 68px; height: 26px; transform: translate3d(159px, 69px, 0px); z-index: 69; display: block;"><div class="labelText"><a target="_blank" href="/Phongsali.html">Phongsali</a></div></div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg top left leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 99px; height: 26px; transform: translate3d(145px, 51px, 0px); z-index: 51; display: block;"><div class="labelText"><a target="_blank" href="/Luang-Nam-Tha.html">Luang Namtha</a></div></div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg top leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 83px; height: 26px; transform: translate3d(63px, 87px, 0px); z-index: 87; display: block;"><div class="labelText"><a target="_blank" href="/Muang-Sing.html">Muang Sing</a></div></div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg top right leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 69px; height: 26px; transform: translate3d(179px, 106px, 0px); z-index: 106; display: block;"><div class="labelText"><a target="_blank" href="/Muong-La.html">Muang La</a></div></div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg bottom right leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 59px; height: 44px; transform: translate3d(179px, 207px, 0px); z-index: 207; display: block;"><div class="labelText"><a target="_blank" href="/Luang-Prabang.html">Luang<br>Prabang</a></div></div>
                                <div class="leaflet-marker-icon label-marker style-xs noBg leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 57px; height: 23px; transform: translate3d(69px, 341px, 0px); z-index: 341; display: block;"><div class="labelText" style="transform:rotate(0deg);">Thailand</div></div>
                                <div class="leaflet-marker-icon label-marker style-xs noBg leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 62px; height: 23px; transform: translate3d(37px, 123px, 0px); z-index: 123; display: block;"><div class="labelText" style="transform:rotate(0deg);">Myanmar</div></div>
                                <div class="leaflet-marker-icon label-marker style-xs noBg leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 65px; height: 23px; transform: translate3d(191px, 453px, 0px); z-index: 453; display: block;"><div class="labelText" style="transform:rotate(0deg);">Cambodia</div></div>
                                <div class="leaflet-marker-icon label-marker style-xs noBg leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 55px; height: 23px; transform: translate3d(267px, 79px, 0px); z-index: 79; display: block;"><div class="labelText" style="transform:rotate(0deg);">Vietnam</div></div>
                                <div class="leaflet-marker-icon label-marker style-xl noBg leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 50px; height: 34px; transform: translate3d(111px, 151px, 0px); z-index: 151; display: block;"><div class="labelText" style="transform:rotate(0deg);">Laos</div></div>
                            </div>
                                <div class="leaflet-pane leaflet-tooltip-pane"></div>
                                <div class="leaflet-pane leaflet-popup-pane"></div>
                            </div>
                            <div class="leaflet-control-container">
                                <div class="leaflet-top leaflet-left"></div>
                                <div class="leaflet-top leaflet-right"></div>
                                <div class="leaflet-bottom leaflet-left"></div>
                                <div class="leaflet-bottom leaflet-right"></div>
                            </div>
                        </div>
                        <p class="main-info">
                            <span class="nav"></span><b>Location:</b> bordered by China to the north, Laos to the northwest, Cambodia to the southwest, and the East Sea to the east.<br>
                            <span class="nav"></span><b>Status:</b> the easternmost country on the Indochina Peninsula<br>
                            <span class="nav"></span><b>Population:</b> 189,693,000 <br>
                            <span class="nav"></span><b>Area:</b> 331,210 km2 (127,881 sq mi) <br>
                            <span class="nav"></span><b>Religions:</b> Mahayana Buddhism, Taoism, Confucianism <br>
                        </p>
                    </div>
                                    <div id="map-view"><a href="#" id="view_map" title="Vietnam"><i class="fa fa-globe"></i>&nbsp;View Map <font>»</font></a></div>
                </div>

        </div>
    </div>
</div>

<div class="destination-overview" id="main-besttours">
    <div class="container">
        <div id="title-line">
            <h2>Best Laos Tours<span class="line"></span></h2>
            <p>Top Choices by Travel Experts &amp; Excellent feedback from our travellers</p>
            <div id="detail"><a href="/tours/laos/">View All <font>»</font></a></div>
        </div>
        <div id="scroll-tours">
            <div id="box-best-tour">
                @foreach(get_list_tours(3,42) as $tour)
                <div class="item col-md-4 col-sm-6">
                    <div class="box-tour">
                        <div class="alink">
                            <div class="img-tour">
                                <a href="{{ route('tours.show',$tour->name_link) }}" title="">
                                    <img src="{{ $tour->photo }}" class="lazyload" ></a>
                                <div class="title-tour">
                                    <h2 style="text-align:center">
                                        <a href="{{ route('tours.show',$tour->name_link) }}" title="">{{ $tour->name }}</a>
                                    </h2>
                                </div>
                                <span class="best-seller"></span>
                                <a class="heart-tour tooltip tooltipstered" class="love_tour50" href="{{ route('tours.show',$tour->name_link) }}"><i class="fa fa-heart-o"></i></a>            
                            </div>
                            <div class="txt-tour">
                                <span class="i-nav"></span>
                                <div class="price-tour">{{ $tour->duration }} DAYS </div>
                                <p style="text-align: justify;">{!! str_limit($tour->description,80) !!}</p>
                                <br clear="all">
                                <a href="{{ route('tours.show',$tour->name_link) }}" title=""><span class="bt-detail">More Info</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div id="directional">
    <div id="title-line">
        <h2>Other Countries<span class="line"></span></h2>
    </div>
    <div class="container">
        <a href="/overview/vietnam/" title="Vietnam">
            <div class="item" style="margin-left: 0;">
                <span class="icon-vn">&nbsp;</span>
                <p>Vietnam</p>
            </div>
        </a>
        <a href="/overview/cambodia/" title="Cambodia">
            <div class="item">
                <span class="icon-cam">&nbsp;</span>
                <p>Cambodia</p>
            </div>
        </a>
        <a href="/overview/laos/" title="Laos">
            <div class="item">
                <span class="icon-laos">&nbsp;</span>
                <p>Laos</p>
            </div>
        </a>
        <a href="/overview/myanmar/" title="Myanmar">
            <div class="item">
                <span class="icon-mm">&nbsp;</span>
                <p>Myanmar</p>
            </div>
        </a>
        <a href="/overview/thailand/" title="Thailand">
            <div class="item" style="margin-right: 0;">
                <span class="icon-tl">&nbsp;</span>
                <p>Thailand</p>
            </div>
        </a>
    </div>
</div>
<div id="filter">
    <div id="title-line">
        <h2>Indochina Tours<span class="line"></span></h2>
    </div>
    <ul>
        <li><a href="/tours/vietnam/" title="Vietnam Tours">Vietnam Tours</a></li>
        <li><a href="/tours/cambodia/" title="Cambodia Tours">Cambodia Tours</a></li>
        <li><a href="/tours/laos/" title="Laos Tours">Laos Tours</a></li>
        <li><a href="/tours/myanmar/" title="Myanmar Tours">Myanmar Tours</a></li>
        <li><a href="/tours/thailand/" title="Thailand Tours">Thailand Tours</a></li>
        <li><a href="/tours/indochina/" title="Indochina Tours">Indochina Tours</a></li>
    </ul>
</div>
@stop