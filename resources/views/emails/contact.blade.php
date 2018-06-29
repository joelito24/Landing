@include('emails.complements.header')
<tr>
    <td class="content" align="left" style="padding-top:12px;padding-bottom:12px;background-color:#ffffff;border:1px solid #EEEEEE;border-radius:5px;">
        <table width="600" border="0" cellpadding="0" cellspacing="0" class="force-row" style="width: 600px;">
            <tr>
                <td class="content-wrapper" align="center" style="padding-left:24px;padding-right:24px;padding-top:24px;">
                    <a class="padding logo" href="{{route('home')}}" target="_blank">
                        <img style="margin-bottom:20px;" class="logo" src="{{ asset('front/images/mail/logo.png') }}" alt="{{$data['project_name']}}" />
                    </a>
                    <br><br>
                    <div class="title" style="font-family: Helvetica, Arial, sans-serif;font-size: 33px;font-weight: lighter; color: #374550;">{{$data['title']}}</div>
                    <br><br>
                    <div><p style="font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:22px;text-align:left;color:#333333;margin-top:12px"><br>
                          <b>@lang('msg.email_text.name'):</b> {{$data['name']}}<br/>
                          <b>@lang('msg.email_text.phone'):</b> {{$data['telephone']}}<br/>
                          <b>@lang('msg.email_text.email'):</b> {{$data['email']}}<br/>
                          <b>@lang('msg.email_text.mesage'):</b> {{$data['message']}}<br/>
                        </p><br>
                    </div>
                </td>
            </tr>
        </table>
    </td>
</tr>
@include('emails.complements.footer')