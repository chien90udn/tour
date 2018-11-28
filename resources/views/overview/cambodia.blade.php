@extends('layouts.layout')

@section('content')
@include('partial.search_home')
<div id="main-catdes">
    <div class="container">
        <div id="content-catdes">

            <div id="txt-des">

                <h1>Cambodia</h1>
                <p>Over the years, Cambodia has slowly been growing into one of Southeast Asia’s leading destinations to visit. A few decades back, the small, dusty country was still bouncing back from the country’s internal turmoil, and a handful international travelers had their eyes on the temples of Angkor, and nothing more. Despite the country’s great variety in landscapes and attractions, the kingdom’s offerings were still little known, and even less developed by domestic travel companies. Thankfully, as time rolled on and tourism in the Southeast Asia region began increasing, Cambodia’s development and popularity has skyrocketed. The star of the show? The ancient temples of Angkor.</p>
                <div id="img-des">
                    <a href="/tours/cambodia" title="Cambodia Tours" id="box-img">
                        <img src="/assets/frontend/images/cam1.jpg" class="lazyload"/>
                        <h3><span>Cambodia Tours</span></h3>
                    </a>
                    <a href="/hotels/cambodia"  title="Cambodia Hotels" id="box-img">
                        <img src="/assets/frontend/images/cam2.jpg" class="lazyload"/>
                        <h3><span>Cambodia Hotels</span></h3>
                    </a>
                    <a href="/destinations/cambodia"  title="Cambodia Destinations" id="box-img" style="margin-right:0;">
                        <img src="/assets/frontend/images/cam3.jpg" class="lazyload"/>
                        <h3><span>Cambodia Destinations</span></h3>
                    </a>
                </div>
                <p>The star of Siem Reap, the temples of Angkor stretch on for kilometers, representing the former capital of the Khmer Empire. Sitting at the heart of the sprawling temple complex is Angkor Wat, which is the largest religious complex in the world. Visitors come from far and wide to gaze at these towering religious monuments, which vary greatly in size, style and layout. While this UNESCO-protected complex is certainly worth all the hype (and more), travelers are finally discovering that Cambodia’s travel offerings reach well beyond the walls of Angkor.</p>

                <div id="body_about">
                    <p>Siem Reap, the gateway to the Angkor complex, has developed into its own fascinating tourist destination, with Khmer architecture, cuisine, culture and hospitality giving the Angkor Complex a run for its money. World-class hotels, restaurants and boutique shops can be found in this bustling city, introducing first-time visitors to Cambodian charm and alluring repeat travelers to return again and again.</p>
                    <p>Further southeast from Siem Reap sits Cambodia’s capital city of Phnom Penh, which boasts its own unique attractions and appeals. While the city once sat as the headquarters for some of the Khmer Rouge’s worst atrocities, the city is slowly inching away from its dark days (and dark visits such as S-21 and the Killing Fields), and attracting travelers with its array of accommodation, restaurants, tranquil riverside visits and more. From markets and dazzling architecture to lush green boulevards and mesmerizing Buddhist temples, Phnom Penh has a great deal to offer visitors beyond the sites of the Khmer Rouge.</p>
                    <p>For those who are ready to get a bit off the beaten path, Cambodia’s lesser known sites are also well worth a visit. Destinations such as Battambang, Banteay Srei and the Tonle Sap Lake region offer their own unique appeals and attractions, offering visitors a glimpse into a more rural Cambodia. Ancient temple ruins, stilt-houses combatting seasonal flood waters and unique modes of transport make visiting some of the area’s alternative destinations well worth the trek out. Furthermore, Cambodia also has a southern coastal area that gives both Thailand and Vietnam a run for their money.</p>
                    <p>Travelers seeking some sun and sand will love the Kampot, Sihanoukville and Koh Rong areas, where wonderful resorts, clean beaches and great food/beverage outlets are slowly popping up, making for a wonderful tropical retreat. On top of the beautiful landscapes, Cambodia’s coastline also offers the country’s freshest seafood offerings, which get served fresh from the ocean to the plate on a daily basis.</p>
                    <p>Whether you’re looking for a family getaway, a solo excursion, honeymoon retreat or backpacking adventure, Cambodia has got it all. No longer just a brief, add-on destination, Cambodia has a condensed version of what many other countries in the region have to offer, with its own fascinating culture, history, cuisine and customs. Travel well beyond the temples of Angkor and discover everything the Kingdom of Cambodia has to offer!</p>
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
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M60 264L62 266L62 273L58 271L58 266L60 262zM44 240L48 242L53 251L50 249L46 250L47 251L45 249L43 240zM-38 540L-38 -51L182 -51L182 -42L178 -32L180 -15L178 -9L179 -4L185 1L186 5L193 11L195 19L214 25L211 28L214 37L216 39L225 41L227 46L224 58L218 61L219 64L222 63L221 68L216 73L217 77L222 82L224 82L221 84L222 87L218 94L219 108L214 114L210 116L208 115L207 117L200 119L197 125L194 126L192 124L190 116L183 115L180 113L177 115L175 113L172 114L167 118L155 117L152 115L149 117L147 115L146 117L133 117L132 119L129 117L120 116L119 113L116 115L113 114L108 117L107 116L103 118L94 119L88 121L79 127L77 136L71 141L66 152L59 156L62 160L57 162L46 163L47 178L50 186L55 193L55 200L57 204L55 210L71 225L68 229L67 241L71 246L80 264L79 268L78 261L71 254L70 246L62 237L60 238L60 246L57 241L45 238L44 234L48 232L48 228L48 230L46 231L46 225L44 227L44 225L41 224L40 225L43 226L44 229L44 231L42 231L33 222L36 219L32 219L33 217L31 217L33 223L30 219L28 219L27 215L27 219L24 217L25 216L23 216L21 212L13 209L9 213L3 213L0 214L-1 216L-7 213L-20 211L-25 213L-26 216L-29 214L-29 212L-32 213L-33 207L-29 205L-32 198L-28 193L-31 188L-28 183L-29 177L-26 173L-25 166L-31 167L-38 165L-38 523L-25 531L-14 531L-11 529L-7 530L-6 529L-10 526L-7 526L4 531L10 540z"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M249 -51L256 -45L260 -47L263 -44L262 -42L264 -38L267 -36L268 -31L275 -29L275 -13L276 -10L281 -7L282 1L286 2L290 -4L292 -4L292 2L298 8L304 9L309 17L312 17L316 22L324 22L320 30L313 34L311 33L308 37L312 41L313 46L317 49L320 54L324 53L328 59L331 59L331 61L336 67L336 70L331 79L325 80L325 84L330 88L327 92L328 97L323 107L317 104L306 115L302 113L296 120L289 120L284 114L276 109L274 105L271 107L272 108L269 109L269 112L263 113L258 110L255 117L244 118L246 124L254 134L250 141L246 142L239 141L234 137L231 132L225 132L224 130L221 129L212 132L202 123L202 118L214 114L219 108L218 95L222 87L221 85L224 82L222 82L216 76L216 72L222 67L222 64L218 63L218 61L225 57L227 46L225 41L214 37L211 28L215 25L196 20L194 18L193 11L187 6L185 1L178 -5L180 -14L178 -31L182 -41L182 -51z"></path>
                                        <path stroke="#C8A56A" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#C8A56A" fill-opacity="1" fill-rule="evenodd" d="M127 334L124 333L127 331zM101 327L101 329L99 325L101 325L100 327zM99 318L101 320L99 321L94 318L95 316L98 317zM83 281L86 282L86 289L84 290L83 280zM85 280L83 276L84 275L86 278zM327 107L325 113L322 113L319 118L320 122L317 131L319 133L319 136L323 138L324 149L333 166L333 173L325 192L326 200L329 204L331 215L328 230L324 232L323 235L321 235L317 230L308 233L298 244L286 246L283 251L267 250L270 256L267 262L269 267L261 267L258 264L247 261L243 268L238 267L235 270L235 272L238 274L239 279L237 287L242 293L245 293L251 301L252 299L254 300L256 305L253 306L253 308L256 317L248 315L242 310L242 312L238 313L237 309L231 303L220 307L214 306L209 313L196 307L192 310L195 320L187 325L184 330L169 330L163 336L158 332L154 333L152 328L147 329L135 327L131 321L128 329L126 330L123 328L124 330L118 332L116 328L115 329L112 325L111 326L111 324L114 319L121 318L120 315L122 314L123 310L119 302L120 300L112 295L108 299L109 298L106 309L103 311L100 308L95 310L96 311L90 310L90 297L89 292L87 292L89 287L92 286L89 284L87 280L92 280L91 277L90 278L87 276L87 271L82 275L81 273L82 272L83 274L83 269L86 269L82 269L82 266L84 264L88 264L85 263L83 265L78 258L82 265L81 272L79 269L80 264L67 241L68 230L71 225L60 214L55 211L57 206L55 198L56 194L54 190L51 188L47 178L46 164L47 162L57 162L61 160L59 157L67 151L71 141L77 136L80 126L90 120L106 116L107 117L112 114L115 115L118 113L120 113L120 116L132 119L136 117L145 117L147 115L149 117L151 115L155 117L167 118L171 114L176 115L179 113L189 116L194 126L197 125L200 119L202 118L202 123L210 131L215 132L221 128L227 132L231 132L233 136L240 142L249 142L250 139L254 136L254 134L247 126L244 118L245 117L254 117L257 115L258 111L262 113L269 112L270 108L272 108L271 107L274 105L275 108L279 112L286 115L287 118L290 120L296 120L302 113L306 115L310 110L312 110L316 104L322 107L328 98L329 100L327 104z"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M282 427L281 430L279 430L279 433L276 432L280 427L282 427zM257 380L262 382L261 384L259 385L257 381L257 383L253 378L251 372L254 377zM275 368L269 363L272 364zM286 346L285 347L283 345L274 343L284 344L287 346zM138 334L142 339L142 345L139 354L140 358L138 357L137 350L134 344L130 341L130 339L133 339L137 335zM311 335L305 341L304 337L308 336L309 333zM297 331L296 336L297 335L299 337L296 337L294 339L294 331L296 330zM406 331L404 330L406 329zM296 327L296 329L295 327L295 330L293 330L292 324L296 326zM293 332L293 334L291 333L291 337L287 332L287 322L292 326L293 330L291 332zM286 -51L306 -36L311 -26L308 -24L310 -24L311 -26L334 -7L324 -11L331 -7L332 -8L334 -6L333 -5L336 -6L335 -4L338 -4L341 -1L345 4L343 4L346 9L349 10L351 8L351 5L355 8L356 6L359 12L357 12L364 13L362 19L365 21L366 20L366 25L368 24L368 19L366 18L368 16L370 18L372 17L373 18L368 22L369 26L376 32L375 33L376 32L379 40L388 52L391 53L390 55L388 55L389 57L392 54L392 57L396 60L396 62L398 62L397 58L399 58L400 61L402 62L402 65L405 68L401 73L403 75L403 73L406 85L406 287L400 286L396 288L393 294L385 294L370 309L370 307L361 308L358 311L354 321L349 319L332 327L329 331L319 334L315 338L310 337L312 336L310 333L303 333L303 331L302 333L300 333L302 330L301 322L299 321L301 323L301 329L300 325L299 326L301 330L299 333L297 330L297 326L287 321L286 322L288 326L285 331L282 330L282 332L278 335L277 332L277 334L278 335L281 333L282 335L285 333L288 337L288 344L270 341L269 342L289 350L289 353L285 357L284 354L281 360L276 359L271 356L264 345L262 345L265 347L272 358L284 365L282 368L282 365L282 367L278 369L267 360L254 346L252 346L256 352L272 367L274 372L277 373L277 378L275 382L273 384L267 384L249 370L241 360L237 359L250 373L250 375L257 384L257 388L255 391L257 393L221 407L217 410L210 423L206 427L202 428L197 434L184 438L177 436L183 433L183 431L187 431L190 429L184 429L187 428L188 424L184 426L180 424L182 417L181 411L184 373L186 367L189 367L196 362L198 367L198 362L191 353L186 354L178 346L171 351L170 346L165 339L166 336L164 338L162 338L162 336L164 336L168 330L184 330L189 324L195 320L192 310L196 307L197 309L206 310L208 313L210 312L213 306L225 306L233 303L238 313L242 311L248 315L256 317L253 309L253 306L256 306L255 301L253 299L249 299L245 294L238 289L239 279L237 273L235 273L235 270L238 267L244 267L247 261L258 264L261 267L268 267L267 262L270 256L267 251L283 251L286 246L298 244L303 240L308 233L317 230L321 235L323 235L324 232L328 230L331 217L329 204L326 200L325 193L333 173L333 166L328 155L324 150L323 139L319 137L317 131L321 114L325 113L329 101L327 94L330 89L325 84L324 81L332 78L331 77L336 66L332 63L330 58L327 58L327 56L324 53L321 54L314 46L313 42L308 38L310 34L320 30L324 25L324 22L316 22L312 17L307 15L304 9L298 9L293 2L292 -4L290 -4L286 2L283 1L281 -1L281 -7L275 -12L275 -29L268 -31L262 -42L263 -43L261 -47L257 -45L249 -51z"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M148 386L158 333"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M155,333a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M79 420L115 321"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M112,321a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M129 217L148 201"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#3388ff" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0" fill-rule="evenodd" d="M138,201a10,10 0 1,0 20,0 a10,10 0 1,0 -20,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M30 262L76 225"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#3388ff" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0" fill-rule="evenodd" d="M66,225a10,10 0 1,0 20,0 a10,10 0 1,0 -20,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M79 101L108 187"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M105,187a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M202 86L176 150"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#3388ff" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0" fill-rule="evenodd" d="M166,150a10,10 0 1,0 20,0 a10,10 0 1,0 -20,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M134 48L161 149"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M158,149a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M312 162L304 206"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#3388ff" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0" fill-rule="evenodd" d="M294,206a10,10 0 1,0 20,0 a10,10 0 1,0 -20,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M296 106L289 148"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#3388ff" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0" fill-rule="evenodd" d="M279,148a10,10 0 1,0 20,0 a10,10 0 1,0 -20,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M245 136L242 207"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M239,207a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M208 275L196 243"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#fff" fill-opacity="1" fill-rule="evenodd" d="M193,243a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="leaflet-pane leaflet-marker-pane">
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg bottom leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 99px; height: 26px; transform: translate3d(148px, 386px, 0px); z-index: 386; display: block;"><div class="labelText"><a href="/cambodia-holidays/travel-guides/kep-kampot">Kep &amp; Kampot</a></div></div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg bottom leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 109px; height: 26px; transform: translate3d(79px, 420px, 0px); z-index: 420; display: block;"><div class="labelText"><a href="/cambodia-holidays/travel-guides/sihanoukville">Sihanouk region</a></div></div>
                                <div class="leaflet-marker-icon offset-marker style-d style-medium bBg bottom leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 69px; height: 26px; transform: translate3d(129px, 217px, 0px); z-index: 217; display: block;"><div class="labelText"><a href="/cambodia-holidays/travel-guides/tonle-sap-lake">Tonle Sap</a></div></div>
                                <div class="leaflet-marker-icon offset-marker style-d style-medium bBg bottom right leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 103px; height: 44px; transform: translate3d(60px, 283px, 0px); z-index: 262; display: block;"><div class="labelText"><a href="/cambodia-holidays/travel-guides/koh-kong-cardamom-mountains">Koh Kong &amp; <br>Cardamom Mts</a></div></div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg top leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 83px; height: 26px; transform: translate3d(79px, 101px, 0px); z-index: 101; display: block;"><div class="labelText"><a href="/cambodia-holidays/travel-guides/battambang">Battambang</a></div></div>
                                <div class="leaflet-marker-icon offset-marker style-d style-medium bBg top leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 60px; height: 44px; transform: translate3d(202px, 86px, 0px); z-index: 86; display: block;"><div class="labelText"><a href="/cambodia-holidays/travel-guides/angkor-temples">Angkor <br>Temples</a></div></div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg top leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 73px; height: 26px; transform: translate3d(134px, 48px, 0px); z-index: 48; display: block;"><div class="labelText"><a href="/cambodia-holidays/travel-guides/siem-reap">Siem Reap</a></div></div>
                                <div class="leaflet-marker-icon offset-marker style-d style-medium bBg bottom leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 75px; height: 26px; transform: translate3d(312px, 162px, 0px); z-index: 162; display: block;"><div class="labelText"><a href="/cambodia-holidays/travel-guides/mondulkiri">Mondulkiri</a></div></div>
                                <div class="leaflet-marker-icon offset-marker style-d style-medium bBg top leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 69px; height: 26px; transform: translate3d(296px, 106px, 0px); z-index: 106; display: block;"><div class="labelText"><a href="/cambodia-holidays/travel-guides/ratanakiri">Ratanakiri</a></div></div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg top leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 44px; height: 26px; transform: translate3d(245px, 136px, 0px); z-index: 136; display: block;"><div class="labelText"><a href="/cambodia-holidays/travel-guides/kratie">Kratie</a></div></div>
                                <div class="leaflet-marker-icon offset-marker style-b style-medium bBg bottom leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 87px; height: 26px; transform: translate3d(208px, 275px, 0px); z-index: 275; display: block;"><div class="labelText"><a href="/cambodia-holidays/travel-guides/phnom-penh">Phnom Penh</a></div></div>
                                <div class="leaflet-marker-icon label-marker style-xl noBg leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 103px; height: 34px; transform: translate3d(172px, 181px, 0px); z-index: 181; display: block;"><div class="labelText" style="transform:rotate(0deg);">Cambodia</div></div>
                                <div class="leaflet-marker-icon label-marker style-xs noBg leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 57px; height: 23px; transform: translate3d(50px, 52px, 0px); z-index: 52; display: block;"><div class="labelText" style="transform:rotate(0deg);">Thailand</div></div>
                                <div class="leaflet-marker-icon label-marker style-xs noBg leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 33px; height: 23px; transform: translate3d(275px, 50px, 0px); z-index: 50; display: block;"><div class="labelText" style="transform:rotate(0deg);">Laos</div></div>
                                <div class="leaflet-marker-icon label-marker style-xs noBg leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 55px; height: 23px; transform: translate3d(319px, 285px, 0px); z-index: 285; display: block;"><div class="labelText" style="transform:rotate(0deg);">Vietnam</div></div>
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
            <h2>Best Cambodia Tours<span class="line"></span></h2>
            <p>Top Choices by Travel Experts &amp; Excellent feedback from our travellers</p>
            <div id="detail"><a href="/tours/cambodia/">View All <font>»</font></a></div>
        </div>
        <div id="scroll-tours">
            <div id="box-best-tour">
                @foreach(get_list_tours(3,41) as $tour)
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