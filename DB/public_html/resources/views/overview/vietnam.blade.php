@extends('layouts.layout')

@section('content')
<br clear="all" />
@include('partial.search_home')
<div id="main-catdes">
    <div class="container">
        <div id="content-catdes">

            <div id="txt-des">
                <h1>Vietnam</h1>
                <p>Vietnam has rapidly become one of Southeast Asia’s most popular and rewarding destinations to travel to. Offering attractions that appeal to all interests and traveler types, this long, thin coastal destination has it all. Whether seeking an unforgettable family holiday, a relaxing retreat or an adventurous trip away, Vietnam has the destinations, infrastructure and sheer variety to accommodate.</p>
                <div id="img-des">
                    <a href="/tours/vietnam/" title="Vietnam Tours" id="box-img">
                        <img src="/assets/frontend/images/vn1.jpg" class="lazyload"/>
                        <h3><span>Vietnam Tours</span></h3>
                    </a>
                    <a href="/hotels/vietnam/"  title="Vietnam Hotels" id="box-img">
                        <img src="/assets/frontend/images/vn2.jpg" class="lazyload"/>
                        <h3><span>Vietnam Hotels</span></h3>
                    </a>
                    <a href="/destinations/vietnam/"  title="Vietnam Destinations" id="box-img" style="margin-right:0;">
                        <img src="/assets/frontend/images/vn3.jpg" class="lazyload"/>
                        <h3><span>Vietnam Destinations</span></h3>
                    </a>
                </div>
                <p>Starting from the south, Vietnam’s Mekong Delta region is an adventure in and of itself. A veritable waterworld, life thrives off the Mekong River’s canals and small waterways, where boats, homes, markets and transportation live a water-bound existence. Lush farms and fruit orchards line the water’s edges and hidden towns and cities make for exciting and entirely unique visits. Producing the majority of the country’s produce, a visit to the Mekong Delta region of Vietnam is a glimpse into its heart and soul.</p>

                <div id="body_about">
                    <p>Further up the coast from the bustling Mekong region is one of Vietnam’s most famous destinations, offering the country’s most contemporary, cosmopolitan experience. Ho Chi Minh City, a metropolis of nearly 10 million, is a thrilling visit boasting all types of extremes. Budget hostels are offset by world-class, five-star hotels, delicious and cheap street eats are counterbalanced by sumptuous gourmet restaurants, ancient alleys look up to modern skyscrapers and an innumerable amount of attractions can be found all throughout the cities districts. One of the easiest points of international access, a visit to Ho Chi Minh City is an absolute must when traveling to Vietnam.</p>
                    <p>Dotting up the coast, travelers will find a huge variety of visits, from the lush, inland attractions of the mountain town of Dalat (great for adventure travelers) to the coastal beach escapes of Vung Tau, Phan Thiet, Mui Ne and Nha Trang. Travelers will revel in the warm climates and clean beaches/waters of coastal Vietnam, leading all the way up to the cultural heartland that is Central Vietnam.</p>
                    <p>For those seeking an equal dose of culture and history with their tropical beach escapes, the central area of Hoi An, Danang and Hue is the spot to visit. Each destination has its own fascinating history, from Hoi An’s countryside and ancient town to Hue’s forbidden city and royal roots. Danang is rapidly becoming its own worthwhile visit with some of the country’s best beaches, tastiest seafood spots and cool, modern attractions.</p>
                    <p>Spanning all the way to the north, visitors will find plenty of things to do between Hanoi, Halong Bay and the northern reaches of Sapa. The capital city of Hanoi has some of the country’s most fascinating history and culture, as well as some excellent cuisine, accommodation and shopping. To the east sits the UNESCO-protected Halong Bay with its iconic limestone islets, and to the north sits the mesmerizing hill tribe visits of Sapa and Ha Giang. The best part about Vietnam? The rest of the country is organically developing, and many more of its lesser-known parts are becoming great places to visit as well (offering unique, off-piste experiences.)</p>
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
                            <svg pointer-events="none" width="442" height="602" viewBox="-37 -50 442 602" style="transform: translate3d(-37px, -50px, 0px);">
                                <g>
                                    <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M-38 -51L-17 -51L-17 -48L-11 -40L-14 -39L-20 -46L-23 -46L-25 -44L-35 -42L-38 -38z"></path>
                                    <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                    <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                    <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                    <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                    <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                    <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                    <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M37 452L36 452zM47 454L45 452L47 449L47 453zM42 437L41 438L41 436zM34 431L32 428L34 428L34 430zM34 429L33 428L35 428zM21 417L23 419L22 422L21 417zM16 415L19 418L19 422L16 425L15 415zM23 417L22 416L24 415zM16 398L15 399L15 396L16 397zM16 395L15 396L15 393L16 395zM6 387L6 387zM7 386L6 387L6 385L7 386zM48 384L47 385L48 384zM57 383L56 386L54 387L53 383L56 383zM47 382L47 382zM19 379L18 380L18 378zM55 378L57 381L54 378zM113 333L114 336L112 336L113 333zM106 323L110 327L109 328L107 327L106 323zM54 128L58 132L58 130L63 128L65 133L67 133L66 139L63 143L65 149L67 150L69 148L72 150L74 147L83 148L81 152L85 160L82 165L83 169L78 175L79 177L81 177L81 185L77 188L75 195L76 196L80 198L86 192L90 191L89 190L91 188L94 188L95 184L97 185L102 180L104 180L104 182L109 186L113 186L115 190L119 186L123 186L126 180L130 178L128 177L130 175L135 175L143 179L146 178L148 183L155 192L164 199L163 220L166 223L166 225L169 226L169 229L171 231L178 233L178 238L183 241L182 246L179 248L181 250L178 254L181 257L179 262L180 267L176 271L172 272L169 275L168 271L165 270L159 270L158 272L142 272L137 270L127 272L121 275L120 280L112 288L112 290L107 291L112 308L111 312L113 312L117 316L116 323L121 332L121 335L118 327L113 322L113 325L111 323L108 323L106 321L108 319L107 318L107 320L107 317L105 317L106 320L102 316L103 314L101 314L101 316L99 313L99 315L93 310L92 312L87 313L79 311L77 313L75 311L74 312L74 306L76 304L75 297L77 293L70 292L68 291L68 289L67 292L60 292L54 296L54 298L57 301L54 308L55 321L50 333L46 338L45 346L43 347L44 353L42 353L42 355L37 361L38 364L35 365L37 368L35 370L35 378L39 387L37 389L38 391L43 392L44 390L47 389L52 391L54 405L57 410L59 410L58 408L61 412L61 417L68 438L65 436L64 430L61 430L61 424L58 425L60 433L63 435L65 439L68 438L72 443L74 443L77 446L85 445L83 444L84 443L88 445L95 454L102 459L101 463L95 471L93 471L90 467L83 470L83 472L80 474L77 470L79 467L79 460L73 459L73 455L63 453L61 449L58 450L57 455L57 453L56 454L54 450L47 445L49 439L48 440L44 438L46 434L45 435L43 433L42 436L39 434L40 431L35 425L34 426L32 424L33 421L32 422L30 418L26 418L25 412L24 413L23 411L21 411L18 416L15 413L14 403L18 396L16 392L19 384L21 384L20 380L22 380L21 377L23 375L27 363L26 357L29 356L32 353L31 352L36 348L42 336L46 333L46 331L44 329L44 324L42 324L43 323L41 314L37 310L35 306L36 305L34 303L34 299L36 299L34 284L30 278L22 271L13 257L13 251L18 251L18 249L22 247L22 232L25 230L27 231L30 224L28 222L25 227L24 226L20 216L21 212L18 208L15 207L11 200L2 191L3 184L0 179L1 178L-2 179L-6 172L-2 174L4 171L3 166L1 164L5 159L5 148L9 146L9 142L14 145L21 145L27 142L29 144L32 142L33 135L35 134L38 136L44 133L41 128L47 130L53 127z"></path>
                                    <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                    <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M-9 552L-8 551L-6 553L-11 552L-10 551zM261 544L262 545L259 544zM197 540L196 538zM-38 536L-36 539L-33 540L-33 542L-26 545L-26 547L-27 549L-35 543L-38 543zM256 537L254 536L256 534L256 537zM231 534L232 534zM186 534L188 534L187 536L185 536L186 537L184 537L184 533L185 534zM197 529L198 532L196 529zM198 526L198 528L196 528L198 526zM244 509L246 514L244 518L241 519L239 517L243 517L242 515L238 514L236 511L242 505L242 508zM406 553L390 553L392 550L394 550L394 548L401 544L397 542L397 538L400 534L406 533zM236 495L237 494zM-38 479L-34 482L-13 482L-9 485L-2 482L7 490L9 497L15 501L15 506L13 508L15 507L16 509L20 510L27 517L36 521L45 529L49 529L51 533L54 535L55 538L53 541L55 543L54 540L56 540L57 544L59 540L67 553L73 553L74 550L78 550L81 553L13 553L8 550L3 550L1 548L0 537L-7 532L-7 530L-10 528L-13 522L-19 517L-24 517L-27 515L-30 510L-38 504z"></path>
                                    <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M314 548L312 547L313 539L314 546zM150 540L150 536L151 540zM83 533L83 533zM84 534L84 532L85 533zM402 481L401 482L401 479zM62 478L61 482L59 482L59 478L61 477zM50 461L49 460L51 458L51 461zM52 455L53 458L51 459L49 459L46 455L51 455zM59 449L61 449L63 453L73 455L74 460L79 459L79 466L77 470L80 474L83 472L83 470L89 467L92 469L92 471L95 471L101 464L102 459L104 461L105 460L109 462L111 468L126 479L133 492L134 498L134 505L132 508L133 511L131 516L134 522L133 535L135 539L141 543L146 553L104 552L99 547L97 547L95 543L90 542L87 538L84 537L86 533L83 526L80 524L79 520L73 515L74 514L71 514L71 512L74 510L72 510L67 504L69 494L68 491L66 491L63 487L63 465L57 455L59 449zM406 533L401 533L399 535L397 538L397 542L401 544L394 548L394 550L392 550L390 553L309 553L311 547L313 549L316 548L314 546L317 545L314 544L315 541L320 537L341 533L352 529L352 527L357 523L361 516L372 505L373 497L378 499L380 503L379 504L382 505L387 511L391 508L392 505L390 495L396 490L398 502L403 504L404 503L402 501L401 492L399 490L403 490L406 488L406 482L404 479L406 478z"></path>
                                    <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M10 378L9 377L10 378zM15 372L16 373L12 377L13 373zM13 372L14 369L14 371zM7 362L7 364L7 362zM14 362L13 361L14 362zM22 354L21 355L21 353zM7 353L6 354L8 353zM14 352L16 355L14 357L15 354L13 352L11 353L12 351L14 351zM19 351L19 350zM21 350L20 351L21 349zM15 344L16 345L15 344zM15 338L13 340L16 332L15 337zM-3 332L-3 332zM21 332L22 336L19 337L18 332L21 331zM10 333L10 335L9 330L10 332zM1 330L2 330zM16 330L16 329zM15 329L15 328zM21 327L23 328L20 330L20 325zM11 322L12 323L10 322L10 320L12 320L12 322zM11 318L9 320L8 319L11 318zM21 317L20 315L21 316zM15 315L14 314L16 315zM6 314L6 313zM18 314L19 315L19 313L20 315L17 319L16 311L18 312zM6 309L5 308L6 309zM16 302L16 305L15 299zM7 285L8 284zM2 244L1 245L1 243L2 244zM-1 228L-3 226L-2 221L0 222L-1 226zM15 -51L24 -51L26 -26L24 -19L25 -14L21 -14L25 -8L23 -6L21 -7L17 0L12 -1L12 3L10 6L2 12L4 18L-2 21L-2 28L2 30L1 31L3 32L3 35L-2 41L1 43L4 40L13 36L28 36L29 37L24 40L24 44L27 45L27 52L29 53L28 56L30 57L29 59L37 63L39 61L43 62L44 65L41 66L39 70L40 76L37 79L35 85L47 88L53 87L53 94L54 96L58 97L57 100L59 103L62 100L68 102L79 94L81 97L81 101L73 106L71 105L66 115L69 116L67 118L63 117L58 122L57 130L53 127L47 130L42 128L44 132L43 134L39 136L36 134L34 135L32 138L32 142L29 144L28 142L22 145L15 145L10 142L9 146L5 149L6 150L4 152L5 159L1 163L3 165L4 171L-2 174L-4 174L-5 172L-6 173L-2 179L1 178L0 179L3 186L3 193L20 210L21 213L19 216L22 219L24 226L25 227L28 222L30 224L27 231L24 230L23 232L21 232L22 247L21 249L18 248L18 250L14 252L13 251L13 257L23 273L34 283L36 294L34 303L36 305L35 306L37 310L41 314L43 323L42 324L44 324L44 329L46 331L46 333L42 336L37 348L26 357L27 363L21 374L21 365L19 358L20 356L22 356L22 353L25 352L25 337L26 334L27 335L29 333L27 333L27 330L28 331L25 334L23 333L23 331L25 330L22 329L25 328L23 324L25 322L21 322L22 320L25 319L23 317L25 310L22 305L22 299L20 298L20 294L19 295L15 287L13 279L14 283L12 291L12 277L6 265L8 263L9 265L9 263L7 263L7 261L7 263L5 263L5 252L3 250L3 236L-1 233L1 221L3 219L-5 221L-8 216L-8 212L-9 213L-10 211L-10 208L-8 207L-10 207L-12 203L-14 203L-13 202L-16 200L-16 198L-18 200L-16 202L-16 210L-18 212L-18 216L-22 220L-27 222L-30 220L-30 214L-32 215L-29 222L-33 225L-36 224L-36 227L-38 227L-38 -38L-33 -43L-21 -46L-14 -39L-12 -39L-11 -40L-17 -48L-17 -51z"></path>
                                    <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M97 79L102 78L111 88L111 90L114 91L115 97L118 95L118 93L119 96L122 95L122 98L119 103L121 102L120 106L118 107L120 107L120 109L126 117L133 117L138 121L140 117L147 114L153 116L156 120L160 122L154 126L159 127L161 129L160 132L164 132L168 136L163 140L164 141L160 145L160 147L154 145L146 145L148 150L142 154L154 160L161 166L171 169L172 170L170 174L172 178L181 184L184 192L196 204L198 204L201 210L203 210L203 217L206 223L208 223L210 220L211 223L217 229L221 232L224 231L223 235L219 237L218 236L217 238L222 245L224 245L229 251L228 254L224 256L224 258L226 259L226 264L223 267L219 267L219 269L216 271L215 270L212 273L210 273L203 267L198 270L196 269L195 272L190 272L194 279L193 282L189 282L181 276L177 278L173 274L173 272L177 271L180 268L179 262L181 260L180 258L182 257L178 254L181 250L179 248L182 246L183 241L178 238L178 233L170 231L169 227L163 221L162 209L164 205L164 199L151 188L146 178L143 179L141 177L130 175L128 177L130 178L127 179L126 182L124 182L124 185L119 186L116 189L114 189L113 186L110 186L103 180L98 185L95 184L94 187L88 192L86 192L81 198L75 196L77 189L81 184L81 178L78 176L83 169L82 165L85 161L81 153L83 149L82 147L75 147L72 150L69 148L67 150L64 147L63 144L66 140L67 134L65 133L63 128L61 128L58 131L58 122L63 117L68 117L69 116L66 115L71 106L82 100L81 103L83 104L82 107L84 109L89 107L91 108L90 109L92 108L93 110L95 110L96 107L94 105L94 99L96 98L94 96L93 90L91 90L89 83L94 76L96 79z"></path>
                                    <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M141 363L141 362zM130 360L129 359L130 360zM129 356L129 358L127 356L129 356zM123 340L124 344L122 341L123 340zM124 340L124 339zM225 267L224 270L222 271L221 277L222 280L224 280L224 284L228 292L224 303L227 316L223 321L221 319L217 320L213 325L209 325L205 327L206 328L201 328L200 335L192 332L186 336L188 339L188 343L195 350L195 356L190 353L189 354L186 350L179 352L178 351L176 352L176 354L170 351L170 356L165 361L158 361L156 364L151 360L145 360L143 358L141 361L140 360L140 362L137 362L137 360L136 361L134 359L139 354L138 349L135 346L133 348L132 353L125 352L126 347L124 344L126 342L124 340L127 340L124 338L124 336L124 338L122 338L122 336L124 336L122 334L125 333L122 334L121 331L122 337L116 324L117 316L111 312L112 309L107 291L114 289L112 288L120 280L121 275L135 270L140 272L158 272L165 270L168 271L169 275L171 275L172 272L176 278L182 277L189 282L193 282L194 279L190 273L193 271L195 272L196 269L198 270L203 266L204 269L212 273L214 270L216 271L220 266L223 267L226 264L225 266z"></path>
                                    <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                    <path stroke="#C8A56A" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#C8A56A" fill-opacity="1" fill-rule="evenodd" d="M206 402L204 404L206 402zM196 382L198 383L197 384L193 379L195 381zM203 377L201 375L202 376zM208 368L203 366L208 368zM146 363L148 368L146 373L145 368L142 365L144 365L145 363zM218 363L216 366L216 364L218 363zM213 362L213 364L211 365L212 361zM259 361L258 361zM212 360L211 361L212 359zM211 362L211 364L208 362L208 358L211 359L210 362zM267 322L266 323L266 321zM269 314L267 313L268 312zM223 118L222 117zM214 117L216 117L216 120L214 120L215 119L214 120L212 118L213 117zM222 116L221 116zM210 116L210 118L210 115zM225 118L226 115zM232 113L231 113zM233 113L233 112zM226 112L226 115L223 116L226 113zM227 113L228 110L227 112zM226 108L228 108L223 112L224 106L226 107zM232 105L230 106L232 105zM237 103L233 105L237 103zM177 57L181 62L185 63L187 66L193 64L196 65L197 68L203 66L205 68L206 67L209 70L203 78L203 80L206 81L206 89L208 88L214 90L215 94L220 96L221 98L224 97L225 99L233 97L236 101L235 102L235 100L231 100L232 101L227 106L224 105L222 107L222 113L219 113L217 115L217 112L213 114L211 113L213 115L209 115L210 114L206 112L206 114L208 114L207 118L209 120L206 120L206 122L205 121L203 127L204 126L205 131L202 130L204 130L204 132L200 132L195 138L192 137L190 139L188 143L189 144L186 147L187 154L182 162L186 167L185 170L186 167L190 176L193 179L197 180L199 184L201 182L203 187L201 188L202 192L198 191L202 193L208 201L217 208L217 212L219 212L228 219L225 218L231 222L233 226L238 225L241 228L241 233L243 229L243 233L252 245L251 246L252 245L254 249L256 247L258 251L256 253L262 265L261 264L262 271L265 277L263 277L266 283L266 285L265 286L265 283L264 285L266 290L264 288L265 291L267 291L267 293L266 294L265 292L265 294L267 298L266 300L270 305L270 307L269 306L268 308L270 314L269 311L268 312L268 308L264 312L264 314L265 313L267 317L266 319L263 316L265 320L263 320L266 330L264 330L263 324L264 327L262 330L264 330L265 333L263 337L261 337L260 335L259 343L257 342L253 346L249 346L248 349L243 352L240 352L237 355L237 357L233 357L220 365L217 362L215 362L215 359L213 357L213 362L213 359L209 358L207 362L204 362L208 362L209 366L201 366L209 369L209 371L207 371L206 374L202 372L198 367L199 370L205 375L207 375L207 377L206 376L205 378L194 368L195 371L197 371L204 379L203 383L200 384L187 373L193 379L196 386L192 389L181 393L176 400L171 404L162 406L165 403L167 403L165 403L167 401L163 401L165 379L170 375L171 377L171 375L164 368L160 370L159 369L157 365L158 364L156 365L158 361L164 361L169 357L170 351L175 354L177 351L185 350L188 354L189 353L195 355L195 349L193 349L188 344L188 337L186 337L190 335L191 332L200 335L201 327L207 328L209 325L213 325L217 320L220 319L223 321L227 316L224 303L228 295L228 292L226 287L224 286L224 280L222 280L221 277L223 270L225 269L225 262L227 259L224 256L226 256L229 251L227 247L225 247L225 245L223 245L217 239L224 233L224 231L221 232L217 229L217 227L213 226L210 221L206 223L206 219L203 217L203 210L200 209L197 202L196 203L192 200L184 192L179 181L175 181L175 179L174 180L172 178L170 175L172 171L171 169L160 166L152 159L142 154L147 150L145 145L147 146L151 144L159 147L168 136L164 132L161 133L161 129L159 127L154 126L156 124L157 125L159 122L149 114L142 116L139 121L133 118L126 117L120 109L120 107L118 107L121 102L120 103L122 95L120 96L119 93L116 97L114 95L114 91L111 90L111 88L105 83L103 78L105 78L110 70L116 72L119 74L120 77L123 78L130 69L134 74L135 71L138 69L144 76L147 69L150 68L153 72L158 68L161 69L164 66L164 62L166 60L172 58L175 55L176 56z"></path>
                                    <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M310 238L310 238zM322 232L322 232zM319 221L319 220zM320 219zM344 217L344 217zM335 213L335 213zM335 211L335 211zM298 134L298 136L302 137L306 146L302 148L301 147L299 150L300 151L297 152L298 153L295 158L293 157L295 159L292 166L294 166L294 164L294 167L292 167L291 170L288 169L283 174L283 176L277 176L275 181L272 181L272 179L270 181L271 180L267 178L263 179L263 177L259 177L256 174L252 173L252 152L254 152L264 145L266 143L263 144L263 142L266 139L268 141L272 141L271 140L274 137L282 139L285 138L286 136L290 136L291 139L291 135L296 139L295 136L298 133zM292 121L292 123L292 121zM296 116L295 115L297 115zM262 112L262 112zM291 111L295 112L294 115L292 113L288 113L291 111zM293 109L296 108L294 111L293 108zM326 97L328 97L323 99L326 97zM342 98L340 98L340 96L342 97zM347 94L345 99L344 96L346 94zM356 91L357 91zM368 89L368 89zM380 88L378 88L380 87zM359 87L360 88L358 88L359 86zM363 87L361 87L362 85L363 86zM359 85L357 87L356 86L358 85zM365 78L364 78zM365 74L362 71L363 70L365 73zM361 67L364 69L363 70L360 66zM363 67L363 66zM406 -51L406 71L405 72L405 70L401 69L403 68L403 66L402 68L397 69L396 72L394 70L394 75L390 73L392 69L390 69L385 72L386 73L384 75L387 76L385 77L382 74L376 76L372 75L372 77L370 77L371 76L369 75L368 70L366 70L364 67L365 64L364 66L364 63L362 63L365 61L369 61L367 60L359 62L362 64L361 66L355 66L359 67L364 74L364 82L361 85L354 75L354 77L360 84L358 84L356 88L354 88L353 83L352 86L351 85L351 89L349 92L346 89L341 94L338 93L337 92L339 90L336 89L337 87L337 93L334 96L332 92L329 94L329 91L327 93L325 90L325 93L328 94L325 96L321 94L323 97L319 100L318 99L316 101L315 98L315 100L313 100L312 102L310 100L308 100L308 102L306 100L304 102L305 101L305 103L300 103L297 107L296 104L300 102L296 105L296 108L292 107L293 106L291 102L291 108L286 113L286 117L291 117L289 121L294 125L294 127L290 131L283 130L280 132L279 127L282 129L282 127L278 125L279 124L276 121L279 120L277 121L277 117L276 116L276 118L274 115L275 110L277 108L277 104L278 105L281 102L276 99L277 101L275 101L275 99L273 99L272 94L270 97L272 101L264 103L260 102L263 101L262 98L260 98L261 97L258 98L256 96L258 94L257 95L257 93L255 93L256 98L254 98L254 96L253 97L253 95L252 96L252 94L250 94L250 90L247 92L247 90L247 96L248 97L249 95L247 99L245 99L247 99L247 97L244 96L242 101L242 97L238 99L236 103L236 101L232 97L225 99L223 97L222 98L221 96L214 93L213 90L212 91L208 88L206 90L206 81L203 78L204 74L206 75L209 69L202 66L198 68L196 67L196 65L193 64L188 66L185 63L181 63L181 61L175 55L172 58L165 60L164 66L161 69L158 68L154 72L151 71L150 68L148 69L146 71L145 76L138 69L134 74L130 69L123 78L118 73L112 70L110 70L105 78L97 79L94 76L91 82L89 82L94 93L94 106L96 107L95 110L93 110L92 108L91 109L90 107L84 109L82 107L83 104L81 103L82 101L80 94L68 102L63 100L59 103L57 101L58 97L53 95L53 87L47 88L35 84L37 79L40 77L39 71L41 66L44 65L43 62L40 61L37 63L29 59L29 52L27 52L27 50L29 49L27 45L24 44L24 40L29 37L13 36L1 43L-2 41L3 35L1 29L-2 28L-2 21L4 18L2 16L2 13L5 8L7 9L12 4L12 -1L17 0L21 -7L25 -7L21 -13L25 -15L25 -51L15 -51z"></path>
                                    <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M376 83L377 84L376 83zM378 82L378 84L376 82L378 81zM374 81L371 84L369 83L374 80zM377 75L380 76L378 78L377 77L379 79L381 77L382 78L382 80L379 79L380 82L371 79L375 75L377 75z"></path>
                                    <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                    <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                    <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M126 62L137 71"></path>
                                    <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M135,71a2,2 0 1,0 4,0 a2,2 0 1,0 -4,0 "></path>
                                    <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M189 55L172 62"></path>
                                    <path class="offset-marker-circle leaflet-interactive" stroke="#3388ff" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0" fill-rule="evenodd" d="M162,62a10,10 0 1,0 20,0 a10,10 0 1,0 -20,0 "></path>
                                    <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M241 112L215 112"></path>
                                    <path class="offset-marker-circle leaflet-interactive" stroke="#3388ff" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0" fill-rule="evenodd" d="M205,112a10,10 0 1,0 20,0 a10,10 0 1,0 -20,0 "></path>
                                    <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M229 87L173 108"></path>
                                    <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#fff" fill-opacity="1" fill-rule="evenodd" d="M170,108a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                    <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M119 102L160 114"></path>
                                    <path class="offset-marker-circle leaflet-interactive" stroke="#3388ff" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0" fill-rule="evenodd" d="M150,114a10,10 0 1,0 20,0 a10,10 0 1,0 -20,0 "></path>
                                    <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M148 141L170 133"></path>
                                    <path class="offset-marker-circle leaflet-interactive" stroke="#3388ff" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0" fill-rule="evenodd" d="M160,133a10,10 0 1,0 20,0 a10,10 0 1,0 -20,0 "></path>
                                    <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M249 197L229 222"></path>
                                    <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M226,222a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                    <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M283 207L245 247"></path>
                                    <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M242,247a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                    <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M272 244L244 274"></path>
                                    <path class="offset-marker-circle leaflet-interactive" stroke="#3388ff" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0" fill-rule="evenodd" d="M234,274a10,10 0 1,0 20,0 a10,10 0 1,0 -20,0 "></path>
                                    <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M294 338L259 323"></path>
                                    <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M256,323a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                    <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M183 304L208 360"></path>
                                    <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M205,360a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                    <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M280 388L240 330"></path>
                                    <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M237,330a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                    <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M247 415L237 352"></path>
                                    <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M234,352a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                    <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M200 414L213 392"></path>
                                    <path class="offset-marker-circle leaflet-interactive" stroke="#3388ff" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0" fill-rule="evenodd" d="M203,392a10,10 0 1,0 20,0 a10,10 0 1,0 -20,0 "></path>
                                    <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M149 355L200 372"></path>
                                    <path class="offset-marker-circle leaflet-interactive" stroke="#3388ff" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0" fill-rule="evenodd" d="M190,372a10,10 0 1,0 20,0 a10,10 0 1,0 -20,0 "></path>
                                    <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M125 385L145 367"></path>
                                    <path class="offset-marker-circle leaflet-interactive" stroke="#3388ff" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0" fill-rule="evenodd" d="M135,367a10,10 0 1,0 20,0 a10,10 0 1,0 -20,0 "></path>
                                    <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M229 150L198 124"></path>
                                    <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M195,124a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                    <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M288 292L263 291"></path>
                                    <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M260,291a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                </g>
                            </svg>
                        </div>
                        <div class="leaflet-pane leaflet-marker-pane">
                            <div class="leaflet-marker-icon offset-marker style-c style-medium bBg top left leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 38px; height: 26px; transform: translate3d(126px, 62px, 0px); z-index: 62; display: block;">
                                <div class="labelText">
                                    <a href="/Sapa.html">Sapa</a>
                                </div>
                            </div>
                            <div class="leaflet-marker-icon offset-marker style-d style-medium bBg top right leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 65px; height: 26px; transform: translate3d(189px, 55px, 0px); z-index: 55; display: block;">
                                <div class="labelText">
                                    <a href="/Ha-Giang.html">Ha Giang</a>
                                </div>
                            </div>
                            <div class="leaflet-marker-icon offset-marker style-d style-medium bBg right leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 53px; height: 44px; transform: translate3d(241px, 112px, 0px); z-index: 112; display: block;">
                                <div class="labelText">
                                    <a href="/Halong-Bay.html">Halong<br>Bay</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-b style-medium bBg top right leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 45px; height: 26px; transform: translate3d(229px, 87px, 0px); z-index: 87; display: block;">
                                    <div class="labelText"><a target="_blank" href="/Hanoi.html">Hanoi</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-d style-medium bBg left leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 40px; height: 44px; transform: translate3d(119px, 102px, 0px); z-index: 102; display: block;">
                                    <div class="labelText"><a target="_blank" href="/Mai-Chau.html">Mai<br>Chau</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-d style-medium bBg left leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 105px; height: 26px; transform: translate3d(148px, 141px, 0px); z-index: 141; display: block;">
                                    <div class="labelText"><a target="_blank" href="/Cuc-Phuong-National-Park.html">Cuc Phuong NP</a></div>
                                </div>
                                <div class="leaflet-marker-icon label-marker style-xs noBg leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 55px; height: 23px; transform: translate3d(161px, 186px, 0px); z-index: 186; display: block;">
                                    <div class="labelText" style="transform:rotate(45deg);">Mekong</div>
                                </div>
                                <div class="leaflet-marker-icon label-marker style-xl noBg leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 87px; height: 34px; transform: translate3d(159px, 89px, 0px); z-index: 89; display: block;">
                                    <div class="labelText" style="transform:rotate(0deg);">Vietnam</div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg top right leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 33px; height: 26px; transform: translate3d(249px, 197px, 0px); z-index: 197; display: block;">
                                    <div class="labelText"><a target="_blank" href="/Hue.html">Hue</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg right leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 50px; height: 26px; transform: translate3d(295px, 207px, 0px); z-index: 207; display: block;">
                                    <div class="labelText"><a target="_blank" href="/Hoi-An.html">Hoi An</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-d style-medium bBg right leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 70px; height: 44px; transform: translate3d(307px, 246px, 0px); z-index: 244; display: block;">
                                    <div class="labelText"><a target="_blank" href="/Central-Highlands.html">Central<br>Highlands</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg right leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 44px; height: 44px; transform: translate3d(294px, 338px, 0px); z-index: 338; display: block;">
                                    <div class="labelText"><a target="_blank" href="/Nha-Trang.html">Nha<br>Trang</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg top left leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 67px; height: 62px; transform: translate3d(183px, 304px, 0px); z-index: 304; display: block;">
                                    <div class="labelText"><a target="_blank" href="/Ho-Chi-Minh-City.html">Ho Chi<br>Minh City<br>(Saigon)</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg right leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 40px; height: 26px; transform: translate3d(280px, 388px, 0px); z-index: 388; display: block;">
                                    <div class="labelText"><a target="_blank" href="/Da-Lat.html">Dalat</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg bottom right leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 69px; height: 62px; transform: translate3d(247px, 440px, 0px); z-index: 415; display: block;">
                                    <div class="labelText"><a target="_blank" href="/Mui-Ne.html">Phan <br>Thiet<br>&amp; Mui Ne</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-d style-medium bBg left leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 62px; height: 26px; transform: translate3d(200px, 414px, 0px); z-index: 414; display: block;">
                                    <div class="labelText"><a target="_blank" href="/Con-Dao-Island.html">Con Dao</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-d style-medium bBg top left leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 63px; height: 44px; transform: translate3d(149px, 355px, 0px); z-index: 355; display: block;">
                                    <div class="labelText"><a target="_blank" href="/Mekong-Delta.html">Mekong <br>Delta</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-d style-medium bBg left leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 69px; height: 26px; transform: translate3d(125px, 385px, 0px); z-index: 385; display: block;">
                                    <div class="labelText"><a target="_blank" href="/Phu-Quoc.html" style="outline: none;">Phu Quoc</a></div>
                                </div>
                                <div class="leaflet-marker-icon label-marker style-xs noBg leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 57px; height: 23px; transform: translate3d(94px, 241px, 0px); z-index: 241; display: block;">
                                    <div class="labelText" style="transform:rotate(0deg);">Thailand</div>
                                </div>
                                <div class="leaflet-marker-icon label-marker style-xs noBg leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 65px; height: 23px; transform: translate3d(195px, 300px, 0px); z-index: 300; display: block;">
                                    <div class="labelText" style="transform:rotate(0deg);">Cambodia</div>
                                </div>
                                <div class="leaflet-marker-icon label-marker style-xs noBg leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 33px; height: 23px; transform: translate3d(109px, 166px, 0px); z-index: 166; display: block;">
                                    <div class="labelText" style="transform:rotate(0deg);">Laos</div>
                                </div>
                                <div class="leaflet-marker-icon label-marker style-xs noBg leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 37px; height: 23px; transform: translate3d(171px, 212px, 0px); z-index: 212; display: block;">
                                    <div class="labelText" style="transform:rotate(82deg);">River</div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg right leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 69px; height: 26px; transform: translate3d(229px, 150px, 0px); z-index: 150; display: block;">
                                    <div class="labelText"><a target="_blank" href="/Ninh-Binh.html">Ninh Binh</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg right leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 43px; height: 44px; transform: translate3d(310px, 292px, 0px); z-index: 292; display: block;">
                                    <div class="labelText"><a target="_blank" href="/Quy-Nhon.html ">Quy<br>Nhon</a></div>
                                </div>
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
            <h2>Best Vietnam Tours<span class="line"></span></h2>
            <p>Top Choices by Travel Experts &amp; Excellent feedback from our travellers</p>
            <div id="detail"><a href="/tours/vietnam/">View All <font>»</font></a></div>
        </div>
        
        <div id="scroll-tours">
            <div id="box-best-tour" class="row">
                @foreach(get_list_tours(3,40) as $tour)
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
    <div class="grid-1">
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