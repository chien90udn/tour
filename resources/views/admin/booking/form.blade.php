@can('booking.index')
    @section('back', route('admin.booking.index'))
@endcan
<div class="row">
    <div class="col-xs-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Information</h3>
            </div>
            <div class="panel-body">
                <table width="566" bgcolor="#EAF7FD" style="border:1px #c31f41 solid" bordercolor="#c31f41" cellspacing="10">
                    <tbody><tr>
                      <td width="92">Tour name : </td>
                      <td width="449"> <strong><a href="{{ @$booking->tours->link }}" target="_blank" style="text-decoration:underline; color:#006699; font-family:Verdana, Arial, Helvetica, sans-serif">{{ @$booking->tours->name ?: $booking->cruise->name }} </a></strong></td>
                    </tr>
                    <tr>
                      <td>Guest name :</td>
                      <td style="color:#CC3300; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;"><strong>{{ @$booking->name }}</strong></td>
                    </tr>
                    <tr>
                      <td>Country:</td>
                      <td style="color:#CC3300; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;"><strong>{{ @$booking->country }}</strong></td>
                    </tr>
                    <tr>
                      <td>Email:</td>
                      <td style="color:#CC3300; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;"><strong>{{ @$booking->email }}</strong></td>
                    </tr>
                      <tr>
                      <td>Phone:</td>
                      <td style="color:#CC3300; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;"><strong>{{ @$booking->phone }}</strong></td>
                    </tr>
                    <tr>
                      <td>Date arrial:</td>
                      <td style="color:#CC3300; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;">
                          <strong>
                          {{ @$booking->date_arr ? @$booking->date_arr : @$booking->date_flex . '(Flexible Date)'      }}        </strong>
                      </td>
                    </tr>
                    <tr>
                      <td>Tour Class:</td>
                      <td style="color:#CC3300; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;"><strong>{{ @$booking->class }}</strong></td>
                    </tr>
                    <tr>
                      <td>Adults :</td>
                    <td style="color:#CC3300; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;"><strong> {{ @$booking->adult }}</strong></td>
                    </tr>
                    <tr>
                      <td>Childrent :</td>
                      <td style="color:#CC3300; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;"><strong>{{ @$booking->child }}</strong></td>
                    </tr>
                    <tr>
                      <td>Babies :</td>
                      <td style="color:#CC3300; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;"><strong>{{ @$booking->babies }}</strong></td>
                    </tr>
                    <tr>
                      <td>Other request:</td>
                      <td style="color:#CC3300; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;"><strong>{{ @$booking->info }}</strong></td>
                    </tr>
                    <tr>
                      <td>Please...:</td>
                      <td style="color:#CC3300; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;"><strong>Send me via email</strong></td>
                    </tr>
                    <tr>
                      <td>IP:</td>
                      <td style="color:#CC3300; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;"><strong>{{ @@$booking->ip_client }}</strong></td>
                    </tr>
                  </tbody></table>
            </div>
        </div>
    </div>
</div>