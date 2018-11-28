@can('pages.index')
    @section('back', route('admin.contact.index'))
@endcan
<div class="row">
    <div class="col-xs-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Information</h3>
            </div>
            <div class="panel-body">
                <table width="566" bgcolor="#EAF7FD" border="1" bordercolor="#006699" style="color:#006699">
                    <tbody><tr>
                        <td width="92">Subject : </td>
                        <td width="449"> <strong>{{ $contact->subject }}</strong></td>
                    </tr>
                    <tr>
                        <td>Guest name :</td>
                        <td><strong>{{ @$contact->name }}</strong></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><strong>{{ @$contact->email }}</strong></td>
                    </tr>
                    <tr>
                        <td>Country:</td>
                        <td><strong>{{ @$contact->country }}</strong></td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td><strong>{{ @$contact->phone }}</strong></td>
                    </tr>
                    <tr>
                        <td>Request:</td>
                        <td><strong>{!! @$contact->info !!}</strong></td>
                    </tr>
                    <tr>
                        <td>IP:</td>
                        <td><strong>{!! @$contact->ip_client !!}</strong></td>
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