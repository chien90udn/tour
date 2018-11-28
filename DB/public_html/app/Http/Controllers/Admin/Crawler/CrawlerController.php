<?php

namespace App\Http\Controllers\Admin\Crawler;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use App\Cruises;

class CrawlerController extends Controller
{
    protected $client;
    protected $header;
    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->header = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Host' => 'myip.ms',
            'Connection' => 'keep-alive',
            'Content-Length' => '19',
            'Accept' => 'text/html, */*; q=0.01',
            'Origin' => 'https://myip.ms',
            'X-Requested-With' => 'XMLHttpRequest',
            'User-Agent' => 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36',
            'DNT' => '1',
            'Referer' => 'https://myip.ms/browse/sites/1/ipID/23.227.38.32/ipIDii/23.227.38.32',
            'Accept-Encoding' => 'gzip, deflate, br',
            'Accept-Language' => 'en-US,en;q=0.9',
            'Cookie' => 's2_csrf_cookie_name=807eb3599ac9c19b24ae80fb8363ecff; s2_csrf_cookie_name=807eb3599ac9c19b24ae80fb8363ecff; sw=158.3; _ga=GA1.2.1812444001.1516257237; _gid=GA1.2.1784215843.1516257237; sh=23.5; __unam=737437c-16107f95d68-6b2c47e0-4',
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('admin.crawler.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Crawler $crawler)
    {
        return view('admin.crawler.create',compact('cralwer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // try {
        //     $res = $this->client->request('GET', 'https://myip.ms/browse/sites/1/ipID/23.227.38.32/ipIDii/23.227.38.32');
        //     $body = (string)$res->getBody();
        //     if(preg_match("/paging_init\('sites', 'sites_tbl', '\/ipID\/23\.227\.38\.32\/ipIDii\/23\.227\.38\.32', true, '1', '(.*?)', {sortCol: '6', sortAsc: '1'}\)/is", $body, $page)){
        //         for ($i=2; $i <= $page[1]; $i++) { 
        //             if($i == 1) {
        //                 $this->getDomain($body);
        //             } else {
                        
        //                 $this->getDomain($body);
        //             }
        //         }
        //         // return response()->json([
        //         //     'status' => 'ok',
        //         //     'data' => collect($result)->map(function ($crawler) {
        //         //         return $crawler->domain;
        //         //     })->implode("\n"),
        //         // ]);
        //     }
        // } catch (Exception $e) {
        //     dd($e);
        // }
    }

    public function getList(Request $request){
        try {
            $res = $this->client->request('GET', $request->get('link'));
            $body = (string)$res->getBody();
            if(preg_match_all("/<a  href=\"(.*?)\" title=\"(.*?)\">([^<]*)<\/a>/is", $body, $page)){
                $link = collect($page[1])->unique()->values()->all();
                return response(['num' => count($link), 'link' => $link]);
            }
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function getCruises(Request $request){
        try {
            $res = $this->client->request('GET', $request->get('link'));
            $body = (string)$res->getBody();
            $dom = new \DOMDocument();
            @$dom->loadHTML($body);
            $xpath = new \DOMXPath($dom);
            
            $name = $xpath->query("//*[@id=\"wrap\"]/div[2]/div/div/section[1]/div/div[2]/div[1]/div[1]/h1")->item(0)->nodeValue;
            
            $price =  str_replace('$','',$xpath->query("//*[@id=\"price\"]/span")->item(0)->nodeValue);
            
            $grade = $xpath->query("//*[@id=\"wrap\"]/div[2]/div/div/section[1]/div/div[2]/div[1]/div[1]/address/span/i")->length;

            $result = $xpath->query("//*[@class=\"control-group\"]");
            
            $facilities = [];
            foreach ($result as $key => $node) {
                if(preg_match("/<label class=\"control-label\"><strong>(.*?)<\/strong><\/label>/is", $node->ownerDocument->saveHtml($node), $nameFac)){
                    preg_match_all("/<span>(.*?)<\/span>/is", $node->ownerDocument->saveHtml($node), $value);
                    $facilities += [
                        $key => [
                            $nameFac[1] => $value[1],
                        ],
                    ];
                }
            }

            $description = str_limit($xpath->query("//*[@id=\"info-review\"]")->item(0)->textContent,191);

            $detail = $xpath->query("//*[@class=\"customer-like\"]")->item(0)->textContent;

            $photo = $xpath->query("//*[@class=\"detail-slider\"]/div/div/div/a[1]")->item(0)->getAttribute('href');

            
            $data['name'] = $name;
            $data['name_link'] = str_slug($name,'-');
            $data['price'] = $price;
            $data['grade'] = $grade ? $grade : 2;
            $data['facilities'] = json_encode($facilities);
            $data['description'] = $description;
            $data['description1'] = $description;
            $data['detail'] = $detail;
            $data['photo'] = $photo;
            $data['photo_e'] = $photo;
            $data['type_hotel'] = 0;
            $data['number_hotel'] = 0;
            $data['location'] = 'Quang Ninh';
            $data['address'] = 'Ha Long, Quang Ninh';
            $data['cat_id'] = 1;

            if($cruises = Cruises::create($data))
            {
                return response()->json([
                    'status' => 'ok',
                    'data' => $cruises->name,
                ]);
            }
        } catch (Exception $e) {
            dd($e);  
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function activation(Request $request, Crawler $crawler)
    {
        if ($crawler->update(['activated' => false])) {
            if ($request->wantsJson()) {
                return response()->json([
                    'message' => 'Đã cập nhật thành công.'
                ]);
            }
            return back()->with('status', 'Đã cập nhật trạng thái thành công.');
        }
        abort(406);
    }
}
