@can('pages.index')
    @section('back', route('admin.customized.index'))
@endcan
<div class="row">
    <div class="col-xs-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Information</h3>
            </div>
            <div class="panel-body">
                @php $contact = json_decode($customized->content);@endphp
                {{-- {{ dd($contact) }} --}}
                <table width="566" bgcolor="#EAF7FD" border="1" bordercolor="#006699" style="color:#006699">
                    <tbody><tr>
                        <td width="92">Subject : </td>
                        <td width="449"> <strong>{{ @$contact->info->subject }}</strong></td>
                    </tr>
                    <tr>
                        <td>Guest name :</td>
                        <td><strong>{{ @$contact->info->yourname }}</strong></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><strong>{{ @$contact->info->email }}</strong></td>
                    </tr>

                    <tr>
                        <td>Number of travelers:</td>
                        <td><strong>{{ @$contact->info->adult }} Person</strong></td>
                    </tr>

                    <tr>
                        <td>Many days:</td>
                        <td><strong>{{ @$contact->info->lengthoftrip }} Day</strong></td>
                    </tr>

                    <tr>
                        <td>Hotel Category:</td>
                        <td><strong>{{ @$contact->info->hotelcategory }}</strong></td>
                    </tr>
                        
                    <tr>
                        <td>Arrival date:</td>
                        <td><strong>{{ @$contact->datepicker }}</strong></td>
                    </tr>
                    <tr>
                        <td>Country:</td>
                        <td><strong>{{ @$contact->country }}</strong></td>
                    </tr>
                    <tr>
                        <td>Destination:</td>
                        
                        <td>
                        @foreach(@$contact->destination as $value)<strong style="text-transform: capitalize;">{{ @$value }} :</strong>
                            @php @$check = (array)$contact; @endphp
                            @if(isset($check['check_'.$value]))
                                @foreach(@$check['check_'.$value] as $item)
                                    {{ @$item }} @if(!$loop->last) , @else </br> @endif
                                @endforeach
                            @endif
                        @endforeach
                        </td>
                        
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td><strong>{{ @$contact->info->phonenumber }}</strong></td>
                    </tr>
                    <tr>
                        <td>Request:</td>
                        <td><strong>{!! @$contact->info->hhmess !!}</strong></td>
                    </tr>
                    <tr>
                        <td>IP:</td>
                        <td><strong>{!! @$contact->info->laip !!}</strong></td>
                    </tr>
                    <tr>
                        <td>Please...:</td>
                        <td style="color:#CC3300; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;"><strong>Send me via email</strong></td>
                    </tr>
                    </tbody></table>
            </div>
        </div>
    </div>
</div>