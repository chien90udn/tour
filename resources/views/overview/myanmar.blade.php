@extends('layouts.layout')

@section('content')
@include('partial.search_home')
<div id="main-catdes">
    <div class="container">
        <div id="content-catdes">

            <div id="txt-des">
                <h1>Myanmar</h1>
                <p>For travelers looking to experience what Asia felt like before the onset of major tourism, Myanmar is the destination to visit. One of the newest faces in Southeast Asia’s travel scene, this once isolated country offers a mesmerizing combination of culture, cuisine and history that is matched nowhere else. From the colonial streets of Yangon and the temple-clad plains of Bagan to the magical waters of Inle Lake, Myanmar is one of Asia’s most enthralling visits.</p>
                <div id="img-des">
                    <a href="/tours/myanmar" title="Myanmar Tours" id="box-img">
                        <img src="/assets/frontend/images/my1.jpg" class="lazyload"/>
                        <h3><span>Myanmar Tours</span></h3>
                    </a>
                    <a href="/hotels/myanmar"  title="Myanmar Hotels" id="box-img">
                        <img src="/assets/frontend/images/my2.jpg" class="lazyload"/>
                        <h3><span>Myanmar Hotels</span></h3>
                    </a>
                    <a href="/destinations/myanmar"  title="Myanmar Destinations" id="box-img" style="margin-right:0;">
                        <img src="/assets/frontend/images/my3.jpg" class="lazyload"/>
                        <h3><span>Myanmar Destinations</span></h3>
                    </a>
                </div>
                <p>For most travelers, the main point of access visiting Myanmar is the city of Yangon. A cultural and historical melting pot where South Asia meets Southeast Asia, this former colonial capital offers a wholly unique travel experience. Remnants of its colonial past can be found around every corner, Buddhist temples and pagodas glisten above ancient rooftops and traditional markets sell classic Burmese ware that reveals the country’s opulent past and traditional roots. Accommodation and cuisine options are changing (and improving) day by day with the arrival of more tourism, and infrastructure is rapidly developing from recent years. For a glimpse of where the country has been and where it is going, Yangon is an excellent visit.</p>
                <div id="body_about">
                    <p>Far from the reaches of Yangon, the rest of Myanmar stands worlds away from its former colonial capital, and time (and development) turns a bit slower. Farther north stands the historic city of Mandalay with its traditional architecture and traditional pagodas, making for an interesting (yet brief) visit. South to Heho where Inle Lake draws in crowds, visitors can soak up a more traditional Myanmar, where many of the Intha people still live a largely water-based existence. West of Inle is the ancient city of Bagan, which is known for its thousands of temples dotting the dusty plains, revealing Myanmar’s grand spiritual past. Last but not least, the Mergui Archipelago region (south of Yangon) is starting to allure adventurous travelers who are keen on getting off the beaten Myanmar path and into some of the country’s most beautiful beach (and diving) regions.</p>
                    <p>While there are some limitations to visiting the country, it is nonetheless an unforgettable country to visit. Thinking about a honeymoon in Myanmar? We believe it is one of the region’s most magical and unique places to spend a honeymoon and work hard to ensure all your dreams come to fruition.</p>
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
                                <svg pointer-events="none" width="442" height="589" viewBox="-37 -49 442 589" style="transform: translate3d(-37px, -49px, 0px);">
                                    <g>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M128 529L129 538L127 540L123 531L127 529zM123 528L122 527L124 525L124 527zM118 512L119 513L116 514L116 511L117 512zM121 511L121 513L121 511zM120 509L121 510L119 512L120 509L119 510L118 508L120 506L120 508zM112 506L110 505L110 503L111 505zM122 501L122 499L123 500zM104 485L102 485L102 483L103 482L104 484zM99 447L99 452L97 454L94 453L94 448L96 445L98 446zM100 434L100 430L101 433zM92 430L90 428L92 428L92 430zM110 421L107 419L109 419zM111 417L110 415zM128 413L128 412zM101 400L102 396L101 399zM138 386L137 385zM109 382L109 394L107 394L105 398L106 397L108 400L108 408L105 409L106 414L102 419L102 422L104 422L103 426L101 427L103 427L102 430L97 422L100 421L100 416L101 414L103 414L102 401L104 398L105 388L109 382zM109 380L109 380zM15 192L13 191L15 191zM-2 190L-5 189L-2 184L-2 189zM9 184L9 186L8 185L10 183zM-3 184L-3 183zM-38 69L-33 70L-28 66L-26 70L-22 72L-19 70L-12 71L-9 69L-6 72L-2 64L-2 59L-6 53L-5 44L-2 37L-3 31L3 30L8 27L11 28L14 33L11 42L15 48L11 51L14 54L14 56L16 56L16 58L17 57L21 60L24 59L31 61L31 63L42 62L47 58L53 61L71 61L72 59L74 59L75 61L81 59L83 61L83 59L87 58L85 53L87 48L85 44L80 45L76 42L77 37L86 37L87 35L91 35L91 33L92 35L94 35L101 31L101 26L105 25L114 15L118 12L125 12L126 10L137 6L139 3L137 1L145 -4L149 0L158 1L160 3L161 0L163 1L163 -1L165 1L167 -3L170 -2L171 -5L173 -4L180 -6L182 -2L185 -2L181 0L181 3L185 1L185 3L188 5L190 9L190 11L186 14L188 19L190 14L196 17L197 21L201 20L207 25L206 27L208 30L207 33L204 32L196 40L196 44L202 52L201 53L196 51L196 49L193 46L190 46L188 48L178 50L170 58L165 60L163 63L157 65L155 68L155 75L157 79L154 83L154 87L148 94L145 95L144 102L147 103L146 109L139 119L134 135L131 133L126 133L125 131L119 132L116 129L115 130L118 139L118 147L116 155L111 155L112 159L110 164L112 174L108 181L106 180L105 182L105 180L102 177L99 181L98 179L99 176L97 163L94 158L94 149L91 139L90 140L88 138L86 140L84 138L84 145L80 148L81 153L78 157L74 155L72 149L71 154L70 153L66 141L68 133L71 129L76 129L77 126L79 128L79 126L82 127L83 123L85 123L84 122L88 122L91 112L90 109L97 109L92 104L87 102L74 103L66 101L59 103L47 102L36 99L36 81L34 80L34 78L31 75L30 82L24 81L20 78L20 73L18 71L15 71L18 74L17 75L10 74L11 73L3 66L2 69L6 71L2 73L2 75L-1 77L-4 85L0 86L7 94L13 94L14 98L17 99L15 101L16 102L5 101L3 108L-3 108L-2 110L-5 114L-3 119L8 124L11 123L12 126L10 127L11 133L8 134L7 140L11 144L10 150L15 151L14 157L16 160L15 162L18 173L17 174L19 175L19 181L17 183L15 181L18 184L19 190L17 190L14 186L14 190L13 189L13 191L11 191L10 188L12 177L10 179L10 182L10 177L7 184L7 186L9 186L8 191L6 191L6 182L4 190L2 188L2 190L0 186L0 192L-2 183L-1 177L-6 174L-8 170L-7 174L-3 176L-2 179L-5 180L-4 181L-6 184L-12 189L-27 193L-32 201L-29 209L-31 211L-29 211L-28 212L-30 212L-28 213L-27 212L-35 219L-33 219L-38 225z">
                                        </path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M-38 27L-22 35L-12 35L-9 32L-2 34L-6 50L-2 59L-2 64L-6 72L-9 69L-11 69L-11 71L-19 70L-23 72L-27 69L-28 66L-33 70L-38 69z"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M46 21L47 23L52 23L54 25L51 27L52 28L61 29L63 31L69 28L78 32L76 42L80 45L85 44L87 48L85 52L87 55L86 59L83 58L83 60L82 59L77 61L73 59L70 61L53 61L47 58L38 63L32 63L25 59L20 60L17 57L16 58L16 56L14 56L14 54L11 52L15 47L17 48L16 43L30 26L34 25L37 22L45 21z"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M84 188L85 192L82 193L82 188L84 186zM21 187L18 186L18 183L20 186zM82 187L82 183L83 184zM53 182L52 184L52 182L54 182zM48 184L47 183L49 181zM48 181L49 179L48 181zM50 183L50 179L51 182zM54 177L52 181L51 178L53 177zM62 175L61 178L62 175zM62 176L63 174zM63 174L62 175L62 172L63 173zM65 178L63 178L64 171L66 171L67 173L65 178zM54 170L55 173L54 170zM55 170L55 170zM66 170L65 169L67 169zM75 171L72 168L73 166L76 170zM59 177L55 181L56 178L54 180L56 172L55 167L53 166L54 161L59 169L59 176zM54 159L55 160L52 161L52 163L51 160L53 159zM55 157L54 158L52 156L53 155zM51 156L50 155L52 155zM52 147L53 148L51 148L50 146zM6 69L8 69L11 72L9 74L18 75L15 72L16 70L20 73L20 77L24 81L29 82L31 80L30 77L32 75L36 82L35 96L37 99L47 102L59 103L66 101L73 103L87 102L93 104L97 108L96 110L90 109L91 111L88 118L88 122L84 122L85 123L83 123L83 127L79 125L78 128L77 126L76 129L72 129L68 132L66 138L70 154L72 149L76 157L81 154L80 148L84 144L84 138L86 140L88 138L90 140L91 138L99 176L98 179L100 198L99 199L97 196L93 194L90 196L89 201L92 204L91 206L93 211L84 194L86 188L85 189L85 187L83 186L84 184L81 177L81 173L83 172L83 170L81 175L80 170L73 161L74 159L67 164L69 164L68 167L66 168L63 164L64 166L62 166L58 162L54 154L54 145L56 144L56 142L54 144L53 143L54 141L51 142L53 142L52 146L46 144L51 149L54 150L53 154L50 154L52 159L50 159L49 162L51 162L52 165L50 168L52 166L54 169L53 175L50 178L49 175L46 184L43 185L41 181L45 177L41 181L41 177L40 181L38 179L37 174L40 170L37 170L37 179L35 179L37 180L36 185L32 184L32 182L31 184L33 186L31 186L31 188L29 187L31 178L30 176L32 172L30 174L30 181L28 174L28 186L26 188L25 181L23 188L24 189L22 189L21 185L20 186L19 175L15 163L16 160L14 158L14 154L16 151L10 150L12 144L7 140L8 134L11 133L11 124L5 123L-4 118L-5 115L-3 108L3 108L5 101L15 102L17 99L15 99L11 93L8 94L0 86L-2 87L-4 85L-2 78L2 76L4 72L6 72L3 69L2 70L3 66L5 68z">
                                        </path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path><path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M260 541L260 541zM255 529L254 530L254 528zM247 523L245 520L247 520L247 522zM247 521L246 520L248 520zM234 509L236 511L235 514L234 509zM229 507L232 510L232 514L229 517L228 507zM236 509L235 508L237 507zM229 490L228 491L228 488L229 489zM229 487L228 488L228 485L229 487zM219 479L219 479zM220 478L219 479L219 477L220 478zM261 476L260 477L261 476zM270 475L269 478L267 479L266 475L269 475zM260 474L260 474zM232 471L231 472L231 470zM268 470L270 473L267 470zM326 425L327 428L325 428L326 425zM319 415L323 419L322 420L320 419L319 415zM267 220L271 224L271 222L276 220L278 225L280 225L279 231L276 235L278 241L280 242L282 240L285 242L287 239L296 240L294 244L298 252L295 257L296 261L291 267L292 269L294 269L294 277L290 280L288 287L289 288L293 290L299 284L303 283L302 282L304 280L307 280L308 276L310 277L315 272L317 272L317 274L322 278L326 278L328 282L332 278L336 278L339 272L343 270L341 269L343 267L348 267L356 271L359 270L361 275L368 284L377 291L376 312L379 315L379 317L382 318L382 321L384 323L391 325L391 330L396 333L395 338L392 340L394 342L391 346L394 349L392 354L393 359L389 363L385 364L382 367L381 363L378 362L372 362L371 364L355 364L350 362L340 364L334 367L333 372L325 380L325 382L320 383L325 400L324 404L326 404L330 408L329 415L334 424L334 427L331 419L326 414L326 417L324 415L321 415L319 413L321 411L320 410L320 412L320 409L318 409L319 412L315 408L316 406L314 406L314 408L312 405L312 407L306 402L305 404L300 405L292 403L290 405L288 403L287 404L287 398L289 396L288 389L290 385L283 384L281 383L281 381L280 384L273 384L267 388L267 390L270 393L267 400L267 417L259 430L258 438L256 439L257 445L255 445L255 447L250 453L251 456L248 457L250 460L248 462L248 470L252 479L250 481L251 483L254 484L260 481L265 483L267 497L270 502L272 502L271 500L274 504L274 509L281 530L278 528L277 522L274 522L274 516L271 517L271 520L278 531L281 530L285 535L287 535L290 538L298 537L296 536L297 535L305 541L266 541L260 537L262 531L261 532L257 530L259 526L258 527L256 525L255 528L252 526L253 523L248 517L247 518L245 516L246 513L245 514L243 510L239 510L238 504L237 505L236 503L234 503L231 508L228 505L227 499L228 500L228 492L231 488L229 484L232 476L234 476L233 472L235 472L234 469L236 467L240 455L239 449L242 448L245 445L244 444L249 440L255 428L259 425L259 423L257 421L257 416L255 416L256 415L254 406L250 402L248 398L249 397L247 395L247 391L249 391L247 376L243 370L235 363L226 349L226 343L231 343L231 341L235 339L235 324L238 322L240 323L243 316L241 314L238 319L237 318L233 308L234 304L231 300L228 299L224 292L215 283L216 276L213 271L214 270L211 271L207 264L211 266L217 263L216 258L214 256L218 251L218 240L222 238L222 234L227 237L234 237L240 234L242 236L245 234L246 227L248 226L251 228L257 225L254 220L260 222L266 219z">
                                        </path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M272 541L274 541L272 541z"></path>
                                        <path stroke="#C8A56A" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#C8A56A" fill-opacity="1" fill-rule="evenodd" d="M223 470L222 469L223 470zM228 464L229 465L225 469L226 465zM226 464L227 461L227 463zM220 454L220 456L220 454zM227 454L226 453L227 454zM235 446L234 447L234 445zM220 445L219 446L221 445zM227 444L229 447L227 449L228 446L226 444L224 445L225 443L227 443zM232 443L232 442zM234 442L233 443L234 441zM228 436L229 437L228 436zM228 430L226 432L229 424L228 429zM210 424L210 424zM234 424L235 428L232 429L231 424L234 423zM223 425L223 427L222 422L223 424zM214 422L215 422zM229 422L229 421zM228 421L228 420zM234 419L236 420L233 422L233 417zM224 414L225 415L223 414L223 412L225 412L225 414zM224 410L222 412L221 411L224 410zM234 409L233 407L234 408zM228 407L227 406L229 407zM219 406L219 405zM231 406L232 407L232 405L233 407L230 411L229 403L231 404zM219 401L218 400L219 401zM229 394L229 397L228 391zM220 377L221 376zM117 370L117 370zM124 352L125 351zM215 336L214 337L214 335L215 336zM149 330L148 329L150 326L150 328zM140 329L141 324L146 319L144 325L141 328zM212 320L210 318L211 313L213 314L212 318zM124 257L126 259L124 261L119 257L123 257zM127 242L130 243L128 247L126 247L125 243L123 242L124 240L125 241zM120 235L117 230L120 234zM109 234L106 228L107 227L109 232zM213 17L215 17L217 21L219 20L225 26L224 31L226 32L225 33L227 35L229 42L231 41L231 38L238 41L237 50L239 54L239 66L237 73L238 78L234 78L238 84L236 86L234 85L230 92L225 91L225 95L223 98L215 104L217 110L211 113L211 120L213 120L215 122L214 123L216 124L216 127L211 133L214 135L217 132L226 128L241 128L242 129L237 132L237 136L240 137L240 144L242 145L241 148L243 149L242 151L250 155L252 153L256 154L257 157L254 158L252 162L253 168L250 171L248 177L260 180L266 179L266 186L267 188L271 189L270 192L272 195L275 192L281 194L292 186L294 189L294 193L286 198L284 197L279 207L282 208L280 210L276 209L271 214L270 222L266 219L260 222L255 220L257 224L256 226L252 228L249 226L247 227L245 230L245 234L242 236L241 234L235 237L228 237L223 234L222 238L218 241L219 242L217 244L218 251L214 255L216 257L217 263L211 266L209 266L208 264L207 265L211 271L214 270L213 271L216 278L216 285L233 302L234 305L232 308L235 311L237 318L238 319L241 314L243 316L240 323L237 322L236 324L234 324L235 339L234 341L231 340L231 342L227 344L226 343L226 349L236 365L247 375L249 386L247 395L249 397L248 398L250 402L254 406L256 415L255 416L257 416L257 421L259 423L259 425L255 428L250 440L239 449L240 455L234 466L234 457L232 450L233 448L235 448L235 445L238 444L238 429L239 426L240 427L242 425L240 425L240 422L241 423L238 426L236 425L236 423L238 422L235 421L238 420L236 416L238 414L234 414L235 412L238 411L236 409L238 402L235 397L235 391L233 390L233 386L232 387L228 379L226 371L227 375L225 383L225 369L219 357L221 355L222 357L222 355L220 355L220 353L220 355L218 355L218 344L216 342L216 328L212 325L214 313L216 311L208 313L205 308L205 304L204 305L203 303L203 300L205 299L203 299L201 295L199 295L200 294L197 292L197 290L195 292L197 294L197 302L195 304L195 308L191 312L186 314L183 312L183 306L181 307L184 314L180 317L177 316L178 317L176 320L175 319L171 322L170 320L170 324L163 332L160 332L162 322L160 328L160 326L159 327L159 330L157 330L156 328L156 324L158 322L155 325L155 329L153 331L150 330L150 326L152 324L151 325L151 321L154 319L150 321L151 324L147 329L145 327L148 325L149 322L144 327L147 321L146 319L148 317L148 313L146 312L147 315L145 319L145 317L144 319L143 318L141 323L137 326L137 312L139 313L142 299L141 298L143 294L145 294L145 287L142 283L141 272L138 271L141 270L137 266L137 262L134 260L137 259L136 260L134 257L132 257L133 245L130 250L129 248L131 254L130 257L123 252L119 245L120 243L126 248L131 244L131 242L129 242L125 238L127 236L123 236L122 234L123 232L125 232L121 232L120 229L118 231L116 227L111 227L114 233L112 229L112 234L108 228L108 226L110 226L111 224L108 226L109 221L111 219L109 221L110 216L106 226L103 224L107 222L101 213L100 212L102 215L102 223L96 213L94 212L92 204L89 201L90 196L93 194L94 196L98 197L98 199L100 198L99 181L102 177L105 179L105 181L107 181L109 176L112 175L110 165L112 159L111 155L116 155L118 147L118 138L115 130L116 129L119 132L124 131L126 133L130 133L133 135L134 134L139 122L138 121L146 110L147 104L144 101L145 96L151 91L154 87L154 83L157 80L155 76L155 69L157 65L163 63L165 60L167 60L180 49L192 46L199 53L201 53L202 52L196 44L196 41L201 35L207 32L206 28L212 16z">
                                        </path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M310 171L315 170L324 180L324 182L327 183L328 189L331 187L331 185L332 188L335 187L335 190L332 195L334 194L333 198L331 199L333 199L333 201L339 209L346 209L351 213L353 209L360 206L366 208L369 212L373 214L367 218L372 219L374 221L373 224L377 224L381 228L376 232L377 233L373 237L373 239L367 237L359 237L361 242L355 246L367 252L374 258L384 261L385 262L383 266L385 270L394 276L397 284L406 293L406 363L403 364L406 370L406 374L402 374L394 368L390 370L386 366L386 364L390 363L393 360L392 354L394 352L393 350L395 349L391 346L394 342L392 340L395 338L396 333L391 330L391 325L383 323L382 319L376 313L375 301L377 297L377 291L364 280L359 270L356 271L354 269L343 267L341 269L343 270L340 271L339 274L337 274L337 277L332 278L329 281L327 281L326 278L323 278L316 272L311 277L308 276L307 279L301 284L299 284L294 290L288 288L290 281L294 276L294 270L291 268L296 261L295 257L298 253L294 245L296 241L295 239L288 239L285 242L282 240L280 242L277 239L276 236L279 232L280 226L278 225L276 220L274 220L271 223L271 214L276 209L281 209L282 208L279 207L284 198L295 192L294 195L296 196L295 199L297 201L302 199L304 200L303 201L305 200L306 202L308 202L309 199L307 197L307 191L309 190L307 188L306 182L304 182L302 175L307 168L309 171z">
                                        </path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M354 455L354 454zM343 452L342 451L343 452zM342 448L342 450L340 448L342 448zM336 432L337 436L335 433L336 432zM337 432L337 431zM406 425L405 424L399 428L401 431L401 435L406 440L406 447L403 445L402 446L399 442L392 444L391 443L389 444L389 446L383 443L383 448L378 453L371 453L369 456L364 452L358 452L356 450L354 453L353 452L353 454L350 454L350 452L349 453L347 451L352 446L351 441L348 438L346 440L345 445L338 444L339 439L337 436L339 434L337 432L340 432L337 430L337 428L337 430L335 430L335 428L337 428L335 426L338 425L335 426L334 423L335 429L329 416L330 408L324 404L325 401L320 383L327 381L325 380L333 372L334 367L348 362L353 364L371 364L378 362L381 363L382 367L384 367L385 364L389 370L395 369L402 374L406 374L406 368L403 365L406 363z">
                                        </path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M406 471L406 471zM359 455L361 460L359 465L358 460L355 457L357 457L358 455zM390 149L394 154L398 155L400 158L406 156L406 230L405 229L403 231L401 235L402 236L399 239L400 246L395 254L399 259L398 262L399 259L401 265L406 271L406 470L400 465L406 471L406 481L394 485L389 492L384 496L375 498L378 495L380 495L378 495L380 493L376 493L378 471L383 467L384 469L384 467L377 460L373 462L372 461L370 457L371 456L369 457L371 453L377 453L382 449L383 443L388 446L390 443L398 442L401 446L402 445L405 447L406 440L401 436L401 429L399 429L403 427L404 424L406 425L406 293L397 284L392 273L388 273L388 271L387 272L385 270L383 267L385 263L384 261L373 258L365 251L355 246L360 242L358 237L360 238L364 236L372 239L381 228L377 224L374 225L374 221L372 219L367 218L369 216L370 217L372 214L362 206L355 208L352 213L346 210L339 209L333 201L333 199L331 199L334 194L333 195L335 187L333 188L332 185L329 189L327 187L327 183L324 182L324 180L318 175L316 170L318 170L323 162L329 164L332 166L333 169L336 170L343 161L347 166L348 163L351 161L357 168L360 161L363 160L366 164L371 160L374 161L377 158L377 154L379 152L385 150L388 147L389 148z">
                                        </path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M406 -50L406 156L401 158L398 155L394 155L394 153L388 147L385 150L378 152L377 158L374 161L371 160L367 164L364 163L363 160L361 161L359 163L358 168L351 161L347 166L343 161L336 170L331 165L325 162L323 162L318 170L310 171L307 168L304 174L302 174L307 185L307 198L309 199L308 202L306 202L305 200L304 201L303 199L297 201L295 199L296 196L294 195L295 193L293 186L281 194L276 192L272 195L270 193L271 189L266 187L266 179L260 180L248 176L250 171L253 169L252 163L254 158L257 157L256 154L253 153L250 155L242 151L242 144L240 144L240 142L242 141L240 137L237 136L237 132L242 129L241 128L226 128L214 135L211 133L216 127L214 121L211 120L211 113L217 110L215 108L215 105L218 100L220 101L225 96L225 91L230 92L234 85L238 85L234 79L238 77L237 73L239 66L239 55L237 51L238 41L232 38L230 42L228 41L227 34L225 33L225 27L219 20L217 21L215 17L212 16L210 22L208 22L207 24L204 23L202 20L198 21L196 17L190 14L188 19L186 14L190 11L190 9L188 5L185 3L185 1L181 3L181 1L185 -2L181 -3L180 -5L172 -5L170 -2L167 -3L165 1L163 -1L163 1L160 1L160 3L155 0L149 0L145 -4L137 1L139 3L137 6L129 8L125 12L118 12L114 15L105 25L100 27L101 31L96 34L93 35L91 33L91 35L88 35L86 37L77 36L78 32L72 30L69 27L64 31L57 28L51 28L53 25L52 23L42 21L37 22L31 26L22 35L22 37L16 43L17 48L12 45L14 34L11 28L8 27L-4 33L-9 32L-12 35L-22 35L-32 29L-34 30L-35 27L-38 27L-38 -50z">
                                        </path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path stroke="#818181" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="#e6e6e6" fill-opacity="1" fill-rule="evenodd" d="M0 0"></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M239 293L200 294"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M197,294a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M233 326L213 311"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M210,311a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M173 342L179 307"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M176,307a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M257 231L201 219"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#3388ff" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0" fill-rule="evenodd" d="M191,219a10,10 0 1,0 20,0 a10,10 0 1,0 -20,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M278 170L256 192"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M253,192a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M273 84L226 134"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M223,134a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M276 125L216 155"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#3388ff" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0" fill-rule="evenodd" d="M206,155a10,10 0 1,0 20,0 a10,10 0 1,0 -20,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M212 46L212 43"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#3388ff" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0" fill-rule="evenodd" d="M202,43a10,10 0 1,0 20,0 a10,10 0 1,0 -20,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M238 97L207 165"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M204,165a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M122 86L194 172"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M191,172a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M118 130L180 183"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M177,183a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M94 161L151 201"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M148,201a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M118 220L114 214"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M111,214a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M119 222L119 228"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M116,228a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M202 245L185 227"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#555" fill-opacity="1" fill-rule="evenodd" d="M182,227a3,3 0 1,0 6,0 a3,3 0 1,0 -6,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M95 270L139 266"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#3388ff" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0" fill-rule="evenodd" d="M129,266a10,10 0 1,0 20,0 a10,10 0 1,0 -20,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M118 373L151 308"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#3388ff" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0" fill-rule="evenodd" d="M141,308a10,10 0 1,0 20,0 a10,10 0 1,0 -20,0 "></path>
                                        <path class="offset-marker-line leaflet-interactive" stroke="#555" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M120 304L170 283"></path>
                                        <path class="offset-marker-circle leaflet-interactive" stroke="#3388ff" stroke-opacity="0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0" fill-rule="evenodd" d="M160,283a10,10 0 1,0 20,0 a10,10 0 1,0 -20,0 "></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="leaflet-pane leaflet-marker-pane">
                                <div class="leaflet-marker-icon label-marker style-xl noBg leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 98px; height: 34px; transform: translate3d(204px, 205px, 0px); z-index: 205; display: block;">
                                    <div class="labelText" style="transform:rotate(0deg);">Myanmar</div>
                                </div>
                                <div class="leaflet-marker-icon label-marker style-small noBg leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 57px; height: 23px; transform: translate3d(287px, 368px, 0px); z-index: 368; display: block;">
                                    <div class="labelText" style="transform:rotate(0deg);">Thailand</div>
                                </div>
                                <div class="leaflet-marker-icon label-marker style-small noBg leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 33px; height: 23px; transform: translate3d(338px, 230px, 0px); z-index: 230; display: block;">
                                    <div class="labelText" style="transform:rotate(0deg);">Laos</div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg right leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 87px; height: 44px; transform: translate3d(283px, 283px, 0px); z-index: 293; display: block;">
                                    <div class="labelText"><a href="/myanmar-holidays/travel-guides/kyaiktiyo-golden-rock">Golden Rock<br>(Kyaiktiyo)</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg bottom right leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 86px; height: 26px; transform: translate3d(275px, 338px, 0px); z-index: 326; display: block;">
                                    <div class="labelText"><a href="/myanmar-holidays/travel-guides/mawlamyine">Mawlamyine</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg bottom leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 72px; height: 44px; transform: translate3d(180px, 363px, 0px); z-index: 342; display: block;">
                                    <div class="labelText"><a href="/myanmar-holidays/travel-guides/yangon">Yangon<br>(Rangoon)</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-d style-medium bBg right leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 62px; height: 26px; transform: translate3d(257px, 231px, 0px); z-index: 231; display: block;">
                                    <div class="labelText"><a href="/myanmar-holidays/travel-guides/inle-lake">Inle Lake</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg right leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 68px; height: 26px; transform: translate3d(311px, 170px, 0px); z-index: 170; display: block;">
                                    <div class="labelText"><a href="/myanmar-holidays/travel-guides/kengtung">Kengtung</a></div>
                                </div>
                                <div class="leaflet-marker-icon label-marker style-medium noBg leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 88px; height: 62px; transform: translate3d(173px, 432px, 0px); z-index: 432; display: block;">
                                    <div class="labelText" style="transform:rotate(0deg);"><a style="color: #4c4c4c;" href="/myanmar-holidays/travel-guides/myeik-archipelago">Mergui <br>(Myeik)<br>Archipelago</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg top right leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 42px; height: 26px; transform: translate3d(273px, 84px, 0px); z-index: 84; display: block;">
                                    <div class="labelText"><a href="/myanmar-holidays/travel-guides/muse">Muse</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-d style-medium bBg right leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 50px; height: 62px; transform: translate3d(300px, 125px, 0px); z-index: 125; display: block;">
                                    <div class="labelText"><a href="/myanmar-holidays/travel-guides/shan-state-train">Hill<br>station<br>train</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-d style-medium bBg right leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 44px; height: 26px; transform: translate3d(212px, 46px, 0px); z-index: 46; display: block;">
                                    <div class="labelText"><a href="/myanmar-holidays/travel-guides/putao">Putao</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg top left leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 53px; height: 26px; transform: translate3d(238px, 97px, 0px); z-index: 97; display: block;">
                                    <div class="labelText"><a href="/myanmar-holidays/travel-guides/hsipaw">Hsipaw</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg top left leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 97px; height: 44px; transform: translate3d(122px, 86px, 0px); z-index: 86; display: block;">
                                    <div class="labelText"><a href="/myanmar-holidays/travel-guides/maymyo">Maymyo<br>(Pyin Oo Lwin)</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg top left leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 68px; height: 26px; transform: translate3d(118px, 130px, 0px); z-index: 130; display: block;">
                                    <div class="labelText"><a href="/myanmar-holidays/travel-guides/mandalay">Mandalay</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg left leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 55px; height: 44px; transform: translate3d(94px, 161px, 0px); z-index: 161; display: block;">
                                    <div class="labelText"><a href="/myanmar-holidays/travel-guides/bagan" style="outline: none;">Bagan <br>(Pagan)</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg top left leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 61px; height: 26px; transform: translate3d(118px, 220px, 0px); z-index: 220; display: block;">
                                    <div class="labelText"><a href="/myanmar-holidays/travel-guides/mrauk-u">Mrauk U</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg bottom leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 46px; height: 26px; transform: translate3d(119px, 234px, 0px); z-index: 222; display: block;">
                                    <div class="labelText"><a href="/myanmar-holidays/travel-guides/sittwe">Sittwe</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-a style-medium bBg bottom right leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 44px; height: 26px; transform: translate3d(202px, 258px, 0px); z-index: 245; display: block;">
                                    <div class="labelText"><a href="/myanmar-holidays/travel-guides/kalaw">Kalaw</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-d style-medium bBg left leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 56px; height: 44px; transform: translate3d(95px, 270px, 0px); z-index: 270; display: block;">
                                    <div class="labelText"><a href="/myanmar-holidays/travel-guides/ngapali-beach">Ngapali<br>Beach</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-d style-medium bBg bottom left leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 87px; height: 44px; transform: translate3d(117px, 388px, 0px); z-index: 373; display: block;">
                                    <div class="labelText"><a href="/myanmar-holidays/travel-guides/ngwe-saung">Ngwe Saung<br>&amp; Pathein</a></div>
                                </div>
                                <div class="leaflet-marker-icon offset-marker style-d style-medium bBg bottom left leaflet-zoom-hide leaflet-interactive" style="margin: 0px; width: 82px; height: 44px; transform: translate3d(120px, 320px, 0px); z-index: 304; display: block;">
                                    <div class="labelText"><a href="/myanmar-holidays/travel-guides/ayeyarwady">Ayeyarwady<br>River</a></div>
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
            <h2>Best Myanmar Tours<span class="line"></span></h2>
            <p>Top Choices by Travel Experts &amp; Excellent feedback from our travellers</p>
            <div id="detail"><a href="/tours/myanmar/">View All <font>»</font></a></div>
        </div>
        <div id="scroll-tours">
            <div id="box-best-tour">
                @foreach(get_list_tours(3,44) as $tour)
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