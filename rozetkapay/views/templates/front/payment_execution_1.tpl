{extends file='page.tpl'}

{block name="page_content"}
    <div class="row">

        <div class="col-sm-6">
            <a href="{$urlPay}" class="button_large">{$text_button_pay}</a>
        </div>
    </div>
    <div class="col-sm-6">
        {if $isPay }
            <div id="rozetkapay_pay">
                <img src="{$payQRcode}">
            </div>
        {/if}
    </div>

{if !$isPay }
    <div class="row" style="color: red">
        {$message}

    </div>
{/if}

{/block}