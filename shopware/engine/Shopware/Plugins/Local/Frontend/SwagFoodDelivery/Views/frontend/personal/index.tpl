{extends file='frontend/index/index.tpl'}

{block name='frontend_index_content_meals' prepend}
    <div id="thongbao"></div>
<form action="{url controller='personal' action='signin'}?XDEBUG_SESSION_START=TEST1" method="post">
    <input type="text" name="email" value="moneymoney3110@gmail.com" />
    <br>
    <input type="password" name="password" value="anhlinhmoney" />
    <br>
    <input value="Login" type="submit">
</form>
{/block}

{block name='frontend_index_essen_javascript_files' append}
    <script type="text/javascript">

        $(document).ready(function(){

            $('#linhkhung').click(function(){
                var url = 'http://five.shopware.vn/personal/login';
                alert(url);
                $.ajax({
                    url: url,
                    method:'get',
                    success: function(msg){
                        $('#thongbao').html(msg);
                    }
                });
            });

        });


    </script>

{/block}