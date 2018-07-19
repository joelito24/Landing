@include('emails.complements.header')
<tr>
    <td class="content" align="left" style="padding-top:12px;padding-bottom:12px;background-color:#ffffff;border:1px solid #EEEEEE;border-radius:5px;">
        <table width="600" border="0" cellpadding="0" cellspacing="0" class="force-row" style="width: 600px;">
            <tr>
                <td class="content-wrapper" align="center" style="padding-left:24px;padding-right:24px;padding-top:24px;">
                    <a class="padding logo" href="{{route('home')}}" target="_blank">
                        <img style="margin-bottom:20px; width:200px;" class="logo" src="{{ asset('front/img/header/logotipo.png') }}" />
                    </a>
                    <br><br>
                    <div class="title" style="font-family: Helvetica, Arial, sans-serif;font-size: 20px;font-weight: lighter; color: #374550;">{{$data['title']}}</div>
                    <br><br>
                    <div style="text-align: left;font-family:Helvetica, Arial, sans-serif;font-size:14px;">
                        <p>Hola {{$data['name']}},</p>

                        <p>Muchas gracias por tu interés.</p>
                        <p>Te adjuntamos el Whitepaper para que lo tengas a tu total disponibilidad.</p>
                        <p>¡Qué lo disfrutes!</p>
                        <p>Cualquier duda o comentario, no dudes en contactarnos.</p>
                        <br>
                        <p>Saludos,</p>
                        <p>Thatzad.</p>
                    </div>

                    {{--<div><p style="font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:22px;text-align:left;color:#333333;margin-top:12px"><br>--}}
                            {{--<b>@lang('msg.email_text.name'):</b> {{$data['name']}}<br/>--}}
                            {{--<b>@lang('msg.email_text.email'):</b> {{$data['email']}}<br/>--}}
                            {{--<b>@lang('msg.email_text.mesage'):</b> {{$data['consulta']}}<br/>--}}
                        {{--</p><br>--}}
                    {{--</div>--}}
                </td>
            </tr>
        </table>
    </td>
</tr>
@include('emails.complements.footer')